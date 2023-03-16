<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC OOP - Toets</title>
</head>
<body>
    <h3><?= $data['title']; ?></h3>

    <table border="1">
        <thead>
            <th>Naam Vulkaan</th>
            <th>Hoogte (m)</th>
            <th>Land</th>
            <th>]Laatste Uitbarsting</th>
            <th>Aantal Slachtoffers</th>
        </thead>
        <tbody>
            <tr>
                <td><?= $data['Id']; ?></td>
                <td><?= $data['Naam']; ?></td>
                <td><?= $data['Hoogte']; ?></td>
                <td><?= $data['Land']; ?></td>
                <td><?= $data['JaarLaatsteUitbarsting']; ?></td>
                <td><?= $data['AantalSlachtoffers']; ?></td>
            </tr>
        </tbody>
    </table>

</body>
</html>