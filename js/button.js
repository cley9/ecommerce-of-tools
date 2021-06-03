
$(function ()
{
    get_users();

    $(".form-check-input").on("click", function (){//usaremos jquery

        get_users();//se ejecutara la funcion
    });

});



function get_users()
{

    let form = $("#multi-filters");

    $.ajax(//para obtener el registro de manera asincrona
        {
            type: "POST",
            url: "filterProducto.php",
            data: form.serialize(),//sele pasara la data a php en formato aray
            success: function (data)
            {
                $("#filters-result").html("");//cada vez que aga una peticino se limpie todo


                $.each(JSON.parse(data), function(key, User)// parsee el json que resive  ,key es el id ,user la obtecion de dn de cada campo
                {
                    let row = ""+

                    "<div class='pt-4 mb-4 '>"+
                                                 " <div class='card shadow' >"+
                                                  " <img src='imagenes/"+User.db_imagen+" '>"+
                                                   " <div class='card-body justify-content-between align-items-center'>"+

                                                     " <div class='d-flex justify-content-between align-items-center' >"+
                                                //  " <h6 class='text-left'>" + key+"</h6>"+
                                                      " <h6 class='text-left'>" +  User.db_nombre +"</h6>"+
                                                      " <h6 class='text-end'>" +"s/."+User.db_precio +"</h6>"+
                                                   //   " <h6 class='text-end'>" +   User.db_fecha +"</h6>"+
                                                   "   </div> " +"<hr>"+
                                                     " <div class='text-center'>" +
                                                     "   <button type='button' class='btn btn-primary ' >"+"Agregar"+ "</button>"+
                                                     " </div>"+
                                                   " </div>"+
                                                 " </div>"+
                                               " </div>  ";




                    $("#filters-result").append(row);//para concatenar o unir


                });

            }
        }
    )
}
