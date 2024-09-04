@extends('admin.master')
@section('title', __('keywords.edit_service'))
@section('content')
    <div class="container-fluid">
        <div class="col my-4">
            <h3 class="card-title">{{ __('keywords.create_service') }}</h3>
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('admin.services.update', ['service' => $service]) }}" method="POST" enctype="">
                        @csrf
                        @method('patch')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="title">{{ __('keywords.title') }}</label>
                                    <input type="text" id="title" name="title" class="form-control"
                                        value="{{ $service->title }}">
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="icon">{{ __('keywords.icons') }}</label>
                                    <input type="text" id="icon" name="icon" class="form-control"
                                        value="{{ $service->icon }}">
                                    @error('icon')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="description">{{ __('keywords.description') }}</label>
                                <textarea class="form-control" name="description">{{ $service->description }}</textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary my-2 mx-3">{{ __('keywords.edit') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
