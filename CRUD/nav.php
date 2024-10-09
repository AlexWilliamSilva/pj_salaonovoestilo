<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sidebar com Menu Sanduíche</title>
  <!-- Link do CSS do Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Link do CSS do Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    /* Estilos para a sidebar */
    .sidebar {
      height: 100%;
      width: 260px;
      position: fixed;
      top: 0;
      left: -200px; 
      background-color: black; /* Cor do fundo */
      padding-top: 20px;
      transition: 0.3s ease; /* Transição suave */
    }
 
    .sidebar a {
      color: white; /* Cor do texto */
      padding: 10px;
      text-decoration: none;
      display: flex; /* Usando flexbox para alinhar ícones e texto */
      align-items: center; /* Centraliza verticalmente */
      margin-top: 12px; /* Espaçamento entre os links */
      margin-left: 10px; /* Espaçamento à esquerda */
    }
 
    .sidebar a:hover {
      background-color: red; /* Efeito hover */
      color: white;
    }

    /* Adicionando margem aos ícones */
    .sidebar a i {
      margin-right: 20px; /* Distância entre ícone e texto */
    }

    /* Estilos para o conteúdo */
    .content {
      margin-left: 200px; /* Espaço para a sidebar */
      padding: 20px; /* Espaçamento interno */
      text-align: center; /* Centraliza o texto */
      transition: margin-left 0.3s ease;
    }

    .sidebar.active {
      left: 0; /* Mostrar sidebar no mobile */
    }

    /* Desativar hover quando a sidebar estiver escondida */
    .sidebar:not(.active) a:hover {
      background-color: transparent; /* Remove o fundo */
      color: white; /* Mantém a cor do texto */
      cursor: default;
      height: 100px;
    }

    /* Ícone de sanduíche */
    .hamburger {
      font-size: 30px;
      color: #fff;
      position: fixed;
      top: 15px;
      left: 15px;
      z-index: 1000;
      cursor: pointer;
    }

    .flex-column {
        margin-top: 70px;
    }

    /* Mostrar o ícone de hambúrguer em todas as telas */
    @media (max-width: 768px) {
      .sidebar {
        left: -200px; /* Esconde a sidebar em telas pequenas */
      }
      .content {
        margin-left: 0; /* Remove a margem da sidebar em telas menores */
      }
      
      .content.active {
        margin-left: 200px; /* Empurrar o conteúdo para o lado */
      }
    }
  </style>
</head>
<body>
 
  <!-- Ícone de sanduíche -->
  <span class="hamburger" onclick="toggleSidebar()">&#9776;</span>
 
  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Inicial</a> <!-- Ícone de casa -->
      </li>
      <li class="nav-item">
        <a class="nav-link" href="forms_cli.php"><i class="fas fa-users"></i> Clientes</a> <!-- Novo ícone de clientes -->
      </li>
      <li class="nav-item">
        <a class="nav-link" href="forms_prod.php"><i class="fas fa-box"></i> Produtos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="forms_serv.php"><i class="fas fa-cut"></i> Serviços</a> <!-- Ícone de barbearia -->
      </li>
      <li class="nav-item">
        <a class="nav-link" href="forms_forne.php"><i class="fas fa-truck"></i> Fornecedores</a>
      </li>
    </ul>
  </div>
 
  <script>
    function toggleSidebar() {
      var sidebar = document.getElementById("sidebar");
      var content = document.getElementById("content");
      
      sidebar.classList.toggle("active");
      content.classList.toggle("active");
    }
  </script>
 
  <!-- Link do JS do Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
