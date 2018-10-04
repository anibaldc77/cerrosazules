/*
 * DataTables - Tables
 */


/*$(document).ready(function() {
      $('#example').DataTable( {
        "language": {
            "url": "../../externos/data-tables/idioma.json"
        }
    } );
	*/

$(document).ready(function() {
      $('#tabla-comun').DataTable({
		   "order": [ 0, "desc" ],
		dom: '<"top"lBf<"clear">>rt<"bottom"ip<"clear">>',
		buttons: [
			{ extend: 'copyHtml5',
			text: 'Copiar',
			},
		],
	  });
		
	  $('#tabla-comun tbody')
        .on( 'mouseenter', 'td', function () {
            var colIdx = table.cell(this).index().column;
 
            $( table.cells().nodes() ).removeClass( 'highlight' );
            $( table.column( colIdx ).nodes() ).addClass( 'highlight' );
        } );

					 
    var groupColumn = 2;
    var table = $('#example1').DataTable({
       
		
		
		"columnDefs": [
            { "visible": false, "targets": groupColumn }
        ],
        "order": [[ groupColumn, 'asc' ]],
        "displayLength": 25,
        "drawCallback": function ( settings ) {
            var api = this.api();
            var rows = api.rows( {page:'current'} ).nodes();
            var last=null;
 
            api.column(groupColumn, {page:'current'} ).data().each( function ( group, i ) {
                if ( last !== group ) {
                    $(rows).eq( i ).before(
                        '<tr class="group"><td colspan="8">'+group+'</td></tr>'
                    );
 
                    last = group;
                }
            } );
        }
    } );
 
    // Order by the grouping
    $('#example1 tbody').on( 'click', 'tr.group', function () {
        var currentOrder = table.order()[0];
        if ( currentOrder[0] === groupColumn && currentOrder[1] === 'asc' ) {
            table.order( [ groupColumn, 'desc' ] ).draw();
        }
        else {
            table.order( [ groupColumn, 'asc' ] ).draw();
        }
    } );
} );
