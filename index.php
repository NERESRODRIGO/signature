<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <form method="POST" action="assinatura.php">
                <img class="logo" src="img/signature.png" width="150"/> 
                <h3>SIGNATURE</h3>
                <div class="label-float">
                    <input type="text" placeholder=" "/>
                    <label>Nome</label>
                </div>
                <br>
                <div class="label-float">
                    <input type="text" placeholder=" "/>
                    <label>Cargo</label>
                </div>
                <br>
                <div class="label-float">
                    <input type="text" placeholder=" "/>
                    <label>Telefone/Ramal</label>
                </div>
                <br>
                
                <!--    <input type="radio" id="imagem" name="escolha" value="imagem">Imagem</input>
                
                    <input type="radio" id="html" name="escolha" value="html">Html</input><br>
                -->
                    <button type="submit">Gerar Assinatura</button>
            </form>
        </div>
    </body>
</html>