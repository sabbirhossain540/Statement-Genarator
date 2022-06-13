<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\TransectionInfo;
use Illuminate\Http\Request;

class TransectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allTransection = TransectionInfo::with('getCustomerName')->get();
        return view('trans.index', compact('allTransection'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allcustomers = Customer::all();
        return view('trans.create', compact('allcustomers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transModel = new TransectionInfo();
        $transModel->cus_id = $request->cus_id;
        $transModel->tr_date = $request->transDate;
        $transModel->particulars = $request->particulars;
        $transModel->instrument_no = $request->instrument_no;
        $transModel->withdraw = $request->withdraw;
        $transModel->deposite = $request->deposite;
        $transModel->balace = 0;
        $transModel->save();

        session()->flash('success', 'Transection info created successfully');
        return redirect()->route('transinfo.index');

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
        //
    }
}
