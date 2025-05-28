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
    
        height: auto;
        display: block;
           width: 100%;
        height: 250px; /* Set fixed height */
        object-fit: cover; /* Crop and fill the box */
        border-radius: 5px;
    }
    .gallery-content {
        margin-top: 15px;
    }
</style>

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gallery Management</h1>
        <button class="btn btn-primary" data-toggle="modal" data-target="#addGalleryItemModal">
            <i class="fas fa-plus"></i> Add New Item
        </button>
    </div>

    <!-- Gallery Items -->
    <div class="row">
        @foreach ($galleryItems as $item)
            <div class="col-lg-6 gallery-item">
                <div class="gallery-img-container">
                    <img src="{{ asset($item->image_path) }}" alt="Gallery Image" class="gallery-img ">
                    <div class="position-absolute" style="bottom: 10px; right: 10px;">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"
                                {{ $item->is_active ? 'checked' : '' }}
                                onchange="confirmToggleActive('{{ route('admin.gallery.update', $item->id) }}', this.checked)">
                            <label class="form-check-label">Active</label>
                        </div>
                    </div>
                </div>
                <div class="gallery-content">
                    <h4>Gallery Item {{ $item->id }}</h4>
                    <div class="text-right">
                        <button class="btn btn-danger btn-sm" type="button"
                            onclick="confirmDelete('{{ route('admin.gallery.delete', $item->id) }}')">
                            <i class="fas fa-trash"></i> Delete
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Add Gallery Item Modal -->
<div class="modal fade" id="addGalleryItemModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Gallery Item</h5>
                    <button class="close" type="button" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Upload Image</label>
                        <input type="file" name="image" class="form-control-file" accept="image/*" required>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="is_active" id="newItemActive">
                        <label class="form-check-label" for="newItemActive">Active</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="submit">Save Image</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Active Toggle Confirm Modal -->
<div class="modal fade" id="toggleActiveConfirmModal" tabindex="-1" role="dialog" aria-labelledby="toggleActiveConfirmModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form id="toggleActiveForm" method="POST">
            @csrf
            @method('PUT')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirm Status Change</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to change the active status of this item?
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Yes, Change</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteConfirmModal" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form id="deleteForm" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirm Delete</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this gallery item? This action cannot be undone.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-danger" type="submit">Yes, Delete</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- JS -->
@push('scripts')
    

<script>
    function confirmToggleActive(route, checked) {
        const form = document.getElementById('toggleActiveForm');
        form.action = route;
        form.innerHTML += `<input type="hidden" name="is_active" value="${checked ? 1 : 0}">`;
        $('#toggleActiveConfirmModal').modal('show');
    }

    function confirmDelete(route) {
        const form = document.getElementById('deleteForm');
        form.action = route;
        $('#deleteConfirmModal').modal('show');
    }
</script>
@endpush
@endsection

