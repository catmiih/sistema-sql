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
        
    <font face="Century Gothic" size="6"></font><h2>Relação de produtos cadastrados.</h2></center>
    <br>
    <font size="4">

    <?php 
    
    include_once 'Produto.php';
    $p = new Produto();
    $pro_bd=$p->listar();
    ?>

    <b> Id &nbsp;&nbsp;&nbsp;&nbsp; Nome &nbsp;&nbsp;&nbsp;&nbsp; Estoque</b>

    <?php
    foreach($pro_bd as $pro_mostrar) {

    ?>

    <br><br>

    <b> <?php echo $pro_mostrar[0]; ?></b> &nbsp;&nbsp;&nbsp;&nbsp;
        <?php echo $pro_mostrar[1]; ?>     &nbsp;&nbsp;&nbsp;&nbsp;
        <?php echo $pro_mostrar[2]; ?>

    <?php 
    }
    echo "<br><br><button><a href = 'menuProduto.html'>Voltar</a></button>";?>
    </body>
</html>