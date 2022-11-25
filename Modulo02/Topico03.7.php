<?php
    // EGPCE - Chama o conectamoodle.php
   require_once('conectamoodle.php');
?>

<?php
$page = 'Topico03.7';
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
                            <p class="SubTitulo"> Cadastramento de Item de Material Permanente </p>
                            <hr>

                            <br>

                            <p>Quando for necessário o cadastramento dos itens de material permanente, este deverá ser efetuado pelo perfil "Almoxarife", utilizando o comando: <strong>MANUTENÇÃO >> ALMOXARIFADO >> MATERIAL >> CADASTRO:</strong></p>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura154.png" data-bs-toggle="modal" data-bs-target="#Imagem154">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura154.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 154 - MODAL -->
                            <div class="modal fade text-center" id="Imagem154" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura154.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 154</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 154 - End --><br>

                            <p>Ao acionar o referido comando o SIGA/SGBM apresentará os campos de pesquisa no "Catálogo", a pesquisa poderá ser efetuada por "Código" ou por "Descrição", vejamos a pesquisa por descrição:</p>

                            

                            <ol>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "Descrição" preencher com uma palavra chave que individualize o material permanente que se deseja pesquisar. </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Grupo" selecionar o agrupamento do "Catálogo de Materiais, Bens e Serviços" em que o bem em questão supostamente esteja inserido. </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Classe" selecionar a classe do "Catálogo de Materiais, Bens e Serviços" em que o bem em questão supostamente esteja classificado. </li>
                                <li class="wow fadeInLeft" data-wow-delay="1.3s">No campo "Tipo de Material" selecionar o tipo de material como "PATRIMÔNIO" uma vez que trata-se de material permanente.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.6s">Acionar o botão "Pesquisar".</li>
                                
                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura155.png" data-bs-toggle="modal" data-bs-target="#Imagem155">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura155.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 155 - MODAL -->
                                <div class="modal fade text-center" id="Imagem155" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura155.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 155</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 155 - End --><br>
                                


                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Uma vez acionado o botão "Pesquisar" o SIGA/SGBM apresenta uma grade com as informações referentes aos materiais encontrados tais como: Código, Descrição, Tipo de Material, Unidade de Fornecimento e Ações. Na coluna ações clicar no ícone em formato de "Lapís" na linha correspondente ao material que se deseja cadastrar.</li>

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura156.png" data-bs-toggle="modal" data-bs-target="#Imagem156">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura156.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 156 - MODAL -->
                                <div class="modal fade text-center" id="Imagem156" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura156.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 156</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 156 - End -->   <br>   
                                
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Uma vez acionado o ícone em formato de "Lapis" o SIGA/SGBM apresenta a tela de cadastro de material, trazendo do Catálogo de Bens Materiais e Serviços a classificação do material como permanente assim como o "Valor Residual", "Taxa de Depreciação" e a "Vida Útil" em anos.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Fator Multiplicador" informar sempre "1" uma vez que material permanente são é entregue fracionado.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo “Valor Médio Inicial” informar o valor inicial para efeito de valoração do item. Esse campo será útil para os casos de ajuste de valor por ocasião de correções no inventário de estoque. Ao salvar o cadastro este valor se repetirá como valor unitário.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.3s">No campo "Código Atual" deixar como valor nulo. Este campo somente será preenchido quando se tratar de processo de migração de um sistema para outro quando o código atual será a codificação do item no sistema de onde os dados estão sendo migrados.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.6s">Acionar o botão "Salvar" para cadastrar definitivamente o produto.</li>
                            </ol>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura157.png" data-bs-toggle="modal" data-bs-target="#Imagem157">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura157.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 157 - MODAL -->
                            <div class="modal fade text-center" id="Imagem157" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura157.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 157</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 157 - End --><br>

                            



                            
          
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
                    <a href="Topico03.6.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico03.8.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
