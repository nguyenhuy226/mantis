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
                                <li class="breadcrumb-item" aria-current="page">Edit Product</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Edit Product</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ sample-page ] start -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body position-relative">
                            <div class="text-center">
                                <div>
                                    <div class="chat-avtar mx-auto">
                                        <img class=" img-fluid" style="width: 350px; height: 350px"
                                            src="{{ $product->image ? asset('/images/application/' . $product->image) : asset('/images/application/card.png') }}"
                                            alt="User image" id="imagePreview">
                                    </div>
                                    <label for="uplfile" class="img-avtar-upload" style="padding: 10px 0 10px 0">
                                        <i class="ti ti-camera f-24 mb-10"></i>
                                        <span>Upload</span>
                                    </label>
                                    <input type="file" id="uplfile" class="d-none" form="updateForm"
                                        onchange="previewImage(event)" name="image" value="{{ $product->image }}">
                                </div>
                                <ul class="list-inline ms-auto mb-0">
                                    <li class="list-inline-item">
                                        <a href="#" class="avtar avtar-xs btn-light-facebook">
                                            <i class="ti ti-brand-facebook f-18"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="avtar avtar-xs btn-light-twitter">
                                            <i class="ti ti-brand-twitter f-18"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="avtar avtar-xs btn-light-linkedin">
                                            <i class="ti ti-brand-linkedin f-18"></i>
                                        </a>
                                    </li>
                                </ul>
                                <div class="row g-3 my-4">
                                    <div class="col-4">
                                        <h5 class="mb-0">23531</h5>
                                        <small class="text-muted">quantity sold</small>
                                    </div>
                                    <div class="col-4 border border-top-0 border-bottom-0">
                                        <h5 class="mb-0">40</h5>
                                        <small class="text-muted">Project</small>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="mb-0">4.5K</h5>
                                        <small class="text-muted">Members</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('products.update', $product->id) }}" method="POST" id="updateForm"
                                enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label class="form-label">Product Name</label>
                                                    <input type="text"
                                                        class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                                        placeholder="Enter Product Name" name="name"
                                                        value="{{ $product->name }}">
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Product Description</label>
                                                    <input type="text"
                                                        class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}"
                                                        placeholder="Enter Product Description" name="description"
                                                        value="{{ $product->description }}">
                                                    @error('description')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Category</label>
                                                    <select
                                                        class="form-select {{ $errors->has('category_id') ? 'is-invalid' : '' }}"
                                                        name="category_id" value="{{ $product->category_id }}">
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
                                                        placeholder="Enter Product Category" name="price"
                                                        value="{{ $product->price }}">
                                                    @error('price')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Sku</label>
                                                    <input type="text"
                                                        class="form-control {{ $errors->has('sku') ? 'is-invalid' : '' }}"
                                                        placeholder="Enter Product Category" name="sku"
                                                        value="{{ $product->sku }}">
                                                    @error('sku')
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
                                                        placeholder="Enter Product Category" name="quantity"
                                                        value="{{ $product->quantity }}">
                                                    @error('quantity')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Code</label>
                                                    <input type="text"
                                                        class="form-control {{ $errors->has('product_code') ? 'is-invalid' : '' }}"
                                                        placeholder="Enter Product Category" name="product_code"
                                                        value="{{ $product->product_code }}">
                                                    @error('product_code')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Keyword</label>
                                                    <input type="text"
                                                        class="form-control {{ $errors->has('keyword') ? 'is-invalid' : '' }}"
                                                        placeholder="Enter Product Category" name="keyword"
                                                        value="{{ $product->keyword }}">
                                                    @error('keyword')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Slug</label>
                                                    <input type="text"
                                                        class="form-control {{ $errors->has('slug') ? 'is-invalid' : '' }}"
                                                        placeholder="Enter Product Category" name="slug"
                                                        value="{{ $product->slug }}">
                                                    @error('slug')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Status</label>
                                                    <select
                                                        class="form-select {{ $errors->has('status') ? 'is-invalid' : '' }}"
                                                        name="status" value="{{ $product->status }}">
                                                        <option value=1>In Stock</option>
                                                        <option value=0>Out of Stock</option>
                                                    </select>
                                                    @error('status')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-end btn-page mb-0 mt-4">
                                        <button class="btn btn-outline-secondary">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Edit
                                            Product</button>
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
