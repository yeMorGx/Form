<?php
echo "<h1>Dados Enviados</h1>";
echo "<p>Torcedor: " . $_POST['name'] . "</p>";
//echo "<p>Torcedor: {$_POST['nome']} </p>";
echo "============================================================================";
echo "<p> CPF: " . $_POST['CPF'] . "</p>";
echo "<p> E-mail:" . $_POST['email'] . "</p>";
echo "<p> Time do coração: " . $_POST['Time'] . "</p>"; 
echo "<p> A quanto tempo você é sócio: " . $_POST['p1'] . "</p>";
echo "<p> Você tem camisa oficial: " . $_POST['radio-group2'] . "</p>";
echo "<p> voce costuma frequentar estádio: " . $_POST['radio-group'] . "</p>";


$frequencia = isset($_POST['p3']) ? $_POST['p3'] : 'Não';
echo "<p>Frequência: " . $frequencia . "</p>";

$sociotorcedor = isset($_POST['p4']) ? $_POST['p4'] : 'Não';
echo "<p>Está satisfeito com o pacote de Sócio Torcedor: " . $sociotorcedor . "</p>";