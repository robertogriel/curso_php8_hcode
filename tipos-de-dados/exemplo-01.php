<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$nome = "Roberto";
$sobrenome = 'Griel';
$idade = 31;
$peso = 90.1;
$vip = true;

echo gettype($nome); //string
echo gettype($sobrenome);  //string
echo get_debug_type($nome);  //string
echo get_debug_type($sobrenome);  //string
echo get_debug_type($idade); //int
echo get_debug_type($peso); //float
echo get_debug_type($vip); //bol

//

$aereas = [
    "Gol",
    "Latam",
    "Azul"
];

//print_r($aereas);
echo gettype($aereas[0]); //string
echo get_debug_type($aereas); //array



class Cliente 
{
    public function __construct(
        public string $nome
    )
    {
        echo $this->nome;
    }
}
$cliente = new Cliente("Roberto");
echo gettype($cliente); //object
echo "<br/>";
echo get_debug_type($cliente); //Nome da Classe invocada
echo "<br/>";

//

$linhasAereas = function(): iterable {
    return [
        "Gol",
        "Latam",
        "Azul"
    ];
};

echo gettype($linhasAereas());
echo "<br/>";
echo get_debug_type($linhasAereas());
echo "<br/>";
var_dump(is_iterable($linhasAereas()));
echo "<br/>";
var_dump(is_callable($linhasAereas));