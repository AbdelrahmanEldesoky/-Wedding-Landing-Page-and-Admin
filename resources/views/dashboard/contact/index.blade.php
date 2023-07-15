@extends('layouts.dashboard.app')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          @if ($id ==0)
            <h1 class="m-0">لم يتم التواصل حتي الان</h1>
          @else
            <h1 class="m-0">تم التواصل</h1>
            @endif
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard.')}}">Home</a></li>
                 @if ($id ==0)
              <li class="breadcrumb-item active">لم يتم التواصل حتي الان</li>
              @else
                <li class="breadcrumb-item active">تم التواصل</li>
            @endif

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

          </div>

          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr style="background: gray;">
                  <th >#</th>
                  <th>الاسم </th>
                  <th>رقم الهاتف</th>
                  <th>الاميل</th>
                  <th>الرساله</th>
                  @if($id==0)
                  <th></th>
                  @endif
                </tr>
              </thead>
              <tbody>
                @foreach ($contacts as $index=>$contact)
                <tr>
                  <td>{{$index+1}}</td>
                  <td>{{$contact->name}}</td>
                  <td>{{$contact->phone}}</td>
                  <td>{{$contact->email}}</td>
                  <td>{{$contact->note}}</td>
                  @if($id==0)
                  <td>  <form action="{{ route('dashboard.contacts.update', $contact->id) }}" method="post" style="display: inline-block">
                        {{ csrf_field() }}
                        {{ method_field('post') }}

                        <button type="submit" class="btn btn-success btn-sm">اضغط هنا اذا تم الرد</button>
                        </form><!-- end of form -->
                </td>
                @endif
                </tr>
              </tbody>
              @endforeach
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
