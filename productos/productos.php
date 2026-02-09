<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Productos</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>

    <!-- exportar excel -->
    <!-- Buttons CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">

<!-- Buttons JS -->
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>

<!-- Excel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>

<!-- PDF -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>

<!-- Print (lo usaremos para Word) -->
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>

</head>
<body>


<h2>Listado de Productos</h2>

<table id="tablaProductos" class="display" style="width:70%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cliente</th>
        </tr>
    </thead>
    <tbody id="tablaProductos">
        <tr>
            <td colspan="4">Cargando...</td>
        </tr>
    </tbody>
</table>

<script>
   $(document).ready(function () {

    $('#tablaProductos').DataTable({
        ajax: {
            url: 'consulta_productos.php',
            dataSrc: 'data'
        },
        columns: [
            { data: 'id' },
            { data: 'producto' },
            { data: 'precio' },
            { data: 'cliente' }
        ],
        language: {
            url: '../public/datatable/i18n/es-ES.json'
        },
        dom: 'Bfrtip',
        buttons: [

            // 📊 EXCEL
            {
                extend: 'excelHtml5',
                text: '📥 Excel',
                title: 'Listado de Productos'
            },

            // 📄 PDF
            {
                extend: 'pdfHtml5',
                text: '📄 PDF',
                title: 'Listado de Productos',
                orientation: 'landscape',
                pageSize: 'A4'
            },

            // 📝 WORD (truco)
            {
                extend: 'print',
                text: '📝 Word',
                title: 'Listado de Productos',
                customize: function (win) {
                    let html = win.document.body.innerHTML;
                    let blob = new Blob(
                        ['<html><head><meta charset="UTF-8"></head><body>' + html + '</body></html>'],
                        { type: 'application/msword' }
                    );

                    let url = URL.createObjectURL(blob);
                    let a = document.createElement('a');
                    a.href = url;
                    a.download = 'productos.doc';
                    a.click();
                }
            }

        ]
    });

});


</script>
</body>
</html>
