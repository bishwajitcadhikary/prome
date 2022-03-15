@extends('adminlte::page')

@section('title', trans_choice('general.carousels', 2))

@section('content_header')
    <div class="d-flex justify-content-between gap-2">
        <h1 class="m-0 text-dark">{{ trans_choice('general.carousels', 2) }}</h1>

        <a href="{{ route('admin.carousels.index') }}" class="btn btn-flat btn-dark">
            <i class="fas fa-undo"></i>
            {{ trans('general.back') }}
        </a>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.carousels.store') }}" method="post" id="createForm" enctype="multipart/form-data">
                        @csrf

                        <div class="row py-4">
                            <div class="col-md-6 mx-auto">
                                <!-- Upload image input-->
                                <div class="input-group mb-3 px-2 py-2 bg-gray-light shadow-sm">
                                    <input id="upload" type="file" name="image" onchange="readURL(this);" class="form-control border-0" accept="image/*" required>
                                    <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose file</label>
                                    <div class="input-group-append">
                                        <label for="upload" class="btn btn-light m-0  px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="title">{{ trans('general.title') }}</label>
                                    <input type="text" class="form-control" name="title" id="title">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="image-area mb-3 px-2 py-2">
                                    <img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block">
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-flat btn-primary float-right">
                            <i class="fas fa-save"></i>
                            {{ trans('general.save') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script>
        $('#createForm').validate();
        $('#createForm').ajaxForm({
            success: function (res) {
                toastr.success(res.message)
                if(res.redirect !== null){
                    setTimeout(function () {
                        location.replace(res.redirect)
                    }, 2000)
                }
            },
            error: function (res) {
                toastr.error(res.responseJSON.message)
            }
        });
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
