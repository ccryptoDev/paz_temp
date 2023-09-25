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
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">View
                        Course</h1>

                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{url('/')}}" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            courses
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">detail</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <a href="{{url('admin/courses/create')}}" class="btn btn-sm fw-bold btn-primary">Create</a>
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
                <!--begin::Navbar-->
                <div class="card mb-6 mb-xl-9">
                    <div class="card-body pt-9 pb-0">
                        <!--begin::Details-->
                        <div class="d-flex flex-wrap flex-sm-nowrap mb-6">
                            <!--begin::Image-->
                            <div
                                class="d-flex flex-center flex-shrink-0 bg-light rounded w-100px h-100px w-lg-150px h-lg-150px me-7 mb-4">
                                <img class="mw-50px mw-lg-75px" src="{{asset('assets/media/svg/brand-logos/volicity-9.svg')}}"
                                     alt="image"/>
                            </div>
                            <!--end::Image-->
                            <!--begin::Wrapper-->
                            <div class="flex-grow-1">
                                <!--begin::Head-->
                                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                    <!--begin::Details-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Status-->
                                        <div class="d-flex align-items-center mb-1">
                                            <a href="#"
                                               class="text-gray-800 text-hover-primary fs-2 fw-bold me-3">{{$course->title}}</a>
                                            <span class="badge badge-light-success me-auto">In Progress</span>
                                        </div>
                                        <!--end::Status-->
                                        <!--begin::Description-->
                                        <div
                                            class="d-flex flex-wrap fw-semibold mb-4 fs-5 text-gray-400">{{$course->description}}</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Actions-->
                                    <div class="d-flex mb-4">
                                        <a href="#" class="btn btn-sm btn-bg-light btn-active-color-primary me-3"
                                           data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add User</a>
                                        <a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal"
                                           data-bs-target="#kt_modal_new_target">Add Target</a>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Head-->
                                <!--begin::Info-->
                                <div class="d-flex flex-wrap justify-content-start">
                                    <!--begin::Stats-->
                                    <div class="d-flex flex-wrap">
                                        <!--begin::Stat-->
                                        <div
                                            class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <div class="fs-4 fw-bold">{{$course->created_at}}</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-semibold fs-6 text-gray-400">Date</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                        <!--begin::Stat-->
                                        <div
                                            class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <i class="ki-duotone ki-arrow-down fs-3 text-danger me-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <div class="fs-4 fw-bold" data-kt-countup="true"
                                                     data-kt-countup-value="{{$course->unlikes}}">0
                                                </div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-semibold fs-6 text-gray-400">unlikes</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                        <!--begin::Stat-->
                                        <div
                                            class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <div class="fs-4 fw-bold" data-kt-countup="true"
                                                     data-kt-countup-value="{{$course->likes}}" >0
                                            </div>
                                        </div>
                                        <!--end::Number-->
                                        <!--begin::Label-->
                                        <div class="fw-semibold fs-6 text-gray-400">Budget Spent</div>
                                        <!--end::Label-->
                                    </div>
                                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                            <div class="fs-4 fw-bold" data-kt-countup="true"
                                                 data-kt-countup-value={{$course->price}}" data-kt-countup-prefix="$">0</div>
                                    </div>
                                    <!--end::Number-->
                                    <!--begin::Label-->
                                    <div class="fw-semibold fs-6 text-gray-400">Budget Spent</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Stat-->
                            </div>
                            <!--end::Stats-->
                            <!--begin::Users-->
                            <div class="symbol-group symbol-hover mb-3">
                                <!--begin::User-->
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                     title="Alan Warden">
                                    <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                     title="Michael Eberon">
                                    <img alt="Pic" src="{{asset('assets/media/avatars/300-11.jpg')}}"/>
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                     title="Michelle Swanston">
                                    <img alt="Pic" src="{{asset('assets/media/avatars/300-7.jpg')}}"/>
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                     title="Francis Mitcham">
                                    <img alt="Pic" src="{{asset('assets/media/avatars/300-20.jpg')}}"/>
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                     title="Susan Redwood">
                                    <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                     title="Melody Macy">
                                    <img alt="Pic" src="{{asset('assets/media/avatars/300-2.jpg')}}"/>
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                     title="Perry Matthew">
                                    <span class="symbol-label bg-info text-inverse-info fw-bold">P</span>
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                     title="Barry Walter">
                                    <img alt="Pic" src="{{asset('assets/media/avatars/300-12.jpg')}}"/>
                                </div>
                                <!--end::User-->
                                <!--begin::All users-->
                                <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
                                   data-bs-target="#kt_modal_view_users">
                                    <span class="symbol-label bg-dark text-inverse-dark fs-8 fw-bold"
                                          data-bs-toggle="tooltip" data-bs-trigger="hover"
                                          title="View more users">+42</span>
                                </a>
                                <!--end::All users-->
                            </div>
                            <!--end::Users-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Wrapper-->
                </div>
            </div>
        </div>
        <!--end::Navbar-->
        <!--begin::Row-->
        <div class="row g-6 g-xl-9">
            <!--begin::Col-->
            <div class="col-lg-6">
                <!--begin::Summary-->
                <div class="card card-flush h-lg-100">
                    <!--begin::Card header-->
                    <div class="card-header mt-6">
                        <!--begin::Card title-->
                        <div class="card-title flex-column">
                            <h3 class="fw-bold mb-1">Tasks Summary</h3>
                            <div class="fs-6 fw-semibold text-gray-400">24 Overdue Tasks</div>
                        </div>
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-light btn-sm">View Tasks</a>
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body p-9 pt-5">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-wrap">
                            <!--begin::Chart-->
                            <div class="position-relative d-flex flex-center h-175px w-175px me-15 mb-7">
                                <div
                                    class="position-absolute translate-middle start-50 top-50 d-flex flex-column flex-center">
                                    <span class="fs-2qx fw-bold">237</span>
                                    <span class="fs-6 fw-semibold text-gray-400">Total Tasks</span>
                                </div>
                                <canvas id="project_overview_chart"></canvas>
                            </div>
                            <!--end::Chart-->
                            <!--begin::Labels-->
                            <div class="d-flex flex-column justify-content-center flex-row-fluid pe-11 mb-5">
                                <!--begin::Label-->
                                <div class="d-flex fs-6 fw-semibold align-items-center mb-3">
                                    <div class="bullet bg-primary me-3"></div>
                                    <div class="text-gray-400">Active</div>
                                    <div class="ms-auto fw-bold text-gray-700">30</div>
                                </div>
                                <!--end::Label-->
                                <!--begin::Label-->
                                <div class="d-flex fs-6 fw-semibold align-items-center mb-3">
                                    <div class="bullet bg-success me-3"></div>
                                    <div class="text-gray-400">Completed</div>
                                    <div class="ms-auto fw-bold text-gray-700">45</div>
                                </div>
                                <!--end::Label-->
                                <!--begin::Label-->
                                <div class="d-flex fs-6 fw-semibold align-items-center mb-3">
                                    <div class="bullet bg-danger me-3"></div>
                                    <div class="text-gray-400">Overdue</div>
                                    <div class="ms-auto fw-bold text-gray-700">0</div>
                                </div>
                                <!--end::Label-->
                                <!--begin::Label-->
                                <div class="d-flex fs-6 fw-semibold align-items-center">
                                    <div class="bullet bg-gray-300 me-3"></div>
                                    <div class="text-gray-400">Yet to start</div>
                                    <div class="ms-auto fw-bold text-gray-700">25</div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Labels-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Notice-->
                        <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-grow-1">
                                <!--begin::Content-->
                                <div class="fw-semibold">
                                    <div class="fs-6 text-gray-700">
                                        <a href="#" class="fw-bold me-1">Invite New .NET Collaborators</a>to create
                                        great outstanding business to business .jsp modutr class scripts
                                    </div>
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Notice-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Summary-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-lg-6">
                <!--begin::Graph-->
                <div class="card card-flush overflow-hidden h-lg-100">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-dark">Statistics</span>
                            <span class="text-gray-400 mt-1 fw-semibold fs-6">1,046 Inbound Calls today</span>
                        </h3>
                        <!--end::Title-->
                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                            <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left"
                                 data-kt-daterangepicker-range="today"
                                 class="btn btn-sm btn-light d-flex align-items-center px-4">
                                <!--begin::Display range-->
                                <div class="text-gray-600 fw-bold">Loading date range...</div>
                                <!--end::Display range-->
                                <i class="ki-duotone ki-calendar-8 fs-1 ms-2 me-0">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                    <span class="path6"></span>
                                </i>
                            </div>
                            <!--end::Daterangepicker-->
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Card body-->
                    <div class="card-body d-flex align-items-end p-0">
                        <!--begin::Chart-->
                        <div id="kt_charts_widget_36" class="min-h-auto w-100 ps-4 pe-6"
                             style="height: 300px"></div>
                        <!--end::Chart-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Graph-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-flush h-lg-100">
                    <!--begin::Card header-->
                    <div class="card-header mt-6">
                        <!--begin::Card title-->
                        <div class="card-title flex-column">
                            <h3 class="fw-bold mb-1">What's on the road?</h3>
                            <div class="fs-6 text-gray-400">Total 482 participants</div>
                        </div>
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Select-->
                            <select name="status" data-control="select2" data-hide-search="true"
                                    class="form-select form-select-solid form-select-sm fw-bold w-100px">
                                <option value="1" selected="selected">Options</option>
                                <option value="2">Option 1</option>
                                <option value="3">Option 2</option>
                                <option value="4">Option 3</option>
                            </select>
                            <!--end::Select-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body p-9 pt-4">
                        <!--begin::Dates-->
                        <ul class="nav nav-pills d-flex flex-nowrap hover-scroll-x py-2">
                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary"
                                   data-bs-toggle="tab" href="#kt_schedule_day_0">
                                    <span class="opacity-50 fs-7 fw-semibold">Su</span>
                                    <span class="fs-6 fw-bold">22</span>
                                </a>
                            </li>
                            <!--end::Date-->
                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary active"
                                   data-bs-toggle="tab" href="#kt_schedule_day_1">
                                    <span class="opacity-50 fs-7 fw-semibold">Mo</span>
                                    <span class="fs-6 fw-bold">23</span>
                                </a>
                            </li>
                            <!--end::Date-->
                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary"
                                   data-bs-toggle="tab" href="#kt_schedule_day_2">
                                    <span class="opacity-50 fs-7 fw-semibold">Tu</span>
                                    <span class="fs-6 fw-bold">24</span>
                                </a>
                            </li>
                            <!--end::Date-->
                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary"
                                   data-bs-toggle="tab" href="#kt_schedule_day_3">
                                    <span class="opacity-50 fs-7 fw-semibold">We</span>
                                    <span class="fs-6 fw-bold">25</span>
                                </a>
                            </li>
                            <!--end::Date-->
                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary"
                                   data-bs-toggle="tab" href="#kt_schedule_day_4">
                                    <span class="opacity-50 fs-7 fw-semibold">Th</span>
                                    <span class="fs-6 fw-bold">26</span>
                                </a>
                            </li>
                            <!--end::Date-->
                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary"
                                   data-bs-toggle="tab" href="#kt_schedule_day_5">
                                    <span class="opacity-50 fs-7 fw-semibold">Fr</span>
                                    <span class="fs-6 fw-bold">27</span>
                                </a>
                            </li>
                            <!--end::Date-->
                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary"
                                   data-bs-toggle="tab" href="#kt_schedule_day_6">
                                    <span class="opacity-50 fs-7 fw-semibold">Sa</span>
                                    <span class="fs-6 fw-bold">28</span>
                                </a>
                            </li>
                            <!--end::Date-->
                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary"
                                   data-bs-toggle="tab" href="#kt_schedule_day_7">
                                    <span class="opacity-50 fs-7 fw-semibold">Su</span>
                                    <span class="fs-6 fw-bold">29</span>
                                </a>
                            </li>
                            <!--end::Date-->
                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary"
                                   data-bs-toggle="tab" href="#kt_schedule_day_8">
                                    <span class="opacity-50 fs-7 fw-semibold">Mo</span>
                                    <span class="fs-6 fw-bold">30</span>
                                </a>
                            </li>
                            <!--end::Date-->
                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary"
                                   data-bs-toggle="tab" href="#kt_schedule_day_9">
                                    <span class="opacity-50 fs-7 fw-semibold">Tu</span>
                                    <span class="fs-6 fw-bold">31</span>
                                </a>
                            </li>
                            <!--end::Date-->
                        </ul>
                        <!--end::Dates-->
                        <!--begin::Tab Content-->
                        <div class="tab-content">
                            <!--begin::Day-->
                            <div id="kt_schedule_day_0" class="tab-pane fade show">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">16:30 - 17:30
                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Team
                                            Backlog Grooming Session</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">David Stevenson</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">14:30 - 15:30
                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project
                                            Review & Testing</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Mark Randall</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">10:00 - 11:00
                                            <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Lunch &
                                            Learn Catch Up</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Caleb Donaldson</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                            <!--begin::Day-->
                            <div id="kt_schedule_day_1" class="tab-pane fade show active">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">16:30 - 17:30
                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Team
                                            Backlog Grooming Session</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Mark Randall</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">16:30 - 17:30
                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Sales
                                            Pitch Proposal</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Michael Walters</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">11:00 - 11:45
                                            <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee
                                            Review Approvals</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">David Stevenson</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                            <!--begin::Day-->
                            <div id="kt_schedule_day_2" class="tab-pane fade show">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">11:00 - 11:45
                                            <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee
                                            Review Approvals</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Mark Randall</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">12:00 - 13:00
                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee
                                            Review Approvals</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Mark Randall</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">16:30 - 17:30
                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly
                                            Team Stand-Up</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Kendell Trevor</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                            <!--begin::Day-->
                            <div id="kt_schedule_day_3" class="tab-pane fade show">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">14:30 - 15:30
                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative
                                            Content Initiative</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Bob Harris</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">13:00 - 14:00
                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly
                                            Team Stand-Up</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Mark Randall</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">16:30 - 17:30
                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Marketing
                                            Campaign Discussion</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Bob Harris</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                            <!--begin::Day-->
                            <div id="kt_schedule_day_4" class="tab-pane fade show">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">16:30 - 17:30
                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative
                                            Content Initiative</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Karina Clarke</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">11:00 - 11:45
                                            <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Lunch &
                                            Learn Catch Up</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Yannis Gloverson</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">10:00 - 11:00
                                            <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Lunch &
                                            Learn Catch Up</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Naomi Hayabusa</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                            <!--begin::Day-->
                            <div id="kt_schedule_day_5" class="tab-pane fade show">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">13:00 - 14:00
                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Lunch &
                                            Learn Catch Up</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Sean Bean</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">16:30 - 17:30
                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Development
                                            Team Capacity Review</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Walter White</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">13:00 - 14:00
                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly
                                            Team Stand-Up</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Terry Robins</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                            <!--begin::Day-->
                            <div id="kt_schedule_day_6" class="tab-pane fade show">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">12:00 - 13:00
                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Sales
                                            Pitch Proposal</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Karina Clarke</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">12:00 - 13:00
                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Sales
                                            Pitch Proposal</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Naomi Hayabusa</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">14:30 - 15:30
                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Development
                                            Team Capacity Review</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Terry Robins</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                            <!--begin::Day-->
                            <div id="kt_schedule_day_7" class="tab-pane fade show">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">9:00 - 10:00
                                            <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative
                                            Content Initiative</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Caleb Donaldson</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">16:30 - 17:30
                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Marketing
                                            Campaign Discussion</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Terry Robins</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">14:30 - 15:30
                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">9 Degree
                                            Project Estimation Meeting</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Mark Randall</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                            <!--begin::Day-->
                            <div id="kt_schedule_day_8" class="tab-pane fade show">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">13:00 - 14:00
                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative
                                            Content Initiative</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Karina Clarke</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">14:30 - 15:30
                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">9 Degree
                                            Project Estimation Meeting</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Naomi Hayabusa</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">10:00 - 11:00
                                            <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Dashboard
                                            UI/UX Design Review</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Caleb Donaldson</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                            <!--begin::Day-->
                            <div id="kt_schedule_day_9" class="tab-pane fade show">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">12:00 - 13:00
                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative
                                            Content Initiative</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Walter White</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">9:00 - 10:00
                                            <span class="fs-7 text-gray-400 text-uppercase">am</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly
                                            Team Stand-Up</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Sean Bean</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">16:30 - 17:30
                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project
                                            Review & Testing</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Kendell Trevor</a></div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                        </div>
                        <!--end::Tab Content-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-flush h-lg-100">
                    <!--begin::Card header-->
                    <div class="card-header mt-6">
                        <!--begin::Card title-->
                        <div class="card-title flex-column">
                            <h3 class="fw-bold mb-1">Latest Files</h3>
                            <div class="fs-6 text-gray-400">Total 382 fiels, 2,6GB space usage</div>
                        </div>
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View All</a>
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body p-9 pt-3">
                        <!--begin::Files-->
                        <div class="d-flex flex-column mb-9">
                            <!--begin::File-->
                            <div class="d-flex align-items-center mb-5">
                                <!--begin::Icon-->
                                <div class="symbol symbol-30px me-5">
                                    <img alt="Icon" src="{{asset('assets/media/svg/files/pdf.svg')}}"/>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Details-->
                                <div class="fw-semibold">
                                    <a class="fs-6 fw-bold text-dark text-hover-primary" href="#">Project tech
                                        requirements</a>
                                    <div class="text-gray-400">2 days ago
                                        <a href="#">Karina Clark</a></div>
                                </div>
                                <!--end::Details-->
                                <!--begin::Menu-->
                                <button type="button"
                                        class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-element-plus fs-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 1-->
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                     id="kt_menu_641ac406c5c19">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Menu separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Form-->
                                    <div class="px-7 py-5">
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Status:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <div>
                                                <select class="form-select form-select-solid" data-kt-select2="true"
                                                        data-placeholder="Select option"
                                                        data-dropdown-parent="#kt_menu_641ac406c5c19"
                                                        data-allow-clear="true">
                                                    <option></option>
                                                    <option value="1">Approved</option>
                                                    <option value="2">Pending</option>
                                                    <option value="2">In Process</option>
                                                    <option value="2">Rejected</option>
                                                </select>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Member Type:</label>
                                            <!--end::Label-->
                                            <!--begin::Options-->
                                            <div class="d-flex">
                                                <!--begin::Options-->
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" value="1"/>
                                                    <span class="form-check-label">Author</span>
                                                </label>
                                                <!--end::Options-->
                                                <!--begin::Options-->
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="2"
                                                           checked="checked"/>
                                                    <span class="form-check-label">Customer</span>
                                                </label>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Notifications:</label>
                                            <!--end::Label-->
                                            <!--begin::Switch-->
                                            <div
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       name="notifications" checked="checked"/>
                                                <label class="form-check-label">Enabled</label>
                                            </div>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="reset"
                                                    class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                    data-kt-menu-dismiss="true">Reset
                                            </button>
                                            <button type="submit" class="btn btn-sm btn-primary"
                                                    data-kt-menu-dismiss="true">Apply
                                            </button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Form-->
                                </div>
                                <!--end::Menu 1-->
                                <!--end::Menu-->
                            </div>
                            <!--end::File-->
                            <!--begin::File-->
                            <div class="d-flex align-items-center mb-5">
                                <!--begin::Icon-->
                                <div class="symbol symbol-30px me-5">
                                    <img alt="Icon" src="{{asset('assets/media/svg/files/doc.svg')}}"/>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Details-->
                                <div class="fw-semibold">
                                    <a class="fs-6 fw-bold text-dark text-hover-primary" href="#">Create FureStibe
                                        branding proposal</a>
                                    <div class="text-gray-400">Due in 1 day
                                        <a href="#">Marcus Blake</a></div>
                                </div>
                                <!--end::Details-->
                                <!--begin::Menu-->
                                <button type="button"
                                        class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-element-plus fs-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 1-->
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                     id="kt_menu_641ac406c5ca5">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Menu separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Form-->
                                    <div class="px-7 py-5">
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Status:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <div>
                                                <select class="form-select form-select-solid" data-kt-select2="true"
                                                        data-placeholder="Select option"
                                                        data-dropdown-parent="#kt_menu_641ac406c5ca5"
                                                        data-allow-clear="true">
                                                    <option></option>
                                                    <option value="1">Approved</option>
                                                    <option value="2">Pending</option>
                                                    <option value="2">In Process</option>
                                                    <option value="2">Rejected</option>
                                                </select>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Member Type:</label>
                                            <!--end::Label-->
                                            <!--begin::Options-->
                                            <div class="d-flex">
                                                <!--begin::Options-->
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" value="1"/>
                                                    <span class="form-check-label">Author</span>
                                                </label>
                                                <!--end::Options-->
                                                <!--begin::Options-->
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="2"
                                                           checked="checked"/>
                                                    <span class="form-check-label">Customer</span>
                                                </label>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Notifications:</label>
                                            <!--end::Label-->
                                            <!--begin::Switch-->
                                            <div
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       name="notifications" checked="checked"/>
                                                <label class="form-check-label">Enabled</label>
                                            </div>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="reset"
                                                    class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                    data-kt-menu-dismiss="true">Reset
                                            </button>
                                            <button type="submit" class="btn btn-sm btn-primary"
                                                    data-kt-menu-dismiss="true">Apply
                                            </button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Form-->
                                </div>
                                <!--end::Menu 1-->
                                <!--end::Menu-->
                            </div>
                            <!--end::File-->
                            <!--begin::File-->
                            <div class="d-flex align-items-center mb-5">
                                <!--begin::Icon-->
                                <div class="symbol symbol-30px me-5">
                                    <img alt="Icon" src="{{asset('assets/media/svg/files/css.svg')}}"/>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Details-->
                                <div class="fw-semibold">
                                    <a class="fs-6 fw-bold text-dark text-hover-primary" href="#">Completed Project
                                        Stylings</a>
                                    <div class="text-gray-400">Due in 1 day
                                        <a href="#">Terry Barry</a></div>
                                </div>
                                <!--end::Details-->
                                <!--begin::Menu-->
                                <button type="button"
                                        class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-element-plus fs-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 1-->
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                     id="kt_menu_641ac406c5d18">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Menu separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Form-->
                                    <div class="px-7 py-5">
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Status:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <div>
                                                <select class="form-select form-select-solid" data-kt-select2="true"
                                                        data-placeholder="Select option"
                                                        data-dropdown-parent="#kt_menu_641ac406c5d18"
                                                        data-allow-clear="true">
                                                    <option></option>
                                                    <option value="1">Approved</option>
                                                    <option value="2">Pending</option>
                                                    <option value="2">In Process</option>
                                                    <option value="2">Rejected</option>
                                                </select>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Member Type:</label>
                                            <!--end::Label-->
                                            <!--begin::Options-->
                                            <div class="d-flex">
                                                <!--begin::Options-->
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" value="1"/>
                                                    <span class="form-check-label">Author</span>
                                                </label>
                                                <!--end::Options-->
                                                <!--begin::Options-->
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="2"
                                                           checked="checked"/>
                                                    <span class="form-check-label">Customer</span>
                                                </label>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Notifications:</label>
                                            <!--end::Label-->
                                            <!--begin::Switch-->
                                            <div
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       name="notifications" checked="checked"/>
                                                <label class="form-check-label">Enabled</label>
                                            </div>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="reset"
                                                    class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                    data-kt-menu-dismiss="true">Reset
                                            </button>
                                            <button type="submit" class="btn btn-sm btn-primary"
                                                    data-kt-menu-dismiss="true">Apply
                                            </button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Form-->
                                </div>
                                <!--end::Menu 1-->
                                <!--end::Menu-->
                            </div>
                            <!--end::File-->
                            <!--begin::File-->
                            <div class="d-flex align-items-center">
                                <!--begin::Icon-->
                                <div class="symbol symbol-30px me-5">
                                    <img alt="Icon" src="{{asset('assets/media/svg/files/ai.svg')}}"/>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Details-->
                                <div class="fw-semibold">
                                    <a class="fs-6 fw-bold text-dark text-hover-primary" href="#">Create Project
                                        Wireframes</a>
                                    <div class="text-gray-400">Due in 3 days
                                        <a href="#">Roth Bloom</a></div>
                                </div>
                                <!--end::Details-->
                                <!--begin::Menu-->
                                <button type="button"
                                        class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-element-plus fs-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 1-->
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                     id="kt_menu_641ac406c5d8d">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Menu separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Form-->
                                    <div class="px-7 py-5">
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Status:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <div>
                                                <select class="form-select form-select-solid" data-kt-select2="true"
                                                        data-placeholder="Select option"
                                                        data-dropdown-parent="#kt_menu_641ac406c5d8d"
                                                        data-allow-clear="true">
                                                    <option></option>
                                                    <option value="1">Approved</option>
                                                    <option value="2">Pending</option>
                                                    <option value="2">In Process</option>
                                                    <option value="2">Rejected</option>
                                                </select>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Member Type:</label>
                                            <!--end::Label-->
                                            <!--begin::Options-->
                                            <div class="d-flex">
                                                <!--begin::Options-->
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" value="1"/>
                                                    <span class="form-check-label">Author</span>
                                                </label>
                                                <!--end::Options-->
                                                <!--begin::Options-->
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="2"
                                                           checked="checked"/>
                                                    <span class="form-check-label">Customer</span>
                                                </label>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Notifications:</label>
                                            <!--end::Label-->
                                            <!--begin::Switch-->
                                            <div
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       name="notifications" checked="checked"/>
                                                <label class="form-check-label">Enabled</label>
                                            </div>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="reset"
                                                    class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                    data-kt-menu-dismiss="true">Reset
                                            </button>
                                            <button type="submit" class="btn btn-sm btn-primary"
                                                    data-kt-menu-dismiss="true">Apply
                                            </button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Form-->
                                </div>
                                <!--end::Menu 1-->
                                <!--end::Menu-->
                            </div>
                            <!--end::File-->
                        </div>
                        <!--end::Files-->
                        <!--begin::Notice-->
                        <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
                            <!--begin::Icon-->
                            <i class="ki-duotone ki-svg/files/upload.svg fs-2tx text-primary me-4"></i>
                            <!--end::Icon-->
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-grow-1">
                                <!--begin::Content-->
                                <div class="fw-semibold">
                                    <h4 class="text-gray-900 fw-bold">Quick file uploader</h4>
                                    <div class="fs-6 text-gray-700">Drag & Drop or choose files from computer</div>
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Notice-->
                    </div>
                    <!--end::Card body -->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-flush h-lg-100">
                    <!--begin::Card header-->
                    <div class="card-header mt-6">
                        <!--begin::Card title-->
                        <div class="card-title flex-column">
                            <h3 class="fw-bold mb-1">Chapters</h3>
                            <div class="fs-6 text-gray-400">From total 482 Participants</div>
                        </div>
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View All</a>
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card toolbar-->
                    <!--begin::Card body-->
                    <div class="card-body d-flex flex-column p-9 pt-3 mb-9">
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-5">
                            <!--begin::Avatar-->
                            <div class="me-5 position-relative">
                                <!--begin::Image-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="{{asset('assets/media/avatars/300-6.jpg')}}"/>
                                </div>
                                <!--end::Image-->
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="fw-semibold">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">Emma Smith</a>
                                <div class="text-gray-400">8 Pending & 97 Completed Tasks</div>
                            </div>
                            <!--end::Details-->
                            <!--begin::Badge-->
                            <div class="badge badge-light ms-auto">5</div>
                            <!--end::Badge-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-5">
                            <!--begin::Avatar-->
                            <div class="me-5 position-relative">
                                <!--begin::Image-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                </div>
                                <!--end::Image-->
                                <!--begin::Online-->
                                <div
                                    class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                <!--end::Online-->
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="fw-semibold">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">Melody Macy</a>
                                <div class="text-gray-400">5 Pending & 84 Completed</div>
                            </div>
                            <!--end::Details-->
                            <!--begin::Badge-->
                            <div class="badge badge-light ms-auto">8</div>
                            <!--end::Badge-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-5">
                            <!--begin::Avatar-->
                            <div class="me-5 position-relative">
                                <!--begin::Image-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="{{asset('assets/media/avatars/300-1.jpg')}}"/>
                                </div>
                                <!--end::Image-->
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="fw-semibold">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">Max Smith</a>
                                <div class="text-gray-400">9 Pending & 103 Completed</div>
                            </div>
                            <!--end::Details-->
                            <!--begin::Badge-->
                            <div class="badge badge-light ms-auto">9</div>
                            <!--end::Badge-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-5">
                            <!--begin::Avatar-->
                            <div class="me-5 position-relative">
                                <!--begin::Image-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="{{asset('assets/media/avatars/300-5.jpg')}}"/>
                                </div>
                                <!--end::Image-->
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="fw-semibold">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">Sean Bean</a>
                                <div class="text-gray-400">3 Pending & 55 Completed</div>
                            </div>
                            <!--end::Details-->
                            <!--begin::Badge-->
                            <div class="badge badge-light ms-auto">3</div>
                            <!--end::Badge-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="me-5 position-relative">
                                <!--begin::Image-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="{{asset('assets/media/avatars/300-25.jpg')}}"/>
                                </div>
                                <!--end::Image-->
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="fw-semibold">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">Brian Cox</a>
                                <div class="text-gray-400">4 Pending & 115 Completed</div>
                            </div>
                            <!--end::Details-->
                            <!--begin::Badge-->
                            <div class="badge badge-light ms-auto">4</div>
                            <!--end::Badge-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-lg-6">
                <!--begin::Tasks-->
                <div class="card card-flush h-lg-100">
                    <!--begin::Card header-->
                    <div class="card-header mt-6">
                        <!--begin::Card title-->
                        <div class="card-title flex-column">
                            <h3 class="fw-bold mb-1">Students</h3>
                            <div class="fs-6 text-gray-400">Total 25 tasks in backlog</div>
                        </div>
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View All</a>
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body d-flex flex-column mb-9 p-9 pt-3">
                        <!--begin::Item-->
                        <div class="d-flex align-items-center position-relative mb-7">
                            <!--begin::Label-->
                            <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                            <!--end::Label-->
                            <!--begin::Checkbox-->
                            <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                                <input class="form-check-input" type="checkbox" value=""/>
                            </div>
                            <!--end::Checkbox-->
                            <!--begin::Details-->
                            <div class="fw-semibold">
                                <a href="#" class="fs-6 fw-bold text-gray-900 text-hover-primary">Create FureStibe
                                    branding logo</a>
                                <!--begin::Info-->
                                <div class="text-gray-400">Due in 1 day
                                    <a href="#">Karina Clark</a></div>
                                <!--end::Info-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Menu-->
                            <button type="button"
                                    class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-element-plus fs-3">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                </i>
                            </button>
                            <!--begin::Menu 1-->
                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                 id="kt_menu_641ac406c6cb7">
                                <!--begin::Header-->
                                <div class="px-7 py-5">
                                    <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Menu separator-->
                                <div class="separator border-gray-200"></div>
                                <!--end::Menu separator-->
                                <!--begin::Form-->
                                <div class="px-7 py-5">
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Status:</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <div>
                                            <select class="form-select form-select-solid" data-kt-select2="true"
                                                    data-placeholder="Select option"
                                                    data-dropdown-parent="#kt_menu_641ac406c6cb7"
                                                    data-allow-clear="true">
                                                <option></option>
                                                <option value="1">Approved</option>
                                                <option value="2">Pending</option>
                                                <option value="2">In Process</option>
                                                <option value="2">Rejected</option>
                                            </select>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Member Type:</label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <div class="d-flex">
                                            <!--begin::Options-->
                                            <label
                                                class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" value="1"/>
                                                <span class="form-check-label">Author</span>
                                            </label>
                                            <!--end::Options-->
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="2"
                                                       checked="checked"/>
                                                <span class="form-check-label">Customer</span>
                                            </label>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Notifications:</label>
                                        <!--end::Label-->
                                        <!--begin::Switch-->
                                        <div
                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value=""
                                                   name="notifications" checked="checked"/>
                                            <label class="form-check-label">Enabled</label>
                                        </div>
                                        <!--end::Switch-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                data-kt-menu-dismiss="true">Reset
                                        </button>
                                        <button type="submit" class="btn btn-sm btn-primary"
                                                data-kt-menu-dismiss="true">Apply
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Form-->
                            </div>
                            <!--end::Menu 1-->
                            <!--end::Menu-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center position-relative mb-7">
                            <!--begin::Label-->
                            <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                            <!--end::Label-->
                            <!--begin::Checkbox-->
                            <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                                <input class="form-check-input" type="checkbox" value=""/>
                            </div>
                            <!--end::Checkbox-->
                            <!--begin::Details-->
                            <div class="fw-semibold">
                                <a href="#" class="fs-6 fw-bold text-gray-900 text-hover-primary">Schedule a meeting
                                    with FireBear CTO John</a>
                                <!--begin::Info-->
                                <div class="text-gray-400">Due in 3 days
                                    <a href="#">Rober Doe</a></div>
                                <!--end::Info-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Menu-->
                            <button type="button"
                                    class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-element-plus fs-3">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                </i>
                            </button>
                            <!--begin::Menu 1-->
                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                 id="kt_menu_641ac406c6d3f">
                                <!--begin::Header-->
                                <div class="px-7 py-5">
                                    <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Menu separator-->
                                <div class="separator border-gray-200"></div>
                                <!--end::Menu separator-->
                                <!--begin::Form-->
                                <div class="px-7 py-5">
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Status:</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <div>
                                            <select class="form-select form-select-solid" data-kt-select2="true"
                                                    data-placeholder="Select option"
                                                    data-dropdown-parent="#kt_menu_641ac406c6d3f"
                                                    data-allow-clear="true">
                                                <option></option>
                                                <option value="1">Approved</option>
                                                <option value="2">Pending</option>
                                                <option value="2">In Process</option>
                                                <option value="2">Rejected</option>
                                            </select>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Member Type:</label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <div class="d-flex">
                                            <!--begin::Options-->
                                            <label
                                                class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" value="1"/>
                                                <span class="form-check-label">Author</span>
                                            </label>
                                            <!--end::Options-->
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="2"
                                                       checked="checked"/>
                                                <span class="form-check-label">Customer</span>
                                            </label>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Notifications:</label>
                                        <!--end::Label-->
                                        <!--begin::Switch-->
                                        <div
                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value=""
                                                   name="notifications" checked="checked"/>
                                            <label class="form-check-label">Enabled</label>
                                        </div>
                                        <!--end::Switch-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                data-kt-menu-dismiss="true">Reset
                                        </button>
                                        <button type="submit" class="btn btn-sm btn-primary"
                                                data-kt-menu-dismiss="true">Apply
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Form-->
                            </div>
                            <!--end::Menu 1-->
                            <!--end::Menu-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center position-relative mb-7">
                            <!--begin::Label-->
                            <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                            <!--end::Label-->
                            <!--begin::Checkbox-->
                            <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                                <input class="form-check-input" type="checkbox" value=""/>
                            </div>
                            <!--end::Checkbox-->
                            <!--begin::Details-->
                            <div class="fw-semibold">
                                <a href="#" class="fs-6 fw-bold text-gray-900 text-hover-primary">9 Degree Porject
                                    Estimation</a>
                                <!--begin::Info-->
                                <div class="text-gray-400">Due in 1 week
                                    <a href="#">Neil Owen</a></div>
                                <!--end::Info-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Menu-->
                            <button type="button"
                                    class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-element-plus fs-3">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                </i>
                            </button>
                            <!--begin::Menu 1-->
                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                 id="kt_menu_641ac406c6dc4">
                                <!--begin::Header-->
                                <div class="px-7 py-5">
                                    <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Menu separator-->
                                <div class="separator border-gray-200"></div>
                                <!--end::Menu separator-->
                                <!--begin::Form-->
                                <div class="px-7 py-5">
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Status:</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <div>
                                            <select class="form-select form-select-solid" data-kt-select2="true"
                                                    data-placeholder="Select option"
                                                    data-dropdown-parent="#kt_menu_641ac406c6dc4"
                                                    data-allow-clear="true">
                                                <option></option>
                                                <option value="1">Approved</option>
                                                <option value="2">Pending</option>
                                                <option value="2">In Process</option>
                                                <option value="2">Rejected</option>
                                            </select>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Member Type:</label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <div class="d-flex">
                                            <!--begin::Options-->
                                            <label
                                                class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" value="1"/>
                                                <span class="form-check-label">Author</span>
                                            </label>
                                            <!--end::Options-->
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="2"
                                                       checked="checked"/>
                                                <span class="form-check-label">Customer</span>
                                            </label>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Notifications:</label>
                                        <!--end::Label-->
                                        <!--begin::Switch-->
                                        <div
                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value=""
                                                   name="notifications" checked="checked"/>
                                            <label class="form-check-label">Enabled</label>
                                        </div>
                                        <!--end::Switch-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                data-kt-menu-dismiss="true">Reset
                                        </button>
                                        <button type="submit" class="btn btn-sm btn-primary"
                                                data-kt-menu-dismiss="true">Apply
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Form-->
                            </div>
                            <!--end::Menu 1-->
                            <!--end::Menu-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center position-relative mb-7">
                            <!--begin::Label-->
                            <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                            <!--end::Label-->
                            <!--begin::Checkbox-->
                            <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                                <input class="form-check-input" type="checkbox" value=""/>
                            </div>
                            <!--end::Checkbox-->
                            <!--begin::Details-->
                            <div class="fw-semibold">
                                <a href="#" class="fs-6 fw-bold text-gray-900 text-hover-primary">Dashgboard UI & UX for
                                    Leafr CRM</a>
                                <!--begin::Info-->
                                <div class="text-gray-400">Due in 1 week
                                    <a href="#">Olivia Wild</a></div>
                                <!--end::Info-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Menu-->
                            <button type="button"
                                    class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-element-plus fs-3">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                </i>
                            </button>
                            <!--begin::Menu 1-->
                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                 id="kt_menu_641ac406c6e3c">
                                <!--begin::Header-->
                                <div class="px-7 py-5">
                                    <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Menu separator-->
                                <div class="separator border-gray-200"></div>
                                <!--end::Menu separator-->
                                <!--begin::Form-->
                                <div class="px-7 py-5">
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Status:</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <div>
                                            <select class="form-select form-select-solid" data-kt-select2="true"
                                                    data-placeholder="Select option"
                                                    data-dropdown-parent="#kt_menu_641ac406c6e3c"
                                                    data-allow-clear="true">
                                                <option></option>
                                                <option value="1">Approved</option>
                                                <option value="2">Pending</option>
                                                <option value="2">In Process</option>
                                                <option value="2">Rejected</option>
                                            </select>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Member Type:</label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <div class="d-flex">
                                            <!--begin::Options-->
                                            <label
                                                class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" value="1"/>
                                                <span class="form-check-label">Author</span>
                                            </label>
                                            <!--end::Options-->
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="2"
                                                       checked="checked"/>
                                                <span class="form-check-label">Customer</span>
                                            </label>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Notifications:</label>
                                        <!--end::Label-->
                                        <!--begin::Switch-->
                                        <div
                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value=""
                                                   name="notifications" checked="checked"/>
                                            <label class="form-check-label">Enabled</label>
                                        </div>
                                        <!--end::Switch-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                data-kt-menu-dismiss="true">Reset
                                        </button>
                                        <button type="submit" class="btn btn-sm btn-primary"
                                                data-kt-menu-dismiss="true">Apply
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Form-->
                            </div>
                            <!--end::Menu 1-->
                            <!--end::Menu-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center position-relative">
                            <!--begin::Label-->
                            <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                            <!--end::Label-->
                            <!--begin::Checkbox-->
                            <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                                <input class="form-check-input" type="checkbox" value=""/>
                            </div>
                            <!--end::Checkbox-->
                            <!--begin::Details-->
                            <div class="fw-semibold">
                                <a href="#" class="fs-6 fw-bold text-gray-900 text-hover-primary">Mivy App R&D, Meeting
                                    with clients</a>
                                <!--begin::Info-->
                                <div class="text-gray-400">Due in 2 weeks
                                    <a href="#">Sean Bean</a></div>
                                <!--end::Info-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Menu-->
                            <button type="button"
                                    class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-element-plus fs-3">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                </i>
                            </button>
                            <!--begin::Menu 1-->
                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                 id="kt_menu_641ac406c6eae">
                                <!--begin::Header-->
                                <div class="px-7 py-5">
                                    <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Menu separator-->
                                <div class="separator border-gray-200"></div>
                                <!--end::Menu separator-->
                                <!--begin::Form-->
                                <div class="px-7 py-5">
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Status:</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <div>
                                            <select class="form-select form-select-solid" data-kt-select2="true"
                                                    data-placeholder="Select option"
                                                    data-dropdown-parent="#kt_menu_641ac406c6eae"
                                                    data-allow-clear="true">
                                                <option></option>
                                                <option value="1">Approved</option>
                                                <option value="2">Pending</option>
                                                <option value="2">In Process</option>
                                                <option value="2">Rejected</option>
                                            </select>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Member Type:</label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <div class="d-flex">
                                            <!--begin::Options-->
                                            <label
                                                class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" value="1"/>
                                                <span class="form-check-label">Author</span>
                                            </label>
                                            <!--end::Options-->
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="2"
                                                       checked="checked"/>
                                                <span class="form-check-label">Customer</span>
                                            </label>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Notifications:</label>
                                        <!--end::Label-->
                                        <!--begin::Switch-->
                                        <div
                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value=""
                                                   name="notifications" checked="checked"/>
                                            <label class="form-check-label">Enabled</label>
                                        </div>
                                        <!--end::Switch-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                data-kt-menu-dismiss="true">Reset
                                        </button>
                                        <button type="submit" class="btn btn-sm btn-primary"
                                                data-kt-menu-dismiss="true">Apply
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Form-->
                            </div>
                            <!--end::Menu 1-->
                            <!--end::Menu-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Tasks-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--begin::Table-->
        <div class="card card-flush mt-6 mt-xl-9">
            <!--begin::Card header-->
            <div class="card-header mt-5">
                <!--begin::Card title-->
                <div class="card-title flex-column">
                    <h3 class="fw-bold mb-1">Lessons</h3>
                    <div class="fs-6 text-gray-400">Total $260,300 sepnt so far</div>
                </div>
                <!--begin::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar my-1">
                    <!--begin::Select-->
                    <div class="me-6 my-1">
                        <select id="kt_filter_year" name="year" data-control="select2" data-hide-search="true"
                                class="w-125px form-select form-select-solid form-select-sm">
                            <option value="All" selected="selected">All time</option>
                            <option value="thisyear">This year</option>
                            <option value="thismonth">This month</option>
                            <option value="lastmonth">Last month</option>
                            <option value="last90days">Last 90 days</option>
                        </select>
                    </div>
                    <!--end::Select-->
                    <!--begin::Select-->
                    <div class="me-4 my-1">
                        <select id="kt_filter_orders" name="orders" data-control="select2" data-hide-search="true"
                                class="w-125px form-select form-select-solid form-select-sm">
                            <option value="All" selected="selected">All Orders</option>
                            <option value="Approved">Approved</option>
                            <option value="Declined">Declined</option>
                            <option value="In Progress">In Progress</option>
                            <option value="In Transit">In Transit</option>
                        </select>
                    </div>
                    <!--end::Select-->
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-3">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        <input type="text" id="kt_filter_search"
                               class="form-control form-control-solid form-select-sm w-150px ps-9"
                               placeholder="Search Order"/>
                    </div>
                    <!--end::Search-->
                </div>
                <!--begin::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table id="kt_profile_overview_table"
                           class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold">
                        <thead class="fs-7 text-gray-400 text-uppercase">
                        <tr>
                            <th class="min-w-250px">Manager</th>
                            <th class="min-w-150px">Date</th>
                            <th class="min-w-90px">Amount</th>
                            <th class="min-w-90px">Status</th>
                            <th class="min-w-50px text-end">Details</th>
                        </tr>
                        </thead>
                        <tbody class="fs-6">
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{asset('assets/media/avatars/300-6.jpg')}}"/>
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Emma Smith</a>
                                        <div class="fw-semibold text-gray-400">smith@kpmg.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>May 05, 2023</td>
                            <td>$658.00</td>
                            <td>
                                <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Online-->
                                        <div
                                            class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                        <!--end::Online-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Melody Macy</a>
                                        <div class="fw-semibold text-gray-400">melody@altbox.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Apr 15, 2023</td>
                            <td>$571.00</td>
                            <td>
                                <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{asset('assets/media/avatars/300-1.jpg')}}"/>
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Max Smith</a>
                                        <div class="fw-semibold text-gray-400">max@kt.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Aug 19, 2023</td>
                            <td>$847.00</td>
                            <td>
                                <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{asset('assets/media/avatars/300-5.jpg')}}"/>
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Sean Bean</a>
                                        <div class="fw-semibold text-gray-400">sean@dellito.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Aug 19, 2023</td>
                            <td>$734.00</td>
                            <td>
                                <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{asset('assets/media/avatars/300-25.jpg')}}"/>
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Brian Cox</a>
                                        <div class="fw-semibold text-gray-400">brian@exchange.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>May 05, 2023</td>
                            <td>$443.00</td>
                            <td>
                                <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span
                                                class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Online-->
                                        <div
                                            class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                        <!--end::Online-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Mikaela Collins</a>
                                        <div class="fw-semibold text-gray-400">mik@pex.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Aug 19, 2023</td>
                            <td>$828.00</td>
                            <td>
                                <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{asset('assets/media/avatars/300-9.jpg')}}"/>
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Francis Mitcham</a>
                                        <div class="fw-semibold text-gray-400">f.mit@kpmg.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Nov 10, 2023</td>
                            <td>$796.00</td>
                            <td>
                                <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Online-->
                                        <div
                                            class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                        <!--end::Online-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Olivia Wild</a>
                                        <div class="fw-semibold text-gray-400">olivia@corpmail.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Aug 19, 2023</td>
                            <td>$807.00</td>
                            <td>
                                <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span
                                                class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Online-->
                                        <div
                                            class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                        <!--end::Online-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Neil Owen</a>
                                        <div class="fw-semibold text-gray-400">owen.neil@gmail.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Jun 24, 2023</td>
                            <td>$510.00</td>
                            <td>
                                <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{asset('assets/media/avatars/300-23.jpg')}}"/>
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Dan Wilson</a>
                                        <div class="fw-semibold text-gray-400">dam@consilting.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Oct 25, 2023</td>
                            <td>$487.00</td>
                            <td>
                                <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Online-->
                                        <div
                                            class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                        <!--end::Online-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Emma Bold</a>
                                        <div class="fw-semibold text-gray-400">emma@intenso.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Jun 24, 2023</td>
                            <td>$628.00</td>
                            <td>
                                <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{asset('assets/media/avatars/300-12.jpg')}}"/>
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Ana Crown</a>
                                        <div class="fw-semibold text-gray-400">ana.cf@limtel.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Sep 22, 2023</td>
                            <td>$697.00</td>
                            <td>
                                <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Online-->
                                        <div
                                            class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                        <!--end::Online-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Robert Doe</a>
                                        <div class="fw-semibold text-gray-400">robert@benko.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Feb 21, 2023</td>
                            <td>$976.00</td>
                            <td>
                                <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{asset('assets/media/avatars/300-13.jpg')}}"/>
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">John Miller</a>
                                        <div class="fw-semibold text-gray-400">miller@mapple.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Nov 10, 2023</td>
                            <td>$701.00</td>
                            <td>
                                <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span
                                                class="symbol-label bg-light-success text-success fw-semibold">L</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Online-->
                                        <div
                                            class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                        <!--end::Online-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Lucy Kunic</a>
                                        <div class="fw-semibold text-gray-400">lucy.m@fentech.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Mar 10, 2023</td>
                            <td>$581.00</td>
                            <td>
                                <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{asset('assets/media/avatars/300-21.jpg')}}"/>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Online-->
                                        <div
                                            class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                        <!--end::Online-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Ethan Wilder</a>
                                        <div class="fw-semibold text-gray-400">ethan@loop.com.au</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Nov 10, 2023</td>
                            <td>$828.00</td>
                            <td>
                                <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{asset('assets/media/avatars/300-1.jpg')}}"/>
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Max Smith</a>
                                        <div class="fw-semibold text-gray-400">max@kt.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Feb 21, 2023</td>
                            <td>$606.00</td>
                            <td>
                                <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{asset('assets/media/avatars/300-1.jpg')}}"/>
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Max Smith</a>
                                        <div class="fw-semibold text-gray-400">max@kt.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Sep 22, 2023</td>
                            <td>$516.00</td>
                            <td>
                                <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Online-->
                                        <div
                                            class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                        <!--end::Online-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Olivia Wild</a>
                                        <div class="fw-semibold text-gray-400">olivia@corpmail.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Sep 22, 2023</td>
                            <td>$693.00</td>
                            <td>
                                <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span
                                                class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Online-->
                                        <div
                                            class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                        <!--end::Online-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Neil Owen</a>
                                        <div class="fw-semibold text-gray-400">owen.neil@gmail.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Mar 10, 2023</td>
                            <td>$546.00</td>
                            <td>
                                <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span
                                                class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Online-->
                                        <div
                                            class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                        <!--end::Online-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Neil Owen</a>
                                        <div class="fw-semibold text-gray-400">owen.neil@gmail.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Aug 19, 2023</td>
                            <td>$750.00</td>
                            <td>
                                <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{asset('assets/media/avatars/300-13.jpg')}}"/>
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">John Miller</a>
                                        <div class="fw-semibold text-gray-400">miller@mapple.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Sep 22, 2023</td>
                            <td>$705.00</td>
                            <td>
                                <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{asset('assets/media/avatars/300-6.jpg')}}"/>
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Emma Smith</a>
                                        <div class="fw-semibold text-gray-400">smith@kpmg.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Mar 10, 2023</td>
                            <td>$920.00</td>
                            <td>
                                <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{asset('assets/media/avatars/300-9.jpg')}}"/>
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Francis Mitcham</a>
                                        <div class="fw-semibold text-gray-400">f.mit@kpmg.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>May 05, 2023</td>
                            <td>$884.00</td>
                            <td>
                                <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Online-->
                                        <div
                                            class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                        <!--end::Online-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Emma Bold</a>
                                        <div class="fw-semibold text-gray-400">emma@intenso.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Nov 10, 2023</td>
                            <td>$504.00</td>
                            <td>
                                <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span
                                                class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Online-->
                                        <div
                                            class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                        <!--end::Online-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Mikaela Collins</a>
                                        <div class="fw-semibold text-gray-400">mik@pex.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Jun 24, 2023</td>
                            <td>$779.00</td>
                            <td>
                                <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{asset('assets/media/avatars/300-25.jpg')}}"/>
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Brian Cox</a>
                                        <div class="fw-semibold text-gray-400">brian@exchange.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Sep 22, 2023</td>
                            <td>$915.00</td>
                            <td>
                                <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{asset('assets/media/avatars/300-5.jpg')}}"/>
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Sean Bean</a>
                                        <div class="fw-semibold text-gray-400">sean@dellito.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Aug 19, 2023</td>
                            <td>$907.00</td>
                            <td>
                                <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{asset('assets/media/avatars/300-25.jpg')}}"/>
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Brian Cox</a>
                                        <div class="fw-semibold text-gray-400">brian@exchange.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Dec 20, 2023</td>
                            <td>$951.00</td>
                            <td>
                                <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{asset('assets/media/avatars/300-25.jpg')}}"/>
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Brian Cox</a>
                                        <div class="fw-semibold text-gray-400">brian@exchange.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Jun 20, 2023</td>
                            <td>$807.00</td>
                            <td>
                                <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
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
    <!--end::Content container-->
    </div>
    <!--end::Content-->
    </div>
@endsection
@section('custom-script')
@endsection

