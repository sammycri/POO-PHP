<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
           require_once 'AcoesVideo.php';  
           require_once 'Video.php';  
           require_once 'Usuario.php';
           require_once 'Visualizacao.php';
            
           
           $v[0] = new  Video("PHP POO1");
           $v[1] = new  Video("PHP Basicao");
           $v[2] = new  Video("C# Avançadão");
           
           $u[0] = new Usuario("Claudin", 25, "M", "clauduxo");
           $u[1] = new Usuario("Jubileuza", 52, "F", "juju52");
           
           $vis[0] = new Visualizacao($u[0], $v[0]); //Claudin assiste PHP POO1          
           $vis[1] = new Visualizacao($u[0], $v[2]); //Claudin assiste C#...           
           print_r($vis);
           
           $vis[1]->avaliarNota(10);
           print_r($vis);
           
           
               
       
        ?>
        </pre>
    </body>
</html>
