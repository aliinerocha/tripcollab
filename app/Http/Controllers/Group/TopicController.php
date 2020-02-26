<?php

namespace App\Http\Controllers\Group;

use App\Http\Controllers\Controller;
use App\Topic;
use App\Group;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Topic $topic, Group $group, User $user)
    {
        $this->topic = $topic;
        $this->group = $group;
        $this->user = $user;
    }

    public function index($group)
    {
        $group = $this->group->findOrFail($group);
        $topics = DB::table('topics')
        ->where('group_id', $group->id)
        ->get();
        $footer = 'true';
        return view('Groups and Trips/Group/Topics/index', compact('footer', 'group', 'topics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $group = $this->group->findOrFail($id);
        $footer = 'true';
        return view('Groups and Trips/Group/Topics/create', compact('footer', 'group'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $topic = new Topic();
        $topic->user_id = auth()->user()->id;
        $topic->group_id = $request->input('group_id');
        $topic->name = $request->name;
        $topic->description = $request->description;
        $topic->save();
        
        return redirect()->route('topic.show', $topic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function show($topic)
    {
        $topic = $this->topic->findOrFail($topic);
        $user = auth()->user(['id', 'name']);
        $footer = 'true';
        return view('Groups and Trips/Group/Topics/show', compact('topic','footer', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $topic = $this->topic->findOrFail($id);
        $footer = 'true';
        return view('Groups and Trips/Group/Topics/edit', compact('footer', 'topic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $topic = \App\Topic::find($id);

        dd($topic->update($data));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $topic = $this->topic->find($id);
        $topic->delete();

        return redirect()->route('/profile');
    }
}
