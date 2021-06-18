
      <div class="col-10 col-md-5 col-lg-3 mx-auto my-3 px-5 text-capitalize">

        <!-- categories -->
        <div class="blogs-categories-title my-4">
          <h6 class="text-uppercase">Categorize by:</h6>
          <div class="blogs-categories-underline"></div>
        </div>
        <!-- single link -->
        <?php foreach ($categories as $category) { ?>
        <a href="<?= site_url() ?>testyourself/question/display/<?= $category['cid'] ?>" class="d-block blogs-categories-link">
          <p class="mb-0"><?= $category['cname'] ?></p>
        </a>
        
        <?php } ?>

      </div>