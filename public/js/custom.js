
$(document).ready(function(){
    $('#example').dataTable();

    var example = $('#example1').dataTable({
        processing: true,
        ajax:"/account_list",
    });

    // $('#ViewModal').click(function(){
    //   var account_details = $('#account_details').dataTable({
    //       processing: true,
    //       ajax:"/transaction_list",
    //     });
    // });


    //Initialize Select2 Elements
    $('select').select2({
      theme: 'bootstrap4'
    })
});
