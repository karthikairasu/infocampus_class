<div class="row">
 <table class="table table-bordered">
  <thead>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Message</th>
    <th colspan="2">Action</th>
  </thead>
 
  <tbody>
    <?php
	   foreach($cont as $row)
	   {
		   echo "<tr>";
		   echo "<td> $row->id</td>";
		   echo "<td> $row->name</td>";
		   echo "<td> $row->email</td>";
		   echo "<td> $row->mobile</td>";
		   echo "<td> $row->message</td>";
		   echo "<td><a href='#' onclick='editcontact($row->id)' data-toggle='modal' data-target='#myModal'><span class='glyphicon glyphicon-pencil'></span></a></td>";
		   echo "<td><a href='#' onclick='deletecontact($row->id)'><span class='glyphicon glyphicon-trash'></span></a></td>";
		   echo "</tr>";
	   }
	?>
  </tbody>
  </table>
</div>
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Please update your contact details</h4>
        </div>
        <div class="modal-body" >
		  <div  class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-8" id="result"></div>
          <div class="col-sm-2"></div>
        </div>
        </div>
        <div class="modal-footer">
		<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>