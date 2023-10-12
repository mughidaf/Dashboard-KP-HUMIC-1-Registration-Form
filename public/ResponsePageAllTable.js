$(document).ready(function() {
    $('#example').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'collection',
            className: 'custom-html-collection',
            stateSave: true,
            buttons: [
                '<h3>Sort</h3>',
                'columnsToggle',
                '<h3>Export</h3>',
                // 'pdf',
                'csv',
                'excel',

                '<h3>PDF Export</h3>',
                {
                    extend: 'print',
                    customize: function(win) {
                        $(win.document.body)
                            .css('font-size', '10pt')
                            .prepend(
                                '<img src="" style="position:absolute; top:0; left:0;" />'
                            );
                        $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
                    },
                    text: 'PDF'
                },
            ],
            select: true,
            text: 'Sort & Export',
        }, ],
        select: true
    });
});