<!DOCTYPE html>
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
    			<div class="first__calc__select" value="Модель">
					<select>
						<option class="test">Here is the first option</option>
						<option class="test">The second option</option>
						<i class="arrow"></i>
					</select>
    			</div>
    		</div>
    		
    	</div>
    </section>
<?php wp_footer(); ?>
</body>
</html>