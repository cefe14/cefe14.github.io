<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>ProyectosDB</title>
      <script src="https://kit.fontawesome.com/15405618f2.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" type="text/css" href="estilo/style_formulario.css">
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" type="text/css" href="/Pagina_2/estilo/style_register.css">
      <script defer src="idex.js"></script>

</head>

<body>

       <!-- Barra de Menu -->
   <header class="header">
        <nav class="barra">
            <a href="#" class="logo barra-enlace">ProyectosDB</a>
            <button class="barra-opciones" aria-label="Abrir Menu">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="barra-menu">
      
                <li class="barra-menu-item"><a href="home.php" class="barra-menu-enlace barra-enlace">Home</a></li>
                <li class="barra-menu-item"><a href="#" class="barra-menu-enlace barra-enlace">Sistema Operativo</a>
                <ul class="barra-menu-desplegable">
                    <li class="barra-menu-item-desplegable"><a href="windows.php" class="barra-menu-enlace-desplegable">Windows</a></li>
                    <li class="barra-menu-item-desplegable"><a href="linux.php" class="barra-menu-enlace-desplegable">Linux</a></li>
                    <li class="barra-menu-item-desplegable"><a href="mac.php" class="barra-menu-enlace-desplegable">Mac Os</a></li>
                </ul>
                </li>
                <li class="barra-menu-item"><a href="#" class="barra-menu-enlace barra-enlace">Streaming</a></li>
                <li class="barra-menu-item"><a href="#" class="barra-menu-enlace barra-enlace">Donación</a></li>
                <li class="barra-menu-item"><a href="formulario.php" class="barra-menu-enlace barra-enlace">Suscribete</a></li>
            </ul>
        </nav>
   </header>

            <form class="Formulario_HD" method="post">
                  <h2>Suscribete a mi pagina</h2>
                  <form id="Formulario_HD1" name="Formulario_HD1" method="POST">
                  
                        <div class="Formulario_HD1">
                        <label for="NOMBRE"> Nombre:</label>
                        <input type="text" id="NOMBRE" name="nombre" required="true"/> <br/> </div>
                  
                        <div class="Formulario_HD1">
                        <label for="APELLIDO"> Apellido:</label>
                        <input type="text" id="APELLIDO" name="apellido" required="true"/> <br/> </div>
                 
                        <div class="Formulario_HD1">
                        <label for="COD.NAC."> Nacionalidad (CODIGO):</label>
                        <input type="number" id="COD.NAC." name="codnac" placeholder="EJ: 54 (argentina)" 
                                    required="false"/> <br/></div>
                 
                        <div class="Formulario_HD1">
                        <label for="Correo">Correo:</label>
                        <input type="email" id="correo" name="correo" require="false"/><br/></div>
                  
                        <div class="Formulario_HD1"> <br>
                        <label for="Correo">Mensaje:</label> 
                        <div> <input type="input" id="texto" name="texto" require="false"/><br/></div>

                        <div class="Formulario_HD1">
                        <label for="NOTA">¿Que puntaje le das a la pagina?</label>
                        <select id="nota" name= "nota" require="false">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        </select></div>
                        
                        <div class="Formulario_HD1"><br/>
                        <input type="submit" name = "enviar" value="Enviar Formulario"/>
                        </div>
                  </div>
</form>

<?php include ('registar.php'); ?>
<!-- Pie de Pagina -->
    <footer class="pie-pagina">
        <div class="seccion1">
            <div class="caja">
                <h2>¿Que es Anime Sin relleno?</h2>
                <p>Anime <b>sin relleno</b> es apegarse a la historia original del mangaka, en otras palabras,
                realizar un recorte a la animación, tal que, se parezca al manga y armando así capitulos toalmente
                nuevos.</p>
            </div>
            <div class="caja">
                <h2>Sobre Nosotros</h2>
                <p>Somos varios editores realizando proyectos de manera indivual, actualmente conformamos 3 personas, para diferentes proyectos.</p>
                <p>Actualmente nos centramos en Anime sin relleno, como Ranma 1/2, Dragón Ball Kai, One Piece, Black Clover, entre otros.</p>
            </div>
            <div class="caja">
               <h2>siguenos</h2>
               <div class="red-social">
                <a href="https://www.facebook.com/proyectosDB" Target="_blank" class="fa fa-facebook" ></a>
                <a href="https://www.instagram.com/ceferinoa14/" Target="_blank" class="fa fa-instagram"></a>
                <a href="https://discord.com/invite/5bxu3EeQhU" Target="_blank"class="fab fa-discord" ></a>
                <a href="https://www.youtube.com/channel/UCDdvIbJdpatB1qcEJ-uQEvA" Target="_blank"class="fa fa-youtube"></a>
               </div>
            </div>
        </div>
        <div class="seccion2">
            <small>&copy; 2016-2022 <b>ProyectosDB</b> - Todos los derechos reservados </small>
        </div>
    </footer>

</body>
