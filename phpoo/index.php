<?php
 
class Carro
{
    public $marca;
    public $modelo;
    public $ano;
}

function __construct ($marca, $modelo,$ano)
{
    $this-> marca = $marca;
    $this-> modelo = $modelo;
    $this-> ano = $ana;
}
function set_marca()
{
    $this->marca = $marca;
}
function set_modelo()
{
    $this-> modelo = $modelo;
}
function set_ano()
{
    $this-> ano = $ano;
}
function get_marca()
{
    return $this-> marca = $marca;
}
function get_modelo()
{
    return $this-> modelo = $modelo;
}
function get_ano()
{
    return $this-> ano = $ano;
}
?>