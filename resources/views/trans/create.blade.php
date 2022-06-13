@extends('main')

@section("content")

    <div class="row justify-content-md-center">
        <div class="col-md-10">
            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <div class="d-flex flex-row">
                        <div class="col-md-10">
                            <h6 class="m-0 font-weight-bold text-primary">Create Transection</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('transinfo.store')}}" >
                        @csrf
                        <div class="row mb-3">
                            <div class="col">
                                <label for="Fullname">Customer Name</label>
                                <select name="cus_id" id="cus_id" class="form-control" required>
                                    <option value="">Select Customer</option>
                                    @foreach($allcustomers as $customer)
                                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <label for="openingDate">Transection Date</label>
                                <input type="date" id="transDate" name="transDate" class="form-control" placeholder="Transerction Date">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label for="particulars">Particulars</label>
                                <input type="text" name="particulars" id="particulars" class="form-control" placeholder="Enter particulars">
                                @error('particulars')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="instrument_no">Instrument No</label>
                                <input type="text" name="instrument_no" id="instrument_no" class="form-control" placeholder="Enter instrument no">
                                @error('instrument_no')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label for="withdraw">Withdraw Amount</label>
                                <input type="number" name="withdraw" id="withdraw" class="form-control" placeholder="Enter Withdraw amount">
                                @error('withdraw')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="deposite">Deposite Amount</label>
                                <input type="number" name="deposite" id="deposite" class="form-control" placeholder="Enter deposite amount">
                                @error('deposite')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex flex-row mb-3">
                            <div class="col-9 p-2"></div>
                            <div class="col-3 p-2">
                                <a href="{{route('transinfo.index')}}" class="btn btn-danger btn-sm">Cancel</a>
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
