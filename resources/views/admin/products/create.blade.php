@extends('admin.layouts.master')
@section('content')
    <div class="">
        <h3>Product Create Form</h3>
    </div>
    <form action="{{ url('admin/products') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Product Name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group d-flex flex-column">
                    <label for="name">Brand</label>
                    <select class="brand_id" style="width: 100%;" name="brand_id">

                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group d-flex flex-column">
                    <label for="name">Category</label>
                    <select class="category_id" style="width: 100%;" name="category_id">

                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group d-flex flex-column">
                    <label for="name">Sub Category</label>
                    <select class="sub_category_id" style="width: 100%;" name="sub_category_id">

                        @foreach ($subCategories as $subCategory)
                            <option value="{{ $subCategory->id }}">{{ $subCategory->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="product_image">Image</label>
                    <input type="file" class="form-control" name="product_image" id="product_image">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="original_price">Original Price</label>
                    <input type="number" class="form-control" name="original_price" id="original_price" placeholder="Original Price">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="selling_price">Selling Price</label>
                    <input type="number" class="form-control" name="selling_price" id="selling_price" placeholder="Selling Price">
                </div>
            </div>



        </div>


        <div class="row">
            <div class="col">
                <button class="btn btn-success">Create</button>
            </div>
        </div>
    </form>

    <script>
        $('.brand_id').select2({
            width: 'resolve',
            theme: 'classic',
        });
        $('.category_id').select2({
            width: 'resolve',
            theme: 'classic',
        });
        $('.sub_category_id').select2({
            width: 'resolve',
            theme: 'classic',
        });
    </script>
@endsection
