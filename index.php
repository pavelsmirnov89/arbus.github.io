<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Калькулятор тарифов</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/jquery-ui.css">
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/media.css">
<script src="js/jquery-3.6.4.min.js"></script>
<script src="js/jquery.maskedinput.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.ui.touch-punch.min.js"></script>
<script src="js/scripts.js"></script>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-my"><div class="left"><h1>Калькулятор тарифов</h1>
<label for="region" class="region"><span class="reg_ukas">Укажите регион продвижения</span>
<span class="arr_reg">	
<select name="region" id="region"><option value="1200">Регион 1</option>
<option value="800">Регион 2</option>
<option value="500">Регион 3</option></select></span></label>
<div class="prok_p"><span>Прокачка</span><div class="tonn">200 тонн</div>
<div class="liner"></div>
</div>
<div class="metka">
<span>0 тонн</span>
<span>600 тонн</span>
<span>1200 тонн</span>
</div>
<div class="sweech_gs">
<span date_gs="benz" class="active">Бензин</span>
<span date_gs="gaz">Газ</span>
<span date_gs="dt">ДТ</span>
</div>
<div class="brand_con"><p class="title">Укажите любимый бренд</p>
<div class="brands">
<div date_gs="gaz" class="img shell"><div><img src='images/shell.svg' /></div><span>Shell</span></div>
<div date_gs="gaz" class="img gaz_prom"><div><img src='images/gaz.svg' /></div><span>Газпром</span></div>
<div date_gs="benz" class="img rosneft active"><div><img src='images/rosneft1.svg' /></div><span>Роснефть</span></div>
<div date_gs="benz, dt" class="img active"><div><img src='images/tatneft.svg' /></div><span>Татнефть</span></div>
<div date_gs="benz, dt" class="img luckoil active"><div><img src='images/luckoil.svg' /></div><span>Лукойл</span></div>
<div date_gs="gaz" class="img"><div><img src='images/bashneft.png' /></div><span>Башнефть</span></div>
</div></div>
<div class="brand_con"><p class="title">Дополнительные услуги</p>
<div class="brands services">
	<div class="row">
<div date_price="100" class="col-xs-3 col-sm-3 col-md-2 col-lg-2 img">
<div><img src='images/fines.svg' /></div>
<span>Штрафы</span>
</div>
<div date_price="200" class="col-xs-3 col-sm-3 col-md-2 col-lg-2 img">
<div><img src='images/parking.svg' /></div>
<span>Парковки</span>
</div>
<div date_price="300" class="col-xs-3 col-sm-3 col-md-2 col-lg-2 img">
<div><img src='images/edo.svg' /></div>
<span>ЭДО</span>
</div>
<div date_price="400" class="col-xs-3 col-sm-3 col-md-2 col-lg-2 img">
<div><img src='images/sinks.svg' /></div>
<span>Мойки</span>
</div>
<div date_price="500" class="col-xs-3 col-sm-3 col-md-2 col-lg-2 img">
<div><img src='images/postponement.svg' /></div>
<span>Отсрочка</span>
</div>
<div date_price="600" class="col-xs-3 col-sm-3 col-md-2 col-lg-2 img">
<div><img src='images/telematics.svg' /></div>
<span>Телематика</span>
</div>
<div date_price="700" class="col-xs-3 col-sm-3 col-md-2 col-lg-2 img">
<div><img src='images/PPRPAY.svg' /></div>
<span>PPRPAY</span>
</div>
<div date_price="800" class="col-xs-3 col-sm-3 col-md-2 col-lg-2 img">
<div><img src='images/sms.svg' /></div>
<span>СМС</span>
</div>
<div date_price="900" class="col-xs-3 col-sm-3 col-md-2 col-lg-2 img">
<div><img src='images/insurance.svg' /></div>
<span>Страховка</span>
</div></div>
</div></div>
</div></div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-my"><div class="right"><div class="tarifs"><p class="title">Подходящий тариф</p><div class="select"><img src='images/star.svg' class='' /><select id=""><option value="1">Эконом</option>
<option value="2">Избранный</option>
<option value="3">Премиум</option></select></div></div><div class="promo_akcs"><b>Выберите промо-акцию:</b><div class="promo_lost">
<div tarif="3" class="akcse">
<div class="circle">50%</div>
<span>Экономии</br> на штрафах
</span>
</div>
<div tarif="3,2" class="akcse">
<div class="circle">20%</div>
<span>Возврат</br> НДС</span>
</div>
<div tarif="2,1" class="akcse click">
<div class="circle">5%</div>
<span>Скидка</br> на мойку</span>
</div>
<div tarif="1" class="akcse click">
<div class="circle">2%</div>
<span>Скидка</br> на топливо</span>
</div>
</div></div>
<div class="you_ekon_btn"><div class="nazn_year_mon"><span class="tl">Ваша</br>экономия:</span><div class="titl_prs year"><span>экономия в год</span><b>от 34 млн ₽</b></div><div class="titl_prs month"><span>экономия в месяц</span><b>от 1 700 000 ₽</b></div></div>
<div class="zakas_tarif">Заказать тариф <span>«Избранный»</span> <img src='images/arrow_right.svg' class='' /></div></div>
</div></div>
</div>
</div>
<div class="blackfon"></div>
<div class="whitefon"><div class="close"><img src='images/close.svg' class='' /></div><b>Заказать тариф <span>«Избранный»</span></b><form novalidate action="" id="ftarifz" name="ftarifz">
<input type="number" placeholder="Номер ИНН" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==12) return false;" name="inn" class="form-control inn">
<input type="tel" placeholder="Телефон для связи" name="phone" class="form-control phone">
<input type="email" placeholder="E-mail для связи" name="email" class="form-control email">
<label for="obrn"><input type="checkbox" value="1" name="obrn" id="obrn"><span>Согласен с обработкой персональных данных</span></label>
<button class="btn zakzlk" type="submit">Заказать тариф <span>«Избранный»</span></button>
<div class="result"></div>
</form></div>
</body>
</html>
