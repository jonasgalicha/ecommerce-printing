@extends('layouts.app')

@section('content')
@if ($errors->any())
@foreach ($errors->all() as $error)
    <div>{{$error}}</div>
@endforeach
@endif
<div class="container" style="min-height: 70vh">
    <h1 class="text-center mt-5">Request Quotation</h1>
    <form action="{{ route('quotation.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="serviceType">Select Quotation</label>
            <select id="serviceType" name="quotation" class="form-select" required>
                <option value="">Please select</option>
                <option value="tarpaulin">Sticker</option>
                <option value="outdoorSignage">Outdoor Signage</option>
                <option value="indoorSignage">Indoor Signage</option>
                <option value="shirtPrinting">Shirt Printing</option>
                <option value="souvenir">Souvenir</option>
                <option value="tarpaulin">Tarpaulin</option>
                <option value="custom">Custom..</option>
            </select>
            @error('quotation')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Upload File</label>
            <input class="form-control" type="file" name="image" id="formFile">
        </div>
        @error('image')
        <small class="text-danger">{{ $message }}</small>
        @enderror
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        @error('name')
        <small class="text-danger">{{ $message }}</small>
        @enderror
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>
        @error('email')
        <small class="text-danger">{{ $message }}</small>
        @enderror
        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="phone" name="phone_number" pattern="\d{11}" title="Phone number must be 11 digits" maxlength="11">
        </div>
        @error('phone_number')
        <small class="text-danger">{{ $message }}</small>
        @enderror
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        @error('description')
        <small class="text-danger">{{ $message }}</small>
        @enderror

        <button type="submit" class="btn btn-primary">Submit Request</button>
    </form>
</div>

@endsection
