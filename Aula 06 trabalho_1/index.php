
//Curso: Tecnologia em Análise e Desenvolvimento de Sistemas
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ADS2B
Componentes:
            26011325-2 João Batista da Silva de Sousa Filho


//Eexercicio_01 Verificador de semáforo
<?php
      echo "Digite uma cor:";
      $cor = readline();

if ($cor == "Vermelho") {
  echo "Pare!";
}elseif ($cor == "Amarelo") {
  echo "Atenção!";
}elseif ($cor == "Verde") {
  echo "Siga!";
}else {
  echo "Cor inválida";
}
?>

//Exercicio_02 Calculadora de IMC
<?php
      echo "Digite seu peso:";
    $peso = (float) readline();

    echo "Digite sua altura:";
    $altura = (float) readline();

    $imc = $peso /($altura*$altura);
    echo "imc:" . $imc. "\n";
?>

//Exercicio_03 Dia da semana com switch

 <?php
    echo "Digite um número entre 1 e 7:";
    $dia_semana = (int) readline();
     $mensagem = "";

    switch ($dia_semana) {
    case 1:
        echo "Domingo - Fim de Semana.\n";
        break;
              
    case 2:
       echo "Segunda-feira - Dia Útil.\n";
        break;
    case 3:
        echo "Terça-feira - Dia Útil.\n";
         break;
    case 4:
        echo "Quarta-feira - Dia Útil.\n";
        break;
    case 5:
        echo "Quinta-feira - Dia Útil.\n";
        break;
    case 6:
        echo "Sexta-feira - Dia Útil.\n";
        break;
    case 7:
        echo "Sábado - Fim de Semana.\n";
        break;
    default:
        echo "Dia Inválido.\n";
        break;
          }
?>

//Exercicio_04 Lógica do Desconto

<?php

echo "Digite o valor da compra: R$ ";
$valor_compra = (float) readline();

if ($valor_compra > 150) {

    $desconto = $valor_compra * 0.10;
    $valor_final = $valor_compra - $desconto;

    echo "Desconto aplicado: 10%\n";
    echo "Valor final: R$ " . $valor_final . "\n";

} else {

    $falta = 150 - $valor_compra;

    echo "Sem desconto.\n";
    echo "Faltam R$ " . $falta . " para aplicar o desconto.\n";
}
?>
