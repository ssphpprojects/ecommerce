						<div class="module">
							<div class="module-head">
								<h3>
									<?php echo isset($content_header) ? $content_header : 'No Header Defined'; ?>
									<span class="pull-right"><a href="<?php echo site_url('admin/category'); ?>" class="btn btn-danger btn-xs">Data List</a></span>
								</h3>
							</div>
							<div class="module-body">
									<?php
										if(isset($_SESSION['msg'])){
											echo $_SESSION['msg'];
											unset($_SESSION['msg']);
										}
									?>
									<?php echo validation_errors(); ?>
									<form action="" enctype="multipart/form-data" method="post" class="form-horizontal row-fluid">
										<div class="control-group">
											<label class="control-label" for="basicinput">Title</label>
											<div class="controls">
												<input type="text" id="basicinput" name="title" placeholder="Add Title" class="span8 title" value="<?php echo $content_data['allData']['cat_title']; ?>">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Slug</label>
											<div class="controls">
												<input value="<?php echo $content_data['allData']['cat_slug']; ?>" type="text" id="basicinput" name="slug" placeholder="Add Slug" class="span8 slug">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Description</label>
											<div class="controls">
												<textarea name="desc" class="form-control span8"><?php echo $content_data['allData']['cat_desc']; ?></textarea>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Image</label>
											<div class="controls">
												<img src="<?php echo base_url(); ?>/assets/uploads/<?php echo $content_data['allData']['cat_img']; ?>" width="70" />
												<input type="file" name="img" class="span8">
												<input type="hidden" name="img" value="<?php echo $content_data['allData']['cat_img']; ?>" />
											</div>
										</div>
										<div class="control-group">
											<div class="controls">
												<input type="submit" class="btn btn-primary" value="Update Data">
											</div>
										</div>
									</form>
							</div>
						</div>