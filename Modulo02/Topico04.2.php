<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico04.2';
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
                        <p class="SubTitulo"> Requisitar Bem Móvel</p>
                        <hr>
                        <br>
                        <p>Um bem móvel, quando adquirido, o seu registro inicial ocorre de forma semelhante ao material de consumo, ou seja, a Nota Fiscal de compra é registrada como "Entrada de Estoque". Neste caso, o bem, apesar de ser classificado como material permanente no Sistema de Catálogo de Materiais, tem seu registro financeiro alocado no Almoxarifado.</p>

                        <p>Somente a partir da saída do almoxarifado, por ocasião da distribuição do bem, este passará a ser considerado patrimônio e, consequentemente, sofrerá durante sua vida útil, a redução de valor por intermédio da depreciação.</p>

                        <p>Dessa forma, a requisição de bem móvel será efetuada pelo "Perfil Requisitante" no SIGA/SGBM, da mesma forma com que ocorre a requisição de material de consumo.</p>

                        <p>Para efetuar uma requisição de bem móvel, na barra de menu do SIGA/SGBM, acione o comando: <strong>MOVIMENTOS >> PATRIMÔNIO >> REQUISIÇÃO BEM</strong>, conforme será demonstrado a seguir: </p>

                        <br><br><!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura174.png" data-bs-toggle="modal" data-bs-target="#Imagem174">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura174.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <!-- Imagem 176 - MODAL -->
                        <div class="modal fade text-center" id="Imagem174" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura174.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Figura 174</strong> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 176 - End --> <br>

                        <br><!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura175.png" data-bs-toggle="modal" data-bs-target="#Imagem175">
                                <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura175.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <!-- Imagem 177- MODAL -->
                        <div class="modal fade text-center" id="Imagem175" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura175.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Figura 175</strong> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 177 - End --> <br>

                        <br><!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura176.png" data-bs-toggle="modal" data-bs-target="#Imagem176
                                
                                ">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura176.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <!-- Imagem 181 - MODAL -->
                        <div class="modal fade text-center" id="Imagem176" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura176.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Figura 176</strong> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 178 - End --> <br>
                        <ol>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Uma vez acionada a linha de comando o SIGA/SGBM apresentará a tela de "Requisição" identificando os dados do requisitante, assim como a data da requisição.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Nota" preencher a justificativa de uso para retirado de um item de estoque. Vale ressaltar que a descrição da justificativa deve se limitar a 1000 caracteres.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura177.png" data-bs-toggle="modal" data-bs-target="#Imagem177">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura177.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 177 - MODAL -->
                            <div class="modal fade text-center" id="Imagem177" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura177.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 177</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 177 - End --> <br>


                            <li class="wow fadeInLeft" data-wow-delay="0.9s">Para pesquisar o material a ser requisitado, selecionar a referência de pesquisa se por "Código" ou se por "Palavra Cave". A opção por "Código" o sistema buscará especificamente o item constante no estoque, já a opção por "palavra chave" buscará todos os itens em estoque que contém na sua descrição a palavra chave a ser informada.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s">Na caixa de texto informar, o "Código" ou a "Palavra chave" de referência..</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s">Acionar o botão "Pesquisar" para efetivar a pesquisa.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura178.png" data-bs-toggle="modal" data-bs-target="#Imagem178">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura178.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 178 - MODAL -->
                            <div class="modal fade text-center" id="Imagem178" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura178.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 178</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 178 - End --> <br>


                            <p>Uma vez acionado o botão "Pesquisar" o SIGA SGBM apresentará um janela "<em>Pop up</em>" com o resultado da pesquisa demonstrando uma grade com as informações básicas de requisição do material, inclusive a "Situação" de estoque.</p>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Marcar o quadrículo correspondente ao item resultante da pesquisa, segundo os parâmetros informados.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Observar a coluna "Situação" se apresentar cor "Verde" significa que o item possui estoque disponível para atendimento da requisição, se apresentar a cor "Vermelha" significa que não há estoque disponível.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Quantidade" informar a quantidade requisitada, utilizar sempre quatro casas decimais em seguida acionar o "Botão Adicionar". <br>

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura179.png" data-bs-toggle="modal" data-bs-target="#Imagem179">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura179.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 179 - MODAL -->
                                <div class="modal fade text-center" id="Imagem179" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura179.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 179</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 179 - End -->
                            </li><br>


                            <li class="wow fadeInLeft" data-wow-delay="1.3s">Uma vez acionado o botão "Adicionar" o sistema apresenta uma mensagem de sucesso da operação e gera uma grade com os dados básicos do material.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura180.png" data-bs-toggle="modal" data-bs-target="#Imagem180">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura180.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 180 - MODAL -->
                            <div class="modal fade text-center" id="Imagem180" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura180.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 180</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 180 - End --> <br>


                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Na grade apresentada poderão ser adicionados outros itens na Requisição por meio dos comandos 03 a 08.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">Na coluna "Ações" serão apresentadas duas figuras: a primeira em formato de "lápis" que se acionada possibilitará a edição da quantidade ou do item requisitado, a segunda figura em formato de "X" apagará o item da requisição.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s"> Acionado o botão "Salvar" a requisição é finalizada.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura181.png" data-bs-toggle="modal" data-bs-target="#Imagem181">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura181.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 183 - MODAL -->
                            <div class="modal fade text-center" id="Imagem181" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura181.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 181</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 183 - End -->
                            <br>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s">Acionado o botão "Salvar" o sistema apresentará uma janela "Pop up" solicitando a confirmação da operação.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura182.png" data-bs-toggle="modal" data-bs-target="#Imagem182">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura182.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 182 - MODAL -->
                            <div class="modal fade text-center" id="Imagem182" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura182.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 182</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 182 - End -->
                            <br>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Uma vez confirmada a operação o sistema apresentará uma mensagem de sucesso no canto direito do vídeo.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"> Em seguida o sistema apresenta a grade demonstrando os materiais requisitados.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s">Ficarão habilitados os botões "Cancelar", "Editar" e "Nova" permitindo o retrocesso da operação até o momento do atendimento da requisição.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura183.png" data-bs-toggle="modal" data-bs-target="#Imagem183">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura183.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 183 - MODAL -->
                            <div class="modal fade text-center" id="Imagem183" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura183.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 183</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 184 - End -->
                            <li class="wow fadeInLeft" data-wow-delay="1.6s">Enquanto não ocorre o atendimento da Requisição, ficará visível tanto na tela do "perfil Requisitante" a agenda das requisições que aguardam atendimento e na "coluna ações" essa requisição poderá ser editada, quando ainda não atendida.</li>
                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura184.png" data-bs-toggle="modal" data-bs-target="#Imagem184">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura184.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 184 - MODAL -->
                            <div class="modal fade text-center" id="Imagem184" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura184.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 184</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>


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
                <a href="Topico04.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico04.3.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>