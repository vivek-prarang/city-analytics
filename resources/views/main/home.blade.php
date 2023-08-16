<x-layout.base>
    <section class="container">
        <h2 class="live-cities-heading">Live Cities</h2>
        <div class="accordion live-cities-accordion" id="liveCityAccordion">
            @foreach ($liveCities as $state => $liveCities)
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button live-city-accordion-button" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapse{{ str_replace(' ', '', $state) }}"
                            aria-expanded="true" aria-controls="collapse{{ str_replace(' ', '', $state) }}">
                            {{ $state }}
                        </button>
                    </h2>
                    <div id="collapse{{ str_replace(' ', '', $state) }}" class="accordion-collapse collapse show"
                        data-bs-parent="#liveCityAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                @foreach ($liveCities as $city)
                                    <div class="col-sm-3  text-center">
                                        <a href="https://prarang.in/{{ Str::slug($city['city']) }}" target="_blanks">
                                            <p class="live-city-heading">{{ $loop->iteration }}. {{ $city['city'] }}
                                            </p>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <br><br>
    <section class="container">
        <h2 class="non-live-cities-heading">Static Cities</h2>
        <hr>
        <p class="comming-soon"> Websites for each of India's 768 District Capitals of 28 States, and 8 Union
            Territories ,
            for relative
            comparison & identifying unique socio-economic as well as culture & nature metrics. <br> <span>- Coming
                Soon -</span>
        </p>
        <div class="accordion non-live-cities-accordion" id="non-liveCityAccordion">
            @foreach ($cities as $state => $nonLiveCities)
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button non-live-city-accordion-button" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapse{{ str_replace(' ', '', $state) }}"
                            aria-expanded="true" aria-controls="collapse{{ str_replace(' ', '', $state) }}">
                            {{ $state }}
                        </button>
                    </h2>
                    <div id="collapse{{ str_replace(' ', '', $state) }}" class="accordion-collapse collapse "
                        data-bs-parent="#non-liveCityAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                @foreach ($nonLiveCities as $city)
                                    <div class="col-sm-3  text-center">
                                        <a href="/{{ $city['id'] }}/{{ Str::slug($city['city']) }}">
                                            <p class="non-live-city-heading">{{ $loop->iteration }}.
                                                {{ $city['city'] }}
                                            </p>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

</x-layout.base>
