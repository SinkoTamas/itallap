<form class="form-inline">
<input type="text" name="" id="kategoria" class="form-control" placeholder="írd be a kategória nevét">
<input type="button" value="mentés" class="btn btn-primary" onclick="uj()">

</form>

<script>
function uj(){
let kategoria= document.getElementById("kategoria").value


fetch(`../server/insertItal.php?nev=${kategoria}`)
    .then(response => response.text())
    .then(data => console.log(data ? "sikeres":"hiba    "))
        
 
}
</script>