<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\EventActive;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('index');
    }

    public function detail($request, Event $event)
    {
        $event_id = $request;
        $event_detail = $event->eventDetail($event_id);
        $event_detail_data = $event_detail[0];
        $judge_already_applied = $event_detail[1];
        $return_event_detail = json_decode(json_encode($event_detail_data), true);
        return view('detail',['event_detail'=>$return_event_detail[0], 'applied_flag' => $judge_already_applied]);
    }

    public function categoryShow(Event $event)
    {
        $category_show = $event->categoryShow();
        $category_show = $category_show->toJson();
        $return_category_show = json_decode($category_show,true);
        return view('category', ['category_show'=>$return_category_show]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Event $event)
    {
        $res_event_id = $event->eventStore($request);

        return redirect('/event/detail/' . $res_event_id . '?link=eventStore');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($request = null, Event $event)
    {
        $event_show = $event->eventShow($request);
        // dd($event_show);
        $event_show = $event_show -> toJson();
        $return_event_show = json_decode($event_show, true);
        return view('event_show', ['event_show'=>$return_event_show]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($event_id, EventActive $event_active)
    {
        $event_active->eventDelete($event_id);

        return ;
    }
}
