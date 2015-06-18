<!DOCTYPE html>
<html lang="ru">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta charset="UTF-8">
  <title>Монтажные работы</title>
  <link rel="stylesheet" type="text/css" href="css/all.css">
  <!--[if lte IE 8]>
    <link rel="stylesheet" href="css/all-old-ie.css">
  <![endif]-->
  <!--[if gt IE 8]>
    <link rel="stylesheet" href="css/all.css">
  <![endif]-->
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <!--[if lt IE 10]> 
    <script type="text/javascript" src="js/jquery.placeholder.js"></script>
    <script src="js/jquery.autocolumnlist.min.js"></script>
  <![endif]-->
  <script>
    $( document ).ready(function() { 
      $('.work_link').each(function(){
        var curHeight = "140px";
        //$(this).parent().next().css('height', 'auto');
        var autoHeight = $(this).parent().next().height();
        $(this).parent().next().css('height', '140px');
        $(this).click(function(event){
          event.preventDefault();
          if ($(this).parent().next().css('height') == '140px') {
            $(this).text('Свернуть');
            $(this).parent().next().animate({
              height: autoHeight
            }, 200, function() {
            });
          } else {
            $(this).text('Смотреть все фото');
            $(this).parent().next().animate({
              height: curHeight
            }, 200, function() {
            });
          }
        });
      });
    });
  </script>
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
    <aside class="lcontent">
      <div class="lmenu">
        <ul class="lmenu_list">
          <li class="lmenu_item">
            <a href="catalog3.php" class="lmenu_link">Металлочерепица</a>
          </li>
          <li class="lmenu_item">
            <a href="catalog3.php" class="lmenu_link">Битумная черепица</a>
          </li>
          <li class="lmenu_item">
            <a href="catalog3.php" class="lmenu_link">Композитная черепица</a>
          </li>
          <li class="lmenu_item">
            <a href="catalog3.php" class="lmenu_link">Натуральная черепица</a>
          </li>
          <li class="lmenu_item">
            <a href="catalog3.php" class="lmenu_link">Профнастил</a>
          </li>
          <li class="lmenu_item">
            <a href="catalog3.php" class="lmenu_link">Подкровельные пленки</a>
          </li>
          <li class="lmenu_item">
            <a href="catalog3.php" class="lmenu_link">Утеплитель</a>
          </li>
          <li class="lmenu_item">
            <a href="catalog3.php" class="lmenu_link">Мансардные окна</a>
          </li>
          <li class="lmenu_item">
            <a href="catalog3.php" class="lmenu_link">Металлический штакетник</a>
          </li>
          <li class="lmenu_item">
            <a href="catalog3.php" class="lmenu_link">Водосточные системы</a>
          </li>
          <li class="lmenu_item">
            <a href="catalog3.php" class="lmenu_link">Плита OSB-3</a>
          </li>
          <li class="lmenu_item">
            <a href="catalog3.php" class="lmenu_link">Чердачные лестницы</a>
          </li>
          <li class="lmenu_item">
            <a href="catalog3.php" class="lmenu_link">Вентиляция кровли</a>
          </li>
          <li class="lmenu_item">
            <a href="catalog3.php" class="lmenu_link">Софит</a>
          </li>
          <li class="lmenu_item">
            <a href="catalog3.php" class="lmenu_link">Пиломатериалы</a>
          </li>
          <li class="lmenu_item">
            <a href="catalog3.php" class="lmenu_link">Клинкерный кирпич</a>
          </li>
        </ul>
      </div>
      <a href="order.php" class="orderlink">Заказать расчёт</a>
      <div class="reviewsblock">
        <div class="reviewsblock_title">Отзывы</div>
        <div class="reviewsblock_item">
          <div class="reviewsblock_top">
            <div class="reviewsblock_image"><img src="/image/review1.jpg" alt=""></div>
            <div class="reviewsblock_info">
              <div class="reviewsblock_name">Крышкин И.В.</div>
              <div class="reviewsblock_job">Директор ОАО "QTE"</div>
            </div>
          </div>
          <div class="reviewsblock_text">Мы начали наше сотрудничество с компанией «ВебФормат», когда мне понадобилось обновление моего <a class="reviewsblock_link" href="review.php">Далее>></a></div>
        </div>
      </div>
    </aside>
    <div class="rcontent">
      <div class="breadcrumb">
        <a class="breadcrumb_link" href="/">Главная</a>
        <span class="breadcrumb_item">Монтажные работы</span>
      </div>
      <h1>Монтажные работы</h1>
      <p>Наша фирма выполняет качественно и в сжатые, удобные для заказчика сроки, кровельные работы  в Минске любой видовой сложности. Опытные мастера сделают вашу крышу надежной и прочной, под ней вам не будет страшна ни одна беда. В спектр наших услуг входит установка кровельных систем безопасности, монтаж любых кровельных покрытий (монтаж металлочерепицы, битумной черепицы,натуральной керамической и цементно-песчаной черепицы, композинтой черепицы, модульной металлочерепицы, мягкой наплавляемой кровли), установку мансардных окон, подшивка карнизов, монтаж детали водосточных систем. Нашими высококлассными специалистами проводятся кровельные работы в Минске и по территории всей РБ с использованием различных современных материалов и разнообразнейших конструкций, профилей из пластиков и металла, а также с применением мягких кровлей.</p>
      <p>Мы установили расценки на кровельные работы, стоимость мягкой кровли, (кровля медная цена) на максимально демократичном уровне, отличает высокое качество исполнения. В этом вы сможете убедиться, посетив на нашем сайте фото-галерею наших готовых работ. А для того, чтобы убедиться в приемлимой  стоимости наших работ, вам достаточно изучить наш прайс лист на кровельные работы, который также любезно размещен нами, на нашем сайте. Изучив его, Вы сможете самостоятельно оценить весь тот комплекс работ, которые бы Вы хотели произвести на своем объекте.</p>
      <div class="work">
        <div class="work_item">
          <div class="work_top">
            <div class="work_title">Радошковичи</div>
            <a href="#" class="work_link">Смотреть все фото</a>
          </div>
          <div class="work_bottom">
            <a href="#" class="work_image"><img src="image/work1.jpg" alt=""></a>
            <a href="#" class="work_image"><img src="image/work2.jpg" alt=""></a>
            <a href="#" class="work_image"><img src="image/work3.jpg" alt=""></a>
            <a href="#" class="work_image"><img src="image/work4.jpg" alt=""></a>
            <a href="#" class="work_image"><img src="image/work5.jpg" alt=""></a>
            <a href="#" class="work_image"><img src="image/work6.jpg" alt=""></a>
            <a href="#" class="work_image"><img src="image/work7.jpg" alt=""></a>
          </div>
        </div>
        <div class="work_item">
          <div class="work_top">
            <div class="work_title">Петришки</div>
            <a href="#" class="work_link">Смотреть все фото</a>
          </div>
          <div class="work_bottom">
            <a href="#" class="work_image"><img src="image/work7.jpg" alt=""></a>
            <a href="#" class="work_image"><img src="image/work6.jpg" alt=""></a>
            <a href="#" class="work_image"><img src="image/work5.jpg" alt=""></a>
            <a href="#" class="work_image"><img src="image/work4.jpg" alt=""></a>
            <a href="#" class="work_image"><img src="image/work3.jpg" alt=""></a>
            <a href="#" class="work_image"><img src="image/work2.jpg" alt=""></a>
            <a href="#" class="work_image"><img src="image/work0.jpg" alt=""></a>
          </div>
        </div>
        <div class="work_item">
          <div class="work_top">
            <div class="work_title">Ивашевичи</div>
            <a href="#" class="work_link">Смотреть все фото</a>
          </div>
          <div class="work_bottom">
            <a href="#" class="work_image"><img src="image/work5.jpg" alt=""></a>
            <a href="#" class="work_image"><img src="image/work6.jpg" alt=""></a>
            <a href="#" class="work_image"><img src="image/work7.jpg" alt=""></a>
            <a href="#" class="work_image"><img src="image/work1.jpg" alt=""></a>
            <a href="#" class="work_image"><img src="image/work2.jpg" alt=""></a>
            <a href="#" class="work_image"><img src="image/work3.jpg" alt=""></a>
            <a href="#" class="work_image"><img src="image/work4.jpg" alt=""></a>
          </div>
        </div>
      </div>
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