<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico02.3';
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
                        <p class="SubTitulo">Registro do Saldo Conciliado para o SIGA/SGBM </p>
                        <hr>
                        <p>A terceira frente de trabalho será o registro dos saldos no Siga/Sgbm que poderá ser efetuado por intermédio de uma planilha DE & PARA transferindo-se as informações correspondentes a cada código de item material (consumo e permanente) que foi cadastrado no Siga/Sgbm como item de estoque. </p>
                        <p>O registro dos quantitativos de estoque dos itens de material que foi cadastrado no Siga/Sgbm serão importados por intermédio desta planilha eletrônica, ou seja, o sistema executará um programa de crítica que processará a leitura de cada linha da planilha a partir do código do item, verificando se este código foi cadastrado. Em caso positivo efetuará a leitura das demais informações da planilha e alimentará o sistema com essas informações. Em caso negativo o programa rejeitará a leitura e encerrará a execução sem alimentar as informações.</p>
                        <p>Dessa forma é fundamental que cada linha da planilha contenha os códigos que foram cadastrados no Siga/Sgbm. No caso da "migração com sistema" a referida planilha será gerada pelo sistema que fornecerá as informações para o Siga/Sgbm e no caso da "migração sem sistema" a planilha será preparada pelo almoxarife encarregado do inventário. </p>

                        <p><strong>Os dados da planilha serão os seguintes:</strong></p>
                        <br>
                        <!-- Início Accordion -->

                        <div class="accordion accordion-flush" id="AccordionFase01">
                            <center>
                                <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </center>
                            <!-- Accordion 01 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item01">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <strong>Código do Material de Consumo ou Material Permanente em estoque</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>Corresponde ao código de identificação do material, no caso de "migração com sistema" é o código do item no sistema de controle de estoque do qual se origina a planilha DE & PARA. No caso de "migração sem sistema" será o código do item constante no Catálogo de Bens, Materiais e Serviços, informado manualmente, pelo responsável pelo inventário, na planilha DE & PARA . Em ambos os casos o referido código foi informado no Siga/Sgbm na ocasião em que o item foi cadastrado.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 01 -->

                            <!-- Accordion 02 -->
                            <div class="accordion-item Texto">
                                <h2 class="accordion-header" id="Item02">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        <strong>Quantidade</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>É a quantidade correspondente ao estoque do item de material, após inventariado e conciliado com o registro escritural. </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 02 -->

                            <!-- Accordion 03 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item03">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        <strong> Valor Unitário</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>É o valor unitário do item de material de consumo ou material permanente em estoque, constante no registro escritural de controle (informatizado ou manual). No caso dos materiais classificados como “consumo”, é recomendável que seja o valor médio entre as entradas e o estoque do período, no caso do material classificado como “permanente” deverá ser o valor original constante na Nota Fiscal de Compra, na impossibilidade é aceitável o valor unitário da última entrada. </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion 03 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item04">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefuor" aria-expanded="false" aria-controls="flush-collapsefuor">
                                        <strong> Limite mínimo</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapsefuor" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>É a quantidade mínima do item que deve ser mantida em estoque durante o intervalo de tempo entre a realização do Pedido de fornecimento e o recebimento do material no almoxarifado. </p>
                                    </div>
                                </div>
                            </div>
                        </div><br><br>
                        <!-- Accordion 03 -->
                        <!-- FIM Accordion -->
                        <br>

                    </div>
                </div>
            </div>
        </div>

        <!--INÍCIO CAIXA CINZA -->
        <section id="pt2">
            <div class="bg-cinzaAzul container-fluid main-content">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <p class="caixa">
                        <h4 class="wow fadeInLeft" data-wow-delay="0.6s">Uma vez cumprida as três frentes de trabalho e o saldo dos materiais de estoque transferidos para o SIGA/SGBM poderão ser efetuadas as requisições de materiais assim como o registro das Notas Fiscais de entrada em estoque.</h4>
                        </p>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </section>
        <!--INÍCIO CAIXA CINZA -->

        <div class="row">
            <!-- Begin row -->
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <!-- Begin col-md-10 -->
                <div class="page-title">


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
            <a href="Topico02.2.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
            <a href="Topico03.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
        </div>

    </div> <!-- CONTEUDO FIM -->

    <!-- FOOTER -->
    <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>