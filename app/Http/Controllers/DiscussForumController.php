<?php

namespace App\Http\Controllers;

use App\Models\DiscussForum;
use App\Http\Requests\StoreDiscussForumRequest;
use App\Http\Requests\UpdateDiscussForumRequest;

class DiscussForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDiscussForumRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDiscussForumRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DiscussForum  $discussForum
     * @return \Illuminate\Http\Response
     */
    public function show(DiscussForum $discussForum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DiscussForum  $discussForum
     * @return \Illuminate\Http\Response
     */
    public function edit(DiscussForum $discussForum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDiscussForumRequest  $request
     * @param  \App\Models\DiscussForum  $discussForum
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDiscussForumRequest $request, DiscussForum $discussForum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DiscussForum  $discussForum
     * @return \Illuminate\Http\Response
     */
    public function destroy(DiscussForum $discussForum)
    {
        //
    }
}
