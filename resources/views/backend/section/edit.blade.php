@extends('backend.layout')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row  bg-secondary rounded justify-content-center mx-0">

            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded p-4">
                    <h6 class="mb-4">Category Create Form</h6>
                    <form action="{{ route('section.update', $section->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="category" class="form-label"> Page </label>
                            <select class="form-select mb-3" aria-label="Default select example" name="page_id" required>
                                <option selected>Open Pages Name</option>
                                @foreach ($pages as $item)
                                    <option
                                        value="{{ $item->id }}"{{ $item->id == $section->page_id ? 'selected' : '' }}>
                                        {{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label"> Title </label>
                            <input type="text" class="form-control" name="title" id="category"
                                value="{{ $section->title }}" aria-describedby="category">
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label"> Sub Title </label>
                            <input type="text" class="form-control" name="sub_title" id="category"
                                value="{{ $section->sub_title }}" aria-describedby="category">
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label"> Description </label>
                            <textarea id="myTextarea" name="description" class="form-control" placeholder="Leave a Description here"
                                id="floatingTextarea"> {!! $section->description !!}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Image</label>
                            <input type="file" name="image" id="category" class="form-control bg-dark"
                                aria-describedby="category" accept="image/*" onchange="showPreview(event);">
                        </div>
                        <div class="mb-3">
                            <img id="file-ip-1-preview" style=" width: 200px; height: 150px;"
                                src="{{ asset($section->image) }}">
                        </div>
                        <div class="mb-3">
                            <label for="category2" class="form-label">Background Image</label>
                            <input type="file" name="bg_image" id="category2" class="form-control bg-dark"
                                aria-describedby="category2" accept="image/*" onchange="showPreview2(event);">
                        </div>
                        <div class="mb-3">
                            <img id="file-ip-2-preview" style=" width: 200px; height: 150px;"
                                src="{{ asset($section->bg_image) }}">
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
