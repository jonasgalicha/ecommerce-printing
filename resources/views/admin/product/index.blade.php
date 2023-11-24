@extends('layouts.app')

@section('content')

<div class="container-fluid card">
    <div class="card-header row">
        <div class="col">
            <h4>Products List</h4>
        </div>
        <div class="col text-end">
            <a href="{{ route('product.create') }}" class="btn btn-primary">Add Product</a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable">
                <thead>
                    <tr>
                        <td>Product Image</td>
                        <td>Product Name</td>
                        <td>Product Description</td>
                        <td>Price</td>
                        @admin
                        <td>Action</td>
                        @endadmin
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>
                                @foreach ($product->productImages as $image)
                                    <img src="{{ asset('storage/' . $image->image_path) }}" alt="" height="100" width="100">
                                @endforeach
                            </td>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->product_description }}</td>
                            <td>{{ number_format($product->price, 2) }}</td>
                            @admin
                            <td>
                                <a href="{{ route('mainProduct', $product->id) }}" class="btn btn-primary">Main Product</a>
                                <a href="{{ route('normalProduct', $product->id) }}" class="btn btn-secondary">Normal Product</a>
                                <a href="{{ route('activeProduct', $product->id) }}" class="btn btn-success text-white"><strong>Active Product</strong></a>
                            </td>
                            @endadmin
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
