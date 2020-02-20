<?php

namespace App\Http\Controllers\User;

Use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index($id){

        $user = User::find($id);

        $footer = 'true';
        return view('User/show', compact('footer', 'user'));
    }

    public function edit($id){

        $user = User::find($id);

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

        if ($request->hasfile('background_photo')){
            $name = $user->id.'.'.Str::kebab($user->name).'.cover';
            $extension = $request->background_photo->extension();
            $nameFile = "{$name}.{$extension}";
            $data['background_photo'] = $nameFile;

            $upload = $request->background_photo->storeAs('usersBackgroundPhotos', $nameFile);
        }

        if ($request->hasfile('photo')){
            $name = $user->id.'.'.Str::kebab($user->name).'.profile';
            $extension = $request->photo->extension();
            $nameFile = "{$name}.{$extension}";
            $data['photo'] = $nameFile;

            $upload = $request->photo->storeAs('userPhotos', $nameFile);
        }

        $update = $user->update($data);

        return redirect()->route('user.index', $id);
    }
}
