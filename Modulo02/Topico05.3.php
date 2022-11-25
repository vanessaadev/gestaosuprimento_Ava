<?php
    // EGPCE - Chama o conectamoodle.php
  require_once('conectamoodle.php');
?>

<?php
$page = 'Topico05.3';
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
                <div class="row"> <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10"> <!-- Begin col-md-10 -->
                        <div class="page-title">

                            <!-- Sub Título -->
                            <p class="SubTitulo"> Baixar Material Do Estoque</p>
                            <hr>

                            <br>

                            <p>O SIGA/SGBM permite efetuar a baixa de material decorrente de inutilidade para consumo, tais como: deterioração, obsolescência, validade vencida, entre outras situações. Para baixar um item o perfil "Almoxarife" deverá acionar na barra de menu o comando: <strong>MOVIMENTOS >> ALMOXARIFADO >> BAIXA</strong></p>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura214.png" data-bs-toggle="modal" data-bs-target="#Imagem214">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura214.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 214 - MODAL -->
                            <div class="modal fade text-center" id="Imagem214" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura214.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 214</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 201 - End --><br>
                        
                           
                            <ol>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o comando, na barra de menu, o SIGA/SGBM apresentará a janela de baixa. No campo "Justificativa", descreva uma observação das razões que levaram à baixa do material, tais como: deterioração, inutilidade, validade vencida, obsolescência, entre outras.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Na janela "Pesquisa de Produtos", selecione a forma com que o item a ser baixado será identificado, ou seja, por código ou palavra-chave. Nesse caso de baixa, é recomendável utilizar o código, uma vez que o material é item de estoque e o código é acessível. Também pode ser selecionado o tipo de material de consumo ou patrimônio.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Na “Caixa de Texto”, informe o número do código.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Para identificar o item a ser baixado, acione o botão "Pesquisa".</li><br>

                                <br><br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura215.png" data-bs-toggle="modal" data-bs-target="#Imagem215">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura215.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 215 - MODAL -->
                                <div class="modal fade text-center" id="Imagem215" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura215.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 215</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 215 - End --><br>                               


                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Ao acionar o botão "Pesquisar", o SIGA/SGBM apresenta a janela de "Materiais Encontrados", como a pesquisa foi efetuada por "Código", será apresentado somente um item nessa janela e já virá marcado o quadrinho formado na primeira coluna da grade. Quando a "Pesquisa do Produto" for por palavra-chave, aparecerá mais de um produto, então será necessário marcar o quadrinho correspondente.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo “Quantidade”, digite a quantidade que será baixada do item, considerando quatro casas decimais. Essa quantidade deverá ser inferior à quantidade em estoque do item, mostrada na 5ª coluna da grade.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">Para finalizar a seleção, acione o botão "Adicionar".</li>

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura216.png" data-bs-toggle="modal" data-bs-target="#Imagem216">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura216.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 216 - MODAL -->
                                <div class="modal fade text-center" id="Imagem216" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura216.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 216</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 216 - End --><br>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o botão "Adicionar", o SIGA/SGBM atualiza a "Janela de Baixa", apresentando a grade do item selecionado com as seguintes informações: Código do Material, Descrição do Material, Unidade, Quantidade e Ações. Na coluna "Ações", é formado um ícone em formato de "Lápis" que, quando acionado, retorna à janela de seleção para edição da quantidade a ser baixada, caso haja necessidade.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">Também na coluna "Ações", no final da grade, é apresentado um ícone na cor vermelha em formato de "X" que, quando acionado, o item anteriormente selecionado é retirado da grade.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">Acionado o botão "Salvar", o SIGA/SGBM finaliza a operação de “Baixa”.</li>

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura217.png" data-bs-toggle="modal" data-bs-target="#Imagem217">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura217.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 217 - MODAL -->
                                <div class="modal fade text-center" id="Imagem217" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura217.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 217</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 217 - End --><br>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Ao finalizar a operação, o SIGA/SGBM apresenta uma mensagem de confirmação, em seguida clique no botão "OK".</li>
                                <br>
                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura218.png" data-bs-toggle="modal" data-bs-target="#Imagem218">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura218.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 218 - MODAL -->
                                <div class="modal fade text-center" id="Imagem218" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura218.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 218</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 218 - End --><br>
                                
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">Ao finalizar a operação, o SIGA/SGBM apresenta a tela de "Baixa", e acionado o botão "Imprimir", é gerado o "Relatório de Baixa".</li>
                                <br>
                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura219.png" data-bs-toggle="modal" data-bs-target="#Imagem219">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura219.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 219 - MODAL -->
                                <div class="modal fade text-center" id="Imagem219" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura219.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 219</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 219 - End --><br>
                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura220.png" data-bs-toggle="modal" data-bs-target="#Imagem220">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura220.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 220 - MODAL -->
                                <div class="modal fade text-center" id="Imagem220" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura220.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 220</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 220 - End --><br>
                                
                                

                                
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
                    <a href="Topico05.2.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico05.4.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
