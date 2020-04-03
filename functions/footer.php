
<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
  <script>
  
      $(document).ready( function () {
      	var idioma = { "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }}
      $('#myTable').DataTable({
      	"language": idioma,
        "order": [ 0, 'desc' ],
        dom: 'Bfrtip',
        buttons: [{
            extend: 'pdfHtml5',
            text: '<i class="fas fa-file-pdf"></i>',
            titleAttr:  'PDF', 
            title: 'Gastos',
            customize: function(doc) {
              doc.content[1].margin = [ 100, 0, 100, 0 ] //left, top, right, bottom
            }
          }
        ]
      });
      $('#myTableGastos').DataTable({
      	"language": idioma,
        "order": [ 0, 'desc' ],
        dom: 'Bfrtip',
        buttons: [{
            extend: 'pdfHtml5',
            text: '<i class="fas fa-file-pdf"></i>',
            titleAttr:  'PDF',
            title: 'Gastos',
            customize: function(doc) {
              doc.content[1].margin = [ 100, 0, 100, 0 ] //left, top, right, bottom
            }
          }
        ]
      });
       $('#myTable1').DataTable({
       	"language": idioma,
         "order": [ 0, 'desc' ],
          dom: 'Bfrtip',
          buttons: [{
            extend: 'pdfHtml5',
            text: '<i class="fas fa-file-pdf"></i>',
            titleAttr:  'PDF',
            title: 'Ingresos',
            customize: function(doc) {
              doc.content[1].margin = [ 100, 0, 100, 0 ] //left, top, right, bottom
            }
          }
        ]

       });
       $('#myTableExtras').DataTable({
       	"language": idioma,
         "order": [ 0, 'desc' ],
          dom: 'Bfrtip',
          buttons: [{
            extend: 'pdfHtml5',
            text: '<i class="fas fa-file-pdf"></i>',
            titleAttr:  'PDF',
            title: 'Ingresos Extras',
            customize: function(doc) {
              doc.content[1].margin = [ 100, 0, 100, 0 ] //left, top, right, bottom
            }
          }
        ]

       });
       $('#myTablePendientes').DataTable({
       	"language": idioma,
         "order": [ 0, 'desc' ],
          dom: 'Bfrtip',
          buttons: [{
            extend: 'pdfHtml5',
            text: '<i class="fas fa-file-pdf"></i>',
            titleAttr:  'PDF',
            title: 'Pendientes',
            customize: function(doc) {
              doc.content[1].margin = [ 100, 0, 100, 0 ] //left, top, right, bottom
            }
          }
        ]

       });
       $('#myTableClientes').DataTable({
       	"language": idioma,
         "order": [ 0, 'desc' ],
          dom: 'Bfrtip',
          buttons: [{
            extend: 'pdfHtml5',
            text: '<i class="fas fa-file-pdf"></i>',
            titleAttr:  'PDF',
            title: 'Clientes',
            customize: function(doc) {
              doc.content[1].margin = [ 100, 0, 100, 0 ] //left, top, right, bottom
            }
          }
        ]

       });
       
      } );

    </script>

</body>

</html>
