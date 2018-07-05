<?php

    // Cálculo da IDADE
    if(! function_exists('calc_idade') ){
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
    }

    // Processamento ABONO
    if(! function_exists('calc_abono') ){
        function calc_abono($_idade){
            $_abono = ($_idade > 40) ? 800 : 0 ; 
            return $_abono;
        }
    }

        // Processamento SALÁRIO FAMÍLIA
    if(! function_exists('calc_sal_familia') ){
        function calc_sal_familia($_qtd_filhos){
            $_salario_familia = $_qtd_filhos * 30; 
            return $_salario_familia;
        }
    }

        // Processamento INSS
    if(! function_exists('calc_inss') ){
        function calc_inss($_salario_bruto){
            $_inss = 0.11 * $_salario_bruto; 
            return $_inss;
        }
    }
        
        // Processamento SALÁRIO LÍQUIDO
    if(! function_exists('calc_sal_liq') ){
        function calc_sal_liq($_salario_bruto, $_inss){
            $_salario_liquido = $_salario_bruto - $_inss; 
            return $_salario_liquido;
        }
    }

    // Modificar a função
    if(! function_exists('imprime') ){
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
    }

?>