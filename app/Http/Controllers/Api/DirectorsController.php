<?php

namespace App\Http\Controllers;

use App\directors;
use Illuminate\Http\Request;

use Illuminate\Http\Request;
use App\Http\Requests\DirectorRequest;
use App\Http\Resources\DirectorResource;
use App\Http\Resources\DirectorCollectionResource;

class DirectorsController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\directors  $directors
     * @return \Illuminate\Http\Response
     */
    public function show(directors $directors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\directors  $directors
     * @return \Illuminate\Http\Response
     */
    public function edit(directors $directors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\directors  $directors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, directors $directors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\directors  $directors
     * @return \Illuminate\Http\Response
     */
    public function destroy(directors $directors)
    {
        //
    }
}
