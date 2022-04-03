<!DOCTYPE html>
<html>

<body>

<h1>Customers</h1>
<div id="id01"></div>

<script>
var xmlhttp = new XMLHttpRequest();
var url = "http://localhost/stripesrun/admin/access.php?key=bdjv7254nfn4djv734hs63gdas765vhrif7&startcount=6&printcount=5000000";

xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        myFunction(xmlhttp.responseText);
    }
}
xmlhttp.open("GET", url, true);
xmlhttp.send();

function myFunction(response) {
    var arr = JSON.parse(response);
    var i;
    var out = "<table>";

    for(i = 0; i < arr.length; i++) {
        out += "<tr><td>" +
        arr[i].race_category +
        "</td><td>" +
        arr[i].registration_branch +
        "</td><td>" +
        arr[i].first_name +
        "</td></tr>";
    }
    out += "</table>"
    document.getElementById("id01").innerHTML = out;
}
</script>

</body>
</html>