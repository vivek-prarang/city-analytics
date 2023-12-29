@php
    $vertical = vertical(['e_works']);
    $table_name = realName('e_works');
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
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WRK1']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WRK2']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WRK3']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WRK4']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WRK5']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WRK6']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WRK7']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WRK8']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WRK9']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['WRK10']" /></strong></th>
            </tr>
          </thead>
          <tbody>
            @foreach($works['data']['state'] as $key => $data)
                <tr>
                  <td><b>{{$i++ == 28 ? $j=1 : ++$j }}</b></th>
                  <td scope="row"><b>{{$key}}</b></th>
                  <td>{{$data['WRK1']}}</td>
                  <td>{{$data['WRK2']}}</td>
                  <td>{{$data['WRK3']}}</td>
                  <td>{{$data['WRK4']}}</td>
                  <td>{{$data['WRK5']}}</td>
                  <td>{{$data['WRK6']}}</td>
                  <td>{{$data['WRK7']}}</td>
                  <td>{{$data['WRK8']}}</td>
                  <td>{{$data['WRK9']}}</td>
                  <td>{{$data['WRK10']}}</td>
                </tr>
            @endforeach
            <tr>
                <td style="font-size:15px"><b>India</b></td>
                <td style="font-size:15px"><b>Total</b></td>
                <td><b>{{$works['data']['india']['WRK1']}}</b></td>
                <td><b>{{$works['data']['india']['WRK2']}}</b></td>
                <td><b>{{$works['data']['india']['WRK3']}}</b></td>
                <td><b>{{$works['data']['india']['WRK4']}}</b></td>
                <td><b>{{$works['data']['india']['WRK5']}}</b></td>
                <td><b>{{$works['data']['india']['WRK6']}}</b></td>
                <td><b>{{$works['data']['india']['WRK7']}}</b></td>
                <td><b>{{$works['data']['india']['WRK8']}}</b></td>
                <td><b>{{$works['data']['india']['WRK9']}}</b></td>
                <td><b>{{$works['data']['india']['WRK10']}}</b></td>
            </tr>
          </tbody>
        </table>
        </div>
        </section>
    </main>
</x-layout.base>