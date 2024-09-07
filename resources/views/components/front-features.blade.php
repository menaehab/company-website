@foreach ($features as $feature)
    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="d-flex align-items-center mb-3">
            <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                <i class="fa {{ $feature->icon }} text-white"></i>
            </div>
            <h6 class="mb-0">{{ $feature->title }}</h6>
        </div>
        <span>{{ $feature->description }}</span>
    </div>
@endforeach
