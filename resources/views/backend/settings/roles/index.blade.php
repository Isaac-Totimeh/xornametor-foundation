@extends('backend.layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Roles Datatables</h5>
                    <a href="{{ route('roles.create') }}" type="button" class="btn btn-primary waves-effect waves-light"
                        style="float: right;">Add Role</a>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th data-ordering="false">SR No.</th>
                                <th data-ordering="false">Name</th>
                                <th data-ordering="false">Permissions</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        @foreach ($role->permissions as $perm)
                                            <span class="badge bg-info">
                                                {{ $perm->name }}
                                            </span>
                                        @endforeach
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
                                                        href="{{ route('roles.create') }}"><i
                                                            class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                        Create</a>

                                                </li>
                                                <li>
                                                    @if (Auth::guard('web')->user()->can('role.edit'))
                                                        <a class="dropdown-item edit-item-btn"
                                                            href="{{ route('roles.edit', $role->id) }}"><i
                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                            Edit</a>
                                                    @endif
                                                </li>
                                                <li>
                                                    @if (Auth::guard('web')->user()->can('role.delete'))
                                                        <a class="dropdown-item remove-item-btn"
                                                            href="{{ route('roles.destroy', $role->id) }}"
                                                            onclick="event.preventDefault(); document.getElementById('delete-form-{{ $role->id }}').submit();">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                            Delete
                                                        </a>
                                                        <form id="delete-form-{{ $role->id }}"
                                                            action="{{ route('roles.destroy', $role->id) }}" method="POST"
                                                            style="display: none;">
                                                            @method('DELETE')
                                                            @csrf
                                                        </form>
                                                    @endif
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
