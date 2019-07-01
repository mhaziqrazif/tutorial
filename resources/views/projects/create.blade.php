<!Doctype html>
<html lang="en">
    <head>
    </head>
        <body>

        <form method="POST" action="/projects">
        {{ csrf_field() }}
            <div>
            <input type="text" name="title" placeholder="Title">
            </div>

        <textarea name="description" placeholder="description"></textarea>
            </div>

            <div>
            <button type="submit">Create Project</button>
    </div>
</form>
</body>
</html>