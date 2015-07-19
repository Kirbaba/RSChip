﻿<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaOWKyamSxMTXclSDFmJ2N4Am20PCTD6I&sensor=FALSE">
    </script>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header>    	
		<div class="head">
			<div class="container">
	    		<div class="col-lg-6">
	    			<div class="head__logo">
	    				<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="placeholder+image">
	    			</div>
	    		</div>
	    		<div class="col-lg-6">
	    			<div class="col-lg-4">
	    				<div class="head__city">
	    				
		    				<div class="btn-group">
								<button class="btn btn-default btn-lg dropdown-toggle" type="button" data-toggle="dropdown">
								Москва <span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<a href="#nowhere"><li>Санкт-Питербург</li></a>
									<a href="#nowhere"><li>Сочи</li></a>
									<a href="#nowhere"><li>Владивосток</li></a>
								</ul>
							</div>
						</div>
	    			</div>
	    			<div class="col-lg-8">
	    				<div class="head__contacts">	    				
		    				<h3>8 800 800 80 80</h3>
		    				<p>Без выходных с 10:00 до 19:00</p>
	    				</div>
	    			</div>
	    		</div>
<!-- !!!!!!!!!!!!!!!!!!!!!!!FOR BORDER!!!!!!!!!!!!!!!!!!!!!-->
	    		<div class="border-bot"></div>
<!-- !!!!!!!!!!!!!!!!!!!!!!!FOR BORDER!!!!!!!!!!!!!!!!!!!!!-->
    		</div>
    	</div>
    </header>

    <section class="first">
    	<div class="container">
    		<div class="col-lg-7">
    			<article>
    				<h1 class="orange">Чип тюнинг</h1>
    				<div class="textLine"></div>
    				<p>Стандартные способы увеличения мощности двигателя давно в прошлом.
    				 У нас есть один секрет, который выработан тщательными исследованиями, 
    				 практической доводкой и многолетней практикой. 
    					Узнайте этот секрет прямо сейчас – <span class="orange">позвоните нам.</span></p>
    				<form action="#">
    					<input type="tel" class="first__input" placeholder="Введите номер телефона">
    					<input type="submit" class="first__sub" value="Заказать звонок"></input>
    				</form>
    			</article>
    		</div>
    		<div class="col-lg-5">
    			<form action="#" method="post"> 				
    				
    				
	    			<div class="customSelect">
						<select data-placeholder="Марка автомобиля">
							<option></option>
							<option>Here is the first option</option>
							<option>The second option</option>
						</select>					
	    			</div>	
	    			<div class="customSelect">
						<select data-placeholder="Модель">
							<option></option>
							<option>Here is the first option</option>
							<option>The second option</option>
						</select>					
	    			</div>	
	    			<div class="customSelect">
						<select data-placeholder="Двигатель">
							<option></option>
							<option>Here is the first option</option>
							<option>The second option</option>
						</select>					
	    			</div>	
	    			<div class="customSelect">
						<select data-placeholder="Год выпуска">
							<option></option>
							<option>Here is the first option</option>
							<option>The second option</option>
						</select>					
	    			</div>
    			 	<div class="calc__check">
    					<input type="checkbox" name="vpusk"/>
    					<label for="vpusk">Установлен "холодный впуск"</label>
    				</div>
    				<div class="calc__check">
    					<input type="checkbox" name="filter"/>
    					<label for="filter">Фильтр нулевого сопротивления</label>
					</div>
					<div class="calc__check">
    					<input type="checkbox" name="mehanic"/>
    					<label for="mehanic">Механическая КПП</label>
    				</div>
    			
    				<div>
    					<input type="submit" class="calc__submit" value="Расчитать прирост" />
    				</div>
    			</form>
    		</div>    		
    	</div>
    </section>

    <section class="second">
    	<div class="container">
    		<h1>Знаете ли вы, почему опытные водители
			предпочитают <b>RS чип тюнинг</b>?</h1>
			<div class="second__underText"></div>
			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">					
				<p class="second__p__small">Настоящая <b>заводская мощность</b> вашего двигателя “задушена” в 4 этапа прямо на заводе. <br>
				<p><b><span class="orange">RS чип тюнинг</span></b> 
				– это значительные <b>улучшения функциональных возможностей</b> силового агрегата, включая экономию и увеличение ресурса. </p>
			</div>
			<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
				<div class="second__engine">	
					<div class="second__engine__thue">
						<p>Настоящая заводская мощность</p>
						<h2>281</h2>
					</div>
					<div class="second__engine__new">
						<h2>250</h2>
						<p>Мощность после задушки</p>
					</div>
				</div>
			</div>
    	</div>
    </section>

    <section class="third"></section>
<?php wp_footer(); ?>
</body>
</html>