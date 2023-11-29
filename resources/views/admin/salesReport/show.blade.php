@extends('layouts.app')

@section('content')

<div class="container-fluid card">
    <div class="card-header row">
        <div class="col">
            <h3>Sales Reports as of Day {{ date('F j, Y', strtotime($salesDate->date)) }}</h3>
        </div>
        <div class="col text-end">
            <a href="{{ route('sales-report.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable">
                <thead>
                    <tr>
                        <td>Description</td>
                        <td>Amout</td>
                        <td>Downpayment</td>
                        <td>Status</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $totalDownPayment = $salesDate->salesReports->sum('down_payment');
                        $totalAmount = $salesDate->salesReports->sum('amount');
                    @endphp
                    @foreach ($salesDate->salesReports as $salesReport)
                        <tr>
                            <td>{{ $salesReport->description }}</td>
                            <td>{{ number_format($salesReport->amount, 2) }}</td>
                            <td>{{ number_format($salesReport->down_payment, 2) }}</td>
                            <td>
                                @if($salesReport->status == 1)
                                    <strong>HALF PAID</strong>
                                @else
                                    <strong>FULLY PAID</strong>
                                @endif
                            </td>
                            <td class="d-flex">
                                <a href="{{ route('sales-report.edit', $salesReport->id) }}" class="btn btn-primary me-2">Edit</a>
                                @admin
                                <form action="{{ route('sales-report.destroy', $salesReport->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger text-white" onclick="confirmDelete(event)"><strong>Delete</strong></button>
                                </form>
                                @endadmin
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tbody>
                    <tr>
                        <td><strong style="font-weight: 700">TOTAL SALES</strong></td>
                        <td><strong style="font-weight: 700">{{ number_format($totalAmount, 2) }}</strong></td>
                        <td><strong style="font-weight: 700">{{ number_format($totalDownPayment, 2) }}</strong></td>
                        <td>
                        </td>
                        <td class="d-flex">
                        </td>
                    </tr>
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
                    text: "Are you sure to delete this REPORT permanently?",
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
