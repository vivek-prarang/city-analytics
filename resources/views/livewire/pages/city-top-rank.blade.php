@if ($data)
    @foreach ($data as $item)
        <p>{{ $item }}</p>
    @endforeach
@endif
