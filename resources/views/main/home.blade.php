<x-layout.base>
    <style>
        /* Col state */
        .col-state {
            display: flex;
            justify-content: center;
            flex-direction: row;
            align-items: center;
        }

        /* Col 4 */
        .container .col-sm-4 {

            border-top-left-radius: 10px;
            border-top-right-radius: 1px;
            border-bottom-left-radius: 10px;
        }

        /* Col 8 */
        .container .col-sm-8 {
            background-color: #e3e2e2;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        /* Col 4 */
        .container .mt-2 .col-sm-4 {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Heading */
        .container .mt-2 h3 {
            font-weight: 700;
        }

        /* Col 3 */
        .container .mt-2 .col-sm-3 {
            padding-left: 0px;
            padding-top: 0px;
            padding-bottom: 0px;
            padding-right: 0px;
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        /* Col 8 */
        .container .mt-2 .col-sm-8 {
            padding-left: 24px;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        @media (min-width:1200px) {

            /* Heading */
            .container .mt-2 h3 {
                font-size: 30px;
            }

        }

        a {
            text-decoration: none;
            /* Remove default underline */
            transition: all 0.3s;
            /* Add transition for smooth effect */
            border-bottom: 2px solid transparent;


        }

        a:hover {
            font-weight: bold;

        }

        /* Heading */
        .container .city-main h3 {
            font-weight: 400 !important;
        }

        @media (max-width:767px) {

            /* Container */
            .container p.container {
                font-weight: 500 !important;
                font-size: 16px !important;
            }

            /* Col 3 */
            .container>.row .col-sm-3 {
                visibility: hidden;
            }

            /* Heading */
            .banner-city .headline h2 {
                font-weight: 600;
                font-size: 26px;
            }

        }

        @media (max-width:575px) {

            /* Container */
            .container p.container {
                margin-bottom: -28px;
                margin-top: -10px;
                transform: translatex(0px) translatey(0px);
                height: 100% !important;
                min-height: 1px;
            }

            /* Container */
            .container .container {
                min-height: 100px !important;
                height: 100% !important;
            }

        }

        @media (max-width:575px) {

            /* Paragraph */
            .mobile-screen a p {
                font-size: 14px;
                font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;
                font-weight: 500 !important;
            }

        }
    </style>

    <br>
    <section class="container">
        <x-elements.citybanner />

        <section id="desktop-screen" class="d-none d-sm-none d-md-block container-md">
            <!-- Place this div where you want the message to appear -->
            <div id="notFoundMessage" class="h3" style="display:none; text-align: center;">City not found!</div>
            @foreach ($cities as $state => $nonLiveCities)
                <div class="mt-2 m-4 city-main">
                    <div class="row">
                        <div class="col-sm-4 city-color">
                            <div class="col-state">
                                <h3>{{ $state }}</h2>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="row">
                                @foreach ($nonLiveCities as $city)
                                    <div class="col-sm-3">
                                        <a href="/{{ $city['id'] }}/{{ Str::slug($city['city']) }}">
                                            <span class="non-live-city-headings">{{ $loop->iteration }}.
                                                {{ $city['city'] }}</span>

                                        </a>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </section>
        <section id="mobile-screen" class="d-block d-md-none">
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
                        <div id="collapse{{ str_replace(' ', '', $state) }}" class="accordion-collapse collapse"
                            data-bs-parent="#non-liveCityAccordion">
                            <div class="accordion-body">
                                <div class="row">
                                    @foreach ($nonLiveCities as $city)
                                        <div class="col-6 col-lg-4  text-center">
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

        <script>
            const light_sad_colors = [
                "#ccfff5", "#ffcccc", "#ffd9cc", "#fff2cc", "#ffffcc",
                "#f2ffcc", "#e6ffcc", "#d9ffcc", "#ccffcc", "#ccffd9",
                "#ccffe6", "#ccfff2", "#ccfff5", "#ccffff", "#ccf2ff",
                "#cce6ff", "#ccd9ff", "#ccccff", "#d9ccff", "#e6ccff",
                "#ccffff", "#ccf2ff", "#cce6ff", "#ccd9ff", "#ccccff",
                "#d9ccff", "#e6ccff", "#f2ccff"
            ];

            document.addEventListener('DOMContentLoaded', function() {
                let cityColorElements = document.querySelectorAll(
                    '.city-color'); // added a dot before city-color to target class

                cityColorElements.forEach((element, index) => {
                    element.style.background = light_sad_colors[index % light_sad_colors.length];
                });
            });

            document.getElementById('searchInput').addEventListener('keyup', function() {
                // Get the query from the input
                var query = this.value.toLowerCase().trim();

                // Loop through all sections having the class 'city-main'
                var citySections = document.querySelectorAll('.city-main');
                var totalVisibleCities = 0; // Keep a count of all cities that are visible

                citySections.forEach(function(section) {
                    var cities = section.querySelectorAll('.non-live-city-headings');
                    var hasVisibleCity = false; // To check if any city in this section is visible

                    // Check each city under the current section
                    cities.forEach(function(city) {
                        var cityName = city.textContent || city.innerText;

                        // If the city matches the query
                        if (cityName.toLowerCase().indexOf(query) !== -1) {
                            city.parentElement.parentElement.style.display = 'block';
                            hasVisibleCity = true;
                            totalVisibleCities++; // Increment the visible cities count
                        } else {
                            city.parentElement.parentElement.style.display = 'none';
                        }
                    });

                    // If the section doesn't have any city that matches the query, hide the whole section
                    if (!hasVisibleCity) {
                        section.style.display = 'none';
                    } else {
                        section.style.display = 'block';
                    }
                });

                // Check the total visible cities and display the not found message if none are visible
                if (totalVisibleCities === 0) {
                    document.getElementById('notFoundMessage').style.display = 'block';
                } else {
                    document.getElementById('notFoundMessage').style.display = 'none';
                }
            });
        </script>
</x-layout.base>




{{-- Code Closed! --}}
{{-- <section class="container">
    <h2 class="live-cities-heading">Live Cities</h2>
    <div class="accordion live-cities-accordion" id="liveCityAccordion">
        @foreach ($liveCities as $state => $liveCities)
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button live-city-accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse{{ str_replace(' ', '', $state) }}" aria-expanded="true"
                        aria-controls="collapse{{ str_replace(' ', '', $state) }}">
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
</section> --}}
