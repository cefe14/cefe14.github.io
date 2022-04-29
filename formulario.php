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

<?php include ('barra.php') ?> >

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
<?php include ('piedepagina.php'); ?>

</body>