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
            <li class="nav-item">
                <a class="nav-link" href="{{ route('adminDashboard') }}">
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
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('adminRecordAppointment') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Record Vacc. Appointment</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <li style="text-align:center">
                <a class="btn btn-light" href="{{ route('logout') }}">
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

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-secondary">List of Accepted Vaccination Appointments (At {{ Auth::user()->centreName }})</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Vaccination ID</th>
                                            <th>Appointment Date</th>
                                            <th>Status</th>
                                            <th>Patient Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $datacount = 0;
                                        @endphp
                                        @foreach($vaccinations as $key=> $data)
                                            @if ($data->centreName == Auth::user()->centreName)
                                                @if ($data->status == "Confirmed")
                                                    <tr>                
                                                        <td>{{$data->vaccinationID}}</td>
                                                        <td>{{$data->appointmentDate}}</td>
                                                        <td>{{$data->status}}</td>
                                                        <td>{{$data->patientName}}</td>
                                                    </tr>
                                                    @php
                                                        $datacount++;   
                                                    @endphp
                                                @endif
                                            @endif
                                        @endforeach
                                        @if ($datacount <= 0)
                                            <tr> 
                                                <td> No data found in database. </td>
                                                <td> - </td>
                                                <td> - </td>
                                                <td> - </td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                <!-- End of Content Wrapper -->

                <div class="row">

                    <!-- Area Chart -->
                    <div class="col-xl-8 col-lg-7">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-dark">Record Vaccination Data</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body pl-5" style="width: 70%;">
                                <form class="needs-validation" novalidate="" method="POST" action="{{ route('adminRecordAppointment') }}">
                                    @csrf
                                    <div class="row g-3">
                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <div class="col-12">
                                            <label for="name" class="form-label"> Admin Name | Work Place</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="name" name="adminName" value="{{ Auth::user()->fullName }}" id="disableInput" readonly> &emsp; &emsp;
                                                <input type="text" class="form-control" id="name" name="centreName" value="{{ Auth::user()->centreName }}" id="disableInput" readonly>
                                            </div>
                                        </div>
                                        <br><br><br><br>
                                        <div class="col-12">
                                            <label for="vaccinationID" class="form-label">Vaccination ID<span class="text-muted"></span></label>
                                            <select id="vaccinationID" class="form-control" name="vaccinationID" aria-label="Default select example">
                                                @if ($datacount != 0)
                                                    @foreach ($vaccinations as $key => $data)
                                                        @if ($data->centreName == Auth::user()->centreName)
                                                            @if ($data->status == "Confirmed")
                                                                <option value="{{ $data->vaccinationID }}"> {{ $data->vaccinationID }}.) {{ $data->patientName }} ({{ $data->appointmentDate }})</option>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                @else
                                                    <option value="NULL"> No data found in database. </option>
                                                @endif
                                            </select>
                                        </div>
                                        <br><br><br><br>
                                        <div class="col-12">
                                            <label for="batchNo" class="form-label">Vaccine Batch<span class="text-muted"></span></label>
                                            <select id="batchNo" class="form-control" name="batchNo" aria-label="Default select example">
                                                @php
                                                    $name = "";
                                                    $manufacturer = "";
                                                @endphp
                                                @foreach ($batches as $key => $data)
                                                    @if ($data->centreName == Auth::user()->centreName && $data->quantityAvailable != 0 )
                                                        @foreach($vaccine as $key=> $data2)
                                                            @if($data->vaccineID == $data2->vaccineID)
                                                                @php
                                                                    $name = $data2->vaccineName;
                                                                    $manufacturer = $data2->manufacturer;
                                                                @endphp
                                                            @endif
                                                        @endforeach
                                                        @foreach($vaccine as $key => $data2)
                                                            @if($data2->vaccineID == $data->vaccineID)
                                                                $name = $data2->vaccineName;
                                                                $manufacturer = $data2->manufacturer;
                                                            @endif
                                                        @endforeach
                                                        <option value="{{ $data->batchNo }}"> {{ $data->batchNo }}.) {{ $name }}, {{ $manufacturer }} | {{ $data->expiryDate }} | Qty: {{ $data->quantityAvailable }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <br><br><br><br>
                                        <div class="col-12">
                                            <label for="total" class="form-label">Remarks<span class="text-muted"></span></label>
                                            <textarea type="text" class="form-control" id="remarks" name="remarks" rows="3"> </textarea>
                                            @if ($errors->any())
                                            <br>
                                                <p style="color:red"> <b>
                                                    {{$errors->first()}} </b>
                                                </p>                                                                    
                                            @endif
                                        </div>
                                        <br><br><br><br>
                                    </div>
    
                                    <hr class="my-4">
    
                                    <button class="btn btn-danger btn-lg mr-3" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
    
                    <!-- Pie Chart -->
                    <div class="col-xl-4 col-lg-5">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div
                                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-dark">
                                    <i class="fas fa-info-circle"></i>
                                    Record a Vaccination Appointment Data
                                </h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <p>
                                    Through this menu, you can update an existing vaccination appointment data that has been accepted previously. The input data will be updated into the database, replacing the previous one.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>    

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