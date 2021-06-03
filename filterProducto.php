<?php

    require("model/cn.php");
    $query_envio = $_POST;
    $extra_query = " WHERE";
  if($query_envio)  {
    //  $extra_query.= "AND";
        $valuesArray = []; // es tipo de heramiento
        $queriesArray  = [];// subpropiedades del valores
        /// as == donde id =>el valor del campo , $field_value es un arays
        /*
          $field_name ==nombre del campo de la db
            $field_value==es el id de recorrido
            $query_values== nombre valor a recorer de la db_nombre
           */
           foreach ($query_envio as $field_name_db => $field_value_id)  {   /// va a recorrer el segunto value
             foreach ($field_value_id as $value_txt)  {/// el value es el string
      //$values[$field_name][] = " {$field_name} = '{$value}'";//dato enviado de checkbox
      $valuesArray[$field_name_db][] = " {$field_name_db} LIKE '%{$value_txt}%'";//dato enviado de checkbox
    }
    $queriesArray[$field_name_db] = "".implode(" OR ", $valuesArray[$field_name_db])."";
  }
  $extra_query.=" ".implode($queriesArray);
  //print_r($extra_query); exit;
}
$query = "SELECT * FROM tbl_producto ".$extra_query;
$users = $DB_con->query($query);  /// dat
$user_list_array = [];//areglo inicials
while($user = $users->fetch(PDO::FETCH_ASSOC))  {
 $user_list_array[$user["db_id"]] = $user;
}
echo json_encode($user_list_array); // es para transformar en en json
