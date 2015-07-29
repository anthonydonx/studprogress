<h3>Select Your Subjects</h3>
<div class="container">
</br>
<div class="row">
	<div class="col-md-8">


<form>


<div class="form-group">
<label for="studentsid">Students ID </label>
<select  name="studentsid" id="studentsid" selected="" >
<option value="1">One</option>
<option value="2">Two</option>
</select>
</div>


<div class="form-group">
<label for="subjectsname">Subjects Name</label>
<select  id="subjectsname" selected="">
<option value="1">One</option>
<option value="2">Two</option>
</select>
</div>


<button type="button" class="btn btn-primary" id="btn_std_subjects">Save</button>

</form>

<div class="col-md-12">

</br>
<div class="alert alert-success" style="display:none;">
<span class="glyphicon glyphicon-ok"></span>
</div>

<table class="table" id="studsub_table" name="studsub_table">      <!--Y use both ID and NAme-->


<thead>
<tr>
<th>Student ID</th>

<th>Subject Name</th>




</tr>
</thead>

<tbody>
	</tbody>
</table>
</div>


	  </div>
   </div>


<script src="<?php echo $this->webroot;?>js/logics/studsubjects.js"></script>