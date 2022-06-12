<h1>Post</h1>

<a href="posts/create" style="font-size:20px; color:blue; text-decoration:none">Create</a>

<ul>
    @foreach($posts as $post)
        <a href="posts/show/{{$post->id}}"><li>{{ $post->title }}</li></a>
        <a href="posts/edit/{{ $post->id }}" style="color:green; text-decoration:none">Edit</a>
        <a href="posts/delete/{{ $post->id }}" style="color:red; text-decoration:none">Delete</a>
        <br><br>
    @endforeach

</ul>