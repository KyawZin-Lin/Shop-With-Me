@extends('admin.layouts.master')
@section('content')

    <div class="">
        <h3>Category Edit Form</h3>
    </div>
    <form action="{{ url("admin/categories/$category->id") }}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" value="{{$category->name}}" name="name" id="name" placeholder="Category Name">
                </div>
            </div>

        </div>


        <div class="row">
            <div class="col">
                <button class="btn btn-success">Update</button>
            </div>
        </div>
    </form>
@endsection
