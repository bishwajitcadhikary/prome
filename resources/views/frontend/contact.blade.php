@extends('layouts.frontend')

@section('title', trans('home_page'))

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6">
                <img src="{{ asset('images/img-01.png') }}" alt="Mail Image" class="img-fluid">
            </div>
            <div class="col-md-6">
                <form action="{{ route('contact.send') }}" method="post" id="send_contact_email_form">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name">{{ trans('general.name') }}</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="email">{{ trans('general.email') }}</label>
                        <input type="text" name="email" id="email" class="form-control" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="phone">{{ trans('general.phone') }}</label>
                        <input type="text" name="phone" id="phone" class="form-control" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="message">{{ trans('general.message') }}</label>
                        <textarea name="message" id="message" class="form-control" required></textarea>
                    </div>

                    <button class="btn btn-primary float-end">
                        <i class="fas fa-rocket"></i>
                        {{ trans('general.send') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('#send_contact_email_form').ajaxForm({
            success: function (res) {
                toastr.success(res.message)
                $('#send_contact_email_form').trigger('reset');
            },
            error: function (res) {
                toastr.success(res.responseJSON.message)
            }
        })
    </script>
@endsection
