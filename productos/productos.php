<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Productos</title>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>

    <!-- DataTables Buttons -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>

    <!-- Export Excel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>

    <!-- Export PDF -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>

    <!-- Print -->
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="p-4">

<h2 class="mb-3">Listado de Productos</h2>

<table id="tablaProductos" class="display" style="width:80%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cliente</th>
            <th>Acciones</th>
        </tr>
    </thead>
</table>

<!-- MODAL -->
<div class="modal fade" id="modalDetalles" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Detalles del producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body" id="contenidoModal">
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
          Cerrar
        </button>
      </div>

    </div>
  </div>
</div>

<script>
$(document).ready(function () {

    const tabla = $('#tablaProductos').DataTable({
        ajax: {
            url: 'consulta_productos.php',
            dataSrc: 'data'
        },
        columns: [
            { data: 'id' },
            { data: 'producto' },
            { data: 'precio' },
            { data: 'cliente' },
            {
                data: null,
                orderable: false,
                searchable: false,
                render: function (data, type, row) {
                    return `
                        <button class="btn btn-sm btn-primary btn-detalles"
                                data-id="${row.id}">
                            Detalles
                        </button>
                    `;
                }
            }
        ],
        language: {
            url: '../public/datatable/i18n/es-ES.json'
        },
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                text: '📥 Excel',
                title: 'Listado de Productos'
            },
            {
                extend: 'pdfHtml5',
                text: '📄 PDF',
                title: 'Listado de Productos',
                orientation: 'landscape',
                pageSize: 'A4'
            },
            {
                extend: 'print',
                text: '📝 Word',
                title: 'Listado de Productos'
            }
        ]
    });

    // CLICK EN BOTÓN DETALLES
    $('#tablaProductos').on('click', '.btn-detalles', function () {
        const id = $(this).data('id');

        $('#contenidoModal').html(`
            <p><strong>ID seleccionado:</strong> ${id}</p>
            <p>Modal listo para cargar información por AJAX.</p>
        `);

        const modal = new bootstrap.Modal(
            document.getElementById('modalDetalles')
        );
        modal.show();
    });

});
</script>

</body>
</html>
