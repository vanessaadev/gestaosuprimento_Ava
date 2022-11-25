<?php
    // EGPCE - Chama o conectamoodle.php
   require_once('conectamoodle.php');
?>

<?php
$page = 'Topico03.4';
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
                            <p class="SubTitulo"> Conferência das Entradas </p>
                            <hr>

                                <p>Sempre que for efetuado um registro de entrada no SIGA/SGBM, deve ser conferido se os detalhes do respectivo registro correspondem ao documento que originou a entrada, geralmente uma Nota Fiscal. Para efetuar essa conferência, é utilizado o relatório Entrada do Período, cuja emissão se dará por intermédio do seguinte comando na barra de menu: <strong>RELATÓRIOS >> ALMOXARIFADO >> ENTRADA PERÍODO:</strong></p>

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura143.png" data-bs-toggle="modal" data-bs-target="#Imagem143">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura143.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 143 - MODAL -->
                                <div class="modal fade text-center" id="Imagem143" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura143.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 143</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 143 - End --><br>

                                <p>Ao acionar o comando na barra de menu o SIGA/SGBM apresentará a tela com os parâme tros para filtrar os dados que será  apresentado no relatório Entradas do Período, os parâmetros são os seguintes:</p>

                                <ol>
                                    <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "Período de Movimentação" informar a Data Inicial e a Data Final que delimita o período em que foi registrada a entrada.</li>
                                    <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Tipo de Entrada" selecionar qual a modalidade de entrada que será "Nota Fiscal" as demais poderão ser:</li>

                                    <br><ol class="none">
                                        <li class=" wow fadeInRight" data-wow-delay="0.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong>Devolução:</strong> Quando se tratar de entrada de material que não foi consumido pelo requisitante e está sendo devolvido ao almoxarifado.</li>
                                        <br><li class=" wow fadeInRight" data-wow-delay="1.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong>Doação:</strong> Quando se tratar de doações não acompanhadas de Nota Fiscal ou Transferências de outros órgãos da administração párlica, nesses casos o documento de suporte áro Termo de Doação ou Transferência.</li>
                                        <br><li class=" wow fadeInRight" data-wow-delay="01.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong>Todas:</strong> Nesse caso o relatório classificarão  todas as modalidades de movimentação de entrada.</li>
                                    </ol>

                                    <br><!-- Fique Atento -->
                                    <div class="FiqueAtentoCaixa">
                                        <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                        <p class="FiqueAtentoTexto"> Dependendo da opção selecionada serão habilitados campos complementares solicitando informações acerca opção escolhida.</p>
                                    </div><br>


                                    <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "Tipo de Material" selecionar a opção considerando se a entrada refere-se ao material de consumo ou material permanente.</li>
                                    <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Nota Fiscal" informar o número da Nota Fiscal que se deseja gerar o relatório.</li>
                                    <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Número de Série" informar a série da Nota Fiscal.</li>
                                    <li class="wow fadeInLeft" data-wow-delay="1.3s">Acionar o botão "Gerar Relatório" e o SIGA/SGBM apresentará o relatório em formato PDF.</li>
                                </ol>

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura144.png" data-bs-toggle="modal" data-bs-target="#Imagem144">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura144.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 144 - MODAL -->
                                <div class="modal fade text-center" id="Imagem144" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura144.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 144</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 144 - End --><br>

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura145.png" data-bs-toggle="modal" data-bs-target="#Imagem145">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura145.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 145 - MODAL -->
                                <div class="modal fade text-center" id="Imagem145" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura145.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 145</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 145 - End --><br>

                                <!-- Fique Atento -->
                                <div class="FiqueAtentoCaixa">
                                    <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                    <p class="FiqueAtentoTexto"> O relatório gerado deverá ser conferido com o documento de origem.</p>
                                </div>








                            
          
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
                    <a href="Topico03.3.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico03.5.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
