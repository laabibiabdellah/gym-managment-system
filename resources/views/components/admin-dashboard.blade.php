@props(['title'=>'Dashboard','dashTitle'])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - {{$title}}</title>
    <!-- Custom fonts for this template-->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="{{asset('css/admin/style.css')}}"></head>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Google Fonts -->
        <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
        />
        <!-- MDB -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css"
        rel="stylesheet"
      />

  </head>
  <body id="page-top">
    <div class="contant">
      <!-- Page Wrapper -->
      <div id="wrapper">

          <!-- Sidebar -->
          <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

              <!-- Sidebar - Brand -->
              <a class="sidebar-brand d-flex align-items-center justify-content-center py-5" href="{{asset('dashboard')}}">
                <h4 class="text-title">Admin<br><small>dashboard</small></h4>
              </a>

              <!-- Divider -->
              <hr class="sidebar-divider my-0">

              <!-- Nav Item - Dashboard -->
              <li class="nav-item active">
                  <a class="nav-link" href="{{asset('dashboard')}}">
                      <i class="fas fa-fw fa-tachometer-alt"></i>
                      <span>Dashboard</span></a>
              </li>

              <!-- Divider -->
              <hr class="sidebar-divider">

              <!-- Heading -->
              <div class="sidebar-heading">
                  Interface
              </div>

              <!-- Nav Item - Pages Collapse Menu -->
              <li class="nav-item" style="cursor:pointer !important;">
                  <div class="dropdown">
                    <div class="nav-link collapsed"
                      data-toggle="collapse" data-target="#collapseTwo"
                      aria-expanded="true" aria-controls="collapseTwo"
                      id="dropdownMenuButton"
                      data-mdb-dropdown-init
                      data-mdb-ripple-init
                      aria-expanded="false"
                    >
                      <i class="fa-solid fa-users"></i>
                      <span>Membres</span>
                    </div>
                    <ul class="dropdown-menu ml-4" aria-labelledby="dropdownMenuButton">
                      <li><a class="dropdown-item" href="{{route('members.create')}}">Ajouter membres</a></li>
                      <li><a class="dropdown-item" href="{{route('members.index')}}">Touts les membres</a></li>
                    </ul>
                  </div>
              </li>
              <!-- Nav Item - Pages Collapse Menu -->
              <li class="nav-item" style="cursor:pointer !important;">
                  <div class="dropdown">
                    <div class="nav-link collapsed"
                      data-toggle="collapse" data-target="#collapseTwo"
                      aria-expanded="true" aria-controls="collapseTwo"
                      id="dropdownMenuButton"
                      data-mdb-dropdown-init
                      data-mdb-ripple-init
                      aria-expanded="false"
                    >
                    <i class="fas fa-solid fa-list"></i>
                    <span>Categories</span>
                    </div>
                    <ul class="dropdown-menu ml-4" aria-labelledby="dropdownMenuButton">
                      <li><a class="dropdown-item" href="{{route('categories.create')}}">Ajouter Categories</a></li>
                      <li><a class="dropdown-item" href="{{route('categories.index')}}">Toutes les Categories</a></li>
                    </ul>
                  </div>
              </li>

              <!-- Divider -->
              <hr class="sidebar-divider">
          </ul>
          <!-- End of Sidebar -->

          <!-- Content Wrapper -->
          <div id="content-wrapper" class="d-flex flex-column">

              <!-- Main Content -->
              <div id="content">

                  <!-- Topbar -->
                  <!-- Navbar -->
                  <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow ">
                    <!-- Container wrapper -->
                    <div class="container px-3">
                      <!-- Toggle button -->
                      <button
                        data-mdb-collapse-init
                        class="navbar-toggler"
                        type="button"
                        data-mdb-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                      >
                        <i class="fas fa-bars"></i>
                      </button>
                      <div></div>
                      <!-- Right elements -->
                      <div class="d-flex align-items-center">
                        <!-- Avatar -->
                        <div class="dropdown">
                          <a
                            data-mdb-dropdown-init
                            class="dropdown-toggle d-flex align-items-center hidden-arrow"
                            href="#"
                            id="navbarDropdownMenuAvatar"
                            role="button"
                            aria-expanded="false"
                          >
                            <img
                              src="{{asset('imgs/admin-avatar.png')}}"
                              class="rounded-circle border border-secondary"
                              height="25"
                              alt="Black and White Portrait of a Man"
                              loading="lazy"
                            />
                          </a>
                          <ul
                            class="dropdown-menu dropdown-menu-end"
                            aria-labelledby="navbarDropdownMenuAvatar"
                          >
                            <li style="height: 100% !important">
                              <form action="{{route('logout')}}" method="POST">
                                @csrf
                                <button class="dropdown-item">Logout</button>
                              </form>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <!-- Right elements -->
                    </div>
                    <!-- Container wrapper -->
                  </nav>
                  <!-- Navbar -->
                  <!-- End of Topbar -->

                  <!-- Begin Page Content -->
                  <div class="container-fluid">

                      <!-- Page Heading -->
                      <div class="d-sm-flex align-items-center justify-content-between mb-4">
                          <h1 class="h3 mb-0 text-gray-800">{{$dashTitle}}</h1>
                          <div></div>
                      </div>
                  </div>
                  <!-- /.container-fluid -->
                  <div class="app px-3">
                    {{$slot}}
                  </div>
              </div>
              <!-- End of Main Content -->
          </div>
          <!-- End of Content Wrapper -->

      </div>
      <!-- End of Page Wrapper -->

      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>
      </a>
      <!-- Custom scripts for all pages-->
        <!-- MDB -->
        <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"
        ></script>

        {{-- Sweet alert --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        </div>
  </body>
</html>
