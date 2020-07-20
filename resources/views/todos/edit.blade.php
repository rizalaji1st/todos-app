@extends('layouts.app')

@section('title')
 Edit Todo
@endsection

@section('content')
<h1 class="text-center my-5">Edit todos</h1>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">
                Edit todo
            </div>
            <div class="card-body">
                @if($errors->any())
                    <ul>
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                            <li class="list-group-item">
                                {{$error}}
                            </li>
                            @endforeach
                        </div>
                    </ul>
                @endif
                <form method="POST" action="/todos/{{$todo->id}}/update-todos">
                    @csrf
                    <div class="form-group">
                        <input type="text" placeholder="name" class="form-control" name="name" value="{{$todo->name}}">
                    </div>

                    <div class="form-group">
                        <textarea name="description" placeholder="description" rows="5" cols="5" class="form-control">{{$todo->description}}</textarea>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success">Update todo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection