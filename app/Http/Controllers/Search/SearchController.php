<?php

namespace App\Http\Controllers\Search;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Trip;
use App\Group;

class SearchController extends Controller
{
    public function show() {

        return view('Search/show');

    }

    public function searchUsers(Request $request) {

        $query = $request->get('search');

        $users = User::search($query)->paginate(10);

        return view('Search/show', compact('users'));
    }

    public function searchGroups(Request $request) {

        $query = $request->get('search');

        $groups = Group::search($query)->paginate(10);

        return view('Search/show', compact('groups'));
    }

    public function searchTrips(Request $request) {

        $query = $request->get('search');

        $trips = Trip::search($query)->paginate(10);

        return view('Search/show', compact('trips'));
    }

}
