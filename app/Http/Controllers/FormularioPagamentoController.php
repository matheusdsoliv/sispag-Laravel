<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\FolhaPagamento;


class FormularioPagamentoController extends Controller
{
    public function index(){    
        
        return view('FormularioPagamentoView');
    }
    
    public function store(Request $request){
        
        $_FolhaPagamento = new FolhaPagamento();
        
        $_funcionario = $request->funcionario;
        $_cpf = $request->cpf;
        $_salario_base = $request->salario_base;
        $_qtd_filhos = $request->qtd_filhos;

        $_idade = $_FolhaPagamento->calcularIdade($request->ano_nascimento);
        $_abono = $_FolhaPagamento->calcularAbono($_idade);
        $_salario_familia = $_FolhaPagamento->calcularSalarioFamilia($_qtd_filhos);
        $_salario_bruto = $_salario_base + $_salario_familia + $_abono;
        $_inss = $_FolhaPagamento->calcularInss($_salario_bruto);
        $_salario_liquido = $_FolhaPagamento->calcularSalarioLiquido($_salario_bruto, $_inss);
        
        return view('ApresentacaoCupomSalarialView', compact('_funcionario','_cpf','_salario_base','_qtd_filhos','_idade','_abono','_salario_familia','_salario_bruto','_inss','_salario_liquido'));

    }
    
}
?>