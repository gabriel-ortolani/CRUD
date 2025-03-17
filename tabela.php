<?php
    $servername = "localhost";
    $username = "root";
    $password = "Senai@118";
    $dbname = "legal";

    // Conectando ao banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificando se houve erro na conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

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
</head>
<body>
    <div class="container">
        <table border="1" class="table w-100 d-flex row justify-content-center">
            <thead>
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
                    echo "<tr><td colspan='2'>Nenhum dado encontrado</td></tr>";
                }
            ?>
            </tbody>
        </table>
        </body>
        </html>
        
        <?php
        // Fechando a conexão com o banco de dados
        $conn->close();
        ?>
    </div>
