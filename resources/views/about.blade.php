@extends('layouts.app')

@section('content')

<div class="container">
 <h1 class="my-4">Supplier Application</h1>
 <form>
    <div class="row">
      <div class="col-md-6">
        <div class="mb-3">
          <label for="fullName" class="form-label">Full Name</label>
          <input type="text" class="form-control" id="fullName" name="fullName" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
      </div>
      <div class="col-md-6">
        <div class="mb-3">
          <label for="phone" class="form-label">Phone</label>
          <input type="tel" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="mb-3">
          <label for="idUpload" class="form-label">Upload Valid ID</label>
          <input type="file" class="form-control" id="idUpload" name="idUpload" required>
        </div>
      </div>
    </div>
    <div class="mb-3">
      <label for="benefits" class="form-label">Benefits of Being a Supplier</label>
      <ul>
        <li>Exclusive access to exclusive discounts on our products</li>
        <li>Opportunity to sell your products directly on our platform</li>
        <li>Dedicated support and assistance to grow your business</li>
      </ul>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
 </form>
</div>

<div class="container">
    <h1 class="my-5">Admin Dashboard</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card text-center mb-4">
                <div class="card-body">
                    <h2 class="card-title">Users</h2>
                    <p class="card-text">View and manage all registered users in page  </p>
                    <a href="#" class="btn btn-primary">View Users</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center mb-4">
                <div class="card-body">
                    <h2 class="card-title">Orders</h2>
                    <p class="card-text">View and manage all orders made by users</p>
                    <a href="#" class="btn btn-primary">View Orders</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center mb-4">
                <div class="card-body">
                    <h2 class="card-title">Products</h2>
                    <p class="card-text">View and manage all products in the inventory</p>
                    <a href="#" class="btn btn-primary">View Products</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card text-center mb-4">
                <div class="card-body">
                    <h2 class="card-title">Messages</h2>
                    <p class="card-text">View and manage all messages from customers</p>
                    <a href="#" class="btn btn-primary">View Messages</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
        <h2>Shopping Cart</h2>
        <div class="card text-start mb-6">
            <div class="card-body">
                <div class="row">
                      <div class="col-md-4">
                        <img src="https://via.placeholder.com/150" alt="Product" class="img-fluid">
                    </div>
                    <div class="col-md-4">
                        <h5>Product Name</h5>
                        <p>Product Description</p>
                        <h6>Quantity: 3</h6>
                    </div>
                    <div class="col-md-4">
                        <h6>Price: $18</h6>
                        <button class="btn btn-danger">Remove Item</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h1>Shopping Cart</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Product 1</td>
                    <td>1</td>
                    <td>$10</td>
                    <td>
                        <button class="btn btn-primary">Edit</button>
                        <button class="btn btn-danger">Remove</button>
                    </td>
                </tr>
                <tr>
                    <td>Product 2</td>
                    <td>2</td>
                    <td>$20</td>
                    <td>
                        <button class="btn btn-primary">Edit</button>
                        <button class="btn btn-danger">Remove</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
    
@endsection
