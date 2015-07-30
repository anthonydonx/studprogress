<h3>Add Topics</h3>
<div class="container">
</br>
	<div class="row">
		<div class="col-md-8">


 <form>

  <label for="subjactsname">Subjects Name</label>
<select id="subjectsname" selected="Subject">
    <option value="1">One</option>
    <option value="2">Two</option>
</select>

</br>

 <div class="form-group">
   <label for="title">Title</label>
   <input type="text" class="form-control" id="title" placeholder="Title">
 </div>
</br>


 <div class="form-group">
   <label for="minhours">Minimun Hours</label>
   <input type="text" class="form-control" id="minhours" placeholder="Minimun Hours">
 </div>
</br>




 <div class="form-group">
   <label for="minrevisionhours">Minimun Revision Hours</label>
   <input type="text" class="form-control" id="minrevisionhours" placeholder="Revision Hours">
 </div>
</br>


 <button type="button" class="btn btn-primary" id="btn_add_topic">Save</button>

 </form>


	<div class="col-md-12">

  </br>
  <div class="alert alert-success" style="display:none;">
  <span class="glyphicon glyphicon-ok"></span> Drag table </div>

  <table class="table" id="accordion" name="accordion">
  	<thead>
       <tr>

       <!--   <th>Subjects Name</th> -->
         
          <th>Title</th>

          <th>Minimun Hour</th>


          <th>Minimun Revision Hours</th>


       </tr>
  	</thead>

  	<tbody>
  	</tbody>
  </table>

	   </div>

	</div>
</div>



<script src="<?php echo $this->webroot; ?>js/logics/topic.js"></script>