@extends('layouts.dashboard.app')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">الصفحة الرئسسية</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard.')}}">Home</a></li>
              <li class="breadcrumb-item active">الصفحة الرئسية</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">الفحة الرئسية</h3>
            <div class="card-tools">
                <a href="{{ route('dashboard.home.edit',1) }}" class="btn btn-primary"><i class="fa fa-plus"></i> تعديل</a>
            </div>
          </div>

          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>عنوان كبير</th>
                  <th>عنوان صغير </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>{{$home->txt1}}</td>
                  <td>{{$home->txt2}}</td>
                </tr>
              </tbody>
            </table>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>رقم الهاتف</th>
                    <th>البريد الالكتروني</th>
                    <th>العنوان</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{$home->phone}}</td>
                    <td>{{$home->email}}</td>
                    <td>{{$home->address}}</td>
                  </tr>
                </tbody>
              </table>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>فيس بوك</th>
                    <th>انستجرام</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{$home->facebook}}</td>
                    <td>{{$home->instagram}}</td>
                  </tr>
                </tbody>
              </table>
          </div>

          <table class="table table-bordered">
          <td><img class="w-50" src="{{$home->image_path}}" alt="Image"></td>
          <td><img class="w-50" src="{{$home->image_pathlogo}}" alt="Image"></td>
          </table>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </section>
    <!-- /.content -->
  </div>

</section><!-- end of content -->
@endsection
