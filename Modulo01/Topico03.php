<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico03';
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
                            <h2 class="Titulo">Classificação e Catalogação de Materiais</h2>
                            <hr>

                            <div class="bd-callout bd-callout-primary">
                                <p><strong>Objetivo:</strong> Compreender os benefícios de classificar os materiais para fins de padronização e manejo segundo suas características.
                            </div>

                            <p>Abordamos aqui o tema classificação e catalogação de materiais que é um assunto importante tanto para gestão dos materiais de consumo (almoxarifado) quanto para os materiais permanentes (bens móveis).</p>

                            <!-- Fique Atento -->
                            <div class="FiqueAtentoCaixa">
                                <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                <div class="FiqueAtentoTexto">
                                    <p>O objetivo da classificação de materiais e bens é catalogar, simplificar, especificar, normalizar, padronizar e codificar todos os materiais geralmente utilizados pela organização nas suas operações seja este material de consumo ou material permanente (bens). A necessidade de um sistema de classificação é primordial para qualquer organização, pois a sua ausência impede o controle eficiente dos estoques, a criação de procedimentos de armazenagem adequados e a correta operacionalização do almoxarifado e do controle patrimonial.</p>
                                </div>
                            </div>



                            <br><p>Simplificar material é, por exemplo, reduzir a diversidade de um item empregado para o mesmo fim. Quando houver duas peças para uma finalidade qualquer, aconselha-se a simplificação, ou seja, a opção pelo uso de uma delas. Ao simplificarmos um material, favorecemos sua normalização, reduzimos as despesas e suas flutuações. Por exemplo cadernos com capa, números de folhas e formato idênticos contribuem para que haja a normalização. Ao requisitar uma quantidade desse material, o usuário irá fornecer todos os dados (tipo de capa, número de folhas e formato), o que facilitará sobremaneira não somente sua aquisição, como também o desempenho daqueles que se servem do material, pois se este um dia apresentar uma forma e outro dia outra forma de maneira totalmente diferente será imediatamente identificado.</p>

                            <br><!--INÍCIO CAIXA CINZA -->
                            <section id="pt2">
                                <div class="bg-cinzaAzul container-fluid main-content">
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10">
                                            <p class="caixa">
                                            <p>Aliada a simplificação, é necessária uma especificação do material, que é uma descrição minuciosa que possibilita melhor entendimento entre o consumidor e fornecedor quanto ao tipo de material a ser adquirido.</p>
                                            </p>
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                </div>
                            </section>
                            <!-- FIM CAIXA CINZA -->



                            <br><p>A normalização se ocupa de maneira pela qual devem ser utilizados os materiais em suas diversas finalidades, bem como da padronização e identificação do material, de modo que tanto o usuário como o almoxarifado possa requisitar e atender os itens utilizando a mesma terminologia. A normalização é aplicada também no caso de peso, medida e formato.</p>

                            <p>Classificar um material é agrupá-lo segunda sua forma, dimensão, peso tipo, uso etc. A classificação não deve gerar confusão, ou seja, um produto não poderá ser classificado de modo que seja confundido com outro, mesmo havendo semelhanças. A classificação, ainda deve ser feita de maneira que cada gênero de material ocupe seu respectivo local. Por exemplo: produtos químicos poderão estragar produtos alimentícios se estiverem próximos entre si. Classificar material, em outras palavras, significa ordená-lo segundo critérios adotados, agrupando-o de acordo com a semelhança, sem causar confusão ou dispersão no espaço e alteração na qualidade.</p>

                            <p>Em função de uma boa classificação do material, pode-se partir para a codificação dele, ou seja, representar todas as informações necessárias, suficientes e desejadas por meio de números e/ou letras. Os sistemas de codificação mais comumente usados são: o alfabético, o alfanumérico e o numérico.</p>

                            <!-- Importante -->
                            <div class="ImportanteCaixa">
                                <p class="ImportanteTitulo"> Importante</p>
                                <div class="ImportanteTexto">
                                    <p>É de extrema importância manter os citados benefícios da classificação de materiais, isso pode ser obtido por intermédio da Catalogação que consiste em registrar os dados que dizem respeito aos materiais em um sistema de informações que facilite a consulta por parte dos usuários pela sua classificação, especificação ou código.</p>
                                </div>
                            </div>
                            <br>

                            <p> Na tabela abaixo é apresentada a conceituação de cada etapa da classificação de materiais:</p>



                            <table class="table borda1">
                                <tbody>
                                    <tr class="wow fadeInLeft" data-wow-delay="0.3s">
                                        <td><strong>Catalogação:</strong></td>
                                        <td>É o arrolamento de todos os itens de material utilizados, permitindo uma ideia geral do conjunto. Consiste em ordenar, de forma lógica, todo um conjunto de dados relativos aos itens identificados, codificados e cadastrados, de modo a facilitar a sua consulta pelas diversas áreas da entidade. </td>
                                    </tr>

                                    <tr class="wow fadeInLeft" data-wow-delay="0.5s">
                                        <td><strong>Simplificação:</strong></td>
                                        <td>Simplificar material é, por exemplo, reduzir a grande diversidade de um item empregado para o mesmo fim. É a redução da diversidade de itens de material que se destinam a um fim idêntico. Caso existam dois itens de material que são empregados para a mesma finalidade, com o mesmo resultado – indiferentemente, opta-se pela inclusão no catálogo de materiais de apenas um deles. É uma etapa que antecede a padronização. Da mesma forma, podemos dizer que a simplificação favorece a normalização. </td>
                                    </tr>

                                    <tr class="wow fadeInLeft" data-wow-delay="0.7s">
                                        <td><strong>Especificação:</strong></td>
                                        <td>É a descrição minuciosa do material possibilitando sua individualização em uma linguagem familiar ao mercado. Possibilita melhor entendimento entre consumidor e o fornecedor quanto ao tipo de material a ser requisitado. </td>
                                    </tr>

                                    <tr class="wow fadeInLeft" data-wow-delay="0.9s">
                                        <td><strong>Normalização:</strong></td>
                                        <td>É o estabelecimento de normas técnicas para os itens de material em si, ou para seu emprego com segurança. É necessária para a consecução da padronização em sua completude. Possibilita melhor entendimento entre consumidor e o fornecedor quanto ao tipo de material a ser requisitado. A entidade oficial de normalização no Brasil é a Associação Brasileira de Normas Técnicas (ABNT). </td>
                                    </tr>

                                    <tr class="wow fadeInLeft" data-wow-delay="1.1s">
                                        <td><strong>Padronização:</strong></td>
                                        <td>Uniformização do emprego e do tipo do material. Facilita o diálogo com o mercado, o controle e permite a intercambialidade de sobressalentes ou demais materiais de consumo (peças, cartuchos de impressoras padronizadas, bobinas de fax etc.) assim como os serviços de assistência técnica; </td>
                                    </tr>

                                    <tr class="wow fadeInLeft" data-wow-delay="1.2s">
                                        <td><strong>Codificação:</strong></td>
                                        <td>Atribuição de uma série de números e/ou letras a cada item de material, de forma que essa informação, compilada em um único código, represente as características do item. Cada item terá, assim, um único código. </td>
                                    </tr>

                                    <tr class="wow fadeInLeft" data-wow-delay="1.3s">
                                        <td><strong>Catalogação:</strong></td>
                                        <td>É o arrolamento de todos os itens de material utilizados, permitindo uma ideia geral do conjunto. Consiste em ordenar, de forma lógica, todo um conjunto de dados relativos aos itens identificados, codificados e cadastrados, de modo a facilitar a sua consulta pelas diversas áreas da entidade. </td>
                                    </tr>
                                </tbody>
                            </table>

                            <br><br><!-- SubTitulo -->
                            <p class="SubTitulo" id="top3-one">Atributos Adicionais a serem Considerados na Classificação de Materiais</p>
                            <hr>

                            <p>Devemos também considerar alguns atributos adicionais para melhor entender por que a classificação de materiais é tão importante para a gestão do estoque e do patrimônio:</p>

                            <!-- Início Accordion -->
                            <div class="accordion accordion-flush" id="AccordionFase01">
                                <center>
                                    <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                </center>

                            <!-- Accordion 01 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item01">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsetop3One" aria-expanded="false" aria-controls="flush-collapsetop3One">
                                        <strong>a) Abrangência</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapsetop3One" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p> A classificação deve tratar de uma gama de características dos materiais em vez de reunir apenas materiais para serem classificados sob uma única ótica. Características como:</p>
                                        <ul class="none Texto">
                                            <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Tamanho (comprimento, largura e altura);</li>
                                            <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Densidade e Peso (por unidade ou volume);</li>
                                            <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Forma (achatada, curva, compacta);</li>
                                            <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Risco de danos (frágil, explosivo, contaminável, tóxico, corrosivo);</li>
                                            <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Condição (Instável, pegajoso, úmido, perecível);</li>
                                            <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Quantidade (relativa a intensidade de uso ou ao volume, no total e em tamanho de remessa ou por lote);</li>
                                            <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Cronometria (regularidade, urgência,sazonal);</li>
                                            <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Medidas Especiais (regulamentações, padrões internos da organização, critérios de operação).</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 01 -->

                            <!-- Accordion 02 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item01">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsetop3Two" aria-expanded="false" aria-controls="flush-collapsetop3Two">
                                        <strong>b) Flexibilidade</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapsetop3Two" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>Deve permitir interfaces entre os diversos tipos de classificação, de modo que se obtenha ampla visão do gerenciamento de estoques; em termos frequência de aquisição, quantidade em estoque, armazenagem, custo, assim como durabilidade no caso dos materiais permanentes.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 02 -->

                            <!-- Accordion 03 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item01">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsetop3Tree" aria-expanded="false" aria-controls="flush-collapsetop3Tree">
                                        <strong>c) Praticidade</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapsetop3Tree" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>A classificação deve ser direta e simples atendendo os requerimentos que são efetivamente importantes para a gestão dos estoques na modalidade de operação da organização.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 03 -->

                            <br>


                            <p> <b> A figura a seguir traz um exemplo de como tais atributos relacionam-se a uma situação real de classificação de material:</b></p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura001.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura001.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura 03:</strong> Atributos Adicionais que Classificam os Materiais</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura001.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End -->

                            <br><br><!-- SubTitulo -->
                            <p class="SubTitulo" id="top3-two">Formas de Classificação de Materiais</p>
                            <hr>

                            <p>Algumas formas de classificação são igualmente importantes para a maioria das organizações independente da sua modalidade de operação são estas:</p>

                            <p class="wow fadeInLeft" data-wow-delay=".3s"><strong>Quanto ao tipo de demanda:</strong> A classificação por tipo de demanda pode ser dividida em: </p>

                            <p class="wow fadeInLeft" data-wow-delay=".6s"><i></i> <strong class="CorVerdeClaroEstado">a.1) Materiais de estoque:</strong> São materiais que devem existir em estoque e para os quais são determinados critérios e parâmetros de ressuprimento automático, com base na demanda prevista e na importância para a organização. Os critérios de ressuprimento fixados para esses materiais possibilitam a renovação do estoque sem a participação do usuário.</p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura04.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura04.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura 04:</strong> Materiais de Estoque </strong></p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura04.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End -->

                            <p><b> Os materiais de estoque geralmente são classificados quanto ao consumo anual e quanto à importância operacional:</b></p>

                            <p class="wow fadeInLeft" data-wow-delay=".6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong class="CorVerdeClaroEstado">Valor do consumo anual:</strong> Método pelo qual se determina a importância dos materiais em função do valor expresso pelo próprio consumo em determinado período. Utiliza-se como ferramenta de classificação a Curva ABC ou Curva de Pareto. Os materiais são classificados em A, B ou C:</p>

                            <ul class="none Texto">
                                <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Materiais A:</strong> materiais de grande valor de consumo;</li>
                                <li class="wow fadeInDown" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Materiais B:</strong> materiais de médio valor de consumo;</li>
                                <li class="wow fadeInDown" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Materiais C:</strong> materiais de baixo valor de consumo.</li>
                            </ul>

                            <p class="wow fadeInLeft" data-wow-delay=".6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong class="CorVerdeClaroEstado">Importância operacional:</strong> Adota-se a classificação da importância operacional, visando identificar materiais imprescindíveis ao funcionamento da organização;</p>

                            <ul class="none Texto">
                                <li class="wow fadeInDown" data-wow-delay="1.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Materiais X:</strong> materiais de aplicação não importante, com possibilidade de uso de similar existente na organização;</li>
                                <li class="wow fadeInDown" data-wow-delay="2.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Materiais Y:</strong> materiais de importância média, com ou sem similar na organização;</li>
                                <li class="wow fadeInDown" data-wow-delay="2.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Materiais Z:</strong> materiais de importância vital sem similar na organização, cuja falta acarreta a paralisação de uma ou mais fases operativas.</li>
                            </ul>

                            <p class="wow fadeInLeft" data-wow-delay=".6s">Em se tratando de organização industrial, a seleção XYZ pode ser facilitada por meio das seguintes indagações:</p>

                            <ul class="none Texto">
                                <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Material é imprescindível ao equipamento?</li>
                                <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Equipamento pertence à linha de produção?</li>
                                <li class="wow fadeInDown" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Material possui similar?</li>
                            </ul>

                            <p class="wow fadeInLeft" data-wow-delay=".6s"><i></i> <strong class="CorVerdeClaroEstado">a.2) Materiais que não são de estoque:</strong> São materiais de demanda imprevisível para os quais não são definidos parâmetros para o ressuprimento automático.</p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura05.png" data-bs-toggle="modal" data-bs-target="#Imagem03">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura05.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura 05:</strong> Materiais Não-de-Estoque</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura05.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End -->

                            <p><b> São características desses materiais:</b></p>

                            <ul class="none Texto">
                                <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Inexistência de regularidade de consumo;</li>
                                <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Aquisição somente é efetuada a partir da solicitação do usuário;</li>
                                <li class="wow fadeInDown" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> São comprados para utilização imediata;</li>
                                <li class="wow fadeInDown" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> São debitados no centro de custo de aplicação;</li>
                                <li class="wow fadeInDown" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Podem ser comprados para uso posterior, ficando temporariamente estocado no almoxarifado.</li>
                            </ul>

                            <p class="wow fadeInLeft" data-wow-delay=".3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong class="CorVerdeClaroEstado">Materiais críticos:</strong> São materiais de reposição específica, àqueles cuja demanda não é previsível e cuja decisão de estocar é tomada com base na análise de risco, caso esses materiais não estejam disponíveis quando necessário.</p>
                            <p> <b> Os materiais críticos podem ser identificados da seguinte forma:</b></p>

                            <table class="table table-bordered" style="border-color: #1f531a;">
                                <tbody>
                                    <tr style="background: #ccffcc;">
                                        <td style="width: 2px"><strong>1) Por problemas de obtenção</strong></td>
                                        <td>Material importado;<br>Existência de um único fornecedor;<br>Escassez no mercado;<br>Material estratégico;<br>De difícil fabricação ou obtenção.</td>
                                    </tr>
                                    <tr style="background: #ccffcc;">
                                        <td><strong>2) Por razões econômicas<strong< /td>
                                        <td>Material de elevado valor;<br>Material com elevado custo de armazenagem;<br>Material com elevado custo de transporte.</td>
                                    </tr>
                                    <tr style="background: #ccffcc;">
                                        <td><strong>3) Por problemas de armazenagem e transporte</strong></td>
                                        <td>Material perecível;<br>Material de alta periculosidade;<br>Material de elevado peso;<br>Material de grandes dimensões.</td>
                                    </tr>
                                    <tr style="background: #ccffcc;">
                                        <td><strong>4) Por problemas de previsão</strong></td>
                                        <td>Material com utilização de difícil previsão.</td>
                                    </tr>
                                    <tr style="background: #ccffcc;">
                                        <td><strong>5) Por razões de segurança</strong></td>
                                        <td>Material pra equipamento vital da produção;<br>Material de reposição de alto custo.</td>
                                    </tr>
                                </tbody>
                            </table>

                            <p class="wow fadeInLeft" data-wow-delay=".3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong class="CorVerdeClaroEstado">Perecibilidade:</strong> É o critério de classificação pelo qual o material é adquirido em função da probabilidade ou não de perecer ou de desaparecer suas propriedades físico-químicos.</p>
                            <p class="wow fadeInLeft" data-wow-delay=".5s"><b>Esse critério permite tomar as seguintes medidas:</b> </p>

                            <ul class="none Texto">
                                <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Determinar lotes de compra mais racionais;</li>
                                <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Programar revisões periódicas para detectar falhas de estocagem;</li>
                                <li class="wow fadeInDown" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Selecionar adequadamente os locais de estocagem;</li>
                                <li class="wow fadeInDown" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Utilizar técnicas adequadas de manuseio e transporte;</li>
                                <li class="wow fadeInDown" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Orientar os funcionários quanto aos cuidados a serem observados.</li>
                            </ul>

                            <p class="wow fadeInLeft" data-wow-delay=".3s">Os materiais podem ser classificados em <strong>perecíveis</strong> e <strong>não perecíveis</strong>.</p>
                            <p class="wow fadeInLeft" data-wow-delay=".5s">Os <strong class="CorVerdeClaroEstado">materiais perecíveis</strong> podem ser classificados ainda:</p>

                            <ul class="none Texto">
                                <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Pela ação da umidade</li>
                                <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Pela limitação do tempo;</li>
                                <li class="wow fadeInDown" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Instáveis;</li>
                                <li class="wow fadeInDown" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Voláteis;</li>
                                <li class="wow fadeInDown" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Por contaminação pela água;</li>
                                <li class="wow fadeInDown" data-wow-delay="1.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Por contaminação por partículas sólidas;</li>
                                <li class="wow fadeInDown" data-wow-delay="2.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Pela ação da gravidade;</li>
                                <li class="wow fadeInDown" data-wow-delay="2.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Por queda, colisão ou vibração;</li>
                                <li class="wow fadeInDown" data-wow-delay="2.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Pela mudança de temperatura;</li>
                                <li class="wow fadeInDown" data-wow-delay="3.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Pela ação da luz;</li>
                                <li class="wow fadeInDown" data-wow-delay="3.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Por ação de atmosfera agressiva;</li>
                                <li class="wow fadeInDown" data-wow-delay="3.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Pela ação de animais.</li>
                            </ul>


                            <br>
                            <div class="bg-cinzaAzul container-fluid main-content">
                                <div class="row">
                                    <div class="col-sm-12 col-md-4">
                                        <!-- Titulo Figura -->
                                        <div class="text-center">
                                            <a href="imagens/Figura06.png" data-bs-toggle="modal" data-bs-target="#Imagem06">
                                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura06.png" alt="Alt da imagem fica aqui">
                                            </a>
                                            <p class="FonteFigura"><strong>Figura 6: Material Perecível
                                                </strong></p>
                                        </div>

                                        <!-- Imagem 01 - MODAL -->
                                        <div class="modal fade text-center" id="Imagem06" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="imagens/Figura06.png" alt="Alt da imagem fica aqui">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Figura 01 - End -->
                                    </div>

                                    <div class="col-sm-12 col-md-8">
                                        <p>Para o material perecível em razão do tempo, há de se dispensar especial atenção quanto aos prazos de vencimento. Em geral, quando compõem estoques, emprega-se uma sistemática de distribuição dos materiais conhecida por PEPS (primeiro a entrar, primeiro a sair), termo originado da sigla em inglês FIFO (first in, first out), que se refere à sistemática segundo a qual o primeiro item de material a entrar é o primeiro a sair. O ideal, contudo, seria a distribuição mediante o critério denominado FEFO (first to expire, first out, ou, o primeiro a expirar sua data de validade deve ser distribuído primeiro).</p>
                                    </div>
                                </div>
                            </div>

                            <br><br>
                            <p class="wow fadeInLeft" data-wow-delay=".3s"><strong class="CorVerdeClaroEstado"> Periculosidade:</strong> Visa identificar materiais que, por suas características físico-químicas, possuam incompatibilidade com outros, oferecendo riscos à segurança durante o manuseio, transporte e armazenagem desses materiais.</p>

                            <p class="wow fadeInLeft" data-wow-delay=".5s"><strong class="CorVerdeClaroEstado"> Possibilidade de fazer ou comprar:</strong> Essa classificação determina quais os materiais que poderão ser recondicionados, fabricados internamente ou comprados. O custo de recuperação de um material deve ser inferior ao de compra de um novo.</p>

                            <p class="wow fadeInLeft" data-wow-delay=".3s"><strong class="CorVerdeClaroEstado"> Tipos de estocagem:</strong> Os materiais podem ser agrupados:</p>

                            <ul class="none Texto">
                                <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Estocagem permanente:</strong> deve sempre existir saldo no almoxarifado;</li>
                                <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Estocagem temporária:</strong> materiais que necessitam ficar estocados no almoxarifado durante determinado tempo até sua utilização.</li>
                            </ul>

                            <p class="wow fadeInLeft" data-wow-delay=".3s"><strong class="CorVerdeClaroEstado"> Dificuldade de aquisição:</strong> As dificuldades na obtenção de materiais podem provir de: fabricação especial, escassez no mercado, sazonalidade, monopólio ou tecnologia exclusiva, logística sofisticada, ou importações.</p>

                            <p><b>Quanto à dificuldade de aquisição, os materiais podem ser classificados em: F – fácil aquisição; - D – difícil aquisição. Os principais benefícios desse tipo de classificação são:</b> </p>

                            <ul class="none Texto">
                                <li class="wow fadeInLeft" data-wow-delay=".3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Dimensionar os níveis de estoque;</li>
                                <li class="wow fadeInLeft" data-wow-delay=".5s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Selecionar o método a ser adotado para ressuprimento;</li>
                                <li class="wow fadeInLeft" data-wow-delay=".8s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Propiciar maior experiência aos compradores.</li>
                            </ul>

                            <p><strong class="CorVerdeClaroEstado"> Mercado fornecedor:</strong> os materiais desse grupo serão classificados em função do:</p>

                            <ul class="none Texto">
                                <li class="wow fadeInLeft" data-wow-delay=".3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Mercado nacional;</li>
                                <li class="wow fadeInLeft" data-wow-delay=".5s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Mercado estrangeiro;</li>
                                <li class="wow fadeInLeft" data-wow-delay=".8s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Materiais em processo de nacionalização.</li>
                            </ul>

                            <p>O mapa mental a seguir auxilia na visualização dos diversos tipos de classificação de materiais:</p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura07.png" data-bs-toggle="modal" data-bs-target="#Imagem07">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura07.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura 7: Mapa Mental de Classificação de Materiais </strong></p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem07" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura07.png" alt="Alt da imagem fica aqui">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End -->

                            <!-- SubTitulo -->
                            <p class="SubTitulo" id="top3-tree">Estrutura Básica de um Catálogo de Bens, Materiais e Serviços</p>
                            <hr>

                            <p>A Administração Pública brasileira de uma forma geral, para padronizar seus itens de materiais tomou como modelo o Federal Supply Classification - FSC, esse sistema, criado pelo Departamento de Defesa dos Estados Unidos e estabelecido em 1949, surgiu da grande dificuldade operacional com suprimento de materiais durante a Segunda Guerra Mundial, uma vez que os vários órgãos de defesa utilizavam sistemas de classificação próprios.</p>

                            <p>A adoção de um número único de item de material por meio de um sistema unificado de catalogação de suprimentos possibilita que um item seja encontrado em qualquer lugar da Administração Pública.</p>

                            <p>O FSC classifica, descreve e numera uniformemente os itens de suprimento de forma que possam ser encontrados em qualquer lugar do mundo onde atuam os órgãos do governo americano. Ainda, o FSC possui estrutura simples e flexível, permitindo seu uso em entidades, observando-se as adaptações necessárias.</p>

                            <p>O FSC é constituído por quatro algarismos, divididos em dois pares que representam, respectivamente, o grupo e subgrupo, como mostra abaixo. A associação desses dois pares forma a classe, que compreende todo o universo de materiais.</p>

                            <p><b>O grupo comporta os materiais que tem alguma relação entre si, possibilitando 99 variações. O subgrupo representa uma subdivisão dentro do grupo, juntando itens que tem finalidade e características semelhantes e possui igualmente 99 possibilidades.</b> </p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura08.png" data-bs-toggle="modal" data-bs-target="#Imagem08">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura08.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura 8: Estrutura do Federal Supply Classification.
                                    </strong></p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem08" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura08.png" alt="Alt da imagem fica aqui">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End -->

                            <p>A partir do Federal Supply Classification- FSC os entes federativos da administração pública brasileira desenvolvem sistemas computadorizados de compras eletrônicas, no controle de estoque dos materiais de consumo e controle de material permanente.</p>

                            <p><b>A estrutura de classificação de um Catálogo adaptado do Federal Supply Classification apresenta-se da seguinte forma:</b> </p>

                            <ul class="none Texto">
                                <li class="wow fadeInLeft" data-wow-delay=".5s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Nível 0 – Categoria:</strong> Subdivida em Material de Consumo, Material Permanente e Serviço.</li>
                                <li class="wow fadeInLeft" data-wow-delay=".7s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Nível 1 – Grupo:</strong> Estabelece a classificação das categorias.</li>
                                <li class="wow fadeInLeft" data-wow-delay=".9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Nível 2 – Classe:</strong> Subdivisão do grupo segundo a sua natureza.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Nível 3 – Material:</strong> Descrição genérica do material/serviço sem caracterização.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.1s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Nível 4 – Item de Material:</strong> Especificação do item contendo todas as características de individualização e identificação.</li>
                            </ul>

                            <p>Ver o exemplo a seguir:</p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura09.png" data-bs-toggle="modal" data-bs-target="#Imagem09">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura09.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura 9: Estrutura de Classificação de um Catálogo Adaptado do Federal Supply</strong></p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem09" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura09.png" alt="Alt da imagem fica aqui">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End -->

                            <p><B>Decreto Estadual Nº 32.901 de 17/12/2018, que regulamenta no âmbito da administração pública estadual direta e indireta, o sistema logístico de suprimentos e dá outras providencias, em seu CAPÍTULO V DO CATÁLOGO DE BENS, MATERIAIS E SERVIÇOS estabelece o seguinte:</B> </p>

                            <br>
                            <center>
                                <h5><strong>CAPÍTULO V<br>DO CATÁLOGO DE BENS, MATERIAIS E SERVIÇOS</h5></strong>
                            </center>

                            <div class="accordion accordion-flush" id="AccordionFase01">
                                <center>
                                    <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                </center>
                                <!-- Accordion 01 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item01">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            <strong>Art. 16</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>Catálogo de Bens, Materiais e Serviços será utilizado para classificação e catalogação dos itens nos padrões de qualidade e de desempenho exigidos pelo Governo do Estado, visando a uniformidade e padronização das especificações dos itens adquiridos pela Administração Pública Estadual.</p>
                                            <p><strong>Parágrafo único.</strong> Os Órgãos da Administração Pública Estadual Direta, Fundos Especiais, Autarquias, Fundações, Empresas Públicas, Sociedades de Economia Mista e demais entidades controladas direta ou indiretamente pelo Estado, inclusive a Central de Licitações, deverão, obrigatoriamente, utilizar o Catálogo de Bens, Materiais e Serviços do Estado para fazer uso dos itens nas licitações, contratações diretas, chamadas públicas e aquisições por registro de preços.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 01 -->
                                <!-- Accordion 02 -->
                                <div class="accordion-item Texto">
                                    <h2 class="accordion-header" id="Item02">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <strong>Art. 17</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p> A Seplag é o Órgão Gestor Geral do Catálogo de Bens, Materiais e Serviços do Estado do Ceará e terá como atribuições:</p>

                                            <ol type="I" class="Texto">
                                                <li>Indicar o Órgão Gestor do Catálogo de Bens, Materiais e Serviços para cada categoria de itens;</li>
                                                <li>Definir as regras para utilização e manutenção do Catálogo de Bens, Materiais e Serviços;</li>
                                                <li>Coordenar o plano de manutenção e a atualização do Catálogo de Bens, Materiais e Serviços;</li>
                                                <li>Realizar a gestão do Catálogo de Bens, Materiais e Serviços;</li>
                                                <li>Garantir a manutenção das funcionalidades do sistema de Catálogo de Bens, Materiais e Serviços;</li>
                                                <li>Coordenar os estudos de padronização das especificações dos itens a serem comprados pelos órgãos e entidades da Administração Pública Estadual;</li>
                                                <li>Articular a implementação de capacitação para os usuários do Catálogo de Bens, Materiais e Serviços; e</li>
                                                <li>Validar e autorizar a inclusão de novos itens no Catálogo de Bens, Materiais e Serviços.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 02 -->

                                <!-- Accordion 03 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item03">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            <strong>Art. 18</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p> O Gestor do Catálogo de Bens, Materiais e Serviços, no âmbito da categoria de itens pela qual é responsável, terá como atribuições:</p>

                                            <ol type="I" class="Texto">
                                                <li>Participar da execução do plano de manutenção e a atualização do Catálogo de Bens, Materiais e Serviços;</li>
                                                <li>Pesquisar, analisar e propor melhorias nas especificações e a inclusão de itens ao Gestor Geral de Catálogo de Bens, Materiais e Serviços;</li>
                                                <li>Articular com os órgãos e entidades, visando garantir o contínuo aperfeiçoamento do catálogo; e</li>
                                                <li>Manter o Catálogo de Bens, Materiais e Serviços, no âmbito da categoria de itens pela qual é responsável.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div><br><br>
                            <!-- Accordion 03 -->
                            <!-- FIM Accordion -->

                            <div class="card">
                                <div class="card-body">
                                    <p>O Catálogo de Bens, Materiais e Serviços do Estado do Ceará poderá ser acessado pelo “Portal de Compras” no endereço eletrônico <a href="https://s2gpr.sefaz.ce.gov.br/catalogo-web/paginas/catalogo/ItemMaterialServicoListCompleto.seam" target="_blank">https://s2gpr.sefaz.ce.gov.br/catalogo-web/paginas/catalogo/ItemMaterialServicoListCompleto.seam</a></p>
                                </div>
                            </div>





                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura10.png" data-bs-toggle="modal" data-bs-target="#Imagem10">
                                    <img class="img-fluid10 wow fadeInLeft" src="imagens/Figura10.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura 10: Catálogo de Materiais
                                    </strong></p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura10.png" alt="Alt da imagem fica aqui">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End -->











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
                                <a href="Topico04.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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