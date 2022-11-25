<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico06';
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

                        <h2 class="Titulo"> Arranjos Finais de Estoque no SIGA/SGBM</h2>
                        <hr>

                        <p><strong>Objetivo:</strong> Compreender as funcionalidades que demonstram a organização final do controle de estoque no que se refere à consulta de movimentos de estoque, emissões de relatórios, fechamento dos períodos mensais e a realização de inventário. </p>
                        <br>
                        <h2 class="SubTitulo"> Consultar Operações e Movimentações de Estoque</h2>
                        <hr>

                        <p>Para consultar algumas operações e movimentações de materiais de consumo, no SIGA/SGBM, o perfil "Almoxarife" deverá acionar na barra de menu o comando: <strong>CONSULTAS >> ALMOXARIFADO</strong>. As movimentações são as seguintes:</p>
                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura229.png" data-bs-toggle="modal" data-bs-target="#Imagem229">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura229.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <!-- Imagem 229 - MODAL -->
                        <div class="modal fade text-center" id="Imagem229" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura229.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Figura 229</strong> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 229 - End -->
                        <br>
                        <p><strong>A) Consultar Baixas</strong></p>
                        <p>Para consultar as baixas, devem ser acionados, na barra de menu do SIGA/SGBM, os comandos: <strong>CONSULTAS >> ALMOXARIFADO E BAIXAS</strong> </p><br><br>

                        <ol>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura230.png" data-bs-toggle="modal" data-bs-target="#Imagem230">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura230.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 230 - MODAL -->
                            <div class="modal fade text-center" id="Imagem230" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura230.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 230</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 230 - End -->
                            <br>

                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Ao acionar a barra de menu, o SIGA/SGBM apresentará a janela de consultas de baixas. No campo "Período de Movimentação", informe a data inicial do período a que se refere a consulta.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Também no campo "Período de Movimentação", informe a data final do período a que se refere a consulta.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"> Acione o botão "Pesquisar" para que a consulta seja apresentada.</li>
                            <br>
                            <br><br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura231.png" data-bs-toggle="modal" data-bs-target="#Imagem231">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura231.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 231 - MODAL -->
                            <div class="modal fade text-center" id="Imagem231" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura231.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 231</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 231 - End -->
                            <br>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o botão "Pesquisar", o SIGA/SGBM apresenta uma grade com os seguintes dados: Data da Baixa, Justificativa da Baixa e Ação. Na coluna "Ação", é apresentado dois ícones: o primeiro em formato de "Lupa", permite visualizar detalhes da Baixa.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">No segundo ícone da coluna "Ação" em formato de “Folha”, demonstra o relatório com detalhamento do material que foi baixado.</li>
                            <br><br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura232.png" data-bs-toggle="modal" data-bs-target="#Imagem232">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura232.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>
                            <!-- Imagem 232 - MODAL -->
                            <div class="modal fade text-center" id="Imagem232" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura232.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 232</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 232 - End -->
                            <br>
                            <p>Detalhe do material baixado.</p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura233.png" data-bs-toggle="modal" data-bs-target="#Imagem233">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura233.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 233 - MODAL -->
                            <div class="modal fade text-center" id="Imagem233" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura233.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 233</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 233 - End -->
                            <br>
                            <p>Relatório de baixa.</p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura234.png" data-bs-toggle="modal" data-bs-target="#Imagem234">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura234.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 234 - MODAL -->
                            <div class="modal fade text-center" id="Imagem234" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura234.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 234</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 234 - End -->
                        </ol>
                        <ol>
                            <br><br>
                            <p><strong>B) Consultar Devoluções</strong></p>
                            <p>Para consultar as baixas, devem ser acionados, na barra de menu do SIGA/SGBM, os comandos: <strong>CONSULTAS >> ALMOXARIFADO E DEVOLUÇÕES</strong></p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura235.png" data-bs-toggle="modal" data-bs-target="#Imagem235">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura235.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 235 - MODAL -->
                            <div class="modal fade text-center" id="Imagem235" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura235.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 235</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 235 - End -->
                            <br>

                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Ao acionar a barra de menu, o SIGA/SGBM apresentará a janela de consultas de devoluções. No campo "Período de Movimentação", informe a data inicial do período a que se refere a consulta.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Também no campo "Período de Movimentação", informe a data final do período a que se refere a consulta.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"> No campo "Setor", selecione qual o setor que se deseja consultar as devoluções.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"> Acione o botão "Pesquisar" para que a consulta seja apresentada.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura236.png" data-bs-toggle="modal" data-bs-target="#Imagem236">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura236.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 236 - MODAL -->
                            <div class="modal fade text-center" id="Imagem236" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura236.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 236</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 236 - End -->
                            <br>
                            <p>Acionado o botão "Pesquisar", o SIGA/SGBM apresenta uma grade com os seguintes dados: Nº da Devolução, Data da Devolução, Setor de Origem e Ação. </p>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Na coluna "Ação", é apresentado dois ícones: o primeiro em formato de "Lupa", permite visualizar detalhes da devolução.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">No segundo ícone da coluna "Ação" em formato de “Folha”, demonstra o relatório com detalhamento do material que foi devolvido.</li>

                            <br><br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura237.png" data-bs-toggle="modal" data-bs-target="#Imagem237">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura237.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>
                            <!-- Imagem 237 - MODAL -->
                            <div class="modal fade text-center" id="Imagem237" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura237.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 237</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 237 - End -->
                            <br>
                            <p>Detalhe do Material Devolvido.</p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura238.png" data-bs-toggle="modal" data-bs-target="#Imagem238">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura238.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 238 - MODAL -->
                            <div class="modal fade text-center" id="Imagem238" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura238.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 238</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 238 - End -->
                            <br>
                            <p>Relatório de Devoluções.</p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura239.png" data-bs-toggle="modal" data-bs-target="#Imagem239">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura239.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 239 - MODAL -->
                            <div class="modal fade text-center" id="Imagem239" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura239.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 239</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 239 - End -->


                        </ol>
                        <br>
                        <ol>
                            <br><br>
                            <p><strong>C) Consultar Doações</strong></p>
                            <p>Para consultar as doações, acione, na barra de menu, os comandos: <strong>CONSULTAS >> ALMOXARIFADO E DOAÇÕES</strong> </p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura240.png" data-bs-toggle="modal" data-bs-target="#Imagem240">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura240.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 240 - MODAL -->
                            <div class="modal fade text-center" id="Imagem240" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura240.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 240</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 240 - End -->
                            <br>

                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Ao acionar a barra de menu, o SIGA/SGBM apresentará a janela de consultas de doações. No campo "Período de Movimentação", informe a data inicial do período a que se refere à consulta.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Também no campo "Período de Movimentação", informe a data final do período a que se refere à consulta.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"> Acione o botão "Pesquisar" para que a consulta seja apresentada.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura241.png" data-bs-toggle="modal" data-bs-target="#Imagem241">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura241.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 241 - MODAL -->
                            <div class="modal fade text-center" id="Imagem241" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura241.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 241</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 241 - End -->
                            <br>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o botão "Pesquisar", o SIGA/SGBM apresenta uma grade com os seguintes dados: Origem ou Destino da Doação, Data da Doação e Movimento, que caracteriza a doação e ação. Na coluna "Ação" da grade, é apresentado um ícone no formato de "Lupa" que, ao ser acionado, permite visualizar o detalhe da doação. </li>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Também na última coluna da grade, é apresentado outro ícone no formato de "Página" que, quando for acionado, gera um relatório de detalhamento da doação.</li>

                            <br><br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura242.png" data-bs-toggle="modal" data-bs-target="#Imagem242">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura242.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>
                            <!-- Imagem 242 - MODAL -->
                            <div class="modal fade text-center" id="Imagem242" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura242.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 242</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 242 - End -->
                            <br>
                            <p>Detalhe do Material Doado.</p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura243.png" data-bs-toggle="modal" data-bs-target="#Imagem243">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura243.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 243 - MODAL -->
                            <div class="modal fade text-center" id="Imagem243" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura243.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 243</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 243 - End -->
                            <br>
                            <p>Relatório de Doações.</p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura244.png" data-bs-toggle="modal" data-bs-target="#Imagem244">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura244.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 244 - MODAL -->
                            <div class="modal fade text-center" id="Imagem244" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura244.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 244</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 244 - End -->


                        </ol>
                        <br>
                        <ol>
                            <br><br>
                            <p><strong>D) Consultar Entradas</strong></p>
                            <p>Para consultar as entradas acionar na barra de menu o comando: <strong>CONSULTAS >> ALMOXARIFADO E ENTRADAS</strong>: </p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura245.png" data-bs-toggle="modal" data-bs-target="#Imagem245">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura245.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 245 - MODAL -->
                            <div class="modal fade text-center" id="Imagem245" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura245.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 245</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 245 - End -->
                            <br>

                            <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "Período Movimentação", informe a data inicial que delimita o período de tempo que será objeto da consulta.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Também no campo "Período Movimentação", informe a data final que delimita o período de tempo que será objeto da consulta.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Status da Nota", informe qual o status que se deseja consultar, se a nota está finalizada ou apenas salva.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s">No campo "Nota Fiscal", informe o número da Nota Fiscal, caso queira efetuar consulta de uma Nota Fiscal específica.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s">No campo "Número de Série", informe qual a série da Nota Fiscal que se deseja efetuar a consulta.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.9s">Acione o botão "Pesquisar" para finalizar a consulta.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura246.png" data-bs-toggle="modal" data-bs-target="#Imagem246">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura246.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 246 - MODAL -->
                            <div class="modal fade text-center" id="Imagem246" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura246.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 246</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 246 - End -->
                            <br>

                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Uma vez acionado o botão "Pesquisar", o SIGA/SGBM apresentará uma grade de consulta considerando o período e parâmetros informados, tal grade será composta pelos seguintes dados: Data da entrada, Razão Social do Fornecedor, Número da Nota Fiscal, Série da Nota fiscal, Status do Cancelamento e Ação.
                                <br>Na coluna correspondente "Ação", se formará um ícone no formato de “Lupa” que, ao ser acionado, apresentará o detalhe da entrada.
                            </li>

                            <br><br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura247.png" data-bs-toggle="modal" data-bs-target="#Imagem247">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura247.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>
                            <!-- Imagem 247 - MODAL -->
                            <div class="modal fade text-center" id="Imagem247" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura247.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 247</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 247 - End -->
                            <br>
                            <p>Detalhe da Entrada</p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura248.png" data-bs-toggle="modal" data-bs-target="#Imagem248">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura248.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 248 - MODAL -->
                            <div class="modal fade text-center" id="Imagem248" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura248.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 248</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 248 - End -->
                            <br>


                        </ol>
                        <br>
                        <ol>
                            <br><br>
                            <p><strong>E) Consultar Fornecedor</strong></p>
                            <p>Para consultar os fornecedores acionar na barra de menu o comando: <strong>CONSULTAS >> ALMOXARIFADO >> FORNECEDORES</strong>: </p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura249.png" data-bs-toggle="modal" data-bs-target="#Imagem249">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura249.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 249 - MODAL -->
                            <div class="modal fade text-center" id="Imagem249" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura249.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 249</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 249 - End -->
                            <br>

                            <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "Razão Social", descreva a razão social do fornecedor caso não tenha o nº do CNPJ, ou opte pela consulta por intermédio do nome do fornecedor.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "CNPJ", informe o número do CNPJ do fornecedor, nesse caso não é necessário preencher o campo "Razão Social".</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">Acione o botão "Pesquisar" para finalizar a consulta.</li>

                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura250.png" data-bs-toggle="modal" data-bs-target="#Imagem250">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura250.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 250 - MODAL -->
                            <div class="modal fade text-center" id="Imagem250" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura250.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 250</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 250 - End -->
                            <br>
                            <p>Ao ser acionado o botão "Pesquisar", o SIGA/SGBM apresentará uma grade contendo os seguintes dados: CNPJ, Razão Social, Nome Fantasia e Ações.</p>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Na coluna "Ações", será apresentado um ícone em formato de "Lupa" que, ao ser acionado, apresentará o detalhamento dos dados do fornecedor.</li>

                            <br><br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura251.png" data-bs-toggle="modal" data-bs-target="#Imagem251">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura251.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>
                            <!-- Imagem 251 - MODAL -->
                            <div class="modal fade text-center" id="Imagem251" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura251.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 251</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 251 - End -->
                            <br>
                            <p>Detalhamento dos Dados do Fornecedor</p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura252.png" data-bs-toggle="modal" data-bs-target="#Imagem252">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura252.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 252 - MODAL -->
                            <div class="modal fade text-center" id="Imagem252" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura252.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 252</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 252 - End -->
                            <br>

                        </ol>
                        <br>
                        <ol>
                            <br><br>
                            <p><strong>F) Consultar Materiais Cadastrados</strong></p>
                            <p>Para consultar os materiais cadastrados acionar na barra de menu o comando: <strong>CONSULTAS >> ALMOXARIFADO >> MATERIAIS CADASTRADOS</strong>: </strong> </p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura253.png" data-bs-toggle="modal" data-bs-target="#Imagem253">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura253.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 253 - MODAL -->
                            <div class="modal fade text-center" id="Imagem253" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura253.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 253</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 253 - End -->
                            <br>
                            <p>Acionado o referido comando o SIGA/SGBM oferece diversos filtros para a consulta de materiais cadastrados, tais parâmetros estão descritos abaixo:</p>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "Código", informe o código do material caso a consulta seja individualizada, nesse caso a consulta apresentará um único material.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Descrição", descreva a palavra ou palavras que fazem parte da especificação do material, nesse caso a consulta apresentará todos os materiais que possuem na sua especificação a descrição preenchida no campo.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Grupo", selecione o grupo do Catálogo de Bens Materiais e Serviços que se deseja consultar, nesse caso poderá consultar todos os itens do grupo ou filtrar mais ainda a consulta combinando com as classes pertencentes a esse grupo.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Classe", selecione a classe correspondente ao Grupo do Catálogo de Bens Materiais e Serviços selecionado no campo anterior. Esse campo só será preenchido em combinação com o campo "03 - Grupo".</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Tipo de Material", selecione qual o tipo de material, se é de "Consumo" ou "Patrimônio".</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Status", selecione a condição do material, se está "Ativo" ou "Inativo".</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">Após o preenchimento de um ou mais parâmetros para filtrar a consulta, acione o botão "Pesquisar".</li>

                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura254.png" data-bs-toggle="modal" data-bs-target="#Imagem254">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura254.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 254 - MODAL -->
                            <div class="modal fade text-center" id="Imagem254" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura254.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 254</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 254 - End -->
                            <br>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Ao ser acionado o botão "Pesquisar", o SIGA/SGBM apresentará uma grade "Materiais encontrados" com os seguintes dados do material: Código, Descrição, Localização, Tipo de Material, Unidade de Consumo, Quantidade, Limite Mínimo, Fator Multiplicador, Status e Ações.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">No rodapé esquerdo da grade, o SIGA/SGBM apresenta a quantidade de itens demonstrados e a quantidade de itens encontrados.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">No rodapé direito da grade, o SIGA/SGBM apresenta botões de navegação que permitem paginar a demonstração dos itens encontrados.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s">Na coluna "Ações" da grade, o SIGA/SGBM apresenta um ícone em formato de "Lupa” que, quando acionado, permite demonstrar o detalhamento dos dados do material.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s">Na coluna "Ações" da grade, o SIGA/SGBM apresenta um ícone em formato de "Lápis" que, quando acionado, permite editar alguns dados do material.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.9s">Na coluna "Ações" da grade, o SIGA/SGBM apresenta um ícone em formato de "Botão" que, quando acionado, permite desativar o item.</li>

                            <br><br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura255.png" data-bs-toggle="modal" data-bs-target="#Imagem255">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura255.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>
                            <!-- Imagem 255 - MODAL -->
                            <div class="modal fade text-center" id="Imagem255" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura255.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 255</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 255 - End -->
                            <br>
                            <p>Detalhamento dos Dados do Material</p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura256.png" data-bs-toggle="modal" data-bs-target="#Imagem256">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura256.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 256 - MODAL -->
                            <div class="modal fade text-center" id="Imagem256" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura256.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 256</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 256 - End -->
                            <br>
                            <p>Tela de Ediçâo de Dados do Material</p>
                            <br>
                            <br><br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura257.png" data-bs-toggle="modal" data-bs-target="#Imagem257">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura257.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>
                            <!-- Imagem 257 - MODAL -->
                            <div class="modal fade text-center" id="Imagem257" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura257.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 257</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 257 - End -->
                            <br>
                            <p>Tela de Inativação do Material</p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura258.png" data-bs-toggle="modal" data-bs-target="#Imagem258">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura258.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 258 - MODAL -->
                            <div class="modal fade text-center" id="Imagem258" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura258.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 258</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 258 - End -->
                            <br>


                        </ol>
                        <ol>
                            <br><br>
                            <p><strong>G) Consultar Requisições de Materiais</strong></p>
                            <p>Para consultar as "Requisições" acionar na barra de menu o comando: <strong>CONSULTAS >> ALMOXARIFADO >> REQUISIÇÕES</strong>: </p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura259.png" data-bs-toggle="modal" data-bs-target="#Imagem259">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura259.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 259 - MODAL -->
                            <div class="modal fade text-center" id="Imagem259" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura259.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 259</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 259 - End -->
                            <br>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "Período de Movimentação", informe a data inicial que delimita o período que se deseja consultar referente a emissão da Requisição.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Período de Movimentação", informe a data final que delimita o período que se deseja consultar referente a emissão da Requisição.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Status", informe a condição (atendida, cancelada, solicitada, etc.) da Requisição que se deseja consultar.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Setor", informe o setor (centro de custo) de onde se originou a Requisição.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">Acione o botão "Pesquisar" para concluir a pesquisa.</li>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura260.png" data-bs-toggle="modal" data-bs-target="#Imagem260">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura260.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 260 - MODAL -->
                            <div class="modal fade text-center" id="Imagem260" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura260.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 260</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 260 - End -->
                            
                            <br>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o botão "Pesquisar", o SIGA/SGBM apresenta uma grade com as requisições que atendem aos parâmetros informados nos campos anteriores (de 01 a 04). A grade apresenta os seguintes dados: Nº da Requisição, Nome do Requisitante, Departamento do Requisitante, Data da Requisição, Status da Requisição e Ações.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Na coluna "Ações" da grade, o SIGA/SGBM apresenta um ícone em formato de "Lupa" que, ao ser acionado, permite visualizar a Requisição.</li>

                            <br><br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura261.png" data-bs-toggle="modal" data-bs-target="#Imagem261">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura261.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>
                            <!-- Imagem 261 - MODAL -->
                            <div class="modal fade text-center" id="Imagem261" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura261.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 261</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 261 - End -->
                            <br>
                            <p>Detalhamento dos Dados da Requisição</p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura262.png" data-bs-toggle="modal" data-bs-target="#Imagem262">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura262.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 262 - MODAL -->
                            <div class="modal fade text-center" id="Imagem262" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura262.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 262</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 262 - End -->
                            <br>
                            <p>Relatório de Nota de Recebimento</p>
                            <br>
                            <br><br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura263.png" data-bs-toggle="modal" data-bs-target="#Imagem263">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura263.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>
                            <!-- Imagem 263 - MODAL -->
                            <div class="modal fade text-center" id="Imagem263" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura263.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 263</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 263 - End -->
                            <br>


                        </ol>
                        <ol>
                            <br><br>
                            <p><strong>H) Consultar Solicitações de catálogo</strong></p>
                            <p>Para consultar as "Solicitações ao Catálogo" acionar na barra de menu o comando: .<strong>CONSULTAS >> ALMOXARIFADO >> SOLICITAÇÕES AO CATÁLOGO</strong>: </p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura264.png" data-bs-toggle="modal" data-bs-target="#Imagem264">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura264.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 264 - MODAL -->
                            <div class="modal fade text-center" id="Imagem264" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura264.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 264</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 264 - End -->
                            <br>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "Período de Movimentação", informe a data inicial que delimita o período que se deseja consultar referente à solicitação ao Catálogo.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Período de Movimentação", informe a data final que delimita o período que se deseja consultar referente à solicitação ao Catálogo.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Status", informe a condição (atendida, não atendida e pendente) da solicitação ao Catálogo que se deseja consultar.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">Acione o botão "Pesquisar" para concluir a pesquisa.</li>

                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura265.png" data-bs-toggle="modal" data-bs-target="#Imagem265">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura265.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 265 - MODAL -->
                            <div class="modal fade text-center" id="Imagem265" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura265.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 265</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 265 - End -->
                            <br>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o botão "Pesquisar", o SIGA/SGBM apresenta a grade "Produtos Solicitados no Período" que atendem aos parâmetros informados nos campos anteriores (de 01 a 03). A grade apresenta os seguintes dados: Descrição do Produto, Data da Solicitação, Data do Atendimento, Status da Solicitação, Observação, Código do Produto  e Ações.</li>
                            <br>
                            <!-- Fique Atento -->
                            <div class="FiqueAtentoCaixa">
                                <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                <div class="FiqueAtentoTexto">
                                    <p>Os campos "Data Atendimento" e "Código do Produto" serão preenchidos pelo Gestor do Catálogo (COGEC/SEPLAG) à medida que efetua a inclusão do item no Catálogo, assim como o campo "Observação" que será  preenchido na ocasião de alguma orientação ao solicitante, para que o produto seja incluído no Catálogo.</p>
                                </div>
                            </div>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Na coluna "Ações" da grade, o SIGA/SGBM apresenta um ícone em formato de "Lupa" que, ao ser acionado, permite visualizar a solicitação ao Catálogo.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">Na coluna "Ações" da grade, o SIGA/SGBM apresenta um ícone em formato de "Lápis" que, ao ser acionado, permite editar a solicitação ao Catálogo.</li>

                            <br><br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura266.png" data-bs-toggle="modal" data-bs-target="#Imagem266">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura266.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>
                            <!-- Imagem 266 - MODAL -->
                            <div class="modal fade text-center" id="Imagem266" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura266.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 266</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 266 - End -->
                            <br>
                            <p>Detalhamento dos Dados da Solicitação ao Catálogo</p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura267.png" data-bs-toggle="modal" data-bs-target="#Imagem267">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura267.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 267 - MODAL -->
                            <div class="modal fade text-center" id="Imagem267" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura267.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 267</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 267 - End -->
                            <br>
                            <p>Tela de Edição dos Dados da Solicitação ao Catálogo</p>
                            <br>
                            <br><br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura268.png" data-bs-toggle="modal" data-bs-target="#Imagem268">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura268.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>
                            <!-- Imagem 268 - MODAL -->
                            <div class="modal fade text-center" id="Imagem268" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura268.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 268</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 268 - End -->
                            <br>

                        </ol>
                        <br>
                        <ol>
                            <br><br>
                            <p><strong>I) Consultar Migração</strong></p>
                            <p>Para consultar o andamento da "Migração" acionar na barra de menu o comando: <strong>CONSULTAS >> ALMOXARIFADO >> MIGRAÇÃO</strong>: </p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura269.png" data-bs-toggle="modal" data-bs-target="#Imagem269">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura269.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 269 - MODAL -->
                            <div class="modal fade text-center" id="Imagem269" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura269.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 269</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 269 - End -->
                            <br>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "Código", informe o código do Catálogo correspondente ao item que se deseja consultar a migração. Nesse caso, a consulta apresentará o item de material individualizado.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Descrição", informe uma palavra ou mais que constem na especificação dos itens que se deseja consultar a migração. Nesse caso, a consulta apresentará um ou mais item.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Tipo de Material", selecione se a migração a ser consultada será de "Material de Consumo" ou "Material Permanente". Nesse caso, a consulta apresentará um ou mais itens que pertençam à referida classificação.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">Acione o botão "Pesquisar" para concluir a pesquisa.</li>

                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura270.png" data-bs-toggle="modal" data-bs-target="#Imagem270">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura270.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 270 - MODAL -->
                            <div class="modal fade text-center" id="Imagem270" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura270.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 270</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 270 - End -->
                            <br>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o botão "Pesquisar", o SIGA/SGBM apresenta a grade "Produtos Solicitados no Período" que atendem aos parâmetros informados nos campos anteriores (de 01 a 03). A grade apresenta os seguintes dados: Código do Produto, Descrição do Produto, Código Atual, Tipo de Material, Unidade de Consumo, Fator Multiplicador e Ações.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Na coluna "Ações" da grade, o SIGA/SGBM apresenta um ícone em formato de "Lupa" que, ao ser acionado, permite visualizar os detalhes do material em migração.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Na coluna "Ações" da grade, o SIGA/SGBM apresenta um ícone em formato de "X" que, ao ser acionado, permite excluir o item em migração.</li>
                            <br>
                            <br><br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura271.png" data-bs-toggle="modal" data-bs-target="#Imagem271">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura271.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>
                            <!-- Imagem 271 - MODAL -->
                            <div class="modal fade text-center" id="Imagem271" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura271.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 271</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 271 - End -->
                            <br>
                            <p>Detalhamento dos dados do item em migração podendo, a partir do botão "Editar", alterar dados obrigatórios da migração marcados com (*):</p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura272.png" data-bs-toggle="modal" data-bs-target="#Imagem272">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura272.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 272 - MODAL -->
                            <div class="modal fade text-center" id="Imagem272" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura272.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 272</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 272 - End -->
                            <br>
                            <p>Tela de Exclusão do Iten em Migração</p>
                            <br>
                            <br><br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura273.png" data-bs-toggle="modal" data-bs-target="#Imagem273">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura273.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>
                            <!-- Imagem 273 - MODAL -->
                            <div class="modal fade text-center" id="Imagem273" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura273.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 273</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 273 - End -->
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
                <a href="Topico05.5.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico06.2.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>