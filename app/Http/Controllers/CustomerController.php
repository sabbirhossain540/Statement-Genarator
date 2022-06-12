<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allCustomers = Customer::all();
        return view('customer.index', compact('allCustomers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->id != ""){
            $cusInfo = Customer::findOrFail($request->id);
            $cusInfo->cus_id = $request->cus_id;
            $cusInfo->name = $request->name;
            $cusInfo->father_name = $request->fatherName;
            $cusInfo->mother_name = $request->motherName;
            $cusInfo->spouse = $request->spouseName;
            $cusInfo->mobile = $request->mobileNo;
            $cusInfo->address = $request->address;
            $cusInfo->account_no = $request->accountNo;
            $cusInfo->opening_date = $request->openingDate;
            $cusInfo->account_type = $request->accountType;
            $cusInfo->save();
            session()->flash('success', 'Csutomer updated successfully');
            return redirect()->route('customers.index');

        }else{
            $cusModel = new Customer();
            $cusModel->cus_id = $request->cus_id;
            $cusModel->name = $request->name;
            $cusModel->father_name = $request->fatherName;
            $cusModel->mother_name = $request->motherName;
            $cusModel->spouse = $request->spouseName;
            $cusModel->mobile = $request->mobileNo;
            $cusModel->address = $request->address;
            $cusModel->account_no = $request->accountNo;
            $cusModel->opening_date = $request->openingDate;
            $cusModel->account_type = $request->accountType;
            $cusModel->save();
            session()->flash('success', 'Csutomer created successfully');
            return redirect()->route('customers.index');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customerInfo = Customer::where('id',$id)->first();
        return view('customer.show', compact(array('customerInfo')));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customerInfo = Customer::where('id',$id)->first();
        return view('customer.edit',compact(array('customerInfo')));
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
        $user = Customer::findOrFail($id);
        //$this->activity_log("delete doctor. { name:".$user->name." id:".$user->id." }", "delete");
        $user->delete();
        session()->flash('success', 'Customer deleted successfully');
        return redirect()->route('customers.index');
    }
}
