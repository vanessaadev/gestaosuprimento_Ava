<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico02.2';
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
                        <p class="SubTitulo"> Realização do Inventário e Conciliação do Saldo Físico e Financeiro com o Registro Escritural</p>
                        <hr>

                        <br>
                        <p>A segunda frente de trabalho consiste na contagem física dos itens de material de consumo e material permanente existente no estoque, seguida da conciliação com o registro escritural (sistema de controle existente), seja este manual ou informatizado. O resultado efetivamente encontrado no inventário deve ser atualizado no registro escritural de forma que este reflita a posição real de materiais estocados em termos de quantidade e valor. Vale ressaltar que os itens de material de consumo serão valorados unitariamente pela média das compras e os itens de material permanente pelos seus valores originais. O saldo conciliado deve também ser atualizado na contabilidade. </p>

                        <!-- Accordion Fase 01 - Begin  -->
                        <div class="accordion accordion-flush" id="AccordionFase01">
                            <div class="text-center">
                                <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item01">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <strong>Realização do inventário e conciliação do saldo físico e financeiro</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>O inventário é uma lista de todos os bens e materiais pertencentes ao órgão/entidade e disponíveis, podem estar armazenados em estoque, distribuídos nas próprias instalações ou fora delas. A qualidade do controle dos estoques depende da qualidade de entrada das informações no momento de implantar o Siga/Sgbm.</p>
                                        <p>Dessa forma é importante levantar todos esses itens e conciliar o registro escritural com o que foi identificado fisicamente permitindo iniciar o controle de forma consistente sem erros ou vícios omitidos no passado. As orientações relativas à realização de inventário de estoque foram estudadas anteriormente no item “5.14 – Inventários” na aula 5 - Gestão da Armazenagem. Vale ressaltar ainda que tal inventário se trata do inventário de implantação, obviamente que a cada exercício financeiro será necessário realizar um inventário para isso o Siga/Sgbm dispõe de uma ferramenta de inventário que estudaremos adiante.</p>

                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item Texto">
                                <h2 class="accordion-header" id="Item02">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        <strong>Conciliação do saldo físico com o registro escritural </strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>Denomina-se “conciliação” a análise do saldo registrado no sistema de controle, e sua respectiva movimentação, visando adequar seu saldo à efetiva realidade constatada a partir da contagem física realizada com o inventário, promovendo ajustes necessários na escrituração.</p>
                                        <p>Concilia-se primeiramente o saldo registrado na forma escritural com os documentos e os diversos relatórios que dão suporte aos lançamentos de registro no controle escritural, tais como: Notas Fiscais de entrada, Termos de Transferência de Estoque (entradas e saídas) e Requisições de Material. Nesta etapa o objetivo é verificar se o registro no controle escritural possui documentos que comprovem a correção dos saldos lá registrados.</p>
                                        <p>Uma vez identificada alguma incorreção entre o registro e os documentos correspondentes, efetua-se o ajuste no registro escritural de forma que todo e qualquer lançamento possua um documento comprobatório da movimentação, com isso se pode afirmar que o registro escritural está correto. </p>
                                        <p> Depois de efetuada a verificação confronta-se o saldo no registro escritural com o saldo físico identificado no inventário e se houver divergência deve-se ajustar o saldo escritural com o que foi apurado no inventário. Logicamente que as diferenças identificadas principalmente se forem a menor devem ser rigorosamente apuradas, se preciso, por intermédio de “sindicância”.</p>
                                        <p>A conciliação final deverá ser feita entre o registro escritural e o registro contábil de forma que este represente a situação real, de forma sintética, do estoque em termos de valor.</p>
                                        <p>Somente após terminada as conciliações entre o saldo escritural e o saldo contábil, os registros analíticos devem ser transferidos para o Siga/Sgbm.</p>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <br><br><br>






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
                <a href="Topico02.1.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico02.3.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>