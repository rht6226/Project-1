<html>
<head>
    <style>
    .select{
        width:150px;
        padding: 0.375rem 0.75rem;
        line-height:1rem;
        border:1px solid #ced4da;
        border-radius: 0.25rem;
    }</style>
     
</head>
<body>
	<table  id="myTable">
    <tr>
		<td>
			<select class="select" name="a0">
  <option value="1">A1</option>
  <option value="2">A2</option>
  <option value="3">A3</option>
  <option value="4">B1</option>
  <option value="5">B2</option>
  <option value="6">B3</option>
  <option value="7">C1</option>
  <option value="8">C2</option>
  <option value="9">C3</option>
  <option value="10">D1</option>
  <option value="11">D2</option>
  <option value="12">D3</option>
  <option value="13">E1</option>
  <option value="14">E2</option>
  <option value="15">E3</option>
  <option value="16">F1</option>
  <option value="17">F2</option>
  <option value="18">F3</option>
  <option value="19">G1</option>
  <option value="20">G2</option>
  			</select>
		</td>
		<td>
			<select class="select" name="b0">
  <option value="1">Maths</option>
  <option value="2">Ecology</option>
  <option value="3">Communictaion Skill Workshop</option>
  <option value="4">Engineering Mechanics</option>
  <option value="5">Engineering Mechanics Lab</option>
  <option value="6">Computer</option>
  <option value="7">Computer Lab</option>
  <option value="8">Engineering Drawing</option>
  <option value="9">ED Lab</option>
  <option value="9">Physics</option>
  <option value="10">Physics Lab</option>
  <option value="11">Chemistry</option>
  <option value="12">Chemistry Lab</option>
  <option value="13">Workshop</option>
  <option value="14">Workshop lab</option>
  <option value="15">English</option>
  <option value="16">English Lab</option>
  			</select>
		</td>
	<td><input type="button" class="button select" value="Add another line" onclick="addField();"></td>
	</table>
	<script>function addField () 
	{
        var myTable = document.getElementById("myTable");
        var currentIndex = myTable.rows.length;
        var currentRow = myTable.insertRow(-1);
var selectList = document.createElement("select");selectList.name = "a" + currentIndex; selectList.setAttribute("class", "select");
var array = ["A1","A2","A3","B1","B2","B3","C1","C2","C3","D1","D2","D3","E1","E2","E3","F1","F2","F3","G1","G2"];
for (var i = 0; i < array.length; i++) 
{
    var option = document.createElement("option");
    option.value = array[i];
    option.text = array[i];
    selectList.appendChild(option);
}
var selectListt = document.createElement("select");selectListt.name = "b" + currentIndex; selectListt.setAttribute("class", "select");
var arrayy = ["Maths","Ecology","Communictaion Skill Workshop","Engineering Mechanics","Engineering Mechanics Lab","Computer","Computer Lab","Engineering Drawing","ED Lab","Physics","Physics Lab","Chemistry","Chemistry Lab","Workshop","Workshop lab","English","English Lab"];
for (var m = 0; m < arrayy.length; m++) 
{
    var optionn = document.createElement("option");
    optionn.value = array[m];
    optionn.text = arrayy[m];
    selectListt.appendChild(optionn);
}
var currentCell = currentRow.insertCell(-1);
        currentCell.appendChild(selectList);
        currentCell = currentRow.insertCell(-1);
        currentCell.appendChild(selectListt);
    }</script>

</body>

</html>


