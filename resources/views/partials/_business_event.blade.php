<tr>
    @if($loop->first)
        <td class="text-center text-bold" rowspan="{{ count($event_group) }}">
            {{ $event->begins_at->format('d. m. Y') }}
            ({{ $event->begins_at->formatLocalized('%A') }})
        </td>
    @endif
    <td class="text-center text-bold">{{ $event->hour }}</td>
    <td class="text-center">{!! $event->excerpt !!}</td>
</tr>