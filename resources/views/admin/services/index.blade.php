@extends('admin.master')
@section('title', __('keywords.services'))
@section('content')
    <div class="container-fluid">
        <!-- simple table -->
        <div class="col my-4">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                <h3 class="card-title">{{ __('keywords.services') }}</h3>
                <div class="page-title-right">
                    <a href="{{ route('admin.services.create') }}" class="btn btn-primary">{{ __('keywords.add_new') }}</a>
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
                            @if (count($services) > 0)
                                @foreach ($services as $key => $service)
                                    <tr>
                                        <td>{{ $services->firstItem() + $loop->index }}</td>
                                        <td>{{ $service->title }}</td>
                                        <td><i class="fe {{ $service->icon }} fa-2x"></i></td>
                                        <td>
                                            <a href="{{ route('admin.services.show', ['service' => $service]) }}"
                                                class="btn btn-sm btn-primary"><i class="fe fe-eye fa-2x"></i></a>
                                            <a href="{{ route('admin.services.edit', ['service' => $service]) }}"
                                                class="btn btn-sm btn-warning"><i class="fe fe-edit fa-2x"></i></a>
                                            <form action="{{ route('admin.services.destroy', ['service' => $service]) }}"
                                                method="POST" class="d-inline" id="deleteForm-{{ $service->id }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-sm btn-danger">
                                                    <i class="fe fe-trash-2 fa-2x"
                                                        onclick="confirmDelete({{ $service->id }})"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <x-empty-alert></x-empty-alert>
                            @endif
                        </tbody>
                    </table>
                    {{ $services->render('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
        <!-- simple table -->
    </div>
    <script>
        function confirmDelete(id) {
            if (confirm('Are you sure you want to delete this record?')) {
                document.getElementById('deleteForm-' + id).submit();
            }
        }
    </script>
@endsection
