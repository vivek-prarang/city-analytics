@php
    $vertical = vertical(['e_wealths']);
    $table_name = realName('e_wealths');
    $verticals = vertical(['e_healths']);
    $i=0;
    $j=0;
@endphp
<x-layout.base>
    @section('css')
        <link rel="stylesheet" href="{{ asset('assets/css/static-page.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/pop-slider.css') }}">
    @endsection

    <main class="container">
        <section class="city-heading-section">
        <div class="text-center">
            <h3 style="background-color: darkgrey; padding: 10px;border-radius: 10px;">{{$table_name}}</h3>
        </div>
        <table class="table">
          <thead class="thead-dark">
            <tr style="background-color:rgb(208, 206, 206);">
              <th scope="col">#</th>
              <th scope="col">States/UT</th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WLT1']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WLT2']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WLT3']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WLT4']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WLT5']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WLT6']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WLT7']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WLT8']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WLT9']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WLT10']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WLT11']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WLT12']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WLT13']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WLT14']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WLT15']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WLT16']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WLT17']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WLT18']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WLT19']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WLT20']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WLT21']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WLT22']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WLT23']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WLT24']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WLT25']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WLT26']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WLT27']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WLT28']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WLT29']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WLT30']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WLT31']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WLT32']" /></strong></th>
            </tr>
          </thead>
          <tbody>
            @foreach($wealths['data']['state'] as $key => $data)
                <tr>
                  <td><b>{{$i++ == 28 ? $j=1 : ++$j }}</b></th>
                  <td scope="row"><b>{{$key}}</b></th>
                  <td>{{$data['WLT1']}}</td>
                  <td>{{$data['WLT2']}}</td>
                  <td>{{$data['WLT3']}}</td>
                  <td>{{$data['WLT4']}}</td>
                  <td>{{$data['WLT5']}}</td>
                  <td>{{$data['WLT6']}}</td>
                  <td>{{$data['WLT7']}}</td>
                  <td>{{$data['WLT8']}}</td>
                  <td>{{$data['WLT9']}}</td>
                  <td>{{$data['WLT10']}}</td>
                  <td>{{$data['WLT11']}}</td>
                  <td>{{$data['WLT12']}}</td>
                  <td>{{$data['WLT13']}}</td>
                  <td>{{$data['WLT14']}}</td>
                  <td>{{$data['WLT15']}}</td>
                  <td>{{$data['WLT16']}}</td>
                  <td>{{$data['WLT17']}}</td>
                  <td>{{$data['WLT18']}}</td>
                  <td>{{$data['WLT19']}}</td>
                  <td>{{$data['WLT20']}}</td>
                  <td>{{$data['WLT21']}}</td>
                  <td>{{$data['WLT22']}}</td>
                  <td>{{$data['WLT23']}}</td>
                  <td>{{$data['WLT24']}}</td>
                  <td>{{$data['WLT25']}}</td>
                  <td>{{$data['WLT26']}}</td>
                  <td>{{$data['WLT27']}}</td>
                  <td>{{$data['WLT28']}}</td>
                  <td>{{$data['WLT29']}}</td>
                  <td>{{$data['WLT30']}}</td>
                  <td>{{$data['WLT31']}}</td>
                  <td>{{$data['WLT32']}}</td>
                </tr>
            @endforeach
            <tr>
                <td style="font-size:15px"><b>India</b></td>
                <td style="font-size:15px"><b>Total</b></td>
                <td><b>{{$wealths['data']['india']['WLT1']}}</b></td>
                <td><b>{{$wealths['data']['india']['WLT2']}}</b></td>
                <td><b>{{$wealths['data']['india']['WLT3']}}</b></td>
                <td><b>{{$wealths['data']['india']['WLT4']}}</b></td>
                <td><b>{{$wealths['data']['india']['WLT5']}}</b></td>
                <td><b>{{$wealths['data']['india']['WLT6']}}</b></td>
                <td><b>{{$wealths['data']['india']['WLT7']}}</b></td>
                <td><b>{{$wealths['data']['india']['WLT8']}}</b></td>
                <td><b>{{$wealths['data']['india']['WLT9']}}</b></td>
                <td><b>{{$wealths['data']['india']['WLT10']}}</b></td>
                <td><b>{{$wealths['data']['india']['WLT11']}}</b></td>
                <td><b>{{$wealths['data']['india']['WLT12']}}</b></td>
                <td><b>{{$wealths['data']['india']['WLT13']}}</b></td>
                <td><b>{{$wealths['data']['india']['WLT14']}}</b></td>
                <td><b>{{$wealths['data']['india']['WLT15']}}</b></td>
                <td><b>{{$wealths['data']['india']['WLT16']}}</b></td>
                <td><b>{{$wealths['data']['india']['WLT17']}}</b></td>
                <td><b>{{$wealths['data']['india']['WLT18']}}</b></td>
                <td><b>{{$wealths['data']['india']['WLT19']}}</b></td>
                <td><b>{{$wealths['data']['india']['WLT20']}}</b></td>
                <td><b>{{$wealths['data']['india']['WLT21']}}</b></td>
                <td><b>{{$wealths['data']['india']['WLT22']}}</b></td>
                <td><b>{{$wealths['data']['india']['WLT23']}}</b></td>
                <td><b>{{$wealths['data']['india']['WLT24']}}</b></td>
                <td><b>{{$wealths['data']['india']['WLT25']}}</b></td>
                <td><b>{{$wealths['data']['india']['WLT26']}}</b></td>
                <td><b>{{$wealths['data']['india']['WLT27']}}</b></td>
                <td><b>{{$wealths['data']['india']['WLT28']}}</b></td>
                <td><b>{{$wealths['data']['india']['WLT29']}}</b></td>
                <td><b>{{$wealths['data']['india']['WLT30']}}</b></td>
                <td><b>{{$wealths['data']['india']['WLT31']}}</b></td>
                <td><b>{{$wealths['data']['india']['WLT32']}}</b></td>
            </tr>
          </tbody>
        </table>
        </section>
    </main>
</x-layout.base>