<?php
    // EGPCE - Chama o conectamoodle.php
  require_once('conectamoodle.php');
?>

<?php
$page = 'Topico05.2';
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
                            <p class="SubTitulo"> Receber Doações de Material de Consumo</p>
                            <hr>
                            <p>O SIGA/SGBM permite registrar recebimento de doação assim como proceder a doações de materiais de consumo para isso o "perfil Almoxarife" deverá acionar na barra de menu o comando <strong>MOVIMENTOS >> ALMOXARIFADO >> DOAÇÃO</strong>:</p>
                            <br>
                            <ol>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura206.png" data-bs-toggle="modal" data-bs-target="#Imagem204">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  width="700" src="imagens/Figura206.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>
                                <!-- Imagem 204 - MODAL -->
                                <div class="modal fade text-center" id="Imagem206" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura206.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 206</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Titulo Figura -->
                                <br>
                                <p>Ao acionar o referido comando o sistema apresenta a janela “Doação” onde serão informados os seguintes campos:</p>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "Ação", selecione o tipo de doação que deseja registrar, se uma doação para uma outra entidade ou um recebimento de doação originada em outra entidade. Caso a opção selecionada seja "Receber de", o SIGA/SGBM mudará o campo "Destino" para "Origem" e solicitará o número do "Termo de Doação" referente ao material recebido.</li>
                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura204.png" data-bs-toggle="modal" data-bs-target="#Imagem204">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  width="700" src="imagens/Figura204.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 204 - MODAL -->
                                <div class="modal fade text-center" id="Imagem204" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura204.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 204</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Titulo Figura -->
                                <br>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Uma vez que a opção selecionada, no campo anterior, for "Receber de", informe no campo "Origem" o nome do órgão ou entidade de onde se originou a doação do material em questão.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Nº Termo Doação", informe o número do Termo de Doação ou documento similar que formaliza a operação.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Data Doação", informe a data de registro da operação no SIGA/SGBM.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.3s">No campo "Observação", descreva qualquer informação que se faça necessária para justificar a operação de recebimento da doação do material.</li>
                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura207.png" data-bs-toggle="modal" data-bs-target="#Imagem207">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  width="700" src="imagens/Figura207.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 207 - MODAL -->
                                <div class="modal fade text-center" id="Imagem207" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura207.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 207</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Titulo Figura -->
                                <br>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Selecione a forma que deseja fazer a pesquisa, no SIGA/SGBM, do material a ser doado, se por "Código" ou "Palavra-Chave".</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">Na "Caixa de Texto", abaixo do campo de seleção, informe o código ou a palavra-chave para a pesquisa do material.</li>

                                <li class="wow fadeInLeft" data-wow-delay="0.9s">Acione o botão "Pesquisar" para efetuar a pesquisa do item informado (código ou palavra-chave).</li>
                                <br>
                                <!-- Fique Atento -->
                                <div class="FiqueAtentoCaixa">
                                    <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                    <div class="FiqueAtentoTexto">
                                        <p>Se a opção de escolha for por palavra chave, na seleção poderão ser apresentados vários materiais que possuam na sua descrição a palavra chave informada. Para uma melhor individualização do material, sugere-se usar mais de uma palavra-chave separadas por "vírgula" é recomendável utilizar a seleção por código, nesse caso a pesquisa será individualizada pelo código.</p>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura208.png" data-bs-toggle="modal" data-bs-target="#Imagem208">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  width="700" src="imagens/Figura208.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 208 - MODAL -->
                                <div class="modal fade text-center" id="Imagem208" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura208.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 208</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Titulo Figura -->
                                <br>
                                <br>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o botão "Pesquisar" o SIGA/SGBM  apresenta a grade para seleção do material a ser doado contendo as seguintes informações: "Quadrículo de Seleção, Código do Material, Descrição, Tipo de Material, Qtde em Estoque e Unidade de Consumo". Se a sua pesquisa for estruturada por "código" o "Quadrículo de Seleção" já se apresentará marcado, caso contrário, clicar no quadrículo no lado esquerdo da grade para selecionar o item.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Quantidade" informe a quantidade a ser recebida como doação, utilizando quatro casas decimais.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s"> No campo "Valor", informe o "Valor Unitário" do material recebido em doação.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.3s"> Acione o botão "Adicionar", caso se trate da doação de um único item; no caso de ser mais de um item recebido em doação, acione o botão "Adicionar e Continuar", para que sejam selecionados outros itens que compõem o recebimento de doação.</li>
                                <br>
                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura209.png" data-bs-toggle="modal" data-bs-target="#Imagem209">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  width="700" src="imagens/Figura209.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 209 - MODAL -->
                                <div class="modal fade text-center" id="Imagem209" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura209.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 209</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Titulo Figura -->
                                <br>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Uma vez adicionado na doação o material selecionado o Siga/SGBM apresentará uma mensagem de sucesso da operação.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">A medida que o item é adicionado o SIGA/SGBM vai atualizando a grade "Itens selecionados da doação", contendo as seguintes informações: "Código do Material, Descrição, Unidade, Quantidade e Ação. </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">  Na coluna "Ação" da referida grade  se forma um ícone em formato de "Lápis" que ao ser acionado permite editar novamente a janela de seleção do produto, se acionando na coluna "Ação" da referida grade, o ícone em vermelho o item é debilitado da grade. </li>
                                <li class="wow fadeInLeft" data-wow-delay="1.3s"> Acionado o botão "Salvar" doação será efetivado. </li>
                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura210.png" data-bs-toggle="modal" data-bs-target="#Imagem210">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  width="700" src="imagens/Figura210.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 210 - MODAL -->
                                <div class="modal fade text-center" id="Imagem210" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura210.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 210</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Titulo Figura -->
                                <br>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o botão "Salvar" o SIGA/SGBM demonstra uma mensagem de confirmação da operação, em seguida acionar o botão "Está bem".</li>
                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura211.jpg" data-bs-toggle="modal" data-bs-target="#Imagem211">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  width="700" src="imagens/Figura211.jpg" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 210 - MODAL -->
                                <div class="modal fade text-center" id="Imagem211" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura211.jpg" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 211</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Titulo Figura -->
                                <br>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionado o botão "Está bem" o SIGA/SGBM demonstra uma mensagem de confirmação da operação.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">Acionado o botão "Imprimir" o SIGA/SGBM efetua a impressão do "Relatório de Doação" e acionando o botão "Novo" reinicia o registro de uma outra operação de doação.</li>
                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura212.png" data-bs-toggle="modal" data-bs-target="#Imagem212">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  width="700" src="imagens/Figura212.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 212 - MODAL -->
                                <div class="modal fade text-center" id="Imagem212" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura212.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 212</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim Titulo Figura -->
                                <br>
                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura213.png" data-bs-toggle="modal" data-bs-target="#Imagem213">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  width="700" src="imagens/Figura213.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 213 - MODAL -->
                                <div class="modal fade text-center" id="Imagem213" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura213.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 213</strong> </p>
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
                    <a href="Topico05.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico05.3.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
