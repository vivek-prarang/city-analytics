@php
    $vertical = vertical(['e_healths']);
@endphp

<x-layout.base>
    @section('css')
        <link rel="stylesheet" href="{{ asset('assets/css/static-page.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/pop-slider.css') }}">
    @endsection

    <main class="container">
        <section class="city-heading-section">
        <table class="table">
          <thead class="thead-dark">
            <tr style="background-color:rgb(208, 206, 206);">
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
            @foreach($healths['data'] as $data)
                <tr>
                  <th scope="row">{{$data['state']}}</th>
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
          </tbody>
        </table>
        </section>
    </main>
</x-layout.base>