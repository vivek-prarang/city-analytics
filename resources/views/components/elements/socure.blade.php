@if ($showTitle)
    {{ $value->name }}{{ $addTitle }}
@endif
@if ($showSource)
    &nbsp;<i class="fa fa-info-circle shadow text-success rounded-circle" data-bs-toggle="popover"
        data-bs-content="{{ $value->source }}" data-bs-trigger="hover focus"
        @if ($showTitle) title='{{ $value->name }} {{ $addTitle }}' @endif style="cursor: help;">
    </i>
@endif
