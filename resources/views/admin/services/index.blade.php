@extends('admin.master')
@section('title',__('keywords.services'))
@section('content')
 <div class="container-fluid">
     <!-- simple table -->
    <div class="col my-4">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h3 class="card-title">{{ __('keywords.services') }}</h3>
            <div class="page-title-right">
                <a href="#" class="btn btn-primary">{{ __('keywords.add_new') }}</a>
            </div>
        </div>
        <div class="card shadow">
        <div class="card-body">
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
                            <a href="#" class="btn btn-sm btn-primary"><i class="fe fe-eye fa-2x"></i></a>
                            <a href="#" class="btn btn-sm btn-warning"><i class="fe fe-edit fa-2x"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fe fe-trash-2 fa-2x"></i></a>
                        </td>
                        </tr>
                    @endforeach
                @else
                <tr>
                    <td colspan="4"><div class="alert alert-danger">{{ __('keywords.no_records') }}</div></td>
                </tr>
                @endif
            </tbody>
            </table>
            {{ $services->render('pagination::bootstrap-4') }}
        </div>
        </div>
    </div>
    <!-- simple table -->
</div>
@endsection
