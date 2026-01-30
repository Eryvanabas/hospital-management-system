<!DOCTYPE html>
<html>
<head>
    <title>Add Patient</title>
</head>
<body>

<h2>Add Patient</h2>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<form method="POST" action="/patients">
    @csrf

    <input type="text" name="name" placeholder="Name"><br><br>
    <input type="number" name="age" placeholder="Age"><br><br>
    <input type="text" name="phone" placeholder="Phone"><br><br>

    <button type="submit">Save</button>
</form>

</body>
</html>
