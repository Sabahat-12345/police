@extends('admin.include.app')
@section('title', 'Admin Dashboard - Complaint Forms')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Complaint Forms</h1>
    <p class="mb-4">Manage all complaints from this dashboard. You can view, approve, reject, or delete complaint records.</p>

    <!-- DataTables Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold">Complaint List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>CNIC / Passport</th>
                            <th>Contact No</th>
                            <th>Father Name</th>
                            <th>Gender</th>
                            <th>WhatsApp No</th>
                            <th>Address</th>
                            <th>Incident Date</th>
                            <th>Nature of Complaint</th>
                            <th>FR No</th>
                            <th>Country</th>
                            <th>Incident Details</th>
                            <th>Attachment</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($models as $model)
            
                            <tr>
                                <td>{{ $model->id }}</td>
                                <td>{{ $model->name }}</td>
                                <td>{{ $model->cnic_passport }}</td>
                                <td>{{ $model->contactNo }}</td>
                                <td>{{ $model->fatherName }}</td>
                                <td>{{ $model->gender }}</td>
                                <td>{{ $model->whatsAppNo }}</td>
                            
                                <td>{{ $model->complainantAddress }}</td>
                                <td>{{ $model->incidentDate }}</td>
                                <td>{{ $model->natureOfComplaint }}</td>
                                <td>{{ $model->frNo }}</td>
                                <td>{{ $model->complainantCountry }}</td>
                                <td>{{ $model->incidentDetails }}</td>
                                <td>
                                    @if ($model->attachFile)
                                       <a href="{{ asset($model->attachFile) }}" target="_blank"
                                                class="btn btn-sm btn-info">
                                                <i class="fas fa-file-pdf"></i> View
                                            </a>
                                    @else
                                        <span class="text-muted">No File</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="actionMenuButton{{ $model->id }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Actions
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="actionMenuButton{{ $model->id }}">
                                            <a class="dropdown-item text-primary font-weight-bold" href="{{ route('show', $model->id) }}">👁 View</a>
                                            <form action="{{ route('approve', $model->id) }}" method="POST">
                                                @csrf
                                                <button class="dropdown-item text-success font-weight-bold" type="submit">✔ Approve</button>
                                            </form>
                                            <form action="{{ route('reject', $model->id) }}" method="POST">
                                                @csrf
                                                <button class="dropdown-item text-warning font-weight-bold" type="submit">✖ Reject</button>
                                            </form>
                                            <a class="dropdown-item text-info font-weight-bold" href="{{ route('edit', $model->id) }}">✎ Edit</a>
                                            <form action="{{ route('destroy', $model->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                                @csrf
                                                @method('DELETE')
                                                <button class="dropdown-item text-danger font-weight-bold" type="submit">🗑 Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="15" class="text-center">No Application Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        $('#dataTable').DataTable({
            responsive: true
        });
    });
</script>
@endpush
