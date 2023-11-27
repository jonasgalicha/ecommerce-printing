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
                        <td>Status</td>
                        @admin
                        <td>Action</td>
                        @endadmin
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
                                @if ($request->status == 0)
                                    <strong style="text-warning">PENDING</strong>
                                @elseif ($request->status == 2)
                                     <strong style="text-danger">Cancelled</strong>
                                @endif
                            </td>
                            @admin
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('admin-supplier.approved', $request->id) }}" class="btn btn-primary me-2">Approve</a>
                                    <a href="{{ route('admin-supplier.reject', $request->id) }}" class="btn btn-secondary me-2">Reject</a>
                                    <form action="{{ route('admin-supplier.destroy', $request->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger text-white" onclick="confirmDelete(event)"><strong>Delete</strong></button>
                                    </form>
                                </div>
                            </td>
                            @endadmin
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();

            window.confirmDelete = function(e) {
                e.preventDefault();
                const target = e.target; // Get the element that triggered the event
                Swal.fire({
                    title: 'Are you sure?',
                    text: "Are you sure to delete this Request to be Supplier permanently?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Find the closest form and submit it
                        $(target).closest('form').submit();
                    }
                });
            }
        });
    </script>
</div>
@endsection
