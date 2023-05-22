<!-- HTML-ul pentru lista de telefoane si formularul de filtrare -->
<ul id="telefoane-lista">
  <li data-producator="Apple" data-pret="800" data-ram="3">iPhone X</li>
  <li data-producator="Samsung" data-pret="1000" data-ram="4">Galaxy S9</li>
  <li data-producator="Google" data-pret="700" data-ram="4">Pixel 2</li>
  <li data-producator="OnePlus" data-pret="500" data-ram="6">OnePlus 6T</li>
  <li data-producator="Huawei" data-pret="600" data-ram="4">P20 Pro</li>
</ul>

<form id="filtrare-form">
  <label for="producator">Producator:</label>
  <select id="producator" name="producator">
    <option value="">Toate</option>
    <option value="Apple">Apple</option>
    <option value="Samsung">Samsung</option>
    <option value="Google">Google</option>
    <option value="OnePlus">OnePlus</option>
    <option value="Huawei">Huawei</option>
  </select><br><br>
  
  <label for="pret">Pret maxim:</label>
  <input type="number" id="pret" name="pret"><br><br>
  
  <label for="ram">Ram minim:</label>
  <select id="ram" name="ram">
    <option value="">Toate</option>
    <option value="2">2GB</option>
    <option value="3">3GB</option>
    <option value="4">4GB</option>
    <option value="6">6GB</option>
    <option value="8">8GB</option>
  </select><br><br>
  
  <input type="submit" value="Filtreaza">
</form>

<script>
// JavaScript-ul pentru filtrarea listei de telefoane
document.getElementById("filtrare-form").addEventListener("submit", function(event) {
  event.preventDefault();
  
  var producator = document.getElementById("producator").value;
  var pret = document.getElementById("pret").value;
  var ram = document.getElementById("ram").value;
  
  var telefoane = document.getElementById("telefoane-lista").getElementsByTagName("li");
  for (var i = 0; i < telefoane.length; i++) {
    var telefon = telefoane[i];
    
    var afisat = true;
    if (producator && telefon.getAttribute("data-producator") !== producator) {
      afisat = false;
    }
    if (pret && parseInt(telefon.getAttribute("data-pret")) > parseInt(pret)) {
      afisat = false;
    }
    if (ram && parseInt(telefon.getAttribute("data-ram")) < parseInt(ram)) {
      afisat = false;
    }
    
    if (afisat) {
      telefon.style.display = "block";
    } else {
      telefon.style.display = "none";
    }
  }
});
</script>