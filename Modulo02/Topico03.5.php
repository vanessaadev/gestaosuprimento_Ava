<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico03.5';
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
            <div class="row">
                <!-- Begin row -->
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <!-- Begin col-md-10 -->
                    <div class="page-title">

                        <!-- Sub Título -->
                        <p class="SubTitulo"> Solicitação de Cancelamento de Nota Fiscal </p>
                        <hr>

                        <br>

                        <p>Ao identificar, na ocasião de conferência das entradas (item anterior 3.4), um registro incorreto de uma determinada Nota Fiscal, o almoxarife poderá solicitar o seu cancelamento por intermédio do seguinte comando na barra de menu do SIGA/SGBM: <strong>MOVIMENTOS >> ALMOXARIFADO >> ENTRADA >> AUTORIZAÇÃO DE CANCELAMENTO:</strong></p>

                        <br><!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura146.png" data-bs-toggle="modal" data-bs-target="#Imagem146">
                                <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura146.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <!-- Imagem 146 - MODAL -->
                        <div class="modal fade text-center" id="Imagem146" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura146.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Figura 146</strong> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 146 - End -->

                        <br><br><!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>Vale ressaltar, que para efetuar um cancelamento de Nota Fiscal, o SIGA/SGBM estabelece algumas condicionantes: </p>

                                <ul class="none">
                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorAmareloEstadoEscuro"></i> A nota fiscal em questão ter sido registrada no período corrente. </li>
                                    <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorAmareloEstadoEscuro"></i> Não ter havido nenhum atendimento de REQUISIÇÃO dos itens constantes na Nota Fiscal. </li>
                                    <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorAmareloEstadoEscuro"></i> pár solicitado o cancelamento, o SIGA bloqueará as Requisiáres dos itens que constam na Nota e as Requisiáres não atendidas, atáro momento, somente poderão ser atendidas com quantidade Zero. </li>
                                    <li class="wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorAmareloEstadoEscuro"></i> Enquanto não for autorizado o Cancelamento, o Fechamento Mensal será bloqueado. A autorização será dada pelo "perfil Gestor Financeiro".</li>
                                </ul>
                            </div>
                        </div><br>

                        <br>
                        <p>Ao acionar o comando na barra de menu o SIGA/SGBM apresentará a tela "Consulta Entradas" para que seja localizada a Nota Fiscal que será objeto de cancelamento nessa tela serão informados os parâmetros a seguir:</p>

                        <ol>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "Período de Movimentação", informe as datas inicial e final, delimitando o período de entrada da Nota Fiscal.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Status da Nota", clique na seta ao lado do campo e selecione a condição "Finalizada".</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Nota Fiscal", informe o número da Nota Fiscal que deseja consultar.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s">No campo "Número de Série", informe a série da Nota Fiscal que deseja consultar.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s">Acione o botão "Pesquisar" para trazer a Nota Fiscal em questão.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura147.png" data-bs-toggle="modal" data-bs-target="#Imagem147">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura147.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 147- MODAL -->
                            <div class="modal fade text-center" id="Imagem147" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura147.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 147</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 147 - End --><br>


                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Ao acionar o botão "Pesquisar", o SIGA/SGBM apresentará uma "grade" contendo os seguintes dados das Notas Fiscais, filtradas a partir dos parâmetros informados: Data da Nota Fiscal, Fornecedor, Número da Nota Fiscal, Série da Nota Fiscal, Status da Nota Fiscal e Ação.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">A partir dos dados apresentados da "grade" poderá ser selecionado o ícone em formato de "Seta de Retorno", para que seja solicitado o cancelamento.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura148.png" data-bs-toggle="modal" data-bs-target="#Imagem148">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura148.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 148 - MODAL -->
                            <div class="modal fade text-center" id="Imagem148" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura148.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 148</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 148 - End --><br>


                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o ícone em formato de "Seta de Retorno", o SIGA/SGBM apresentará uma janela "pop-up", onde será informada a justificativa de pedido de cancelamento da Nota.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Acionar o botão "OK" para solicitar o cancelamento.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura149.png" data-bs-toggle="modal" data-bs-target="#Imagem149">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura149.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 149 - MODAL -->
                            <div class="modal fade text-center" id="Imagem149 tabindex=" -1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura149.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 149</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 149 - End --><br>

                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Ao confirmar o cancelamento, acionando o botão "Ok", o SIGA/SGBM apresentará a janela de consulta da Nota com Status "CANCELAMENTO PENDENTE", uma vez que a solicitação será direcionada para a aprovação do perfil "Gestor Financeiro", somente após a aprovação a Nota estará efetivamente cancelada.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura150.png" data-bs-toggle="modal" data-bs-target="#Imagem150">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura150.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 150 - MODAL -->
                            <div class="modal fade text-center" id="Imagem150" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura150.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 150</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 150 - End --><br>

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
                <a href="Topico03.4.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico03.6.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>