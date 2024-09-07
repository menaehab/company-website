@extends('admin.master')
@section('title', __('keywords.show_testmonial'))
@section('content')
    <div class="container-fluid">
        <div class="col my-4">
            <h3 class="card-title">{{ __('keywords.testmonial') }}</h3>
            <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group mb-3">
                                <label for="name">{{ __('keywords.name') }}</label>
                                <div name="name" class="form-control">
                                    {{ $testmonial->name }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group mb-3">
                                <label for="position">{{ __('keywords.position') }}</label>
                                <div name="position" class="form-control">
                                    {{ $testmonial->position }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <label for="image">{{ __('keywords.image') }}</label>
                            <div class="mb-3">
                                <img src="{{ asset("storage/testmonials/$testmonial->image") }}" width="50px">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="description">{{ __('keywords.description') }}</label>
                            <div class="form-control" name="description">{{ $testmonial->description }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
