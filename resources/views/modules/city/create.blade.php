@extends('layout.master')
@section('title','create city')
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Create new City</h1>
            <form method="post" action="{{route('cities.store')}}">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name">
                    @if($errors->has('name'))
                        {{$errors->first('name')}}
                    @endif
                </div>
                <a href="{{route('cities.index')}}" class="btn btn-primary">Thoát</a>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>

@endsection

