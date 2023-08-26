@php
    $vertical = vertical();
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

            /* Division */
            #mid-section .disrict-rank .row .col-sm-4>div {
                max-height: 560px;
                overflow-y: scroll;
            }

            /* Table Data */
            .ps-4 tr .ps-2 {
                font-weight: 500;
                font-size: 14px;
                text-transform: capitalize;
                text-align: justify;
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
                                        <td>{{ numFormat($cityData['dist_pop_rank'], true) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th> Area (Rank)</th>
                                        <td>:</td>
                                        <td>{{ numFormat($cityData['area_rank'], true) }}</td>
                                    </tr>
                                    <tr>
                                        <th>No.of Towns</th>
                                        <td>:</td>
                                        <td>{{ numFormat($cityData['towns']) }}</td>
                                    </tr>
                                    <tr>
                                        <th>No. of Villages:</th>
                                        <td>:</td>
                                        <td>{{ numFormat($cityData['villages']) }}</td>
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
                <div class="col-sm-9">
                    <div class="disrict-rank shadow p-2 rounded">
                        <p class="text-center live-heading">Highlights: <span>City/Districts Comparison</span></p>
                        <div class="ps-4">
                            <div>
                                <p class="pos-title">
                                    Positive:
                                </p>
                                <table>
                                    <tr>
                                        <td>1. </td>
                                        <td class="ps-2"> "{{ $cityInfo['city'] }}" is the "{{ $posData[0]['rank'] }}"
                                            highest ranked in "
                                            <x-elements.socure :value="$vertical[$posData[0]['virtical']]" /> out
                                            of
                                            768
                                            City/Districts of India
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2. </td>
                                        <td class="ps-2">The Average <x-elements.socure :value="$vertical[$posData[1]['virtical']]" /> of Indian
                                            City(District
                                            Capitals)/Districts is "
                                            {{ $posData[1]['avg'] }} . " {{ $cityInfo['city'] }}" is the
                                            {{ $posData[1]['rank'] }}
                                            highest ranked City out of
                                            768
                                            City/Districts.</td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td class="ps-2">Out of 768 District Capitals/Districts of India,
                                            "{{ $cityInfo['city'] }}"
                                            is the {{ $posData[2]['rank'] }}
                                            highest ranked in "<x-elements.socure :value="$vertical[$posData[2]['virtical']]" /> .</td>
                                    </tr>
                                </table>
                                <p class="text-end"> <button class="btn btn-sm btn-info" href=""
                                        id="heiToggleButton">
                                        <i class="fa fa-plus">
                                            More</i></button></p>
                                <div class="mt-3" id="heiContentDiv" style="display: none;">
                                    This is the content that will be shown or hidden.
                                </div>
                            </div>
                            <div>
                                <p class="neg-title">
                                    Nagative:
                                </p>
                                <table>
                                    <tr>
                                        <td>1. </td>
                                        <td class="ps-2"> Out of 768 District Capitals/Districts of India, " XYZ -
                                            Name" is the " 123" worst ranked in " i Header"</td>
                                    </tr>
                                    <tr>
                                        <td>2. </td>
                                        <td class="ps-2">" XYZ - Name" is the " 123" highest ranked in " i Header" out
                                            of 768 City/Districts of India</td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td class="ps-2">The Average " i Header" of Indian City(District
                                            Capitals)/Districts is " ???" . " XYZ - Name" is the "123" highest ranked
                                            City out of 768 City/Districts.</td>
                                    </tr>
                                </table>


                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="disrict-rank shadow p-2 rounded">
                        <p class="text-center live-heading ">City / District Ranks</p>
                        <div class="row">
                            <div class="col-sm-4 border-end">
                                <h6 class="text-center border-bottom pb-1">Work</h6>

                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    @foreach ($wpp['wverticalData'] as $wkey => $wvertical)
                                        <div class="accordion-item static-page-accordion-item ">
                                            <h2 class="accordion-header" id="flush-headingOne">
                                                <button class="accordion-button work-acc-btn collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#flush-collapsew{{ $wkey }}"
                                                    aria-expanded="false"
                                                    aria-controls="flush-collapsew{{ $wkey }}">
                                                    {{ realName($wkey) }}
                                                </button>
                                            </h2>
                                            <div id="flush-collapsew{{ $wkey }}"
                                                class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                                                data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body work-accordion-body">
                                                    <table class="table table-sm">
                                                        @foreach ($wvertical as $work)
                                                            <tr>
                                                                <td> <small><x-elements.socure
                                                                            :value="$vertical[$work['id']]" /></small></td>
                                                                <td><small>{{ numFormat($wpp['work'][$work['id']]) }}</small>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-sm-4 border-end">
                                <h6 class="text-center border-bottom pb-1">Place</h6>
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    @foreach ($wpp['pverticalData'] as $pkey => $pvertical)
                                        <div class="accordion-item static-page-accordion-item ">
                                            <h2 class="accordion-header" id="flush-headingOne">
                                                <button class="accordion-button pls-acc-btn collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#flush-collapsep{{ $pkey }}"
                                                    aria-expanded="false"
                                                    aria-controls="flush-collapsep{{ $pkey }}">
                                                    {{ realName($pkey) }}
                                                </button>
                                            </h2>
                                            <div id="flush-collapsep{{ $pkey }}"
                                                class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                                                data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body pls-accordion-body">
                                                    <table class="table table-sm">
                                                        @foreach ($pvertical as $place)
                                                            <tr>
                                                                <td> <small><x-elements.socure
                                                                            :value="$vertical[$place['id']]" /></small></td>
                                                                <td><small>{{ numFormat($wpp['place'][$place['id']]) }}</small>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <h6 class="text-center border-bottom pb-1">People</h6>
                                <div>
                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                        @foreach ($wpp['overticalData'] as $okey => $overtical)
                                            <div class="accordion-item static-page-accordion-item ">
                                                <h2 class="accordion-header" id="flush-headingOne">
                                                    <button class="accordion-button pop-acc-btn collapsed"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#flush-collapseo{{ $okey }}"
                                                        aria-expanded="false"
                                                        aria-controls="flush-collapseo{{ $okey }}">
                                                        {{ realName($okey) }}
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseo{{ $okey }}"
                                                    class="accordion-collapse collapse"
                                                    aria-labelledby="flush-headingOne"
                                                    data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body pop-accordion-body">
                                                        <table class="table table-sm">
                                                            @foreach ($overtical as $people)
                                                                <tr>
                                                                    <td> <small><x-elements.socure
                                                                                :value="$vertical[$people['id']]" /></small></td>
                                                                    <td><small>{{ numFormat($wpp['people'][$people['id']]) }}</small>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </table>

                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
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
                                            <li class="live-cities-name"><a
                                                    href="https://prarang.in/{{ strtolower($cityx['city']) }}"
                                                    target="_blanck">{{ $cityx['city'] }}</a>
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
