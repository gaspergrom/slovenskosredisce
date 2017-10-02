<tr data-id="{{ $event->id }}">
    <td class="text-center text-bold">
        {{ $event->excerpt }}
    </td>
    <td class="text-center">
        <a href="{{ route('poslovni.edit', $event->id) }}">Uredi</a>
        &nbsp;
        <button onClick="deleteEvent({{ $event->id }});">Zbriši</button>
    </td>
</tr>