<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{  asset('/')  }}images/{{ $content->logo }}" alt="{{ $content->name }} Logo"
          class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ $content->name }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

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

                <!-- <li class="nav-header">Users Mana</li> -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            Blog Management
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/blogs/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Blog</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/blogs/view_blogs') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Blogs</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            Service Management
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/services/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Service</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/services/view_services') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Services</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            FAQ Management
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('faq.add') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add FAQ</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('faq.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View FAQ</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            Website Settings
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('portfolio') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>portfolio</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/method/method') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>How Does it work</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/settings/content') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Content</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">

                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            log Out
                            <i class="fas fa-angle-right right"></i>
                        </p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>