<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Endereço</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Buscar Endereço por CEP</h2>
        <form id="form-cep" class="form-inline">
            <div class="form-group">
                <input type="text" class="form-control" id="cep" name="cep" placeholder="Digite o CEP" maxlength="9">
            </div>
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>
        <div id="endereco" class="mt-3"></div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#cep').mask('00000-000');
    
            $('#cep').on('input', function() { 
                var cep = $(this).val();
                
                if (cep.length === 9) {
    
                    $.ajax({
                        url: '/api/buscar-endereco',
                        method: 'GET',
                        data: { cep: cep },
                        success: function(response) {
                            var enderecoHtml = '<h3>Informações do Endereço</h3><table class="table table-bordered"><tbody>';
                            $.each(response, function(key, value) {
                                enderecoHtml += '<tr><td><strong>' + key.replace('_', ' ').toUpperCase() + '</strong></td><td>' + value + '</td></tr>';
                            });
                            enderecoHtml += '</tbody></table>';
                            $('#endereco').html(enderecoHtml);
                        },
                        error: function(xhr) {
                            $('#endereco').html('<div class="alert alert-danger" role="alert">Erro: ' + xhr.responseJSON.error + '</div>');
                        }
                    });
                } else {
                    $('#endereco').html('<div class="alert alert-warning" role="alert">Por favor, digite um CEP válido.</div>');
                }
            });
        });
    </script>

</body>
</html>
