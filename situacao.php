<?php 

$notas_e_materias = [
    "Matematica" => [3, 6, 7, 2],
    "Português" => [5, 7, 8, 9],
    "Geografia" => [4, 6, 9, 8],
    "História" => [6, 7, 8, 9],
    "Educação física" => [10, 10, 10, 9],
    "Ciências" => [8, 6, 7, 10],
    "Inglês" => [7, 7, 7, 8]
];

if (isset($_POST['matricula']) && $_POST['matricula'] == '240710') {
    echo "<p><h1>Boletim</h1></p>";

    foreach ($notas_e_materias as $materia => $nota) {
        $media = array_sum($nota) / count($nota);
    
        if ($media >= 6) {
            echo "<p>$materia: Situação: Aprovado! Média: $media</p>";
        }
        else {
            echo "<p>$materia: Situação: Reprovado! Média: $media</p>";
        };
    }
}else{
    echo "Aluno inexistente";
}
