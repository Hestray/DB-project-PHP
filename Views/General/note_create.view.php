<!DOCTYPE html>
<html lang="en">
    <head>

    </head>
    <body>
        <h1>Create a note</h1>
        <form action="/notes" method="POST">
            <label for="body">Your note</label>
            <textarea id="body" name="body"></textarea>
            <div>
                <button type="submit">Post note</button>
            </div>
        </form>
    </body>
</html>