@extends('layout.master')
@section('title','create city')
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Create new City</h1>
            <form method="post" action="{{route('cities.update',$city->id)}}">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="{{$city->name}}">
                    @if($errors->has('name'))
                        {{$errors->first('name')}}
                    @endif
                </div>
                <a href="{{route('cities.index')}}" class="btn btn-primary">Thoát</a>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>

@endsection

