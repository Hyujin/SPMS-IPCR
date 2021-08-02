<?php

namespace App\Http\Controllers;

use DB;
use App\Preforms;
use App\employees;
use App\Forms;
use App\printview;
use Illuminate\Http\Request;

class EmployeeController extends Controller
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
   
    public function create(){

        $employees = DB::table('employees')->selectRaw('*')->whereRaw("deleted = '0' ")->orderBy('id')->get();
        return view('dashboard', compact('employees'));

    }


    public function store(Request $request)
    {
        $preforms              = New Preforms;
        $preforms->first_name  = request()->first_name;
        $preforms->middle_name = request()->middle_name;
        $preforms->last_name   = request()->last_name;
        $preforms->division    = request()->division;
        $preforms->section     = request()->section;
        $preforms->reviewed    = request()->reviewed;
        $preforms->approved    = request()->approved;
        $preforms->start_date  = request()->start_date;
        $preforms->end_date    = request()->end_date;
        $preforms->form        = request()->form;

        $preforms->save();

        $employees              = New Employees;
        $employees->first_name  = request()->first_name;
        $employees->middle_name = request()->middle_name;
        $employees->last_name   = request()->last_name;
        $employees->form        = request()->form;
        $employees->deleted            =           0;
        $employees->save();

        $form_id=$employees->id; 

        return view('forms/ipcr/post', compact('form_id'));
    }

      public function edit($form_id)
    {
        $preforms = Preforms::find($form_id);
       
       return view('forms/ipcr/edit/pre', compact('preforms'));
    }

   

    public function update(Request $request)
    {

        $request->validate([
            'first_name'=>'required',
            'middle_name'=>'required',
            'last_name'=>'required',
            'division'=>'required',
            'section'=>'required',
            'reviewed'=>'required',
            'approved'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            'form'=>'required',
            'form_id' => 'required'
        ]);
                $form_id = $request->get('form_id'); 

       
        $operations1 = DB::table('forms')->selectRaw('id, output, success_indicator, actual_accomplishments')->whereRaw("form_id = '$form_id' and tag = 1")->orderBy('id')->get();

        $operations2 = DB::table('forms')->selectRaw('id, output, success_indicator, actual_accomplishments')->whereRaw("form_id = '$form_id' and tag = 2")->orderBy('id')->get();

        $general_administrative_services = DB::table('forms')->selectRaw('id, output, success_indicator, actual_accomplishments')->whereRaw("form_id = '$form_id' and tag = 3")->orderBy('id')->get();

        $support_to_operations = DB::table('forms')->selectRaw('id, output, success_indicator, actual_accomplishments')->whereRaw("form_id = '$form_id' and tag = 4")->orderBy('id')->get();

        $innovation = DB::table('forms')->selectRaw('id, output, success_indicator, actual_accomplishments')->whereRaw("form_id = '$form_id' and tag = 5")->orderBy('id')->get();

        $op1Count = DB::table('forms')->selectRaw(count('id, output, success_indicator, actual_accomplishments'))->whereRaw("form_id = '$form_id' and tag = 1")->orderBy('id')->get();

        $op2Count = DB::table('forms')->selectRaw('id, output, success_indicator, actual_accomplishments')->whereRaw("form_id = '$form_id' and tag = 2")->orderBy('id')->get();

        $gasCount = DB::table('forms')->selectRaw('id, output, success_indicator, actual_accomplishments')->whereRaw("form_id = '$form_id' and tag = 3")->orderBy('id')->get();

        $stoCount = DB::table('forms')->selectRaw('id, output, success_indicator, actual_accomplishments')->whereRaw("form_id = '$form_id' and tag = 4")->orderBy('id')->get();

        $innovCount = DB::table('forms')->selectRaw(count('id, output, success_indicator, actual_accomplishments'))->whereRaw("form_id = '$form_id' and tag = 5")->orderBy('id')->get();


        
        
        $forms                  = Forms::find($form_id);
        $employees              = Employees::find($form_id);
        $employees->first_name  = $request->get('first_name');
        $employees->middle_name = $request->get('middle_name');
        $employees->last_name   = $request->get('last_name');
        $employees->form        = $request->get('form');
        $employees->save();

        $preforms              = preforms::find($form_id);
        $preforms->first_name  = $request->get('first_name');
        $preforms->middle_name = $request->get('middle_name');
        $preforms->last_name   = $request->get('last_name');
        $preforms->division    = $request->get('division');
        $preforms->section     = $request->get('section');
        $preforms->reviewed    = $request->get('reviewed');
        $preforms->approved    = $request->get('approved');
        $preforms->start_date  = $request->get('start_date');
        $preforms->end_date    = $request->get('end_date');
        $preforms->form        = $request->get('form');
        $preforms->save();



        return view('forms/ipcr/edit/post', compact('forms', 'operations1', 'operations2' , 'general_administrative_services', 'support_to_operations','innovation', 'op1Count' , 'op2Count', 'gasCount', 'stoCount', 'innovCount', 'form_id'));

    }
    

}
