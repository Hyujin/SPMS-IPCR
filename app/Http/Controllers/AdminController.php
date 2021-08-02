<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employees;
use App\forms;
use DB;

class AdminController extends Controller
{
        public function create(){

        $employees = Employees::all();
        return view('admin/dashboard', compact('employees'));

    }

    	public function edit($form_id)
    {
        $forms = forms::find($form_id);

        $var = DB::table('forms')->selectRaw('form_id')->whereRaw("form_id = '$form_id'");



       	 $operations1 = DB::table('forms')->selectRaw('id, output, success_indicator, actual_accomplishments')->whereRaw("form_id = '$form_id' and tag = 1")->orderBy('id')->get();

        $operations2 = DB::table('forms')->selectRaw('id, output, success_indicator, actual_accomplishments')->whereRaw("form_id = '$form_id' and tag = 2")->orderBy('id')->get();

        $general_administrative_services = DB::table('forms')->selectRaw('id, output, success_indicator, actual_accomplishments')->whereRaw("form_id = '$form_id' and tag = 3")->orderBy('id')->get();

        $support_to_operations = DB::table('forms')->selectRaw('id, output, success_indicator, actual_accomplishments')->whereRaw("form_id = '$form_id' and tag = 4")->orderBy('id')->get();

        $innovation = DB::table('forms')->selectRaw('id, output, success_indicator, actual_accomplishments')->whereRaw("form_id = '$form_id' and tag = 5")->orderBy('id')->get();

       $data = DB::table('forms')->selectRaw('id, output, success_indicator, actual_accomplishments, tag, efficiency,
       	quality, timeliness, average ')->whereRaw("form_id = '$form_id'")->orderBy('id')->get();
       return view('admin/forms/ipcr', compact('forms', 'form_id',  'data', 'operations1', 'operations2', 'general_administrative_services',  'support_to_operations', 'innovation'));

       //show printed form instead and allow access to comments section while disabling the rest for admin privileges only
    }



     /*public function update(){

    	$form_id = request()->form_id;
    	//loops through the length of inputs
    	dd(request()->rate_counter);

        for ($i = 0; $i < request()->rate_counter; $i++) {
                    $forms                              =  Forms::find($form_id);
                    if(!empty($forms)){
                    $forms->quality                     =  (request()->quality[$i]);
                    $forms->efficiency                  =  (request()->efficiency[$i]);
                    $forms->timeliness                  =  (request()->timeliness [$i]);
                    $forms->remarks                     =  (request()->remarks [$i]);
                    $a =  request()->quality[$i] + request()->efficiency[$i] + request()->timeliness [$i];
                    $ave = $a / 3;

                    $forms->average                     =  $ave;
                    $forms->save();
                    $form_id++;
                    }else{
                        $form_id++;
                        $forms                              =  Forms::find($form_id);
                        $forms->quality                     =  (request()->quality[$i]);
                        $forms->efficiency                  =  (request()->efficiency[$i]);
                        $forms->timeliness                  =  (request()->timeliness [$i]);
                        $forms->remarks                     =  (request()->remarks [$i]);
                         $a =  request()->quality[$i] + request()->efficiency[$i] + request()->timeliness [$i];
                    $ave = $a / 3;
                    $forms->average                     =  $ave;
                         $forms->save();
                         $form_id++;
                    }
            }


    	return redirect('admin/dashboard');

    }*/

    public function update(){
        $form_id = request()->form_id;
        $i = 0;
        //loops through the length of inputs
        while($i < request()->rate_counter) {
            $forms                              =  Forms::find($form_id);
            if(!empty($forms)){
            $forms->quality                     =  (request()->quality[$i]);
            $forms->efficiency                  =  (request()->efficiency[$i]);
            $forms->timeliness                  =  (request()->timeliness [$i]);
            $forms->remarks                     =  (request()->remarks [$i]);
            $a =  request()->quality[$i] + request()->efficiency[$i] + request()->timeliness [$i];
            $ave = $a / 3;
            $forms->average                     =  $ave;
            $forms->save();
            $i++;
            }
            $form_id++;
        }
        return redirect('admin/dashboard');
    }


}


