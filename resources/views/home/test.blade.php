<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Page Title</title>
    </head>
<body>
    <h1>This is a test page</h1>
    <p>This is a paragraph.</p>

    <form action='/save' method="POST">
        @csrf
        <label for="fname">First Name:</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Last Name:</label><br>
        <input type="text" id="lname" name="lname"><br>
        <input type="submit" value="Save">
</body>
</html>
