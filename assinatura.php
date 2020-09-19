<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
        <title>Gerador de assinatura de e-mails</title>
    </head>
<?php

    $nome = $_POST['nome'];
    $cargo = $_POST['cargo'];
    $telefone = $_POST['telefone'];
    $options = $_POST['options'];


    if($options=='imagem'){
// Gerando imagem
        $output = "assinatura.jpg";

        $image = imagecreatefromjpeg("img/molde.jpg");

        $white = imagecolorallocate($image, 255, 255, 255);
        $black = imagecolorallocate($image, 0, 0, 0);
        $font_path = dirname(__FILE__) . '/fonts/roboto/Roboto-Bold.ttf';

        $text1 = imagettftext($image,24,0,410,65,$black,$font_path,"$nome");
        $text1 = imagettftext($image,20,0,410,107,$black,$font_path,"$cargo");
        $text1 = imagettftext($image,20,0,410,144,$black,$font_path,"$telefone");
        $text1 = imagettftext($image,20,0,410,181,$black,$font_path,"Site da empresa aqui");
        //$text1 = imagettftext($image,20,0,410,181,$black,$font_path,"Ramal - $ramal");
        //$text1 = imagettftext($image,20,0,410,181,$black,$font_path,"Secretaria - $secretaria");
        imagejpeg($image,$output);

        ?>
        <div class="text-center">
            <h4>Sucesso! Sua nova assinatura é essa.</h4>   
            <img class="img-fluid" src="<?php echo $output; ?>" width="600"><br>
            <p>Clique abaixo para fazer o Download</p>
            <a class="btn btn-primary" href="assinatura.jpg">Download</a>
        </div>
        <?php
} elseif($options=='html'){?>
<!-- Gerando html-->
            <div class="text-center">
            <h4>Sucesso! Sua nova assinatura é essa.</h4>  
                <style>
                    table tr td {
                        font-size: 20px;
                        padding-left: 15;
                    }
                </style>
                <table>
                    <tr>
                        <td rowspan="5">
                            <img src="img/signature.png" width="100">
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $nome; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $cargo; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $telefone; ?></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.google.com">Site da empresa aqui</a></td>
                    </tr>
                </table>
                <p>Clique abaixo para fazer o Download</p>
                    <a class="btn btn-primary" href="" download>Download</a>
                </div>
                <?php }
                ?>
</html>    
