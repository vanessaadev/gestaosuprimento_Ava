    <!-- PLUGIN DO FADE IN -->

    <style>
        .MenuTopico {
            color: #274F23 !important;
            font-weight: bold !important;
        }

        #menuNumero {
            color: #274F23;
            font-weight: bold !important;
            font-size: 1.2rem;
            padding-right: 0.3rem;
            margin-left: 0;
            margin-right: 0.4rem;
            font-family: "Raleway";
            right: 0.8rem;
            margin-top: -0.23rem;
        }

        .ativo {
            background-color: #e1ebe3;
        }
    </style>

    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active ps">
                <div class="m-4 mx-auto text-center">
                    <!-- <a href="index.php">
                    <img class="img-fluid" src="https://atilasilvalima.a2hosted.com/projects/EGPCE/Cedis/cdn/imagens/egpce.png" alt="Logo EGPCE">
                    </a> -->
                    <img class="img-fluid img-responsive" src="https://www.egp.ce.gov.br/wp-content/uploads/sites/8/2021/06/logo-egpce-250x170-1.png" height="140" width="140" alt="Logo EGPCE">
                </div>
                <div class="sidebar-menu">

                    <ul class="menu ms-3">

                        <li class="sidebar-item">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="index.php" class="MenuTopico sidebar-link <?php if($page=='index'){echo'ativo';}?>"><span id="menuNumero"> </span>Apresentação </a>
                            </div>
                        </li>

                        <li class="sidebar-item sidebar-item1">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="Topico01.php" class="MenuTopico sidebar-link <?php if($page=='Topico01'){echo 'ativo';}?>">
                                    <div id="menuNumero">01 </div>Critérios para Certificação de Fornecedores:
                                </a>

                                <ul class="sublinks">
                                 <li><a href="#one">1.1 A Certificação de Fornecedores como um Elo nas Cadeias de Suprimentos</a></li>
                                 
                                 <li><a href="#two">1.2 A Certificação de Fornecedores na Administração Pública</a></li>
                                 <li><a href="#tree">1.3 A Certificação de Fornecedores no Governo do Estado do Ceará</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-item sidebar-item2">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="Topico02.php" class="MenuTopico sidebar-link <?php if($page=='Topico02'){echo 'ativo';}?>">
                                    <div id="menuNumero">02 </div>Diferenciação entre Material de Consumo e Material Permanente
                                </a>

                                <ul class="sublinks">
                                 <li><a href="#top2-one">2.1 Parâmetros Excludentes: Análise de Casos e Empregos Específicos</a></li>
                                 
                                 <li><a href="#top2-two">2.2 Exemplos de Itens Considerados Materiais Permanentes</a></li>
                                 <li><a href="#top2-tree">2.3 Exemplos de Itens Considerados Materiais de Consumo</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-item sidebar-item3">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="Topico03.php" class="MenuTopico sidebar-link <?php if($page=='Topico03'){echo 'ativo';}?>">
                                    <div id="menuNumero">03 </div>Classificação e Catalogação de Materiais
                                </a>

                                <ul class="sublinks">
                                 <li><a href="#top3-one">3.1 Atributos Adicionais a Serem Considerados na Classificação de Materiais</a></li>
                                 
                                 <li><a href="#top3-two">3.2 Formas de Classificação de Materiais</a></li>
                                 <li><a href="#top3-tree">3.3 Estrutura Básica de um Catálogo de Bens, Materiais e Serviços</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-item sidebar-item4">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="Topico04.php" class="MenuTopico sidebar-link <?php if($page=='Topico04'){echo 'ativo';}?>">
                                    <div id="menuNumero">04 </div>Controle de Estoque e Ressuprimento de Materiais
                                </a>

                                <ul class="sublinks">
                                 <li><a href="#top4-one">4.1 Razões para Manter Estoques e quais os Tipos de Estoque</a></li>
                                 <li><a href="#top4-two">4.2 Custos Relacionados aos Estoques</a></li>
                                 <li><a href="#top4-tree">4.3 Tipos de Demanda de Materiais e sua Relação com os Estoques</a></li>
                                 <li><a href="#top4-four">4.4 Rotatividade dos Estoques</a></li>
                                 <li><a href="#top4-five">4.5 Ressuprimento dos Estoques</a></li>
                                 <li><a href="#top4-six">4.5 Recebimento de Materiais</a></li>
                                  </ul>
                            </div>
                        </li>
                        <li class="sidebar-item sidebar-item5">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="Topico05.php" class="MenuTopico sidebar-link <?php if($page=='Topico05'){echo 'ativo';}?>">
                                    <div id="menuNumero">05 </div>Gestão da Armazenagem
                                </a>

                                <ul class="sublinks">
                                 <li><a href="#top5-one">5.1 Arranjo Físico (Layout) de Armazéns</a></li>
                                 
                                 <li><a href="#top5-two">5.2  O que Considerar para a Definição do Layout:</a></li>
                                 <li><a href="#top5-tree">5.3 Modalidades para Localizar o Estoque Dentro do Armazém</a></li>
                                 <li><a href="#top5-four">5.4 Características do Layout que Facilitam a Movimentação dos Materiais</a></li>
                                 <li><a href="#top5-five">5.5 Situações que Influenciam a Atualização do Layout</a></li>
                                 <li><a href="#top5-six">5.6 O Que é um Sistema de Endereçamento?</a></li>
                                 <li><a href="#top5-seven">5.7 Tipos de endereçamento</a></li>
                                 <li><a href="#top5-eight">5.8 Características das Sinalizações em um Sistema de Endereçamento</a></li>
                                 <li><a href="#top5-nine">5.9 A Importância da Adoção de um Sistema de Movimentação e Manuseio </a></li>
                                 <li><a href="#top5-ten">5.10 Tipos de Movimentação e suas Características: </a></li>
                                 <li><a href="#top5-eleven">5.11 Premissas para Facilitar a Movimentação de Materiais: </a></li>
                                 <li><a href="#top5-twelve">5.12 A Escolha de um Sistema de Movimentação de Materiais: </a></li>
                                 <li><a href="#top5-thirteen">5.13 Equipamentos Utilizados nos Sistemas de Movimentação de Materiais: </a></li>
                                 <li><a href="#top5-fourteen">5.14 Inventários: </a></li>

                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-item sidebar-item6">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="Topico06.php" class="MenuTopico sidebar-link <?php if($page=='Topico06'){echo 'ativo';}?>">
                                    <div id="menuNumero">06 </div>Legislação do almoxarifado
                                </a>

                                <ul class="sublinks">
                                 <li><a href="#top6-one">Legislação Federal</a></li>
                                 
                                 <li><a href="#top6-two">6.1 lei Nº 4.320, de março de 1964:</a></li>
                                 <li><a href="#top6-tree">6.1.2 portaria Nº 448 stn, DE 13 DE SETEMBRO DE 2002.</a></li>
                                 <li><a href="#top6-four">6.2 Legislação Estadual.</a></li>
                                 <li><a href="#top6-five">6.2.1 decreto Nº 27.786, de 02 de maio de 2005.</a></li>
                                 <li><a href="#top6-six">6.2.2 decreto Nº 31.549, de 13 de Agosto de 2014.</a></li>
                                 <li><a href="#top6-seven">6.2.3 decreto Nº 32.564, de 26 de Março de 2018.</a></li>
                                </ul>
                            </div>
                        </li>
                        
                        <li class="sidebar-item">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="Referencias.php" class="MenuTopico sidebar-link <?php if($page=='Referencias'){echo 'ativo';}?>">Referências
                                </a>             
                            </div>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
    
    </div>
    <!-- SCRIPT - JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('ul li a').click(function() {
                $('li a').removeClass("ativo");
                $(this).addClass("ativo");
            });
        });
    </script>
