    <section class="main-sidebar sidebar-dark-primary elevation-4">


            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
              <img src="{{ asset('dashboard/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
              <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
              <!-- Sidebar user panel (optional) dlkwdjhgwfdwdhgwhdjlwk;dwdkwjdhwgh-->
              <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                  <img src="{{ asset('dashboard/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                  <a href="#" class="d-block">Alexander Pierce</a>
                </div>
              </div>

              <!-- SidebarSearch Form -->
              <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                  <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                    <button class="btn btn-sidebar">
                      <i class="fas fa-search fa-fw"></i>
                    </button>
                  </div>
                </div>
              </div>

              <!-- Sidebar Menu -->
              <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
                       with font-awesome or any other icon font library -->
                  <li class="nav-item active">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-pager"></i>
                      <p>
                        خصائص القاعة
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{route('dashboard.type.index')}}" class="nav-link active">
                          <i class="far fa-circle nav-icon"></i>
                          <p>انواع الحجز</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('dashboard.section.index')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>الاقسام</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('dashboard.product.index')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>البند</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('dashboard.order.index')}}" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                        الطلبات
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('dashboard.system_calendars.index')}}" class="nav-link">
                      <i class="nav-icon far fa-calendar-alt"></i>
                      <p>
                        مواعيد الحجز
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-info-circle"></i>
                      <p>
                        خصائص الموقع
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{route('dashboard.about.index')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>من نحن</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('dashboard.contacts',0)}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>لم يتم التواصل</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('dashboard.contacts',1)}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>تم التواصل</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
              <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->


    </section>



