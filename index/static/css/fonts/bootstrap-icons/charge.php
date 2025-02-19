<!DOCTYPE html>
<html lang="zh">
<?php $pagename="联系上级" ?>
<!-- 头部 - 开始 -->
<?php require_once('./head.php');
$boss=$DB->get_row("select user,name,yqm,notice from qingka_wangke_user where uid='{$userrow['uuid']}' ");
?>
<!-- 头部 - 结束 -->

<!--begin::Body-->

<body id="kt_body"
  class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled aside-fixed aside-default-enabled">

  <!--begin::Root-->
  <div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
      <!--侧边栏 - 开始-->
      <?php include('./aside.php'); ?>
      <!--侧边栏 - 结束-->
      <!--begin::Wrapper-->
      <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
        <!--页面头部 - 开始-->
        <?php include('./header.php'); ?>
        <!--页面头部 - 结束-->
        <!--页面主内容 - 开始-->
        <div class="content fs-6 d-flex flex-column flex-column-fluid" id="kt_content">
          <!--begin::Toolbar-->
          <div class="toolbar" id="kt_toolbar">
            <div class="container-fluid d-flex flex-stack flex-wrap flex-sm-nowrap">
              <!--begin::Info-->
              <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
                <!--begin::Title-->
                <h1 class="text-dark fw-bolder my-1 fs-2">联系上级</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb fw-bold fs-base my-1">
                  <li class="breadcrumb-item text-muted">
                    <a href="./index" class="text-muted text-hover-primary">首页</a>
                  </li>
                  <li class="breadcrumb-item text-muted">用户中心</li>
                  <li class="breadcrumb-item text-dark">联系上级</li>
                </ul>
                <!--end::Breadcrumb-->
              </div>
              <!--end::Info-->
              <!--begin::Actions-->
              <div class="d-flex align-items-center flex-nowrap text-nowrap py-1">
                <a href="JavaScript:;" class="btn bg-body btn-color-gray-700 btn-active-primary me-4" data-bs-toggle="modal" data-bs-target="#modal_usernotice">站点公告</a>
                <a href="JavaScript:;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_tcgonggao">重要通知</a>
              </div>
              <!--end::Actions-->
            </div>
          </div>
          <!--end::Toolbar-->
          <!--begin::Post-->
          <div class="post fs-6 d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="charge" class="container-xxl">
              <!--begin::Navbar-->
              <div class="card mb-5 mb-xxl-8">
                <div class="card-body p-0">
                  <!--begin::Details-->
                  <div class="d-flex flex-column flex-sm-row mb-6">
                    <!--begin::Bg patter-->
                    <div class="position-absolute rounded h-sm-125px h-150px d-flex flex-row-fluid w-100 bgi-no-repeat bgi-position-y-top bgi-size-cover" style="background-image:url('static/image/bg-blue.png');"></div>
                    <!--end::Bg patter-->
                    <!--begin::Avatar-->
                    <div class="me-7 mb-3 pt-9 ps-9 position-relative min-h-lg-200px min-w-lg-200px min-h-175px min-w-175px">
                      <div class="symbol">
                        <?php if($userrow['uid']==1){ ?>
                        <img class="border border-3 border-white min-h-lg-175px min-w-lg-175px min-h-150px min-w-150px" src="http://q2.qlogo.cn/headimg_dl?dst_uin=<?php echo $userrow['user']?>&spec=100" alt="image">
                        <?php } else {?>
                        <img class="border border-3 border-white min-h-lg-175px min-w-lg-175px min-h-150px min-w-150px" src="http://q2.qlogo.cn/headimg_dl?dst_uin=<?php echo $boss['user']?>&spec=100" alt="image">
                        <?php } ?>
                      </div>
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Content-->
                    <div class="d-flex flex-column position-absolute ps-20 ms-20 pt-12 top-0">
                      <!--begin::Title-->
                      <div class="d-flex align-items-center mb-4 ps-sm-17 ps-md-12 ps-lg-20 ps-16 ms-9">
                        <a href="JavaScript:;" class="link-white opacity-75-hover fs-1 fw-boldest me-4 flex-shrink-0">
                          <?php if($userrow['uid']==1){ ?>
                            <?php echo $userrow['name']?>
                          <?php } else {?>
                            <?php echo $boss['name'];?>
                          <?php } ?>
                        </a>
                        <span class="badge badge-primary text-white fs-7 fw-bold me-9">Pro</span>
                      </div>
                      <!--end::Title-->
                      <!--begin::Info-->
                      <div class="flex-wrap fw-bold fs-6 mb-4 ps-sm-17 ps-md-12 ps-lg-20 ps-16 ms-9">
                        <a href="JavaScript:;" class="btn btn-flex btn-flush btn-color-white opacity-75-hover me-5 flex-shrink-0">
                        <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                        <span class="svg-icon svg-icon-6 me-2">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                            <path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="black"></path>
                            <path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="black"></path>
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                          <?php if($userrow['uid']==1){ ?>
                            <?php echo $userrow['yqm']?>
                          <?php } else {?>
                            <?php echo $boss['yqm']?>
                          <?php } ?>
                        </a>
                        <a href="JavaScript:;" class="btn btn-flex btn-flush btn-color-white opacity-75-hover flex-shrink-0">
                        <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                        <span class="svg-icon svg-icon-6 me-2">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                            <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="black"></path>
                            <path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="black"></path>
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                          <?php if($userrow['uid']==1){ ?>
                            <?php echo $userrow['user']?>@qq.com
                          <?php } else {?>
                            <?php echo $boss['user']?>@qq.com
                          <?php } ?>
                        </a>
                      </div>
                      <!--end::Info-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Section-->
                    <div class="d-flex flex-column flex-xl-row mt-sm-20 pt-sm-20 w-100 me-9 px-9 px-sm-0">
                      <p class="fw-bold fs-6 text-gray-600 flex-grow-1 pe-4 pt-4">If lovers keep their first vows and oaths for long, How could love be thrown as useless winter fans. 
                      <br>人生若只如初见，何事秋风悲画扇.</p>
                      <div class="pt-xl-4 flex-shrink-0">
                        <!-- <a href="" class="btn btn-light me-2 my-1">取消</a> -->
                        <a href="https://api.btstu.cn/qqtalk/api.php?qq=<?php echo $boss['user']?>" target="_blank" class="btn btn-primary my-1">发起会话</a>
                      </div>
                    </div>
                    <!--end::Section-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Separator-->
                  <div class="separator"></div>
                  <!--end::Separator-->
                  <!--begin::Navs-->
                  <div class="card-body py-0">
                    <!--begin::Navs-->
                    <div class="d-flex h-55px">
                      <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold flex-nowrap">
                        <!--begin::Nav item-->
                        <li class="nav-item">
                          <a class="nav-link text-active-primary me-6 active" data-bs-toggle="tab" href="#tab_1">上级公告</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item">
                          <a class="nav-link text-active-primary me-6" data-bs-toggle="tab" href="#tab_2">我的公告</a>
                        </li>
                        <!--end::Nav item-->
                      </ul>
                    </div>
                    <!--begin::Navs-->
                  </div>
                  <!--begin::Navs-->
                </div>
              </div>
              <!--end::Navbar-->
              <!--begin::Card-->
              <div class="card">
                <!--begin::Card body-->
                <div class="card-body">
                  <!-- 上级公告 - 开始 -->
                  <div class="tab-pane fade active show" id="tab_1" role="tabpanel">
                    <?php echo $boss['notice'];?>
                  </div>
                  <!-- 上级公告 - 结束 -->
                  <!-- 我的公告 - 开始 -->
                  <div class="tab-pane fade" id="tab_2" role="tabpanel">
                    <div class="col-xl-12 fv-row fv-plugins-icon-container mb-8">
                      <textarea id="notice" class="form-control form-control-solid h-100px" placeholder="请输入公告内容"><?php echo $userrow['notice'];?></textarea>
                    <div class="fv-plugins-message-container invalid-feedback"></div></div>
                    <!-- 保存按钮 - 开始 -->
                    <div class="card-footer d-flex justify-content-end py-6" style="padding-right:0px;padding-bottom:0px!important">
                      <button id="myNoticeBtn" type="button" class="btn btn-primary" @click="szgg">
                        <span class="indicator-label">确认保存</span>
                        <span class="indicator-progress">Please wait... 
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                      </button>
                    </div>
                    <!-- 保存按钮 - 结束 -->
                  </div>
                  <!-- 我的公告 - 结束 -->
                </div>
                <!--end::Card body-->
              </div>
              <!--end::Card-->
            </div>
            <!--end::Container-->
          </div>
          <!--end::Post-->
        </div>
        <!--页面主内容 - 结束-->
        <!--页面底部 - 开始-->
        <?php include('./footer.php'); ?>
        <!--页面底部 - 结束-->
      </div>
      <!--end::Wrapper-->
    </div>
    <!--end::Page-->
  </div>
  <!--end::Root-->
  <!-- 底部 - 开始 -->
  <?php require_once('./foot.php'); ?>
  <!-- 底部 - 结束 -->
  <!-- 本页面需要 - 开始 -->
  <script src="static/main/pages/charge.js"></script>
  <!-- 本页面需要 - 结束 -->
</body>
<!--end::Body-->

</html>