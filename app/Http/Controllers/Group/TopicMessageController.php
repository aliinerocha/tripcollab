<?php

namespace App\Http\Controllers\Group;

use App\Http\Controllers\Controller;
use App\Group;
use App\Topic;
use App\User;
use App\TopicMessage;
use Illuminate\Http\Request;

class TopicMessageController extends Controller
{

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(Topic $topicMessage)
    {
        $this->topicMessage = $topicMessage;
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
    public function store(Request $request)
    {
        $data = $request->all();
        $store = $this->topicMessage->create($data);
        // Falta a relação com topic_id e user_id!!!
        // flash('Comunidade criada com sucesso')->success();
        return redirect()->route('topic.show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TopicMessage  $topicMessage
     * @return \Illuminate\Http\Response
     */
    public function show($topicMessage)
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
        $topicMessage = $this->topicMessage->findOrFail($id);
        $footer = 'true';
        // dd($topicMessage);
        return view('/Groups and Trips/Group/show', compact('footer', 'topicMessage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TopicMessage  $topicMessage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $topicMessage = \App\TopicMessage::find($id);
        dd($topicMessage->update($data));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TopicMessage  $topicMessage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $topicMessage = $this->topicMessage->find($id);
        $topicMessage->delete();

        return redirect()->route('group.show');
    }
}
