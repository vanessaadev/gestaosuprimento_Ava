<!--<php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>-->

<?php
$page = 'Topico01';
include('layout/header.php');
?>

<html>
<meta charset="utf-8">
<!-- PLUGIN DO FADE IN -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<body>
    <!-- MENU -->
    <?php include('layout/menu.php') ?>

    <div id="main">
        <!-- NAV TOP -->
        <?php include('layout/nav.php') ?>

        <!--INÍCIO CONTEUDO PARTE 01-->
        <section id="pt01">
            <div class="main-content container-fluid">
                <div class="page-title">
                    <div class="row">
                        <!-- LINHA pt01 -->
                        <div class="col-md-1"></div>
                        <div class="col-md-10">

                            <!-- INICIO CONTEUDO -->


                            <!-- Título -->
                            <h2 class="Titulo">Critérios para Certificação de Fornecedores</h2>
                            <hr>

                            <div class="bd-callout bd-callout-primary">
                                <p><strong>Objetivo:</strong> Compreender a importância do fornecedor como um elo da cadeia produtiva e quais os critérios conceituais e legais para certificação de fornecedores na administração pública.</p>
                            </div>

                            <br><!-- SubTítulo -->
                            <p class="SubTitulo" id="one">A Certificação de Fornecedores como um elo nas
                                Cadeias de Suprimentos</p>
                            <hr>

                            <p>Devido aos movimentos da globalização, mudanças dos fatores econômicos e crescimento da formação de cadeias de suprimentos nas organizações por todo o mundo, houve uma busca pela redução dos riscos do negócio, minimização dos custos e aumento da capacidade de oferta aos diversos segmentos do mercado. Dessa forma, várias organizações de diversos setores e segmentos da economia buscam fechar parcerias com fornecedores para maximizarem seus resultados e contribuírem para aumentar a satisfação de seu público-alvo.</p>

                            <div class="ImportanteCaixa">
                                <p class="ImportanteTitulo"> Importante</p>
                                <div class="ImportanteTexto">
                                    <p>Neste contexto é importante entender qual a função do fornecedor dentro do processo produtivo de uma organização. Isso porque, é o fornecedor que irá determinar o ritmo da produção e a qualidade do seu produto ou serviço, visto que ao receber material de boa qualidade é possível ofertar qualidade igual ou superior com o seu produto.</p>
                                </div>
                            </div>
                            <br>
                            <p>Sendo assim, podemos definir fornecedor como toda empresa que produz ou distribui algo necessário em uma organização, seja ela industrial, comercial ou prestadora de serviços. O fornecedor é quem irá entregar a matéria-prima para que a organização consiga transformar em um item vendável e com qualidade.</p>

                            <p>Portanto, o fornecedor é quem dita a sua própria prática. Afinal, se o fornecedor não atender a contento, automaticamente a organização também perde com isso, já que a sua produção perderá o ritmo e não conseguirá produzir o que tinha programado. Torna-se uma reação em cadeia: sem matéria-prima, sem produto. Sem produto, sem resultado efetivo. </p>

                            <div class="SaibaMaisCaixa">
                                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                <div class="SaibaMaisTexto">
                                    <p>Apesar de o fornecedor ter suas próprias regras nos processos, uma organização pode criar procedimentos de auditoria para o seu fornecedor, garantindo que os processos dele melhorem e consequentemente, influenciem os seus, também. Tais procedimentos daqui por diante serão denominados como “Certificação de Fornecedores”.</p>
                                </div>
                            </div>
                            <br>
                            <p>Geralmente as organizações estabelecem uma lista de 10 critérios para certificação de fornecedores para formar parcerias essenciais para garantir o seu sucesso. <strong> São eles:</strong></p>

                            <!-- Início Accordion -->
                            <div class="accordion accordion-flush" id="AccordionFase01">
                                <center>
                                    <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                </center>
                                <!-- Accordion 01 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item01">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            <strong>1- Histórico</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>O primeiro critério de certificação de fornecedores é o histórico da empresa. Ao levantar fatores como tempo de atividade, currículo de gestores e diretores, assim como evolução da empresa, é possível ter uma idéia melhor de como ela se desenvolveu.</p>
                                            <p>Além disso, podemos identificar períodos de aumento do seu patrimônio e investimento, estagnação de desempenho e quedas no faturamento. Esses indicadores e suas causas garantem indícios valiosos sobre a segurança, eficiência e nível de risco de cada potencial fornecedor.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 01 -->

                                <!-- Accordion 02 -->
                                <div class="accordion-item Texto">
                                    <h2 class="accordion-header" id="Item02">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <strong>2- Reputação</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>Atrelada à análise de histórico está a avaliação de reputação, como segundo critério essencial na certificação de fornecedores. Nela, serão identificados indicadores que mostram como o mercado enxerga a empresa em questão.</p>
                                            <p>Verifica-se premiações recebidas, cobertura da imprensa geral e especializada nas atividades do fornecedor, bem como avaliações públicas, tudo para garantir menor riscos à imagem da contratante.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 02 -->

                                <!-- Accordion 03 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item03">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            <strong>3- Saúde financeira </strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>O critério de saúde financeira visa identificar problemas frequentes de caixa no fornecedor, o que pode comprometer sua operação e indicar problemas maiores envolvendo a gestão da empresa, como incapacidade de honrar pagamentos e compromissos firmados.</p>
                                            <p>Depender de um fornecedor com esse agravante representa um risco cada vez maior para a organização contratante. Por isso, é essencial avaliar a saúde financeira e adicionar esse critério à certificação e ao monitoramento do fornecedor.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 03 -->

                                <!-- Accordion 04 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item04">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                            <strong>4- Clientela </strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>Conhecer os clientes atendidos e satisfeitos com a operação de um fornecedor em potencial é um importante ponto a ser avaliado.</p>
                                            <p>Nesse critério de certificação de fornecedores, o setor de compras deve responder às seguintes questões:</p>
                                            <ul class="none Texto">
                                                <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Quantos clientes são atendidos pelo fornecedor?</li>
                                                <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Quanto de sua capacidade produtiva já está comprometida com eles?</li>
                                                <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Seus clientes atuam no mesmo segmento que minha organização?</li>
                                                <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> O que esses clientes dizem sobre a parceria?</li>
                                                <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Com base nessas informações, é possível ter um panorama geral de como está o desempenho do fornecedor com seus clientes e como a sua demanda se encaixaria nesse cenário.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 04 -->

                                <!-- Accordion 05 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item05">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                            <strong>5- Produtividade </strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="Item05" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>Esse é um dos mais importantes critérios de certificação de fornecedores. Isso porque a capacidade de produção de um fornecedor saudável deve sobrar em relação à sua demanda.</p>
                                            <p>Deve ser avaliada a planta de produção que o fornecedor coloca à sua disposição e comparado os números produzidos com a projeção de pedidos. Assim a organização aumenta a probabilidade de que toda a demanda será entregue e que a operação não sofrerá com atrasos.</p>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 05 -->

                                <!-- Accordion 06 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item06">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                            <strong>6- Logística </strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="Item06" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>Não basta produzir e ser incapaz de entregar os produtos até a organização. É necessário avaliar a estrutura logística do fornecedor. Como funcionam suas entregas? A frota é própria ou terceirizada? Qual a distância entre a unidade distribuidora e a organização contratante?</p>
                                            <p>Tudo isso dá uma boa noção do tempo de espera em cada pedido e contribui para o planejamento de ações de uma organização.</p>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 06 -->

                                <!-- Accordion 07 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item07">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                            <strong>7- Qualidade </strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="Item07" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>Avaliar a qualidade do produto oferecido, seja por amostras e/ou relatórios, é um critério essencial na certificação de fornecedores. Ela influencia diretamente no produto final que chega ao seu cliente, ou seja, tem forte impacto em como a organização garante a satisfação do público.</p>
                                            <p>Como critério de certificação de fornecedores, a avaliação de qualidade considera os padrões estabelecidos, processos de produção, escolha de matérias-primas e aproveitamento geral do que é produzido.</p>
                                            <p>Após a escolha do fornecedor, a qualidade segue como um importante indicador de performance para a área de compras. Assim, é também relevante monitorar se o que está sendo entregue mantém a qualidade apresentada anteriormente como amostra.</p>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 07 -->

                                <!-- Accordion 08 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item08">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                                            <strong>8- Comunicação </strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="Item08" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>Um fornecedor confiável e eficiente certamente conta com canais de atendimento e boa comunicação para seus contratantes. Devem ser avaliados os canais disponibilizados, capacidades de integração e tecnologia de controle utilizada pelo fornecedor em potencial.</p>
                                            <p>A partir desses fatores, o setor de compras terá melhor compreensão de como serão emitidos os pedidos e como se dará o acompanhamento de entregas. Além de antecipar a quantidade de recursos que a interação com o fornecedor irá demandar.</p>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 08 -->

                                <!-- Accordion 09 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item09">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                                            <strong>9- Negociação </strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="Item09" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>A capacidade e flexibilidade de negociação é um importante critério de certificação de fornecedores, isso porque dá uma dimensão total dos custos e prazos que costumam ser praticados, bem como a abertura do parceiro comercial para se adaptar às suas condições.</p>
                                            <p>Deve ser avaliado se o fornecedor em questão oferece bons prazos, preços competitivos, opções variadas de parcelamento e meio para pagamento, além de descontos em condições especiais.</p>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 09 -->

                                <!-- Accordion 10 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item10">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                                            <strong>10- Inovação</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTen" class="accordion-collapse collapse" aria-labelledby="Item10" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>Um fornecedor em constante evolução e que atualiza sua produção de acordo com novas tendências e boas práticas oferece mais vantagens para a cadeia de suprimentos. Em geral, o apetite em inovar é motivado por diminuir custos, aumentar a eficiência e/ou melhorar a qualidade dos produtos.</p>
                                            <p>Observando as mudanças e novidades que um fornecedor adota, poderá identificar quais parceiros apresentam um planejamento mais promissor e duradouro.</p>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 10 -->


                                <br><br><!-- SubTítulo -->
                                <p class="SubTitulo" id="two"> A Certificação de Fornecedores na Administração Pública</p>
                                <hr>

                                <p>A complexidade de um processo licitatório, o princípio da isonomia e a tentativa de obter a proposta mais vantajosa têm induzido a administração pública a adotar nas compras de suprimento uma abordagem de seleção de fornecedores, onde o preço é o principal aspecto considerado, convergindo a maior parcela das compras governamentais para a modalidade de “Pregão Eletrônico”.</p>
                                <p>Dentre as diferentes modalidades licitatórias, o Pregão Eletrônico permite que mais instituições apresentem seus produtos ou serviços. A modalidade tem sido cada vez mais utilizada por apresentar maior diversidade e flexibilidade. <strong> São cinco principais vantagens do Pregão Eletrônico.</strong></p>

                                <br><!-- Início Accordion -->
                                <div class="accordion accordion-flush" id="AccordionFase02">
                                    <center>
                                        <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                    </center>
                                    <!-- Accordion 01 -->
                                    <div class="accordion-item accordion-item1">
                                        <h2 class="accordion-header" id="Item01">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseone" aria-expanded="false" aria-controls="flush-collapseone">
                                                <strong>Celeridade na contratação de bens e serviços comuns</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseone" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase02">
                                            <div class="accordion-body">
                                                <p>O Pregão Eletrônico traz maior rapidez ao processo de compras públicas ao utilizar tecnologias e desburocratizar procedimentos necessários à modalidade presencial.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fim Accordion 01 -->

                                    <!-- Accordion 02 -->
                                    <div class="accordion-item accordion-item1">
                                        <h2 class="accordion-header" id="Item02">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsetwo" aria-expanded="false" aria-controls="flush-collapsetwo">
                                                <strong>Redução no preço das contratações</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapsetwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase02">
                                            <div class="accordion-body">
                                                <p>O Pregão Eletrônico leva a uma maior competividade, uma vez que mais instituições participam do processo. A competividade elevada costuma ocasionar a redução de preços.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fim Accordion 02 -->

                                    <!-- Accordion 03 -->
                                    <div class="accordion-item accordion-item1">
                                        <h2 class="accordion-header" id="Item03">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsetree" aria-expanded="false" aria-controls="flush-collapsetree">
                                                <strong>Não exigência de habilitação prévia</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapsetree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase02">
                                            <div class="accordion-body">
                                                <p>No Pregão Eletrônico há uma inversão de fases: primeiro ocorre a licitação e depois é verificada a documentação do prestador de serviços. A não exigência de habilitação prévia permite a participação de mais empresas e traz maior agilidade ao processo licitatório.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fim Accordion 03 -->

                                    <!-- Accordion 04 -->
                                    <div class="accordion-item accordion-item1">
                                        <h2 class="accordion-header" id="Item04">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                                                <strong>Aumento no número de concorrentes</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase02">
                                            <div class="accordion-body">
                                                <p>Pelo fato de empresas de diversos locais poderem participar do Pregão Eletrônico, vê-se aumento no número de concorrentes e uma maior competitividade e diversidade.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fim Accordion 04 -->

                                    <!-- Accordion 05 -->
                                    <div class="accordion-item accordion-item1">
                                        <h2 class="accordion-header" id="Item05">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                                                <strong>Transparência</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="Item05" data-bs-parent="#AccordionFase02">
                                            <div class="accordion-body">
                                                <p>Por ser realizado nos meios virtuais, o Pregão Eletrônico é acompanhado e fiscalizado por um grande número de pessoas, o que leva à maior transparência e publicidade do processo licitatório.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fim Accordion 05 -->
                                </div>
                                <br><br>


                                <p>Para maior apoio à questão da habilitação nas compras governamentais, notadamente no pregão eletrônico, a Administração Pública instituiu o Cadastro de Fornecedores que é uma ferramenta de gestão que permite aos órgãos e entidades que realizam frequentemente licitações, agilizar a fase de habilitação dos procedimentos licitatórios por meio do cadastramento e certificação prévia dos fornecedores interessados, bem como auxilia a administração de contratos na verificação das condicionantes de pagamento e para eventual assinatura de aditivo contratual.</p>
                                <p>Por outro lado, ao fornecedor cadastrado, assegura análise prévia de sua documentação de habilitação; permite a dispensa da apresentação desses documentos nas licitações, conforme edital. Ainda, evita que o fornecedor contratado tenha que entregar a mesma documentação diversas vezes.</p>
                                <p>O fornecedor cadastrado faz jus ao Certificado de Registro Cadastral - CRC, válido por 1 ano.</p>

                                <!-- Fique Atento -->
                                <div class="FiqueAtentoCaixa">
                                    <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                    <div class="FiqueAtentoTexto">
                                        <p>Para emissão do Certificado de Cadastro de Fornecedor é necessário preencher um requerimento de inscrição/renovação cadastral e fazer o upload da documentação que será analisada e no caso de deferimento o fornecedor é comunicado para retirar o certificado.</p>
                                    </div>
                                </div>
                                <br>
                                <p>A documentação exigida para Cadastro de Fornecedores é a prevista nos artigos 27 e seguintes da Lei 8.666 de 21.06.93, e suas alterações:</p>

                                <div class="text-center">
                                    <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                </div>
                                <br>

                                <!-- Accordion 01 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item001">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse0" aria-expanded="false" aria-controls="flush-collapse0">
                                            <strong> <b> Quanto à habilitação jurídica (inciso I, art. 27 da Lei 8.666/93)</b> </strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapse0" class="accordion-collapse collapse" aria-labelledby="Item001" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <ol type="a" class="Texto">
                                                <li> Documento de identidade (quando pessoa física);</li>
                                                <li> Prova de Inscrição do Cadastro de Pessoa Física/Jurídica (cartão CPF/CNPJ);</li>
                                                <li> Registro comercial/Ato constitutivo/Estatuto/Contrato social em vigor, devidamente registrado e com última alteração, quando houver;</li>
                                                <li> Cédula de Identidade do representante legal e ou sócios da sociedade empresária;</li>
                                            </ol>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 01 -->

                                <!-- Accordion 02 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item002">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse01" aria-expanded="false" aria-controls="flush-collapse01">
                                            <strong> <b>Quanto à qualificação técnica (inciso II, art. 27 da Lei 8.666/93)</b> </strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapse01" class="accordion-collapse collapse" aria-labelledby="Item002" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <ol type="a" class="Texto">
                                                <li> Registro ou Inscrição na entidade profissional competente.</li>
                                                <li> Comprovação de aptidão para desempenho de atividade pertinente ao objeto e atestados fornecidos por pessoas jurídicas de direito público ou privado, devidamente certificado pela entidade profissional competente;</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 02 -->

                                <!-- Accordion 03 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item003">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse02" aria-expanded="false" aria-controls="flush-collapse02">
                                            <strong> <b>Quanto à qualificação econômico-financeira (inciso III, art. 27 da Lei 8.666/93)</b> </strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapse02" class="accordion-collapse collapse" aria-labelledby="Item003" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <ol type="a" class="Texto">
                                                <li> Balanço patrimonial e demonstrações contábeis do último exercício social, já exigíveis e apresentados na forma da lei, que comprovem a boa situação financeira da empresa, vedada a sua substituição por balancetes ou balanços provisórios;</li>
                                                <li> Certidão negativa de falência ou concordata expedida pelo distribuidor da sede da pessoa jurídica, ou de execução patrimonial, expedida no domicílio da pessoa física.</li>
                                                <li> Caução em dinheiro ou em títulos da dívida pública, seguro garantia ou fiança bancária.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 03 -->

                                <!-- Accordion 04 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item004">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse03" aria-expanded="false" aria-controls="flush-collapse03">
                                            <strong> <b>Quanto à regularidade fiscal e trabalhista (inciso IV, art. 27 da Lei 8.666/93)</b> </strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapse03" class="accordion-collapse collapse" aria-labelledby="Item004" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <ol type="a" class="Texto">
                                                <li> Certidão Negativa de Débitos junto a Fazenda Municipal;</li>
                                                <li> Certidão Negativa de Débitos junto a Fazenda Estadual;</li>
                                                <li> Certidão Negativa de Débitos relativos aos tributos federais e à Dívida Ativa da União;</li>
                                                <li> Certificado de Regularidade do FGTS;</li>
                                                <li> Certidão Negativa de Débitos trabalhistas junto a Justiça do Trabalho;</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 04 -->
                            </div>
                            <br><br>

                            <!-- Importante -->
                            <div class="ImportanteCaixa">
                                <p class="ImportanteTitulo"> Importante</p>
                                <div class="ImportanteTexto">
                                    <p>Para fins de renovação cadastral, deverão ser apresentados todos os documentos que sofreram alteração desde a época da inscrição inicial até a data da renovação.</p>
                                </div>
                            </div>

                            <br><br><!-- SubTítulo -->
                            <p class="SubTitulo" id="tree">A Certificação de Fornecedores no Governo do Estado do Ceará</p>
                            <hr>

                            <p>A despesa com aquisição e contratação de bens, materiais e serviços pelos órgãos da Administração Pública Estadual são uma das maiores em volume de recursos financeiros, juntamente com a folha de pagamentos dos servidores ativos e inativos. Em razão disso e do seu dever com a sociedade, o Governo do Estado do Ceará tem realizado esforços para aperfeiçoar a política de compras governamentais, adotando os mecanismos mais eficientes de aquisição pública, a exemplo da modalidade de licitação denominada Pregão e da sistemática de compras por Registro de Preços.</p>

                            <p>Por outro lado, é igualmente importante, para a efetividade da política de compras governamentais, contar com parceiros qualificados e conhecedores das demandas de bens, materiais e serviços, de modo que os processos de aquisição sejam cada vez mais céleres, transparentes e economicamente vantajosos para o Estado.</p>

                            <p>Por esta e outras razões, foi instituído o sistema de “Certificado de Registro Cadastral- CRC” regulamentado pelo Decreto Estadual Nº 32.901 de 17/12/2018 que regulamenta no âmbito da Administração Pública Estadual Direta e Indireta, o sistema logístico de suprimentos e dá outras providencias, especificamente Capítulo VI, <strong>art. 22</strong> a 27.</p>

                            <br><br>
                            <center>
                                <h4><strong>CAPÍTULO VI DO CADASTRO DE FORNECEDORES</strong></h4>
                            </center>
                            <br>

                            <!-- Início Accordion -->
                            <div class="accordion accordion-flush" id="AccordionFase03">
                                <center>
                                    <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                </center>
                                <!-- Accordion 01 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item01">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse001" aria-expanded="false" aria-controls="flush-collapse001">
                                            <strong> Art. 22 </strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapse001" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase03">
                                        <div class="accordion-body">
                                            <p>A Seplag é o Órgão Gestor do Cadastro de Fornecedores, e terá, entre outras, as seguintes atribuições:</p>

                                            <ol type="I" class="Texto">
                                                <li> Gerenciar, manter e aperfeiçoar o Cadastro de Fornecedores do Estado;</li>
                                                <li> Desenvolver e implementar sistema de avaliação de fornecedor;</li>
                                                <li> Articular-se com órgãos e entidades de outros níveis de governo e esferas de poder, com vistas a integrar e disciplinar a utilização de banco de dados de empresas inidôneas ou suspensas, para fins de consulta de habilitação em processos licitatórios e celebração de contratos; e</li>
                                                <li> Instituir e disciplinar o procedimento e as competências para apuração de irregularidades cometidas por pessoas físicas e jurídicas nas licitações, fornecimentos ou execuções contratuais no âmbito da Administração Pública Estadual.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 01 -->


                                <!-- Accordion 02 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item01">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse002" aria-expanded="false" aria-controls="flush-collapse002">
                                            <strong> Art. 23 </strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapse002" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase03">
                                        <div class="accordion-body">
                                            <p> O Gestor do Cadastro de Fornecedores será responsável pelo gerenciamento e manutenção dos dados cadastrais dos fornecedores e pela emissão do Certificado de Registro Cadastral (CRC), bem como pela definição, junto com a Procuradoria Geral do Estado, do Regulamento sobre as penalidades aos fornecedores.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 02 -->

                                <!-- Accordion 03 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item01">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse003" aria-expanded="false" aria-controls="flush-collapse003">
                                            <strong>Art. 24</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapse003" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase03">
                                        <div class="accordion-body">
                                            <p>Para o cadastramento de fornecedores e a emissão do CRC, será examinada a documentação relativa à habilitação jurídica, à qualificação técnica e à regularidade fiscal e trabalhista. Parágrafo único. O CRC, emitido por meio do sítio www.portalcompras.ce.gov.br, poderá ser utilizado para substituir a documentação referida no caput, desde que conste a numeração e a validade, no que couber, de cada documento listado no certificado, nos termos do <strong>art. 32</strong>, §§ 2º e 3º, da Lei Federal nº 8.666, de 21 de julho de 1993.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 03 -->

                                <!-- Accordion 03 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item01">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse004" aria-expanded="false" aria-controls="flush-collapse004">
                                            <strong>Art. 25</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapse004" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase03">
                                        <div class="accordion-body">
                                            <p> A regularidade do CRC será condição necessária para celebração e execução de instrumento contratual ou equivalente, decorrente de licitação ou contratação direta para assinatura e ata de registro de preços para conclusão de procedimento de compra eletrônica em sistema do Estado e para pagamento às pessoas físicas e jurídicas que contratarem com a Administração Pública Estadual.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 03 -->

                                <!-- Accordion 04 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item01">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse005" aria-expanded="false" aria-controls="flush-collapse005">
                                            <strong>Art. 26</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapse005" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase03">
                                        <div class="accordion-body">
                                            <p> Os órgãos e entidades deverão informar ao Gestor do Cadastro de Fornecedores, na forma definida por este, as ocorrências de penalidade de fornecedores relativas a licitações, fornecimentos ou execuções contratuais. Parágrafo único. Nos casos de sanções que se estendam às demais Unidades Contratantes ou a toda Administração Pública, os órgãos e entidades deverão enviar para o Gestor do Cadastro de Fornecedores a publicação da penalidade na imprensa oficial.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 04 -->

                                <!-- Accordion 05 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item01">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse006" aria-expanded="false" aria-controls="flush-collapse006">
                                            <strong>Art. 27</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapse006" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase03">
                                        <div class="accordion-body">
                                            <p> A veracidade e a fidelidade dos documentos apresentados para a inscrição no Cadastro de Fornecedores são de responsabilidade dos representantes legalmente constituídos.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 05 -->
                            </div>
                            <br><br>



                            <!-- Saiba Mais -->
                            <div class="SaibaMaisCaixa">
                                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                <div class="SaibaMaisTexto">
                                    <p>O “portal de compras” do Estado do Ceará contém todas as informações referentes ao CRC assim como os acessos aos links relativos aos sistemas de compras eletrônicas do Estado o Ceará no endereço: <a href="https://www.portalcompras.ce.gov.br" target="_blank">https://www.portalcompras.ce.gov.br</a>.</p>
                                </div>
                            </div>
                            <br><br>



                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura01.png" width="600" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura 01: </strong>&nbsp; Portal de Compras – Cadastro de Fornecedores</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Figura 01 - End -->








                            <br><br><br>









                            <!-- SCRIPT LIGHTBOX -->
                            <script>
                                $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                    event.preventDefault();
                                    $(this).ekkoLightbox();
                                });
                                $('#myModal').on('shown.bs.modal', function() {
                                    $('#myInput').trigger('focus')
                                })
                            </script>

                            <!-- FIM SCRIPT LIGHTBOX -->

                            <!-- Botões de navegação -->

                            <div class="text-center">
                                <a href="index.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                                <a href="Topico02.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                            </div>

                            <!-- Fim Botões de navegação -->


                        </div> <!-- FIM DIV col-md-10 -->
                        <div class="col-md-1"></div>
                    </div><!--  FIM ROW -->
                </div><!--  FIM PAGE TITULO -->


            </div> <!-- FIM DIV CONTEINE  -->

        </section>
        <!--FIM SELECTION-->





    </div> <!--  FIM DIV MAIN -->

    <!-- FOOTER -->
    <?php include('layout/footer.php') ?>

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

    <!-- BOTÃO BACK TO TOP -->
    <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

</body>

</html>