<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Peluches</title>
    <style>
        h1{
            font-weight:bold;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
        }
        h3{
            font-family:Verdana, Geneva, Tahoma, sans-serif;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .table th,
        .table td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            font-family: Arial, Helvetica, sans-serif;
        }
        .table thead th {
            background-color: #F33B54; 
            color: #fff;
        }
        .table tbody tr:nth-child(even) {
            background-color: #EAEAEA; 
        }
        .table tbody tr:nth-child(odd) {
            background-color: #FFFFFF;
        }
    </style>
</head>
<body>
    <h3><center> Practica de MongoDB con Laravel</center></h3>
    
    <h1><center> Tabla de Productos</center></h1>
    <h3><center>Cynthia Tepetate Torres</center></h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Stock</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datos as $dat)
            <tr>
                <td>{{ $dat->_id}}</td>
                <td>{{ $dat->nombre}}</td>
                <td>{{ $dat->precio}}</td>
                <td>{{ $dat->stock}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

