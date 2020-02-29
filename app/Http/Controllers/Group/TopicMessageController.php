<?php

namespace App\Http\Controllers\Group;

use App\Http\Controllers\Controller;
use App\Group;
use App\Topic;
use App\User;
use App\TopicMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopicMessageController extends Controller
{

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(TopicMessage $topicMessage, Topic $topic, Group $group, User $user)
    {
        $this->topicMessage = $topicMessage;
        $this->topic = $topic;
        $this->group = $group;
        $this->user = $user;
    }


    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Não há necessidade - está na view de Topics
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $topic = $this->topic->findOrFail($id);
        $topicMessage = new TopicMessage();
        $topicMessage->user_id = auth()->user()->id;
        $topicMessage->topic_id = $request->input('topic_id');
        $topicMessage->message = $request->message;
        $topicMessage->save();

        return redirect()->route('topic.show', [$topic->group_id, $topic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TopicMessage  $topicMessage
     * @return \Illuminate\Http\Response
     */
    public function show($topicMessage, $topic_id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TopicMessage  $topicMessage
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $topic_id)
    {
        // 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TopicMessage  $topicMessage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $topic_id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TopicMessage  $topicMessage
     * @return \Illuminate\Http\Response
     */
    public function destroy($topic, $id)
    {
        $topic = $this->topic->findOrFail($topic);
        $topicMessage = $this->topicMessage->find($id);
        $topicMessage->delete();

        return redirect()->route('topic.show', [$topic->group_id, $topic->id]);
    }
}
