@extends('layouts.app')

@section('content')

<div class="container-fluid mt-5" style="min-height: 70vh">
    <h1>Shopping Cart</h1>
    <table class="table table-striped" id="dataTable">
        <thead>
            <tr>
                <th>Product Image</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Status</th>
                @admin
                <th>Action</th>
                @endadmin
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>
                        <img src="{{ asset('storage/' . $order->product->productImages->first()->image_path) }}" alt="" height="150" width="150">
                    </td>
                    <td>{{ $order->product->product_name }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>{{ number_format($order->total, 2) }}</td>
                    <td>
                        @if ($order->status == 0)
                            <strong class="text-warning">PENDING</strong>
                        @elseif ($order->status == 1)
                            <strong class="text-success">COMPLETE</strong>
                        @else
                            <strong class="text-danger">CANCELLED</strong>
                        @endif
                    </td>
                    @admin
                    <td class="">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('order.complete', $order->id) }}" class="btn btn-primary me-2">COMPLETE</a>
                            <a href="{{ route('order.cancel', $order->id) }}" class=" btn btn-secondary me-2">CANCELLED</a>
                            <form action="{{ route('order.destroy', $order->id) }}" method="POST" class="">
                                @csrf
                                @method('DELETE')
                                <button type="button" class=" btn btn-danger text-white" onclick="confirmDelete(event)"><strong>Delete</strong></button>
                            </form>
                        </div>
                    </td>
                    @endadmin
                </tr>
            @endforeach
        </tbody>
    </table>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();

            window.confirmDelete = function(e) {
                e.preventDefault();
                const target = e.target; // Get the element that triggered the event
                Swal.fire({
                    title: 'Are you sure?',
                    text: "Are you sure to delete this ORDER permanently?",
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
