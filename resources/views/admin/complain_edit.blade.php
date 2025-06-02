@extends('admin.include.app')
@section('title', 'Edit Complaint')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit Complaint</h1>
    <p class="mb-4">Update the details of the complaint below.</p>

    <!-- Complaint Edit Form -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Complaint Details</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('complain.update', $model->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- City Section -->
                <div class="row mb-4">
                    <div class="col-md-12">
                        <h4 class="mb-3">City: Islamabad</h4>
                    </div>
                </div>

                <!-- Personal Information -->
                <div class="card mb-4">
                    <div class="card-header">Personal Information</div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Name *</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name', $model->name) }}" required />
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">CNIC/Passport *</label>
                                <input type="text" class="form-control" name="cnic_passport" value="{{ old('cnic_passport', $model->cnic_passport) }}" required />
                                @error('cnic_passport')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Contact No *</label>
                                <input type="tel" class="form-control" name="contactNo" value="{{ old('contactNo', $model->contactNo) }}" required />
                                @error('contactNo')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Father Name *</label>
                                <input type="text" class="form-control" name="fatherName" value="{{ old('fatherName', $model->fatherName) }}" required />
                                @error('fatherName')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Gender *</label>
                                <select class="form-select" name="gender" required>
                                    <option value="" disabled>Select Gender</option>
                                    <option value="male" {{ old('gender', $model->gender) == 'male' ? 'selected' : '' }}>Male</option>
                                    <option value="female" {{ old('gender', $model->gender) == 'female' ? 'selected' : '' }}>Female</option>
                                    <option value="other" {{ old('gender', $model->gender) == 'other' ? 'selected' : '' }}>Other</option>
                                </select>
                                @error('gender')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">WhatsApp No</label>
                                <input type="tel" class="form-control" name="whatsappNo" value="{{ old('whatsappNo', $model->whatsappNo) }}" />
                                @error('whatsappNo')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Address Section -->
                <div class="card mb-4">
                    <div class="card-header">Address Information</div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Complainant Address *</label>
                            <textarea class="form-control" name="complainantAddress" rows="3" required>{{ old('complainantAddress', $model->complainantAddress) }}</textarea>
                            @error('complainantAddress')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Incident Details -->
                <div class="card mb-4">
                    <div class="card-header">Incident Details</div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Incident Date *</label>
                                <input type="date" class="form-control" name="incidentDate" value="{{ old('incidentDate', $model->incidentDate) }}" required />
                                @error('incidentDate')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Nature of Complaint</label>
                                <select class="form-select" name="complaintNature" required>
                                    <option value="" disabled>Select Nature of Complaint</option>
                                    <option value="theft" {{ old('complaintNature', $model->complaintNature) == 'theft' ? 'selected' : '' }}>Theft</option>
                                    <option value="harassment" {{ old('complaintNature', $model->complaintNature) == 'harassment' ? 'selected' : '' }}>Harassment</option>
                                    <option value="assault" {{ old('complaintNature', $model->complaintNature) == 'assault' ? 'selected' : '' }}>Physical Assault</option>
                                    <option value="fraud" {{ old('complaintNature', $model->complaintNature) == 'fraud' ? 'selected' : '' }}>Financial Fraud</option>
                                    <option value="property_dispute" {{ old('complaintNature', $model->complaintNature) == 'property_dispute' ? 'selected' : '' }}>Property Dispute</option>
                                    <option value="cyber_crime" {{ old('complaintNature', $model->complaintNature) == 'cyber_crime' ? 'selected' : '' }}>Online Crime (Cyber Crime)</option>
                                    <option value="missing_person" {{ old('complaintNature', $model->complaintNature) == 'missing_person' ? 'selected' : '' }}>Missing Person</option>
                                    <option value="vehicle_theft" {{ old('complaintNature', $model->complaintNature) == 'vehicle_theft' ? 'selected' : '' }}>Vehicle Theft</option>
                                    <option value="domestic_violence" {{ old('complaintNature', $model->complaintNature) == 'domestic_violence' ? 'selected' : '' }}>Domestic Violence</option>
                                    <option value="drugs" {{ old('complaintNature', $model->complaintNature) == 'drugs' ? 'selected' : '' }}>Illegal Drug Use</option>
                                    <option value="traffic_violation" {{ old('complaintNature', $model->complaintNature) == 'traffic_violation' ? 'selected' : '' }}>Traffic Violation</option>
                                    <option value="noise_pollution" {{ old('complaintNature', $model->complaintNature) == 'noise_pollution' ? 'selected' : '' }}>Noise Pollution</option>
                                    <option value="threats" {{ old('complaintNature', $model->complaintNature) == 'threats' ? 'selected' : '' }}>Criminal Threats</option>
                                    <option value="kidnapping" {{ old('complaintNature', $model->complaintNature) == 'kidnapping' ? 'selected' : '' }}>Kidnapping</option>
                                    <option value="vandalism" {{ old('complaintNature', $model->complaintNature) == 'vandalism' ? 'selected' : '' }}>Vandalism</option>
                                    <option value="other" {{ old('complaintNature', $model->complaintNature) == 'other' ? 'selected' : '' }}>Other</option>
                                </select>
                                @error('complaintNature')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">FR No</label>
                                <input type="text" class="form-control" name="frNo" value="{{ old('frNo', $model->frNo) }}" />
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Complainant Country *</label>
                                <select class="form-select" name="complainantCountry" required>
                                    <option value="" disabled>Select Nationality</option>
                                    <option value="Pakistan" {{ old('complainantCountry', $model->complainantCountry) == 'Pakistan' ? 'selected' : '' }}>Pakistan</option>
                                    <option value="Afghanistan" {{ old('complainantCountry', $model->complainantCountry) == 'Afghanistan' ? 'selected' : '' }}>Afghanistan</option>
                                    <option value="China" {{ old('complainantCountry', $model->complainantCountry) == 'China' ? 'selected' : '' }}>China</option>
                                    <option value="India" {{ old('complainantCountry', $model->complainantCountry) == 'India' ? 'selected' : '' }}>India</option>
                                    <option value="Iran" {{ old('complainantCountry', $model->complainantCountry) == 'Iran' ? 'selected' : '' }}>Iran</option>
                                    <option value="United States" {{ old('complainantCountry', $model->complainantCountry) == 'United States' ? 'selected' : '' }}>United States</option>
                                    <option value="United Kingdom" {{ old('complainantCountry', $model->complainantCountry) == 'United Kingdom' ? 'selected' : '' }}>United Kingdom</option>
                                    <option value="Canada" {{ old('complainantCountry', $model->complainantCountry) == 'Canada' ? 'selected' : '' }}>Canada</option>
                                    <option value="Australia" {{ old('complainantCountry', $model->complainantCountry) == 'Australia' ? 'selected' : '' }}>Australia</option>
                                    <option value="Saudi Arabia" {{ old('complainantCountry', $model->complainantCountry) == 'Saudi Arabia' ? 'selected' : '' }}>Saudi Arabia</option>
                                    <option value="United Arab Emirates" {{ old('complainantCountry', $model->complainantCountry) == 'United Arab Emirates' ? 'selected' : '' }}>United Arab Emirates</option>
                                    <option value="Turkey" {{ old('complainantCountry', $model->complainantCountry) == 'Turkey' ? 'selected' : '' }}>Turkey</option>
                                    <option value="Malaysia" {{ old('complainantCountry', $model->complainantCountry) == 'Malaysia' ? 'selected' : '' }}>Malaysia</option>
                                    <option value="Bangladesh" {{ old('complainantCountry', $model->complainantCountry) == 'Bangladesh' ? 'selected' : '' }}>Bangladesh</option>
                                    <option value="Russia" {{ old('complainantCountry', $model->complainantCountry) == 'Russia' ? 'selected' : '' }}>Russia</option>
                                    <option value="Germany" {{ old('complainantCountry', $model->complainantCountry) == 'Germany' ? 'selected' : '' }}>Germany</option>
                                    <option value="France" {{ old('complainantCountry', $model->complainantCountry) == 'France' ? 'selected' : '' }}>France</option>
                                    <option value="Japan" {{ old('complainantCountry', $model->complainantCountry) == 'Japan' ? 'selected' : '' }}>Japan</option>
                                    <option value="South Korea" {{ old('complainantCountry', $model->complainantCountry) == 'South Korea' ? 'selected' : '' }}>South Korea</option>
                                    <option value="other" {{ old('complainantCountry', $model->complainantCountry) == 'other' ? 'selected' : '' }}>Other</option>
                                </select>
                                @error('complainantCountry')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label">Incident Details *</label>
                                <textarea class="form-control" rows="4" name="incidentDetails" required>{{ old('incidentDetails', $model->incidentDetails) }}</textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Attach File</label>
                                <input type="file" class="form-control" name="attachment" />
                                @if ($model->attachFile)
                                    <a href="{{ asset($model->attachFile) }}" target="_blank" class="btn btn-sm btn-info mt-2">
                                        <i class="fas fa-file-pdf"></i> View Current File
                                    </a>
                                @endif
                                @error('attachment')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Declaration -->
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="declaration1" {{ old('declaration1', $model->declaration1) ? 'checked' : '' }} required />
                            <label class="form-check-label">
                                I do hereby solemnly affirm that the facts mentioned in this complaint are correct to the best of my knowledge and belief.
                            </label>
                            @error('declaration1')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" name="declaration2" {{ old('declaration2', $model->declaration2) ? 'checked' : '' }} required />
                            <label class="form-check-label">
                                I confirm that no complaint on this subject has previously been lodged with Agency by me, or on my behalf.
                            </label>
                            @error('declaration2')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="d-flex justify-content-between">
                    <a href="{{ route('complain.index') }}" class="btn btn-secondary">Back to List</a>
                    <button type="submit" class="btn btn-primary">Update Complaint</button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
