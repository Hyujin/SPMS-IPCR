<?php

namespace App\Http\Controllers;

use DB;
use App\Forms;
use App\employees;
use App\Preforms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class FormController extends Controller
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
   
    public function create(Request $request){
        
       $forms = forms::find(form_id);   
        return view('/forms/ipcr/edit', compact('forms'));

    }

    public function store(Request $request)
    {
        $forms = new Forms;

        $data1 = array();
        $data2 = array();
        $data3 = array();
        $data4 = array();
        $data5 = array();

 

        for ($i = 0; $i < count(request()->op1_output); $i++) {
            if(request()->op1_output[$i] != "" and request()->op1_success_indicator[$i] != "" and request()->op1_actual_accomplishments[$i] != "")
            {

               $data1[] = array(
                    'output'=>request()->op1_output[$i], 
                    'success_indicator'=>request()->op1_success_indicator[$i],
                    'actual_accomplishments'=>request()->op1_actual_accomplishments[$i],
                    'tag'=>'1',
                    'form_id'=>request()->form_id               
        ); 
            Forms::insert($data1); 
        } //endif
       
           
        
       
    }


    for ($i = 0; $i < count(request()->op2_output); $i++) {
        if(request()->op2_output[$i] != "" and request()->op2_success_indicator[$i] != "" and request()->op2_actual_accomplishments[$i] != ""){


        $data2[] = array(
                    'output'=>request()->op2_output[$i], 
                    'success_indicator'=>request()->op2_success_indicator[$i],
                    'actual_accomplishments'=>request()->op2_actual_accomplishments[$i],
                    'tag'=>'2',
                    'form_id'=>request()->form_id
        );
         
        
    
           Forms::insert($data2);
        }//endif

    }

    for ($i = 0; $i < count(request()->gas_output); $i++) {
        if(request()->gas_output[$i] != "" and request()->gas_success_indicator[$i] != "" and request()->gas_actual_accomplishments[$i] != ""){
        $data3[] = array(
                    'output'=>request()->gas_output[$i], 
                    'success_indicator'=>request()->gas_success_indicator[$i],
                    'actual_accomplishments'=>request()->gas_actual_accomplishments[$i],
                    'tag'=>'3',
                    'form_id'=>request()->form_id
        );
    
             Forms::insert($data3);
         }
     }


    for ($i = 0; $i < count(request()->sto_output); $i++) {
        if(request()->sto_output[$i] != "" and request()->sto_success_indicator[$i] != "" and request()->sto_actual_accomplishments[$i] != ""){
        $data4[] = array(
                    'output'=>request()->sto_output[$i], 
                    'success_indicator'=>request()->sto_success_indicator[$i],
                    'actual_accomplishments'=>request()->sto_actual_accomplishments[$i],
                    'tag'=>'4',
                    'form_id'=>request()->form_id
        );
    
             Forms::insert($data4);
         }
     }

    for ($i = 0; $i < count(request()->innov_output); $i++) {
        if(request()->innov_output[$i] != "" and request()->innov_success_indicator[$i] != "" and request()->innov_actual_accomplishments[$i] != ""){
        $data5[] = array(
                    'output'=>request()->innov_output[$i], 
                    'success_indicator'=>request()->innov_success_indicator[$i],
                    'actual_accomplishments'=>request()->innov_actual_accomplishments[$i],
                    'tag'=>'5',
                    'form_id'=>request()->form_id
        );
 
             Forms::insert($data5);
         }
     }

          

                return redirect('/dashboard');


    }

    public function edit($form_id)
    {
        $forms =  Forms::find($form_id);
        $employees = Employees::find($form_id);



       /* return view('forms/ipcr/edit/pre')->with('forms', $forms);*/
        return view('forms/ipcr/edit/post', compact('forms', 'employees'));
    }

    
     public function update(Request $request)
    {

         /*$request->validate([
            'op1_output'=>'required',
            'op2_output'=>'required',
            'gas_output'=>'required',
            'sto_output'=>'required',
            'innov_output'=>'required',

            'op1_actual_accomplishments'=>'required',
            'op2_actual_accomplishments'=>'required',
            'gas_actual_accomplishments'=>'required',
            'sto_actual_accomplishments'=>'required',
            'innov_actual_accomplishments'=>'required',

            'op1_success_indicator'=>'required',
            'op2_success_indicator'=>'required',
            'gas_success_indicator'=>'required',
            'sto_success_indicator'=>'required',
            'innov_success_indicator'=>'required',

            'id' => 'required',
            'form'=>'required',
            'form_id' => 'required'
        ]);*/
        $form_id = (request()->form_id);
        
   
        //loops through the length of inputs    
        for ($i = 0; $i < count(request()->op1_output); $i++) {
                       
             // Assesses already added inputs
            if ($i<request()->op1Count){

            // skips marked inputs and assesses inputs for changes
                
                    $forms                              =  Forms::find(request()->op1_id[$i]);
                    $forms->output                      =  (request()->op1_success_indicator[$i]);
                    $forms->success_indicator           =  (request()->op1_success_indicator[$i]);
                    $forms->actual_accomplishments      =  (request()->op1_actual_accomplishments[$i]); 
                    $forms->save();
                   
            }
            // Assesses newly added inputs and break if it exceeds the limit
            else{
                /*dd("You should not execute this code here idiot");*/
            $forms = new Forms;  
            
           
            $forms->output                      =  (request()->op1_output[$i]);
            $forms->success_indicator           =  (request()->op1_success_indicator[$i]);
            $forms->actual_accomplishments      =  (request()->op1_actual_accomplishments[$i]);
            $forms->tag                         =  (request()->op1_tag);
            $forms->form_id                     =  (request()->form_id);
            $forms->save();
           }
          
        }

        

         for ($i = 0; $i < count(request()->op2_output); $i++) {
            if ($i<request()->op2Count){

            $forms                              =   Forms::find(request()->op2_id[$i]);
            $forms->output                      =  (request()->op2_output[$i]);
            $forms->success_indicator           =  (request()->op2_success_indicator[$i]);
            $forms->actual_accomplishments      =  (request()->op2_actual_accomplishments[$i]);
            $forms->save();
            }
            else{
            $forms = new Forms;
            $forms->output                      =  (request()->op2_output[$i]);
            $forms->success_indicator           =  (request()->op2_success_indicator[$i]);
            $forms->actual_accomplishments      =  (request()->op2_actual_accomplishments[$i]);
            $forms->tag                         =  (request()->op2_tag);
            $forms->form_id                     =  (request()->form_id);
            $forms->save();
                }
           
        }

        for ($i = 0; $i < count(request()->gas_output); $i++) {
            if ($i<request()->gasCount){

            $forms                              =   Forms::find(request()->gas_id[$i]);
            $forms->output                      =  (request()->gas_output[$i]);
            $forms->success_indicator           =  (request()->gas_success_indicator[$i]);
            $forms->actual_accomplishments      =  (request()->gas_actual_accomplishments[$i]);
            $forms->save();
            }
            else{
            $forms = new Forms;
            $forms->output                      =  (request()->gas_output[$i]);
            $forms->success_indicator           =  (request()->gas_success_indicator[$i]);
            $forms->actual_accomplishments      =  (request()->gas_actual_accomplishments[$i]);
            $forms->tag                         =  (request()->gas_tag);
            $forms->form_id                     =  (request()->form_id);
            $forms->save();
                }
          
        }

        for ($i = 0; $i < count(request()->sto_output); $i++) {

            if ($i<request()->stoCount){

            $forms                              =   Forms::find(request()->sto_id[$i]);
            $forms->output                      =  (request()->sto_output[$i]);
            $forms->success_indicator           =  (request()->sto_success_indicator[$i]);
            $forms->actual_accomplishments      =  (request()->sto_actual_accomplishments[$i]);
            $forms->save();

            }
            else{
            $forms = new Forms;
            $forms->output                      =  (request()->sto_output[$i]);
            $forms->success_indicator           =  (request()->sto_success_indicator[$i]);
            $forms->actual_accomplishments      =  (request()->sto_actual_accomplishments[$i]);
            $forms->tag                         =  (request()->sto_tag);
            $forms->form_id                     =  (request()->form_id);
            $forms->save();
                }
             
        }

        for ($i = 0; $i < count(request()->innov_output); $i++) {
            
           
           
             // Assesses already added inputs
            if ($i<request()->innovCount){

            // skips marked inputs and assesses inputs for changes
                
                    $forms                              =  Forms::find(request()->innov_id[$i]);
                    $forms->output                      =  (request()->innov_success_indicator[$i]);
                    $forms->success_indicator           =  (request()->innov_success_indicator[$i]);
                    $forms->actual_accomplishments      =  (request()->innov_actual_accomplishments[$i]); 
                    $forms->save();
                   
            }
            // Assesses newly added inputs and break if it exceeds the limit
            else{
                /*dd("You should not execute this code here idiot");*/
            $forms = new Forms;  
            
           
            $forms->output                      =  (request()->innov_output[$i]);
            $forms->success_indicator           =  (request()->innov_success_indicator[$i]);
            $forms->actual_accomplishments      =  (request()->innov_actual_accomplishments[$i]);
            $forms->tag                         =  (request()->innov_tag);
            $forms->form_id                     =  (request()->form_id);
            $forms->save();
           }
          
        }
        
        $operations1 = array();
        for($n = 0; $n < count(request()->op1_delete); $n++){
            if(request()->op1_delete[$n] != null){
                    //dd(count(request()->op1_delete));
                    // checks if the key still has value before executing delete *due to bugs on earlier versions

                    $id = request()->op1_id[$n];
                    //dd($i);
                    $operations1[$n] = DB::delete("delete from forms where id = '$id' ");
                    
                    //dd(request()->op1_id);
                    
                }
        }

        $operations2 = array();
                for($n = 0; $n < count(request()->op2_delete); $n++){
                    if(request()->op2_delete[$n] != null){
                            //dd(count(request()->op1_delete));
                            // checks if the key still has value before executing delete *due to bugs on earlier versions

                            $id = request()->op2_id[$n];
                            //dd($i);
                            $operations2[$n] = DB::delete("delete from forms where id = '$id' ");
                            
                            //dd(request()->op1_id);
                            
                        }
                }
        
        $gas = array();
        for($n = 0; $n < count(request()->gas_delete); $n++){
            if(request()->gas_delete[$n] != null){
                    //dd(count(request()->op1_delete));
                    // checks if the key still has value before executing delete *due to bugs on earlier versions

                    $id = request()->gas_id[$n];
                    //dd($i);
                    $gas[$n] = DB::delete("delete from forms where id = '$id' ");
                    
                    //dd(request()->op1_id);
                    
                }
        }

        $sto = array();
        for($n = 0; $n < count(request()->sto_delete); $n++){
            if(request()->sto_delete[$n] != null){
                    //dd(count(request()->op1_delete));
                    // checks if the key still has value before executing delete *due to bugs on earlier versions

                    $id = request()->sto_id[$n];
                    //dd($i);
                    $sto[$n] = DB::delete("delete from forms where id = '$id' ");
                    
                    //dd(request()->op1_id);
                    
                }
        }

        $innov = array();
        for($n = 0; $n < count(request()->innov_delete); $n++){
            if(request()->innov_delete[$n] != null){
                    //dd(count(request()->op1_delete));
                    // checks if the key still has value before executing delete *due to bugs on earlier versions

                    $id = request()->innov_id[$n];
                    //dd($i);
                    $onnov[$n] = DB::delete("delete from forms where id = '$id' ");
                    
                    //dd(request()->op1_id);
                    
                }
        }


        return redirect('dashboard');
    }

    public function destroy(){
        $form_id = (request()->form_id);

         $employees                     =           Employees::find($form_id);
         $employees->deleted            =           1;
         $employees->deleted_at         =           date_create();

         $employees->save();
          

           return redirect('dashboard');
    }

}

