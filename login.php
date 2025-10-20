<?php
    session_start();

    $usuario = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if ($usuario === 'admin' && $senha === '123') {
        $_SESSION['usuario'] = $usuario;
        $mensagem = "Login bem-sucedido!";
        $tipo = "sucesso";
        $link = "produtos.php";
        $textoLink = "Ir para produtos";
    } else {
        $mensagem = "Usuário ou senha incorretos.";
        $tipo = "erro";
        $link = "index.php";
        $textoLink = "Tentar novamente";
    }

    $_SESSION['tema'] = $_POST['tema'] ?? 'padrão';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Resultado do Login</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #1a2a6c, #b21f1f, #fdbb2d);
      background-size: 400% 400%;
      animation: gradient 10s ease infinite;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-align: center;
    }

    @keyframes gradient {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .box {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(10px);
      padding: 40px 50px;
      border-radius: 16px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
      max-width: 400px;
      transition: 0.3s;
    }

    .box:hover {
      transform: translateY(-5px);
    }

    .sucesso {
      color: #00ff15ff;
    }

    .erro {
      color: #fa0000ff;
    }

    a {
      display: inline-block;
      margin-top: 25px;
      background-color: #0d47a1;
      color: white;
      text-decoration: none;
      padding: 10px 25px;
      border-radius: 8px;
      transition: 0.3s;
      font-weight: bold;
    }

    a:hover {
      background-color: #1565c0;
      transform: scale(1.05);
    }
  </style>
</head>
<body>
  <div class="box">
    <h2 class="<?php echo $tipo; ?>">
      <?php echo $mensagem; ?>
    </h2>
    <a href="<?php echo $link; ?>"><?php echo $textoLink; ?></a>
  </div>
</body>
</html>
