@extends('layout.app')

@section('title')
{{$todo->name}}
@endsection

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="container">
                <h1 class="text-center my-5">{{$todo->name}}</h1>
                <div class="card card-default">
                    <div class="card-header">Details</div>
                    <div class="card-body">
                    {{$todo->description}}
                </div>
                <a href="/todos/{{$todo->id}}/edit" class="btn btn-info">Edit</a>
                </div>
                
            </div>

        </div>
    </div>
    @endsection

    