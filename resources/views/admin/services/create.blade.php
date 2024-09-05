@extends('admin.master')
@section('title', __('keywords.create_service'))
@section('content')
    <div class="container-fluid">
        <div class="col my-4">
            <h3 class="card-title">{{ __('keywords.create_service') }}</h3>
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('admin.services.store') }}" method="post" enctype="">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <x-form-label name="title"></x-form-label>
                                    <input type="text" id="title" name="title" class="form-control"
                                        placeholder="{{ old('title') }}">
                                    <x-validation-error name="title"></x-validation-error>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <x-form-label name="icon"></x-form-label>
                                    <input type="text" id="icon" name="icon" class="form-control"
                                        placeholder="{{ old('icon') }}">
                                    <x-validation-error name="icon"></x-validation-error>

                                </div>
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
