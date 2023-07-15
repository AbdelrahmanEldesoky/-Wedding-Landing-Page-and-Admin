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

        <form action="{{ route('dashboard.order.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('post') }}
                      <div class="row">
                        <!-- left column -->
                        <div class="col-md-6">
                            <div class="card card-primary">
                              <div class="card-header">
                                <h3 class="card-title">بيانات العميل</h3>
                              </div>
                              <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                    <div class="col-md-6">
                                    <label for="exampleInputEmail1">الاسم</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="اسم العميل">
                                  </div>
                                  <div class="col-md-6">
                                    <label for="exampleInputEmail1">العنوان</label>
                                    <input type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="العنوان">
                                  </div>
                                </div>
                                  <div class="row">
                                  <div class="col-md-6">
                                    <label for="exampleInputEmail1">الموبيل</label>
                                    <input type="number" name="phone1" class="form-control" id="exampleInputEmail1" placeholder="رقم الهاتف">
                                  </div>
                                  <div class="col-md-6">
                                    <label for="exampleInputEmail1">الموبيل اخر</label>
                                    <input type="number" name="phone2" class="form-control" id="exampleInputEmail1" placeholder="رقم الهاتف">
                                  </div>
                                  </div>
                                  <div class="row">
                                  <div class="col-md-6">
                                    <label>تاريخ الزفاف من</label>
                                    <input type="date" name="date_from" class="form-control"  placeholder="ملاحظات">
                                  </div>
                                  <div class="col-md-6">
                                    <label>تاريخ الزفاف إلي</label>
                                    <input type="date" name="date_to" class="form-control"  placeholder="ملاحظات">
                                  </div>
                                  </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                          <!-- general form elements -->
                          @foreach($categorys as $index=>$category)
                          @if($index%2 == 1)
                          <!-- Form Element sizes -->
                          @if ($index == 1)
                            <div class="card card-purple">
                          @elseif ($index == 3)
                            <div class="card card-pink">
                          @else
                            <div class="card card-primary">
                          @endif
                            <div class="card-header">
                              <h3 class="card-title">{{$category->name}}</h3>
                            </div>
                            <!-- /.card-header -->
                              <div class="card-body">
                                <div class="form-group">
                                    <select name="product[]" class="form-control">
                                        <option value="">اختار </option>
                                        @foreach ($category->products as $product)
                                            <option value="{{ $product->id }}">{{ $product->name }}  ( {{$product->total_price}} ₪ )</option>
                                        @endforeach
                                    </select>
                                </div>
                              </div>
                              <!-- /.card-body -->
                          </div>
                          @endif
                          @endforeach
                          <!-- /.card -->
                          <!-- general form elements -->
                        </div>
                        <!--/.col (left) -->
                        <!-- right column -->
                        <div class="col-md-6">
                        @foreach($categorys as $index=>$category)
                          @if($index%2 == 0)
                          <!-- Form Element sizes -->
                          @if ($index == 0)
                            <div class="card card-danger">
                          @elseif ($index == 2)
                            <div class="card card-success">
                          @else
                            <div class="card card-primary">
                          @endif

                            <div class="card-header">
                              <h3 class="card-title">{{$category->name}}</h3>
                            </div>
                            <!-- /.card-header -->
                              <div class="card-body">
                                <div class="form-group">
                                    <select name="product[]" class="form-control">
                                            <option value="">sss </option>
                                        @foreach ($category->products as $product)
                                            <option value="{{ $product->id }}">{{ $product->name }}  ( {{$product->total_price}} ₪ )</option>
                                        @endforeach
                                    </select>
                                </div>
                              </div>
                              <!-- /.card-body -->
                          </div>
                          @endif
                        @endforeach
                          <!-- /.card -->
                        </div>
                        <!--/.col (right) -->
                      </div>
                      <!-- /.row -->

                      <div class="row">
                        <div class="col-12">
                            <input type="submit" value="Create new Project" class="btn btn-success float-right">
                        </div>
                    </div>

                    </form>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

        </div>
        </form>
      </section>
    <!-- /.content -->
  </div>

</section><!-- end of content -->
@endsection
