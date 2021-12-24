<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>COVAC - Admin Dashboard</title>

    <!-- Icon -->
    <link rel="icon" href="/img/covac.webp">

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="/css/sb-admin-custom.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-clinic-medical "></i>
                </div>
                <div class="sidebar-brand-text mx-3">PCVS - COVAC</sup><br>ADMINISTRATOR</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Administrator Menu
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link " href="{{ route('adminViewBatch') }}">
                    <i class="fas fa-fw fa-book-medical"></i>
                    <span>View Vaccine Batch Info</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('adminRegisterBatch') }}">
                    <i class="fas fa-fw fa-tasks"></i>
                    <span>Record New Vaccine Batch</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('adminConfirmAppointment') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Confirm Vacc. Appointment</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('adminRecordAppointment') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Record Vacc. Appointment</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <li style="text-align:center">
                <a class="btn btn-light" href="{{ route('logout') }}" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                </svg>
                </a>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown no-arrow">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                        Welcome Mr/Ms. 
                                        <strong>{{ Auth::user()->fullName }}</strong>
                                    </span>
                                    <img src="https://img.icons8.com/color/48/ffffff/nurse-male.png" />
                                </a>
                            </li>
                        </ul>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Healthcare Administrator Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Administrator Name</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                {{ Auth::user()->fullName }}
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Healthcare Center Name</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                {{ Auth::user()->centreName }}
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-hospital-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Covid-19
                                                Vaccination Administered
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    @php
                                                        $testGiven = 0;
                                                    @endphp
                                                    @foreach ($vaccinations as $key => $data)
                                                        @if ($data->adminName == Auth::user()->fullName and $data->status == 'Administered')
                                                            @php
                                                                $testGiven++;
                                                            @endphp
                                                        @endif
                                                    @endforeach
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                        {{ $testGiven }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-syringe fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Pending Appointment</div>
                                            @php
                                                $wait = 0;
                                            @endphp
                                            @foreach ($vaccinations as $key => $data)
                                                @if ($data->status == 'Pending' and $data->centreName == Auth::user()->centreName)
                                                    @php
                                                        $wait += 1;
                                                    @endphp
                                                @endif
                                            @endforeach
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                {{ $wait }}
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-hourglass-half fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-dark">Your Profile Details</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <table ble class="table table-borderless col-7">
                                        <tbody>
                                            <tr>
                                                <th scope="row">Name</th>
                                                <td>{{ Auth::user()->fullName }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Email</th>
                                                <td>{{ Auth::user()->email }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Staff ID</th>
                                                <td>{{ Auth::user()->StaffID }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Assigned Healthcare Center</th>
                                                <td>{{ Auth::user()->centreName }}</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- Content Row -->
                    <div class="row">

                    </div>
                    <!-- End of Main Content -->



                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white" style="margin-top: 280px;">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Counter-Covid CTIS 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>
            
            <!-- Bootstrap core JavaScript-->
            <script src="/vendor/jquery/jquery.min.js"></script>
            <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="/js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="/vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="/js/demo/chart-area-demo.js"></script>
            <script src="/js/demo/chart-pie-demo.js"></script>

</body>

</html>