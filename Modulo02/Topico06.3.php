<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico06.3';
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
                        <p class="SubTitulo"> Inventariar Estoque</p>
                        <hr>

                        <br>

                        <p>A ferramenta de apoio ao inventário de estoque, disponível no SIGA/SGBM, baseia-se no inventário com contagens cegas, ou seja, conta-se primeiro o físico e depois se confronta a contagem com o registro escritural para verificar se houve divergência. Para que não haja erro na contagem, o sistema só considera a contagem válida quando houver mais de uma contagem coincidente. Isso implica que haverá no mínimo duas contagens para cada item inventariado.</p>

                        <p>Caso haja divergência entre duas contagens, serão feitas “n” contagens até que haja duas contagens coincidentes. O SIGA indicará os itens a serem contados e receberá o resultado das contagens, controlando as contagens por intermédio de equipes de contagem, de forma que um inventariante não poderá contar o mesmo item em duas contagens sequenciais.</p>

                        <p>A ferramenta de apoio ao inventário, disponível no SIGA, dará apoio às três modalidades de inventário, a saber:</p>

                        <p class="wow fadeInDown"><strong>1) Inventário Geral:</strong> Trata-se do inventário de todos os itens de materiais existentes em estoque, essa modalidade de inventário será utilizada nos inventários de final de exercício contábil, ou seja, anualmente, ou então quando se fizer necessário por questões de controle interno do órgão/entidade.</p>
                        
                        <p class="wow fadeInDown" data-wow-delay="0.6s"><strong>2) Inventário por Grupo:</strong> Trata-se do inventário dos itens de materiais pertencentes a uma determinada classe de materiais, essa modalidade de inventário será utilizada para os órgãos que desejem efetuar o inventário permanente, efetuando contagens periodicamente por grupos de materiais. </p>
                        
                        <p class="wow fadeInDown" data-wow-delay="0.9s"><strong>3) Inventário Específico:</strong> Trata-se do inventário de itens escolhidos pelo gestor do almoxarifado, será utilizado nos inventários de acerto ou para itens de alta rotatividade que necessitam ser inventariados sistematicamente.</p>

                        <p>Para garantir maior controle na realização do inventário, a ferramenta de apoio ao inventário de estoque, disponível no SIGA/SGBM, fará o cadastro das equipes inventariantes. À medida que o inventário é criado, segundo o seu tipo, paralelamente poderão ser cadastradas as pessoas que participarão do inventário, atribuindo a cada contagem um grupo de pessoas que a executará. É prudente que seja cadastrado um número de pessoas suficiente para formar equipes, para realizar a contagem dentro do prazo planejado a realizar o inventário.</p>

                        <p>Em termos metodológicos o inventário de estoque somente será operacionalizado pelo perfil "Gestor" e terá três etapas distintas essas são:</p>
                        <br>
                        <p><strong>A) PAINEL DE CONTROLE DE INVENTÁRIO:</strong></p>
                        <br>
                        <p>Para iniciar a criação de um inventário selecione na barra de menu do SIGA/SGBM, o comando <strong>PROCESSOS >> ALMOXARIFADO >> INVENTÁRIO >> GERENCIAR INVENTÁRIOS</strong>:</p>
                        <br>
                        <br><!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura277.png" data-bs-toggle="modal" data-bs-target="#Imagem277">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura277.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <!-- Imagem 277 - MODAL -->
                        <div class="modal fade text-center" id="Imagem277" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura277.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Figura 277</strong> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 3 - End -->
                        <br>

                        <p>Acionado o comando, na barra de menu, o SIGA/SGBM demonstra um painel de gerenciamento de inventário composto por: um mecanismo de identificação e localização de inventários, uma agenda de execução de inventários e um mecanismo de criação e localização de participantes. </p>

                        <p>A descrição desses controles é apresentada a seguir:</p>

                        <ol>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">No campo “Descrição”, descreva o nome ou parte do nome de um inventário. Esse campo será preenchido para localizar um inventário dentre aqueles já realizados ou em andamento, ou então para criar um novo inventário.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">Acione o botão “Pesquisar” para localizar um inventário cujo nome ou parte do nome de um inventário foi descrito no campo anterior (01 - Descrição).  </li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">Acione o botão “Limpar” para tornar vazia a grade "Inventários Cadastrados".</li>
                            <li class="wow fadeInRight" data-wow-delay="1.3s">Acione o botão “Criar Inventário” para criar um inventário novo a partir do preenchimento do campo anterior (01 - Descrição).</li>
                            <li class="wow fadeInRight" data-wow-delay="1.6s">A grade "Inventários Cadastrados" demonstra dados sobre inventários realizados, assim como permite a execução de uma agenda de controle de um inventário a partir dos ícones localizados na coluna "Ações".</li>
                            <li class="wow fadeInRight" data-wow-delay="1.9s">Etiqueta de exibição do quantitativo de inventários da grade "Inventários Cadastrados", assim como do total ainda a ser exibido.</li>
                            <li class="wow fadeInRight" data-wow-delay="2.0s">Botões de navegação da grade "Inventários Cadastrados".</li>
                            <li class="wow fadeInRight" data-wow-delay="2.3s">No campo "Pessoas: Digite um Nome", descreva o nome completo da pessoa que será cadastrada para participar de inventários.</li>
                            <li class="wow fadeInRight" data-wow-delay="2.6s">No campo "Pessoas: Digite um CPF", descreva o número do CPF da pessoa que será cadastrada para participar de inventários. </li>
                            <li class="wow fadeInRight" data-wow-delay="2.9s">Acione o botão "Cadastrar" para gravar o nome e CPF preenchidos nos campos 08 e 09, respectivamente.</li>
                            <li class="wow fadeInRight" data-wow-delay="3.3s">A grade "Pessoas Cadastradas Neste Almoxarifado" permite o gerenciamento de pessoas que participam de inventários.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura278.png" data-bs-toggle="modal" data-bs-target="#Imagem278">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura278.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 278 - MODAL -->
                            <div class="modal fade text-center" id="Imagem278" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura278.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 278</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 278 - End --><br>
                            <p><strong>B) CRIAR INVENTÁRIO:</strong></p>
                            <p>Para iniciar a criação de um inventário selecione na barra de menu do SIGA/SGBM, o comando <strong>PROCESSOS >> ALMOXARIFADO >> INVENTÁRIO >> GERENCIAR INVENTÁRIOS</strong> </p>
                        </ol>
                        <ol>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Clicando no botão “Criar Inventário”, o SIGA criará um novo inventário para compor a agenda de inventários.</li>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura279.png" data-bs-toggle="modal" data-bs-target="#Imagem279">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura279.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 279- MODAL -->
                            <div class="modal fade text-center" id="Imagem279" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura279.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 279</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 279 - End -->
                            <br><br>

                            <li class="wow fadeInRight" data-wow-delay="0.6s"> Ao clicar no botão "Criar Inventário", o SIGA/SGBM demonstrará o “Almoxarifado Corrente” em que será criado o inventário, a “Data de Abertura” pedirá que seja definido qual o "Tipo de Inventário" a ser realizado, se do tipo GERAL, ESPECÍFICO ou GRUPO. Dependendo da escolha, o SIGA/SGBM habilitará campos correspondentes ao tipo de inventário escolhido.</li>
                        </ol>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura280.png" data-bs-toggle="modal" data-bs-target="#Imagem280">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura280.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 280 - MODAL -->
                            <div class="modal fade text-center" id="Imagem280" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura280.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 280</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 280 - End --><br>
                            <p><strong>B.1) No Caso de Inventário Geral</strong></p>
                            <br>


                            <ol start="6">
                            <li class="wow fadeInRight" data-wow-delay="0.3s">No campo "Descrição", descreva o nome do inventário identificando o tipo de inventário e o mês e ano de realização.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">No campo "Tipo de Inventário", selecione a opção ESPECÍFICO, nessa opção, o SIGA/SGBM habilita o botão “Pesquisar Produtos” para que sejam selecionados os itens específicos que farão parte do inventário.  </li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">Acione o botão "Pesquisar Produtos" para selecionar os itens que farão parte do inventário.</li>


                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura281.png" data-bs-toggle="modal" data-bs-target="#Imagem281">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura281.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 281 - MODAL -->
                            <div class="modal fade text-center" id="Imagem281" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura281.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 281</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 281 - End --><br>
                            <p>Ao acionar o botão "Pesquisar Produtos", o SIGA/SGBM demonstrará uma janela <em>pop-up</em> com os campos de seleção dos itens.</p>

                            <li class="wow fadeInRight" data-wow-delay="0.3s">No campo "Palavra-Chave", descreva uma palavra que fará parte da especificação do item e que possibilite a individualização do mesmo. Você também pode seguir o seguinte processo:</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">No campo "Código", descreva o código de individualização do item.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">Em seguida, acione o botão "Pesquisar Produtos".</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura282.png" data-bs-toggle="modal" data-bs-target="#Imagem282">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura282.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 282 - MODAL -->
                            <div class="modal fade text-center" id="Imagem282" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura282.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 282</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 282 - End --><br>

                            <li class="wow fadeInRight" data-wow-delay="0.3s">Ao ser acionado o botão "Pesquisar Produtos", o SIGA/SGBM demonstrará a grade "Produtos Encontrados".</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">Nessa "grade", marque o quadrinho correspondente ao item que fará parte do inventário. Quando a seleção for realizada somente por "palavra-chave", aparecerá vários itens que possuam a palavra-chave em sua especificação, para que seja selecionado pelo respectivo quadrinho.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">Ao ser acionado o botão "Finalizar", o SIGA/SGBM retornará à janela "Abrir Inventário", incluindo o item selecionado.</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura283.png" data-bs-toggle="modal" data-bs-target="#Imagem283">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura283.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 283 - MODAL -->
                            <div class="modal fade text-center" id="Imagem283" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura283.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 283</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 283 - End --><br>

                            <li class="wow fadeInRight" data-wow-delay="0.3s">Ao ser acionado o botão "Finalizar", o SIGA/SGBM demonstrará a grade "Produtos Selecionados", demonstrando código do produto, descrição e ações.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">Na coluna "Ações", é demonstrado um ícone em formato de "Lixeira" que, se acionado, apaga o item da referida grade.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">Clicando no botão "Pesquisar Produtos", o SIGA/SGBM recomeça os procedimentos dos itens 09 ao 13, adicionando mais itens à grade "Produtos Selecionados".</li>
                            <li class="wow fadeInRight" data-wow-delay="1.3s">Clicando no botão "Criar inventário", é criado um inventário específico com os itens constantes na grade "Produtos Selecionados".</li>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura284.png" data-bs-toggle="modal" data-bs-target="#Imagem284">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura284.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 284 - MODAL -->
                            <div class="modal fade text-center" id="Imagem284" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura284.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 284</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 284 - End --><br>
                            <p><strong>B.2) No Caso de Inventário Por Grupo</strong></p>

                            <li class="wow fadeInRight" data-wow-delay="0.3s">No campo "Descrição", descreva o nome do inventário, identificando o tipo de inventário e o mês e ano de realização.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">No campo "Tipo de Inventário", selecione a opção GRUPO, nessa opção o SIGA/SGBM habilita o botão “Pesquisar Produtos”, para que sejam selecionados os itens específicos que farão  parte do inventário. </li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">No campo "Grupo", selecione o grupo de materiais do Catálogo de Bens, Materiais e Serviços do qual será efetuado o inventário.</li>
                            <li class="wow fadeInRight" data-wow-delay="1.3s">Acione o botão "Criar inventário" para que o inventário seja inserido na "Agenda de Inventários".</li>


                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura285.png" data-bs-toggle="modal" data-bs-target="#Imagem285">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" src="imagens/Figura285.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 285 - MODAL -->
                            <div class="modal fade text-center" id="Imagem285" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura285.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 285</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 285 - End --><br>

                            <li class="wow fadeInRight" data-wow-delay="0.9s">Qualquer que seja o "Tipo de Inventário" criado, o SIGA/SGBM gera uma agenda de inventário na grade "Inventários Cadastrados", de onde será  gerenciada a execução do inventário em todas as suas etapas.</li>
                            <li class="wow fadeInRight" data-wow-delay="1.3s">Na coluna "Ações" da referida grade, são apresentados vários ícones que estarão sendo habilitados à medida que o inventário evolui na sua execução, o primeiro deles, em formato de "Botão", ativa o inventário, ou seja, inicia a sua execução.</li>
                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura286.png" data-bs-toggle="modal" data-bs-target="#Imagem286">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura286.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 286 - MODAL -->
                            <div class="modal fade text-center" id="Imagem286" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura286.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 286</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 286 - End --><br>
                        </ol>
                        <br>
                        <ol>
                            <p><strong>C) Cadastrar as Equipes de Contagem</strong></p>
                            <br>
                            <p>Para cadastrar as pessoas que participarão do inventário deverá ser acionado na barra de menu do SIGA/SGBM o comando: <strong>PROCESSOS >> ALMOXARIFADO >> INVENTÁRIO >> GERENCIAR INVENTÁRIOS</strong>: </p>
                            <br>
                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura287.png" data-bs-toggle="modal" data-bs-target="#Imagem287">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura287.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 287 - MODAL -->
                            <div class="modal fade text-center" id="Imagem287" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura287.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 287</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 287 - End --><br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Acionado o comando, na barra de menu, o SIGA/SGBM demonstra o painel de controle "Gerenciar Inventários". No canto direito do painel, é apresentada a seção "Pessoas".</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura288.png" data-bs-toggle="modal" data-bs-target="#Imagem288">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura288.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 288 - MODAL -->
                            <div class="modal fade text-center" id="Imagem288" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura288.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 288</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- Imagem 288 - End --><br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">No campo "Digite um Nome", insira o nome da pessoa a ser cadastrada.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">No campo "Digite um CPF", insira o número do CPF da pessoa a ser cadastrada. </li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">Acione o botão "Cadastrar" para gravar o nome e CPF preenchidos nos campos 02 e 03, respectivamente.</li>
                            <li class="wow fadeInRight" data-wow-delay="1.3s">A grade "Pessoas Cadastradas Neste Almoxarifado", permite o gerenciamento de pessoas que participarão de inventários.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">No ícone, em formato de "Botão", logo abaixo do nome da pessoa cadastrada, permite desativar a pessoa para participar de inventários.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">No ícone em formato de "Lixeira", permite excluir a pessoa do cadastro de participantes do inventário. </li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura289.png" data-bs-toggle="modal" data-bs-target="#Imagem289">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura289.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 289 - MODAL -->
                            <div class="modal fade text-center" id="Imagem289" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura289.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 289</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>

                        </ol>
                        <br>
                        <ol>
                            <p><strong>D) Realizar Inventário</strong></p>
                            <br>
                            <p>Após clicar no botão “Criar Inventário” (conforme passos anteriores - 18 e 22), seja qual for a modalidade de inventário, o SIGA/SGBM apresentará uma legenda associada ao Status e às Ações relativas ao inventário iniciado. </p>
                            <br>
                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura290.png" data-bs-toggle="modal" data-bs-target="#Imagem290">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura290.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 290 - MODAL -->
                            <div class="modal fade text-center" id="Imagem290" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura290.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 290</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 290 - End --><br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s"> O ícone em formato de "Botão" indica que o inventário foi criado, mas ainda não foi ativado e não foram atribuídas a este as duas contagens iniciais do inventário. Para ativar o inventário, basta clicar neste ícone.</li>
                            <br>
                            <!-- Fique Atento -->
                            <div class="FiqueAtentoCaixa">
                                <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                <div class="FiqueAtentoTexto">
                                    <p>Caso seja necessário, por qualquer inconveniência, desativar  um determinado inventário que já foi ativado, basta clicar novamente nesse ícone para reverter a situação do inventário.</p>
                                </div>
                            </div>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura291.png" data-bs-toggle="modal" data-bs-target="#Imagem291">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura291.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 291 - MODAL -->
                            <div class="modal fade text-center" id="Imagem291" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura291.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 291</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- Imagem 291 - End --><br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Ao clicar no botão que ativa as “Ações”, todos os ícones ficarão habilitados e passarão a ficar coloridos. Isso indica que o inventário está em curso.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura292.png" data-bs-toggle="modal" data-bs-target="#Imagem292">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura292.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 292 - MODAL -->
                            <div class="modal fade text-center" id="Imagem292" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura292.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 292</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">O ícone em formato de "Pilha de Caixas" indica que o inventário acabou de ser ativado e necessita que sejam atribuídas às equipes de inventário, e registrado no sistema o resultado das contagens executadas. Enquanto as duas contagens estiverem sendo executadas, o inventário permanecerá nesse Status. Clicando nesse ícone, serão formadas as equipes de contagem.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura293.png" data-bs-toggle="modal" data-bs-target="#Imagem293">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura293.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 293 - MODAL -->
                            <div class="modal fade text-center" id="Imagem293" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura293.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 293</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <p>Uma vez acionado o ícone “Contagem”, será demonstrada a tela abaixo com as duas contagens iniciais do inventário, para que as equipes de contagem sejam definidas:</p>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Clicando no ícone “Criar Equipe”, poderão ser formadas as equipes de contagem com as pessoas que foram previamente cadastradas no painel “Pessoas”, visto anteriormente.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura294.png" data-bs-toggle="modal" data-bs-target="#Imagem294">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura294.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 294 - MODAL -->
                            <div class="modal fade text-center" id="Imagem294" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura294.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 294</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">No campo "Coordenador", escolha o nome do coordenador do inventário. Clicando na seta ao lado do campo, será demonstrada uma relação de nomes com o perfil de “Gestor”, que é o perfil que tem acesso a essa funcionalidade.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura295.png" data-bs-toggle="modal" data-bs-target="#Imagem295">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura295.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 295 - MODAL -->
                            <div class="modal fade text-center" id="Imagem295" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura295.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 295</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Acionando o botão "Alterar'', poderá ser alterado o nome do coordenador da equipe.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">No campo "Pessoas Disponíveis", escolha, na relação de pessoas disponíveis, à esquerda da tela, clicando no quadrinho, aquelas que comporão a equipe de contagem que está sendo editada.  </li>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Em seguida, clique no botão “Seta”, passando a pessoa selecionada, no campo "Pessoas Disponíveis", para o campo "Pessoas Selecionadas".</li>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">No campo "Pessoas Selecionadas", clique no quadrinho ao lado do nome da pessoa, em seguida, clique no botão “Salvar Equipe”.</li>
                            <br>
                            <!-- Fique Atento -->
                            <div class="FiqueAtentoCaixa">
                                <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                <div class="FiqueAtentoTexto">
                                    <p>Será formada somente uma equipe para realização de uma contagem. A cada contagem esse processo se repetirá, podendo o coordenador do inventário compor equipes diferentes a cada contagem. Será necessário no mínimo duas pessoas por equipe.</p>
                                </div>
                            </div>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura296.png" data-bs-toggle="modal" data-bs-target="#Imagem296">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura296.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 296 - MODAL -->
                            <div class="modal fade text-center" id="Imagem296" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura296.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 296</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Acionado o botão “Salvar Equipe”, será demonstrada a mensagem de sucesso da operação, e será apresentado, na coluna "Acompanhamentos" da tela "Contagens", o ícone em azul “Abrir Contagem” para iniciar a contagem em evidência.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura297.png" data-bs-toggle="modal" data-bs-target="#Imagem297">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura297.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 297 - MODAL -->
                            <div class="modal fade text-center" id="Imagem297" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura297.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 297</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <p>Para a contagem em evidência (Contagem 1), após ser acionado o ícone "Abrir Contagem", na coluna "Acompanhamentos", ficarão disponíveis os demais  ícones  referentes ao acompanhamento do inventário</p>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s"> Na coluna "Imprimir", clique sobre o ícone de cor laranja para imprimir o “Relatório Gabarito para Contagem de Inventário", assim o status da contagem passará de "Pendente" para "Aberta".</li>
                            <br>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura298.png" data-bs-toggle="modal" data-bs-target="#Imagem298">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura298.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 298 - MODAL -->
                            <div class="modal fade text-center" id="Imagem298" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura298.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 298</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Acionado o ícone "Gabarito para Contagem de Inventário", o relatório será impresso em quantas vias se façam necessárias para distribuição entre os participantes da equipe de contagem. De posse do Relatório, no campo “Qtde.", o participante escreverá o resultado da contagem que será posteriormente digitado no SIGA/SGBM.</li>
                            <br>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura299.png" data-bs-toggle="modal" data-bs-target="#Imagem299">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura299.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 299 - MODAL -->
                            <div class="modal fade text-center" id="Imagem299" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura299.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 299</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Uma vez efetuada a contagem em campo, o “Relatório Gabarito de Contagem de Inventário'' deve ser digitado no SIGA/SGBM, basta clicar no ícone “Editar Dados” e o sistema abrirá uma tela para a digitação do relatório.</li>
                            <br>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura300.png" data-bs-toggle="modal" data-bs-target="#Imagem300">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura300.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 300 - MODAL -->
                            <div class="modal fade text-center" id="Imagem300" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura300.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 300</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <p>Após clicar no ícone “Editar Dados”, o “Relatório de Conferência da Contagem 1” deve ser digitado no SIGA.</p>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Digite no campo “Qtde. Física” a quantidade do item constante no “Relatório de Gabarito de Contagem de Inventário”, que foi resultante da contagem em campo. </li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">Em seguida, clique no botão “Finalizar Editar Dados”.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura301.png" data-bs-toggle="modal" data-bs-target="#Imagem301">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura301.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 301 - MODAL -->
                            <div class="modal fade text-center" id="Imagem301" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura301.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 301</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Acionado o botão “Finalizar Editar Dados”, na tela anterior, será demonstrada a mensagem de confirmação da operação, restando finalizar a contagem para que o SIGA/SGBM inicie a “Contagem 2”.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura302.png" data-bs-toggle="modal" data-bs-target="#Imagem302">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura302.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 302 - MODAL -->
                            <div class="modal fade text-center" id="Imagem302" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura302.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 302</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">Acionado o botão “OK”, na janela "pop-up", o SIGA/SGBM atualizará o "Status" da contagem de "Aberta" para "Fechada" e disponibilizará o "Resultado de Contagem de Inventário''. A partir desse "Status" poderá ser iniciada a Contagem 2.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura303.png" data-bs-toggle="modal" data-bs-target="#Imagem303">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura303.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 303 - MODAL -->
                            <div class="modal fade text-center" id="Imagem303" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura303.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 303</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura304.png" data-bs-toggle="modal" data-bs-target="#Imagem304">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura304.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 304 - MODAL -->
                            <div class="modal fade text-center" id="Imagem304" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura304.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 304</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <p>Uma vez finalizada a “Contagem 1” poderá ser iniciada a "Contagem 2".</p>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Clicando no ícone “Criar Equipe” poderão ser formadas novamente as equipes de contagem com as pessoas que foram previamente cadastradas no painel “Pessoas”, visto anteriormente.  No entanto, vale salientar que a equipe da Contagem 2 não poderão ser as mesmas pessoas que efetuaram a Contagem 1.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura305.png" data-bs-toggle="modal" data-bs-target="#Imagem305">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura305.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 305 - MODAL -->
                            <div class="modal fade text-center" id="Imagem305" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura305.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 305</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">No campo "Coordenador", escolha o nome do coordenador do inventário. Clicando na seta ao lado do campo será demonstrada uma relação de nomes com o perfil de "Gestor'', que corresponde ao perfil que tem acesso a funcionalidade de inventário.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura306.png" data-bs-toggle="modal" data-bs-target="#Imagem306">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura306.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 306 - MODAL -->
                            <div class="modal fade text-center" id="Imagem306" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura306.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 306</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Acionando o botão “Alterar” poderá ser alterado o nome do coordenador da equipe.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">No campo "Pessoas Disponíveis", escolha na relação de pessoas disponíveis, à esquerda da tela, clicando no quadrinho, aquelas que comporão a equipe de contagem que está sendo editada. </li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">Em seguida, clique no botão “Seta”, passando a pessoa selecionada ,no campo "Pessoas Disponíveis", para o campo "Pessoas Selecionadas".</li>
                            <li class="wow fadeInRight" data-wow-delay="1.3s">No campo "Pessoas Selecionadas", clique no quadrinho ao lado do nome da pessoa, em seguida, clique no botão “Salvar Equipe”.</li>
                            <li class="wow fadeInRight" data-wow-delay="1.6s">Ao acionar o botão "Salvar Equipe", é finalizada a edição da equipe de contagem.</li>
                            <br>
                            <!-- Fique Atento -->
                            <div class="FiqueAtentoCaixa">
                                <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                <div class="FiqueAtentoTexto">
                                    <p>Será formada somente uma equipe para realização de uma contagem. A cada contagem esse processo se repetirá, podendo o coordenador do inventário compor equipes diferentes a cada contagem. Será necessário no mínimo duas pessoas por equipe.</p>
                                </div>
                            </div>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura307.png" data-bs-toggle="modal" data-bs-target="#Imagem307">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura307.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 307 - MODAL -->
                            <div class="modal fade text-center" id="Imagem307" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura307.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 307</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Acionado o botão “Salvar Equipe”, será demonstrada a mensagem de sucesso da operação, e será apresentado, na coluna "Acompanhamentos" da tela "Contagens", o ícone em azul “Abrir Contagem” para iniciar a contagem em evidência.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura308.png" data-bs-toggle="modal" data-bs-target="#Imagem308">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura308.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 308 - MODAL -->
                            <div class="modal fade text-center" id="Imagem308" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura308.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 308</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <p>Para a contagem em evidência “Contagem 2”, após ser acionado o ícone "Abrir Contagem", na coluna "Acompanhamentos", ficarão disponíveis os demais  ícones  referentes ao acompanhamento do inventário</p>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">Na coluna "Imprimir", clique sobre o ícone de cor laranja para imprimir o relatório "Gabarito para Contagem de Inventário", assim o status da contagem passará de "Pendente" para "Aberta".</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura309.png" data-bs-toggle="modal" data-bs-target="#Imagem309">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura309.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 309 - MODAL -->
                            <div class="modal fade text-center" id="Imagem309" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura309.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 309</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Acionado o ícone "Gabarito para Contagem de Inventário", o relatório será impresso em quantas vias se façam necessárias para distribuição entre os participantes da equipe de contagem. De posse do Relatório, no campo “Qtde.”, o participante escreverá o resultado da contagem que será posteriormente digitada no SIGA/SGBM.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura310.png" data-bs-toggle="modal" data-bs-target="#Imagem310">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura310.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 310 - MODAL -->
                            <div class="modal fade text-center" id="Imagem310" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura310.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 310</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <p>Após clicar no ícone “Editar Dados”, o Relatório "Gabarito para Contagem de Inventário" da “Contagem 2” deve ser digitado no SIGA.</p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura311.png" data-bs-toggle="modal" data-bs-target="#Imagem311">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura311.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 311 - MODAL -->
                            <div class="modal fade text-center" id="Imagem311" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura311.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 311</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Digite no campo “Qtde. Física” a quantidade do item constante no “Relatório de Gabarito de Contagem de Inventário”, que foi resultante da contagem em campo.  </li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">Em seguida, clique no botão “Finalizar Editar Dados”.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura312.png" data-bs-toggle="modal" data-bs-target="#Imagem312">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura312.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 312 - MODAL -->
                            <div class="modal fade text-center" id="Imagem312" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura312.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 312</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">Acionado o botão “Finalizar Editar Dados”, na tela anterior, será demonstrada a mensagem de confirmação da operação, restando finalizar a contagem para que o SIGA/SGBM inicie o confronto entre "Contagem 1" e “Contagem 2”. </li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura313.png" data-bs-toggle="modal" data-bs-target="#Imagem313">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura313.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 313 - MODAL -->
                            <div class="modal fade text-center" id="Imagem313" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura313.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 312</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="1.3s">Acionado o botão “OK”, na janela "pop-up", o SIGA/SGBM atualizará o "Status" da contagem de "Aberta" para "Fechada" e disponibilizará o "Resultado de Contagem de Inventário''. A partir desse "Status", poderá ser iniciada a verificação entre a “Contagem 1” e a “Contagem 2''. </li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura314.png" data-bs-toggle="modal" data-bs-target="#Imagem314">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura314.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 314 - MODAL -->
                            <div class="modal fade text-center" id="Imagem314" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura314.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 314</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura315.png" data-bs-toggle="modal" data-bs-target="#Imagem315">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura315.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 315 - MODAL -->
                            <div class="modal fade text-center" id="Imagem315" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura315.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 315</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Estando a “Contagem 1” e a “Contagem 2'' com o status "Fechada", já é possível fazer a verificação por intermédio do SIGA/SGBM para apurar diferenças entre contagens.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">Acione o botão “Ir para Verificação” para processar o confronto entre a “Contagem 1” e a “Contagem 2''. </li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura316.png" data-bs-toggle="modal" data-bs-target="#Imagem316">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura316.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 316 - MODAL -->
                            <div class="modal fade text-center" id="Imagem316" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura316.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 316</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">Ao acionar o botão "Ir para Verificação" o Siga/Sgbm apresentará a janela "Verificações" com a grade especificando a "Verificação1" em evidência cujo Status e o Resultado apresentam o valor "não Processado".</li>
                            <li class="wow fadeInRight" data-wow-delay="1.3s">Acionar o ícone azul em formato de “Engrenagens” para processar a verificação entre a Contagem 1 e a Contagem 2. </li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura317.png" data-bs-toggle="modal" data-bs-target="#Imagem317">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura317.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 317 - MODAL -->
                            <div class="modal fade text-center" id="Imagem317" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura317.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 317</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Ao acionar o ícone azul em formato de “Engrenagens”, o SIGA/SGBM altera o status da "Verificação 1" para "Finalizada".</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">Da mesma forma, na coluna "Resultado", o SIGA/SGBM alerta se houve conflito ou não entre a “Contagem 1” e a “Contagem 2”. </li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">Havendo conflito, automaticamente o SIGA/SGBM cria uma nova verificação (Verificação 2), da qual se originará uma “Contagem 3''. O status da referida verificação apresentará o status "Aguardando Contagem".</li>
                            <li class="wow fadeInRight" data-wow-delay="1.3s">Na coluna "Detalhamento", será apresentado um ícone verde em formato de "três pontos sequenciais", ao ser acionado exibirá os detalhes do conflito. </li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura318.png" data-bs-toggle="modal" data-bs-target="#Imagem318">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura318.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 318 - MODAL -->
                            <div class="modal fade text-center" id="Imagem318" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura318.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 318</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Acionado o ícone verde em formato de "três pontos sequenciais", o SIGA/SGBM apresenta o detalhamento das “Contagens 1 e 2”, para que seja analisada a razão dos conflitos.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">Acione o botão "Fechar Visualização" para retornar somente à tela "Verificações".</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura319.png" data-bs-toggle="modal" data-bs-target="#Imagem319">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura319.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 319 - MODAL -->
                            <div class="modal fade text-center" id="Imagem319" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura319.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 319</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.9s"> Acione o botão "Voltar para Inventários" para iniciar o processo da “Contagem 3”, para dirimir as divergências entre “Contagens 1 e 2”.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura320.png" data-bs-toggle="modal" data-bs-target="#Imagem320">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura320.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 320 - MODAL -->
                            <div class="modal fade text-center" id="Imagem320" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura320.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 320</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Uma vez identificado a ocorrência de conflito entre "Contagem 1" e "Contagem 2", o SIGA/SGBM acrescenta, na grade "Contagens", mais uma linha correspondente à "Contagem 3".</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">Clicando no ícone “Criar Equipe”, poderá ser formada novamente as equipes de contagem com as pessoas que foram previamente cadastradas no painel “Pessoas”, visto anteriormente.  Vale salientar que estarão disponíveis todos os componentes disponíveis para formação da equipe da “Contagem 3”.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura321.png" data-bs-toggle="modal" data-bs-target="#Imagem321">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura321.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 321 - MODAL -->
                            <div class="modal fade text-center" id="Imagem321" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura321.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 321</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">No campo "Coordenador", escolha o nome do coordenador do inventário. Clicando na seta ao lado do campo, será demonstrada uma relação de nomes com o perfil de “Gestor”, que é o perfil que tem acesso a funcionalidade de inventário.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura322.png" data-bs-toggle="modal" data-bs-target="#Imagem322">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura322.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 322 - MODAL -->
                            <div class="modal fade text-center" id="Imagem322" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura322.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 322</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">No campo "Pessoas Disponíveis", escolha na relação de pessoas disponíveis, à esquerda da tela, clicando no quadrinho, aquelas que comporão a equipe de contagem que está sendo editada.  </li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">Em seguida, clique no botão “Seta”, passando a pessoa selecionada, no campo "Pessoas Disponíveis", para o campo "Pessoas Selecionadas". </li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">No campo "Pessoas Selecionadas", clique no quadrinho ao lado do nome da pessoa, em seguida, clique no botão “Salvar Equipe”. </li>
                            <li class="wow fadeInRight" data-wow-delay="1.3s">Ao acionar o botão "Salvar Equipe", é finalizada a edição da equipe de contagem. </li>
                            <br>
                            <!-- Fique Atento -->
                            <div class="FiqueAtentoCaixa">
                                <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                <div class="FiqueAtentoTexto">
                                    <p>Será formada somente uma equipe para realização de uma contagem. A cada contagem esse processo se repetirá, podendo o coordenador do inventário compor equipes diferentes a cada contagem. Será necessário no mínimo duas pessoas por equipe.</p>
                                </div>
                            </div>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura323.png" data-bs-toggle="modal" data-bs-target="#Imagem323">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura323.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 323 - MODAL -->
                            <div class="modal fade text-center" id="Imagem323" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura323.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 323</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Acionado o botão “Salvar Equipe”, será demonstrado a mensagem de sucesso da operação e será apresentado, na coluna "Acompanhamentos" da tela "Contagens", o ícone em azul “Abrir Contagem” para iniciar a contagem em evidência. </li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura324.png" data-bs-toggle="modal" data-bs-target="#Imagem324">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura324.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 324 - MODAL -->
                            <div class="modal fade text-center" id="Imagem324" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura324.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 324</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <p>Para a contagem em evidência “Contagem 3”, após ser acionado o ícone "Abrir Contagem", na coluna "Acompanhamentos", ficarão disponíveis os demais  ícones  referentes ao acompanhamento do inventário</p>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Na coluna "Imprimir", clique sobre o ícone de cor laranja para imprimir o relatório "Gabarito para Contagem de Inventário", assim o status da contagem passará de "Pendente" para "Aberta". </li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura325.png" data-bs-toggle="modal" data-bs-target="#Imagem325">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura325.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 325 - MODAL -->
                            <div class="modal fade text-center" id="Imagem325" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura325.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 325</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">Acionado o ícone "Gabarito para Contagem de Inventário", o relatório será impresso em quantas vias se façam necessárias para distribuição entre os participantes da equipe de contagem. De posse do Relatório, no campo “Qtde.”, o participante escreverá o resultado da contagem que será posteriormente digitada no SIGA/SGBM.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura326.png" data-bs-toggle="modal" data-bs-target="#Imagem326">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura326.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 326 - MODAL -->
                            <div class="modal fade text-center" id="Imagem326" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura326.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 326</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Uma vez efetuada a contagem em campo, o “Relatório Gabarito de Contagem de Inventário” deve ser digitado no SIGA/SGBM, para isso basta clicar no ícone “Editar Dados” e o sistema abrirá uma tela para a digitação do relatório.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura327.png" data-bs-toggle="modal" data-bs-target="#Imagem327">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura327.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 327 - MODAL -->
                            <div class="modal fade text-center" id="Imagem327" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura327.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 327</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <p>Após clicar no ícone “Editar Dados” SIGA abre uma janela para digitação do “Relatório Gabarito de Contagem de Inventário".</p>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Digitar, no campo “Qtde. Física”, a quantidade do item constante no "Relatório de Gabarito de Contagem de Inventário”, que foi resultante da contagem em campo.  </li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">Em seguida, clique no botão “Finalizar Editar Dados”.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura328.png" data-bs-toggle="modal" data-bs-target="#Imagem328">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura328.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 328 - MODAL -->
                            <div class="modal fade text-center" id="Imagem328" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura328.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 328</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Acionado o botão “Finalizar Editar Dados”, na tela anterior, será demonstrada a mensagem de confirmação da operação, restando finalizar a contagem para que o SIGA/SGBM inicie o confronto entre "Contagem 3" e as demais contagens anteriores (Contagem 1 e Contagem 2).</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura329.png" data-bs-toggle="modal" data-bs-target="#Imagem329">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura329.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 329 - MODAL -->
                            <div class="modal fade text-center" id="Imagem329" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura329.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 329</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Estando a “Contagem 1”, “Contagem 2” e “Contagem 3” com o status "Fechada", já é possível fazer a verificação por intermédio do SIGA/SGBM, para apurar diferenças entre contagens.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">Acione o botão “Ir para Verificação” para processar o confronto entre a “Contagem 1” e a “Contagem 2”.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura330.png" data-bs-toggle="modal" data-bs-target="#Imagem330">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura330.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 330 - MODAL -->
                            <div class="modal fade text-center" id="Imagem330" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura330.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 330</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">Ao acionar o botão "Ir para Verificação", o SIGA/SGBM apresentará a janela "Verificações" com a grade especificando a "Verificação 2" em evidência cujo Status e o Resultado apresentam o valor "Não Processado".</li>
                            <li class="wow fadeInRight" data-wow-delay="1.3s">Acione o ícone azul em formato de “Engrenagens” para processar a verificação entre a “Contagem 1”, “Contagem 2 “ e “Contagem 3”.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura331.png" data-bs-toggle="modal" data-bs-target="#Imagem331">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura331.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 331 - MODAL -->
                            <div class="modal fade text-center" id="Imagem331" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura331.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 331</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Ao acionar o ícone azul em formato de “Engrenagens”, o SIGA/SGBM altera o status da "Verificação 1" para "Finalizada".</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">Da mesma forma, na coluna "Resultado", o SIGA/SGBM alerta que a “Contagem 3” coincidiu com uma das contagens anteriores (Contagem 1 e  Contagem 2), considerando "correto" o resultado das contagens.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">Não havendo conflito, automaticamente o SIGA/SGBM não adiciona mais uma verificação, e acionando o ícone, na coluna "Detalhamento", é possível verificar onde houve coincidências entre as contagens.</li>
                            <li class="wow fadeInRight" data-wow-delay="1.3s">Não havendo conflito, o SIGA/SGBM habilita o botão "Resumo Final".</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura332.png" data-bs-toggle="modal" data-bs-target="#Imagem332">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura332.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 332 - MODAL -->
                            <div class="modal fade text-center" id="Imagem332" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura332.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 332</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="1.8s">Acionado o ícone, na coluna "Detalhamento", verifica-se que a coincidência entre contagens ocorreu entre a "Contagem 1" e a "Contagem 3".</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura333.png" data-bs-toggle="modal" data-bs-target="#Imagem333">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura333.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 333 - MODAL -->
                            <div class="modal fade text-center" id="Imagem333" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura333.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 333</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Ao acionar o botão "Resultado Final", o SIGA/SGBM apresentará a janela "Finalizar", demonstrando o resultado físico das contagens dos materiais envolvidos no inventário, e a quantidade constante no registro escritural do sistema.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">Apresenta também a situação entre o que foi contado e o que existe no registro, no caso do exemplo abaixo, um conflito entre físico e saldo.</li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">No campo “Justificativa para Ajuste", quando houver, descreva a justificativa do acerto que será realizado no registro escritural.</li>
                            <li class="wow fadeInRight" data-wow-delay="1.3s">Ao acionar o botão "Finalizar Inventário", o sistema ajustará o saldo (Qtde. no sistema), considerando a quantidade resultante das contagens físicas.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura334.png" data-bs-toggle="modal" data-bs-target="#Imagem334">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura334.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 334 - MODAL -->
                            <div class="modal fade text-center" id="Imagem334" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura334.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 334</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <li class="wow fadeInRight" data-wow-delay="0.3s">Ao acionar o botão "Finalizar Inventário", o sistema demonstrará a janela "Relatório Final" com a situação do inventário como "Fechado"</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">Ao acionar o botão "Relatório", será emitido o relatório para a documentação do resultado final do inventário.</li>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura335.png" data-bs-toggle="modal" data-bs-target="#Imagem335">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura335.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 335 - MODAL -->
                            <div class="modal fade text-center" id="Imagem335" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura335.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 335</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura336.png" data-bs-toggle="modal" data-bs-target="#Imagem336">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="700" src="imagens/Figura336.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 336 - MODAL -->
                            <div class="modal fade text-center" id="Imagem336" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura336.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 336</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                <a href="Topico06.2.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico06.4.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>