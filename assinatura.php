<?php

    $nome = $_POST['nome'];
    $cargo = $_POST['cargo'];
    $telefone = $_POST['telefone'];
    $escolha = $_POST['escolha'];


    if($escolha=='imagem'){
// Gerando imagem
        $output = "assinatura.jpg";

        $image = imagecreatefromjpeg("assinatura1.jpg");

        $white = imagecolorallocate($image, 255, 255, 255);
        $black = imagecolorallocate($image, 0, 0, 0);
        $font_path = dirname(__FILE__) . '/roboto/Roboto-Bold.ttf';

        $text1 = imagettftext($image,24,0,410,65,$black,$font_path,"$nome");
        $text1 = imagettftext($image,20,0,410,107,$black,$font_path,"$cargo");
        $text1 = imagettftext($image,20,0,410,144,$black,$font_path,"$telefone");
        $text1 = imagettftext($image,20,0,410,181,$black,$font_path,"Site da empresa aqui");
        //$text1 = imagettftext($image,20,0,410,181,$black,$font_path,"Ramal - $ramal");
        //$text1 = imagettftext($image,20,0,410,181,$black,$font_path,"Secretaria - $secretaria");
        imagejpeg($image,$output);

        ?>   
        <img src="<?php echo $output; ?>" width="600">
        <?php
} elseif($escolha=='html'){?>
<!-- Gerando html-->
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
                <?php }
                ?>
            <!--<td><a href="assinatura.jpg" dowload="Minha Assinatura"><button>Baixar Imagem</button></a></td>
            <td><a href="assinatura.html" dowload="Minha Assinatura"><button>Baixar Html</button></a></td>-->
    
