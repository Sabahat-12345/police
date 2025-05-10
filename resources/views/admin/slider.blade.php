
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
    </style>
     <!-- Begin Page Content -->
     <div class="container-fluid">

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
            <div class="col-md-6 col-lg-4 slider-item slider-active">
                <div class="slider-header d-flex justify-content-between align-items-center mb-2">
                    <h5 class="m-0 font-weight-bold text-primary">Slide #1</h5>
                    <div class="form-check">
                        <input class="form-check-input slide-status" type="checkbox" checked id="slide1-status">
                        <label class="form-check-label" for="slide1-status">
                            Active
                        </label>
                    </div>
                </div>
                <img src="{{ asset('admin/images/sliders/' . $slider->image) }}" class="slider-preview w-100">
                <div class="slider-content mb-2">
                    {{-- <p class="m-0"><strong>Title:</strong> Welcome to Our Website</p>
                    <p class="m-0"><strong>Subtitle:</strong> Discover amazing features</p>
                    <p class="m-0"><strong>Button Text:</strong> Learn More</p>
                    <p class="m-0"><strong>Button Link:</strong> #features</p> --}}
                </div>
                <div class="slider-controls">
                    <div class="slider-order">
                        <span class="order-btn text-primary" data-direction="up"><i class="fas fa-arrow-up"></i></span>
                        <span class="order-btn text-primary" data-direction="down"><i class="fas fa-arrow-down"></i></span>
                    </div>
                    <div>
                        <button class="btn btn-sm btn-info edit-slide" data-slideid="1">
                            <i class="fas fa-edit"></i> Edit
                        </button>
                        <button class="btn btn-sm btn-danger delete-slide" data-slideid="1">
                            <i class="fas fa-trash"></i> Delete
                        </button>
                    </div>
                </div>
            </div>
                    @endforeach
           

         
        </div>

    </div>
    <!-- /.container-fluid -->


    <!-- Add Slider Modal -->
    <div class="modal fade" id="addSliderModal" tabindex="-1" role="dialog" aria-labelledby="addSliderModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addSliderModalLabel">Add New Slide</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addSliderForm">
                        <div class="form-group">
                            <label for="slideImage">Slide Image</label>
                            <input type="file" class="form-control-file" id="slideImage" required>
                            <small class="form-text text-muted">Recommended size: 1920x800 pixels</small>
                        </div>
                        <div class="form-group">
                            <label for="slideTitle">Title</label>
                            <input type="text" class="form-control" id="slideTitle" placeholder="Enter slide title">
                        </div>
                        <div class="form-group">
                            <label for="slideSubtitle">Subtitle</label>
                            <input type="text" class="form-control" id="slideSubtitle" placeholder="Enter slide subtitle">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="slideButtonText">Button Text</label>
                                    <input type="text" class="form-control" id="slideButtonText" placeholder="e.g. Learn More">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="slideButtonLink">Button Link</label>
                                    <input type="text" class="form-control" id="slideButtonLink" placeholder="e.g. #features or https://...">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="slideActive" checked>
                                <label class="form-check-label" for="slideActive">
                                    Active Slide
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" id="saveNewSlide">Save Slide</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Slider Modal -->
    <div class="modal fade" id="editSliderModal" tabindex="-1" role="dialog" aria-labelledby="editSliderModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editSliderModalLabel">Edit Slide</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editSliderForm" enctype="multipart/form-data" method="POST" action="{{ route('admin.slider.add-image') }}">
                        @csrf
                        <input type="hidden" id="editSlideId">
                        <div class="form-group">
                            <label for="editSlideImage">Slide Image</label>
                            <input type="file" class="form-control-file" id="editSlideImage" name="image" accept="image/*">
                            <small class="form-text text-muted">Leave empty to keep current image</small>
                            <div class="mt-2" id="currentImagePreview"></div>
                        </div>
                        {{-- <div class="form-group">
                            <label for="editSlideTitle">Title</label>
                            <input type="text" class="form-control" id="editSlideTitle">
                        </div>
                        <div class="form-group">
                            <label for="editSlideSubtitle">Subtitle</label>
                            <input type="text" class="form-control" id="editSlideSubtitle">
                        </div> --}}
                        {{-- <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="editSlideButtonText">Button Text</label>
                                    <input type="text" class="form-control" id="editSlideButtonText">
                                </div>
                            </div> --}}
                            {{-- <div class="col-md-6">
                                <div class="form-group">
                                    <label for="editSlideButtonLink">Button Link</label>
                                    <input type="text" class="form-control" id="editSlideButtonLink">
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="editSlideActive">
                                <label class="form-check-label" for="editSlideActive">
                                    Active Slide
                                </label>
                            </div> --}}
                        {{-- </div> --}}

                  
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" id="saveSlideChanges">Add Slider Image</button>
                </div>
            </form>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteSlideModal" tabindex="-1" role="dialog" aria-labelledby="deleteSlideModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteSlideModalLabel">Confirm Delete</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this slide? This action cannot be undone.
                    <input type="hidden" id="slideIdToDelete">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-danger" id="confirmSlideDelete">Delete</button>
                </div>
            </div>
        </div>
    </div>

    @endsection
@push('scripts')
     

<script>
    $(document).ready(function() {
        // Handle edit slide button click
        $(document).on('click', '.edit-slide', function() {
            var slideId = $(this).data('slideid');
            var slideItem = $(this).closest('.slider-item');
            
            // Get current slide data
            var title = slideItem.find('.slider-content p:nth-child(1)').text().replace('Title: ', '');
            var subtitle = slideItem.find('.slider-content p:nth-child(2)').text().replace('Subtitle: ', '');
            var buttonText = slideItem.find('.slider-content p:nth-child(3)').text().replace('Button Text: ', '');
            var buttonLink = slideItem.find('.slider-content p:nth-child(4)').text().replace('Button Link: ', '');
            var isActive = slideItem.find('.slide-status').is(':checked');
            var imageSrc = slideItem.find('img').attr('src');
            
            // Populate edit form
            $('#editSlideId').val(slideId);
            $('#editSlideTitle').val(title);
            $('#editSlideSubtitle').val(subtitle);
            $('#editSlideButtonText').val(buttonText);
            $('#editSlideButtonLink').val(buttonLink);
            $('#editSlideActive').prop('checked', isActive);
            
            // Show current image preview
            $('#currentImagePreview').html('<img src="' + imageSrc + '" class="img-thumbnail" style="max-height: 150px;">');
            
            $('#editSliderModal').modal('show');
        });
        
        // Handle delete slide button click
        $(document).on('click', '.delete-slide', function() {
            var slideId = $(this).data('slideid');
            $('#slideIdToDelete').val(slideId);
            $('#deleteSlideModal').modal('show');
        });
        
        // Handle slide status change
        $(document).on('change', '.slide-status', function() {
            var slideItem = $(this).closest('.slider-item');
            if ($(this).is(':checked')) {
                slideItem.addClass('slider-active');
            } else {
                slideItem.removeClass('slider-active');
            }
        });
        
        // Handle order buttons
        $(document).on('click', '.order-btn', function() {
            var direction = $(this).data('direction');
            var slideItem = $(this).closest('.slider-item');
            
            if (direction === 'up') {
                slideItem.insertBefore(slideItem.prev());
            } else {
                slideItem.insertAfter(slideItem.next());
            }
            
            // Update slide numbers
            $('.slider-item').each(function(index) {
                $(this).find('h5').text('Slide #' + (index + 1));
            });
        });
        
        // Save new slide
        $('#saveNewSlide').click(function() {
            // In a real application, you would upload the image and save data to database here
            // For demo, we'll just add a new slide to the page
            
            var title = $('#slideTitle').val();
            var subtitle = $('#slideSubtitle').val();
            var buttonText = $('#slideButtonText').val();
            var buttonLink = $('#slideButtonLink').val();
            var isActive = $('#slideActive').is(':checked');
            var newId = Date.now(); // Generate unique ID
            
            var newSlideHtml = `
                <div class="col-md-6 col-lg-4 slider-item ${isActive ? 'slider-active' : ''}">
                    <div class="slider-header d-flex justify-content-between align-items-center mb-2">
                        <h5 class="m-0 font-weight-bold text-primary">Slide #${$('.slider-item').length + 1}</h5>
                        <div class="form-check">
                            <input class="form-check-input slide-status" type="checkbox" ${isActive ? 'checked' : ''} id="slide${newId}-status">
                            <label class="form-check-label" for="slide${newId}-status">
                                Active
                            </label>
                        </div>
                    </div>
                    <img src="https://via.placeholder.com/800x400?text=New+Slide" class="slider-preview w-100">
                    <div class="slider-content mb-2">
                        <p class="m-0"><strong>Title:</strong> ${title}</p>
                        <p class="m-0"><strong>Subtitle:</strong> ${subtitle}</p>
                        <p class="m-0"><strong>Button Text:</strong> ${buttonText}</p>
                        <p class="m-0"><strong>Button Link:</strong> ${buttonLink}</p>
                    </div>
                    <div class="slider-controls">
                        <div class="slider-order">
                            <span class="order-btn text-primary" data-direction="up"><i class="fas fa-arrow-up"></i></span>
                            <span class="order-btn text-primary" data-direction="down"><i class="fas fa-arrow-down"></i></span>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-info edit-slide" data-slideid="${newId}">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                            <button class="btn btn-sm btn-danger delete-slide" data-slideid="${newId}">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </div>
                    </div>
                </div>
            `;
            
            $('#sliderItemsContainer').append(newSlideHtml);
            $('#addSliderModal').modal('hide');
            $('#addSliderForm')[0].reset();
        });
        
        // Save slide changes
        $('#saveSlideChanges').click(function() {
            var slideId = $('#editSlideId').val();
            var slideItem = $(`.slider-item .edit-slide[data-slideid="${slideId}"]`).closest('.slider-item');
            
            // Update slide data
            var newTitle = $('#editSlideTitle').val();
            var newSubtitle = $('#editSlideSubtitle').val();
            var newButtonText = $('#editSlideButtonText').val();
            var newButtonLink = $('#editSlideButtonLink').val();
            var isActive = $('#editSlideActive').is(':checked');
            
            slideItem.find('.slider-content p:nth-child(1)').html('<strong>Title:</strong> ' + newTitle);
            slideItem.find('.slider-content p:nth-child(2)').html('<strong>Subtitle:</strong> ' + newSubtitle);
            slideItem.find('.slider-content p:nth-child(3)').html('<strong>Button Text:</strong> ' + newButtonText);
            slideItem.find('.slider-content p:nth-child(4)').html('<strong>Button Link:</strong> ' + newButtonLink);
            
            // Update status
            slideItem.find('.slide-status').prop('checked', isActive);
            if (isActive) {
                slideItem.addClass('slider-active');
            } else {
                slideItem.removeClass('slider-active');
            }
            
            // In a real app, you would update the image here if changed
            
            $('#editSliderModal').modal('hide');
        });
        
        // Confirm slide delete
        $('#confirmSlideDelete').click(function() {
            var slideId = $('#slideIdToDelete').val();
            $(`.slider-item .delete-slide[data-slideid="${slideId}"]`).closest('.slider-item').remove();
            
            // Re-number remaining slides
            $('.slider-item').each(function(index) {
                $(this).find('h5').text('Slide #' + (index + 1));
            });
            
            $('#deleteSlideModal').modal('hide');
        });
    });
</script>
       @endpush
               

                
               


 


    

   

