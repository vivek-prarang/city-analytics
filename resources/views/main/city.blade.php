<x-layout.base>
    <section class="container">
        <h2 class="bg-warning p-2 rounded text-center">
            {{ ucwords(str_replace('-', ' ', $cityInfo['city'])) }}
        </h2>
        <br>
        <ul>
            <li>State: {{ $cityInfo['MSTR1'] }}</li>
        </ul>
    </section>
</x-layout.base>
