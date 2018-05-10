@extends('layouts.admin.admin')
@section('title', 'Trang Chủ')
@section('config_title', 'Chào Mừng đến trang quản trị')

@section('content')
<h1>Chào Mừng Bạn Đến Với Khu Vực Quản Trị Của PhongThuyShop</h1>
<div class="box-body table-responsive no-padding">
  	<div class="col-lg-3 col-md-4 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>{{$countPro}}</h3>
          <p>Sản phẩm</p>
        </div>
        <div class="icon">
          <i class="fa fa-list"></i>
        </div>
        <a href="{{route('product.list')}}" class="small-box-footer">
          More info <i class="fa fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6">
          <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>{{$countBill}}</h3>

          <p>Đơn hàng</p>
        </div>
        <div class="icon">
          <i class="fa fa-file-word-o"></i>
        </div>
        <a href="{{route('bill.success')}}" class="small-box-footer">
          More info <i class="fa fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6">
          <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>{{$countCate}}</h3>

            <p>Danh mục sản phẩm</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="{{route('category.list')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>{{$countCus}}</h3>

            <p>Khách hàng mua hàng</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="{{route('user.list')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
</div>
@endsection