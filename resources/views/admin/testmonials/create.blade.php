@extends('admin.master')
@section('title', __('keywords.create_service'))
@section('content')
    <div class="container-fluid">
        <div class="col my-4">
            <h3 class="card-title">{{ __('keywords.create_service') }}</h3>
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('admin.testmonials.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <x-form-label name="name"></x-form-label>
                                    <input type="text" id="name" name="name" class="form-control"
                                        placeholder="{{ old('name') }}">
                                    <x-validation-error name="name"></x-validation-error>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <x-form-label name="position"></x-form-label>
                                    <input type="text" id="position" name="position" class="form-control"
                                        placeholder="{{ old('position') }}">
                                    <x-validation-error name="position"></x-validation-error>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <x-form-label name="image"></x-form-label>
                                <input type="file" id="image" name="image" class="form-control-file">
                                <x-validation-error name="image"></x-validation-error>
                            </div>
                            <div class="col-md-12">
                                <x-form-label name="description"></x-form-label>
                                <textarea class="form-control" name="description">{{ old('description') }}</textarea>
                                <x-validation-error name="description"></x-validation-error>
                            </div>
                            <x-submit-button text="save"></x-submit-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
