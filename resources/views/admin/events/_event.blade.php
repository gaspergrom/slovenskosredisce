<tr data-id="{{ $event->id }}">
    <td class="text-center text-bold">
        {{ $event->name }}
    </td>
    <td class="text-center">
        {{ $event->begins_at->format('d. m. Y H:i') }}
    </td>
    <td class="text-center">
        <a href="{{ route('dogodki.edit', $event->id) }}">Uredi</a>
        &nbsp;
        <button onClick="deleteEvent({{ $event->id }});">Zbriši</button>
    </td>
</tr>