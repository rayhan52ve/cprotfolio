@extends('backend.layout')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row bg-secondary rounded justify-content-center mx-0">

            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded p-4">
                    <h6 class="mb-4">Category Create Form</h6>
                    <form action="{{ route('sub-category.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
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
                            <label for="category" class="form-label">Category Name</label>
                            <input type="text" class="form-control" name="name" id="category"
                                aria-describedby="category">
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category Image</label>
                            <input type="file" name="image" id="category" class="form-control bg-dark"
                                aria-describedby="category" id="file-ip-1" accept="image/*" onchange="showPreview(event);">
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
                <h6 class="mb-0">All Category</h6>
                {{-- <a href="">Show All</a> --}}
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-white">
                            <th scope="col"><input class="form-check-input" type="checkbox"></th>
                            <th scope="col">Image</th>
                            <th scope="col">Parent Category</th>
                            <th scope="col">Name</th>
                            <th scope="col">slug</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($subCategory as $item)
                            <tr>
                                <td><input class="form-check-input" type="checkbox"></td>
                                <td><img src="{{ asset($item->image) }} " height="50px" width="100px"></td>
                                <td>{{ $item->category->name ?? null }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->slug }}</td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-primary"
                                        href="{{ route('sub-category.edit', $item->id) }}">Edit</a>
                                    {{-- <a href="#" class="btn btn-sm btn-primary" onclick="hit(event)"> </a> --}}

                                    <form
                                        action="{{ route('sub-category.destroy', $item->id) }}"
                                        method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            class="btn btn-sm btn-primary mt-1" type="submit">Delete</button>
                                    </form>

                                    {{-- <script>
                                        function hit(event) {
                                            event.preventDefault();
                                            document.getElementById('delete-form').submit();
                                        }
                                    </script> --}}
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
    </script>
@endsection
