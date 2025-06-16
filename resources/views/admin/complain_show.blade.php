@extends('admin.include.app')
@section('title', 'Show Complaint Form') <!-- or your layout file -->

@section('content')
<div class="container mt-4">
    <h2>Complaint Details</h2>
    <a href="{{ route('admin-complain.list') }}" class="btn btn-secondary mb-3">⬅ Back to List</a>

    <div class="card p-4">
        <p><strong>Name:</strong> {{ $model->name }}</p>
        <p><strong>CNIC/Passport:</strong> {{ $model->cnic_passport }}</p>
        <p><strong>Contact No:</strong> {{ $model->contactNo }}</p>
        <p><strong>Father Name:</strong> {{ $model->fatherName }}</p>
        <p><strong>Gender:</strong> {{ ucfirst($model->gender) }}</p>
        <p><strong>WhatsApp No:</strong> {{ $model->whatsAppNo }}</p>
        <p><strong>Complainant Address:</strong> {{ $model->complainantAddress }}</p>
        <p><strong>Incident Date:</strong> {{ $model->incidentDate }}</p>
        <p><strong>Nature of Complaint:</strong> {{ $model->natureOfComplaint }}</p>
        <p><strong>FR No:</strong> {{ $model->frNo }}</p>
        <p><strong>Country:</strong> {{ $model->complainantCountry }}</p>
        <p><strong>Incident Details:</strong></p>
        <p>{{ $model->incidentDetails }}</p>

        @if($model->attachFile)
            <p><strong>Attachment:</strong> 
                <a href="{{ asset($model->attachFile) }}" target="_blank">📎 View Attachment</a>
            </p>
        @endif
    </div>
</div>
@endsection
