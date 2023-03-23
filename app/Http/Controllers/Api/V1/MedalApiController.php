<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Medal;
use Illuminate\Http\Request;

class MedalApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get all medal
        return Medal::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Medal $medal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medal $medal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Medal $medal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medal $medal)
    {
        //
    }
}
