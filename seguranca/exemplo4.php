<head>
    <title>reCAPTCHA demo: Simple page</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>

<form action="cadastrar.php" method="post">
    <div class="g-recaptcha" data-sitekey="6LcoRsIUAAAAADT0Qw9EUaZKUKTjyeyZdhnRC8s4"></div>
    <input type="email" name="inputEmail">
    <button type="submit"> Enviar </button>
</form>