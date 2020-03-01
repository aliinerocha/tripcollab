<?php

namespace App\Http\Controllers\Group;

use App\Http\Controllers\Controller;
use App\Group;
use App\Topic;
use App\User;
use App\TopicMessage;
use App\LikeTopicMessage;
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
        //
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

        return redirect()->route('topic.show', $topic->id);
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
    public function edit($id)
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
    public function update(Request $request)
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

        return redirect()->route('topic.show', $topic->id);
    }

    public function likeTopicMessage($id)
    {       
        $topicMessage = TopicMessage::find($id);
        $user = auth()->user(['id', 'name']);
        $likeTopicMessage = LikeTopicMessage::where('topic_message_id', $topicMessage->id)->where('user_id', $user->id)->first();

        if ($likeTopicMessage == null){
            $likeTopicMessage = new LikeTopicMessage();
            $likeTopicMessage->user_id = auth()->user()->id;
            $likeTopicMessage->topic_message_id = $topicMessage->id;
            $likeTopicMessage->like_topic_message = 1;
            $likeTopicMessage->save();
        } else {
            if ($likeTopicMessage = LikeTopicMessage::where('topic_message_id', $topicMessage->id)->where('user_id', $user->id)->where('like_topic_message',1)->first())
            {
                $likeTopicMessage->delete();
            } else {
                $dislikeTopicMessage = LikeTopicMessage::where('topic_message_id', $topicMessage->id)->where('user_id', $user->id)->update(array('like_topic_message' => '1'));
            }
        }
        
        return redirect()->route('topic.show', $topicMessage->topic_id);
    }

    public function dislikeTopicMessage($id)
    {       
        $topicMessage = TopicMessage::find($id);
        $user = auth()->user(['id', 'name']);
        $dislikeTopicMessage = LikeTopicMessage::where('topic_message_id', $topicMessage->id)->where('user_id', $user->id)->first();

        if ($dislikeTopicMessage == null)
        {
            $dislikeTopicMessage = new LikeTopicMessage();
            $dislikeTopicMessage->user_id = auth()->user()->id;
            $dislikeTopicMessage->topic_message_id = $topicMessage->id;
            $dislikeTopicMessage->like_topic_message = 0;
            $dislikeTopicMessage->save();
        } else {
            if ($dislikeTopicMessage = LikeTopicMessage::where('topic_message_id', $topicMessage->id)->where('user_id', $user->id)->where('like_topic_message',0)->first())
            {
                $dislikeTopicMessage->delete();
            } else {
                $dislikeTopicMessage = LikeTopicMessage::where('topic_message_id', $topicMessage->id)->where('user_id', $user->id)->update(array('like_topic_message' => '0'));
            }
        }

        return redirect()->route('topic.show', $topicMessage->topic_id);
    }
}
