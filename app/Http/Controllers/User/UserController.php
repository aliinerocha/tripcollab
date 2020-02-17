<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Requests;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function edit($id)
    {
        $footer = 'true';
        $collection = App\User::find($id)->get();
        $user = $collection[0];
        return view('user/edit', compact('footer'), compact('user'));
    }

    public function update(UserRequest $request, $id)
    {
        $data = $request->all();

        $user = App\User::find($id);

        if($request->hasFile('photo')) {
            if(Storage::disk('public')->exists($user->photo)) {
                Storage::disk('public')->delete($user->photo);
            }

            $data['photo'] = $this->imageUpload($request->file('photo')[0]);
        }

        if($request->hasFile('background_photo')) {
            if(Storage::disk('public')->exists($user->background_photo)) {
                Storage::disk('public')->delete($user->background_photo);
            }

            $data['background_photo'] = $this->imageUpload($request->file('background_photo')[0]);
        }

        $user->update($data);

        flash('Perfil atualizado com sucesso')->success();

        return redirect()->route('home');
    }
}
