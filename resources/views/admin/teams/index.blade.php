@extends('admin.master')
@section('title', __('keywords.teams'))
@section('content')
    <div class="container-fluid">
        <!-- simple table -->
        <div class="col my-4">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                <h3 class="card-title">{{ __('keywords.teams') }}</h3>
                <div class="page-title-right">
                    <x-action-button href="{{ route('admin.teams.create') }}" type="create"></x-action-button>
                </div>
            </div>
            <div class="card shadow">
                <div class="card-body">
                    <x-success-alert></x-success-alert>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th width="5%">#</th>
                                <th>{{ __('keywords.name') }}</th>
                                <th>{{ __('keywords.position') }}</th>
                                <th>{{ __('keywords.image') }}</th>
                                <th width="15%">{{ __('keywords.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($teams) > 0)
                                @foreach ($teams as $key => $team)
                                    <tr>
                                        <td>{{ $teams->firstItem() + $loop->index }}</td>
                                        <td>{{ $team->name }}</td>
                                        <td>{{ $team->position }}</td>
                                        <td>
                                            <img src="{{ asset("storage/teams/$team->image") }}" width="50px">
                                        </td>
                                        <td>
                                            <x-action-button
                                                href="{{ route('admin.teams.show', ['team' => $team]) }}"
                                                type="show"></x-action-button>
                                            <x-action-button
                                                href="{{ route('admin.teams.edit', ['team' => $team]) }}"
                                                type="edit"></x-action-button>
                                            <x-delete-button
                                                href="{{ route('admin.teams.destroy', ['team' => $team]) }}"
                                                id="{{ $team->id }}"></x-delete-button>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <x-empty-alert></x-empty-alert>
                            @endif
                        </tbody>
                    </table>
                    {{ $teams->render('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
        <!-- simple table -->
    </div>
@endsection
