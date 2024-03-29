<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plataforma de aprendizaje</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400&family=Montserrat:wght@400;700&display=swap"
    rel="stylesheet">
   <link rel="stylesheet" href="Assets/css/IndexStylos.css">
  <script src="https://kit.fontawesome.com/9b8103ef2f.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body class="ocul">
  <header class="encabezado" id="inicio">
    <div class="contenido-navegacion">
      <div class="logo">
        <h2>Code<span>Ceviche</span></h2>
      </div>
  
      <nav class="navegacion ocultar">
        <a href="#">Inicio</a>
        <a href="/Assets/Pages/acercade.html">Nosotros</a>
        <a href="/Assets/Pages/Contactos.html">Contacto</a>
          <a href="/pos/inicio">Iniciar sesion</a>
      </nav>
      <div class="hamburguesa">
        <span></span><span></span><span></span>
      </div>
    </div>
    
  
  
    <img class="encabezado-imagen" src="Assets/img/progra.png">
  
    <div class="contenido-encabezado contenedor">
      <div class="texto-encabezado">
        <h1 class="titulo">Accede a nuestros <br>
          cursos de <br>
          
           PROGRAMACIÓN</h1>
      </div>
  
      <form class="formulario-encabezado">
        <h2>Mas informacion sobre los cursos</h2>
        <div class="input-encabezado">
          <input type="text" placeholder="Nombre">
        </div>
        <div class="input-encabezado">
          <input type="mail" placeholder="Correo">
        </div>
        <div class="input-encabezado">
          <input type="tel" placeholder="Telefono">
        </div>
  
        <div class="boton-encabezado">
          <input class="btn azul" type="submit" value="Recordarme">
        </div>
      </form>
    </div>
  </header>
  <!--preloader-->
  <div class="pre" id="preloader">
    <svg class="pl" width="240" height="240" viewBox="0 0 240 240">
      <circle class="pl__ring pl__ring--a" cx="120" cy="120" r="105" fill="none" stroke="#000" stroke-width="20"
        stroke-dasharray="0 660" stroke-dashoffset="-330" stroke-linecap="round"></circle>
      <circle class="pl__ring pl__ring--b" cx="120" cy="120" r="35" fill="none" stroke="#000" stroke-width="20"
        stroke-dasharray="0 220" stroke-dashoffset="-110" stroke-linecap="round"></circle>
      <circle class="pl__ring pl__ring--c" cx="85" cy="120" r="70" fill="none" stroke="#000" stroke-width="20"
        stroke-dasharray="0 440" stroke-linecap="round"></circle>
      <circle class="pl__ring pl__ring--d" cx="155" cy="120" r="70" fill="none" stroke="#000" stroke-width="20"
        stroke-dasharray="0 440" stroke-linecap="round"></circle>
    </svg>
  
  </div>
  

  
  <div class="ventajas reveal">
    <div class="contenido-ventajas contenedor">
      <div class="ventaja">
        <i class="fas fa-clock"></i>
        <h3>Horarios flexibles</h3>
        <p>CodeCeviche ofrece horarios flexibles que permiten a los estudiantes adaptar sus clases a sus necesidades. Esto
        fomenta un equilibrio entre estudios y vida personal.
        </p>
      </div>
    <div class="ventaja">
      <i class="fas fa-graduation-cap"></i>
      <h3>Vida exitosa de los egresados</h3>
      <p>Los egresados de nuestra universidad prosperan en sus carreras y logran el éxito profesional que desean. Nuestra
        educación de calidad les brinda las herramientas necesarias para alcanzar sus metas.</p>
    </div>

      <div class="ventaja">
        <i class="fas fa-building"></i>
        <h3>Instalaciones Modernas</h3>
        <p>Nuestra universidad cuenta con instalaciones de vanguardia que brindan un entorno propicio para el aprendizaje.
          Aulas equipadas, laboratorios de última generación y espacios de estudio innovadores están a disposición de nuestros
          estudiantes.</p>
      </div>

    </div>
    <div class="container" style="margin-top: 350px;">
      <div id="slide">
        <div class="item">
          <img src="Assets/img/universiadad.jpg" alt="Instalaciones del campus" class="reveal">
          <div class="content">
            <div class="name">Instalaciones del campus</div>
            <div class="des">Las instalaciones del campus son de las más modernas</div>
            <button>Ver más</button>
          </div>
        </div>
        <div class="item">
          <img src="Assets/img/civil.jpg" alt="Ingenieria" class="reveal">
          <div class="content">
            <div class="name ">Ingenieria</div>
            <div class="des">Contamos con las carreras de ingeniería más demandadas de la región</div>
            <button>ver más</button>
          </div>
        </div>
        <div class="item">
          <img src="Assets/img/medicina.jpg" alt="Doctorados en medicina" class="reveal">
          <div class="content">
            <div class="name">Doctorados en medicina</div>
            <div class="des">Poseemos las instalaciones más modernas para el estudio de medicina y sus diferentes ramas
            </div>
            <button>ver más</button>
          </div>
        </div>
        <div class="item">
          <img src="Assets/img/equipo.jpg" alt="Ingenierias en informatica" class="reveal">
          <div class="content">
            <div class="name">Ingenierias en informatica</div>
            <div class="des">Las ingenierías de informática que están cambiando el mundo</div>
            <button>See more</button>
          </div>
        </div>
        <div class="item">
          <img src="Assets/img/mtyy.jpg" alt="Mecanica automotriz" class="reveal">
          <div class="content">
            <div class="name">Mecanica automotriz</div>
            <div class="des">con las instalaciones más modernas y seguras del país</div>
            <button>ver más</button>
          </div>
        </div>
        <div class="item">
          <img src="Assets/img/abo.jpg" alt="Leyes" class="reveal">
          <div class="content">
            <div class="name">Leyes</div>
            <div class="des">con las mejores instalaciones y profesores en leyes</div>
            <button>See more</button>
          </div>
        </div>
      </div>
      <div class="buttons">
        <button id="prev"><i class="fa-solid fa-angle-left"></i></button>
        <button id="next"><i class="fa-solid fa-angle-right"></i></button>
      </div>
    </div>
    <section class="servicios contenedor reveal"" id="servicios" style="margin-top: -250px;" >
      <h2 >Departamentos de Carreras</h2>
      <div class="contenido-servicios">
        <div class="servicio">
          <i class="fas fa-code"></i>
          <h3>Carrera de Ingeniería en Informática</h3>
          <p>El Departamento de Ingeniería en Informática ofrece programas académicos de alta calidad y formación en
            tecnología de vanguardia.</p>
        </div>
        <div class="servicio">
          <i class="fas fa-flask"></i>
          <h3>Carrera de Ciencias Químicas</h3>
          <p>El Departamento de Ciencias Químicas se dedica a la investigación y enseñanza de la química y sus aplicaciones
            en diversas industrias.</p>
        </div>
        <div class="servicio">
          <i class="fas fa-building"></i>
          <h3>Carrera de Arquitectura</h3>
          <p>El Departamento de Arquitectura se enfoca en la formación de arquitectos creativos y la planificación de
            espacios arquitectónicos.</p>
        </div>
        <div class="servicio">
          <i class="fas fa-heart"></i>
          <h3>Carrera de Medicina</h3>
          <p>El Departamento de Medicina proporciona una educación médica de excelencia y se dedica al avance de la atención
            médica.</p>
        </div>
      <div class="servicio">
        <i class="fas fa-pencil-alt"></i>
        <h3>Carrera de Bellas Artes</h3>
        <p>El Departamento de Bellas Artes fomenta la creatividad y la expresión artística a través de programas de arte,
          música y teatro.</p>
      </div>
      <div class="servicio">
        <i class="fas fa-leaf"></i>
        <h3>Carrera de Ciencias Ambientales</h3>
        <p>El Departamento de Ciencias Ambientales se dedica a la investigación y la conservación del medio ambiente,
          abordando problemas ambientales globales.</p>
      </div>

      </div>
    </section>


  </div>
  
  <!---
-->


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="Assets/js/IndexScript.js"></script>
  <footer class="pie-de-pagina reveal" style="margin-top: 10px;">
    <div class="contenido-pie contenedor">
      <div class="redes-sociales">
     
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-linkedin"></i></a>
      </div>
      <div class="enlaces-pie">
        <a href="#">Términos y condiciones</a>
        <a href="#">Política de privacidad</a>
        <a href="#">Contacto</a>
      </div>
    </div>
  </footer>

</body>
</html>