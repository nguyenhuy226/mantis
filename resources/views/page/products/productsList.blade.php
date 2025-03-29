@extends('layout')

@section('content')
    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content">
            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ sample-page ] start -->
                <div class="col-sm-12">
                    <div class="card table-card">
                        <div class="card-body">
                            <div class="text-end p-4 pb-0">
                                <a href="{{ route('products.create') }}" class="btn btn-primary">
                                    <i class="ti ti-plus f-18"></i> Add Product
                                </a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover" id="pc-dt-simple">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th class="text-end">ID</th>
                                            <th>Product Detail</th>
                                            <th>Categories</th>
                                            <th class="text-end">Price</th>
                                            <th class="text-end">Qty</th>
                                            <th>Status</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($productList as $product)
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox">
                                                    </div>
                                                </td>
                                                <td class="text-end">{{ $product->id }}</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-auto pe-0">
                                                            <img src="{{ asset('/images/application/' . $product->image) }}"
                                                                alt="user-image" class="wid-40 rounded-circle hei-40">
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="mb-1">{{ $product->name }}
                                                            </h6>
                                                            <p class="text-muted f-12 mb-0">{{ $product->description }}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{ $product->category->name }}</td>
                                                <td class="text-end">{{ number_format($product->price) }} </td>
                                                <td class="text-end">{{ $product->quantity }}</td>
                                                <td><span
                                                        class="badge bg-light-{{ $product->status == 1 ? 'success' : 'danger' }}  f-12">{{ $product->name_status }}
                                                    </span>
                                                </td>
                                                <td class="text-center">
                                                    <ul class="list-inline me-auto mb-0">
                                                        <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                            title="View">
                                                            <a href="{{ route('products.show', ['product' => $product->id]) }}"
                                                                class="avtar avtar-xs btn-link-secondary">
                                                                <i class="ti ti-eye f-18"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                            title="Edit">
                                                            <a href="{{ route('products.edit', $product->id) }}"
                                                                class="avtar avtar-xs btn-link-primary">
                                                                <i class="ti ti-edit-circle f-18"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                            title="Delete">
                                                            <form action="{{ route('products.destroy', $product->id) }}"
                                                                id="delete-form-{{ $product->id }}" method="POST"
                                                                class="mx-2">
                                                                @csrf
                                                                @method('DELETE')
                                                                <a onclick="event.preventDefault(); if(confirm('Bạn có chắc chắn muốn xóa không?')) { document.getElementById('delete-form-{{ $product->id }}').submit(); }"
                                                                    class="avtar avtar-xs btn-link-danger">
                                                                    <i class="ti ti-trash f-18"></i>
                                                                </a>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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
