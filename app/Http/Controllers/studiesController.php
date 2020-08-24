<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\studies;

class studiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return studies::all();
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         return Studies::select('studies.id', 'workers.id as id_trabajador', 'workers.name', 'workers.lastname', 'studies.academy_tittle', 'studies.college'
            ,'studies.year_finalization', 'studies.place', 'studies.created_at', 'studies.updated_at')
            ->join('studies_workers','studies_workers.studies_id','studies.id')
            ->join('job_profiles','job_profiles.id','studies_workers.job_profiles_id')
            ->join('workers','workers.id','job_profiles.workers_id')
            ->where('studies.academy_tittle', '=', $id)
            ->get();


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
}
