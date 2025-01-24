@extends('backend.layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Ranks Datatables</h5>
                    <a href="{{ route('rank-add') }}" type="button" class="btn btn-primary waves-effect waves-light"
                        style="float: right;">Add Rank</a>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th data-ordering="false">SR No.</th>
                                <th data-ordering="false">Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ranks as $rank)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $rank->rank_name }}</td>
                                    <td>
                                        <div class="dropdown d-inline-block">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a class="dropdown-item edit-item-btn" href="{{ route('rank-add') }}"><i
                                                            class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                        Create</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item edit-item-btn"
                                                        href="{{ route('rank-edit', $rank->uuid) }}"><i
                                                            class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                        Edit</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn"
                                                        href="{{ route('rank-delete', $rank->uuid) }}">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        Delete
                                                    </a>

                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--end col-->
    </div><!--end row-->
@endsection
