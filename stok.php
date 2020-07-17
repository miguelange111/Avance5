<?php
include_once('utilities.php');
include_once('db/database_utilities.php');
$result = run_query();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TechNews</title>
  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="tablestyle.css">
</head>

<body>

   <div class="menu-btn">
    <i class="fas fa-bars fa-2x"></i>
  </div> 

  <div class="container">
    <!-- Navigation -->
    <nav class="nav-main">
      <!-- Brand -->
      <img src="img/brand.png" alt="TechNews Logo" class="nav-brand">
      <!-- Left Nav -->
       <ul class="nav-menu">
       <?php
          $nave=array(
            array('url' => "index.php#inicio",'text'=> "Inicio"),
            array('url' => "index.php#recomendaciones",'text'=> "Recomendaciones"),
            array('url' => "index.php#prearmes",'text'=> "Prearmes"),
            array('url' => "index.php#encuentranos",'text'=> "Nos encuentras en"),
            array('url' => "stok.php",'text'=> "Articulos en stock")
          );

          foreach($nave as $nav)
          {
            echo "<li>" ;
            echo "<a href=$nav[url] >$nav[text]</a>";
            echo '</li>';
          }
        ?>
        <!-- <li>
          <a href="#inicio">Inicio</a>
        </li>
        <li>
          <a href="#recomendaciones">Recomendaciones</a>
        </li>
        <li>
          <a href="#prearmes">Prearmes</a>
        </li>
        <li>
          <a href="#encuentranos">Nos encuentras en</a>
        </li> -->
      </ul> 

      <!-- Right Nav -->
      <!-- <ul class="nav-menu-right">
        <li>
          <a href="#">
            <i class="fas fa-search"></i>
          </a>
        </li>
      </ul> -->
    </nav>
    <hr>

    <!-- SHOWCASE -->
    <header class="showcase" id="inicio">
      <h2>i5 10400 vs ryzen 5 3600</h2>
      <p >La nueva guerra por el mejor procesador de la gama media la cual se lleva mucho del mercado de pc</p>
      <a href="https://www.cpu-monkey.com/es/compare_cpu-amd_ryzen_5_3600-927-vs-intel_core_i5_10400-1153" class="btn" >
        Leer mas <i class="fas fa-chevron-right"></i>
      </a>
    </header>
    
    <table>
                <thead>
                  <tr>
                    <th width="200">Codigo</th>
                    <th width="250">Nombre</th>
                    <th width="150">Tipo</th>
                    <th width="150">Cantidad</th>
                    <th width="150">Precio</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                while($almacen = $result->fetch_assoc())
                {
                ?>
                <tr>
                  <td><?php echo $almacen['Codigo']; ?></td>
                  <td><?php echo $almacen['Nombre']; ?></td>
                  <td><?php echo $almacen['Tipo']; ?></td>
                  <td><?php echo $almacen['Cantidad']; ?></td>
                  <td><?php echo $almacen['Precio']; ?></td>
                  </tr>
                  <?php
                }
                  ?>
                </tbody>
    </table>


    <!-- third card -->
    <section class="cards-banner-two" id="encuentranos">
      <div class="content">
        <h2>Encuentranos en:</h2>
        <!-- lorem 30 -->
        <p>Arequipa donde se encuentran la mayoria  de tiendas de tecnologia</p>
        <a href="https://www.google.com.pe/maps/@-16.4079918,-71.5380116,15.87z?hl=es-419" class="btn">Ver mas: <i class="fas fa-chevron-right"></i></a>
      </div>
    </section>
    <br>
    <h2>Consultanos en el formulario</h2>

    <form id="form" class="topBefore" action="enviar.php" method="post">
		
		  <input id="name" type="text" placeholder="Nombre" name="nombre">
		  <input id="email" type="text" placeholder="E-MAIL" name="email">
		  <textarea id="message" type="text" placeholder="Mensaje" name="mensaje"></textarea>
      <input id="submit" type="submit" value="Enviar">
  
    </form>
    <!-- Follow -->
    <section class="social">
      <p>Siguenos</p>
      <div class="links">
      <?php
          $redes=array(
            array('url' => "https://facebook.com",'icono'=> 'fab fa-facebook-f'),
            array('url' => "https://twitter.com",'icono'=> 'fab fa-twitter'),
            array('url' => "https://linkdin.com",'icono'=> 'fab fa-linkedin')
          );

          foreach($redes as $rede)
          {
            echo "<a href=$rede[url]>" ;
            echo "<i class='$rede[icono]'></i>";
            echo '</a>';
          }
        ?>
        <!-- <a href="https://facebook.com">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://twitter.com">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="https://linkdin.com">
          <i class="fab fa-linkedin"></i>
        </a> -->
      </div>
    </section>
  </div>

  <!-- Footer Links -->
  <div class="footer-links" id="info">
    <div class="footer-container">
      <ul>
        <li>
          <a href="#info">
            <h3>Procesadores</h3>
          </a>
        </li>
        <?php
          $marcas=array(
            array('url' => 'https://www.intel.la/content/www/xl/es/homepage.html','nombre'=> 'Intel'),
            array('url' =>"https://www.amd.com/es",'nombre'=>"AMD")
          );

          foreach($marcas as $marca)
          {
            echo '<li>' ;
            echo "<a href=$marca[url]>$marca[nombre]</a>";
            echo '</li>';
          }
        ?>
        <!-- <li>
          <a href="https://www.intel.la/content/www/xl/es/homepage.html">Intel</a>
        </li>
        <li>
          <a href="https://www.amd.com/es">Amd</a>
        </li> -->
      </ul>
      <ul>
        <li>
          <a href="#info">
            <h3>Placas madre</h3> 
          </a>
        </li>
        <?php
          $marcas=array(
            array('url' => 'https://latam.msi.com/Motherboards','nombre'=> 'MSI'),
            array('url' =>"https://www.asus.com/latin/Motherboards/",'nombre'=>"Asus"),
            array('url' =>"https://www.gigabyte.com/Motherboard",'nombre'=>"Gigabyte")
          );

          foreach($marcas as $marca)
          {
            echo '<li>' ;
            echo "<a href=$marca[url]>$marca[nombre]</a>";
            echo '</li>';
          }
        ?>
        <!-- <li>
          <a href="https://latam.msi.com/Motherboards">MSI</a>
        </li>
        <li>
          <a href="https://www.asus.com/latin/Motherboards/">Asus</a>
        </li>
        <li>
          <a href="https://www.gigabyte.com/Motherboard">Gigabyte</a>
        </li> -->
      </ul>
      <ul>
        <li>
          <a href="#info">
            <h3>Componentes</h3>
          </a>
        </li>
        <?php
          $marcas=array(
            array('url' => 'https://www.corsair.com/lm/es/','nombre'=> 'Corsair'),
            array('url' =>"https://zowie.benq.com/en-us/index.html",'nombre'=>"Zowie"),
            array('url' =>"https://www.razer.com/",'nombre'=>"Razer"),
            array('url' =>"https://www.logitech.com/es-roam",'nombre'=>"Logitech")
          );

          foreach($marcas as $marca)
          {
            echo '<li>' ;
            echo "<a href=$marca[url]>$marca[nombre]</a>";
            echo '</li>';
          }
        ?>
        <!-- <li>
          <a href="https://www.corsair.com/lm/es/">Corsair</a>
        </li>
        <li>
          <a href="https://zowie.benq.com/en-us/index.html">Zowie</a>
        </li>
        <li>
          <a href="https://www.razer.com/">Razer</a>
        </li>
        <li>
          <a href="https://www.logitech.com/es-roam">Logitech</a>
        </li> -->
      </ul>
      <!-- <ul>
        <li>
          <a href="#">
            <h3>Title Four</h3>
          </a>
        </li>
        <li>
          <a href="#">Blockchain</a>
        </li>
        <li>
          <a href="#">Machine Learning</a>
        </li>
        <li>
          <a href="#">Artificial Intelligence</a>
        </li>
        <li>
          <a href="#">Quantum Computing</a>
        </li>
        <li>
          <a href="#">Startup</a>
        </li>
        <li>
          <a href="#">Cryptocurrencies</a>
        </li>
      </ul> -->
    </div>
  </div>
          
  <!-- Footer -->
  <footer class="footer">
    <h3>Tech News Copyright</h3>
  </footer>

  <!-- Scroll Reveal -->
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="main.js"></script>
</body>

</html>