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
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        Vertical</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Utilities</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Wizards</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <a href="{{url('admin/courses')}}" class="btn btn-md btn-primary">
                        <span class="indicator-label">
                            <i class="ki-duotone ki-arrow-left fs-3 ms-2 me-0">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span> list
                    </a>
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
                <!--begin::Stepper-->
                <div class="stepper stepper-pills stepper-column d-flex flex-column flex-lg-row"
                     id="kt_stepper_example_vertical">
                    <!--begin::Aside-->
                    <div class="d-flex flex-row-auto w-100 w-lg-300px">
                        <!--begin::Nav-->
                        <div class="stepper-nav flex-cente">
                            <!--begin::Step 1-->
                            <div class="stepper-item me-5 current" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper d-flex align-items-center">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">1</span>
                                    </div>
                                    <!--end::Icon-->

                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Create New Course
                                        </h3>

                                        <div class="stepper-desc">
                                            Description
                                        </div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Line-->
                                <div class="stepper-line h-40px"></div>
                                <!--end::Line-->
                            </div>
                            <!--end::Step 1-->

                            <!--begin::Step 2-->
                            <div class="stepper-item me-5" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper d-flex align-items-center">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">2</span>
                                    </div>
                                    <!--begin::Icon-->

                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Create New Chapters
                                        </h3>

                                        <div class="stepper-desc">
                                            Description
                                        </div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Line-->
                                <div class="stepper-line h-40px"></div>
                                <!--end::Line-->
                            </div>
                            <!--end::Step 2-->

                            <!--begin::Step 3-->
                            <div class="stepper-item me-5" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper d-flex align-items-center">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">3</span>
                                    </div>
                                    <!--begin::Icon-->

                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Create new lessons
                                        </h3>

                                        <div class="stepper-desc">
                                            Description
                                        </div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Line-->
                                <div class="stepper-line h-40px"></div>
                                <!--end::Line-->
                            </div>
                            <!--end::Step 3-->

                            <!--begin::Step 4-->
                            <div class="stepper-item me-5" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper d-flex align-items-center">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">4</span>
                                    </div>
                                    <!--begin::Icon-->

                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Create new tests
                                        </h3>

                                        <div class="stepper-desc">
                                            Description
                                        </div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 4-->
                        </div>
                        <!--end::Nav-->
                    </div>
                    <!--begin::Content-->
                    <div class="flex-row-fluid">
                        <!--begin::Form-->
                        <form class="form mx-auto" action="{{url('admin/courses')}}" method="POST">
                            <!--begin::Group-->
                            <div class="mb-5">
                                <!--begin::Step 1-->
                                <div class="flex-column current" data-kt-stepper-element="content">
                                    <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>Course</h2>
                                            </div>
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <!--begin::Input group-->
                                            <div class="mb-10 fv-row">
                                                <!--begin::Label-->
                                                <label class="required form-label">Name</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="name" class="form-control mb-2"
                                                       placeholder="Course name" value=""/>
                                                <!--end::Input-->
                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">A product name is required and recommended
                                                    to be unique.
                                                </div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div>
                                                <!--begin::Label-->
                                                <label class="form-label required">Description</label>
                                                <!--end::Label-->
                                                <!--begin::Editor-->
                                                <div id="kt_docs_quill_autosave" name="description"></div>
                                                <!--end::Editor-->
                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Set a description to the product for better visibility.</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Card header-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--begin::Step 1-->
                                <!--begin::Step 1-->
                                <div class="flex-column" data-kt-stepper-element="content">
                                    <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <!--begin::Card title-->
                                            <div class="card-title">
                                                <h2>Thumbnail</h2>
                                            </div>
                                            <!--end::Card title-->
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body text-center pt-0">
                                            <!--begin::Image input-->
                                            <!--begin::Image input placeholder-->
                                            <style>
                                                .image-input-placeholder {
                                                    background-image: url('{{asset('assets/media/svg/files/blank-image.svg')}}');
                                                }

                                                [data-bs-theme="dark"] .image-input-placeholder {
                                                    background-image: url('{{asset('assets/media/svg/files/blank-image-dark.svg')}}');
                                                }
                                            </style>
                                            <!--end::Image input placeholder-->
                                            <!--begin::Image input-->
                                            <div
                                                class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                                                data-kt-image-input="true">
                                                <!--begin::Preview existing avatar-->
                                                <div class="image-input-wrapper w-150px h-150px"></div>
                                                <!--end::Preview existing avatar-->
                                                <!--begin::Label-->
                                                <label
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                    title="Change avatar">
                                                    <!--begin::Icon-->
                                                    <i class="ki-duotone ki-pencil fs-7">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                    <!--end::Icon-->
                                                    <!--begin::Inputs-->
                                                    <input type="file" name="thumbnail" accept=".png, .jpg, .jpeg"/>
                                                    <input type="hidden" name="thumbnail_remove"/>
                                                    <!--end::Inputs-->
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Cancel-->
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                    title="Cancel avatar">
                                                    <i class="ki-duotone ki-cross fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </span>
                                                <!--end::Cancel-->
                                                <!--begin::Remove-->
                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                    title="Remove avatar">
                                                    <i class="ki-duotone ki-cross fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </span>
                                                <!--end::Remove-->
                                            </div>
                                            <!--end::Image input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Set the category thumbnail image. Only *.png,
                                                *.jpg and *.jpeg image files are accepted
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                </div>
                                <!--begin::Step 1-->
                                <!--begin::Step 2-->
                                <div class="flex-column" data-kt-stepper-element="content">
                                    <div class="card card-flush py-4 mt-5">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2 class="required">Chapters & Lessons</h2>
                                            </div>
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <div class='separator separator-dashed my-5'></div>
                                            <!--begin::Input group-->
                                            <div class="mt-10" data-kt-ecommerce-catalog-add-category="auto-options">
                                                <div id="kt_ecommerce_add_category_conditions">
                                                    <!--begin::Form group-->
                                                    <div class="form-group">
                                                        <div data-repeater-list="kt_docs_repeater_nested_outer">
                                                            <div data-repeater-item>
                                                                <div class="form-group row mb-5">
                                                                    <div class="col-md-4">
                                                                        <label class="form-label required">Chapter
                                                                            name:</label>
                                                                        <input type="text" name="chapters[]"
                                                                               class="form-control mb-2 mb-md-0"
                                                                               placeholder="Chapter name"/>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="inner-repeater">
                                                                            <div
                                                                                data-repeater-list="kt_docs_repeater_nested_inner"
                                                                                class="mb-5">
                                                                                <div data-repeater-item>
                                                                                    <label class="form-label required">Lesson
                                                                                        name:</label>
                                                                                    <div class="input-group pb-3">
                                                                                        <input type="text" name="lessons[]"
                                                                                               class="form-control"
                                                                                               placeholder="Enter contact number"/>
                                                                                        <button
                                                                                            class="border border-secondary btn btn-icon btn-flex btn-light-danger"
                                                                                            data-repeater-delete
                                                                                            type="button">
                                                                                            <i class="ki-duotone ki-trash fs-5">
                                                                                                <span class="path1"></span>
                                                                                                <span class="path2"></span>
                                                                                                <span class="path3"></span>
                                                                                                <span class="path4"></span>
                                                                                                <span class="path5"></span>
                                                                                            </i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <button
                                                                                class="btn btn-sm btn-flex btn-light-primary"
                                                                                data-repeater-create type="button">
                                                                                <i class="ki-duotone ki-plus fs-5"></i>
                                                                                Add lesson
                                                                            </button>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-2">
                                                                        <a href="javascript:;" data-repeater-delete
                                                                           class="btn btn-sm btn-flex btn-light-danger mt-3 mt-md-9">
                                                                            <i class="ki-duotone ki-trash fs-5">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                                <span class="path3"></span>
                                                                                <span class="path4"></span>
                                                                                <span class="path5"></span>
                                                                            </i>
                                                                            Delete Row
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Form group-->

                                                    <!--begin::Form group-->
                                                    <div class="form-group">
                                                        <a href="javascript:;" data-repeater-create
                                                           class="btn btn-flex btn-light-primary">
                                                            <i class="ki-duotone ki-plus fs-3"></i>
                                                            Add chapter
                                                        </a>
                                                    </div>
                                                    <!--end::Form group-->
                                                </div>
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Card header-->
                                    </div>
                                </div>
                                <!--begin::Step 2-->
                                <!--begin::Step 1-->
                                <div class="flex-column" data-kt-stepper-element="content">
                                    <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>Pricing</h2>
                                            </div>
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <!--begin::Input group-->
                                            <div class="mb-10 fv-row">
                                                <!--begin::Label-->
                                                <label class="required form-label">Base Price</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="price" class="form-control mb-2" placeholder="Product price" value="199.99" />
                                                <!--end::Input-->
                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Set the product price.</div>
                                                <!--end::Description-->
                                            </div>
                                        </div>
                                        <!--end::Card header-->
                                    </div>
                                </div>
                                <!--begin::Step 1-->
                            </div>
                            <!--end::Group-->

                            <!--begin::Actions-->
                            <div class="d-flex flex-stack">
                                <!--begin::Wrapper-->
                                <div class="me-2">
                                    <button type="button" class="btn btn-light btn-active-light-primary"
                                            data-kt-stepper-action="previous">
                                        Back
                                    </button>
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Wrapper-->
                                <div>
                                    <button type="button" class="btn btn-primary" data-kt-stepper-action="submit">
                                        <span class="indicator-label">
                                            Submit
                                        </span>
                                        <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-primary" data-kt-stepper-action="next">
                                        Continue
                                    </button>
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
                <!--end::Stepper-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
@endsection
@section('custom-script')
    <script src="{{asset('assets/plugins/custom/formrepeater/formrepeater.bundle.js')}}"></script>
    <script>
        var element = document.querySelector("#kt_stepper_example_vertical");

        // Initialize Stepper
        var stepper = new KTStepper(element);

        // Handle next step
        stepper.on("kt.stepper.next", function (stepper) {
            stepper.goNext(); // go next step
        });

        // Handle previous step
        stepper.on("kt.stepper.previous", function (stepper) {
            stepper.goPrevious(); // go previous step
        });

        $('#kt_ecommerce_add_category_conditions').repeater({
            initEmpty: false,

            defaultValues: {
                'text-input': 'foo'
            },
            repeaters: [{
                selector: '.inner-repeater',
                show: function () {
                    $(this).slideDown();
                },

                hide: function (deleteElement) {
                    $(this).slideUp(deleteElement);
                }
            }],
            show: function () {
                $(this).slideDown();
            },

            hide: function (deleteElement) {
                $(this).slideUp(deleteElement);
            }
        });

        var Delta = Quill.import('delta');
        var quill = new Quill('#kt_docs_quill_autosave', {
            modules: {
                toolbar: [
                    [{
                        header: [1, 2, 3, 4, 5, 6]
                    }],
                    ['bold', 'italic', 'underline',],
                ]
            },
            placeholder: 'Type your text here...',
            theme: 'snow'
        });

        // Store accumulated changes
        var change = new Delta();
        quill.on('text-change', function (delta) {
            change = change.compose(delta);
        });

        // Save periodically
        setInterval(function () {
            if (change.length() > 0) {
                console.log('Saving changes', change);
                /*
                Send partial changes
                $.post('/your-endpoint', {
                partial: JSON.stringify(change)
                });

                Send entire document
                $.post('/your-endpoint', {
                doc: JSON.stringify(quill.getContents())
                });
                */
                change = new Delta();
            }
        }, 5 * 1000);

        // Check for unsaved data
        window.onbeforeunload = function () {
            if (change.length() > 0) {
                return 'There are unsaved changes. Are you sure you want to leave?';
            }
        }
    </script>
@endsection

