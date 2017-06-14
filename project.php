<?php 
  include 'header.php'; 
  include 'includes.php'; 
  $projects = get_project_details();
	//print_r($projects);
		
?>
<div class="container">
	<div class="row">
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Name</th>
              <th>Date</th>
              <th>Location</th>
            </tr>
          </thead>
          <tbody id="myTable">
<?php			
   foreach($projects as $item) {
?>
            <tr>
							<td><?php print $item[0]; ?></td>
							<td><?php print $item[1]; ?></td>
							<td><?php print $item[2]; ?></td>
            </tr>	
<?php	
}
?>						
          </tbody>
        </table>   
      </div>
      <div class="col-md-12 text-center">
      <ul class="pagination pagination-lg pager" id="myPager"></ul>
      </div>
	</div>
</div>	

<?php
  include 'footer.php'; 
?>