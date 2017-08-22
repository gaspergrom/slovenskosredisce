<tr data-id="{{ $event->id }}">
    <td>
        {{ $event->name }}
    </td>
    <td>
        {{ $event->begins_at->format('d. m. Y H:i') }}
    </td>
    <td>
        <a href="{{ route('dogodki.edit', $event->id) }}">Uredi</a>
        &nbsp;
        <a onClick="deleteEvent({{ $event->id }});">Zbriši</a>
    </td>
</tr>