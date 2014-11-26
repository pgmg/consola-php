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
    $comando = $comando_pasado[0];
    
    
    include 'funciones.php';
    
    switch ($comando) {
        case "ayuda":
        case "?":
        case "help":
            $consola = ayuda();
        break;
        case "cls":
            $consola = "";
        break;
        case "pwd":
            $consola = pwd();
        break;
        // Como pasar dos parámetros
        case "cd":
            $parametro = $comando_pasado[1];
            $consola = cambiaDir($parametro);
        break;
        case "crd":
            $consola = "Hecho por Pedro Gabriel Manrique Gutiérrez";
            break;
        case "cat":
            $consola = contFichero("elfichero.txt");
        break;
        case "prueba":
            prueba();
            break;
        case "rmdir":
            $parametro = $comando_pasado[1];
            $consola = borrarDirectorio($parametro);
            break;
        case "dir":
        case "ls -l":
            if(isset($comando_pasado[1])):$par = $comando_pasado[1];
            else:$par="";
            endif;
            $consola = listarDirectorio($par);
            break;
        default :
            $consola = "comando erroneo!";
        break;
    }
    
    
}
include 'vista.php';
