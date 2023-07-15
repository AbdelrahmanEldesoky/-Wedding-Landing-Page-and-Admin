@extends('layouts.dashboard.app')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> تفاصيل الحجز</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard.')}}">Home</a></li>
              <li class="breadcrumb-item active">تفاصيل الحجز </li>
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
            <h3 class="card-title">مراجعة الطلب</h3>
            <div class="card-tools">
                <a href="{{ route('dashboard.order.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>   اضافة</a>
            </div>
          </div>
          <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th>
                            #
                        </th>
                        <th>
                            الاسم
                        </th>
                        <th>
                             السعر
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @isset($orders)
                    @foreach ($orders as $order)
                    @foreach ($order->products as $index=>$product)


                    <tr>
                        <td>
                            {{$index+1}}
                        </td>
                        <td>
                            <a>{{$product->name}}</a>
                        </td>
                        <td>
                            <a>{{$product->total_price}} ₪</a>
                        </td>

                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="{{route('dashboard.order.edit',[$order->id,$product->id])}}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                تعديل
                            </a>
                            <form action="{{ route('dashboard.type.destroy', $order->id) }}" method="post" style="display: inline-block">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i>  حذف  </button>
                            </form><!-- end of form -->


                        </td>
                    </tr>
                    @endforeach
                    @endforeach
                    @endisset
                </tbody>
                <tbody style="background: gray">
                    @isset($orders)
                    @foreach ($orders as $index=>$order)

                    <tr>
                        <td>
                        </td>
                        <td ><a style="font-weight: 500; font-size: 20px; color: white;">
                            الاجمالي</a>
                        </td>
                        <td>
                            <a style="font-weight: 500; font-size: 20px; color: white;">{{$order->total_price}}  ₪</a>
                        </td>
                        <td class="project-actions text-right">

                            <form action="{{ route('dashboard.order.done', $order->id) }}" method="post" style="display: inline-block">
                                {{ csrf_field() }}
                                {{ method_field('post') }}
                                <input type="number" name="discount"  placeholder="اضافة خصم">

                                <button type="submit" class="btn btn-success btn-m">   تاكيد الحجز  </button>
                            </form><!-- end of form -->

                        </td>
                    </tr>
                    @endforeach

                    @endisset
                </tbody>

            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </section>
    <!-- /.content -->
  </div>

</section><!-- end of content -->
@endsection
