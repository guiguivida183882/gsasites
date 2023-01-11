<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <!-- Inclusão do header -->
    <?php include('header.html')?>
    <!-- Fim da inclusão do header -->
<!-- Começo dos slides -->
    <div class="slider">
        <div class="slides">
            <!-- Radio buttons -->
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
             <!-- Fim Radio buttons -->

             <!-- Slide imagem -->
             <div class="slide first">
                <img src="imagens/Design sem nome (1).png" alt="imagem 1">
             </div>
             <div class="slide">
                <img src="imagens/Design sem nome (2).png" alt="imagem 2">
             </div>
             <div class="slide ">
                <img src="imagens/Design sem nome (3).png" alt="imagem 3">
             </div>
             <div class="slide ">
                <img src="imagens/Design sem nome (4).png" alt="imagem 4">
             </div>
             <!--Fim Slide imagem -->

             <!-- Navigation auto -->
            <div class="navegationAuto">
                <div class="autoBtn1"></div>
                <div class="autoBtn2"></div>
                <div class="autoBtn3"></div>
                <div class="autoBtn4"></div>

            </div>
        </div>

    </div>
    <div class="manualNavigation">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
    </div>
    <!-- Inclusão do js nos slides -->
        <script src="js/script.js"></script>
    <!-- Fim da inclusão do js  -->
<!-- Fim dos slides -->



</body>
</html>