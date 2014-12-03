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
$consola = "";
if(isset($_POST['enviar'])){
    $comando_pasado = explode(" ", $_POST['comando']);
    $comando = strtolower($comando_pasado[0]);
    $consola = $_POST['consola'];
    
    include 'funciones.php';
    
    switch ($comando) {
        case "ayuda":
        case "?":
        case "help":
            $consola .= ayuda();
        break;
        case "cls":
        case "clear":
        case "clr":
            $consola = "";
        break;
        case "pwd":
            $consola .= pwd();
        break;
        // Como pasar dos parámetros
        case "cd":
            $parametro = $comando_pasado[1];
            $consola .= cambiaDir($parametro);
        break;
        case "credits":
            $consola .= creditos();
            break;
        case "cat":
            $parametro = $comando_pasado[1];
            $consola .= contFichero($parametro);
        break;
        //  Copiar un fichero
        case "copy":
            $origen = $comando_pasado[1];
            $destino = $comando_pasado[2];
            $consola.= copiaFichero($origen, $destino);
            break;
        case "cifrar":
            $fichero = $comando_pasado[1];
            $consola = cifraFichero($fichero);
            break;
        // Borra un fichero
        case "delete":
            $consola .= borrarFichero($comando_pasado[1]);
            break;
        // Crea directorio
        case "mkdir":
            $parametro = $comando_pasado[1];
            $consola .= creaDirectorio($parametro);
            break;
        
        // Borrar directorio
        case "rmdir":
            $parametro = $comando_pasado[1];
            $consola .= borrarDirectorio($parametro);
            break;
        case "dir":
        case "ls":
        case "ls -l":
            if(isset($comando_pasado[1])):$par = $comando_pasado[1];
            else:$par="";
            endif;
            $consola .= listarDirectorio($par);
            break;
        
        // Unir ficheros
        case "join":
                $consola = uneFicheros(
                        $comando_pasado[1], 
                        $comando_pasado[2]);
            break;
        // Editar fichero
           // Crea fichero
        case "edit":
            $nombre = $comando_pasado[1];
            $contenido = $consola;
            $consola.= creaFichero($nombre, $consola);
            break;
        default :
            $consola .= "comando erroneo!";
        break;
    }
    
    
}
include 'vista.php';
