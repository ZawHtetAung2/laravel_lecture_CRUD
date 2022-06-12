<h3>Creating a Post</h3>

<form action="/posts/store" method="POST">
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" placeholder="Write title"><br>

    <label for="body">Body</label>
    <textarea name="body" name="body" cols="30" rows="10" placeholder="Write body text"></textarea>
    <br><br>
    
    <button type="submit">Create</button>
</form>