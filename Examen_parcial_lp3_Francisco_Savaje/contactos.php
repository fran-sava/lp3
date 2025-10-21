<?php /* contactos.php — basado solo en archivos de tu ZIP */ ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contactos — Examen Parcial LP3</title>
  <style>
  /* grid/responsive para maquetar */
  .contenedor{max-width:960px;margin:0 auto;padding:1rem;}
  nav ul{list-style:none;display:flex;gap:10px;padding:0;}
  nav a{text-decoration:none;}
  footer{margin-top:2rem;padding:1rem;background:#222;color:#fff;}
  footer a{color:#9ad;}
  </style>
</head>
<body>
  <header class="cabecera">
    <nav>
      <ul class="cabecera-menu">
        <li class="cabecera-menu__item"><a class="cabecera-menu__link" href="index.html">Inicio</a></li>
        <li class="cabecera-menu__item"><a class="cabecera-menu__link" href="contactos.php">Contactos</a></li>
      </ul>
    </nav>
  </header>

  <main class="contenedor">
    <h1>Formulario de Contactos</h1>
    <p>Al enviar, se mostrará en otra pantalla: <strong>“Bienvenido (Nombre y apellido)”</strong>.</p>

    <form action="bienvenido.php" method="post" onsubmit="return validarFormulario()">
      <label for="nombre">Nombre y Apellido *</label><br>
      <input type="text" id="nombre" name="nombre" required pattern="^[A-Za-zÁÉÍÓÚáéíóúÑñ ]+$" placeholder="Ej: Ana Gómez"><br><br>

      <label for="telefono">Teléfono (solo números)</label><br>
      <input type="text" id="telefono" name="telefono" pattern="^[0-9]+$" placeholder="Ej: 0981123456"><br><br>

      <label for="mensaje">Mensaje *</label><br>
      <textarea id="mensaje" name="mensaje" rows="5" required placeholder="Escriba su mensaje..."></textarea><br><br>

      <button type="submit">Enviar</button>
    </form>
  </main>

  <footer>
    Desarrollador: [Tu Nombre] • Tel: +595 000 000 000 •
    <a href="https://www.linkedin.com" target="_blank">LinkedIn</a>
  </footer>

  <script>
  //javascrip/Jsavanzado/formulario/js/script.js
  function validarFormulario(){
    const nombre = document.getElementById('nombre').value.trim();
    const tel = document.getElementById('telefono').value.trim();
    const msg = document.getElementById('mensaje').value.trim();
    if(!/^[A-Za-zÁÉÍÓÚáéíóúÑñ ]+$/.test(nombre)){ alert('El nombre debe contener solo letras y espacios.'); return false; }
    if(tel && !/^[0-9]+$/.test(tel)){ alert('El teléfono debe contener solo números.'); return false; }
    if(!msg){ alert('El mensaje es obligatorio.'); return false; }
    return true;
  }
  </script>
</body>
</html>
