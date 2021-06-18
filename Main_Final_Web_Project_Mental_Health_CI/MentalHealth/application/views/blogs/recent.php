<?php if(($this->session->userdata('role')) == '4') {?>

<?php $this->load->view('layouts/userNav'); ?>

		        <!-- end of side bar -->
		        <div class="col-md-9 col-lg-10 py-5">
		          <!-- title row -->
		          <div class="row mb-5">
		            <div class="col">
		              <h3>
		                <span class="text-uppercase text-danger">Manage /</span
		                ><span class="text-muted small"> Blogs</span><span class="text-uppercase text-danger"> /</span><span class="text-muted small"> View - Recent Top 10 Blogs Posted By You <i class="bi bi-view-stacked mr-3 text-muted"></i></span>
		              </h3>
		            </div>
		          </div>
		          <!-- end of title row -->

				        <div class="row">

				          <?php foreach ($blogs as $blog) { ?>
				          <!-- single product -->
				          <div class="mx-auto col-md-6 col-lg-3 detailBlog">
				            <div class="blogs-container p-5">
				              <img src="<?= base_url() ?>/assets/blogs/<?=$blog['bimage']?>" class="img-fluid" style="height: 150px;" alt="blog" />
				              <span class="blogs-search-icon detailBlog">
				                <i class="fas fa-search"></i>
				              </span>
				              <a href="#" class="blogs-store-link text-captilaze detailBlog">Learn More</a>
				            </div>
				            <h6 class="text-capitalize text-center my-2 detailBlog"><?= $blog['btitle'] ?></h6>
				            <h6 class="text-center">
				                  <span class="text-muted mx-2 detailBlog" style="display:block;text-overflow: ellipsis;width: 200px;  overflow: hidden; white-space: nowrap;">
				                  <?= $blog['bcontent'] ?>
				                </span>
				            </h6>
				          </div>
				             <?php } ?>
				          <!-- end single product -->

				        </div>

		</div>		
	</div>
</div>
<?php $this->load->view('layouts/footer'); ?>


<?php } else {
  redirect('login');
}
