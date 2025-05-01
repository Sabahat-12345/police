<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard - Apply Forms</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('admin/css/sb-admin-2.min.css')}}" rel="stylesheet">
    
    <style>
        .application-card {
            border-left: 4px solid #4e73df;
            margin-bottom: 20px;
            transition: all 0.3s;
        }
        .application-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .status-pending {
            border-left-color: #f6c23e;
        }
        .status-approved {
            border-left-color: #1cc88a;
        }
        .status-rejected {
            border-left-color: #e74a3b;
        }
        .application-details {
            display: none;
            padding: 15px;
            background-color: #f8f9fc;
            border-top: 1px solid #e3e6f0;
        }
        .badge-pending {
            background-color: #f6c23e;
            color: #000;
        }
        .badge-approved {
            background-color: #1cc88a;
        }
        .badge-rejected {
            background-color: #e74a3b;
        }
        .attachment-thumb {
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin-right: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            cursor: pointer;
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
     <!-- Sidebar - Same as before -->
     <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Admin Dashboard </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{route('dashboard')}}">
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
       <!-- Media Management Dropdown -->
<li class="nav-item">
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMedia"
    aria-expanded="true" aria-controls="collapseMedia">
    <i class="fas fa-fw fa-images"></i>
    <span>Media</span>
</a>
<div id="collapseMedia" class="collapse" aria-labelledby="headingMedia" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Media Components:</h6>
        <a class="collapse-item" href="{{route('gallery')}}">Gallery</a>
        <a class="collapse-item" href="#slider">Slider</a>
    </div>
</div>
</li>
<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Addons
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
      aria-expanded="true" aria-controls="collapsePages">
      <i class="fas fa-fw fa-folder"></i>
      <span>Pages</span>
  </a>
  <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Login Screens:</h6>
          <a class="collapse-item" href="{{route('login')}}">Login</a>
          <a class="collapse-item" href="{{route('register')}}">Register</a>
          <a class="collapse-item" href="{{route('forgot-password')}}">Forgot Password</a>
          <div class="collapse-divider"></div>
          <h6 class="collapse-header">Other Pages:</h6>
          <a class="collapse-item" href="{{route('404')}}">404 Page</a>
          <a class="collapse-item" href="{{route('blank')}}">Blank Page</a>
      </div>
  </div>
</li>  <li class="nav-item">
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTables" 
   aria-expanded="true" aria-controls="collapseTables">
    <i class="fas fa-fw fa-table"></i>
    <span>Tables</span>
</a>
<div id="collapseTables" class="collapse" aria-labelledby="headingTables" 
     data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Data Tables:</h6>
        <a class="collapse-item" href="#apply">Apply</a>
        <a class="collapse-item" href="#complain">Complain</a>
        <a class="collapse-item" href="#complain-against-police">Complain Against Police</a>
        <a class="collapse-item" href="#application-status">Application Status</a>
        <a class="collapse-item" href="#collaborate">Collaborate</a>
    </div>
</div>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
<button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>
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

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="{{asset('admin/img/undraw_profile_1.svg')}}"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="{{asset('admin/img/undraw_profile_2.svg')}}"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="{{asset('admin/img/undraw_profile_3.svg')}}"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="{{asset('admin/img/undraw_profile.svg')}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Application Forms Management</h1>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="filterDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-filter"></i> Filter Applications
                            </button>
                            <div class="dropdown-menu" aria-labelledby="filterDropdown">
                                <a class="dropdown-item filter-option" href="#" data-status="all">All Applications</a>
                                <a class="dropdown-item filter-option" href="#" data-status="pending">Pending</a>
                                <a class="dropdown-item filter-option" href="#" data-status="approved">Approved</a>
                                <a class="dropdown-item filter-option" href="#" data-status="rejected">Rejected</a>
                            </div>
                        </div>
                    </div>

                    <!-- Applications Table -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Recent Applications</h6>
                            <div class="search-box">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search applications..." id="applicationSearch">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body" id="applicationsContainer">
                            <!-- Application Card 1 -->
                            <div class="card mb-3 application-card status-pending" data-status="pending" data-id="1">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="m-0 font-weight-bold text-primary">Application #APP-2023-001</h6>
                                        <small class="text-muted">Submitted: 15 Jan 2023</small>
                                    </div>
                                    <div>
                                        <span class="badge badge-pill badge-pending">Pending</span>
                                        <button class="btn btn-sm btn-info toggle-details ml-2">
                                            <i class="fas fa-eye"></i> View
                                        </button>
                                    </div>
                                </div>
                                <div class="application-details">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>Applicant Information</h5>
                                            <p><strong>Name:</strong> Muhammad Ali</p>
                                            <p><strong>CNIC:</strong> 42201-1234567-1</p>
                                            <p><strong>Phone:</strong> +92 300 1234567</p>
                                            <p><strong>Email:</strong> ali@example.com</p>
                                            <p><strong>Address:</strong> 123 Main Street, Lahore</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Application Details</h5>
                                            <p><strong>Type:</strong> Business License</p>
                                            <p><strong>Category:</strong> Small Business</p>
                                            <p><strong>Submission Date:</strong> 15 Jan 2023</p>
                                            <p><strong>Last Updated:</strong> 15 Jan 2023</p>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <h5>Attachments</h5>
                                            <div class="d-flex flex-wrap">
                                                <img src="https://via.placeholder.com/300x400?text=CNIC+Front" class="attachment-thumb" data-full="https://via.placeholder.com/800x1000?text=CNIC+Front">
                                                <img src="https://via.placeholder.com/300x400?text=CNIC+Back" class="attachment-thumb" data-full="https://via.placeholder.com/800x1000?text=CNIC+Back">
                                                <img src="https://via.placeholder.com/300x400?text=Business+Plan" class="attachment-thumb" data-full="https://via.placeholder.com/800x1000?text=Business+Plan">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <h5>Admin Actions</h5>
                                            <div class="btn-group">
                                                <button class="btn btn-success approve-application" data-id="1">
                                                    <i class="fas fa-check"></i> Approve
                                                </button>
                                                <button class="btn btn-danger reject-application" data-id="1">
                                                    <i class="fas fa-times"></i> Reject
                                                </button>
                                                <button class="btn btn-primary download-application" data-id="1">
                                                    <i class="fas fa-download"></i> Download
                                                </button>
                                                <button class="btn btn-info print-application" data-id="1">
                                                    <i class="fas fa-print"></i> Print
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Application Card 2 -->
                            <div class="card mb-3 application-card status-approved" data-status="approved" data-id="2">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="m-0 font-weight-bold text-primary">Application #APP-2023-002</h6>
                                        <small class="text-muted">Submitted: 10 Jan 2023 | Approved: 12 Jan 2023</small>
                                    </div>
                                    <div>
                                        <span class="badge badge-pill badge-approved">Approved</span>
                                        <button class="btn btn-sm btn-info toggle-details ml-2">
                                            <i class="fas fa-eye"></i> View
                                        </button>
                                    </div>
                                </div>
                                <div class="application-details">
                                    <!-- Similar structure as above -->
                                </div>
                            </div>

                            <!-- Application Card 3 -->
                            <div class="card mb-3 application-card status-rejected" data-status="rejected" data-id="3">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="m-0 font-weight-bold text-primary">Application #APP-2023-003</h6>
                                        <small class="text-muted">Submitted: 5 Jan 2023 | Rejected: 8 Jan 2023</small>
                                    </div>
                                    <div>
                                        <span class="badge badge-pill badge-rejected">Rejected</span>
                                        <button class="btn btn-sm btn-info toggle-details ml-2">
                                            <i class="fas fa-eye"></i> View
                                        </button>
                                    </div>
                                </div>
                                <div class="application-details">
                                    <!-- Similar structure as above -->
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer - Same as before -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2025</span>
                    </div>
                </div>
            </footer>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
 <!-- Scroll to Top Button-->
 <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

 <!-- Logout Modal-->
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
 aria-hidden="true">
 <div class="modal-dialog" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
             <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">×</span>
             </button>
         </div>
         <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
         <div class="modal-footer">
             <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
             <a class="btn btn-primary" href="{{route('login')}}">Logout</a>
         </div>
     </div>
 </div>
</div>
    <!-- Application Status Modal -->
    <div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="statusModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="statusModalLabel">Update Application Status</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="statusForm">
                        <input type="hidden" id="applicationId">
                        <div class="form-group">
                            <label for="statusAction">Action</label>
                            <select class="form-control" id="statusAction" required>
                                <option value="">Select action</option>
                                <option value="approve">Approve Application</option>
                                <option value="reject">Reject Application</option>
                                <option value="pending">Mark as Pending</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="statusComments">Comments</label>
                            <textarea class="form-control" id="statusComments" rows="3" placeholder="Enter any comments or notes..."></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" id="saveStatusChanges">Save Changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Attachment Preview Modal -->
    <div class="modal fade" id="attachmentModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Attachment Preview</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="" id="attachmentPreview" class="img-fluid" style="max-height: 70vh;">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="#" class="btn btn-primary" id="downloadAttachment">Download</a>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Your existing modals (logout modal) -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-hidden="true">
        <!-- Your existing logout modal code -->
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('admin/js/sb-admin-2.min.js')}}"></script>

    <script>
        $(document).ready(function() {
            // Toggle application details
            $(document).on('click', '.toggle-details', function() {
                var details = $(this).closest('.application-card').find('.application-details');
                details.slideToggle();
                $(this).find('i').toggleClass('fa-eye fa-eye-slash');
            });

            // Filter applications
            $('.filter-option').click(function(e) {
                e.preventDefault();
                var status = $(this).data('status');
                
                if (status === 'all') {
                    $('.application-card').show();
                } else {
                    $('.application-card').hide();
                    $(`.application-card[data-status="${status}"]`).show();
                }
            });

            // Search applications
            $('#applicationSearch').on('keyup', function() {
                var value = $(this).val().toLowerCase();
                $('.application-card').filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            });

            // Approve application
            $(document).on('click', '.approve-application', function() {
                var appId = $(this).data('id');
                $('#applicationId').val(appId);
                $('#statusAction').val('approve');
                $('#statusModal').modal('show');
            });

            // Reject application
            $(document).on('click', '.reject-application', function() {
                var appId = $(this).data('id');
                $('#applicationId').val(appId);
                $('#statusAction').val('reject');
                $('#statusModal').modal('show');
            });

            // Save status changes
            $('#saveStatusChanges').click(function() {
                var appId = $('#applicationId').val();
                var action = $('#statusAction').val();
                var comments = $('#statusComments').val();
                
                // Find the application card
                var appCard = $(`.application-card[data-id="${appId}"]`);
                
                // Update status
                if (action === 'approve') {
                    appCard.removeClass('status-pending status-rejected').addClass('status-approved');
                    appCard.find('.badge').removeClass('badge-pending badge-rejected').addClass('badge-approved').text('Approved');
                } else if (action === 'reject') {
                    appCard.removeClass('status-pending status-approved').addClass('status-rejected');
                    appCard.find('.badge').removeClass('badge-pending badge-approved').addClass('badge-rejected').text('Rejected');
                } else {
                    appCard.removeClass('status-approved status-rejected').addClass('status-pending');
                    appCard.find('.badge').removeClass('badge-approved badge-rejected').addClass('badge-pending').text('Pending');
                }
                
                // Add status update note
                var statusText = action.charAt(0).toUpperCase() + action.slice(1);
                var dateText = new Date().toLocaleDateString();
                appCard.find('.card-header small').append(` | ${statusText}: ${dateText}`);
                
                // Close modal
                $('#statusModal').modal('hide');
                $('#statusForm')[0].reset();
            });

            // View attachment
            $(document).on('click', '.attachment-thumb', function() {
                var fullSrc = $(this).data('full');
                $('#attachmentPreview').attr('src', fullSrc);
                $('#downloadAttachment').attr('href', fullSrc);
                $('#attachmentModal').modal('show');
            });

            // Download application
            $(document).on('click', '.download-application', function() {
                var appId = $(this).data('id');
                alert('Downloading application #' + appId);
                // In real implementation, this would trigger a download
            });

            // Print application
            $(document).on('click', '.print-application', function() {
                var appId = $(this).data('id');
                alert('Printing application #' + appId);
                // In real implementation, this would open print dialog
            });
        });
    </script>

</body>
</html>