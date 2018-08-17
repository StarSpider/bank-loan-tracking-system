<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="crstyle.css">
<meta charset="UTF-8">
<style>
form#multiphase{ border:#000 1px solid; padding:24px; width:350px; }
form#multiphase > #phase2, #phase3, #show_all_data{ display:none; }
</style>
<script>
var fname, lname, gender,guarantor,loantype,Accountnumber,loanamount,Nationality,Aadhar,pan;
function _(x){
	return document.getElementById(x);
}
function processPhase1(){
	fname = _("firstname").value;
	lname = _("lastname").value;
	guarantor=_("guarantor").value;
	if(fname.length > 2 && lname.length > 2){
		_("phase1").style.display = "none";
		_("phase2").style.display = "block";
		_("progressBar").value = 33;
		_("status").innerHTML = "Phase 2 of 3";
	} else {
	    alert("Please fill in the fields");	
	}
}
function processPhase2(){
	loantype = _("type").value;
	Accountnumber = _("account").value;
	loanamount = _("loanamount").value;
	if(loantype.length > 0){
		_("phase2").style.display = "none";
		_("phase3").style.display = "block";
		_("progressBar").value = 66;
		_("status").innerHTML = "Phase 3 of 3";
	} else {
	    alert("Please choose your gender");	
	}
}
function processPhase3(){
	Nationality = _("Nationality").value;
	Aadhar = _("Aadhar").value;
	pan = _("pan").value;
	if(pan.length > 0){
		_("phase3").style.display = "none";
		_("show_all_data").style.display = "block";
		_("display_fname").innerHTML = fname;
		_("display_lname").innerHTML = lname;
		_("display_guarantor").innerHTML = guarantor;
		_("display_loantype").innerHTML = loantype;
        _("display_Accountnumber").innerHTML = Accountnumber;
		_("display_loanamount").innerHTML = loanamount;
		_("display_Nationality").innerHTML = Nationality;
		_("display_Aadhar").innerHTML = Aadhar;
		_("display_pan").innerHTML = pan;
		_("progressBar").value = 100;
		_("status").innerHTML = "Data Overview";
	} else {
	    alert("Please enter your pannumber");	
	}
}
function submitForm(){
	_("multiphase").method = "post";
	_("multiphase").action = "myparser.php";
	_("multiphase").submit();
}
</script>
</head>
<body>
	
	<div class="a">
<progress id="progressBar" value="0" max="100" style="width:250px;"></progress>
<h3 id="status">Phase 1 of 3</h3>

<form id="multiphase" onsubmit="return false">
  <div id="phase1">
    First Name: <input id="firstname" name="firstname" required><br>
    Last name: <input   id="lastname" name="lastname" required><br>
    Guarantor:<input   id="guarantor" name="guarantor" required><br>
    <button onclick="processPhase1()">Continue</button>
  </div>
  <div id="phase2">
    Type of loan: <select id="type" name="type" required>
    	<option value="">Select</option>
      <option value="Education">Education</option>
      <option value="Housing">Housing</option>
      <option value="Vehicle">Vehicle</option>
    </select><br>
    Account number:<input type="number" name="account" id="account"><br>
    Loan amount:<input type="number" name="loan" id="loanamount"><br>
    <button onclick="processPhase2()">Continue</button>
</div>
  <div id="phase3">
    Nationality: <input id="Nationality" name="Nationality"><br>
    Aadhar Number:<input id="Aadhar" name="Aadhar"><br>
    Pan Number:<input id="pan" name="pan"><br>
    <button onclick="processPhase3()">Continue</button>
  </div>
  <div id="show_all_data">
    First Name: <span id="display_fname"></span> <br>
    Last Name: <span id="display_lname"></span> <br>
    Guarantor: <span id="display_guarantor"></span> <br>
    Type of loan: <span id="display_loantype"></span> <br>
    Account number: <span id="display_Accountnumber"></span> <br>
    Loan amount: <span id="display_loanamount"></span> <br>
    Nationality: <span id="display_Nationality"></span> <br>
    Aadhar: <span id="display_Aadhar"></span> <br>
   Pan: <span id="display_pan"></span> <br>
    <button onclick="submitForm()">Submit Data</button>
  </div>
</form>
</div>
</body>
</html>