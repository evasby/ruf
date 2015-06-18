<!DOCTYPE html>
<html lang="ru">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta charset="UTF-8">
  <title>Главная</title>
  <link rel="stylesheet" type="text/css" href="css/all.css">
  <!--[if lte IE 8]>
    <link rel="stylesheet" href="css/all-old-ie.css">
  <![endif]-->
  <!--[if gt IE 8]>
    <link rel="stylesheet" href="css/all.css">
  <![endif]-->
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  <script src="js/modernizr.custom.js" type="text/javascript"></script>
  <script src="js/konva.min.js" type="text/javascript"></script>
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <!--[if lt IE 10]> 
    <script type="text/javascript" src="js/jquery.placeholder.js"></script>
    <script src="js/jquery.autocolumnlist.min.js"></script>
  <![endif]-->
  <script src="js/menu.js" type="text/javascript"></script>
</head>
<body>
  <header class="header">
    <div class="header_edge"></div>
    <div class="inner">
      <div class="header_center">
        <div class="header_left">
          <a href="/" class="header_logo">Руфсистемс</a>
          <div class="header_slang">Системный подход к вашей кровле!</div>
          <div class="plus">
            <div class="plus_item plus_item__1">Полная комплектация кровли</div>
            <div class="plus_item plus_item__2">Грамотный расчёт</div>
            <div class="plus_item plus_item__3">Быстрая доставка материалов</div>
            <div class="plus_item plus_item__4">Монтаж кровли любой сложности</div>
          </div>
        </div>
        <div class="header_right">
          <div class="header_phone">
            <p><span style="font-size:15px">(+375 17)</span> 289-06-54</p>
            <p><span style="font-size:15px">(+375 29)</span> 629-74-29</p>
            <p><span style="font-size:15px">(+375 29)</span> 626-78-95</p>
          </div>
          <div class="header_wrap">
            <a href="calc.php" class="header_calc">Калькулятор</a>
          </div>
          <div class="header_wrap">
            <a href="actions.php" class="header_actions">Акции</a>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="inner">
    <nav class="topmenu">
      <ul class="topmenu_list">
        <li class="topmenu_item">
          <a href="/" class="topmenu_link topmenu_link__active">Главная</a>
        </li>
        <li class="topmenu_item">
          <a href="about.php" class="topmenu_link">О нас</a>
        </li>
        <li class="topmenu_item">
          <a href="catalog.php" class="topmenu_link">Каталог</a>
          <ul class="topmenu_list topmenu_list__l2">  
            <li class="topmenu_item topmenu_item__l2">
              <a href="catalog2.php" class="topmenu_link topmenu_link__l2">Erlus</a>
            </li>
            <li class="topmenu_item topmenu_item__l2">
              <a href="catalog2.php" class="topmenu_link topmenu_link__l2">Creaton</a>
            </li>
            <li class="topmenu_item topmenu_item__l2">
              <a href="catalog2.php" class="topmenu_link topmenu_link__l2">Koramic</a>
            </li>
            <li class="topmenu_item topmenu_item__l2">
              <a href="catalog2.php" class="topmenu_link topmenu_link__l2">Meyer-Holsen</a>
            </li>
            <li class="topmenu_item topmenu_item__l2">
              <a href="catalog2.php" class="topmenu_link topmenu_link__l2">Roben</a>
            </li>
            <li class="topmenu_item topmenu_item__l2">
              <a href="catalog2.php" class="topmenu_link topmenu_link__l2">La Escandella</a>
            </li>
            <li class="topmenu_item topmenu_item__l2">
              <a href="catalog2.php" class="topmenu_link topmenu_link__l2">Terreal</a>
            </li>
          </ul>
        </li>
        <li class="topmenu_item">
          <a href="price.php" class="topmenu_link">Прайс</a>
        </li>
        <li class="topmenu_item">
          <a href="info.php" class="topmenu_link">Полезная информация</a>
        </li>
        <li class="topmenu_item">
          <a href="work.php" class="topmenu_link">Монтажные работы</a>
        </li>
        <li class="topmenu_item">
          <a href="contacts.php" class="topmenu_link">Контакты</a>
        </li>
      </ul>
    </nav>
  </div>
  <div class="content inner">
  	<div class="content_top">
	    <div class="how">
	      <div class="how_title">Как мы работаем?</div>
	      <p>Отправьте заявку на детальный расчет</p>
	      <p>Мы оформляем Ваш заказ</p>
	      <p>Выполняем доставку материалов к Вам на объект</p>
	      <p>Выполняем монтаж Вашей кровли</p>
	      <p>Разделяем с Вами радость от Вашей новой крыши</p>
	    </div>
	    <div class="houses" id="houses"></div>
    </div>
    <div class="why">
      <div class="gradtitle">Почему мы?</div>
      <ul class="why_list">
        <li class="why_item">Полная комплектация кровельных систем</li>
        <li class="why_item">Широкий ассортимент в наличии</li>
        <li class="why_item">Собственная служба доставки</li>
        <li class="why_item">Только качественные материалы</li>
        <li class="why_item">Изготовление доборных элементов под заказ</li>
        <li class="why_item">Удобное расположение офиса на МКАД для оформления заказа</li>    
        <li class="why_item">Гарантия лучшей цены</li> 
        <li class="why_item">Техническая поддержка на всех этапах</li>
        <li class="why_item">Монтаж кровли «под ключ»</li>
      </ul>
    </div>
    <div class="reviewsfront">
      <div class="gradtitle">Отзывы наших клиентов</div>
      <div class="reviewsfront_item">
        <div class="reviewsfront_wrap">
          <div class="reviewsfront_image"><img src="/image/review1.jpg" alt=""></div>
          <div class="reviewsfront_name">Крышкин И.В.</div>
          <div class="reviewsfront_job">Директор ОАО</div>
        </div>
        <div class="reviewsfront_text">Мы начали наше сотрудничество с компанией «ВебФормат», когда мне понадобилось обновление моего <a class="reviewsfront_link" href="reviews.php">далее>></a></div>
      </div>
      <div class="reviewsfront_item">
        <div class="reviewsfront_wrap">
          <div class="reviewsfront_image"><img src="/image/review2.jpg" alt=""></div>
          <div class="reviewsfront_name">Крышкин И.В.</div>
          <div class="reviewsfront_job">Директор ОАО</div>
        </div>
        <div class="reviewsfront_text">Мы начали наше сотрудничество с компанией «ВебФормат», когда мне понадобилось обновление моего <a class="reviewsfront_link" href="reviews.php">далее>></a></div>
      </div>
      <div class="reviewsfront_item">
        <div class="reviewsfront_wrap">
          <div class="reviewsfront_image"><img src="/image/review3.jpg" alt=""></div>
          <div class="reviewsfront_name">Крышкин И.В.</div>
          <div class="reviewsfront_job">Директор ОАО</div>
        </div>
        <div class="reviewsfront_text">Мы начали наше сотрудничество с компанией «ВебФормат», когда мне понадобилось обновление моего <a class="reviewsfront_link" href="reviews.php">далее>></a></div>
      </div>
    </div>
    <div class="sale">
      <div class="gradtitle">Продажа кровельных материалов</div>
      <p>Задача организации, в особенности же консультация с широким активом влечет за собой процесс внедрения и модернизации новых предложений. Таким образом постоянный количественный рост и сфера нашей активности обеспечивает широкому кругу (специалистов) участие в формировании форм развития. С другой стороны сложившаяся структура организации требуют от нас анализа системы обучения кадров, соответствует насущным потребностям. Не следует, однако забывать, что новая модель организационной деятельности представляет собой интересный эксперимент проверки новых предложений. Повседневная практика показывает, что сложившаяся структура организации играет важную роль в формировании соответствующий условий активизации.</p>
    </div>
  </div>
  <footer class="footer">
    <div class="footer_top"></div>
    <div class="inner">
      <div class="menubottom">
        <ul class="menubottom_list">
          <li class="menubottom_item">
            <a href="/" class="menubottom_link">Главная</a>
          </li>
          <li class="menubottom_item">
            <a href="about.php" class="menubottom_link">О нас</a>
          </li>
          <li class="menubottom_item">
            <a href="catalog.php" class="menubottom_link">Каталог</a>
          </li>
          <li class="menubottom_item">
            <a href="price.php" class="menubottom_link">Прайс</a>
          </li>
          <li class="menubottom_item">
            <a href="info.php" class="menubottom_link">Полезная информация</a>
          </li>
          <li class="menubottom_item">
            <a href="work.php" class="menubottom_link">Монтажные работы</a>
          </li>
          <li class="menubottom_item">
            <a href="contacts.php" class="menubottom_link">Контакты</a>
          </li>
        </ul>
      </div>
      <div class="footer_wrap">
        <div class="menucatalogbottom">
          <ul class="menucatalogbottom_list">
            <li class="menucatalogbottom_item">
              <a href="catalog3.php" class="menucatalogbottom_link">Металлочерепица</a>
            </li>
            <li class="menucatalogbottom_item">
              <a href="catalog3.php" class="menucatalogbottom_link">Битумная черепица</a>
            </li>
            <li class="menucatalogbottom_item">
              <a href="catalog3.php" class="menucatalogbottom_link">Композитная черепица</a>
            </li>
            <li class="menucatalogbottom_item">
              <a href="catalog3.php" class="menucatalogbottom_link">Натуральная черепица</a>
            </li>
            <li class="menucatalogbottom_item">
              <a href="catalog3.php" class="menucatalogbottom_link">Профнастил</a>
            </li>
            <li class="menucatalogbottom_item">
              <a href="catalog3.php" class="menucatalogbottom_link">Подкровельные пленки</a>
            </li>
            <li class="menucatalogbottom_item">
              <a href="catalog3.php" class="menucatalogbottom_link">Утеплитель</a>
            </li>
            <li class="menucatalogbottom_item">
              <a href="catalog3.php" class="menucatalogbottom_link">Мансардные окна</a>
            </li>
            <li class="menucatalogbottom_item">
              <a href="catalog3.php" class="menucatalogbottom_link">Металлический штакетник</a>
            </li>
            <li class="menucatalogbottom_item">
              <a href="catalog3.php" class="menucatalogbottom_link">Водосточные системы</a>
            </li>
            <li class="menucatalogbottom_item">
              <a href="catalog3.php" class="menucatalogbottom_link">Плита OSB-3</a>
            </li>
            <li class="menucatalogbottom_item">
              <a href="catalog3.php" class="menucatalogbottom_link">Чердачные лестницы</a>
            </li>
            <li class="menucatalogbottom_item">
              <a href="catalog3.php" class="menucatalogbottom_link">Вентиляция кровли</a>
            </li>
            <li class="menucatalogbottom_item">
              <a href="catalog3.php" class="menucatalogbottom_link">Софит</a>
            </li>
            <li class="menucatalogbottom_item">
              <a href="catalog3.php" class="menucatalogbottom_link">Пиломатериалы</a>
            </li>
            <li class="menucatalogbottom_item">
              <a href="catalog3.php" class="menucatalogbottom_link">Клинкерный кирпич</a>
            </li>
          </ul>
        </div>
        <div class="footer_address">
          <p>ООО "Руфсистемс"</p>
          <p>г.Минск, д. Чижовка,</p>
          <p>ул. Кольцевая 2, офис 21A</p>
          <p>тел./факс: (017) 289–06-54</p>
        </div>
        <div class="footer_rightblock">
          <div class="footer_phone">
            <p>(+375 17) 289-06-54</p>
            <p>(+375 29) 629-74-29</p>
            <p>(+375 29) 626-78-95</p>
          </div>
          <div class="footer_email"><a href="#">sales@ruf.by</a></div>
          <div class="social">
            <a href="#" class="social_link social_link__vk">Вконтакте</a>
            <a href="#" class="social_link social_link__ok">Одноклассники</a>
            <a href="#" class="social_link social_link__fb">Facebook</a>
            <a href="#" class="social_link social_link__ig">Instagram</a>
            <a href="#" class="social_link social_link__tt">Twitter</a>
          </div>
        </div>
      </div>
      <div class="footer_bottom">
        <a href="https://webformat.by/" class="webformat">Веб Формат - создание и продвижение сайтов</a>
        <a href="#" class="footer_up">Наверх</a>
      </div>
    </div>
  </footer>
</body>
</html>