@php
    $vertical = vertical(['e_demos']);
    $table_name = realName('e_demos');
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
              <th scope="col"><strong> <x-elements.socure :value="$vertical['DEM1']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['DEM2']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['DEM3']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['DEM6']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['DEM7']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['DEM8']" /></strong></th>
            </tr>
          </thead>
          <tbody>
            @foreach($demos['data']['state'] as $key => $data)
                <tr>
                  <td><b>{{$i++ == 28 ? $j=1 : ++$j }}</b></th>
                  <td scope="row"><b>{{$key}}</b></th>
                  <td>{{$data['DEM1']}}</td>
                  <td>{{$data['DEM2']}}</td>
                  <td>{{$data['DEM3']}}</td>
                  <td>{{$data['DEM6']}}</td>
                  <td>{{$data['DEM7']}}</td>
                  <td>{{$data['DEM8']}}</td>
                </tr>
            @endforeach
            <tr>
                <td style="font-size:15px"><b>India</b></td>
                <td style="font-size:15px"><b>Total</b></td>
                <td><b>{{$demos['data']['india']['DEM1']}}</b></td>
                <td><b>{{$demos['data']['india']['DEM2']}}</b></td>
                <td><b>{{$demos['data']['india']['DEM3']}}</b></td>
                <td><b>{{$demos['data']['india']['DEM6']}}</b></td>
                <td><b>{{$demos['data']['india']['DEM7']}}</b></td>
                <td><b>{{$demos['data']['india']['DEM8']}}</b></td>
            </tr>
          </tbody>
        </table>
        </div>
        </section>
    </main>
</x-layout.base>