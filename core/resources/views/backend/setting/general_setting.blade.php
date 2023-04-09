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
                <div class="col-md-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="sitename">{{ __('Site Name') }}</label>
                                        <input type="text" name="sitename" placeholder="@lang('site name')"
                                            class="form-control form_control" value="{{ @$general->sitename }}">
                                    </div>
                                    <div class="form-group col-md-4 mb-3">
                                        <label class="col-form-label">{{ __('Site logo') }} (165 x 68)</label>

                                        <div id="image-preview" class="image-preview"
                                            style="background-image:url({{ getFile('logo', @$general->logo) }});">
                                            <label for="image-upload" id="image-label">{{ __('Choose File') }}</label>
                                            <input type="file" name="logo" id="image-upload" />
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 mb-3">
                                        <label class="col-form-label">{{ __('Favicon Icon') }} (80 x 80)</label>
                                        <div id="image-preview-icon" class="image-preview"
                                            style="background-image:url({{ getFile('icon', @$general->favicon) }});">
                                            <label for="image-upload-icon" id="image-label-icon">{{ __('Choose File')
                                                }}</label>
                                            <input type="file" name="icon" id="image-upload-icon" />
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <button type="submit" class="btn btn-primary float-right">{{ __('Update General
                                            Setting') }}</button>
                                    </div>
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
            $.uploadPreview({
                input_field: "#image-upload",
                preview_box: "#image-preview",
                label_field: "#image-label",
                label_default: "Choose File",
                label_selected: "Update Image",
                no_label: false,
                success_callback: null
            });
        })
</script>
@endpush