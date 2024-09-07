@if (count($testmonials) > 0)
    @foreach ($testmonials as $testmonial)
        <div class="testimonial-item rounded p-4">
            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
            <p>{{ $testmonial->description }}</p>
            <div class="d-flex align-items-center">
                <img class="img-fluid flex-shrink-0 rounded-circle"
                    src="{{ asset("storage/testmonials/$testmonial->image") }}">
                <div class="ps-3">
                    <h6 class="mb-1">{{ $testmonial->name }}</h6>
                    <small>{{ $testmonial->position }}</small>
                </div>
            </div>
        </div>
    @endforeach
@endif
