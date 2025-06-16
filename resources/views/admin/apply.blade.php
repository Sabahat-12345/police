@extends('admin.include.app')
@section('title', 'Admin Dashboard - Apply Forms')

@section('content')
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span>&times;</span>
        </button>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span>&times;</span>
        </button>
    </div>
@endif
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Application Forms</h1>
        <p class="mb-4">Manage all job applications from this dashboard. You can view, edit, or delete application records.</p>

        <!-- DataTables Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Job Applications</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
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
                                    <td>{{ $model->id }}</td>
                                    <td>{{ $model->fullName }}</td>
                                    <td>{{ $model->email }}</td>
                                    <td>{{ $model->phone }}</td>
                                    <td>{{ $model->cnic }}</td>
                                    <td>{{ $model->dob }}</td>
                                    <td>{{ $model->jobPosition }}</td>
                                    <td>{{ $model->education }}</td>
                                    <td>{{ $model->experience }}</td>
                                    <td>
                                        @if ($model->resume)
                                            <a href="{{ asset($model->resume) }}" target="_blank"
                                                class="btn btn-sm btn-info">
                                                <i class="fas fa-file-pdf"></i> View
                                            </a>
                                        @else
                                            <span class="text-muted">No File</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="dropdown no-arrow">
                                            <a class="dropdown-toggle" href="#" role="button"
                                                id="dropdownMenuLink{{ $model->id }}" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-600"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                aria-labelledby="dropdownMenuLink{{ $model->id }}">

                                                <a class="dropdown-item" href="#" data-toggle="modal"
                                                    data-target="#viewModal{{ $model->id }}">
                                                    <i class="fas fa-eye fa-sm fa-fw mr-2 text-gray-400"></i> View
                                                </a>

                                                <!-- Debug: Check if this button is working -->
                                                <a class="dropdown-item" href="#" 
                                                   onclick="console.log('Edit clicked for ID: {{ $model->id }}'); return true;"
                                                   data-toggle="modal" data-target="#editModal{{ $model->id }}">
                                                    <i class="fas fa-edit fa-sm fa-fw mr-2 text-gray-400"></i> Edit (ID: {{ $model->id }})
                                                </a>

                                                <form action="{{ route('apply.approve', $model->id) }}" method="POST">
                                                    @csrf
                                                    <button
                                                        onclick="return confirm('Are you sure you want to approve this Apply Form?')"
                                                        class="dropdown-item text-success font-weight-bold" type="submit">✔
                                                        Approve</button>
                                                </form>

                                                <form action="{{ route('apply.reject', $model->id) }}" method="POST">
                                                    @csrf
                                                    <button
                                                        onclick="return confirm('Are you sure you want to reject this Apply Form?')"
                                                        class="dropdown-item text-warning font-weight-bold" type="submit">✖
                                                        Reject</button>
                                                </form>

                                                <div class="dropdown-divider"></div>

                                                <form method="POST" action="{{ route('apply.destroy', $model->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item text-danger"
                                                        onclick="return confirm('Are you sure you want to delete this application?')">
                                                        <i class="fas fa-trash fa-sm fa-fw mr-2"></i> Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="11" class="text-center">No Applications Found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <!-- All Modals Outside the Table -->
    @foreach ($models as $model)
        <!-- View Modal -->
        <div class="modal fade" id="viewModal{{ $model->id }}" tabindex="-1" role="dialog"
            aria-labelledby="viewModalLabel{{ $model->id }}" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="viewModalLabel{{ $model->id }}">Application
                            Details - {{ $model->fullName }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Full Name:</strong> {{ $model->fullName }}</p>
                        <p><strong>Email:</strong> {{ $model->email }}</p>
                        <p><strong>Phone:</strong> {{ $model->phone }}</p>
                        <p><strong>CNIC:</strong> {{ $model->cnic }}</p>
                        <p><strong>Date of Birth:</strong> {{ $model->dob }}</p>
                        <p><strong>Job Position:</strong> {{ $model->jobPosition }}</p>
                        <p><strong>Education:</strong> {{ $model->education }}</p>
                        <p><strong>Experience:</strong> {{ $model->experience }}</p>
                        <p><strong>Resume:</strong>
                            @if ($model->resume)
                                <a href="{{ asset($model->resume)}}" target="_blank"
                                    class="btn btn-sm btn-info">View Resume</a>
                            @else
                                <span>No Resume Uploaded</span>
                            @endif
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Modal -->
        <div class="modal fade" id="editModal{{ $model->id }}" tabindex="-1" role="dialog" 
             aria-labelledby="editModalLabel{{ $model->id }}" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <form action="{{ route('apply.update', $model->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel{{ $model->id }}">
                                Edit Application - {{ $model->fullName }} (ID: {{ $model->id }})
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" name="fullName" class="form-control" 
                                       value="{{ $model->fullName }}" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" 
                                       value="{{ $model->email }}" required>
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" name="phone" class="form-control" 
                                       value="{{ $model->phone }}" required>
                            </div>
                            <div class="form-group">
                                <label>CNIC</label>
                                <input type="text" name="cnic" class="form-control" 
                                       value="{{ $model->cnic }}" required>
                            </div>
                            <div class="form-group">
                                <label>Date of Birth</label>
                                <input type="date" name="dob" class="form-control" 
                                       value="{{ $model->dob }}" required>
                            </div>
                            <div class="form-group">
                                <label>Job Position</label>
                                <input type="text" name="jobPosition" class="form-control" 
                                       value="{{ $model->jobPosition }}" required>
                            </div>
                            <div class="form-group">
                                <label>Education</label>
                                <input type="text" name="education" class="form-control" 
                                       value="{{ $model->education }}" required>
                            </div>
                            <div class="form-group">
                                <label>Experience</label>
                                <textarea name="experience" class="form-control">{{ $model->experience }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Resume (optional)</label>
                                <input type="file" name="resume" class="form-control-file">
                                @if($model->resume)
                                    <p>Current: <a href="{{ asset($model->resume) }}" target="_blank">View Resume</a></p>
                                @endif
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    <!-- /.container-fluid -->
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                responsive: true
            });
            
            // Debug: Check if modals exist
            console.log('Available Edit Modals:');
            $('[id^="editModal"]').each(function() {
                console.log('Modal ID:', this.id);
            });
        });
    </script>
@endpush