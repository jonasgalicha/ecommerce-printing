@extends('layouts.app')

@section('content')  
    <div class="container">
        <h1 class="text-center">Add Product</h1>
        <form action="/add-product" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="productName" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="productName" name="productName" required>
            </div>
            <div class="mb-3">
                <label for="productImage" class="form-label">Product Image</label>
                <input type="file" class="form-control" id="productImage" name="productImage" required>
            </div>
            <div class="mb-3">
                <label for="productDescription" class="form-label">Product Description</label>
                <textarea class="form-control" id="productDescription" name="productDescription" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="productPrice" class="form-label">Product Price</label>
                <input type="number" class="form-control" id="productPrice" name="productPrice" min="0" step="0.01" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div>
    
    
    <div class="container">
    <h1 class="text-center mt-5">Request Quotation</h1>
    <form id="quotationForm">
        <div class="mb-3">
            <label for="serviceType">Select Quotation</label>
            <select id="serviceType" name="serviceType" class="form-select" required>
                <option value="">Please select</option>
                <option value="tarpaulin">Sticker</option>
                <option value="outdoorSignage">Outdoor Signage</option>
                <option value="indoorSignage">Indoor Signage</option>
                <option value="shirtPrinting">Shirt Printing</option>
                <option value="souvenir">Souvenir</option>
                <option value="tarpaulin">Tarpaulin</option>
                <option value="custom">Custom..</option>
                
            </select>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Upload File</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="tel" class="form-control" id="phone">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit Request</button>
    </form>
</div>

   
  
@endsection
