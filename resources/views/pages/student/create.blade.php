@extends('layouts/layout')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Create Students </h5>
                    <form method="POST" action="{{ route('student.store') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="old">Address</label>
                            <input type="text" class="form-control" id="address" placeholder="Address" name="address">
                        </div>
                        <div class="form-group">
                            <label for="old">Old</label>
                            <input type="number" class="form-control" id="old" placeholder="Old" name="old">
                        </div>
                        <hr>
                        <a href="{{ route('student') }}" class="btn btn-danger">back</a>
                        <button type="submit" class="btn btn-primary">save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection