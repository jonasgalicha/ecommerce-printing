@extends('layouts.app')

@section('content')

<div class="container-fluid card">
    <div class="card-header">
        <h4>Users Request to be Supplier</h4>
    </div>
    <div class="card-body mt-5">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable">
                <thead>
                    <tr>
                        <td>Full Name</td>
                        <td>Email</td>
                        <td>Phone Number</td>
                        <td>Valid ID</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usersRequests as $request)
                        <tr>
                            <td>{{ $request->full_name }}</td>
                            <td>{{ $request->email }}</td>
                            <td>{{ $request->phone_number }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $request->valid_id ) }}" alt="" height="100" width="100">
                            </td>
                            <td>
                                <a href="{{ route('admin-supplier.approved', $request->id) }}" class="btn btn-primary">Approve</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        $('#dataTable').DataTable();
    </script>
</div>
@endsection
