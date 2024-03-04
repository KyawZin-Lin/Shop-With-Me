@extends('admin.layouts.master')
@section('content')
    <div class="">
        <h3>Sub Category Create Form</h3>
    </div>
    <form action="{{ url('admin/subCategories') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Sub Category Name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group d-flex flex-column">
                    <label for="name">Category</label>
                    <select class="js-example-basic-single" style="width: 80%;" name="category_id">

                        @foreach ($categories  as  $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>

                        @endforeach
                    </select>
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

            $('.js-example-basic-single').select2({
                width: 'resolve',
                theme: 'classic',
            });

    </script>
@endsection
