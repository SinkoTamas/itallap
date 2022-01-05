<body>
    <div class="container">
<h1 class="d-flex justify-content-center">Italok</h1>

<table class="table table-stripped bg-dark table-dark">
    <thead>
        <th>ID</th>
        <th>Ital</th>
        <th>Ár</th>
        <th>Kategória</th>
    </thead>
    <tbody></tbody>
</table>
</div>
<script>
    fetch('../server/read.php')
    .then(response => response.json())
    .then(data => render(data))
    
function render(data){
    console.log(data)
    let tblStr = ''
    for(let obj of data)
        tblStr += `<tr><td>${obj.id}</td><td>${obj.ital}</td><td>${obj.ar}Ft</td><td>${obj.nev}</td></tr>`
        document.querySelector('tbody').innerHTML = tblStr
} 


</script>

</body>