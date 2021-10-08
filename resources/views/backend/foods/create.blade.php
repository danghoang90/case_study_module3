@extends('backend.layouts.master')
@section('title','Thêm mới món ăn')
@section('content')
    <h1 class="mt-4">Thêm mới món ăn</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="">Trang chủ</a></li>
        <li class="breadcrumb-item"><a href="{{route('foods.index')}}">Danh sách món ăn</a></li>
        <li class="breadcrumb-item active">Thêm mới món ăn</li>
    </ol>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <p class="card-title">Thêm mới món ăn</p>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('foods.store') }}" class="form" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <lable>Tên</lable>
                                <strong class="text-danger">(*)</strong>
                                <input type="text" value="{{ old('name') }}"
                                       class="form-control @error('name') is-invalid @enderror"
                                       name="name">
                                @error('name')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <strong class="text-danger">(*)</strong>
                                <input type="text" value="{{ old('address') }}"
                                       class="form-control @error('address') is-invalid  @enderror"
                                       name="address">
                                @error('address')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <table>
                                <tr>
                                    <div class="form-group">
                                        <td><label>Thời gian mở cửa</label>
                                            <strong class="text-danger">(*)</strong></td>
                                        <td>
                                            <select name="open_time" id="time">
                                                <option disabled value="">Choose A Time</option>
                                                <option value="00:00">00:00</option>
                                            </select></td>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="form-group">
                                        <td><label>Thời gian đóng cửa</label>
                                            <strong class="text-danger">(*)</strong></td>
                                        <td><select name="close_time" id="time">
                                                <option disabled value="">Choose A Time</option>
                                                <option value="00:00">00:00</option>
                                            </select></td>
                                    </div>
                                </tr>
                            </table>
                            <div class="form-group">
                                <label for="image">Ảnh</label>
                                <strong class="text-danger">(*)</strong>
                                <input type="file" name="image" class="form-control-file">
                            </div>
                            </br>
                            <div class="form-group">
                                <table>
                                    <tr>
                                        <td><label style="margin-bottom: 40px">Ghi chú</label></td>
                                        <td><textarea name="note" cols="40" rows="2"></textarea></td>
                                </table>
                                </tr>
                            </div>
                            <div class="form-group">
                                <label>Giá tiền</label>
                                <strong class="text-danger">(*)</strong>
                                <input type="number" value="{{ old('price') }}"
                                       class="form-control @error('price') is-invalid  @enderror"
                                       name="price">
                                @error('price')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Giá khuyến mãi</label>
                                <strong class="text-danger">(*)</strong>
                                <input type="number" value="{{ old('promotional_price') }}"
                                       class="form-control @error('promotional_price') is-invalid  @enderror"
                                       name="promotional_price">
                                @error('promotional_price')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Phí dịch vụ</label>
                                <strong class="text-danger">(*)</strong>
                                <input type="number" value="{{ old('service_price') }}"
                                       class="form-control @error('service_price') is-invalid  @enderror"
                                       name="service_price">
                                @error('service_price')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Giải thích phí dịch vụ</label>
                                <strong class="text-danger">(*)</strong>
                                <input type="text" value="{{ old('explain_service_price') }}"
                                       class="form-control @error('explain_service_price') is-invalid  @enderror"
                                       name="explain_service_price">
                                @error('explain_service_price')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Thời gian chuẩn bị</label>
                                <strong class="text-danger">(*)</strong>
                                <select name="prepare_time" id="time">
                                    <option disabled value="">Choose A Time</option>
                                    <option value="00:00:00">00:00</option>
                                </select></div>
                            <div class="form-group">
                                <label>Tag</label>
                                <strong class="text-danger">(*)</strong>
                                <input type="text" value="{{ old('tag') }}"
                                       class="form-control @error('tag') is-invalid  @enderror"
                                       name="tag">
                                @error('tag')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            </br>
                            <button type="submit" class="btn btn-primary">Lưu</button>
                            <button class="btn btn-secondary"
                                    onclick="window.history.go(-1); return false;">Hủy
                            </button>
                            <p>Trường <strong class="text-danger">(*)</strong> là trường bắt buộc!</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
