<?php
	$mainDir = '..';
	$commonFolder = $mainDir . '/common';
	require_once($mainDir . '/constant/streamline/constant.php');
	require_once($mainDir . '/lib/functions.php');
	require_once($mainDir . '/lib/customFunc.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		require_once($commonFolder . "/metadata.php");
	?>
	<link rel="stylesheet" type="text/css" href="<?php echo STREAMLINE_ASSETS . '/css/css/bootstrap.min.css';?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo STREAMLINE_ASSETS . '/css/css/font-awesome.min.css';?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo STREAMLINE_ASSETS . '/css/css/JKS-icons.css';?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo STREAMLINE_ASSETS . '/css/css/settings.css';?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo STREAMLINE_ASSETS . '/css/css/owl.carousel.css';?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo STREAMLINE_ASSETS . '/css/css/owl.transitions.css';?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo STREAMLINE_ASSETS . '/css/css/jquery.fancybox.css';?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo STREAMLINE_ASSETS . '/css/css/zerogrid.css';?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo STREAMLINE_ASSETS . '/css/css/style.css';?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo STREAMLINE_ASSETS . '/css/css/loader.css';?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo STREAMLINE_ASSETS . '/css/common/common.css';?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo STREAMLINE_ASSETS . '/css/common/header.css';?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo STREAMLINE_ASSETS . '/css/common/footer.css';?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo STREAMLINE_ASSETS . '/css/streamline/index.css';?>" />
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	<title>Nhom01</title>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>
	<div class="main-container">
		<?php require_once($commonFolder . "/header.php");?>
		<!--Welcome-->
		<div class="row">
			<div class="col-12 col-lg-2 col-xl-1">
				<section id="button-link-web">
					<div class="container">
						<nav class="navbar navbar-expand-lg navbar-light">
							<!-- <a class="navbar-brand" href="#">Vertical Navbar</a> -->
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav mr-auto flex-column vertical-nav edit-nav">
									<li class="nav-item">
										<a class="nav-link" href="#welcome">Gi???i thi???u</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#image">H??nh ???nh</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#video">Video</a>
									</li>
								</ul>
							</div>
						</nav>

					</div>
				</section>
			</div>
			<div class="col-12 col-lg-10 col-xl-11">
				<section id="welcome" class="padding">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h2 class="heading" id="que_title"></h2>
								<hr class="heading_space">
								<span id="que_desc"></span>
							</div>
						</div>
					</div>
				</section>
				<!--Food Facilities-->
				<section>
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="start_btn"><button>B???t ?????u</button></div>
								<div class="info_box">
									<div class="info-title"><span>Quy ?????nh</span></div>
									<div class="info-list">
										<div class="info">1. B???n c??  <span>15 gi??y</span> cho m???i c??u h???i.</div>
										<div class="info">2. Sau khi b???n ch???n c??u tr??? l???i c???a m??nh, b???n kh??ng th??? thay ?????i c??u tr??? l???i.</div>
										<div class="info">3. B???n kh??ng th??? ch???n ph????ng ??n kh??c khi h???t th???i gian.</div>
										<div class="info">4. B???n kh??ng th??? tho??t khi ??ang th???c hi???n b??i test.</div>
										<div class="info">5. ??i???m s??? t??nh d???a tr??n s??? c??u tr??? l???i ????ng.</div>
									</div>
									<div class="buttons">
										<button class="quit">Tho??t</button>
										<button class="restart">Ti???p t???c</button>
									</div>
								</div>

								<!-- Quiz Box -->
								<div class="quiz_box">
									<header>
										<div class="title">Tr???c nghi???m</div>
										<div class="timer">
											<div class="time_left_txt">Th???i gian</div>
											<div class="timer_sec">30</div>
										</div>
										<div class="time_line"></div>
									</header>
									<section>
										<div class="que_text">

										</div>
										<div class="option_list">
										</div>
									</section>

									<!-- footer of Quiz Box -->
									<section class="footer_que">
										<div class="total_que">
										</div>
										<button class="next_btn">Ti???p theo</button>
									</footer_que>
								</div>

								<!-- Result Box -->								
								<div class="result_box">
									<div class="icon">
										<i class="fas fa-crown"></i>
									</div>
									<div class="complete_text">Ch??c m???ng b???n ???? ho??n th??nh b??i test!</div>
									<div class="score_text">
									</div>
									<iframe src="https://www.facebook.com/plugins/share_button.php?href=%2FINT3115%2FStepQuest%2F&layout=button_count&size=small&appId=1333597623766891&width=86&height=20" width="86" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
									<div class="buttons">
										<button class="restart">Ch??i l???i</button>
										<button class="quit">Tho??t</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
		<?php require_once($commonFolder . "/footer.php");?>
	</div>

	<?php require_once($commonFolder . "/scripts.php");?>
	<script src="questions.js"></script>
	<script src="script.js"></script>
</body>
</html>