<?php


namespace Bender\BDTeste\Programa;

class Programa{
	private string $nome;

	public function __construct(string $nome) {
		$this->nome = $nome;
	}

	public function print_nome() {
		echo $this->nome . PHP_EOL;
	}
	
}

