@extends('main')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex flex-row">
                <div class="col-md-10">
                    <h6 class="m-0 font-weight-bold text-primary">Customer Information</h6>
                </div>

                <div class="col-md-2" style="margin-left: 65px;">
                    <a href="{{route('customers.index')}}" class="btn btn-info btn-sm pl-10">Back to list</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="d-flex flex-row mb-3">
                    <div class="col-3 p-2"></div>
                    <div class="col-4 p-2" style="border-right: 1px dotted black">
                        <tr>
                            <td>Customer ID: </td>
                            <td>{{ $customerInfo->cus_id }}</td>
                        </tr>
                        <br>
                        <tr>
                            <td>Name: </td>
                            <td>{{ $customerInfo->name }}</td>
                        </tr>
                        <br>
                        <tr>
                            <td>Father/Husband: </td>
                            <td>{{ $customerInfo->father_name }}</td>
                        </tr>
                        <br>
                        <tr>
                            <td>Mother Name: </td>
                            <td>{{ $customerInfo->mother_name }}</td>
                        </tr>
                        <br>
                        <tr>
                            <td>Spouse: </td>
                            <td>{{ $customerInfo->spouse }}</td>
                        </tr>
                        <br>
                        <tr>
                            <td>Mobile/Phone: </td>
                            <td>{{ $customerInfo->mobile }}</td>
                        </tr>
                        <br>
                        <tr>
                            <td>Address: </td>
                            <td>{{ $customerInfo->address }}</td>
                        </tr>
                        <br>
                        <br>
                        <tr>
                            <td>Account No: </td>
                            <td>{{ $customerInfo->account_no }}</td>
                        </tr>
                        <br>
                        <tr>
                            <td>Opening Date: </td>
                            <td>{{ $customerInfo->opening_date }}</td>
                        </tr>
                        <br>
                        <tr>
                            <td>Last Transection: </td>
                            <td>After </td>
                        </tr>
                        <br>
                        <tr>
                            <td>Account Type: </td>
                            <td>{{ $customerInfo->account_type }}</td>
                        </tr>

                    </div>
                </div>
            </div>

            <br><br>

            <table class="table table-sm">
                <thead>
                <tr>
                    <td>Trans Date</td>
                    <td>Particulars</td>
                    <td>Instrument No</td>
                    <td>Withdraw</td>
                    <td>Deposite</td>
                    <td>Balance</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>15/05/2022</td>
                    <td>Amin</td>
                    <td>pd4454</td>
                    <td>12000</td>
                    <td>5000</td>
                    <td>7000</td>
                </tr>
                </tbody>
            </table>
    </div>
@endsection
