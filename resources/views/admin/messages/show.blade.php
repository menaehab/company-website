@extends('admin.master')
@section('title', __('keywords.show_message'))
@section('content')
    <div class="container-fluid">
        <div class="col my-4">
            <h3 class="card-title">{{ __('keywords.message') }}</h3>
            <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="name">{{ __('keywords.name') }}</label>
                                <div name="name" class="form-control">{{ $message->name }}</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="email">{{ __('keywords.email') }}</label>
                                <div name="email" class="form-control">{{ $message->email }}</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="subject">{{ __('keywords.subject') }}</label>
                            <div name="subject" class="form-control">{{ $message->subject }}</div>
                        </div>
                        <div class="col-md-12">
                            <label for="description">{{ __('keywords.message') }}</label>
                            <div class="form-control" name="description">{{ $message->message }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
