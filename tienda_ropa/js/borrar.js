function elim_prenda(id) {
  Swal.fire({
    title: "Está seguro?",
    text: "Usted desea eliminar un registro.",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Sí, eliminar!",
    cancelButtonText: "Cancelar",
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        data: {
          id: id,
        },
        url: "php/borrar.php",
        success: function (r) {
          Swal.fire("Eliminado!", "El registro ha sido eliminado.", "success");
        },
      });
      window.location.href = "lista.php";
    }
  });
}
