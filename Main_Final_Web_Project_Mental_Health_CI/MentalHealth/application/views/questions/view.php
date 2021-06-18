<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php $this->load->view('layouts/siteNav'); ?>

</header>
				<!-- blogs -->
				<section class="questions">
				  <div class="container-fluid">
				    <div class="row">
				      <!-- blogs categories info -->
   						 <?php $this->load->view('layouts/siteCategoryTest'); ?>


				      <!-- product img -->

				      <div class="col-8 col-md-6 col-lg-8 my-3 bg-light">

				      		<!--  title row--> 
				      		<div class="row m-2 p-3" style="">
				        		<div class="col title mt-4">
				          			<i class="fa fa-stethoscope mr-3"></i>
				          			<div class="title-text">
				            			<h4 class="text-uppercase font-weight-bold">Questions Related To: <?= $category['cname'] ?></h4>
				            			<h5><?= $category['cdesc'] ?></h5>
				          			</div>
				       			</div>
				      		</div>
				        
				        <!-- i-->

<div class="p-5">
	<form action="<?= base_url() ?>testyourself/question/<?= $category['cid'] ?>/resultDisplay" method="POST" enctype="multipart/form-data">
		<div class="card inform-card" style="">
				       				
		<?php 
			$i ='';
			foreach ($questions as $question) { ?>
				<?php $ans_array = array($question['ans_one'], $question['high_symp']);
				 shuffle($ans_array); $i++; ?>
				<div class="card-header card-1">
					<?=$i?>. <?=$question['question']?>
				</div>
				  <ul class="list-group list-group-flush">
					<li class="list-group-item"><input type="radio" name="qaid<?=$i?>" value="<?=$ans_array[0]?>" required> <?=$ans_array[0]?><br></li>
					<li class="list-group-item"> <input type="radio" name="qaid<?=$i?>" value="<?=$ans_array[1]?>"> <?=$ans_array[1]?><br></li>
				  </ul>
				<?php }?>

		</div>
		<input type="submit" value="Submit!">
	</form>
</div>
				 
				        </div>

				        <div class="col-1 col-md-1 col-lg-1">
				        </div>
				     </div>
				  </div>

				</section>

<?php $this->load->view('layouts/footer'); ?>