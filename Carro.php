<?php
require_once 'InterfaceCar.php';
class Carro implements InterfaceCar
{
  private $modeloDoCambio;
  private $nomeComprador;
  private $modeloDoCarro;
  private $comprar;
  private $velocidade;

  public function __construct()
  {
    $this->comprar = true;
    $this->velocidade = 0;
  }

  public function getModeloDoCambio()
  {
    return $this->modeloDoCambio;
  }

  public function setModeloDoCambio($cambio)
  {
    $this->modeloDoCambio = $cambio;
  }

  public function getNomeComprador()
  {
    return $this->nomeComprador;
  }

  public function setNomeComprador($nome)
  {
    $this->nomeComprador = $nome;
  }

  public function getModeloDoCarro()
  {
    return $this->modeloDoCarro;
  }

  public function setModeloDoCarro($modelo)
  {
    $this->modeloDoCarro = $modelo;
  }

  public function getComprar()
  {
    return $this->comprar;
  }

  public function setComprar($opcao)
  {
    $this->comprar = $opcao;
  }

  public function setVelocidade($velo)
  {
    $this->velocidade = $velo;
  }

  public function getVelocidade()
  {
    return $this->velocidade;
  }

  public function acelerar()
  {
    $this->velocidade += 20;
    echo "Velocidade atual: {$this->velocidade}Km/h</br>";
  }

  public function trocarMarcha()
  {
    if ($this->velocidade >= 20) {
      echo "Você acabou de mudar a marcha</br>";
    }
  }

  public function frear()
  {
  }
  public function abrirPorta()
  {
    if ($this->getComprar()) {
      echo "Porta aberta, vai dar uma volta " . $this->getNomeComprador();
    } else {
      echo "<p>Você não comprou não posso abrir  a porta!</p>";
    }
  }
  public function fecharPorta()
  {
    if ($this->getComprar()) {
      echo "<p>Porta fechada, pode acelerar agora!</p>";
    } else {
      echo "<p>Porta fechada para quem não comprou carro nenhum!</p>";
    }
  }
}
