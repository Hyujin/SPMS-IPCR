<?php

namespace App\Http\Controllers;

use App\Pdp;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PdpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pdp = Pdp::all();

        return view('pdp.index', compact('pdp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pdp = Pdp::all();

        return view('/pdp', compact('pdp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pdp = new Pdp;
        $pdp->employees_id = request()->employees_id;  
        $pdp->aim = request()->aim;
        $pdp->objective = request()->objective;
        $pdp->target_date = request()->target_date;
        $pdp->review_date = request()->review_date;
        $pdp->achieved_date = request()->achieved_date;
        $pdp->comment = request()->comment;
        $pdp->task = request()->task;
        $pdp->outcome = request()->outcome;
        $pdp->next_steps = request()->next_steps;

        $pdp->save();

        // return view('forms/pdp/showpdp', compact('pdp'));
        return redirect('dashboard');
    }

    public function show($id){

        $pdp = Pdp::find($id);

        return view('forms/pdp/showpdp', compact('pdp'));

    }

    public static function getEmployeeName($employee_id)
    {
        $emp = employees::find($form_id);
        return $emp->first_name." ".$emp->last_name;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pdp  $pdp
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     $pdp = Pdp::with('employee')->find($id)->employee; 

    //     return view('/showPdp', compact('pdp'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pdp  $pdp
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pdp = Pdp::find($id);
        

        return view('/forms/pdp/pdpedit', compact('pdp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pdp  $pdp
     * @return \Illuminate\Http\Response
     update(x)
     */
    public function update(Request $request, $employee_id)
    {
        $request->validate([
        'aim'=>'required',
        'objective'=>'required',
        'target_date'=>'required',
        'review_date'=>'required',
        'achieved_date'=>'required',
        'comment'=>'required',
        'task'=>'required',
        'outcome'=>'required',
        'next_steps'=>'required',
        ]);

        $pdp = Pdp::find($employee_id);
        $pdp->aim = $request->get('aim');
        $pdp->objective = $request->get('objective');
        $pdp->target_date = $request->get('target_date');
        $pdp->review_date = $request->get('review_date');
        $pdp->achieved_date = $request->get('achieved_date');
        $pdp->comment = $request->get('comment');
        $pdp->task = $request->get('task');
        $pdp->outcome = $request->get('outcome');
        $pdp->next_steps = $request->get('next_steps');

        $pdp->save();

        return redirect('dashboard')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pdp  $pdp
     * @return \Illuminate\Http\Response
     */
    public function destroy(pdp $pdp)
    {
        //
    }
}
