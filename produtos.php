<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eco Wise Tech</title>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <header class="header">
    <nav class="navbar">
      <a href="./index.html" class="nav-logo"><img src="./img/ecowise.png" alt=""></a>
      <ul class="nav-menu">
        <li class="nav-item">
          <a href="./index.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="./sobre.html" class="nav-link">Sobre</a>
        </li>
        <li class="nav-item">
          <a href="./produtos.php" class="nav-link">Produtos</a>
        </li>
        <li class="nav-item">
          <a href="./novidades.php" class="nav-link">Novidades</a>
        </li>
        <li class="nav-item">
          <a href="./contatos.html" class="nav-link">Contato</a>
        </li>
      </ul>
      <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
    </nav>
  </header>

  <main class="produtos-container">
    <table>
      <tr>
        <td class="cabecalho">
          Código
        </td>
        <td class="cabecalho">
          Nome
        </td>
        <td class="cabecalho">
          Valor
        </td>
        <td class="cabecalho">
          Quantidade no Estoque
        </td>
      </tr>
      <tbody>
        <?php
                $conexao = new mysqli("localhost", "root", "", "empresa");
                $consulta = $conexao->query("select * from produtos");
                $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
                foreach ($resultado as $linha)
                    echo ("<tr>
                                                <td>" . $linha['id_prod'] . "</td>
                                                <td>" . $linha['nome'] . "</td>
                                                <td>" . $linha['valor'] . "</td>
                                                <td>" . $linha['qtestoque'] . "</td>
                                                </tr>");
                $conexao->close();
                ?>
      </tbody>
    </table>
  </main>
  <footer>
    <div id="footer_copyright">
      &#169
      2024 todos os direitos reservados
    </div>
  </footer>
<script src="./script.js"></script>
</body>
</html>
