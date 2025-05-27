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
        background-color: #f8f9fc;
    }
    .gallery-img-container {
        position: relative;
        margin-bottom: 15px;
    }
    .gallery-img {
        max-width: 100%;
        height: 150px;
        object-fit: cover;
        border: 1px solid #ddd;
    }
    .gallery-content {
        margin-top: 15px;
    }
    .gallery-active {
        border-left: 4px solid #4e73df;
    }
</style>

<div class="container-fluid">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gallery Management</h1>
        <button class="btn btn-primary" data-toggle="modal" data-target="#addGalleryItemModal">
            <i class="fas fa-plus"></i> Add New Item
        </button>
    </div>

    <!-- Gallery Items -->
    <div class="row" id="galleryItemsContainer">
        @foreach ($galleryItems as $item)
            <div class="col-md-6 col-lg-4 gallery-item {{ $item->is_active ? 'gallery-active' : '' }}">
                <div class="gallery-header d-flex justify-content-between align-items-center mb-2">
                    <h5 class="m-0 font-weight-bold text-primary">Gallery Item #{{ $item->id }}</h5>
                    <div class="form-check">
                        <input class="form-check-input gallery-status" type="checkbox" id="gallery-status-{{ $item->id }}"
                               data-itemid="{{ $item->id }}" {{ $item->is_active ? 'checked' : '' }}>
                        <label class="form-check-label" for="gallery-status-{{ $item->id }}">Active</label>
                    </div>
                </div>
                <img src="{{ asset('admin/images/gallery/' . $item->image_path) }}" alt="Gallery Image" class="gallery-img w-100">
                <div class="gallery-controls text-right">
                    <button class="btn btn-sm btn-danger delete-item" data-itemid="{{ $item->id }}">
                        <i class="fas fa-trash"></i> Delete
                    </button>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Add Gallery Item Modal -->
<div class="modal fade" id="addGalleryItemModal" tabindex="-1" role="dialog" aria-labelledby="addGalleryItemModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addGalleryItemModalLabel">Add New Gallery Item</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="addGalleryItemForm" action="{{ route('admin.gallery.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="galleryImage">Upload Image</label>
                        <input type="file" class="form-control-file" id="galleryImage" name="image" accept="image/jpeg,image/png" required>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="is_active" id="newItemActive">
                        <label class="form-check-label" for="newItemActive">Active</label>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary" type="submit">Save Image</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteGalleryItemModal" tabindex="-1" role="dialog" aria-labelledby="deleteGalleryItemModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form id="deleteItemForm" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteGalleryItemModalLabel">Confirm Delete</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this gallery item? This action cannot be undone.
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
        // Handle delete button click
        $(document).on('click', '.delete-item', function(e) {
            e.preventDefault();
            var itemId = $(this).data('itemid');
            var deleteUrl = "{{ url('admin/gallery/delete') }}/" + itemId;
            $('#deleteItemForm').attr('action', deleteUrl);
            $('#deleteGalleryItemModal').modal('show');
        });

        // Handle gallery status toggle
        $(document).on('change', '.gallery-status', function() {
            var galleryItem = $(this).closest('.gallery-item');
            $(this).is(':checked') ? galleryItem.addClass('gallery-active') : galleryItem.removeClass('gallery-active');
        });
    });
</script>
@endpush
@endsection