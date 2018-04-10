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
                <p>Nama ADMin</p>
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
                    <li class=""><a href=""><i
                                    class="fa fa-circle-o"></i>List Hotel</a></li>
                    <li class=""><a href="{{ route('hotel.create')}}"><i
                                    class="fa fa-circle-o"></i>Tambah Hotel</a></li>
                </ul>
            </li>
           

                <li class="">
                    <a href="">
                        <i class="fa fa-spinner"></i> <span>Pembagian Tugas</span>
                    </a>
                </li>
            
            <li class="">
                <a href="">
                    <i class="fa fa-tag"></i> <span>Pembayaran</span>
                </a>
            </li>
            <li class="treeview ">
                <a href="">
                    <i class="fa fa-file"></i> <span>Rekapan</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="">
                            <i class="fa fa-circle-o"></i>Rekap Pembayaran Details</a></li>
                    <li class=""><a href="">
                            <i class="fa fa-circle-o"></i>Rekap Pembayaran</a></li>
                    <li class=""><a href="">
                            <i class="fa fa-circle-o"></i>Rekap Pendapatan</a></li>
                </ul>
            </li>
            <li class="treeview ">
                <a href="">
                    <i class="fa fa-user"></i> <span>Staf</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href=""><i
                                    class="fa fa-circle-o"></i>List Staf</a></li>
                    
                        <li class=""><a href=""><i
                                        class="fa fa-circle-o"></i>Tambah Staf</a></li>
                    
                </ul>
            </li>
        </ul>
    </section>
</aside>