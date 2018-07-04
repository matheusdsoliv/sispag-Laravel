<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

class FormularioPagamentoController extends Controller
{
    public function index(){    

    //PASSO 1
    // Recebendo dados do formulário
    $_dados = array(
         'cpf' => $_POST['cpf'],
         'funcionario' => $_POST['funcionario'],
         'ano_nascimento' => $_POST['ano_nascimento'],
         'salario_base' => $_POST['salario_base'],
         'qtd_filhos' => $_POST['qtd_filhos']
    );

    // PASSO 2
    // PROCESSAMENTO DOS DADOS
    Session::put('_session_funcionario', $_dados['funcionario']);
    Session::put('_session_idade', calc_idade($_dados['ano_nascimento']) );
    Session::put('_session_cpf', $_dados['cpf']);
    Session::put('_session_salario_base', $_dados['salario_base']);
    Session::put('_session_qtd_filhos', $_dados['qtd_filhos']);
    Session::put('_session_abono', calc_abono( session('_session_idade') ) );
    Session::put('_session_salario_familia', calc_sal_familia($_dados['qtd_filhos']));
    Session::put('_session_salario_bruto', $_dados['salario_base'] + calc_sal_familia( $_dados['qtd_filhos'] ) + calc_abono( session('_session_idade') ) );
    Session::put('_session_inss', calc_inss( session('_session_salario_bruto')));
    Session::put('_session_salario_liquido', calc_sal_liq(session('_session_salario_bruto'), session('_session_inss')) ); 

    // require("ApresentaçãoCupomSalarial.php");

    // PASSO 3
    // EXIBIR OS DADOS - PARA TESTE
    // imprime($_idade, $_abono, $_salario_familia, $_salario_bruto, $_inss, $_salario_liquido);
    // print_r($_SESSION);
    // exit;

    // PASSO 4
    // REDIRECIONAR À PÁGINA DE APRESENTAÇÃO DO CUMPOM FISCAL
    return view('ApresentacaoCumpomSalarialView');
    }
}
?>