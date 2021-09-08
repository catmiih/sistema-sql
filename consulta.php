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
            <h2>Consulta de Produtos</h2>
        </header>
    <br>
        <form name="cliente" method="POST" action="">

            <fieldset id="a">
                <legend><b>Consulta de produtos: </b></legend>
                <p>Nome produto: <input name="txtnome" type="text" size="20" maxlength="40" placeholder="Nome do Produto" /></p>
            </fieldset>

            <br>

            <fieldset id="b">
                <legend><b>Opções: </b></legend>
                <input name="btnEnviar" type="submit" value="Consultar" > &nbsp;&nbsp;
                <input name="btnlimpar" type="reset" value="Limpar" > &nbsp;&nbsp;
            </fieldset>

            <?php 

            extract($_POST, EXTR_OVERWRITE);
                if(isset($btnEnviar)) {
                    include_once 'produto.php';
                    $p = new Produto();
                    $p->setNome($txtnome.'%');
                    $pro_bd = $p->consultar();
                    echo "<h3>Resultados encontrados:</h3><hr>";
                    foreach($pro_bd as $pro_mostrar) {
                        ?> <br>
                        <b> <?php echo "ID: ". $pro_mostrar[0]?></b>
                        <b> <?php echo "Nome: ". $pro_mostrar[1]?></b>
                        <b> <?php echo "Estoque: ". $pro_mostrar[2]?></b>
                        <br>
                        <?php
                    }
            }
            ?>

            <br>
            <center>
            <button><a href="menuProduto.html">Voltar</a></button>
            
        </form>
    </body>
</html>