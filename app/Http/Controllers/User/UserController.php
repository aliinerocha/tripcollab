<?php

namespace App\Http\Controllers\User;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Trip;
use App\Friendship;
use App\Interest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class UserController extends Controller
{
    private $trip;
    private $interests;

    public function __construct(Trip $trip, Interest $interests)
    {
        $this->trip = $trip;
        $this->interests = $interests;
    }

    public function home()
    {
        $user = auth()->user();

        $interests = DB::table('interest_user')
        ->where('user_id', $user->id)
        ->join('interests','interest_user.interest_id','=','interests.id')
        ->get();

        $rawFriendList = Friendship::where('status','=', 1)
        ->where(function ($query) {
            $query->where('requester_user_id','=', auth()->user()->id)
            ->orWhere('requested_user_id', auth()->user()->id);
        });

        $firstHalfFriendlist = $rawFriendList->join('users as a','friendships.requester_user_id','=', 'a.id')->get();

        $secondHalfFriendlist = $rawFriendList->join('users as b','friendships.requested_user_id','=', 'b.id')->get();

        $friendlist = $firstHalfFriendlist->merge($secondHalfFriendlist);

        $authUser = $friendlist->search(function ($item) {
            return $item->id == auth()->user()->id;
        });

        if(!$friendlist->isEmpty())
        {
           $friendlist->pull($authUser);
        }


        $footer = 'true';

        return view('/home', compact('footer','user','friendlist','interests'));
    }

    public function show($id)
    {
        $user = User::find($id);

        if (auth()->user()->id == $id)
        {
            return redirect()->route('home');
        }

        $interests = DB::table('interest_user')
        ->where('user_id', $user->id)
        ->join('interests','interest_user.interest_id','=','interests.id')
        ->get();

        $friendRequestor = Friendship::where('requester_user_id', auth()->user()->id)
        ->where('requested_user_id', $id)
        ->first();

        $friendRequested = Friendship::where('requester_user_id', $id)
        ->where('requested_user_id', auth()->user()->id)
        ->first();

        if ($friendRequestor)
        {
            $friendshipExists = 1;
            $friendship = $friendRequestor;
        }
        elseif ($friendRequested)
        {
            $friendshipExists = 1;
            $friendship = $friendRequested;
        }
        else
        {
            $friendship = null;
        }

        $rawFriendList = Friendship::where('status','=', 1)
        ->where(function ($query) use (&$id){
            $query
            ->where('requester_user_id','=', $id)
            ->orWhere('requested_user_id','=', $id);
        });

        $firstHalfFriendlist = $rawFriendList->join('users as a','friendships.requester_user_id','=', 'a.id')->get();

        $secondHalfFriendlist = $rawFriendList->join('users as b','friendships.requested_user_id','=', 'b.id')->get();

        $friendlist = $firstHalfFriendlist->merge($secondHalfFriendlist);

        $selectedUser = $friendlist->search(function ($item) use (&$id){
            return $item->id == $id;
        });

        if(!$friendlist->isEmpty())
        {
           $friendlist->pull($selectedUser);
        }

        $footer = 'true';

        return view('User/show', compact('footer','user', 'friendship', 'interests','friendlist'));
    }

    public function edit($id)
    {
        $user = User::find($id);

        $interests = $this->interests->all(['id', 'name']);

        $selectedInterests = DB::table('interest_user')->where('user_id', auth()->user()->id)->get();

        $footer = 'true';
        return view('User/edit', compact('footer', 'user', 'interests', 'selectedInterests'));
    }

    public function update(Request $request, $id)
    {

        $data = $request->all();

        $interests = $request->get('interests', null);

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

        $user->update($data);

        $user->interests()->sync($interests);

        return redirect()->route('home');
    }

    public function listGroupsAndTrips()
    {

        $confirmedTrips = DB::table('trip_user')
        ->where('user_id', auth()->user()->id)
        ->join('trips','trip_user.trip_id','=','trips.id')
        ->get();

        $footer = 'true';

        return view('Groups and Trips/index', compact('footer', 'confirmedTrips'));
    }

    public function friendshipIndex($id)
    {
        if (auth()->user()->id == $id) {
            $user = auth()->user();
        } else {
            $user = User::find($id);
        }

        $friendshipRequestors;

        $rawFriendList = Friendship::where('status','=', 1)
        ->where(function ($query) use (&$id){
            $query
            ->where('requester_user_id','=', $id)
            ->orWhere('requested_user_id','=', $id);
        });

        $firstHalfFriendlist = $rawFriendList
        ->join('users as a','friendships.requester_user_id','=', 'a.id')
        ->get();

        $secondHalfFriendlist = $rawFriendList
        ->join('users as b','friendships.requested_user_id','=', 'b.id')
        ->get();

        $friendlist = $firstHalfFriendlist
        ->merge($secondHalfFriendlist);

        $selectedUser = $friendlist->search(function ($item) use (&$id){
            return $item->id == $id;
        });

        if(!$friendlist->isEmpty())
        {
           $friendlist->pull($selectedUser);
        }

        $friendRequestor = Friendship::where('requester_user_id', auth()->user()->id)
        ->where('requested_user_id', $id)
        ->first();

        $friendRequested = Friendship::where('requester_user_id', $id)
        ->where('requested_user_id', auth()->user()->id)
        ->first();

        if ($friendRequestor)
        {
            $friendship = $friendRequestor;
        }
        elseif ($friendRequested)
        {
            $friendship = $friendRequested;
        }
        else
        {
            $friendship = null;
        }

        $friendshipRequestors = Friendship::where('requested_user_id', auth()->user()->id)
        ->where('status', 0)
        ->join('users','friendships.requester_user_id','=', 'users.id')
        ->get();

        // dd($friendshipRequestors);

        $footer = 'true';

        return view('User/Friendships/index', compact('user','friendshipRequestors','friendlist','friendship','footer'));
    }

    public function friendshipAdd($requestedUserID)
    {

        $friendship = Friendship::create([
            'requester_user_id' => auth()->user()->id,
            'requested_user_id' => $requestedUserID
        ]);

        return redirect()->back();
    }

    public function friendshipDelete($requestedUserID)
    {
        $friendRequestor = Friendship::where('requester_user_id', auth()->user()->id)
        ->where('requested_user_id', $requestedUserID)
        ->first();

        $friendRequested = Friendship::where('requester_user_id', $requestedUserID)
        ->where('requested_user_id', auth()->user()->id)
        ->first();

        if ($friendRequestor)
        {
            $friendshipExists = 1;
            $friendship = $friendRequestor;
            $friendship->delete();
        }
        elseif ($friendRequested)
        {
            $friendshipExists = 0;
            $friendship = $friendRequested;
            $friendship->delete();
        }
        else
        {
            $friendship = null;
        }

        return redirect()->back();
    }

    public function friendshipAccept($requestedUserID)
    {
        $friendship = Friendship::where('requester_user_id', $requestedUserID)
        ->where('requested_user_id', auth()->user()->id)
        ->first();

        if($friendship)
        {
            $friendship->update([
                'status' => 1
            ]);
        }

        return redirect()->back();
    }

    public function friendshipCancel($requestedUserID)
    {
        $friendship = Friendship::where('requester_user_id',auth()->user()->id)
        ->where('requested_user_id', $requestedUserID)
        ->first();

        $friendship->delete();

        return redirect()->back();

    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/');
    }
}
