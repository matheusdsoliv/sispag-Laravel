<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FolhaPagamento extends Model
{
    public function calcularIdade($_data_nascimento){

        $_data_nasc = explode('-', $_data_nascimento);

        $_data_atual = date('d/m/Y');
        $_data_atual = explode('/', $_data_atual);
    
        $_idade = $_data_atual[2] - $_data_nasc[0];
    
        if ($_data_nasc[1] > $_data_atual[1]) {
            $_idade = $_idade - 1;
        } 
        elseif ( ( $_data_nasc[1] == $_data_atual[1] ) and ( $_data_nasc[2] > $_data_atual[0] ) ) {
                $_idade = $_idade - 1;
        }
        return $_idade;
    }

    public function calcularAbono($_idade){
        $_abono = ($_idade > 40) ? 800 : 0 ; 
        return $_abono;
    }

    public function calcularSalarioFamilia($_qtd_filhos){
        $_salario_familia = $_qtd_filhos * 30; 
        return $_salario_familia;
    }

    public function calcularInss($_salario_bruto){
        $_inss = 0.11 * $_salario_bruto; 
        return $_inss;
    }

    public function calcularSalarioLiquido($_salario_bruto, $_inss){
        $_salario_liquido = $_salario_bruto - $_inss; 
        return $_salario_liquido;
    }

}
