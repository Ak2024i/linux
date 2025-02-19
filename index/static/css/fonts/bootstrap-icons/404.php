<?php
include('../confing/common.php');
?>
<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<title>404错误 – <?=$conf['sitename']?></title>
		<meta charset="utf-8">
		<meta name="description" content="Craft admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets.">
		<meta name="keywords" content="Craft, bootstrap, bootstrap 5, admin themes, free admin themes, bootstrap admin, bootstrap dashboard">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="https://preview.keenthemes.com/craft/assets/media/logos/favicon.ico">
		<!--begin::Fonts-->
		<link rel="stylesheet" href="static/css/css.css">
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="static/css/plugins.bundle.css" rel="stylesheet" type="text/css">
		<link href="static/css/style.bundle.css" rel="stylesheet" type="text/css">
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="auth-bg">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - 404 Page-->
			<div class="d-flex flex-column flex-center flex-column-fluid p-10">
				<!--begin::Illustration-->
				<img src="static/picture/181.png" alt="" class="mw-100 mb-10 h-lg-450px">
				<!--end::Illustration-->
				<!--begin::Message-->
				<h1 class="fw-bold mb-10" style="color: #A3A3C7">很抱歉，您访问的资源或页面不存在...</h1>
				<!--end::Message-->
				<!--begin::Link-->
				<a href="javascript:window.history.go(-1);" class="btn btn-primary">返回上一层</a>
				<!--end::Link-->
			</div>
			<!--end::Authentication - 404 Page-->
		</div>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="static/js/plugins.bundle.js"></script>
		<script src="static/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>