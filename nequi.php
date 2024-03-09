<?php

class Nequi{
    private $titular;
    private $saldo;

    public function __construct($titular,$saldo){
        $this -> titular = $titular;
        $this -> saldo = $saldo;

    }

    public function depositar($cantidad){
        if($cantidad > 0){
            $this -> saldo += $cantidad; 
            echo "Te depositaron $cantidad en tu cuenta $this->titular.Saldo actual: $this->saldo";
        }
        else {
            echo "La cabtudad a depositar debe ser mayor a 0 (cero)";
        }
    }

    public function retirar($cantidad){
        if($cantidad > 0 && $cantidad <= $this -> saldo){
            $this -> saldo -= $cantidad;
            echo "Retiraste $cantidad de cuenta $this->titular. Saldo actual:$this->saldo";
        }
        else{
            echo"La cantidad a retirar excede lo que tienes en disponible";
        }
    }

    public function getInformacion(){
        return "Titular: $this->titular,Saldo: $this->saldo";
    }
}

$julian = new Nequi('Julian',0);
$julian->depositar(50000);

echo $victor->getInformacion();

