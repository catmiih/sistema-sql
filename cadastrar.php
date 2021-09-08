<html>
    <head>
        <title>Admin Produtos</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="menuProduto.css">
    </head>
    <body>
        <header>
            <img height="19%" src="https://icons-for-free.com/iconfiles/png/512/profile+profile+page+user+icon-1320186864367220794.png">
            <h1>Bem vindo, Admin.</h1>
            <h2>Cadastro de Produtos</h2>
        </header>
    <br>
        <form name="cliente" method="POST" action="">

            <fieldset id="a">
                <legend><b>Dados do Produto: </b></legend>
                <p>Nome: <input name="txtnome" type="text" size="40" maxlength="40" placeholder="Nome do Produto" /></p>
                <p>Estoque: <input name="txtestoq" type="text" size="10" placeholder="0" /></p>
            </fieldset>

            <br>

            <fieldset id="b">
                <legend><b>Opções: </b></legend>
                <input name="btnEnviar" type="submit" value="Cadastrar" > &nbsp;&nbsp;
                <input name="btnlimpar" type="reset" value="Limpar" > &nbsp;&nbsp;
            </fieldset>

            <?php 
            extract($_POST, EXTR_OVERWRITE);
                if(isset($btnEnviar)) {
                    include_once 'produto.php';
                    $pro = new Produto();
                    $pro->setNome($txtnome);
                    $pro->setEstoque($txtestoq);
                    echo $pro->salvar();
            }
            ?>

            <br>
            <center>
            <button><a href="menuProduto.html">Voltar</a></button>
            
        </form>
    </body>
</html>