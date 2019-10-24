<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bananas</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="header">
            <div class="contacts flex-right">
                <div>
                    +7914-290-04-84
                </div>
            </div>
            <div class="content centered-vert">
                <div class="slide">
                    <div class="header-text-block">
                        <h1>
                            Сайт - лицо компании
                        </h1>
                        <p>
                            Наличие собственного сайта существенно повышает имидж компании в глазах потенциальных клиентов и партнеров.
                        </p>
                        <div class="tools">
                            <div class="action">
                                <a href="#">
                                    <span class="header-action">
                                        Заказать сайт
                                    </span>
                                </a>
                            </div>
                            <div class="more">
                                <a href="#">
                                    <span class="header-more">
                                        Подробнее
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-pic-block">
                        <img src="{{ asset('assets/businessman_icon.jpg') }}"/>
                    </div>
                </div>
                <div class="button-to-next">
                    <div>
                        <img src="{{ asset('assets/arrow.png') }}"/>
                    </div>
                    <div>
                        <span>
                            Проекты
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
