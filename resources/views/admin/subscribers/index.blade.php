@extends('admin.master')
@section('title', __('keywords.subscribers'))
@section('content')
    <div class="container-fluid">
        <!-- simple table -->
        <div class="col my-4">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                <h3 class="card-title">{{ __('keywords.subscribers') }}</h3>
                <div class="page-title-right">
                </div>
            </div>
            <div class="card shadow">
                <div class="card-body">
                    <x-success-alert></x-success-alert>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th width="5%">#</th>
                                <th>{{ __('keywords.email') }}</th>
                                <th width="15%">{{ __('keywords.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($subscribers) > 0)
                                @foreach ($subscribers as $key => $subscriber)
                                    <tr>
                                        <td>{{ $subscribers->firstItem() + $loop->index }}</td>
                                        <td>{{ $subscriber->email }}</td>
                                        <td>
                                            <x-delete-button
                                                href="{{ route('admin.subscribers.destroy', ['subscriber' => $subscriber]) }}"
                                                id="{{ $subscriber->id }}"></x-delete-button>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <x-empty-alert></x-empty-alert>
                            @endif
                        </tbody>
                    </table>
                    {{ $subscribers->render('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
        <!-- simple table -->
    </div>
@endsection
