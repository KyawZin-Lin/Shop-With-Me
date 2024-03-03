@extends('admin.layouts.master')
@section('content')

    <div class="">
        <h3>Brand Create Form</h3>
    </div>
    <form action="{{ url('admin/brands') }}" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Brand Name">
                </div>
            </div>

        </div>


        <div class="row">
            <div class="col">
                <button class="btn btn-success">Create</button>
            </div>
        </div>
    </form>
@endsection
