



<html>

<head>

</head>
<body>

<form action="{{ route('register') }}" method="post">
    @csrf
    <label>name</label>
    <input type="text" name="name">
    <label>email</label>
    <input type="email" name="email">
    <label>password</label>
    <input type="password" name="password">
<button type="submit">register</button>
</form>
</body>

</html>