<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">

    <title> Cupom Salarial </title>
</head>

<body>
    <div class="container">
        <h3 class="page-header bg-dark p-4 text-white"> CUPOM SALARIAL </h3>
        <div class="table-responsive">
            <table class="table table-striped table-hover">

                <tbody>

                    <tr>
                        <th scope="row">Funcionário</th>
                        <td> {{$_funcionario}} </td>
                    </tr>

                    <tr>
                        <th scope="row">Idade</th>
                        <td> {{$_idade}} </td>
                    </tr>

                    <tr>
                        <th scope="row">Quantidade de filhos</th>
                        <td> {{$_qtd_filhos}} </td>
                    </tr>

                    <tr>
                        <th scope="row">CPF</th>
                        <td> {{$_cpf}} </td>
                    </tr>

                    <tr>
                        <th scope="row">Salário Base</th>
                        <td> {{$_salario_base}} </td>
                    </tr>

                    <tr>
                        <th scope="row">Salário Família</th>
                        <td> {{$_salario_familia}} </td>
                    </tr>

                    <tr>
                        <th scope="row">Abono</th>
                        <td> {{$_abono}} </td>
                    </tr>

                    <tr>
                        <th scope="row">Salário Bruto</th>
                        <td> {{$_salario_bruto}} </td>
                    </tr>

                    <tr>
                        <th scope="row">INSS</th>
                        <td> {{$_inss}} </td>
                    </tr>

                    <tr>
                        <th scope="row">Salário Líquido</th>
                        <td> {{$_salario_liquido}} </td>
                    </tr>

                </tbody>
            </table>
        </div>
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