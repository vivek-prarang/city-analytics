@php
    $vertical = vertical(['e_govs']);
    $table_name = realName('e_govs');
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
              <th scope="col"><strong> <x-elements.socure :value="$vertical['GOV1']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['GOV2']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['GOV3']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['GOV4']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['GOV5']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['GOV6']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['GOV7']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['GOV8']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['GOV9']" /></strong></th>
            </tr>
          </thead>
          <tbody>
            @foreach($govs['data']['state'] as $key => $data)
                <tr>
                  <td><b>{{$i++ == 28 ? $j=1 : ++$j }}</b></th>
                  <td scope="row"><b>{{$key}}</b></th>
                  <td>{{$data['GOV1']}}</td>
                  <td>{{$data['GOV2']}}</td>
                  <td>{{$data['GOV3']}}</td>
                  <td>{{$data['GOV4']}}</td>
                  <td>{{$data['GOV5']}}</td>
                  <td>{{$data['GOV6']}}</td>
                  <td>{{$data['GOV7']}}</td>
                  <td>{{$data['GOV8']}}</td>
                  <td>{{$data['GOV9']}}</td>
                </tr>
            @endforeach
            <tr>
                <td style="font-size:15px"><b>India</b></td>
                <td style="font-size:15px"><b>Total</b></td>
                <td><b>{{$govs['data']['india']['GOV1']}}</b></td>
                <td><b>{{$govs['data']['india']['GOV2']}}</b></td>
                <td><b>{{$govs['data']['india']['GOV3']}}</b></td>
                <td><b>{{$govs['data']['india']['GOV4']}}</b></td>
                <td><b>{{$govs['data']['india']['GOV5']}}</b></td>
                <td><b>{{$govs['data']['india']['GOV6']}}</b></td>
                <td><b>{{$govs['data']['india']['GOV7']}}</b></td>
                <td><b>{{$govs['data']['india']['GOV8']}}</b></td>
                <td><b>{{$govs['data']['india']['GOV9']}}</b></td>
            </tr>
          </tbody>
        </table>
        </section>
    </main>
</x-layout.base>