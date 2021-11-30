<?php include("index.html")
?>
<head>
<style>
table,th,td{
border-collapse:collapse;}
th{
font: size 20px;
}
td{
font: size 25px;
text-align:center;
}
tr:nth-child(odd){
background-color: darkolivegreen}
tr:nth-child(even){
background-color: white;}
th:hover{
color:darkkhaki;}
td:hover{
background-color:lightblue;}
</style>
</head>
<body>
<div class="service">
<table border="2px" height="400px" width="700px" >
<tr>
<th>Bus No:</th>
<th>Driver Name</th>
<th>Phone Number</th>
</tr>

<tr>
<td>1</td>
<td>Html</td>
<td>874561232</td>
</tr>

<tr>
<td>5</td>
<td>Css</td>
<td>98745612320</td>
</tr>
<tr>
<td>7</td>
<td>Php</td>
<td>7896546512</td>
</tr>
<tr>
<td>33</td>
<td>Sql</td>
<td>8684579513</td>
</tr>
</table>
</div>
</body>

<?php include("Foot.html")
?>