   @extends('layouts.app', ['title' => 'Job Application - Gilgit Baltistan Police'])
   @section('main')
   <style>
    body {
        background-color: #f8f9fa;
    }
    .form-container {
        max-width: 600px;
        margin: 40px auto;
        padding: 20px;
        background: white;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .form-container h2 {
        color: #232b3f;
    }
    .submit-btn {
        background-color: #dc3545;
        color: white;
    }
    .submit-btn:hover {
        background-color: #bb2d3b;
    }

  
</style>

    
@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif
@if (session('error'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('error') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif
<!-- Job Application Form -->
<div class="container">
<div class="form-container">
    <h2 class="text-center">Job Application Form</h2>
    <form action="{{route('apply.post')}}" method="POST" enctype="multipart/form-data">
        @csrf 
        
        <div class="mb-3">
            <label for="fullName" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="fullName" name="fullName" required>
            @error('fullName')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" required>
            @error('email')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
            @error('phone')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="cnic" class="form-label">CNIC Number</label>
            <input type="text" class="form-control" id="cnic" name="cnic" placeholder="XXXXX-XXXXXXX-X" required>
   
                
            @error('cnic')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" id="dob" name="dob" required>
            @error('dob')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
        </div>

        <div class="mb-3">
            <label for="jobPosition" class="form-label">Applying for Position</label>
            <select class="form-control" id="jobPosition" name="jobPosition" required>

                <option value=""disabled selected>Select Position</option>
                <option value="Police Constable">Police Constable</option>
                <option value="Sub-Inspector">Sub-Inspector</option>
                <option value="IT Officer">IT Officer</option>
            </select>
            @error('jobPosition')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="education" class="form-label">Highest Qualification</label>
            <input type="text" class="form-control" id="education" name="education" required>
            @error('education')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="experience" class="form-label">Work Experience (if any)</label>
            <textarea class="form-control" id="experience" name="experience" rows="3"></textarea>
            @error('experience')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="resume" class="form-label">Upload Resume (PDF/DOC)</label>
            <input type="file" class="form-control" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
            @error('resume')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
            
        </div>

        <button type="submit" class="btn submit-btn w-100">Submit Application</button>
    </form>
</div>
</div>



<!-- Custom JavaScript for hover functionality -->
<script>
// Maintain hover functionality on desktop
function handleHover() {
    if (window.innerWidth >= 992) {
        document.querySelectorAll('.nav-item.dropdown').forEach(item => {
            item.addEventListener('mouseenter', () => {
                item.querySelector('.dropdown-menu').classList.add('show');
            });
            item.addEventListener('mouseleave', () => {
                item.querySelector('.dropdown-menu').classList.remove('show');
            });
        });
    }
}

// Initialize on load
handleHover();
// Update on window resize
window.addEventListener('resize', handleHover);
</script>
   @endsection
        
   
    

    
    

