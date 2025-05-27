@extends('admin.include.app')
@section('title', 'Admin Dashboard - Apply Forms')
@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Application Forms</h1>
    <p class="mb-4">Manage all job applications from this dashboard. You can view, edit, or delete application records.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Job Applications</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Email Address</th>
                            <th>Phone Number</th>
                            <th>CNIC Number</th>
                            <th>Date of Birth</th>
                            <th>Applying for Position</th>
                            <th>Highest Qualification</th>
                            <th>Work Experience</th>
                            <th>Resume</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($models as $model)
                            <tr>
                            <td>{{$model->fullName}}</td>
                            <td>{{$model->email}}</td>
                            <td>{{$model->phone}}</td>
                            <td>{{$model->cnic}}</td>
                            <td>{{$model->dob}}</td>
                            <td>{{$model->jobPosition}}</td>
                            <td>{{$model->education}}</td>
                            <td>{{$model->experience}}</td>
                            <td><img src="{{asset($model->resume)}}" alt="" style="width: 40px; height:40px;"></td>
                            <td>
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#"><i class="fas fa-eye fa-sm fa-fw mr-2 text-gray-400"></i> View</a>
                                        <a class="dropdown-item" href="#"><i class="fas fa-edit fa-sm fa-fw mr-2 text-gray-400"></i> Edit</a>
                                        <a class="dropdown-item text-success" href="#"><i class="fas fa-check fa-sm fa-fw mr-2"></i> Approve</a>
                                        <a class="dropdown-item text-warning" href="#"><i class="fas fa-times fa-sm fa-fw mr-2"></i> Reject</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger" href="#"><i class="fas fa-trash fa-sm fa-fw mr-2"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @empty
                            <tr>
                               <td colspan="1"> No Additional Data Found ........</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection
@push('scripts')
<!-- Page specific scripts -->
<script>
$(document).ready(function() {
    $('#dataTable').DataTable({
        responsive: true
    });
});
</script>
@endpush



                        {{-- <tr>
                            <td>Muhammad Ahmed</td>
                            <td>ahmed@example.com</td>
                            <td>0300-1234567</td>
                            <td>42101-1234567-8</td>
                            <td>1990/04/25</td>
                            <td>Web Developer</td>
                            <td>BS Computer Science</td>
                            <td>2 years</td>
                            <td><a href="#" class="btn btn-sm btn-info"><i class="fas fa-file-pdf"></i> View</a></td>
                            <td>
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#"><i class="fas fa-eye fa-sm fa-fw mr-2 text-gray-400"></i> View</a>
                                        <a class="dropdown-item" href="#"><i class="fas fa-edit fa-sm fa-fw mr-2 text-gray-400"></i> Edit</a>
                                        <a class="dropdown-item text-success" href="#"><i class="fas fa-check fa-sm fa-fw mr-2"></i> Approve</a>
                                        <a class="dropdown-item text-warning" href="#"><i class="fas fa-times fa-sm fa-fw mr-2"></i> Reject</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger" href="#"><i class="fas fa-trash fa-sm fa-fw mr-2"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Sara Khan</td>
                            <td>sara@example.com</td>
                            <td>0321-9876543</td>
                            <td>42201-8765432-1</td>
                            <td>1992/07/15</td>
                            <td>Graphic Designer</td>
                            <td>BFA Design</td>
                            <td>3 years</td>
                            <td><a href="#" class="btn btn-sm btn-info"><i class="fas fa-file-pdf"></i> View</a></td>
                            <td>
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#"><i class="fas fa-eye fa-sm fa-fw mr-2 text-gray-400"></i> View</a>
                                        <a class="dropdown-item" href="#"><i class="fas fa-edit fa-sm fa-fw mr-2 text-gray-400"></i> Edit</a>
                                        <a class="dropdown-item text-success" href="#"><i class="fas fa-check fa-sm fa-fw mr-2"></i> Approve</a>
                                        <a class="dropdown-item text-warning" href="#"><i class="fas fa-times fa-sm fa-fw mr-2"></i> Reject</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger" href="#"><i class="fas fa-trash fa-sm fa-fw mr-2"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Imran Ali</td>
                            <td>imran@example.com</td>
                            <td>0333-1122334</td>
                            <td>42301-2233445-6</td>
                            <td>1988/01/12</td>
                            <td>Project Manager</td>
                            <td>MBA</td>
                            <td>5 years</td>
                            <td><a href="#" class="btn btn-sm btn-info"><i class="fas fa-file-pdf"></i> View</a></td>
                            <td>
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#"><i class="fas fa-eye fa-sm fa-fw mr-2 text-gray-400"></i> View</a>
                                        <a class="dropdown-item" href="#"><i class="fas fa-edit fa-sm fa-fw mr-2 text-gray-400"></i> Edit</a>
                                        <a class="dropdown-item text-success" href="#"><i class="fas fa-check fa-sm fa-fw mr-2"></i> Approve</a>
                                        <a class="dropdown-item text-warning" href="#"><i class="fas fa-times fa-sm fa-fw mr-2"></i> Reject</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger" href="#"><i class="fas fa-trash fa-sm fa-fw mr-2"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Ayesha Malik</td>
                            <td>ayesha@example.com</td>
                            <td>0345-9988776</td>
                            <td>42401-5544332-1</td>
                            <td>1995/03/29</td>
                            <td>Content Writer</td>
                            <td>MA English</td>
                            <td>1 year</td>
                            <td><a href="#" class="btn btn-sm btn-info"><i class="fas fa-file-pdf"></i> View</a></td>
                            <td>
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#"><i class="fas fa-eye fa-sm fa-fw mr-2 text-gray-400"></i> View</a>
                                        <a class="dropdown-item" href="#"><i class="fas fa-edit fa-sm fa-fw mr-2 text-gray-400"></i> Edit</a>
                                        <a class="dropdown-item text-success" href="#"><i class="fas fa-check fa-sm fa-fw mr-2"></i> Approve</a>
                                        <a class="dropdown-item text-warning" href="#"><i class="fas fa-times fa-sm fa-fw mr-2"></i> Reject</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger" href="#"><i class="fas fa-trash fa-sm fa-fw mr-2"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Kamran Akmal</td>
                            <td>kamran@example.com</td>
                            <td>0312-3456789</td>
                            <td>42501-9876543-2</td>
                            <td>1991/11/28</td>
                            <td>Software Engineer</td>
                            <td>MS Computer Science</td>
                            <td>4 years</td>
                            <td><a href="#" class="btn btn-sm btn-info"><i class="fas fa-file-pdf"></i> View</a></td>
                            <td>
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#"><i class="fas fa-eye fa-sm fa-fw mr-2 text-gray-400"></i> View</a>
                                        <a class="dropdown-item" href="#"><i class="fas fa-edit fa-sm fa-fw mr-2 text-gray-400"></i> Edit</a>
                                        <a class="dropdown-item text-success" href="#"><i class="fas fa-check fa-sm fa-fw mr-2"></i> Approve</a>
                                        <a class="dropdown-item text-warning" href="#"><i class="fas fa-times fa-sm fa-fw mr-2"></i> Reject</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger" href="#"><i class="fas fa-trash fa-sm fa-fw mr-2"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Nida Fatima</td>
                            <td>nida@example.com</td>
                            <td>0333-7654321</td>
                            <td>42601-1357924-6</td>
                            <td>1994/12/02</td>
                            <td>UI/UX Designer</td>
                            <td>BS Design</td>
                            <td>2.5 years</td>
                            <td><a href="#" class="btn btn-sm btn-info"><i class="fas fa-file-pdf"></i> View</a></td>
                            <td>
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#"><i class="fas fa-eye fa-sm fa-fw mr-2 text-gray-400"></i> View</a>
                                        <a class="dropdown-item" href="#"><i class="fas fa-edit fa-sm fa-fw mr-2 text-gray-400"></i> Edit</a>
                                        <a class="dropdown-item text-success" href="#"><i class="fas fa-check fa-sm fa-fw mr-2"></i> Approve</a>
                                        <a class="dropdown-item text-warning" href="#"><i class="fas fa-times fa-sm fa-fw mr-2"></i> Reject</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger" href="#"><i class="fas fa-trash fa-sm fa-fw mr-2"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr> --}}