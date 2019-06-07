<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Livros</h1>
    <table>
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nome</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach($livros as $l){
                echo "<tr>".
                " <td>".$l->codigo."</td>". 
                " <td>".$l->nome."</td>".
                "</tr>";
            }
        ?>
        </tbody>
    </table>
</body>
</html>