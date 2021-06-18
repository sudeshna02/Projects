<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php $this->load->view('layouts/siteNav'); ?>


</header>
  <section id="quotes" class="py-5">
    <div class="container bg-light">
      <!--  title row-->
      <div class="row">
        <div class="col title m-5">
          <i class="fa fa-comments mr-3"></i>
          <div class="title-text">
            <h2 class="text-uppercase">what they say</h2>
          </div>
        </div>
      </div>
      <!--      end of title row http://www.charityfocus.org/static/reviewers/sample.html-->

    <?php foreach ($experiences as $experience) { ?>  
      <div class="row">
        <div class="col mb-5 d-flex">
            <div class="col-3 customer text-center">

              <img src="<?= base_url() ?>/assets/profiles/<?= $experience['simage'] . $experience['pimage']?>" width="150" alt="" class="img-fluid rounded-circle mx-auto mt-4"">
              <blockquote class="blockquote">
              <footer class="blockquote-footer mt-4"><?= $experience['pfirstname'] . ' ' . $experience['pmiddlename'] . ' '. $experience['psurname'] . $experience['sfirstname'] . ' ' . $experience['smiddlename'] . ' '. $experience['ssurname'] ?></footer>
              </blockquote>
            </div>
            
            <div class="col-9">  

              <h6><?= $experience['created_at'] ?></h6>
              <blockquote class="blockquote">
                <p class="mt-4">
                  <i class="fa fa-quote-left mr-2"></i><h3><?= $experience['etitle'] ?></h3>
                </p>
                <p class="mt-4">
                    <?= $experience['edesc'] ?>
                </p>    
              </blockquote>

            </div>

        </div>

      </div>
       <?php } ?>
            <!--      end of title row-->


                      <!-- Button -->
                    <div class="input-group col-lg-12 mb-4">
                       <input type="submit" class="mx-auto w-25 btnSubscribe "  value="Login To Share Your Experience!"/>
                    </div>

     
    </div>

  </section>

<!-- footer -->

<?php $this->load->view('layouts/footer'); ?>