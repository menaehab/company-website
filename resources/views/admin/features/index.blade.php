@extends('admin.master')
@section('title', __('keywords.features'))
@section('content')
    <div class="container-fluid">
        <!-- simple table -->
        <div class="col my-4">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                <h3 class="card-title">{{ __('keywords.features') }}</h3>
                <div class="page-title-right">
                    <x-action-button href="{{ route('admin.features.create') }}" type="create"></x-action-button>
                </div>
            </div>
            <div class="card shadow">
                <div class="card-body">
                    <x-success-alert></x-success-alert>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th width="5%">#</th>
                                <th>{{ __('keywords.title') }}</th>
                                <th width="10%">{{ __('keywords.icons') }}</th>
                                <th width="15%">{{ __('keywords.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($features) > 0)
                                @foreach ($features as $key => $feature)
                                    <tr>
                                        <td>{{ $features->firstItem() + $loop->index }}</td>
                                        <td>{{ $feature->title }}</td>
                                        <td><i class="fe {{ $feature->icon }} fa-2x"></i></td>
                                        <td>
                                            <x-action-button
                                                href="{{ route('admin.features.show', ['feature' => $feature]) }}"
                                                type="show"></x-action-button>
                                            <x-action-button
                                                href="{{ route('admin.features.edit', ['feature' => $feature]) }}"
                                                type="edit"></x-action-button>
                                            <x-delete-button
                                                href="{{ route('admin.features.destroy', ['feature' => $feature]) }}"
                                                id="{{ $feature->id }}"></x-delete-button>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <x-empty-alert></x-empty-alert>
                            @endif
                        </tbody>
                    </table>
                    {{ $features->render('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
        <!-- simple table -->
    </div>
@endsection
