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

<!-- FORMULARIO DE FILTROS -->
<div class="card mb-4 p-3">
    <div class="row">
        <div class="col-md-3">
            <label>Producto</label>
            <input type="text" id="filtroProducto" class="form-control">
        </div>

        <div class="col-md-3">
            <label>Cliente</label>
            <input type="text" id="filtroCliente" class="form-control">
        </div>

        <div class="col-md-3">
            <label>Precio mínimo</label>
            <input type="number" id="filtroPrecioMin" class="form-control">
        </div>

        <div class="col-md-3">
            <label>Precio máximo</label>
            <input type="number" id="filtroPrecioMax" class="form-control">
        </div>
    </div>

    <div class="mt-3">
        <button id="btnBuscar" class="btn btn-primary">Buscar</button>
        <button id="btnLimpiar" class="btn btn-secondary">Limpiar</button>
    </div>
</div>

<table id="tablaProductos" class="display" style="width:100%">
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

      <div class="modal-body" id="contenidoModal"></div>

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

    // Inicializar DataTable
    const tabla = $('#tablaProductos').DataTable({
        ajax: {
            url: 'consulta_productos.php',
            type: 'GET',
            data: function (d) {
                // Pasar los filtros al backend
                d.producto   = $('#filtroProducto').val();
                d.cliente    = $('#filtroCliente').val();
                d.precio_min = $('#filtroPrecioMin').val();
                d.precio_max = $('#filtroPrecioMax').val();
            },
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
                    return `<button class="btn btn-sm btn-primary btn-detalles" data-id="${row.id}">Detalles</button>`;
                }
            }
        ],
        dom: 'Bfrtip',
        buttons: [
            { extend: 'excelHtml5', text: '📥 Excel', title: 'Listado de Productos' },
            { extend: 'pdfHtml5', text: '📄 PDF', title: 'Listado de Productos', orientation: 'landscape' },
            { extend: 'print', text: '📝 Word', title: 'Listado de Productos' }
        ]
    });

    // Botón BUSCAR
    $('#btnBuscar').on('click', function () {
        tabla.ajax.reload();
    });

    // Botón LIMPIAR
    $('#btnLimpiar').on('click', function () {
        $('#filtroProducto').val('');
        $('#filtroCliente').val('');
        $('#filtroPrecioMin').val('');
        $('#filtroPrecioMax').val('');
        tabla.ajax.reload();
    });

    // Buscar al presionar ENTER en Producto
    $('#filtroProducto').on('keyup', function (e) {
        if(e.key === 'Enter') tabla.ajax.reload();
    });

    // Modal
    $('#tablaProductos').on('click', '.btn-detalles', function () {
        const id = $(this).data('id');
        $('#contenidoModal').html(`
            <p><strong>ID:</strong> ${id}</p>
            <p>Aquí puedes cargar más datos por AJAX.</p>
        `);
        new bootstrap.Modal(document.getElementById('modalDetalles')).show();
    });

});
</script>

</body>
</html>
