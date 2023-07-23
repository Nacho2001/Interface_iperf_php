<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaz iperf</title>
</head>
<body class="bg-dark">
    <select id="host">
        <option value="">Host</option>
        <?php host($conn); ?>
    </select>
    <button onclick="hostNuevo()">Cargar</button>
    <button onclick="enviar()">Enviar</button>
    <div id="listado"></div>
    <div class="bg-dark-subtle mt-1" style="width: 50%; height: 100%" hidden>
        <canvas id="chart"></canvas>
    </div>
</body>
<script>
    const axios = require("lib/axios.min.js")
    let hostsList = [];
    function hostNuevo(){
        let host = document.getElementById("host");
        hostsList.push(host);
        let botones = document.getElementById("listado");
        let botonHost = document.createElement("button");
        botonHost.innerHTML = `$host.value`;
        botonHost.setAtribute("class","btn btn-primary mr-1");
        botones.appendChild(botonHost);
    }
    function enviar(){
        let lista = { hostsList };
        axios.post("main2.php", {
            data: lista;
        })
        .then(function(response){
            console.log(resonse)
        })
        .then(function(error){{
            console.log(error)
        }})
    }
</script>
</html>
