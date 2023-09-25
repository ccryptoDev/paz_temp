@extends('layouts.admin.app')
@section('custom-style')

@endsection
@section('content')
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Overview</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{url('admin/dashboard')}}" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Blogs</li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Overview</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <!--begin::Primary button-->
                    <a href="{{url('/admin/blogs/create')}}" class="btn btn-sm fw-bold btn-primary">Create</a>
                    <!--end::Primary button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Toolbar-->
                <div class="d-flex flex-wrap flex-stack pb-7">
                    <!--begin::Title-->
                    <div class="d-flex flex-wrap align-items-center my-1">
                        <h3 class="fw-bold me-5 my-1">blogs ({{$blogs->total()}})</h3>
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <input type="text" id="kt_filter_search" class="form-control form-control-sm border-body bg-body w-150px ps-10" placeholder="Search" />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end::Title-->
                    <!--begin::Controls-->
                    <div class="d-flex flex-wrap my-1">
                        <!--begin::Tab nav-->
                        <!--begin::Actions-->
                        <div class="d-flex my-0">
                            <!--begin::Select-->
                            <select name="status" data-control="select2" data-hide-search="true" data-placeholder="Filter" class="form-select form-select-sm border-body bg-body w-150px me-5">
                                <option value="1">Recently Updated</option>
                                <option value="2">Last Month</option>
                                <option value="3">Last Quarter</option>
                                <option value="4">Last Year</option>
                            </select>
                            <!--end::Select-->
                            <!--end::Select-->
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Controls-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Tab Content-->
                <div class="tab-content">
                    <!--begin::Tab pane-->
                    <div id="kt_project_users_table_pane" class="tab-pane fade show active">
                        <!--begin::Card-->
                        <div class="card card-flush">
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table id="kt_project_users_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold">
                                        <thead class="fs-7 text-gray-400 text-uppercase">
                                        <tr>
                                            <th>ID</th>
                                            <th class="min-w-250px">contributor</th>
                                            <th class="min-w-150px">Title</th>
                                            <th class="min-w-400px">Content</th>
                                            <th>Date</th>
                                            <th class="min-w-150px text-center">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody class="fs-6">
                                        @foreach($blogs as $item)
                                            <tr>
                                                <td>
                                                    {{$item->id}}
                                                </td>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="{{asset('assets/media/avatars/300-6.jpg')}}" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="mb-1 text-gray-800 text-hover-primary">{{$item->user->name}}</a>
                                                            <div class="fw-semibold fs-6 text-gray-400">{{$item->user->email}}</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>{{$item->title}}</td>
                                                <td>
                                                    {{$item->content}}
                                                </td>
                                                <td>{{$item->created_at}}</td>
                                                <td class="text-end">
                                                    <a href="{{url('admin/blogs/'.$item->id)}}" class="btn btn-info btn-sm">View</a>
{{--                                                    <a href="#" class="btn btn-info btn-sm">edit</a>--}}
                                                    <a href="#" class="btn btn-danger btn-sm">del</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table container-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Tab pane-->
                </div>

                <div class="d-flex flex-stack flex-wrap pt-10">
                    <div class="fs-6 fw-semibold text-gray-700">Showing 1 to 10 of 50 entries</div>
                    <!--begin::Pages-->
                    {{--                            {{$blogs->links()}}--}}
                    <ul class="pagination">
                        <li class="page-item previous">
                            <a href="#" class="page-link">
                                <i class="previous"></i>
                            </a>
                        </li>
                        <li class="page-item active">
                            <a href="#" class="page-link">1</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link">2</a>
                        </li>
                        <li class="page-item next">
                            <a href="#" class="page-link">
                                <i class="next"></i>
                            </a>
                        </li>
                    </ul>
                    <!--end::Pages-->
                </div>
                <!--end::Tab Content-->
                <!--begin::Modals-->
                <!--end::Modals-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
@endsection
@section('custom-script')
@endsection
