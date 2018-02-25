<?php 
include_once "autoload.php";

use Percentual\Meta;
use Percentual\Atividade;
use Percentual\EstrategiaParaMetasNovas;
use Percentual\EstrategiaParaMetasPassadas;

$meta = new Meta(1,"Meta da CANOASTEC");
$meta->atribuirAtividade(new Atividade(1,80));
$meta->atribuirAtividade(new Atividade(1,20));
$meta->atribuirAtividade(new Atividade(1,50));

$calculadoraPercentual = new EstrategiaParaMetasNovas();
$calculadoraPercentual->calcular($meta);

$calculadoraPercentual = new EstrategiaParaMetasPassadas();
$calculadoraPercentual->calcular($meta);