<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Body</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $post->title }}</td>
            <td>{{ $post->body }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
