<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="language" content="en"/>

		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/base.css" media="screen, projection"/>
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print"/>

		<!--[if lt IE 8]>
			<link type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection"/>
		<![endif]-->

		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	</head>

	<body>
		<div class="container" id="page">
			<div id="header">
				<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
			</div>

			<div id="mainmenu">
				<?php
					$this->widget(
						'zii.widgets.CMenu',
						array(
							'items' => array(
								array(
									'label' => 'Home',
									'url' => array('/site/index')
								),
								array(
									'label' => 'About',
									'url' => array('/site/page', 'view' => 'about')
								),
								array(
									'label' => 'Contact',
									'url' => array('/site/contact')
								),
								array(
									'label' => 'Login',
									'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest
								),
								array(
									'label' => 'Logout (' . Yii::app()->user->name . ')',
									'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest
								)
							)
						)
					);
				?>
			</div>

			<?php
				if(isset($this->breadcrumbs)) {
					$this->widget(
						'zii.widgets.CBreadcrumbs',
						array(
							'links' => $this->breadcrumbs,
						)
					);
				}
			?>

			<?php echo $content; ?>

			<div class="clear"></div>

			<div id="footer">
				Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
				All Rights Reserved.<br/>
				<?php echo Yii::powered(); ?>
			</div>
		</div>
	</body>
</html>
