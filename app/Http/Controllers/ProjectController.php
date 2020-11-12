<?php

namespace App\Http\Controllers;
use App\Project;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects=DB::table('projects')->get();
        return view('project.index',compact(['projects']));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers=DB::table('customers')->get();
        $users=DB::table('users')->get();

        return view('project.create', compact(['customers','users']));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer= new Project([
            'customer_name'=>  $request->get('customer_name'),
            'employee_name'=> $request->get('employee_name'),
            'start_date'=>$request->get('start_date'),
            'end_date'=>$request->get('end_date'),
            'budget'=>$request->get('budget'),
        ]);
        $customer->save();
        return redirect('project')->with('success', 'Salary information generated');
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
        $project=Project::find($id);
        $project->delete();
        return redirect('project')->with('delete','project Deleted');
    }
}
