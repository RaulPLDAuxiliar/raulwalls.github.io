<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <link rel="stylesheet" href="styles.css">
    <title>BAUTIZO Y PRIMER AÑO GAEL ANTONIO</title>
</head>

<body >
    <div><img src="hoja-1.png" class="leaf-1" alt="hoja-planta"></div>
    <div><img src="hoja-2.png" class="leaf-2" alt="hoja-planta"></div>
    
    
    <section class="hero">
        <img src="gael.jpg" alt="Foto del bebé" class="baby-photo">
        <h1>¡Acompáñanos a celebrar a Gael Antonio!</h1>
        <p>Con gran alegría te invitamos a mi bautizo y a festejar mi primer añito de vida.</p>
    </section>
    <div class="audio-player">
      <audio id="audio" src="cancion.mp3" controls="controls" type="audio/mpeg" preload="auto" autoplay hidden>
      </audio>
      <div class="egg" onClick="PlayAudio()">
        <div class="dot"></div>
        <div class="dot-2"></div>
      </div>
    </div>

    <section class="welcome-message">
        <h2>Una celebración de amor y fe</h2>
        <p>Queremos compartir este día tan especial contigo.</p>
        <div class="container-image">

        </div>
        
        <div class="parents-godparents">
          <div >
            <h2>Mis Papás</h2>
            <p><strong>Justine Andrea</strong> Muñoz Quiterio</p>
            <p><strong>Jorge Raúl</strong> Oliver Paredes</p>
          </div>
          <div>
            <h2>Mis Padrinos</h2>
            <p><strong>Karina Gabriela</strong> Muñoz Quiterio</p>
            <p><strong>Manuel Alejandro</strong> Salas Velez</p>
          </div>
        </div>
        <div class="dress-code">
          <h2>Código de vestimenta</h2>
          <div>
            <img src="vestimenta.png" alt="vestimenta formal" >
          </div>
          <p>Te pedimos que asistas con ropa formal. ¡Queremos que todos luzcan espectaculares!</p>
          <p>Elección de colores:</p>
          <div class="color-boxes">
            <div class="box-direction">
              <span class="box color-box-1"></span> <span class="color-name">Azul claro</span>
            </div>
            <div class="box-direction">
              <span class="box color-box-2"></span> <span class="color-name">Verde Olivo</span>
            </div>
            <div class="box-direction">
              <span class="box color-box-3"></span> <span class="color-name">Beige</span>
            </div>
          </div>
        </div>
    </section>

    <section style="display: flex; flex-direction:column; justify-content: center;">
        <h2>¿Dónde y cuándo?</h2>
        <div class="event-details">
          <div>
            <h3>Misa</h3>
            <span class="material-symbols-outlined icon-size">church</span>
            <p><strong>Lugar:</strong> Parroquia Santa María</p>
            <p><strong>Hora:</strong> 11:00 AM</p>
            <a href=""><strong>Ubicación</strong></a>
          </div>
          <div>
            <h3>Recepción</h3>
            <span class="material-symbols-outlined icon-size">cake</span>
            <p><strong>Lugar:</strong> Jardín La Estancia</p>
            <p><strong>Hora:</strong> 2:00 PM</p>
            <a href=""><strong>Ubicación</strong></a>
          </div>
        </div>
    </section>

    <script>
      function PlayAudio() {
        //alert();
        var audio = document.getElementById('audio');
        audio.play();
      }
    </script>