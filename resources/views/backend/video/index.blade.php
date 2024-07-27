@extends('backend.layout')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row bg-secondary rounded justify-content-center mx-0">

            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded p-4">
                    <h6 class="mb-4">Video Create Form</h6>
                    <form action="{{ route('video.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label"> Title</label>
                            <input type="text" class="form-control" name="title" id="title"
                                aria-describedby="title">
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label"> Parent Category Name</label>
                            <select class="form-select mb-3" aria-label="Default select example" name="category_id">
                                <option selected="">Open Parent Category Name</option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label"> Sub Category Name</label>
                            <select class="form-select mb-3" aria-label="Default select example" name="sub_category_id">
                                <option selected="">Open Sub Category Name</option>
                                @foreach ($subCategories as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="Description" class="form-label"> Description</label>
                            <textarea id="myTextarea" name="description" class="form-control" placeholder="Leave a Description here"
                                id="floatingTextarea"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="video" class="form-label"> Embeded video link</label>
                            <input type="text" name="video" class="form-control" placeholder="Paste embeded video link here">
                        </div>
                        <div class="mb-3">
                            <img id="file-ip-1-preview">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">All Post</h6>
                {{-- <a href="">Show All</a> --}}
            </div>

            <style>
                #example_filter {
                    display: none;
                }
            </style>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0 table-striped" id="example"
                    style="width:100%">
                    <thead>
                        <tr class="text-white">
                            <th scope="col"><input class="form-check-input" type="checkbox"></th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Author</th>
                            <th scope="col">Category</th>
                            <th scope="col">Sub Category</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($posts as $item)
                            <tr>
                                <td><input class="form-check-input" type="checkbox"></td>
                                <td><iframe width="100%" height="350"
                                    src="https://www.youtube.com/embed/{{ $item->video }}">
                                    </iframe></td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->userCreator->name ?? null }}</td>
                                <td>{{ $item->category->name ?? null }}</td>
                                <td>{{ $item->subCategory->name ?? null }}</td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-primary" href="{{ route('video.edit', $item->id) }}">Edit</a>
                                    <a href="#" class="btn btn-sm btn-primary" onclick="hit(event)">Delete </a>

                                    <form id="delete-form" action="{{ route('video.destroy', $item->id) }}" method="POST"
                                        class="d-none">
                                        @method('DELETE')
                                        @csrf
                                    </form>

                                    <script>
                                        function hit(event) {
                                            event.preventDefault();
                                            document.getElementById('delete-form').submit();
                                        }
                                    </script>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->

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


        new DataTable('#example');
    </script>
@endsection
