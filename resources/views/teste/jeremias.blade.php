<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rocketseat PHP</title>
</head>

<body>
  <!-- PHP Puro -->
  <!-- <h1>Olá, meu lindo!</h1> -->
  <?php echo 'oi Jeremias' ?>
  <?php foreach (range(1, 20) as $key): ?>
  <li><?php  echo $key; ?></li>
  <?php endforeach; ?>

  <!-- Diretiva Blade @auth -->
  @auth
    <span>Você está autenticado</span>
  @endauth

   <!-- Diretiva @foreach do Blade -->
  @foreach(range(1, 20) as $key)
    <li>{{ $key }}</li>
  @endforeach
</body>

</html>