@php
    $vertical = vertical(['e_healths']);
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
            <h3 style="background-color: darkgrey; padding: 10px;border-radius: 10px;">Healths</h3>
        </div>
        <table class="table">
          <thead class="thead-dark">
            <tr style="background-color:rgb(208, 206, 206);">
              <th scope="col">#</th>
              <th scope="col">States/UT</th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['HLT1']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['HLT2']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['HLT3']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['HLT4']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['HLT5']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['HLT6']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['HLT7']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['HLT8']" /></strong></th>
            </tr>
          </thead>
          <tbody>
            @foreach($healths['data']['state'] as $data)
                <tr>
                  <td><b>{{$i++ == 28 ? $j=1 : ++$j }}</b></th>
                  <td scope="row"><b>{{$data['state']}}</b></th>
                  <td>{{$data['HLT1']}}</td>
                  <td>{{$data['HLT2']}}</td>
                  <td>{{$data['HLT3']}}</td>
                  <td>{{$data['HLT4']}}</td>
                  <td>{{$data['HLT5']}}</td>
                  <td>{{$data['HLT6']}}</td>
                  <td>{{$data['HLT7']}}</td>
                  <td>{{$data['HLT8']}}</td>
                </tr>
            @endforeach
            <tr>
                <td style="font-size:15px"><b>India</b></td>
                <td style="font-size:15px"><b>Total</b></td>
                <td><b>{{$healths['data']['india']['HLT1']}}</b></td>
                <td><b>{{$healths['data']['india']['HLT2']}}</b></td>
                <td><b>{{$healths['data']['india']['HLT3']}}</b></td>
                <td><b>{{$healths['data']['india']['HLT4']}}</b></td>
                <td><b>{{$healths['data']['india']['HLT5']}}</b></td>
                <td><b>{{$healths['data']['india']['HLT6']}}</b></td>
                <td><b>{{$healths['data']['india']['HLT7']}}</b></td>
                <td><b>{{$healths['data']['india']['HLT8']}}</b></td>
            </tr>
          </tbody>
        </table>
        </section>
    </main>
</x-layout.base>