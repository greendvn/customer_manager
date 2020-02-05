@extends('layout.master')
@section('title','create')
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Create new Customer</h1>
            <form method="post" action="{{route('customers.store')}}">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name">
                    @if($errors->has('name'))
                        {{$errors->first('name')}}
                    @endif
                </div>
                <div class="form-group">
                    <label>City</label>
                    <select class="form-control" name="city">
                        @foreach($cities as $city)
                            <option value="{{$city->id}}">{{$city->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>birthday</label>
                    <input type="date" class="form-control" name="dob">
                    @if($errors->has('dob'))
                        {{$errors->first('dob')}}
                    @endif
                </div>
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control" name="email">
                    @if($errors->has('email'))
                        {{$errors->first('email')}}
                    @endif
                </div>
                <a href="{{route('customers.index')}}" class="btn btn-primary">Thoát</a>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>

@endsection

