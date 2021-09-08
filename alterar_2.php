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
            <h2>Alteração de Produtos</h2>
        </header>
    <br>

            <fieldset id="a">
                <legend><b>Ateração de produtos: </b></legend>

            <br>

            <?php 
                $txtid=$_POST["txtid"];
                    include_once 'produto.php';
                    $p = new Produto();
                    $p->setId($txtid);
                    $pro_bd=$p->alterar();
            ?>

            <br><form name="cliente2" method="POST" action="">
                <?php
                    foreach($pro_bd as $pro_mostrar) {
                ?>

                <input type="hidden" name="txtid" size="5" value='<?php echo $pro_mostrar[0]?>'>
                <b><?php echo "ID: ".$pro_mostrar[0]; ?></b>

                <br><br>
                <b><?php echo "Nome: " ;?></b>
                <input type="text" name="txtnome" size="25" value='<?php echo $pro_mostrar[1]?>'>

                <b><?php echo "Estoque: " ;?></b>
                <input type="text" name="txtestoq" size="10" value='<?php echo $pro_mostrar[2]?>'>
                <br><br><center>
                <input name="btnalterar" type="submit" value="Alterar">

                <?php 
                    } 
                ?>
            </form>
            </fieldset>

            <?php
            
            extract($_POST, EXTR_OVERWRITE);
                if(isset($btnalterar)) {
                    include_once 'produto.php';
                    $pro = new Produto();
                    $pro->setNome($txtnome);
                    $pro->setEstoque($txtestoq);
                    $pro->setId($txtid);
                    $pro_bd=$pro->alterar2();
                    echo "<br><br><h3>",$pro->alterar2() , "</h3>";
                    header("location:alterar.php");
            }

            ?>

            <br>
            <center>
            <button><a href="menuProduto.html">Voltar</a></button>
    </body>
</html>