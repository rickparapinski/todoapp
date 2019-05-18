@extends('layout.app')

@section('title')
Todo Index
@endsection
@section('content')
        
        <h1 class="text-center my5">Todos Page</h1>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Todos</div>
                    <div class="card-body">
                        @foreach($todos as $todo)
                        <li class="list-group-item">
                            {{ $todo->name }}

                            <a href="/todos/{{$todo->id}}"  class="btn btn-primary btn-sm float-right">View</a>
                        </li>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@endsection
    
