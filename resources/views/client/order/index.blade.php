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
                        <a href="{{ route('order.complete', $order->id) }}" class="btn btn-primary me-2">COMPLETE</a>
                        <a href="{{ route('order.cancel', $order->id) }}" class="btn btn-secondary">CANCELLED</a>
                    </td>
                    @endadmin
                </tr>
            @endforeach
        </tbody>
    </table>
    <script>
        $('#dataTable').DataTable()
    </script>
</div>
@endsection
