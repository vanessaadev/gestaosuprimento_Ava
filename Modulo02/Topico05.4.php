<?php
    // EGPCE - Chama o conectamoodle.php
  require_once('conectamoodle.php');
?>

<?php
$page = 'Topico05.4';
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
                            <p class="SubTitulo"> Atualizar Cadastro de Material</p>
                            <hr>
                            <p>O SIGA/SGBM permite consultar os Materiais de Consumo e Bens Móveis cadastrados no sistema, assim como cadastrar novos materiais e bens a partir da integração com o Catálogo de Bens Materiais e Serviços. Para isso, o perfil "Almoxarife" deverá acionar, na barra de menu, o comando: <strong>CONSULTAS >> ALMOXARIFADO >> MATERIAIS CADASTRADOS</strong> </p>
                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura221.png" data-bs-toggle="modal" data-bs-target="#Imagem221">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura221.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 221 - MODAL -->
                            <div class="modal fade text-center" id="Imagem221" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura221.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 221</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 221 - End --><br>
                        
                           
                            <ol>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Ao acionar o comando, na barra de menu, o SIGA/SGBM inicia a consulta no acervo de itens cadastrados no sistema. Para efetuar a consulta são necessários alguns filtros, o quanto mais forem utilizados, mais restrita será a consulta. No campo "Grupo", selecione o grupo de classificação dos itens que deseja inserir como parâmetro na consulta.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">À medida que for selecionado um "Grupo" específico, o SIGA/SGBM direciona os parâmetros para aquelas classes correspondentes ao “Grupo” selecionado. Então no campo "Classe", selecione a classe de material que deseja inserir como parâmetro na consulta.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Tipo de Material", selecione como mais um parâmetro, o tipo de material que se deseja visualizar na consulta.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.3s">No campo "Status", selecione como mais um parâmetro da consulta, a condição de uso do material, se "Ativo" ou "Inativo".</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.6s">Acione o botão "Pesquisar" para montar a consulta.</li>
                                <br>

                                <br><br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura222.png" data-bs-toggle="modal" data-bs-target="#Imagem222">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura222.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 222 - MODAL -->
                                <div class="modal fade text-center" id="Imagem222" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura222.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 222</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 222 - End -->
                                <br>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Na apresentação da consulta parametrizada, no SIGA/SGBM, é apresentada a grade "Materiais Encontrados" com os seguintes dados dos materiais: Código, Descrição, Localização, Tipo de Material, Unidade de Consumo, Quantidade em Estoque, Limite Mínimo, Fator Multiplicador, Status e Ações. Nessa última coluna denominada "Ações", serão demonstrados três ícones. Ao acionar o ícone em formato de "Lupa", serão demonstradas as informações detalhadas do item.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">Na coluna "Ações", se acionado o ícone em formato de "Lápis", será  aberta a tela de edição com algumas das informações do material que estão livres para edição.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">Na coluna "Ações", se acionado o ícone azul em formato de "Botão", será inativado ou ativado o item de material.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.3s">No rodapé da grade, no lado esquerdo, será apresentada a quantidade de itens apresentados na grade e a quantidade total de itens encontrados.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.6s">No rodapé da grade, no lado direito, serão apresentados botões de navegação entre as páginas existentes na consulta. Cada página da consulta apresentará no mínimo 10 itens compondo a grade.</li>
                                <br>   
                                <br><br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura223.png" data-bs-toggle="modal" data-bs-target="#Imagem223">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura223.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 223 - MODAL -->
                                <div class="modal fade text-center" id="Imagem223" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura223.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 223</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 223 - End -->
                                <br>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Para uma consulta individualizada, basta informar o código do item no campo "Código".</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">Em seguida, acione o botão "Pesquisar" para finalizar a consulta.</li>
                                <br><br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura224.png" data-bs-toggle="modal" data-bs-target="#Imagem224">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura224.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 224 - MODAL -->
                                <div class="modal fade text-center" id="Imagem224" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura224.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 224</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 224 - End -->
                                <br>
                                <li class="wow fadeInLeft" data-wow-delay="1.6s">Acionado o botão "Pesquisar", a consulta será apresentada no mesmo formato visto nos itens anteriores (6 a 10), sendo que por se tratar de uma consulta individualizada por código, será apresentado somente um item.</li>
                                <br>   
                                <br><br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura225.png" data-bs-toggle="modal" data-bs-target="#Imagem225">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura225.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 225 - MODAL -->
                                <div class="modal fade text-center" id="Imagem225" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura225.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 225</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 225 - End -->
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
                    <a href="Topico05.3.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico05.5.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
