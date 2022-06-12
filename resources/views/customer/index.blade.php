@extends('main')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex flex-row">
                <div class="col-md-10">
                    <h6 class="m-0 font-weight-bold text-primary">Doctor List</h6>
                </div>
                <div class="col-md-2" style="margin-left: 40px;">
                    <a href="{{route('customers.create')}}" class="btn btn-primary btn-sm pl-10"><i class="fas fa-plus"></i> Create Customer</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th width="5%">SN</th>
                        <th width="10%">Name</th>
                        <th width="10%">Father Name</th>
                        <th width="10%">Customer ID</th>
                        <th width="10%">Account No</th>
                        <th width="10%">Mobile No</th>
                        <th width="20%">Address</th>
                        <th width="20%">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($allCustomers as $key=>$user)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->father_name }}</td>
                            <td>{{ $user->cus_id }}</td>
                            <td>{{ $user->account_no }}</td>
                            <td>{{ $user->mobile }}</td>
                            <td>{{ $user->address }}</td>
                            <td>
                                <a href="{{route('customers.show',$user->id)}}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                                <a href="{{route('customers.show',$user->id)}}" class="btn btn-warning btn-sm"><i class="fas fa-print"></i></a>
                                <a href="{{route('customers.edit',$user->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                <button class="btn btn-danger btn-sm" onclick="handleDelete({{ $user->id }})"><i class="fas fa-trash-alt"></i></button>
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
