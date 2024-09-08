@extends('admin.master')
@section('title', __('keywords.show_team'))
@section('content')
    <div class="container-fluid">
        <div class="col my-4">
            <h3 class="card-title">{{ __('keywords.team') }}</h3>
            <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group mb-3">
                                <label for="name">{{ __('keywords.name') }}</label>
                                <div name="name" class="form-control">
                                    {{ $team->name }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group mb-3">
                                <label for="position">{{ __('keywords.position') }}</label>
                                <div name="position" class="form-control">
                                    {{ $team->position }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <label for="image">{{ __('keywords.image') }}</label>
                            <div class="mb-3">
                                <img src="{{ asset("storage/teams/$team->image") }}" width="50px">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="facebook">{{ __('keywords.facebook') }}</label>
                                <div name="facebook" class="form-control">
                                    {{ $team->facebook }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="twitter">{{ __('keywords.twitter') }}</label>
                                <div name="twitter" class="form-control">
                                    {{ $team->twitter }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="linkedin">{{ __('keywords.linkedin') }}</label>
                                <div name="linkedin" class="form-control">
                                    {{ $team->linkedin }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
