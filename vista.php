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
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <script src="js/jquery.js"></script>
        <script>
            $(function() {
                var data = $('textarea').val();
                 var emoticon = ':)';
                $('textarea').focus().val('').val(data);
            }); 
        </script>
    </head>
    <body>
    <header>
        <hgroup>
            <h1>DSW - PHP</h1>  
            <h2>Consola de Comandos</h2>
            <div class="nota">2ºDAW - Turno Tarde</div>
        </hgroup>
    </header>
        <div id="pagina">
        <form action="index.php" method="post">
            <h1>PHP SHELL v0.1</h1>
            <textarea name="consola" readonly="readonly" placeholder=""><?php echo $consola;?></textarea>
            <input type="text" name="comando" placeholder="Introduce el comando" autofocus="" class="comando">
            <input type="submit" value="Ejecutar" name="enviar">
            <input type="button" onclick="window.location='index.php';" value="Reiniciar">
        </form>
        </div>
        <footer><p>Pedro Gabriel Manrique Gutiérrez &COPY; 2014-2015</p></footer>
    </body>
</html>
