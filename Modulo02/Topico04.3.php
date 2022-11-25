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
                            <p class="SubTitulo"> Atender Requisição de Material de Consumo</p>
                            <hr>
                            <br>
                            <p>As requisições de material no SIGA/SGBM tramitam na rede de computadores de forma sistemática e o "perfil Almoxarife" é quem controla os níveis de estoque para atender a demanda em curso.  </p>
                            <p>Para isso dispõe no SIGA/SGBM de uma agenda permanente de requisições que vão sendo apresentadas a medida que os requisitantes fazem seus pedidos. Esta agenda denomina-se "Requisições Aguardando Atendimento" que acumulam requisições tanto para Almoxarifado (material de consumo) como para Patrimônio (material permanente), uma vez que ambos os materiais são originalmente itens de estoque e portanto sob a gestão do perfil "Almoxarife".</p>                                                        
                            <br>
                            <ol>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Nesse caso trataremos da Requisição de Material de Consumo, essa agenda é composta pelos seguintes dados: Nº da Solicitação, Nome do solicitante, Departamento de origem, Data,  Status da Requisição e Ações.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s"> Na coluna "Ações" o ícone de cor azul no formato de "Lupa" permite, ao ser clicado, visualizar o conteúdo da Requisição. </li> 
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">Também na coluna "Ações" o ícone de cor bege no formato de "Carrinho de Compras" permite, ao ser clicado, proceder ao atendimento da requisição. </li>                                                               
                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura185.png" data-bs-toggle="modal" data-bs-target="#Imagem185">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura185.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 185 - MODAL -->
                                <div class="modal fade text-center" id="Imagem185" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura185.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 185</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 185 - End --> <br>
                               
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o ícone no formato de "Lupa" será apresentada o detalhe da requisição, no rodapé terá dois botões: "Atender" ao ser clicado permitirá a edição da quantidade do material a ser atendida, "Nova" permite ao perfil "Almoxarife" editar uma nova requisição para o solicitante. </li>
                                
                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura186.png" data-bs-toggle="modal" data-bs-target="#Imagem186">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura186.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 186 - MODAL -->
                                <div class="modal fade text-center" id="Imagem186" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura186.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 186</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 186 - End -->
                                <br>
                                <p>Acionado o ícone no formato de "Carrinho de Compras" ou o botão "Atender", será apresentada a janela "Atendimento de Requisição onde deverão ser preenchidos os seguintes campos:</p>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "Data de Atendimento" clicar no ícone no lado direito do campo e acessar o calendário e marcar o dia, mês e ano correspondente à data de atendimento da requisição. </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Qtde Atendida" informar a quantidade do material que deverá ser entregue ao requisitante (o referido campo possui 4 casas decimais, o valor "inteiro" sempre estará à frente da vírgula).  </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">Acionar o botão "Salvar" para atender à Requisição.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.3s">Acionar o botão "Atender todas" para preencher a "Qtde Solicitada" no campo "Qtde Atendida".</li>

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura187.png" data-bs-toggle="modal" data-bs-target="#Imagem187">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura187.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 187 - MODAL -->
                                <div class="modal fade text-center" id="Imagem187" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura187.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 187</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 187 - End --> <br>


                                <li class="wow fadeInLeft" data-wow-delay="0.6s">Uma vez acionado o botão "Salvar" será apresentado uma tela de consulta da requisição e poderá ser acionado o botão "Imprimir" gerando um documento em formato "PDF" que servirá como protocolo de entrega do material ou acionado o botão “Novo” para iniciar uma outra Requisição para o mesmo departamento requisitante. </li>
                               

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura188.png" data-bs-toggle="modal" data-bs-target="#Imagem188">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura188.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 183 - MODAL -->
                                <div class="modal fade text-center" id="Imagem188" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura188.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 188</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 183 - End --> 
                                <br><br>                               

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura189.png" data-bs-toggle="modal" data-bs-target="#Imagem189">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  width="700" src="imagens/Figura189.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 189 - MODAL -->
                                <div class="modal fade text-center" id="Imagem189" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura189.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 189</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 182 - End -->                                
                            </ol><br> 
                            <p><strong>Observação:</strong> O atendimento das requisições de material permanente serão efetuadas no módulo de “patrimônio” do SIGA/SGBM.</p>
                            <br>  <br>

                            
                            


                            
          
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
                    <a href="Topico04.2.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico04.4.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
