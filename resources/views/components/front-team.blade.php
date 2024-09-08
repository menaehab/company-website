@if (count($teams))
    @foreach ($teams as $team)
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="team-item">
                <h5>{{ $team->name }}</h5>
                <p class="mb-4">{{ $team->position }}</p>
                <img class="img-fluid rounded-circle w-100 mb-4" src="{{ asset("storage/teams/$team->image") }}"
                    alt="">
                <div class="d-flex justify-content-center">
                    <a class="btn btn-square text-primary bg-white m-1" href="{{ $team->facebook }}"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square text-primary bg-white m-1" href="{{ $team->twitter }}"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-square text-primary bg-white m-1" href="{{ $team->linkedin }}"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    @endforeach
@endif
