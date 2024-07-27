@extends('backend.layout')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row  bg-secondary rounded justify-content-center mx-0">

            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded p-4">
                    <h6 class="mb-4">Post Update Form</h6>
                    <form action="{{ route('post.update', $posts->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="category" class="form-label"> Title</label>
                            <input type="text" class="form-control" name="title" id="category"
                                value="{{ $posts->title }}" aria-describedby="category">
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label"> Parent Category Name</label>
                            <select class="form-select mb-3" aria-label="Default select example" name="category_id">
                                <option selected="">Open Parent Category Name</option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}" {{ $item->id== $posts->category_id ? 'selected':''}}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label"> Sub Category Name</label>
                            <select class="form-select mb-3" aria-label="Default select example" name="sub_category_id">
                                <option selected="">Open Sub Category Name</option>
                                @foreach ($subCategories as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $item->id == $posts->sub_category_id ? 'selected' : '' }}>{{ $item->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="Description" class="form-label"> Description</label>
                            <textarea id="myTextarea" name="description" class="form-control" placeholder="Leave a Description here"
                                id="floatingTextarea">{{ $posts->description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label"> Image</label>
                            <input type="file" name="image" id="category" class="form-control bg-dark"
                                value="{{ $posts->image }}" aria-describedby="category" id="file-ip-1" accept="image/*"
                                onchange="showPreview(event);">
                        </div>
                        <div class="mb-3">
                            <img id="file-ip-1-preview" src="{{ asset($posts->image) }}"
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
