@php
    $vertical = vertical(['e_langs']);
@endphp
<x-layout.base>
    <main class="container">
        <section class="city-heading-section">
            <h2 class="city-heading text-center">
                {{ $cityInfo['city'] }} - City/District Knowledge Webs.
            </h2>
        </section>
        <section class="static-top-section mt-3">
            <div class="row">
                <div class="col-sm-4">
                    <div class="language p-2 rounded shadow  rounded">
                        <p class="text-center language-heading">languages</p>

                        <ul>
                            @forelse ($top3Languages as $key=> $lang)
                                <li class="lang-li">
                                    {{ $loop->iteration }}. <x-elements.socure :value="$vertical[$key]" />
                                </li>


                            @empty
                                No Data Found!
                            @endforelse

                        </ul>

                        <p class="lang-num">Number Of Languages spoken by more then 30K Population :
                            {{ $cityData['no_of_30k'] }}</p>

                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="basic-d p-2 shadow  rounded">
                        <p class="text-center basic-d-headig">Basic Details</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-layout.base>
