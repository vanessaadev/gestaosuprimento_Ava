<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico04';
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
                            <h2 class="Titulo">Controle de Estoque e Ressuprimento de Materiais</h2>
                            <hr>

                            <div class="bd-callout bd-callout-primary">
                                <p><strong>Objetivo:</strong> Compreender a principal atividade do Almoxarifado que é controlar os níveis de estoque para atendimento às necessidades de consumo, assim como as técnicas usuais para identificar o momento e a quantidade de ressuprimento dos estoques de materiais.</p>
                            </div>

                            <br>
                            <p class="SubTitulo" id="top4-one">Razões para manter Estoques e quais os Tipos de Estoque</p>
                            <hr>

                            <p>Uma das variáveis que definem o sucesso ou fracasso de muitas organizações é a gestão de estoques, que é constituída por gestão de materiais, recursos humanos e financeiros. A gestão de estoques permite ao administrador verificar se os estoques estão sendo bem utilizados, bem localizados em relação aos setores que deles utilizam, bem manuseados e bem controlados.</p>
                            <p>Uma boa gestão de estoque obtém importantes ganhos, com eficiência, redução de falhas e custos, rapidez, confiabilidade e capacidade de rastreamento. Devido à complexidade dos processos que a envolvem, dois aspectos da organização são influenciados: a disponibilidade do produto e o custo, ambos com impacto direto no resultado das operações.</p>
                            <p>Portanto é fundamental para qualquer organização, definir uma política de estoque que consistirá em um conjunto de atos diretivos que estabelecem, de forma global e específica, princípios, diretrizes e normas relacionadas ao gerenciamento dos estoques. Em qualquer organização, a preocupação da gestão de estoques está em manter o equilíbrio entre as diversas variáveis componentes do sistema, tais como: custos de aquisição, de estocagem e de distribuição; nível de atendimento das necessidades dos usuários consumidores etc. Logo, gerir estoques economicamente consiste essencialmente na procura da racionalidade e equilíbrio com o consumo, de tal maneira que:</p>

                            <ul class="none Texto">
                                <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> As necessidades efetivas de seus consumidores sejam satisfeitas com mínimo custo e menor risco de falta possível;</li>
                                <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Seja assegurada a seus consumidores e continuidade de fornecimento;</li>
                                <li class="wow fadeInDown" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> O valor obtido pela continuidade de fornecimento deve ser inferior a sua própria falta.</li>
                            </ul>

                            <p>O grande desafio é encontrar o equilíbrio entre essas variáveis, se a política de estoque adotada tenta assegurar a disponibilidade aumentando o estoque, provoca um impacto diretamente nos custos relativos à sua manutenção, como capital e armazenamento; por outro lado, se para cortar os custos os estoques são demasiadamente reduzidos, corre-se o grande risco de não atender as necessidades de consumo mínimas para a organização operar. Mas quando encontramos o equilíbrio os resultados são significativos em termos de gestão.</p>

                            <p><b> A manutenção dos estoques se faz necessária por que existe uma diferença de ritmo ou de taxa entre o fornecimento e a demanda dos materiais necessários à produção de um bem ou serviço, ou seja, se o fornecimento de qualquer item ocorresse exatamente no momento em que fosse demandado, o item nunca necessitaria ser estocado. Por esta razão algumas questões justificam a manutenção dos estoques:</b></p>

                            <!-- Início Accordion -->
                            <div class="accordion accordion-flush" id="AccordionFase01">
                                <center>
                                    <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                </center>
                                <!-- Accordion 01 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item01">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            <strong>Melhorar o Nível de Serviço Oferecido</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>Estoques auxiliam a função de prestação de serviço. Estes podem ser localizados mais próximos aos pontos de demanda e com quantidades mais adequadas. Isto é vantajoso para operações que precisam de disponibilidade imediata ou tempos de ressuprimento pequenos. Para a firma fornecedora, isto significa vantagem competitiva e menores custos de ofertas perdidas, especialmente para produtos particularmente elásticos quanto ao nível de serviço.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 01 -->

                                <!-- Accordion 02 -->
                                <div class="accordion-item Texto">
                                    <h2 class="accordion-header" id="Item02">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <strong>Incentivar Economias na Produção</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>O mínimo custo unitário de produção geralmente ocorre para grandes lotes de produção com o mesmo tamanho. Estoques agem como amortecedores entre oferta e demanda, possibilitando uma produção mais constante, que não oscila com as flutuações de demanda. A força de trabalho pode ser mantida em níveis estáveis e os custos de preparação de lotes podem ser diminuídos.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 02 -->

                                <!-- Accordion 03 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item03">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            <strong>Permitir Economias de Escala nas Compras e no Transporte</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p> Muitas vezes, pequenos lotes de compra são gerados para satisfazer necessidades de produção ou para abastecerem diretamente requisitantes. Isto implica maiores custos de frete, pois não há volume suficiente para obter os descontos oferecidos aos lotes maiores. Entretanto, uma das finalidades do estoque é possibilitar descontos no transporte pelo emprego de grandes lotes equivalentes à capacidade dos veículos e gerar, portanto, fretes unitários menores. De modo similar, menores preços podem ser obtidos na compra de mercadorias com o uso de lotes maiores que as demandas imediatas.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 03 -->
                                <!-- Accordion 04 -->
                                <div class="accordion-item Texto">
                                    <h2 class="accordion-header" id="Item04">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                            <strong>Proteção Contra Alterações nos Preços</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>Bens comprados em mercados abertos têm seus preços ditados pelas curvas de oferta e demanda. Minérios, produtos agrícolas e petróleo são bons exemplos. Compras podem ser antecipadas em função de aumentos previstos nos preços. Isto acaba criando estoques que tem que ser gerenciados.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 04 -->
                                <!-- Accordion 05 -->
                                <div class="accordion-item Texto">
                                    <h2 class="accordion-header" id="Item05">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                            <strong>Proteção Contra Oscilações na Demanda ou no Tempo de Ressuprimento</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="Item05" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>Na maioria das ocasiões, não é possível conhecer com certeza as demandas de produtos ou os tempos de ressuprimento no sistema logístico. Para garantir disponibilidade de produto, deve-se manter um estoque adicional (estoque de segurança). Estoques de segurança são adicionados aos estoques regulares para atender as necessidades de produção ou de consumo.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 05 -->
                                <!-- Accordion 06 -->
                                <div class="accordion-item Texto">
                                    <h2 class="accordion-header" id="Item06">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                            <strong>Proteção Contra Contingências</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="Item06" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p> Greves, incêndios e inundações são apenas algumas das contingências que podem atingir uma organização. Manter estoques de reserva é uma maneira de garantir o fornecimento normal nessas ocasiões.</p>

                                            <p>Quando a taxa de fornecimento excede a taxa de demanda, o estoque aumenta; quando a taxa de demanda excede a taxa de fornecimento, o estoque diminui. Assim, se uma operação conseguir controlar as taxas de fornecimento e de demanda, também conseguirá reduzir seus níveis de estoque. O estoque é criado para compensar diferenças de ritmo entre fornecimento e demanda.</p>

                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 06 -->
                                <!-- Accordion 07 -->
                                <div class="accordion-item Texto">
                                    <h2 class="accordion-header" id="Item07">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                            <strong>Tipos de Estoque</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="Item07" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>O desequilíbrio entre as taxas de fornecimento e de demanda leva a operação a diferentes tipos de estoque ao longo da cadeia produtiva.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 07 -->
                            </div><br><br>

                            <!-- FIM Accordion -->



                            <center>
                                <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </center><br>
                            <div class="Modal">
                                <!-- Titulo Botão Modal -->
                                <div class="text-center">
                                    <a href="#texto" data-bs-toggle="modal" data-bs-target="#texto">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#texto">
                                            Estoque de segurança
                                        </button>
                                    </a>
                                </div>

                                <!-- MODAL -->
                                <div class="modal fade text-center" id="texto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog al-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <strong class="CorVerdeClaroEstado">Estoque de segurança</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p> Compensa as incertezas relacionadas ao fornecimento e demanda. Por exemplo, uma operação de varejo não consegue prever exatamente a demanda, mesmo que tenha uma ideia de seu nível mais provável. Portanto, sempre vai fazer pedidos em maiores quantidades para manter um nível mínimo de estoque para atender sua demanda, caso seja maior do que a esperada. Da mesma forma, os estoques podem compensar as incertezas do fornecimento e a falta de confiabilidade de alguns fornecedores ou empresas de transporte.</p>

                                                <!-- Titulo Figura -->
                                                <img class="img-fluid" src="imagens/Figura11.png" alt="Estoque de Segurança">
                                                <p class="FonteFigura"><strong>Figura 11: </strong>Estoque de Segurança</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Titulo Botão Modal 02-->
                                <div class="text-center">
                                    <a href="#texto2" data-bs-toggle="modal" data-bs-target="#texto2">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#texto2">
                                            Estoque de antecipação
                                        </button>
                                    </a>
                                </div>

                                <!-- MODAL 2 -->
                                <div class="modal fade text-center" id="texto2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog al-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <strong class="CorVerdeClaroEstado">Estoque de antecipação</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p> Utilizado quando as flutuações da demanda são significativas, mas previsíveis, ou quando as variações de fornecimento são significativas, como para produtos de época, por exemplo: ovos de chocolate na páscoa, artigos da ceia de natal, etc.</p>
                                                <img class="img-fluid" src="imagens/Figura12.jpg" alt="Estoque de Antecipação">
                                                <p class="FonteFigura"><strong>Figura 12: </strong> Estoque de Antecipação</p>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 02 - End -->

                                <!-- Titulo Botão Modal 03-->
                                <div class="text-center">
                                    <a href="#texto3" data-bs-toggle="modal" data-bs-target="#texto3">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#texto3">
                                            Estoques de canal (de distribuição)
                                        </button>
                                    </a>
                                </div>

                                <!-- MODAL 3 -->
                                <div class="modal fade text-center" id="texto3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog al-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <strong class="CorVerdeClaroEstado">Estoques de canal (de distribuição)</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Esse tipo de estoque existe quando o material não pode ser transportado instantaneamente entre o ponto de fornecimento e o ponto de demanda. Por exemplo: se uma loja de varejo encomenda itens de um de seus fornecedores, o fornecedor vai alocar estoque para a loja de varejo em seu próprio armazém, embalá-lo, carregá-lo em seus caminhões, transportá-lo para o seu destino e descarregá-lo no estoque do varejista. Do momento em que o estoque é alocado (e, portanto, passa a estar indisponível para qualquer outro consumidor) até o momento em que se torna disponível para a loja de varejo, ele passa a ser estoque no canal de distribuição.</p>
                                                <img class="img-fluid" src="imagens/Figura13.png" alt="Alt da imagem fica aqui">
                                                <p class="FonteFigura"><strong>Figura 13:</strong> Estoque de Canal (de Distribuição)</p>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 03 - End -->
                            </div><br><br>




                            <p>Desta forma, vemos que não existe a possibilidade de ignorar os estoques, pois eles são gerados pelo próprio processo de deslocamento físico dos produtos entre o produtor e o consumidor final e são necessários para suprir eventuais irregularidades que poderão ocorrer durante esse ciclo.</p>

                            <br><br><!-- SubTitulo -->
                            <p class="SubTitulo" id="top4-two">Custos Relacionados aos Estoques</p>
                            <hr>

                            <p>O aumento ou redução nos custos de estocagem e armazenagem, muitas vezes é uma variável que não se coloca de modo muito claro. O fato é que armazenar mercadorias e bens envolve uma série de despesas que, muitas vezes, não são contabilizadas e consideradas por organizações em geral, e podem acarretar tenebrosos prejuízos com os quais os gestores sequer contavam num primeiro momento. Manter produtos parados, além de todos esses custos, envolve um grande risco em algumas situações e ter consciência de tudo isso pode ampliar seus resultados e reduzir as chances de danos para a organização.</p>

                            <p>Em uma primeira análise, podemos distinguir dois tipos de custo decorrentes da existência ou não de estoques: o primeiro é seu próprio custo de manutenção e o segundo, mais ligado ao “custo de oportunidade” sob os olhos da economia, seria o custo da falta de estoques.</p>

                            <div class="FiqueAtentoCaixa">
                                <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                <div class="FiqueAtentoTexto">
                                    <p>O custo de manutenção de estoques é algo caro e cada vez menos desejável. Rotinas logísticas de entrega just-in-time e processos integrados que amarram a produção de bens à venda e escoamento dos mesmos visam cada dia mais, reduzir a necessidade de estoques e inventários físicos. Mercadoria parada, na maioria dos casos, é também dinheiro parado.</p>
                                </div>
                            </div>
                            <br><br>

                            <p><b> Os custos de manutenção de estoques podem ser subdivididos em diferentes classes:</p></b>
                            <!-- Início Accordion -->
                            <div class="accordion accordion-flush" id="AccordionFase02">
                                <center>
                                    <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                </center>
                                <!-- Accordion 01 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item01">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTop4One" aria-expanded="false" aria-controls="flush-collapseTop4One">
                                            <strong>Custo de espaço</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTop4One" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase02">
                                        <div class="accordion-body">
                                            <p> Desde simples contratos de aluguel de armazéns e galpões até cobranças por metro quadrado ocupado, no caso de contratos de terceirização, muitas vezes esses custos também são atrelados aos períodos de tempo a serem utilizados.</p>
                                            <div class="container-collapse">
                                                <div class="content-collapse">
                                                    <img class="img-fluid" src="imagens/Figura14.png" alt="Alt da imagem fica aqui">
                                                    <p class="FonteFigura"><strong>Figura 14:</strong> Representação de Armazenagem</p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 01 -->

                                <!-- Accordion 02 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item01">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTop4Two" aria-expanded="false" aria-controls="flush-collapseTop4Two">
                                            <strong>Custo de capital</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTop4Two" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase02">
                                        <div class="accordion-body">
                                            <p> Refere-se ao capital diretamente investido no estoque, e também do custo de oportunidade de não tê-lo investido em outra aplicação qualquer.</p>
                                            <div class="container-collapse">
                                                <div class="content-collapse">
                                                    <img class="img-fluid" src="imagens/Figura15.png" alt="Alt da imagem fica aqui">
                                                    <p class="FonteFigura"><strong>Figura 15:</strong> Representação de Custo de Capital</p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 02 -->

                                <!-- Accordion 03 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item01">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTop4Tree" aria-expanded="false" aria-controls="flush-collapseTop4Tree">
                                            <strong>Custo de pessoal envolvido</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTop4Tree" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase02">
                                        <div class="accordion-body">
                                            <p> É o custo mensal de toda a mão de obra envolvida em atividades diretamente relacionadas aos estoques, tais como: o pessoal de manuseio, controle e gerenciamento, inclusive encargos trabalhistas.</p>
                                            <div class="container-collapse">
                                                <div class="content-collapse">
                                                    <img class="img-fluid" src="imagens/Figura16.png" alt="Alt da imagem fica aqui">
                                                    <p class="FonteFigura"><strong>Figura 16:</strong> Representação de Custo de Pessoal</p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion 03 -->

                                <!-- Accordion 04 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item01">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTop4Four" aria-expanded="false" aria-controls="flush-collapseTop4Four">
                                            <strong>Custos de equipamento e manutenção</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTop4Four" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase02">
                                        <div class="accordion-body">
                                            <p> São as despesas mensais para manter os estoques, incluindo a depreciação dos equipamentos, maquinários ali utilizados e suas despesas de manutenção.</p>
                                            <div class="container-collapse">
                                                <div class="content-collapse">
                                                    <img class="img-fluid" src="imagens/Figura18.png" alt="Alt da imagem fica aqui">
                                                    <p class="FonteFigura"><strong>Figura 17:</strong> Representação de Custo de Equipamento e Manutenção</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion 04 -->
                                <!-- Accordion 05 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item01">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTop4Five" aria-expanded="false" aria-controls="flush-collapseTop4Five">
                                            <strong>Custo de serviço</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTop4Five" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase02">
                                        <div class="accordion-body">
                                            <p> Enquadram diversas taxas cobradas por serviços de gestão das mais variadas naturezas, além de impostos decorrentes da armazenagem, uso do espaço, e também seguros da carga ali mantida.</p>
                                            <div class="container-collapse">
                                                <div class="content-collapse">
                                                    <img class="img-fluid" src="imagens/Figura17.jpg" alt="Alt da imagem fica aqui">
                                                    <p class="FonteFigura"><strong>Figura 18:</strong> Representação de Custo de Serviço</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion 05 -->
                                <!-- Accordion 06 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item01">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTop4Six" aria-expanded="false" aria-controls="flush-collapseTop4Six">
                                            <strong>Custo de Pedido</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTop4Six" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase02">
                                        <div class="accordion-body">
                                            <p> Cada vez que uma requisição ou pedido é emitido, incorrem custos fixos e variáveis referentes a esse processo. Os custos fixos são os associados aos salários do pessoal envolvido na emissão dos pedidos e não são afetados pela política existente de estoque. Os custos variáveis consistem nas fichas de pedidos, nos processos de enviar esses pedidos aos fornecedores, bem como todos os recursos necessários para tal procedimento. Portanto, o custo de pedido está diretamente determinado com base no volume das requisições ou pedidos que ocorrem no período.</p>
                                            <div class="container-collapse">
                                                <div class="content-collapse">
                                                    <img class="img-fluid" src="imagens/Figura20.png" alt="Alt da imagem fica aqui">
                                                    <p class="FonteFigura"><strong>Figura 19:</strong> Representação de Custo de Pedido</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion 06 -->
                                <!-- Accordion 07 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item01">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTop4Seven" aria-expanded="false" aria-controls="flush-collapseTop4Seven">
                                            <strong>Custo de risco</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTop4Seven" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase02">
                                        <div class="accordion-body">
                                            <p>Manter estoques pode causar enormes prejuízos. Primeiro, no caso de mercadorias perecíveis, a manutenção de altos estoques pode gerar excesso de produtos para posterior distribuição, gerando sobre-ofertas e fazendo com que esses itens estraguem ou sejam desperdiçados antes de repassados ao consumidor. Riscos ainda afligem aqueles que mantêm produtos de rápida evolução, como celulares – o lançamento de novos modelos pode reduzir o valor de revenda ou mesmo tornar completamente obsoletos produtos estocados em excesso.</p>

                                            <div class="container-collapse">
                                                <div class="content-collapse">
                                                    <img class="img-fluid" src="imagens/Figura21.png" alt="Alt da imagem fica aqui">

                                                </div>
                                                <div class="content-collapse">
                                                    <img class="img-fluid" src="imagens/Figura22.png" alt="Alt da imagem fica aqui">

                                                </div>
                                            </div>
                                            <p class="FonteFigura"><strong>Figura 20:</strong> Representação de Custo de Risco</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion 07 -->
                            </div><br><br>
                            <!-- FIM Accordion -->


                            <!-- Saiba Mais -->
                            <div class="SaibaMaisCaixa">
                                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                <div class="SaibaMaisTexto">
                                    <p>O custo da falta de produtos se associa aos estoques. Ainda que isso possa soar estranho, manter produtos insuficientes em estoque gera, não apenas o custo decorrente da perda de ofertas, mas também custos excedentes decorrentes de requisições fechadas, que não podem ser atendidas por indisponibilidade de produtos para atender pedidos já efetuados em atraso, além do desgaste das relações com o consumidor.</p>
                                </div>
                            </div>




                            <br><br><!-- SubTitulo -->
                            <p class="SubTitulo" id="top4-tree">Tipos de Demanda de Materiais e sua Relação com os Estoques</p>
                            <hr>

                            <p>Os níveis de estoque podem ser controlados, adotando-se diversos tipos de critérios. Se considerarmos a natureza de sua demanda, teremos as seguintes classificações:</p>

                            <!-- Início Accordion -->
                            <div class="accordion accordion-flush" id="AccordionFase04">
                                <center>
                                    <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                </center>
                                <!-- Accordion 01 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item01">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse1" aria-expanded="false" aria-controls="flush-collapse1">
                                            <strong class="CorVerdeClaroEstado">Demanda permanente</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapse1" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase04">
                                        <div class="accordion-body">
                                            <p>Muitos produtos têm ciclo de vida muito longo, de forma que parecem que vão ser comercializados para sempre. Exemplo: Maisena e Nescau, entre outros. Estoques para demanda permanente são aqueles que requerem ressuprimento contínuo ou periódico. O controle de estoques orienta-se para:</p>
                                            <ol class="Texto">
                                                <li class="wow fadeInDown" data-wow-delay="0.3s"> A previsão de demanda de cada item do inventário,</li>
                                                <li class="wow fadeInDown" data-wow-delay="0.6s"> A determinação de quando o ressuprimento deve ser efetuado e</li>
                                                <li class="wow fadeInDown" data-wow-delay="0.9s"> Definir o tamanho do lote de ressuprimento.</li>
                                            </ol>

                                            <!-- Titulo Figura -->
                                            <div class="text-center">
                                                <a href="imagens/Figura23.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                                    <img class="img-fluid" src="imagens/Figura23.png" alt="Alt da imagem fica aqui">
                                                </a>
                                                <p class="FonteFigura"><strong>Figura 21: Representação de Produtos de Demanda Permanente</strong></p>
                                            </div>

                                            <!-- Imagem 01 - MODAL -->
                                            <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <img class="img-fluid" src="imagens/Figura23.png" alt="Alt da imagem fica aqui">
                                                        </div>
                                                        <div class="modal-footer text-center">
                                                            <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Figura 01 - End -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 01 -->

                                <!-- Accordion 02 -->
                                <div class="accordion-item Texto">
                                    <h2 class="accordion-header" id="Item02">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
                                            <strong class="CorVerdeClaroEstado">Demanda sazonal (somente em determinada época do ano)</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapse2" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase04">
                                        <div class="accordion-body">
                                            <p> Grande número de produtos tem tal sazonalidade na demanda que não podem ser controlados da mesma forma que produtos com demanda permanente. A administração dos níveis de estoque de produtos com elevada sazonalidade está associada com a previsão acurada do nível de demanda futuro. É necessário não apenas uma previsão precisa da quantidade a ser requisitada, mas também da época na qual ocorrerá o pico. Assim, o estoque acompanha a previsão, estando sujeito aos erros intrínsecos à mesma.</p>

                                            <!-- Titulo Figura -->
                                            <div class="text-center">
                                                <a href="imagens/Figura24.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                                    <img class="img-fluid" src="imagens/Figura24.png" alt="Alt da imagem fica aqui">
                                                </a>
                                                <p class="FonteFigura"><strong>Figura 22:</strong> Representação de Produtos de Demanda Sazonal</p>
                                            </div>

                                            <!-- Imagem 01 - MODAL -->
                                            <div class="modal fade text-center" id="Imagem02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <img class="img-fluid" src="imagens/Figura24.png" alt="Alt da imagem fica aqui">
                                                        </div>
                                                        <div class="modal-footer text-center">
                                                            <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Figura 01 - End -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 02 -->

                                <!-- Accordion 03 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item03">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapse3">
                                            <strong class="CorVerdeClaroEstado">Demanda irregular</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapse3" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase04">
                                        <div class="accordion-body">
                                            <p> Alguns produtos têm comportamento tão irregular que a projeção de suas demandas é muito difícil. Um dos melhores exemplos de irregularidade no comportamento da demanda nos últimos anos é o caso de automóveis pequenos versus grandes. O controle de estoques para produtos com demanda irregular está amarrado com a previsão precisa de consumo, principalmente quando o comportamento irregular está combinado com tempos de ressuprimento muito longos ou pouco flexíveis.</p>

                                            <!-- Titulo Figura -->
                                            <div class="text-center">
                                                <a href="imagens/Figura25.png" data-bs-toggle="modal" data-bs-target="#Imagem03">
                                                    <img class="img-fluid" src="imagens/Figura25.png" alt="Alt da imagem fica aqui">
                                                </a>
                                                <p class="FonteFigura"><strong>Figura 23:</strong> Representação de Produtos de Demanda Irregular</p>
                                            </div>

                                            <!-- Imagem 01 - MODAL -->
                                            <div class="modal fade text-center" id="Imagem03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <img class="img-fluid" src="imagens/Figura25.png" alt="Alt da imagem fica aqui">
                                                        </div>
                                                        <div class="modal-footer text-center">
                                                            <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Figura 01 - End -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion 03 -->

                                <!-- Accordion 04 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item04">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                                            <strong class="CorVerdeClaroEstado">Demanda em declínio</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase04">
                                        <div class="accordion-body">
                                            <p>Algum dia, a demanda de um produto acaba e, então, um produto novo vem em seu lugar. O declínio da demanda é geralmente gradual e os estoques excedentes podem ser diminuídos pouco a pouco. Para alguns produtos, entretanto, o final ocorre subitamente, mas de modo planejado. Caso típico é o de peças de reposição para produtos com vida útil planejada ou produtos que não são vendidos há muito tempo, mas que ainda estão em uso.</p>
                                            <p>O problema aqui se concentra muito menos em prever a demanda por peças de reposição e mais em planejar quando e quanto deve ser estocado período a período (semana, mês ou ano). Deve-se, entretanto, prever a demanda para todos os períodos até o final das vendas.</p>

                                            <!-- Titulo Figura -->

                                            <div class="container-collapse">
                                                <div class="content-collapse">
                                                    <a href="imagens/Figura26.png" data-bs-toggle="modal" data-bs-target="#Imagem04">
                                                        <img class="img-fluid" src="imagens/Figura26.png" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"></p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem04" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura26.png" alt="Alt da imagem fica aqui">
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <p class="TituloFigura"></p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Figura 01 - End -->

                                                <!-- Titulo Figura -->

                                                <div class="content-collapse">
                                                    <a href="imagens/Figura27.png" data-bs-toggle="modal" data-bs-target="#Imagem05">
                                                        <img class="img-fluid" src="imagens/Figura27.png" alt="Alt da imagem fica aqui">
                                                    </a>

                                                </div>
                                            </div>

                                            <!-- Imagem 01 - MODAL -->
                                            <div class="modal fade text-center" id="Imagem05" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <img class="img-fluid" src="imagens/Figura27.png" alt="Alt da imagem fica aqui">
                                                        </div>
                                                        <div class="modal-footer text-center">
                                                            <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <!-- Figura 01 - End -->
                                        </div>
                                        <p class="FonteFigura"><strong>Figura 24 e 25:</strong> Representação de Produtos de Demanda em Declínio</p>
                                    </div>
                                </div>

                                <!-- FIM Accordion 04 -->

                                <!-- Accordion 05 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item05">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                                            <strong class="CorVerdeClaroEstado">Demanda derivada</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="Item05" data-bs-parent="#AccordionFase04">
                                        <div class="accordion-body">
                                            <p> Para alguns produtos, sua demanda é conhecida se a demanda dos produtos acabados puder ser determinada. Por exemplo, a partir da previsão de demanda de automóveis novos pode-se calcular facilmente a necessidade de pneus. A demanda por pneus é dita derivada.</p>
                                            <p>O estoque necessário para atender uma demanda derivada também é derivado. Quanto e quando comprar ou produzir pode ser determinado com precisão a partir da demanda por produtos acabados. Ela serve como base para efetuar a programação final de compras.</p>

                                            <!-- Titulo Figura -->
                                            <div class="text-center">
                                                <a href="imagens/Figura28.png" data-bs-toggle="modal" data-bs-target="#Imagem06">
                                                    <img class="img-fluid" src="imagens/Figura28.png" alt="Alt da imagem fica aqui">
                                                </a>
                                                <p class="FonteFigura"><strong>Figura 26:</strong> Representação de Produtos de Demanda Derivada</p>
                                            </div>

                                            <!-- Imagem 01 - MODAL -->
                                            <div class="modal fade text-center" id="Imagem06" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <img class="img-fluid" src="imagens/Figura28.png" alt="Alt da imagem fica aqui">
                                                        </div>
                                                        <div class="modal-footer text-center">
                                                            <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Figura 01 - End -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion 05 -->

                            </div><br><br>
                            <!-- FIM Accordion -->


                            <br><br><!-- SubTitulo -->
                            <p class="SubTitulo" id="top4-four">Rotatividade dos Estoques</p>
                            <hr>

                            <p>A Rotatividade de Estoque é um tipo de indicador que demonstra o desempenho de um Estoque. A Rotatividade de Estoque serve para medir, de uma forma padronizada, a qualidade de um estoque. O indicador de rotatividade de estoque pode ser aplicado a qualquer tipo de estoque, independente da sua complexidade ou tamanho.</p>

                            <p>O resultado apresentado pela rotatividade de estoque representa a quantidade de vezes que cada um dos itens, foi renovado dentro de um determinado período. Dizer que a rotatividade de um estoque foi 1, durante um mês, significa dizer que tudo que tinha no estoque foi consumido e o estoque foi reposto por produtos novos. O cálculo da rotatividade de estoque é bastante simples, durante um determinado período, somamos tudo o que foi consumido, então, divide pela média de estoque.</p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura29.png" data-bs-toggle="modal" data-bs-target="#Imagem07">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura29.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura 27:</strong> Representação do Cálculo Médio de Rotatividade dos Estoques</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem07" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura29.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End -->


                            <p>Assim, se tivermos em média um estoque de 2 mil unidades, consumimos mil e compramos outras mil, tivemos um giro de 0,5; isto é, metade do estoque foi renovada. O resultado final do giro de estoque deve ser interpretado caso a caso, porém, de uma forma geral, podemos dizer que quanto maior for o giro, melhor.</p>
                            <p>Vejamos um exemplo:</p>

                            <!-- Exemplo -->
                            <div class="ExemploCaixa">
                                <p class="ExemploTitulo"> Exemplo</p>
                                <div class="ExemploTexto">

                                    <ol type="1)" class="Texto">
                                        <li> Imagine um estoque de bebidas, com um único tipo de bebida. Vamos supor que no início do mês, tenhamos 10 garrafas em estoque.</li>
                                        <li> Durante alguns dias, 5 garrafas foram consumidas.</li>
                                        <li> Notando a diminuição do nível de estoque, o Fornecedor foi acionado e foram compradas mais 10 garrafas.</li>
                                        <li> O mês continuou e mais 5 garrafas foram vendidas, totalizando 10 vendas no mês.</li>
                                    </ol>

                                    <p>Dessa forma, o mês terminou com 10 garrafas no estoque. Como o mês iniciou com 10 garrafas e terminou com 10 garrafas, podemos dizer que a média de estoque neste mês foi de 10 garrafas.</p>

                                    <p>Sendo assim, podemos calcular o Giro de Estoque como sendo o consumo médio do período dividido pela média de estoque, isto é:</p>

                                    <p> Período = 1 (mês),</p>

                                    <table class="table table-bordered text-center" style="width: 50% !important; margin: auto; border-color: #44833d; margin-bottom: 25px">
                                        <tbody>
                                            <tr>
                                                <td>Consumo médio =</td>
                                                <td class="text-center">5 + 5 / 1<br></td>
                                                <td>= 10</td>
                                            </tr>
                                            <tr>
                                                <td>Média de Estoque =</td>
                                                <td class="text-center">10 + 10 / 2<br></td>
                                                <td>= 10</td>
                                            </tr>
                                        </tbody>
                                    </table>



                                </div>
                            </div>
                            <br>

                            <!-- Fique Atento -->
                            <div class="FiqueAtentoCaixa">
                                <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                <div class="FiqueAtentoTexto">
                                    <p>10 dividido por 10, que é igual a 1. Nesse caso, a Rotatividade de Estoque igual a 1 significa que todos os produtos foram renovados 1 vez durante o mês. Se o número fosse menor do que 1, teríamos uma indicação de que alguns dos produtos que iniciaram o mês na prateleira, ainda estão lá.</p>
                                </div>
                            </div>
                            <br>

                            <p>Um fator que costuma gerar dúvidas ao se calcular a rotatividade de estoque é o cálculo da média de estoque. Nesse caso, a média de estoque é calculada pela média entre o estoque no início e no final do mês, ou simplesmente somando o estoque percebido no início com o estoque do fim do período e o resultado, se divide por 2.</p>

                            <!-- Importante -->
                            <div class="ImportanteCaixa">
                                <p class="ImportanteTitulo"> Importante</p>
                                <div class="ImportanteTexto">
                                    <p>Nem sempre o estoque é formado por um único tipo de produto, muitas vezes, um estoque é composto por materiais pequenos e grandes, caros e baratos, ai fica a dúvida: como calcular a rotatividade do estoque total? Nesse caso, podemos calcular de várias formas, uma delas é ao invés de se utilizar a quantidade de produtos, utilizar o custo total, assim, o cálculo da rotatividade de estoque fica sendo o custo total do consumo dividido pela média do custo do estoque.</p>
                                </div>
                            </div><br><br>



                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura30.png" data-bs-toggle="modal" data-bs-target="#Imagem08">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura30.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura 28:</strong> Representação do Cálculo Total de Rotatividade dos Estoques </p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem08" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura30.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End -->


                            <p>Outras questões também devem ser consideradas quando se usa a rotatividade de estoque como um indicador padrão para a gestão de estoques:</p>

                            <ol type="a)" class="Texto">
                                <li class="wow fadeInDown" data-wow-delay="0.3s"> A disponibilidade de capital para investir em estoque é que vai determinar a taxa de rotatividade-padrão.</li>
                                <li class="wow fadeInDown" data-wow-delay="0.6s"> Não se devem utilizar taxas de rotatividade iguais para materiais de preços diferenciados. Deve-se usar de preferência a classificação ABC, indicando cada classe com seu índice; se não for suficiente, deve ser subdividida em D, E etc.;</li>
                                <li class="wow fadeInDown" data-wow-delay="0.9s"> Baseado na política da organização, no planejamento das operações e na previsão de consumo, deve ser determinada a rotatividade que atenda às necessidades ao menor custo total;</li>
                                <li class="wow fadeInDown" data-wow-delay="1.3s"> Deve ser estabelecida uma periodicidade para comparação entre a rotatividade padrão e a rotatividade real.</li>
                            </ol>

                            <p>Dentre as tantas vantagens de se ter um estoque com alta rotatividade, podemos citar:</p>

                            <ol type="a)" class="Texto">
                                <li class="wow fadeInDown" data-wow-delay="0.3s"> O produto não envelhece na prateleira.</li>
                                <li class="wow fadeInDown" data-wow-delay="0.6s"> Não precisa de muito espaço para armazenamento.</li>
                                <li class="wow fadeInDown" data-wow-delay="0.9s"> O pagamento ao Fornecedor é fracionado.</li>
                                <li class="wow fadeInDown" data-wow-delay="1.3s"> Em caso de acidente, incêndio ou roubo, perde-se menos; etc.</li>
                            </ol>

                            <br><br><!-- SubTitulo -->
                            <p class="SubTitulo" id="top4-five">Ressuprimento dos Estoques</p>
                            <hr>

                            <p>Diante dos diversos métodos existentes para o controle de estoques, os mais tradicionalmente utilizados são:</p>

                            <div class="img-fluid wow fadeInLeft">

                                <p>Métodos de empurrar estoques (Push): Um método popular de gestão de estoque, especialmente quando há mais de um depósito no sistema de distribuição, é alocar estoques aos armazéns conforme a necessidade esperada nos mesmos. Este enfoque é particularmente vantajoso quando os lotes econômicos de produção ou compra são maiores que as necessidades de curto prazo dos depósitos. As questões básicas que o método deve responder são:</p>

                                <ul class="none Texto">
                                    <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Quanto estoque deve ser enviado para cada depósito?</li>
                                    <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Como alocar as sobras do balanço entre oferta (produção) e demanda entre os diversos armazéns?</li>
                                </ul>

                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura31.png" data-bs-toggle="modal" data-bs-target="#Imagem9">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura31.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura"><strong>Figura 29:</strong> Representação da Produção Empurrada</p>
                                </div>

                                <!-- Imagem 01 - MODAL -->
                                <div class="modal fade text-center" id="Imagem9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura31.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 01 - End -->

                                <p>Método de puxar estoques (Pull): Pode-se manter controle mais apurado dos estoques se cada local de armazenagem for tratado separadamente dos outros. Apenas o estoque necessário para atender a demanda daquele ponto precisa ser mantido. Assim, as quantidades mantidas podem ser menores no método de puxar estoques do que no método de empurrar.</p>
                            </div>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura32.png" data-bs-toggle="modal" data-bs-target="#Imagem10">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura32.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura 30:</strong> Representação da Produção Puxada</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura32.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End -->

                            <!--INÍCIO CAIXA CINZA -->
                            <section id="pt2">
                                <div class="bg-cinzaAzul container-fluid main-content">
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10">
                                            <p class="caixa">
                                            <h4 class="wow fadeInLeft" data-wow-delay="0.6s">
                                                <p>O nosso interesse neste curso está focalizado no método de puxar estoques sendo o mais adequado para a atividade pública, uma vez que os armazéns na Administração Pública não são Centros de Distribuição e nem esta atua como canal de distribuição de qualquer fabricante.</p>

                                                <p>Nesse contexto a Administração Pública é o cliente e faz as suas “Ordens de Compras” com base no “<strong>Planejamento de Compras no Sistema de Registro de Preço</strong>” o qual veremos com mais detalhes no item 4.5.4 adiante.</p>
                                            </h4>
                                            </p>
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                </div>
                            </section>
                            <!--INÍCIO CAIXA CINZA -->
                            <br><br>



                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura33.png" data-bs-toggle="modal" data-bs-target="#Imagem11">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura33.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura 31:</strong> Comparativo das Produções Empurradas e Puxadas</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura33.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End -->

                            <!-- Importante -->
                            <div class="ImportanteCaixa">
                                <p class="ImportanteTitulo"> Importante</p>
                                <div class="ImportanteTexto">
                                    <p>Então dois fatores são determinantes para um bom sistema de controle a partir do método de puxar estoque, são eles: o estoque mínimo e o tempo de ressuprimento.</p>
                                </div><br><br>

                                <!-- Início Accordion -->
                                <div class="accordion accordion-flush" id="Accordion02">
                                    <center>
                                        <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                    </center>
                                    <!-- Accordion 01 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item01">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseUm" aria-expanded="false" aria-controls="flush-collapseUm">
                                                <strong>Estoque Mínimo - EMIN</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseUm" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#Accordion02">
                                            <div class="accordion-body">

                                                <p>A determinação do estoque mínimo é uma das mais importantes informações para a administração do estoque. Essa importância está diretamente ligada ao grau de imobilização financeira da organização. O estoque mínimo, também chamado de estoque de segurança, por definição, é a quantidade mínima que deve existir em estoque, que se destina a cobrir eventuais atrasos no ressuprimento, objetivando a garantia do funcionamento ininterrupto e eficiente das operações.</p>

                                                <p>Entre as causas que ocasionam essas faltas, podemos citar:</p>

                                                <ul class="none Texto">
                                                    <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Oscilação de consumo,</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Oscilação nas épocas de aquisição (atraso no tempo de reposição),</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Variação na qualidade, quando o controle de qualidade rejeita um lote,</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Remessas por parte do fornecedor, divergentes do solicitado,</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Diferenças de estoque.</li>
                                                </ul>

                                                <p>A importância do estoque mínimo é a chave para o adequado estabelecimento do ponto de pedido. De maneira utópica, o estoque mínimo poderia ser tão alto, que jamais haveria, para todas as finalidades práticas, ocasião de falta de material em estoque.</p>

                                                <p>Entretanto, desde que, em média, a quantidade de material representada pela margem de segurança não seja usada e, portanto, torne-se permanente no estoque, a armazenagem e os outros custos seriam elevados. E, ao contrário, estabelecer uma margem de segurança demasiado baixa acarretaria custos de ruptura, que são os custos de não possuir os materiais disponíveis quando necessários.</p>

                                                <p>O estabelecimento de uma margem de segurança ou estoque mínimo é o risco que a organização está disposta a assumir com relação à ocorrência de falta de estoque. No item 4.4.3 veremos alguns métodos de cálculo do estoque mínimo.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fim Accordion 01 -->

                                    <!-- Accordion 02 -->
                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item02">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseDois" aria-expanded="false" aria-controls="flush-collapseDois">
                                                <strong>Tempo de Ressuprimento TR</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseDois" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#Accordion02">
                                            <div class="accordion-body">
                                                <p>É uma das informações básicas para calcular o estoque mínimo, o tempo de ressuprimento é o tempo gasto desde a verificação de que o estoque precisa ser reposto até a chegada efetiva do material no almoxarifado. Esse tempo pode ser dividido em três partes:</p>

                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura34.png" data-bs-toggle="modal" data-bs-target="#Imagem12">
                                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura34.png" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong>Figura 32:</strong> Representação Tempo de Ressuprimento</p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura34.png" alt="Alt da imagem fica aqui">
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Figura 01 - End -->

                                                <ul class="none Texto">
                                                    <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Tempo de emissão do pedido: É o tempo que leva desde a emissão do pedido de compra até ele chegar ao fornecedor.</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Tempo de preparação do pedido: É o tempo que leva desde o fornecedor fabricar os produtos, separar os produtos, emitir faturamento até deixá-los em condições de serem transportados.</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Tempo de transporte: É o tempo que leva da saída do fornecedor até o recebimento do material no almoxarifado.</li>
                                                </ul><br>

                                                <!-- Saiba Mais -->
                                                <div class="SaibaMaisCaixa">
                                                    <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                                    <div class="SaibaMaisTexto">
                                                        <p>Em virtude de sua grande importância, o tempo de ressuprimento deve ser determinado de modo mais realista possível, pois as variações ocorridas durante esse tempo podem alterar toda a estrutura do sistema de estoque. Também deve ser observado que o tempo de ressuprimento deve ser estimado proporcional ao consumo, ou seja, se o consumo for mensal e o tempo de ressuprimento for em dias este deve ser fracionado tendo como denominador a base mensal.</p>
                                                    </div>
                                                </div><br><br>



                                                <!-- Exemplo -->
                                                <div class="ExemploCaixa">
                                                    <p class="ExemploTitulo"> Exemplo</p>
                                                    <div class="ExemploTexto">
                                                        <p>Consumo Médio em Meses e Tempo de Ressuprimento em 45 dias, então:</p>
                                                        <center>
                                                            <p>TR = 45/30.<br>TR = 1,5.</p>
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fim Accordion 02 -->

                                    <!-- Accordion 03 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item03">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTres" aria-expanded="false" aria-controls="flush-collapseTres">
                                                <strong>Métodos de Cálculo do Estoque Mínimo</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTres" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#Accordion02">
                                            <div class="accordion-body">

                                                <br>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <p><strong>a) Fórmula Simples:</strong></p>

                                                        <p><strong>EMIN = C x K</strong><br> onde,<br> <strong>EMIN = Estoque mínimo</strong></p>

                                                        <p>C = Consumo médio mensal</p>

                                                        <p>K = Fator de segurança arbitrário com o qual se deseja garantia contra um risco de ruptura.</p>

                                                        <p>Como foi dito o fator K é arbitrário ele é proporcional ao grau de atendimento desejado para o item. Por exemplo: se quisermos que determinado material tenha um grau de atendimento de 90%, ou seja, queremos uma garantia de que somente 10% das vezes o estoque deste material esteja a zero, sabendo que o consumo mensal é 60 unidades, o estoque mínimo será:</p>

                                                        <p><strong>EMIN = 60 x 0,9</strong></p>

                                                        <p><strong>EMIN = 54 unidades</strong></p>

                                                        <br><br>
                                                        <p><strong>b) Método da porcentagem de consumo:</strong></p>

                                                        <p>Esse método considera os consumos passados, e são medidos em uma tabela de distribuição acumulativa da seguinte maneira:</p>

                                                        <p>&nbsp;&nbsp;b.1) O consumo diário do ano anterior de determinado material foi de 90, 80, 70, 65, 60, 50, 40, 30, 20 unidades</p>

                                                        <p>&nbsp;&nbsp;b.2) O número de dias em que ocorreu esse consumo foram: 4, 8,12, 28, 49, 80, 110, 44 e 30 respectivamente.</p>



                                                        <table class="table table-bordered border-success">
                                                            <tbody>
                                                                <tr>
                                                                    <th><b>1 - Consumo diário</b></th>
                                                                    <th><b> 2 - Nº de dias em que ocorreu consumo</b></th>
                                                                    <th><b> 3 - Produto de 1 x 2</b></th>
                                                                    <th><b> 4 - Acumulad</b>o</th>
                                                                    <th><b> 5 - % de acumulação</b></th>
                                                                </tr>


                                                                <tr class="table-linha">
                                                                    <td>90</td>
                                                                    <td>4</td>
                                                                    <td>360</td>
                                                                    <td> 360</td>
                                                                    <td> 2,13%</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>80</td>
                                                                    <td>8</td>
                                                                    <td>640</td>
                                                                    <td>1000</td>
                                                                    <td>5,91%</td>
                                                                </tr>
                                                                <tr class="table-linha">
                                                                    <td>70</td>
                                                                    <td>12</td>
                                                                    <td>840</td>
                                                                    <td>1840</td>
                                                                    <td>10,8%</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>65</td>
                                                                    <td>28</td>
                                                                    <td>1820</td>
                                                                    <td>3660</td>
                                                                    <td>21,63%</td>
                                                                </tr>
                                                                <tr class="table-linha">
                                                                    <td>60</td>
                                                                    <td>49</td>
                                                                    <td>2940</td>
                                                                    <td>6600</td>
                                                                    <td>39,01%</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>50</td>
                                                                    <td>80</td>
                                                                    <td>4000</td>
                                                                    <td>10600</td>
                                                                    <td>62,65%</td>
                                                                </tr>
                                                                <tr class="table-linha">
                                                                    <td>40</td>
                                                                    <td>110</td>
                                                                    <td>4400</td>
                                                                    <td>1500</td>
                                                                    <td>88,65%</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>30</td>
                                                                    <td>44</td>
                                                                    <td>1320</td>
                                                                    <td>16320</td>
                                                                    <td>96,45%</td>
                                                                </tr>
                                                                <tr class="table-linha">
                                                                    <td>20</td>
                                                                    <td>30</td>
                                                                    <td>600</td>
                                                                    <td>16920</td>
                                                                    <td>100,00%</td>
                                                                </tr>
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <td><b> total</b></td>
                                                                    <td><b> 365</b></td>
                                                                    <td><b> Consumo Médio</b></td>
                                                                    <td><b> 46,36</b></td>
                                                                    <td></td>
                                                                </tr>
                                                            </tfoot>

                                                        </table>


                                                        <p>Analisando os dados distribuídos na tabela podemos ver que o consumo médio é aproximadamente de 46 unidades por dia (resultado de 16920/365). Um consumo de 70 unidades por dia só ocorrerá em aproximadamente 10% das vezes. Considerando esse número de peças como consumo máximo, o estoque mínimo seria:</p>

                                                        <p><strong>EMIN = (C. Max - C.Médio) x TR</strong></p>

                                                        <p>Se o TR (tempo de ressuprimento) for de 10 dias, o estoque mínimo para esse caso será:</p>

                                                        <p><strong>EMIN = (70 – 46) x 10</strong></p>

                                                        <p><strong>EMIN = 24 x10 = 240</strong></p>

                                                        <p>Este método só poderá ser aplicado quando o tempo de ressuprimento TR não for variável.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion 03 -->

                                    <!-- Accordion 04 -->
                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item04">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseQuatro" aria-expanded="false" aria-controls="flush-collapseQuatro">
                                                <strong>O Planejamento de Compras e o Sistema de Registro de Preço</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseQuatro" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#Accordion02">
                                            <div class="accordion-body">

                                                <p>A função de suprimentos é essencial e tem por finalidade prover as necessidades de materiais de consumo, planeja-las quantitativamente e satisfaze-las no momento certo e nas quantidades corretas, verificar a efetividade do recebimento e providenciar o armazenamento. Também é fundamental a qualidade dos materiais que devem ser de acordo com as exigências e atender ao propósito a que se destinam. A inadequação de especificações, prazos, desempenho e preços causam transtorno ao processo operacional com atrasos, não atendimento da qualidade, elevação de custos e insatisfação dos consumidores dos materiais.</p>

                                                <p>A função de suprimentos é uma atividade de apoio fundamental ao processo produtivo, suprindo-o com todas as necessidades de materiais. Além dessa atuação primordial, também é um excelente e substancial sistema de redução de custos de uma organização, por meio de negociações de preços, na busca de materiais alternativos e de incessante desenvolvimento de novos fornecedores. A visão moderna de suprimentos está ligada ao sistema logístico como atividades-pares envolvidas em ações estritamente homogêneas, voltada para a finalidade comum de operação efetiva e posição competitiva no cenário.</p>

                                                <p>São objetivos da função de suprimentos:</p>

                                                <ol type="a" class="Texto">
                                                    <li class="wow fadeInDown" data-wow-delay="0.3s"> Permitir continuidade de suprimentos para o perfeito fluxo produtivo.</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.6s"> Coordenar os fluxos com o mínimo de gastos em estoques e adequado ao cumprimento dos programas de produção.</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.9s"> Comprar materiais e produtos aos mais baixos custos, dentro das especificações predeterminadas em qualidade, prazos e preços.</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.3s"> Evitar desperdícios e obsolescência de materiais por meio de avaliação e percepção do mercado fornecedor.</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.6s"> Permitir a organização uma posição de destaque, mediante negociações justas e de credibilidade.</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.9s"> Manter bom relacionamento com fornecedores para garantir contínuo suprimento. </li>
                                                </ol>

                                                <p>O planejamento de compras por intermédio do Sistema de Registro de Preços – SRP trata de um conjunto de procedimentos para seleção de proposta mais vantajosa visando o registro formal de preços para futuras e eventuais contratações de bens, produtos e serviços. O Sistema de Registro de Preço é regulamentado pelo art. 15 da lei federal nº 8.666 de 21 de Junho de 1993 e pelo art. 11 da lei federal nº 10.520 de 17 de julho de 2002.</p>

                                                <p>O SRP é adequado para compra de bens, materiais e serviços que apresentem as seguintes características:</p>

                                                <ul class="none Texto">
                                                    <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Necessitem de contratações frequentes;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Quando for conveniente para administração a contratação com entrega parcelada;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Quando for conveniente para administração a contratação para mais de um órgão ou entidade da Administração Pública.</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Quando pela natureza do objeto não for possível definir previamente o quantitativo exato a ser demandado pela administração.</li>
                                                </ul>

                                                <p>Considerando essas quatro características, é efetuado um único processo licitatório por intermédio do Órgão Central Gestor de Compras, contemplando vários órgãos e entidades do ente federativo, cujo objeto da licitação é um determinado bem, material ou serviço que terá seu preço fixado por um ano com uma estimativa de consumo para esse período, onde os órgão e entidades participantes do registro de preço poderão efetuar suas Ordens de Compra de forma parcelada à medida que lhe convier, sem que necessariamente se obrigue a adquirir o total da quantidade estimada para o período.</p>

                                                <p>O documento que regula essa modalidade de aquisição é a Ata de Registro de preços onde são registrados: o Órgão Gestor os Órgãos e Entidades participantes, a especificação dos bens, materiais ou serviços, os preços unitários, a unidade de medida, as quantidades, a marca, o fornecedor detentor do registro e as condições a serem observadas nas possíveis contratações, conforme as disposições contidas no instrumento convocatório (Edital de Licitação) e as respectivas propostas dos fornecedores licitantes.</p>

                                                <p>Cada Órgão e Entidade participante do Registro de Preço efetuarão seu contrato individualmente pela estimativa registrada na Ata de Registro de Preço e à medida que necessitar do Bem, Material ou Serviço emitirá um documento denominado “Ordem de Compra” para formalizar o quantitativo exato que irá adquirir.</p>

                                                <p>O Órgão Gestor da Ata de Registro de Preço irá monitorar durante o período o saldo da Ata de Registro de Preço apurando a efetividade entre o quantitativo que foi estimado e o que foi realmente adquirido. Assim como negociará durante a vigência da Ata as ocasionais necessidades de realinhamento de preço decorrente de desequilíbrio econômico-financeiro dos contratos.</p>

                                                <p>Evidentemente que para que tal modalidade de aquisição tenha credibilidade junto ao mercado fornecedor, e efetivamente os preços fixados após o processo licitatório sejam preços de mercado configurando assim a aquisição mais vantajosa para a administração pública, algumas premissas tornam-se fundamentais:</p>

                                                <center>
                                                    <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                                </center><br>
                                                <div class="Modal">
                                                    <!-- Titulo Botão Modal -->
                                                    <div class="text-center">
                                                        <a href="#texto1" data-bs-toggle="modal" data-bs-target="#texto1">
                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#texto1">
                                                                Seleção e monitoramento adequado dos fornecedores
                                                            </button>
                                                        </a>
                                                    </div>

                                                    <!-- MODAL -->
                                                    <div class="modal fade text-center" id="texto1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog al-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4><strong> Seleção e monitoramento adequado dos fornecedores</strong></h4>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Por se tratar de compras corporativas onde o volume adquirido é substancial, mesmo que a entrega ocorra de forma parcelada e em vários órgãos e entidades participantes do Registro de Preço. O fornecedor detentor do registro de preço de determinado bem ou material, necessita manter certo nível de estoque para atender eventualmente as Ordens de Compras dos participantes sem que haja risco de descontinuidade nas operações em decorrência de ocasionais faltas de material por parte do fornecedor. Nesse caso é fundamental uma boa elaboração do instrumento convocatório da licitação, considerando o aspecto econômico-financeiro que identifique aqueles fornecedores que possuem investimentos em estoques compatíveis com a demanda estimada. Outra questão é o registro histórico dos fornecimentos anteriores e durante a execução da Ata referente aos quesitos de quantidade e prazo de entrega em conformidade com a Ordem de Compra de forma que se possa estabelecer uma relação entre a capacidade e o nível de atendimento do fornecedor.</p>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- Figura 01 - End -->

                                                    <!-- Titulo Botão Modal 02-->
                                                    <div class="text-center">
                                                        <a href="#texto-2" data-bs-toggle="modal" data-bs-target="#texto-2">
                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#texto-2">
                                                                Bom nível de acerto na previsão de consumo
                                                            </button>
                                                        </a>
                                                    </div>

                                                    <!-- MODAL 2 -->
                                                    <div class="modal fade text-center" id="texto-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog al-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4><strong>Bom nível de acerto na previsão de consumo</strong></h4>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p> A modalidade de Registro de Preço funciona semelhante à operação de ECR - Efficient Customer Response (Resposta Eficiente ao Consumidor) muito comum no setor supermercadista, onde o comprador tem garantido no fornecedor um determinado nível de estoque equivalente à flutuação da sua demanda e efetua a Ordem de Compra somente para uma quantidade que irá consumir em um curto período de tempo. Na verdade o que ocorre é que o estoque está sendo puxado de trás ao longo da Cadeia de Suprimentos onde a maior mobilização de recursos financeiros de capital para investimentos em estoque fica a cargo do fornecedor. Para que isso funcione de forma satisfatória é necessário uma conduta “ganha-ganha” (ganha comprador e ganha fornecedor), favorecendo um relacionamento comercial saudável e de longo prazo, portanto é fundamental que o planejamento de compras seja o mais realista possível com uma variação suportável entre previsão e consumo para que os estoques não fiquem encalhados no armazém do fornecedor fazendo com que a ineficiência de um componente da cadeia seja transferida para outro, não favorecendo uma relação satisfatória e duradoura.</p>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- Figura 02 - End -->

                                                    <!-- Titulo Botão Modal 03-->
                                                    <div class="text-center">
                                                        <a href="#texto-3" data-bs-toggle="modal" data-bs-target="#texto-3">
                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#texto-3">
                                                                Gestão sistemática da Ata de Registro de Preço
                                                            </button>
                                                        </a>
                                                    </div>

                                                    <!-- MODAL 3 -->
                                                    <div class="modal fade text-center" id="texto-3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog al-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4><strong>Gestão sistemática da Ata de Registro de Preço</strong></h4>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p> Por se tratar de uma operação de preço fixado por um período determinado sem a obrigatoriedade de compra por parte do Órgão e Entidade participante, a operação requer o monitoramento sistemático sobre o saldo das Atas de Registro de Preço e o balanceamento entre os saldos de cada participante de forma a remanejar entre estes os saldos remanescentes daqueles que não efetivaram suas previsões para aqueles participantes que se encontram com saldos esgotados. Assim como apurar as distorções significativas entre previsto e realizado de forma a disponibilizar mecanismos para melhorar o planejamento de compras dos participantes e consequentemente melhor o planejamento de compras.</p>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- Figura 03 - End -->
                                                </div><br><br>


                                                <p>Na figura a seguir, encontra-se representado o fluxograma do planejamento de compras no Sistema de Registro de Preço.</p>

                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura35.png" data-bs-toggle="modal" data-bs-target="#Imagem13">
                                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura35.png" alt="Alt da imagem fica aqui">
                                                        <p class="TituloFigura"><strong>Figura 33:</strong> Fluxograma do Planejamento de Compras no Sistema de Registro de Preço</p>
                                                    </a>
                                                </div>
                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura35.png" alt="Alt da imagem fica aqui">
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Figura 01 - End -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fim Accordion 04 -->

                                    <!-- Accordion 05 -->
                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item05">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseCinco" aria-expanded="false" aria-controls="flush-collapseCinco">
                                                <strong>Métodos de Reposição de Estoques</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseCinco" class="accordion-collapse collapse" aria-labelledby="Item05" data-bs-parent="#Accordion02">
                                            <div class="accordion-body">

                                                <p>Uma vez iniciada a Ata de Registro de Preço e os seus respectivos contratos, poderão ser emitidas as Ordens de Compras correspondentes aos pedidos de materiais para estoque por intermédio do método de “puxar estoque”.</p>

                                                <p>a) Estoque para demanda. Um dos sistemas de puxar estoque mais simples e comum é o método de estoque para demanda. Muitos métodos de fácil entendimento, apesar de não serem os teoricamente mais eficientes, são os melhores na prática, pois são sempre bem executados.</p>

                                                <p>A idéia básica do método é manter os níveis de estoque proporcionais à sua demanda.</p>

                                                <p>Procedimentos:</p>

                                                <ol class="Texto">
                                                    <li class="wow fadeInDown" data-wow-delay="0.3s"> Deve-se verificar a duração do tempo de ressuprimento para o item considerado.</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.3s"> Deve-se fazer uma previsão da demanda do item a cada período.</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.3s"> Deve-se adicionar um estoque de segurança para compensar as incertezas da previsão da demanda e do tempo de ressuprimento.</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.3s"> Considerando essas informações projetar o nível de demanda que o estoque deverá cobrir e emitir as Ordens de Compra conforme estas projeções.</li>
                                                </ol>

                                                <p>b) Ponto de Reposição - PR: Conhecido, também, como Método do Estoque Mínimo, objetiva reduzir os custos de manutenção de estoques, mas sem correr o risco de não se atender a demanda. O objetivo é encontrar o nível ótimo de estoques para um determinado produto.</p>

                                                <p>Para isso, é necessário que o estoque esteja devidamente controlado e que determine o ponto de reposição.</p>

                                                <p>A finalidade do ponto de reposição é iniciar o processo de ressuprimento com segurança suficiente para que não ocorra a falta do material. O PR é calculado multiplicando-se a taxa de consumo pelo tempo de ressuprimento.</p>

                                                <p>Pode ser determinado pela seguinte fórmula:</p>

                                                <p>PR = C x TR + EMIN</p>

                                                <p>Onde: PR = Ponto de Reposição.</p>

                                                <p>C = Consumo Médio Mensal.</p>

                                                <p>TR = Tempo de Ressuprimento</p>

                                                <p>EMIN = Estoque Mínimo.</p>

                                                <p>Procedimentos:</p>

                                                <p>1) Identificar o Estoque Total ET: ET = Estoque Físico + Saldo de Fornecimento + Estoque em Inspeção</p>

                                                <p>2) Calcular o Estoque Mínimo (usando a fórmula simples): EMIN = C x K</p>

                                                <p>Onde:</p>

                                                <p>C = Consumo Médio</p>

                                                <p>K = Fator de segurança proporcional ao grau de atendimento desejado com relação ao Consumo Médio em percentual.</p>

                                                <p>3) Estimar o TR com base na média de tempo de atendimento da série de Ordens de Compra passadas.</p>

                                                <p>4) Aplicar a fórmula do PR.</p>

                                                <p>5) Monitorar o nível de Estoque Total e quando o ET atingir o PR efetuar a Ordem de Compra com o quantitativo resultante da fórmula.</p>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fim Accordion 05 -->

                                </div><br><br>

                                <!-- FIM Accordion -->

                                <br><br><!-- SubTitulo -->
                                <p class="SubTitulo" id="top4-six">Recebimento de Materiais</p>
                                <hr>

                                <p>Até o momento neste curso tivemos a oportunidade de estudar várias questões inerentes à gestão de materiais de consumo, primeiramente estudamos a certificação de fornecedores e sua importância na determinação do nível de produção de bens ou serviços de uma organização, passando pela diferenciação entre material de consumo e material permanente tomando como referência inicial o critério da durabilidade. Estudamos também a classificação e catalogação de materiais que possibilita, a partir da caracterização dos materiais, a padronização, simplificação e especificação de forma que estes sejam individualizados facilitando sua aquisição, recebimento, manejo e aplicação. Agora encerrando o ciclo de estudos de controle de estoque e ressuprimento estudando a atividade de recebimento de materiais de forma que possamos compreender a sua importância como um ponto de controle para avaliação da qualidade de atendimento dos fornecedores, no tocante a prazo, qualidade e volume de pedido.</p>

                                <p>Em termos práticos o processo de recebimento de materiais e bens pode ser subdividido em 3 atividades: agendamento de recebimento, recebimento de materiais e bens e regularização do recebimento.</p>

                                <!-- SubSubTitulo -->
                                <p class="SubSubTitulo">Agendamento de Recebimento</p>
                                <hr>

                                <!-- Importante -->
                                <div class="ImportanteCaixa">
                                    <p class="ImportanteTitulo"> Importante</p>
                                    <div class="ImportanteTexto">
                                        <p>Toda e qualquer atividade mesmo a mais simples que possa parecer é mais bem executada quando é antecipadamente planejada. O recebimento de materiais é um ponto crítico de controle por que é o momento em que a organização atesta o aceite dos materiais que foram pedidos ao fornecedor e a partir deste aceite será efetuado o pagamento ao mesmo. Além do mais, planejar essa atividade é fundamental por se tratar do início do ciclo operacional do almoxarifado, e nesse momento qualquer problema, que não seja prontamente resolvido, poderá comprometer as atividades seguintes na boa gestão do almoxarifado.</p>
                                    </div>
                                </div>




                                <br><p>
                                    <b> No planejamento do recebimento são importantes que sejam asseguradas as seguintes etapas:</b>
                                </p>

                                <p class="wow fadeInDown" data-wow-delay="0.3s"><strong class="CorVerdeClaroEstado"><i></i>a) Configuração da área de recebimento:</strong> O almoxarifado geralmente é um setor muito requisitado por outros departamentos da organização e por isso deve operar com um alto nível de eficiência para que não haja pendências de suprimento que comprometam a operação de outros setores. Por se tratar de um setor de apoio operacional, a prioridade do almoxarifado sempre será atender as solicitações de consumo com um alto nível de serviço e para que isso aconteça os materiais deverão antecipadamente estar armazenados de forma organizada, com rápida localização e acesso facilitado. Dessa forma, na configuração do armazém, é imprescindível que tenha delimitada uma área exclusiva para o recebimento para que durante esse processo não haja interferência na atividade principal do almoxarifado que é atender as requisições de consumo de material.</p>

                                <p class="wow fadeInDown" data-wow-delay="0.3s">É muito difícil estabelecer uma fórmula para delimitar o tamanho adequado da área de recebimento devido à concorrência cada vez maior com a disponibilidade para área de armazenagem. Mais adiante nesta disciplina, quando estudarmos especificamente o leiaute do armazém voltaremos a tratar melhor esta questão.</p>

                                <p class="wow fadeInDown" data-wow-delay="0.3s"> <strong class="CorVerdeClaroEstado"><i></i>b) Definição da capacidade de recebimento:</strong> Delimitada uma área de recebimento, já se pode saber o quanto é possível descarregar de uma só vez para que seja efetuada a inspeção de recebimento. É recomendável que esta área seja dividida em quadrantes, facilmente identificada por numeração seqüencial, visando facilitar o controle dos volumes inspecionados, muitas vezes a carga é menor que a área delimitada, ou pode-se receber cargas de várias origens em um mesmo descarregamento. A divisão em quadrantes ajuda no sequenciamento da operação e na divisão de trabalho do pessoal envolvido.</p>

                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura36.png" data-bs-toggle="modal" data-bs-target="#Imagem14">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura36.png" alt="Alt da imagem fica aqui">
                                        <p class="TituloFigura"><strong>Figura 34:</strong> Representação da Definição da Capacidade de Recebimento</p>
                                    </a>
                                </div>
                                <!-- Imagem 01 - MODAL -->
                                <div class="modal fade text-center" id="Imagem14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura36.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 01 - End -->

                                <p class="wow fadeInDown" data-wow-delay="0.3s">Outra questão a considerar na definição da capacidade de recebimento é a disponibilidade de pessoal qualificado para proceder as conferências de recebimento (quantitativa e qualitativa), a regularização e registro no controle de estoque assim como a armazenagem dos materiais. E finalmente estabelecer o tempo necessário para que todo esse ciclo seja cumprido, até que a área de recebimento esteja desocupada para um novo descarregamento. A capacidade de recebimento é expressa em quadrante-hora, evidentemente que esta medida poderá variar em função da quantidade de pessoal envolvido, mas se for mantida uma quantidade padrão de pessoas envolvidas no recebimento esta variável poderá ser controlada.</p>

                                <p class="wow fadeInDown" data-wow-delay="0.3s"><strong class="CorVerdeClaroEstado"><i></i>c) Elaboração da Agenda de Recebimentos:</strong> À medida que os pedidos de fornecimento vão sendo confirmados, pelo departamento de compras, para recebimento dentro de determinado período, o almoxarifado prepara a Agenda de Recebimento considerando além do volume de pedido confirmado a capacidade de recebimento estabelecida, delimitando assim a quantidade de veículos que poderão ser descarregados no período estabelecido. De posse da Agenda de Recebimento o almoxarifado monitora junto aos transportadores a expectativa de recebimento da carga, e mobiliza o pessoal envolvido para o recebimento. A Agenda de Recebimento é um instrumento muito importante para a integração do almoxarifado com os demais departamentos da organização:</p>

                                <ul class="none Texto">
                                    <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Departamento de Compras: para balanceamento dos prazos de entrega de novos pedidos de fornecimento com o que já está programado para recebimento, auxiliando assim o diligenciamento das compras;</li>
                                    <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Setor de Portaria: para o controle de entrada e saída de veículos de descarregamento nas dependências da organização, liberando os veículos à medida que o almoxarifado esteja mobilizado para o recebimento;</li>
                                    <li class="wow fadeInDown" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Departamento Financeiro: para confirmação dos pagamentos programados, conforme o atesto de recebimento das Ordens de Compra.</li>
                                </ul>

                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/7.png" data-bs-toggle="modal" data-bs-target="#Imagem15">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/7.png" alt="Alt da imagem fica aqui">
                                        <p class="TituloFigura"><strong>Figura 35:</strong> Representação da Elaboração da Agenda de Recebimentos</p>
                                    </a>
                                </div>
                                <!-- Imagem 01 - MODAL -->
                                <div class="modal fade text-center" id="Imagem15" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/7.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 01 - End -->

                                <p>É recomendável uma análise prévia do conteúdo das Ordens de Compras agendadas para recebimento para um bom planejamento dos recebimentos principalmente com relação a fatores como:</p>

                                <ul class="none Texto">

                                    <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Existência na Ordem de Compra de itens de materiais novos ainda não cadastrados no sistema de controle de estoque e que precisam de maiores informações e maior tempo para regularização;</li>
                                    </li>
                                    <li class="wow fadeInDown" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Nível de fracionamento e acondicionamento em unidades de fornecimento dos materiais constantes na Ordem de Compra de forma a adequar ao máximo os equipamentos e procedimentos de movimentação no recebimento um exemplo disso são os materiais recebidos a granel;</li>
                                    </li>
                                    <li class="wow fadeInDown" data-wow-delay="1.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Itens de material que necessitam de laudo técnico de área especializada para que possam ter o atesto de recebimento, entre outras questões.</li>
                                    </li>
                                </ul>

                                <p>Outro fator importante que pode também ser previsto com antecedência ao recebimento de materiais é a disponibilização de espaço para armazenagem dos itens que serão recebidos, isso dinamiza a movimentação de armazenamento do material liberando mais rapidamente a área de recebimento para outros recebimentos agendados. Apesar da atividade de recebimento de material ter menor intensidade que a atividade de atendimento de requisição para consumo, pela própria dinâmica com que são efetuadas as compras para ressuprimento de estoque, a entrega dos fornecedores tendem a concorrerem em um mesmo período de tempo, ou seja, chega tudo no mesmo tempo. Esta é mais uma razão para que seja planejado o recebimento de materiais, por intermédio destes procedimentos, o almoxarifado pode na medida do possível antecipar as requisições junto aos setores da organização e disponibilizar maior parcela de pessoal para realizar as inspeções de recebimento.</p>

                                <!-- SubSubTitulo -->
                                <p class="SubSubTitulo">Ato de Recebimento</p>
                                <hr>

                                <p>Recebimento de materiais é um ponto crítico de controle por ser a atividade intermediária entre a compra, pagamento ou aceitação junto ao fornecedor, exigindo assim um alto nível de responsabilidade na conferência dos materiais destinados à organização de forma a não haver descontinuidade nas operações por problemas de ressuprimento.</p>

                                <p><strong> É no recebimento que a responsabilidade pela guarda e conservação do material é transferida do fornecedor à organização recebedora. O recebimento pode ser subdividido em duas etapas: provisório e definitivo.</strong></p>

                                <ol type="a)">
                                    <li class="wow fadeInDown" data-wow-delay="0.9s"> <strong>Recebimento Provisório:</strong> o material adquirido é entregue à organização no local definido, não implicando necessariamente em aceitação. Nesse momento serão realizados procedimentos de conferência para aceitar ou não a carga.</li>
                                    <li class="wow fadeInDown" data-wow-delay="0.7s"> <strong>Recebimento Definitivo:</strong> ato por meio do qual se declara, na documentação fiscal, que o material recebido está de acordo com as especificações do Pedido de Fornecimento.</li>
                                </ol>

                                <!--INÍCIO CAIXA CINZA -->
                                <section id="pt2">
                                    <div class="bg-cinzaAzul container-fluid main-content">
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-10">
                                                <p class="caixa">
                                                <p>O objetivo de se realizar o recebimento de materiais da forma sistematizada é assegurar que o material entregue esteja em conformidade com as especificações constantes no contrato e/ou na Ordem de Compra ou documento equivalente.</p>

                                                <p>Essa preocupação visa aumentar o controle e a confiabilidade em relação aos fornecedores, além de evitar retrabalho desperdícios e ineficiência no almoxarifado.</p>
                                            </div>
                                            <div class="col-md-1"></div>
                                        </div>
                                    </div>
                                </section>
                                <!--INÍCIO CAIXA CINZA -->



                                <br><p>O recebimento de materiais não consiste somente no ato de descarregá-los e armazená-los em algum lugar onde exista um espaço livre, para posterior utilização. As atividades de recebimento envolvem desde a recepção do material na entrega pelo fornecedor até a entrada nos estoques. É de extrema importância que seja realizado o procedimento de conferência antes de proceder ao recebimento definitivo.</p>

                                <p>Alguns critérios devem ser verificados para o recebimento dos materiais adquiridos.</p>

                                <!-- Fique Atento -->
                                <div class="FiqueAtentoCaixa">
                                    <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                    <div class="FiqueAtentoTexto">
                                        <p>Para aquisições com valores superiores a R$ 80.000,00, o recebimento não poderá ser feito pela equipe do almoxarifado. Nesse caso, o recebimento deve ser realizado por uma comissão com, no mínimo, três membros. Essa determinação está prevista na Lei Federal nº. 8.666, de 21 de junho de 1993.</p>

                                        <p>Nesse caso, o almoxarifado receberá provisoriamente os materiais, para que a comissão designada realize o exame qualitativo conforme especificações contratadas. Após a verificação pela comissão responsável e respectiva aceitação, o almoxarifado poderá dar entrada nos materiais recebidos tanto fisicamente quanto no Sistema de Gestão de Almoxarifado.</p>
                                    </div>
                                </div>



                                <br><p>Quando os materiais adquiridos dependem apenas da conferência e da validação da nota fiscal em relação ao Pedido de fornecimento, poderão ser recebidos e aceitos pelo almoxarife.</p>

                                <p><strong> As atribuições básicas durante o recebimento de materiais são:</strong></p>

                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura37.png" data-bs-toggle="modal" data-bs-target="#Imagem16">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura37.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura"><strong>Figura 36:</strong> Representação das Atribuições para Recebimento de Materiais</p>
                                </div>

                                <!-- Imagem 01 - MODAL -->
                                <div class="modal fade text-center" id="Imagem16" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura37.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 01 - End -->

                                <!-- Início Accordion -->
                                <div class="accordion accordion-flush" id="AccordionFase05">
                                    <center>
                                        <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                    </center>
                                    <!-- Accordion 01 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="01">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne1" aria-expanded="false" aria-controls="flush-collapseOne1">
                                                <strong> Recepcionar os veículos de transportadores</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne1" class="accordion-collapse collapse" aria-labelledby="01" data-bs-parent="#AccordionFase05">
                                            <div class="accordion-body">

                                                <p>A recepção dos veículos transportadores representa o início do processo de recebimento que tem como objetivos:</p>

                                                <ul class="none Texto">
                                                    <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Controlar a entrada dos veículos transportadores nas dependências da organização;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Efetuar a triagem da documentação suporte para o recebimento;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Constatar se o fornecimento, objeto da Nota Fiscal em análise, foi programado na Agenda de Recebimento e se está dentro do prazo de entrega contratual;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Constatar se o número do Pedido de Fornecimento consta na Nota Fiscal;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Atualizar a Agenda de Recebimento com as informações referentes aos descarregamentos autorizados.</li>
                                                </ul>

                                                <!-- Saiba Mais -->
                                                <div class="SaibaMaisCaixa">
                                                    <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                                    <div class="SaibaMaisTexto">
                                                        <p>O setor de Portaria que geralmente efetua a recepção dos veículos de transportadores controla a entrada e saída dos veículos nas dependências da organização, nesse momento somente estão autorizados a entrar os veículos dos transportadores que constam na Agenda de Recebimento. As Ordens de Compra que não constam na agenda devem ser inicialmente recusadas, transcrevendo-se os motivos no verso da Nota Fiscal. Nesses casos somente o responsável pelo almoxarifado dependendo da classificação do material pode autorizar a entrada do veículo. É importante que o almoxarifado esteja sempre atualizando a Agenda de Recebimento conforme as chegadas de Ordens de Compra, e se possível por intermédio de recurso informatizado dependendo da intensidade de recebimento o apoio da informática facilita a operação e aumenta a produtividade.</p>
                                                    </div>
                                                </div>



                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura38.png" data-bs-toggle="modal" data-bs-target="#Imagem17">
                                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura38.png" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong>Figura 37:</strong> Representação da Recepção dos Veículos de Transportadores</p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem17" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura38.png" alt="Alt da imagem fica aqui">
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Figura 01 - End -->


                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fim Accordion 01 -->

                                    <!-- Accordion 02 -->
                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="02">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo2" aria-expanded="false" aria-controls="flush-collapseTwo2">
                                                <strong> Proceder a conferência visual, verificando as condições da embalagem quanto a possíveis avarias na carga transportada e, se for o caso, apontando as ressalvas nos respectivos documentos</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo2" class="accordion-collapse collapse" aria-labelledby="02" data-bs-parent="#AccordionFase05">
                                            <div class="accordion-body">
                                                <p>Também no momento da recepção dos veículos dos transportadores, o setor de Portaria executa a “conferência visual” com o objetivo de identificar avarias na carga que está sendo entregue, o documento que serve para suporte às operações de análise de avarias e conferência de volumes é o "Conhecimento de Transporte Rodoviário de Carga", que é emitido quando do recebimento da mercadoria a ser transportada. Geralmente a carga transportada tem cobertura de seguro, no entanto, é importante que ao identificar avarias o setor de Portaria, entre em contato com o Setor de Compras para verificar a existência de seguro e obter a autorização para a liberação do veículo para descarregamento.</p>

                                                <p>As divergências e irregularidades insanáveis constatadas em relação às condições de contrato devem motivar a recusa do recebimento, anotando-se no verso da Nota Fiscal as circunstâncias que motivaram a recusa, bem como nos documentos do transportador. O exame para constatação das avarias é feito através da análise da disposição das cargas, da observação das embalagens, quanto a evidências de quebras, umidade, dentre outros danos.</p>

                                                <p>Os materiais que passaram por essa primeira etapa devem ser encaminhados ao Almoxarifado. Para efeito de descarga do material no Almoxarifado, a recepção é voltada apenas para a conferência de volumes, confrontando-se a Nota Fiscal com os respectivos registros na Agenda de Recebimento.</p>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fim Accordion 02 -->

                                    <!-- Accordion 03 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="03">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree3" aria-expanded="false" aria-controls="flush-collapseThree3">
                                                <strong>Proceder a conferência quantitativa e qualitativa dos materiais recebidos</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseThree3" class="accordion-collapse collapse" aria-labelledby="03" data-bs-parent="#AccordionFase05">
                                            <div class="accordion-body">
                                                <ol class="none Texto">
                                                    <li class="wow fadeInDown" data-wow-delay="0.3s"><strong> c.1) Conferência quantitativa:</strong> verificação se a quantidade declarada pelo fornecedor na nota fiscal corresponde efetivamente à quantidade fisicamente recebida, podendo ser realizada de duas formas a saber:</li>

                                                    <br>
                                                    <ul class="none Texto">
                                                        <li class="wow fadeInDown" data-wow-delay="0.3s"> <strong><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Volume total da entrega:</strong> quando a carga é averiguada em sua integralidade, contabilizando-se todos os itens que foram entregues. Pode ser realizada de duas maneiras:</li>

                                                        <br>
                                                        <ol type="a">
                                                            <li class="wow fadeInDown" data-wow-delay="0.3s">O conferente verifica a nota fiscal e, sabendo dos quantitativos dos materiais, faz a contagem da carga para apurar possíveis desvios;</li>
                                                            <li class="wow fadeInDown" data-wow-delay="0.3s">O conferente faz a contagem da carga e depois compara com os quantitativos da nota fiscal identificando possíveis desvios. Essa técnica é conhecida como “contagem cega”.</li>
                                                        </ol>

                                                        <br>
                                                        <p>Sendo ou não a “contagem cega”, dependendo da natureza dos materiais envolvidos, estes podem ser contados utilizando-se também outros métodos, tais como:</p>

                                                        <li class="wow fadeInDown" data-wow-delay="0.3s"> <strong><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Manual:</strong> para casos de pequenas quantidades.</li>
                                                        <li class="wow fadeInDown" data-wow-delay="0.3s"> <strong><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Por meio de cálculo:</strong> para os casos que envolvem embalagens padronizadas com grandes quantidades.</li>
                                                        <li class="wow fadeInDown" data-wow-delay="0.3s"> <strong><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Por meio de balanças contadoras:</strong> para casos que envolvem grande quantidade de pequenas peças, como parafusos, porcas ou arruelas.</li>
                                                        <li class="wow fadeInDown" data-wow-delay="0.3s"> <strong><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Medição:</strong> em geral, as medições são efetuadas por meio de trenas.</li>
                                                        <li class="wow fadeInDown" data-wow-delay="0.3s"> <strong><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Por amostragem da carga:</strong> do quantitativo declarado na nota fiscal é definido um percentual de cada item que será objeto de verificação para apuração de possíveis desvios.</li>
                                                    </ul>

                                                    <br>
                                                    <p>A escolha do método para a conferência quantitativa, seja pelo total da carga ou por amostragem, será decisão do responsável pelo almoxarifado, no entanto sempre deverá estar especificado na Nota Fiscal do recebimento o método pelo qual foi efetuada a conferência.</p>

                                                    <!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura39.jpg" data-bs-toggle="modal" data-bs-target="#Imagem18">
                                                            <img class="img-fluid wow fadeInLeft" src="imagens/Figura39.jpg" alt="Alt da imagem fica aqui">
                                                        </a>
                                                        <p class="FonteFigura"><strong>Figura 38:</strong> Representação da Conferência de Materiais</p>
                                                    </div>

                                                    <!-- Imagem 01 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem18" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura39.jpg" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- Figura 01 - End -->

                                                    <li class="wow fadeInDown" data-wow-delay="0.3s">c.2) Conferência qualitativa: é a inspeção técnica de qualidade do material por meio da confrontação das condições contratadas no Pedido de Fornecimento com as consignadas na Nota Fiscal pelo fornecedor. Essa análise visa garantir o recebimento adequado do material contratado por meio do exame de suas características dimensionais, específicas e restrições de especificação. O objetivo é garantir a adequação do material ao fim que se destina. São utilizados no processo de inspeção:</li>

                                                    <br>
                                                    <ul class="none Texto">
                                                        <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> A especificação de compra do material e alternativas aprovadas; desenhos e catálogos técnicos; dentre outros.</li>
                                                        <li class="wow fadeInDown" data-wow-delay="0.4s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> A análise visual que tem por finalidade verificar o acabamento do material, possíveis defeitos, danos à pintura, etc.</li>
                                                        <li class="wow fadeInDown" data-wow-delay="0.5s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> A análise dimensional que tem por objetivo verificar as dimensões dos materiais, tais como largura, comprimento, altura, espessura, diâmetro.</li>
                                                        <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Os ensaios específicos para materiais mecânicos e elétricos comprovam a qualidade, a resistência mecânica, o balanceamento e o desempenho de materiais ou equipamentos.</li>
                                                    </ul>
                                                </ol>

                                                <p>A depender da quantidade, a inspeção pode ser total ou por amostragem, utilizando-se de conceitos estatísticos.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Accordion 03 -->

                                    <!-- Accordion 04 -->
                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="04">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour4" aria-expanded="false" aria-controls="flush-collapseFour4">
                                                <strong>Decidir pela recusa, aceite ou devolução, conforme o caso</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseFour4" class="accordion-collapse collapse" aria-labelledby="04" data-bs-parent="#AccordionFase05">
                                            <div class="accordion-body">

                                                <p>Diariamente muitas decisões são tomadas dentro de uma organização, seja pelos seus administradores, seja por seus funcionários. Decisões essas que vão desde o mais trivial até escolhas que poderão afetar todo o andamento da operação.</p>

                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura40.png" data-bs-toggle="modal" data-bs-target="#Imagem19">
                                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura40.png" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong>Figura 39:</strong> Representação de Tomada de Decisão</p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem19" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura40.png" alt="Alt da imagem fica aqui">
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Figura 01 - End -->

                                                <p>As decisões são tomadas por pessoas que são afetadas pelo meio onde vivem, por suas percepções, experiências e até mesmo por suas crenças, o que torna o processo em si subjetivo, pois não existe a “decisão perfeita”, o que existe é a busca pela melhor alternativa. Para diminuir a subjetividade das decisões, alguns gestores dividem o processo decisório em cinco etapas:</p>

                                                <ol class="none Texto">
                                                    <li class="wow fadeInDown" data-wow-delay="0.3s"><strong>d.1) 1ª Etapa - Reconhecimento:</strong> Reconhecer um problema, essa etapa é crucial, pois se não for bem feita todo o trabalho da equipe de recebimento será desperdiçado, dimensionar as consequências da aceitação ou não da irregularidade no fornecimento do material identificada durante as conferências é a parte mais difícil da decisão.</li>
                                                </ol>

                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura41.png" data-bs-toggle="modal" data-bs-target="#Imagem20">
                                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura41.png" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong>Figura 40:</strong> Representação de Reconhecimento de Problemas</p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem20" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura41.png" alt="Alt da imagem fica aqui">
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Figura 01 - End -->

                                                <p>É recomendável que os tipos de irregularidades sejam identificados é atribuído peso para facilitar a decisão, como exemplificado na tabela abaixo:</p>

                                                <table class="table table-hover text-center" style="border-color: #44833d">
                                                    <thead style="background: #44833d" class="text-white">
                                                        <tr>
                                                            <td>ITEM</td>
                                                            <td>IRREGULARIDADE</td>
                                                            <td>PESO</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="wow fadeInLeft">
                                                            <td>1</td>
                                                            <td>Quantidade especificada na Nota Fiscal é superior à quantidade conferida fisicamente.</td>
                                                            <td>10</td>
                                                        </tr>
                                                        <tr class="wow fadeInRight" data-wow-delay="0.9s">
                                                            <td>2</td>
                                                            <td>Nota Fiscal rasurada ou com impressão imprecisa no tocante a quantidade, valores ou especificação do material.</td>
                                                            <td>10</td>
                                                        </tr>
                                                        <tr class="wow fadeInLeft">
                                                            <td>3</td>
                                                            <td>Material desacompanhado de Nota Fiscal ou de Documento Auxiliar da Nota Fiscal Eletrônica – DANFE.</td>
                                                            <td>10</td>
                                                        </tr>
                                                        <tr class="wow fadeInRight" data-wow-delay="0.9s">
                                                            <td>4</td>
                                                            <td>Embalagens violadas ou com evidências de quebra, umidade ou outro tipo de dano.</td>
                                                            <td>10</td>
                                                        </tr>
                                                        <tr class="wow fadeInLeft">
                                                            <td>5</td>
                                                            <td>Material com validade próxima à data de recebimento ou com validade vencida.</td>
                                                            <td>10</td>
                                                        </tr>
                                                        <tr class="wow fadeInRight" data-wow-delay="0.9s">
                                                            <td>6</td>
                                                            <td>Material especificado na Nota Fiscal está em desacordo com a especificação do Pedido de Fornecimento.</td>
                                                            <td>8</td>
                                                        </tr>
                                                        <tr class="wow fadeInLeft">
                                                            <td>7</td>
                                                            <td>Quantidade especificada na Nota Fiscal inferior à quantidade solicitada no Pedido de Fornecimento.</td>
                                                            <td>8</td>
                                                        </tr>
                                                        <tr class="wow fadeInRight" data-wow-delay="0.9s">
                                                            <td>8</td>
                                                            <td>Valor unitário do material é superior ao valor unitário especificado no Pedido de Fornecimento.</td>
                                                            <td>8</td>
                                                        </tr>
                                                        <tr class="wow fadeInLeft">
                                                            <td>9</td>
                                                            <td>O prazo de entrega do Pedido de Fornecimento está vencido.</td>
                                                            <td>5</td>
                                                        </tr>
                                                        <tr class="wow fadeInRight" data-wow-delay="0.9s">
                                                            <td>10</td>
                                                            <td>A condição de pagamento da Nota Fiscal está em desacordo com a especificada no Pedido de Fornecimento.</td>
                                                            <td>5</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <br>
                                                <ol class="none Texto">
                                                    <br>
                                                    <li class="wow fadeInDown" data-wow-delay="0.3s"><strong>d.2) 2ª Etapa - Elaboração:</strong> Elaborar as alternativas de ação, toda e qualquer decisão é necessário elaborar alternativas, pois se elas não existem, não há decisão a ser tomada. No caso de recebimento de material serão três alternativas a serem elaboradas, a saber:</li>

                                                    <!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura42.png" data-bs-toggle="modal" data-bs-target="#Imagem21">
                                                            <img class="img-fluid wow fadeInLeft" src="imagens/Figura42.png" alt="Alt da imagem fica aqui">
                                                        </a>
                                                        <p class="FonteFigura"><strong>Figura 41:</strong> Representação de Elaboração das Alternativas de Ação </p>
                                                    </div>

                                                    <!-- Imagem 01 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem21" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura42.png" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- Figura 01 - End -->

                                                    <br>
                                                    <ul class="none Texto">
                                                        <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Aceite do Recebimento:</strong> Quando não foram identificadas irregularidades nas conferências de recebimento ou as ocorrências não justificarem a recusa ou devolução do Recebimento.</li>
                                                        <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Recusa:</strong> Quando as irregularidades identificadas, nas conferências de recebimento ocasionar possibilidade de prejuízo financeiro, comprometimento do resultado final das atividades que dependem do uso do material ou possibilitar acidentes de trabalho, deterioração do material, risco a saúde entre outras questões.</li>
                                                        <li class="wow fadeInDown" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Devolução:</strong> Quando a irregularidade identificada refere-se ao quantitativo maior que o solicitado no Pedido de Fornecimento, ou quando se justificar uma recusa parcial, ou seja, somente de parte do material envolvido no recebimento será aceito devido a sua classificação como material crítico ou estoque extremamente insuficiente para atender ao consumo. O restante do material será recebido com ressalvas em relação ao nível de atendimento do fornecedor.</li>
                                                    </ul>

                                                    <br>
                                                    <br>
                                                    <li class="wow fadeInDown" data-wow-delay="0.3s"><strong>d.3) 3ª Etapa – Planejamento:</strong> Avaliar as vantagens e desvantagens de cada alternativa elaborada, nessa etapa é importante ter senso crítico para avaliar quais serão as possíveis consequências da escolha de qualquer uma das alternativas (aceitar, recusar ou devolver o recebimento) e se necessário planejar cursos de ação que minimizem os impactos previstos decorrentes da opção escolhida.</li>

                                                    <!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura43.png" data-bs-toggle="modal" data-bs-target="#Imagem22">
                                                            <img class="img-fluid wow fadeInLeft" src="imagens/Figura43.png" alt="Alt da imagem fica aqui">
                                                        </a>
                                                        <p class="FonteFigura"><strong>Figura 42:</strong> Representação da Etapa de Planejamento das Alternativas Elaboradas</p>
                                                    </div>

                                                    <!-- Imagem 01 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem22" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura43.png" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- Figura 01 - End -->

                                                    <br>
                                                    <li class="wow fadeInDown" data-wow-delay="0.3s"><strong>d.4) 4ª Etapa – Decisão e implementação</strong>: Selecionar a alternativa escolhida e após efetuar a escolha deve-se anunciá-la com confiança e de forma incisiva, pois caso contrário poderá despertar um sentimento de insegurança naqueles que serão afetados com a decisão. Outra questão importante é implementar a decisão imediatamente após ter sido efetuada a escolha, um erro comum em muitos tomadores de decisão é postergar ou demorar na implementação da alternativa escolhida principalmente se esta trazer descontentamentos. Postergar decisões pode gerar pendências que acarretarão problemas irremediáveis.</li>
                                                    <!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura44.png" data-bs-toggle="modal" data-bs-target="#Imagem23">
                                                            <img class="img-fluid wow fadeInLeft" src="imagens/Figura44.png" alt="Alt da imagem fica aqui">
                                                        </a>
                                                        <p class="FonteFigura"><strong>Figura 43:</strong> Representação da Etapa de Decisão e Implementação das Alternativas Escolhidas</p>
                                                    </div>

                                                    <!-- Imagem 01 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem23" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura44.png" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- Figura 01 - End -->

                                                    <br>
                                                    <li class="wow fadeInDown" data-wow-delay="0.3s"><strong>d.5) 5ª Etapa – Controle:</strong> Avaliar os resultados da decisão, nessa etapa é importante documentar ao máximo a decisão que foi implementada de forma que possa ser facilmente rastreada, caso seus efeitos demorem a surgir ou não forem os efeitos esperados. As anotações efetuadas na Nota Fiscal ou no Conhecimento de Transporte Rodoviário de Carga e Pedido de Fornecimento, acerca da decisão de aceitar, recusar ou devolver um recebimento, deverão expressar claramente os motivos, datas e ter os nomes e vistos dos conferentes envolvidos assim como os métodos de conferência aplicados. Para consolidar essas informações o almoxarife deve elaborar o Relatório Técnico de Inspeção de Recebimento, especificando as ações decorrentes do aceite ou não do recebimento e anexando ao mesmo a documentação anteriormente citada envolvida no recebimento do material.</li>
                                                </ol>
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura45.png" data-bs-toggle="modal" data-bs-target="#Imagem24">
                                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura45.png" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong>Figura 44:</strong> Representação da Etapa de Controle das Decisões</p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem24" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura45.png" alt="Alt da imagem fica aqui">
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Figura 01 - End -->

                                                <div class="card">
                                                    <div class="card-body">
                                                        <p>Mesmo procurando racionalizar a subjetividade da tomada de decisão por meio das cinco etapas apresentadas, entendemos que é impossível encontrar num processo de decisão a melhor alternativa, na prática o que se busca é a alternativa que, mesmo não sendo a melhor, leve para o alcance do objetivo da decisão. É importante também esclarecermos que quem decide está suscetível ao erro e nesses casos é perfeitamente compreensível admiti-los muitas vezes sai mais barato admitir o erro que manter a decisão equivocada. O maior erro é não decidir.</p>
                                                    </div>
                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fim Accordion 04 -->

                                    <!-- Accordion 05 -->
                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="05">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive5" aria-expanded="false" aria-controls="flush-collapseFive5">
                                                <strong> Regularização do recebimento</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseFive5" class="accordion-collapse collapse" aria-labelledby="05" data-bs-parent="#AccordionFase05">
                                            <div class="accordion-body">

                                                <p>A regularização é caracterizada pela formalização do processo de recebimento, quando são confirmadas as conferências: visual, qualitativa e quantitativa, respectivamente, por meio do Relatório Técnico de Inspeção de Recebimento dando aceite ou não ao recebimento.</p>

                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura46.png" data-bs-toggle="modal" data-bs-target="#Imagem25">
                                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura46.png" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong>Figura 45:</strong> Representação Regularização do Recebimento de Materiais</p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem25" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura46.png" alt="Alt da imagem fica aqui">
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Figura 01 - End -->

                                                <p>O citado relatório atesta a confrontação das quantidades conferidas e faturadas, dando origem a uma das seguintes situações:</p>

                                                <ul class="none Texto">
                                                    <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Liberação de pagamento ao fornecedor;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Liberação parcial de pagamento ao fornecedor;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Devolução de material ao fornecedor;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Recusa do recebimento;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Reclamação de falta do fornecedor junto ao órgão/unidade gestora de compras.</li>
                                                </ul>

                                                <p>Os procedimentos de regularização, visando à confrontação dos dados, objetivando recontagem e aceite ou não de quantidades remetidas em excesso pelo fornecedor, envolvem os seguintes documentos:</p>

                                                <ul class="none Texto">
                                                    <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Nota Fiscal;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Conhecimento de transporte rodoviário de carga;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Documento de contagem efetuada;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Relatório técnico de inspeção de recebimento;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Especificação de compra;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Catálogos técnicos;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="2.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Desenhos.</li>
                                                </ul>

                                                <p>O material em excesso ou com irregularidade identificada será devolvido ao fornecedor, dentro de um prazo estabelecido pela direção da organização a contar da data do recebimento, acompanhado da Nota Fiscal de Devolução, emitida pela organização compradora.</p>

                                                <p>O material isento de irregularidade dará entrada no Sistema de Controle de Estoque e após esse registro acondicionado nos locais destinados a armazenagem.</p>

                                                <p>Na tabela a seguir é apresentado um resumo das fases que compõem o processo de recebimento de materiais.</p>

                                                <table class="table table-bordered">
                                                    <thead style="background: #c09703;" class="text-white text-center">
                                                        <tr>
                                                            <td>FASE</td>
                                                            <td>DESCRIÇÃO</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1ª fase - Cronograma de ressuprimento:</td>
                                                            <td>É a programação dos pedidos de fornecimento confirmados para recebimento dentro de determinado período, a partir dessa informação o almoxarifado prepara a agenda de recebimento e vai acompanhando junto aos transportadores a expectativa de recebimento da carga, programando pessoal e área de recebimento.</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2ª fase - Acompanhamento e rastreamento dos ressuprimentos:</td>
                                                            <td>É a compatibilização da capacidade de descarregamento do armazém em termos de área, pessoal e equipamentos com o cronograma de ressuprimento, ou seja, à medida que o almoxarifado acompanha junto ao transportador a chegada da carga vai mobilizando o pessoal e organizando espaço para efetuar o recebimento, além de preparar a Relação de Transportadores Autorizados para Descarregamento.</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3ª fase - Recepção:</td>
                                                            <td>
                                                                É a recepção dos veículos dos transportadores, a triagem da documentação suporte do recebimento, encaminhamento para descarga. A recepção será efetuada na portaria da organização onde haverá conferência primária da documentação que objetiva identificar, constatar e providenciar conforme o caso:


                                                                <ul class="none Texto"><br>
                                                                    <br>
                                                                    <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Se o abastecimento ou compra objeto da Nota Fiscal em análise está autorizado na Relação de Transportadores Autorizados para Descarregamento.</li>

                                                                    <br>
                                                                    <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Se o abastecimento ou compra devidamente autorizada tem programação prevista estando dentro do prazo de entrega contratual. Nessa ocasião é efetuada uma consulta ao almoxarifado para liberar ou não o transportador para descarregamento.</li>

                                                                    <br>
                                                                    <li class="wow fadeInDown" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Se o número do documento de compra consta na Nota Fiscal.</li>

                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4ª fase - Liberação do transportador:</td>
                                                            <td>Para os transportadores liberados para descarregamento e assinada liberação no verso da Nota Fiscal e Conhecimento de Frete.</td>
                                                        </tr>
                                                        <tr>
                                                            <td>5ª fase – Descarregamento:</td>
                                                            <td>Normalmente no leiaute do armazém há espaço destinado ao Recebimento, o qual contempla área para descarga, se possível, com docas. Para a realização da descarga do veículo do transportador, dependendo da natureza do material envolvido, é necessária a utilização de equipamentos, dentre os quais se destacam paleteiras, talhas, empilhadeiras e pontes rolantes, além do próprio esforço físico humano, sendo necessário envolver o fator segurança, não só com relação ao material em si como também e principalmente, ao pessoal.</td>
                                                        </tr>
                                                        <tr>
                                                            <td>6ª fase – Recebimento:</td>
                                                            <td>No recebimento são efetuadas as seguintes conferências: visual, quantitativa e qualitativa:

                                                                <ul class="none Texto"><br>
                                                                    <br>
                                                                    <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Conferência Visual:</strong> Exame para constatação de avarias (defeitos), análise da disposição das cargas, observação das embalagens quanto a evidências de quebras, umidade, amassados, dentre outros.</li>
                                                                    <br>
                                                                    <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Conferência Quantitativa:</strong> Verificação se a quantidade declarada pelo fornecedor na Nota Fiscal corresponde à efetivamente recebida. È importante que o conferente desconheça a quantidade faturada na Nota fiscal, ou seja, o conferente aponta a quantidade contada em um formulário de Conferência e este formulário é posteriormente confrontado com a Nota Fiscal. Dependendo da natureza do material a conferência poderá ser feita por contagem, pesagem, medição ou cálculo.</li>
                                                                    <br>
                                                                    <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Conferência Qualitativa:</strong> Verificação efetuada por meio da confrontação das condições contratadas no Pedido de Fornecimento com as consignadas na Nota Fiscal pelo Fornecedor e visa garantir o recebimento adequado do material pelo exame de; características dimensionais, especificações e restrições de especificação.</li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>7ª fase – Regularização:</td>
                                                            <td>É a decisão pela aceitação total, parcial ou recusa total da carga, devendo nesses casos ser registrada a descrição dos motivos no verso da Nota Fiscal e Conhecimento de Frete. As reclamações e/ou devoluções, qualquer que seja o motivo deverão ser devidamente esclarecidas ao Fornecedor envolvido por meio de Notificação com entrega protocolada, além de informado ao departamento de compras para registro no controle de fornecedores. Nos casos de aceitação deverá ser aposto o visto de aceitação na Nota Fiscal e Conhecimento de Frete e encaminhado ao departamento de finanças para a liberação do pagamento.</td>
                                                        </tr>
                                                        <tr>
                                                            <td>8ª fase - Liberação para armazenagem:</td>
                                                            <td>Em resumo o material deverá ser liberado e encaminhado para armazenagem quando serão efetuados os registros escriturais de entrada no estoque. Somente após a liberação poderão ser efetuadas as requisições de material.</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fim Accordion 05 -->
                                </div><br><br>
                                <!-- FIM Accordion -->




























                                <br><br>
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
                                    <a href="Topico02.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                                    <a href="Topico05.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                                </div>

                                <!-- Fim Botões de navegação -->

                                <!-- FIM DIV col-md-10 -->
                            </div>
                            <div class="col-md-1"></div>
                        </div><!--  FIM ROW -->
                        <!--  FIM PAGE TITULO -->
                    </div>
                    <!-- FIM DIV CONTEINE  -->
                </div>
                <!--FIM SELECTION-->
        </section>





    </div> <!--  FIM DIV MAIN -->

    <!-- FOOTER -->
    <?php include('layout/footer.php') ?>

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

    <!-- BOTÃO BACK TO TOP -->
    <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

</body>

</html>