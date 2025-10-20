<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Página Inicial</title>
    <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #1a2a6c, #b21f1f, #fdbb2d);
      background-size: 400% 400%;
      animation: gradient 10s ease infinite;
      height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    @keyframes gradient {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    h2 {
      color: #fff;
      font-size: 2.2em;
      margin-bottom: 20px;
      letter-spacing: 1px;
      text-shadow: 0 2px 10px rgba(0,0,0,0.3);
    }

    form {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(10px);
      padding: 40px 35px;
      border-radius: 16px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
      width: 300px;
      display: flex;
      flex-direction: column;
      gap: 15px;
      transition: 0.4s ease;
    }

    form:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 35px rgba(0, 0, 0, 0.3);
    }

    input[type="text"],
    input[type="password"] {
      padding: 12px;
      border: none;
      border-radius: 8px;
      outline: none;
      font-size: 1em;
      background: rgba(255, 255, 255, 0.8);
      transition: 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
      background: #fff;
      box-shadow: 0 0 8px rgba(255, 255, 255, 0.6);
    }

    input[type="submit"] {
      background: #0d47a1;
      color: white;
      border: none;
      padding: 12px;
      border-radius: 8px;
      cursor: pointer;
      font-weight: bold;
      letter-spacing: 0.5px;
      transition: 0.3s ease;
    }

    input[type="submit"]:hover {
      background: #1565c0;
      transform: scale(1.03);
    }
  </style>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="login.php">
        Usuário: <input type="text" name="usuario"><br>
        Senha: <input type="password" name="senha"><br>
    <input type="submit" value="Entrar">
    </form>
</body>
</html>
