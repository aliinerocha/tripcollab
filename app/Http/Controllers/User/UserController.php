<?php

namespace App\Http\Controllers\User;

Use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Trip;
use App\Friendship;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    private $trip;

    public function __construct(Trip $trip) {
        $this->trip = $trip;
    }

    public function home(){

        $user = auth()->user();

        $footer = 'true';

        return view('/home', compact('footer','user'));
    }

    public function show($id){

        $user = User::find($id);

        $footer = 'true';

        if (auth()->user()->id == $id)
        {
        return view('/home', compact('footer','user'));
        }

        return view('User/show', compact('footer','user'));
    }

    public function edit($id){

        $user = User::find($id);

        $footer = 'true';
        return view('User/edit', compact('footer', 'user'));
    }

    public function update(Request $request, $id){

        $data = $request->all();

        $user = User::find($id);

        if ($request->hasfile('background_photo')){
            $name = $user->id.'.'.Str::kebab($user->name).'.cover';
            $extension = $request->background_photo->extension();
            $nameFile = "{$name}.{$extension}";
            $data['background_photo'] = $nameFile;
            $upload = $request->background_photo->storeAs('public/usersBackgroundPhotos', $nameFile);
        }

        if ($request->hasfile('photo')){
            $name = $user->id.'.'.Str::kebab($user->name).'.profile';
            $extension = $request->photo->extension();
            $nameFile = "{$name}.{$extension}";
            $data['photo'] = $nameFile;
            $upload = $request->photo->storeAs('public/userPhotos', $nameFile);
        }

        $update = $user->update($data);

        return redirect()->route('home');
    }

    public function listGroupsAndTrips() {

        $confirmedTrips = DB::table('trip_user')
        ->where('user_id', auth()->user()->id)
        ->join('trips','trip_user.trip_id','=','trips.id')
        ->get();

        $footer = 'true';

        return view('Groups and Trips/index', compact('footer', 'confirmedTrips'));
    }

    public function addFriend($requestedUserID) {

        $friendship = Friendship::create([
            'requester_user_id' => auth()->user()->id,
            'requested_user_id' => $requestedUserID
        ]);

        dd($friendship);
    }

    public function acceptFriend($requesterUserID) {
        $friendship = Friendship::where('requester_user_id' ,$requesterUserID )
        ->where('requested_user_id', $this->id)
        ->first();

        if($friendship)
        {
            $friendship->update([
                'status' => 1
            ]);

            return $friendship;

        }

        return (!$friendship);

    }

    public function destroy($id){
        $user = User::find($id);
        $user->delete();

        return redirect('/');
    }
}
