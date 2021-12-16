<?php require_once('includes/header.php');?>
<div class="wrapper">
 <div class="col-md-12">
 
 <?php echo form_open('student_home/apply');?>
 <table class="table table-striped" id="1">
 <fieldset class="scheduler-border"><legend class="scheduler-border">FULL NAMES</legend> 
 <tr>
<td><input name="SURNAME" class="form-control" type="text" placeholder="SURNAME" required/></td>
<td><input name="MIDDLE" class="form-control" type="text" placeholder="MIDDLE"required /></td>
<td><input name="FIRST" class="form-control" type="text" placeholder="FIRST" required/></td>
</tr>
</fieldset>
</table>

<table class="table table-striped">
<fieldset class="scheduler-border"><legend class="scheduler-border">COURSE DETAILS(<i>tick the applicable one</i>)</legend>
<tr>
<td><input type="radio" class="form-control" name="choose" value="JAB" required > JAB </input/> </td>
<td><input type="radio" class="form-control" name="choose" value="SSP" required > SSP </input/> </td>
<td></td>
</tr>
<tr>
<td><input name="RegNo" class="form-control" type="text" placeholder="REGNO" required /></td>

<td><select class="form-control" name="School" required>
<option value=""> Select School </option>
<option value="CS&IT"> CS&IT </option>
<option value="BUSSINESS AND COMMERCE"> BUSSINESS AND COMMERCE</option>
<option value="SCIENCE"> SCIENCE</option>
</select><br/></td>

<td><select class="form-control" name="Dept" required >
<option value=""> Select Department </option>
<option value="Computer Science"> Computer Science </option>
<option value="IT"> IT</option>
</select><br/></td>
</tr>
<td><select class="form-control" name="Course" required >
<option value=""> Select Course </option>
<option value="Computer Science"> Computer Science </option>
<option value="IT"> IT</option>
<option value="BBIT"> BBIT</option>
</select><br/></td>
<td><select class="form-control" name="Duration" required >
<option value=""> Select Duration </option>
<option value="2"> 2 </option>
<option value="3"> 3</option>
<option value="4"> 4</option>
<option value="5"> 5</option>
</select><br/></td>
<td><select class="form-control" name="YearOfStudy" required >
<option value=""> Select Year Of Study </option>
<option value="1"> 1 </option>
<option value="2"> 2</option>
<option value="3"> 3</option>
<option value="4"> 4</option>
<option value="5"> 5</option>
</select><br/></td>
</tr>
<tr>
<td><select class="form-control" name="Semester"required>
<option value=""> Select Semester </option>
<option value="1"> 1 </option>
<option value="2"> 2</option>
</select><br/></td>

<td><input name="FeePayable" class="form-control" type="text" placeholder="FEE PAYABLE PER YEAR(Ksh)" required /></td>
<td><input name="FeeBalance" class="form-control" type="text" placeholder="FEE BALANCE" required /></td>
</tr>
<tr>
<td><input name="ammountapplied" class="form-control" type="text" placeholder="AMMOUNT APPLIED" required /></td>
<td><textarea name ="Purpose" class="form-control"  placeholder="PURPOSE OF THE FUND" required /></textarea></td>
<td></td>
</tr>
</fieldset>
</table>
<center> <ul class="pagination">
<li class="active"><a href="#1">1</a></li>
<li><a href="#2">2</a></li>
<li><a href="#3">3</a></li>
<li><a href="#4">4</a></li>
<li><a href="#5">5</a></li>
<li><a href="#6">6</a></li>
<li><a href="#7">7</a></li>
</ul></center> 

<table class="table table-striped" id="2">
<fieldset class="scheduler-border"><legend class="scheduler-border"><b> PART ONE</b></legend>
<tr><td><i>Tick the most appropriate category in which you wish your Bursary Application to be considered.</i></td></tr> 
<tr>
<td> Orphan:<select class="form-control" name="Orphan" >
<option value=""> Select the one applicable</option>
<option value="Partial orphan">Partial orphan </option>
<option value="Total Orphan"> Total Orphan</option>
</select><br/></td></tr>
<tr>
<td><input type="checkbox" class="form-control" name="illness" value="ill">terminal or chronic illness of parent/gurdian</input/></td></tr>
<tr>
<td><input type="checkbox" class="form-control" name="disability" value="disabled">Person with Disability</input/></td>
</tr>
<tr>
<td><textarea name ="others" class="form-control"  placeholder="Others (specify)" /></textarea></td>
</fieldset>
</table>
<table class="table table-striped" id="2">
<fieldset class="scheduler-border"><legend class="scheduler-border"><b> SECTION 1 APPLICATION'S PERSONAL DETAILS</b></legend>
<tr>
<td><input name="idno" class="form-control" type="text" placeholder="ID NO" required /></td>
<td><input name="Contact" class="form-control" type="text" placeholder="Contact" required /></td>
<td><input name="email" class="form-control" type="text" placeholder="Email" /></td>
</tr>
<tr><td>GENDER</td>
<td><input type="radio" class="form-control" name="gender" value="Male" required >Male</input/> </td>
<td><input type="radio" class="form-control" name="gender" value"Female" required >Female</input/> </td>
<td></td>
</tr>
<tr>
<td><input name="age" class="form-control" type="text" placeholder="AGE" required /></td>
<td><select class="form-control" name="maritalstatus" required>
<option value=""> Select Marital status </option>
<option value="Single"> Single </option>
<option value="married"> married </option>
</select><br/></td>
<td></td>
</tr>
<tr>
<td><input name="county" class="form-control" type="text" placeholder="County" required /></td>
<td><input name="constituency" class="form-control" type="text" placeholder="Constituency" required /></td>
<td><input name="location" class="form-control" type="text" placeholder="Location" required /></td>
</tr>
<tr>
<td><input name="sublocation" class="form-control" type="text" placeholder="Sub-location" required/></td>
<td><input name="village/Estate" class="form-control" type="text" placeholder="Village/Estate" required /></td>
<td><input name="secschool" class="form-control" type="text" placeholder="Sec School last attended" required /></td>
</tr>
<tr>
<td><input name="year" class="form-control" type="text" placeholder="Year completed" required /></td>
<td><input name="examindexno" class="form-control" type="text" placeholder="Index No" required /></td>
<td><input name="KCSEMG" class="form-control" type="text" placeholder="KCSE MG" required/></td>
</tr>
<tr>
<tr>
<td>DISABILITY<input type="radio" class="form-control" name="s_disability" value="yes" >Yes </input/> </td>
<td><input type="radio" class="form-control" name="s_disability" value="No" > No </input/> </td>
<td><textarea name="Specify" class="form-control"  placeholder=" Specify Whether the disability is severe or mild" /></textarea></td>
</tr>
</fieldset>
</table>

<center> <ul class="pagination">
<li><a href="#1">1</a></li>
<li class="active"><a href="#2">2</a></li>
<li><a href="#3">3</a></li>
<li><a href="#4">4</a></li>
<li><a href="#5">5</a></li>
<li><a href="#6">6</a></li>
<li><a href="#7">7</a></li>
</ul></center> 
<table class="table table-striped" id="3">
<fieldset class="scheduler-border"><legend class="scheduler-border"><b> MAILING ADDRESS</b></legend>
<tr>
<td><input name="pobox" class="form-control" type="text" placeholder="P.O BOX" required/></td>
<td><input name="postalcode" class="form-control" type="text" placeholder="Postal Code" required /></td>
<td><input name="telno" class="form-control" type="text" placeholder="Telephone No" required/></td>
</tr>
</fieldset>
</table>
<center> <ul class="pagination">
<li><a href="#1">1</a></li>
<li><a href="#2">2</a></li>
<li class="active"><a href="#3">3</a></li>
<li><a href="#4">4</a></li>
<li><a href="#5">5</a></li>
<li><a href="#6">6</a></li>
<li><a href="#7">7</a></li>
</ul></center> 

<table class="table table-striped" id="4">
<fieldset class="scheduler-border"><legend class="scheduler-border"><b> SECTION II FAMILY DETAILS</b></legend>
<tr><td colspan="3">FATHER'S NAME</td></tr>
<tr><td><input name="F_LASTNAME" class="form-control" type="text" placeholder="Last Name" required /></td>
<td><input name="F_FIRSTNAME" class="form-control" type="text" placeholder="First Name" required /></td>
<td><input name="F_IDNO" class="form-control" type="text" placeholder="Id No" required /></td>
</tr>
<tr><td>ALIVE</td>
<td><input type="radio" class="form-control" name="F_LifeStatus"  value="Yes" required >Yes </input> </td>
<td><input type="radio" class="form-control" name="F_LifeStatus" value="No" required > No  </input> </td>
<td></td>
</tr>
<tr>
<td><input name="F_OCCUPATION" class="form-control" type="text" placeholder="Occupation"/></td>
<td><input name="F_ANNUALINCOME" class="form-control" type="text" placeholder="Annual Income" /></td>
<td><input name="F_OtherSources" class="form-control" type="text" placeholder="Other Sources of Income" /></td>
</tr>
<tr><td colspan="3">MOTHER'S NAME</td></tr>
<tr><td><input name="M_LASTNAME" class="form-control" type="text" placeholder="Last Name" required /></td>
<td><input name="M_FIRSTNAME" class="form-control" type="text" placeholder="First Name" required/></td>
<td><input name="M_IDNO" class="form-control" type="text" placeholder="Id No"required /></td>
</tr>
<tr><td>ALIVE</td>
<td><input type="radio" class="form-control" name="M_LifeStatus" value="Yes" required >Yes </input> </td>
<td><input type="radio" class="form-control" name="M_LifeStatus" value="No" required > No </input> </td>
<td></td>
</tr>
<tr>
<td><input name="M_OCCUPATION" class="form-control" type="text" placeholder="Occupation" /></td>
<td><input name="M_ANNUALINCOME" class="form-control" type="text" placeholder="Annual Income" /></td>
<td><input name="M_OtherSources" class="form-control" type="text" placeholder="Other Sources of Income"  /></td>
</tr>
<tr><td colspan="3">GURDIAN'S NAME</td></tr>
<tr><td><input name="G_LASTNAME" class="form-control" type="text" placeholder="Last Name"/></td>
<td><input name="G_FIRSTNAME" class="form-control" type="text" placeholder="First Name" /></td>
<td><input name="RSHIP" class="form-control" type="text" placeholder="Relationship"/></td>
</tr>
<tr>
<td><input name="G_IDNO" class="form-control" type="text" placeholder="Id No" /></td>
<td><input name="G_OCCUPATION" class="form-control" type="text" placeholder="Occupation" /></td>
<td><input name="G_ANNUALINCOME" class="form-control" type="text" placeholder="Annual Income" /></td>
</tr>
</fieldset>
</table>
<center> <ul class="pagination">
<li><a href="#1">1</a></li>
<li><a href="#2">2</a></li>
<li><a href="#3">3</a></li>
<li class="active"><a href="#4">4</a></li>
<li><a href="#5">5</a></li>
<li><a href="#6">6</a></li>
<li><a href="#7">7</a></li>
</ul></center> 
<table class="table table-striped" id="5">
<fieldset class="scheduler-border"><legend class="scheduler-border"><b> SECTION III SIBLINGS IN SCHOOL/INSTITUTION OF LEARNING</b></legend>
<tr>
<th>NAME</th> <th>SCHOOL/INSTITUTION</th> <th>CLASS</th> <th>AGE</th> <th>FEE CHARGED PER YEAR</th>
<tr><td><input type="text" name="name1" class="form-control" /></td> 
<td><input type="text" name="sch/inst1" class="form-control" /></td>
<td><input type="text" name="class1" class="form-control" /></td>
<td><input type="text" name="age1" class="form-control" /></td>
<td><input type="text" name="feechargedperyear1" class="form-control" /></td></tr>

<tr><td><input type="text" name="name2" class="form-control" /></td> 
<td><input type="text" name="sch/inst2" class="form-control" /></td>
<td><input type="text" name="class2" class="form-control" /></td>
<td><input type="text" name="age2" class="form-control" /></td>
<td><input type="text" name="feechargedperyear2" class="form-control" /></td></tr>

<tr><td><input type="text" name="name3" class="form-control" /></td> 
<td><input type="text" name="sch/inst3" class="form-control" /></td>
<td><input type="text" name="class3" class="form-control" /></td>
<td><input type="text" name="age3" class="form-control" /></td>
<td><input type="text" name="feechargedperyear3" class="form-control" /></td></tr>
</fieldset>
</table>
<center> <ul class="pagination">
<li><a href="#1">1</a></li>
<li><a href="#2">2</a></li>
<li><a href="#3">3</a></li>
<li><a href="#4">4</a></li>
<li class="active"><a href="#5">5</a></li>
<li><a href="#6">6</a></li>
<li><a href="#7">7</a></li>
</ul></center> 
<table class="table table-striped" id="6">
<fieldset class="scheduler-border"><legend class="scheduler-border"><b> SECTION IV OTHERS</b></legend>
<tr><td><i>Please answer the questions below to the best of your knowledge</i></td></tr>
<tr>
<td>Have you ever been on work study?
<input type="radio" class="form-control" name="workstudy" >Yes </input> <input type="radio" class="form-control" name="workstudy">No </input>
<input name="workPeriod" class="form-control" type="text" placeholder="State the period" /></td>
</tr>
<tr>
<td>Have you ever been accommodated in DeKUT hostels?<i>(Note: this question applies to student from 2nd years and above)</i>
<input type="radio" class="form-control" name="accomodated" value="Yes">Yes </input> <input type="radio" class="form-control" name="accomodated" value="NO">No </input>
<input name="acc_Period" class="form-control" type="text" placeholder="State the period and the reason" /></td>
</tr>
<tr>
<td>Have you ever been awarded DeKUT bursary before?
<input type="radio" class="form-control" name="bursary">Yes </input> <input type="radio" class="form-control" name="bursary">No </input>
<input name="bur_Period" class="form-control" type="text" placeholder="State the period and the amount" /></td>
</tr>
<tr>
<td>Have you ever taken an academic leave?
<input type="radio" class="form-control" name="academicleave">Yes </input> <input type="radio" class="form-control" name="academicleave">No </input>
<input name="leavePeriod" class="form-control" type="text" placeholder="State the period and the reason" /></td>
</tr>
<tr>
<td>Have you ever deferred studies?
<input type="radio" class="form-control" name="deffered">Yes </input> <input type="radio" class="form-control" name="deffered">No </input>
<input name="defPeriod" class="form-control" type="text" placeholder="State the period and the reason" /></td>
</tr>
<tr>
<td>Have you ever had late registration?
<input type="radio" class="form-control" name="latereg">Yes </input> <input type="radio" class="form-control" name="latereg">No </input>
<input name="Period" class="form-control" type="text" placeholder="State the period and the reason" /></td>
</tr>
<tr>
<td>Are you partially or fully sponsored?
<input type="radio" class="form-control" name="sponsorship">Yes </input> <input type="radio" class="form-control" name="sponsorship">No </input>
<input name="details" class="form-control" type="text" placeholder="Give details of sponser and nature of sponsorship" /></td>
</tr>
</fieldset>
</table>
<center> <ul class="pagination">
<li><a href="#1">1</a></li>
<li><a href="#2">2</a></li>
<li><a href="#3">3</a></li>
<li><a href="#4">4</a></li>
<li><a href="#5">5</a></li>
<li class="active"><a href="#6">6</a></li>
<li><a href="#7">7</a></li>
</ul></center> 
<table class="table table-striped" id="7">
<fieldset class="scheduler-border"><legend class="scheduler-border"><b> SECTION V JUSTIFICATION FOR CONSIDERATION FOR BURSARY</b></legend>
<tr><td><i>Briefly state reason why you should be considered for award of DeKUT Bursary</i></td></tr>
<tr>
<td><textarea name ="reason" class="form-control"  placeholder="REASON(S) FOR THE FUND" required ></textarea></td></tr>

</fieldset>
</table>
<center> <ul class="pagination">
<li><a href="#1">1</a></li>
<li><a href="#2">2</a></li>
<li><a href="#3">3</a></li>
<li><a href="#4">4</a></li>
<li><a href="#5">5</a></li>
<li><a href="#6">6</a></li>
<li><a href="#7">7</a></li>
<li class="active"><a href="#7">7</a></li>
</ul></center>
 
<input name="submit" class="btn btn-primary" type="submit" value="Apply" />
<?php echo form_close();?>
</div>
</div>

<?php require_once('includes/footer.php');?>

