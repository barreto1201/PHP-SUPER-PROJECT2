<?php
    session_start();

    $tema = $_SESSION['tema'] ?? 'claro';

    if (!isset($_SESSION['usuario'])) {
        echo "<body style='font-family: Arial; background:#111; color:#fff; text-align:center; margin-top:100px'>
                <h2>Acesso negado </h2>
                <a href='index.php' style='color:#4ea3ff; text-decoration:none;'>Faça login</a>
            </body>";
        exit;
    }

    $produtos = [
        ['nome' => 'Camisa Polo', 'categoria' => 'Roupas', 'preco' => 89.90],
        ['nome' => 'Calça Jeans', 'categoria' => 'Roupas', 'preco' => 159.90],
        ['nome' => 'Tênis', 'categoria' => 'Calçados', 'preco' => 299.90],
        ['nome' => 'Boné', 'categoria' => 'Acessórios', 'preco' => 79.90],
        ['nome' => 'Meia', 'categoria' => 'Roupas', 'preco' => 19.90],
        ['nome' => 'Jaqueta de Couro', 'categoria' => 'Roupas', 'preco' => 499.90],
        ['nome' => 'Relógio Digital', 'categoria' => 'Acessórios', 'preco' => 349.90],
        ['nome' => 'Chinelo Havaianas', 'categoria' => 'Calçados', 'preco' => 39.90],
        ['nome' => 'Mochila Escolar', 'categoria' => 'Acessórios', 'preco' => 119.90],
    ];

    $filtro = $_GET['busca'] ?? '';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Produtos</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: <?php echo ($tema === 'escuro')
                ? "linear-gradient(135deg, #0f2027, #203a43, #2c5364)"
                : "linear-gradient(135deg, #e0eafc, #cfdef3)"; ?>;
            background-size: 400% 400%;
            animation: gradient 12s ease infinite;
            min-height: 100vh;
            color: <?php echo ($tema === 'escuro') ? '#eee' : '#222'; ?>;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px;
        }

        @keyframes gradient {
            0% {background-position: 0% 50%;}
            50% {background-position: 100% 50%;}
            100% {background-position: 0% 50%;}
        }

        h2 {
            margin-bottom: 20px;
            text-shadow: 0 2px 10px rgba(0,0,0,0.2);
        }

        form {
            margin-bottom: 25px;
            display: flex;
            gap: 10px;
        }

        input[type="text"] {
            padding: 10px;
            border-radius: 8px;
            border: none;
            outline: none;
            width: 250px;
            background: rgba(255,255,255,0.9);
        }

        input[type="submit"] {
            background-color: #0d47a1;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #1565c0;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            max-width: 700px;
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(10px);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: rgba(13, 71, 161, 0.9);
            color: #fff;
            letter-spacing: 1px;
        }

        tr:nth-child(even) {
            background: rgba(255, 255, 255, 0.1);
        }

        tr:hover {
            background: rgba(255, 255, 255, 0.25);
            transition: 0.3s;
        }

        .sair {
            margin-top: 30px;
            background-color: crimson;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .sair:hover {
            background-color: #e60000;
        }
    </style>
</head>
<body>
    <h2>Olá, <?php echo $_SESSION['usuario']; ?> 👋</h2>

    <form method="GET">
        <input type="text" name="busca" placeholder="Buscar produto..." value="<?php echo htmlspecialchars($filtro); ?>">
        <input type="submit" value="Pesquisar">
    </form>

    <table>
        <tr>
            <th>Produto</th>
            <th>Categoria</th>
            <th>Preço (R$)</th>
        </tr>
        <?php
        foreach ($produtos as $p) {
            if ($filtro === '' || str_contains(strtolower($p['nome']), strtolower($filtro))) {
                echo "<tr>
                        <td>{$p['nome']}</td>
                        <td>{$p['categoria']}</td>
                        <td>" . number_format($p['preco'], 2, ',', '.') . "</td>
                      </tr>";
            }
        }
        ?>
    </table>

    <a href="index.php" class="sair">Sair</a>
</body>
</html>
