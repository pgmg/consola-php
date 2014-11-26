<?php
/* 
 * Copyright (C) 2014 Pedro Gabriel Manrique Gutiérrez <pedrogm@grafycomp.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * Hace un "cat" del fichero
 * @param type $fichero
 */
function contFichero($fichero){
    $linea = "";
    $abierto = fopen($fichero, "r");
    while(!feof($abierto)){
        $linea .= fgets($abierto);
    }
    fclose($abierto);
    return $linea;
}
/**
 * Directorio actual
 */
function pwd() {
    return getcwd();
}
/**
 * Borra un fichero
 * @param type $fichero
 * @return string
 */
function borrarFichero($fichero){
    unlink($fichero);
    return "fichero borrado!";
}
/**
 * Unir un fichero
 * @param type $fichero1
 * @param type $fichero2
 */
function uneFicheros($fichero1, $fichero2){
    $fp1 = fopen($fichero1, "a+");
    $fp2 = file_get_contents($fichero2);
    fwrite($fp1, $fp2);
    return "Esta hecho";
}
/**
 * Cifra ficheros base64
 * @param type $fichero
 */
function cifraFichero($fichero){
    $linea = "";
    $abierto = fopen($fichero, "r");
    while(!feof($abierto)){
        $linea .= base64_encode(fgets($abierto));
    }
    fclose($abierto);
    return $linea;
}
