<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php $this->load->view('layouts/siteNav'); ?>

</header>
<!-- blogs -->
<section class="products">
  <div class="container-fluid">
    <div class="row">

      <!-- blogs categories info -->
       <!-- blogs categories info -->
      <?php $this->load->view('layouts/siteCategory'); ?>

      <!-- product img -->
      <div class="col-12 col-md-7 col-lg-9 mx-auto my-3 ">

      <!--  title row-->
      <div class="row">
        <div class="col title my-4">
          <i class="fa fa-book-medical mr-3"></i>
          <div class="title-text">
            <h3 class="text-uppercase font-weight-blog">The Blog Detail </h3>
          </div>
        </div>
      </div>


        <div class="row">

         
          <!-- single product -->
          <div class="mt-5 my-5 col-md-6 col-lg-9">
            <div class="blogs-container p-5">
              <img src="<?= base_url() ?>/assets/blogs/<?=$blog['bimage']?>" class="img-fluid" style="height: 150px; margin-left: 40%" alt="blog" />
            </div>
            <h2 class="text-capitalize text-center my-2 mt-4"><?= $blog['btitle'] ?></h2>
            <h5 class="text-center mt-2">
                  <span class="text-muted mx-2">
                  <?= $blog['bcontent'] ?>
                </span>
            </h5>
          </div>
          <!-- end single product -->

        </div>

      </div>
    </div>
  </div>
</section>


    <!-- newsletter -->
    <section class="newsletter py-5">
      <div class="container">
        <div class="row">
          <div class="col-10 mx-auto text-center">
            <h2 class="text-uppercase">newsletter</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti
              blanditiis similique eum, aut culpa maiores cupiditate alias
              exercitationem error nesciunt.
            </p>
            <form>
              <div class="input-group mt-5 mb-4">
                <input
                  type="text"
                  class="form-control text-capitalize"
                  placeholder="enter your email"
                />
                <div class="input-group-append">
                  <div class="input-group-text form-icon">
                    <i class="fas fa-envelope"></i>
                  </div>
                </div>
              </div>
              <!-- Button -->
                    <div class="input-group col-lg-12 mb-4">
                       <input type="submit" class="mx-auto w-25 btnSubscribe btn-login "  value="Subscribe"/>
                    </div>
            </form>
          </div>
        </div>
      </div>
    </section>
<!-- end of blogs -->

<?php $this->load->view('modals/blogModal'); ?>
<?php $this->load->view('layouts/footer'); ?>