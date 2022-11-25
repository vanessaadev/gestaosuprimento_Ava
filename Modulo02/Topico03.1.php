<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico03.1';
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
                        <p class="SubTitulo"> Recebimento por Ordem de Compra </p>
                        <hr>

                        <br>

                        <p>O recebimento por Ordem de Compra evita a transcrição de informações da Nota Fiscal de compras para entrada de estoque, reduzindo a ocorrência de erros e possibilitando um melhor monitoramento do nível de atendimento na relação com os fornecedores. Pode ser efetuado em duas modalidades o recebimento de "Ordens de Compra" originadas no "Sistema de Registro de Preço" e o recebimento de "Ordens de Compra" originadas pelo "Sistema Licitaweb" que terá menus diferenciados.</p>

                        <br>
                        <h4 style="color: #FFA73E;">A) Recebimento de Ordens de Compra de Registro de Preços</h4>
                        <hr>

                        <p>Para efetuar o registro por intermédio de Ordem de Compra na modalidade de Registro de Preço, o "Perfil Almoxaife" deve executar na barra de menu o comando: <strong>"Movimentos, Almoxarifado, Entrada, Por Ordem de Compra, Registro de Preço".</strong></p><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura115.png" data-bs-toggle="modal" data-bs-target="#Imagem115">
                                <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura115.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <!-- Imagem 115 - MODAL -->
                        <div class="modal fade text-center" id="Imagem115" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura115.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Figura 115</strong> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 115 - End --><br>

                        <p>Ao acionar o comando correspondente na "Barra de Menu" o SIGA/SGBM apresentará a tela "Entrada por Registro de Preço" para o preenchimento das seguintes informações:</p>

                        <ol>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">No Campo "Número da Ata", preencha com o número da Ata de registro de preço de onde se origina a Ordem de Compra em questão.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Ordem de Compra", preencha com o número da Ordem de Compra.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">Acione o botão "Pesquisar" para que o SIGA/SGBM apresente as informações correspondentes à Ordem de Compra.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura116.png" data-bs-toggle="modal" data-bs-target="#Imagem116">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura116.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 116 - MODAL -->
                            <div class="modal fade text-center" id="Imagem116" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura116.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 116</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 116 - End --><br>


                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Ao acionar o botão "Pesquisar", o SIGA/SGBM apresentará o espelho da Ordem de Compra, identificando o Fornecedor que atende o referido pedido.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Acionando o botão "Alterar", poderá ser informada uma nova combinação de Número de Ata e Número de Ordem de Compra.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura117.png" data-bs-toggle="modal" data-bs-target="#Imagem24">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura117.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 117 - MODAL -->
                            <div class="modal fade text-center" id="Imagem117" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura117.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 117</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 117 - End --><br>


                            <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "Valor Total da Nota Fiscal", informe o valor total da Nota Fiscal do Fornecedor que se refere ao atendimento da Ordem de Compra.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Nota Fiscal", informe o número da Nota Fiscal do fornecedor que atende a Ordem de Compra.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Nota de Empenho", informe o número da Nota de Empenho correspondente ao pagamento da respectiva Nota Fiscal.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s">No campo "Número de Série", informe a série da Nota Fiscal.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s">No campo "Data Emissão", clique no quadrinho ao lado do campo, assim abrirá o calendário do mês corrente para que seja selecionada a data correspondente à emissão da Nota Fiscal.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.9s">No campo "Data Entrada", informe a data em que a respectiva Nota Fiscal está sendo registrada no SIGA/SGBM.</li>
                            <li class="wow fadeInLeft" data-wow-delay="2.3s">No campo "Observação", descreva qualquer informação que se fará necessária para complementar a operação.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura118.png" data-bs-toggle="modal" data-bs-target="#Imagem118">
                                    <img class="img-fluid wow fadeInUp" data-wow-delay="0.5s" src="imagens/Figura118.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 118 - MODAL -->
                            <div class="modal fade text-center" id="Imagem118" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura118.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 118</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 118 - End --><br>


                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Marque o quadrinho constante no cabeçalho da grade "Itens Selecionados" caso queira marcar todos os itens constantes na Ordem de Compra.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Marque cada quadrinho individualmente se optar por fazer o registro de entrada parcialmente.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Quantidade Entrada", informe a quantidade do item que está sendo recebida do fornecedor.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s">As colunas: "Quantidade final" e "Valor Unitário Final" terão seus valores variáveis segundo o "Fator Multiplicador", caso este seja maior que "1". A quantidade aumentará na proporção do "Fator Multiplicador" e o valor unitário diminuirá também na mesma proporção. Antes de acionar o botão "Salvar", efetivando a entrada da Nota Fiscal, o usuário deverá certificar-se que a "Quantidade Final" que está dando entrada corresponde efetivamente ao que foi conferido fisicamente no ato do recebimento. No caso do material permanente, foi orientado na ocasião do cadastro que o fator multiplicador sempre será igual a "1", uma vez que a distribuição desses itens não é fracionada.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s">À medida que forem registrados os recebimentos, o SIGA/SGBM procederá com o somatório dos valores que deverá "bater" com o valor da Nota Fiscal informado no "campo anterior - 06", de forma a consistir a entrada de dados.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.9s">Acione o botão "Salvar" para efetivar o registro da Ordem de Compra.</li>
                            <li class="wow fadeInLeft" data-wow-delay="2.3s">Caso o material constante na Ordem de Compra não esteja cadastrado no SIGA/SGBM como item de catálogo, na coluna "Ação" da grade "Itens Selecionados" da Ordem de Compra, aparecerá o ícone indicando que o material não está cadastrado, basta clicar nesse ícone para efetuar o cadastramento sem perder o foco do registro da Ordem de Compra.</li>
                            <br>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura119.png" data-bs-toggle="modal" data-bs-target="#Imagem119">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura119.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 119 - MODAL -->
                            <div class="modal fade text-center" id="Imagem119" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura119.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 119</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 119 - End --><br>
                        </ol><br>

                        <p>Apesar dos exemplos demonstrados se tratarem de material de consumo, o mesmo procedimento será seguido para o material permanente. </p><br>

                        <ol class="none">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">20 - Ao acionar o botão "Salvar", o SIGA/SGBM apresentará uma janela "pop-up" com uma mensagem de confirmação da operação. Acionando o botão "Ok", efetiva a operação, mas clicando no botão "Cancelar", não efetivará o registro.</li>
                        </ol><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura120.png" data-bs-toggle="modal" data-bs-target="#Imagem120">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura120.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <!-- Imagem 120 - MODAL -->
                        <div class="modal fade text-center" id="Imagem120" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura120.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Figura 120</strong> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 120 - End --><br>

                        <br>
                        <h4 style="color: #FFA73E;">B) Recebimento de Ordens de Compra do Licitaweb</h4>
                        <hr>

                        <p>Para efetuar o registro por intermédio de Ordem de Compra na modalidade do Licitaweb, o "Perfil Almoxarife" deve executar na barra de menu o comando: <strong>"Movimentos, Almoxarifado, Entrada, Por Ordem de Compra, Cotação"</strong>.</p><br>

                        <br><!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura2121png" data-bs-toggle="modal" data-bs-target="#Imagem121">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura121.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <!-- Imagem 121 - MODAL -->
                        <div class="modal fade text-center" id="Imagem121" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura121.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Figura 121</strong> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 121- End --><br>

                        <ol>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "Número da Ordem de Compra", informe o número da Ordem de Compra por "Cotação de Compra Eletrônica" emitida na modalidade de compra .</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Acione o botão "Pesquisar".</li>

                            <br><br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura122.png" data-bs-toggle="modal" data-bs-target="#Imagem122">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura122.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 122 - MODAL -->
                            <div class="modal fade text-center" id="Imagem122" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura122.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 122</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 122 - End --><br>


                            <p>Ao acionar o botão "Pesquisar", o SIGA/SGBM efetuará a integração com o Sistema de Cotação Eletrônica, e a partir dessa interação apresentará a tela de registro da Nota Fiscal originada por meio da Ordem de Compra, já identificando o fornecedor na respectiva tela, ocasião em que deverá ser informado o seguinte:</p><br>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">No campo "Vlr. Total da Nota Fiscal", informe o valor total da Nota Fiscal, essa informação servirá de fechamento com os valores dos itens da Nota somados individualmente a partir do seu registro no sistema.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Núm. Nota Fiscal", informe o número da Nota Fiscal emitida pelo fornecedor a partir da Ordem de Compra.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Núm. Nota Empenho", informe o número da Nota de Empenho que autorizou a emissão da Nota Fiscal.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s">No campo "Núm. de Série", informe a série da Nota Fiscal.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s">No campo "Data Emissão", informe o dia, mês e ano de emissão da Nota Fiscal.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.9s">No campo "Data Entrada", informe o dia, mês e ano em que a Nota Fiscal está sendo registrada no sistema SIGA/SGBM.</li>
                            <li class="wow fadeInLeft" data-wow-delay="2.3s">No campo "Observação", informe qualquer informação que se faça necessário com relação ao processo de recebimento ou registro da Nota Fiscal.</li>
                            <li class="wow fadeInLeft" data-wow-delay="2.6s">Quando, na coluna "Ações", surgir um ícone em formato de "Lápis", significa que o item de material ainda não está cadastrado no SIGA/SGBM. O registro só poderá prosseguir se o item for cadastrado. Para cadastrar o item de material em questão, basta clicar sobre o ícone.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura123.png" data-bs-toggle="modal" data-bs-target="#Imagem123">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura123.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 123 - MODAL -->
                            <div class="modal fade text-center" id="Imagem123" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura123.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 123</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 123 - End --><br>


                            <li class="wow fadeInLeft" data-wow-delay="0.3s">O SIGA/SGBM pesquisará do catálogo de bens materiais e serviços a classificação do material já definida.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Fator Multiplicador", informe a quantidade que deverá ser fracionada na "Unidade de Fornecimento". No exemplo abaixo, o material é adquirido em fardo e será entregue também em fardo, então não haverá necessidade de fracionamento, e o valor do "Fator Multiplicador" será igual a 1.</li>

                            <br><!-- Fique Atento -->
                            <div class="FiqueAtentoCaixa">
                                <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                <div class="FiqueAtentoTexto">
                                    <p>Uma vez cadastrada essa informação, toda vez que for registrada uma entrada de estoque, na unidade de fornecimento "Fardo", o almoxarife deverá atentar que a quantidade, em termos nominais, se manterá a mesma, assim como o valor do fardo. Ou seja, a quantidade nominal será multiplicada por 1, e o valor do fardo por 1. Dessa forma, a Unidade de Fornecimento será igual a Unidade de Consumo. Uma vez registrado o "Fator Multiplicador" do item, este só poderá ser alterado se ainda não tiver movimentação ou se o seu saldo estiver Zero.</p>
                                </div>
                            </div>

                            <li class="wow fadeInLeft" data-wow-delay="0.9s">No campo "Unidade de Consumo", informe a unidade na qual o item de material vai ser entregue ao requisitante.  No exemplo abaixo, o material será entregue em fardo na mesma unidade que foi adquirido. </li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s">No campo "Limite Mínimo", informe a quantidade em estoque, no qual deverá ser efetuado o pedido de ressuprimento, de forma que ao atingir esse limite o SIGA/SGBM avise ao almoxarife que o estoque deve ser reposto mediante pedido.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s">No campo "Limite Máximo", informe a quantidade máxima que poderá ser estocada do item.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.9s">No campo "Localização", informe a sequência de endereçamento do armazém onde o material está localizado.</li>
                            <li class="wow fadeInLeft" data-wow-delay="2.3s">Informados todos os campos identificados como obrigatórios(*), acione o botão "Salvar".</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura124.png" data-bs-toggle="modal" data-bs-target="#Imagem124">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura124.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 124 - MODAL -->
                            <div class="modal fade text-center" id="Imagem124" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura124.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 124</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 124 - End --><br>


                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Uma vez acionado o botão "Salvar", o SIGA/SGBM apresentará uma mensagem de sucesso da operação e retornará a tela de registro, no entanto sem demonstrar mais o ícone de indicação de itens não cadastrados.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura125.png" data-bs-toggle="modal" data-bs-target="#Imagem125">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura125.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 125 - MODAL -->
                            <div class="modal fade text-center" id="Imagem125" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura125.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 125</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 125 - End --><br>


                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Na grade dos itens selecionados, clique no quadrinho correspondente ao item em que será registrada a quantidade a receber da Ordem de Compra.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo "Qtde. a Receber", informe a quantidade efetivamente recebida da Ordem de Compra, sempre observando o campo "Qtde. total da O.C.".</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">Nos campos "Qtd. Final" e "Valor Unitário Final" é apresentado na cor vermelha a quantidade e valor unitário do item convertido a partir da aplicação do "Fator Multiplicador". Tais valores serão apresentados com 4 casas decimais e poderão ser diferentes dos valores informados nos casos em que a "Unidade de Fornecimento" for diferente da "Unidade de Consumo". Uma vez confirmada a ação de entrada da Ordem de Compra, os valores convertidos serão os que efetivamente entrarão no estoque.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s">Acione o botão "Próximo" para prosseguir com o registro da Ordem de Compra.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura126.png" data-bs-toggle="modal" data-bs-target="#Imagem126">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura126.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 126 - MODAL -->
                            <div class="modal fade text-center" id="Imagem126" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura126.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 126</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 126 - End --><br>


                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Ao acionar o botão "Próximo", o SIGA/SGBM apresentará uma mensagem solicitando a conferência da Ordem de Compra em questão.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Acione o botão "Confirmar" para salvar a Ordem de Compra.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura127.png" data-bs-toggle="modal" data-bs-target="#Imagem127">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura127.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 127 - MODAL -->
                            <div class="modal fade text-center" id="Imagem127" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura127.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 127</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 127 - End --><br>


                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Acionando o botão "Confirmar", o SIGA/SGBM solicitará a confirmação para salvar definitivamente a Ordem de Compra.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura128.png" data-bs-toggle="modal" data-bs-target="#Imagem128">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura128.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 128 - MODAL -->
                            <div class="modal fade text-center" id="Imagem128" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura128.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 128</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 128 - End --><br>

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
                <a href="Topico03.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico03.2.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>