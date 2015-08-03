<h3>Student Progress report</h3>


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

 </form>	


<div class="col-md-12">

</br>
<div class="alert alert-success" style="display:none;">
<span class="glyphicon glyphicon-ok"></span>
</div>

<table class="table" id="stureport_table" name="stureport_table">  


<thead>
<tr>
<th>Student ID</th>

<th>Topic title</th>

<th>Spend hours</th>

<th>Revision hours</th>




</tr>
</thead>

<tbody>
	</tbody>
</table>



</div>
	  </div>
   </div>
 </div>

<script src="<?php echo $this->webroot;?>js/logics/studentreport.js"></script>