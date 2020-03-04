<?php

namespace App\Http\Controllers\Trip;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Trip;
use App\Interest;
use App\Group;
use App\User;
use Illuminate\Support\Facades\DB;


class TripController extends Controller
{
    private $trip;

    public function __construct(Trip $trip, Interest $interests, Group $groups, User $user)
    {
        $this->trip = $trip;
        $this->interests = $interests;
        $this->groups = $groups;
        $this->user = $user;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($trip)
    {
        $user = auth()->user();

        $admin = DB::table('trips')
        ->where('admin', auth()->user()->id)
        ->get();

        $trips = DB::table('trip_user')
        ->where('user_id', auth()->user()->id)
        ->join('trips','trip_user.trip_id','=','trips.id')
        ->get();

        return view('/Groups and Trips/Trip/index', compact('admin','trips','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $footer = 'true';

        $interests = Interest::get();

        return view('/Groups and Trips/Trip/create', compact('footer','interests'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $user = auth()->user();

        if($request->hasFile('photo'))
        {
            $image = $request->file('photo');
            $data['photo'] = $image->store('trips', 'public');
        } else {
            $data['photo'] = 'nophoto';
        }

        $trip = $this->trip->create($data);

        $trip->user()->attach($user);

        $trip->interest()->sync($request->interest, false);

        $update = DB::table('trip_user')
        ->where('user_id', auth()->user()->id)
        ->where('trip_id', $trip->id)
        ->update(['status' => '1']);

        $id = $trip->id;

        flash("Viagem criada com sucesso")->success();

        return redirect()->route('trip.show', compact('id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trip  $Trip
     * @return \Illuminate\Http\Response
     */
    public function show($trip)
    {
        $trip = $this->trip->findOrFail($trip);

        $interests = DB::table('interest_trip')
        ->where('trip_id', $trip->id)
        ->join('interests','interest_trip.interest_id','=','interests.id')
        ->get();

        $confirmedMembers = DB::table('trip_user')
        ->where('trip_id', $trip->id)
        ->where('status', 1)
        ->join('users','trip_user.user_id','=','users.id')
        ->get(['user_id','name','photo']);

        $admin = $trip->admin()->first(['id','name','photo']);

        if(!($trip->group_id == null))
        {
            $group = $trip->group()->first(['id','name']);
        } else {
            $group = null;
        }

        $user = auth()->user(['id', 'name']);

        $userStatus = DB::table('trip_user')->where([
            ['user_id', auth()->user()->id],
            ['trip_id', $trip->id]
        ])->first();

        return view('/Groups and Trips/Trip/show', compact('footer', 'trip', 'admin', 'user', 'userStatus', 'interests', 'confirmedMembers', 'group'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trip  $Trip
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $interests = $this->interests->all(['id', 'name']);

        $trip = $this->trip->findOrFail($id);

        $selectedInterests = DB::table('interest_trip')->where('trip_id', $id)->get();

        $groups = $this->groups->all(['id','name']);

        return view('/Groups and Trips/Trip/edit', compact('footer', 'trip', 'interests', 'selectedInterests', 'groups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trip  $Trip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $interests = $request->get('interests', null);
        $trip = $this->trip->find($id);

        if($request->hasFile('photo')) {
            $image = $request->file('photo');
            $data['photo'] = $image->store('trips', 'public');
        }

        $trip->update($data);

        $trip->interest()->sync($interests);

        flash("Viagem editada com sucesso")->success();

        return redirect()->route('trip.edit', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trip = $this->trip->find($id);

        $trip->interest()->detach();

        $trip->user()->detach();

        $trip->delete();

        $id = auth()->user()->id;

        flash('Viagem excluída com sucesso');

        return redirect()->route('user.trips.index', compact('id'));
    }

    public function confirmPresence($tripId, $userId) {

        $trip = $this->trip->find($tripId);

        $user = $this->user->find($userId);

        $trip->user()->attach($user);

        if($trip->visibility == 1)
        {
            $tripStatusAutoAccept =DB::table('trip_user')
            ->where('user_id', $user->id)
            ->where('trip_id', $trip->id)
            ->update([
                'status' => 1,
            ]);
        }

        return redirect()->route('trip.show', ['id' => $tripId]);
    }

    public function acceptPresence($tripId, $userId) {

        $trip = $this->trip->find($tripId);

        $user = $this->user->find($userId);

        $memberAccept =DB::table('trip_user')
            ->where('user_id', $user->id)
            ->where('trip_id', $trip->id)
            ->update([
                'status' => 1,
            ]);

        return redirect()->back();

    }

    public function cancelPresence($tripId, $userId) {

        $trip = $this->trip->find($tripId);

        $user = $this->user->find($userId);

        $trip->user()->detach($user);

        return redirect()->back();
    }

    public function tripMembersIndex ($tripId) {

        $trip = $this->trip->find($tripId);
        $user = auth()->user();

        $tripMembers = DB::table('trip_user')
        ->where('trip_id', $trip->id)
        ->where('status', 1)
        ->join('users','trip_user.user_id','=','users.id')
        ->get();

        $tripMembersRequests = DB::table('trip_user')
        ->where('trip_id', $trip->id)
        ->where('status', 0)
        ->join('users','trip_user.user_id','=','users.id')
        ->get();

        return view('/Groups and Trips/Trip/Members/index', compact('trip','user','tripMembers', 'tripMembersRequests'));
    }
}
