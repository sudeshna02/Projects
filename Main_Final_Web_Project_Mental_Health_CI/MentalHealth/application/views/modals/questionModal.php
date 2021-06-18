<!--ADD Blog Modal -->
<div class="modal fade" id="addQuestion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
                <span class="text-uppercase text-danger">Manage /</span
                ><span class="text-muted small"> Questions  <i class="bi bi-stickies-fill mr-3 text-muted"></i></span>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            
          <!--################## main content ################-->

                    <form action="<?= base_url() ?>manage/question/add" method="POST" enctype="multipart/form-data">
                    <div class="row w-80 m-2">

                        <!-- Category Name -a- -->
                        <div class="input-group col-lg-3 mt-1">
                            <span>
                            <a class="text-muted"> Category: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-9 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-tag-fill text-muted"></i>
                                </span>
                            </div>
                            <input id="cQuestionName" type="text" name="cat_name" value="cQuestionName" class="form-control bg-white border-left-0 border-md" readonly>
                        </div>

                        <!-- Category Name -a- -->
                        <div class="input-group col-lg-3 mt-1">
                            <span>
                            <a class="text-muted"> Question: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-9 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-tag-fill text-muted"></i>
                                </span>
                            </div>
                            <input id="name" type="text" name="question" value="" placeholder="Question" class="form-control bg-white border-left-0 border-md" required>
                        </div>

                        <!-- Category Name -a- -->
                        <div class="input-group col-lg-3 mt-1">
                            <span>
                            <a class="text-muted"> Answer One: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-9 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-tag-fill text-muted"></i>
                                </span>
                            </div>
                            <input id="name" type="text" name="ans_one" value="" placeholder="Answer One" class="form-control bg-white border-left-0 border-md" required>
                        </div>                        

                        <!-- Category Name -a- -->
                        <div class="input-group col-lg-3 mt-1">
                            <span>
                            <a class="text-muted"> High Symptom: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-9 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-tag-fill text-muted"></i>
                                </span>
                            </div>
                            <input id="name" type="text" name="high_ans" value="" placeholder="Answer Four" class="form-control bg-white border-left-0 border-md" required>
                        </div>
                        
                        <div class="modal-footer w-100">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <input id="cQuestionId" type="hidden" name="caid" value="cQuestionId" placeholder="Blog Title" class="form-control bg-white border-left-0 border-md" readonly>
                                  <input type="submit" class="btn btn-info" value="Add" name="submitr" />
                        </div>

                     </div>
                 </form>

        <!--################## main content ################-->


      </div>
    </div>
  </div>
</div>


<!--ADD Blog Modal -->
<div class="modal fade" id="editQuestion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
                <span class="text-uppercase text-danger">Manage /</span
                ><span class="text-muted small"> Questions  <i class="bi bi-stickies-fill mr-3 text-muted"></i></span>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            
          <!--################## main content ################-->   

                    <form action="<?= base_url() ?>manage/question/edit" method="POST" enctype="multipart/form-data">
                    <div class="row w-80 m-2">

                        <!-- Category Name -a- -->
                        <div class="input-group col-lg-3 mt-1">
                            <span>
                            <a class="text-muted"> Question: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-9 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-tag-fill text-muted"></i>
                                </span>
                            </div>
                            <input id="questionName" type="text" name="question" value="questionName" placeholder="Question" class="form-control bg-white border-left-0 border-md" required>
                        </div>

                        <!-- Category Name -a- -->
                        <div class="input-group col-lg-3 mt-1">
                            <span>
                            <a class="text-muted"> Answer One: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-9 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-tag-fill text-muted"></i>
                                </span>
                            </div>
                            <input id="questionAnswer" type="text" name="ans_one" value="questionAnswer" placeholder="Answer One" class="form-control bg-white border-left-0 border-md" required>
                        </div>                        

                        <!-- Category Name -a- -->
                        <div class="input-group col-lg-3 mt-1">
                            <span>
                            <a class="text-muted"> High Symptom: </a>
                            </span>
                        </div>

                        <!-- Category Name -input- -->
                        <div class="input-group col-lg-9 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-tag-fill text-muted"></i>
                                </span>
                            </div>
                            <input id="questionHigh" type="text" name="high_ans" value="questionHigh" placeholder="Answer Four" class="form-control bg-white border-left-0 border-md" required>
                        </div>
                        
                        <div class="modal-footer w-100">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <input id="catQuestionId" type="hidden" name="caid" value="catQuestionId" placeholder="Blog Title" class="form-control bg-white border-left-0 border-md" readonly>
                                  <input id="questionId" type="hidden" name="editQuestion" value="questionId" placeholder="Blog Title" class="form-control bg-white border-left-0 border-md" readonly>
                                  <input type="submit" class="btn btn-info" value="Edit" name="submitr" />
                        </div>

                     </div>
                 </form>

        <!--################## main content ################-->


      </div>
    </div>
  </div>
</div>


<!-- Modal Experience Delete-->
<div class="modal fade" id="deleteQuestion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLongTitle">Continue to delete?   <i class="bi bi-x-circle-fill"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url() ?>question/delete">
          <h5>Are you sure you want to delete this data?<br></h5>

          <input type="hidden" class="form-control" name="deleteQuestion" id="qId" value="qId">
        <input id="cqId" type="hidden" name="caid" value="cqId" placeholder="Blog Title" class="form-control bg-white border-left-0 border-md" readonly>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger">Yes</button></a>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>

<script type="text/javascript">
    //to show add journal modal
    $(".addQuestion").click(function () {

    var c_question_id = $(this).attr('cat-question-id');
    $("#cQuestionId").val( c_question_id );

    var c_question_name = $(this).attr('cat-question-name');
    $("#cQuestionName").val( c_question_name );

    $('#addQuestion').modal('show');

});

    $(".deleteQuestion").click(function () {

    var q_id = $(this).attr('q-id');
    $("#qId").val( q_id );

    var cq_id = $(this).attr('cq-id');
    $("#cqId").val( cq_id );

    $('#deleteQuestion').modal('show');
});

    $(".editQuestion").click(function () {

    var cat_question_id = $(this).attr('c-question-id');
    $("#catQuestionId").val( cat_question_id );

    var question_id = $(this).attr('question-id');
    $("#questionId").val( question_id );

    var question_name = $(this).attr('question-name');
    $("#questionName").val( question_name );

    var question_answer = $(this).attr('question-answer');
    $("#questionAnswer").val( question_answer );

    var question_high = $(this).attr('question-high');
    $("#questionHigh").val( question_high );

    $('#editQuestion').modal('show');

});

</script>