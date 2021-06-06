// --------------------------------------------validadion  con alert y onclick
<script type="text/javascript">
function validar(){
  var respuesta=confirm("Estas seguro de deseos elimimar al usuario ")
if (respuesta == true) {
  return true;
} else {
    return false;
}

}
</script>


// --------------------------------------------validadion  con alert y onclick


<a href="#" onclick="gaa('cley','carlos')">djkfak</a>


<script type="text/javascript">
  function gaa(sa1, sa2){
    return gaa(sa1 + ' , ' + sa2);
  }
</script>

// -------------------------------------------- timer
<p id="demo"></p>

<button onclick="clearInterval(myVar)">Stop time</button>

<script>
var myVar = setInterval(myTimer, 1000);
function myTimer() {
  var d = new Date();
  document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}
</script>
// -------------------------------------------- timer






  <a href="#" onclick="return validar()" class="btn btn-danger">dfdf <i class="bi bi-trash"></i></a>

  <a href="#" id="cmd">evendfdto 1</a>


                    <script type="text/javascript">
                    function validar(){
                      var respuesta=confirm("Estas seguro de deseos elimimar al usuario ")
                    if (respuesta == true) {
                      return true;
                    } else {
                        return false;
                    }

                    }


$("#cmd").click(function(){
  //alert("click con js");
  //Swal.fire("ejemplo de alert2");
  //alert("click con js");
  //Swal.fire("ejemplo de alert2");
  Swal.fire({
    type:'warning ',
    title:'mensaje',
    text:'texto de prueva',
      footer: '<a href="">Why do I have this issue?</a>'
  });

});




                    function validar(){
                      Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {

    Swal.fire(

'<a  href="crud.php?delete_id=<?php echo $row['db_id']; ?>" class="btn btn-primary">eliminar</a> ',
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})

                    //     const swalWithBootstrapButtons = Swal.mixin({
                    //       customClass: {
                    //         confirmButton: 'btn btn-success',
                    //         cancelButton: 'btn btn-danger'
                    //       },
                    //       buttonsStyling: false
                    //     })
                    //
                    //     swalWithBootstrapButtons.fire({
                    //       title: 'deseas elimianr?',
                    //       text: "los datos no se podra recuperar!",
                    //       icon: 'warning',
                    //       showCancelButton: true,
                    //       confirmButtonText: 'si ',
                    //       cancelButtonText: 'No,!',
                    //       reverseButtons: true
                    //     }).then((result) => {
                    //       if (result.isConfirmed) {
                    //         // setTimeout(redirigir,8000);
                    //         swalWithBootstrapButtons.fire(
                    //
                    //           'eliminado!',
                    //           'producto eliminado .',
                    //           'success'
                    //
                    //
                    //             // window.location.href="index.php";
                    //         )
                    //           window.location.href="crud.php?delete_id=<?php echo $row['db_id']; ?>" ;
                    //         // return true;
                    //       } else if (
                    //         /* Read more about handling dismissals below */
                    //         result.dismiss === Swal.DismissReason.cancel
                    //       ) {
                    //         swalWithBootstrapButtons.fire(
                    //           'Cancelled',
                    //           'Your imaginary file is safe :)',
                    //           'error'
                    //         )
                    //         // return false;
                    //       }
                    //     })
                    //
                    }
                    </script>




<script type="text/javascript">

//
//
// //
// const swalWithBootstrapButtons = Swal.mixin({
// customClass: {
//   confirmButton: 'btn btn-success',
//   cancelButton: 'btn btn-danger'
// },
// buttonsStyling: false
// })
//
// Swal.fire(
//   {
//
//   title:'mensaje',
//   text:'texto de prueva',
//   position:'center',
//   icon:'success',
//   timer:1000
// }
// );
//
// swalWithBootstrapButtons.fire({
// title: 'Are you sure?',
// text: "You won't be able to revert this!",
// icon: 'warning',
// showCancelButton: true,
// confirmButtonText: 'Yes, delete it!',
// cancelButtonText: 'No, cancel!',
// reverseButtons: true
// }).then((result) => {
// if (result.isConfirmed) {
//   swalWithBootstrapButtons.fire(
//     'Deleted!',
//     'Your file has been deleted.',
//     'success'
//   )
// } else if (
//   /* Read more about handling dismissals below */
//   result.dismiss === Swal.DismissReason.cancel
// ) {
//   swalWithBootstrapButtons.fire(
//     'Cancelled',
//     'Your imaginary file is safe :)',
//     'error'
//   )
// }
// })
</script>
