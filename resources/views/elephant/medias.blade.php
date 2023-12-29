@php
    $vertical = vertical(['e_medias']);
    $table_name = realName('e_medias');
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
              <th scope="col"><strong> <x-elements.socure :value="$vertical['MED1']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['MED2']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['MED3']" /></strong></th>
            </tr>
          </thead>
          <tbody>
            @foreach($medias['data']['state'] as $key => $data)
                <tr>
                  <td><b>{{$i++ == 28 ? $j=1 : ++$j }}</b></th>
                  <td scope="row"><b>{{$key}}</b></th>
                  <td>{{$data['MED1']}}</td>
                  <td>{{$data['MED2']}}</td>
                  <td>{{$data['MED3']}}</td>
                </tr>
            @endforeach
            <tr>
                <td style="font-size:15px"><b>India</b></td>
                <td style="font-size:15px"><b>Total</b></td>
                <td><b>{{$medias['data']['india']['MED1']}}</b></td>
                <td><b>{{$medias['data']['india']['MED2']}}</b></td>
                <td><b>{{$medias['data']['india']['MED3']}}</b></td>
            </tr>
          </tbody>
        </table>
        </div>
        </section>
    </main>
</x-layout.base>