$(document).ready(function() {
    var dataTable = $('#filtertable').DataTable({
        "pageLength":6,
        'aoColumnDefs':[{
            'bSortable':false,
            'aTargets':['nosort'],
        }],
        columnDefs:[
            {type:'date-dd-mm-yyyy',aTargets:[6]}
        ],
        "aoColumns":[
            null,
            null,
            null,
            null,
            null,
            null,
            null
        ],
        "order":false,
        "bLengthChange":false,
        "dom":'<"top">ct<"top"p><"clear">'
    });
    $("#filterbox").keyup(function(){
        dataTable.search(this.value).draw();
    });
} );

  $(function () {
  $('[data-toggle="popover"]').popover()
});

// ############################################## start of journal js ################################################################ //

    //to show add journal modal
    $(".addJournal").click(function () {
    $('#addJournal').modal('show');
});

    //to show view journal modal
    $(".viewJournal").click(function () {
    var t_id = $(this).attr('topicc-id');
    $("#tId").val( t_id );

    var d_id = $(this).attr('desc-id');
    $("#dId").val( d_id );

    $('#viewJournal').modal('show');
});

    //to show edit journal modal
    $(".editJournal").click(function () {

    var jour_id = $(this).attr('jour-id');
    $("#jourId").val( jour_id );

    var to_id = $(this).attr('topi-id');
    $("#topId").val( to_id );

    var ds_id = $(this).attr('descc-id');
    $("#descId").val( ds_id );

    $('#editJournal').modal('show');
});

    //to show delete journal modal
    $(".deleteJournal").click(function () {
    var j_id = $(this).attr('journal-id');
    $("#jId").val( j_id );
    $('#deleteJournal').modal('show');
});

// ############################################## end of journal js ################################################################ //