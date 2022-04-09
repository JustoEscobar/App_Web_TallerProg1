/*$(document).ready(function() {
    $('#example').DataTable();
} );
*/
var table = $('#mi_tabla').DataTable({
    language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": 'Mostrar <select>'+
            '<option value="5">5</option>'+
            '<option value="10">10</option>'+
            '<option value="15">15</option>'+
            '<option value="-1">Todos</option>'+
            '</select> Registros',
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "",
        searchPlaceholder: "Buscar Registros",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
    },
});
