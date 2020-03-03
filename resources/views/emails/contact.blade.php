<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Laravel Site</title>
</head>
<body>
  <h2>You have a new message!</h2>
  <p>
    <strong>Name:</strong> {{$request->input('name')}}
  </p>
  <p>
      <strong>Email:</strong> {{$request->input('email')}}
    </p>
  <p>
      <strong>Message:</strong> {{$request->input('message')}}
    </p>

</body>
</html>
