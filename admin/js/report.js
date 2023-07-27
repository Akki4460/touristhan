

$(document).ready(function () {
    $('#table').DataTable({
        sDom: '<"search-box"r>',
        dom: 'frtpB',
        buttons: [
            {
                extend: 'pdf',
                text: 'pdf',
                className: 'btn btn-grad',
                exportOptions: {
                    modifier: {
                        page: 'current'
                    }
                }
            },
            {
                extend: 'copyHtml5',
                className: 'btn btn-grad'
            },
            {
                extend: 'excelHtml5',
                className: 'btn btn-grad'
            },
            {
                extend: 'csvHtml5',
                className: 'btn btn-grad'
            }
        ],
        // pagingType: "full_numbers",
        // pagingTag: 'button',
        
        language: { search: "", searchPlaceholder: "Search" , paginate: {
            next: ' > ',
            previous: ' < '  
          }}
    });
});