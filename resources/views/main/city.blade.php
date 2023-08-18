@php
    $vertical = vertical(['e_langs']);
@endphp
<x-layout.base>
    @section('css')
        <style>
            .basic-d img {
                width: 162px;
                height: 154px;
            }

            .basic-d .col-sm-6 {
                display: flex;
                justify-content: center;
                align-items: center;
                transform: translatex(0px) translatey(0px);
            }
        </style>
    @endsection
    <main class="container">
        <section class="city-heading-section">
            <h2 class="city-heading text-center">
                {{ $cityInfo['city'] }} - City/District Knowledge Webs.
            </h2>
        </section>
        <section class="static-top-section mt-3">
            <div class="row">
                <div class="col-sm-4">
                    <div class="language p-2 rounded shadow  rounded">
                        <p class="text-center language-heading">languages</p>
                        <ul>
                            @forelse ($top3Languages as $key=> $lang)
                                <li class="lang-li">
                                    {{ $loop->iteration }}. <x-elements.socure :value="$vertical[$key]" :showSource="false" />
                                </li>
                            @empty
                                No Data Found!
                            @endforelse
                        </ul>
                        <p class="lang-num">Number Of Languages spoken by more then 30K Population :
                            {{ $cityData['no_of_30k'] }}</p>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="basic-d p-2 ps-3 shadow  rounded">
                        <p class="text-center basic-d-headig">Basic Details</p>
                        <div class="row">
                            <div class="col-sm-6">
                                <table class="table table-sm">
                                    <tr>
                                        <th> Population (Rank)</th>
                                        <td>:</td>
                                        <td>{{ $cityData['city_population'] }}</td>
                                    </tr>
                                    <tr>
                                        <th> Area (Rank)</th>
                                        <td>:</td>
                                        <td>{{ $cityData['district_area'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>No.of Towns</th>
                                        <td>:</td>
                                        <td>{{ $cityData['towns'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>No. of Villages:</th>
                                        <td>:</td>
                                        <td>{{ $cityData['villages'] }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-sm-6">
                                <img class="gis-image" src="{{ asset('assets/image/luc_gis.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <section id="mid-section">
            <div class="row">
                <div class="col-sm-8">
                    <div class="disrict-rank shadow p-2 rounded">
                        <p class="text-center live-heading">Highlights: <span>City/Districts Comparison</span></p>
                        <div class="ps-4">
                            <p>{{ $cityData['city_description'] }}</p>
                        </div>
                    </div>
                    <br>
                    <div class="disrict-rank shadow p-2 rounded">
                        <p class="text-center live-heading ">District Ranks</p>
                        <div class="row">
                            <div class="col-sm-4 border-end">
                                <h6 class="text-center border-bottom pb-1">Work</h6>
                            </div>
                            <div class="col-sm-4 border-end">
                                <h6 class="text-center border-bottom pb-1">Place</h6>
                            </div>
                            <div class="col-sm-4">
                                <h6 class="text-center border-bottom pb-1">People</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="information shadow p-2 rounded">
                        <p class="text-center live-heading">Information</p>

                    </div><br>
                    <div class="live-cities-list shadow p-2 rounded">
                        <p class="text-center live-heading">live Cities</p>
                        <div>
                            <ul>
                                @foreach ($liveCities as $lkey => $lcity)
                                    <li class="live-state-name"><a href=""> {{ $lkey }}</a></li>
                                    <ul>
                                        @foreach ($lcity as $cityx)
                                            <li class="live-cities-name"><a href="">{{ $cityx['city'] }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endforeach

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
</x-layout.base>
