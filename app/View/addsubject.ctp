<h3>Add Subjects</h3>
<div class="container">
</br>
	<div class="row">
		<div class="col-md-8">


 <form>

 <div class="form-group">
   <label for="name">Subject Name</label>
   <input type="text" class="form-control" id="name" placeholder="Name">
 </div>


 <div class="form-group">
   <label for="hours">Total Hours</label>
   <input type="text" class="form-control" id="hours" placeholder=" Hours">
 </div>

 <div class="form-group">
   <label for="revisionhours">Revision Hour</label>
   <input type="text" class="form-control" id="revisionhours" placeholder=" Revision Hours">
 </div>

 <button type="button" class="btn btn-primary" id="btn_add_subject">Save</button>

 </form>
<div>

	<div class="col-md-12">

  </br>
  <div class="alert alert-success" style="display:none;">
  <span class="glyphicon glyphicon-ok"></span> Drag table </div>

  <table class="table" id="accordion" name="accordion">
  	<thead>
       <tr>
          <th>Subject Name</th>

          <th>Total Hours</th>

          <th>Revision Hours</th>

       </tr>
  	</thead>

  	<tbody>
  	</tbody>
  </table>

	   </div>

	</div>
</div>



<script src="<?php echo $this->webroot; ?>js/logics/subject.js"></script>