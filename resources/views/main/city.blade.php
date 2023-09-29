@php
    $vertical = vertical();
    $abPosDataCount = count($abPosData);
    $abNegDataCount = count($abNegData);
    $bePosDataCount = count($bePosData);
    $beNegDataCount = count($beNegData);
    
@endphp
<x-layout.base>
    @section('css')
        <link rel="stylesheet" href="{{ asset('assets/css/static-page.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/pop-slider.css') }}">
    @endsection
    <main class="container">
        <section class="city-heading-section">
            <h2 class="city-heading text-center">
                {{ $cityInfo['city'] }} Analytics
            </h2>
        </section>
        <section class="static-top-section mt-3">
            <div class="row">
                <div class="col-sm-4 item-center rounded shadow">
                    <div class="language p-2   rounded">
                        <p class="text-center language-heading">languages <br> <small>City (district
                                capitals)/DHQ</small></p>

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
                    <div class="basic-d p-2 ps-3 shadow  rounded" style="background-image: url()">
                        <p class="text-center basic-d-headig">Basic Details</p>
                        <div class="row">
                            <div class="col-sm-6">
                                <table class="table table-sm">
                                    <tr>
                                        <th><small>City (District Capitals)/DHQ</small>
                                            <br> Population<x-elements.socure :value="$vertical['MSTR3']" :showTitle="false" /> :
                                        </th>
                                        <td>:</td>
                                        <td><br>{{ numFormat($cityData['city_population']) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th> <small>City(District Capitals)/DHQ</small> <br>Population (Rank)
                                            <x-elements.socure :value="$vertical['DEVL2']" :showTitle="false" />
                                        </th>
                                        <td>:</td>
                                        <td><br>
                                            {{ numFormat($cityData['dhq_pop_rank'], true) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><small>District</small><br> Area (km<sup>2</sup>)
                                            <x-elements.socure :value="$vertical['MSTR23']" :showTitle="false" />
                                        </th>
                                        <td>:</td>
                                        <td><br>{{ numFormat($cityData['district_area']) }}</td>
                                    </tr>
                                    <tr>
                                        <th><small>District</small><br> Area (Rank)</th>
                                        <td>:</td>
                                        <td><br>{{ numFormat($cityData['area_rank'], true) }}</td>
                                    </tr>
                                    <tr>
                                        <th>No.of Towns <x-elements.socure :value="$vertical['DEVL10']" :showTitle="false" /> <br>
                                            in <small>District</small></th>
                                        <td>:</td>
                                        <td>{{ numFormat($cityData['towns']) }}</td>
                                    </tr>
                                    <tr>
                                        <th>No. of Villages <x-elements.socure :value="$vertical['DEVL11']"
                                                :showTitle="false" /><br>
                                            in <small>District</small>
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
                <div class="col-sm-12">
                    <div class="disrict-rank shadow p-2 rounded">
                        <p class="text-center live-heading">{{ $cityInfo['city'] }} Highlights: <span>India
                                City/Districts
                                Comparison</span></p>
                        <p class="hig-top-line">
                            <strong> {{ $cityInfo['city'] }}</strong> is the
                            <strong>{{ numFormat($cityData['dhq_pop_rank'], true) }}</strong>
                            ranked city in
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
                                            {{ str_replace('"', '', $abPosData[0]['statement']) }}
                                            </b>
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
                                            {{ str_replace('"', '', $abPosData[1]['statement']) }}
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
                                            {{ str_replace('"', '', $abPosData[2]['statement']) }}
                                        </li>
                                    </ul>
                                @endif
                                @if ($bePosDataCount >= 1)
                                    @php
                                        $countx++;
                                    @endphp
                                    <ul class="pos-data">
                                        <li>{{ $countx }}.</li>
                                        <li> Out of 768 District Capitals/Districts of India
                                            <strong>{{ $cityInfo['city'] }}</strong> is the
                                            <strong>{{ numFormat($bePosData[0]['rank'], true) }}</strong>
                                            best ranked
                                            in <strong> <x-elements.socure :value="$vertical[$bePosData[0]['e_id']]" /></strong>.
                                            {{ str_replace('"', '', $bePosData[0]['statement']) }}
                                        </li>
                                    </ul>
                                @endif
                                @if ($bePosDataCount >= 2)
                                    @php
                                        $countx++;
                                    @endphp
                                    <ul class="pos-data">
                                        <li>{{ $countx }}.</li>
                                        <li> <strong>{{ $cityInfo['city'] }}</strong>" is the
                                            <strong>{{ numFormat($bePosData[1]['rank'], true) }}</strong> best
                                            ranked
                                            in
                                            <strong> <x-elements.socure :value="$vertical[$bePosData[1]['e_id']]" /></strong> out of
                                            768
                                            City/Districts of
                                            India. {{ str_replace('"', '', $bePosData[1]['statement']) }}
                                        </li>
                                    </ul>
                                @endif
                                @if ($bePosDataCount >= 3)
                                    @php
                                        $countx++;
                                    @endphp
                                    <ul class="pos-data">
                                        <li>{{ $countx }}.</li>
                                        <li>The Average <strong> <x-elements.socure :value="$vertical[$bePosData[2]['e_id']]" /></strong>
                                            of
                                            Indian City(District Capitals)/Districts is "
                                            <strong>{{ $bePosData[2]['avg'] }}</strong> .
                                            <strong>{{ $cityInfo['city'] }}</strong> is the
                                            <strong>{{ numFormat($bePosData[2]['rank'], true) }}</strong> best
                                            ranked
                                            City out
                                            of 768 City/Districts.
                                            {{ str_replace('"', '', $bePosData[2]['statement']) }}
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
                                @if ($beNegDataCount >= 1)
                                    @php
                                        $countx++;
                                    @endphp
                                    <ul class="pos-data">
                                        <li>{{ $countx }}.</li>
                                        <li> <strong>{{ $cityInfo['city'] }}</strong> is the
                                            <strong>{{ numformat($beNegData[0]['rank'], true) }}</strong> worst
                                            ranked
                                            in
                                            <strong> <x-elements.socure :value="$vertical[$beNegData[0]['e_id']]" /></strong> out of 768
                                            city/districts of
                                            India. {{ str_replace('"', '', $beNegData[0]['statement']) }}
                                        </li>
                                    </ul>
                                @endif
                                @if ($beNegDataCount >= 2)
                                    @php
                                        $countx++;
                                    @endphp
                                    <ul class="pos-data">
                                        <li>{{ $countx }}.</li>
                                        <li>The Average <strong> <x-elements.socure :value="$vertical[$beNegData[1]['e_id']]" /></strong>
                                            of
                                            Indian City(District Capitals)/Districts is
                                            {{-- <strong>{{ $bePosData['avg'] }}</strong> . --}}
                                            <strong>{{ $cityInfo['city'] }}</strong> is the
                                            <strong>{{ numformat($beNegData[1]['rank'], true) }}</strong> worst
                                            ranked
                                            City
                                            out of 768
                                            City/Districts.{{ str_replace('"', '', $beNegData[1]['statement']) }}
                                        </li>
                                    </ul>
                                @endif
                                @if ($beNegDataCount >= 3)
                                    @php
                                        $countx++;
                                    @endphp
                                    <ul class="pos-data">
                                        <li>{{ $countx }}.</li>
                                        <li> Out of 768 District Capitals/Districts of India,
                                            <strong>{{ $cityInfo['city'] }}</strong> is the
                                            <strong>{{ numformat($beNegData[2]['rank'], true) }}</strong>
                                            worst ranked
                                            in <strong> <x-elements.socure :value="$vertical[$beNegData[2]['e_id']]" /></strong>
                                            .{{ str_replace('"', '', $beNegData[2]['statement']) }}
                                        </li>
                                    </ul>
                                @endif

                                @if ($abNegDataCount >= 1)
                                    @php
                                        $countx++;
                                    @endphp
                                    <ul class="pos-data">
                                        <li>{{ $countx }}.</li>
                                        <li> Out of 768 District Capitals/Districts of India,
                                            <strong>{{ $cityInfo['city'] }}</strong> is the
                                            <strong>{{ numFormat($abNegData[0]['rank'], true) }}</strong>
                                            worst ranked
                                            in <strong> <x-elements.socure
                                                    :value="$vertical[$abNegData[0]['e_id']]" /></strong>.{{ str_replace('"', '', $abNegData[0]['statement']) }}
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
                                            India.{{ str_replace('"', '', $abNegData[1]['statement']) }}
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
                                            City out of 768
                                            City/Districts.{{ str_replace('"', '', $abNegData[2]['statement']) }}
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
                                                    class="fa fa-area-chart"></i> Positive Metrics:</button>
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
                                                        <th class="stk">City / District Data</th>
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
                                                            <td class="blurData" onclick="blurData()">
                                                                {{ rand(1125, 11254) }} </td>
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
                                                            <td class="blurData" onclick="blurData()">
                                                                {{ rand(1125, 11254) }} </td>
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
                                                        <th class="stk">City / District Data</th>
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
                                                            <td class="blurData" onclick="blurData()">
                                                                {{ rand(1125, 11254) }} </td>
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
                                                            <td class="blurData" onclick="blurData()">
                                                                {{ rand(1125, 11254) }} </td>
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
                        <p class="text-center live-heading ">{{ $cityInfo['city'] }} City / District Ranks</p>
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
                                                            @if ($wpp['work'][$work['id']])
                                                                <tr>
                                                                    <td> <small><x-elements.socure
                                                                                :value="$vertical[$work['id']]" /></small>
                                                                    </td>
                                                                    <td><small>{{ numFormat($wpp['work'][$work['id']], true) }}</small>
                                                                    </td>
                                                                </tr>
                                                            @endif
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
                                                            @if ($wpp['place'][$place['id']] != 0)
                                                                <tr>
                                                                    <td> <small><x-elements.socure
                                                                                :value="$vertical[$place['id']]" /></small>
                                                                    </td>
                                                                    <td><small>{{ numFormat($wpp['place'][$place['id']], true) }}</small>
                                                                    </td>
                                                                </tr>
                                                            @endif
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
                                                                @if ($wpp['people'][$people['id']] != 0)
                                                                    <tr>
                                                                        <td> <small><x-elements.socure
                                                                                    :value="$vertical[$people['id']]" /></small>
                                                                        </td>
                                                                        <td><small>{{ numFormat($wpp['people'][$people['id']], true) }}</small>
                                                                        </td>
                                                                    </tr>
                                                                @endif
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
                </div>
            </div>
        </section>
        <section class="mt-3 shadow p-2 ps-3 rounded" id="bottom-sec">
            <div class="row">
                <div class="col-sm-6 border-end">
                    <p class="text-center live-heading ">{{ $cityInfo['city'] }} Culture Highlights </p>
                    <div class="cultur-table">
                        <table class="table table">
                            <thead>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Culture Metrics</th>
                                    <th>Counts</th>
                                    <th>Name</th>

                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $cCount = 0;
                                @endphp
                                @if ($cData['CBIN1'] != 0)
                                    @php
                                        $cCount++;
                                    @endphp
                                    <tr>
                                        <td>
                                            <div class="cm-main-img"
                                                style="background-image:url({{ asset('assets/image/raw_img/main.png') }});">
                                                <p><x-elements.socure :value="$vertical['CBIN1']" :showSource="false" /></p>
                                            </div>
                                        </td>
                                        {{-- <td>{{ $cCount }}.</td> --}}
                                        <td><x-elements.socure :value="$vertical['CBIN1']" /></td>
                                        <td>{{ $cData['CBIN1'] }}</td>
                                        <td>{{ $cData['CBIN2'] }}</td>

                                    </tr>
                                @endif
                                @if ($cData['CBIN19'] != 0)
                                    @php
                                        $cCount++;
                                    @endphp
                                    <tr>
                                        <td>
                                            <div class="cm-main-img"
                                                style="background-image:url({{ asset('assets/image/raw_img/main.png') }});">
                                                <p><x-elements.socure :value="$vertical['CBIN18']" :showSource="false" /></p>
                                            </div>
                                        </td>
                                        {{-- <td>{{ $cCount }}.</td> --}}
                                        <td><x-elements.socure :value="$vertical['CBIN18']" /></td>
                                        <td>{{ $cData['CBIN19'] }}</td>
                                        <td>{{ $cData['CBIN18'] }}</td>

                                    </tr>
                                @endif

                                @if ($cData['CBIN21'] != 0)
                                    @php
                                        $cCount++;
                                    @endphp
                                    <tr>
                                        <td>
                                            <div class="cm-main-img"
                                                style="background-image:url({{ asset('assets/image/raw_img/main.png') }});">
                                                <p><x-elements.socure :value="$vertical['CBIN20']" :showSource="false" /></p>
                                            </div>
                                        </td>
                                        {{-- <td>{{ $cCount }}.</td> --}}
                                        <td><x-elements.socure :value="$vertical['CBIN20']" /></td>
                                        <td>{{ $cData['CBIN21'] }}</td>
                                        <td>{{ $cData['CBIN20'] }}</td>

                                    </tr>
                                @endif
                                @if ($cData['CBIN24'] != 0)
                                    @php
                                        $cCount++;
                                    @endphp
                                    <tr>
                                        <td>
                                            <div class="cm-main-img"
                                                style="background-image:url({{ asset('assets/image/raw_img/main.png') }});">
                                                <p><x-elements.socure :value="$vertical['CBIN22']" :showSource="false" /></p>
                                            </div>
                                        </td>
                                        {{-- <td>{{ $cCount }}.</td> --}}

                                        <td><x-elements.socure :value="$vertical['CBIN22']" /></td>
                                        <td>{{ $cData['CBIN24'] }}</td>
                                        <td>{{ $cData['CBIN22'] }}</td>
                                @endif
                                @if ($cData['CBIN26'] != 0)
                                    @php
                                        $cCount++;
                                    @endphp
                                    <tr>
                                        <td>
                                            <div class="cm-main-img"
                                                style="background-image:url({{ asset('assets/image/raw_img/main.png') }});">
                                                <p><x-elements.socure :value="$vertical['CBIN25']" :showSource="false" /></p>
                                            </div>
                                        </td>
                                        {{-- <td>{{ $cCount }}.</td> --}}
                                        <td><x-elements.socure :value="$vertical['CBIN25']" /></td>
                                        <td>{{ $cData['CBIN26'] }}</td>
                                        <td>{{ $cData['CBIN25'] }}</td>
                                    </tr>
                                @endif
                                @if ($cData['CBIN28'] != 0)
                                    @php
                                        $cCount++;
                                    @endphp
                                    <tr>
                                        <td>
                                            <div class="cm-main-img"
                                                style="background-image:url({{ asset('assets/image/raw_img/main.png') }});">
                                                <p><x-elements.socure :value="$vertical['CBIN27']" :showSource="false" /></p>
                                            </div>
                                        </td>
                                        {{-- <td>{{ $cCount }}.</td> --}}
                                        <td><x-elements.socure :value="$vertical['CBIN27']" /></td>
                                        <td>{{ $cData['CBIN28'] }}</td>
                                        <td>{{ $cData['CBIN27'] }}</td>
                                    </tr>
                                @endif
                                @if ($cData['CBIN30'] != 0)
                                    @php
                                        $cCount++;
                                    @endphp
                                    <tr>
                                        <td>
                                            <div class="cm-main-img"
                                                style="background-image:url({{ asset('assets/image/raw_img/main.png') }});">
                                                <p><x-elements.socure :value="$vertical['CBIN29']" :showSource="false" /></p>
                                            </div>
                                        </td>
                                        {{-- <td>{{ $cCount }}.</td> --}}
                                        <td><x-elements.socure :value="$vertical['CBIN29']" /></td>
                                        <td>{{ $cData['CBIN30'] }}</td>
                                        <td>{{ $cData['CBIN29'] }}</td>
                                    </tr>
                                @endif
                                @if ($cData['CBIN32'] != 0)
                                    @php
                                        $cCount++;
                                    @endphp
                                    <tr>
                                        <td>
                                            <div class="cm-main-img"
                                                style="background-image:url({{ asset('assets/image/raw_img/main.png') }});">
                                                <p><x-elements.socure :value="$vertical['CBIN31']" :showSource="false" /></p>
                                            </div>
                                        </td>
                                        {{-- <td>{{ $cCount }}.</td> --}}
                                        <td><x-elements.socure :value="$vertical['CBIN31']" /></td>
                                        <td>{{ $cData['CBIN32'] }}</td>
                                        <td>{{ $cData['CBIN31'] }}</td>
                                    </tr>
                                @endif
                                @if ($cData['CBIN33'] != 0)
                                    @php
                                        $cCount++;
                                    @endphp
                                    <tr>
                                        <td>
                                            <div class="cm-main-img"
                                                style="background-image:url({{ asset('assets/image/raw_img/main.png') }});">
                                                <p><x-elements.socure :value="$vertical['CBIN34']" :showSource="false" /></p>
                                            </div>
                                        </td>
                                        {{-- <td>{{ $cCount }}.</td> --}}
                                        <td><x-elements.socure :value="$vertical['CBIN34']" /></td>
                                        <td>{{ $cData['CBIN33'] }}</td>
                                        <td>{{ $cData['CBIN34'] }}</td>
                                    </tr>
                                @endif
                                @if ($cData['CBIN36'] != 0)
                                    @php
                                        $cCount++;
                                    @endphp
                                    <tr>
                                        <td>
                                            <div class="cm-main-img"
                                                style="background-image:url({{ asset('assets/image/raw_img/main.png') }});">
                                                <p><x-elements.socure :value="$vertical['CBIN35']" :showSource="false" /></p>
                                            </div>
                                        </td>
                                        {{-- <td>{{ $cCount }}.</td> --}}
                                        <td><x-elements.socure :value="$vertical['CBIN35']" /></td>
                                        <td>{{ $cData['CBIN36'] }}</td>
                                        <td>{{ $cData['CBIN35'] }}</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>

                        @if ($cData['CBIN37'] != 0)
                            <h5>Airports</h5>
                            <table class="table table-sm">
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>IATA Code</th>
                                    <th>City</th>
                                    <th>Distance</th>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="cm-main-img"
                                            style="background-image:url({{ asset('assets/image/raw_img/main.png') }});">
                                            <p><x-elements.socure :value="$vertical['CBIN37']" :showSource="false" /></p>
                                        </div>
                                    </td>
                                    <td>{{ $cData['CBIN37'] }}</td>
                                    <td>{{ $cData['CBIN38'] }}</td>
                                    <td>{{ $cData['CBIN39'] }}</td>
                                    <td>{{ $cData['CBIN40'] }}</td>
                                </tr>
                            </table>
                        @endif
                    </div>

                </div>
                <div class="col-sm-6">
                    <p class="text-center live-heading ">{{ $cityInfo['city'] }} Nature Highlights</p>
                    <div class="nature-table">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    {{-- <th>Sr.No</th> --}}
                                    <th></th>
                                    <th>Nature Metrics</th>
                                    <th>% of India</th>
                                    <th>Rank <small>Out of 768</small></th>
                                    <th>City / Districts <small>Data</small></th>

                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $countn = 0;
                                @endphp
                                @foreach ($ndata as $nvalue)
                                    @if ($nvalue['value'] != 0)
                                        @php
                                            $countn++;
                                        @endphp
                                        <tr>
                                            <td>
                                                <div class="cm-main-img"
                                                    style="background-image:url({{ asset('assets/image/raw_img/main.png') }});">
                                                    <p><x-elements.socure :value="$vertical[$nvalue['id']]" :showSource="false" /></p>
                                                </div>
                                            </td>
                                            {{-- <td>{{ $countn }}.</td> --}}
                                            <td><x-elements.socure :value="$vertical[$nvalue['id']]" /></td>
                                            <td>{{ $nvalue['pre'] }}%</td>
                                            <td>{{ numFormat($nvalue['rank'], true) }}</td>
                                            <td class="blurData" onclick="blurData()"> {{ rand(1125, 11254) }} </td>

                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <section class="image-modal">
            <div class="modal fade" id="imageModel" tabindex="-1" aria-labelledby="imageModelLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <div id="gallery" class="container-fluid">
                            <div class="banter-loader">
                                <div class="banter-loader__box bg-success"></div>
                                <div class="banter-loader__box bg-info"></div>
                                <div class="banter-loader__box bg-primary"></div>
                                <div class="banter-loader__box bg-dark"></div>
                                <div class="banter-loader__box bg-success"></div>
                                <div class="banter-loader__box bg-primary"></div>
                                <div class="banter-loader__box bg-warning"></div>
                                <div class="banter-loader__box bg-success"></div>
                                <div class="banter-loader__box bg-info"></div>
                            </div>
                            <div id="imageContainer">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary imgFooter"
                                data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <!-- Image that will be displayed in fullscreen -->
                    <img id="fullImage" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    @section('script')
        getImage('FA','10')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="{{ asset('assets/js/pop-slider.js') }}"></script>
    @endsection

</x-layout.base>
