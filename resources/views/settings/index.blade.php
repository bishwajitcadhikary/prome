@extends('adminlte::page')

@section('title', trans('general.settings'))

@section('content_header')
    <h1 class="m-0 text-dark">{{ trans('general.settings') }}</h1>
@stop

@section('content')
    <form action="{{ route('admin.settings.update') }}" method="POST" id="settingsForm">
        @csrf
        @method("PUT")
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="title">{{ trans('general.website_title') }}</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ setting('website.title') }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="phone">{{ trans('general.website_phone') }}</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ setting('website.phone') }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="email">{{ trans('general.website_email') }}</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ setting('website.email') }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="fax">{{ trans('general.website_fax') }}</label>
                            <input type="text" class="form-control" id="fax" name="fax" value="{{ setting('website.fax') }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="address">{{ trans('general.website_address') }}</label>
                            <textarea class="form-control" id="address" name="address" rows="5" required>{{ setting('website.address') }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="about">{{ trans('general.website_about') }}</label>
                            <textarea class="form-control" id="about" name="about" rows="5" required>{{ setting('website.about') }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="footer_text">{{ trans('general.website_footer_text') }}</label>
                            <input type="text" class="form-control" id="footer_text" name="footer_text" value="{{ setting('website.footer_text') }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="maps_embed">{{ trans('general.website_maps_embed') }}</label>
                            <input type="text" class="form-control" id="maps_embed" name="maps_embed" value="{{ setting('website.maps_embed') }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-brands fa-facebook-square  text-blue"></i></span>
                            </div>
                            <input type="text" class="form-control" id="facebook" name="facebook" value="{{ setting('website.social.facebook') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-brands fa-twitter text-blue"></i></span>
                            </div>
                            <input type="text" class="form-control" id="twitter" name="twitter" value="{{ setting('website.social.facebook') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-brands fa-linkedin text-blue"></i></span>
                            </div>
                            <input type="text" class="form-control" id="linkedin" name="linkedin" value="{{ setting('website.social.linkedin') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fab fa-youtube text-danger"></i></span>
                            </div>
                            <input type="text" class="form-control" id="youtube" name="youtube" value="{{ setting('website.social.youtube') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fab fa-behance"></i></span>
                            </div>
                            <input type="text" class="form-control" id="behance" name="behance" value="{{ setting('website.social.behance') }}">
                        </div>
                    </div>
                </div>

                <button class="btn btn-flat btn-primary float-right">
                    <i class="fas fa-save"></i>
                    {{ trans('general.update') }}
                </button>
            </div>
        </div>
    </form>

    <form action="{{ route('admin.settings.update.logo') }}" method="POST" id="logoForm" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ trans('general.logo_setting') }}</h3>
            </div>
            <div class="card-body">
                <div class="row py-4">
                    <div class="col-md-6 mx-auto">
                        <!-- Upload image input-->
                        <div class="input-group mb-3 px-2 py-2 rounded-pill bg-gray-light shadow-sm">
                            <input id="upload" type="file" name="logo" onchange="readURL(this);" class="form-control border-0" accept="image/png" required>
                            <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose file</label>
                            <div class="input-group-append">
                                <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-area mb-3 px-2 py-2">
                            <img id="imageResult" src="{{ asset('storage/uploads/images/'.setting('website.logo')) }}" alt="" class="img-fluid rounded shadow-sm mx-auto d-block">
                        </div>
                    </div>
                </div>

                <button class="btn btn-flat btn-primary float-right">
                    <i class="fas fa-save"></i>
                    {{ trans('general.update') }}
                </button>
            </div>
        </div>
    </form>
@stop

@section('js')
    <script>
        ClassicEditor.create( document.querySelector( '#address' ) )
        ClassicEditor.create( document.querySelector( '#about' ) )

        $('#settingsForm').validate();
        $('#settingsForm').ajaxForm({
            success: function (res) {
                toastr.success(res.message)
                setTimeout(function () {
                    location.reload();
                }, 2000)
            }
        })

        $('#logoForm').validate();
        $('#logoForm').ajaxForm({
            success: function (res) {
                toastr.success(res.message)
                setTimeout(function () {
                    location.reload();
                }, 2000)
            },
            error: function (res) {
                toastr.error(res.responseJSON.message)
            }
        })

    </script>
    <script>

        /*  ==========================================
            SHOW UPLOADED IMAGE
        * ========================================== */
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#imageResult')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(function () {
            $('#upload').on('change', function () {
                readURL(input);
            });
        });

        /*  ==========================================
            SHOW UPLOADED IMAGE NAME
        * ========================================== */
        var input = document.getElementById( 'upload' );
        var infoArea = document.getElementById( 'upload-label' );

        input.addEventListener( 'change', showFileName );
        function showFileName( event ) {
            var input = event.srcElement;
            var fileName = input.files[0].name;
            infoArea.textContent = 'File name: ' + fileName;
        }
    </script>
@endsection

@section('css')
    <style>
        #upload {
            opacity: 0;
        }

        #upload-label {
            position: absolute;
            top: 50%;
            left: 1rem;
            transform: translateY(-50%);
        }

        .image-area {
            border: 2px dashed rgba(255, 255, 255, 0.7);
            padding: 1rem;
            position: relative;
        }

        .image-area::before {
            content: 'Uploaded image result';
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 0.8rem;
            z-index: 1;
        }

        .image-area img {
            z-index: 2;
            position: relative;
        }
    </style>
@endsection
