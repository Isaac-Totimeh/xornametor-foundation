@extends('backend.layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Rank</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <form action="{{ route('rank-store') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="name">Rank Name</label>
                                <input type="text" class="form-control" id="name" name="rank_name"
                                    placeholder="Enter Rank">
                                @error('rank_name')
                                    <span
                                        class="badge bg-danger
                                        ">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save Rank</button>
                    </form>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
@endsection
