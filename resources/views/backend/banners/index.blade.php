@extends('backend.layout')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row bg-secondary rounded justify-content-center mx-0">

            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded p-4">
                    <h6 class="mb-4">Upload Banner</h6>
                    <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf



                        <!-- Home Page Banner 1 -->
                        <div class="mb-3">
                            <label for="homebanner1" class="form-label">Home Page Banner 1</label>
                            <input type="file" class="form-control" id="homebanner1" name="homebanner1"
                                onchange="showPreview(this, 'file-ip-1-preview')">
                            <img id="file-ip-1-preview" src="{{ asset($banner->homebanner1 ?? null) }}" width="600px"
                                height="100px" style="display: {{ !empty($banner->homebanner1) ? 'block' : 'none' }}">
                        </div>

                        <!-- Home Page Banner Link 1 -->
                        <div class="mb-3">
                            <label for="home_banner_link1" class="form-label">Home Page Banner Link 1</label>
                            <input type="text" class="form-control" value="{{ $banner->home_banner_link1 ?? null }}"
                                name="home_banner_link1">
                        </div>

                        <!-- Home Page Banner 2 -->
                        <div class="mb-3">
                            <label for="homebanner2" class="form-label">Home Page Banner 2</label>
                            <input type="file" class="form-control" id="homebanner2" name="homebanner2"
                                onchange="showPreview(this, 'file-ip-2-preview')">
                            <img id="file-ip-2-preview" src="{{ asset($banner->homebanner2 ?? null) }}" width="600px"
                                height="100px" style="display: {{ !empty($banner->homebanner2) ? 'block' : 'none' }}">
                        </div>

                        <!-- Home Page Banner Link 2 -->
                        <div class="mb-3">
                            <label for="home_banner_link2" class="form-label">Home Page Banner Link 2</label>
                            <input type="text" class="form-control" value="{{ $banner->home_banner_link2 ?? null }}"
                                name="home_banner_link2">
                        </div>


                        <!-- Home Page Banner 3 -->
                        <div class="mb-3">
                            <label for="homebanner3" class="form-label">Home Page Banner 3</label>
                            <input type="file" class="form-control" id="homebanner3" name="homebanner3"
                                onchange="showPreview(this, 'file-ip-3-preview')">
                            <img id="file-ip-3-preview" src="{{ asset($banner->homebanner3 ?? null) }}" width="600px"
                                height="100px" style="display: {{ !empty($banner->homebanner3) ? 'block' : 'none' }}">
                        </div>

                        <!-- Home Page Banner Link 3 -->
                        <div class="mb-3">
                            <label for="home_banner_link3" class="form-label">Home Page Banner Link 3</label>
                            <input type="text" class="form-control" value="{{ $banner->home_banner_link3 ?? null }}"
                                name="home_banner_link3">
                        </div>

                        <!-- Banner 4 -->
                        <div class="mb-3">
                            <label for="banner4" class="form-label">Square Add</label>
                            <input type="file" class="form-control" id="banner4" name="banner4"
                                onchange="showPreview(this, 'file-ip-4-preview')">
                            <img id="file-ip-4-preview" src="{{ asset($banner->banner4 ?? null) }}" width="300px"
                                height="300px" style="display: {{ !empty($banner->banner4) ? 'block' : 'none' }}">
                        </div>

                        <!-- Banner Link 4 -->
                        <div class="mb-3">
                            <label for="banner_link4" class="form-label">Square Add Link</label>
                            <input type="text" class="form-control" value="{{ $banner->banner_link4 ?? null }}"
                                name="banner_link4">
                        </div>

                        <!-- Banner 5 -->
                        {{-- <div class="mb-3">
                            <label for="banner5" class="form-label">Banner 5</label>
                            <input type="file" class="form-control" id="banner5" name="banner5"
                                onchange="showPreview(this, 'file-ip-5-preview')">
                            <img id="file-ip-5-preview" src="{{ asset($banner->banner5 ?? null) }}" width="600px"
                                height="100px" style="display: {{ !empty($banner->banner5) ? 'block' : 'none' }}">
                        </div> --}}

                        <!-- Banner Link 5 -->
                        {{-- <div class="mb-3">
                            <label for="banner_link5" class="form-label">Banner Link 5</label>
                            <input type="text" class="form-control" value="{{ $banner->banner_link5 ?? null }}"
                                name="banner_link5">
                        </div> --}}



                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showPreview(input, previewId) {
            var preview = document.getElementById(previewId);
            if (input.files.length > 0) {
                var src = URL.createObjectURL(input.files[0]);
                preview.src = src;
                preview.style.display = "block";
            } else {
                preview.style.display = "none";
            }
        }
    </script>
@endsection
