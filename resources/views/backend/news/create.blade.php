@extends('backend.layouts.master')
@section('content')
    <!-- Include CKEditor -->
    <script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/44.1.0/ckeditor5.css">
    <script>
        // Initialize CKEditor without the autogrow plugin
        document.addEventListener("DOMContentLoaded", function() {
            CKEDITOR.replace('body', {
                removePlugins: 'resize'
            });
        });
    </script>


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Input Example</h4>
                    <div class="flex-shrink-0">
                        <div class="form-check form-switch form-switch-right form-switch-md">
                            <label for="form-grid-showcode" class="form-label text-muted">Show Code</label>
                            <input class="form-check-input code-switcher" type="checkbox" id="form-grid-showcode">
                        </div>
                    </div>
                </div><!-- end card header -->

                <form action="{{ route('news-store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="live-preview">
                            <div class="row gy-4">
                                <div class="col-xxl-12 col-md-6">
                                    <div>
                                        <label for="body" class="form-label">News</label>
                                        <!-- CKEditor target -->
                                        <textarea id="body" name="body"></textarea>
                                        @error('body')
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
        <!--end col-->
    </div>
@endsection
