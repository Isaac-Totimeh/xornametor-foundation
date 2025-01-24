@extends('backend.layouts.master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Edit </h4>
                </div>
                <form action="{{ route('article-update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="uuid" value="{{ $article->uuid }}">
                    <div class="card-body">
                        <div class="live-preview">
                            <div class="row gy-4">
                                <div class="col-xxl-12 col-md-6">
                                    <div>
                                        <label for="body" class="form-label">News</label>
                                        <textarea class="form-control" id="body" name="body" rows="12">{{ $article->body }}</textarea>
                                        @error('body')
                                            <span class="badge bg-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-md-6">
                                    <div>
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="title" name="title"
                                            value="{{ $article->title }}">
                                        @error('title')
                                            <span class="badge bg-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-md-6">
                                    <div>
                                        <label for="article_date" class="form-label">Date</label>
                                        <input type="date" class="form-control" id="article_date"
                                            value="{{ $article->article_date }}" name="article_date">
                                        @error('article_date')
                                            <span class="badge bg-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-md-6">
                                    <div>
                                        @if ($article->image == null)
                                            <img id="showImage" class="rounded avatar-lg"
                                                src="{{ url('upload/no_image.jpg') }}" alt="IMAGE"
                                                style="width: 200px; border: 1px solid #000000;height:250px;">
                                        @else
                                            <img id="showImage" class="rounded avatar-lg" src="{{ asset($article->image) }}"
                                                alt="IMAGE"
                                                style="width: 200px; border: 1px solid #000000;height:250px;">
                                        @endif
                                        <hr>
                                        <input name="image" class="form-control" type="file" id="image">
                                        @error('image')
                                            <span class="badge bg-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save</button>
                </form>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
