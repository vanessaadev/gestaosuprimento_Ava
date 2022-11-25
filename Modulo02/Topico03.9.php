<?php
    // EGPCE - Chama o conectamoodle.php
   require_once('conectamoodle.php');
?>

<?php
$page = 'Topico03.8';
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
                            <p class="SubTitulo"> Alterar Classificação de Item de Material </p>
                            <hr>

                            <br>

                            <p>A classificação original dos itens poderá ser alterada pelo Perfil "Gestor Financeiro", no caso do uso do item na operação do seu órgão/entidade necessite de uma classificação oposta a classificação trazida do Catálogo de Bens Materiais e Serviços. O usuário possuidor desse perfil deve observar a Portaria da Secretaria do Tesouro Nacional nº 448 de 13 de setembro de 2002, na qual está baseada a classificação original, a partir da sua interpretação efetuará os seguintes procedimentos:
                            <br><br>Acionar na barra de menu do SIGA/SGBM o comando <strong>MANUTENÇÃO >> ALMOXARIFADO >> MATERIAL >> CADASTRO:</strong></p>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura158.png" data-bs-toggle="modal" data-bs-target="#Imagem158">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura158.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 158 - MODAL -->
                            <div class="modal fade text-center" id="Imagem158" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura158.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 158</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 158 - End --><br>

                            <p>A tela inicial sempre será a tela de consulta dos itens cadastrados no SIGA/SGBM, nesse caso, o perfil "Gestor Financiero" poderá efetuar a alteração de um item já cadastrado ou cadastrar um item novo. Para isso deverá proceder da seguinte forma:</p>

                            

                            <ol>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "Código", uma vez que já deve ser de conhecimento prévio, informar o código de identificação do item que terá a sua classificação alterada. A pesquisa poderá ser efetuada também por descrição no campo "Descrição" ao lado. </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Tipo de Material" selecionar a opção de configuração de pesquisa por "Patrimônio" ou "Consumo" dependendo do item que se deseja alterar a classificação. </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">Acionar o botão "Pesquisar" para acessar o item em questão. </li>
                                
                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura159_.png" data-bs-toggle="modal" data-bs-target="#Imagem159_">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura159_.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 159 - MODAL -->
                                <div class="modal fade text-center" id="Imagem159_" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura159_.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 159</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 159 - End --><br>
                                


                                <li class="wow fadeInLeft" data-wow-delay="1.3s">Uma vez acionado o botão "Pesquisar" o SIGA/SGBM apresentará uma grade denominada "Materiais encontrados" contendo as seguintes informações para identificação do item: Código do Item, Descrição, Tipo de Material, Unidade de Fornecimento e Ações.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.6s">No final da grade acionar o ícone no formato de "Lápis" para editar a alteração de classificação.</li>

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura160_.png" data-bs-toggle="modal" data-bs-target="#Imagem160_">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura160_.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 160 - MODAL -->
                                <div class="modal fade text-center" id="Imagem160_" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura160_.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 160</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 160 - End --> <br>     
                                
                                <li class="wow fadeInLeft" data-wow-delay="1.9s">Serão apresentados os dados de classificação do item trazidos do Catálogo de Bens, Materiais e Serviços correspondentes ao tipo de classificação original. No exemplo abaixo trata-se dos dados referentes a um item de Patrimônio, quando virão preenchidos os campos de "Valor Residual", "Taxa de Dedpreciação" e "Vida Útil"..</li>
                                <li class="wow fadeInLeft" data-wow-delay="2.3s">Diferentemente da tela original de cadastramento de material, quando esta operação é efetuada pelo perfil "Gestor Financeiro" o SIGA/SGBM habilita o campo denominado "Tipo de Material" que poderá ser alternado entre "Consumo" e "Patrimônio". No campo "Tipo de Material" deve-se selecionar a nova classificação que o item passará a ter oposta à classificação original.</li>

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura161.png" data-bs-toggle="modal" data-bs-target="#Imagem161">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura161.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 161 - MODAL -->
                                <div class="modal fade text-center" id="Imagem161" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura161.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 161</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 161 - End --><br> 


                                <li class="wow fadeInLeft" data-wow-delay="2.6s">Uma vez alterado o campo "Tipo de Material" o SIGA/SGBM apresentará para edição os dados correspondentes ao tipo de classificação escolhida, os dados deverão ser editados conforme a característica de cada campo constante na tela.</li>
                                <li class="wow fadeInLeft" data-wow-delay="2.9s">Após a edição dos dados acionar o botão "Salvar".</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura162.png" data-bs-toggle="modal" data-bs-target="#Imagem162">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura162.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 162 - MODAL -->
                            <div class="modal fade text-center" id="Imagem162" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura162.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 162</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 162 - End --> <br>

                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Uma vez acionado o botão "Salvar" o SIGA/SGBM apresentará uma mensagem de confirmação da operação, em seguida acionar o botão "OK".</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura163.png" data-bs-toggle="modal" data-bs-target="#Imagem163">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura163.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 163 - MODAL -->
                            <div class="modal fade text-center" id="Imagem163" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura163.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 163</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 163 - End --><br> 

                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Acionado o botão "OK" o SIGA/SGBM apresentará a tela de detalhamento do material, onde poderá ser observada a sua mudança de classificação:</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">Ficarão habilitados botões de operações com o item no tocante a: "Inativar", "Editar" ou "Novo".</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura164.png" data-bs-toggle="modal" data-bs-target="#Imagem164">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura164.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 164 - MODAL -->
                            <div class="modal fade text-center" id="Imagem164" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura164.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 164</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 164 - End --> 

                      

                            



                            
          
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
                    <a href="Topico03.8.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico04.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
