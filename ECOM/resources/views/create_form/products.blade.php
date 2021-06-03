@php $active = 'products' @endphp
@extends('layouts.main')
@section('title', 'Create Product')
@section('content')
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">

                <div class="col-10">
                    <h4>
                        All Product
                    </h4>
                </div>
                <div class="col-12">
                    <hr>
                </div>

                <div class="col-12">
                    <form class="row g-3">
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Name</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Category</label>
                            <select id="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>Category 1</option>
                                <option>Category 1</option>
                                <option>Category 1</option>
                                <option>Category 1 Leave</option>
                                <option>Category 1</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Price</label>
                            <input type="number" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Brand</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Description</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-4">

                            <div class="col-md-8">

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection