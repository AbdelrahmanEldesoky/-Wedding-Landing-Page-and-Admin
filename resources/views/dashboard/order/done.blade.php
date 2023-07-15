@extends('layouts.dashboard.app')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard.')}}">Home</a></li>
              <li class="breadcrumb-item active">تاكيد الطلب </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

        <!-- Default box -->


          <div class="card">
            <div class="card-header">
                تاكيد الطلب
              </div>
              <div class="card-body">
                <h5 class="card-title">الطلب رقم ( {{$id}} )</h5>
                <p class="card-text">تم التاكيد بنجاح الطلب رقم ( {{$id}} )</p>
                <a href="{{route('dashboard.order.index')}}" class="btn btn-primary">رجوع الي الطلبات</a>
              </div>
          </div>
          <!-- /.card-body -->

        <!-- /.card -->

    <!-- /.content -->
  </div>

</section><!-- end of content -->
@endsection
