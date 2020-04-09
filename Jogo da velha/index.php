<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- cabeçalho contem o title, estilo.css, jquery, bootstrap -->
    <?php include("cabecalho_index.php"); ?>
    <!-- Fim cabeçalho -->
  </head>
  <body style="background: url('imagens/velha.jpg') no-repeat; background-position:top;">
    <!-- pagina inicial contem uma tabela com a imagem do jogador e um input para o nome -->
    <?php include("pagina_inicial.php"); ?>
    <!-- Fim -->

    <!-- Essas divs serão como uma tela secundária, mais na verdade será manipulada pelo jquery -->
    <?php include("pagina_jogo.php"); ?>
    <!-- Fim -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>