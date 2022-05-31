
const dateFilter = (fieldNumber) => {
    $.fn.dataTable.ext.search.push(
        function(settings, data, dataIndex) {
            var min = $('#date-filter-min').datepicker("getDate");
            var max = $('#date-filter-max').datepicker("getDate");
            console.log(max)
            date_format = "DD/MM/YYYY"
            var startDate = moment(data[fieldNumber], date_format).toDate()
            // var startDate = new Date(data[fieldNumber]);
            if (min == null && max == null) { return true; }
            if (min == null && startDate <= max) { return true; }
            if (max == null && startDate >= min) { return true; }
            if (startDate <= max && startDate >= min) { return true; }
            return false;
        }
    );
}

$(function () {

    var table =  $('#feedback-table').DataTable({

    });  
    
     var table =  $('#blogs-table').DataTable({

    });  


    var table =  $('#rating-table').DataTable({

    }); 
    $(document).on('click', '.edit_data', function() {
       
        var val = $(this).val();
        console.log(val);
        val = JSON.parse(val);
       
        $('#id').val(val.id);
        $('#Category').val(val.name);
        
        $('#img_tag').prop('src', SITE_URL+'/public/storage/'+val.image);
        $('#modal-update').modal('show');
    });

    $(document).on('click', '.edit_sliders', function() {

        var val = $(this).val();
        console.log(val);
        val = JSON.parse(val);
       
        $('#id').val(val.id);
        $('#slider_img_tag').prop('src',val.image);
        
         $('#modal-update-sliders').modal('show');

         $('#modal-update').modal('show');
    });


    $(document).on('click', '.type_of_edit', function() {

        var val = $(this).val();
        console.log(val);
        val = JSON.parse(val);
       
        $('#id').val(val.id);
        $('#name').val(val.name);
        $('#price').val(val.price);
         $('#update-type-of').modal('show');
        
    });
    $(document).on('click', '.edit-grinding', function() {

        var val = $(this).val();
        console.log(val);
        val = JSON.parse(val);
       
        $('#grinding-id').val(val.id);
        $('#grinding-name').val(val.name);
         $('#edit-grinding').modal('show');
        
    });

    $(document).on('click', '.order-status', function() {

        var val = $(this).val();
        console.log(val);
        val = JSON.parse(val);
        console.log(val)
       $("#id").val(val.id);
     
     $('#payment_status_option').val(val.status).change();
     $('#delivery_status_option').val(val.delivered_status).change();
     $('#delivery_date').val(val.delivery_date);
     $('#order-status').modal('show');
        
    });

    $(document).on('click', '.stick-credit-update', function() {

        var val = $(this).val();
        console.log(val);
        val = JSON.parse(val);
        console.log(val)

        $("#stick-credit-update-id").val(val.id);
        $('#stick-credit-update-quantity').val(val.quantity);
        $('#stick-credit-update-price').val(val.price);
        $('#stick-credit-update-date').datepicker("setDate", new Date(val.date));


         $('#stick-credit-update').modal('show');

    });

    $(document).on('click', '.stick-debit-update', function() {

        var val = $(this).val();
        console.log(val);
        val = JSON.parse(val);
        console.log(val)

        $("#stick-debit-update-id").val(val.id);
        $('#stick-debit-update-quantity').val(val.quantity);
        $('#stick-debit-update-date').datepicker("setDate", new Date(val.date));


         $('#stick-debit-update').modal('show');

    });

});

if ($('#category-table').length) {
    var CategoryTable =  $('#category-table').DataTable({

    });
}

$("#category-filter").on("change", function(e) {
        let data = $("#category-filter").val();
        if (data) {
            CategoryTable.search( data ).draw();
        }else{
            CategoryTable.search( "" ).draw();
        }
});


if ($('#payment-table').length) {
    var paymentTable = $('#payment-table').DataTable( {
        "responsive": true,
        select: true,
        colReorder: true,
        buttons: [
            {
                extend: 'excelHtml5',
                text: '<i class="fas fa-file-excel"></i> Excel',
                titleAttr: 'Excel'
            },
            {
                extend: 'csvHtml5',
                text: '<i class="fas fa-file-csv"></i> CSV',
                titleAttr: 'CSV'
            },
            {
                extend: 'pdfHtml5',
                text: '<i class="fas fa-file-pdf"></i> PDF',
                titleAttr: 'PDF'
            },
            {
                extend: 'print',
                text: '<i class="fas fa-print"></i> Print',
                titleAttr: 'Print'
            }

        ],
        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
            return typeof i === 'string' ? i.replace(/[\$,]/g, '')*1 : typeof i === 'number' ? i : 0; };
            // Total over all pages
            data = api.column( 6 ).data();
            total = data.length ? data.reduce( function (a, b) { return intVal(a) + intVal(b); } ) : 0; // Total over this page
            data = api.column( 6, { page: 'current'} ).data();
            pageTotal = data.length ? data.reduce( function (a, b) { return intVal(a) + intVal(b); } ) : 0; // Update footer
            $( api.column( 6 ).footer() ).html( pageTotal );
        },
    });
    $('#date-filter-min, #date-filter-max').change(function() {
        paymentTable.draw();
    });
    var paymentExport = paymentTable.buttons().container().appendTo($('#paymentExport'));
    dateFilter(4);
}


if ($('#order-table').length) {
    var orderTable =  $('#order-table').DataTable({
       
           "responsive": true,
            select: true,
            colReorder: true,
             buttons: [
                {
                    extend: 'excelHtml5',
                    text: '<i class="fas fa-file-excel"></i> Excel',
                    titleAttr: 'Excel',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3, 4, 5, 6, 7 ]
                    }
                },
                {
                    extend: 'csvHtml5',
                    text: '<i class="fas fa-file-csv"></i> CSV',
                    titleAttr: 'CSV',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3, 4, 5, 6, 7 ]
                    }
                },
                {
                    extend: 'pdfHtml5',
                    text: '<i class="fas fa-file-pdf"></i> PDF',
                    titleAttr: 'PDF',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3, 4, 5, 6, 7 ]
                    }
                },
                {
                    extend: 'print',
                    text: '<i class="fas fa-print"></i> Print',
                    titleAttr: 'Print',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3, 4, 5, 6, 7 ]
                    }
                }
     
            ]
        });
    orderTable.buttons().container().appendTo($('#orderExport'));
}


if ($('#user-table').length) {
    var usertable = $('#user-table').DataTable({
           "responsive": true,
            select: true,
            colReorder: true,
             buttons: [
                {
                    extend: 'excelHtml5',
                    text: '<i class="fas fa-file-excel"></i> Excel',
                    titleAttr: 'Excel',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3, 4 ]
                    }
                },
                {
                    extend: 'csvHtml5',
                    text: '<i class="fas fa-file-csv"></i> CSV',
                    titleAttr: 'CSV',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3, 4 ]
                    }
                },
                {
                    extend: 'pdfHtml5',
                    text: '<i class="fas fa-file-pdf"></i> PDF',
                    titleAttr: 'PDF',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3, 4 ]
                    }
                },
                {
                    extend: 'print',
                    text: '<i class="fas fa-print"></i> Print',
                    titleAttr: 'Print',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3, 4 ]
                    }
                }
     
            ],
    });
    var userexprost = usertable.buttons().container().appendTo($('#userExport'));
}

if ($('#stock-credit').length) {
    var stockCredit = $('#stock-credit').DataTable( {
        "responsive": true,
        select: true,
        searching: false,
        colReorder: true,
        buttons: [
            {
                extend: 'excelHtml5',
                text: '<i class="fas fa-file-excel"></i> Excel',
                titleAttr: 'Excel',
            },
            {
                extend: 'csvHtml5',
                text: '<i class="fas fa-file-csv"></i> CSV',
                titleAttr: 'CSV'
            },
            {
                extend: 'pdfHtml5',
                text: '<i class="fas fa-file-pdf"></i> PDF',
                titleAttr: 'PDF'
            },
            {
                extend: 'print',
                text: '<i class="fas fa-print"></i> Print',
                titleAttr: 'Print'
            }

        ],
        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
             // Remove the formatting to get integer data for summation
             var intVal = function ( i ) {
              return typeof i === 'string' ? i.replace(/[\$,]/g, '')*1 : typeof i === 'number' ? i : 0; };
             // Total over all pages
             data = api.column( 5 ).data();
             total = data.length ? data.reduce( function (a, b) { return intVal(a) + intVal(b); } ) : 0; // Total over this page
             data = api.column( 5, { page: 'current'} ).data();
             pageTotal = data.length ? data.reduce( function (a, b) { return intVal(a) + intVal(b); } ) : 0; // Update footer
             $( api.column( 5 ).footer() ).html( pageTotal );
             quantity = api.column( 3 ).data();
             quantityTotal = quantity.length ? quantity.reduce( function (a, b) { return intVal(a) + intVal(b); } ) : 0; // Total over this page
             $("#total-credit-amount").html( total );
             $("#add-quantityTotal").html( quantityTotal );
        },
    });
}

if ($('#stock-debit').length) {
    var stockdedit = $('#stock-debit').DataTable( {
        "responsive": true,
        select: true,
        searching: false,
        colReorder: true,
        buttons: [
            {
                extend: 'excelHtml5',
                text: '<i class="fas fa-file-excel"></i> Excel',
                titleAttr: 'Excel',
            },
            {
                extend: 'csvHtml5',
                text: '<i class="fas fa-file-csv"></i> CSV',
                titleAttr: 'CSV'
            },
            {
                extend: 'pdfHtml5',
                text: '<i class="fas fa-file-pdf"></i> PDF',
                titleAttr: 'PDF'
            },
            {
                extend: 'print',
                text: '<i class="fas fa-print"></i> Print',
                titleAttr: 'Print'
            }

        ],
        
    });
}

  
  
 
 
