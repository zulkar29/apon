<?php

namespace App\Http\Controllers;



use App\Salary;
use App\TimeEntry;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salarys=DB::table('salarys')->get();

        return view('salary.index',compact(['salarys']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $users=DB::table('users')->get();
        return view('salary.create',compact(['users']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id= $request->get('user_id');
        $user_name= User::where('id', $user_id)->value('name');
        $salary_start=$request->get('salary_start_date');
        $salary_end=$request->get('salary_end_date');
        $emp_salary=User::where('id',$user_id)->value('salary');
        $work_day=count(DB::table('time_entries')->select('user_id')->whereBetween('time_start',[ $salary_start,$salary_end])->where('user_id',$user_id)->get());
        $holyday= $request->get('holyday');


        $Total_working_day=$work_day+$holyday;

        $perday_salary=  $emp_salary/30;
        $monthly_salary=$perday_salary*$Total_working_day;
        $bonus=$request->get('bonus');
        $final_salary=$monthly_salary+$bonus;

        $salary= new Salary([
            'user_id'=> $user_id,
            'name'=> $user_name,
            'salary_start_date'=>$salary_start,
            'salary_end_date'=>$salary_end,
            'basic_salary'=> $emp_salary,
            'bonus'=>  $bonus,
            'total_working_day'=> $Total_working_day,
            'final_salary'=>  $final_salary,
            'work_day' => $work_day,
            'salary_generate_date'=>now(),
        ]);
        $salary->save();
        return redirect('/salary')->with('success', 'Salary information generated');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $salary=Salary::find($id);
        return view('salary.show',compact(['salary']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        $salary=Salary::find($id);
        $salary->delete();
        return redirect('salary')->with('delete','Invoice Deleted');
    }
}
