    <?php require_once('header.php'); ?>

    <section class="banner_slider mbtm">
        <ul id="banner_slider">
            <li data-transition="slotslide-horizontal" data-slotamount="5" data-masterspeed="100">
                <img src="public/img/grande/cta-novo.png">
            </li>
            <li data-transition="slotslide-horizontal" data-slotamount="5" data-masterspeed="700">
                <img src="public/img/grande/cta-novo.png">
            </li>
        </ul>
    </section>


    <section id="content" class="mbtm fund_rasising_listing">
        <section class="container-fluid container">
            <section class="row-fluid">
                <section class="span12 event_calander" id="event_calander">
                    <section class="span3 first" id="calander_list">
                        <h1> Eventos Agendados</h1>
                        <ul id="tiers">
                            <li>
                                <span class="span12 first">
                                    <em>25 de dezembro, 2022 </em><br>
                                    <p class="agendados">
                                        20° Natal Solidário
                                    </p>
                                    <a style="background-color:#1cc3c9!important" class="donate_btn pull-right" href="page/evento/natal-solidario.html"> + </a>
                                </span>
                            </li>
                        </ul>
                    </section>

                    <section class="span9" id="calendar">

                    </section>
                    <section class="span3">

                    </section>
                </section>
            </section>
        </section>
    </section>


    <?php require_once('footer.php'); ?>

<script type="text/javascript">
        var jsoncalendario = [{
                "start": "2022-12-25T13:07",
                "end": "2022-12-25T17:07",
                "url": "http://centroavareense.com.br/page/evento/natal-solidario",
                "backgroundColor": "#87cdff",
                "title": "20° Natal Solidário"
            }
            // { "start": "2022-07-09T16:07", "end": "2022-07-09T22:07", "url": "http://centroavareense.com.br/page/evento/festa-julina", "backgroundColor": "#8c4e06", "title": "Festa Julina" }, { "start": "2022-05-28T17:05", "end": "2022-05-28T23:05", "url": "http://centroavareense.com.br/page/evento/happy-hour-banda-tiamate-e-dj-ronaldo-miranda", "backgroundColor": "#ff0000", "title": "Happy Hour Banda Tiamate e Dj Ronaldo Miranda" }, { "start": "2022-05-14T09:05", "end": "2022-05-14T13:05", "url": "http://centroavareense.com.br/page/evento/torneio-de-judo1651696420", "backgroundColor": "#87cdff", "title": "torneio de judô" }, { "start": "2022-05-07T09:05", "end": "2022-05-04T11:05", "url": "http://centroavareense.com.br/page/evento/aulao-treino-funcional", "backgroundColor": "#87cdff", "title": "aulão treino funcional" }, { "start": "2022-03-10T18:03", "end": "2022-03-26T23:03", "url": "http://centroavareense.com.br/page/evento/happy-hour-banda-tiamate", "title": "Happy hour banda Tiamate" }, { "start": "2022-01-10T13:01", "end": "2022-01-21T22:01", "url": "http://centroavareense.com.br/page/evento/14-recreacentro-de-ferias", "backgroundColor": "#ffd600", "title": "14° Recreacentro de férias"
        ];

        /* <![CDATA[ */
        $(document).ready(function() {
            $('#calendar').fullCalendar({
                viewDisplay: function() {
                    var calendar = $(this);

                    $('.fc-event').each(function() {
                        // Grab event data
                        var excerpt = $(this).find('.fc-event-excerpt').text();
                        if (excerpt) {
                            $(this).qtip({
                                content: excerpt,
                                position: {
                                    my: 'bottom center',
                                    at: 'top center'
                                },
                                show: 'click',
                                hide: 'click',
                                style: {
                                    tip: true
                                }
                            })
                        }
                    })
                },
                header: {
                    left: 'prev,next',
                    center: 'title',
                    right: ''
                },
                buttonText: {
                    prev: "<span class='fc-text-arrow'>Mês Anterior </span>",
                    next: "<span class='fc-text-arrow'>Próximo Mês</span>"
                },
                columnFormat: {
                    month: 'dddd' // Monday, Wednesday, etc
                },
                editable: false,
                disableDragging: true,
                events: jsoncalendario
            });

        });
    </script>