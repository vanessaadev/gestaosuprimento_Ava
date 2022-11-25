<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico06.2';
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
                        <p class="SubTitulo"> Fechar Período Mensal</p>
                        <hr>
                        <br>

                        <p>Para entender o conceito do “Fechamento Mensal”, é necessário também entender o ciclo operacional do estoque que compreende o tempo em que cada material é recebido, armazenado e consumido. Cada material possui características e ciclos operacionais distintos, e à medida que cresce a variedade de materiais em estoque, faz-se necessário delimitar o período de análise, para que seja verificado o tempo de permanência do material em estoque com relação ao seu consumo corrente.</p>

                        <p>O controle por intermédio do “Fechamento Mensal”, ao delimitar um determinado período de tempo, permite estabelecer parâmetros para dimensionar as quantidades adequadas que cada material deve permanecer em estoque, para atender às necessidades sem quebra de continuidade no suprimento. Com o “Fechamento Mensal”, o SIGA/SGBM equaciona os estoques existentes com relação às aquisições e ao consumo dentro de um período de tempo, possibilitando identificar o excesso ou a insuficiência de suprimento dos materiais. Alguns relatórios gerenciais do SIGA/SGBM somente poderão ser emitidos após a realização do “Fechamento Mensal”.</p>

                        <p>Para efetuar o Fechamento Mensal, o perfil "Almoxarife" deverá selecionar, na barra de menu do SIGA/SGBM, o comando: <strong>PROCESSOS >> ALMOXARIFADO >> FECHAMENTO ALMOXARIFADO</strong></p>

                        <br>
                        <ol>
                            <br><br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura274.png" data-bs-toggle="modal" data-bs-target="#Imagem274">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura274.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 274 - MODAL -->
                            <div class="modal fade text-center" id="Imagem274" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura274.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 274</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 274 - End --><br>
                            <p>É aconselhável que o fechamento mensal seja efetuado no 1º dia útil do mês seguinte, devido a necessidade de conferir e consolidar as movimentações antes de fechar o mês. Enquanto o mês anterior não for fechado, as movimentações do mês corrente ficam travadas, e após o fechamento não poderão ser efetuados cancelamentos de movimentações efetuadas com erro de registro. Ao acionar o referido comando, o SIGA/SGBM apresentará a grade "Meses Pendentes", contendo na sequência crescente os meses que encontram-se em aberto no sistema.</p>
                            <br>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Na coluna "Ações", clique no ícone azul em formato de "Agenda'' para agendar o Fechamento do Mês. O sistema programa um horário para que sejam executados os programas de cálculo dos valores das movimentações do período e apuração do saldo final.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura275.png" data-bs-toggle="modal" data-bs-target="#Imagem275">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura275.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 275 - MODAL -->
                            <div class="modal fade text-center" id="Imagem275" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura275.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 275</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 275 - End -->
                            <br>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Uma vez acionado o referido ícone, o sistema demonstra, na coluna "Data de Execução", o horário que será executado o programa de cálculo.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Na coluna "Ações", o ícone agora é no formato de "Relógio" que, se for acionado, verificará a execução do programa.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura276.png" data-bs-toggle="modal" data-bs-target="#Imagem276">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura276.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 276 - MODAL -->
                            <div class="modal fade text-center" id="Imagem276" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura276.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 276</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 274 - End -->



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
                <a href="Topico06.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico06.3.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>