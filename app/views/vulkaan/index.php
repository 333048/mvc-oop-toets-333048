<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC - OOP - Toets</title>
</head>
<body>
    <div class="vulkContainer">
        <h3 class="title"><?= $data['title']; ?></h3>
        <table class="table">
            <thead>
                <tr>
                <th>Id</th>
                <th>Naam</th>
                <th>Hoogte (m)</th>
                <th>Land</th>
                <th>Laatste Uitbarsting</th>
                <th>Aantal Slachtoffers</th>
                </tr>
            </thead>
            <tbody>
                <?= $data['rows']; ?>
            </tbody>
        </table>
    </div>
</body>
</html>