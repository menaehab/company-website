@extends('admin.master')
@section('title', __('keywords.add_team'))
@section('content')
    <div class="container-fluid">
        <div class="col my-4">
            <h3 class="card-title">{{ __('keywords.add_team') }}</h3>
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('admin.teams.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <x-form-label name="name"></x-form-label>
                                    <input type="text" id="name" name="name" class="form-control"
                                        value="{{ old('name') }}">
                                    <x-validation-error name="name"></x-validation-error>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <x-form-label name="position"></x-form-label>
                                    <input type="text" id="position" name="position" class="form-control"
                                        value="{{ old('position') }}">
                                    <x-validation-error name="position"></x-validation-error>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <x-form-label name="facebook"></x-form-label>
                                    <input type="text" id="facebook" name="facebook" class="form-control"
                                        value="{{ old('facebook') }}">
                                    <x-validation-error name="facebook"></x-validation-error>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <x-form-label name="twitter"></x-form-label>
                                    <input type="text" id="twitter" name="twitter" class="form-control"
                                        value="{{ old('twitter') }}">
                                    <x-validation-error name="twitter"></x-validation-error>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <x-form-label name="linkedin"></x-form-label>
                                    <input type="text" id="linkedin" name="linkedin" class="form-control"
                                        value="{{ old('linkedin') }}">
                                    <x-validation-error name="linkedin"></x-validation-error>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <x-form-label name="image"></x-form-label>
                                <input type="file" id="image" name="image" class="form-control-file">
                                <x-validation-error name="image"></x-validation-error>
                            </div>
                            <x-submit-button text="save"></x-submit-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
