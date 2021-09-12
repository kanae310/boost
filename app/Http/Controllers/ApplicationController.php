<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(int $event_id, Application $application)
    {
        $res_data = $application->eventApply($event_id);
        $return_res_data = json_decode(json_encode($res_data), true);
        return view('apply_completed', ['res_data'=>$return_res_data[0]]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }

    public function appliedShow(Application $application)
    {
        $applied_show = $application->appliedShow();
        $applied_show = $applied_show->toJson();
        $return_applied = json_decode($applied_show,true);

        return view('applied_show', ['applied_show' => $return_applied]);

    }

    public function postShow(Application $application)
    {
        $post_show = $application->postShow();

        return view('post_show', ['post_show' => $post_show]);

    }

    public function pastAppliedShow(Application $application)
    {
        $past_applied_show = $application->pastAppliedShow();

        return view('past_applied_show', ['past_applied_show' => $past_applied_show]);

    }
}
