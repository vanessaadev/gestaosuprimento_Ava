<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico04';
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

                        <h2 class="Titulo"> Distribuição de Materiais de Estoque no SIGA/SGBM </h2>
                        <hr>

                        <p><strong>Objetivo:</strong> Compreender a funcionalidade de distribuição de bens no Sistema SIGA/SGBM quando materiais permanentes que ingressaram no almoxarifado saem de condição de estoque para compor o acervo patrimonial.</p>

                        <!-- Sub Título -->
                        <p class="SubTitulo">Requisitar Material de Consumo</p>
                        <hr>

                        <p>O SIGA/SGBM trabalha com o conceito de Requisição de Material por Centro de Custo, cada departamento do órgão ou entidade elegerá dois funcionários para efetuarem as requisições de material, para que na ausência de um, outro possa fazê-lo. As requisições são efetuadas de forma descentralizada, ficando a cargo do perfil “Almoxarife” adequar as quantidades solicitadas com o estoque existente.</p>

                        <p>As requisições de material de consumo serão efetuadas no SIGA/SGBM pelo perfil Requisitante (Setorial), acionando, na barra de menu superior e lateral, o comando: <strong>MOVIMENTOS >> ALMOXARIFADO >> REQUISIÇÃO</strong>.</p>
                        <br>
                        <br><!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura165.png" data-bs-toggle="modal" data-bs-target="#Imagem165">
                                <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura165.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <!-- Imagem 165 - MODAL -->
                        <div class="modal fade text-center" id="Imagem165" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura24.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Figura 165</strong> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 165 - End --> <br>

                        <br><!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura166.png" data-bs-toggle="modal" data-bs-target="#Imagem166">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura166.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <!-- Imagem 166 - MODAL -->
                        <div class="modal fade text-center" id="Imagem166" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura166.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Figura 166</strong> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 166 - End --> <br>

                        <br><!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura167.png" data-bs-toggle="modal" data-bs-target="#Imagem167">
                                <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura167.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <!-- Imagem 167 - MODAL -->
                        <div class="modal fade text-center" id="Imagem167" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura167.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Figura 167</strong> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 167 - End --> <br>
                        <p>Ao acionar o comando na barra de menu, o SIGA/SGBM apresentará a tela de Requisição onde deverão ser preenchidas as seguintes informações:</p>

                        <ol>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "Observação'', preencha com a informação que considerar importante para o atendimento da requisição, esse é um campo opcional.  </li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Selecione qual a modalidade que deseja efetuar a pesquisa do material para requisição, se por “Código” ou “Palavra-Chave”.  </li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "editável'', logo abaixo da seleção, informe o “Código” ou a “Palavra-Chave” para a pesquisa do material.  </li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s"> Acione o botão “Pesquisar” para comandar a busca no SIGA/SGBM. </li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura168.png" data-bs-toggle="modal" data-bs-target="#Imagem168">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura168.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 168 - MODAL -->
                            <div class="modal fade text-center" id="Imagem168" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura168.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 168</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 168 - End --> <br>
                            <p>Efetuando a pesquisa por Palavra Chave o SIGA/SGBM apresentará uma relação de itens que possui a palavra chave na sua descrição. Caso a pesquisa for efetuada por Código o SIGA/SGBM apresentará a tela com apenas o item de código informado.</p>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s">Observe, no campo “Situação”, o ícone indicador de existência ou não de saldo de estoque do material solicitado, se for VERMELHO o item não possui estoque e, portanto, a requisição não poderá ser atendida, se for VERDE o item tem estoque e pode ser requisitado.  </li>

                            <li class="wow fadeInLeft" data-wow-delay="1.9s">Marque o quadrinho correspondente ao item a ser requisitado (somente poderão ser marcados os itens cujo ícone seja verde). Caso contrário, o SIGA/SGBM não permitirá a requisição. </li>
                            <li class="wow fadeInLeft" data-wow-delay="2.3s">No campo “Quantidade”, informe a quantidade a ser solicitada do item marcado no campo anterior (6), observe que para efeito de precisão de cálculo devem ser utilizadas quatro casas decimais.  </li>
                            <li class="wow fadeInLeft" data-wow-delay="2.6s">Acione o botão “Adicionar” para confirmar a quantidade requisitada para esse item especificamente. 

                                <br><br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura169.png" data-bs-toggle="modal" data-bs-target="#Imagem169">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura169.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 169 - MODAL -->
                                <div class="modal fade text-center" id="Imagem169" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura169.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 169</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 169 - End --> <br>

                                Acionado o botão Adicionar o SIGA/SGBM retorna à tela de requisição trazendo a grade "Itens selecionados para requisição" contendo o material selecionado para requisição. A referida grade é composta pelos seguintes dados: Código do Material, Descrição, Unidade e Quantidade, essa grade pode ser acrescida de mais materiais, bastando executar novamente os procedimentos de 2 a 8 anteriores. Poderão também ser editados os seguintes dados:
                            </li><br>

                            <li class="wow fadeInLeft" data-wow-delay="0.3s"> A coluna de ações na grade possui um ícone em forma de “Lápis” e ao clicar nesse ícone o quantitativo da requisição desse material poderá  ser atualizado.  </li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">No final da grade, é apresentado um ícone no formato de um "X", clicando nesse ícone, o material é excluído da requisição.  </li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">Acionando o botão “Salvar”, é encerrado o modo de edição da requisição,  essa é gravada no SIGA/SGBM e passa a compor a Agenda de Requisições a serem atendidas pelo perfil “Almoxarife” ou “Almoxarife/Gestor Patrimonial”.  </li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura170.png" data-bs-toggle="modal" data-bs-target="#Imagem170">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura170.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 170 - MODAL -->
                            <div class="modal fade text-center" id="Imagem170" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura170.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 170</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 170 - End --><br>


                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o botão "Salvar'', o SIGA/SGBM apresenta a mensagem de sucesso da operação, e o usuário é redirecionado para a tela de detalhes da requisição.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura171.png" data-bs-toggle="modal" data-bs-target="#Imagem171">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura171.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 171 - MODAL -->
                            <div class="modal fade text-center" id="Imagem171" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura171.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 171</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 171 - End --><br>

                            <p>Enquanto a Requisição não for atendida pelo perfil “Almoxarife” ou “Almoxarife/Gestor Patrimonial'', o SIGA/SGBM ficará apresentando, ao usuário requisitante, uma agenda de Requisições aguardando atendimento enquanto o material não for efetivamente entregue. Nessa agenda, poderão ser efetuadas as operações abaixo:</p>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">A coluna de ações na grade possui um ícone em forma de “Lápis" e ao clicar nesse ícone a requisição poderá ser editada.  </li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura172.png" data-bs-toggle="modal" data-bs-target="#Imagem172">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura172.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 172 - MODAL -->
                            <div class="modal fade text-center" id="Imagem172" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura172.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 172</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 172 - End --><br>


                            <p>A tela de edição de requisição será aberta, e todos os passos de 1 a 12 podem ser feitos novamente, ou seja, é possível adicionar ou remover itens ou alterar seus quantitativos, bem como alterar o campo "Observação".</p>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura173.png" data-bs-toggle="modal" data-bs-target="#Imagem173">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura173.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 173 - MODAL -->
                            <div class="modal fade text-center" id="Imagem173" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura173.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 173</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 173 - End --><br>
                            <p>As requisições salvas podem ser consultadas, alteradas e excluídas por meio do menu: <strong>CONSULTAS >> ALMOXARIFADO >> REQUISIÇÕES</strong>
                            . </p>







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
                <a href="Topico03.9.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico04.2.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>