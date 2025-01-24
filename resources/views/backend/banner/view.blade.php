@extends('backend.layouts.master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="row">
        <div class="col-lg-12">
            <div class="">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row gallery-wrapper">
                                @foreach ($gallery as $list)
                                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development"
                                        data-category="designing development">
                                        <div class="gallery-box card">
                                            <div class="gallery-container">
                                                <a class="image-popup" href="#" title="">
                                                    <img class="gallery-img img-fluid mx-auto"
                                                        src="{{ asset($list->image) }}" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
