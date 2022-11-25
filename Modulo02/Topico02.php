<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico02';
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

                        <h2 class="Titulo"> Processo de Migração de Dados</h2>
                        <hr>

                        <br>
                        <p><strong>Objetivo:</strong> Compreender o processo de levantamento, depuração e tratamento de dados a serem alimentados no SIGA/SGBM de forma a implantar o sistema de forma consistente e conciliado com o sistema contábil. </p>

                        <p>A MIGRAÇÃO DE DADOS é a parte mais importante da implantação do SIGA/SGBM, é o momento que será necessário depurar e transferir os dados do sistema atual de controle (registro escritural manual ou informatizado) para o SIGA/SGBM. Em função do nível de integração que o SIGA/SGBM mantém com o Sistema de Catálogo de Bens, Materiais e Serviços esse processo requer procedimentos específicos.</p>

                        <p class="wow fadeIn" data-wow-delay="1.0s">Na aula anterior apresentamos um esquema básico com o objetivo de orientar um curso de ação para que o projeto de implantação seja bem-sucedido, mas isso dependerá diretamente de vários fatores, tais como: idade do acervo de materiais existentes, tamanho e dispersão geográfica do acervo de bens, controle interno sobre a localização e movimentação dos bens, atualizações estruturais sofridas pelo órgão como fusões, desmembramentos, entre outras questões.</p>

                        <!-- Importante -->
                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <div class="ImportanteTexto">
                                <p>É fundamental realizar um diagnóstico da complexidade e do nível de controle existente de forma a realizar o projeto no decorrer de um exercício contábil, o que exigirá dimensionamento de recursos, planejamento, controle e coordenação de atividades, além do forte patrocínio do titular da pasta, uma vez, que dependendo da qualidade do controle, atualizações monetárias se farão necessárias na conciliação com o sistema contábil. A medida que o órgão não consiga realizar a implantação durante um exercício contábil, se torna cada vez mais complexo ajustar o acervo real com o registro contábil.</p>
                            </div>
                        </div>



                        <p class="wow fadeInRight" data-wow-delay="1.0s">Na “migração de dados” várias frentes de trabalho deverão ser realizadas, principalmente no tocante ao trabalho de campo, onde será necessário identificar os bens e reavaliar o seu valor dependendo da sua vida útil, assim como, registrar o controle físico dos mesmos definindo sua localização departamental no SIGA/SGBM e estabelecendo o responsável pela guarda.</p>
                        
                        <p><strong> A MIGRAÇÃO DE DADOS será feita pelo menos em quatro frentes de trabalho: </strong></p>






                        <br><br>
                        <!-- SCRIPT LIGHTBOX -->
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
                <a href="Topico01.4.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico02.1.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>