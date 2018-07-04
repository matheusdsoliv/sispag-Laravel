<?php

    // Cálculo da IDADE
    function calc_idade($_data_nascimento){

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

    // Processamento ABONO
    function calc_abono($_idade){
        $_abono = ($_idade > 40) ? 800 : 0 ; 
        return $_abono;
    }

    // Processamento SALÁRIO FAMÍLIA
    function calc_sal_familia($_qtd_filhos){
        $_salario_familia = $_qtd_filhos * 30; 
        return $_salario_familia;
    }

    // Processamento INSS
    function calc_inss($_salario_bruto){
        $_inss = 0.11 * $_salario_bruto; 
        return $_inss;
    }
    
    // Processamento SALÁRIO LÍQUIDO
    function calc_sal_liq($_salario_bruto, $_inss){
        $_salario_liquido = $_salario_bruto - $_inss; 
        return $_salario_liquido;
    }

    // Modificar a função
    function imprime($_idade, $_abono, $_salario_familia, $_salario_bruto, $_inss, $_salario_liquido){
        $_dados_processados = array(
                                'idade' => $_idade,
                                'abono' => $_abono,
                                'salario familia' => $_salario_familia,
                                'salario bruto' => $_salario_bruto,
                                'inss' => $_inss,
                                'salario liquido' => $_salario_liquido
        );
        print_r($_dados_processados);
    }

?>