<tr data-post="{{ $post->id }}">
    <td class="text-center">{{ $post->title }}</td>
    <td class="text-center">{{ $post->created_at->format('d. m. Y H:i') }}</td>
    <td class="text-center">
        <a href="{{ route('novice.edit', $post->id) }}">Uredi</a>
        &nbsp;
        <button onclick="deletePost({{ $post->id }});">Zbriši</button>
    </td>
</tr>