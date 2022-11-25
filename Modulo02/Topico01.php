<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>
<?php
$page = 'Topico01';
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

                        <h2 class="Titulo"> Orientações para a Implantação do Sistema SIGA/SGBM</h2>
                        <hr>
                        <br>

                        <p><strong>Objetivo:</strong> Compreender as características do Sistema SIGA/SGBM e quais os procedimentos de depuração da base de dados e conciliação dos saldos físicos com os saldos patrimoniais constantes na contabilidade de forma a implantar o sistema de forma consistente.</p>

                        <p class="wow fadeInLeft" data-wow-delay="0.3s">O SIGA/SGBM é o sistema oficial de almoxarifado e de bens móveis do Governo Estadual do Ceará, regulamentado pelo Decreto n° 31.549 de 13/08/2014 e desenvolvido de forma corporativa para que os órgãos e entidades da administração direta controlem seus materiais de consumo e permanente de forma física e financeira, apurando as informações de gestão.
                            <span class="wow fadeInLeft" data-wow-delay="0.9s"><br><br>O sistema foi desenvolvido no ambiente INTERNET, permitindo o acesso por intermédio de senhas individualizadas, mantendo a integridade dos dados de cada órgão e entidade e possibilitando também a consolidação de informações de consumo de materiais e movimentações de bens entre os órgãos que utilizam o sistema.</span>
                        </p>

                        <br><!-- Sub Título -->
                        <p class="SubTitulo">As Características e Integração do Sistema</p>
                        <hr>

                        <br>
                        <p><strong>Para obter a padronização o SIGA/SGBM se integra com outros sistemas corporativos do Governo Estadual, tais como:</strong></p>


                        <br><!-- Accordion Fase 01 - Begin  -->
                        <div class="accordion accordion-flush" id="AccordionFase01">
                            <div class="text-center">
                                <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item01">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <strong>Sistema de Catálogo de Bens Materiais e Serviços</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <div class="row">
                                            <div class="col-2">
                                                <!-- Titulo Figura -->
                                                <div class="text-center"><br>
                                                    <a href="imagens/Figuraa1.png" data-bs-toggle="modal" data-bs-target="#Imagema1">
                                                        <img class="img-fluid" width="150" src="imagens/Figuraa1.png" alt="Sistema de Catálogo de Bens Materiais e Serviços">
                                                    </a>
                                                </div>

                                            </div>


                                            <div class="col-10">
                                                <p>É o sistema utilizado pelo Governo Estadual para padronizar características e nomenclaturas de bens, materiais e serviços adquiridos e mantidos pelos órgãos e entidades do Governo Estadual. Todos os itens de materiais de consumo e permanente, tem seu código e especificação retirado do sistema de catálogo permitindo consolidar informações acerca do consumo de materiais e da movimentação de bens patrimoniais. Além de permitir a padronização de taxas de depreciação, vida útil e percentual de valor residual, fornecendo parâmetros para cálculo da depreciação.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item Texto">
                                <h2 class="accordion-header" id="Item02">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        <strong>Sistemas de Compras Eletrônicas</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <div class="row">
                                            <div class="col-2">
                                                <!-- Titulo Figura -->
                                                <div class="text-center"><br><br>
                                                    <a href="imagens/Figuraa2.png" data-bs-toggle="modal" data-bs-target="#Imagema2">
                                                        <img class="img-fluid" width="150" src="imagens/Figuraa2.png" alt="Sistema de Catálogo de Bens Materiais e Serviços">
                                                    </a>
                                                </div>

                                            </div>


                                            <div class="col-10">
                                                <p>São os sistemas utilizados pelo Governo Estadual para gerenciar o processos de compras por intermédio de Pedidos de Fornecimento. Os Pedidos de Fornecimento emitidos pelos sistemas de compras do Governo Estadual, são lidos automaticamente pelo SIGA/SGBM, permitindo que no momento do recebimento no almoxarifado dos materiais de consumo e permanente, as informações de identificação, quantidade e valor sejam importadas sem a necessidade de digitação, evitando assim transcrição e ocorrência de erros.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item Texto">
                                <h2 class="accordion-header" id="Item03">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        <strong>Sistema de Fornecedores (Certificado de Registro Cadastral CRC)</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <div class="row">
                                            <div class="col-2">
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figuraa3.png" data-bs-toggle="modal" data-bs-target="#Imagema3">
                                                        <img class="img-fluid" width="150" src="imagens/Figuraa3.png" alt="Sistema de Catálogo de Bens Materiais e Serviços">
                                                    </a>
                                                </div>

                                            </div>


                                            <div class="col-10">
                                                <p>É o sistema utilizado pelo Governo Estadual para gerenciar e certificar os fornecedores aptos a transacionar com o Estado do Ceará. Os materiais de consumo e permanente recebidos no almoxarifado, oriundos de compras, somente poderão ser registrados se o Fornecedor envolvido for certificado como Fornecedor do Governo Estadual, garantindo a obediência dos critérios estabelecidos na política de compras governamental.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item Texto">
                                <h2 class="accordion-header" id="Item04">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        <strong>Sistema de Editoração Eletrônica de Documentos Oficiais do Estado do Ceará – Edoweb</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <div class="row">
                                            <div class="col-2">
                                                <!-- Titulo Figura -->
                                                <div class="text-center"><br>
                                                    <a href="imagens/Figuraa4.png" data-bs-toggle="modal" data-bs-target="#Imagema4">
                                                        <img class="img-fluid" width="150" src="imagens/Figuraa4.png" alt="Sistema de Catálogo de Bens Materiais e Serviços">
                                                    </a>
                                                </div>

                                            </div>


                                            <div class="col-10">
                                                <p>É o sistema utilizado pelo Governo Estadual para padronizar os documentos oficiais a serem publicados no Diário Oficial. Os Termos de Movimentação Patrimonial (doação, transferência e cessão), gerados pelo SIGA/SGBM terão o seu Extrato de Publicação gerados automaticamente no Edoweb, possibilitando maior celeridade na publicação em Diário Oficial de tais atos administrativos.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item Texto">
                                <h2 class="accordion-header" id="Item05">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                        <strong>Sistema de Estrutura Organizacional - SEO</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="Item05" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <div class="row">
                                            <div class="col-2">
                                                <!-- Titulo Figura -->
                                                <div class="text-center"><br>
                                                    <a href="imagens/Figuraa5.png" data-bs-toggle="modal" data-bs-target="#Imagema5">
                                                        <img class="img-fluid" width="150" src="imagens/Figuraa5.png" alt="Sistema de Catálogo de Bens Materiais e Serviços">
                                                    </a>
                                                </div>

                                            </div>


                                            <div class="col-10">
                                                <p>É o sistema utilizado pelo Governo Estadual para gerenciar as estruturas organizacionais dos órgãos que compõem o Poder Executivo. Os setores que compõem os Centros de Custos onde serão alocadas as despesas de materiais de consumo, e a localização dos bens permanentes, assim como os titulares dos órgãos e entidades seguirá os padrões cadastrados no SEO.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>
                        <!-- Importante -->
                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <div class="ImportanteTexto">
                                <p>Em função das características de integração com outros sistemas corporativos do Governo do Estado, o SIGA/SGBM terá uma estratégia específica de implantação exigindo o cumprimento de etapas e adoção de procedimentos pré-estabelecidos.</p>
                            </div>
                        </div>







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
                <a href="index.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico01.2.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- End main-content -->


        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>