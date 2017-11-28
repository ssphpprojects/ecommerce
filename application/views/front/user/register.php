<div class="panel panel-default content-wrapper">
	<div class="panel-heading">
		<h3 class="panel-title">
			<?php echo isset($content_header) ? $content_header :''; ?>
		</h3>
	</div>
	<div class="panel-body">
		<!-- User Wrapper Start -->
		<div class="row">
			<div class="col-md-12">
				<small class="text-danger">All fields are mendatory</small>
				<table class="table table-bordered margin-top10">
					<tr>
						<th>Full Name</th>
						<td><input type="text" name="full_name" class="form-control" /></td>
					</tr>
					<tr>
						<th>Username</th>
						<td><input type="text" name="username" class="form-control" /></td>
					</tr>
					<tr>
						<th>Password</th>
						<td><input type="password" name="pwd" class="form-control" /></td>
					</tr>
					<tr>
						<th>Email</th>
						<td><input type="email" name="email" class="form-control" /></td>
					</tr>
					<tr>
						<th>Phone</th>
						<td><input type="text" name="mobile" class="form-control" /></td>
					</tr>
					<tr>
						<th>Address</th>
						<td><textarea name="address" class="form-control"></textarea></td>
					</tr>
					<tr>
						<th>Purpose</th>
						<td><textarea name="purpose" class="form-control"></textarea></td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" class="btn btn-danger" value="Register" /></td>
					</tr>
				</table>
			</div>
		</div>
		<!-- User Wrapper End -->
		
	</div>
</div>