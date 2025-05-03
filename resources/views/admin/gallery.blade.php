@extends('admin.include.app')
@section('title', 'Gallery Management')
@section('content')
<style>
    .gallery-item {
        position: relative;
        margin-bottom: 20px;
        border: 1px solid #ddd;
        padding: 10px;
        border-radius: 5px;
    }
    .gallery-img-container {
        position: relative;
        margin-bottom: 15px;
    }
    .gallery-img {
        max-width: 100%;
        height: auto;
        display: block;
    }
    .gallery-content {
        margin-top: 15px;
    }
    .btn-upload {
        position: absolute;
        bottom: 10px;
        right: 10px;
    }
</style>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Gallery Management</h1>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#addGalleryItemModal">
                            <i class="fas fa-plus"></i> Add New Item
                        </button>
                    </div>

                    <!-- Gallery Items -->
                    <div class="row" id="galleryItemsContainer">
                        <!-- Sample Gallery Item 1 -->
                        <div class="col-lg-6 gallery-item">
                            <div class="gallery-img-container">
                                <img src="https://via.placeholder.com/600x400" alt="Gallery Image" class="gallery-img">
                                <button class="btn btn-info btn-sm btn-upload" data-toggle="modal" data-target="#changeImageModal" data-itemid="1">
                                    <i class="fas fa-camera"></i> Change
                                </button>
                            </div>
                            <div class="gallery-content">
                                <h4>Gallery Item 1</h4>
                                <p>This is sample content for gallery item 1. Admin can edit this text.</p>
                                <div class="text-right">
                                    <button class="btn btn-primary btn-sm edit-content" data-itemid="1">
                                        <i class="fas fa-edit"></i> Edit Content
                                    </button>
                                    <button class="btn btn-danger btn-sm delete-item" data-itemid="1">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Sample Gallery Item 2 -->
                        <div class="col-lg-6 gallery-item">
                            <div class="gallery-img-container">
                                <img src="https://via.placeholder.com/600x400" alt="Gallery Image" class="gallery-img">
                                <button class="btn btn-info btn-sm btn-upload" data-toggle="modal" data-target="#changeImageModal" data-itemid="2">
                                    <i class="fas fa-camera"></i> Change
                                </button>
                            </div>
                            <div class="gallery-content">
                                <h4>Gallery Item 2</h4>
                                <p>This is sample content for gallery item 2. Admin can edit this text.</p>
                                <div class="text-right">
                                    <button class="btn btn-primary btn-sm edit-content" data-itemid="2">
                                        <i class="fas fa-edit"></i> Edit Content
                                    </button>
                                    <button class="btn btn-danger btn-sm delete-item" data-itemid="2">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->


    <!-- Add Gallery Item Modal -->
    <div class="modal fade" id="addGalleryItemModal" tabindex="-1" role="dialog" aria-labelledby="addGalleryItemModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addGalleryItemModalLabel">Add New Gallery Item</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addGalleryItemForm">
                        <div class="form-group">
                            <label for="newItemImage">Upload Image</label>
                            <input type="file" class="form-control-file" id="newItemImage" required>
                        </div>
                        <div class="form-group">
                            <label for="newItemTitle">Title</label>
                            <input type="text" class="form-control" id="newItemTitle" required>
                        </div>
                        <div class="form-group">
                            <label for="newItemContent">Content</label>
                            <textarea class="form-control" id="newItemContent" rows="3" required></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" id="saveNewItem">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Change Image Modal -->
    <div class="modal fade" id="changeImageModal" tabindex="-1" role="dialog" aria-labelledby="changeImageModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="changeImageModalLabel">Change Image</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="changeImageForm">
                        <input type="hidden" id="itemIdToChange">
                        <div class="form-group">
                            <label for="itemImage">Select New Image</label>
                            <input type="file" class="form-control-file" id="itemImage" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" id="saveImageChange">Save Changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Content Modal -->
    <div class="modal fade" id="editContentModal" tabindex="-1" role="dialog" aria-labelledby="editContentModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editContentModalLabel">Edit Content</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editContentForm">
                        <input type="hidden" id="itemIdToEdit">
                        <div class="form-group">
                            <label for="editItemTitle">Title</label>
                            <input type="text" class="form-control" id="editItemTitle" required>
                        </div>
                        <div class="form-group">
                            <label for="editItemContent">Content</label>
                            <textarea class="form-control" id="editItemContent" rows="5" required></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" id="saveContentChanges">Save Changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteConfirmModal" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteConfirmModalLabel">Confirm Delete</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this gallery item?
                    <input type="hidden" id="itemIdToDelete">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-danger" id="confirmDelete">Delete</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    
<script>
    $(document).ready(function() {
        // Handle change image button click
        $('.btn-upload').click(function() {
            var itemId = $(this).data('itemid');
            $('#itemIdToChange').val(itemId);
        });
        
        // Handle edit content button click
        $('.edit-content').click(function() {
            var itemId = $(this).data('itemid');
            var item = $(this).closest('.gallery-item');
            var title = item.find('h4').text();
            var content = item.find('p').text();
            
            $('#itemIdToEdit').val(itemId);
            $('#editItemTitle').val(title);
            $('#editItemContent').val(content);
            
            $('#editContentModal').modal('show');
        });
        
        // Handle delete button click
        $('.delete-item').click(function() {
            var itemId = $(this).data('itemid');
            $('#itemIdToDelete').val(itemId);
            $('#deleteConfirmModal').modal('show');
        });
        
        // Save new gallery item
        $('#saveNewItem').click(function() {
            // In a real application, you would upload the image and save data to database here
            // For demo, we'll just add a new item to the page
            
            var title = $('#newItemTitle').val();
            var content = $('#newItemContent').val();
            var newId = Date.now(); // Generate unique ID
            
            var newItemHtml = `
                <div class="col-lg-6 gallery-item">
                    <div class="gallery-img-container">
                        <img src="https://via.placeholder.com/600x400" alt="Gallery Image" class="gallery-img">
                        <button class="btn btn-info btn-sm btn-upload" data-toggle="modal" data-target="#changeImageModal" data-itemid="${newId}">
                            <i class="fas fa-camera"></i> Change
                        </button>
                    </div>
                    <div class="gallery-content">
                        <h4>${title}</h4>
                        <p>${content}</p>
                        <div class="text-right">
                            <button class="btn btn-primary btn-sm edit-content" data-itemid="${newId}">
                                <i class="fas fa-edit"></i> Edit Content
                            </button>
                            <button class="btn btn-danger btn-sm delete-item" data-itemid="${newId}">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </div>
                    </div>
                </div>
            `;
            
            $('#galleryItemsContainer').append(newItemHtml);
            $('#addGalleryItemModal').modal('hide');
            $('#addGalleryItemForm')[0].reset();
            
            // Rebind events for the new buttons
            bindGalleryItemEvents();
        });
        
        // Save image changes
        $('#saveImageChange').click(function() {
            var itemId = $('#itemIdToChange').val();
            // In a real application, you would upload the new image here
            // For demo, we'll just show a success message
            alert('Image changed successfully for item ' + itemId);
            $('#changeImageModal').modal('hide');
        });
        
        // Save content changes
        $('#saveContentChanges').click(function() {
            var itemId = $('#itemIdToEdit').val();
            var newTitle = $('#editItemTitle').val();
            var newContent = $('#editItemContent').val();
            
            $(`.gallery-item .edit-content[data-itemid="${itemId}"]`).closest('.gallery-item')
                .find('h4').text(newTitle)
                .end().find('p').text(newContent);
            
            $('#editContentModal').modal('hide');
        });
        
        // Confirm delete
        $('#confirmDelete').click(function() {
            var itemId = $('#itemIdToDelete').val();
            $(`.gallery-item .delete-item[data-itemid="${itemId}"]`).closest('.gallery-item').remove();
            $('#deleteConfirmModal').modal('hide');
        });
        
        // Function to bind events for gallery items (for dynamically added items)
        function bindGalleryItemEvents() {
            $('.btn-upload').off('click').on('click', function() {
                var itemId = $(this).data('itemid');
                $('#itemIdToChange').val(itemId);
            });
            
            $('.edit-content').off('click').on('click', function() {
                var itemId = $(this).data('itemid');
                var item = $(this).closest('.gallery-item');
                var title = item.find('h4').text();
                var content = item.find('p').text();
                
                $('#itemIdToEdit').val(itemId);
                $('#editItemTitle').val(title);
                $('#editItemContent').val(content);
                
                $('#editContentModal').modal('show');
            });
            
            $('.delete-item').off('click').on('click', function() {
                var itemId = $(this).data('itemid');
                $('#itemIdToDelete').val(itemId);
                $('#deleteConfirmModal').modal('show');
            });
        }
    });
</script>
@endpush