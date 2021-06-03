
// para la busqueda sincrona
$(document).ready(function(){//documento estee listo
$('#id_search').keyup(function(e){///para la busqueda
e.preventDefault();
let data = $('#form').serializeArray(); //para obtener los valores de form en forma de arays
$.post({//ajax
    url:'busqueda.php',
    data:data,  //datos a enviar
    success: function(response_){// respon puede ser cual quier nonmbre
       $('#response').html(response_);//se le llama con $.si e guardara en la variable response_
        //  $('#catalogo').html(response_catalogo);//se le llama con $.si e guardara en la variable response_
    }
})
})
});
