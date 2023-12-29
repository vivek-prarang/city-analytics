@php
    $vertical = vertical(['c_data']);
    $table_name = realName('c_data');
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
              <th scope="col"><strong> <x-elements.socure :value="$vertical['CBIN1']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['CBIN19']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['CBIN21']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['CBIN24']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['CBIN26']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['CBIN28']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['CBIN30']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['CBIN32']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['CBIN33']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['CBIN36']" /></strong></th>
            </tr>
          </thead>
          <tbody>
            @foreach($culture['data']['state'] as $key => $data)
                <tr>
                  <td><b>{{$i++ == 28 ? $j=1 : ++$j }}</b></th>
                  <td scope="row"><b>{{$key}}</b></th>
                  <td>{{$data['CBIN1']}}</td>
                  <td>{{$data['CBIN19']}}</td>
                  <td>{{$data['CBIN21']}}</td>
                  <td>{{$data['CBIN24']}}</td>
                  <td>{{$data['CBIN26']}}</td>
                  <td>{{$data['CBIN28']}}</td>
                  <td>{{$data['CBIN30']}}</td>
                  <td>{{$data['CBIN32']}}</td>
                  <td>{{$data['CBIN33']}}</td>
                  <td>{{$data['CBIN36']}}</td>
                </tr>
            @endforeach
            <tr>
                <td style="font-size:15px"><b>India</b></td>
                <td style="font-size:15px"><b>Total</b></td>
                <td><b>{{$culture['data']['india']['CBIN1']}}</b></td>
                <td><b>{{$culture['data']['india']['CBIN19']}}</b></td>
                <td><b>{{$culture['data']['india']['CBIN21']}}</b></td>
                <td><b>{{$culture['data']['india']['CBIN24']}}</b></td>
                <td><b>{{$culture['data']['india']['CBIN26']}}</b></td>
                <td><b>{{$culture['data']['india']['CBIN28']}}</b></td>
                <td><b>{{$culture['data']['india']['CBIN30']}}</b></td>
                <td><b>{{$culture['data']['india']['CBIN32']}}</b></td>
                <td><b>{{$culture['data']['india']['CBIN33']}}</b></td>
                <td><b>{{$culture['data']['india']['CBIN36']}}</b></td>
            </tr>
          </tbody>
        </table>
        </div>
        </section>
    </main>
</x-layout.base>