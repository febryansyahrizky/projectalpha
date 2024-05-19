<!DOCTYPE html>
<html>
<head>
    <title>My Form</title>
</head>
<body>
    <form method="POST" action="/your-endpoint">
        @csrf
        <!-- the rest of your form fields -->
        <input type="text" name="name" placeholder="Your Name">
        <input type="submit" value="Submit">
    </form>
</body>
</html>