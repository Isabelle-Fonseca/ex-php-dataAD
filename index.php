<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Tempo Trabalho</title>
</head>
<body>
    <div class="container">
        <h2>Calculadora de Tempo de Trabalho</h2>
        <form method="POST">
            <div class="form-content">
                <label for="input_admissao">Data de Admissão:</label>
                <input type="date" id="input_admissao" name="input_admissao" required>
            </div>
            <div class="form-content">
                <label for="input_demissao">Data de Demissão:</label>
                <input type="date" id="input_demissao" name="input_demissao" required>
            </div>
            <button type="submit">Calcular Tempo de Serviço</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dataAdmissao = $_POST['input_admissao'];
            $dataDemissao = $_POST['input_demissao'];

            $dataInicio = new DateTime($dataAdmissao);
            $dataFim = new DateTime($dataDemissao);

            $intervalo = $dataInicio->diff($dataFim);

            $anosTrabalhados = $intervalo->y;
            $mesesTrabalhados = $intervalo->m;
            $diasTrabalhados = $intervalo->d;

            echo "<div class='resultado-container'>";
            echo "<h3>Tempo de Serviço Calculado:</h3>";
            echo "<p><strong>Anos:</strong> $anosTrabalhados</p>";
            echo "<p><strong>Meses:</strong> $mesesTrabalhados</p>";
            echo "<p><strong>Dias:</strong> $diasTrabalhados</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
