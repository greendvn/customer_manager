@extends('layout.master')
@section('title',' customers list')
@section('content')
    <div class="col-12">
        <div>
            <h1>Danh Sách Khách Hàng</h1>
            <div class="col-6">
                <form class="navbar-form navbar-left" method="get" action="{{route('customers.search')}}">
                    @csrf
                    <div class="row">
                        <div class="col-8">
                            <div class="form-group">
                                <input type="text" class="form-control" name="key" placeholder="Search for customer">
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-default">Tìm kiếm</button>
                        </div>
                    </div>
                </form>
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên khách hàng</th>
                    <th scope="col">Ngày Sinh</th>
                    <th scope="col">Email</th>
                    <th scope="col">City</th>
                    <th scope="col">Thao tac</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @if(count($customers) == 0)
                    <tr>
                        <td colspan="4">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($customers as $key => $customer)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->dob}}</td>
                            <td>{{ $customer->dob}}</td>
                            <td>{{ $customer->city->name}}</td>
                            <td>
                                <a href="customers/{{$customer->id}}" class="btn btn-primary">Xem</a>

                            </td>
                            <td>
                                <a href="{{route('customers.edit',$customer->id)}} " class="btn btn-primary">Sửa</a>
                            </td>
                            <td>
                                <form action="{{route('customers.destroy',$customer->id)}}" method="post"
                                      style="float: left">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            {{$customers->links()}}
        </div>
        <a href="{{route('customers.create')}}" class="btn btn-primary">Create new customer</a> |
        <a href="{{route('cities.index')}}" class="btn btn-primary">List City</a>

    </div>
@endsection
