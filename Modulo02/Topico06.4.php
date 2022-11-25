<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico06.4';
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
                        <p class="SubTitulo">Emitir Relatórios</p>
                        <hr>

                        <br>

                        <p>Para emissão dos relatórios do Siga/Sgbm no módulo de estoque o perfil "Almoxarife" deverá acionar na barra de menu o comando: <strong>RELATÓRIOS >> ALMOXARIFADO</strong>: </p>

                        <br><!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura337.png" data-bs-toggle="modal" data-bs-target="#Imagem337">
                                <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura337.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <!-- Imagem 337 - MODAL -->
                        <div class="modal fade text-center" id="Imagem337" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura337.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Figura 337</strong> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 337 - End --><br>
                        <p>Os relatórios disponíveis são os seguintes:</p>
                        <p><strong>A) 10 (Dez) Itens de Maior Consumo</strong></p>
                        <hr>
                        <p><strong>Objetivo:</strong> Demonstrar os dez itens de materiais mais consumidos em determinado período, classificados por quantidade ou valor. </p>
                        <p><strong>Periodicidade:</strong> Eventual. <br><strong>Parâmetros de Emissão</strong></p>
                        <ol>

                            <li class="wow fadeInRight" data-wow-delay="0.3s">Selecionar o ano ao qual se refere o relatório.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">Selecionar o mês ao qual se refere o relatório.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">Escolher qual o critério de classificação se consumo referente a Valor ou se consumo referente a Quantidade.</li>
                            <li class="wow fadeInRight" data-wow-delay="1.3s">Acionar o botão "Gerar Relatório" para emissão do relatório em formato PDF.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura338.png" data-bs-toggle="modal" data-bs-target="#Imagem338">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura338.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 338 - MODAL -->
                            <div class="modal fade text-center" id="Imagem338" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura338.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 338</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 338 - End --><br>
                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura339.png" data-bs-toggle="modal" data-bs-target="#Imagem339">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura339.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 339 - MODAL -->
                            <div class="modal fade text-center" id="Imagem339" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura339.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 339</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 339 - End --><br>
                        </ol>
                        <p><strong>B) Consumo Geral do Período</strong></p>
                        <hr>
                        <p><strong>Objetivo: </strong>Demonstrar o histórico de consumo por períodos pré-determinados.</p>
                        <p><strong>Periodicidade:</strong> Eventual <br> <strong>Parâmetros de emissão:</strong></p>
                        <ol>

                            <li class="wow fadeInRight" data-wow-delay="0.3s">No campo "Data Inicial", informe a data de início do período a ser incluída no relatório.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">No campo "Data Limite", informe a data que delimita o período a ser incluído no relatório.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">Abaixo das duas datas que compreendem o período, é habilitado o botão "Adicionar", que acionado irá formar abaixo uma grade com a série de períodos para apuração do comportamento do consumo.</li>
                            <li class="wow fadeInRight" data-wow-delay="1.3s">No campo “Tipo de Material”, selecione a opção "Consumo".</li>
                            <li class="wow fadeInRight" data-wow-delay="1.6s">A cada período adicionado, a grade irá aumentar o número de linhas.</li>
                            <li class="wow fadeInRight" data-wow-delay="1.9s">Ao final de cada linha, terá um ícone em formato de "X", que se acionado excluirá o período em questão da série.</li>
                            <li class="wow fadeInRight" data-wow-delay="2.3s">Acione o botão "Gerar Relatório" para emissão do relatório em formato PDF.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura340.png" data-bs-toggle="modal" data-bs-target="#Imagem340">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura340.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 340 - MODAL -->
                            <div class="modal fade text-center" id="Imagem340" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura340.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 340</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 340 - End -->
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura341.png" data-bs-toggle="modal" data-bs-target="#Imagem341">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura341.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 341 - MODAL -->
                            <div class="modal fade text-center" id="Imagem341" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura341.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 341</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem341 - End --><br>
                        </ol>
                        <br>
                        <p><strong>C) Consumo Por Setor</strong></p>
                        <hr>
                        <p><strong>Objetivo:</strong> Demonstrar o consumo de materiais organizado por Setor (Centro de Custo) e por classe de materiais.</p>
                        <p><strong>Periodicidade:</strong> Eventual </p>
                        <p><strong>Parâmetros de emissão:</strong> </p>
                        <ol>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">No campo "Tipo de Material", selecione a opção "Consumo".</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">No campo "Setor", selecione qual a abrangência a ser dada no relatório, se deve considerar todos os setores ou um setor específico. Caso seja apenas um setor, o SIGA/SGBM apresentará uma caixa de seleção para que seja escolhido o setor de referência para emissão do relatório, caso contrário, não informe esse campo, e o relatório será gerado para todos os setores.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">No campo "Ano", informe o ano de movimentação que se deseja apurar.</li>
                            <li class="wow fadeInRight" data-wow-delay="1.3s">No campo "Mês", informe o mês de movimentação que se deseja apurar.</li>
                            <li class="wow fadeInRight" data-wow-delay="1.6s">Acione o botão "Gerar Relatório" para emissão do relatório em formato PDF.</li>
                            <br>
                            <!-- Fique Atento -->
                            <div class="FiqueAtentoCaixa">
                                <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                <div class="FiqueAtentoTexto">
                                    <p>Caso a emissão do relatório seja para um item específico, na "grade de filtro", informe o item pelo código ou palavra-chave.</p>
                                </div>
                            </div>
                            <br>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura342.png" data-bs-toggle="modal" data-bs-target="#Imagem342">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura342.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 342 - MODAL -->
                            <div class="modal fade text-center" id="Imagem342" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura342.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 342</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 342- End --><br>
                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura343.png" data-bs-toggle="modal" data-bs-target="#Imagem343">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura343.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 343 - MODAL -->
                            <div class="modal fade text-center" id="Imagem343" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura343.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 343</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 343- End --><br>
                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura344.png" data-bs-toggle="modal" data-bs-target="#Imagem344">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura344.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 344 - MODAL -->
                            <div class="modal fade text-center" id="Imagem344" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura344.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 344</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 344- End -->

                        </ol>
                        <br>
                        <p><strong>D) Consumo Por Grupo</strong></p>
                        <hr>
                        <p><strong>Objetivo: </strong> Demonstrar o consumo mensal dos itens de Material de Consumo organizados por Grupo de Material, conforme o Catálogo de Bens, Materiais e Serviços.</p>
                        <p><strong>Periodicidade:</strong> Eventual <br><strong>Parâmetros de emissão:</strong></p>

                        <ol>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">No campo "Tipo de Material" informe a opção "CONSUMO".</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">No campo "Ano" informe o o Ano de referência para a emissão do relatório.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">No campo "MÊS" informe o mês de referência para a emissão do relatório.</li>
                            <li class="wow fadeInRight" data-wow-delay="1.3s">Acione o botão "Gerar Relatório" para emissão do relatório em formato PDF.</li>

                            <br><br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura345.png" data-bs-toggle="modal" data-bs-target="#Imagem345">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura345.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 345 - MODAL -->
                            <div class="modal fade text-center" id="Imagem345" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura345.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 345</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 345 - End --><br>

                            <br><br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura346.png" data-bs-toggle="modal" data-bs-target="#Imagem346">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura346.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 346 - MODAL -->
                            <div class="modal fade text-center" id="Imagem346" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura346.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 346</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 346 - End -->
                        </ol>
                        <br>
                        <p><strong>E) Entradas no Período</strong></p>
                        <hr>
                        <p><strong>Objetivo: </strong> Demonstrar as entradas de materiais em um determinado período classificada por Nota Fiscal, Devolução, Doação ou Todas as Entradas.</p>
                        <p><strong> Periodicidade:</strong> Eventual <br> <strong>Parâmetros de emissão:</strong></p>
                        <ol>

                            <li class="wow fadeInRight" data-wow-delay="0.3s">No campo "Período de Movimentação" informe a Data Inicial e a Data Final que delimita o período de referência do relatório.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s"> No campo "Tipo de Entrada" selecione qual a modalidade de entrada que poderão ser:</li>
                            <ul>
                                <li class="wow fadeInRight" data-wow-delay="0.9s"> <strong>Nota Fiscal:</strong> Quando se tratar de entrada por intermédio de aquisição.</li>
                                <li class="wow fadeInRight" data-wow-delay="1.3s"> <strong>Devolução:</strong> Quando se tratar de entrada de material que não foi consumido pelo requisitante e está sendo devolvido ao almoxarifado.</li>

                                <li class="wow fadeInRight" data-wow-delay="1.6s"> <strong>Doação:</strong> Quando se tratar de doações não acompanhadas de Nota Fiscal ou Transferências de outros órgãos da administração pública, nesses casos o documento de suporte é o Termo de Doação ou Transferência.</li>

                                <li class="wow fadeInRight" data-wow-delay="1.9s"> <strong>Todas:</strong> Nesse caso o relatório classificará todas as modalidades de movimentação de entrada.</li>
                            </ul>
                            <li class="wow fadeInRight" data-wow-delay="2.3s">No campo "Tipo de Material", selecione a opção referente ao tipo de Material a que se refere a entrada, de CONSUMO ou PERMANENTE.</li>
                            <li class="wow fadeInRight" data-wow-delay="2.6s">No campo "Filtrar por um Fornecedor Apenas", informe a "Razão Social" ou "CNPJ" do fornecedor. É recomendável que seja informado o CNPJ porque a busca será específica por se tratar de uma pesquisa numérica, no caso de Razão Social será uma busca alfabética e poderá ser usada qualquer palavra que conste na composição da Razão Social do Fornecedor e poderá ser demonstrado um fornecedor que não seja o desejado.</li>
                            <li class="wow fadeInRight" data-wow-delay="2.9s">Acione o botão "Adicionar" para incluir o fornecedor nos parâmetros do relatório</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura347.png" data-bs-toggle="modal" data-bs-target="#Imagem347">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura347.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 347 - MODAL -->
                            <div class="modal fade text-center" id="Imagem347" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura347.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 347</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 347 - End -->
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Uma vez acionado o botão "Adicionar", o SIGA/SGBM demonstra a "Razão Social" e o "Nome Fantasia" do fornecedor para que seja confirmado. Vale ressaltar que se não for o fornecedor desejado basta acionar o botão "Alterar".</li>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Acione o botão "Gerar Relatório" para impressão do relatório em formato PDF.</li>
                            <br>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura348.png" data-bs-toggle="modal" data-bs-target="#Imagem348">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura348.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 348 - MODAL -->
                            <div class="modal fade text-center" id="Imagem348" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura348.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 348</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- Imagem 348 - End -->
                            <br>
                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura349.png" data-bs-toggle="modal" data-bs-target="#Imagem349">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura349.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 349 - MODAL -->
                            <div class="modal fade text-center" id="Imagem349" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura349.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 349</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 349 - End --><br>
                        </ol>
                        <p><strong>F) Entrada VS Saída no Período</strong></p>
                        <hr>
                        <p><strong>Objetivo: </strong>Demonstrar analítica e sinteticamente (totalizando no final por tipo de operação) a movimentação física e financeira dos itens de estoque possibilitando a conciliação mensal e acerto contábil.</p>
                        <p><strong>Periodicidade: </strong> Eventual</p>
                        <p><strong>Parâmetros de emissão:</strong></p>
                        <ol>

                            <li class="wow fadeInRight" data-wow-delay="0.3s"> Selecione o ano de referência para a emissão do relatório.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s"> Selecione o mês de referência para a emissão do relatório</li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s"> Selecione a modalidade de apresentação do relatório se deverão ser listados todos os itens em sequência alfabética de descrição ou se deverão ser listados agrupados por categoria segundo a classificação do Catálogo de Bens Materiais e Serviços.</li>
                            <li class="wow fadeInRight" data-wow-delay="1.3s"> Acione o botão "Gerar Relatório" para emissão do relatório em formato PDF.</li>


                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura350.png" data-bs-toggle="modal" data-bs-target="#Imagem350">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura350.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 350 - MODAL -->
                            <div class="modal fade text-center" id="Imagem350" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 350</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 350 - End -->

                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura351.png" data-bs-toggle="modal" data-bs-target="#Imagem351">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura351.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 351 - MODAL -->
                            <div class="modal fade text-center" id="Imagem351" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura351.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 351</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 351 - End --><br>
                        </ol>
                        <p><strong>G) Itens Parados no Período</strong></p>
                        <hr>
                        <p><strong>Objetivo: </strong>Demonstrar os itens de estoque que não sofreram em determinado período nenhum tipo de movimentação.</p>
                        <p><strong>Periodicidade: </strong> Eventual</p>
                        <p><strong>Parâmetros de emissão:</strong></p>
                        <ol>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s"> No campo "Período Movimentação" inforne a "Data Inicial" e a "Data Final" que compôs o referido período.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">Selecione o tipo de movimento que não ocorreu durante o período de análise do relatório se somente o movimento de "Entrada" ou somente o movimento de "Saída" ou se não houve nenhuma movimentação.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s"> Acione o botão "Gerar Relatório" para emissão do relatório em formato PDF.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura352.png" data-bs-toggle="modal" data-bs-target="#Imagem352">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura352.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 352 - MODAL -->
                            <div class="modal fade text-center" id="Imagem352" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura352.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 352</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 352 - End -->
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura353.png" data-bs-toggle="modal" data-bs-target="#Imagem353">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura353.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 353 - MODAL -->
                            <div class="modal fade text-center" id="Imagem353" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura353.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 353</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 353 - End --> <br>
                        </ol>
                        <p><strong>H) Itens Cadastrados Por Tipo</strong></p>
                        <hr>
                        <p><strong>Objetivo: </strong> Demonstrar os itens do Catálogo de Bens Materiais e Serviços cadastrados no SIGA/SGBM visando facilitar o processo de migração de dados.</p>
                        <p><strong>Periodicidade: </strong> Eventual</p>
                        <p><strong>Parâmetros de emissão:</strong></p>
                        <ol>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s"> No campo "Tipo de Material" selecione qual a opção de item a ser relacionado se itens de patrimônio ou itens de material de consumo.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">No campo "Ordenado por" selecione se a ordem de seqüencial do relatório será por ordem de código ou por ordem alfabética.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s"> Acione o botão "Gerar Relatório" para emissão do relatório em formato PDF.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura354.png" data-bs-toggle="modal" data-bs-target="#Imagem354">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura354.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 354 - MODAL -->
                            <div class="modal fade text-center" id="Imagem354" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura354.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 354</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 354 - End -->
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura355.png" data-bs-toggle="modal" data-bs-target="#Imagem355">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura355.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 355 - MODAL -->
                            <div class="modal fade text-center" id="Imagem355" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura355.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 355</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 355 - End --><br>
                        </ol>
                        <p><strong>I) Posição de Estoque</strong></p>
                        <hr>
                        <p><strong>Objetivo: </strong> Demonstrar os itens de estoque que estão com saldo maior que zero, igual a zero ou o saldo do estoque em determinado período após o fechamento mensal.</p>
                        <p><strong>Periodicidade: </strong> Eventual</p>
                        <p><strong>Parâmetros de emissão:</strong></p>
                        <ol>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s"> No campo "Tipo de Material" selecione a opção correspondente ao tipo de material em estoque se "CONSUMO" ou "PATRIMÔNIO".</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">No campo "Posição Estoque" selecione a opção correspondente à posição de estoque que se deseja demonstrar no relatório se "Material em Estoque", "Material sem Estoque" ou "Baseado em Data". Nesta última opção o Siga/Sgbm acrescentará dois novos campos a serem informados "Ano" e "MÊS" </li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s"> Acione o botão "Gerar Relatório" para emissão do relatório em formato PDF.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura356.png" data-bs-toggle="modal" data-bs-target="#Imagem356">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura356.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 356 - MODAL -->
                            <div class="modal fade text-center" id="Imagem356" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura356.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 356</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 356 - End -->
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura357.png" data-bs-toggle="modal" data-bs-target="#Imagem357">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura357.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 357 - MODAL -->
                            <div class="modal fade text-center" id="Imagem357" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura357.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 357</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 357 - End --><br>
                        </ol>
                        <br>
                        <p><strong>J) Razâo da Movimentação de Estoque</strong></p>
                        <hr>
                        <p><strong>Objetivo: </strong> Demonstrar analiticamente, por movimento de estoque, em quantidade ou em custo, o comportamento dos saldos de estoque.</p>
                        <p><strong>Periodicidade: </strong> Eventual</p>
                        <p><strong>Parâmetros de emissão:</strong></p>
                        <ol>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">No campo "Período de Movimentação" informe a data inicial e a data final que delimita o período de referência do relatório.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s"> No campo "Tipo de Material" selecione a opção de material entre CONSUMO e PATRIMÔNIO.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s"> No campo "Emissão" selecione a forma de apresentação da movimentação se "POR QUANTIDADE" ou "POR CUSTO".</li>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Na grade "Filtrar por um material apenas" selecione a opção de identificação do material objeto do relatório. Nos casos de não preenchimento desses campos será emitido o relatório para todos os itens de estoque.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s"> Na mesma grade "Filtrar por um material apenas" informe na caixa de texto o código ou a palavra chave usada para pesquisa do material em seguida acionar o botão "Pesquisar".</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura358.png" data-bs-toggle="modal" data-bs-target="#Imagem358">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura358.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 358 - MODAL -->
                            <div class="modal fade text-center" id="Imagem358" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura358.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 358</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 358 - End -->
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Acionado o botão "Pesquisar", na grade "Filtrar por Um Material Apenas", o SIGA/SGBM demonstrará uma janela "pop-up" com as informações de detalhe do item e para colocá-lo como parâmetro do relatório, basta clicar no botão "Adicionar"..</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura359.png" data-bs-toggle="modal" data-bs-target="#Imagem359">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura359.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 359 - MODAL -->
                            <div class="modal fade text-center" id="Imagem359" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura359.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 359</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 359 - End -->
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Acionado o botão "Adicionar", o SIGA/SGBM apresentará uma grade descrevendo o material objeto do relatório.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Acione o botão "Gerar Relatório" para a emissão do relatório segundo os parâmetros informados.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura360.png" data-bs-toggle="modal" data-bs-target="#Imagem360">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura360.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 360 - MODAL -->
                            <div class="modal fade text-center" id="Imagem360" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura360.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 360</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 360 - End -->
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura361.png" data-bs-toggle="modal" data-bs-target="#Imagem361">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura361.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 361 - MODAL -->
                            <div class="modal fade text-center" id="Imagem361" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura361.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 361</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 361 - End -->
                            <br>
                        </ol>









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
                <a href="Topico06.3.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Referencias.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>