@php
    $vertical = vertical(['e_edus']);
    $table_name = realName('e_edus');
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
              <th scope="col"><strong> <x-elements.socure :value="$vertical['EDU1']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['EDU2']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['EDU3']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['EDU4']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['EDU5']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['EDU6']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['EDU7']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['EDU8']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['EDU9']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['EDU10']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['EDU11']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['EDU12']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['EDU13']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['EDU14']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['EDU15']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['EDU16']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['EDU17']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['EDU18']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['EDU19']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['EDU20']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['EDU21']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['EDU22']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['EDU23']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['EDU24']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['EDU25']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['EDU26']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['EDU27']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['EDU28']" /></strong></th>
            </tr>
          </thead>
          <tbody>
            @foreach($edus['data']['state'] as $key => $data)
                <tr>
                  <td><b>{{$i++ == 28 ? $j=1 : ++$j }}</b></th>
                  <td scope="row"><b>{{$key}}</b></th>
                  <td>{{$data['EDU1']}}</td>
                  <td>{{$data['EDU2']}}</td>
                  <td>{{$data['EDU3']}}</td>
                  <td>{{$data['EDU4']}}</td>
                  <td>{{$data['EDU5']}}</td>
                  <td>{{$data['EDU6']}}</td>
                  <td>{{$data['EDU7']}}</td>
                  <td>{{$data['EDU8']}}</td>
                  <td>{{$data['EDU9']}}</td>
                  <td>{{$data['EDU10']}}</td>
                  <td>{{$data['EDU11']}}</td>
                  <td>{{$data['EDU12']}}</td>
                  <td>{{$data['EDU13']}}</td>
                  <td>{{$data['EDU14']}}</td>
                  <td>{{$data['EDU15']}}</td>
                  <td>{{$data['EDU16']}}</td>
                  <td>{{$data['EDU17']}}</td>
                  <td>{{$data['EDU18']}}</td>
                  <td>{{$data['EDU19']}}</td>
                  <td>{{$data['EDU20']}}</td>
                  <td>{{$data['EDU21']}}</td>
                  <td>{{$data['EDU22']}}</td>
                  <td>{{$data['EDU23']}}</td>
                  <td>{{$data['EDU24']}}</td>
                  <td>{{$data['EDU25']}}</td>
                  <td>{{$data['EDU26']}}</td>
                  <td>{{$data['EDU27']}}</td>
                  <td>{{$data['EDU28']}}</td>
                </tr>
            @endforeach
            <tr>
                <td style="font-size:15px"><b>India</b></td>
                <td style="font-size:15px"><b>Total</b></td>
                <td><b>{{$edus['data']['india']['EDU1']}}</b></td>
                <td><b>{{$edus['data']['india']['EDU2']}}</b></td>
                <td><b>{{$edus['data']['india']['EDU3']}}</b></td>
                <td><b>{{$edus['data']['india']['EDU4']}}</b></td>
                <td><b>{{$edus['data']['india']['EDU5']}}</b></td>
                <td><b>{{$edus['data']['india']['EDU6']}}</b></td>
                <td><b>{{$edus['data']['india']['EDU7']}}</b></td>
                <td><b>{{$edus['data']['india']['EDU8']}}</b></td>
                <td><b>{{$edus['data']['india']['EDU9']}}</b></td>
                <td><b>{{$edus['data']['india']['EDU10']}}</b></td>
                <td><b>{{$edus['data']['india']['EDU11']}}</b></td>
                <td><b>{{$edus['data']['india']['EDU12']}}</b></td>
                <td><b>{{$edus['data']['india']['EDU13']}}</b></td>
                <td><b>{{$edus['data']['india']['EDU14']}}</b></td>
                <td><b>{{$edus['data']['india']['EDU15']}}</b></td>
                <td><b>{{$edus['data']['india']['EDU16']}}</b></td>
                <td><b>{{$edus['data']['india']['EDU17']}}</b></td>
                <td><b>{{$edus['data']['india']['EDU18']}}</b></td>
                <td><b>{{$edus['data']['india']['EDU19']}}</b></td>
                <td><b>{{$edus['data']['india']['EDU20']}}</b></td>
                <td><b>{{$edus['data']['india']['EDU21']}}</b></td>
                <td><b>{{$edus['data']['india']['EDU22']}}</b></td>
                <td><b>{{$edus['data']['india']['EDU23']}}</b></td>
                <td><b>{{$edus['data']['india']['EDU24']}}</b></td>
                <td><b>{{$edus['data']['india']['EDU25']}}</b></td>
                <td><b>{{$edus['data']['india']['EDU26']}}</b></td>
                <td><b>{{$edus['data']['india']['EDU27']}}</b></td>
                <td><b>{{$edus['data']['india']['EDU28']}}</b></td>
            </tr>
          </tbody>
        </table>
        </div>
        </section>
    </main>
</x-layout.base>