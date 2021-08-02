<?php

namespace App\Http\Controllers;

use DB;
use App\Forms;
use App\employees;
use App\Preforms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class FormRateController extends Controller
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
   
    public function create(Request $request)
    {
       
         /* Sent form_id through post hidden input instead from route parameter due to issues */
        $form_id = (request()->form_id);
        $id  = request()->id;

        $operations1 = DB::table('forms')->selectRaw('*')->whereRaw("form_id = '$form_id' and tag = 1")->orderBy('id')->get();

        $operations2 = DB::table('forms')->selectRaw('*')->whereRaw("form_id = '$form_id' and tag = 2")->orderBy('id')->get();

        $general_administrative_services = DB::table('forms')->selectRaw('*')->whereRaw("form_id = '$form_id' and tag = 3")->orderBy('id')->get();

        $support_to_operations = DB::table('forms')->selectRaw('*')->whereRaw("form_id = '$form_id' and tag = 4")->orderBy('id')->get();

        $innovation = DB::table('forms')->selectRaw('*')->whereRaw("form_id = '$form_id' and tag = 5")->orderBy('id')->get();

        $data = DB::table('preforms')->selectRaw('*')->whereRaw("id = '$form_id' ")->get();

        $op1Count = DB::table('forms')->selectRaw(count('id, output, success_indicator, actual_accomplishments'))->whereRaw("form_id = '$form_id' and tag = 1")->orderBy('id')->get();

        $op2Count = DB::table('forms')->selectRaw('id, output, success_indicator, actual_accomplishments')->whereRaw("form_id = '$form_id' and tag = 2")->orderBy('id')->get();

        $gasCount = DB::table('forms')->selectRaw('id, output, success_indicator, actual_accomplishments')->whereRaw("form_id = '$form_id' and tag = 3")->orderBy('id')->get();

        $stoCount = DB::table('forms')->selectRaw('id, output, success_indicator, actual_accomplishments')->whereRaw("form_id = '$form_id' and tag = 4")->orderBy('id')->get();

        $innovCount = DB::table('forms')->selectRaw(count('id, output, success_indicator, actual_accomplishments'))->whereRaw("form_id = '$form_id' and tag = 5")->orderBy('id')->get();

       
  
        return view('forms/ipcr/rate/post', compact('data', 'operations1', 'operations2', 'general_administrative_services', 'support_to_operations', 'innovation', 'op1Count' , 'op2Count', 'gasCount', 'stoCount', 'innovCount', 'form_id' ));
    }


     public function store(Request $request)
    {

       $forms = forms::find(request()->form_id);  

         for ($i = 0; $i < count(request()->op1_output); $i++) {
                       
             // Assesses already added inputs
            if ($i<request()->op1Count){

            // skips marked inputs and assesses inputs for changes
                
                    $forms                       =  Forms::find(request()->op1_id[$i]);
                    $forms->quality              =  (request()->op1quality[$i]);
                    $forms->efficiency           =  (request()->op1efficiency[$i]);
                    $forms->timeliness           =  (request()->op1timeliness[$i]);
                    $sum                         =  (request()->op1quality[$i] + request()->op1efficiency[$i] + request()->op1timeliness[$i]);
                    $ave                         =  $sum / 3;
                    
                    if($ave == 5){
                            $forms->average = 5;
                    }
                            else if($ave >= 4){
                            $forms->average = 4;
                    }
                            else if($ave >= 3){
                            $forms->average = 3;
                    }
                            else if($ave >= 2){
                            $forms->average = 2;
                    }
                            else if($ave >= 1){
                            $forms->average = 1;
                    }
                    else{
                            $forms->average = 0;
                    }
                     $forms->no_outputs = count(request()->op1_output);
                    $forms->save();
                   
            }
        }

        

         for ($i = 0; $i < count(request()->op2_output); $i++) {
            if ($i<request()->op2Count){

            $forms                              =   Forms::find(request()->op2_id[$i]);
            $forms->quality                     =  (request()->op2quality[$i]);
            $forms->efficiency                  =  (request()->op2efficiency[$i]);
            $forms->timeliness                  =  (request()->op2timeliness[$i]);
            $sum                                =  (request()->op2quality[$i] + request()->op2efficiency[$i] + request()->op2timeliness[$i]);
                    $ave                         =  $sum / 3;
                    
                    if($ave == 5){
                            $forms->average = 5;
                    }
                            else if($ave >= 4){
                            $forms->average = 4;
                    }
                            else if($ave >= 3){
                            $forms->average = 3;
                    }
                            else if($ave >= 2){
                            $forms->average = 2;
                    }
                            else if($ave >= 1){
                            $forms->average = 1;
                    }
                    else{
                            $forms->average = 0;
                    }
                $forms->no_outputs = count(request()->op2_output);
            $forms->save();
            }
        }

        for ($i = 0; $i < count(request()->gas_output); $i++) {
            if ($i<request()->gasCount){

            $forms                              =   Forms::find(request()->gas_id[$i]);
            $forms->quality                     =  (request()->gasquality[$i]);
            $forms->efficiency                  =  (request()->gasefficiency[$i]);
            $forms->timeliness                  =  (request()->gastimeliness[$i]);
            $sum                                =  (request()->gasquality[$i] + request()->gasefficiency[$i] + request()->gastimeliness[$i]);
                    $ave                         =  $sum / 3;
                    
                    if($ave == 5){
                            $forms->average = 5;
                    }
                            else if($ave >= 4){
                            $forms->average = 4;
                    }
                            else if($ave >= 3){
                            $forms->average = 3;
                    }
                            else if($ave >= 2){
                            $forms->average = 2;
                    }
                            else if($ave >= 1){
                            $forms->average = 1;
                    }
                    else{
                            $forms->average = 0;
                    }
                $forms->no_outputs = count(request()->gas_output);
            $forms->save();  
        }

        for ($i = 0; $i < count(request()->sto_output); $i++) {

            if ($i<request()->stoCount){

            $forms                              =   Forms::find(request()->sto_id[$i]);
            $forms->quality                     =  (request()->stoquality[$i]);
            $forms->efficiency                  =  (request()->stoefficiency[$i]);
            $forms->timeliness                  =  (request()->stotimeliness[$i]);
            $sum                                =  (request()->stoquality[$i] + request()->stoefficiency[$i] + request()->stotimeliness[$i]);
                    $ave                         =  $sum / 3;
                    
                    if($ave == 5){
                            $forms->average = 5;
                    }
                            else if($ave >= 4){
                            $forms->average = 4;
                    }
                            else if($ave >= 3){
                            $forms->average = 3;
                    }
                            else if($ave >= 2){
                            $forms->average = 2;
                    }
                            else if($ave >= 1){
                            $forms->average = 1;
                    }
                    else{
                            $forms->average = 0;
                    }
            $forms->no_outputs = count(request()->sto_output);
            $forms->save();

            }
             
        }

        for ($i = 0; $i < count(request()->innov_output); $i++) {
            
           
           
             // Assesses already added inputs
            if ($i<request()->innovCount){

            // skips marked inputs and assesses inputs for changes
                
            $forms                              =  Forms::find(request()->innov_id[$i]);
            $forms->quality                     =  (request()->innovquality[$i]);
            $forms->efficiency                  =  (request()->innovefficiency[$i]);
            $forms->timeliness                  =  (request()->innovtimeliness[$i]);
            $sum                                =  (request()->innovquality[$i] + request()->innovefficiency[$i] + request()->innovtimeliness[$i]);
                    $ave                         =  $sum / 3;
                    
                    if($ave == 5){
                            $forms->average = 5;
                    }
                            else if($ave >= 4){
                            $forms->average = 4;
                    }
                            else if($ave >= 3){
                            $forms->average = 3;
                    }
                            else if($ave >= 2){
                            $forms->average = 2;
                    }
                            else if($ave >= 1){
                            $forms->average = 1;
                    }
                    else{
                            $forms->average = 0;
                    }
            $forms->no_outputs = count(request()->innov_output);
            $forms->save();
                   
            } 
          
        }
        

        return redirect('/dashboard');

}

}

}

