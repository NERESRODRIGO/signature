<?php

    $nome=$_POST['nome'];
    $cargo=$_POST['cargo'];
    $telefone=$_POST['telefone'];

    /*if(isset($_POST['escolha']==imagem)){

    }else{
        
    }*/

// Gerando imagem


// Gerando html

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
                <td><?php echo $nome ?></td>
            </tr>
            <tr>
                <td><?php echo $cargo ?></td>
            </tr>
            <tr>
                <td><?php echo $telefone ?></td>
            </tr>
            <tr>
                <td><a href="http://www.registro.sp.gov.br/Default.asp">Prefeitura Municipal de Registro</a></td>
            </tr>
        </table>
    <ul>
    <li><button>Baixar Imagem</button></li>
    <li><button>Baixar Html</button></li>
    </ul>
?>
