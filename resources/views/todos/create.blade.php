@extends('layout.app')

@section('title')

Create a new todo

@endsection

@section('content')

<h1 class="text-center">Create a new todo</h1>


<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">Create Todo</div>
            <div class="card-body">
                <form action="/store-todos" method="post">
                @csrf
                    <div class="form-group">
                        <input type="text" name="name" id="" class="form-control" placeholder="Name">
                        <textarea name="description" id="" cols="5" rows="5" class="form-control my-3" placeholder="Description"></textarea>
                        <button type="submit"class="btn btn-success btn-block">Create todo</button>
                    </div>
                    
                </form>
            </div>
        </div>

    </div>
</div>

@endsection