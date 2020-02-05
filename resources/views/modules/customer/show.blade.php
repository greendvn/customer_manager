@extends('layout.master')
@section('title','show customer')
@section('content')
    <h1>Show Customer</h1>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <td>{{ $customer['name'] }}</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="col">Birthday</th>
            <td>{{ $customer['dob'] }}</td>
        </tr>
        <tr>
            <th scope="col">City</th>
            <td>{{ $customer->city->name}}</td>
        </tr>
        <tr>
            <th scope="col">Email</th>
            <td>{{ $customer['email'] }}</td>
        </tr>
        <tr>
            <th scope="col">create at</th>
            <td>{{ $customer['created_at'] }}</td>
        </tr>
        <tr>
            <th scope="col">update at</th>
            <td>{{ $customer['updated_at'] }}</td>
        </tr>
        </tbody>
    </table>
    <a href="{{route('customers.index')}}" class="btn btn-primary">Thoát</a>

@endsection
