<html>
    <head>
        <title>SISTEMA A</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="interfaces/Principal/SistemaB.css">
        <script type="text/javascript" src="Interfaces/Principal/SistemaB.js"></script>
    </head>
    <body>
        <header id="cabeca2">
            <h3>Principal</h3>            
        </header>

            <div class="container">
                <form id="forPrincipal" name="forPrincipal" method="GET" action="Regras/Principal/recebe_dados.php">
                    <div class="row">
                        <div class="col-25">
                            <label id="nomel" name="nomel">Nome:</label>
                        </div>
                        <div class="col-75">
                            <input class="acerto" id="nome" name="nome" type="text" maxlength="100" placeholder="Nome do cliente"><br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label id="enderecol" name="enderecol">Endereço:</label>
                        </div>
                        <div class="col-75">
                            <input class="acerto" type="text" name="endereco" id="endereco" maxlength="100" placeholder="Endereço do cliente"><br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label id="estadol" name="estadol">Estado:</label>
                        </div>
                        <div class="col-75">
                            <select class="acerto" name="estado" id="estado">
                            <option>SP</option>
                            <option>RJ</option>
                            <option>Pe</option>
                            <option>ES</option>
                            <option>Ce</option>
                            <option>Pb</option>
                            <option>RS</option>
                            <option>MG</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label id="datal" name="datal">Data:</label>
                        </div>
                        <div class="col-75">
                            <input class="acerto" type="date" name="data" id="data">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label id="categorial" name="categorial">Categoria:</label>
                        </div>
                        <div class="col-75">
                            <input class="acerto" type="text" id="categoria" name="categoria" placeholder="Informe a categoria!" maxlength="4">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-25">
                            <label id="cpfl" name="cpfl">CPF:</label>
                        </div>
                        <div class="col-75">
                            <input class="acerto" type="text" name="cpf" id="cpf" placeholder="CPF" maxlength="14">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-25">
                            <label id="loginl" name="loginl">Login:</label>
                        </div>
                        <div class="col-75">
                            <input class="acerto" type="text" id="login" name="login" maxlength="20" placeholder="Login">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-25">
                            <label id="senhal" name="senhal">Senha:</label>
                        </div>
                        <div class="col-75">
                            <input class="acerto" type="password" id="senha" name="senha" maxlength="20" placeholder="Senha">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-25">
                            <label id="confirmal" name="confirmal">Confirma:</label>
                        </div>
                        <div class="col-75">
                            <input class="acerto" type="text" id="confirma" id="confirma" maxlength="20" >
                        </div>
                    </div>

                    <div>
                        <div class="col-25">
                            <label id="sexol" name="sexol">Sexo:</label>
                        </div>   
                        <div class="col-75"> 
                            <div name="divSexo" id="divSexo" class="acerto" >
                                <input type="radio" name="sexo" value="M" id="masculino">Masculino
                                <input type="radio" name="sexo" value="F" id="feminino">Feminino
                            </div>
                        </div>
                    </div><br><br><br>

                    <div class="row">
                        <input type="submit" value="Cadastrar" id="inpCadastrar">
                    </div>  
               
                </form>
                <div>
                    <button id="butTeste" name="butTeste">TESTE</button>
                </div>                
                <div id="resposta" name="resposta"></div>                 
            </div>
        <footer id="rodape">
        
        
        </footer>            
    </body>
</html>

