<?php
    class Encriptar{
        public static function encrip($entrada){

            //Encriptamos el texto que se encuentradentro de la variable $entrada
            $salida = base64_encode($entrada);

            //Regresamos el texto encriptado
            return $salida;
        }

        public static function desencrip($entrada){
            $salida = base64_decode($entrada);

            return $salida;
        }

        public static function encripasinc($entrada){
            $salida = md5($entrada);

            return $salida;
        }

        public static function encripssl($entrada){


            echo "<br> Entrada: $entrada";
            openssl_public_encrypt($entada, $texto_encriptado, file_get_contents( "public.key" ));

            return $texto_encriptado;
        }

        public static function desencripssl($entrada){


            $llave_privada = openssl_pkey_get_private('file:///privada.pem','123');



            openssl_private_decrypt($entrada, $texto, $llave_privada);

            return $texto;
        }
    }

?>
