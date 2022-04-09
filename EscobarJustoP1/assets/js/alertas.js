$("#btn-alertas").click(function(){
	Swal.fire({
  title: 'Estas seguro de guardar los cambios?',
  showDenyButton: true,
  showCancelButton: true,
  confirmButtonText: `Guadar`,
  denyButtonText: `No guardar`,
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    Swal.fire('Modificado con exito!', '', 'success')
  } else if (result.isDenied) {
    Swal.fire('No se guardaron cambios', '', 'info')
  }
});
});

function enviar(){
event.preventDefault();

    Swal.fire({
    title: '¿Seguro de modificar usuario?',
    type: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Si',
    cancelButtonText: "No",
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
  }).then((result) => {
    if (result.value) {
    document.formulario_registro.submit();
    }
    return false;
  })
}

function validar(e) {
  swal("Buen trabajo!", "Clickeaste en el boton!", "success");
  return false;
}