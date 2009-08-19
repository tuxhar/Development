 #DataTable for Basic Table
 <link href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
 <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

 <table id="mytable">
 </table>
<script>
    $(function(){
        $('#mytable').DataTable();
    });
</script>

#if you wanna use DataTable  with ajax data then use this
 initialize the datatable in success
 <script>
 $(document).ready(function() {
    $('#mytable').DataTable( {
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
    } );
} );

</script>