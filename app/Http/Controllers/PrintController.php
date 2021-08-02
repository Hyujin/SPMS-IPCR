<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\printview;
use App\preforms;
use App\Forms;
use DB;

use Illuminate\Http\Request;

class printController extends Controller
{
     public function create(Request $request)
    {
        $form_id  = request()->id; /* Sent form_id through post hidden input instead from route parameter due to issues */
 		$id  = request()->id;

 		$operations1 = DB::table('forms')->selectRaw('*')->whereRaw("form_id = '$form_id' and tag = 1")->orderBy('id')->get();

        $operations2 = DB::table('forms')->selectRaw('*')->whereRaw("form_id = '$form_id' and tag = 2")->orderBy('id')->get();

        $general_administrative_services = DB::table('forms')->selectRaw('*')->whereRaw("form_id = '$form_id' and tag = 3")->orderBy('id')->get();

        $support_to_operations = DB::table('forms')->selectRaw('*')->whereRaw("form_id = '$form_id' and tag = 4")->orderBy('id')->get();

        $innovation = DB::table('forms')->selectRaw('*')->whereRaw("form_id = '$form_id' and tag = 5")->orderBy('id')->get();

        $data = DB::table('preforms')->selectRaw('*')->whereRaw("id = '$form_id' ")->get();
        $strtdt = DB::table('preforms')->selectRaw('start_date')->whereRaw("id = '$form_id' ")->get();
        $enddt = DB::table('preforms')->selectRaw('end_date')->whereRaw("id = '$form_id' ")->get();

       


        return view('/view', compact('data', 'operations1', 'operations2', 'general_administrative_services', 'support_to_operations', 'innovation', 'strtdt', 'enddt'));
    }


 public function backup(Request $request)

    {
        $id  = request()->id; /* Sent form_id through post hidden input instead from route parameter due to issues */
  
        $alldata[] = printview::find($id);
        $data= printview::find($id);
        
        return view('/view', compact('data', 'alldata'));
    }
}

