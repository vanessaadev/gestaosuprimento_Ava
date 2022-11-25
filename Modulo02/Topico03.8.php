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
                            <p class="SubTitulo"> Cadastramento de Item de Material de Consumo</p>
                            <hr>
                            <p>Quando for necessário o cadastramento dos itens de material de consumo, este deverá ser efetuado pelo perfil "Almoxarife", utilizando o comando: <strong>MANUTENÇÃO >> ALMOXARIFADO >> MATERIAL >> CADASTRO:</strong> </p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura158.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura158.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>  </strong></p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura158.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>  </strong></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End --> 
                            <br>
                            <ol type="1">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Para cadastrar o item de material de consumo preencher no campo "Código" o número que identifica o item no Catálogo de Bens Materiais e Serviços, para o acesso individualizado do item. Caso não conheça o “código” a pesquisa poderá ser feita de forma alfabética no campo “Descrição” ou utilizando os filtros dos campos “Grupo”, “Classe” e “Tipo de Material”.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Em seguida acionar o botão "Pesquisar".</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura159.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                    <img class="img-fluid wow fadeInRight" src="imagens/Figura159.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>  </strong></p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura159.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong> Fonte 159</strong></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End -->
                            <br>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">Uma vez acionado o botão "Pesquisar" o Siga/Sgbm apresentará a grade "Materiais encontrados", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.0s">Acionar o ícone em formato de lápis no campo "Ação" para proceder ao cadastramento do item.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura160.png" data-bs-toggle="modal" data-bs-target="#Imagem03">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura160.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>  </strong></p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura160.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong> Fonte 160</strong></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End -->
                            <br>
                            <p class="wow fadeInLeft">Na tela Cadastro de Material deverão ser informados os seguintes campos:</p>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s">No campo "Fator Multiplicador" informar a quantidade que deverá ser fracionada a "Unidade de Fornecimento". No exemplo abaixo o material é adquirido em caixa de 100 unidades, mas será entregue ao requisitante em unidades, então 1 caixa será fracionada em 100 unidades.</li>
                            <br>
                            <!-- Fique Atento -->
                            <div class="FiqueAtentoCaixa">
                                <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                <div class="FiqueAtentoTexto">
                                    <p>Uma vez cadastrada essa informação, toda vez que for registrada uma entrada de estoque na unidade de fornecimento "Caixa -100 unidades" o almoxarife deverá atentar que a quantidade, em termos nominais, aumentará e o valor da unidade diminuirá considerando o fator multiplicador. Ou seja, a quantidade nominal será multiplicada por 100 unidades e o valor da caixa dividido por 100. Dessa forma a Caixa será transformada em Unidade. Uma vez registrado o "Fator Multiplicador" do item este só poderá ser alterado se o item ainda não tiver sido movimentado ou se o seu saldo estiver Zero.</p>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s">No campo "Valor Médio Inicial", informe quanto custa em moeda a unidade do item. No exemplo abaixo, será o valor da "Caixa" dividido por 100 (doze). Este campo somente será editado quando da implantação do item ou quando o item estiver com saldo Zero, por isso o adjetivo "inicial". Enquanto o item tiver saldo em movimentação, o valor unitário do item será calculado pela média, ou seja, o valor do estoque mais o valor das entradas dividido pelo saldo em quantidade existente após registrada a entrada.</li>                            
                            <li class="wow fadeInLeft" data-wow-delay="2.3s">No campo "Unidade de consumo", informe a unidade na qual o item de material vai ser entregue ao requisitante.  No exemplo abaixo, o material será entregue em Unidade, mesmo sendo adquirido em Caixa. Quando a unidade de entrega for igual a unidade de fornecimento, deverá ser informado como "Unidade de Consumo", também "Caixa".</li>
                            <li class="wow fadeInLeft" data-wow-delay="2.3s">No campo "Limite Mínimo" informar a quantidade em estoque na qual deverá ser efetuado o pedido de ressuprimento, de forma ao atingir esse limite o Siga/Sgbm avise ao almoxarife que o estoque deve ser reposto mediante pedido. </li>
                            <li class="wow fadeInLeft" data-wow-delay="2.3s">No campo "Limite Máximo" informar a quantidade máxima que poderá ser estocada do item. </li>
                            <li class="wow fadeInLeft" data-wow-delay="2.3s">No campo "Localização" informar a sequência de endereçamento do armazém onde o material está localizado. Exemplo: Área 01, Rua 02, Corredor 04, Estante 03, Prateleira(nível) 03, a informação de localização é opcional pois só se aplica quando o armazém está configurado para sistema de endereçamento tipo fixo. </li>
                            <li class="wow fadeInLeft" data-wow-delay="2.3s">Informado todos os campos identificados como obrigatórios (*), acionar o botão "Salvar". <br>
                            <!-- Titulo Figura --> <br>
                            <div class="text-center">
                                <a href="imagens/Figura161.1.png" data-bs-toggle="modal" data-bs-target="#Imagem04">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura161.1.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong> </strong></p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem04" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura161.1.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte 161.1 </strong></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End -->
                            <br>
                            </li>

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
                    <a href="Topico03.7.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico03.9.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
