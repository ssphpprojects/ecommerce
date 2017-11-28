						<div class="module">
							<div class="module-head">
								<h3>
									<?php echo isset($content_header) ? $content_header : 'No Header Defined'; ?>
									<span class="pull-right"><a href="<?php echo site_url('admin/tag'); ?>" class="btn btn-danger btn-xs">Data List</a></span>
								</h3>
							</div>
							<div class="module-body">
									<?php echo validation_errors(); ?>
									<form action="" method="post" class="form-horizontal row-fluid">
										<div class="control-group">
											<label class="control-label" for="basicinput">Title</label>
											<div class="controls">
												<input type="text" id="basicinput" name="title" placeholder="Add Title" class="span8">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Slug</label>
											<div class="controls">
												<input type="text" id="basicinput" name="slug" placeholder="Add Slug" class="span8">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Description</label>
											<div class="controls">
												<textarea name="desc" class="form-control span8"></textarea>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Image</label>
											<div class="controls">
												<input type="file" name="img" class="span8">
											</div>
										</div>
										<div class="control-group">
											<div class="controls">
												<input type="submit" class="btn btn-primary" value="Add Data">
											</div>
										</div>
									</form>
							</div>
						</div>