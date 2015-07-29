<h3>Add Students</h3>
<div class="container">
<br/>
<div class="row">
    <div class="col-md-8">

    <form>
    <div class="form-group">
    <label for="fullname">Full name</label>
    <input type="text" class="form-control" id="fullname" placeholder="Name">
  </div>
  
<div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" placeholder="Address">
  </div>


  <div class="form-group">
    <label for="mobile">Mobile</label>
    <input type="email" class="form-control" id="mobile" placeholder="Mobile">
  </div>
  
  
  <button type="button" class="btn btn-primary" id="btn_add_student">Save </button>
</form>

</div>
        <div class="col-md-12">
         


           <br/>
            <div class="alert alert-success" style="display:none;">
                <span class="glyphicon glyphicon-ok"></span> Drag table row and cange Order</div>
            <table class="table" id="accordion" name="accordion">
                <thead>
                    <tr>
                        <th>
                            Full name
                        </th>
                        <th>
                            Address
                        </th>
                        <th>
                           Mobile
                        </th>

                       
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="<?php echo $this->webroot; ?>js/logics/student.js"></script>