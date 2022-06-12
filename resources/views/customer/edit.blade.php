@extends('main')

@section("content")

    <div class="row justify-content-md-center">
        <div class="col-md-10">
            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <div class="d-flex flex-row">
                        <div class="col-md-10">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Customer</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('customers.store')}}" >
                        @csrf
                        <input type="text" name="id" id="id" value="{{ $customerInfo->id }}">
                        <div class="row mb-3">
                            <div class="col">
                                <label for="Fullname">Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter your fullname" value="{{ $customerInfo->name }}" required>
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="cus_id">Customer Id</label>
                                <input type="number" name="cus_id" id="cus_id" class="form-control" placeholder="Customer Id" value="{{ $customerInfo->cus_id }}">
                                @error('cus_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label for="fatherName">Father / Husband Name</label>
                                <input type="text" name="fatherName" id="fatherName" class="form-control" placeholder="Enter father name" value="{{ $customerInfo->father_name }}">
                                @error('fatherName')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="motherName">Mother Name</label>
                                <input type="text" name="motherName" id="motherName" class="form-control" placeholder="Enter mother name" value="{{ $customerInfo->mother_name }}">
                                @error('motherName')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label for="spouseName">Spouse Name</label>
                                <input type="text" name="spouseName" id="spouseName" class="form-control" placeholder="Enter spouse name" value="{{ $customerInfo->	spouse }}">
                                @error('spouseName')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="mobileNo">Mobile no</label>
                                <input type="number" name="mobileNo" id="mobileNo" class="form-control" placeholder="Enter mobile no" value="{{ $customerInfo->mobile }}">
                                @error('mobileNo')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label for="accountNo">Account No</label>
                                <input type="number" name="accountNo" id="accountNo" class="form-control" placeholder="Enter account no" value="{{ $customerInfo->account_no }}">
                                @error('accountNo')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col">
                                <label for="openingDate">Opening Date</label>
                                <input type="date" id="openingDate" name="openingDate" class="form-control" placeholder="Opening Date" value="{{ $customerInfo->opening_date }}">
                            </div>

                            <div class="col">
                                <label for="accountType">Account Type</label>
                                <input type="text" id="accountType" name="accountType" class="form-control" placeholder="Account Type" value="{{ $customerInfo->account_type }}">
                            </div>
                        </div>


                        <div class="row mb-4">
                            <div class="col">
                                <label for="address">Address</label>
                                <textarea name="address" class="form-control" id="address" cols="30" rows="5" placeholder="Address">{{ $customerInfo->address }}</textarea>
                            </div>
                        </div>

                        <div class="d-flex flex-row mb-3">
                            <div class="col-9 p-2"></div>
                            <div class="col-3 p-2">
                                <a href="{{route('customers.index')}}" class="btn btn-danger btn-sm">Cancel</a>
                                <button type="submit" class="btn btn-success btn-sm">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $( document ).ready(function() {
            flatpickr("#birth_day");
        });
    </script>


@endsection
