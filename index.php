<?php
include('./confing/common.php');
?>
<!DOCTYPE html>
<html lang="zh">
<!--begin::Head-->

<head>
	<title><?=$conf['sitename']?> – 打造全网最优学习系统</title>
	<meta charset="utf-8">
	<meta name="keywords" content="<?=$conf['keywords'];?>" />
    <meta name="description" content="<?=$conf['description'];?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="./logo.png">
	<!--begin::Fonts-->
	<link rel="stylesheet" href="index/static/css/css.css">
	<!--end::Fonts-->
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="index/static/css/plugins.bundle.css" rel="stylesheet" type="text/css">
	<link href="index/static/css/style.bundle.css" rel="stylesheet" type="text/css">
	<!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="auth-bg">
	<!--begin::Main-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Authentication - Signup Welcome Message -->
		<div class="d-flex flex-column flex-column-fluid">
			<!--begin::Content-->
			<div class="d-flex flex-row-fluid flex-column flex-column-fluid text-center p-10 py-lg-20">
				<!--begin::Logo-->
				<a href="/" class="pt-lg-20 mb-12">
					<img alt="Logo" src="index/static/picture/logo.png" class="h-60px">
				</a>
				<!--end::Logo-->
				<!--begin::Wrapper-->
				<div class="text-center">
					<!--begin::Logo-->
					<h1 class="fw-bolder fs-2qx text-dark mb-7">欢迎使用爱学习</h1>
					<!--end::Logo-->
					<!--begin::Message-->
					<div class="fw-bold fs-2 text-gray-400 mb-15">Plan your blog post by choosing a topic creating
						<br>an outline and checking facts.
					</div>
					<!--end::Message-->
					<!--begin::Link-->
					<a href="/index/index" class="btn btn-lg btn-primary">开始体验</a>
					<!--end::Link-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Content-->
			<!--begin::Illustration-->
			<div
				class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-150px min-h-lg-350px"
				style="background-image: url(index/static/image/7.png)"></div>
			<!--end::Illustration-->
		</div>
		<!--end::Authentication - Signup Welcome Message-->
	</div>
	<!--end::Main-->
	<!--begin::Javascript-->
	<!--begin::Global Javascript Bundle(used by all pages)-->
	<script src="index/static/js/plugins.bundle.js"></script>
	<script src="index/static/js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>
