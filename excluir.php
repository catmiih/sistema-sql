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
            <h2>Exclusão de Produtos</h2>
        </header>
    <br>
        <form name="cliente" method="POST" action="">

            <fieldset id="a">
                <legend><b>Exclusão de produtos: </b></legend>
                <p>Id produto: <input name="txtid" type="text" size="20" maxlength="5" placeholder="Id do Produto" /></p>
            </fieldset>

            <br>

            <fieldset id="b">
                <legend><b>Opções: </b></legend>
                <input name="btnEnviar" type="submit" value="Excluir" > &nbsp;&nbsp;
                <input name="btnlimpar" type="reset" value="Limpar" > &nbsp;&nbsp;
            </fieldset>

            <?php 

            extract($_POST, EXTR_OVERWRITE);
                if(isset($btnEnviar)) {
                    include_once 'produto.php';
                    $p = new Produto();
                    $p->setId($txtid);
                    echo "<h3>" , $p->excluir() , "</h3>";
            }
            ?>

            <br>
            <center>
            <button><a href="menuProduto.html">Voltar</a></button>
            
        </form>
    </body>
</html>