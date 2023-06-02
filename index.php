<!DOCTYPE html>
<html>
<head>
<title>Adega Militros</title>
  <link href="https://fonts.googleapis.com/css2?family=Garamond&display=swap" rel="stylesheet">
  <style>
    body {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      margin: 0;
      padding: 0;
      font-family: 'Garamond', sans-serif;
      background-color: #f1f1f1;
    }

    header {
      width: 100%;
      height: 80px;
      padding: 20px 0;
      background-color: #000;
      display: flex;
      align-items: center;
    }

    .logo {
      max-width: 150px;
      margin-left: 20px;
    }

    h1 {
      font-size: 40px;
      font-weight: bold;
      margin: 0 auto;
      color: #fff;
    }

    .header-buttons {
      margin-left: auto;
      display: flex;
      align-items: center;
    }

    .header-buttons a {
      color: #fff;
      margin-left: 10px;
      text-decoration: none;
    }

    .carousel {
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 20px 0;
    }

    .carousel-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin: 0 20px;
    }

    .carousel-item img {
      width: 80px;
      height: 80px;
      margin-bottom: 10px;
      cursor: pointer;
    }

    .carousel-item span {
      font-size: 14px;
    }

    footer {
      width: 100%;
      padding: 20px 0;
      background-color: #000;
      color: #fff;
    }

    /* Responsividade */
    @media only screen and (max-width: 600px) {
      h1 {
        font-size: 30px;
      }
      
      .header-buttons {
        margin-left: 0;
        margin-top: 10px;
        flex-wrap: wrap;
        justify-content: center;
      }
      
      .header-buttons a {
        margin: 5px;
      }

      .carousel {
        flex-direction: column;
      }

      .carousel-item {
        margin: 20px 0;
      }

      .carousel-item h1 {
        font-size: 24px;
      }

      .carousel-item img {
        width: 60px;
        height: 60px;
      }
    }
  </style>
</head>
<body>
<header>
  <img class="logo" src="logo.png" alt="Logo">
  <h1>ADEGA MILILITROS</h1>
  
    <div> 
    <a href="login.php">
    <img src="icon-login.png" alt="Login" style="width: 40px; height: 40px;">
    </a>
    </div>
  
  
    <div class="header-buttons">
    <a href="#">Contato</a> 
    <a href="#">Ajuda</a>
    <a href="#">Redes Sociais</a>
    </div>

</header>


  <section>
    <h2>Produtos</h2>
    <div class="carousel">
      <div class="carousel-item">
        <h1>cervejas</h1>
        <a href="cervejas.php">
          <img src="cerveja-icon.png" alt="Cervejas">
        </a>
      </div>
      <div class="carousel-item">
        <h1>destilados</h1>
        <a href="destilados.php">
          <img src="destilados-icon.png" alt="Destilados">   
        </a>
      </div>
      <div class="carousel-item">
        <h1>combos</h1>
        <a href="combos.php">
          <img src="combos-icon.png" alt="Combos">
        </a>
      </div>
      <div class="carousel-item">
        <h1>vinhos</h1>
        <a href="vinhos.php">
          <img src="vinho-icon.png" alt="Vinhos">  
        </a>
      </div>
    </div>
  </section>

  <footer>
    <p>© 2023 Adega Online. Todos os direitos reservados.</p>
  </footer>
</body>
</html>
