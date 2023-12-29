@php
    $vertical = vertical(['n_data']);
    $table_name = realName('n_data');
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
        <div class="overflow-auto">
        <table class="table">
          <thead class="thead-dark">
            <tr style="background-color:rgb(208, 206, 206);">
              <th scope="col">#</th>
              <th scope="col">States/UT</th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['NDT1']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['NDT2']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['NDT3']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['NDT4']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['NDT5']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['NDT6']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['NDT7']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['NDT8']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['NDT9']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['NDT10']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['NDT11']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['NDT12']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['NDT13']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['NDT14']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['NDT15']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['NDT16']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['NDT17']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['NDT18']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['NDT19']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['NDT20']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['NDT21']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['NDT22']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['NDT23']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['NDT24']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['NDT25']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['NDT26']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['NDT27']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['NDT28']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['NDT29']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['NDT30']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['NDT31']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['NDT32']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['NDT33']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['NDT34']" /></strong></th>
            </tr>
          </thead>
          <tbody>
            @foreach($nature['data']['state'] as $key => $data)
                <tr>
                  <td><b>{{$i++ == 28 ? $j=1 : ++$j }}</b></th>
                  <td scope="row"><b>{{$key}}</b></th>
                  <td>{{$data['NDT1']}}</td>
                  <td>{{$data['NDT2']}}</td>
                  <td>{{$data['NDT3']}}</td>
                  <td>{{$data['NDT4']}}</td>
                  <td>{{$data['NDT5']}}</td>
                  <td>{{$data['NDT6']}}</td>
                  <td>{{$data['NDT7']}}</td>
                  <td>{{$data['NDT8']}}</td>
                  <td>{{$data['NDT9']}}</td>
                  <td>{{$data['NDT10']}}</td>
                  <td>{{$data['NDT11']}}</td>
                  <td>{{$data['NDT12']}}</td>
                  <td>{{$data['NDT13']}}</td>
                  <td>{{$data['NDT14']}}</td>
                  <td>{{$data['NDT15']}}</td>
                  <td>{{$data['NDT16']}}</td>
                  <td>{{$data['NDT17']}}</td>
                  <td>{{$data['NDT18']}}</td>
                  <td>{{$data['NDT19']}}</td>
                  <td>{{$data['NDT20']}}</td>
                  <td>{{$data['NDT21']}}</td>
                  <td>{{$data['NDT22']}}</td>
                  <td>{{$data['NDT23']}}</td>
                  <td>{{$data['NDT24']}}</td>
                  <td>{{$data['NDT25']}}</td>
                  <td>{{$data['NDT26']}}</td>
                  <td>{{$data['NDT27']}}</td>
                  <td>{{$data['NDT28']}}</td>
                  <td>{{$data['NDT29']}}</td>
                  <td>{{$data['NDT30']}}</td>
                  <td>{{$data['NDT31']}}</td>
                  <td>{{$data['NDT32']}}</td>
                  <td>{{$data['NDT33']}}</td>
                  <td>{{$data['NDT34']}}</td>
                </tr>
            @endforeach
            <tr>
                <td style="font-size:15px"><b>India</b></td>
                <td style="font-size:15px"><b>Total</b></td>
                <td><b>{{$nature['data']['india']['NDT1']}}</b></td>
                <td><b>{{$nature['data']['india']['NDT2']}}</b></td>
                <td><b>{{$nature['data']['india']['NDT3']}}</b></td>
                <td><b>{{$nature['data']['india']['NDT4']}}</b></td>
                <td><b>{{$nature['data']['india']['NDT5']}}</b></td>
                <td><b>{{$nature['data']['india']['NDT6']}}</b></td>
                <td><b>{{$nature['data']['india']['NDT7']}}</b></td>
                <td><b>{{$nature['data']['india']['NDT8']}}</b></td>
                <td><b>{{$nature['data']['india']['NDT9']}}</b></td>
                <td><b>{{$nature['data']['india']['NDT10']}}</b></td>
                <td><b>{{$nature['data']['india']['NDT11']}}</b></td>
                <td><b>{{$nature['data']['india']['NDT12']}}</b></td>
                <td><b>{{$nature['data']['india']['NDT13']}}</b></td>
                <td><b>{{$nature['data']['india']['NDT14']}}</b></td>
                <td><b>{{$nature['data']['india']['NDT15']}}</b></td>
                <td><b>{{$nature['data']['india']['NDT16']}}</b></td>
                <td><b>{{$nature['data']['india']['NDT17']}}</b></td>
                <td><b>{{$nature['data']['india']['NDT18']}}</b></td>
                <td><b>{{$nature['data']['india']['NDT19']}}</b></td>
                <td><b>{{$nature['data']['india']['NDT20']}}</b></td>
                <td><b>{{$nature['data']['india']['NDT21']}}</b></td>
                <td><b>{{$nature['data']['india']['NDT22']}}</b></td>
                <td><b>{{$nature['data']['india']['NDT23']}}</b></td>
                <td><b>{{$nature['data']['india']['NDT24']}}</b></td>
                <td><b>{{$nature['data']['india']['NDT25']}}</b></td>
                <td><b>{{$nature['data']['india']['NDT26']}}</b></td>
                <td><b>{{$nature['data']['india']['NDT27']}}</b></td>
                <td><b>{{$nature['data']['india']['NDT28']}}</b></td>
                <td><b>{{$nature['data']['india']['NDT29']}}</b></td>
                <td><b>{{$nature['data']['india']['NDT30']}}</b></td>
                <td><b>{{$nature['data']['india']['NDT31']}}</b></td>
                <td><b>{{$nature['data']['india']['NDT32']}}</b></td>
                <td><b>{{$nature['data']['india']['NDT33']}}</b></td>
                <td><b>{{$nature['data']['india']['NDT34']}}</b></td>
            </tr>
          </tbody>
        </table>
        </div>
        </section>
    </main>
</x-layout.base>