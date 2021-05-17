<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>PHP Practice</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
  document.body.scrollTop = document.body.scrollHeight;
</script>
</head>
<body>
	<div class="flex-container">
		<div class="header">
			<?php include 'logo.inc.php' ?>
			<?php include 'menu.inc.php' ?>
		</div>
		<div class="about_me">
			<h1><?php echo $p ?></h1>
				<div class="data">
					<div class="myImg">
						<?php  echo '<img width="326" height="244" src="img/1.jpg">'; ?>
					</div>
					<div class="fullname">
						<p>Меня зовут
							<?php echo $name, ' ', $surname. '<br>';
							echo 'город', ' ', $city; ?>
						</p>
						<p>Мне <?php echo $age; ?> лет</p>
						
						<p><?php include 'test1.php' ?><br></p>
					</div>
				</div>
				<div class="knowledge">

						Вывод разных числовых систем:<br>
						Данные типа double (дробные числа)<br>
						<?php include 'test3.php' ?><br>
						<?php include 'test4.php' ?><br>
						Глобальные и локальные переменые <br>
						<?php include 'test5.php' ?><br>
						<?php include 'test6.php' ?><br>
						<?php include 'test7.php' ?><br>
						<?php include 'test8.php' ?><br>

					<?php include 'knowledge.inc.php'; ?>

				</div>
				<div class="article">
					<p class="text">
						some text
					</p>
				</div>
		</div>

			<?php include 'footer.inc.php' ?>
	</div>

</body>
</html>