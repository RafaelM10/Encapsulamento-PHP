# Encapsulamento em Programação Orientada a Objetos (POO)

Neste mini projeto, apliquei o conceito de encapsulamento em PHP para criar uma classe `Carro` que demonstra o uso adequado desse princípio de POO.

## Como funciona o Encapsulamento
o encapsulamento nos ajuda a manter as partes internas de uma classe seguras e protegidas, e só permite que outras partes do programa interajam com ela de uma maneira segura e controlada.
### Segue uma analogia: 
Podemos ter como exemplo uma pilha a parte externa dela é uma capsula e a parte interna dela está protegida, o encapsulameno é a alteração da parte interna da capsula sem que altere a saida dela. ela devolve para você os 10VW (exemplo) e eu alterei a parte interna dela onde estava protegido porém não alterei os 10VW que ela retornava
### Segue outra analogia: 
Podemos usar como exemplo um computador, temos a interface onde utilizamos e apertamos as teclas -> a, b, c porém não temos acessos a sua parte interna. Dito isso a parte interna de um computador tem muitas peças onde precisamos conhecer para mexer e caso altere uma peça errada de lugar podemos quebrar ou faze-lo não funcionar mais. Dito isso se eu quero realizar um upgrade de memoria ram e utilizo uma memoria ram da marca GIGABYTE(exemplo) ela está protegida pois está na parte interna do computador e eu pretendo utilizar uma outra memoria ram para que o pc fique mas rapido e está memoria ram ela é da marca Kingston. Feito isso alteramos na parte interna do computador a memoria ram para uma memoria ram com mas potencia deixando o pc mas rapido porém sem quebrar nenhuma funcionalidade do pc.

## Estrutura do Projeto

O projeto consiste nos seguintes arquivos apenas para solidificar o conhecimento em ENCAPSULAMENTO:

- `index.php`: Contém o código PHP para demonstrar o funcionamento da classe `Carro`.
- `Carro.php`: Contém a definição da classe `Carro`, onde aplicamos o encapsulamento.
- `InterfaceCar.php`: Define a interface que a classe `Carro` implementa.

## Encapsulamento na Classe Carro

Na classe `Carro`, aplicamos o encapsulamento seguindo estas práticas:

- **Modificadores de Acesso**: Atributos definidos como `private` para controlar o acesso externo.
- **Métodos Getters e Setters**: Métodos públicos fornecem acesso controlado aos atributos privados.
- **Interface**: Implementação de uma interface `InterfaceCar` que define um contrato para a classe `Carro`.

## Exemplo de Uso

```php
require_once 'Carro.php';

// Criar uma instância de Carro
$carro = new Carro();

// Configurar os atributos usando os setters
$carro->setNomeComprador('Rafael');
$carro->setModeloDoCarro('Vectra');
$carro->setModeloDoCambio("Manual");

// Demonstrar métodos de funcionalidade
$carro->abrirPorta();
$carro->acelerar();
$carro->trocarMarcha();

// Exibir informações do carro
print_r($carro);
