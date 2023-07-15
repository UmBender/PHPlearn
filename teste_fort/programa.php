<?php


class MinhaClasse {

	public string $meuNome;

	public function __construct(string $nome) {
		$this->meuNome = $nome;
	}

	public function returnName(): string {
		return $this->meuNome;
	}
}

$novaClasse = new MinhaClasse("Gustavo");

echo $novaClasse->returnName() . PHP_EOL;

echo "Teste" . PHP_EOL;

$valores = ["um", "dois", "tres"];
$teste = [
	"um" => 1,
	"dois" => 2,
	"tres" => 3,
	"quatro" => 4
];


foreach ($valores as $key => $value) {
	echo $key. " => numerico: ".  $value . PHP_EOL;
}



