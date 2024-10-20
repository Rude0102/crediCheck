<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Cliente</title>
       <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #f0f4f8, #d9d9d9); /* Degradê leve */
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .score-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            padding: 20px;
            text-align: center;
            margin: 20px 0;
        }

        .score-title {
            font-size: 24px;
            color: #9408a7;
            margin-bottom: 10px;
        }

        .score-value {
            font-size: 48px;
            font-weight: bold;
            color: #9408a7;
            margin: 10px 0;
        }

        .score-description {
            font-size: 16px;
            color: #666;
            margin-bottom: 20px;
        }

        .info {
            display: flex;
            justify-content: space-between;
            margin: 20px 0;
        }

        .info-item {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 15px;
            width: 22%; /* Ajuste a largura conforme necessário */
            text-align: center;
        }

        .chart-container {
            position: relative;
            margin: 20px auto;
            width: 80%;
            height: 300px;
        }

        .chart-legend {
            display: flex;
            justify-content: center;
            margin-top: 10px;
            font-size: 14px;
        }

        .chart-legend div {
            margin: 0 10px;
            display: flex;
            align-items: center;
        }

        .legend-color {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <h1>Dados do Cliente</h1>
    <table>
        <tr>
            <th>ID</th>
            <td>{{ $client->id }}</td>
        </tr>
        <tr>
            <th>Nome</th>
            <td>{{ $client->name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $client->email }}</td>
        </tr>
        <tr>
            <th>Endere�o</th>
            <td>{{ $client->address }}</td>
        </tr>
        <tr>
            <th>Telefone</th>
            <td>{{ $client->phone }}</td>
        </tr>
    </table>
</body>
</html>
