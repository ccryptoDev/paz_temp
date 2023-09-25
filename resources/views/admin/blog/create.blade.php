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
                    <a href="{{url('/admin/blogs')}}" class="btn btn-sm fw-bold btn-primary">go to list</a>
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
                <div class="card card-flush">
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <form action="{{url('admin/blogs')}}" method="POST">
                            @csrf
                            <div>
                                <div class="my-10">
                                    <label for="exampleFormControlInput1" class="required form-label">Title</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="Example input" name="title"/>
                                </div>
                            </div>
                            <div>
                                <label for="" class="required form-label">Content</label>
                                <div id="kt_docs_ckeditor_document_toolbar"></div>
                                <div id="kt_docs_ckeditor_document">
                                    <h1>Quick and simple CKEditor 5 Integration</h1>
                                    <p>Here goes the <a href="#">Minitial content of the editor</a>. Lorem Ipsum is simply dummy text of the <em>printing and typesetting</em> industry.</p>
                                    <blockquote>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</blockquote>
                                    <ul>
                                        <li>List item 1</li>
                                        <li>List item 2</li>
                                        <li>List item 3</li>
                                        <li>List item 4</li>
                                    </ul>
                                    <figure class="image"><img src="assets/media/stock/600x400/img-1.jpg" alt="CKEditor Demo"/></figure>
                                    Here goes the <a href="#">Minitial content of the editor</a>. Lorem Ipsum is simply dummy text of the <em>printing and typesetting</em> industry.
                                    <h1>Easy Media Embeds</h1>
                                    <figure class="symbol">
                                        <oembed url="https://www.youtube.com/watch?v=d-pSVf8Xazk"></oembed>
                                    </figure>
                                    <p>Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper. Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper.</p>
                                </div>
                            </div>
                            <div class="mt-10 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!--end::Card body-->
                </div>

            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
@endsection
@section('custom-script')
    <script src="{{asset('assets/plugins/custom/ckeditor/ckeditor-document.bundle.js')}}"></script>
    <script>
        DecoupledEditor
            .create(document.querySelector('#kt_docs_ckeditor_document'))
            .then(editor => {
                const toolbarContainer = document.querySelector( '#kt_docs_ckeditor_document_toolbar' );

                toolbarContainer.appendChild( editor.ui.view.toolbar.element );
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
