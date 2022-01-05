<body>
    <div class="container">
<h1 class="d-flex justify-content-center">Kategóriák</h1>

<table class="table table-stripped bg-dark table-dark">
    <thead>
    <th>Id</th>    
    <th>Nev</th>
    </thead>
    <tbody></tbody>
</table>
</div>
<script>
    fetch('../server/readKategoria.php')
    .then(response => response.json())
    .then(data => render(data))
    
function render(data){
    console.log(data)
    let tblStr = ''
    for(let obj of data)
        tblStr += `<tr><td>${obj.id}</td><td>${obj.nev}</td></tr>`
        document.querySelector('tbody').innerHTML = tblStr
} 


</script>

</body>