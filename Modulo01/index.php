<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
// HEADER
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

                    <!--CONTEUDO-->
                    <h2 class="Titulo"> Apresentação</h2>
                    <hr>

                    <!-- Titulo Figura -->
                    <div class="text-center">
                        <a href="imagens/banner.png" data-bs-toggle="modal" data-bs-target="#Banner">
                            <img class="img-fluid" src="imagens/banner.png" alt="Apresentação do curso">
                        </a>
                    </div>

                    <br>
                    <p> Olá! Seja bem-vindo ao curso Gestão de Suprimentos! </p>
                    <p>A gestão de suprimentos engloba uma sequência de operações que começa com a certificação de fornecedores, passa pela aquisição, recebimento, armazenamento, distribuição, consumo e termina com o descarte final de resíduos. Geralmente as despesas administrativas com suprimentos nas organizações só é superada pelas despesas com pessoal, dessa forma, otimizar a gestão de suprimentos é também uma maneira de fortalecer a sobrevivência financeira de uma organização.</p>
                    <p>De modo geral, a logística de suprimentos sempre foi uma área desafiadora quer seja pela quantidade de itens necessários para produção de produtos ou prestação de serviços, quer seja pela incessante busca de estratégias para reduzir os níveis de estoque, sem comprometer a qualidade e a produtividade. Este assunto é atualmente uma preocupação fundamental dos gestores públicos comprometidos com a eﬁciência e eﬁcácia, e para estudiosos dentro do governo.</p>
                    <p>A gestão de suprimentos é um dos tópicos que está exigindo estudos para permitir aos muitos entes públicos a possibilidade de implantação de sistemas, para melhoria do seu desempenho na gestão ﬁscal, configura-se como um processo importante que deve ser incorporado na administração pública para que os governos possam liberar recursos para melhoria de sua capacidade de investimentos, racionalizarem gastos correntes e realizarem uma gestão mais eﬁciente.</p>
                    <p>Nas últimas décadas o Governo do Estado do Ceará, vem realizando um esforço no desenvolvimento de novos sistemas informatizados e capacitação de seus agentes públicos para melhorar a gestão de suprimentos tendo em vista que este é um tema central que cada vez se torna mais importante na gestão pública. </p>
                    <p>A Secretaria do Planejamento e Gestão – Seplag em colaboração com a Escola de Gestão Pública do Ceará - Egpce apresentam neste curso a reunião de aspectos teóricos, procedimentos práticos e legislação até então desenvolvidos com relação à gestão de suprimentos e seus sistemas informatizados de controle, de forma a oferecer a atualização permanente aos órgãos e entidades do Poder Executivo Estadual.</p>
                    <br>

                    <!-- VÍDEO -->
                    <div class="row" >
                            <div class="col-md-2" >
                            </div>
                            <div class="col-md-8" >
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe  class="embed-responsive-item" src="https://drive.google.com/file/d/1p4tZzR0HxpDW0Jawua36BmBHjSdQIkJ7/preview" ></iframe>
                                </div>
                            </div>
                            <div class="col-md-2">
                            </div>
                        </div>
                        

                    <!--CONTEUDO-->
                    <br><h2 class="Titulo"> Objetivo</h2>
                    <hr>
                    
                    <ul class="none">
                        <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Compreender as técnicas usuais de gestão de suprimentos, assim como a legislação vigente e sua aplicabilidade no cotidiano operacional da administração pública estadual.</li>
                    </ul>

                    <!-- SCRIPT INTERAÇAO COM ALUNO-->
                    <ul class="none ">
                        <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i></i>
                            <h4>
                            <p>
                            Desejamos que você tenha uma experiência enriquecedora para o aprimoramento de seus conhecimentos.
                        <strong> Iniciaremos o Módulo I.
                            Bons estudos!</strong> 
                            </p>
                            </h4>
                        </li>
                    </ul>
                    <!-- FIM SCRIPT INTERAÇAO COM ALUNO-->


                    <!-- SCRIPT LIGHTBOX -->
                    <script>
                        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                            event.preventDefault();
                            $(this).ekkoLightbox();
                        });

                        $('#myModal').on('shown.bs.modal', function() {
                            $('#myInput').trigger('focus')
                        })
                    </script>
                    <!--  FIM SCRIPT LIGHTBOX -->
                    <!-- Botões de navegação -->
                    <div class="text-center">

                        <a href="Topico01.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                    </div>
                    <!--  Fim Botões de navegação -->

                    <!-- FIM DIV col-md-10 -->
                </div>
                <div class="col-md-1"></div>
                <!--  FIM DIV ROW -->
            </div>
            <!-- FIM DIV CONTEINER  -->
        </div>
        <!-- FIM DIV MAIN  -->
    </div>

    <!-- FOOTER -->
    <?php include('layout/footer.php') ?>

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>