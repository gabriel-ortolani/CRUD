<?php
    include("conexao.php");

    // Realizando a consulta SQL para buscar dados da tabela 'nomes'
    $sql = "SELECT id, nome FROM nomes";  // Nome correto da tabela é 'nomes'
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        table {
            margin-top: 20px;
        }
        th, td {
            text-align: center;
        }
        .table-custom {
            background-color: #343a40;
            color: white;
        }
        .table-custom th, .table-custom td {
            border: 1px solid #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">Lista de Nomes</h2>
        <table class="table table-custom table-striped table-bordered table-hover">
            <thead class="table-info">
                <tr>
                    <th>id</th>
                    <th>nome</th>
                </tr>
            </thead>
            <tbody>
            <?php
                // Verificando se a consulta retornou resultados
                if ($result->num_rows > 0) {
                    // Iterando sobre os resultados
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['nome'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='2' class='text-center'>Nenhum dado encontrado</td></tr>";
                }
            ?>
            </tbody>
        </table>
    </div>

</body>
</html>