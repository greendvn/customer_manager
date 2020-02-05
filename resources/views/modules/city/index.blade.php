@extends('layout.master')
@section('title',' city list')
@section('content')
    <div class="col-12">
        <div >
            <div>
                <h1>Danh Sách Thành Phố</h1>
            </div>
            <div class="col-6">
                <form class="navbar-form navbar-left" method="get" action="{{route('cities.search')}}">
                    @csrf
                    <div class="row">
                        <div class="col-8">
                            <div class="form-group">
                                <input type="text" class="form-control" name="key" placeholder="Search for city">
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-default">Tìm kiếm</button>
                        </div>
                    </div>
                </form>
            </div>
            <table class="table table-striped">

                @if(\Illuminate\Support\Facades\Session::has('succes'))
                    {{\Illuminate\Support\Facades\Session::get('succes')}}
                @endif
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">Total product</th>
                    <th scope="col">Thao tac</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @if(count($cities) == 0)
                    <tr>
                        <td colspan="4">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($cities as $key => $city)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $city->name }}</td>
                            <td>{{ $city->customers->count() }}</td>
                            <td>
                                <a href="{{route('cities.edit',$city->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{route('cities.delete',$city->id)}}" class="btn btn-primary"
                                   onclick="return confirm('Ban chac chan muon xoa?')">delete</a>
                            </td>
                            <td></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>

        <a href="{{route('cities.create')}}" class="btn btn-primary">Create new city</a>
        <a href="{{route('customers.index')}}" class="btn btn-primary">List Customers</a>

    </div>
@endsection
