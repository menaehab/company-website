@extends('admin.master')
@section('title', __('keywords.edit_settings'))
@section('content')
    <div class="container-fluid">
        <div class="col my-4">
            <h3 class="card-title">{{ __('keywords.edit_settings') }}</h3>
            <div class="card shadow">
                <div class="card-body">
                    <x-success-alert></x-success-alert>
                    <form action="{{ route('admin.settings.update', ['setting' => $setting]) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <x-form-label name="address"></x-form-label>
                                    <input type="text" id="address" name="address" class="form-control"
                                        value="{{ $setting->address }}">
                                    <x-validation-error name="address"></x-validation-error>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <x-form-label name="phone"></x-form-label>
                                    <input type="text" id="phone" name="phone" class="form-control"
                                        value="{{ $setting->phone }}">
                                    <x-validation-error name="phone"></x-validation-error>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <x-form-label name="email"></x-form-label>
                                    <input type="text" id="email" name="email" class="form-control"
                                        value="{{ $setting->email }}">
                                    <x-validation-error name="email"></x-validation-error>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <x-form-label name="facebook"></x-form-label>
                                    <input type="url" id="facebook" name="facebook" class="form-control"
                                        value="{{ $setting->facebook }}">
                                    <x-validation-error name="facebook"></x-validation-error>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <x-form-label name="linkedin"></x-form-label>
                                    <input type="url" id="linkedin" name="linkedin" class="form-control"
                                        value="{{ $setting->linkedin }}">
                                    <x-validation-error name="linkedin"></x-validation-error>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <x-form-label name="youtube"></x-form-label>
                                    <input type="url" id="youtube" name="youtube" class="form-control"
                                        value="{{ $setting->youtube }}">
                                    <x-validation-error name="youtube"></x-validation-error>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <x-form-label name="instagram"></x-form-label>
                                    <input type="url" id="instagram" name="instagram" class="form-control"
                                        value="{{ $setting->instagram }}">
                                    <x-validation-error name="instagram"></x-validation-error>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <x-form-label name="twitter"></x-form-label>
                                    <input type="url" id="twitter" name="twitter" class="form-control"
                                        value="{{ $setting->twitter }}">
                                    <x-validation-error name="twitter"></x-validation-error>
                                </div>
                            </div>
                        </div>
                        <x-submit-button text="save"></x-submit-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
