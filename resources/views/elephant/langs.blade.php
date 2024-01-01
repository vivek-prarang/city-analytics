@php
    $vertical = vertical(['e_langs']);
    $table_name = realName('e_langs');
    // dd($vertical);
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
              @foreach ($vertical as $key_v => $value)
                @if($key_v != 'LAN1')
                    <th scope="col"><strong> <x-elements.socure :value="$vertical[$key_v]" /></strong></th>
                @endif
              @endforeach
            </tr>
          </thead>
          <tbody>
            @foreach($langs['data']['state'] as $key => $data)
                <tr>
                  <td><b>{{$i++ == 28 ? $j=1 : ++$j }}</b></th>
                  <td scope="row"><b>{{$key}}</b></th>
                  @foreach ($vertical as $key_v => $value)
                    @if($key_v != 'LAN1')
                        <td>{{ $data[$key_v] }}</td>
                    @endif
                  @endforeach
                </tr>
            @endforeach
            <tr>
                <td style="font-size:15px"><b>India</b></td>
                <td style="font-size:15px"><b>Total</b></td>
                @foreach ($vertical as $key_v => $value)
                  @if($key_v != 'LAN1')
                      <td><b>{{$langs['data']['india'][$key_v]}}</b></td>
                  @endif
                @endforeach
            </tr>
          </tbody>
        </table>
        </div>
        </section>
    </main>
</x-layout.base>