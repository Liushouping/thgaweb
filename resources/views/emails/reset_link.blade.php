<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>重置密碼</title>
  <style>
    
  </style>
</head>
<body>
  <h1>您正在嘗試找回密碼</h1>

  <p>

    請點擊以下連結進入下一步操作：
    <a href="{{ route('password.reset', $token) }}">
      {{ route('password.reset', $token) }}
    </a>
  </p>

  <p>
    如果這不是您本人的操作，請忽略此信件。
  </p>
</body>
</html>