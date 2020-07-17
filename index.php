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
            array('url' => "#inicio",'text'=> "Inicio"),
            array('url' => "#recomendaciones",'text'=> "Recomendaciones"),
            array('url' => "#prearmes",'text'=> "Prearmes"),
            array('url' => "#encuentranos",'text'=> "Nos encuentras en"),
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

    <!-- NEWS CARDS -->
    <h2>Recomendaciones</h2>
    <div class="news-cards" id="recomendaciones">
    <?php
          $procesador=array(
            array('img' => "https://www.infotec.com.pe/30787-large_default/procesador-ryzen-5-3600-3_6ghz-am4--100_100000031b0x.jpg",'titulo'=> 'AMD Ryzen 5 3600','descrip'=>"# de núcleos de CPU:
            6<br>
            # de hilos
            12<br>
            Reloj base
            3.6GHz<br>
            Reloj de aumento máx. 
            Hasta 4.2GHz<br>
            Package
            AM4<br>"),
            array('img' => "https://www.infotec.com.pe/30766-large_default/procesador-amd-ryzen-7-2700-de-yd2700bbafbox-de-4_1ghz.jpg",'titulo'=> 'AMD Ryzen 7 2700','descrip'=>"# de núcleos de CPU
            8<br>
            # de hilos
            16<br>
            Reloj base
            3.2GHz<br>
            Reloj de aumento máx. 
            Hasta 4.1GHz<br>
            Package
            AM4<br>"),
            array('img' => "https://www.infotec.com.pe/30727-home_default/procesador-intel-core-i5-9400-2_9ghz-9mb-bx80684i59400.jpg",'titulo'=> 'Intel® Core™ i5-9600','descrip'=>"Cantidad de núcleos
            6<br>
            
            Cantidad de subprocesos
            6<br>
            
            Frecuencia básica del procesador
            3,10 GHz<br>
            
            Frecuencia turbo máxima
            4,60 GHz<br>
            
            Gráficos del procesador ‡
            Gráficos HD Intel® 630<br>
            
            Zócalos compatibles
            FCLGA1151<br>"),
            array('img' => "https://www.infotec.com.pe/30792-home_default/procesador-intel-core-i5-7640x-bx80677i57640x-de-4ghz.jpg",'titulo'=> 'Intel® Core™ i5-7640X serie X','descrip'=>"Cantidad de núcleos
            4<br>
            Cantidad de subprocesos
            4<br>
            Frecuencia básica del procesador
            4,00 GHz<br>
            Frecuencia turbo máxima
            4,20 GHz<br>
            Zócalos compatibles
            FCLGA2066<br>")
          );

          foreach($procesador as $pro)
          {
            echo "<div>";
            echo "<img src='$pro[img]' />" ;
            echo "<h3>$pro[titulo]</h3>";
            echo "<p>$pro[descrip]</p>";
            echo "<a href='#'> Comprar <i class='fas fa-angle-double-right'></i></a>";
            echo '</div>';
          }
        ?>
      <!-- <div>
        <img src="https://www.infotec.com.pe/30787-large_default/procesador-ryzen-5-3600-3_6ghz-am4--100_100000031b0x.jpg" alt="" />
        <h3>AMD Ryzen 5 3600</h3>
        <p># de núcleos de CPU:
          6<br>
          # de hilos
          12<br>
          Reloj base
          3.6GHz<br>
          Reloj de aumento máx. 
          Hasta 4.2GHz<br>
          Package
          AM4<br>
        </p>
        <a href="#">Comprar <i class="fas fa-angle-double-right"></i></a>
      </div>
      <div>
        <img src="https://www.infotec.com.pe/30766-large_default/procesador-amd-ryzen-7-2700-de-yd2700bbafbox-de-4_1ghz.jpg" alt="" />
        <h3>AMD Ryzen 7 2700</h3>
        <p>
          # de núcleos de CPU
          8<br>
          # de hilos
          16<br>
          Reloj base
          3.2GHz<br>
          Reloj de aumento máx. 
          Hasta 4.1GHz<br>
          Package
          AM4<br>
        </p>
        <a href="#">Comprar <i class="fas fa-angle-double-right"></i></a>
      </div>
      <div>
        <img src="https://www.infotec.com.pe/30727-home_default/procesador-intel-core-i5-9400-2_9ghz-9mb-bx80684i59400.jpg" alt="" />
        <h3>Intel® Core™ i5-9600</h3>
        <p>
          Cantidad de núcleos
          6<br>
          
          Cantidad de subprocesos
          6<br>
          
          Frecuencia básica del procesador
          3,10 GHz<br>
          
          Frecuencia turbo máxima
          4,60 GHz<br>
          
          Gráficos del procesador ‡
          Gráficos HD Intel® 630<br>
          
          Zócalos compatibles
          FCLGA1151<br>
        </p>
        <a href="#">Comprar <i class="fas fa-angle-double-right"></i></a>
      </div>
      <div>
        <img src="https://www.infotec.com.pe/30792-home_default/procesador-intel-core-i5-7640x-bx80677i57640x-de-4ghz.jpg" alt="" />
        <h3>Intel® Core™ i5-7640X serie X</h3>
        <p>
          Cantidad de núcleos
          4<br>
          Cantidad de subprocesos
          4<br>
          Frecuencia básica del procesador
          4,00 GHz<br>
          Frecuencia turbo máxima
          4,20 GHz<br>
          Zócalos compatibles
          FCLGA2066<br>
        </p>
        <a href="#">Comprar <i class="fas fa-angle-double-right"></i></a>
      </div> -->
    </div>

    <!-- Card Banner 1-->
    <section class="cards-banner-one" id="prearmes">
      <div class="content">
        <h2>Prearmes.</h2>
        <!-- lorem 20 -->
        <p>Los mejores prearmes</p>
        <a href="https://highpro.com.mx/index.php?" class="btn">Ver mas<i class="fas fa-chevron-right"></i></a>
      </div>
    </section>

    <!-- NEWS CARDS -->
    <div class="news-cards">
    <?php
          $prearme=array(
            array('img' => "https://highpro.com.mx/img/p/1/0/3/4/7/10347-cart_default.jpg",'titulo'=> 'PC LEGA TRITÓN AMD R5 3600X Con RTX 2060S','descrip'=>"Excelente equipo para mover todos tus juegos en ultra a mas de 60fps.<br> 

            - Procesador: AMD Ryzen 5 3600X<br>
            - RAM: 16GB<br>
            -Tarjeta de vídeo: RTX 2060S<br>"),
            array('img' => "https://highpro.com.mx/img/p/1/0/6/2/2/10622-cart_default.jpg",'titulo'=> 'PC LEGA REA Intel I5 9400 GTX 1650s','descrip'=>"Excelente equipo para estudiantes de diseño gráfico, que requieran de un equipo que entregue un excelente rendimiento.<br>

            - Procesador: Intel Core i5 9400<br>
            - RAM: 16GB<br>
            
            -Tarjeta de vídeo: GTX 1650s<br>"),
            array('img' => "https://highpro.com.mx/img/p/1/0/0/3/4/10034-cart_default.jpg",'titulo'=> 'PC LEGA URANO AMD R5 3600X Con RTX 2070S','descrip'=>"Excelente equipo para los diseñadores 3D, que requieran de un equipo que entregue un excelente rendimiento.<br>

            - Procesador: AMD Ryzen 5 3600x<br>
            
            - RAM: 16GB<br>
            
            -Tarjeta de vídeo: RTX 2070S<br>"),
            array('img' => "https://highpro.com.mx/img/p/1/0/6/3/9/10639-cart_default.jpg",'titulo'=> 'PC LEGA AFRODITA AMD R7 3700X Con RTX2060S','descrip'=>"Excelente equipo para los editores de vídeo, que requieran de un equipo que entregue un excelente rendimiento.<br>

            - Procesador: AMD Ryzen 7 3700X<br>
            
            - RAM: 32GB<br>
            
            -Tarjeta de vídeo: RTX2060S<br>")
          );

          foreach($prearme as $pre)
          {
            echo "<div>";
            echo "<img src='$pre[img]' />" ;
            echo "<h3>$pre[titulo]</h3>";
            echo "<p>$pre[descrip]</p>";
            echo "<a href= '#'> Comprar <i class='fas fa-angle-double-right'></i></a>";
            echo '</div>';
          }
        ?>
      <!-- <div>
        <img src="https://highpro.com.mx/img/p/1/0/3/4/7/10347-cart_default.jpg" alt="" />
        <h3>PC LEGA TRITÓN AMD R5 3600X Con RTX 2060S</h3>
        <p>Excelente equipo para mover todos tus juegos en ultra a mas de 60fps.<br> 

          - Procesador: AMD Ryzen 5 3600X<br>
          - RAM: 16GB<br>
          -Tarjeta de vídeo: RTX 2060S<br>

        </p>
        <a href="#">Comprar <i class="fas fa-angle-double-right"></i></a>
      </div>
      <div>
        <img src="https://highpro.com.mx/img/p/1/0/6/2/2/10622-cart_default.jpg" alt="" />
        <h3>PC LEGA REA Intel I5 9400 GTX 1650s</h3>
        <p>Excelente equipo para estudiantes de diseño gráfico, que requieran de un equipo que entregue un excelente rendimiento.<br>

          - Procesador: Intel Core i5 9400<br>
          - RAM: 16GB<br>
          
          -Tarjeta de vídeo: GTX 1650s<br>
        </p>
        <a href="#">Comprar <i class="fas fa-angle-double-right"></i></a>
      </div>
      <div>
        <img src="https://highpro.com.mx/img/p/1/0/0/3/4/10034-cart_default.jpg" alt="" />
        <h3>PC LEGA URANO AMD R5 3600X Con RTX 2070S</h3>
        <p>Excelente equipo para los diseñadores 3D, que requieran de un equipo que entregue un excelente rendimiento.<br>

          - Procesador: AMD Ryzen 5 3600x<br>
          
          - RAM: 16GB<br>
          
          -Tarjeta de vídeo: RTX 2070S<br>
        </p>
        <a href="#">Comprar <i class="fas fa-angle-double-right"></i></a>
      </div>
      <div>
        <img src="https://highpro.com.mx/img/p/1/0/6/3/9/10639-cart_default.jpg" alt="" />
        <h3>PC LEGA AFRODITA AMD R7 3700X Con RTX2060S </h3>
        <p>Excelente equipo para los editores de vídeo, que requieran de un equipo que entregue un excelente rendimiento.<br>

          - Procesador: AMD Ryzen 7 3700X<br>
          
          - RAM: 32GB<br>
          
          -Tarjeta de vídeo: RTX2060S<br>
        </p>
        <a href="#">Comprar <i class="fas fa-angle-double-right"></i></a>
      </div> -->
    </div>

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