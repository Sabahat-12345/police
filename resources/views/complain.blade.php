
   @extends('layouts.app',['title'=>'Islamabad Capital Police Complaint Form'])
   @section('main')
   <div class="bg-light">
    <div class="container py-3">
      <!-- Police Logo -->
      <div class="text-center mb-4">
        <img
          src="{{asset('assets/police.png')}}"
          alt="Gilgit Baltistan Police Logo"
          width="150"
        />
      </div>

      <h1 class="text-center mb-4">Gilgit Baltistan Police</h1>
      <h3 class="text-center mb-4 text-muted">24/7 Complaint Portal</h3>
      @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>  
          
      @endif

      <form class="bg-white p-4 rounded shadow" action="{{ route('complain.post') }}" method="POST" enctype="multipart/form-data"> 
        @csrf 
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
                <input type="text" class="form-control" name="name"  />
                @error('name')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">CNIC/Passport *</label>
                <input type="text" class="form-control" name="cnic_passport" required />
                @error('cnic_passport')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">Contact No *</label>
                <input type="tel" class="form-control" name="contactNo" required />
                @error('contactNo')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">Father Name *</label>
                <input type="text" class="form-control" name="fatherName" required />
                @error('fatherName')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">Gender *</label>
                <select class="form-select" name="gender" required>
                  <option value="" disabled selected>Select Gender</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
                </select>
                @error('gender')
                <div class="text-danger">{{ $message }}</div>
              @enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">WhatsApp No</label>
                <input type="tel" class="form-control" name="whatsappNo" />
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
              <textarea class="form-control" name="complainantAddress" rows="3" required></textarea>
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
                <input type="date" class="form-control" name="incidentDate" required />
                @error('incidentDate')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">Nature of Complaint</label>
                <select class="form-select" name="complaintNature" required>
                  <option value="" disabled selected>Select Nature of Complaint</option>
                  <option value="theft">Theft</option>
                  <option value="harassment">Harassment</option>
                  <option value="assault">Physical Assault</option>
                  <option value="fraud">Financial Fraud</option>
                  <option value="property_dispute">Property Dispute</option>
                  <option value="cyber_crime">Online Crime (Cyber Crime)</option>
                  <option value="missing_person">Missing Person</option>
                  <option value="vehicle_theft">Vehicle Theft</option>
                  <option value="domestic_violence">Domestic Violence</option>
                  <option value="drugs">Illegal Drug Use</option>
                  <option value="traffic_violation">Traffic Violation</option>
                  <option value="noise_pollution">Noise Pollution</option>
                  <option value="threats">Criminal Threats</option>
                  <option value="kidnapping">Kidnapping</option>
                  <option value="vandalism">Vandalism</option>
                  <option value="other">Other</option>
                </select>
                @error('complaintNature')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">FR No</label>
                <input type="text" class="form-control" name="frNo" />
              </div>
              <div class="col-md-6">
                <label class="form-label">Complainant Country *</label>
                <select class="form-select" name="complainantCountry" required>
                  <option value="" disabled selected>Select Nationality</option>
                  <option value="Pakistan">Pakistan</option>
                  <option value="Afghanistan">Afghanistan</option>
                  <option value="China">China</option>
                  <option value="India">India</option>
                  <option value="Iran">Iran</option>
                  <option value="United States">United States</option>
                  <option value="United Kingdom">United Kingdom</option>
                  <option value="Canada">Canada</option>
                  <option value="Australia">Australia</option>
                  <option value="Saudi Arabia">Saudi Arabia</option>
                  <option value="United Arab Emirates">United Arab Emirates</option>
                  <option value="Turkey">Turkey</option>
                  <option value="Malaysia">Malaysia</option>
                  <option value="Bangladesh">Bangladesh</option>
                  <option value="Russia">Russia</option>
                  <option value="Germany">Germany</option>
                  <option value="France">France</option>
                  <option value="Japan">Japan</option>
                  <option value="South Korea">South Korea</option>
                  <option value="other">Other</option>
                </select>
                @error('complainantCountry')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-12">
                <label class="form-label">Incident Details *</label>
                <textarea class="form-control" rows="4" name="incidentDetails" required></textarea>
              </div>
              <div class="col-12">
                <label class="form-label">Attach File</label>
                <input type="file" class="form-control" name="attachment" />
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
              <input class="form-check-input" type="checkbox" name="declaration1" required />

              <label class="form-check-label">
                I do hereby solemnly affirm that the facts mentioned in this
                complaint are correct to the best of my knowledge and belief.
              </label>
              @error('declaration1')
              <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="form-check mt-2">
              <input class="form-check-input" type="checkbox" name="declaration2" required />
              <label class="form-check-label">
                I confirm that no complaint on this subject has previously been
                lodged with Agency by me, or on my behalf.
              </label>
              @error('declaration2')
              <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>
          </div>
        </div>

        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-primary btn-lg">Submit Complaint</button>
        </div>
      </form>
    </div>
</div>
   
   @endsection
 
  
   