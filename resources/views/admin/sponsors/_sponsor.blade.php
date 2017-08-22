<tr data-sponsor="{{ $sponsor->id }}">
    <td class="text-center">{{ $sponsor->name }}</td>
    <td class="text-center">
        <a href="{{ route('sponzorji.edit', $sponsor->id) }}">Uredi</a>
        &nbsp;
        <button onclick="deleteSponsor({{ $sponsor->id }});">Zbriši</button>
    </td>
</tr>