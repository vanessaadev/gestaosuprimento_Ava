<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico01.3';
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

        <div class="main-content container-fluid" id="#Apresentacao">
            <!-- Begin main-content -->
            <div class="row">
                <!-- Begin row -->
                <div class="col-md-1"></div>

                <div class="col-md-10">
                    <!-- Begin col-md-10 -->
                    <div class="page-title Texto">

                        <!-- Sub Título -->
                        <p class="SubTitulo"> Cadastrar Organograma</p>
                        <hr>


                        <p>Os materiais de consumo e os materiais permanentes serão alocados a setores da estrutura organizacional do órgão para apuração de consumo e localização física dos bens. Em função disso, faz-se necessário o cadastramento do organograma do órgão no SIGA/SGBM, uma vez que cada usuário requisitante deverá estar lotado em um determinado setor.</p>

                        <div class="bd-callout bd-callout-primary">
                            <p>Para cadastrar o organograma do órgão, deverá ser encaminhado à Coordenadoria de Gestão Patrimonial e Recursos Logísticos - Copat/Seplag um "Processo Administrativo" protocolado no Viproc instruído com: </p>

                            <ol>
                                <li class="wow fadeInDown" data-wow-delay="1.0s">Ofício do titular do órgão;</li>
                                <li class="wow fadeInDown" data-wow-delay="1.3s">Decreto de criação do órgão; </li>
                                <li class="wow fadeInDown" data-wow-delay="1.6s">Organograma.</li>
                            </ol>
                        </div>

                        <br>
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>Toda alteração na estrutura deverá ser previamente informada por intermédio de processo administrativo. Para orientações adicionais sobre a criação de setores no SIGA/SGBM contactar o atendimento operacional pelos telefones (85) 3101-7801, (85)3 101-7816, (85) 3101-3829 ou e-mail <a href="mailto:atendimento@seplag.ce.gov.br" target="_blank">atendimento@seplag.ce.gov.br</a>.</p>
                            </div>
                        </div>
                        <br>








                        <!-- SCRIPT LIGHTBOX -->
                        <script>
                            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                event.preventDefault();
                                $(this).ekkoLightbox();
                            });
                        </script>

                    </div> <!-- End page-title -->
                </div> <!-- End page-title -->

                <div class="col-md-1"></div>
            </div> <!-- End row -->

            <!-- Botões de navegação -->
            <div class="text-center">
                <a href="Topico01.2.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico01.4.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- End main-content -->


        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>