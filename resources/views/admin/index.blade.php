@extends('admin.include.app')
@section('content')

                    <!-- Begin Page Content -->
                              <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Police Admin Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Total Cases Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Cases Registered</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">1,248</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Solved Cases Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Cases Solved</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">924</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-check-circle fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Cases Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pending Cases</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">324</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clock fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Officers Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Active Officers</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">78</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-shield fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Recent Cases -->
        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Recent Cases</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Case ID</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>PS-2023-1256</td>
                                    <td>Theft</td>
                                    <td><span class="badge badge-success">Solved</span></td>
                                    <td>2023-05-15</td>
                                </tr>
                                <tr>
                                    <td>PS-2023-1255</td>
                                    <td>Assault</td>
                                    <td><span class="badge badge-warning">Investigation</span></td>
                                    <td>2023-05-14</td>
                                </tr>
                                <tr>
                                    <td>PS-2023-1254</td>
                                    <td>Burglary</td>
                                    <td><span class="badge badge-primary">Filed</span></td>
                                    <td>2023-05-14</td>
                                </tr>
                                <tr>
                                    <td>PS-2023-1253</td>
                                    <td>Fraud</td>
                                    <td><span class="badge badge-danger">Reopened</span></td>
                                    <td>2023-05-13</td>
                                </tr>
                                <tr>
                                    <td>PS-2023-1252</td>
                                    <td>Missing Person</td>
                                    <td><span class="badge badge-success">Solved</span></td>
                                    <td>2023-05-12</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href="#cases" class="btn btn-primary btn-block mt-2">View All Cases</a>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Quick Actions</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <a href="#apply" class="btn btn-info btn-block btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-file-alt"></i>
                                </span>
                                <span class="text">New Application</span>
                            </a>
                        </div>
                        <div class="col-md-6 mb-4">
                            <a href="#complain" class="btn btn-warning btn-block btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-exclamation-circle"></i>
                                </span>
                                <span class="text">Register Complaint</span>
                            </a>
                        </div>
                        <div class="col-md-6 mb-4">
                            <a href="#complain-against-police" class="btn btn-danger btn-block btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-shield-alt"></i>
                                </span>
                                <span class="text">Police Complaint</span>
                            </a>
                        </div>
                        <div class="col-md-6 mb-4">
                            <a href="#application-status" class="btn btn-success btn-block btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-check-circle"></i>
                                </span>
                                <span class="text">Check Status</span>
                            </a>
                        </div>
                        <div class="col-md-6 mb-4">
                            <a href="#collaborate" class="btn btn-secondary btn-block btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-handshake"></i>
                                </span>
                                <span class="text">Collaborate</span>
                            </a>
                        </div>
                        <div class="col-md-6 mb-4">
                            <a href="#generate-report" class="btn btn-primary btn-block btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-file-pdf"></i>
                                </span>
                                <span class="text">Generate Report</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Activity Log -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Recent Activity Log</h6>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">New complaint registered</h6>
                                <small>15 minutes ago</small>
                            </div>
                            <p class="mb-1">Case ID: PS-2023-1257 (Theft at Main Market)</p>
                            <small>By: Inspector Rajesh</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">Application approved</h6>
                                <small>1 hour ago</small>
                            </div>
                            <p class="mb-1">Application ID: APP-2023-0452 (Character Certificate)</p>
                            <small>By: Sub-Inspector Priya</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">Case status updated</h6>
                                <small>2 hours ago</small>
                            </div>
                            <p class="mb-1">Case ID: PS-2023-1248 marked as Solved</p>
                            <small>By: Head Constable Amit</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection



                


    
