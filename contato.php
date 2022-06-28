<?php require_once('header.php'); ?>
<section class="mtop">
    <section class="container-fluid container">
        <section class="row-fluid">
            <section id="donation_box">
                <section class="container container-fluid">
                    <section class="row-fluid">
                        <div class="span8 first">
                            <h2> Contato</h2>
                        </div>
                        <div class="span4 title_right">

                            <div class="dropdown" id="cart_dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" role="button" id="dd_title" href="#">
                                    <i class="icon-user"></i>
                                    Informação
                                </a>

                                <figure class="dropdown-menu hidden_layer" aria-labelledby="dd_title" role="menu" id="title_dropdown">
                                    <div class="inner">
                                        <div class="span2 first">
                                            <span class="icon_alert"> i </span>
                                        </div>
                                        <div class="span10">
                                            <h3> Acesso direto com Associação Amigo Solidario </h3>
                                            <p> Preencha nosso formulario de contato ou ligue diretamente para esclarecimento de qualquer dúvida</p>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </section>
                </section>
            </section> <!-- end of Page Title -->
        </section>
        <section class="row-fluid">
            <!-- BreadCrumbs -->
            <figure id="breadcrumbs" class="span12">
                <ul class="breadcrumb">
                    <li><a href="../index.html">Home</a> <span class="divider">/</span></li>
                    <li class="active">Contato via formulário </li>
                </ul>
            </figure>
            <!-- End of breadcrumbs -->
        </section>
    </section>
</section>
<!-- End of Tile & Breadcrumbs -->

<!-- Page Content Container -->
<section id="content" class="mbtm contact_us">
    <section class="container-fluid container">

        <section class="row-fluid">

            <figure class="span12 mbtm2" id="map_holder">
                
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.261548865916!2d-48.9218791!3d-23.0875195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c1268abf87e6b1%3A0xc4f4e57d87e2caad!2sR.%20Dublin%2C%20176%20-%20Jardim%20Europa%20III%2C%20Avar%C3%A9%20-%20SP%2C%2018708-530!5e0!3m2!1spt-BR!2sbr!4v1656430303292!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </figure>


        </section>
    </section>
    <section class="container-fluid container">
        <section class="row-fluid">

            <section id="contact_form" class="span6 form">
                <h3> Contato via formulário </h3>
                <p>Obrigado por visitar o nosso site. Por favor preencha o seguinte formulário para solicitar informações sobre nossas atividade ou para fornecer feedback sobre o nosso site. Quando terminar, clique no botão "Enviar" para enviar a sua mensagem.</p>

                <form class="form-horizontal" id="contactForm" action="#" method="POST">
                    <div class="naoexibir">
                        <p>Não preencher:<input type="text" name="url" value=""></p>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-12">
                            <input type="text" class="form-control input-lg requiredField" id="nome" name="nome" placeholder="Seu Nome" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <input type="Email" class="form-control input-lg requiredField" id="email" name="email" placeholder="Seu E-mail" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <input type="text" class="form-control input-lg requiredField" id="telefone" name="telefone" placeholder="Seu Telefone" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <textarea class="form-control requiredField" rows="6" placeholder="Sua Mensagem" id="message" name="message"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-9">
                            <div class="g-recaptcha" data-sitekey="6Lfx4iYTAAAAAAPp9EYDUvKNyv_8evD-ZBIoz8F8"></div>
                        </div>
                        <div class="col-lg-3">
                            <button type="submit" class="btn btn-primary" id="send" name="send">Enviar</button>
                        </div>

                    </div>
                </form>
                <div class="alertMessage"></div>
            </section>

            <section id="contact_info" class="span6 contact_info">
                <section class="span12 first ">
                    <section class="inner_lyr">
                        <h3 class="heading bg-div">
                            <span class="inner">Horário de Funcionamento<span class="bgr"></span> </span>
                        </h3>
                        <i class="icon-time"></i> Seg a Sex: 08:00 às 17:30<br>
                    </section>
                </section>
                
                <section class="span12 first ">
                    <section class="inner_lyr">

                        <h3 class="heading bg-div">
                            <span class="inner">Informações para Contato <span class="bgr"></span> </span>
                        </h3>

                        <figure class="span12 first"> <i class="icon-envelope-alt"></i> associacaoamigosolidario@gmail.com.br</figure>
                        <!-- <figure class="span12 first"> <i class="icon-phone"></i> (14) 3732-1255</figure> -->

                        <figure class="span12 first"> <i class="icon-mobile-phone"></i> (14) 99655-2822</figure>


                        <figure class="span12 first">
                            <div class="span6 fisrt">
                                <i class="icon-map-marker"></i>
                                Associacao Amigo Solidario<br />
                                Rua Dublin, 176 - Jardim Europa III<br />
                                Avaré/SP<br />
                                <br />
                            </div>
                        </figure>


                        <figure id="n_social" class="span12 first">




                            <a title="Acesse nosso Facebook" href="https://pt-br.facebook.com/AssociacaoAmigoSolidario/"> <i class="icon-facebook"></i></a>


                        </figure>
                    </section>
                </section>

            </section>

        </section>
    </section>

</section>

<!-- Page Content Container -->
<?php require_once('footer.php'); ?>