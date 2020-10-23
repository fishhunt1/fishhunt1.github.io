<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/bootstrap/framework/grid.css">
    <link rel="stylesheet" href="public/css/bootstrap/framework/default.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/main.css">
    <title>Fish Hunt</title>
</head>

<body>
    <div class="landing">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="header__logo">
                            <img src="public/img/logo.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h1>Универсальная приманка для всех видов рыб, которая действительно работает </h1>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="header__features">
                            <p>Единственный активатор
                                <br> клёва с доказанным
                                <br> эффектом</p>
                            <div class="d7"></div>
                            <ul>
                                <li>Привлекает
                                    <b>рыбу в радиусе 60 км</b>
                                </li>
                                <li>Увеличиваешь улов
                                    <b>в 5 раз</b>
                                </li>
                                <li>
                                    <b>На 97%</b> эффективнее других прикормов </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <img class="product" src="public/img/product.png" alt="">
                        <img class="mob" src="public/img/product-m.png" alt="">
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="header__form">
                            <div class="price">
                                <div class="price__old">
                                    <p>Старая цена:</p>
                                    <span class="old_price_val">2990</span>
                                    <span class="old_price_cur">руб.</span>
                                </div>
                                <div class="price__new">
                                    <p>Новая цена:</p>
                                    <span class="new_price_val">149</span>
                                    <span class="new_price_cur">руб.</span>
                                </div>
                            </div>
                            <div class="day">
                                <p style="text-align: center">Внимание!
                                    <script type="text/javascript">
                                        d = new Date();
                                        p = new Date(d.getTime());
                                        monthA = 'Января,Февраля,Марта,Апреля,Мая,Июня,Июля,Августа,Сентября,Октября,Ноября,Декабря'.split(',');
                                        var w = p.getDate();
                                        document.write(p.getDate() + ' ' + monthA[p.getMonth()] + ' ' + p.getFullYear());
                                    </script> - последний день продажи Fish Hunt</p>
                            </div>
                            <form action="lucky.php" method="POST">
                                <div class="inputs">
                                    <label for="country">Страна проживания</label>
                                    <select name="country" id="country"></select>
                                </div>
                                <div class="inputs">
                                    <label for="name">Ваше имя</label>
                                    <input type="text" name="name" id="name" placeholder="Имя">
                                </div>
                                <div class="inputs">
                                    <label for="phone">Ваш телефон</label>
                                    <input type="text" name="phone" id="phone" placeholder="Телефон">
                                </div>
                                <input type='hidden' name='utm_source' value='<?=$_GET['utm_source']?>' />

<input type='hidden' name='utm_content' value='<?=$_GET['utm_content']?>' />

<input type='hidden' name='utm_campaign' value='<?=$_GET['utm_campaign']?>' />

<input type='hidden' name='utm_term' value='<?=$_GET['utm_term']?>' />

<input type='hidden' name='utm_medium' value='<?=$_GET['utm_medium']?>' />

<input type='hidden' name='subid' value='<?=$_GET['subid']?>' />

<input type='hidden' name='subid1' value='<?=$_GET['subid1']?>' />

<input type='hidden' name='subid2' value='<?=$_GET['subid2']?>' />

<input type='hidden' name='subid3' value='<?=$_GET['subid3']?>' />
                                <div class="button">
                                    <p>Сегодня уже купили:</p>
                                    <b>
                                        <span>197 упаковок</span>
                                    </b>
                                </div>
                                <div class="button">
                                    <button type="submit">Заказать Fish Hunt</button>
                                </div>
                                <p style="text-align: right; padding-bottom: 10px">*при покупке набора</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h2>80% рыбаков уже используют Fish Hunt</h2>
                    </div>
                    <div class="blocks">
                        <div class="col-md-5 col-sm-5 top-img col-xs-12">
                            <div class="about__image">
                                <img src="public/img/fisher1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7 top-text col-xs-12">
                            <div class="about__text">
                                <p>Основное действие Fish Hunt заключается в постоянном повышении чувства голода, особенно у крупной рыбы. Fish Hunt работает непосредственно на инстинкты рыбы на физиологическом уровне. Первым делом это привлекает рыбу с
                                    дальнего расстояния и заставляет искать пищу в месте распространения приманки. Вторым этапом — стимулирует активный голод даже у сытой рыбы.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7 col-sm-7 bottom-text col-xs-12">
                        <div class="about__text">
                            <p>Такое действие обусловлено высоким содержаним в составе Fish Hunt феромонов — биологически активных веществ, выделяемых живыми организмами в окружающую среду и специфически влияющих на поведение, физиологическое и эмоциональное
                                состояние или обмен веществ других особей того же вида.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5 bottom-img col-xs-12">
                        <div class="about__img">
                            <img src="public/img/fisher2.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="blue__text">
                            <p>
                                Fish Hunt был разработан в 2011 году группой учёных-океанологов в Италии и до сегодняшнего дня общепризнанно считается лучшей приманкой для всех пород рыб
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="how-use">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h2>Как использовать Fish Hunt?</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="how-use__item">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <img src="public/img/use1.jpg" alt="">
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <p>Для ловли мирной рыбы замешайте порцию аттрактанта с прикормкой, которую обычно используете. Это может быть любая прикормка: покупная, самодельная, многокомпонентная и т.д. Для удобства смешивания возможно предварительно растворить
                                Fish Hunt с небольшим количеством воды. Дозировка: 1 пакет (5 мл) на 2-2,5 кг прикормки.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="how-use__item">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <img src="public/img/use2.jpg" alt="">
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <p>Для ловли хищной рыбы Fish Hunt можно обрабатывать все искусственные и естественные приманки. Силиконовые приманки, воблеры или блесна можно опустить в емкость с аттрактантом.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="how-use__item">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <img src="public/img/use3.jpg" alt="">
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <p>Использовать Fish Hunt можно и с живой наживкой напрямую. Растворите содержимое аттрактанта в любой воде, окунайте туда наживку и насаживайте на крючок.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="blue__text">
                            <b>
                                ВНИМАНИЕ! Во избежание ПРИВЛЕЧЕНИЯ СЛИШКОМ БОЛЬШОГО количества рыб, не превышайте рекомендуемую дозировку!
                            </b>
                            <div class="d7"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="pc">
                            <div class="composition">
                                <div class="col-md-2 col-sm-2">
                                    <img class="top" src="public/img/c1.png" alt="">
                                    <img src="public/img/c2.png" alt="">
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <h3>Альбумин</h3>
                                    <p>Природный компонент, привлекающий карася, щуку, карпа и леща. Действует на обоняние рыб, раздражая рецепторы и нейроны головного мозга
                                    </p>
                                    <h3 class="tt">
                                        Козлятник Виргинский
                                    </h3>
                                    <p>Привлекает плотву, линька, леща и густера. Не утрачивает ароматических свойства даже при минусовой температуре воды
                                    </p>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <img class="prod" src="public/img/productc.png" alt="">
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <img class="top" src="public/img/c3.png" alt="">
                                    <img src="public/img/c4.png" alt="">
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <h3 class="tt">Анисовое масло</h3>
                                    <p>Стойкий запах позволяет привлечь рыбу с дальних расстояний. Особо сильно привлекает карпа, леща, плотву, карася
                                    </p>
                                    <h3 class="tt">
                                        Птицемлечник
                                    </h3>
                                    <p>Природный компонент, обладающий резким ароматом, который нравится ротану, окуню, сому и налиму
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="mob">
                            <div class="composition">
                                <div class="owl-carousel">
                                    <div class="item">
                                        <img src="public/img/c1.png" alt="">
                                        <h3>Альбумин</h3>
                                        <p>Природный компонент, привлекающий карася, щуку, карпа и леща. Действует на обоняние рыб, раздражая рецепторы и нейроны головного мозга
                                        </p>
                                    </div>
                                    <div class="item">
                                        <img src="public/img/c2.png" alt="">
                                        <h3>Козлятник Виргинский</h3>
                                        <p>Привлекает плотву, линька, леща и густера. Не утрачивает ароматических свойства даже при минусовой температуре воды
                                        </p>
                                    </div>
                                    <div class="item">
                                        <img src="public/img/c3.png" alt="">
                                        <h3>Анисовое масло</h3>
                                        <p>Стойкий запах позволяет привлечь рыбу с дальних расстояний. Особо сильно привлекает карпа, леща, плотву, карася</p>
                                    </div>
                                    <div class="item">
                                        <img src="public/img/c4.png" alt="">
                                        <h3>Птицемлечник</h3>
                                        <p>Природный компонент, обладающий резким ароматом, который нравится ротану, окуню, сому и налиму</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gallery">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="owl-carousel">
                            <div class="item">
                                <img src="public/img/g1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="public/img/g2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="public/img/g3.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="public/img/g4.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="public/img/g5.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="expert">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="expert__item">
                            <h2>
                                Мнение профессионала
                            </h2>
                            <p>
                                Самое важное качество Fish Hunt - это его высокая эффективность при ловле более крупных экземпляров. Приманка испытана и протестирована в разных водоемах: реках, каналах, озерах, заливах, морях - и зимой, и летом. Вы можете привозить гораздо больше рыбы
                                с каждой рыбалки! Просто добавьте 1 пакет в прикормку, опустите в воду и голодная рыба начнет кидаться на то, что Вы ей предложите. Одной упаковки хватает на 5 раз. 1 пакет разводится на 2-2,5 кг прикормки.
                                <br> С приманкой Fish Hunt Вы наловите больше, чем можете себе представить!
                            </p>
                            <b>Анатолий Иванович Гросов</b>
                            <br>
                            <span>профессиональный рыбалов с 46-летним опытом</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="reviews">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h2>Отзывы</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="reviews__item">
                        <div class="d7"></div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <img src="public/img/r1.jpg" alt="">
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <p>Честно признаюсь – за годы я отличным рыбаком не стал, остался на начальном любительском уровне. Жена раньше смеялась над моими скромными уловами, но теперь удивленно ахает, когда я достаю огромные пакеты, набитые рыбой!</p>
                            <span class="mob">Дмитрий Ильин
                                <br> 42 года</span>
                        </div>
                        <span class="pc">Дмитрий Ильин
                            <br> 42 года</span>
                    </div>
                </div>
                <div class="row">
                    <div class="reviews__item">
                        <div class="d7"></div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <img src="public/img/r2.jpg" alt="">
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <p>Мы в конце апреля каждый год с друзьями гоняем в Астрахань, специально для этого дела отпуск беру на недельку. В этом году прогадали на неделю: воду спускали 28-го, как раз тарань пошла, а нам 30-го уже в Москве надо было быть.
                                Поездку отменять было поздно, делать нечего - поехали, прихватив с собой Фиш Хант, как раз потестировали его. Я, видавший виды, такого улова никак не ожидал - багажник до отказа был забит! Под конец рыбалки уже отпускали
                                рыбеху. Эксперимента ради перестали добавлять новую приманку - улов уже не такой большой был, да и мелочь всякая попадалась. Из этого сделали вывод, что приманка работает на все 100%.</p>
                            <span class="mob">Михаил Решетников
                                <br> 30 лет</span>
                        </div>
                        <span class="pc">Михаил Решетников
                            <br> 30 лет</span>
                    </div>
                </div>
                <div class="row">
                    <div class="reviews__item">
                        <div class="d7"></div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <img src="public/img/r3.jpg" alt="">
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <p>Я рыбачу с детсва, об аттрактантах знаю все - как, кого, на что ловить. Все уже давно изобретено и проверено. Вот недавно внучка подарила приманку новомодную - ФишХант. Я посмеялся, но чтобы ее не обидеть, по-честному залил
                                содержимое в прикорм. Сказать, что я обалдел - не сказать ничего. Клев начался сумасшедший, домой принес 47 кило рыбы! Теперь сам закупаю эту приманку - пустых дней вообще не бывает.
                            </p>
                            <span class="mob">Иван Щербаков
                                <br> 61 год</span>
                        </div>
                        <span class="pc">Иван Щербаков
                            <br> 61 год</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="header__logo">
                            <img src="public/img/logo.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <h1>Универсальная приманка для всех видов рыб, которая действительно работает </h1>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="header__features">
                            <p>Единственный активатор
                                <br> клёва с доказанным
                                <br> эффектом</p>
                            <div class="d7"></div>
                            <ul>
                                <li>Привлекает
                                    <b>рыбу в радиусе 60 км</b>
                                </li>
                                <li>Увеличиваешь улов
                                    <b>в 5 раз</b>
                                </li>
                                <li>
                                    <b>На 97%</b> эффективнее других прикормов </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <img class="product" src="public/img/product.png" alt="">
                        <img class="mob" src="public/img/product-m.png" alt="">
                    </div>
                    <div class="col-md-5 col-sm-5">
                        <div class="header__form">
                            <div class="price">
                                <div class="price__old">
                                    <p>Старая цена:</p>
                                    <span class="old_price_val">2990</span>
                                    <span class="old_price_cur">руб.</span>
                                </div>
                                <div class="price__new">
                                    <p>Новая цена:</p>
                                    <span class="new_price_val">149</span>
                                    <span class="new_price_cur">руб.</span>
                                </div>
                            </div>
                            <div class="day">
                                <p style="text-align: center">Внимание!
                                    <script type="text/javascript">
                                        d = new Date();
                                        p = new Date(d.getTime());
                                        monthA = 'Января,Февраля,Марта,Апреля,Мая,Июня,Июля,Августа,Сентября,Октября,Ноября,Декабря'.split(',');
                                        var w = p.getDate();
                                        document.write(p.getDate() + ' ' + monthA[p.getMonth()] + ' ' + p.getFullYear());
                                    </script> - последний день продажи Fish Hunt</p>
                            </div>
                            <form action="lucky.php" method="POST">
                                <div class="inputs">
                                    <label for="country">Страна проживания</label>
                                    <select name="country" id="country"></select>
                                </div>
                                <div class="inputs">
                                    <label for="name">Ваше имя</label>
                                    <input type="text" name="name" id="name" placeholder="Имя">
                                </div>
                                <div class="inputs">
                                    <label for="phone">Ваш телефон</label>
                                    <input type="text" name="phone" id="phone" placeholder="Телефон">
                                </div>
                                <input type='hidden' name='utm_source' value='<?=$_GET['utm_source']?>' />

<input type='hidden' name='utm_content' value='<?=$_GET['utm_content']?>' />

<input type='hidden' name='utm_campaign' value='<?=$_GET['utm_campaign']?>' />

<input type='hidden' name='utm_term' value='<?=$_GET['utm_term']?>' />

<input type='hidden' name='utm_medium' value='<?=$_GET['utm_medium']?>' />

<input type='hidden' name='subid' value='<?=$_GET['subid']?>' />

<input type='hidden' name='subid1' value='<?=$_GET['subid1']?>' />

<input type='hidden' name='subid2' value='<?=$_GET['subid2']?>' />

<input type='hidden' name='subid3' value='<?=$_GET['subid3']?>' />
                                <div class="button">
                                    <p>Сегодня уже купили:</p>
                                    <b>
                                        <span>197 упаковок</span>
                                    </b>
                                </div>
                                <div class="button">
                                    <button type="submit">Заказать Fish Hunt</button>
                                </div>
                                <p style="text-align: right; padding-bottom: 10px">*при покупке набора</p>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="recv">
                            <p>
                                <rekv>"Фиш Хант", 123007, г. Москва, ул. Магистральная 1 стр. 7</rekv>
                            </p>
                            <a href="politic.html" style="color: inherit">Политика конфиденциальности</a>
                            <a href="oferta.html" style="color: inherit">Публичная оферта</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
    <script src="public/js/main.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-url-parser/2.3.1/purl.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>


    <script src="price.js"></script>
</body>

</html>
