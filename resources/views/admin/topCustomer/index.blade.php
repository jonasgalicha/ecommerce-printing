@extends('layouts.app')

@section('content')

<div class="container-fluid card">
    <div class="card-header row">
        <div class="col">
            <h1>Top Customers</h1>
        </div>
        <div class="col">
            <a href="{{ route('top-customer.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Comment</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($topCustomers as $topCustomer)
                        <tr>
                            <td>{{ $topCustomer->name }}</td>
                            <td>{{ $topCustomer->comment }}</td>
                            <td>
                                <img src="{{ asset('storage/'. $topCustomer->image) }}" alt="" height="150" width="150">
                            </td>
                            <td>
                                <form action="{{ route('top-customer.destroy', $topCustomer->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger text-white"><strong>Delete</strong></button>
                                </form>
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
