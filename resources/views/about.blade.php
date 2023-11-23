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


    
    
@endsection
