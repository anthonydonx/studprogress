<h3>Follow up Topics</h3>
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
<label for="title">Topic Title</label>
<select  id="title" selected="">
</select>
</div>





<div class="form-group">
	
	<input type="hidden" value="0" id="spendhours">
</div>

<div class="form-group">
	
	<input type="hidden" value="0"  id="revisionhours" >
</div>

<button type="button" class="btn btn-primary" id="btn_std_topics">Save</button>

</form>

<div class="col-md-12">

</br>
<div class="alert alert-success" style="display:none;">
<span class="glyphicon glyphicon-ok"></span>
</div>

<table class="table" id="studtopic_table" name="studtopic_table">      <!--Y use both ID and NAme-->


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


<script src="<?php echo $this->webroot;?>js/logics/studtopics.js"></script>