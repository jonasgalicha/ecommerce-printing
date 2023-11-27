@extends('layouts.app')

@section('content')

<div class="contaienr-fluid card">
    <div class="card-header row">
        <div class="col">
            <h4>Quotations</h4>
        </div>
        <div class="col text-end">
            <a href="{{ route('quotation.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable">
                <thead>
                    <tr>
                        <td>Image</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Service Type</td>
                        <td>Description</td>
                        <td>Phone Number</td>
                        <td>Status</td>
                        @if (auth()->user()->hasRole('admin') || auth()->user()->hasRole('staff'))
                        <td>Action</td>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($quotations as $quotation)
                        <tr>
                            <td>
                                <img src="{{ asset('storage/' . $quotation->image) }}" alt="" height="150" width="150">
                            </td>
                            <td>{{ $quotation->name }}</td>
                            <td>{{ $quotation->email }}</td>
                            <td>{{ $quotation->quotation }}</td>
                            <td>{{ $quotation->description }}</td>
                            <td>{{ $quotation->phone_number }}</td>
                            <td>
                                @if ($quotation->status == 0)
                                    <strong class="text-warning">Pending</strong>
                                @elseif ($quotation->status == 1)
                                    <strong class="text-danger">Cancelled</strong>
                                @else
                                    <strong class="text-success">Success</strong>
                                @endif
                            </td>
                            @if (auth()->user()->hasRole('admin') || auth()->user()->hasRole('staff'))
                            <td class="d-flex">
                                <a href="{{ route('quotation.cancel', $quotation->id) }}" class="btn btn-secondary me-2">Cancel</a>
                                <a href="{{ route('quotation.complete', $quotation->id) }}" class="btn btn-success me-2">Complete</a>
                                @admin
                                <form action="{{ route('quotation.destroy', $quotation->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger text-white"><strong>Delete</strong></button>
                                </form>
                                @endadmin
                            </td>
                            @endif
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
