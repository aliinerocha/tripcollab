<?php

namespace App\Http\Controllers\Group;

use App\Http\Controllers\Controller;
use App\Topic;
use App\TopicMessage;
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
    public function __construct(Topic $topic, Group $group, User $user, TopicMessage $topicMessage)
    {
        $this->topic = $topic;
        $this->group = $group;
        $this->user = $user;
        $this->topicMessage = $topicMessage;
    }

    public function index($group)
    {
        $group = $this->group->findOrFail($group);
        $topics = DB::table('topics')
        ->where('group_id', $group->id)
        ->join('users', 'topics.user_id', '=', 'users.id')
        ->select('users.id','users.name as userName','users.photo','topics.id','topics.name as topicName','topics.description' ,'topics.created_at')
        ->orderBy('topics.created_at', 'desc')
        ->get();
        
        foreach($topics as $key => $tpc)
        {
            $topicMessages = DB::table('topic_messages')
            ->where('topic_id', $tpc->id)
            ->join('users', 'topic_messages.user_id', '=', 'users.id')
            ->get('topic_id');
            
            $answer = $topicMessages->count();
            
            $tpc->answer = $answer;
        }
        
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
        
        return redirect()->route('topic.index', [$topic->group_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function show($group, $topic)
    {
        $topic = $this->topic->findOrFail($topic);

        $topicShow = DB::table('topics')
        ->where('topics.id', $topic->id)
        ->join('users', 'topics.user_id', '=', 'users.id')
        ->select('users.id','users.name as userName','users.photo', 'topics.user_id')
        ->get();

        $user = auth()->user(['id', 'name']);
        
        $topicMessages = DB::table('topic_messages')
        ->where('topic_id', $topic->id)
        ->join('users', 'topic_messages.user_id', '=', 'users.id')
        ->select('users.id','users.name','users.photo','topic_messages.id','topic_messages.message','topic_messages.created_at', 'topic_messages.user_id')
        ->orderBy('topic_messages.created_at', 'desc')
        ->get();

        $answer = $topicMessages->count();
        
        $footer = 'true';
        return view('Groups and Trips/Group/Topics/show', compact('topic','footer', 'topicMessages', 'topicShow', 'user', 'answer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */

    public function edit($group_id,$id)
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
    public function update(Request $request, $group_id, $id)
    {
        $data = $request->all();

        $topic = \App\Topic::find($id);

        $topic->update($data);

        return redirect()->route('topic.show', [$topic->group_id, $topic->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function destroy($group_id, $id)
    {
        $topic = $this->topic->find($id);
        $topic->delete();

        return redirect()->route('topic.index', [$topic->group_id, $topic->id]);
    }

    public function search(Request $request, $groupId)
    {
        $group = $this->group->find($groupId);
        
        $search = $request->input('search');
        $topicSearchs = DB::table('topics')
        ->where('name','LIKE','%'.$search.'%')
        ->orWhere('description','LIKE','%'.$search.'%')
        ->select('topics.name','topics.description')
        ->get();

        $topicCount = $topicSearchs->count();
        // dd($topicCount);

        return redirect()->route('group.show', $groupId)
        ->with('topicSearchs', $topicSearchs)
        ->with('topicCount', $topicCount);
    }
}
