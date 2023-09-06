@php
    $vertical = vertical();
    // dd($abPosData);
    $abPosDataCount = count($abPosData);
    $abNegDataCount = count($abNegData);
    $bePosDataCount = count($bePosData);
    $beNegDataCount = count($beNegData);
@endphp
<x-layout.base>
    @section('css')
        <style>
            /* Import Google Fonts */
            @import url("//fonts.googleapis.com/css2?family=Alike:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap");

            /* Table Data */
            .ps-4 tr .ps-2 {
                font-weight: 500;
                font-family: 'Alike', serif;
                letter-spacing: 0.2px;
                word-spacing: 1px;
            }

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
                /* text-transform: capitalize; */
                text-align: justify;
            }

            tr td {
                font-size: 13px;
            }

            /* List Item */
            .container .static-top-section .row .col-sm-4 .language ul li {
                font-size: 14px !important;
            }


            .data-divx tr .stk {
                position: sticky;
                top: -1px;
                z-index: 11;
                background-color: #F7E3E3;
            }

            .data-divx {
                overflow-y: scroll;
                height: 68vh;
            }

            .data-divx .row {
                position: sticky;
                top: 0px;
                padding-top: 3px;
                background-color: #f4f4f4;
                transform: translatex(0px) translatey(0px);
                z-index: 5;
            }

            .data-divx tbody .stk {
                top: 26px;
            }

            /* List Item */
            #mid-section div li {
                text-align: left;
            }

            @media (min-width:576px) {

                /* List Item */
                #mid-section div li {
                    font-size: 14px;
                }

            }

            /* Disrict rank */
            #mid-section .disrict-rank {
                padding-top: 15px !important;
            }

            /* Pos title */
            .ps-4 div .pos-title {
                padding-top: 3px;
                padding-bottom: 3px;
                background-color: #b2daf9;
                /* color: #0808b4; */
                padding-left: 12px;
            }

            /* Neg title */
            .ps-4 div .neg-title {
                background-color: #f7e3e3;
                padding-left: 12px;
                padding-top: 3px;
                padding-bottom: 3px;
            }

            /* Image */
            .basic-d img {
                height: 100%;
            }

            /* Image */
            .container .static-top-section .row .col-sm-8 .basic-d .row .col-sm-6 img {
                width: 100% !important;
            }



            @media (min-width:768px) {

                /* Pos title */
                .ps-4 div .pos-title {
                    font-size: 18px;
                }

                /* Neg title */
                .ps-4 div .neg-title {
                    font-size: 18px;
                }

            }

            /* Table Data */
            .ps-4 tr .ps-2 {
                padding-bottom: 7px;
            }

            /* Row */

            th {
                font-size: 13px;
            }

            .list-heading {
                font-size: 13px !important;
            }
        </style>
    @endsection
    <main class="container">
        <section class="city-heading-section">
            <h2 class="city-heading text-center">
                {{ $cityInfo['city'] }} Analytics
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
                                    {{ $loop->iteration }}. <x-elements.socure :value="$vertical[$key]" /> :
                                    &nbsp; {{ numFormat($lang) }}
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
                                        <th><small>City(District Capitals)/Districts</small>
                                            <br> Population:<x-elements.socure :value="$vertical['MSTR3']" :showTitle="false" /> :
                                        </th>
                                        <td>:</td>
                                        <td><br>{{ numFormat($cityData['city_population']) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th> Population (Rank) <x-elements.socure :value="$vertical['DEVL2']" :showTitle="false" />
                                            :</th>
                                        <td>:</td>
                                        <td>
                                            {{ numFormat($cityData['dhq_pop_rank'], true) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><small>District</small><br> Area (km<sup>2</sup>)
                                            <x-elements.socure :value="$vertical['MSTR23']" :showTitle="false" />:
                                        </th>
                                        <td>:</td>
                                        <td><br>{{ numFormat($cityData['district_area']) }}</td>
                                    </tr>
                                    <tr>
                                        <th> Area (Rank)</th>
                                        <td>:</td>
                                        <td>{{ numFormat($cityData['area_rank'], true) }}</td>
                                    </tr>
                                    <tr>
                                        <th>No.of Towns <x-elements.socure :value="$vertical['DEVL10']" :showTitle="false" />:</th>
                                        <td>:</td>
                                        <td>{{ numFormat($cityData['towns']) }}</td>
                                    </tr>
                                    <tr>
                                        <th>No. of Villages <x-elements.socure :value="$vertical['DEVL11']" :showTitle="false" />:
                                        </th>
                                        <td>:</td>
                                        <td>{{ numFormat($cityData['villages']) }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-sm-6">
                                <img class="gis-image" src="{{ asset('assets/image/dhq-map/' . $cityData['gis']) }}"
                                    alt="">
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
                        <p class="text-center live-heading">{{ $cityInfo['city'] }} Highlights: <span>India
                                City/Districts
                                Comparison</span></p>
                        <p class="hig-top-line">
                            <strong> {{ $cityInfo['city'] }}</strong> is the
                            <strong>{{ numFormat($cityData['dhq_pop_rank'], true) }}</strong>
                            ranked in
                            population, out of
                            768
                            District Capitals
                            (DHQs) of India. It
                            is the capital of <strong>{{ $cityInfo['city'] }}</strong> District in
                            <strong>{{ $cityData['state_name'] }}</strong>
                            State.
                            <strong>{{ $cityData['district'] }}</strong> District is
                            <strong>{{ numFormat($cityData['dist_pop_rank'], true) }}</strong>
                            highest
                            ranked in
                            population & <strong>{{ numFormat($cityData['area_rank'], true) }}</strong> ranked in
                            area, in
                            India.
                            Please keep the
                            DHQ rank
                            in perspective,
                            for the highlights below.
                        </p>
                        <div class="ps-4">
                            <div>
                                {{-- <p class="pos-title">
                                    <i class="fa fa-area-chart"></i> Positive Matrix:
                                    Better than India Average-
                                </p> --}}
                                <p class="pos-sub-title"> <i class="fa fa-arrow-circle-right"></i> Better than
                                    India
                                    Average-</p>
                            </div>
                            <div>
                                @php
                                    $countx = 0;
                                @endphp
                                @if ($abPosDataCount >= 1)
                                    @php
                                        $countx++;
                                    @endphp
                                    <ul class="pos-data">
                                        <li>{{ $countx }}.</li>
                                        <li> <strong>{{ $cityInfo['city'] }}</strong> is the
                                            <strong>{{ numformat($abPosData[0]['rank'], true) }}</strong> highest
                                            ranked in <strong> <x-elements.socure :value="$vertical[$abPosData[0]['e_id']]" /></strong> out of
                                            768 city/districts of India.
                                        </li>
                                    </ul>
                                @endif
                                @if ($abPosDataCount >= 2)
                                    @php
                                        $countx++;
                                    @endphp
                                    <ul class="pos-data">
                                        <li>{{ $countx }}.</li>
                                        <li> The average <strong> <x-elements.socure :value="$vertical[$abPosData[1]['e_id']]" /></strong> of
                                            Indian city(district capitals)/districts is
                                            <strong> {{ $abPosData[1]['avg'] }}</strong>.
                                            <strong>{{ $cityInfo['city'] }}</strong> is the
                                            {{ numformat($abPosData[1]['rank'], true) }} highest ranked
                                            city out of 768 city/districts.
                                        </li>
                                    </ul>
                                @endif
                                @if ($abPosDataCount >= 3)
                                    @php
                                        $countx++;
                                    @endphp
                                    <ul class="pos-data">
                                        <li>{{ $countx }}.</li>
                                        <li>Out of 768 District Capitals/Districts of India,
                                            <strong>{{ $cityInfo['city'] }}</strong> is
                                            the<strong>{{ numformat($abPosData[2]['rank'], true) }}</strong>
                                            highest
                                            ranked in <strong> <x-elements.socure :value="$vertical[$abPosData[2]['e_id']]" /></strong> .
                                        </li>
                                    </ul>
                                @endif
                                @if ($beNegDataCount >= 1)
                                    @php
                                        $countx++;
                                    @endphp
                                    <ul class="pos-data">
                                        <li>{{ $countx }}.</li>
                                        <li> Out of 768 District Capitals/Districts of India
                                            <strong>{{ $cityInfo['city'] }}</strong> is the
                                            <strong>{{ numFormat($beNegData[0]['rank'], true) }}</strong>
                                            best ranked
                                            in <strong> <x-elements.socure :value="$vertical[$beNegData[0]['e_id']]" /></strong>.
                                        </li>
                                    </ul>
                                @endif
                                @if ($beNegDataCount >= 2)
                                    @php
                                        $countx++;
                                    @endphp
                                    <ul class="pos-data">
                                        <li>{{ $countx }}.</li>
                                        <li> <strong>{{ $cityInfo['city'] }}</strong>" is the
                                            <strong>{{ numFormat($beNegData[1]['rank'], true) }}</strong> best
                                            ranked
                                            in
                                            <strong> <x-elements.socure :value="$vertical[$beNegData[1]['e_id']]" /></strong> out of
                                            768
                                            City/Districts of
                                            India
                                        </li>
                                    </ul>
                                @endif
                                @if ($beNegDataCount >= 3)
                                    @php
                                        $countx++;
                                    @endphp
                                    <ul class="pos-data">
                                        <li>{{ $countx }}.</li>
                                        <li>The Average <strong> <x-elements.socure :value="$vertical[$beNegData[2]['e_id']]" /></strong>
                                            of
                                            Indian City(District Capitals)/Districts is "
                                            <strong>{{ $beNegData[2]['avg'] }}</strong> .
                                            <strong>{{ $cityInfo['city'] }}</strong> is the
                                            <strong>{{ numFormat($beNegData[2]['rank'], true) }}</strong> best
                                            ranked
                                            City out
                                            of 768 City/Districts.
                                        </li>
                                    </ul>
                                @endif

                            </div>

                        </div> <br>
                        <div class="ps-4">
                            <div>
                                {{-- <p class="neg-title">
                                     <i class="fa fa-area-chart"></i> Negative Matrix: 
                                Worse than India Average-
                                </p> --}}
                                <p class="pos-sub-title neg-sub-title"> <i class="fa fa-arrow-circle-right"></i>
                                    Worse
                                    than India
                                    Average-</p>
                            </div>
                            <div>
                                @php
                                    $countx = 0;
                                @endphp
                                @if ($abNegDataCount >= 1)
                                    @php
                                        $countx++;
                                    @endphp
                                    <ul class="pos-data">
                                        <li>{{ $countx }}.</li>
                                        <li> Out of 768 District Capitals/Districts of India,
                                            <strong>{{ $cityInfo['city'] }}</strong>is the
                                            <strong>{{ numFormat($abNegData[0]['rank'], true) }}</strong>
                                            worst ranked
                                            in <strong> <x-elements.socure :value="$vertical[$abNegData[0]['e_id']]" /></strong>.
                                        </li>
                                    </ul>
                                @endif
                                @if ($abNegDataCount >= 2)
                                    @php
                                        $countx++;
                                    @endphp
                                    <ul class="pos-data">
                                        <li>{{ $countx }}.</li>
                                        <li><strong>{{ $cityInfo['city'] }}</strong> is the
                                            <strong>{{ numFormat($abNegData[1]['rank'], true) }}</strong>
                                            highest
                                            ranked
                                            in
                                            <strong> <x-elements.socure :value="$vertical[$abNegData[1]['e_id']]" /></strong> out of
                                            768
                                            City/Districts of
                                            India .
                                        </li>
                                    </ul>
                                @endif
                                @if ($abNegDataCount >= 3)
                                    @php
                                        $countx++;
                                    @endphp
                                    <ul class="pos-data">
                                        <li>{{ $countx }}.</li>
                                        <li> The Average <strong> <x-elements.socure :value="$vertical[$abNegData[2]['e_id']]" /></strong>
                                            of
                                            Indian City(District Capitals)/Districts is
                                            <strong>{{ $abNegData[2]['avg'] }}</strong>.
                                            <strong>{{ $cityInfo['city'] }}</strong> is the
                                            <strong>{{ numFormat($abNegData[2]['rank'], true) }}</strong>
                                            highest
                                            ranked
                                            City out of 768 City/Districts.
                                        </li>
                                    </ul>
                                @endif
                                @if ($bePosDataCount >= 1)
                                    @php
                                        $countx++;
                                    @endphp
                                    <ul class="pos-data">
                                        <li>{{ $countx }}.</li>
                                        <li> <strong>{{ $cityInfo['city'] }}</strong> is the
                                            <strong>{{ numformat($bePosData[0]['rank'], true) }}</strong> worst
                                            ranked
                                            in
                                            <strong> <x-elements.socure :value="$vertical[$bePosData[0]['e_id']]" /></strong> out of 768
                                            city/districts of
                                            India.
                                        </li>
                                    </ul>
                                @endif
                                @if ($bePosDataCount >= 2)
                                    @php
                                        $countx++;
                                    @endphp
                                    <ul class="pos-data">
                                        <li>{{ $countx }}.</li>
                                        <li>The Average <strong> <x-elements.socure :value="$vertical[$bePosData[1]['e_id']]" /></strong>
                                            of
                                            Indian City(District Capitals)/Districts is
                                            {{-- <strong>{{ $bePosData['avg'] }}</strong> . --}}
                                            <strong>{{ $cityInfo['city'] }}</strong> is the
                                            <strong>{{ numformat($bePosData[1]['rank'], true) }}</strong> worst
                                            ranked
                                            City
                                            out of 768
                                            City/Districts.
                                        </li>
                                    </ul>
                                @endif
                                @if ($bePosDataCount >= 3)
                                    @php
                                        $countx++;
                                    @endphp
                                    <ul class="pos-data">
                                        <li>{{ $countx }}.</li>
                                        <li> Out of 768 District Capitals/Districts of India,
                                            <strong>{{ $cityInfo['city'] }}</strong> is the
                                            <strong>{{ numformat($bePosData[2]['rank'], true) }}</strong>
                                            worst ranked
                                            in <strong> <x-elements.socure :value="$vertical[$bePosData[2]['e_id']]" /></strong> .
                                        </li>
                                    </ul>
                                @endif

                            </div>

                            <div>
                                <p class="text-end"> <button class="btn btn-sm btn-info" href=""
                                        id="show-pos-neg-btn">
                                        <i class="fa fa-plus">
                                            More</i></button></p>
                                <div class="mt-3 collapse data-table-div" id="show-pos-neg-div">
                                    <ul class="nav nav-pills mb-3 ms-4 text-center" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active pos-neg-nav" id="pills-home-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-home" type="button"
                                                role="tab" aria-controls="pills-home" aria-selected="true"><i
                                                    class="fa fa-area-chart"></i> Positve Metrics:</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link pos-neg-nav" id="pills-profile-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-profile" type="button"
                                                role="tab" aria-controls="pills-profile" aria-selected="false"><i
                                                    class="fa fa-area-chart"></i> Negative Metrics:</button>
                                        </li>

                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                            aria-labelledby="pills-home-tab" tabindex="0">
                                            {{-- Positive --}}
                                            <div class="row">
                                                <div class="col-sm-6 text-center h6 list-heading"> Population:
                                                    {{ numFormat($cityData['city_population']) }} | Population Rank:
                                                    {{ numFormat($cityData['dhq_pop_rank'], true) }}
                                                </div>
                                                <div class="col-sm-6 text-center h6 list-heading">Area (KM<sup>2</sup>)
                                                    :
                                                    {{ numFormat($cityData['district_area']) }} | Area Rank:
                                                    {{ numFormat($cityData['area_rank'], true) }}</div>
                                            </div>
                                            <div class="data-table-list">
                                                <table class="table table-sm table-bordered">
                                                    <tr class="class="">
                                                        <th class="stk">Sr.</th>
                                                        <th class="stk">Fields</th>
                                                        <th class="stk">Category</th>
                                                        <th class="stk">India Average</th>
                                                        <th class="stk">Rank out of 768</th>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="5">
                                                            <p class="pos-sub-title  pos-sub-title pt-2"> <i
                                                                    class="fa fa-arrow-circle-right"></i>
                                                                Better than India Average-</p>
                                                        </td>
                                                    </tr>
                                                    @foreach ($abPosData as $apdata)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td><x-elements.socure :value="$vertical[$apdata['e_id']]" /></td>
                                                            <td>{{ realName($apdata['e_table']) }}</td>
                                                            <td>{{ $apdata['avg'] }}</td>

                                                            <td class="text-end pe-4">
                                                                {{ numFormat($apdata['rank'], true) }}
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    <tr>
                                                        <td colspan="5">
                                                            <p class="pos-sub-title p2 neg-sub-title pt-2"> <i
                                                                    class="fa fa-arrow-circle-right"></i>
                                                                Worse than India Average-</p>
                                                        </td>
                                                    </tr>
                                                    @foreach ($bePosData as $bpdata)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td><x-elements.socure :value="$vertical[$bpdata['e_id']]" /></td>
                                                            <td>{{ realName($bpdata['e_table']) }}</td>
                                                            <td>{{ $bpdata['avg'] }}</td>

                                                            <td class="text-end pe-4">
                                                                {{ numFormat($bpdata['rank'], true) }}
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                            aria-labelledby="pills-profile-tab" tabindex="0">
                                            <div class="row">
                                                <div class="col-sm-6 text-center h6 list-heading">Population:
                                                    {{ numFormat($cityData['city_population']) }} | Population
                                                    Rank:
                                                    {{ numFormat($cityData['dhq_pop_rank'], true) }}
                                                </div>
                                                <div class="col-sm-6 text-center h6 list-heading">Area
                                                    (KM<sup>2</sup>)
                                                    :
                                                    {{ numFormat($cityData['district_area']) }} | Area Rank:
                                                    {{ numFormat($cityData['area_rank'], true) }}</div>
                                            </div>
                                            <div class="data-table-list">
                                                <table class="table table-sm table-bordered ">
                                                    <tr class="class="">
                                                        <th class="stk">Sr.</th>
                                                        <th class="stk">Fields</th>
                                                        <th class="stk">Category</th>
                                                        <th class="stk">India Average</th>
                                                        <th class="stk">Rank out of 768</th>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="5">
                                                            <p class="pos-sub-title p2 neg-sub-title pt-2"> <i
                                                                    class="fa fa-arrow-circle-right"></i>
                                                                Better than India Average-</p>
                                                        </td>
                                                    </tr>
                                                    @foreach ($beNegData as $bndata)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td><x-elements.socure :value="$vertical[$bndata['e_id']]" /></td>
                                                            <td>{{ realName($bndata['e_table']) }}</td>
                                                            <td>{{ $bndata['avg'] }}</td>

                                                            <td class="text-end pe-4">
                                                                {{ numFormat($bndata['rank'], true) }}
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    <tr>
                                                        <td colspan="5">
                                                            <p class="pos-sub-title p2 neg-sub-title pt-2"> <i
                                                                    class="fa fa-arrow-circle-right"></i>
                                                                Worse
                                                                than India
                                                                Average-</p>
                                                        </td>
                                                    </tr>
                                                    @foreach ($abNegData as $andata)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td><x-elements.socure :value="$vertical[$andata['e_id']]" /></td>
                                                            <td>{{ realName($andata['e_table']) }}</td>
                                                            <td>{{ $andata['avg'] }}</td>

                                                            <td class="text-end pe-4">
                                                                {{ numFormat($andata['rank'], true) }}
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
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
                                                                            :value="$vertical[$work['id']]" /></small>
                                                                </td>
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
                                                                            :value="$vertical[$place['id']]" /></small>
                                                                </td>
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
                                                                                :value="$vertical[$people['id']]" /></small>
                                                                    </td>
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
                    <div class="live-cities-list shadow p-2 rounded"> </div>
                </div>
            </div>

        </section>
    </main>
</x-layout.base>
