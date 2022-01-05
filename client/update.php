<h1 class="text-center">Kategória módosítása</caption>
</h1>
<div class="row justify-content-center">
  <div class="table-responsive-md">
    <div class="table-container ">
      <table class="table  table-striped  ">
        <thead class="thead thead-dark">
          <th>Id</th>
          <th>Kategória</th>
          <th>&nbsp;</th>
        </thead>
        <tbody></tbody>
      </table>
    </div>
  </div>
</div>
<!------------------------------------------------->
<script>
  fetch(`../server/readKategoria.php`)
    .then((response) => response.json())
    .then((data) => render(data));

  function render(data) {
    console.log(data);
    let tblString = "";
    for (let obj of data)
      tblString += `<tr><td>${obj.id}</td><td class="border border-danger" contenteditable style="width:300px;">${obj.nev}</td>
                      <td class="btn btn-primary" id='${obj.id}' onclick="modosit(this)">mentés</td></tr>`
    document.querySelector("tbody").innerHTML = tblString;

  }

  function modosit(obj) {
    //console.log(obj.id)
    //console.log(document.getElementById(obj.id))
    //console.log(document.getElementById(obj.id).previousElementSibling.textContent)
    let nev=document.getElementById(obj.id).previousElementSibling.textContent
    const data = {
      'id': obj.id,
      'nev': nev
    }
    console.log(data)

    fetch('../server/updateItal.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json; charset=UTF-8'
        },
        body: JSON.stringify(data)
      })
      .then(response => response.text())
      .then(data => {
        console.log(data);
      })
  }
</script>