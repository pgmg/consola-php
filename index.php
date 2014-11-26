<?php 
include 'shell.php';
?>
<!DOCTYPE html>
<!--
Copyright (C) 2014 Pedro Gabriel Manrique Gutiérrez <pedrogm@grafycomp.com>

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Comandos PHP</title>
        <style>
            *{padding:0;margin:0;}
            form{
                width:100%;
            }
            textarea{
                resize: none;
                width: 90%;
                height: 100px;
                text-indent: none;
            }
            input[name="comando"]{
                width: 80%;
            }
            input[type="submit"]{
                width: 10%;
            }
        </style>
    </head>
    <body>
        <form action="index.php" method="post">
            <h1>PHP SHELL v0.1</h1>
            <textarea name="consola">
            <?php echo $consola;?>    
            </textarea>
            <input type="text" name="comando" placeholder="Introduce el comando" autofocus="">
            <input type="submit" value="Ejecutar" name="enviar">
            <a href="index.php">Reiniciar</a>
        </form>
    </body>
</html>
