<tr data-leader="{{ $leader->id }}">
    <td class="text-center text-bold">{{ $leader->name }}</td>
    <td class="text-center">{{ $leader->position }}</td>
    <td class="text-center">
        <a href="{{ route('vodstvo.edit', $leader->id) }}">Uredi</a>
        &nbsp;
        <button onclick="deleteLeader({{ $leader->id }});">Zbriši</button>
    </td>
</tr>