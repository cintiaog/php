
<!DOCTYPE html>


<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/estilo.css" rel="stylesheet" type="text/css">
    <title>Exercícios</title>
</head>
<body>
<Form class="formulario" action="questao1.php" method="POST">
<Fieldset>
<h2>Questão 1</h2>
<h3>Resposta:</h3>
<p><?php
include('func.php');
echo numeroInteiro($_POST['valor']).vericacaoRange09($_POST['valor']);
?>
</form>

<Form class="formulario-submit" action="questao2.php" method="POST">
<input type="submit" name="next" class="next" value="próximo">
<p><p>
</Fieldset>
</form>
</body>
</html>