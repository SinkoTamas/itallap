<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 class="d-flex justify-content-center">Fajták</h1>
   <div class="text-center"><select name="" id="lista"></select></div>
   <table class="table table-stripped bg-dark table-dark">
    <thead>
        <th>ID</th>
        <th>Ital</th>
        <th>Ar</th>
    </thead>
    <tbody id="lista"></tbody>
</table>
    <script>
        
    fetch('../server/readKategoria.php')
    .then(response => response.json())
    .then(data => render(data))

    function render(data){
        console.log(data)
        let select = '<option value="0">válasszon ki egy italt</option>'
        for(let obj of data)
            select += `<option value="${obj.id}">${obj.nev}</option>`
            document.getElementById('lista').innerHTML = select

document.getElementById('lista').addEventListener('change',myFilter)
    }
    function myFilter(e){
        console.log(e.target.value)
            fetch(`../server/readItalok.php?id=${e.target.value}`)
            .then(response => response.json())
            .then(data => renderTable(data))
    }
    function renderTable(data){
        console.log(data)
        let tblStr = ''
        for(let obj of data)
            tblStr += `<tr><td>${obj.id}</td><td>${obj.ital}</td><td>${obj.ar}</td></tr>`
            document.querySelector('tbody').innerHTML = tblStr
    } 


    </script>
</body>
</html>
