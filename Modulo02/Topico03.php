<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico03';
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

                        <h2 class="Titulo"> Recebimento de Novos Bens no SIGA/SGBM</h2>
                        <hr>

                        <br>

                        <p><strong>Objetivo:</strong> Compreender a funcionalidade de registro de novos bens no Sistema SIGA/SGBM oriundos do processo de aquisição, assim como a manutenção do cadastro de itens de material.</p>

                        <p>No módulo I, na aula 04, deste curso, dedicamos o item 4.6 exclusivamente para discutir os procedimentos de recebimento de material que se aplica tanto aos materiais de consumo como os materiais permanentes. Recapitulando àquela ocasião, podemos concluir que o recebimento é o ato pelo qual a equipe do almoxarifado recebe do fornecedor os materiais de consumo e bens móveis adquiridos pelo órgão/entidade, efetuando as conferências necessárias para dar o aceite dos produtos. Esses materiais e bens devem ser entregues pelo fornecedor em local previamente determinado no contrato e conforme agendamento realizado junto ao almoxarifado. </p>

                        <P>Recebimento pode ser subdividido em duas etapas: provisório e definitivo.</p>

                        <ol class="1">
                            <li class=" wow fadeInRight" data-wow-delay="0.3s"> <strong>Recebimento Provisório:</strong> o material adquirido é entregue ao órgão/entidade no local definido, não implicando necessariamente em aceitação. Nesse momento serão realizados procedimentos de conferência para aceitar ou não a carga. </li>
                            <br>
                            <li class=" wow fadeInRight" data-wow-delay="0.6s"> <strong>Recebimento Definitivo:</strong> ato por meio do qual se declara, na documentação fiscal, que o material recebido está de acordo com as especificações do contrato.
                                <br><br>Deverão ser efetuadas três conferências pela equipe do almoxarifado no ato do recebimento de materiais e bens que são: Conferência visual, Conferência quantitativa, Conferência qualitativa.
                            </li><br>
                            <li class=" wow fadeInRight" data-wow-delay="0.9s"> <strong>Conferência Visual:</strong> exame para constatação de avarias (defeitos), análise da disposição das cargas, observação das embalagens quanto a evidências de quebras, umidade, amassados, dentre outros.</li>
                            <br>
                            <li class=" wow fadeInRight" data-wow-delay="1.0s"> <strong>Conferência Quantitativa:</strong> verificação se a quantidade declarada pelo fornecedor na nota fiscal corresponde efetivamente à quantidade física que está sendo recebida.</li>
                            <br>
                            <li class=" wow fadeInRight" data-wow-delay="1.3s"> <strong>Conferência Qualitativa:</strong> análise de qualidade efetuada por meio da confrontação das condições contratadas na Ordem de Compra/Contrato com as consignadas na Nota Fiscal pelo fornecedor. Essa análise visa garantir o recebimento adequado do material contratado por meio do exame de suas características dimensionais, específicas e restrições de especificação.
                                <br><br>Após a conferência dos materiais e bens recebidos no almoxarifado, o almoxarife/servidor ou comissão poderá realizar a recusa total, o recebimento total ou parcial.
                            </li><br>
                            <li class=" wow fadeInRight" data-wow-delay="1.6s"> <strong>Recusa Total:</strong> consiste na situação em que a carga é recusada pelo almoxarife/servidor compreendendo as seguintes possibilidades:
                                <br><br>
                                <ol type="a">
                                    <li class=" wow fadeInRight" data-wow-delay="1.9s">Nota fiscal não corresponde à especificação ou quantidade física do item de material;</li>
                                    <li class=" wow fadeInRight" data-wow-delay="2.0s">A especificação do item é diferente da constante na Ordem de Compra.</li>
                                    <li class=" wow fadeInRight" data-wow-delay="2.3s">Valor da Nota Fiscal diferente do valor da Ordem de Compra/Contrato, sem justificado o reequilíbrio econômico-financeiro do contrato;</li>
                                </ol><br>
                                <span class=" wow fadeInRight" data-wow-delay="2.4s">Nos casos da recusa total há a possibilidade de novo agendamento para entrega.</span>
                            </li>
                            <br>
                            <li class=" wow fadeInRight" data-wow-delay="2.6s"> <strong> Recebimento Total:</strong> corresponde à situação em que o fornecedor efetua a entrega corretamente, atendendo todos os requisitos de documentação, quantidade e qualidade dos itens; caso em que o recebimento é finalizado.</li>
                            <br>
                            <li class=" wow fadeInRight" data-wow-delay="2.9s"> <strong> Recebimento Parcial:</strong> consiste no aceite da parte “correta” dos itens, nesse caso o fornecedor emitirá uma nova nota fiscal referente à quantidade “correta” cancelando a nota fiscal anterior. A mercadoria ficará separada aguardando a correção para poder dar entrada em estoque.
                                <br><br>É importante que o almoxarife que fará as citadas conferências seja o mesmo que efetuará o registro no sistema SIGA/SGBM, de forma a evitar a ocorrência de erros de transcrição no momento do entendimento do que está sendo digitado no sistema.
                                <br><br>O Almoxarife terá duas opções de registro de entrada do material e bens móveis no sistema SIGA/SGBM:
                            </li><br>
                            <li class=" wow fadeInRight" data-wow-delay="3.0s"> <strong> Entrada por Ordem de Compra:</strong> Deverá ser utilizada quando se tratar de aquisições de materiais e bens móveis por intermédio dos Sistemas de Compras, onde foram emitidas as respectivas Ordens de Compra. Estando o SIGA/SGBM atualmente integrado com o Sistema de Registro de Preços e Sistema de Cotação Eletrônica. A partir da identificação da Ordem de Compra será buscado o saldo desta para importar os dados correspondentes ao registro de entrada. O SIGA/SGBM considerará somente as Ordens de Compra que estiverem com o status “Emitida”, ou seja que não tiveram com seu recebimento efetivado. </li>
                            <br>
                            <li class=" wow fadeInRight" data-wow-delay="3.3s"> <strong> Entrada por Nota Fiscal:</strong> Deverá ser utilizada quando se tratar de aquisições de materiais que não foram formalizadas por intermédio da Ordem de Compra, nesses casos será necesssário digitar no SIGA/SGBM a Nota Fiscal do Fornecedor, nesse caso algumas premissas devem ser atendidas:</li>
                            <br>
                            <ol type="a">
                                <li class=" wow fadeInRight" data-wow-delay="3.6s"> O item de material deve estar previamente cadastrado no SIGA, para que possa ser efetuado o registro.</li>
                                <li class=" wow fadeInRight" data-wow-delay="3.9s"> O Fornecedor deve estar cadastrado no Certificado de Registro Cadastral – CRC.</li>
                            </ol>

                            <br>
                            <li class=" wow fadeInRight" data-wow-delay="4.0s"> <strong> Conferência das Entradas:</strong> O processo de registro de entrada no controle de estoque é um ponto crítico de controle porque é na entrada do material que o SIGA/SGBM efetua o cálculo do valor do item de estoque, usando no caso do material de consumo, o preço médio ponderado das compras conforme determina o art. 106 da lei nº 4.320 de 17 de março de 1964. Esse cálculo utiliza entre outras variáveis o valor unitário e a quantidade do item constante na Nota Fiscal. No caso do material permanente ele será valorado pelo “custo histórico” mantendo-se o método “PEPS” de valoração dos estoques “<strong>P</strong>rimeiro a <strong>E</strong>ntrar, <strong>P</strong>rimeiro a <strong>S</strong>air”.
                                <br><br>Dessa forma, é de fundamental importância que ao registrar a entrada no SIGA/SGBM, seja por intermédio de Nota Fiscal ou Ordem de Compra, seja conferido o registro antes de efetuar qualquer movimentação do item. Para efetuar essa conferência é utilizado o relatório "Entradas do Período".
                            </li><br>
                            <li class=" wow fadeInRight" data-wow-delay="4.3s"> <strong> Cancelamento de Nota Fiscal:</strong> As Notas Fiscais de entrada registradas no SIGA/SGBM, poderão ser canceladas caso seja identificado algum erro de registro em termos de valor ou de quantidade de um item na ocasião da conferência pré registro. Nesses casos o perfil ALMOXARIFE solicitará o cancelamento da Nota e o perfil GESTOR autorizará o cancelamento no sistema, uma vez autorizado o cancelamento a Nota Fiscal poderá ser novamente registrado no SIGA/SGBM. O cancelamento só será possível se não houver nenhuma movimentação do item no período entre o registro da Nota Fiscal e a solicitação de cancelamento.</li>
                        </ol>
                        <p>Como podemos observar todo o processo de recebimento do material permanente se dará no módulo de Almoxarifado do SIGA/SGBM.</p>

                        <div class="card card-body" style="border-color: #ffcc00;">
                            <p>Vejamos então a operacionalização dos processos de recebimento do SIGA/SGBM: </p>
                            
                            <ol>
                                <li class="wow fadeInDown" data-wow-delay="0.3s"> Recebimento por Ordem de Compra, </li>
                                <li class="wow fadeInDown" data-wow-delay="0.6s"> Recebimento por Nota Fiscal, </li>
                                <li class="wow fadeInDown" data-wow-delay="0.9s"> Consulta de Notas Fiscais Salvas, </li>
                                <li class="wow fadeInDown" data-wow-delay="1.3s"> Conferência das Entradas, </li>
                                <li class="wow fadeInDown" data-wow-delay="1.6s"> Solicitação de Cancelamento de Nota Fiscal, </li>
                                <li class="wow fadeInDown" data-wow-delay="1.9s"> Autorização de Cancelamento de Nota Fiscal, </li>
                                <li class="wow fadeInDown" data-wow-delay="2.3s"> Cadastramento de Item de Material Permanente, </li>
                                <li class="wow fadeInDown" data-wow-delay="2.6s"> Alterar Classificação de Material.</li>
                            </ol>
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
                <a href="Topico02.3.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico03.1.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>