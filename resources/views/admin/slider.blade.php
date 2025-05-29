@extends('admin.include.app')
@section('title', 'Admin Dashboard - Slider Management')
@section('content')

    <style>
        .slider-item {
            border: 1px solid #e3e6f0;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 20px;
            background-color: #f8f9fc;
        }

        .slider-preview {
            max-width: 100%;
            height: 150px;
            object-fit: cover;
            margin-bottom: 10px;
            border: 1px solid #ddd;
        }

        .slider-controls {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .slider-order {
            display: flex;
            align-items: center;
        }

        .order-btn {
            margin: 0 5px;
            cursor: pointer;
        }

        .slider-active {
            border-left: 4px solid #4e73df;
        }

        .slider-inactive {
            border-left: 4px solid #dc3545;
            opacity: 0.7;
        }
    </style>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Success/Error Messages -->
        <div id="alertContainer"></div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="fas fa-exclamation-circle"></i> {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Slider Management</h1>
            <button class="btn btn-primary" data-toggle="modal" data-target="#addSliderModal">
                <i class="fas fa-plus"></i> Add New Slide
            </button>
        </div>

        <!-- Slider Items -->
        <div class="row" id="sliderItemsContainer">
            @foreach ($sliders as $slider)
                <div class="col-md-6 col-lg-4 slider-item {{ $slider->status == 'active' ? 'slider-active' : 'slider-inactive' }}">
                    <div class="slider-header d-flex justify-content-between align-items-center mb-2">
                        <h5 class="m-0 font-weight-bold text-primary">Slide #{{ $loop->iteration }}</h5>
                        <div class="form-check">
                            <input class="form-check-input slide-status" type="checkbox" 
                                {{ $slider->status == 'active' ? 'checked' : '' }}
                                id="slide-status-{{ $slider->id }}" 
                                data-slider-id="{{ $slider->id }}">
                            <label class="form-check-label" for="slide-status-{{ $slider->id }}">
                                Active
                            </label>
                        </div>
                    </div>
                    <img src="{{ asset($slider->image) }}" class="slider-preview w-100">
                    <div class="slider-controls">
                        <div class="slider-order">
                            <span class="order-btn text-primary" data-direction="up"><i class="fas fa-arrow-up"></i></span>
                            <span class="order-btn text-primary" data-direction="down"><i class="fas fa-arrow-down"></i></span>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-danger delete-slide" data-slideid="{{ $slider->id }}">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Add Slider Modal -->
    <div class="modal fade" id="addSliderModal" tabindex="-1" role="dialog" aria-labelledby="addSliderModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addSliderModalLabel">Add New Slide</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addSliderForm" action="{{ route('juu') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="slideImage">Max 3 at a time</label>
                            <input type="file" class="form-control-file" id="slideImage" name="image" multiple
                                accept="image/jpeg,image/png" required>
                        </div>
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle"></i> New slides will be inactive by default. You can activate them after uploading.
                        </div>
                        
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary" type="submit">Save Slide</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteSlideModal" tabindex="-1" role="dialog" aria-labelledby="deleteSlideModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form id="confirmDeleteForm" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteSlideModalLabel">Confirm Delete</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this slide? This action cannot be undone.
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {

                // Simple alert function
                function showAlert(message, type = 'success') {
                    var alertClass = type === 'success' ? 'alert-success' : 'alert-danger';
                    var alertHtml = `<div class="alert ${alertClass} alert-dismissible fade show">
                        ${message} <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>`;
                    $('#alertContainer').html(alertHtml);
                    setTimeout(() => $('.alert').fadeOut(), 4000);
                }

                // Delete slider
                $('.delete-slide').click(function(e) {
                    e.preventDefault();
                    var slideId = $(this).data('slideid');
                    $('#confirmDeleteForm').attr('action', "{{ url('admin/slider/delete') }}/" + slideId);
                    $('#deleteSlideModal').modal('show');
                });

                // Toggle status
                $('.slide-status').change(function() {
                    var slideItem = $(this).closest('.slider-item');
                    var sliderId = $(this).data('slider-id');
                    var status = $(this).is(':checked') ? 'active' : 'inactive';

                    // Update UI
                    slideItem.toggleClass('slider-active slider-inactive');

                    // Update via AJAX
                    $.post("{{ url('admin/slider/status') }}/" + sliderId, {
                        status: status,
                        _token: '{{ csrf_token() }}'
                    }).done(response => {
                        if (response.success) showAlert(response.message);
                    }).fail(() => {
                        // Revert on error
                        $(this).prop('checked', !$(this).is(':checked'));
                        slideItem.toggleClass('slider-active slider-inactive');
                        showAlert('Error updating status!', 'error');
                    });
                });

            });
        </script>
    @endpush

@endsection