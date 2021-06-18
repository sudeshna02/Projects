<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php $this->load->view('layouts/wellbeing_nav'); ?>


  <section class="about py-5" id="about">
        <div class="container">
           <div class="row">

                            <div class="col-10 mx-auto col-md-6 my-5 align-self-center">
              <div class="about-img__container">
                <img
                  src="<?= base_url() ?>/assets/images/heart-free.jpg"
                  class="img-fluid"
                  alt="set-your-heart-free"
                  style="height: 50vh"
                />
              </div>
            </div>
            <div class="col-10 mx-auto col-md-6 my-5 align-self-center">
              <h2 class="text-uppercase"">set your heart free :) </h2>
              <p class="my-4 text-muted w-75">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Voluptate beatae est hic iusto cupiditate modi! Lorem ipsum
                dolor sit amet consectetur, adipisicing elit. Ipsa, facere.
              </p>
              <a href="<?= base_url() ?>testyourself" class="btn btn-black text-uppercase text-info">TEST YOURSELF</a>
            </div>
          </div>

            </div>
      </section>

      <!-- end of about -->

            <!-- featured -->
      <section id="featured" class="featured">
        <div class="container bg-light">
          <!-- section title -->
          <div class="row">
            <div class="col text-center section-title mb-3  mt-5">
              <h3 class="text-info text-slant text-capitalize">well-being</h3>
              <h1 class="text-uppercase">blogs</h1>
              <div class="title-underline my-3 bg-secondary">
                <div class="title-underline__center"></div>
              </div>
              <h5 class="w-75 mx-auto">Post Your Knowledge to Raise Awareness And Save Lives!</h5>
            </div>
          </div>
          <!-- end of section title -->
          <div class="row">
            <!-- single property -->
            <!-- single property -->
            <div class="col-10 col-md-6 col-lg-3 mx-auto my-3">
              <!-- card body -->
              <div class="card-body">
                <div class="card-title text-capitalize text-center">
                  <h5 class="mb-3">Dreams</h5>
                </div>
              </div>
              <div class="card">
                <div class="img-container">
                  <img
                    src="<?= base_url() ?>/assets/Images\Dreams\dream.png"
                    alt="property image"
                    class="card-img-top project-image"
                  />
                </div>
              </div>
            </div>
            <!-- end of  single property -->

            <!-- single property -->
            <div class="col-10 col-md-6 col-lg-3 mx-auto my-3">
              <!-- card body -->
              <div class="card-body">
                <div class="card-title text-capitalize text-center">
                  <h5 class="mb-3">fire within your soul</h5>
                </div>
              </div>
              <div class="card">
                <div class="img-container">
                  <img
                    src="<?= base_url() ?>/assets/Images\Dreams\fire.jpg"
                    alt="property image"
                    class="card-img-top project-image"
                  />
                </div>
              </div>
            </div>
            <!-- end of  single property -->

            <!-- single property -->
            <div class="col-10 col-md-6 col-lg-3 mx-auto my-3">
              <!-- card body -->
              <div class="card-body">
                <div class="card-title text-capitalize text-center">
                  <h5 class="mb-3">universe within you</h5>
                </div>
              </div>
              <div class="card">
                <div class="img-container">
                  <img
                    src="<?= base_url() ?>/assets/Images\Dreams\universe.png"
                    alt="property image"
                    class="card-img-top project-image"
                  />
                </div>
              </div>
            </div>
            <!-- end of  single property -->
            <!-- single property -->
            <div class="col-10 col-md-6 col-lg-3 mx-auto my-3">
              <!-- card body -->
              <div class="card-body">
                <div class="card-title text-capitalize text-center">
                  <h5 class="mb-3">memories</h5>
                </div>
              </div>
              <div class="card">
                <div class="img-container">
                  <img
                    src="<?= base_url() ?>/assets/Images\Dreams\memory.jpg"
                    alt="property image"
                    class="card-img-top project-image"
                  />
                </div>
              </div>
            </div>
          </div>

		                <!--	title row-->
		      <div class="row">
		        <div class="col d-flex title mb-5">
		          <i class=" mr-3"></i>
		          <div class="title-text mt-3 mr-5">
		            <h2 class="text-uppercase">Recently Posted Blogs</h2>
		              <div class="title-underline my-3 bg-info">
		                <div class="title-underline__center"></div>
		              </div>
		          </div>
		        </div>
		      </div>
		      <!--		end of title row-->

          <div class="row">

          <?php foreach ($blogs as $blog) { ?>
          <!-- single product -->
          <div class="col-10 col-md-6 col-lg-3 mx-auto my-3 detailBlog">
            <div class="blogs-container p-5">
              
              <img src="<?= base_url() ?>/assets/blogs/<?=$blog['bimage']?>" class="img-fluid" style="height: 150px;" alt="blog" />
              <span class="blogs-search-icon detailBlog">
                <i class="fas fa-search"></i>
              </span>

              <a href="<?= base_url() ?>/blog/view/<?=$blog['bid']?>" class="blogs-store-link text-captilaze detailBlog">Learn More</a>
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

      		          <!-- section title -->
          <div class="row">
            <div class="col text-center section-title my-4">
              <a href="<?= base_url() ?>blogs" class="btn btn-black text-info"><h5 class="w-100 mx-auto">View All The Posted Blogs</h5></a>
              <div class="title-underline my-3 bg-info">
                <div class="title-underline__center"></div>
              </div>
            </div>
          </div>
          <!-- end of section title -->

        </div>
        </div>
      </section>
      <!-- end of featured -->


      <!-- featured -->
      <section id="featured" class="featured pb-5">
        <div class="container">
          <!-- section title -->
          <div class="row">
            <div class="col text-center section-title mb-3 mt-5">
              <h3 class="text-slant text-capitalize text-info">well-being</h3>
              <h1 class="text-uppercase">Experiences</h1>
              <div class="title-underline my-3 bg-secondary">
                <div class="title-underline__center"></div>
              </div>
              <h5 class="w-75 mx-auto">Share Your Experiences!</h5>
            </div>
          </div>
          <!-- end of section title -->
          <div class="row">
            <!-- single property -->

            <div class="col-10 col-md-6 col-lg-3 mx-auto my-3">
              <!-- card body -->
              <div class="card-body">
                <div class="card-title text-capitalize text-center">
                  <h5 class="mb-3">grief</h5>
                </div>
              </div>
              <div class="card">
                <div class="img-container">
                  <img
                    src="<?= base_url() ?>/assets/Images\Experiences\grief.jpg"
                    alt="property image"
                    class="card-img-top project-image"
                  />
                </div>
              </div>
            </div>
            <!-- end of  single property -->
            <!-- single property -->
            <div class="col-10 col-md-6 col-lg-3 mx-auto my-3">
              <!-- card body -->
              <div class="card-body">
                <div class="card-title text-capitalize text-center">
                  <h5 class="mb-3">loss & fear</h5>
                </div>
              </div>
              <div class="card">
                <div class="img-container">
                  <img
                    src="<?= base_url() ?>/assets/Images\Experiences\loss.jpg"
                    alt="property image"
                    class="card-img-top project-image"
                  />
                </div>
              </div>
            </div>
            <!-- single property -->
            <div class="col-10 col-md-6 col-lg-3 mx-auto my-3">
              <!-- card body -->
              <div class="card-body">
                <div class="card-title text-capitalize text-center">
                  <h5 class="mb-3">harassment</h5>
                </div>
              </div>
              <div class="card">
                <div class="img-container">
                  <img
                    src="<?= base_url() ?>/assets/Images\Experiences\harassment.jpg"
                    alt="property image"
                    class="card-img-top project-image"
                  />
                </div>
              </div>
            </div>
            <!-- end of  single property -->

            <!-- single property -->
            <div class="col-10 col-md-6 col-lg-3 mx-auto my-3">
              <!-- card body -->
              <div class="card-body">
                <div class="card-title text-capitalize text-center">
                  <h5 class="mb-3">breakup</h5>
                </div>
              </div>
              <div class="card">
                <div class="img-container">
                  <img
                    src="<?= base_url() ?>/assets/Images\Experiences\breakup.jpg"
                    alt="property image"
                    class="card-img-top project-image"
                  />
                </div>
              </div>
            </div>
          </div>


      <!--	title row-->
    		                <!--	title row-->
		      <div class="row">
		        <div class="col d-flex title mt-5">
		          <i class=" mr-3"></i>
		          <div class="title-text mt-3 mr-5">
		            <h2 class="text-uppercase">Recently Posted Experiences</h2>
		              <div class="title-underline my-3 bg-info">
		                <div class="title-underline__center"></div>
		              </div>
		          </div>
		        </div>
		      </div>
		      <!--		end of title row-->
      <!--		end of title row-->
      <div class="row">

          <?php foreach ($experiences as $experience) { ?> 
        <div class="col-lg-3 col-sm-6 my-5">
          <div class="inform-card card text-center">

            <img src="<?= base_url() ?>/assets/profiles/<?= $experience['simage'] . $experience['pimage']?>" width="150" alt="" class="img-fluid rounded-circle mx-auto mt-4">
            <div class="card-body">
              <h4 class="font-weight-bold"><?= $experience['pfirstname'] . ' ' . $experience['pmiddlename'] . ' '. $experience['psurname'] . ' ' . $experience['sfirstname'] . ' ' . $experience['smiddlename'] . ' '. $experience['ssurname'] ?></h4>
              
                <?php if($experience['pid'])
                      {echo "<h6 class='text-info'>Patient</h6>"; }
                      elseif($experience['srole'] == '2'){
                        echo "<h6 class='text-info'>Doctor</h6>";
                      }elseif($experience['srole'] == '4'){
                        echo "<h6 class='text-info'>Blogger</h6>";
                      }else{
                        echo "<h6 class='text-info'>User</h6>";
               } ?>

             
              <hr>
                <span class="text-muted mx-2 detailBlog" style="display:block;text-overflow: ellipsis;width: 200px;  overflow: hidden; white-space: nowrap;">
                  <?= $experience['etitle'] ?>
                </span>
            </div>
            <div class="card card-1 d-flex justify-content-between">
             <h6 class="py-2 text-muted"><?= $experience['created_at'] ?></h6>
            </div>
          </div>
        </div>
            <?php } ?>

        <!-- section title -->
          <div class="row">
            <div class="col text-center section-title my-4">
              <a href="<?= base_url() ?>experiences" class="btn btn-black text-info"><h5 class="w-100 ml-5">View All The Shared Experiences</h5></a>
              <div class="title-underline my-3 bg-secondary">
                <div class="title-underline__center"></div>
              </div>
            </div>
          </div>
          <!-- end of section title -->

      </div>
        </div>
      </section>

 <!-- services section -->
    <section id="services" class="services">
      <div class="container bg-light">
        <div class="row">
          <!-- services info -->
          <div class="col-lg-12 my-3">
            <!-- section title -->
            <div class="row">
              <div class="col text-center section-title mb-3  mt-5">
                <h3 class="text-info text-capitalize">
                  well-being
                </h3>
                <h1 class="text-uppercase">our services</h1>
                <div class="title-underline my-3 bg-secondary">
                  <div class="title-underline__center"></div>
                </div>
                <p class="w-75 mx-auto">
                  Services provided by Well-being.
                </p>
              </div>
            </div>
            <!-- end of section title -->
            <div class="row">
              <!-- single service -->
              <div
                class="col-10 mx-auto col-sm-6 d-flex justify-content-around my-3"
              >
                <div class="service-icon align-self-center">
                  <i class="bi bi-chat-left-text"></i>
                </div>
                <!-- service info -->
                <div class="text-capitalize">
                  <h6 class="">Test Yourself</h6>
                  <p class="text-secondary">Know More About Yourself!</p>

                  
                  <a href="<?= base_url() ?>testyourself" class="text-green service-link">
                    start <span><i class="fas fa-arrow-right"></i></span>
                  </a>
                </div>
              </div>
              <!-- end single service -->
              <!-- single service -->
              <div
                class="col-10 mx-auto col-sm-6 d-flex justify-content-around my-3"
              >
                <div class="service-icon align-self-center">
                  <i class="bi bi-newspaper"></i>
                </div>
                <!-- service info -->
                <div class="text-capitalize">
                  <h6 class="">Blogs</h6>
                  <p class="text-secondary">Build Your Knowledge More! </p>
                  <a href="<?= base_url() ?>blogs" class="text-green service-link">
                    start <span><i class="fas fa-arrow-right"></i></span>
                  </a>
                </div>
              </div>
              <!-- end single service -->
              <!-- single service -->
              <div
                class="col-10 mx-auto col-sm-6 d-flex justify-content-around my-3"
              >
                <div class="service-icon align-self-center">
                  <i class="fas fa-thumbs-up"></i>
                </div>
                <!-- service info -->
                <div class="text-capitalize">
                  <h6 class="">Consult With Doctors</h6>
                  <p class="text-secondary">Contact Anytime Anywhere!</p>
                  <a href="<?= base_url() ?>login" class="text-green service-link">
                    start <span><i class="fas fa-arrow-right"></i></span>
                  </a>
                </div>
              </div>
              <!-- end single service -->
              <!-- single service -->
              <div
                class="col-10 mx-auto col-sm-6 d-flex justify-content-around my-3"
              >
                <div class="service-icon align-self-center">
                  <i class="bi bi-emoji-laughing"></i>
                </div>
                <!-- service info -->
                <div class="text-capitalize">
                  <h6 class="">Share Your Experiences</h6>
                  <p class="text-secondary">We Are Here To Listen You!</p>
                  <a href="<?= base_url() ?>experiences" class="text-green service-link">
                    Start <span><i class="fas fa-arrow-right"></i></span>
                  </a>
                </div>
              </div>
              <!-- end single service -->
              <!-- single service -->
              <div
                class="col-10 mx-auto col-sm-6 d-flex justify-content-around my-3"
              >
                <div class="service-icon align-self-center">
                  <i class="bi bi-envelope-open"></i>
                </div>
                <!-- service info -->
                <div class="text-capitalize">
                  <h6 class="">Apply</h6>
                  <p class="text-secondary">Employee Yourself, Join Us!</p>
                  <a href="<?= base_url() ?>apply" class="text-green service-link">
                    Start <span><i class="fas fa-arrow-right"></i></span>
                  </a>
                </div>
              </div>
              <!-- end single service -->
              <!-- single service -->
              <div
                class="col-10 mx-auto col-sm-6 d-flex justify-content-around my-3"
              >
                <div class="service-icon align-self-center">
                  <i class="bi bi-envelope"></i>
                </div>
                <!-- service info -->
                <div class="text-capitalize">
                  <h6 class="">Send Request</h6>
                  <p class="text-secondary">Got Queries, Send Request!</p>
                  <a href="<?= base_url() ?>request" class="text-green service-link">
                    Start <span><i class="fas fa-arrow-right"></i></span>
                  </a>
                </div>
              </div>
              <!-- end single service -->
            </div>

              <!-- section title -->
          <div class="row">
            <div class="col text-center section-title my-4">
              <a href="<?= base_url() ?>login" class="btn btn-black text-info"><h5 class="w-100 mx-auto">Get Started</h5></a>
              <div class="title-underline my-3 bg-secondary">
                <div class="title-underline__center"></div>
              </div>
            </div>
          </div>
          <!-- end of section title -->
          </div>
        </div>
      </div>
    </section>
    <!-- end of services section -->

    </main>
<?php $this->load->view('layouts/footer'); ?>