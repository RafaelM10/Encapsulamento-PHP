<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Encapsulamento com carro</title>
</head>

<body>
  <pre>
  <?php
  require_once 'Carro.php';
  $comprador1 = new Carro();
  $comprador1->setNomeComprador('Rafael');
  $comprador1->setModeloDoCarro('Vectra');
  $comprador1->setModeloDoCambio("Manual");
  $comprador1->abrirPorta();
  $comprador1->fecharPorta();
  $comprador1->acelerar();
  $comprador1->trocarMarcha();
  print_r($comprador1)
  ?>
  </pre>

</body>

</html>