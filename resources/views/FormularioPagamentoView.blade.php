<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Formulário Salario </title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
</head>

<body class="bg-dark text-white">

    <div class="container">
        
        <h1>Cálculo Salarial</h1>

        <form name="Formulário" method="POST" action="{{route('rota_capta_form')}}">
        {{ csrf_field() }}
            <legend>Informações Pessoais</legend>
            <br>
            
                <div class="form-group">
                    <label for="CPF">CPF</label>
                    <input class="form-control" id="CPF" type="text" name="cpf" placeholder="Exemplo: 090123734-34" autocomplete="on" required/>
                </div>
        
                <div class="form-group">
                    <label for="Funcionario">Funcionário</label>
                    <input class="form-control" id="Funcionario" type="text" name="funcionario" placeholder="Digite seu nome" autocomplete="on" required/>
                </div>

                <div class="form-group">
                    <label for="AnoDeNascimento">Ano de Nascimento</label>
                    <input class="form-control" id="AnoDeNascimento" type="date" name="ano_nascimento" min="1918" required />
                </div>

                <div class="form-group">
                    <label for="SalarioBase">Salário Base</label>
                    <input class="form-control" id="SalarioBase" type="number" name="salario_base" placeholder="Informe em reais" min="0" required/>
                </div>

                <div class="form-group">
                    <label for="Qtd_Filhos">Quantidade de Filhos</label>
                    <input class="form-control" id="Qtd_Filhos" type="number" name="qtd_filhos" placeholder="2" min="0" max="50" required/>
                </div>

                <br>
                    
                    <!-- Limpando todos os dados -->
                <div class="row justify-content-around"> 
                    <div class="col-4 offset-1">
                        <input class="btn btn-outline-danger btn-lg" type="reset" value="Limpar dados">
                    </div>
                    <div class="col-4 offset-2">
                        <input class="btn btn-primary btn-lg" type="submit" value="Enviar dados">
                    </div>
                </div>
        </form>

    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
    
</body>

</html>