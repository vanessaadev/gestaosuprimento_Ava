<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico01.2';
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
                        <p class="SubTitulo"> As Fases e Etapas de Implantação do SIGA/SGBM</p>
                        <hr>

                        <br>
                        <p>Toda atividade da mais simples a mais complexa, necessita de um plano de trabalho para que possa quantificar recursos, dimensionar tempo de conclusão e mobilizar pessoal apto à execução das rotinas operacionais. Com relação à implantação de um sistema não poderia ser diferente, é importante estabelecer um plano de trabalho para que a implantação do sistema possa ser monitorada e tomadas as ações corretivas para que seja alcançado o objetivo final dentro das expectativas estabelecidas.</p>

                        <br><!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <p class="SaibaMaisTexto">Para auxiliar na elaboração de um plano de trabalho, orienta-se que a implantação do SIGA/SGBM seja dividida em etapas e fases para melhor mobilizar os diversos recursos envolvidos. </p>
                        </div>

                        <br>
                        <p>Sugere-se que sejam consideradas as seguintes etapas e fases:
                            <br><br> <span class="wow fadeInLeft" data-wow-delay="0.3s">A primeira etapa caracteriza-se pela preparação e depuração dos dados que serão inseridos no sistema de forma que sejam eliminadas as inconsistências e as informações representem a situação real. Nessa ocasião serão efetuados os inventários e a compatibilização dos itens ide material identificados com os códigos dos materiais de consumo e permanente constantes no "Sistema de Catálogo de Bens, Materiais e Serviços".</span>
                            <br><br><strong>As ações a serem desenvolvidas na 1ª etapa estão descritas na tabela a seguir:</strong>
                        </p>

                        <br>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="Texto">FASE</th>
                                    <th scope="col" class="Texto">DESCRIÇÃO</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="Texto"><strong>1ª fase - Cadastrar o Organograma.</strong></td>
                                    <td class="Texto">Inicialmente deve ser cadastrada a estrutura de setores do órgão/entidade, para isso deve ser encaminhado à SEPLAG Ofício assinado pelo titular do órgão seguido do Decreto que originou ou alterou a estrutura do órgão/entidade e o organograma do órgão. Vale ressaltar que poderão ser criados subsetores subordinados aos setores oficialmente definidos em decreto.</td>
                                </tr>
                                <tr>
                                    <td class="Texto"><strong>2ª fase - Cadastrar os itens corporativos de Material de Permanente constantes no Sistema de Catálogo de Bens Materiais e Serviços. </strong></td>
                                    <td class="Texto">A equipe designada para realizar a implantação do SIGA/SGBM deve preferencialmente participar deste treinamento ministrado pela SEPLAG/EGP e obter as senhas de acesso ao SIGA/SGBM. Mas nada impede que de posse das orientações possa fazê-lo de forma independente.
                                        <br><br>A partir das orientações do treinamento iniciar o cadastramento dos itens de materiais de consumo e materiais permanente considerados "corporativos" associando o material ao código constante no Sistema de Catálogo de Bens, Materiais e Serviços.<br><br>

                                        <!-- Fique Atento -->
                                        <div class="FiqueAtentoCaixa">
                                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                            <p class="FiqueAtentoTexto">A participação do Encarregado de Informática do Órgão e Entidade, na equipe de implantação, é fundamental para que este conheça o SIGA/SGBM suas funcionalidades e características de forma a prestar o primeiro suporte ao usuário assim como intermediar, junto à Seplag a resolução de problemas que por acaso surgirem com relação ao uso do sistema no órgão/entidade.</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="Texto"><strong>3ª fase - Cadastrar os itens específicos incluindo-os no referido Catálogo. </strong></td>
                                    <td class="Texto">A equipe deve também cadastrar os "itens específicos" de material de consumo e material permanente, verificando primeiramente se tais itens já se encontram no Sistema de Catálogo de Bens, Materiais e Serviços.
                                        <br><br>Caso não estejam cadastrados, proceder o cadastramento, por intermédio do SIGA/SGBM, seguindo as orientações da Coordenadoria de Gestão Estratégica de Compras – Cogec da Seplag. A solicitação de inclusão no “Catálogo” deverá ser feita por intermédio do SIGA/SGBM.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="Texto"><strong>4ª fase - Cadastrar os responsáveis por setor assim como os responsáveis pelos bens (especificamente para o patrimônio).</strong></td>
                                    <td class="Texto">Uma vez cadastrados todos os itens de material de consumo e material permanente, Especificamente para o caso da gestão patrimonial, identificar quem serão os responsáveis por setor e quem serão usuários dos Bens e cadastrá-los no SIGA/SGBM para posteriormente emitir os Termos de Responsabilidade.</td>
                                </tr>
                                <tr>
                                    <td class="Texto"><strong>5ª fase – Realizar o inventário físico e conciliar o resultado do inventário com o registro de controle (registro escritural). </strong></td>
                                    <td class="Texto">Uma vez cadastrados todos os itens de material de consumo e material permanente realizar o inventário físico, conciliando o resultado da contagem do inventário com os registros escriturais do controle de estoque e do controle do patrimônio, sejam tais registros informatizados ou manuais. No final desse processo apurar o saldo físico de cada item e no caso do patrimônio e identificar a sua respectiva localização e responsabilidade.</td>
                                </tr>
                            </tbody>
                        </table>

                        <br>
                        <p>A segunda etapa caracteriza-se pelo lançamento dos saldos de material de consumo e permanente, ou seja, o quantitativo de cada código cadastrado no SIGA/SGBM. Especificamente para o caso dos Bens Móveis, durante a segunda etapa serão calculados pelo SIGA/SGBM os valores de depreciação dos bens adquiridos a partir de janeiro de 2013, para validação do Gestor Patrimonial do Órgão/Entidade. Os bens adquiridos em períodos anteriores deverão ser reavaliados e terão seus valores ajustados pela comissão inventariante e informados ao SIGA/SGBM, conforme as orientações contidas no Decreto nº 31.340 de 05/11/2013, arts 9º ao 13.</p>

                        <br>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="Texto">FASE</th>
                                    <th scope="col" class="Texto">DESCRIÇÃO</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="Texto"><strong>6ª fase - Transferir os saldos físicos para o SIGA/SGBM. </strong></td>
                                    <td class="Texto">
                                        <ol type="a">
                                            <li class="wow fadeInRight" data-wow-delay="0.3s"> Quando o controle do estoque e do patrimônio for manual, efetuar a transferência para o SIGA/SGBM por intermédio da digitação das quantidades e informações individualizadas de cada item de estoque e cada item de patrimônio.</li>
                                            <li class="wow fadeInRight" data-wow-delay="1.0s"> Quando o controle de estoque e de patrimônio for informatizado, efetuar a transferência para o SIGA/SGBM por meio de uma planilha <strong>DE & PARA</strong> gerada pelo o Sistema de Estoque e Patrimônio que está sendo substituído.</li>
                                        </ol>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="Texto"><strong>7ª fase - Tratar as pendências de inventário.</strong></td>
                                    <td class="Texto">A 7ª ação se refere especificamente aos itens de patrimônio, à medida que é encerrado o inventário o SIGA/SGBM calculará a depreciação dos bens cuja aquisição ocorreu a partir de Janeiro de 2013, e atualizará o valor líquido contábil do bem. Para aqueles bens que foram adquiridos antes de Janeiro de 2013 e aqueles que não foi informado Nº e Data de Nota Fiscal, Valor do bem e Nº da Nota de Empenho, o SIGA/SGBM emitirá um Relatório especificando estes bens para que sejam reavaliados pela Comissão Inventariante.
                                        <br><br>Os bens após avaliados pela Comissão Inventariante terão seus valores definidos juntamente com a <strong>"vida útil"</strong> remanescente expressa em anos e o novo percentual para o <strong>"valor residual"</strong>. Tais informações serão retroalimentadas no SIGA/SGBM.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="Texto"><strong>8ª fase - Terminar a migração e efetuar o fechamento mensal de cada mês (especificamente para o patrimônio). </strong></td>
                                    <td class="Texto">Ao término do registro dos itens que foram avaliados pela Comissão Inventariante, terminar a migração no sistema e efetuar o <strong>fechamento mensal</strong> de cada mês, caso o processo de registro dos saldos no SIGA/SGBM tenha durado mais de um mês, de forma que seja calculada a depreciação dos meses subsequentes.
                                        <br><br>Ao finalizar o registro dos saldos, emitir o Relatório Resultado da Migração com o valor contábil ajustado para todos os bens móveis do acervo patrimonial do órgão/entidade.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="Texto"><strong>9ª fase - Emitir os Termos de Responsabilidade junto aos usuários dos bens (especificamente para o patrimônio).</strong></td>
                                    <td class="Texto">Providenciar a medida que são atribuídas as responsabilidades sobre os bens no SIGA/SGBM a emissão e assinatura dos Termos de Responsabilidade.</td>
                                </tr>
                            </tbody>
                        </table>

                        <br>
                        <p>A terceira etapa caracteriza-se pelo cadastramento e acesso dos requisitantes e a capacitação dos demais usuários envolvidos na gestão de estoque e gestão patrimonial.</p>

                        <br>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="Texto">FASE</th>
                                    <th scope="col" class="Texto">DESCRIÇÃO</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="Texto"><strong>10ª fase - Cadastrar os usuários requisitantes. </strong></td>
                                    <td class="Texto">
                                        Uma vez terminada a segunda etapa de implantação, elaborar a relação de usuários requisitantes que serão cadastrados no SIGA/SGBM, vale ressaltar que o cadastramento se dará a partir da relação de setores anteriormente cadastrada, sendo cada usuário lotado em um determinado setor. Identificar em cada Setor pelo menos dois usuários requisitantes, de forma que na ausência de um requisitante o outro possa efetuar as requisições pelo Setor.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="Texto"><strong>11ª fase - Capacitar os requisitantes a efetuarem as requisições no SIGA/SGBM.</strong></td>
                                    <td class="Texto">Demonstrar como os usuários devem proceder para fazerem suas requisições de material de consumo e material permanente.</td>
                                </tr>
                            </tbody>
                        </table>







                        <br><br>
                        <!-- SCRIPT LIGHTBOX -->
                        <script>
                            $('.collapse').collapse()

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
                <a href="Topico01.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico01.3.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- End main-content -->


        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>