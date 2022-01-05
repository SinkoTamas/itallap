<body>
<div class="container">
<h1 class="d-flex justify-content-center">Kategoria törlése</h1>

<table class="table table-stripped bg-dark table-dark">
    <thead>
        <th>ID</th>
        <th>Kategoria</th>
        <th>&nbsp;</th>
    </thead>
    <tbody id="lista"></tbody>
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
        tblStr += `<tr><td>${obj.id}</td><td>${obj.nev}</td>
        <td class="btn btn-danger" id="${obj.id}" onclick="del(this)">delete</td></tr>`;
        document.querySelector('tbody').innerHTML = tblStr
}
        function del(obj){
            console.log(obj.id);
    fetch(`../server/deleteItal.php?id=${obj.id}`)
    .then(response => response.text())
    .then(data => console.log(data))
        }
 


</script>
</body>