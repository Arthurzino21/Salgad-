<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Salgadê</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header class="menu">

        <div class="logo">
            <img src="img/salgade.png">
        </div>

        <nav class="links">
            <a href="#inicio">Início</a>
            <a href="#produtos">Produtos</a>
            <a href="#sobre">Sobre</a>
            <?php if (isset($_SESSION['Logado']) && $_SESSION['Logado'] == "ok"): ?>
                <div class="user-name"><?php echo htmlspecialchars($_SESSION['Nome']); ?></div>
                <a href="logout.php">Sair</a>
            <?php else: ?>
                <a href="login.php">Login</a>
            <?php endif; ?>
            <a href="carrinho.php">Carrinho</a>
        </nav>

    </header>

    <section class="banner" id="inicio">

        <h1>SALGADÊ</h1>

        <p>O sabor que vicia</p>

        <a href="#produtos" class="btn-banner">
            Ver Produtos
        </a>

    </section>

    <h1 id="produtos">Nossos Produtos</h1>

    <h1> Salgados</h1>
    <div class="produtos">

        <div class="card">

            <img src="img/coxinha.jpg">

            <h2>Coxinha</h2>

            <p>Crocante e recheada de frango.</p>

            <h3>R$ 8,00</h3>

            <form action="adicionar_carrinho.php" method="POST">

                <input type="hidden" name="produto" value="Coxinha">

                <input type="hidden" name="valor" value="8">

                <input type="hidden" name="imagem" value="coxinha.jpg">

                <input type="submit" value="Adicionar ao Carrinho" class="botao">

            </form>

        </div>

        <div class="card">

            <img src="img/pastel.jpg">

            <h2>Pastel</h2>

            <p>Recheado e quentinho.</p>

            <h3>R$ 10,00</h3>

            <form action="adicionar_carrinho.php" method="POST">

                <input type="hidden" name="produto" value="Pastel">

                <input type="hidden" name="valor" value="10">
                <input type="hidden" name="imagem" value="pastel.jpg">

                <input type="submit" value="Adicionar ao Carrinho" class="botao">

            </form>

        </div>

        <div class="card">

            <img src="img/kibe.jpg">

            <h2>Kibe</h2>

            <p>Kibe crocante e saboroso.</p>

            <h3>R$ 7,00</h3>

            <form action="adicionar_carrinho.php" method="POST">

                <input type="hidden" name="produto" value="Kibe">

                <input type="hidden" name="valor" value="7">
                <input type="hidden" name="imagem" value="kibe.jpg">

                <input type="submit" value="Adicionar ao Carrinho" class="botao">

            </form>

        </div>

        <div class="card">

            <img src="img/esfirra.jpg">

            <h2>Esfirra</h2>

            <p>Assada e muito recheada.</p>

            <h3>R$ 9,00</h3>

            <form action="adicionar_carrinho.php" method="POST">

                <input type="hidden" name="produto" value="Esfirra">

                <input type="hidden" name="valor" value="9">
                <input type="hidden" name="imagem" value="esfirra.jpg">
                <input type="submit" value="Adicionar ao Carrinho" class="botao">

            </form>

        </div>

        <div class="card">

            <img src="img/Bolinho de Queijo.jpg">

            <h2>Bolinho de queijo</h2>

            <p>Crocante por fora e com queijo derretido por dentro.</p>

            <h3>R$ 9,90</h3>

            <form action="adicionar_carrinho.php" method="POST">

                <input type="hidden" name="produto" value="Coxinha">

                <input type="hidden" name="valor" value="8">

                <input type="hidden" name="imagem" value="coxinha.jpg">

                <input type="submit" value="Adicionar ao Carrinho" class="botao">

            </form>

        </div>

        <div class="card">

            <img src="img/Empada.jpg">

            <h2>Empada</h2>

            <p>Massa crocante com recheio cremoso e delicioso.</p>

            <h3>R$ 10,00</h3>

            <form action="adicionar_carrinho.php" method="POST">

                <input type="hidden" name="produto" value="Empada">

                <input type="hidden" name="valor" value="8">

                <input type="hidden" name="imagem" value="Empada.jpg">

                <input type="submit" value="Adicionar ao Carrinho" class="botao">

            </form>

        </div>

        <div class="card">

            <img src="img/Mini Pizza.jpg">

            <h2>Mini pizza</h2>

            <p>Massa leve com molho, queijo e cobertura especial.</p>

            <h3>R$ 12,00</h3>

            <form action="adicionar_carrinho.php" method="POST">

                <input type="hidden" name="produto" value="Mini Pizza">

                <input type="hidden" name="valor" value="8">

                <input type="hidden" name="imagem" value="Mini Pizza.jpg">

                <input type="submit" value="Adicionar ao Carrinho" class="botao">

            </form>

        </div>

        <div class="card">

            <img src="img/mini hamburguer.jpg">

            <h2>Mini hambúrguer</h2>

            <p>Pão macio com hambúrguer e queijo, saboroso e prático.</p>

            <h3>R$ 11,50</h3>

            <form action="adicionar_carrinho.php" method="POST">

                <input type="hidden" name="produto" value="Mini hamburguer">

                <input type="hidden" name="valor" value="8">

                <input type="hidden" name="imagem" value="mini hamburguer.jpg">

                <input type="submit" value="Adicionar ao Carrinho" class="botao">

            </form>

        </div>
</div>

        <h1>Bebidas</h1>

        <div class="produtos">

         <div class="card">

            <img src="img/Coca-Cola.jpg">

            <h2>Coca-Cola</h2>

            <p>Refrigerante gelado com o sabor clássico que todos conhecem.</p>

            <h3>R$ 7,50</h3>

            <form action="adicionar_carrinho.php" method="POST">

                <input type="hidden" name="produto" value="Coca-Cola">

                <input type="hidden" name="valor" value="8">

                <input type="hidden" name="imagem" value="Coca-Cola.jpg">

                <input type="submit" value="Adicionar ao Carrinho" class="botao">

            </form>

        </div>
 
         <div class="card">

            <img src="img/energetico.png">

            <h2>Energético</h2>

            <p>Bebida energética para dar mais disposição e energia.</p>

            <h3>R$ 12,00</h3>

            <form action="adicionar_carrinho.php" method="POST">

                <input type="hidden" name="produto" value="Energético">

                <input type="hidden" name="valor" value="8">

                <input type="hidden" name="imagem" value="Energético.png">

                <input type="submit" value="Adicionar ao Carrinho" class="botao">

            </form>

        </div>

         <div class="card">

            <img src="img/Suco da fruta.jpg">

            <h2>Suco da fruta</h2>

            <p>Suco natural, refrescante e cheio de sabor.</p>

            <h3>R$ 10,00</h3>

            <form action="adicionar_carrinho.php" method="POST">

                <input type="hidden" name="produto" value="Suco da fruta">

                <input type="hidden" name="valor" value="8">

                <input type="hidden" name="imagem" value="Suco da fruta.jpg">

                <input type="submit" value="Adicionar ao Carrinho" class="botao">

            </form>

        </div>
         <div class="card">

            <img src="img/agua.jpg">

            <h2>Água</h2>

            <p>Água mineral gelada para refrescar seu dia.</p>

            <h3>R$ 5,00</h3>

            <form action="adicionar_carrinho.php" method="POST">

                <input type="hidden" name="produto" value="Água">

                <input type="hidden" name="valor" value="8">

                <input type="hidden" name="imagem" value="agua.jpg">

                <input type="submit" value="Adicionar ao Carrinho" class="botao">

            </form>

        </div>

    </div>

    <section id="sobre" class="sobre">

        <h1>Sobre a Salgadê</h1>

        <p>
            Especializada em salgados artesanais feitos diariamente,
            com ingredientes de qualidade e muito sabor.
        </p>

    </section>

    <footer class="rodape">

        <div class="rodape-conteudo">

            <div>
                <img src="img/salgade.png" width="100">
                <p>O sabor que vicia.</p>
            </div>

            <div>

                <h3>Contato</h3>

                <p>Eunápolis - BA</p>

                <p>(73) 99999-9999</p>

                <p>contato@salgade.com</p>

            </div>

        </div>

        <div class="rodape-copy">

            © <?php echo date("Y"); ?> Salgadê

        </div>

    </footer>

</body>

</html>