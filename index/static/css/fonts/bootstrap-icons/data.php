<!DOCTYPE html>
<html lang="zh">
<?php $pagename="数据统计"; ?>
<!-- 头部 - 开始 -->
<?php
require_once('./head.php');
if($userrow['uid']!=1){exit("<script language='javascript'>window.location.href='./404';</script>");}
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
                <h1 class="text-dark fw-bolder my-1 fs-2">数据统计</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb fw-bold fs-base my-1">
                  <li class="breadcrumb-item text-muted">
                    <a href="./index" class="text-muted text-hover-primary">首页</a>
                  </li>
                  <li class="breadcrumb-item text-muted">系统管理</li>
                  <li class="breadcrumb-item text-dark">数据统计</li>
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
            <div class="container-xxl">
              <!-- 数据 - 开始 -->
              <div class="col-xxl-12">
                <!--begin:Row-->
                <div class="row g-xl-8">
                  <!--begin:Col-->
                  <div class="col-xl-6">
                    <!--begin::Stats Widget 3-->
                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                      <!--begin::Body-->
                      <div class="card-body">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                          <!--begin::Symbol-->
                          <div class="symbol symbol-50px me-5">
                            <span class="symbol-label bg-light-info">
                              <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                              <span class="svg-icon svg-icon-2qx svg-icon-info">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                  <path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="black"></path>
                                  <rect x="6" y="12" width="7" height="2" rx="1" fill="black"></rect>
                                  <rect x="6" y="7" width="12" height="2" rx="1" fill="black"></rect>
                                </svg>
                              </span>
                              <!--end::Svg Icon-->
                            </span>
                          </div>
                          <!--end::Symbol-->
                          <!--begin::Title-->
                          <div>
                            <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-boldest">用户数据</a>
                            <!-- <div class="fs-7 text-muted fw-bold mt-1">数据仅供参考</div> -->
                          </div>
                          <!--end::Title-->
                        </div>
                        <!--end::Section-->
                        <!--begin::stats-->
                        <div class="pt-16">
                          <!--begin::Text-->
                          <div class="d-flex text-gray-400 fw-boldest pb-2">
                            <span class="flex-grow-1">Progress</span>
                            <span class="">78%</span>
                          </div>
                          <!--end::Text-->
                          <!--begin::Progress-->
                          <div class="progress h-6px bg-light-info">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 78%" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <!--end::Progress-->
                        </div>
                        <!--end::stats-->
                        <!--begin::Info-->
                        <div class="d-flex flex-stack mt-5">
                          <!--begin::Action-->
                          <div class="d-flex align-items-center">
                            <a href="#" class="btn btn-sm btn-color-gray-400 btn-active-light-primary fw-boldest fs-6 py-1 px-2 me-2">
                            <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                            <span class="svg-icon svg-icon-2">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black"></path>
                                <path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black"></path>
                              </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <?php
                              $a=$DB->count("select count(*) from qingka_wangke_user where addtime>'$jtdate'");
                              echo $a;
                            ?>
                            </a>
                            <a href="#" class="btn btn-sm btn-color-gray-400 btn-active-light-danger fw-boldest fs-6 py-1 px-2 me-4">
                            <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                            <span class="svg-icon svg-icon-3">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="black"></path>
                                <rect x="6" y="12" width="7" height="2" rx="1" fill="black"></rect>
                                <rect x="6" y="7" width="12" height="2" rx="1" fill="black"></rect>
                              </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <?php
                              $a=$DB->count("select count(*) from qingka_wangke_user");
                              echo $a;
                            ?>
                            </a>
                          </div>
                          <!--end::Action-->
                          <span class="badge badge-light-info fs-7 fw-boldest px-4"><?php echo date("Y-m-d"); ?></span>
                        </div>
                        <!--end::Info-->
                      </div>
                      <!--end::Body-->
                    </div>
                    <!--end::Stats Widget 3-->
                  </div>
                  <!--end:Col-->
                  <!--begin:Col-->
                  <div class="col-xl-6">
                    <!--begin::Stats Widget 4-->
                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                      <!--begin::Body-->
                      <div class="card-body">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                          <!--begin::Symbol-->
                          <div class="symbol symbol-50px me-5">
                            <span class="symbol-label bg-light-danger">
                              <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                              <span class="svg-icon svg-icon-2hx svg-icon-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                  <rect x="2" y="2" width="9" height="9" rx="2" fill="black"></rect>
                                  <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black"></rect>
                                  <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black"></rect>
                                  <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black"></rect>
                                </svg>
                              </span>
                              <!--end::Svg Icon-->
                            </span>
                          </div>
                          <!--end::Symbol-->
                          <!--begin::Title-->
                          <div>
                            <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-boldest">订单数据</a>
                            <!-- <div class="fs-7 text-muted fw-bold mt-1">数据仅供参考</div> -->
                          </div>
                          <!--end::Title-->
                        </div>
                        <!--end::Section-->
                        <!--begin::stats-->
                        <div class="pt-16">
                          <!--begin::Text-->
                          <div class="d-flex text-gray-400 fw-boldest pb-2">
                            <span class="flex-grow-1">Progress</span>
                            <span class="">78%</span>
                          </div>
                          <!--end::Text-->
                          <!--begin::Progress-->
                          <div class="progress h-6px bg-light-danger">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <!--end::Progress-->
                        </div>
                        <!--end::stats-->
                        <!--begin::Info-->
                        <div class="d-flex flex-stack mt-5">
                          <!--begin::Action-->
                          <div class="d-flex align-items-center">
                            <a href="#" class="btn btn-sm btn-color-gray-400 btn-active-light-primary fw-bolder fs-6 py-1 px-2 me-2">
                            <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                            <span class="svg-icon svg-icon-2">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black"></path>
                                <path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black"></path>
                              </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <?php
                              $a=$DB->count("select count(*) from qingka_wangke_order where addtime>'$jtdate'");
                              echo $a;
                            ?>
                            </a>
                            <a href="#" class="btn btn-sm btn-color-gray-400 btn-active-light-danger fw-boldest fs-6 py-1 px-2">
                            <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                            <span class="svg-icon svg-icon-3">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="black"></path>
                                <rect x="6" y="12" width="7" height="2" rx="1" fill="black"></rect>
                                <rect x="6" y="7" width="12" height="2" rx="1" fill="black"></rect>
                              </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <?php
                              $a=$DB->query("select * from qingka_wangke_order where addtime>'$jtdate'");
                              $zcz = 0;
                              while($c=$DB->fetch($a)){
                                $zcz+=$c['fees'];
                              }
                              echo $zcz;
                            ?>
                            </a>
                          </div>
                          <!--end::Action-->
                          <span class="badge badge-light-danger fs-7 fw-boldest px-4"><?php echo date("Y-m-d"); ?></span>
                        </div>
                        <!--end::Info-->
                      </div>
                      <!--end::Body-->
                    </div>
                    <!--end::Stats Widget 4-->
                  </div>
                  <!--end:Col-->
                </div>
                <!--end:Row-->
              </div>
              <!-- 数据 - 结束 -->
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
  <!-- 本页面需要 - 结束 -->
</body>
<!--end::Body-->
</html>