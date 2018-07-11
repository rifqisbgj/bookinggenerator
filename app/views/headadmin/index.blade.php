@extends('layouts.utama')

@section('content')
<div class="row">
  <div class="col-md-4 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-aqua"><i class="fa fa-bank"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">MITRA</span>
        <span class="info-box-number">{{$mitra}}</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-4 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-red"><i class="ion ion-ios-people-outline"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Agen</span>
        <span class="info-box-number">{{$reseller}}</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->

  <!-- fix for small devices only -->
  <div class="clearfix visible-sm-block"></div>

  <div class="col-md-4 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-green"><i class="ion ion-ios-people-outline"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Operator</span>
        <span class="info-box-number">{{$operator}}</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
</div>
<!-- /.row -->
@endsection
