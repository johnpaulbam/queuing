<style>
img {
	display: block;
  margin-left: auto;
  margin-right: auto;
  width: 150px%;
	height:250px;
}
</style>

<?php include 'admin/db_connect.php' ?>
<div class="container" >
	<div class="col-lg-12" >
		<div >
			<div  style="background:#FFDF00;">
				<h3 class="text-center text-white" style="background:#FFDF00; "> <img style="width: 35px; height:35px; position:absolute; padding: 5px;"src="q.jpg" ><b style="color:black;">Welcome to Queue
				ing Wing</b></h3>
			</div>
		</div>
		
		<div class="card mt-4">
			<div class="card-body" style="background:white; height:550px;" >
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<a  href="index.php?page=queue_registration" style="background:#FFDF00; color:black;" class="btn btn btn-primary btn-sm col-md-4 float-right ">Go to Queue Registration <i class="fa fa-angle-right">
							</i></a>
						</div>
					</div>
					<hr>
					<h4 class="text-center" style="color:black;">Select Queue Serving Display</h4>
					
					<div class="row" >

						<?php 
						$trans = $conn->query("SELECT * FROM transactions where status = 1 order by name asc");
							while($row=$trans->fetch_assoc()):
						?>
						<div class="col-md-4 mt-4" >
						<a  href="index.php?page=display&id=<?php echo $row['id'] ?>" style="background:#FFDF00;"class="btn btn btn-primary btn-block " ><?php echo ucwords($row['name']); ?> <i class="fa fa-angle-right">
							</i></a>
							
						</div>
					<?php endwhile; ?>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
	
	</div>
</div>
