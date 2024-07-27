@extends('backend.layout')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row bg-secondary rounded justify-content-center mx-0">

            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded p-4">
                    <h6 class="mb-4">Section Create Form</h6>
                    <form action="{{ route('section.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="category" class="form-label"> Page </label>
                            <select class="form-select mb-3" aria-label="Default select example" name="page_id" required>
                                <option selected>Open Pages Name</option>
                                @foreach ($pages as $item)
                                    <option value="{{ $item->id }}" {{-- {{ $item->id == $posts->category_id ? 'selected' : '' }} --}}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label"> Title </label>
                            <input type="text" class="form-control" name="title" id="category"
                                aria-describedby="category">
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label"> Sub Title </label>
                            <input type="text" class="form-control" name="sub_title" id="category"
                                aria-describedby="category">
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label"> Description </label>
                            <textarea id="myTextarea" name="description" class="form-control" placeholder="Leave a Description here"
                                id="floatingTextarea"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Image</label>
                            <input type="file" name="image" id="category" class="form-control bg-dark"
                                aria-describedby="category" accept="image/*" onchange="showPreview(event);">
                        </div>
                        <div class="mb-3">
                            <img id="file-ip-1-preview" style="display: none; width: 200px; height: 150px;">
                        </div>
                        <div class="mb-3">
                            <label for="category2" class="form-label">Background Image</label>
                            <input type="file" name="bg_image" id="category2" class="form-control bg-dark"
                                aria-describedby="category2" accept="image/*" onchange="showPreview2(event);">
                        </div>
                        <div class="mb-3">
                            <img id="file-ip-2-preview" style="display: none; width: 200px; height: 150px;">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @foreach ($pages as $item)
        <!-- Recent Sales Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">{{ $item->name }} Page Section</h6>
                    {{-- <a href="">Show All</a> --}}
                </div>
                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class="text-white">
                                <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                <th scope="col">Image</th>
                                <th scope="col">Backgraound Image</th>
                                <th scope="col">title</th>
                                <th scope="col">Subtitle</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $filteredPageSection = $sections->filter(function ($sectionItem) use ($item) {
                                    return $sectionItem->page->id == $item->id;
                                });
                            @endphp


                            @foreach ($filteredPageSection as $sectionItem)
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td><img src="{{ asset($sectionItem->image) }} " height="50px" width="100px"></td>
                                    <td><img src="{{ asset($sectionItem->bg_image) }} " height="50px" width="100px"></td>
                                    <td>{{ $sectionItem->title }}</td>
                                    <td>{{ $sectionItem->sub_title }}</td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-primary"
                                            href="{{ route('section.edit', $sectionItem->id) }}">Edit</a>
                                        {{-- <a href="#" class="btn btn-sm btn-primary" onclick="hit(event)">Delete </a> --}}

                                        <form id="delete-form" action="{{ route('section.destroy', $sectionItem->id) }}"
                                            method="POST" class="d-none">
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
    @endforeach
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

        function showPreview2(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-2-preview");
                preview.src = src;
                preview.style.display = "block";
                preview.style.width = "200px";
                preview.style.height = "150px";
            }
        }
    </script>
@endsection
