@extends('admin.layouts.master')
@section('content')
    <div class="">
        <h3>Sub Category Edit Form</h3>
    </div>
    <form action="{{ url("admin/subCategories/$subCategory->id") }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" value="{{ $subCategory->name }}" name="name" id="name"
                        placeholder="Category Name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group d-flex flex-column">
                    <label for="name">Category</label>
                    <select class="js-example-basic-single" style="width: 80%;" name="category_id">

                        @foreach ($categories as $category)
                            <option
                            @if ($subCategory->category_id == $category->id)
                                selected
                            @endif
                            value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

        </div>


        <div class="row">
            <div class="col">
                <button class="btn btn-success">Update</button>
            </div>
        </div>
    </form>

    <script>
        $('.js-example-basic-single').select2({
            width: 'resolve',
            theme: 'classic',
        });
    </script>
@endsection
