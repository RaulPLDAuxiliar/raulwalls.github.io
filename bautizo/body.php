<?php
$idInvitado = isset($_GET['id']) ? $_GET['id'] : '';


?>
<style>

</style>
<section class="rsvp-form">
    <h2>Confirma tu asistencia!</h2>
    <form action="process.php" method="post">
      <label for="asistencia">¿Podrás asistir?</label>
      <select id="asistencia" name="status" required>
        <option value="" hidden>Selecciona una opción</option>
        <option value="1">Sí asistiré</option>
        <option value="2">No podré asistir</option>
      </select>

      <label for="mensaje">Mensaje para Gael:</label>
      <textarea id="mensaje" name="mensaje" rows="4"></textarea>
      <input type="hidden" name="id" 
      value="<?php
                // $idInvitado = isset($_GET['id']) ? $_GET['id'] : '';
                print_r($idInvitado);
            ?>" >
        
      <button type="submit">Enviar</button>
    </form>
</section>