@extends('backend.layouts.master')

@section('content')
    <!-- Include CKEditor -->
    <script src="https://cdn.ckeditor.com/4.25.0/standard/ckeditor.js"></script>

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
                <form action="{{ route('news-update', $news->uuid) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') <!-- Explicitly state that this is a PUT request -->
                    <input type="hidden" name="uuid" value="{{ $news->uuid }}">
                    <div class="card-body">
                        <div class="live-preview">
                            <div class="row gy-4">
                                <div class="col-xxl-12 col-md-6">
                                    <div>
                                        <label for="body" class="form-label">News</label>
                                        <!-- CKEditor target, prefilled with current news body -->
                                        <textarea id="body" name="body">{{ old('body', $news->body) }}</textarea>
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
