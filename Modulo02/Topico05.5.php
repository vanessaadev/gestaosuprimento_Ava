<?php
    // EGPCE - Chama o conectamoodle.php
  require_once('conectamoodle.php');
?>

<?php
$page = 'Topico05.5';
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
                            <p class="SubTitulo"> Solicitar Inscrisão de Material no Catálogo</p>
                            <hr>
                            <p>O SIGA/SGBM permite solicitar a inclusão de novos itens de Material de Consumo e Material Permanente no Catálogo de Bens, Materiais e Serviços, quando se tratar de novos itens que serão adquiridos ou itens de bem permanente anteriores à edição do "Catálogo". Para isso o perfil "Almoxarife" deverá acionar na barra de menu do SIGA/SGBM o seguinte comando: <strong>MANUTENÇÃO >> ALMOXARIFADO >> MATERIAL >> SOLICITAÇÃO CATÁLOGO</strong>:</p>
                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura226.png" data-bs-toggle="modal" data-bs-target="#Imagem226">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura226.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 226 - MODAL -->
                            <div class="modal fade text-center" id="Imagem226" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura226.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 226</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 226 - End --><br>
                        
                           
                            <ol>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "Detalhamento do produto" descreva detalhadamente o material ou bem a ser incluso no catálogo.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s"> Acione o botão "Solicitar" para efetivar a solicitação de inclusão.  A partir desse comando, o SIGA/SGBM encaminha a solicitação de inclusão para o grupo de gestores do Catálogo, na Coordenadoria de Gestão de Compras - COGEC da Secretaria do Planejamento e Gestão - SEPLAG. Os gestores do catálogo irão acessar o sistema e avaliar a solicitação de inclusão.</li>
                                <br>

                                <br><br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura227.png" data-bs-toggle="modal" data-bs-target="#Imagem227">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura227.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 227 - MODAL -->
                                <div class="modal fade text-center" id="Imagem227" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura227.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 227</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 227 - End -->
                                <br>
                                <p>Após ter encaminhado a solicitação o almoxarife poderá monitorar no SIGA/SGBM o atendimento do pedido, por intermédio da opção "Consultas" na barra de menu.  Ao acionar o botão "Solicitar" o SIGA/SGBM apresentará os seguintes dados:</p>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Descrição detalhada do produto a qual foi encaminhada no pedido.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">Data em que foi enviada a solicitação para a COGEC/SEPLAG.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">Status - Situação de atendimento da solicitação.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.3s">Acione o botão “Editar” para edição da solicitação. Caso a COGEC/SEPLAG encaminhe alguma orientação, o almoxarife poderá refazer a solicitação clicando nesse botão.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.6s">Acione o botão “Novo” para fazer outra solicitação na sequência.</li>
                                <br>   
                                <br><br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura228.png" data-bs-toggle="modal" data-bs-target="#Imagem228">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura228.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 228 - MODAL -->
                                <div class="modal fade text-center" id="Imagem228" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura228.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 228</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 228 - End -->
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
                    <a href="Topico05.4.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico06.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
