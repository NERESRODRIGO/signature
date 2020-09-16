<?php

    $nome = $_POST['nome'];
    $cargo = $_POST['cargo'];
    $telefone = $_POST['telefone'];

// Gerando imagem
        $output = "assinatura.jpg";

        $image = imagecreatefromjpeg("assinatura1.jpg");

        $white = imagecolorallocate($image, 255, 255, 255);
        $black = imagecolorallocate($image, 0, 0, 0);
        $font_path = dirname(__FILE__) . '/roboto/Roboto-Bold.ttf';

        $text1 = imagettftext($image,24,0,410,65,$black,$font_path,"$nome");
        $text1 = imagettftext($image,20,0,410,107,$black,$font_path,"$cargo");
        $text1 = imagettftext($image,20,0,410,144,$black,$font_path,"$telefone");
        $text1 = imagettftext($image,20,0,410,181,$black,$font_path,"Prefeitura Municipal de Registro");
        //$text1 = imagettftext($image,20,0,410,181,$black,$font_path,"Ramal - $ramal");
        //$text1 = imagettftext($image,20,0,410,181,$black,$font_path,"Secretaria - $secretaria");
        imagejpeg($image,$output);

        ?>

     <table>
        <tr>
            <td>   
                <img src="<?php echo $output; ?>" width="600">
            </td>
<!-- Gerando html-->
            <td>
                <style>
                    table tr td {
                        font-size: 20px;
                        padding-left: 15;
                    }
                </style>
                <table>
                    <tr>
                        <td rowspan="5">
                            <img src="http://www.registro.sp.gov.br/images/logo-registro-n.png" width="160">
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
                        <td><a href="http://www.registro.sp.gov.br/Default.asp">Prefeitura Municipal de Registro</a></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td><a href="assinatura.jpg" dowload="Minha Assinatura"><button>Baixar Imagem</button></a></td>
            <td><a href="assinatura.html" dowload="Minha Assinatura"><button>Baixar Html</button></a></td>
        </tr>
    </table>
    
