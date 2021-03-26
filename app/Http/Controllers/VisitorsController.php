<?php

namespace App\Http\Controllers;

use App\Models\visitors;
use Illuminate\Http\Request;

class VisitorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $ipAddress = $_SERVER['REMOTE_ADDR'];
        date_default_timezone_set("Asia/Dhaka");
        $visitTime = date("h:i:sa");
        $visitDate = date("d-m-Y");

      $result =  visitors::insert([
            'ipAddress' => $ipAddress,
            'visit_time' => $visitTime,
            'visit_date' => $visitDate
        ]);
        return response()->json(['success'=>$result]);
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
     * @param  \App\Models\visitors  $visitors
     * @return \Illuminate\Http\Response
     */
    public function show(visitors $visitors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\visitors  $visitors
     * @return \Illuminate\Http\Response
     */
    public function edit(visitors $visitors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\visitors  $visitors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, visitors $visitors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\visitors  $visitors
     * @return \Illuminate\Http\Response
     */
    public function destroy(visitors $visitors)
    {
        //
    }
}
