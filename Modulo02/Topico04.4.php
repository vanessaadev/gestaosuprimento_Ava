<?php
    // EGPCE - Chama o conectamoodle.php
   require_once('conectamoodle.php');
?>

<?php
$page = 'Topico04.3';
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
                            <p class="SubTitulo"> Devolver Material</p>
                            <hr>
                            <br>
                            <p>O SIGA/SGBM permite registrar devoluções decorrentes de materiais requisitados e não consumidos para isto o "perfil Almoxarife" deverá acionar na barra de menu o comando <strong>MOVIMENTOS >> ALMOXARIFADO >> DEVOLUÇÃO</strong>:</p>                                                        
                            <br>                                                                                           
                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura190.png" data-bs-toggle="modal" data-bs-target="#Imagem190">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura190.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 190 - MODAL -->
                            <div class="modal fade text-center" id="Imagem190" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura190.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 190</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 190 - End --> <br>
                            <ol type="1">
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "Origem", clicar na seta no lado direito do campo e selecionar o setor de onde se origina a devolução.  </li>                           
                                
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Selecionar a opção de pesquisa para identificação do item a ser devolvido se a pesquisa será feita por "Código" ou "Palavra-Chave".</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">Na caixa de texto logo abaixo informar o código ou a palavra chave conforme a opção selecionada no item 2 anterior. </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">Acionar o botão "Pesquisar" para identificar o item de material de consumo a ser devolvido. </li>                        

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura191.png" data-bs-toggle="modal" data-bs-target="#Imagem191">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura191.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 191 - MODAL -->
                                <div class="modal fade text-center" id="Imagem191" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura191.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 191</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 191 - End --> <br>

                                <li class="wow fadeInLeft" data-wow-delay="0.6s">Acionado o botão "Pesquisar" o SIGA/SGBM apresenta a grade para seleção do material a ser devolvido contendo as seguintes informações: "Código do Material, Descrição, Tipo de Material, Qtde em Estoque e Unidade de Consumo. Clicar no quadrículo no lado esquerdo da grade para selecionar o item.  </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Quantidade" informar a quantidade a ser devolvida utilizando quatro casas decimais.  </li>
                                <li class="wow fadeInLeft" data-wow-delay="1.3s">Acionar o Botão "OK" para finalizar a seleção.  </li>


                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura192.png" data-bs-toggle="modal" data-bs-target="#Imagem192">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura192.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 183 - MODAL -->
                                <div class="modal fade text-center" id="Imagem192" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura192.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 192</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 192 - End --> 
                                <br>
                                <p>A medida que o item é selecionado o SIGA/SGBM vai atualizando a grade "Itens selecionados para devolução" contendo as seguintes informações: "Código do Material, Descrição, Quantidade a ser devolvida, Unidade e Ações. No campo Código do Material se forma um link que ao ser acionado permite editar novamente a janela de seleção do produto.</p>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s"> No ícone em formato de "Lápis" poderá ser editada a quantidade a ser devolvida.  </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s"> Acionando o ícone em formato de "X" o item é excluído da grade "Itens selecionados para devolução".  </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">Acionado o botão "Salvar" a devolução será efetivado. </li>             

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura193.png" data-bs-toggle="modal" data-bs-target="#Imagem193">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  width="700" src="imagens/Figura193.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 193 - MODAL -->
                                <div class="modal fade text-center" id="Imagem193" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura193.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 193</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
                                <!-- Imagem 193 - End -->
                                
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">Acionado o botão "Salvar" o SIGA/SGBM apresentará uma mensagem de confirmação da operação de devolução. Para isso basta clicar no botão "OK".</li>
                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura194.png" data-bs-toggle="modal" data-bs-target="#Imagem194">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  width="700" src="imagens/Figura194.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 194 - MODAL -->
                                <div class="modal fade text-center" id="Imagem194" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura194.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 194</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <!-- Imagem 193 - End -->
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">Acionado o botão "OK" o SIGA/SGBM demonstra um espelho de devolução e ao clicar no botão "Imprimir" é gerado em formato PDF o comprovante de devolução do material para ser assinado pelo almoxarife recebedor da devolução o comprovante de devolução deve ficar arquivado com setor que efetuou a devolução.</li>
                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura195.png" data-bs-toggle="modal" data-bs-target="#Imagem195">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s"  width="700" src="imagens/Figura195.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 195 - MODAL -->
                                <div class="modal fade text-center" id="Imagem195" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura195.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 195</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura196.png" data-bs-toggle="modal" data-bs-target="#Imagem196">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  width="700" src="imagens/Figura196.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 196 - MODAL -->
                                <div class="modal fade text-center" id="Imagem196" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura196.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 196</strong> </p>
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
                    <a href="Topico04.3.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico05.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
