<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
</head>
<body>
    <h2>Add User</h2>
    <form method="POST" action="#">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>

        <!-- Add more fields here as needed -->

        <button type="submit">Add User</button>
    </form>
</body>
</html>
