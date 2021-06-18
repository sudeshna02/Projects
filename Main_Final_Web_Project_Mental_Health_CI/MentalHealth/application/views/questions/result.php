<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php $this->load->view('layouts/siteNav'); ?>
</header>
				<!-- blogs -->
				<section class="questions">
				  <div class="container-fluid">
				    <div class="row">
				      <!-- blogs categories info -->
				      				      <!-- blogs categories info -->
   						 <?php $this->load->view('layouts/siteCategoryTest'); ?>

				      <!-- product img -->
				      <div class="col-10 col-md-7 col-lg-9 mx-auto my-3 ">

				      		<!--  title row-->
				      		<div class="row">
				        		<div class="col title mt-4">
				          			<i class="fa fa-stethoscope mr-3"></i>
				          			<div class="title-text">
				            			<h4 class="text-uppercase font-weight-bold">RESULT!!!</h4>
				          			</div>
				       			</div>
				      		</div>
				        
				        <!-- i-->
				       <div class="m-5">

				       	 <div class="alert alert-success" role="alert">
  							<h4 class="alert-heading">Result Has Been Successfully Posted!</h4>
  							<p>Check Your Result Down Below.</p>
  						<hr>
  						<p class="mb-0">And Always Remember We Are Here With You Anytime Anywhere!</p>
						</div> 
						
						<?php $score = 0; 
								    
							$array1= array(); 
							$array2= array();    
							$array3= array();
							$array4= array();
							$array5= array();
							$array6= array();
							$array7= array();
							$array8= array();
							$array9= array();
								      
						 foreach($checks as $checkans) { 

							array_push($array1, $checkans); } 
								               
							 foreach($results as $res) {
                               	 array_push($array2, $res['high_symp']); 
                                  array_push($array3, $res['qid']); 
                                  array_push($array9, $res['cid']); 
                                  array_push($array4, $res['question']); 
                                  array_push($array5, $res['ans_one']); 
                                  array_push($array6, $res['ans_two']); 
                                  array_push($array7, $res['ans_three']); 
                              array_push($array8, $res['high_symp']); 
                         	} 

                       
                           for ($x=0; $x <10; $x++) {
          
                      		if ($array2[$x]!=$array1[$x]) {
							
							 	$score = $score + 0;

                            } else { 
                     
                            	$score = $score + 1; 
                      		}		 
                    	}
                    	  $score = $score * 10;

                    	 echo "<div class='alert alert-info' role='alert'>
 								<h5 class='alert-heading'> You are <a href='#' class='alert-link text-danger'>" . $score . "</a>% affected by the illness. Please take further action if necessary. </h5>
								</div>";  ?>

						  	</div>
				        </div>
				     </div>
				  </div>

				</section>

<?php $this->load->view('layouts/footer'); ?>


