@extends('backend.layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Roles Datatables</h5>
                    <a href="{{ route('commandants-add') }}" type="button" class="btn btn-primary waves-effect waves-light"
                        style="float: right;">Add Commandant</a>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th data-ordering="false">SR No.</th>
                                <th data-ordering="false">Rank</th>
                                <th data-ordering="false">Rank Star</th>
                                <th data-ordering="false">Name</th>
                                <th data-ordering="false">About</th>
                                <th data-ordering="false">Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($commandants as $list)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $list->rank_name?? '' }}</td>
                                    <td>{{ $list->rank_star ?? ''}}</td>
                                    <td>{{ $list->commandant_name ?? ''}}</td>
                                    <td>{{ $list->about_commandant ?? ''}}</td>
                                    <td>
                                        @if ($list->image)
                                            <img src="{{ asset($list->image) }}" alt="Participant Image"
                                                style="max-width:200px; max-height: 80px;">
                                        @else
                                            No Image Available
                                        @endif
                                    </td>

                                    <td>
                                        <div class="dropdown d-inline-block">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a class="dropdown-item edit-item-btn"
                                                        href="{{ route('commandants-edit', $list->uuid) }}"><i
                                                            class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                        Edit</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn"
                                                        href="{{ route('commandants-delete', $list->uuid) }}">
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
