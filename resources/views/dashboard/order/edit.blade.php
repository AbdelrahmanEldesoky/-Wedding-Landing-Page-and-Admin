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

        <form action="{{ route('dashboard.order.update',$order_id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('put') }}
                      <div class="row">

                        <!-- right column -->
                        <div class="col-md-6">
                        @foreach($categorys as $index=>$category)
                          <!-- Form Element sizes -->
                            <div class="card card-primary">
                            <div class="card-header">
                              <h3 class="card-title">{{$category->name}}</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="form-group">
                                <label>النوع</label>
                                <select name="product_id" class="form-control">
                                    <option value="">الانواع</option>
                                    @foreach ($category->products as $p)
                                        <option value="{{ $p->id }}"
                                            {{ $p->id == $product->id ? 'selected' : '' }}>{{ $p->name }}  ( {{$p->total_price}} ₪ )</option>
                                    @endforeach
                                </select>
                                <input type="hidden" name="total_price" value="{{$product->total_price}}">
                                <input type="hidden" name="product_id_old" value="{{$product->id}}">

                            </div>
                              <!-- /.card-body -->
                              <div class="col-12">
                                <input type="submit" value="Create new Project" class="btn btn-success float-right">
                            </div>
                            </div>

                        @endforeach

                          <!-- /.card -->
                        </div>
                        <!--/.col (right) -->
                      </div>
                      <!-- /.row -->

                      <div class="row">

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
