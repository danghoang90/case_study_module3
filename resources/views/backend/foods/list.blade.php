@extends('backend.layouts.master')
@section('title','Danh sách món ăn')
@section('content')
    <h1 class="mt-4">Danh sách sách</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="">Trang chủ</a></li>
        <li class="breadcrumb-item active">Danh sách món ăn</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <h3 class="card-title">
                <a class="btn btn-success" href="{{ route('foods.create') }}">Thêm mới</a>
            </h3>
        </div>
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Danh sách món ăn
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên</th>
                    <th>Địa chỉ</th>
                    <th>Ảnh</th>
                    <th>Giá tiền</th>
                    <th>Giá KM</th>
                    <th>Thời gian mở cửa</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($foods as $key=>$food)
                    <tr id="food-{{$food->id}}">
                        <td>{{++$key}}</td>
                        <td>{{$food->name}}</td>
                        <td>{{$food->address}}</td>
                        <td style="width: 150px;"><img src="{{ asset('storage/'.$food->image) }}" style="width: 50%">
                        </td>
                        <td>{{number_format($food->price)}}</td>
                        <td>{{number_format($food->promotional_price)}}</td>
                        <td>{{date('H:i',strtotime($food->open_time))}}-{{date('H:i',strtotime($food->close_time))}}</td>
                        <td>
                            <a href="{{route('foods.edit',['id'=>$food->id])}}" class="btn btn-primary">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a data-id="{{$food->id}}"
                               class="btn btn-danger delete-food">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
