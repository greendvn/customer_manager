@extends('layout.master')
@section('title','edit')
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Show Customer</h1>
            <form method="post" action="{{route('customers.update',$customer['id'])}}">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $customer['name'] }}">
                </div>
                <div class="form-group">
                    <label>City</label>
                    <select class="form-control" name="city">
                        @foreach($cities as $city)
                            <option value="{{$city->id}}" @if($city->id == $customer->city_id) selected @endif>{{$city->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>birthday</label>
                    <input type="date" class="form-control" name="dob" value="{{ $customer['dob'] }}">
                </div>
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control" name="email" value="{{ $customer['email'] }}">
                </div>
                <a href="{{route('customers.index')}}" class="btn btn-primary">Thoát</a>
                <button type="submit" class="btn btn-primary">edit</button>

            </form>
        </div>
    </div>


@endsection
