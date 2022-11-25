<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico05';
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
                            <h2 class="Titulo">Gestão da Armazenagem</h2>
                            <hr>

                            <div class="bd-callout bd-callout-primary">
                                <p><strong>Objetivo:</strong> Compreender os processos de gestão da armazenagem, desde a sua importância estratégica ao longo da cadeia de suprimentos, assim como as técnicas empregadas na elaboração do leiaute passando pelos sistemas de endereçamento e a movimentação interna e seus respectivos equipamentos, assim como a realização de inventário.</p>
                            </div>

                            <p>No processo logístico ao longo da cadeia de suprimentos, a gestão da armazenagem é considerada uma das atividades de apoio de maior importância para que a organização possa alcançar seus objetivos, sua importância reside no fato de ser uma função de abastecimento em relação ao fluxo logístico, que serve de base para sua uniformidade e continuidade, assegurando um adequado nível de serviço. Sem a gestão da armazenagem não seria possível os deslocamentos físicos de materiais de forma contínua e uniforme ao longo da cadeia de suprimentos.</p>

                            <p>Além do mais, a armazenagem envolve a administração dos espaços necessários para que os materiais sejam mantidos estocados na organização, além de abranger diversos processos como: localização e dimensionamento do armazém, recursos materiais e patrimoniais (leiaute e equipamentos), pessoal especializado, recursos financeiros e sistemas de controle.</p>

                            <p>A gestão da armazenagem envolve a determinação do ponto de equilíbrio entre o custo de manter estoques e o nível de abastecimento que se deseja efetuar além de questões de configuração do armazém tais como: desenho do leiaute (arranjo físico), os métodos e equipamentos de manuseio dos materiais, os métodos de acondicionamento e os sistemas de endereçamento.</p>

                            <p><strong> Ao longo da cadeia de suprimentos os depósitos de armazenagem prestam quatro classes de serviços distintos que são:</strong></p>

                            <ol type="a">
                                <li class="wow fadeInLeft" data-wow-delay="0.3s"><strong> Abrigo dos produtos:</strong> talvez o uso mais óbvio da armazenagem seja a guarda de estoques, gerados pela falta de balanceamento entre a oferta e a demanda. Garante proteção e outros serviços associados, como manutenção de registros, rotação de estoques e reparos.</li>


                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura47.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                        <img class="img-fluid wow fadeInLeft" width="500" class="img-fluid" src="imagens/Figura47.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura"><strong>Figura 46:</strong> Representação do Abrigo dos Produtos</p>
                                </div>

                                <!-- Imagem 01 - MODAL -->
                                <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura47.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 01 - End -->


                                <li class="wow fadeInLeft" data-wow-delay="0.3s"><strong> Consolidação:</strong> No caso de mercadorias originárias de muitas fontes diferentes, a organização pode economizar no transporte, fazendo com que as entregas sejam feitas no armazém onde as cargas são agregadas ou consolidadas e transportadas em um único carregamento até o seu o seu destino final.</li>

                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura48.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                        <img class="img-fluid wow fadeInLeft" width="500" class="img-fluid" src="imagens/Figura48.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura"><strong>Figura 47:</strong> Representação do Abrigo dos Produtos</p>
                                </div>

                                <!-- Imagem 01 - MODAL -->
                                <div class="modal fade text-center" id="Imagem02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura48.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 01 - End -->


                                <li class="wow fadeInLeft" data-wow-delay="0.3s"><strong> Transferência e Transbordo:</strong> É o inverso da consolidação, a mercadoria é originária de uma única fonte e no armazém é efetuado o fracionamento em volumes de quantidade menores carregadas para diversos destinos.</li>

                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura49.png" data-bs-toggle="modal" data-bs-target="#Imagem03">
                                        <img class="img-fluid wow fadeInLeft" width="500" class="img-fluid" src="imagens/Figura49.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura"><strong>Figura 48:</strong> Representação da Transferência e Transbordo</p>
                                </div>

                                <!-- Imagem 01 - MODAL -->
                                <div class="modal fade text-center" id="Imagem03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura49.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 01 - End -->


                                <li class="wow fadeInLeft" data-wow-delay="0.3s"><strong> Agrupamento:</strong> É um uso especializado do armazém, isto ocorre geralmente nas organizações industriais que possuem uma grande linha de produtos e utilizam várias plantas industriais que fabricam produtos específicos de forma integral e continua entregando sua produção em um depósito onde os produtos são agrupados e entregues aos clientes. Nesse caso o custo de armazenagem é compensado pelos menores custos de manufatura, devido aos maiores lotes de produção para menos itens em cada planta industrial.</li>

                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura50.png" data-bs-toggle="modal" data-bs-target="#Imagem04">
                                        <img class="img-fluid wow fadeInLeft" width="500" class="img-fluid" src="imagens/Figura50.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura"><strong>Figura 49:</strong> Representação do Agrupamento de Produtos</p>
                                </div>

                                <!-- Imagem 01 - MODAL -->
                                <div class="modal fade text-center" id="Imagem04" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura50.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 01 - End -->

                            </ol>

                            <p><strong> Seja qual for a classe de serviço que armazenagem presta ao longo da cadeia de suprimentos internamente cada armazém requer um processo de gestão sobre diversas atividades as quais veremos a seguir.</strong></p>

                            <br><br>
                            <!--SubTitulo -->
                            <p class="SubTitulo" id="top5-one">Arranjo Físico (Leiaute) de Armazéns</p>
                            <hr>

                            <p class="wow fadeInLeft" data-wow-delay="0.3s">O desempenho de uma cadeia de suprimentos é determinado tanto pelas operações de transporte, realizadas entre as instalações que compõem a cadeia (fornecedor, fabricante, distribuidor, varejista, etc), quanto por aquelas atividades realizadas no interior destas instalações, genericamente denominadas armazéns. A dinâmica de um armazém consiste basicamente em receber, movimentar para armazenar, movimentar para desarmazenar e expedir, e, para que isto ocorra é necessário dimensionar com a maior exatidão as áreas correspondentes a este processo. Os armazéns devem ser planejados de forma a oferecer um nível de serviço adequado às demandas dos usuários, em termos de custos e tempo de resposta, o que depende em grande parte da definição do “leiaute” destas instalações.</p>

                            <p class="wow fadeInRight" data-wow-delay="0.3s">O Leiaute ou arranjo físico de um armazém abrange a localização física dos recursos e ferramentas a se utilizar, determinando sua forma e aparência. Estabelecido a partir do estudo do sistema de informações relacionado com a distribuição dos móveis, equipamentos e pessoas, o espaço físico organizacional influi no trabalho desenvolvido pelos funcionários que lá trabalham. Apesar de ser aquilo que a maioria das pessoas notaria quando entrasse no ambiente, a grande preocupação de um estudo deste tipo é manter o fluxo otimizado entre as operações e as pessoas, ao invés do simples aspecto de visualmente adequado. Basicamente, definir o arranjo físico é decidir onde colocar todas as instalações, equipamentos e posicionamento de todo o pessoal do armazém verificando a coordenação entre os vários operadores, equipamentos e espaço.</p>

                            <!--INÍCIO CAIXA CINZA -->
                            <section id="pt2">
                                <div class="bg-cinzaAzul container-fluid main-content">
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10">
                                            <p class="caixa">
                                            <p>A seleção de um leiaute não é uma questão trivial e não há o melhor leiaute, pois a definição do mesmo deve levar em conta uma diversidade de aspectos, dentre os quais podem ser citados: características físicas das instalações, acesso aos corredores, tipos de estantes, tipos de equipamentos de movimentação, etc. Além disso, as decisões de localização do estoque, ou arrumação física dos itens no armazém, também têm impacto considerável sobre os custos operacionais e o tempo de atendimento aos pedidos, pois pode facilitar a identificação dos itens em estoque e a sua separação.</p>

                                            <p>Dessa forma, podemos entender que leiaute do armazém é a configuração de instalação do mesmo que estabelece a relação física entre a disposição de móveis, veículos e equipamentos e as várias atividades de gestão de materiais inerentes ao recebimento, localização, armazenagem e movimentação dos materiais. O melhor leiaute que se busca idealizar é aquele que procura minimizar a distância total percorrida com uma movimentação eficiente entre os materiais, com a maior flexibilidade possível e com custos de armazenagem reduzidos.</p>
                                            </p>
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                </div>
                            </section>
                            <!--INÍCIO CAIXA CINZA -->
                            <br><br>

                            <p><strong> A figura abaixo ilustra a disposição de um layout.</strong></p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura51.png" data-bs-toggle="modal" data-bs-target="#Imagem05">
                                    <img class="img-fluid wow fadeInDown" width="400" class="img-fluid" src="imagens/Figura51.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura 50:</strong> Representação do Leiaute de Armazéns</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem05" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura51.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte: </strong>Fonte da Figura</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Figura 01 - End -->

                            <br><br>
                            <!--SubTitulo -->
                            <p class="SubTitulo" id="top5-two"> O que Considerar para a Definição do Layout:</p>
                            <hr>

                            <p>A grande decisão do projeto de armazenagem está em apontar onde itens específicos de estoque devem ser localizados, como devem ser arranjados e que método usar para encontrar o estoque, de modo a minimizar as despesas de movimentação, obter máxima utilização do espaço e satisfazer as restrições de localização do produto, como segurança um seguro contra incêndio, compatibilidade e necessidades de separação de pedidos. O nível de atividade e de serviço desejado determina o seu custo. Para tanto, deve-se buscar um equilíbrio entre três objetivos:</p>

                            <ul class="none Texto">

                                <li class="wow fadeInDown" data-wow-delay=".5s"><strong class="CorAzulEstadoEscuro"> Bom fluxo de material:</strong> O fluxo de material diz respeito ao percurso dos itens desde o ponto de recebimento à expedição, sendo determinado pela disposição de recebimento, estocagem, embalagem e estruturas de estocagem.</li>

                                <br>
                                <li class="wow fadeInDown" data-wow-delay=".8s"><strong class="CorAzulEstadoEscuro"> Custos operacionais baixos para estocagem e coleta:</strong> O melhor percurso é o mais curto para o fluxo do material, porque custa dinheiro mover material e para isso, dois princípios, devem ser seguidos: minimizar o retrocesso, buscando direcionar o movimento dos itens para a expedição e localizar as atividades relacionadas próximas, visando minimizar as distâncias de movimentação entre duas operações, por exemplo. A coleta e a embalagem são atividades que devem ser paralelas, por haver quantidades menores de movimentação entre ambas.</li>

                                <br>
                                <li class="wow fadeInDown" data-wow-delay="1.0s"><strong class="CorAzulEstadoEscuro"> Eficiente utilização do espaço de estocagem e dos equipamentos:</strong> o objetivo básico da armazenagem é estocar mercadorias da maneira mais eficiente possível, usando o espaço nas três dimensões (comprimento, largura e altura) com o intuito de aperfeiçoar a armazenagem e proporcionar a movimentação rápida e fácil dos materiais desde o recebimento até a expedição, considerando como premissas para isso um eficiente sistema de posicionamento e localização dos itens no interior do armazém e o uso de equipamento adequado que possibilite economia de tempo e mão de obra. Vale destacar que o espaço é um recurso básico, cuja manutenção representa um investimento considerável, devendo ser cuidadosamente planejado e utilizado.</li>

                                </ol>

                                <br><br>

                                <p><strong> Para um projeto de leiaute é interessante destacarmos algumas sugestões básicas com o objetivo de otimizar a fluxo das operações e aproveitar ao máximo o espaço existente:</strong></p>

                                <ul class="none Texto">
                                    <br>
                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Procurar as plantas dos edifícios e das utilidades ou, se não for possível encontrá-las, refazê-las;</li>
                                    <br>
                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Definir a localização de todos os obstáculos, como colunas de apoio, saídas de emergências, poços de escada, elevador e equipamentos contra incêndios;</li>
                                    <br>
                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Traçar o fluxo dos materiais considerando recebimento, armazenagem, separação de requisições e expedição;</li>
                                    <br>
                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Localizar as áreas de recebimento e expedição, levando em consideração as melhores posições para recebimento dos transportadores;</li>
                                    <br>
                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Localizar as áreas primárias, secundárias, de separação de requisições e de estocagem, para que se tenha máximo espaço, movimentação de materiais e eficiência de mão-de-obra, para os materiais mais importantes a serem estocados;</li>
                                    <br>
                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Rever a política de armazenamento a fim de tentar reduzir estoques e ganhar espaço no almoxarifado.</li>
                                    <br>
                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Tentar ganhar espaço vertical, principalmente nos itens de menor rotatividade procurando empilhá-los ao máximo, ou acondicionando-os em estruturas verticais.</li>
                                    <br>
                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Enterrar tanques de combustíveis, solventes e demais líquidos.</li>
                                    <br>
                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Colocar escritórios e instalações sanitárias em mezaninos, aproveitando-se a área útil por baixo deles.</li>
                                    <br>
                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Utilizar prateleiras metálicas desmontáveis;</li>
                                    <br>
                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Definir o sistema de localização do estoque, onde cada item irá ficar e;</li>
                                    <br>
                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Avaliar as alternativas de leiaute do estoque, quanto à intensidade de uso, semelhança de agrupamento por localização dos itens, à distribuição dos locais por tamanho e peso, às características físicas e químicas dos materiais e à utilização do espaço.</li>

                                </ul><br><br>

                                <p><strong> Uma má definição de leiaute pode causar altos custos no rearranjo. Para evitar tais custos é necessário realizar um estudo considerando:</strong></p>

                                <ul class="none Texto">
                                    <li class="wow fadeInRight" data-wow-delay="0.4s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> As modalidades de materiais;</li>
                                    <li class="wow fadeInRight" data-wow-delay="0.5s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> A previsão de consumo e o regime de atendimento das requisições;</li>
                                    <li class="wow fadeInRight" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Os níveis de estoque;</li>
                                    <li class="wow fadeInRight" data-wow-delay="0.7s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Os maquinários e equipamentos;</li>
                                    <li class="wow fadeInRight" data-wow-delay="0.8s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> O homem;</li>
                                    <li class="wow fadeInRight" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> O movimento e a espera dos materiais e;</li>
                                    <li class="wow fadeInRight" data-wow-delay="1.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Os serviços agregados.</li>
                                </ul>
                                <br><br>

                                <!--INÍCIO CAIXA CINZA -->
                                <section id="pt2">
                                    <div class="bg-cinzaAzul container-fluid main-content">
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-10">
                                                <p class="caixa">
                                                <p>O objetivo é que projeto possibilite uma operação dentro de um ótimo de economia e rendimento, uma vez que os custos de planejamento do leiaute são inferiores aos custos de rearranjo.</p>
                                                </p>
                                            </div>
                                            <div class="col-md-1"></div>
                                        </div>
                                    </div>
                                </section>
                                <!--INÍCIO CAIXA CINZA -->



                                <br><br>
                                <!--SubTitulo -->
                                <p class="SubTitulo" id="top5-tree">Modalidades para Localizar o Estoque dentro do Armazém</p>
                                <hr>

                                <p>A Localização do estoque é o desafio de decidir o arranjo físico dos materiais em um armazém a fim de minimizar as despesas com seu manuseio, utilizar ao máximo o espaço do armazém e superar determinadas restrições à localização dos materiais, como aquelas necessárias à segurança, à proteção contra incêndios, à compatibilização entre estes e a dinâmica separação das requisições.</p>

                                <p>Muitos gestores não planejam como estocar os itens recebidos, deixando muitas vezes a cargo dos funcionários do armazém a decisão de onde alocar os materiais recém chegados. Contudo existem vários termos para decidir onde estocar cada item recém-recebido pelo armazém. Este planejamento considera desde a divisão do armazém em zonas e corredores até a subdivisão em compartimento, nível e posição.</p>

                                <!-- Fique Atento -->
                                <div class="FiqueAtentoCaixa">
                                    <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                    <div class="FiqueAtentoTexto">
                                        <p>O almoxarifado por se tratar de um setor de apoio operacional, a prioridade sempre será atender as requisições de consumo com um alto nível de serviço e para que isso aconteça os materiais deverão antecipadamente estar armazenados de forma organizada, com rápida localização e acesso facilitado.</p>
                                    </div>
                                </div>

                                <br>

                                <p><strong> Na dinâmica de atendimento das requisições de consumo, a retirada de itens do estoque poderá ser planejada considerando um dos três procedimentos a seguir:</strong></p>

                                <ol class="Texto texto-number">
                                    <li> No primeiro procedimento existe uma seleção de ida e volta em que apenas um item ou carga é separado de uma determinada localização, uma viagem típica se faria saindo do local de atendimento (doca) selecionando um material e voltando novamente ao local de atendimento.</li>
                                    <br>

                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura52.jpg" data-bs-toggle="modal" data-bs-target="#Imagem06">
                                            <img class="img-fluid wow fadeInDown" width="400" class="img-fluid" src="imagens/Figura52.jpg" alt="Alt da imagem fica aqui">
                                        </a>
                                        <p class="FonteFigura"><strong>Figura 51:</strong> Representação da Coleta de Requisição Individualizada</p>
                                    </div>

                                    <!-- Imagem 01 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem06" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="imagens/Figura52.jpg" alt="Alt da imagem fica aqui">
                                                </div>
                                                <div class="modal-footer text-center">
                                                    <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Figura 01 - End -->

                                    <br>
                                    <li>Em um segundo procedimento, haverá o roteamento da separação, em que vários itens de uma requisição são separados antes de voltar ao ponto de saída (local de atendimento ou doca). O volume coletado na rota pode ser limitado pela capacidade de carga do separador da requisição.</li>
                                    <br>

                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura53.png" data-bs-toggle="modal" data-bs-target="#Imagem08">
                                            <img class="img-fluid wow fadeInDown" width="400" class="img-fluid" src="imagens/Figura53.png" alt="Alt da imagem fica aqui">
                                        </a>
                                        <p class="FonteFigura"><strong>Figura 52:</strong> Representação da Coleta de Requisição por Roteamento</p>
                                    </div>

                                    <!-- Imagem 01 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem08" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="imagens/Figura53.png" alt="Alt da imagem fica aqui">
                                                </div>
                                                <div class="modal-footer text-center">
                                                    <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Figura 01 - End -->


                                    <br>
                                    <li> Em um terceiro procedimento, haverá uma área de separação designada por trabalhador (separação por zona). Os separadores recuperam itens por seleção de ida e volta ou rota de separação dentro dos limites de suas áreas de trabalho.</li>
                                    <br>
                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura54.jpg" data-bs-toggle="modal" data-bs-target="#Imagem09">
                                            <img class="img-fluid wow fadeInDown" width="400" class="img-fluid" src="imagens/Figura54.jpg" alt="Alt da imagem fica aqui">
                                        </a>
                                        <p class="FonteFigura"><strong>Figura 53:</strong> Representação da Coleta de Requisição por Zona</p>
                                    </div>

                                    <!-- Imagem 01 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem09" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="imagens/Figura54.jpg" alt="Alt da imagem fica aqui">
                                                </div>
                                                <div class="modal-footer text-center">
                                                    <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Figura 01 - End -->

                                </ol>

                                <p>As decisões de localização de itens podem ser baseadas em vários fatores como: quantidade disponível para os itens de baixo giro, velocidade para os de alto giro. Os itens podem ser estocados por conterem alguma característica similar, ou também podem ser localizados devido a sua forma ou dimensão, quando são compridos e difíceis de manusear e estocar, por isso deverão permanecer juntos, etc.</p>

                                <!-- Saiba Mais -->
                                <div class="SaibaMaisCaixa">
                                    <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                    <div class="SaibaMaisTexto">
                                        <p>Algumas características dos materiais devem ser analisadas para se determinar a melhor localização dos mesmos. Um fator crítico é volume das embalagens dos itens. Outro aspecto que deve ser observado é a necessidade de refrigeração de alguns materiais, ou controle de umidade. A separação dos itens perigosos e com forte odor também se faz necessária.</p>
                                    </div>
                                </div>
                                <br>

                                <p>Materiais que são estocados de acordo com a sua densidade podem ser separados de forma mais acelerada, além de se evitar eventuais desperdícios por se empilhar materiais mais pesados em cima de materiais que podem ser espremidos e danificados.</p>

                                <p>A velocidade que o material flui pelo armazém é um dos critérios mais comuns para disposição destes no estoque. Os itens de giro mais rápido são colocados próximos ao local de atendimento (doca) e próximos do piso. Os itens que são expedidos numa quantidade inferior a duas caixas por mês poderiam estar nas estantes. Um item que seja tão popular que despacha mais de um palete por dia deveria permanecer nesse palete numa área de separação para encaminhamento. A característica mais importante da velocidade do material é a habilidade para reduzir o deslocamento.</p>

                                <p>Quando os itens de giro rápido são colocados em locais onde são fáceis de manusear, o separador pode deslocar-se mais rapidamente e ao mesmo tempo evitar o risco de dano. Os funcionários que usam estantes dinâmicas trabalharão com menos esforços quando os itens de giro mais rápido estão na “zona nobre”, entre a altura dos joelhos e dos ombros. Evitando a necessidade de se inclinar ou se esticar, o separador de pedidos pode operar com maior velocidade e menos fadiga.</p>

                                <p><strong> O layout é também muitas vezes baseado intuitivamente, os métodos intuitivos têm aceitação já que fornecem algumas diretrizes úteis para o leiaute sem a necessidade de matemática de alto nível. Com frequência, a disposição é baseada intuitivamente em quatro critérios:</strong></p>
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
                                                <strong class="CorAzulEstadoEscuro"> Complementaridade:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>complementaridade refere-se à idéia de que itens frequentemente requisitados juntos devem estar localizados próximos uns dos outros. Exemplos de tais itens são tinta e pincel, lâminas de barbear e creme de barbear, e canetas e lápis.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fim Accordion 01 -->

                                    <!-- Accordion 02 -->
                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item02">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                <strong class="CorAzulEstadoEscuro"> Compatibilidade:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>A compatibilidade inclui a questão se os itens podem ser colocados próximos um do outro. Pneus de automóveis não são compatíveis com produtos alimentícios, nem a gasolina é compatível com os cilindros de oxigênio. Consequentemente, não poderiam ser colocados próximos uns dos outros. Os produtos são considerados compatíveis se não houver restrição na proximidade de sua localização. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fim Accordion 02 -->

                                    <!-- Accordion 03 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item03">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                <strong class="CorAzulEstadoEscuro">Popularidade:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> O layout por popularidade sugere que os custos de manuseio de materiais podem ser minimizados pela localização dos itens de rápida movimentação perto do ponto de saída, ou área de reserva, e os itens de movimentação mais lenta atrás destes. Isso supõe que os itens que requerem um grande número de viagens para um dado nível de demanda terão a distância de trajeto mais curta possível por viagem de coleta de requisição. </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Accordion 03 -->

                                    <!-- Accordion 04 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item04">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                                <strong class="CorAzulEstadoEscuro"> Tamanho:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> O layout por tamanho sugere que os custos de manuseio podem ser minimizados se o tamanho (volume cúbico) do item for usado como uma diretriz no layout. Pela localização de itens menores perto do ponto de saída do armazém, o manuseio de materiais pode ser menor do que em um arranjo por popularidade, porque uma densidade maior de itens pode ser localizada próxima do local de despacho. Entretanto, o layout por tamanho não garante custos menores do que o layout por popularidade. O método por tamanho é uma boa escolha quando o giro elevado está concentrado nos itens menores. </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Accordion 03 -->
                                </div><br><br>
                                <!-- FIM Accordion -->


                                <p><strong> Em uma modalidade de localização de estoque deve-se considerar pelo menos três critérios intuitivos: o da compatibilidade, o da popularidade e o do tamanho.</strong></p>

                                <br><br>
                                <!--SubTitulo -->
                                <p class="SubTitulo" id="top5-four">Características do Leiaute que Facilitam a Movimentação dos Materiais</p>
                                <hr>

                                <p><strong> Além do que até então foi estudado algumas características de configuração interna do armazém influenciam também na obtenção de melhor movimentação dos materiais e consequentemente melhor adequação do leiaute, são estas:</strong></p>

                                <!-- Início Accordion -->
                                <div class="accordion accordion-flush" id="AccordionFase01">
                                    <center>
                                        <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                    </center>
                                    <!-- Accordion 01 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item01">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne1" aria-expanded="false" aria-controls="flush-collapseOne1">
                                                <strong> 1) Portas:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne1" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>Devem permitir a passagem de empilhadeiras carregadas. Têm normalmente 2,4 m de altura e igual largura.</p>
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura56.jpg" data-bs-toggle="modal" data-bs-target="#Imagem10">
                                                        <img class="img-fluid" width="400" class="img-fluid" src="imagens/Figura56.jpg" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong>Figura 54:</strong> Representação da Porta adequada de um armazém.</p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura56.jpg" alt="Alt da imagem fica aqui">
                                                            </div>
                                                            <div class="mooh dal-footer text-center">
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
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo2" aria-expanded="false" aria-controls="flush-collapseTwo2">
                                                <strong>2) Corredores:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo2" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>A largura é determinada pelo equipamento utilizado para manuseio. Para empilhadeira a gasolina, de uma tonelada, são necessários corredores de 2,4 m; para empilhadeiras de duas toneladas, corredores de 3 m; e para máquinas de 3 t, corredores de 3,6 m. Os corredores principais e os utilizados para embarque devem permitir o trânsito de duas empilhadeiras ao mesmo tempo. A localização é estabelecida em função das portas de acesso, elevadores, chutes ou arremessos etc. As empilhadeiras elétricas necessitam de menores corredores.</p>

                                                <p>Entre mercadorias e as paredes são necessárias passagens de 60 cm que deem acesso às instalações para combate a incêndios.</p>
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura57.jpg" data-bs-toggle="modal" data-bs-target="#Imagem11">
                                                        <img class="img-fluid" width="400" class="img-fluid" src="imagens/Figura57.jpg" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong>Figura 55:</strong> Representação das Empilhadeiras Transitando nos Corredores do Armazém.</p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura57.jpg" alt="Alt da imagem fica aqui">
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
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree3" aria-expanded="false" aria-controls="flush-collapseThree3">
                                                <strong>3) Pilhas:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseThree3" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> O topo das pilhas de mercadorias deve ficar um metro, aproximadamente, abaixo dos sprinklers contra incêndios, instalados no teto. A altura máxima recomendada é de cinco pilhas, devido às limitações dos equipamentos de elevação e ao custo de armazéns muito altos. </p>
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura58.jpg" data-bs-toggle="modal" data-bs-target="#Imagem12">
                                                        <img class="img-fluid" width="400" class="img-fluid" src="imagens/Figura58.jpg" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong>Figura 56:</strong> Representação do Empilhamento Adequado no Armazém.</p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura58.jpg" alt="Alt da imagem fica aqui">
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
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour4" aria-expanded="false" aria-controls="flush-collapseFour4">
                                                <strong>4) Piso:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseFour4" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> Com excessiva frequência, os pisos são mal dimensionados e não apresentam a resistência necessária. Devem ser construídos em concreto e suportar o peso dos materiais estocados e o trânsito das empilhadeiras carregadas. Para tráfego de empilhadeiras elétricas, a construção do piso deve ser especial.</p>
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura59.jpg" data-bs-toggle="modal" data-bs-target="#Imagem13">
                                                        <img class="img-fluid" width="400" class="img-fluid" src="imagens/Figura59.jpg" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong>Figura 57:</strong> Representação do Piso Adequado no Armazém.</p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura59.jpg" alt="Alt da imagem fica aqui">
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

                                    <!-- Accordion 04 -->

                                    <!-- Accordion 05 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item05">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive5" aria-expanded="false" aria-controls="flush-collapseFive5">
                                                <strong>5) Embarque/Desembarque:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseFive5" class="accordion-collapse collapse" aria-labelledby="Item05" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>O local destinado a embarque/desembarque tem normalmente 1,25 m de altura sobre o piso, para facilitar as operações. A fim de determinar o número de lugares para acostamento de veículos, calcula-se quantidade diária de embarques e desembarques e o tempo de carga e descarga.</p>

                                                <p>A demora das operações de carga varia com o equipamento para manuseio. Uma empilhadeira pode carregar ou descarregar um caminhão em 15 minutos, se o material for paletizado; manualmente, a operação requereria de uma hora e meia a três. Próximo à área de embarque e desembarque é necessário reservar um local para armazenagem temporária, onde são colocados os materiais para as conferências de recebimento ou classificação do despacho.</p>
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura60.jpg" data-bs-toggle="modal" data-bs-target="#Imagem14">
                                                        <img class="img-fluid" width="400" class="img-fluid" src="imagens/Figura60.jpg" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong>Figura 58:</strong> Representação do Docas de Embarque/Desembarque.</p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura60.jpg" alt="Alt da imagem fica aqui">
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

                                    <!-- Accordion 06 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item06">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix6" aria-expanded="false" aria-controls="flush-collapseSix6">
                                                <strong>6) Escritórios:</strong></strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseSix6" class="accordion-collapse collapse" aria-labelledby="Item06" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>Costumam estar próximos aos locais de embarque ou em mezaninos sobre área de armazenagem. Seu tamanho varia com as operações do armazém. Algumas organizações possuem instalações centrais onde estão localizados escritórios, controle, manutenção etc.</p>
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura61.jpg" data-bs-toggle="modal" data-bs-target="#Imagem15">
                                                        <img class="img-fluid" width="400" class="img-fluid" src="imagens/Figura61.jpg" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong>Figura 59: Representação do Escritório em Mezanino do Armazém.</strong></p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem15" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura61.jpg" alt="Alt da imagem fica aqui">
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

                                    <!-- Accordion 06 -->
                                </div><br><br>
                                <!-- FIM Accordion -->










                                <br><br>
                                <!--SubTitulo -->
                                <p class="SubTitulo" id="top5-five">Situações que Influenciam a Atualização do Leiaute</p>
                                <hr>

                                <p>Cada atividade de armazém apresenta um fluxograma típico, o que não quer dizer que permaneça estático através dos anos. Novos procedimentos e novos equipamentos podem tornar obsoleto um arranjo de homem, equipamentos e materiais que era perfeitamente adequado para as condições vigentes na época de implantação, por causa da evolução tecnológica de métodos, processos, equipamentos e até, como acontece frequentemente, com respeito a novos materiais que surgem. O leiaute sofre alterações periódicas que influem profundamente na rotina do armazém.</p>

                                <p>Para alguns casos essas mudanças são até previstas. A indústria alimentícia, graças ao mercado altamente competitivo, lança periodicamente tipos de produtos completamente novos quanto à embalagem e região de atendimento. Isso exige muitas vezes grandes alterações nas operações de armazém: mais equipamentos, mais homens, maior flexibilidade.</p>

                                <p>Assim, não só a instalação inicial como também eventuais ampliações e modificações de adaptação aos produtos mutáveis são englobadas pelo leiaute. Uma organização que dispõe de pessoal devidamente treinado pode efetuar independentemente os estudos de leiaute. É o caso de indústrias que, devido a sua atividade, antecipam as mudanças periódicas no processo ou no produto.</p>

                                <p><strong> Quando se tratar de experiência isolada, própria da implantação de um novo armazém, mudanças nas instalações ou necessidade de atualização, a solução reside nos estudos efetuados por consultorias especializadas em assessoria industrial e racionalização de trabalho, analisando, entre outras, as seguintes situações que originam uma mudança de leiaute:</strong></p>

                                <ol type="a" class="Texto">
                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"><strong class="CorAzulEstadoEscuro"> Modificação do material pelo fabricante:</strong> Mercados altamente competitivos exigem muitas vezes modificações periódicas dos produtos, que afetam os equipamentos, a mão de obra e às vezes a área disponível.</li>

                                    <br>
                                    <li class="wow fadeInLeft" data-wow-delay="0.5s"><strong class="CorAzulEstadoEscuro"> Lançamento de novo produto pelo fabricante:</strong> O desenvolvimento de um novo produto, ou mesmo a interrupção na fabricação de um produto que figurava na linha normal do fabricante, envolve modificações na estrutura de armazenagem; o novo leiaute deve ser desenvolvido a medida que a relação custo & benefício se torne significativa nas operações.</li>

                                    <br>
                                    <li class="wow fadeInLeft" data-wow-delay="0.7s"><strong class="CorAzulEstadoEscuro"> Variação na demanda:</strong> Um aumento ou uma redução significativa no consumo justifica estudos de capacidade ociosa, obsolescência iminente do material, adequação do equipamento existente, todos perfeitamente enquadrados dentro das finalidades do leiaute.</li>

                                    <br>
                                    <li class="wow fadeInLeft" data-wow-delay="0.9s"><strong class="CorAzulEstadoEscuro"> Obsolescência das instalações:</strong> Procedimentos, equipamentos e mesmo a edificação podem tornar-se um entrave na armazenagem de determinado produto. O problema do equipamento é o que menos afeta o leiaute nestes casos; a obsolescência de um processo exige, por outro lado, modificações sensíveis, ao passo que, no caso da edificação, o leiaute pode indicar a conveniência em se ampliarem as instalações, uma construção de novo bloco ou mesmo a mudança completa do depósito.</li>

                                    <br>
                                    <li class="wow fadeInLeft" data-wow-delay="1.0s"><strong class="CorAzulEstadoEscuro"> Ambiente de trabalho inadequado:</strong> O leiaute deve levar em conta as modificações necessárias para atenuar o efeito do ruído, das temperaturas anormais, presença de agentes agressivos, enfim, todos os fatores que podem afetar o rendimento de trabalho do elemento humano. O estudo e a disposição das estações de trabalho, acesso a materiais e ferramental fazem parte deste tópico.</li>

                                    <br>
                                    <li class="wow fadeInLeft" data-wow-delay="1.2s"><strong class="CorAzulEstadoEscuro"> Necessidade de prevenção de acidentes:</strong> O leiaute deve prever a localização de uma série de instalações que possam atender em caráter de emergência os funcionários que entram em contato com produtos químicos altamente corrosivos, o isolamento ou confinamento de certos locais de trabalho, o dimensionamento e a demarcação de corredores, passagens, áreas de tráfego de veículos, obstruções etc., tendo por finalidade não só a proteção como também eventual atendimento de emergência de acidentados.</li>

                                    <br>
                                    <li class="wow fadeInLeft" data-wow-delay="1.3s"><strong class="CorAzulEstadoEscuro"> Oportunidade de redução de custos:</strong> Um melhor aproveitamento da edificação da mão de obra e dos equipamentos, produtos de um leiaute adequado, traz consigo uma redução nos custos não só de estocagem, como também de manutenção.</li>

                                </ol>

                                <br><br>
                                <!--SubTitulo -->
                                <p class="SubTitulo" id="top5-six">O Que é um Sistema de Endereçamento?</p>
                                <hr>

                                <p>O objetivo de um sistema de endereçamento de armazém é estabelecer os meios necessários à perfeita identificação da localização dos materiais estocados sob a responsabilidade do Almoxarifado. Deverá ser utilizada uma simbologia (sinalização) representativa de cada local de estocagem, abrangendo desde as divisões do armazém, em seções, as vias de circulação, até chegar ao menor espaço de unidade de estocagem, que poderá ser uma prateleira ou uma subdivisão da prateleira.</p>

                                <p><strong>
                                        O gestor do almoxarifado deverá ser o responsável pela manutenção do sistema de endereçamento, e para isso deverá dispor de um esquema de identificação que defina detalhadamente a posição e a situação dos espaços das respectivas áreas de estocagem. Esse esquema nada mais é do que a representação gráfica em forma de planta baixa do leiaute do armazém cuja definição estudamos no item anterior desta disciplina. Este esquema pode ser representado pela Figura abaixo.</strong></p>


                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura62.png" data-bs-toggle="modal" data-bs-target="#Imagem16">
                                        <img class="img-fluid wow fadeInDown" src="imagens/Figura62.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura"><strong> Figura 60: Representação da Planta Baixa do Leiaute do Armazém
                                        </strong></p>
                                </div>

                                <!-- Imagem 01 - MODAL -->
                                <div class="modal fade text-center" id="Imagem16" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura62.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Fonte: </strong>Fonte da Figura</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 01 - End -->

                                <p>A partir da planta baixa do leiaute do armazém, poderão ser atribuídos códigos de identificação de cada divisão ou subdivisão do armazém das vias de circulação, estantes até chegar ao menor espaço de unidade de estocagem. Após esse estudo deve ser providenciada a sinalização do armazém por intermédio de placas indicativas, pinturas no piso e outras formas de sinalização de forma que a partir da sequência de sinais um estoquista separador encontre qualquer um dos locais de estocagem dentro do armazém.</p>

                                <div class="FiqueAtentoCaixa">
                                    <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                    <div class="FiqueAtentoTexto">
                                        <p>A cada menor unidade de estocagem do armazém será associado uma especificação de material denominada “Stock Keeping Unit” - SKU, em português “Unidade de Manutenção de Estoque”, é definido como um identificador único de um material estando normalmente associado a um código identificador.</p>
                                    </div>
                                </div>



                                <p>O SKU, ao contrário de outras formas de organização de estoques, está relacionado diretamente ao número de itens mantidos em estoque. Assim, um almoxarifado que possui um Catálogo de Materiais com alto nível de padronização pode possuir um estoque volumoso, mas dificilmente contará com mais do que algumas dúzias de diferentes SKUs, pois o portfólio de materiais é relativamente pequeno. Por outro lado, um almoxarifado com um catálogo não padronizado conta com dezenas de milhares de SKUs distintos, pelo número de itens diferentes que é obrigado a manter em estoque.</p>

                                <p>Vale ainda lembrar que, no caso de materiais de uma mesma linha, mas com diferentes cores ou tamanhos e dependendo do caso até unidades de fornecimento diferentes, um SKU distinto é geralmente atribuído a cada uma dessas variantes.</p>
                                <!-- Importante -->
                                <div class="ImportanteCaixa">
                                    <p class="ImportanteTitulo"> Importante</p>
                                    <div class="ImportanteTexto">
                                        <p>Quando estudamos a classificação e catalogação de materiais, vimos que entre as diversas fases do processo de classificação de materiais havia a fase de <strong>“codificação”</strong> que consiste na atribuição de uma série de números e/ou letras a cada item de material, de forma que essa informação, compilada em um único código, represente as características do item. Cada item terá, assim, um único código esse código é o SKU.</p>
                                    </div>
                                </div>
                                <br>
                                <!-- Saiba Mais -->
                                <div class="SaibaMaisCaixa">
                                    <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                    <div class="SaibaMaisTexto">
                                        <p>Os SKUs foram criados para facilitar a comunicação do pessoal que diariamente estão em contato com milhares de produtos dentro de um armazém trabalhando com um volume de dados enorme, então para simplificar é muito mais fácil e rápido localizar pelo SKU "tal" do que ficar tentando descrever um determinado item estocado. Além disso, aplica-se todo o processo de gerenciamento de estoque.</p>
                                    </div>
                                </div>
                                <br>

                                <p>Dependendo da filosofia de armazenagem cada SKU pode ter uma localização fixa ou variável no armazém. No caso da localização fixa, cada SKU é armazenado num local, no qual só pode ser encontrado aquele e mais nenhum SKU. No caso da localização variável, pode-se encontrar qualquer SKU em qualquer parte do armazém.</p>
                                <section id="pt2">
                                    <div class="bg-cinzaAzul container-fluid main-content">
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-10">
                                                <p class="caixa">
                                                <h4 class="wow fadeInLeft" data-wow-delay="0.6s">
                                                    <p>Um sistema de endereçamento é um processo baseado na velha premissa de que tudo deve estar em seu lugar e que deve haver um lugar para tudo. Ele determina o melhor local para estocar cada SKU com base em uma série de fatores. O objetivo é reduzir o tempo de trajeto, aumentar a acurácia das separações, eliminar acidente e aumentar a utilização dos ativos tanto da mão de obra quanto do espaço do armazém.</p>
                                                </h4>
                                                </p>
                                            </div>
                                            <div class="col-md-1"></div>
                                        </div>
                                    </div>
                                </section>
                                <br><br>


                                <!-- SubTitulo -->
                                <p class="SubTitulo" id="top5-seven"> Tipos de Sistema de Endereçamento</p>
                                <hr>

                                <p>Endereçar o armazém é uma excelente idéia no papel, mas, na realidade, poucos gestores de almoxarifado público a coloca em prática de forma disciplinada. A maioria alega saber fazer o endereçamento, entretanto o que geralmente temos é uma pessoa no controle do estoque que gera um relatório sobre o que está entrando no armazém e decide onde colocá-lo.</p>

                                <p>O benefício de um sistema de endereçamento eficaz pode ser significativo, sobretudo para o usuário final com grandes instalações e um grande número de SKUs (“Stock Keeping Unit”, unidade distinta mantida em estoque). Esta economia vem do aumento da produtividade dos colaboradores que possibilita destinar uma equipe menor para uma área de separação de requisições. Além disso, é possível conseguir redução das avarias, aumento da rapidez e da acurácia na realização de inventários.</p>

                                <p>Mas para implantar um sistema de endereçamento faz necessário entender os tipos existentes e qual melhor se adapta as instalações disponíveis e a quantidade de SKUs estocados. <strong>Teoricamente pode se dividir os sistemas endereçamento em três categorias: sistema de memória, sistema de endereçamento fixo e sistema de endereçamento variável.</strong> </p>
                                <br>

                                <div class="text-center">
                                    <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                </div>
                                <br>




                                <!-- Accordion 01 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item01">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse1" aria-expanded="false" aria-controls="flush-collapse1">
                                            <strong>Sistema de memória</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapse1" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p> O sistema de endereçamento por memória é o sistema que depende da memória das pessoas. Este sistema pode funcionar bem se forem levados em conta alguns requisitos:
                                                <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Apenas uma pessoa trabalha em uma determinada área de estocagem;</li>

                                                <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> O número de SKU (unidade individual de estocagem) deve ser relativamente pequeno;</li>

                                                <li> <i class="fa fa-arrow-right CorVerdeClaroEstado"></i> O número de locais diferentes de estocagem é relativamente pequeno.</li>
                                                <br>
                                                Caso esses requisitos não sejam cumpridos, o sistema de memória pode ser desastroso, devido ao sistema usar a memória do operador, que é limitada. Também deve ser levado em conta que este tipo de sistema pode trazer dificuldades no momento da troca de operadores, devido à informação de localização dos produtos estar guardada na memória do operador anterior.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 01 -->





                                <!-- Accordion 01 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item01">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
                                            <strong>Sistema de endereçamento fixo</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapse2" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>
                                                O sistema com endereçamento fixo é quando um SKU é designado para um lugar ou conjunto de lugares específicos no armazém. São usados geralmente dois tipos de estocagem fixa:
                                                <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Estocagem de itens em sequencia numérica;</li>

                                                <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Determinação do local baseado na rotatividade de um SKU e em seus níveis de estoque.</li>
                                                <br>
                                            <p>Nos sistemas de endereçamento fixo, os boxes são determinados pelo estoque máximo que se pode colocar neles. Uma estimativa do espaço necessário para definir a estocagem fixa é estimar duas vezes o estoque médio.
                                                O número de boxes vazios destinados a um SKU deve armazenar seu nível máximo de estoque. Então, o número de boxes vazios para estocagem definitiva é igual à soma dos espaços vazios exigidos para cada SKU.
                                                Este sistema facilita a memorização das posições dos produtos no estoque porque são fixas. Estudos comparativos entre o endereçamento fixo e variável mostram que quando a estocagem fixa for baseada na rotatividade do SKU, pode haver ganhos econômicos maiores no tempo de viagem com relação aos sistemas de endereçamento variável. Uma das principais desvantagens é que existe uma ociosidade de espaços no armazém utilizando este sistema. Os mesmos estudos comparativos mostram que este tipo de estocagem pode exigir de 20% a 60 % mais boxes do que o necessário para estocagem variável.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Accordion 01 -->


                                <!-- Accordion 01 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item01">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapse3">
                                            <strong>Sistema de Endereçamento Variável</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapse3" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>
                                                sistema de endereçamento variável se caracteriza por designar um SKU para armazenar aleatoriamente no armazém, ou seja, em qualquer lugar do armazém onde tiver um espaço disponível. O endereçamento variável geralmente funciona da seguinte maneira
                                                <li> <i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Após o recebimento de algum item, é feita uma consulta por intermédio de um sistema informatizado para verificar se já existe estoque deste item, e qual sua localização;</li>

                                                <li> <i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Verifica-se, então, se já existe um local que contém aquele item e se existe espaço disponível. Caso tenha, armazena-se o item neste local e atualiza-se o registro de localização;</li>

                                                <li> <i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Caso não exista o item recém chegado armazenado, é feita uma consulta via sistema, para se achar um ponto disponível de estocagem;</li>

                                                <li>
                                                    <iclass="fa fa-arrow-right CorVerdeClaroEstado"></i> Atualiza-se, então, o registro de localização do material;
                                                </li>

                                                <li> <i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Quando requisita-se o item, consulta-se o seu registro para descobrir a sua localização;</li>

                                                <li> <i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Retira-se, então, o material na quantidade desejada, e atualiza-se o registro de localização.</li>

                                                <br>
                                            <p>Nos sistemas de endereçamento fixo, os boxes são determinados pelo estoque máximo que se pode colocar neles. Uma estimativa do espaço necessário para definir a estocagem fixa é estimar duas vezes o estoque médio.
                                                O número de boxes vazios destinados a um SKU deve armazenar seu nível máximo de estoque. Então, o número de boxes vazios para estocagem definitiva é igual à soma dos espaços vazios exigidos para cada SKU.
                                                Este sistema facilita a memorização das posições dos produtos no estoque porque são fixas. Estudos comparativos entre o endereçamento fixo e variável mostram que quando a estocagem fixa for baseada na rotatividade do SKU, pode haver ganhos econômicos maiores no tempo de viagem com relação aos sistemas de endereçamento variável. Uma das principais desvantagens é que existe uma ociosidade de espaços no armazém utilizando este sistema. Os mesmos estudos comparativos mostram que este tipo de estocagem pode exigir de 20% a 60 % mais boxes do que o necessário para estocagem variável.
                                                <br>
                                                O sistema de endereçamento variável é mais indicado quando as condições de armazenagem variam significativamente em situações altamente sazonais e dinâmicas. O único inconveniente deste sistema é o perfeito método de controle que deve existir sobre o registro de localização no sistema informatizado, sob o risco de possuir material em estoque perdido em que somente será descoberto ao acaso ou na realização do inventário.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <!-- Fim Accordion 01 -->
                                <!-- Importante -->
                                <div class="ImportanteCaixa">
                                    <p class="ImportanteTitulo"> Importante</p>
                                    <div class="ImportanteTexto">
                                        <p>O sistema de endereçamento variável é mais indicado quando as condições de armazenagem variam significativamente em situações altamente sazonais e dinâmicas. O único inconveniente deste sistema é o perfeito método de controle que deve existir sobre o registro de localização no sistema informatizado, sob o risco de possuir material em estoque perdido, em que somente será descoberto ao acaso ou na realização do inventário.</p>
                                    </div>
                                </div>



                                <br>
                                <br>
                                <!-- SubTitulo -->
                                <p class="SubTitulo" id="top5-eight">Características das Sinalizações em um Sistema de Endereçamento</p>
                                <hr>

                                <p>Seja qual for o sistema de endereçamento fixo ou variável, é necessário providenciar a sinalização do armazém é recomendável uma metodologia simples e de lógica fácil, que possa ser compreendida tanto pelos funcionários efetivos do armazém, como também pelos temporários, contratados em momentos de pico, a exemplo do que ocorre no fim de ano.</p>

                                <p>A idéia básica é desenvolver uma orientação geográfica acompanhada por farta sinalização, de modo a evitar que uma pessoa precise fazer cálculos para localizar-se no armazém ou sinta qualquer outra dificuldade.</p>

                                <p>Com facilidade para movimentar-se no armazém, o funcionário tem clareza dos locais onde deve guardar e retirar os materiais, o que diminui muito os erros de endereçamento e mantém consistentes as informações físicas e dos sistemas de informação, como os softwares de gerenciamento de armazéns.</p>

                                <section id="pt2">
                                    <div class="bg-cinzaAzul container-fluid main-content">
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-10">
                                                <p class="caixa">
                                                <h4 class="wow fadeInLeft" data-wow-delay="0.6s">
                                                    <p>A maneira como uma cidade identifica as moradias aplica-se, de forma análoga, aos endereços dentro de um armazém: ruas, números de casas e edifícios, andares e números de apartamentos são perfeitos para identificar corredores (ruas), módulos (edifícios), nível (andar) e vão (apartamento).
                                                        Essa analogia com a vida das pessoas deixa o sistema muito conveniente para a localização das posições de armazenamento, pois já faz parte da cultura dos funcionários.
                                                    </p>
                                                </h4>
                                                </p>
                                            </div>
                                            <div class="col-md-1"></div>
                                        </div>
                                    </div>
                                </section>

                                <br><br>

                                <div class="ImportanteCaixa">
                                    <p class="ImportanteTitulo"> Importante</p>
                                    <div class="ImportanteTexto">
                                        <p>Um princípio importante no conceito de endereçamento de armazéns é evitar o uso de letras. Estas são limitadas, confusas e não fazem uma referência direta de localização em nossa mente. Por exemplo, se uma pessoa estiver na rua 4 e precisar direcionar-se até a rua 14, imediatamente ela sabe que precisará deslocar-se dez ruas. Mas, se estiver na rua “D” e precisar ir até a rua “O”, quantas ruas terá de deslocar-se? O cálculo fica muito mais demorado.</p>
                                    </div>
                                </div>

                                <br>
                                <p><strong>Acima de tudo é importante conceituar cada componente do sistema de endereçamento:</strong> </p>

                                <!-- Início Accordion -->
                                <div class="accordion accordion-flush" id="AccordionFase01">
                                    <center>
                                        <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                    </center>
                                    <!-- Accordion 01 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item01">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse1One" aria-expanded="false" aria-controls="flush-collapse1One">
                                                <strong>a) Área:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapse1One" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>Com o objetivo de ter uma metodologia que permita o crescimento do armazém, é interessante colocarmos códigos para diferentes áreas de armazenagem, como estruturas porta-palete, áreas de blocado interna e externa, assim por diante. Dessa forma, fica fácil, por exemplo, alugar o galpão seguinte e continuar a numeração dos corredores na sequência, sem ser necessário renumerar as ruas de outros locais. A identificação de área pode, ainda, indicar um segundo ou terceiro galpão, quer esteja no mesmo local ou em outro endereço, por exemplo.</p>
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura63.jpg" data-bs-toggle="modal" data-bs-target="#Imagem17">
                                                        <img class="img-fluid" src="imagens/Figura63.jpg" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong> Figura 61: Representação das Áreas do Armazém em Primeiro Plano e Área de Blocado ao Fundo de Porta Palete </strong></p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem17" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura63.jpg" alt="Alt da imagem fica aqui">
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
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2Two" aria-expanded="false" aria-controls="flush-collapse2Two">
                                                <strong>b) Corredor: </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapse2Two" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> Refere-se às ruas do armazém. Cada corredor deve ter um único número que o identifique dentro daquela mesma área. Considere utilizar nova sequência para os corredores de locais diferentes de trabalho, como explicado acima. Nas estruturas porta-palete, identifique os corredores e não cada lado individualmente. No geral, assinalamos números de forma ascendente, iniciando por 01, começando de um lado do galpão e terminando do outro. O usual é que os corredores sejam dispostos de forma alinhada às docas.</p>
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura64.jpg" data-bs-toggle="modal" data-bs-target="#Imagem18">
                                                        <img class="img-fluid" src="imagens/Figura64.jpg" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong> Figura 62: Representação do Corredor (rua) do Armazém e Forma de Identificação
                                                        </strong></p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem18" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura64.jpg" alt="Alt da imagem fica aqui">
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
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse3Three" aria-expanded="false" aria-controls="flush-collapse3Three">
                                                <strong>c) Módulo:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapse3Three" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> Chamamos de “módulo” o conjunto de espaços de armazenagem compreendidos entre duas colunas da estrutura porta-palete. Os módulos também são chamados de prédios, pois de forma análoga ao endereçamento de uma cidade, cada rua (corredor) tem prédios (módulos) dos dois lados. Tendo em mente a mesma ideia usada nas cidades, identifique os módulos do lado esquerdo do corredor com numeração ímpar e os do lado direito com numeração par. Comece a enumerar sempre pelo lado das docas, de forma a dar uma boa ideia espacial às pessoas, uma vez que o primeiro prédio de uma rua estará situado do lado próximo às docas.</p>
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura66.png" data-bs-toggle="modal" data-bs-target="#Imagem19">
                                                        <img class="img-fluid" src="imagens/Figura66.png" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong> Figura 63: Representação do Módulo (estrutura porta-palete)</strong></p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem19" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura66.png" alt="Alt da imagem fica aqui">
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
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4Four" aria-expanded="false" aria-controls="flush-collapse4Four">
                                                <strong>d) Nível:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapse4Four" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>Corresponde aos andares de um prédio (módulo). Comece assinalando o número 01 para o nível mais baixo e continue de modo ascendente até o nível mais alto.</p>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- Accordion 04 -->
                                    <!-- Accordion 05 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item05">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5Five" aria-expanded="false" aria-controls="flush-collapse5Five">
                                                <strong>e) Vão:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapse5Five" class="accordion-collapse collapse" aria-labelledby="Item05" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>O espaço em cada nível de um módulo é dividido em posições de armazenamento, posição porta-palete, posição de palete ou também conhecido por “vão”. Na analogia do endereçamento das cidades, uma posição porta-palete corresponde a um apartamento de um andar em um prédio da rua. Em cada nível, assinale números para cada posição de forma ascendente, a começar por 01 da esquerda para a direita. </p>
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura68.png" data-bs-toggle="modal" data-bs-target="#Imagem20">
                                                        <img class="img-fluid" src="imagens/Figura68.png" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong> Figura 64: Representação do Nível e Vão de uma Estrutura Porta-Palete</strong></p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem20" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura68.png" alt="Alt da imagem fica aqui">
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Figura 01 - End -->
                                                <p>Uma vez definidos os conceitos de nosso sistema de endereçamento, fica fácil criar um código de endereçamento vertical, vejamos:</p>
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura69.png" data-bs-toggle="modal" data-bs-target="#Imagem21">
                                                        <img class="img-fluid" src="imagens/Figura69.png" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong>Figura 65: Representação da Codificação de uma Estrutura Porta-Palete </strong></p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem21" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura69.png" alt="Alt da imagem fica aqui">
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
                                    <!-- Accordion 06 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item06">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6Six" aria-expanded="false" aria-controls="flush-collapse6Six">
                                                <strong>f) Endereçamento de blocados:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapse6Six" class="accordion-collapse collapse" aria-labelledby="Item06" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>Para blocados, o endereçamento corresponde ao endereço de um bairro só de casas, ou seja, não haveria a necessidade de indicar o nível e tampouco o vão. É necessário endereçar apenas a área, a rua e o número da posição do palete, conforme a figura abaixo.
                                                </p>
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figur71.png" data-bs-toggle="modal" data-bs-target="#Imagem22">
                                                        <img class="img-fluid" src="imagens/Figura71.png" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong>Figura 66: Representação da Armazenagem Blocada e sua Estrutura de Codificação</strong></p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem22" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura71.png" alt="Alt da imagem fica aqui">
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

                                    <!-- Accordion 06 -->
                                    <!-- Accordion 07 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item07">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7Seven" aria-expanded="false" aria-controls="flush-collapse7Seven">
                                                <strong>g) Sinalização e identificação do endereçamento:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapse7Seven" class="accordion-collapse collapse" aria-labelledby="Item07" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> Uma vez demonstrado como endereçar as posições do armazém, faremos algumas considerações sobre a sinalização e a etiquetagem dos endereços, para que possam ser utilizados corretamente no dia a </p>
                                                <p>Em primeiro lugar, é importante saber que a sinalização é o menor investimento em relação à operação do armazém. Lembre-se sempre de que a devida sinalização ajuda os funcionários a localizar-se e deslocar-se com rapidez aos locais indicados. O investimento feito na sinalização é rapidamente recuperado pela otimização do processo de armazenamento e expedição.
                                                    O erro de um funcionário ao alocar um palete na posição errada acarreta no descontrole de dois endereços, aquele em que o palete deveria ser armazenado e aquele onde o funcionário decerto o armazenou. </p>
                                                <p>Algumas vezes, as etiquetas de endereçamento não recebem a merecida atenção na construção de um armazém. As etiquetas ficam sempre para a última hora, quando todo o orçamento já foi gasto e a data de início da operação está no limite. Mas à medida que aparecem as dificuldades para implementar um sistema de informação e a problemática do inventário geral para dar partida ao uso do sistema informatizado de endereçamento, o usuário percebe sua real importâ </p>
                                                <p>É muito comum encontrarmos longarinas repletas de várias camadas de etiquetas de papel, mas esse tipo de material é de vida curta e exige muita manutenção, pois são facilmente retiradas, perfuradas e rasuradas. As etiquetas de endereçamento devem ser planejadas com cuidado, de modo que estejam sempre ao alcance dos operadores de empilhadeiras. Uma posição de armazenamento sem etiqueta ou com etiqueta sem condições de ser lida induz ao erro e à inutilização daquele espaço, o que gera prejuízo para a organização.
                                                </p>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- Accordion 07 -->
                                    <!-- Accordion 08 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item08">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse8Eitgh" aria-expanded="false" aria-controls="flush-collapse8Eitgh">
                                                <strong>h) Placas de rua:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapse8Eitgh" class="accordion-collapse collapse" aria-labelledby="Item08" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>O início da sinalização e o endereçamento de um armazém começam pelas placas de rua, ou placas de corredor, como é o termo certo. Elas devem ser de tamanho adequado para o local, permitindo que sejam vistas a distância. Uma das medidas mais usadas é 300 x 400 mm. Elas devem ser instaladas no começo, meio e fim de cada corredor. No começo e no fim, aconselha-se a utilização de duas placas em “L”, de forma que possam ser lidas tanto por quem transita na rua de acesso entre as docas e os corredores das estruturas porta-palete, quanto por quem está dentro de um dos corredores. No centro do corredor, mais uma placa deve identificar a localização do funcionário sem que ele tenha de deslocar-se para saber onde se encontra.</p>
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura72.png" data-bs-toggle="modal" data-bs-target="#Imagem23">
                                                        <img class="img-fluid" src="imagens/Figura72.png" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong> Figura 67: Representação do Modelo de Placa de Sinalização de Corredores do Armazém (rua)</strong></p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem23" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura72.png" alt="Alt da imagem fica aqui">
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Figura 01 - End -->
                                                <p>Se o armazém tiver “túneis”, é aconselhável que cada rua que o túnel atravessar tenha também uma placa de rua para indicar ao operador a sua localização naquele momento.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Accordion 08 -->
                                    <!-- Accordion 09 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item04">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse9Nine" aria-expanded="false" aria-controls="flush-collapse9Nine">
                                                <strong>i) Etiquetas de endereçamento:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapse9Nine" class="accordion-collapse collapse" aria-labelledby="Item09" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">

                                                <ul class="none Texto">
                                                    <li class="wow fadeInDown"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Etiquetas de endereço porta-palete:</strong> Abaixo de cada posição porta-palete, deve existir uma etiqueta que identifique seu endereço. Essa etiqueta, fabricada com código de barras e setas para direcionamento, é aplicada na longarina logo abaixo do palete. Na primeira longarina, identificamos a posição de picking (estoque fracionado) e, nas demais, identificamos o pulmão (estoque embalado); estas serão lidas por funcionários nas operações de inventário. Nesse processo, os funcionários são levados por plataformas elevatórias ou gaiolas até o palete, lá fazendo a contagem e a leitura da etiqueta na posição para associar a mercadoria ao endereço. Dessa forma, o tempo gasto em inventário torna-se menor, pois não é necessário que o operador desça até a posição da etiqueta de coluna, podendo fazer a contagem por nível de cada estrutura.

                                                        <br><br>O primeiro nível (chão) não possui longarina e, por isso, na longarina que separa o primeiro e o segundo nível, colocam-se as etiquetas de ambos os níveis, utilizando setas para indicar cada posição. Para seguir o mesmo padrão, as demais etiquetas de inventário devem ter o mesmo modelo das setas, sempre apontando para o palete acima da longarina.
                                                    </li>
                                                    <!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura73.png" data-bs-toggle="modal" data-bs-target="#Imagem24">
                                                            <img class="img-fluid" src="imagens/Figura73.png" alt="Alt da imagem fica aqui">
                                                        </a>
                                                        <p class="FonteFigura"><strong>Figura 68: Representação das Etiquetas de Endereçamento</strong></p>
                                                    </div>

                                                    <!-- Imagem 01 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem24" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura73.png" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- Figura 01 - End -->

                                                    <br>
                                                    <li class="wow fadeInDown"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Etiquetas multinível:</strong> Nas operações de movimentação do dia a dia, os operadores de empilhadeira não sobem até a posição onde o palete está armazenado. Por isso, a leitura do código de barras do endereço é feita com uma etiqueta afixada na coluna do módulo e na altura do operador, de modo que ele possa ler a etiqueta sentado na empilhadeira sem ter de fazer qualquer manobra adicional. Essas etiquetas possuem os mesmos endereços das etiquetas de inventário, que estão em cada posição porta-palete, identificam cada lateral de um prédio e suas setas direcionam o lado a ser armazenado.</li>
                                                    <!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura74.png" data-bs-toggle="modal" data-bs-target="#Imagem25">
                                                            <img class="img-fluid" src="imagens/Figura74.png" alt="Alt da imagem fica aqui">
                                                        </a>
                                                        <p class="FonteFigura"><strong> Figura 69: Representação dos Tipos de Etiquetas de Endereço Porta-Palete (longarina e multinível)</strong></p>
                                                    </div>

                                                    <!-- Imagem 01 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem25" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura74.png" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- Figura 01 - End -->


                                                    <br>
                                                    <li class="wow fadeInDown"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Etiquetas de identificação de nível:</strong> No caso de estruturas verticais com mais de quatro andares, aconselha-se a utilização de cores para a identificação de cada nível. A utilização de cores auxilia o colaborador na operação dos níveis. Essas identificações são aplicadas nas colunas ao lado dos paletes. São etiquetas coloridas, retangulares e podem conter o número relativo ao andar que sinalizam. Em conjunto com essas etiquetas de localização de nível, as etiquetas de coluna (multinível) devem possuir as mesmas cores de referência de cada andar.</li>

                                                    <br>
                                                    <li class="wow fadeInDown"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Etiquetas de endereço de blocados:</strong> No caso de blocados, onde não existem estruturas metálicas, as etiquetas de endereçamento podem ser aplicadas no piso ou suspensas.</li>

                                                    <br>
                                                    <li class="wow fadeInDown"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Etiquetas de piso – sobrepostas:</strong> Para endereçar as posições de uma área blocada no piso, pode-se utilizar um suporte de proteção instalado sobre o piso e afixado por parafusos. Essa sistemática permite uma rápida aplicação da etiqueta com apenas dois ou quatro furos.</li>

                                                    <br>
                                                    <li class="wow fadeInDown"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Etiquetas de piso – embutidas:</strong> Quando o ressalto de um suporte de sobrepor for inconveniente ao trânsito de empilhadeiras ou transpaleteiras, a solução é utilizar um suporte embutido no piso, instalado de forma alinhada com toda a superfície, sem qualquer ressalto. É importante lembrar que as etiquetas ficarão expostas à abrasão causada pela passagem das rodas das empilhadeiras e devem ser fabricadas com material resistente e apropriado para a identificação de piso.</li>
                                                    <!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura75.png" data-bs-toggle="modal" data-bs-target="#Imagem26">
                                                            <img class="img-fluid" src="imagens/Figura75.png" alt="Alt da imagem fica aqui">
                                                        </a>

                                                    </div>

                                                    <!-- Imagem 01 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem26" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura75.png" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- Figura 01 - End -->
                                                    <!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura76.png" data-bs-toggle="modal" data-bs-target="#Imagem26.">
                                                            <img class="img-fluid" src="imagens/Figura76.png" alt="Alt da imagem fica aqui">
                                                        </a>
                                                        <p class="FonteFigura"><strong> Figura 68: Representação dos Tipos de Etiquetas de Endereço de Piso (rua e blocado)</strong></p>
                                                    </div>

                                                    <!-- Imagem 01 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem26." tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura76.png" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- Figura 01 - End -->

                                                    <br>
                                                    <li class="wow fadeInDown"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Endereçamento aéreo:</strong> Outra forma de endereçar áreas blocadas é a utilização de etiquetas aéreas, que ficam afixadas em cabos de aço, de forma que a torre da empilhadeira não as atinja. Essas etiquetas ficam a uma distância aproximada de 5 ou 6 metros de altura do piso, mas podem-se encontrar casos em que elas fiquem mais elevadas. As mesmas são fabricadas para leitura de longa distância, de até 12 m ou mais.

                                                        <br><br>Elas são feitas de materiais de fundo reflexível, que retornam uma quantidade maior da luz laser dos leitores de código de barras, com tamanho em torno de 250 x 150 mm. Quando se utiliza uma solução assim, deve-se fazer boa combinação do leitor e da qualidade e definição das barras do código a ser lido. O leitor deve ser de longa distância (long range), e possuir laser com potência adequada à aplicação.
                                                        <!-- Titulo Figura -->
                                                        <div class="text-center">
                                                            <a href="imagens/Figura77.png" data-bs-toggle="modal" data-bs-target="#Imagem26">
                                                                <img class="img-fluid" src="imagens/Figura77.png" alt="Alt da imagem fica aqui">
                                                            </a>
                                                            <p class="FonteFigura"><strong> Figura 69: Representação da Etiqueta Aérea de Leitura de Longa Distância</strong></p>
                                                        </div>

                                                        <!-- Imagem 01 - MODAL -->
                                                        <div class="modal fade text-center" id="Imagem26" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                                <div class="modal-content">
                                                                    <div class="modal-body">
                                                                        <img class="img-fluid" src="imagens/Figura77.png" alt="Alt da imagem fica aqui">
                                                                    </div>
                                                                    <div class="modal-footer text-center">
                                                                        <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- Figura 01 - End -->
                                                        <br><br>O leitor de longa distância normalmente possui dois estágios em seu gatilho; primeiro ele gera um ponto laser fixo de maior visibilidade, depois outro para a leitura. O ponto fixo auxilia o colaborador a mirar no código de barras. As barras do código também devem ser adequadas e permitir melhor leitura em longa distância.
                                                        Antes da aquisição dos coletores, deve-se levar em consideração o modo de armazenagem e a sinalização que será utilizada, para que – no caso de etiquetas de longa distância – o investimento dos coletores seja direcionado aos “long range”.
                                                    </li>

                                                    <br>
                                                    <li class="wow fadeInDown"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Sinalização de trânsito de empilhadeiras:</strong> Durante a elaboração do projeto de um armazém, leva-se em conta o tipo de equipamento de movimentação que será usado. Na busca pela otimização de espaço, é comum encontrarmos corredores estreitos onde apenas uma empilhadeira pode transitar por vez. Nesses casos, recomenda-se a definição da mão de direção para cada rua do armazém, de modo que as empilhadeiras se movimentem sem o risco de colisões e prováveis acidentes de trabalho.

                                                        <br><br>A sinalização do piso tem o objetivo de evitar acidentes e alertar os operados de empilhadeira sobre a mão de direção de cada rua, a preferência nos cruzamentos e os túneis, através de sinais pintados no piso, como “Pare” e “Túnel”.
                                                    </li>
                                                    <!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura78.png" data-bs-toggle="modal" data-bs-target="#Imagem27">
                                                            <img class="img-fluid" src="imagens/Figura78.png" alt="Alt da imagem fica aqui">
                                                        </a>

                                                    </div>

                                                    <!-- Imagem 01 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem27" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura78.png" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- Figura 01 - End -->
                                                    <!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura79.png" data-bs-toggle="modal" data-bs-target="#Imagem28">
                                                            <img class="img-fluid" src="imagens/Figura79.png" alt="Alt da imagem fica aqui">
                                                        </a>

                                                    </div>

                                                    <!-- Imagem 01 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem28" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura79.png" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- Figura 01 - End -->
                                                    <!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura80.png" data-bs-toggle="modal" data-bs-target="#Imagem29">
                                                            <img class="img-fluid" src="imagens/Figura80.png" alt="Alt da imagem fica aqui">
                                                        </a>

                                                    </div>

                                                    <!-- Imagem 01 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem29" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura80.png" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- Figura 01 - End -->
                                                    <!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura81.png" data-bs-toggle="modal" data-bs-target="#Imagem30">
                                                            <img class="img-fluid" src="imagens/Figura81.png" alt="Alt da imagem fica aqui">
                                                        </a>
                                                        <p class="FonteFigura"><strong> Figura 70: Representação da Sinalização de Trânsito de Empilhadeiras</strong></p>
                                                    </div>

                                                    <!-- Imagem 01 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem30" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura81.png" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- Figura 01 - End -->

                                                    <br>
                                                    <li class="wow fadeInDown"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Faixas limitadoras e faixas de pedestres:</strong> Faixas de largura entre 10 e 15 cm são utilizadas para demarcar as posições de blocados e o alinhamento dos paletes no piso inferior de uma estrutura.

                                                        <br><br>A pintura de faixas de pedestre evita acidentes e auxilia na convivência pacífica entre operadores de empilhadeira, demais funcionários e visitantes.
                                                        <br><br>A correta sinalização interna atende aos padrões internacionais e demonstra organização e preocupação com a prevenção de acidentes.
                                                    </li>
                                                    <!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura82.png" data-bs-toggle="modal" data-bs-target="#Imagem31">
                                                            <img class="img-fluid" src="imagens/Figura82.png" alt="Alt da imagem fica aqui">
                                                        </a>

                                                    </div>

                                                    <!-- Imagem 01 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem31" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura82.png" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- Figura 01 - End -->
                                                    <!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura83.png" data-bs-toggle="modal" data-bs-target="#Imagem32">
                                                            <img class="img-fluid" src="imagens/Figura83.png" alt="Alt da imagem fica aqui">
                                                        </a>
                                                        <p class="FonteFigura"><strong> Figura 71: Representação da Faixa de Pedestre e Faixas Limitadoras</strong></p>
                                                    </div>

                                                    <!-- Imagem 01 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem32" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura83.png" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- Figura 01 - End -->

                                                    <br>
                                                    <li class="wow fadeInDown"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Orientações sobre o uso de código de barras: Algumas observações importantes sobre o uso de código de barras nas etiquetas de endereçamento:</li>

                                                    <br>
                                                    <ol class="Texto">
                                                        <li> Utilize apenas números nos códigos de endereçamento. Além de tornar a codificação mais simples, alguns padrões de código de barras conseguem compactar a codificação, gravando dois dígitos numéricos no espaço de um dígito alfanumérico, ou seja, é possível conseguir o dobro de caracteres no mesmo espaço físico. Na codificação, é importante não usar caracteres especiais como “-“, “/” ou espaço. Esses caracteres podem ser utilizados nas legendas alfanuméricas, porém não é recomendado para o código de barras.</li>

                                                        <br>
                                                        <li> Utilize sempre quantidades pares de dígitos numéricos para fazer uso da compactação de caracteres. Por exemplo: a mensagem “A1B2C3” sempre utilizará seis caracteres : “A”, “1”, “B”, “2”, “C”, “3”. Já a mensagem “123456” se compactada, utilizará apenas três caracteres: “12”, “34”, “56”. Caso a mensagem seja “1234567”, ou seja, uma quantidade ímpar, devemos acrescentar um zero à esquerda e compactar: “01”, “23”, “45” e “67”.</li>

                                                        <br>
                                                        <li> Existe uma relação direta entre as larguras das barras do código e a distância de leitura. Barras mais largas conseguem ser lidas a uma distância maior. Quando falamos em logística, é preciso lembrar que o operador da empilhadeira espera ler o código de barras sem ter a necessidade de levantar-se ou manobrar o aparelho. Assim, é de comum senso utilizar a maior largura de barra possível.</li>

                                                        <br>
                                                        <li> Dois fatores limitam a largura de barras de um código: o primeiro é a quantidade de caracteres a serem codificados, por isso a importância da compactação; o outro é o espaço físico disponível para a etiqueta. No caso das colunas, esse espaço é limitado por sua largura que, na maioria dos casos, é em torno de 70 mm a 80 mm.</li>
                                                    </ol>
                                                </ul>
                                                <p>Use sempre o código de menor quantidade de caracteres. Normalmente, um endereço pode ser codificado em dez dígitos: dois dígitos para área, dois dígitos para corredor, três dígitos para módulo, dois dígitos para nível e um dígito para vão.</p>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- Accordion 09 -->
                                </div><br><br>
                                <!-- FIM Accordion -->









                                <!-- SubTitulo -->
                                <p class="SubTitulo" id="top5-nine">A Importância da Adoção de Um Sistema de Movimentação e Manuseio</p>
                                <hr>

                                <p>Para que haja a transformação em um processo produtivo seja de um bem ou de um serviço, geralmente estão envolvidos três elementos que se movimentam no processo: homem, equipamento e material. Se não ocorrer essa movimentação não se pode pensar em termos de processo produtivo.</p>

                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura84.png" data-bs-toggle="modal" data-bs-target="#Imagem33">
                                        <img class="img-fluid" src="imagens/Figura84.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura"><strong> Figura 72: Representação da Relação Homem, Equipamento e Material</strong></p>
                                </div>

                                <!-- Imagem 01 - MODAL -->
                                <div class="modal fade text-center" id="Imagem33" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura84.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 01 - End -->

                                <p>Na maioria dos processos produtivos, o material é o elemento que se movimenta com maior intensidade, com exceção da construção de aviões, navios e equipamentos pesados, onde o homem e o equipamento convergem para o material e esses é que se movimentam.</p>

                                <p><strong> A movimentação e o transporte de material ocorrem de acordo com alguns elementos funcionais que darão a forma e a necessidade de equipamentos para operacionalizar tal movimentação, são estes:</strong></p>

                                <!-- Início Accordion -->
                                <div class="accordion accordion-flush" id="AccordionFase01">
                                    <center>
                                        <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                    </center>
                                    <!-- Accordion 01 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item01">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseone" aria-expanded="false" aria-controls="flush-collapseone">
                                                <strong>a) Granel:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseone" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>Também denominada de graneis, é aquele material que não é acondicionado em qualquer tipo de embalagem. Abrange os métodos e equipamentos de transportes usados desde a extração, até o armazenamento em toda a espécie de material a granel. Os graneis são cargas que necessitam ser individualizadas, subdividindo-se em graneis sólidos e graneis líquidos. São graneis sólidos: os minérios de ferro, manganês, bauxita, carvão, sal, trigo, soja, fertilizantes, etc. São graneis líquidos: o petróleo e seus subprodutos, óleos vegetais, etc.</p>

                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura85.png" data-bs-toggle="modal" data-bs-target="#Imagem35">
                                                        <img class="img-fluid" src="imagens/Figura85.png" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong> Figura 73: Representação dos Granéis</strong></p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem35" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura85.png" alt="Alt da imagem fica aqui">
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
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsetwo" aria-expanded="false" aria-controls="flush-collapsetwo">
                                                <strong>b) Cargas Unitárias:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapsetwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> O critério de carga unitária baseia-se na constante necessidade de racionalização do espaço útil de armazenamento, com o máximo aproveitamento do conceito de cubagem. Porém, aliada à racionalização do espaço, a carga unitária favorece sobremaneira a boa movimentação do material, a rapidez de carga e descarga e, consequentemente, a redução dos custos. Aplicada exclusivamente às chamadas cargas gerais, consiste na reunião de certa quantidade de volumes isolados em uma única unidade de carga, com dimensões padronizadas ou não, cuja movimentação é feita por meios mecânicos. A mágica produzida pela carga unitária é elementar. Ao se reacomodar a carga solta em carga unitária, são palpáveis os ganhos de produtividade em tempo, espaço e custos que se podem obter mediante a utilização de pallets, conteineres, lingas, contentores flexíveis ou sapatas - os métodos mais empregados. Transformando pequenos volumes heterogêneos em grandes volumes homogêneos, a carga unitária facilita toda a sequencia de operações, desde a empresa produtora até o importador.</p>

                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura86.png" data-bs-toggle="modal" data-bs-target="#Imagem36">
                                                        <img class="img-fluid" src="imagens/Figura86.png" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong>Figura 74: Representação das Cargas Unitárias</strong></p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem36" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura86.png" alt="Alt da imagem fica aqui">
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
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsethree" aria-expanded="false" aria-controls="flush-collapsethree">
                                                <strong>c) Embalagem:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapsethree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>A embalagem é um recipiente ou envoltura que armazena produtos temporariamente, individualmente ou agrupando unidades, tendo como principal função protegê-lo e estender o seu prazo de vida (shelf life), viabilizando sua distribuição, identificação e consumo.</p>
                                                <p>A embalagem tornou-se ferramenta crucial para atender à sociedade em suas necessidades de alimentação, saúde, conveniência, disponibilizando produtos com segurança e informação para o bem estar das pessoas, possibilitando a acessibilidade a produtos frágeis, perecíveis, de alto ou baixo valor agregado.</p>

                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura87.png" data-bs-toggle="modal" data-bs-target="#Imagem37">
                                                        <img class="img-fluid" src="imagens/Figura87.png" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong>Figura 75: Representação da Embalagem de Produtos</strong></p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem37" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura87.png" alt="Alt da imagem fica aqui">
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Figura 01 - End -->

                                                <p>Frente ao ambiente de mercado competitivo, a embalagem tornou-se estratégica para a competitividade dos negócios no que diz respeito à eficiência de envase, distribuição e venda.</p>

                                                <p>Frente ao crescimento populacional do planeta, a embalagem tornou-se essencial para otimizar o aproveitamento dos alimentos e insumos demandados pela sociedade e para reduzir o desperdício global.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion 03 -->
                                    <!-- Accordion 04 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item04">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                                                <strong>d) Armazenamento:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>Armazenamento: O armazenamento nada mais é do que um conjunto de funções que tem nele a recepção, descarga, carregamento, arrumação e conservação de um produto ou material, em qualquer fase do seu processamento ou na sua distribuição. Este processo envolve mercadorias, e apenas produz resultados quando é realizada uma operação com o objetivo de lhe acrescentar valor.</p>
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura88.jpg" data-bs-toggle="modal" data-bs-target="#Imagem38">
                                                        <img class="img-fluid" src="imagens/Figura88.jpg" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong> Figura 76: Representação do Armazenamento</strong></p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem38" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura88.jpg" alt="Alt da imagem fica aqui">
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
                                    <!-- Accordion 04 -->
                                    <!-- Accordion 05 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item05">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                                                <strong>e) Vias de Transporte:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="Item05" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>Abrange o estudo do carregamento, definição do modal de transporte, desembarque e transferência de qualquer tipo de material nos terminas das vias de transporte, ou seja, portos, aeroportos, ferrovias e rodovias.</p>
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura89.png" data-bs-toggle="modal" data-bs-target="#Imagem39">
                                                        <img class="img-fluid" src="imagens/Figura89.png" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong>Figura 77: Representação das Vias de Transporte</strong></p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem39" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura89.png" alt="Alt da imagem fica aqui">
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
                                    <!-- Accordion 06 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item06">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsesix" aria-expanded="false" aria-controls="flush-collapsesix">
                                                <strong>f) Análise de Dados:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapsesix" class="accordion-collapse collapse" aria-labelledby="Item06" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> Nessa área estão contidos todos os aspectos analíticos da movimentação de materiais, tais como: levantamento de rotas de transporte, disposição física de equipamentos, organização, treinamento, segurança, manutenção, padronização, análise de custos e outras técnicas para desenvolvimento de um sistema de movimentação de materiais.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion 06 -->
                                </div><br><br>
                                <!-- FIM Accordion -->



                                <p>Em todos esses elementos funcionais influenciam o transporte e movimentação de materiais a questão de ordem é o custo, por que este influi sobremaneira no produto, afetando diretamente o seu custo final ao consumidor. Quando um acréscimo de custo agrega valor ao produto como no caso de uma instalação ou assistência técnica, este custo se torna aceitável, mas no caso do custo de movimentação, este não contribui em nada, podendo só ser barateado com uma seleção adequada do método mais compatível à sua natureza e ao regime de produção.</p>

                                <p>Se considerarmos a movimentação de materiais como um problema segmentado, separado dos demais (como estudamos na primeira fase da cadeia de suprimentos no início desta disciplina) podemos concluir que a simples redução dos trajetos percorridos pelo material em suas diversas etapas, do estoque à expedição, constituiria a solução ideal. Quando se pensa em termos macro considerando o conceito de gestão de cadeia de suprimentos, porém, esta solução simplista pode acarretar ociosidade de homens e equipamentos em determinadas estações de trabalho, anulando por completo o objetivo com reflexos no custo final ao consumidor.</p>

                                <p><strong> A adoção de um sistema de movimentação de materiais em qualquer componente da cadeia de suprimentos deve atender a quatro finalidades básicas: redução de custos, aumento de produtividade, melhoria das condições de trabalho e melhor distribuição.</strong></p>

                                <!-- Início Accordion -->
                                <div class="accordion accordion-flush" id="AccordionFase01">
                                    <center>
                                        <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                    </center>
                                    <!-- Accordion 01 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item01">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse01" aria-expanded="false" aria-controls="flush-collapse01">
                                                <strong>Redução de Custos:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapse01" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> Por intermédio da redução dos níveis de estoque e utilização mais vantajosa do espaço disponível, aplicando um sistema de movimentação de material pode-se reduzir os seguintes custos:</p>

                                                <ul class="none Texto">
                                                    <br>
                                                    <td><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Custos de Mão de Obra:</strong> A utilização dos equipamentos de manuseio vai implicar a substituição de mão de obra braçal pelos meios mecanizados, liberando-a para outros serviços mais especializados dentro da organização, serviços esses que vão exigir menos esforço físico do homem.</li>
                                                    </td>
                                                    <br>
                                                    <td><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Custos de Materiais: </strong>Com um melhor acondicionamento e um transporte mais racional, o custo de perdas durante a armazenagem e transporte é reduzido.</li>
                                                    </td>
                                                    <br>
                                                    <td><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Despesas Gerais: </strong>Racionalizando-se os processos de transporte e estoque, também caem os custos de despesas gerais, pois fica muito mais fácil manter os locais limpos, evitando risco de acidente de trabalho.</li>
                                                    </td>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fim Accordion 01 -->

                                    <!-- Accordion 02 -->
                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item02">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse02" aria-expanded="false" aria-controls="flush-collapse02">
                                                <strong>Aumento da Produtividade:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapse02" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> A adoção de um sistema de movimentação de material não se limitará apenas a movimentar, encaixotar e armazenar como também executar essas funções tendo em conta um melhor aproveitamento do tempo e espaço disponíveis de modo a maximizar a produtividade total do armazém nos seguintes itens:</p>

                                                <ul class="none Texto">
                                                    <br>
                                                    <td><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Maior giro do estoque total:</strong> Com a introdução métodos e equipamentos de movimentação de material mecanizados torna-se mais rápido o recebimento e a saída dos materiais favorecendo uma maior rotatividade do estoque total.</li>
                                                    </td>
                                                    <br>
                                                    <td><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Maior Capacidade de armazenagem:</strong> Os equipamentos para empilhar permitem explorar ao máximo a altura dos galpões, aumentando assim a capacidade de estocagem. Permitem também um melhor acondicionamento, contribuindo para aumento do espaço.</li>
                                                    </td>
                                                    <br>
                                                    <td><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Melhor distribuição da armazenagem:</strong> Com a utilização de dispositivos para formação de cargas unitárias é possível montar um sistema de armazenagem muito mais bem organizado, com aplicação de pallets, corredores, estantes, sistema de endereçamento, etc.</li>
                                                    </td>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fim Accordion 02 -->

                                    <!-- Accordion 03 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item03">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse03" aria-expanded="false" aria-controls="flush-collapse03">
                                                <strong> Melhoria das condições de trabalho:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapse03" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> A melhoria introduzida com a adoção de sistemas de movimentação de cargas reflete-se também em melhores condições para o pessoal que trabalha no armazém. Com o uso de dispositivos destinados às cargas unitárias e a aplicação de equipamentos de manuseio, o risco de acidentes durante as operações é reduzido, desde que o sistema seja utilizado corretamente. Quando o manuseio de cargas é feito por máquinas, libera-se o homem para serviços menos mais especializados. Ao mesmo tempo, os que continuam trabalhando em serviços de movimentação de materiais trabalham com maior conforto reduzindo a fadiga, pois o equipamento faz o esforço pelo homem.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Accordion 03 -->
                                    <!-- Accordion 04 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item04">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse04" aria-expanded="false" aria-controls="flush-collapse04">
                                                <strong>Melhor distribuição:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapse04" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>distribuição como uma atividade global na cadeia de suprimentos, inicia na preparação do produto e termina no consumidor final, é grandemente melhorada com a racionalização dos sistemas de movimentação e manuseio:</p>

                                                <ul class="none Texto">
                                                    <br>
                                                    <td><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Melhoria na circulação:</strong> Com a criação de corredores bem definidos, e com endereçamento fácil e equipamentos eficientes, a circulação das mercadorias dentro dos armazéns ao longo da cadeia de suprimentos é sensivelmente melhorada. Quando se integra a unidade produtora com unidades regionais de armazenagem de produtos acabados, para distribuição aos pontos de venda, a utilização de métodos altamente eficientes de carga e descarga de mercadorias, bem como de estocagem, traz como consequência a melhor circulação entre estes pontos.</li>
                                                    </td>
                                                    <br>
                                                    <td><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Localização estratégica de almoxarifado:</strong> Como dito no item anterior, a aplicação de sistemas de manuseio torna viável a criação de pontos de armazenagem em vários locais avançados e que estejam colocados estrategicamente próximos aos consumidores. Tudo isso só é possível graças à utilização de equipamentos de movimentação e armazenagem, pois o uso de cargas unitárias minimiza os custos do processo.</li>
                                                    </td>
                                                    <br>
                                                    <td><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Melhoria dos serviços aos consumidores:</strong> Estando as mercadorias muito mais próxima aos centros consumidores, a chegada até o usuário final torna-se mais rápida, como menos riscos de deterioração ou quebra e menor custo; ou seja, o consumidor pode adquirir as mercadorias em melhor estado por melhores preços.</li>
                                                    </td>
                                                    <br>
                                                    <td><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Maior disponibilidade:</strong> Da mesma forma, haverá sempre maior disponibilidade de produtos em cada região.</li>
                                                    </td>
                                                </ul>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Accordion 04 -->
                                </div><br><br>
                                <!-- FIM Accordion -->


                                <!-- SubTitulo -->
                                <p class="SubTitulo" id="top5-ten"> Tipos de movimentação e suas características:</p>
                                <hr>

                                <p><strong> Os principais tipos de movimentação em um armazém são:</strong></p>

                                <!-- Início Accordion -->
                                <div class="accordion accordion-flush" id="AccordionFase01">
                                    <center>
                                        <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                    </center>
                                    <!-- Accordion 01 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item01">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne001" aria-expanded="false" aria-controls="flush-collapseOne001">
                                                <strong>a) Recebimento:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne001" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> Mercadorias e materiais chegam, normalmente, ao armazém em quantidades maiores do que as expedidas. A primeira atividade de movimentação é a descarga de veículos. Na maioria dos armazéns, ela é manual. Entretanto, têm sido desenvolvidos métodos mecanizados e parcialmente automatizados capazes de adaptar-se às diferentes características dos produtos.</p>

                                                <p>Geralmente, a descarga é feita por uma ou duas pessoas. Os produtos são empilhados, manualmente, em paletes ou em “slip sheet” para formar uma unidade a ser movimentada. Em alguns casos, esteiras transportadoras são usadas para descarregar os veículos mais rapidamente. Dessa forma, maior quantidade de mercadorias pode ser descarregada dos veículos para entrada no armazém.</p>
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura90.png" data-bs-toggle="modal" data-bs-target="#Imagem40">
                                                        <img class="img-fluid" src="imagens/Figura90.png" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong> Figura 78: Representação da Esteira Usada para Carregamento e Descarregamento de Veículos
                                                        </strong></p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem40" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura90.png" alt="Alt da imagem fica aqui">
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Figura 01 - End -->
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura91.jpg" data-bs-toggle="modal" data-bs-target="#Imagem41">
                                                        <img class="img-fluid" src="imagens/Figura91.jpg" width="200" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong> Figura 79: Representação da Carga Unitária Usando Slip Sheet </strong></p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem41" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura91.jpg" alt="Alt da imagem fica aqui">
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
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo002" aria-expanded="false" aria-controls="flush-collapseTwo002">
                                                <strong>b) Manuseio Interno:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo002" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> O manuseio interno inclui toda e qualquer movimentação dos produtos dentro do armazém. Após o recebimento dos materiais, é necessária sua transferência interna para colocá-los em locais de armazenagem ou para separar pedidos. Finalmente, quando os pedidos são recebidos, os produtos solicitados são acumulados e transportados para a área de expedição. Existem dois tipos de manuseio dentro do armazém: <strong>transferência e separação.</strong> </p>

                                                <ul class="none Texto">
                                                    <td><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Transferência:</strong> Existem pelo menos duas transferências em armazéns tradicionais. Primeiramente, as mercadorias são levadas para dentro do armazém e colocadas no local previamente determinado. Depois, os produtos são transferidos para a área de separação ou seleção à medida que são processados as requisições.</td>

                                                    <br><br><span class="wow fadeInDown" data-wow-delay="0.6s">Essa segunda movimentação pode ser suprimida quando as mercadorias possuem elevado peso e/ou volume. Na transferência final, os sortimentos de produtos solicitados pelos requisitantes são levados, diretamente, do armazém para a área de expedição.
                                                        </li>
                                                        <!-- Titulo Figura -->
                                                        <div class="text-center">
                                                            <a href="imagens/Figura94.jpg" data-bs-toggle="modal" data-bs-target="#Imagem42">
                                                                <img class="img-fluid" src="imagens/Figura94.jpg" width="200" alt="Alt da imagem fica aqui">
                                                            </a>
                                                            <p class="FonteFigura"><strong>Figura 80: Representação da Transferência para Área de Estocagem com Uso de Empilhadeira</strong></p>
                                                        </div>

                                                        <!-- Imagem 01 - MODAL -->
                                                        <div class="modal fade text-center" id="Imagem42" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                                <div class="modal-content">
                                                                    <div class="modal-body">
                                                                        <img class="img-fluid" src="imagens/Figura94.jpg" alt="Alt da imagem fica aqui">
                                                                    </div>
                                                                    <div class="modal-footer text-center">
                                                                        <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- Figura 01 - End -->

                                                        <br>
                                                        <td><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Separação:</strong> A separação dos produtos é uma função básica de armazenagem. O processo agrupa materiais, peças e produtos de acordo com as requisições dos solicitantes. Geralmente, a área de separação é localizada em um ponto do armazém que minimiza as distâncias a serem percorridas.</li>
                                                        </td>
                                                </ul>
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura95.png" data-bs-toggle="modal" data-bs-target="#Imagem43">
                                                        <img class="img-fluid" src="imagens/Figura95.png" width="200" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong>Figura 81: Representação do Operador Efetuando a Separação de Requisições
                                                        </strong></p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem43" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura95.png" alt="Alt da imagem fica aqui">
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
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree003" aria-expanded="false" aria-controls="flush-collapseThree003">
                                                <strong>c) Expedição: </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseThree003" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> A expedição consiste, basicamente, na verificação e no carregamento das mercadorias nos veículos. Como no recebimento, a expedição é realizada, manualmente, na maioria dos sistemas. A expedição de cargas unitárias está se tornando cada vez mais comum porque, dessa forma, o tempo de carregamento de veículos pode ser reduzido consideravelmente.</p>
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura095.jpg" data-bs-toggle="modal" data-bs-target="#Imagem44">
                                                        <img class="img-fluid" src="imagens/Figura095.jpg" width="200" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong>Figura 82: Representação dos Operadores Efetuando Carregamento na Forma de Carga Unitária </strong></p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem44" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura095.jpg" alt="Alt da imagem fica aqui">
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
                                </div><br><br>
                                <!-- Accordion 03 -->
                                <!-- FIM Accordion -->







                                <!-- SubTitulo -->
                                <p class="SubTitulo" id="top5-eleven"> Premissas para facilitar a movimentação de materiais:</p>
                                <hr>

                                <p><strong> Para que um sistema de movimentação de materiais seja eficiente, existem algumas premissas que dentro das possibilidades, devem ser levadas em consideração. São elas:</strong></p>

                                <!-- Figura do lado do texto-->
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <p class="wow fadeInUp" data-wow-delay="0.5s"><strong> a) Obediência ao fluxo das operações:</strong> Disponha a trajetória dos materiais, de forma que a mesma seja a sequência das operações, ou seja, utilize sempre, dentro do possível, um arranjo linear. Não deve haver desvios que não agregam valor ao produto, redundando apenas em perda de produtividade. </p>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <!-- Titulo Figura -->
                                        <div class="text-center wow fadeInDown">
                                            <a href="imagens/Figura96.png" data-bs-toggle="modal" data-bs-target="#Imagem45">
                                                <img class="img-fluid wow fadeInDown" data-wow-delay="0.5s" width="200" class="img-fluid" src="imagens/Figura96.png" alt="Alt da imagem fica aqui">
                                                <p class="TituloFigura wow fadeInDown"><strong>Figura 83: Representação da Trajetória dos Materiais
                                                    </strong></p>
                                            </a>
                                        </div>
                                        <!-- Imagem 01 - MODAL -->
                                        <div class="modal fade text-center" id="Imagem45" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="imagens/Figura96.png" alt="Alt da imagem fica aqui">
                                                    </div>
                                                    <div class="modal-footer text-center">
                                                        <p class="TituloFigura"><strong>Fonte: </strong>Fonte da Figura</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Figura 01 - End -->
                                    </div>
                                </div>

                                <!-- Figura do lado do texto-->
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <p class="wow fadeInUp" data-wow-delay="0.5s"><strong> b)Mínima distância:</strong> Reduza as distâncias e transporte pela eliminação de ziguezagues no fluxo de materiais. Quanto menores forem as distâncias percorridas, menor a chance de ocorrerem erros, e consequente perda de eficiência. </p>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <!-- Titulo Figura -->
                                        <div class="text-center wow fadeInDown">
                                            <a href="imagens/Figura97.png" data-bs-toggle="modal" data-bs-target="#Imagem46">
                                                <img class="img-fluid wow fadeInDown" data-wow-delay="0.5s" width="200" class="img-fluid" src="imagens/Figura97.png" alt="Alt da imagem fica aqui">
                                                <p class="TituloFigura wow fadeInDown"><strong>Figura 84: Representação da Distância no Fluxo de Materiais
                                                    </strong></p>
                                            </a>
                                        </div>
                                        <!-- Imagem 01 - MODAL -->
                                        <div class="modal fade text-center" id="Imagem46" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="imagens/Figura97.png" alt="Alt da imagem fica aqui">
                                                    </div>
                                                    <div class="modal-footer text-center">
                                                        <p class="TituloFigura"><strong>Fonte: </strong>Fonte da Figura</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Figura 01 - End -->
                                    </div>
                                </div>



                                <!-- Figura do lado do texto-->
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <p class="wow fadeInUp" data-wow-delay="0.5s"><strong> c) Mínima manipulação:</strong> Reduza a frequência de transporte manual. O transporte mecânico custa menos que as operações manuais de carga e descarga, levantamento e armazenamento. Evite manipular os materiais tanto quanto possível ao longo do ciclo de processamento. Assim como a mínima distância: quanto menos se manipula, menor a chance de erros. </p>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <!-- Titulo Figura -->
                                        <div class="text-center wow fadeInDown">
                                            <a href="imagens/Figura98.png" data-bs-toggle="modal" data-bs-target="#Imagem47">
                                                <img class="img-fluid wow fadeInDown" data-wow-delay="0.5s" width="200" class="img-fluid" src="imagens/Figura98.png" alt="Alt da imagem fica aqui">
                                                <p class="TituloFigura wow fadeInDown"><strong>Figura 85: Representação da Mínima Manipulação
                                                    </strong></p>
                                            </a>
                                        </div>
                                        <!-- Imagem 01 - MODAL -->
                                        <div class="modal fade text-center" id="Imagem47" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="imagens/Figura98.png" alt="Alt da imagem fica aqui">
                                                    </div>
                                                    <div class="modal-footer text-center">
                                                        <p class="TituloFigura"><strong>Fonte: </strong>Fonte da Figura</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Figura 01 - End -->
                                    </div>
                                </div>
                                <!-- Figura do lado do texto-->
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <p class="wow fadeInUp" data-wow-delay="0.5s"><strong> d) Segurança e satisfação: </strong> Leve sempre em conta a segurança dos operadores e do pessoal circulante, quando selecionar os equipamentos de transporte de materiais. Como a mão de obra é um elemento importante do sistema, funcionários seguros e satisfeitos tendem a ter maior produtividade.
                                        </p>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <!-- Titulo Figura -->
                                        <div class="text-center wow fadeInDown">
                                            <a href="imagens/Figura99.png" data-bs-toggle="modal" data-bs-target="#Imagem48">
                                                <img class="img-fluid wow fadeInDown" data-wow-delay="0.5s" width="200" class="img-fluid" src="imagens/Figura99.png" alt="Alt da imagem fica aqui">
                                                <p class="TituloFigura wow fadeInDown"><strong>Figura 86: Representação da Segurança e Satisfação dos Operadores
                                                    </strong></p>
                                            </a>
                                        </div>
                                        <!-- Imagem 01 - MODAL -->
                                        <div class="modal fade text-center" id="Imagem48" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="imagens/Figura99.png" alt="Alt da imagem fica aqui">
                                                    </div>
                                                    <div class="modal-footer text-center">
                                                        <p class="TituloFigura"><strong>Fonte: </strong>Fonte da Figura</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Figura 01 - End -->
                                    </div>
                                </div>

                                <!-- Figura do lado do texto-->
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <p class="wow fadeInUp" data-wow-delay="0.5s"><strong> e) Padronização:</strong> Use equipamento padronizado na medida do possível. O custo inicial é mais baixo, a manutenção é mais fácil e mais barata, e a utilização desse equipamento é mais variada por ser mais flexível que equipamentos especializados. Quando se faz a padronização dos equipamentos, reduz-se a quantidade de peças de reposição em estoque, diminuindo o capital imobilizado e o custo do sistema.
                                        </p>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <!-- Titulo Figura -->
                                        <div class="text-center wow fadeInDown">
                                            <a href="imagens/Figura100.png" data-bs-toggle="modal" data-bs-target="#Imagem49">
                                                <img class="img-fluid wow fadeInDown" data-wow-delay="0.5s" width="200" class="img-fluid" src="imagens/Figura100.png" alt="Alt da imagem fica aqui">
                                                <p class="TituloFigura wow fadeInDown"><strong>Figura 87: Representação da Padronização dos Equipamentos
                                                    </strong></p>
                                            </a>
                                        </div>
                                        <!-- Imagem 01 - MODAL -->
                                        <div class="modal fade text-center" id="Imagem49" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="imagens/Figura100.png" alt="Alt da imagem fica aqui">
                                                    </div>
                                                    <div class="modal-footer text-center">
                                                        <p class="TituloFigura"><strong>Fonte: </strong>Fonte da Figura</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Figura 01 - End -->
                                    </div>
                                </div>
                                <!-- Figura do lado do texto-->
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <p class="wow fadeInUp" data-wow-delay="0.5s"><strong> f) Flexibilidade:</strong> O valor de determinado equipamento para o usuário é proporcional à sua flexibilidade, isto é, capacidade de satisfazer ao transporte de vários tipos de carga em condições variadas de trabalho. O sistema deve ter flexibilidade para poder manusear diferentes tipos de materiais, para que não haja necessidade de novos investimentos a qualquer mudança operacional.

                                        </p>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <!-- Titulo Figura -->
                                        <div class="text-center wow fadeInDown">
                                            <a href="imagens/Figura101.png" data-bs-toggle="modal" data-bs-target="#Imagem50">
                                                <img class="img-fluid wow fadeInDown" data-wow-delay="0.5s" width="200" class="img-fluid" src="imagens/Figura101.png" alt="Alt da imagem fica aqui">
                                                <p class="TituloFigura wow fadeInDown"><strong>Figura 88: Representação da Flexibilidade do Equipamento.</strong></p>
                                            </a>
                                        </div>
                                        <!-- Imagem 01 - MODAL -->
                                        <div class="modal fade text-center" id="Imagem50" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="imagens/Figura101.png" alt="Alt da imagem fica aqui">
                                                    </div>
                                                    <div class="modal-footer text-center">
                                                        <p class="TituloFigura"><strong>Fonte: </strong>Fonte da Figura</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Figura 01 - End -->
                                    </div>
                                </div>
                                <!-- Figura do lado do texto-->
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <p class="wow fadeInUp" data-wow-delay="0.5s"><strong> g) Máxima utilização do equipamento:</strong> Mantenha o equipamento ocupado tanto quanto possível. Evite acúmulo de materiais nos terminais do ciclo de transporte. Se não puder manter o equipamento de baixo investimento, mantenha o quociente tão baixo o quanto possível (1/4 é considerado o ideal). Quando se utilizam ao máximo os equipamentos, o capital investido é plenamente empregado e dá mais retorno ao investimento. </p>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <!-- Titulo Figura -->
                                        <div class="text-center wow fadeInDown">
                                            <a href="imagens/Figura102.png" data-bs-toggle="modal" data-bs-target="#Imagem51">
                                                <img class="img-fluid wow fadeInDown" data-wow-delay="0.5s" width="200" class="img-fluid" src="imagens/Figura102.png" alt="Alt da imagem fica aqui">
                                                <p class="TituloFigura wow fadeInDown"><strong>Figura 89: Representação da Máxima Utilização do Equipamento</strong></p>
                                            </a>
                                        </div>
                                        <!-- Imagem 01 - MODAL -->
                                        <div class="modal fade text-center" id="Imagem51" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="imagens/Figura102.png" alt="Alt da imagem fica aqui">
                                                    </div>
                                                    <div class="modal-footer text-center">
                                                        <p class="TituloFigura"><strong>Fonte: </strong>Fonte da Figura</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Figura 01 - End -->
                                    </div>
                                </div>
                                <!-- Figura do lado do texto-->
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <p class="wow fadeInUp" data-wow-delay="0.5s"><strong> h) Máxima utilização da gravidade:</strong> Use a gravidade sempre que possível. Pequenos trechos motorizados de transportadores podem elevar a carga a uma altura conveniente para suprir trechos longos de transporte por gravidade. A gravidade é uma energia gratuita. Assim, quanto mais tirarmos proveito dela, mais eficiente será o manuseio. </p>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <!-- Titulo Figura -->
                                        <div class="text-center wow fadeInDown">
                                            <a href="imagens/Figura103.png" data-bs-toggle="modal" data-bs-target="#Imagem52">
                                                <img class="img-fluid wow fadeInDown" data-wow-delay="0.5s" width="200" class="img-fluid" src="imagens/Figura103.png" alt="Alt da imagem fica aqui">
                                                <p class="TituloFigura wow fadeInDown"><strong>Figura 90: Representação da Máxima Utilização da Gravidade</strong></p>
                                            </a>
                                        </div>
                                        <!-- Imagem 01 - MODAL -->
                                        <div class="modal fade text-center" id="Imagem52" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="imagens/Figura103.png" alt="Alt da imagem fica aqui">
                                                    </div>
                                                    <div class="modal-footer text-center">
                                                        <p class="TituloFigura"><strong>Fonte: </strong>Fonte da Figura</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Figura 01 - End -->
                                    </div>
                                </div>
                                <!-- Figura do lado do texto-->
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <p class="wow fadeInUp" data-wow-delay="0.5s"><strong>i) Máxima utilização do espaço disponível:</strong>Use o espaço vertical sempre que possível. Empilhe cargas ou utilize suportes especiais para isso. A racionalização do espaço disponível, com a preocupação de facilitar o trânsito de equipamentos de movimentação, melhora a eficiência do sistema. </p>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <!-- Titulo Figura -->
                                        <div class="text-center wow fadeInDown">
                                            <a href="imagens/Figura104.png" data-bs-toggle="modal" data-bs-target="#Imagem53">
                                                <img class="img-fluid wow fadeInDown" data-wow-delay="0.5s" width="200" class="img-fluid" src="imagens/Figura104.png" alt="Alt da imagem fica aqui">
                                                <p class="TituloFigura wow fadeInDown"><strong>Figura 91: Representação da Máxima Utilização da Gravidade</strong></p>
                                            </a>
                                        </div>
                                        <!-- Imagem 01 - MODAL -->
                                        <div class="modal fade text-center" id="Imagem53" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="imagens/Figura104.png" alt="Alt da imagem fica aqui">
                                                    </div>
                                                    <div class="modal-footer text-center">
                                                        <p class="TituloFigura"><strong>Fonte: </strong>Fonte da Figura</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Figura 01 - End -->
                                    </div>
                                </div>
                                <!-- Figura do lado do texto-->
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <p class="wow fadeInUp" data-wow-delay="0.5s"><strong>j) Método alternativo:</strong> Faça uma previsão de um método alternativo de movimentação em caso de falha do meio principal de transporte (plano B). Essa alternativa pode ser bem menos eficiente que o processo principal, mas pode ser de grande valor em casos de emergência. Os procedimentos de manuseio devem, sempre que possível, contemplar métodos alternativos para a movimentação dos materiais, evitando ou reduzindo a perda de produtividade quando houver problemas. Exemplos: Colocação de pontos esparsos para instalação de uma talha manual; prever espaço para movimentação de uma empilhadeira numa área coberta por uma ponte rolante.
                                        </p>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <!-- Titulo Figura -->
                                        <div class="text-center wow fadeInDown">
                                            <a href="imagens/Figura105.png" data-bs-toggle="modal" data-bs-target="#Imagem54">
                                                <img class="img-fluid wow fadeInDown" data-wow-delay="0.5s" width="200" class="img-fluid" src="imagens/Figura105.png" alt="Alt da imagem fica aqui">
                                                <p class="TituloFigura wow fadeInDown"><strong>Figura 92: Representação do Método Alternativo de Movimentação dos Materiais
                                                    </strong></p>
                                            </a>
                                        </div>
                                        <!-- Imagem 01 - MODAL -->
                                        <div class="modal fade text-center" id="Imagem54" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="imagens/Figura105.png" alt="Alt da imagem fica aqui">
                                                    </div>
                                                    <div class="modal-footer text-center">
                                                        <p class="TituloFigura"><strong>Fonte: </strong>Fonte da Figura</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Figura 01 - End -->
                                    </div>
                                </div>
                                <!-- Figura do lado do texto-->
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <p class="wow fadeInUp" data-wow-delay="0.5s"><strong>k) Menor custo total: </strong>Selecione equipamentos com base em custos totais e não somente em custo inicial, custo operacional, ou custo de manutenção. O equipamento escolhido deve ser aquele que apresente menor custo total para uma vida útil razoável e uma taxa de retorno do investimento adequada. </p>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <!-- Titulo Figura -->
                                        <div class="text-center wow fadeInDown">
                                            <a href="imagens/Figura106.png" data-bs-toggle="modal" data-bs-target="#Imagem55">
                                                <img class="img-fluid wow fadeInDown" data-wow-delay="0.5s" width="200" class="img-fluid" src="imagens/Figura106.png" alt="Alt da imagem fica aqui">
                                                <p class="TituloFigura wow fadeInDown"><strong>Figura 93: Representação do Menor Custo Total de Equipamento</strong></p>
                                            </a>
                                        </div>
                                        <!-- Imagem 01 - MODAL -->
                                        <div class="modal fade text-center" id="Imagem55" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="imagens/Figura106.png" alt="Alt da imagem fica aqui">
                                                    </div>
                                                    <div class="modal-footer text-center">
                                                        <p class="TituloFigura"><strong>Fonte: </strong>Fonte da Figura</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Figura 01 - End -->
                                    </div>
                                </div>

                                <!-- SubTitulo -->
                                <p class="SubTitulo" id="top5-twelve"> A escolha de um sistema de movimentação de materiais:</p>
                                <hr>

                                <p>O manuseio de materiais dentro de um armazém ou das áreas de estocagem é tipicamente uma atividade de mão-de-obra intensiva, já que a maioria do manuseio de materiais nas organizações é feita manualmente ou, na melhor das hipóteses de forma semi automática. A disposição da mercadoria, a extensão na qual o equipamento é usado e o grau de automação afeta os custos de movimentação de materiais. Descobrir a sua melhor combinação é a tarefa do projeto de sistema de movimentação de materiais.</p>

                                <p><strong> O sistema de movimentação de materiais deve ser selecionado para ser uma parte integral de toda a atividade do sistema de estocagem. Não é necessariamente o ponto inicial do projeto do sistema de estocagem nem seu ponto final. Entretanto, a organização pode fazer as primeiras aproximações grosseiras para o projeto final sem tentar equilibrar todos os fatores simultaneamente. Nesta análise, a organização deve levar em conta diversas questões:</strong></p>

                                <ol type="a">
                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"> Primeira, os sistemas de movimentação de materiais adotados pelos outros impõem restrições sobre a escolha? Por exemplo, se os principais fornecedores do armazém fizerem entregas em paletes de 48 por 48 polegadas, um sistema de movimentação de materiais projetado para paletes de 32 por 40 polegadas pode exigir repaletização das mercadorias entrantes para evitar incompatibilidades de equipamentos ou ineficiências de espaço de estocagem.</li>
                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura107.png" data-bs-toggle="modal" data-bs-target="#Imagem56">
                                            <img class="img-fluid" src="imagens/Figura107.png" width="700" alt="Alt da imagem fica aqui">
                                        </a>
                                        <p class="FonteFigura"><strong> Figura 94: Representação do Sistema de Movimentação de Materiais</strong></p>
                                    </div>

                                    <!-- Imagem 01 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem56" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="imagens/Figura107.png" alt="Alt da imagem fica aqui">
                                                </div>
                                                <div class="modal-footer text-center">
                                                    <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Figura 01 - End -->

                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"> Segunda, o projeto do armazém impõe restrições na escolha de equipamentos? Teto baixo, edifício de multiestocagem, corredores estreitos e longas distâncias dentro do armazém podem tomar alguns equipamentos pouco práticos. Isto é, quando as distâncias de percurso são longas, a movimentação manual de mercadorias resulta em custos de mão-de-obra excessivos. Similarmente, o uso de caminhões de empilhadeira e elevadores em armazéns de multiestocagem pode ser ineficiente.</li>
                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura108.png" data-bs-toggle="modal" data-bs-target="#Imagem57">
                                            <img class="img-fluid" src="imagens/Figura108.png" width="700" alt="Alt da imagem fica aqui">
                                        </a>
                                        <p class="FonteFigura"><strong> Figura 95: Representação do Armazém de Equipamentos
                                            </strong></p>
                                    </div>

                                    <!-- Imagem 01 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem57" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="imagens/Figura108.png" alt="Alt da imagem fica aqui">
                                                </div>
                                                <div class="modal-footer text-center">
                                                    <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Figura 01 - End -->

                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"> Terceira, a natureza e o nível do sistema de carregamento depende muito da seleção de equipamentos? Quando o volume do processamento no armazém varia consideravelmente ou as características de manuseio da combinação de produtos não são razoavelmente constantes um sistema e movimentação de materiais manual, com seu baixo custo de investimento e alto grau de flexibilidade para alterar as condições, freqüentemente é a melhor escolha. Inversamente, quando um volume firme, substancial, pode ser antecipado, justifica-se o uso de mais equipamento mecanizado. O capital, na forma de equipamento, é usado para substituir mão-de-obra, mas os níveis de investimentos mais altos podem não ser recuperados se o sistema se tomar obsoleto muito rapidamente. Este é um perigo particular com sistemas inteiramente mecanizados tais como sistemas de estocagem e retirada automatizados: Indubitavelmente, a razão para a popularidade dos sistemas de empilhadeira-palete é que oferecem um bom equilíbrio entre mecanização e flexibilidade.</li>
                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura109.png" data-bs-toggle="modal" data-bs-target="#Imagem58">
                                            <img class="img-fluid" src="imagens/Figura109.png" width="700" alt="Alt da imagem fica aqui">
                                        </a>
                                        <p class="FonteFigura"><strong> Figura 96: Representação do Armazém de Equipamentos
                                            </strong></p>
                                    </div>

                                    <!-- Imagem 01 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem58" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="imagens/Figura109.png" alt="Alt da imagem fica aqui">
                                                </div>
                                                <div class="modal-footer text-center">
                                                    <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Figura 01 - End -->

                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"> Quarta, as características dos produtos podem ser determinantes? Produtos a granel, tais como pós e líquidos, podem ser manuseados com maior eficiência através de um sistema de tanques e pipas em vez de na sua forma embalada, através de empilhadeira-palete. Uma combinação dos tamanhos de produtos, dos pesos e das configurações podem limitar o equipamento aos tipos mais flexíveis ou requer que uma combinação dos tipos de equipamentos seja utilizada para satisfazer várias características de produtos.</li>
                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura110.png" data-bs-toggle="modal" data-bs-target="#Imagem59">
                                            <img class="img-fluid" src="imagens/Figura110.png" width="700" alt="Alt da imagem fica aqui">
                                        </a>
                                        <p class="FonteFigura"><strong> Figura 97: Representação do Armazém de Equipamentos
                                            </strong></p>
                                    </div>

                                    <!-- Imagem 01 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem59" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="imagens/Figura110.png" alt="Alt da imagem fica aqui">
                                                </div>
                                                <div class="modal-footer text-center">
                                                    <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Figura 01 - End -->
                                </ol>

                                <p>Finalmente, o planejamento para contingências pode influenciar o projeto do sistema. Enquanto os sistemas de movimentação de materiais se tornam mais automatizados e integrados, tornam-se mais sujeitos à parada total quando qualquer segmento individual falhar. Se a confiabilidade do sistema afeta extremamente o serviço ao cliente, os custos relacionados ao sistema (tais como a demora e as cargas detidas) ou custos operacionais do sistema, então, sistemas menos mecanizados ou sistemas mecanizados com redundância embutida podem ser o melhor caminho para o projeto do sistema final.</p>

                                <p><strong> Uma vez que o sistema de movimentação de materiais básico foi esboçado pela organização, questões de projeto mais detalhadas devem ser respondidas, tais como o tipo de sistema e a política de reposição do equipamento.</strong></p>

                                <!-- Início Accordion -->
                                <div class="accordion accordion-flush" id="AccordionFase01">
                                    <center>
                                        <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                    </center>
                                    <!-- Accordion 01 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item01">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse1um" aria-expanded="false" aria-controls="flush-collapse1um">
                                                <strong>a)Tipo de sistema:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapse1um" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> Uma decisão que é coincidente com o dimensionamento e configurações do armazém é a seleção do tipo de sistema de movimentação de materiais a ser usado. Escolhas comuns incluem um sistema manual, um sistema de empilhadeira palete, um sistema de transportadores, um sistema automatizado de estocagem e retirada, ou um sistema de combinação entre esses tipos.</p>

                                                <ul class="none Texto">
                                                    <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Sistema de Movimentação Manual:</strong> o manuseio de materiais é manual caracterizado por um alto grau de atividade humana.</li>
                                                    </li>
                                                    <!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura111.png" data-bs-toggle="modal" data-bs-target="#Imagem60">
                                                            <img class="img-fluid" src="imagens/Figura111.png" width="200" alt="Alt da imagem fica aqui">
                                                        </a>
                                                        <p class="FonteFigura"><strong> Figura 98: Representação do Armazém de Equipamentos
                                                            </strong></p>
                                                    </div>

                                                    <!-- Imagem 01 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem60" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura111.png" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- Figura 01 - End -->

                                                    <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Sistema de Empilhadeira Palete:</strong> o manuseio de materiais é apoiado por assistência mecânica utilizando o conceito de carga unitária, tais como: transportes e caminhões industriais para movimentar materiais; paletes, empilhadeiras, prateleiras, estante porta palete, etc.</li>
                                                    </li>
                                                    <!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura112.png" data-bs-toggle="modal" data-bs-target="#Imagem61">
                                                            <img class="img-fluid" src="imagens/Figura112.png" width="200" alt="Alt da imagem fica aqui">
                                                        </a>
                                                        <p class="FonteFigura"><strong> Figura 99: Representação do Armazém de Equipamentos
                                                            </strong></p>
                                                    </div>

                                                    <!-- Imagem 01 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem61" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura112.png" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- Figura 01 - End -->

                                                    <li class="wow fadeInDown" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Sistema de Transportadores:</strong> o manuseio de materiais é apoiado por assistência mecânica onde a carga movimentada é fracionada ou não padronizada, tais como: transportadores, carrosséis para a estocagem; interruptores e solenóides para o controle dos equipamentos;</li>
                                                    </li>
                                                    <!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura113.png" data-bs-toggle="modal" data-bs-target="#Imagem62">
                                                            <img class="img-fluid" src="imagens/Figura113.png" width="200" alt="Alt da imagem fica aqui">
                                                        </a>
                                                        <p class="FonteFigura"><strong> Figura 100: Representação do Armazém de Equipamentos
                                                            </strong></p>
                                                    </div>

                                                    <!-- Imagem 01 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem62" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura113.png" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- Figura 01 - End -->

                                                    <li class="wow fadeInDown" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Sistema Automatizado de Estocagem:</strong> o manuseio automatizado caracterizado pelo uso de veículos guiados, paletizadores automatizados, equipamentos automatizados de estocagem e retirada, e identificação automatizada dos materiais;</li>
                                                    <!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura114.png" data-bs-toggle="modal" data-bs-target="#Imagem63">
                                                            <img class="img-fluid" src="imagens/Figura114.png" width="200" alt="Alt da imagem fica aqui">
                                                        </a>
                                                        <p class="FonteFigura"><strong> Figura 101: Representação do Armazém de Equipamentos
                                                            </strong></p>
                                                    </div>

                                                    <!-- Imagem 01 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem63" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura114.png" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- Figura 01 - End -->
                                                    </li>
                                                </ul>


                                                <p>Esta escolha pode começar com uma análise financeira de retorno do investimento similar àquela geralmente usada para a seleção do tipo de armazém. À escolha final, devem ser adicionadas considerações subjetivas, tais como risco, flexibilidade e obsolescência. Em uma escala menor do que o sistema de movimentação de materiais inteiro, partes individuais de equipamento variam em suas capacidades e potencialidades. Cada uma tem um investimento inicial diferente, uma despesa operacional anual e um valor residual. A seleção é outra vez por comparação mediante uma análise financeira do retorno sobre o investimento.</p>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fim Accordion 01 -->

                                    <!-- Accordion 02 -->
                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item02">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2Dois" aria-expanded="false" aria-controls="flush-collapse2Dois">
                                                <strong>b)Substituição de equipamento:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapse2Dois" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> O equipamento de manuseio de materiais tem freqüentemente uma vida mais curta do que prateleiras de estocagem, escaninhos, mezaninos e outros dispositivos não mecânicos usados no processo de manuseio. Conseqüentemente, é necessário às vezes desenvolver uma política para substituir o equipamento quando se desgasta ou torna-se obsoleto. A necessidade para uma política de substituição é muito clara no caso das empilhadeiras, as quais tem uma vida econômica não muito longa e devem ser substituídas com freqüência, mas a necessidade de uma política ocorre também em vários segmentos dos sistemas de movimentação a granel ou dos sistemas de transportadores nos quais a vida útil do equipamento pode ser muito mais longa. Não é incomum para a organização usar regras empíricas de substituição, como substituir empilhadeiras a cada 5 anos. As regras empíricas baseadas na experiência podem ser muito boas. Entretanto, quando tal experiência não está disponível para ajudar a desenvolver diretrizes para política, ou quando estas regras empíricas não foram testadas por uma análise econômica "fundamentada", é útil ter um meio analítico de desenvolver políticas de substituição.</p>

                                                <p>Para políticas de substituição, formas especiais da análise de valor atual podem ser úteis, embora outros métodos, tais como prazo de retomo e retorno simples sobre o investimento, podem ser empregados. Há diversas características-chave para observar tais problemas. Primeiro, o ciclo de substituição é esperado e continuará indefinidamente no futuro? Segundo, os custos operacionais do equipamento tendem a aumentar ao longo dos anos com a sua idade? Terceiro, como ocorrem melhorias tecnológicas, o equipamento subseqüente pode ser mais eficiente? Para comparar o fluxo de cicIos da substituição de diferentes extensões, é recomendável que a organização aliada a análise qualitativa utilize também métodos quantitativos de engenharia econômica.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fim Accordion 02 -->
                                </div><br><br>

                                <!-- FIM Accordion -->




                                <!-- SubTitulo -->
                                <p class="SubTitulo" id="top5-thirteen"> Equipamentos Utilizados nos Sistemas de Movimentação de Materiais:</p>
                                <hr>

                                <p>Selecionar equipamentos de movimentação não é tarefa fácil. Principalmente porque cada operação não pode ser vista isoladamente, mas como parte integrante de todo o sistema de produção e estocagem, devendo-se evitar estrangulamento e/ou ociosidades. É também porque cada uma das alternativas possíveis tem sempre seus prós e contras. Em alguns casos, é o equipamento que exige alto investimento e mostra pouca flexibilidade em contraposição ao equipamento de uso mais generalizado, que se mostra pouco produtivo. Outras vezes, o confronto toma a forma de opção entre elevada automatização com muito investimento, contra equipamentos mais baratos, que exigem mão de obra adicional e mais espaço. Vejamos alguns equipamentos básicos.</p>

                                <!-- Início Accordion -->
                                <div class="accordion accordion-flush" id="AccordionFase01">
                                    <center>
                                        <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                    </center>
                                    <!-- Accordion 01 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item01">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseUm" aria-expanded="false" aria-controls="flush-collapseUm">
                                                <strong>a) Carretas:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseUm" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> Isoladas ou em comboios, transportam grandes volumes entre unidades industriais, a distâncias intermediárias muito grandes para empilhadeiras e pequenas demais para caminhões. Existem modelos próprios para o transporte de cargas específicas. Comboios podem movimentar cargas de 20 a 40t à velocidade de 5 a 10 km/h. As carretas podem ser deixadas em pontos diferentes, para carga ou descara, e apanhadas pelo trator na volta. A seleção das carretas é determinada pelo fluxo de movimentação entre as unidades a serem cobertas pela facilidade de carga e descarga do material a ser transportado.</p>

                                                <p>Grandes concentrações de peso exigem carretas baixas reforçadas. Fábricas nacionais produzem unidades com capacidade entre 1.500 e 10.000 kg, dotadas de freio mecânico ou automático.</p>

                                                <p>A escolha de tração é determinada pelo peso a ser transportado. Potência necessária: 1,5 CV na barra de tração para cada tonelada de carga bruta. Podem ser utilizados jipes, tratores ou carrinhos elétricos. O jipe é o mais indicado para trabalho descontínuo, porque pode – quando ocioso – ser aproveitado em outros setores. Tratores leves e microtratores são utilizados quando se deseja elevada tração. Para cargas leves, o carrinho elétrico pode dar bons resultados. Em pisos planos transporta carga de até 1 t à velocidade de 9 km/h, e tem autonomia de 23 km. Equipado com caçamba pode transportar líquidos e granéis.</p>

                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura115.jpg" data-bs-toggle="modal" data-bs-target="#Imagem64">
                                                        <img class="img-fluid" src="imagens/Figura115.jpg" width="200" alt="Alt da imagem fica aqui">
                                                    </a>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem64" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura115.jpg" alt="Alt da imagem fica aqui">
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Figura 01 - End -->
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura116.jpg" data-bs-toggle="modal" data-bs-target="#Imagem65">
                                                        <img class="img-fluid" src="imagens/Figura116.jpg" width="200" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong>Figura 102: Modelo de Carreta
                                                        </strong></p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem65" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura116.jpg" alt="Alt da imagem fica aqui">
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Figura 01 - End -->

                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td>Usos</td>
                                                            <td><br><span class="wow fadeInDown" data-wow-delay="0.3s">• Transporte de carga entre departamentos</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Movimentação de Gruós de motores da fábrica para a linha de montagem.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Transporte de barras de ferro e outras cargas compridas.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Transporte de grandes volumes de produção para a expedição.</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Vantagens</td>
                                                            <td><br><span class="wow fadeInDown" data-wow-delay="0.3s">• Baixo investimento</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Baixo custo operacional</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Necessidade de poucos veículos de tração.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Flexibilidade</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Não exigem pisos especiais, embora o rendimento diminua de até 50% em solos acidentados.</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Desvantagens</td>
                                                            <td><br><span class="wow fadeInDown" data-wow-delay="0.3s">• Exigem mão de obra adicional e equipamentos extras de carga e descarga.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Se o número de paradas é muito grande, a velocidade de operação torna-se reduzida.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Exige operador – tipo de controle sem operador ainda mão é fabricado no Brasil.</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fim Accordion 01 -->

                                    <!-- Accordion 02 -->
                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item02">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseDois" aria-expanded="false" aria-controls="flush-collapseDois">
                                                <strong>b) Carrinhos</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseDois" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> Os mais antigos e mais simples equipamentos para manejo de cargas. Transportam de 50 a 100 kg e são encontrados praticamente em qualquer depósito. Baseado nos modelos mais simples, foram criados tipos aperfeiçoados, como carrinho de plataforma elevatória (para paletes), que inclui modelos especiais para manejo de tambores, bobinas e plataformas (quatro rodízios). Há uma variedade enorme, classificada em pelo menos sete grupos diferentes:</p>

                                                <ul class="none Texto">
                                                    <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Carrinho tipo alavanca: Consistem em uma longa barra que termina em um nariz de aço. Apoiam-se em duas rodas pequenas. Sua capacidade atinge 0.5 t, mas restringe-se a curtas distâncias.</li>
                                                    <!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura117.jpg" data-bs-toggle="modal" data-bs-target="#Imagem66">
                                                            <img class="img-fluid" src="imagens/Figura117.jpg" width="200" alt="Alt da imagem fica aqui">
                                                        </a>
                                                        <p class="FonteFigura"><strong> Figura 103: Carrinho Tipo Alavanca</strong></p>
                                                    </div>

                                                    <!-- Imagem 01 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem66" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura117.jpg" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- Figura 01 - End -->
                                                    <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Plataformas rolantes: Compreendem extenso grupo cuja característica principal é apresentar superfície carregadora plana. Grande capacidade de carga e raio de alcance limitado (menos de 10 m).</li>
                                                    <!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura118.jpg" data-bs-toggle="modal" data-bs-target="#Imagem67">
                                                            <img class="img-fluid" src="imagens/Figura118.jpg" width="200" alt="Alt da imagem fica aqui">
                                                        </a>
                                                        <p class="FonteFigura"><strong>Figura 104: Carrinho Plataforma Rolante

                                                            </strong></p>
                                                    </div>

                                                    <!-- Imagem 01 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem67" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura118.jpg" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- Figura 01 - End -->
                                                    <li class="wow fadeInDown" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Carrinhos de uma roda: Consistem em uma caixa ou plataforma montada sobre duas barras e provida de roda central. São muito usados em construção e fundição. Com impulso de 20 kg o trabalhador pode deslocar 100 kg. Seu raio de ação atinge algumas centenas de metros.</li>
                                                    <!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura119.jpg" data-bs-toggle="modal" data-bs-target="#Imagem68">
                                                            <img class="img-fluid" src="imagens/Figura119.jpg" width="200" alt="Alt da imagem fica aqui">
                                                        </a>
                                                        <p class="FonteFigura"><strong>Figura 105: Carrinho de Uma Roda
                                                            </strong></p>
                                                    </div>

                                                    <!-- Imagem 01 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem68" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura119.jpg" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- Figura 01 - End -->
                                                    <li class="wow fadeInDown" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Carrinhos de duas rodas: São mais usados. Podem transportar cargas de até 250 kg num raio de 50m.</li>
                                                    <!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura120.jpg" data-bs-toggle="modal" data-bs-target="#Imagem69">
                                                            <img class="img-fluid" src="imagens/Figura120.jpg" width="200" alt="Alt da imagem fica aqui">
                                                        </a>
                                                        <p class="FonteFigura"><strong>Figura 106: Carrinho de Duas Rodas</strong></p>
                                                    </div>

                                                    <!-- Imagem 01 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem69" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura120.jpg" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- Figura 01 - End -->
                                                    <li class="wow fadeInDown" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Carrinhos de rodas múltiplas: Tem plataforma lisa e são equipados com três, quatro ou seis rodas, dispostas em várias posições. São fabricados para trabalhar num raio de ação de 150 m e têm múltiplas aplicações.</li>
                                                    <!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura121.jpg" data-bs-toggle="modal" data-bs-target="#Imagem70">
                                                            <img class="img-fluid" src="imagens/Figura121.jpg" width="200" alt="Alt da imagem fica aqui">
                                                        </a>
                                                        <p class="FonteFigura"><strong>Figura 107: Carrinho de Múltiplas Rodas</strong></p>
                                                    </div>

                                                    <!-- Imagem 01 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem70" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura121.jpg" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- Figura 01 - End -->
                                                    <li class="wow fadeInDown" data-wow-delay="1.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Carrinhos especiais: São construídos para aplicações específicas, transporte de louça, bobinas de papel, latas, tambores, engrenagens.</li>
                                                    <!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura122.png" data-bs-toggle="modal" data-bs-target="#Imagem71">
                                                            <img class="img-fluid" src="imagens/Figura122.png" width="200" alt="Alt da imagem fica aqui">
                                                        </a>
                                                        <p class="FonteFigura"><strong>Figura 108: Carrinho de Múltiplas Rodas
                                                            </strong></p>
                                                    </div>

                                                    <!-- Imagem 01 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem71" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura122.png" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- Figura 01 - End -->
                                                    <li class="wow fadeInDown" data-wow-delay="2.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Carrinhos elevadores: Possuem dispositivos para levantar, transportar e depositar de novo no solo o estrado. Alguns são específicos para cargas paletizadas.</li>
                                                    <!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura123.png" data-bs-toggle="modal" data-bs-target="#Imagem72">
                                                            <img class="img-fluid" src="imagens/Figura123.png" width="200" alt="Alt da imagem fica aqui">
                                                        </a>
                                                        <p class="FonteFigura"><strong>Figura 109: Carrinho com Elevador para Carga Geral</strong></p>
                                                    </div>

                                                    <!-- Imagem 01 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem72" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura123.png" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- Figura 01 - End -->
                                                </ul>

                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td>Usos</td>
                                                            <td><br><span class="wow fadeInDown" data-wow-delay="0.3s">• Formação de lotes para despacho.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Movimentação de cargas a curtas distâncias.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Auxiliar de operações mecanizadas.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Trabalhos de conservação e reparação.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Movimentação de matérias-primas e semiacabados em linhas de produção e montagem.</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Vantagens</td>
                                                            <td><br><span class="wow fadeInDown" data-wow-delay="0.3s">• Baixo custo.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Versatilidade</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Silenciosos.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Baixíssimo custo de manutenção.</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Desvantagens</td>
                                                            <td><br><span class="wow fadeInDown" data-wow-delay="0.3s">• Capacidade de carga e raio de ação limitados.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Baixa velocidade de operação.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Exige mais mão de obre que os equipamentos mecanizados.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Baixa produtividade</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fim Accordion 02 -->

                                    <!-- Accordion C -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="ItemC">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseC" aria-expanded="false" aria-controls="flush-collapseC">
                                                <strong>c) Elevadores: </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseC" class="accordion-collapse collapse" aria-labelledby="ItemC" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> Dividem-se de acordo com a Associação Brasileira de Normas Técnicas em três categorias: </p>
                                                <ul class="none Texto">
                                                    <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>Elevador de Carga: Semelhante aos elevadores de passageiros, são, todavia, mais rústicos; podem ser montados em torres metálicas, completamente fechadas.</li>
                                                    <!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura125.png" data-bs-toggle="modal" data-bs-target="#Imagem73">
                                                            <img class="img-fluid" src="imagens/Figura125.png" width="200" alt="Alt da imagem fica aqui">
                                                        </a>
                                                        <p class="FonteFigura"><strong>Figura 110: Elevador de Carga </strong></p>
                                                    </div>

                                                    <!-- Imagem 01 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem73" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura125.png" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- Figura 01 - End -->
                                                    <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>Monta cargas: Capacidade máxima de 300 kg e dimensões máximas de 1,10 x 1,10 x 1,10 m.
                                                    </li>
                                                    <!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura126.png" data-bs-toggle="modal" data-bs-target="#Imagem74">
                                                            <img class="img-fluid" src="imagens/Figura126.png" width="200" alt="Alt da imagem fica aqui">
                                                        </a>
                                                        <p class="FonteFigura"><strong>Figura 111: Elevador Monta Carga</strong></p>
                                                    </div>

                                                    <!-- Imagem 01 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem74" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura126.png" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- Figura 01 - End -->
                                                    <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>Elevador Móvel: Utilizado em armazéns com elevado aproveitamento vertical em cargas não paletizadas.</li>
                                                    <!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura127.png" data-bs-toggle="modal" data-bs-target="#Imagem74">
                                                            <img class="img-fluid" src="imagens/Figura127.png" width="200" alt="Alt da imagem fica aqui">
                                                        </a>
                                                        <p class="FonteFigura"><strong>Figura 112: Elevador Móvel
                                                            </strong></p>
                                                    </div>

                                                    <!-- Imagem 01 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem74" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura127.png" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- Figura 01 - End -->
                                                    <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>Elevador de Alçapão: Utilizado na carga e descarga de garrafas, latas, caixas etc., entre o pavimento térreo e o subsolo. </li>
                                                    <!-- Titulo Figura -->
                                                    <div class="text-center">
                                                        <a href="imagens/Figura128.png" data-bs-toggle="modal" data-bs-target="#Imagem75">
                                                            <img class="img-fluid" src="imagens/Figura128.png" width="200" alt="Alt da imagem fica aqui">
                                                        </a>
                                                        <p class="FonteFigura"><strong>Figura 113: Elevador de Alçapão</strong></p>
                                                    </div>

                                                    <!-- Imagem 01 - MODAL -->
                                                    <div class="modal fade text-center" id="Imagem75" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img class="img-fluid" src="imagens/Figura128.png" alt="Alt da imagem fica aqui">
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- Figura 01 - End -->
                                                </ul> <br><br>
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td>Usos</td>
                                                            <td><br><span class="wow fadeInDown" data-wow-delay="0.3s">• No transporte entre andares diferentes;</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Carga e descarga entre pavimento térreo e subsolo;</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Vencer desníveis entre a rua e o piso do armazém.</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Vantagens</td>
                                                            <td><br><span class="wow fadeInDown" data-wow-delay="0.3s">• Ocupam menos espaço que outros equipamentos;</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• São relativamente baratos.</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Desvantagens</td>
                                                            <td><br><span class="wow fadeInDown" data-wow-delay="0.3s">• Exigem cuidados na operação para evitar acidentes;</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Menos velozes que outros equipamentos.</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fim Accordion C -->


                                    <!-- Accordion 03 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item03">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTres" aria-expanded="false" aria-controls="flush-collapseTres">
                                                <strong>d) Empilhadeiras Frontais: </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTres" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>Quando utilizadas continuamente, apresentam indiscutíveis vantagens em relação ao trabalho braçal. Proporcionam flexibilidade operacional, reduzem à metade os custos de movimentação, possibilitam maior aproveitamento do espaço de armazenagem e melhor arrumação das cargas. A empilhadeira constitui-se basicamente de uma unidade locomotora, dotada de controles hidráulicos e acionada por motor elétrico, à gasolina, à diesel ou GLP. Sobre uma coluna ou quadro de elevação, correm garfos, que fazem a carga e descarga e suportam o peso. O equipamento move-se sobre rodas pneumáticas ou de borracha maciça. As colunas podem ter apenas um ou mais estágios – o que possibilita alturas de elevação de até 12 m – e se inclinam para a frente ou para trás, para depositar ou apanhar carga. Em vez de garfos, a empilhadeira pode dispor de aríete – para carregar pneus, por exemplo; pega cargas hidráulicas para peças de ferro; ou caçamba para minério ou metais fundidos.
                                                <p>A velocidade máxima do equipamento varia de 10km/h (elétricas) até 35 km/h (a diesel).</p>

                                                <p>A empilhadeira elétrica é lenta e só pode operar em pisos bastante regulares. Tem, todavia, baixo custo operacional e não polui o ambiente. É indicada para ambientes fechados e que exijam higiene, como câmaras frigoríficas, indústrias químicas e alimentícias. Os modelos a GLP ou Diesel são relativamente mais caros. Mas poluem menos o ambiente e quando utilizados a plena capacidade têm custo operacional menor que as versões à gasolina.</p>

                                                <p>As condições do piso determinam a rodagem. Se o piso é irregular, não é aconselhável a utilização de empilhadeira com rodas maciças. Uma seleção adequada depende da análise dos dados.</p>
                                                <!-- Figura 01 - End -->
                                                <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>Elevador de Alçapão: Utilizado na carga e descarga de garrafas, latas, caixas etc., entre o pavimento térreo e o subsolo. </li>
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura129.png" data-bs-toggle="modal" data-bs-target="#Imagem76">
                                                        <img class="img-fluid" src="imagens/Figura129.png" width="200" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong>Figura 114: Empilhadeira Frontal
                                                        </strong></p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem76" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura129.png" alt="Alt da imagem fica aqui">
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Figura 01 - End -->

                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td>Vantagens</td>
                                                            <td><br><span class="wow fadeInDown" data-wow-delay="0.3s">• Ocupam pouco espaço.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Permite livre escolha de itinerário.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Possibilita melhor aproveitamento do espaço vertical – utilização de quatro e até cinco planos de carga.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Reduz a largura dos corredores.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Dá maior segurança ao operário e à carga.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Diminui a mão de obra.</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Desvantagens</td>
                                                            <td><br><span class="wow fadeInDown" data-wow-delay="0.3s">• Exige paletização das cargas pequenas.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Retorno quase sempre vazio.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• O operador deve ser especializado.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Fluxo de material intermitente.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Transporte mais lento que por equipamentos especializados.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• A capacidade diminui com o aumento da altura de elevação.</span>

                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Accordion 03 -->

                                    <!-- Accordion 04 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item04">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseQuatro" aria-expanded="false" aria-controls="flush-collapseQuatro">
                                                <strong>e) Empilhadeiras Laterais:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseQuatro" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> Manobra cargas pesadas, compridas e desajeitadas em pequenos espaços a maiores distâncias que as convencionais. Equipamento versátil e flexível – algumas movem-se para frente, para trás e para os lados; são capazes de desempenhar as funções de um caminhão médio, de uma ponte rolante, e guindaste ou mesmo de uma empilhadeira frontal. Tendo o sistema de elevação instalado na sua parte lateral, pode deslocar-se no sentido de maior dimensão da carga que é apoiada na plataforma. A coluna e os garfos têm deslocamento lateral, permitindo cargas sem equipamentos auxiliares, além de facilitar a formação e alinhamento de pilhas. Para colocar a carga sobre o chassi, o equipamento utiliza o recuo da coluna. Na descarga, opera da mesma forma que as empilhadeiras convencionais. Fabricadas em capacidades que vão desde ½ até 45t, podem ser divididas em dois grupos: as de raio de ação limitado e as de raio de ação longo. As do primeiro tipo – de utilização na produção e armazenagem de cargas paletizadas – são geralmente movidas a motor elétrico. Caracterizam-se por grande liberdade de movimento. Já as outras reúnem as vantagens de uma empilhadeira convencional às de um caminhão de entrega. São indicadas para operar ao ar livre.</p>
                                                <!-- Figura 01 - End -->
                                                <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>Elevador de Alçapão: Utilizado na carga e descarga de garrafas, latas, caixas etc., entre o pavimento térreo e o subsolo. </li>
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura131.png" data-bs-toggle="modal" data-bs-target="#Imagem77">
                                                        <img class="img-fluid" src="imagens/Figura131.png" width="200" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong>Figura 115: Empilhadeira Lateral de Raio de Ação Longa

                                                        </strong></p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem77" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura131.png" alt="Alt da imagem fica aqui">
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Figura 01 - End -->

                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td>Usos</td>
                                                            <td>De raio de ação limitado:
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Na estocagem de cargas paletizadas eliminam corredores transversais e permitem corredores de acesso mais estreito (1,70m).</span>
                                                                De raio de ação longo:
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• No escoamento ou suprimento de linhas de montagem, onde proporcionam redução de área de até 50% em relação às convencionais.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Em terrenos acidentados ou .pisos irregulares.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Em serrarias podem fazer quase toda a movimentação interna de materiais desde a recepção até expedição.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Na laminação, além de serem úteis na movimentação de chapas, servem também para paletizar lingotes de mais de 15 t e transportar peças quentes (acima de 700º c).</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Na trefilação, movimentam rolos de arame e barras compridas, auxiliam a fabricação de telas e realizam operações de cargas e descargas.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Nas indústrias de pré-moldados, removem com suavidade e firmeza peças ainda não curadas.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Na construção civil, movimentam e descarregam blocos pré-moldados, madeira, além de armar e desarmar andaimes.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Em obras públicas, ajudam a assentar tubos compridos, mesmo se acondicionados em armações unitárias. Líquidos que não podem ser muito agitados são transportados nas plataformas da empilhadeira graças à sua boa estabilidade.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Na indústria química, transportam produtos perigosos, com baixo risco.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Na indústria automobilística, manuseiam chassi, tanto para descarga de carretas, como no suprimento de linhas de montagem.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Em portos, manobram pesados contenedores de até 45t.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• No transporte urbano, podem ser usadas para entregas de até 10 km de distância.</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Vantagens</td>
                                                            <td> De raio de ação limitado
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Grande altura de empilhamento (até 12 m).</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Dispensam equipamentos auxiliares.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Melhor aproveitamento de espaço, uma vez que operam em corredores estreitos – apenas alguns centímetros a mais que a largura do palete.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Tem mais estabilidade que as empilhadeiras convencionais.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Menor velocidade de elevação que as empilhadeiras convencionais.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Não ultrapassam pilhas ou obstáculos.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Preço inicial maior que o das empilhadeira convencionais, embora os custos de manutenção sejam equivalentes.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Não são fabricadas no Brasil.</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Desvantagens</td>
                                                            <td><br><span class="wow fadeInDown" data-wow-delay="0.3s">• Exigem mão de obra adicional e equipamentos extras de carga e descarga.</span>
                                                                <br><br><span class="wow fadeInDown" data-wow-delay="0.3s">• Se o número de paradas é muito grande, a velocidade de operação torna-se reduzida.</span>
                                                                <br><br><span class="wow fadeInDown" data-wow-delay="0.3s">• Exige operador – tipo de controle sem operador ainda mão é fabricado no Brasil.</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Accordion 04 -->
                                    <!-- Accordion 05 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item05">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseCinco" aria-expanded="false" aria-controls="flush-collapseCinco">
                                                <strong>f) Empilhadeiras Manuai :</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseCinco" class="accordion-collapse collapse" aria-labelledby="Item05" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>Equipamento intermediário entre o carrinho manual e a empilhadeira motorizada. Movimentada e guiada manualmente, a empilhadeira manual possui, todavia, mecanismo de elevação manual, hidráulico, elétrico ou eletro-hiraulico. Desloca-se sobre rodízios de náilon ou borracha e é equipada com torre telescópica-dobrável, para permitir a passagem por caminhos estreitos e portas. Capacidade de carga variável entre 300 e 1500 kg. Podem vir equipadas com os seguintes dispositivos:</p>

                                                <ul class="none Texto">
                                                    <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Garfo: Para movimentar cargas paletizadas.</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Plataforma: Para receber pacotes, peças, estampos, etc.</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.8s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Tarugo: Eixo horizontal usado no transo, tem porte de rolos de arame, pneus, bobinas de papel.</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Lança com gancho: Semelhante ao tarugo tem gancho na extremidade para pendurar a carga; utilizada em frigoríficos, açougues e matadouros.</li>
                                                    <li class="wow fadeInDown" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Tambor basculante: Arco que suporta o recipiente por alças ou garfos. Usado no transporte e estocagem de tachos, tambores e barris. Serve também para entornar líquidos quentes, ácidos, etc.</li>
                                                </ul>
                                                <!-- Figura 01 - End -->
                                                <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>Elevador de Alçapão: Utilizado na carga e descarga de garrafas, latas, caixas etc., entre o pavimento térreo e o subsolo. </li>
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura130.jpg" data-bs-toggle="modal" data-bs-target="#Imagem78">
                                                        <img class="img-fluid" src="imagens/Figura130.jpg" width="200" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong>Figura 116: Empilhadeira Manual</strong></p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem78" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura130.jpg" alt="Alt da imagem fica aqui">
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Figura 01 - End -->

                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td>Usos</td>
                                                            <td><br><span class="wow fadeInDown" data-wow-delay="0.3s">• Alimentação de máquinas.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Estocagem de cargas.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Grande altura.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Carga e descarga de caminhões.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Auxiliar de empilhadeira motorizada.</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Vantagens</td>
                                                            <td> <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Baixo preço.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Não exige operador especializado.</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Desvantagens</td>
                                                            <td><br><span class="wow fadeInDown" data-wow-delay="0.3s">• Raio de ação limitado.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Capacidade limitada a 1.500 kg.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Baixa velocidade de operação.</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Accordion 05 -->
                                    <!-- Accordion 06 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item06">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeis" aria-expanded="false" aria-controls="flush-collapseSeis">
                                                <strong>g) Guindaste Móvel: </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseSeis" class="accordion-collapse collapse" aria-labelledby="Item06" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> Dois tipos: (a) lança hidráulica montada em plataforma de deslocamento manual (b) veículo totalmente motorizado, com cabina, da qual o operador controla os movimentos da máquina. A capacidade dos modelos de série do mercado nacional chega a 33.000 kg. A possibilidade de se adaptarem dispositivos extras torna a aplicação dos guindastes móveis muito variada. Embora possam operar – especialmente os de menor capacidade – com lança a altura elevada, podem ser projetados para trabalhar em áreas restritas, passando através de portas. Geralmente utilizam um jib (que normalmente atinge 9 m de comprimento) extensível, capaz de operar no sentido vertical a alturas moderadas. A área de ação chega a 360º, mas o aumento do comprimento da lança reduz a capacidade de carga. A lança giratória possibilita a movimentação de cargas com o guindaste parado.</p>
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura134.jpg" data-bs-toggle="modal" data-bs-target="#Imagem79">
                                                        <img class="img-fluid" src="imagens/Figura134.jpg" width="200" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong>Figura 117: Guindaste Móvel Manual
                                                        </strong></p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem79" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura134.jpg" alt="Alt da imagem fica aqui">
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Figura 01 - End -->
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura132.png" data-bs-toggle="modal" data-bs-target="#Imagem80">
                                                        <img class="img-fluid" src="imagens/Figura132.png" width="200" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong>Figura 118: Guindaste Móvel Motorizado
                                                        </strong></p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem80" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura132.png" alt="Alt da imagem fica aqui">
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Figura 01 - End -->


                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td>Usos</td>
                                                            <td><br><span class="wow fadeInDown" data-wow-delay="0.3s">• Em pátios de manobras ferroviárias, para carregar vagões.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Movimentação de cargas e carregamento de navios em portos.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Montagem industrial.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Construção pesada.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Terminais de levantamento em áreas restritas.</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Vantagens</td>
                                                            <td> <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Opera cargas não paletizadas.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• A lança atinge locais de difícil acesso.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Movimenta-se em qualquer sentido.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Uso muito versátil.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Transporta cargas em locais em que o piso é obstáculo.</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Desvantagens</td>
                                                            <td><br><span class="wow fadeInDown" data-wow-delay="0.3s">• Mais lento que os equipamentos especializados.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Não pode ser utilizado em lugares de altura limitada.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Não passa em corredores estreitos.</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Accordion 06 -->
                                    <!-- Accordion 07 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item07">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSete" aria-expanded="false" aria-controls="flush-collapseSete">
                                                <strong>h) Pontes rolantes: </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseSete" class="accordion-collapse collapse" aria-labelledby="Item07" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>Movimentam desde pequenas cargas de 599 kg até pesadíssimos geradores ou transformadores de 300 t. A possibilidade de utilização de acessórios diferentes – ganchos, âncora, caçambas, garras ou pinças – amplia o campo de aplicação do equipamento, que vai desde o transporte de peças, tubos e barras, passando por cagas a granel, sucatas, até lingotes quentes, “panelas” e aço líquido e carregamento de fornos.</p>

                                                <p>Basicamente, a ponte rolante é constituída por uma ou mais vigas que correm sobre trilhos, a altura suficiente para não interferir com a movimentação no piso. Geralmente é instalada um pouco abaixo do nível do telhado. Combina a capacidade de levantar carga com o movimento horizontal em dois sentidos, que só é limitado pelas colunas e pelo comprimento dos trilhos. Na seleção, os pontos básicos são a capacidade de elevação, a frequência de operação e a velocidade desejada.</p>
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura136.jpg" data-bs-toggle="modal" data-bs-target="#Imagem81">
                                                        <img class="img-fluid" src="imagens/Figura136.jpg" width="200" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong>Figura 119: Guindaste Ponte Rolante
                                                        </strong></p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem81" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura136.jpg" alt="Alt da imagem fica aqui">
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Figura 01 - End -->

                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td>Usos</td>
                                                            <td>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Em usinas de força.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Oficinas mecânicas.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Armazéns.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Pátios externos.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Linhas de montagem.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Siderurgia, no carregamento de fornos, laminação e em pátios de lingoteiras.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Usinas de açúcar.</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Vantagens</td>
                                                            <td><br><span class="wow fadeInDown" data-wow-delay="0.3s">• Durabilidade elevada.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Pode movimentar cargas ultrapesadas.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Não interferem no trabalho ao nível do solo.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Modelos para operação ao nível do solo podem ser operados por pessoal não especializado.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Podem carregar e descarregar em qualquer ponto, possibilitando adequado posicionamento da carga.</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Desvantagens</td>
                                                            <td><br><span class="wow fadeInDown" data-wow-delay="0.3s">• Exigem estruturas.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Quando o edifício não é especialmente construído para receber a ponte, a adaptação encarece muito o investimento.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Preço inicial relativamente alto.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Área de movimentação definida.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Requer mão de obra adicional, ao nível do solo.</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Accordion 07 -->
                                    <!-- Accordion 08 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item08">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOito" aria-expanded="false" aria-controls="flush-collapseOito">
                                                <strong>i) Ponte rolante empilhadeira: </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOito" class="accordion-collapse collapse" aria-labelledby="Item08" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>Soluciona problemas que não poderiam ser resolvidos por uma empilhadeira ou por uma ponte rolante convencional. Consiste em uma ponte rolante com duas vigas principais , na qual será acoplado um carrinho de girar completamente sobre si mesmo, de forma contínua. Desse carrinho sai, em direção ao solo, um mastro, no qual corre – verticalmente – um conjunto de garfos. O sistema permite movimentos nas três dimensões. Nos sentidos longitudinal e transversal, aponte rolante e o carrinho – que tem movimento transversal e rotativo cobrem todos os cantos do armazém. No sentido vertical, o conjunto de garfos desliza no mastro – movimento telescópico – e pode ser acrescido de movimento giratório. O equipamento é operado através de cabine instalada ao lado do conjunto de garfos e pode acompanhar todos os movimentos – verticais e horizontais da carga.</p>

                                                <p>Pode movimentar desde produtos semiacabados, passando por perfilados, fardos, madeira até tubos, perfis e trefilados, de prensas para prateleiras e dessas para outras máquinas ou expedição.</p>
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura137.jpg" data-bs-toggle="modal" data-bs-target="#Imagem82">
                                                        <img class="img-fluid" src="imagens/Figura137.jpg" width="200" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong>Figura 120: Ponte Rolante Empilhadeira
                                                        </strong></p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem82" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura137.jpg" alt="Alt da imagem fica aqui">
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Figura 01 - End -->

                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td>Usos</td>
                                                            <td><br><span class="wow fadeInDown" data-wow-delay="0.3s">• Para alturas de empilhamento superiores a 6m.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Na estocagem de grandes volumes de materiais.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Necessidade de fluxo rápido de carga.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Em áreas de estocagem restrita.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Em pisos pouco resistentes e irregulares, que impossibilitem a utilização de empilhadeira convencional.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Quando planos de carga e descarga são diferentes, impossibilitando a utilização de ponte rolante convencional, mesmo com o auxílio de operadores para virar a mercadoria.</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Vantagens</td>
                                                            <td> <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Permite elevadas alturas de empilhamento.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Elimina corredores – que chegam a absorver até 70% da área útil.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Aumenta a velocidade de operação, permitindo fluxo mais rápido da carga.</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Desvantagens</td>
                                                            <td><br><span class="wow fadeInDown" data-wow-delay="0.3s">• Exige investimento maior que uma empilhadeira ou ponte rolante convencional.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Manutenção é mais cara.</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Accordion 08 -->
                                    <!-- Accordion 09 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item09">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNove" aria-expanded="false" aria-controls="flush-collapseNove">
                                                <strong>j) Pórtico rolante: </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseNove" class="accordion-collapse collapse" aria-labelledby="Item09" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> Muito semelhante à ponte rolante, projetado geralmente para trabalhar ao ar livre (especialmente em portos), possui estrutura própria, que corre sobre trilhos assentados no piso.</p>

                                                <p>Em relação à ponte rolante oferece vantagens para comprimento de rolamentos maiores - acima de 50 m , onde a construção de uma estrutura metálica ou de concreto armado torna-se muito cara. Quanto maior o vão, mais indicada torna-se a ponte rolante, porque quando as pernas do pórtico estão muito separadas torna-se difícil conseguir um funcionamento rápido e macio. Mas há certos trabalhos, como o levantamento de cargas muito pesadas, em que o pórtico é definitivamente mais indicado que a ponte.</p>
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura138.jpg" data-bs-toggle="modal" data-bs-target="#Imagem83">
                                                        <img class="img-fluid" src="imagens/Figura138.jpg" width="200" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong>Figura 121: Pórtico Rolante
                                                        </strong></p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem83" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura138.jpg" alt="Alt da imagem fica aqui">
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Figura 01 - End -->

                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td>Usos</td>
                                                            <td><br><span class="wow fadeInDown" data-wow-delay="0.3s">• Na movimentação ao ar livre de cargas pesadas, em pequenos vão e grandes comprimentos de rolamento.</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Vantagens</td>
                                                            <td> Em relação à ponte rolante
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Maior capacidade de carga.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Possibilidade de deslocamento a maiores distâncias.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Não requer estrutura.</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Desvantagens</td>
                                                            <td> Em relação à ponte rolante
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Uso mais restrito e em vão menores.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Menos seguro.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Interfere com o tráfego no piso</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Mais caro.</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Accordion 09 -->
                                    <!-- Accordion 10 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item10">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseDez" aria-expanded="false" aria-controls="flush-collapseDez">
                                                <strong>k) Talhas: </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseDez" class="accordion-collapse collapse" aria-labelledby="Item10" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>Indicadas para deslocar cargas pesadas, volumosas ou desajeitadas, com frequência variável. Elétrica, manual ou pneumática, pode ser utilizada fixa – apenas para levantar cargas – ou ser adaptada a monovias e monotrilhos, para fazer grandes deslocamentos de carga. Quando os movimentos internos são compostos de pequenos deslocamentos verticais ou horizontais, a talha pode ser excelente solução para transporte interno.</p>
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura139.jpg" data-bs-toggle="modal" data-bs-target="#Imagem84">
                                                        <img class="img-fluid" src="imagens/Figura139.jpg" width="200" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong>Figura 122: Talha
                                                        </strong></p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem84" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura139.jpg" alt="Alt da imagem fica aqui">
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Figura 01 - End -->

                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td>Usos</td>
                                                            <td><span class="wow fadeInDown" data-wow-delay="0.3s">• Em deslocamentos verticais.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Em deslocamentos horizontais, quando adaptadas a monovias.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Em ambos os casos, na movimentação de cargas pesadas e desajeitadas.</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Vantagens</td>
                                                            <td><span class="wow fadeInDown" data-wow-delay="0.3s">• Baixo .custo inicial</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Facilidade de instalação.</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Desvantagens</td>
                                                            <td><span class="wow fadeInDown" data-wow-delay="0.3s">• Desaconselhada para produção em série.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Exige mão de obra auxiliar.</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Accordion 10 -->
                                    <!-- Accordion 11 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item11">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOnze" aria-expanded="false" aria-controls="flush-collapseOnze">
                                                <strong>l) Transportador de Corrente:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOnze" class="accordion-collapse collapse" aria-labelledby="Item11" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> Consiste em uma série de troles de aço com rodas metálicas, que se deslocam na aba inferior de uma viga guia de perfil em I. O acondicionamento é feito de corrente sem fim. O sistema é muito utilizado no transporte de produtos fabricados em série, baixa velocidade e em circuito fechado. Cada um desses troles possui um braço e um dispositivo de sustentação para receber a carga, variável em formato, conforme o formato da carga. Assim, para cargas pequenas – parafusos porcas, etc. – podem ser utilizadas cestas de arame, que são facilmente colocadas e retiradas dos troles. Bobinas de chapa ou arame podem ser suspensas por ganchos reforçados. Metais fundidos podem ser transportados em bandejas de resfriamento de grande superfície.</p>
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura140.jpg" data-bs-toggle="modal" data-bs-target="#Imagem85">
                                                        <img class="img-fluid" src="imagens/Figura140.jpg" width="200" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong>Figura 123: Transportador de Corrente
                                                        </strong></p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem85" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura140.jpg" alt="Alt da imagem fica aqui">
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Figura 01 - End -->

                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td>Usos</td>
                                                            <td><br><span class="wow fadeInDown" data-wow-delay="0.3s">• Secções de pintura e decapagens de indústrias, principalmente automobilísticas.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Transporte de reses abatidas em frigoríficos.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Em qualquer situação que exija transporte em série, a velocidade não muito elevada.</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Vantagens</td>
                                                            <td><br><span class="wow fadeInDown" data-wow-delay="0.3s">• Libera área do piso para fins produtivos.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Pode fazer curvas e vencer elevações com facilidade.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Permite boa sincronização nas operações de montagem.</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Desvantagens</td>
                                                            <td><br><span class="wow fadeInDown" data-wow-delay="0.3s">• Exige estruturas.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Área de operação predeterminadas e difícil de ser remanejada.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Exige mão de obra auxiliar ao nível de solo.</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Accordion 11 -->
                                    <!-- Accordion 12 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item12">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseDoze" aria-expanded="false" aria-controls="flush-collapseDoze">
                                                <strong>m) Transportador de rodízios: </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseDoze" class="accordion-collapse collapse" aria-labelledby="Item12" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> Movimenta cargas unitárias médias e leves, tais como embalagens, caixas, engradados, componentes e contenedores com material a granel. Pode ser instalado no interior da fábrica, em galpões ou ao ar livre. A carga é deslocada pela ação da gravidade, com pequeno auxílio do operador sobre rodízios de alumínio (cargas leves, capacidade até 50 kg/m), nailon (entre 50 e 100 kg/m) ou aço (até 300 kg/m) Um declive de 1% permite vencer distâncias de até 20 m. Quando o material deve percorrer grandes distâncias na vertical, pode ser usado o sistema helicoidal, ou o em ziguezague. Existem sistemas desmontáveis, que podem ser deslocados.</p>
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura141.jpg" data-bs-toggle="modal" data-bs-target="#Imagem86">
                                                        <img class="img-fluid" src="imagens/Figura141.jpg" width="200" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong>Figura 124: Transportador de Rodízios
                                                        </strong></p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem86" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura141.jpg" alt="Alt da imagem fica aqui">
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Figura 01 - End -->


                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td>Usos</td>
                                                            <td><br><span class="wow fadeInDown" data-wow-delay="0.3s">• Na preparação de lotes de expedição.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• No empacotamento de produto acabado.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Em linha de montagem.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• No transporte entre andares diferentes.</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Vantagens</td>
                                                            <td> <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Não requer acionamento mecânico, por funcionar em declive.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Ocupa pouco espaço.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Não requer operador especializado.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• A estrutura de sustentação é simples e leve.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Pode fazer curvas.</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Desvantagens</td>
                                                            <td><br><span class="wow fadeInDown" data-wow-delay="0.3s">• Capacidade de cargas e de produção limitadas.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• A carga exige orientação manual nas curvas.</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Accordion 12 -->
                                    <!-- Accordion 13 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item13">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTreze" aria-expanded="false" aria-controls="flush-collapseTreze">
                                                <strong>n) Transelevadores:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTreze" class="accordion-collapse collapse" aria-labelledby="Item13" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>A implantação da nova tecnologia na logística dos transelevadores, busca automatizar o deslocamento de mercadorias no armazém, por intermédio software associado a robótica com manuseio fácil, rápido e com alta produtividade independente das condições climáticas. São máquinas criadas para o armazenamento automático de pallets. Deslocam-se nos corredores e realizam funções de entrada reposicionamento e saída de mercadorias. Os transelevadores são guiados por um software de gestão que coordena todos os movimentos.</p>

                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura142.png" data-bs-toggle="modal" data-bs-target="#Imagem87">
                                                        <img class="img-fluid" src="imagens/Figura142.png" width="200" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong>Figura 125: Representação da Operação com Transelevador
                                                        </strong></p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem87" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura142.png" alt="Alt da imagem fica aqui">
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <p class="TituloFigura"><strong>Fonte: </strong>EGPCE</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Figura 01 - End -->


                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td>Usos</td>
                                                            <td><br><span class="wow fadeInDown" data-wow-delay="0.3s">• Na automatização de lotes de expedição.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• No reposicionamento automático de mercadorias.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• No máximo aproveitamento vertical do armazém.</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Vantagens</td>
                                                            <td><br><span class="wow fadeInDown" data-wow-delay="0.3s">• Intervenção mínima do operador.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Rapidez na execução.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Possível redução da área de armazenamento.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Organização e capacidade de expedição rápida.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Controle de estoques.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Possibilidade de adequar-se a condições de trabalho especiais, por exemplo: temperaturas adversas, umidade extrema.</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Desvantagens</td>
                                                            <td><br><span class="wow fadeInDown" data-wow-delay="0.3s">• Investimento auto.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Adaptação do armazém e capacitação de operadores.</span>
                                                                <br><span class="wow fadeInDown" data-wow-delay="0.3s">• Pouca flexibilidade e necessidade de um esquema de redundância.</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Accordion 12 -->


                                </div><br><br>
                                <!-- FIM Accordion -->

                                <!-- SubTitulo -->
                                <p class="SubTitulo" id="top5-fourteen"> Inventários:</p>
                                <hr>

                                <p>Uma questão igualmente importante para a gestão da armazenagem é desenvolver técnicas de como organizar um inventário com o objetivo de compatibilizar a quantidade física dos estoques com os registros escriturais de controle. O inventário é muito útil nos momentos críticos, tais como: alta rotatividade, mudanças de responsabilidade na gestão, encerramento de exercício financeiro e mudança de sistema de controle.</p>

                                <p><strong> Para entender melhor essa questão estudaremos os seguintes tópicos:</strong></p>

                                <ul class="none Texto">
                                    <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> O que é um inventário e tipos de inventário.</li>
                                    <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Preparação e realização do inventário.</li>
                                    <li class="wow fadeInDown" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Conciliações e ajustes.</li>
                                </ul>

                                <p class="SubSubTitulo"> O que é um Inventário e Tipos de Inventário:</p>
                                <hr>

                                <p>Uma das funções que justificam a importância da gestão da armazenagem é a função de “Controle de Estoque” caracterizada pela precisão nos registros de estoque e controle efetivo das movimentações. Dessa forma, a operação do controle de estoque deve vir ao encontro dos objetivos de custos e de serviços pretendidos pela organização, em função disso deve-se efetuar contagens físicas de seus itens de estoque para verificar:</p>

                                <ul class="none Texto">
                                    <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Discrepâncias em quantidade e valor, entre o estoque físico e o registro escritural.</li>
                                    <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Acerto entre o estoque físico e o registro escritural e conciliação com o estoque contábil.</li>
                                    <li class="wow fadeInDown" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Apuração do valor total do estoque (contábil) para efeito de balanços ou balancetes.</li>
                                </ul>

                                <p><strong> Por isso é importante que o inventário seja realizado próximo ao encerramento do ano fiscal. Os inventários podem ser:</strong></p>

                                <!-- Início Accordion -->
                                <div class="accordion accordion-flush" id="AccordionFase01">
                                    <center>
                                        <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                    </center>
                                    <!-- Accordion 01 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item01">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseum" aria-expanded="false" aria-controls="flush-collapseum">
                                                <strong>a) Gerais:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseum" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> Efetuados ao final do exercício contábil, abrangem todos os itens de estoque de uma só vez. São operações de duração relativamente prolongada, que, por incluir quantidade elevada de itens, impossibilitam as reconciliações, análise das causas de divergências e ajustes na profundidade.</p>

                                                <p>Os inventários gerais também devem ser efetuados sempre que houver uma mudança de Gestor Administrativo Financeiro, nas implantações de novos sistemas de controle de estoque e nos casos de fusão ou extinção de organizações.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fim Accordion 01 -->

                                    <!-- Accordion 02 -->
                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item02">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsedois" aria-expanded="false" aria-controls="flush-collapsedois">
                                                <strong>b) Rotativos: </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapsedois" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>Visando a distribuir as contagens ao longo do ano, concentrando cada contagem em menor quantidade de itens, reduz a duração unitária da operação e dá melhores condições de análise das causas de ajustes, visando ao melhor controle. Abrange através de contagens programadas todos os itens de várias categorias de estoque tais como:</p>

                                                <ul class="none Texto">
                                                    <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Grupo 1</strong> — neste caso, serão enquadrados os itens mais significativos, os quais serão inventariados três vezes ao ano, por representarem maior valor em estoque e serem estratégicos e imprescindíveis à operação.</li>
                                                    <br>
                                                    <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Grupo 2</strong> — constituído de itens de importância intermediária quanto ao valor de estoque, estratégia e manejo. Estes serão inventariados duas vezes ao ano.</li>
                                                    <br>
                                                    <li class="wow fadeInDown" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Grupo 3</strong> — formado pelos demais itens. Caracteristicamente, será composto de muitos itens que representam pequeno valor de estoque. Os materiais deste grupo serão inventariados uma vez por ano.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fim Accordion 02 -->
                                </div><br><br>
                                <!-- FIM Accordion -->





                                <!-- SubSubTitulo -->
                                <p class="SubSubTitulo"> Preparação e Realização do Inventário:</p>
                                <hr>
                                <!-- alterado -->
                                <p><strong>Um bom planejamento e preparação para inventário é imprescindível para a obtenção de bons resultados. Deverá ser providenciado:</strong></p>
                                <!-- alterado end -->

                                <!-- Início Accordion -->
                                <div class="accordion accordion-flush" id="AccordionFase01">
                                    <center>
                                        <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                    </center>
                                    <!-- Accordion 01 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item01">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse11" aria-expanded="false" aria-controls="flush-collapse11">
                                                <strong>a) Constituição da COMISSÃO PERMANENTE INVENTARIANTE –</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapse11" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> CPI por intermédio de Portaria expedida pelo dirigente do órgão definindo representantes de diversas áreas do órgão, que serão responsáveis pela coordenação geral dos inventários, a CPI deve ser composta por:</p>

                                                <ul class="none Texto">
                                                    <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Coordenadores de Procedimentos.</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Coordenador de Equipes de Contagem.</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Equipes de Contagem.</li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fim Accordion 01 -->

                                    <!-- Accordion 02 -->
                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item02">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse22" aria-expanded="false" aria-controls="flush-collapse22">
                                                <strong>b) Definição do Período de Realização do Inventário</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapse22" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> Com divulgação interna e externa de forma que as requisições de materiais sejam antecipadas e postergadas as agendas de recebimento.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fim Accordion 02 -->

                                    <!-- Accordion 03 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item03">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse33" aria-expanded="false" aria-controls="flush-collapse33">
                                                <strong>c) Definição do tipo e da abrangência do inventário:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapse33" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> Se o inventário é rotativo ou geral e qual o universo das contagens.</p>

                                                <ul class="none Texto">
                                                    <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Só material de estoque, ou também;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> material de propriedade de terceiros em poder do órgão e;</li>
                                                    <li class="wow fadeInDown" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> materiais recebidos de fornecedores durante o processo de inventário.</li>
                                                </ul>

                                                <p>Segundo a característica do universo da contagem deve haver procedimento diferenciado.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Accordion 03 -->
                                    <!-- Accordion 04 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item04">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse44" aria-expanded="false" aria-controls="flush-collapse44">
                                                <strong>d) Definição do grau de acurácia do inventário</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapse44" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> Ou seja, o grau de aceitação da divergência, sem que este desvio seja efetivamente contabilizado como um erro ou diferença no sistema de controle de estoque. A determinação de um grau de tolerância reduz a necessidade de reconciliações e ajustes de saldo desnecessários, em contraste com a política de tolerância zero.</p>
                                                <p>O grau de acurácia do inventário pode ser calculado com a seguinte fórmula, gerando um índice:</p>

                                                <h4> Índice de Acurácia</h4>

                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura144.png" data-bs-toggle="modal" data-bs-target="#Imagem000">
                                                        <img class="img-fluid" src="imagens/Figura144.png" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong>Figura 126: Representação do Índice de Acurácia</strong></p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem000" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura144.png" alt="Alt da imagem fica aqui">
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <p class="TituloFigura"><strong>Fonte: </strong>Fonte da Figura</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Figura 01 - End -->

                                                <ul class="none Texto">
                                                    <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i><strong>“Registros Corretos” - </strong> consiste no número de itens cujo estoque real contado foi igual ao número de itens registrados no Sistema de Controle de Almoxarifado;</li> <br>
                                                    <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i><strong>“Registros Contados” -</strong> consiste no número de itens registrados no Sistema de Controle de Almoxarifado.
                                                    </li>
                                                </ul> <br><br>

                                                <p>O índice de acurácia de 100% é o ideal e demonstra que não houve divergência entre registros contados e registros corretos.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Accordion 04 -->
                                    <!-- Accordion 05 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item05">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse55" aria-expanded="false" aria-controls="flush-collapse55">
                                                <strong>e) Mobilização e treinamento das equipes de contagem:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapse55" class="accordion-collapse collapse" aria-labelledby="Item05" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> É importante o bom dimensionamento do número de pessoas e equipes envolvidas na contagem física e que estejam familiarizadas com a identificação dos itens do estoque.</p>

                                                <p>Devem ser efetuadas reuniões preparatórias em todos os níveis, de forma a proceder os esclarecimentos de todos os procedimentos de contagem e treinamento das equipes.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Accordion 05 -->
                                    <!-- Accordion 06 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item06">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse66" aria-expanded="false" aria-controls="flush-collapse66">
                                                <strong>f) Preparação dos locais de contagens que devem estar identificados especificando</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapse66" class="accordion-collapse collapse" aria-labelledby="Item06" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> qual o tipo de material ali existente. Deve também ser elaborado um leiaute do local de forma a facilitar à sua identificação, bem como o dimensionamento das equipes necessárias.</p>

                                                <p>Os estoques devem ser arrumados com antecedência. Nos dias anteriores ao inventário o responsável pelo armazém deve proceder ao empilhamento adequado de caixas e agrupamento de itens que estejam espalhados, de modo a facilitar a sua identificação e contagem.</p>

                                                <p>Os materiais em processo de recebimento/devolução deverão estar em área específica e isolados dos materiais a serem inventariados (devidamente identificados).</p>
                                                <p>As movimentações de materiais serão suspensas no Sistema de Controle de Estoque durante o período do inventário, a fim de não prejudicar as contagens.</p>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- Accordion 06 -->

                                    <!-- Accordion 08 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item08">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse88" aria-expanded="false" aria-controls="flush-collapse88">
                                                <strong>g) Disponibilização do meio de registro das contagens</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapse88" class="accordion-collapse collapse" aria-labelledby="Item08" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> Salvo poucas exceções, o meio de registro será cartão com partes destacáveis para até três contagens, conforme figura .... Se necessário, os cartões poderão ser impressos em cores distintas para identificar diferentes tipos de estoque. Para os órgão que executam o controle de estoque por intermédio do SIGA, os cartões são substituídos por listagens de computador. As informações básicas além dos espaços reservados para as três contagens são: localização, descrição do material, código,unidade e data do inventário.</p>

                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura143.png" data-bs-toggle="modal" data-bs-target="#Imagem00">
                                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura143.png" alt="Alt da imagem fica aqui">
                                                    </a>
                                                    <p class="FonteFigura"><strong>Figura 127: Representação da Ficha de Inventário</strong></p>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem00" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura143.png" alt="Alt da imagem fica aqui"> <img class="img-fluid wow fadeInLeft" src="imagens/Figura143.png" alt="Alt da imagem fica aqui">

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

                                    <!-- Accordion 08 -->
                                    <!-- Accordion 09 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item09">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse99" aria-expanded="false" aria-controls="flush-collapse99">
                                                <strong>h) Todo item do estoque sujeito ao inventário</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapse99" class="accordion-collapse collapse" aria-labelledby="Item09" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>Será contado necessariamente duas vezes. A primeira contagem é realizada pela 1ª equipe, a qual pode efetuá-la imediatamente após ter fixado no lote o cartão de inventário. Feitas as anotações de contagem na primeira parte do cartão, o executor da contagem o entregará ao responsável pela coordenação do inventário. A segunda equipe analogamente registrará o resultado da sua contagem na segunda parte do cartão, entregando-a ao responsável pela coordenação do inventário. Se a primeira contagem conferir com a segunda contagem, o inventário para este item está correto; no caso de não conferir, faz-se necessário uma terceira contagem por outra equipe, diferente das que contaram anteriormente. A tala identificadora do lote permanecerá afixada ao material como prova de que ele foi contado. Esta poderá ser retirada após o término do inventário.</p>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- Accordion 09 -->
                                </div><br><br>
                                <!-- FIM Accordion -->

                                <!-- SubSubTitulo -->
                                <p class="SubSubTitulo"> Conciliações e Ajustes</p>
                                <hr>

                                <p>O setor ou responsável envolvido no controle de estoque deverá providenciar justificativas para as variações ocorridas entre o estoque contábil e o inventariado. O departamento administrativo e financeiro providenciará a valorização do inventário em um mapa chamado “Controle das Diferenças de Inventário” como se vê na figura 85, será assim, efetuada a somatória dos valores contábil, físico, diferenças “a mais”, diferenças “a menos” e diferença global. Dentro da política da organização, os percentuais de diferenças podem ser aceitos ou não. Como regra geral para os itens classe A (de maior valor), não devem ser aceitos ajustes de inventário, procurando sempre justificar o motivo da diferença.</p>

                                <div class="ImportanteCaixa">
                                    <p class="ImportanteTitulo"> Importante</p>
                                    <div class="ImportanteTexto">
                                        <p>Após aprovado o ajuste do inventário, o Controle de Estoque emitirá a relação autorizando os devidos ajustes.</p>

                                    </div>
                                </div>
                                <br><br>




                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Tabela01.png" data-bs-toggle="modal" data-bs-target="#Tabela01">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Tabela01.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura"><strong>Tabela 01 </strong></p>
                                </div>

                                <!-- Imagem 01 - MODAL -->
                                <div class="modal fade text-center" id="Tabela01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Tabela01.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 01 - End -->
                                <!-- nao alterado end -->



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
                                    <a href="Topico04.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                                    <a href="Topico06.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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