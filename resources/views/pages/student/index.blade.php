@extends('layouts/layout')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Students <a href="{{ route('student.create') }}" class="btn btn-primary">create</a></h5>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">NAME</th>
                                    <th scope="col">ADDRESS</th>
                                    <th scope="col">OLD</th>
                                    <th scope="col">#</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($data as $d)
                                    <tr>
                                        <td>{{ $d->id }}</td>
                                        <td>{{ $d->name }}</td>
                                        <td>{{ $d->address }}</td>
                                        <td>{{ $d->old }}</td>
                                        <td>
                                            <form action="{{ route('student.destroy', $d) }}" method="POST">
                                                @method('DELETE')
                                                {{ csrf_field() }}
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{ route('student.show', $d) }}" class="btn btn-info">view</a>
                                                    <a href="{{ route('student.edit', $d) }}" class="btn btn-warning">edit</a>
                                                    <button type="submit" class="btn btn-danger">delete</button>
                                                </div>    
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection