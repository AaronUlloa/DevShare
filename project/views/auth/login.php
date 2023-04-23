<main class="auth">
  <h2 class="auth__heading"><?php echo $titulo; ?></h2>
  <p class="auth__text"> Inicia Sesion en DevShare</p>

  <form class="forms">
    <div class="forms__field">
      <label for="email" class="forms__label">Email</label>
      <input type="email" class="forms__input" placeholder="your email here" id="email" name="email" required>
    </div>
    <div class="forms__field">
      <label for="password" class="forms__label">Password</label>
      <input type="password" class="forms__input" placeholder="your password here" id="password" name="password" required>
    </div>
    <input type="submit" class="submit__botton" value="Iniciar Sesion">
  </form>
  <div class="forms__actions">
    <a href="/registro">Aun no tienes una cuenta? Registrarse ahora.</a>
  </div>
</main>
