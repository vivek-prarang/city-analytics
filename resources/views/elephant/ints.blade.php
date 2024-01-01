@php
    $vertical = vertical(['e_ints']);
    $table_name = realName('e_ints');
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
              <th scope="col"><strong> <x-elements.socure :value="$vertical['INT1']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['INT2']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['INT4']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['INT5']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['INT10']" /></strong></th>
            </tr>
          </thead>
          <tbody>
            @foreach($ints['data']['state'] as $key => $data)
                <tr>
                  <td><b>{{$i++ == 28 ? $j=1 : ++$j }}</b></th>
                  <td scope="row"><b>{{$key}}</b></th>
                  <td>{{$data['INT1']}}</td>
                  <td>{{$data['INT2']}}</td>
                  <td>{{$data['INT4']}}</td>
                  <td>{{$data['INT5']}}</td>
                  <td>{{$data['INT10']}}</td>
                </tr>
            @endforeach
            <tr>
                <td style="font-size:15px"><b>India</b></td>
                <td style="font-size:15px"><b>Total</b></td>
                <td><b>{{$ints['data']['india']['INT1']}}</b></td>
                <td><b>{{$ints['data']['india']['INT2']}}</b></td>
                <td><b>{{$ints['data']['india']['INT4']}}</b></td>
                <td><b>{{$ints['data']['india']['INT5']}}</b></td>
                <td><b>{{$ints['data']['india']['INT10']}}</b></td>
            </tr>
          </tbody>
        </table>
        </div>
        </section>
    </main>
</x-layout.base>