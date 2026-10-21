<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

class CalculadoraDeDesconto
{
    public function calculaDesconto(Orcamento $orcamento):float{
        if($orcamento->quantidadeItens > 5){
            return $orcamento-> valor * 0.1;
        }
        return 0;
    }
}