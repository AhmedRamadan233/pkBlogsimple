<html>

<head>

</head>
<body>

<form action="{{ route('login') }}" method="post">
    @csrf
    
<label>email</label>
<input type="text" name="email">

<label>password</label>
<input type="password" name="password">
<button type="submit">login</button>
</form>
</body>

</html>