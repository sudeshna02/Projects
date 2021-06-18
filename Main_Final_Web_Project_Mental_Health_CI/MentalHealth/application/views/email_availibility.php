<?php
  $this->load->view('layouts/head');
?>
      <div class="container" style="width:600px">  
           <br /><br /><br />  
           <h3><?php echo $title; ?></h3>  
           <br />  
           <label>Enter Email</label>  
           <input type="text" name="email" id="email" class="form-control" />  
           <span id="email_result"></span>  

            <script>  
 $(document).ready(function(){  
      $('#email').change(function(){  
           var email = $('#email').val();  
           if(email != '')  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>main/check_email_avalibility",  
                     method:"POST",  
                     data:{email:email},  
                     success:function(data){  
                          $('#email_result').html(data);  
                     }  
                });  
           }  
      });  
 });  
 </script> 
           <br /><br />  
           <label>Enter Password</label>  
           <input type="text" name="password" id="password" class="form-control" />  
      </div>  
 </body>  
 </html>  

 
