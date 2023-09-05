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
            #heiContentDiv .row {
                position: sticky;
                top: 0px;
                padding-top: 3px;
                background-color: #f4f4f4;
                transform: translatex(0px) translatey(0px);
                z-index: 5;
            }

            /* Th */


            /* Row */
            #heinContentDiv .row {
                position: sticky;
                top: 0px;
                padding-top: 3px;
                background-color: #f4f4f4;
                transform: translatex(0px) translatey(0px);
                z-index: 5;
            }

            /* Th */
            #heinContentDiv tbody .stk {
                top: 26px;
            }

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
                                        <th> Population:<x-elements.socure :value="$vertical['MSTR5']" :showTitle="false" /> :</th>
                                        <td>:</td>
                                        <td>{{ numFormat($cityData['city_population']) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th> Population (Rank) <x-elements.socure :value="$vertical['DEVL1']" :showTitle="false" />
                                            :</th>
                                        <td>:</td>
                                        <td>{{ numFormat($cityData['dist_pop_rank'], true) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th> Area (km<sup>2</sup>) <x-elements.socure :value="$vertical['MSTR23']"
                                                :showTitle="false" />:</th>
                                        <td>:</td>
                                        <td>{{ numFormat($cityData['district_area']) }}</td>
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
                        <p class="text-center live-heading">{{ $cityInfo['city'] }} Highlights: <span>India
                                City/Districts
                                Comparison</span></p>
                        <div class="ps-4">
                            <div>
                                <p class="pos-title">
                                    <i class="fa fa-area-chart"></i> Positive Matrix:
                                </p>
                                <p class="pos-sub-title"> <i class="fa fa-arrow-circle-right"></i> Better than
                                    India
                                    Average-</p>
                            </div>
                            <div>
                                @if ($abPosDataCount >= 1)
                                    <ul class="pos-data">
                                        <li>1.</li>
                                        <li> <strong>{{ $cityInfo['city'] }}</strong> is the
                                            <strong>{{ numformat($abPosData[0]['rank'], true) }}</strong> highest
                                            ranked in <strong> <x-elements.socure :value="$vertical[$abPosData[0]['e_id']]" /></strong> out of
                                            768 city/districts of India.
                                        </li>
                                    </ul>
                                @endif
                                @if ($abPosDataCount >= 2)
                                    <ul class="pos-data">
                                        <li>2.</li>
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
                                    <ul class="pos-data">
                                        <li>3.</li>
                                        <li>Out of 768 District Capitals/Districts of India,
                                            <strong>{{ $cityInfo['city'] }}</strong> is
                                            the<strong>{{ numformat($abPosData[2]['rank'], true) }}</strong>
                                            highest
                                            ranked in <strong> <x-elements.socure :value="$vertical[$abPosData[2]['e_id']]" /></strong> .
                                        </li>
                                    </ul>
                                @endif
                                <p class="text-end"> <button class="btn btn-sm btn-info" href=""
                                        id="ab-pos-data-btn">
                                        <i class="fa fa-plus">
                                            More</i></button></p>
                                <div class="mt-3" id="ab-pos-data-div" style="display: none;">
                                    <div class="row">
                                        <div class="col-sm-6 text-center h6 list-heading">Population:
                                            {{ numFormat($cityData['city_population']) }} | Population Rank:
                                            {{ numFormat($cityData['dist_pop_rank'], true) }}
                                        </div>
                                        <div class="col-sm-6 text-center h6 list-heading">Area (KM<sup>2</sup>) :
                                            {{ numFormat($cityData['district_area']) }} | Area Rank:
                                            {{ numFormat($cityData['area_rank'], true) }}</div>
                                    </div>
                                    <table class="table table-sm table-bordered">
                                        <tr class="class="">
                                            <th class="stk">Sr.</th>
                                            <th class="stk">Fields</th>
                                            <th class="stk">Category</th>
                                            <th class="stk">India Average</th>
                                            <th class="stk">Rank out of 768</th>
                                        </tr>
                                        @foreach ($abPosData as $pdata)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><x-elements.socure :value="$vertical[$pdata['e_id']]" /></td>
                                                <td>{{ realName($pdata['e_table']) }}</td>
                                                <td>{{ $pdata['avg'] }}</td>

                                                <td class="text-end pe-4">{{ numFormat($pdata['rank'], true) }}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>

                                <div class="mt-3">
                                    <p class="pos-sub-title"> <i class="fa fa-arrow-circle-right"></i> Worse than India
                                        Average-</p>
                                </div>
                                <div>
                                    @if ($bePosDataCount >= 1)
                                        <ul class="pos-data">
                                            <li>1.</li>
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
                                        <ul class="pos-data">
                                            <li>2.</li>
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
                                        <ul class="pos-data">
                                            <li>3.</li>
                                            <li> Out of 768 District Capitals/Districts of India,
                                                <strong>{{ $cityInfo['city'] }}</strong> is the
                                                <strong>{{ numformat($bePosData[2]['rank'], true) }}</strong>
                                                worst ranked
                                                in <strong> <x-elements.socure :value="$vertical[$bePosData[2]['e_id']]" /></strong> .
                                            </li>
                                        </ul>
                                    @endif
                                    <p class="text-end"> <button class="btn btn-sm btn-info" href=""
                                            id="heiToggleButtonbe">
                                            <i class="fa fa-plus">
                                                More</i></button></p>
                                    <div class="mt-3" id="heiContentDivbe" style="display: none;">
                                        <div class="row">
                                            <div class="col-sm-6 text-center h6 list-heading">Population:
                                                {{ numFormat($cityData['city_population']) }} | Population Rank:
                                                {{ numFormat($cityData['dist_pop_rank'], true) }}
                                            </div>
                                            <div class="col-sm-6 text-center h6 list-heading">Area (KM<sup>2</sup>) :
                                                {{ numFormat($cityData['district_area']) }} | Area Rank:
                                                {{ numFormat($cityData['area_rank'], true) }}</div>
                                        </div>
                                        <table class="table table-sm table-bordered">
                                            <tr class="class="">
                                                <th class="stk">Sr.</th>
                                                <th class="stk">Fields</th>
                                                <th class="stk">Category</th>
                                                <th class="stk">India Average</th>
                                                <th class="stk">Rank out of 768</th>
                                            </tr>
                                            @foreach ($bePosData as $bpdata)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td><x-elements.socure :value="$vertical[$bpdata['e_id']]" /></td>
                                                    <td>{{ realName($bpdata['e_table']) }}</td>
                                                    <td>{{ $bpdata['avg'] }}</td>

                                                    <td class="text-end pe-4">{{ numFormat($bpdata['rank'], true) }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div> <br>
                                <div class="ps-4">
                                    <div>
                                        <p class="neg-title">
                                            <i class="fa fa-area-chart"></i> Negative Matrix:
                                        </p>
                                        <p class="pos-sub-title neg-sub-title"> <i class="fa fa-arrow-circle-right"></i>
                                            Worse
                                            than India
                                            Average-</p>
                                    </div>
                                    <div>
                                        @if ($abNegDataCount >= 1)
                                            <ul class="pos-data">
                                                <li>1.</li>
                                                <li> Out of 768 District Capitals/Districts of India,
                                                    <strong>{{ $cityInfo['city'] }}</strong>is the
                                                    <strong>{{ numFormat($abNegData[0]['rank'], true) }}</strong>
                                                    worst ranked
                                                    in <strong> <x-elements.socure :value="$vertical[$abNegData[0]['e_id']]" /></strong>.
                                                </li>
                                            </ul>
                                        @endif
                                        @if ($abNegDataCount >= 2)
                                            <ul class="pos-data">
                                                <li>2.</li>
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
                                            <ul class="pos-data">
                                                <li>3.</li>
                                                <li> The Average <strong> <x-elements.socure
                                                            :value="$vertical[$abNegData[2]['e_id']]" /></strong>
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
                                    </div>
                                    <div class="mt-3">

                                        <p class="pos-sub-title neg-sub-title"> <i class="fa fa-arrow-circle-right"></i>
                                            Better
                                            than India
                                            Average-</p>
                                    </div>
                                    <div>

                                        @if ($beNegDataCount >= 1)
                                            <ul class="pos-data">
                                                <li>1.</li>
                                                <li> Out of 768 District Capitals/Districts of India
                                                    <strong>{{ $cityInfo['city'] }}</strong> is the
                                                    <strong>{{ numFormat($beNegData[0]['rank'], true) }}</strong>
                                                    best ranked
                                                    in <strong> <x-elements.socure :value="$vertical[$beNegData[0]['e_id']]" /></strong>.
                                                </li>
                                            </ul>
                                        @endif
                                        @if ($beNegDataCount >= 2)
                                            <ul class="pos-data">
                                                <li>2.</li>
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
                                            <ul class="pos-data">
                                                <li>3.</li>
                                                <li>The Average <strong> <x-elements.socure
                                                            :value="$vertical[$beNegData[2]['e_id']]" /></strong>
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
                                </div>
                            </div>


                            {{-- <table>
                                    <tr>
                                        <td><i class="fa fa-dot-circle-o" aria-hidden="true"></i> </td>
                                        <td class="ps-2"> <strong>{{ $cityInfo['city'] }}</strong> is the
                                            <strong>{{ numFormat($abPosData[0]['rank'], true) }}</strong>
                                            highest ranked in <strong>
                                                <x-elements.socure :value="$vertical[$abPosData[0]['e_id']]" /></strong> out
                                            of
                                            768
                                            city/districts of India.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-dot-circle-o" aria-hidden="true"></i> </td>
                                        <td class="ps-2">The Average <strong> <x-elements.socure :value="$vertical[$abPosData[1]['e_id']]" />
                                            </strong> of indian city(district capitals)/districts is <strong>
                                                {{ $abPosData[1]['avg'] }}.</strong> &nbsp;
                                            <strong>{{ $cityInfo['city'] }}</strong> is the
                                            <strong>{{ numFormat($abPosData[1]['rank'], true) }}</strong> highest
                                            ranked
                                            city out of 768
                                            city/districts.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-dot-circle-o" aria-hidden="true"></i></td>
                                        <td class="ps-2">Out of 768 district capitals/districts of India,
                                            <strong>{{ $cityInfo['city'] }}</strong>
                                            is the <strong>{{ numFormat($abPosData[2]['rank'], true) }}</strong>
                                            highest ranked in <strong><x-elements.socure :value="$vertical[$abPosData[2]['e_id']]" /></strong>.
                                        </td>
                                    </tr>
                                </table>
                                <p class="text-end"> <button class="btn btn-sm btn-info" href=""
                                        id="heiToggleButton">
                                        <i class="fa fa-plus">
                                            More</i></button></p>
                                <div class="mt-3" id="heiContentDiv" style="display: none;">
                                    <div class="row">
                                        <div class="col-sm-6 text-center h6 list-heading">Population:
                                            {{ numFormat($cityData['city_population']) }} | Population Rank:
                                            {{ numFormat($cityData['dist_pop_rank'], true) }}
                                        </div>
                                        <div class="col-sm-6 text-center h6 list-heading">Area (KM<sup>2</sup>) :
                                            {{ numFormat($cityData['district_area']) }} | Area Rank:
                                            {{ numFormat($cityData['area_rank'], true) }}</div>
                                    </div>
                                    <table class="table table-sm table-bordered">
                                        <tr class="class="">
                                            <th class="stk">Sr.</th>
                                            <th class="stk">Fields</th>
                                            <th class="stk">Category</th>
                                            <th class="stk">India Average</th>
                                            <th class="stk">Rank out of 768</th>
                                        </tr>
                                        @foreach ($abPosData as $pdata)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><x-elements.socure :value="$vertical[$pdata['e_id']]" /></td>
                                                <td>{{ realName($pdata['e_table']) }}</td>
                                                <td>{{ $pdata['avg'] }}</td>

                                                <td class="text-end pe-4">{{ numFormat($pdata['rank'], true) }}</td>
                                            </tr>
                                        @endforeach
                                    </table>

                                </div>

                            </div>
                            <br>
                            <div>
                                <p class="neg-title">
                                    Negative Matrix:
                                </p>
                                <table class="">
                                    <tr>
                                        <td><i class="fa fa-dot-circle-o" aria-hidden="true"></i> </td>
                                        <td class="ps-2"> Out of 768 district capitals/districts of India,
                                            <strong>{{ $cityInfo['city'] }}</strong> is the
                                            <strong>{{ numFormat($negData[0]['rank'], true) }}</strong>
                                            worst
                                            ranked in<strong>
                                                <x-elements.socure :value="$vertical[$negData[0]['e_id']]" /></strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-dot-circle-o" aria-hidden="true"></i> </td>
                                        <td class="ps-2"><strong>{{ $cityInfo['city'] }}</strong> is the
                                            <strong>{{ numFormat($negData[1]['rank'], true) }}</strong>
                                            worst ranked in <strong><x-elements.socure :value="$vertical[$negData[1]['e_id']]" /></strong>
                                            out
                                            of 768 city/districts of India.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-dot-circle-o" aria-hidden="true"></i></td>
                                        <td class="ps-2">The Average, <strong><x-elements.socure
                                                    :value="$vertical[$negData[2]['e_id']]" /></strong>
                                            of
                                            Indian
                                            city (district
                                            capitals)/districts is <strong>{{ $negData[2]['avg'] }}.
                                            </strong>
                                            <strong>{{ $cityInfo['city'] }}</strong>
                                            is the
                                            <strong> {{ numFormat($negData[2]['rank'], true) }}</strong> worst ranked
                                            city out of 768 city/districts.
                                        </td>
                                    </tr>
                                </table>
                                <p class="text-end"> <button class="btn btn-sm btn-info" href=""
                                        id="heinToggleButton">
                                        <i class="fa fa-plus">
                                            More</i></button></p>
                                <div class="mt-3" id="heinContentDiv" style="display:none ;">
                                    <div class="row">
                                        <div class="col-sm-6 text-center h6 list-heading">Population:
                                            {{ numFormat($cityData['city_population']) }} | Population Rank:
                                            {{ numFormat($cityData['dist_pop_rank'], true) }}
                                        </div>
                                        <div class="col-sm-6 text-center h6 list-heading">Area (KM<sup>2</sup>) :
                                            {{ numFormat($cityData['district_area']) }} | Area Rank:
                                            {{ numFormat($cityData['area_rank'], true) }}</div>
                                    </div>
                                    <table class="table table-sm table-bordered">
                                        <tr>
                                            <th class="stk">Sr.</th>
                                            <th class="stk">Fields</th>
                                            <th class="stk">Category</th>
                                            <th class="stk">India Average</th>
                                            <th class="stk">Rank, Worst from avg.</th>
                                        </tr>
                                        @foreach ($negData as $ndata)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><x-elements.socure :value="$vertical[$ndata['e_id']]" /></td>
                                                <td>{{ realName($ndata['e_table']) }}</td>
                                                <td>{{ $ndata['avg'] }}</td>
                                                <td class="text-end pe-4">{{ numFormat($ndata['rank'], true) }}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> --}}
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
                                                        <button class="accordion-button work-acc-btn collapsed"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#flush-collapsew{{ $wkey }}"
                                                            aria-expanded="false"
                                                            aria-controls="flush-collapsew{{ $wkey }}">
                                                            {{ realName($wkey) }}
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapsew{{ $wkey }}"
                                                        class="accordion-collapse collapse"
                                                        aria-labelledby="flush-headingOne"
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
                                                        <button class="accordion-button pls-acc-btn collapsed"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#flush-collapsep{{ $pkey }}"
                                                            aria-expanded="false"
                                                            aria-controls="flush-collapsep{{ $pkey }}">
                                                            {{ realName($pkey) }}
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapsep{{ $pkey }}"
                                                        class="accordion-collapse collapse"
                                                        aria-labelledby="flush-headingOne"
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
                                                                                        :value="$vertical[
                                                                                            $people['id']
                                                                                        ]" /></small>
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
                            <div class="live-cities-list shadow p-2 rounded">
                                {{-- <p class="text-center live-heading">live Cities</p>
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
                        </div> --}}

                            </div>
                        </div>
                    </div>
        </section>
    </main>
</x-layout.base>
