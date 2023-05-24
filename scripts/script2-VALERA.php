<?php
/**
 * Esto es un ejemplo de documentación de PHP
 * @author Laura
 * @version 2.0.1
 *
 * @package Ejemplo
 * @copyright 2023
 */

class Ejemplo
{

    /**
     * Array donde almacenaremos los destinatarios del mensaje
     * @var array destinatarios
     * @access private
     */
    var $to;


    /**
     * Verifica si una direccion de correo es correcta o no.
     *
     * @return boolean true si la direccion es correcta
     * @param string $email direccion de correo
     * @version 1.0
     */
    function check_dir_email($email)
    {
        return (false !== strpos($email, "@") && false !== strpos($email, "."));
    }

    /**
     * Localiza las imagenes dentro del contenido
     *
     * @param string $dir_imagenes path al directorio de imagenes
     * @version 1.0
     */
    function encuentra_html_imagenes($dir_imagenes)
    {
        $dir_imagenes = dir("img");
    }

}
?>