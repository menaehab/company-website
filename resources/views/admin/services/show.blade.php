@extends('admin.master')
@section('title', __('keywords.show_service'))
@section('content')
    <div class="container-fluid">
        <div class="col my-4">
            <h3 class="card-title">{{ __('keywords.create_service') }}</h3>
            <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="title">{{ __('keywords.title') }}</label>
                                <div name="title" class="form-control">
                                    {{ $service->title }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="icon">{{ __('keywords.icons') }}</label>
                                <div type="text" class="mt-2">
                                    <i class="fe {{ $service->icon }} fe-2x"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="description">{{ __('keywords.description') }}</label>
                            <div class="form-control" name="description">{{ $service->description }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
