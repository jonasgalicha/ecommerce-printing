@extends('layouts.app')

@section('content')

<div class="container" style="min-height: 80vh; margin-top: 7%">
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div>{{$error}}</div>
    @endforeach
@endif
 <h1 class="my-4">Supplier Application</h1>
 <form action="{{ route('supplier-request.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-md-6">
        <div class="mb-3">
          <label for="fullName" class="form-label">Full Name</label>
          <input type="text" class="form-control" id="fullName" placeholder="Full Name" name="full_name" required>
        </div>
        @error('full_name')
        <small class="text-danger">{{ $message }}</small>
        @enderror
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
        </div>
        @error('email')
        <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
      <div class="col-md-6">
        <div class="mb-3">
          <label for="phone" class="form-label">Phone</label>
          <input type="number" class="form-control" id="phone" name="phone_number" placeholder="Phone Number" required>
        </div>
        @error('phone_number')
        <small class="text-danger">{{ $message }}</small>
        @enderror
        <div class="mb-3">
          <label for="idUpload" class="form-label">Upload Valid ID</label>
          <input type="file" class="form-control" id="idUpload" name="valid_id" required>
        </div>
        @error('valid_id')
        <small class="text-danger">{{ $message }}</small>
        @enderror
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
    <button type="submit" class="btn btn-primary" @if($changeRole) disabled @endif>Submit</button>
 </form>

 <h5 class="mt-4 text-success">Your request to be a supplier has been received by the Admin. Please wait until the Admin change it.</h5>
</div>

@endsection
