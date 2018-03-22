<?php
  /**
   *
   */
  class GenerarKeys
  {

    static function genPrivKey($nombre, $tamkey){
      $privkey = openssl_pkey_new(array(
        'private_key_bits' => $tamkey,
        'private_key_type' => OPENSSL_KEYTYPE_RSA
      ));

      // $nom_key = $nombre . ".key";
      // //echo $nom_key . "<br>";
      // if (openssl_pkey_export($privkey,$nom_key, "123")) {
      //   echo "Clave privada creada.. <br>";
      // }else {
      //   echo "No se pudo crear la clave priada <br>";
      // }

      file_put_contents('privada.pem', $nom_key);


      $a_key = openssl_pkey_get_details($privkey);

      file_put_contents('public.key', $a_key['key']);

      openssl_free_key($privkey);

      if (file_exists("privada.pem")) {
        echo "Existe la llave privada $nombre.key <br>";
      } else {
        echo "No existe la llave privada $nombre.key <br>";
      }
    }
  }

?>
