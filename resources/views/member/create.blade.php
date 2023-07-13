<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="/create" method="POST">
    아이디: <input type="text" name="name" placeholder="이름"/><br/>
    암호: <input type="password" name="pw" placeholder="암호"/><br/>
    이메일: <input type="email" name="email" placeholder="이메일"/><br/>

    <input type="submit" value="가입"/>
  </form>
  미들웨어 : {{ $middleware }}
</body>
</html>