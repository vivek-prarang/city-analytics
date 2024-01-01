@php
    $vertical = vertical(['e_urbs']);
    $table_name = realName('e_urbs');
    $verticals = vertical(['e_healths']);
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
              <th scope="col"><strong> <x-elements.socure :value="$vertical['URB1']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['URB2']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['URB3']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['URB5']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['URB6']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['URB7']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['URB8']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['URB9']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['URB10']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['URB11']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['URB12']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['URB13']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['URB14']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['URB15']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['URB16']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['URB17']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['URB18']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['URB19']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['URB20']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['URB21']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['URB22']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['URB23']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['URB24']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['URB25']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['URB26']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['URB27']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['URB28']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['URB29']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['URB30']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['URB31']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['URB33']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['URB36']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['URB39']" /></strong></th>
              <th scope="col"><strong> <x-elements.socure :value="$vertical['URB40']" /></strong></th>
            </tr>
          </thead>
          <tbody>
            @foreach($urbs['data']['state'] as $key => $data)
                <tr>
                  <td><b>{{$i++ == 28 ? $j=1 : ++$j }}</b></th>
                  <td scope="row"><b>{{$key}}</b></th>
                  <td>{{$data['URB1']}}</td>
                  <td>{{$data['URB2']}}</td>
                  <td>{{$data['URB3']}}</td>
                  <td>{{$data['URB5']}}</td>
                  <td>{{$data['URB6']}}</td>
                  <td>{{$data['URB7']}}</td>
                  <td>{{$data['URB8']}}</td>
                  <td>{{$data['URB9']}}</td>
                  <td>{{$data['URB10']}}</td>
                  <td>{{$data['URB11']}}</td>
                  <td>{{$data['URB12']}}</td>
                  <td>{{$data['URB13']}}</td>
                  <td>{{$data['URB14']}}</td>
                  <td>{{$data['URB15']}}</td>
                  <td>{{$data['URB16']}}</td>
                  <td>{{$data['URB17']}}</td>
                  <td>{{$data['URB18']}}</td>
                  <td>{{$data['URB19']}}</td>
                  <td>{{$data['URB20']}}</td>
                  <td>{{$data['URB21']}}</td>
                  <td>{{$data['URB22']}}</td>
                  <td>{{$data['URB23']}}</td>
                  <td>{{$data['URB24']}}</td>
                  <td>{{$data['URB25']}}</td>
                  <td>{{$data['URB26']}}</td>
                  <td>{{$data['URB27']}}</td>
                  <td>{{$data['URB28']}}</td>
                  <td>{{$data['URB29']}}</td>
                  <td>{{$data['URB30']}}</td>
                  <td>{{$data['URB31']}}</td>
                  <td>{{$data['URB33']}}</td>
                  <td>{{$data['URB36']}}</td>
                  <td>{{$data['URB39']}}</td>
                  <td>{{$data['URB40']}}</td>
                </tr>
            @endforeach
            <tr> 
                <td style="font-size:15px"><b>India</b></td>
                <td style="font-size:15px"><b>Total</b></td>
                <td><b>{{$urbs['data']['india']['URB1']}}</b></td>
                <td><b>{{$urbs['data']['india']['URB2']}}</b></td>
                <td><b>{{$urbs['data']['india']['URB3']}}</b></td>
                <td><b>{{$urbs['data']['india']['URB5']}}</b></td>
                <td><b>{{$urbs['data']['india']['URB6']}}</b></td>
                <td><b>{{$urbs['data']['india']['URB7']}}</b></td>
                <td><b>{{$urbs['data']['india']['URB8']}}</b></td>
                <td><b>{{$urbs['data']['india']['URB9']}}</b></td>
                <td><b>{{$urbs['data']['india']['URB10']}}</b></td>
                <td><b>{{$urbs['data']['india']['URB11']}}</b></td>
                <td><b>{{$urbs['data']['india']['URB12']}}</b></td>
                <td><b>{{$urbs['data']['india']['URB13']}}</b></td>
                <td><b>{{$urbs['data']['india']['URB14']}}</b></td>
                <td><b>{{$urbs['data']['india']['URB15']}}</b></td>
                <td><b>{{$urbs['data']['india']['URB16']}}</b></td>
                <td><b>{{$urbs['data']['india']['URB17']}}</b></td>
                <td><b>{{$urbs['data']['india']['URB18']}}</b></td>
                <td><b>{{$urbs['data']['india']['URB19']}}</b></td>
                <td><b>{{$urbs['data']['india']['URB20']}}</b></td>
                <td><b>{{$urbs['data']['india']['URB21']}}</b></td>
                <td><b>{{$urbs['data']['india']['URB22']}}</b></td>
                <td><b>{{$urbs['data']['india']['URB23']}}</b></td>
                <td><b>{{$urbs['data']['india']['URB24']}}</b></td>
                <td><b>{{$urbs['data']['india']['URB25']}}</b></td>
                <td><b>{{$urbs['data']['india']['URB26']}}</b></td>
                <td><b>{{$urbs['data']['india']['URB27']}}</b></td>
                <td><b>{{$urbs['data']['india']['URB28']}}</b></td>
                <td><b>{{$urbs['data']['india']['URB29']}}</b></td>
                <td><b>{{$urbs['data']['india']['URB30']}}</b></td>
                <td><b>{{$urbs['data']['india']['URB31']}}</b></td>
                <td><b>{{$urbs['data']['india']['URB33']}}</b></td>
                <td><b>{{$urbs['data']['india']['URB36']}}</b></td>
                <td><b>{{$urbs['data']['india']['URB39']}}</b></td>
                <td><b>{{$urbs['data']['india']['URB40']}}</b></td>
            </tr>
          </tbody>
        </table>
        </div>
        </section>
    </main>
</x-layout.base>