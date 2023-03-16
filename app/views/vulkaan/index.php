<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MVC - OOP - Toets</title>
    
    <link rel=stylesheet href="styling/style.css" />
</head>
<body>
    <style>
        body {
            background-color: #f5f5f5;
            align-items: center;
            justify-content: center;
            display: flex;
            flex-direction: column;
        }
        .title {
            text-align: center;
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: #155ceb;
            font-family: 'Roboto', sans-serif;
        }
        .table {
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            color: #000;
            font-size: 1.2rem;
            margin: 50px;
        }
        thead {
            font-family: 'Roboto', sans-serif;
            font-weight: 700;
            font-size: 1.3rem;
            padding: 20px;
            margin-left: -1rem;
        }
        th {
            text-align: left;
        }
        tr {
            padding: 20px;
            margin: 20px;
        }
        tbody {
            padding: 20px;
            margin-left: 2rem;
            font-family: 'Roboto', sans-serif;
        }
    </style>
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