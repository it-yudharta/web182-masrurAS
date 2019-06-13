@extends('layouts/layout')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">View Students </h5>
                    <hr>
                    <form>
                        <div class="form-group">
                            <label class="font-weight-bold" for="name">Name :</label>
                            <input type="text" readonly class="form-control-plaintext" id="name" value="{{ $d->name }}">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="old">Address :</label>
                            <input type="text" readonly class="form-control-plaintext" id="address" value="{{ $d->address }}">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="old">Old :</label>
                            <input type="number" readonly class="form-control-plaintext" id="old" value="{{ $d->old }}">
                        </div>
                        <hr>
                        <a href="{{ route('student') }}" class="btn btn-danger">back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection