<?php
    // EGPCE - Chama o conectamoodle.php
  require_once('conectamoodle.php');
?>

<?php
$page = 'Topico05';
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
                    
                            <h2 class="Titulo"> Manutenção de Estoque no SIGA/SGBM</h2>
                            <hr>

                            <br>

                            <p><strong>Objetivo:</strong>  Compreender as funcionalidades de movimentações atípicas e as manutenções básicas de estoque no sistema SIGA/SGBM.</p>

                            <h2 class="SubTitulo"> Doações de Material de Consumo</h2>
                            <hr>
                            <p>O SIGA/SGBM permite registrar recebimento de doação assim como realizar doações de materiais de consumo para isso o "perfil Almoxarife" deverá acionar na barra de menu o comando <strong>MOVIMENTOS >> ALMOXARIFADO >> DOAÇÃO</strong>:</p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura197.png" data-bs-toggle="modal" data-bs-target="#Imagem197">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  width="700" src="imagens/Figura197.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 197 - MODAL -->
                            <div class="modal fade text-center" id="Imagem197" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura197.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 197</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Titulo Figura -->
                            <br>
                            <p>Ao acionar o referido comando o sistema apresenta a janela “Doação” onde serão informados os seguintes campos:</p>
                            <ol type="1">
                                <li class="wow fadeInLeft" data-wow-delay="0.3s"> No campo "Ação", selecionar o tipo de doação que se deseja registrar se uma Doação para uma outra entidade ou um Recebimento de Doação originada em outra entidade. Caso a opção selecionada seja "Receber de" o SIGA/SGBM solicitará o número do Termo de Doação referente ao material recebido.  </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s"> Caso a opção selecionada no item anterior seja "Doar para" o SIGA/SGBM apresentará o campo "Destino" nesse campo deve ser informado o órgão ou entidade para onde se destina a doação. Se a opção selecionada for "Receber de" o SIGA/SGBM apresentará o campo "Origem" nesse campo deve ser informado o órgão ou entidade doador do material em questão.  </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s"> No campo "Data Doação" informar a data de registro da operação no SIGA/SGBM.  </li>
                                <li class="wow fadeInLeft" data-wow-delay="1.3s"> No campo "Observação" descrever qualquer informação que se fará necessária para justificar a operação de doação do material.  </li>
                                <li class="wow fadeInLeft" data-wow-delay="1.6s"> Selecionar a forma que desejar fazer a pesquisa no SIGA/SGBM do material a ser doado se por "Código" ou "Palavra Chave".  </li>
                                <li class="wow fadeInLeft" data-wow-delay="1.9s"> Na "caixa de texto" abaixo do campo de seleção informar o código ou a palavra chave para a pesquisa do material.  </li>
                                <li class="wow fadeInLeft" data-wow-delay="2.3s">  Acionar o botão "Pesquisar" para efetuar a pesquisa o item informado.  </li>
                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura198.png" data-bs-toggle="modal" data-bs-target="#Imagem198">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  width="700" src="imagens/Figura198.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 198 - MODAL -->
                                <div class="modal fade text-center" id="Imagem198" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura198.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 198</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Titulo Figura -->
                                <br>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s"> Acionado o botão "Pesquisar" o SIGA/SGBM apresenta a grade para seleção do material a ser doado contendo as seguintes informações: "Código do Material, Descrição, Tipo de Material, Qtde em Estoque e Unidade de Consumo”. Clicar no quadrículo no lado esquerdo da grade para selecionar o item. </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s"> No campo "Quantidade" informar a quantidade a ser doada utilizando quatro casas decimais. </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s"> Acionar o Botão "Adicionar" para finalizar a seleção.  </li>
                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura199.png" data-bs-toggle="modal" data-bs-target="#Imagem199">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  width="700" src="imagens/Figura199.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 199 - MODAL -->
                                <div class="modal fade text-center" id="Imagem199" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura199.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 199</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Titulo Figura -->
                                <br>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s"> À medida que o item é adicionado o SIGA/SGBM vai atualizando a grade "Itens selecionados da doação", contendo as seguintes informações: "Código do Material, Descrição, Unidade, Quantidade e Ação". Na coluna "Ação" da referida grade se forma um ícone em formato de "Lápis" que ao ser acionado permite editar novamente a janela de seleção do produto. </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">  Acionando na coluna "Ação" da referida grade, o ícone em vermelho o item é excluído da grade. </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s"> Acionado o botão "Salvar" doação será efetivado.</li>
                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura200.png" data-bs-toggle="modal" data-bs-target="#Imagem200">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  width="700" src="imagens/Figura200.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 200 - MODAL -->
                                <div class="modal fade text-center" id="Imagem200" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura200.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 200</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Titulo Figura -->
                                <br>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s"> Acionado o botão "Salvar" o SIGA/SGBM demonstra uma mensagem de confirmação da operação, em seguida acionar o botão "OK".</li>
                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura201.png" data-bs-toggle="modal" data-bs-target="#Imagem201">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  width="700" src="imagens/Figura201.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 201 - MODAL -->
                                <div class="modal fade text-center" id="Imagem201" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura201.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 201</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Titulo Figura -->
                                <br>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o botão "Imprimir" o SIGA/SGBM gera um relatório de doação em formato "PDF".</li>
                                <br>
                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura202.png" data-bs-toggle="modal" data-bs-target="#Imagem202">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  width="700" src="imagens/Figura202.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 202 - MODAL -->
                                <div class="modal fade text-center" id="Imagem202" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura202.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 202</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Titulo Figura -->
                                <br>
                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura203.png" data-bs-toggle="modal" data-bs-target="#Imagem203">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  width="700" src="imagens/Figura203.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 203 - MODAL -->
                                <div class="modal fade text-center" id="Imagem203" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura203.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 203</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Titulo Figura -->
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
                    <a href="Topico04.4.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico05.2.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
