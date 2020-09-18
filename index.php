<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container">
            <form method="POST" action="assinatura.php">
                <img class="logo" src="img/signature.png" width="150"/> 
                <h3>SIGNATURE</h3>
                <div class="label-float">
                    <input type="text" name="nome" placeholder=" "></input>
                    <label>Nome</label>
                </div>
                <br>
                <div class="label-float">
                    <input type="text" name="cargo" placeholder=" "></input>
                    <label>Cargo</label>
                </div>
                <br>
                <div class="label-float">
                    <input type="text" name="telefone" placeholder=" "></input>
                    <label>Telefone/Ramal</label>
                </div>
                <br>
                
                <input type="radio" id="imagem" name="escolha" value="imagem">IMAGEM</input>
                
                <input type="radio" id="html" name="escolha" value="html">HTML</input><br>
                    <button class="button" type="submit">Gerar Assinatura</button>
            </form>
        </div>
    </body>
</html>