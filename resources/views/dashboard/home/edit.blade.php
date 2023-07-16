@extends('layouts.dashboard.app')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">تعديل</h3>
                <div class="card-tools">
                    <a class="breadcrumb-item active">/ تعديل</a>
                </div>
              </div>
              @include('partials._errors')

              <form action="{{ route('dashboard.home.update',$home->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('put') }}

              <div class="card-body">
                <div class="form-group">

                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>عنوان كبير</th>
                        <th>عنوان صغير </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                       <td> <input type="text" name="txt1"  value="{{$home->txt1}}" class="form-control"></td>
                       <td> <input type="text" name="txt2"  value="{{$home->txt2}}" class="form-control"></td>
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
                           <td> <input type="text" name="phone"  value="{{$home->phone}}" class="form-control"></td>
                           <td> <input type="text" name="email"  value="{{$home->email}}" class="form-control"></td>
                           <td> <input type="text" name="address"  value="{{$home->address}}" class="form-control"></td>
                        </tr>
                        </tbody>
                          </table>
                          <table class="table table-bordered">
                            <thead>
                                <tr>
                                  <th>فيس بك</th>
                                  <th>انستجرام</th>
                                </tr>
                              </thead>
                            <tbody>
                              <tr>
                               <td> <input type="text" name="facebook"  value="{{$home->facebook}}" class="form-control"></td>
                               <td> <input type="text" name="instagram"  value="{{$home->instagram}}" class="form-control"></td>
                            </tr>
                            </tbody>
                              </table>
                      <div class="form-group">
                        <label>@lang('site.image')</label>
                        <input type="file" name="image1" class="form-control image">
                    </div>
                    <div class="form-group">
                        <img src="{{ $home->image_path }}" class="w-50"  class="img-thumbnail image-preview"
                            alt="">
                    </div>
                    <div class="form-group">
                        <label>@lang('site.image')</label>
                        <input type="file" name="image2" class="form-control image">
                    </div>
                    <div class="form-group">
                        <img src="{{ $home->image_pathlogo }}" class="w-50"  class="img-thumbnail image-preview"
                            alt="">
                    </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="row">
            <div class="col-12">
                <input type="submit" value="تعديل " class="btn btn-success float-right">
            </div>
        </div>
        </div>
        </form>
      </section>
    <!-- /.content -->
  </div>

</section><!-- end of content -->
@endsection
