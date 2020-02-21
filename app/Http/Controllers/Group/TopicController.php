<?php

namespace App\Http\Controllers\Group;

use App\Http\Controllers\Controller;
use App\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Topic $topic)
    {
        $this->topic = $topic;
    }

    public function index($topic)
    {
        $topics = auth()->user()->topic;
        $topic = $topics->topics()->paginate(3);
        $footer = 'true';
        return view('Groups and Trips/Group/show', compact('footer', 'topic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $topics = \App\Topic::all(['id', 'name']);
        $footer = 'true';
        return view('Groups and Trips/Group/Topics/create', compact('topics','footer'));
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
        $store = $this->topic->create($data);
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
        $footer = 'true';
        return view('Groups and Trips/Group/Topics/show', compact('topic','footer'));
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
