@extends('main')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex flex-row">
                <div class="col-md-10">
                    <h6 class="m-0 font-weight-bold text-primary">Transection List</h6>
                </div>
                <div class="col-md-2">
                    <a href="{{route('transinfo.create')}}" class="btn btn-primary btn-sm pl-10"><i class="fas fa-plus"></i> Create Transection</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th width="5%">SN</th>
                        <th width="15%">Customer Name</th>
                        <th width="10%">Trans Date</th>
                        <th width="10%">Particulars</th>
                        <th width="10%">Instrument no</th>
                        <th width="10%">Withdraw</th>
                        <th width="10%">Deposite</th>
                        <th width="10%">Balance</th>
                        <th width="20%">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($allTransection as $key=>$transection)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $transection->getCustomerName['name'] }}</td>
                            <td>{{ $transection->tr_date }}</td>
                            <td>{{ $transection->particulars }}</td>
                            <td>{{ $transection->instrument_no }}</td>
                            <td>{{ $transection->withdraw }}</td>
                            <td>{{ $transection->deposite }}</td>
                            <td>{{ $transection->balace }}</td>
                            <td>
                                <a href="{{route('transinfo.show',$transection->id)}}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                                <a href="{{route('transinfo.show',$transection->id)}}" class="btn btn-warning btn-sm"><i class="fas fa-print"></i></a>
                                <a href="{{route('transinfo.edit',$transection->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                <button class="btn btn-danger btn-sm" onclick="handleDelete({{ $transection->id }})"><i class="fas fa-trash-alt"></i></button>
                            </td>


                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <form action="" method="POST" id="deleteForm">
        @csrf
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>Are you sure want to delete this customer?</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">No. Go back</button>
                        <button type="submit" class="btn btn-danger btn-sm">Yes. Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                "order": [[ 0, "desc" ]]
            });
        });
        function handleDelete(id){
            var form = document.getElementById('deleteForm')
            form.action = '/deleteCustomer/'+id
            //console.log(form)
            $('#deleteModal').modal('show')
        }
    </script>

@endsection
