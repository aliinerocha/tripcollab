<?php

namespace App\Http\Controllers\Trip;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Trip;
use App\Interest;
use App\Group;
use Illuminate\Support\Facades\DB;


class TripController extends Controller
{
    private $trip;

    public function __construct(Trip $trip, Interest $interests, Group $groups)
    {
        $this->trip = $trip;
        $this->interests = $interests;
        $this->groups = $groups;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $footer = 'true';
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

        if($request->hasFile('photo'))
        {
            $image = $request->file('photo');
            $data['photo'] = $image->store('trips', 'public');
        } else {
            $data['photo'] = 'nophoto';
        }

        $store = $this->trip->create($data);
        return redirect()->route('trip.create');
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
        $admin = $trip->admin()->first()->name;
        $footer = 'true';
        return view('/Groups and Trips/Trip/show', compact('footer', 'trip', 'admin'));
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
        // $selectedInterests = $this->interests->trip()->where('trip_id', $id); // Não funcionou
        $trip = $this->trip->findOrFail($id);
        $selectedInterests = DB::table('interest_trip')->where('trip_id', $id)->get();
        $groups = $this->groups->all(['id','name']);
        $footer = 'true';
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
        } else {
            $data['photo'] = 'nophoto';
        }

        $trip->update($data);

        $trip->interest()->sync($interests);

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
        $trip->delete();

        return redirect()->route('/home');
    }
}
