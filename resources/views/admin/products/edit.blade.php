@extends('admin.layouts.master')
@section('content')

    <div class="">
        <h3>Brand Edit Form</h3>
    </div>
    <form action="{{ url("admin/brands/$brand->id") }}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" value="{{$brand->name}}" name="name" id="name" placeholder="Brand Name">
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
