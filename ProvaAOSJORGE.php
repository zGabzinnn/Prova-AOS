<?
function helloWorld() {
  echo "Hello World!" . PHP;
}

helloWorld();


function helloNome($nome) {
  echo "Hello $nome!" . PHP;
}

helloNome("João");


$alunos = ["douglas", "kratos", "Murilo", "Jeff", "Carlitos"];

echo $alunos[5];


$numeros = [1, -2, 3, -4, 5];


function mostrarNumeros($numeros) {
  echo "Números positivos:"
  foreach ($numeros as $numero) {
    if ($numero > 0) {
      echo "$numero ";
    }
  }

  echo PHP_EOL . "Números negativos:" . PHP_EOL;
  foreach ($numeros as $numero) {
    if ($numero < 0) {
      echo "$numero ";
    }
  }
  echo PHP;
}

mostrarNumeros($numeros);

function mostrarNomesComTamanho($nomes) {
  foreach ($nomes as $nome) {
    echo "$nome tem " . strlen($nome) . " letras" . PHP;
  }
}

mostrarNomesComTamanho($alunos);

$aluno = [
  "nome" => "João",
  "idade" => 18,
  "cursoTecnico" => "Informática"
];

function mostrarIdade($aluno) {
  if ($aluno["idade"] < 18) {
    echo "{$aluno["nome"]} tem menos de 18 anos." . PHP;
  } else {
    echo "{$aluno["nome"]} tem mais de 18 anos." . PHP;
  }
}

mostrarIdade($aluno);

function mostrarAlunosInformatica($alunos) {
  foreach ($alunos as $aluno) {
    if ($aluno["cursoTecnico"] === "Informática") {
      echo "{$aluno["nome"]} - {$aluno["cursoTecnico"]}" . PHP;
    }
  }
}

mostrarAlunosInformatica([
  ["nome" => "Ana", "idade" => 19, "cursoTecnico" => "Enfermagem"],
  ["nome" => "João", "idade" => 18, "cursoTecnico" => "Informática"],
  ["nome" => "Maria", "idade" => 20, "cursoTecnico" => "Administração"],
]);
>