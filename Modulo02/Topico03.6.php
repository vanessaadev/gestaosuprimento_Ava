<?php
    // EGPCE - Chama o conectamoodle.php
   require_once('conectamoodle.php');
?>

<?php
$page = 'Topico03.6';
include('layout/header.php');
?>
<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    
    <!-- MENU -->
    <?php include('layout/menu.php') ?>

        <div id="main">
            <!-- NAV TOP -->
            <?php include('layout/nav.php') ?>
            <!-- CONTEUDO INICIO -->
            <div class="main-content container-fluid Texto">
                <div class="row"> <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10"> <!-- Begin col-md-10 -->
                        <div class="page-title">

                            <!-- Sub Título -->
                            <p class="SubTitulo"> Autorização de Cancelamento de Nota Fiscal </p>
                            <hr>

                            <br>

                            <p>As Notas Fiscais de entrada para serem canceladas pelo SIGA/SGBM necessitam ser autorizadas pelo perfil "Gestor Financeiro", que para efetuar a operação deve acionar, na barra de menu do SIGA/SGBM, o comando: <strong>MOVIMENTOS >> ALMOXARIFADO >> ENTRADA >> AUTORIZAÇÃO DE CANCELAMENTO:</strong></p>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura151.png" data-bs-toggle="modal" data-bs-target="#Imagem151">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura151.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 151 - MODAL -->
                            <div class="modal fade text-center" id="Imagem151" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura151.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 151</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 151 - End --><br>

                            

                            <ol>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Ao acionar o comando, na barra de menu, o SIGA/SGBM apresentará uma grade com as "Entradas Encontradas no Período", demonstrando as seguintes informações referentes ao cancelamento da Nota Fiscal de entrada: Fornecedor Emitente da Nota Fiscal, Número da Nota Fiscal, Data da Solicitação de Cancelamento, Almoxarife que registrou a entrada na Nota Fiscal, Almoxarife que solicitou o cancelamento e a Justificativa para o cancelamento da Nota. Após analisar as informações e averiguar com o almoxarife solicitante, o cancelamento poderá aprovar ou não o cancelamento. </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">Acione o ícone em formato de "Lupa" para consultar o conteúdo da Nota Fiscal. </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">Acione o ícone em formato de "Check" para aprovar o cancelamento. </li>
                                <li class="wow fadeInLeft" data-wow-delay="1.3s">Para reprovar o cancelamento, clique no ícone vermelho em formato de "X".</li>
                                
                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura152.png" data-bs-toggle="modal" data-bs-target="#Imagem152">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura152.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 152 - MODAL -->
                                <div class="modal fade text-center" id="Imagem152" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura152.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 152</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 152 - End --><br>
                                


                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o ícone de aprovação o SIGA/SGBM apresentará uma janela de confirmação da operação e para confirmar basta acionar o botão <strong>"OK"</strong>.</li>

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura153.png" data-bs-toggle="modal" data-bs-target="#Imagem153">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura153.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 153 - MODAL -->
                                <div class="modal fade text-center" id="Imagem153" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura153.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 153</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 153 - End -->      
                            </ol>                  

                                



                            
          
                            <br><br><!-- SCRIPT LIGHTBOX -->
                            <script>
                                $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                    event.preventDefault();
                                    $(this).ekkoLightbox();
                                });                    
                            </script>

                        </div> <!-- CLASS PAGE TITLE FIM -->
                    </div> <!-- End col-md-10 -->
                    
                    <div class="col-md-1"></div>
                </div> <!-- End row -->

                <!-- Botões de navegação -->
                <div class="text-center">
                    <a href="Topico03.5.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico03.7.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
