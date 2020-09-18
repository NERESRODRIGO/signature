<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/bootstrap.js"></script>
    </head>
    <body>
        <div class="container text-center">
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
                <p>Formato:</p>
                <div class="text-center">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">                
                                <input type="radio" id="imagem" name="escolha" value="imagem" aria-label="IMAGEM">IMAGEM </input>
                            </div>
                        </div> 
                    </div> 
                    
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">                
                            <input type="radio" id="html" name="escolha" value="html" aria-label="HTML"> HTML</input>
                            </div>
                        </div>
                    </div>
                </div>
                    <button class="btn btn-danger" type="submit">Limpar tudo</button>
                    <button class="btn btn-primary" type="submit">Gerar Assinatura</button>
            </form>
        </div>
    </body>
</html>