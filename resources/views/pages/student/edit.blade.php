@extends('layouts/layout')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Create Students </h5>
                    <form method="POST" action="{{ route('student.update', $d) }}">
                        {{ csrf_field() }}
                        @method('PUT')
                        <div class="form-group">
                            <label class="font-weight-bold" for="name">Id :</label>
                            <input type="text" readonly class="form-control-plaintext" id="name" value="{{ $d->id }}">
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input value="{{ $d->name}}" type="text" class="form-control" id="name" placeholder="Name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input value="{{ $d->address }}" type="text" class="form-control" id="address" placeholder="Address" name="address">
                        </div>
                        <div class="form-group">
                            <label for="old">Old</label>
                            <input value="{{ $d->old }}" type="number" class="form-control" id="old" placeholder="Old" name="old">
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