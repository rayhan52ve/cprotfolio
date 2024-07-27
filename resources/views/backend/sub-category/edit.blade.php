@extends('backend.layout')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row vh-100 bg-secondary rounded justify-content-center mx-0">

            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded p-4">
                    <h6 class="mb-4">Sub-Category Create Form</h6>
                    <form action="{{ route('sub-category.update', $SubCategory->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="category" class="form-label"> Parent Category Name</label>
                            <select class="form-select mb-3" aria-label="Default select example" name="category_id">
                                <option selected="">Open Parent Category Name</option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $item->id == $SubCategory->category_id ? 'selected' : '' }}>
                                        {{ $item->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label"> Name</label>
                            <input type="text" class="form-control" name="name" id="category"
                                value="{{ $SubCategory->name }}" aria-describedby="category">
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label"> Image</label>
                            <input type="file" name="image" id="category" class="form-control bg-dark"
                                value="{{ $SubCategory->image }}" aria-describedby="category" id="file-ip-1"
                                accept="image/*" onchange="showPreview(event);">
                        </div>
                        <div class="mb-3">
                            <img id="file-ip-1-preview" src="{{ asset($SubCategory->image) }}"
                                style="display: block; width: 200px; height: 150px;">
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function showPreview(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-1-preview");
                preview.src = src;
                preview.style.display = "block";
                preview.style.width = "200px";
                preview.style.height = "150px";
            }
        }
    </script>
@endsection
