<?php

namespace App\Http\Controllers\User;

Use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit($user)
    {
        $user = User::find($user);
        $footer = 'true';
        return view('User/edit', compact('footer', 'user'));
    }

    public function update(Request $request, $id){

        $data = $request->all();

        $user = User::find($id);

        $user->name = $data['name'];
        $user->city = $data['city'];
        $user->state = $data['state'];
        $user->country = $data['country'];
        $user->birthday = $data['birthday'];
        $user->description = $data['description'];
        $user->public = $data['public'];
        $user->save();

        dd($user->save());
    }
}
