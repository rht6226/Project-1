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
	<table id="myTable">
    <tr>
		<td>
			<select class="select" name="a0">
  <option disabled selected value>Select Group</option>
  <option value="a1">A1</option>
  <option value="a2">A2</option>
  <option value="a3">A3</option>
  <option value="b1">B1</option>
  <option value="b2">B2</option>
  <option value="b3">B3</option>
  <option value="c1">C1</option>
  <option value="c2">C2</option>
  <option value="c3">C3</option>
  <option value="d1">D1</option>
  <option value="d2">D2</option>
  <option value="d3">D3</option>
  <option value="e1">E1</option>
  <option value="e2">E2</option>
  <option value="e3">E3</option>
  <option value="f1">F1</option>
  <option value="f2">F2</option>
  <option value="f3">F3</option>
  <option value="g1">G1</option>
  <option value="g2">G2</option>
  			</select>
		</td>
		<td>
			<select class="select" name="b0">
  <option disabled selected value>Select Subject</option>
  <option value="maths">Maths</option>
  <option value="ecology">Ecology</option>
  <option value="commwork">Communictaion Skill Workshop</option>
  <option value="engmech">Engineering Mechanics</option>
  <option value="engmechlab">Engineering Mechanics Lab</option>
  <option value="c">Computer</option>
  <option value="clab">Computer Lab</option>
  <option value="ed">Engineering Drawing</option>
  <option value="edlab">ED Lab</option>
  <option value="physics">Physics</option>
  <option value="physicslab">Physics Lab</option>
  <option value="chemistry">Chemistry</option>
  <option value="chemistrylab">Chemistry Lab</option>
  <option value="workshop">Workshop</option>
  <option value="workshoplab">Workshop lab</option>
  <option value="english">English</option>
  <option value="englishlab">English Lab</option>
  			</select>
		</td>
	<td><input type="button" class="button" value="Add another line" onclick="addField();"></td>
	</table>
	<script>function addField () 
	{
        var myTable = document.getElementById("myTable");
        var currentIndex = myTable.rows.length;
        var currentRow = myTable.insertRow(-1);
var selectList = document.createElement("select");selectList.name = "a" + currentIndex;selectList.setAttribute("class", "select");

    var option = document.createElement("option");
    option.value = "a1";
    option.text = "A1";
    selectList.appendChild(option);
	var option = document.createElement("option");
    option.value = "a2";
    option.text = "A2";
    selectList.appendChild(option);
	var option = document.createElement("option");
    option.value = "a3";
    option.text = "A3";
    selectList.appendChild(option);
	var option = document.createElement("option");
    option.value = "b1";
    option.text = "B1";
    selectList.appendChild(option);
	var option = document.createElement("option");
    option.value = "b2";
    option.text = "B2";
    selectList.appendChild(option);
	var option = document.createElement("option");
    option.value = "b3";
    option.text = "B3";
    selectList.appendChild(option);
	var option = document.createElement("option");
    option.value = "c1";
    option.text = "C1";
    selectList.appendChild(option);
	var option = document.createElement("option");
    option.value = "c2";
    option.text = "C2";
    selectList.appendChild(option);
	var option = document.createElement("option");
    option.value = "c3";
    option.text = "C3";
    selectList.appendChild(option);
	var option = document.createElement("option");
    option.value = "d1";
    option.text = "D1";
    selectList.appendChild(option);
	var option = document.createElement("option");
    option.value = "d2";
    option.text = "D2";
    selectList.appendChild(option);
	var option = document.createElement("option");
    option.value = "d3";
    option.text = "D3";
    selectList.appendChild(option);
	var option = document.createElement("option");
    option.value = "e1";
    option.text = "E1";
    selectList.appendChild(option);
	var option = document.createElement("option");
    option.value = "e2";
    option.text = "E2";
    selectList.appendChild(option);
	var option = document.createElement("option");
    option.value = "e3";
    option.text = "E3";
    selectList.appendChild(option);
	var option = document.createElement("option");
    option.value = "f1";
    option.text = "F1";
    selectList.appendChild(option);
	var option = document.createElement("option");
    option.value = "f2";
    option.text = "F2";
    selectList.appendChild(option);
	var option = document.createElement("option");
    option.value = "f3";
    option.text = "F3";
    selectList.appendChild(option);
	var option = document.createElement("option");
    option.value = "g1";
    option.text = "G1";
    selectList.appendChild(option);
	var option = document.createElement("option");
    option.value = "g2";
    option.text = "G2";
    selectList.appendChild(option);
		

var selectListt = document.createElement("select");selectListt.name = "b" + currentIndex;selectListt.setAttribute("class", "select");

    var optionn = document.createElement("option");
    optionn.value = "maths";
    optionn.text = "Maths";
    selectListt.appendChild(optionn);
	var optionn = document.createElement("option");
    optionn.value = "ecology";
    optionn.text = "Ecology";
    selectListt.appendChild(optionn);
	var optionn = document.createElement("option");
    optionn.value = "commwork";
    optionn.text = "Communiation Skill Workshop";
    selectListt.appendChild(optionn);
	var optionn = document.createElement("option");
    optionn.value = "engmech";
    optionn.text = "Engineering Mechanics";
    selectListt.appendChild(optionn);
	var optionn = document.createElement("option");
    optionn.value = "engmechlab";
    optionn.text = "Engineering Mechanics Lab";
    selectListt.appendChild(optionn);
	var optionn = document.createElement("option");
    optionn.value = "c";
    optionn.text = "Computer";
    selectListt.appendChild(optionn);
	var optionn = document.createElement("option");
    optionn.value = "clab";
    optionn.text = "Computer Lab";
    selectListt.appendChild(optionn);
	var optionn = document.createElement("option");
    optionn.value = "ed";
    optionn.text = "Engineering Drawing";
    selectListt.appendChild(optionn);
	var optionn = document.createElement("option");
    optionn.value = "edlab";
    optionn.text = "Engineering Drawing Lab";
    selectListt.appendChild(optionn);
	var optionn = document.createElement("option");
    optionn.value = "physics";
    optionn.text = "Physics";
    selectListt.appendChild(optionn);
	var optionn = document.createElement("option");
    optionn.value = "physicslab";
    optionn.text = "Physics Lab";
    selectListt.appendChild(optionn);
	var optionn = document.createElement("option");
    optionn.value = "chemistry";
    optionn.text = "Chemistry";
    selectListt.appendChild(optionn);
	var optionn = document.createElement("option");
    optionn.value = "chemistrylab";
    optionn.text = "Chemistry Lab";
    selectListt.appendChild(optionn);
	var optionn = document.createElement("option");
    optionn.value = "workshop";
    optionn.text = "Workshop";
    selectListt.appendChild(optionn);
	var optionn = document.createElement("option");
    optionn.value = "workshoplab";
    optionn.text = "Workshop Lab";
    selectListt.appendChild(optionn);
	var optionn = document.createElement("option");
    optionn.value = "english";
    optionn.text = "English";
    selectListt.appendChild(optionn);
	var optionn = document.createElement("option");
    optionn.value = "englishlab";
    optionn.text = "English Lab";
    selectListt.appendChild(optionn);
	

var currentCell = currentRow.insertCell(-1);
        currentCell.appendChild(selectList);
        currentCell = currentRow.insertCell(-1);
        currentCell.appendChild(selectListt);
    }</script>

</body>

</html>


