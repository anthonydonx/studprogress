<h3>Update hours</h3>
<div class="container">
</br>
<div class="row">
	<div class="col-md-8">

<form>

<div class="form-group">
<label for="studentsid">Students Name </label>
<select  name="studentsid" id="studentsid" selected="" >
<option value="1">One</option>
<option value="2">Two</option>
</select>
</div>
</br>

<div class="form-group">
<label for="subject">Subjects </label>
<select  name="subject" id="subject" selected="" >
<option value="1">One</option>
<option value="2">Two</option>
</select>
</div>

<div class="form-group">
<label for="title">Topics</label>
<select  name="title" id="title" selected="">
<option value="1">One</option>
<option value="2">Two</option>
</select>
</div>

<div class="form-group">
	<label for="spendhours" >Spend Hours</label>
	<input type="text" class="form-controller" id="spendhours">
</div>

<div class="form-group">
	<label for="revisionhours" >Revision Hours</label>
	<input type="text" class="form-controller" id="revisionhours">
</div>


<button type="button" class="btn btn-primary" id="btn_std_topics">Save</button>

</form>


<div class="alert alert-success" style="display:none;">
<span class="glyphicon glyphicon-ok"></span>
</div>

<table class="table" id="studupdate_table" name="studupdate_table">    


<thead>
<tr>
<th>Student ID</th>

<th>Topic Title</th>

<th>Spend Hours</th>

<th>Revision Hours</th>


</tr>
</thead>

<tbody>
	</tbody>
</table>





</div>
</div>
</div>

<script src="<?php echo $this->webroot;?>js/logics/updatehours.js"></script>