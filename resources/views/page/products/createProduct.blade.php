@extends('layout')

@section('content')
    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0)">E-commerce</a></li>
                                <li class="breadcrumb-item" aria-current="page">Add New Product</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Add New Product</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ sample-page ] start -->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label class="form-label">Product Name</label>
                                                    <input type="text"
                                                        class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                                        placeholder="Enter Product Name" name="name">
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Product Description</label>
                                                    <input type="text"
                                                        class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}"
                                                        placeholder="Enter Product Description" name="description">
                                                    @error('description')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Category</label>
                                                    {{-- <select
                                                        class="form-select {{ $errors->has('category_id') ? 'is-invalid' : '' }}"
                                                        name="category_id">
                                                        <option value=1>In Stock</option>
                                                        <option value=0>Out of Stock</option>
                                                    </select> --}}
                                                    <select
                                                        class="form-select {{ $errors->has('category_id') ? 'is-invalid' : '' }}"
                                                        name="category_id">
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('category_id')
                                                        <span class="text-danger">
                                                            {{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Price</label>
                                                    <input type="text"
                                                        class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}"
                                                        placeholder="Enter Product Category" name="price">
                                                    @error('price')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label class="form-label">Qty</label>
                                                    <input type="text"
                                                        class="form-control {{ $errors->has('quantity') ? 'is-invalid' : '' }}"
                                                        placeholder="Enter Product Category" name="quantity">
                                                    @error('quantity')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Status</label>
                                                    <select
                                                        class="form-select {{ $errors->has('status') ? 'is-invalid' : '' }}"
                                                        name="status">
                                                        <option value=1>In Stock</option>
                                                        <option value=0>Out of Stock</option>
                                                    </select>
                                                    @error('status')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <p><span class="text-danger">*</span> Recommended resolution is 640*640
                                                        with
                                                        file size</p>
                                                    <label
                                                        class="btn btn-outline-secondary  {{ $errors->has('status') ? 'is-invalid' : '' }}"
                                                        for="flupld"><i class="ti ti-upload me-2"></i> Click to
                                                        Upload</label>
                                                    <input type="file" id="flupld" class="d-none" name="image">
                                                    @error('image')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="text-end btn-page mb-0 mt-4">
                                                    <button class="btn btn-outline-secondary">Cancel</button>
                                                    <button type="submit" class="btn btn-primary">Add new Product</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- [ sample-page ] end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->
@endsection
