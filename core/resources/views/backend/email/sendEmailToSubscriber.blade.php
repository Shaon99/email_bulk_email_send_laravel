@extends('backend.layout.master')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>{{ __($pageTitle) }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.home') }}">{{ __('Dashboard') }}</a>
                </div>
                <div class="breadcrumb-item">{{ __($pageTitle) }}</div>
            </div>
        </div>

        <div class="section-body ">

            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card p-3">
                        <div class="card-body">
                            <form action="{{ route('admin.sendgroupEmail') }}" method="POST"
                                enctype="multipart/form-data" class="needs-validation" novalidate="" id="form">
                                @csrf

                                <div class="form-group">
                                    <label for="">{{ __('Email Address') }}</label>
                                    <input type="email" class="form-control" placeholder="enter email address"
                                        name="email" required="">
                                    <div class="invalid-feedback">
                                        {{ __('email can not be empty') }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">{{ __('Subject') }}</label>
                                    <input type="text" class="form-control" placeholder="enter a subject" name="subject"
                                        required="">
                                    <div class="invalid-feedback">
                                        {{ __('subject can not be empty') }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">{{ __('Attach a file') }}</label>
                                    <input type="file" class="form-control" name="attachment">
                                </div>

                                <div class="form-group">
                                    <label>{{ __('Message') }}</label>
                                    <textarea name="message" class="form-control summernote" required=""></textarea>
                                    <div class="invalid-feedback">
                                        {{ __('Message can not be empty') }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" id="progress-btn">{{
                                        __('Send Email') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@push('script')
<script>
    $(function() {
            'use strict'
            $('.summernote').summernote();
        })
</script>
@endpush