<!DOCTYPE html>
<html>
<body>

<div id="demo">
  <h2>The XMLHttpRequest Object</h2>
  <button type="button" onclick="loadDoc()">Change Content</button>
</div>

<script>
function loadDoc() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    if (this.status === 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    } else {
      document.getElementById("demo").innerHTML = "Error fetching data.";
    }
  };
  var url = "https://jsonplaceholder.typicode.com/todos/1";
  xhttp.open("GET", url, true);
  xhttp.send();
}
</script>

</body>
</html>
