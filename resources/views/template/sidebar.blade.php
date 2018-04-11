<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel" style="height: 60px">
            <div class="pull-left image">
                <img src="{{ asset('avatar.png')}}" style=" height:45px; width:auto important;"
                     class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search by name">
                <span class="input-group-btn">
                    <a href="">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                <i class="fa fa-search"></i>
              </button>
                        </a>
            </span>
            </div>
        </form>
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="">
                <a href="/">
                    <i class="treeview glyphicon glyphicon-home"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="treeview ">
                <a href="">
                    <i class="fa fa-users"></i> <span>Hotel</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{ route('hotels.index')}}"><i class="fa fa-circle-o"></i>List Hotel</a></li>
                    <li class=""><a href="{{ route('hotels.create')}}"><i class="fa fa-circle-o"></i>Tambah Hotel</a></li>
                    {{-- <li class=""><a href="{{ route('hotel.grafik')}}"><i class="fa fa-circle-o"></i>Grafik Hotel</a></li> --}}
                </ul>
            </li>
            
            <li class="treeview ">
                <a href="">
                    <i class="fa fa-users"></i> <span>tourists</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{ route('tourists.index')}}"><i class="fa fa-circle-o"></i>List touristss</a></li>
                    <li class=""><a href="{{ route('tourists.create')}}"><i class="fa fa-circle-o"></i>Tambah touristss</a></li>
                    {{-- <li class=""><a href="{{ route('tourists.grafik')}}"><i class="fa fa-circle-o"></i>Grafik touristss</a></li> --}}
                </ul>
            </li>
           
            <li class="treeview ">
                <a href="">
                    <i class="fa fa-users"></i> <span>Containants</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{ route('continants.index')}}"><i class="fa fa-circle-o"></i>List Containants</a></li>
                    <li class=""><a href="{{ route('continants.create')}}"><i class="fa fa-circle-o"></i>Tambah Containants</a></li>
                    {{-- <li class=""><a href="{{ route('continants.grafik')}}"><i class="fa fa-circle-o"></i>Grafik Containants</a></li> --}}
                </ul>
            </li>
            
            <li class="treeview ">
                <a href="">
                    <i class="fa fa-users"></i> <span>Countries</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{ route('countries.index')}}"><i class="fa fa-circle-o"></i>List Countries</a></li>
                    <li class=""><a href="{{ route('countries.create')}}"><i class="fa fa-circle-o"></i>Tambah Countries</a></li>
                    {{-- <li class=""><a href="{{ route('countries.grafik')}}"><i class="fa fa-circle-o"></i>Grafik Countries</a></li> --}}
                </ul>
            </li>            
            
            <li class="treeview ">
                <a href="">
                    <i class="fa fa-users"></i> <span>nationalities</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{ route('nationalities.index')}}"><i class="fa fa-circle-o"></i>List nationalities</a></li>
                    <li class=""><a href="{{ route('nationalities.create')}}"><i class="fa fa-circle-o"></i>Tambah nationalities</a></li>
                    {{-- <li class=""><a href="{{ route('nationalities.grafik')}}"><i class="fa fa-circle-o"></i>Grafik nationalities</a></li> --}}
                </ul>
            </li>

            <li class="treeview ">
                <a href="">
                    <i class="fa fa-users"></i> <span>destinationss</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{ route('destinations.index')}}"><i class="fa fa-circle-o"></i>List destinationss</a></li>
                    <li class=""><a href="{{ route('destinations.create')}}"><i class="fa fa-circle-o"></i>Tambah destinationss</a></li>
                    {{-- <li class=""><a href="{{ route('destinations.grafik')}}"><i class="fa fa-circle-o"></i>Grafik destinationss</a></li> --}}
                </ul>
            </li>


        </ul>
    </section>
</aside>