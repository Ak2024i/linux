<div id="kt_aside" class="aside aside-default aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside"
  data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
  data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
  data-kt-drawer-toggle="#kt_aside_toggle">
  <!--begin::Brand-->
  <div class="aside-logo flex-column-auto pt-9 pb-5" id="kt_aside_logo">
    <!--begin::Logo-->
    <a href="javascript:;">
      <img alt="Logo" src="static/picture/logo.png" class="max-h-50px logo-default" style="width:30px" />
      <img alt="Logo" src="static/picture/logo.png" class="max-h-50px logo-minimize" style="width:30px" />
    </a>
    <!--end::Logo-->
  </div>
  <!--end::Brand-->
  <!--begin::Aside menu-->
  <div id="aside" class="aside-menu flex-column-fluid">
    <!--begin::Aside Menu-->
    <!--begin::Menu-->
    <div
      class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 my-5 mt-lg-2 mb-lg-0"
      id="kt_aside_menu" data-kt-menu="true">
      <div class="menu-fit hover-scroll-y me-lg-n5 pe-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
        data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
        data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="20px"
        data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer">
        <?php if($userrow['uid']==1){ ?>
        <div data-kt-menu-trigger="click" class="menu-item menu-accordion" :class="{show: isSetItem == true}">
          <span class="menu-link">
            <span class="menu-icon">
              <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
              <span class="svg-icon svg-icon-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                  <rect x="2" y="2" width="9" height="9" rx="2" fill="black"></rect>
                  <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black"></rect>
                  <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black"></rect>
                  <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black"></rect>
                </svg>
              </span>
              <!--end::Svg Icon-->
            </span>
            <span class="menu-title">系统管理</span>
            <span class="menu-arrow"></span>
          </span>
          <div class="menu-sub menu-sub-accordion" :class="{'menu-active-bg': isSetItem == true}">
            <div class="menu-item">
              <a class="menu-link" :class="{active: activeItem == 'webset'}" href="./webset">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">系统设置</span>
              </a>
            </div>
            <div class="menu-item">
              <a class="menu-link" :class="{active: activeItem == 'huoyuan'}" href="./huoyuan">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">接口设置</span>
              </a>
            </div>
            <div class="menu-item">
              <a class="menu-link" :class="{active: activeItem == 'fenlei'}" href="./fenlei">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">课程分类</span>
              </a>
            </div>
            <div class="menu-item">
              <a class="menu-link" :class="{active: activeItem == 'class'}" href="./class">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">课程设置</span>
              </a>
            </div>
            <div class="menu-item">
              <a class="menu-link" :class="{active: activeItem == 'dengji'}" href="./dengji">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">等级设置</span>
              </a>
            </div>
            <div class="menu-item">
              <a class="menu-link" :class="{active: activeItem == 'mijia'}" href="./mijia">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">密价设置</span>
              </a>
            </div>
            <div class="menu-item">
              <a class="menu-link" :class="{active: activeItem == 'paylist'}" href="./paylist">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">支付列表</span>
              </a>
            </div>
            <div class="menu-item">
              <a class="menu-link" :class="{active: activeItem == 'data'}" href="./data">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">数据统计</span>
              </a>
            </div>
          </div>
        </div>
        <?php } ?>
        <div class="menu-item pt-5">
          <div class="menu-content">
            <span class="fw-bold text-muted text-uppercase fs-7">导航</span>
          </div>
        </div>
        <div class="menu-item">
          <a class="menu-link" :class="{active: activeItem == 'index'}" href="./index">
            <span class="menu-icon">
              <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
              <span class="svg-icon svg-icon-2">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                    fill="currentColor" />
                  <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="currentColor" />
                </svg>
              </span>
              <!--end::Svg Icon-->
            </span>
            <span class="menu-title">用户中心</span>
          </a>
        </div>
        <div data-kt-menu-trigger="click" class="menu-item menu-accordion" :class="{show: isAddItem == true}">
          <span class="menu-link">
            <span class="menu-icon">
              <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
              <span class="svg-icon svg-icon-2">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path opacity="0.3"
                    d="M18.041 22.041C18.5932 22.041 19.041 21.5932 19.041 21.041C19.041 20.4887 18.5932 20.041 18.041 20.041C17.4887 20.041 17.041 20.4887 17.041 21.041C17.041 21.5932 17.4887 22.041 18.041 22.041Z"
                    fill="currentColor" />
                  <path opacity="0.3"
                    d="M6.04095 22.041C6.59324 22.041 7.04095 21.5932 7.04095 21.041C7.04095 20.4887 6.59324 20.041 6.04095 20.041C5.48867 20.041 5.04095 20.4887 5.04095 21.041C5.04095 21.5932 5.48867 22.041 6.04095 22.041Z"
                    fill="currentColor" />
                  <path opacity="0.3"
                    d="M7.04095 16.041L19.1409 15.1409C19.7409 15.1409 20.141 14.7409 20.341 14.1409L21.7409 8.34094C21.9409 7.64094 21.4409 7.04095 20.7409 7.04095H5.44095L7.04095 16.041Z"
                    fill="currentColor" />
                  <path
                    d="M19.041 20.041H5.04096C4.74096 20.041 4.34095 19.841 4.14095 19.541C3.94095 19.241 3.94095 18.841 4.14095 18.541L6.04096 14.841L4.14095 4.64095L2.54096 3.84096C2.04096 3.64096 1.84095 3.04097 2.14095 2.54097C2.34095 2.04097 2.94096 1.84095 3.44096 2.14095L5.44096 3.14095C5.74096 3.24095 5.94096 3.54096 5.94096 3.84096L7.94096 14.841C7.94096 15.041 7.94095 15.241 7.84095 15.441L6.54096 18.041H19.041C19.641 18.041 20.041 18.441 20.041 19.041C20.041 19.641 19.641 20.041 19.041 20.041Z"
                    fill="currentColor" />
                </svg>
              </span>
              <!--end::Svg Icon-->
            </span>
            <span class="menu-title">学习管理</span>
            <span class="menu-arrow"></span>
          </span>
          <div class="menu-sub menu-sub-accordion" :class="{'menu-active-bg': isAddItem == true}">
            <!-- <div class="menu-item">
              <a class="menu-link" :class="{active: activeItem == 'add'}" href="./add">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">提交订单</span>
              </a>
            </div> -->
            <div class="menu-item">
              <a class="menu-link" :class="{active: activeItem == 'add2'}" href="./add2">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">批量提交</span>
              </a>
            </div>
          </div>
        </div>
        <div class="menu-item">
          <a class="menu-link" :class="{active: activeItem == 'list'}" href="./list">
            <span class="menu-icon">
              <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
              <span class="svg-icon svg-icon-2">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path opacity="0.3"
                    d="M18 21.6C16.3 21.6 15 20.3 15 18.6V2.50001C15 2.20001 14.6 1.99996 14.3 2.19996L13 3.59999L11.7 2.3C11.3 1.9 10.7 1.9 10.3 2.3L9 3.59999L7.70001 2.3C7.30001 1.9 6.69999 1.9 6.29999 2.3L5 3.59999L3.70001 2.3C3.50001 2.1 3 2.20001 3 3.50001V18.6C3 20.3 4.3 21.6 6 21.6H18Z"
                    fill="currentColor" />
                  <path
                    d="M12 12.6H11C10.4 12.6 10 12.2 10 11.6C10 11 10.4 10.6 11 10.6H12C12.6 10.6 13 11 13 11.6C13 12.2 12.6 12.6 12 12.6ZM9 11.6C9 11 8.6 10.6 8 10.6H6C5.4 10.6 5 11 5 11.6C5 12.2 5.4 12.6 6 12.6H8C8.6 12.6 9 12.2 9 11.6ZM9 7.59998C9 6.99998 8.6 6.59998 8 6.59998H6C5.4 6.59998 5 6.99998 5 7.59998C5 8.19998 5.4 8.59998 6 8.59998H8C8.6 8.59998 9 8.19998 9 7.59998ZM13 7.59998C13 6.99998 12.6 6.59998 12 6.59998H11C10.4 6.59998 10 6.99998 10 7.59998C10 8.19998 10.4 8.59998 11 8.59998H12C12.6 8.59998 13 8.19998 13 7.59998ZM13 15.6C13 15 12.6 14.6 12 14.6H10C9.4 14.6 9 15 9 15.6C9 16.2 9.4 16.6 10 16.6H12C12.6 16.6 13 16.2 13 15.6Z"
                    fill="currentColor" />
                  <path
                    d="M15 18.6C15 20.3 16.3 21.6 18 21.6C19.7 21.6 21 20.3 21 18.6V12.5C21 12.2 20.6 12 20.3 12.2L19 13.6L17.7 12.3C17.3 11.9 16.7 11.9 16.3 12.3L15 13.6V18.6Z"
                    fill="currentColor" />
                </svg>
              </span>
              <!--end::Svg Icon-->
            </span>
            <span class="menu-title">任务列表</span>
          </a>
        </div>
        <div class="menu-item">
          <a class="menu-link" :class="{active: activeItem == 'userlist'}" href="./userlist">
            <span class="menu-icon">
              <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
              <span class="svg-icon svg-icon-2">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M16.0173 9H15.3945C14.2833 9 13.263 9.61425 12.7431 10.5963L12.154 11.7091C12.0645 11.8781 12.1072 12.0868 12.2559 12.2071L12.6402 12.5183C13.2631 13.0225 13.7556 13.6691 14.0764 14.4035L14.2321 14.7601C14.2957 14.9058 14.4396 15 14.5987 15H18.6747C19.7297 15 20.4057 13.8774 19.912 12.945L18.6686 10.5963C18.1487 9.61425 17.1285 9 16.0173 9Z"
                    fill="currentColor" />
                  <rect opacity="0.3" x="14" y="4" width="4" height="4" rx="2" fill="currentColor" />
                  <path
                    d="M4.65486 14.8559C5.40389 13.1224 7.11161 12 9 12C10.8884 12 12.5961 13.1224 13.3451 14.8559L14.793 18.2067C15.3636 19.5271 14.3955 21 12.9571 21H5.04292C3.60453 21 2.63644 19.5271 3.20698 18.2067L4.65486 14.8559Z"
                    fill="currentColor" />
                  <rect opacity="0.3" x="6" y="5" width="6" height="6" rx="3" fill="currentColor" />
                </svg>
              </span>
              <!--end::Svg Icon-->
            </span>
            <span class="menu-title">代理管理</span>
          </a>
        </div>
        <div class="menu-item">
          <a class="menu-link" :class="{active: activeItem == 'myprice'}" href="./myprice">
            <span class="menu-icon">
              <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
              <span class="svg-icon svg-icon-2">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path opacity="0.3"
                    d="M12.5 22C11.9 22 11.5 21.6 11.5 21V3C11.5 2.4 11.9 2 12.5 2C13.1 2 13.5 2.4 13.5 3V21C13.5 21.6 13.1 22 12.5 22Z"
                    fill="currentColor" />
                  <path
                    d="M17.8 14.7C17.8 15.5 17.6 16.3 17.2 16.9C16.8 17.6 16.2 18.1 15.3 18.4C14.5 18.8 13.5 19 12.4 19C11.1 19 10 18.7 9.10001 18.2C8.50001 17.8 8.00001 17.4 7.60001 16.7C7.20001 16.1 7 15.5 7 14.9C7 14.6 7.09999 14.3 7.29999 14C7.49999 13.8 7.80001 13.6 8.20001 13.6C8.50001 13.6 8.69999 13.7 8.89999 13.9C9.09999 14.1 9.29999 14.4 9.39999 14.7C9.59999 15.1 9.8 15.5 10 15.8C10.2 16.1 10.5 16.3 10.8 16.5C11.2 16.7 11.6 16.8 12.2 16.8C13 16.8 13.7 16.6 14.2 16.2C14.7 15.8 15 15.3 15 14.8C15 14.4 14.9 14 14.6 13.7C14.3 13.4 14 13.2 13.5 13.1C13.1 13 12.5 12.8 11.8 12.6C10.8 12.4 9.99999 12.1 9.39999 11.8C8.69999 11.5 8.19999 11.1 7.79999 10.6C7.39999 10.1 7.20001 9.39998 7.20001 8.59998C7.20001 7.89998 7.39999 7.19998 7.79999 6.59998C8.19999 5.99998 8.80001 5.60005 9.60001 5.30005C10.4 5.00005 11.3 4.80005 12.3 4.80005C13.1 4.80005 13.8 4.89998 14.5 5.09998C15.1 5.29998 15.6 5.60002 16 5.90002C16.4 6.20002 16.7 6.6 16.9 7C17.1 7.4 17.2 7.69998 17.2 8.09998C17.2 8.39998 17.1 8.7 16.9 9C16.7 9.3 16.4 9.40002 16 9.40002C15.7 9.40002 15.4 9.29995 15.3 9.19995C15.2 9.09995 15 8.80002 14.8 8.40002C14.6 7.90002 14.3 7.49995 13.9 7.19995C13.5 6.89995 13 6.80005 12.2 6.80005C11.5 6.80005 10.9 7.00005 10.5 7.30005C10.1 7.60005 9.79999 8.00002 9.79999 8.40002C9.79999 8.70002 9.9 8.89998 10 9.09998C10.1 9.29998 10.4 9.49998 10.6 9.59998C10.8 9.69998 11.1 9.90002 11.4 9.90002C11.7 10 12.1 10.1 12.7 10.3C13.5 10.5 14.2 10.7 14.8 10.9C15.4 11.1 15.9 11.4 16.4 11.7C16.8 12 17.2 12.4 17.4 12.9C17.6 13.4 17.8 14 17.8 14.7Z"
                    fill="currentColor" />
                </svg>
              </span>
              <!--end::Svg Icon-->
            </span>
            <span class="menu-title">价格列表</span>
          </a>
        </div>
        <div class="menu-item">
          <a class="menu-link" :class="{active: activeItem == 'docking'}" href="./docking">
            <span class="menu-icon">
              <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
              <span class="svg-icon svg-icon-2">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M11.7 8L7.49998 15.3L4.59999 20.3C3.49999 18.4 3.1 17.7 2.3 16.3C1.9 15.7 1.9 14.9 2.3 14.3L8.8 3L11.7 8Z"
                    fill="currentColor" />
                  <path opacity="0.3"
                    d="M11.7 8L8.79999 3H13.4C14.1 3 14.8 3.4 15.2 4L20.6 13.3H14.8L11.7 8ZM7.49997 15.2L4.59998 20.2H17.6C18.3 20.2 19 19.8 19.4 19.2C20.2 17.7 20.6 17 21.7 15.2H7.49997Z"
                    fill="currentColor" />
                </svg>
              </span>
              <!--end::Svg Icon-->
            </span>
            <span class="menu-title">平台对接</span>
          </a>
        </div>
        <?php if($userrow['uuid']==1){ ?>
        <div class="menu-item">
          <a class="menu-link" :class="{active: activeItem == 'pay'}" href="./pay">
            <span class="menu-icon">
              <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
              <span class="svg-icon svg-icon-2">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path opacity="0.3"
                    d="M3.20001 5.91897L16.9 3.01895C17.4 2.91895 18 3.219 18.1 3.819L19.2 9.01895L3.20001 5.91897Z"
                    fill="currentColor" />
                  <path opacity="0.3"
                    d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21C21.6 10.9189 22 11.3189 22 11.9189V15.9189C22 16.5189 21.6 16.9189 21 16.9189H16C14.3 16.9189 13 15.6189 13 13.9189ZM16 12.4189C15.2 12.4189 14.5 13.1189 14.5 13.9189C14.5 14.7189 15.2 15.4189 16 15.4189C16.8 15.4189 17.5 14.7189 17.5 13.9189C17.5 13.1189 16.8 12.4189 16 12.4189Z"
                    fill="currentColor" />
                  <path
                    d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21V7.91895C21 6.81895 20.1 5.91895 19 5.91895H3C2.4 5.91895 2 6.31895 2 6.91895V20.9189C2 21.5189 2.4 21.9189 3 21.9189H19C20.1 21.9189 21 21.0189 21 19.9189V16.9189H16C14.3 16.9189 13 15.6189 13 13.9189Z"
                    fill="currentColor" />
                </svg>
              </span>
              <!--end::Svg Icon-->
            </span>
            <span class="menu-title">账户充值</span>
          </a>
        </div>
        <?php } ?>
        <div class="menu-item">
          <a class="menu-link" :class="{active: activeItem == 'workorder'}" href="./workorder">
            <span class="menu-icon">
              <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
              <span class="svg-icon svg-icon-2">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path opacity="0.3" d="M21 18H3C2.4 18 2 17.6 2 17V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V17C22 17.6 21.6 18 21 18Z" fill="currentColor"/>
                  <path d="M11.4 13.5C11.8 13.8 12.3 13.8 12.6 13.5L21.6 6.30005C21.4 6.10005 21.2 6 20.9 6H2.99998C2.69998 6 2.49999 6.10005 2.29999 6.30005L11.4 13.5Z" fill="currentColor"/>
                </svg>
              </span>
              <!--end::Svg Icon-->
            </span>
            <span class="menu-title">提交工单</span>
          </a>
        </div>
        <div class="menu-item">
          <a class="menu-link" :class="{active: activeItem == 'charge'}" href="./charge">
            <span class="menu-icon">
              <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
              <span class="svg-icon svg-icon-2">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path opacity="0.3"
                    d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
                    fill="currentColor" />
                  <rect x="6" y="12" width="7" height="2" rx="1" fill="currentColor" />
                  <rect x="6" y="7" width="12" height="2" rx="1" fill="currentColor" />
                </svg>
              </span>
              <!--end::Svg Icon-->
            </span>
            <span class="menu-title">联系上级</span>
          </a>
        </div>
        <div class="menu-item">
          <a class="menu-link" :class="{active: activeItem == 'log'}" href="./log">
            <span class="menu-icon">
              <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
              <span class="svg-icon svg-icon-2">
                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path opacity="0.3"
                    d="M8.9 21L7.19999 22.6999C6.79999 23.0999 6.2 23.0999 5.8 22.6999L4.1 21H8.9ZM4 16.0999L2.3 17.8C1.9 18.2 1.9 18.7999 2.3 19.1999L4 20.9V16.0999ZM19.3 9.1999L15.8 5.6999C15.4 5.2999 14.8 5.2999 14.4 5.6999L9 11.0999V21L19.3 10.6999C19.7 10.2999 19.7 9.5999 19.3 9.1999Z"
                    fill="currentColor" />
                  <path
                    d="M21 15V20C21 20.6 20.6 21 20 21H11.8L18.8 14H20C20.6 14 21 14.4 21 15ZM10 21V4C10 3.4 9.6 3 9 3H4C3.4 3 3 3.4 3 4V21C3 21.6 3.4 22 4 22H9C9.6 22 10 21.6 10 21ZM7.5 18.5C7.5 19.1 7.1 19.5 6.5 19.5C5.9 19.5 5.5 19.1 5.5 18.5C5.5 17.9 5.9 17.5 6.5 17.5C7.1 17.5 7.5 17.9 7.5 18.5Z"
                    fill="currentColor" />
                </svg>
              </span>
              <!--end::Svg Icon-->
            </span>
            <span class="menu-title">操作日志</span>
          </a>
        </div>
        <!-- 版本号 -->
        <div class="menu-item">
          <div class="menu-content">
            <div class="separator mx-1 my-4"></div>
          </div>
        </div>
        <div class="menu-item">
          <a class="menu-link" href="JavaScript:;">
            <span class="menu-icon">
              <!--begin::Svg Icon | path: icons/duotune/coding/cod003.svg-->
              <span class="svg-icon svg-icon-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path opacity="0.3"
                    d="M19.0687 17.9688H11.0687C10.4687 17.9688 10.0687 18.3687 10.0687 18.9688V19.9688C10.0687 20.5687 10.4687 20.9688 11.0687 20.9688H19.0687C19.6687 20.9688 20.0687 20.5687 20.0687 19.9688V18.9688C20.0687 18.3687 19.6687 17.9688 19.0687 17.9688Z"
                    fill="black"></path>
                  <path
                    d="M4.06875 17.9688C3.86875 17.9688 3.66874 17.8688 3.46874 17.7688C2.96874 17.4688 2.86875 16.8688 3.16875 16.3688L6.76874 10.9688L3.16875 5.56876C2.86875 5.06876 2.96874 4.46873 3.46874 4.16873C3.96874 3.86873 4.56875 3.96878 4.86875 4.46878L8.86875 10.4688C9.06875 10.7688 9.06875 11.2688 8.86875 11.5688L4.86875 17.5688C4.66875 17.7688 4.36875 17.9688 4.06875 17.9688Z"
                    fill="black"></path>
                </svg>
              </span>
              <!--end::Svg Icon-->
            </span>
            <span class="menu-title">爱学习系统
              <span
                class="badge badge-changelog badge-light-danger bg-hover-danger text-hover-white fw-bold fs-9 px-2 ms-2">v1.1.1</span></span>
          </a>
        </div>
      </div>
    </div>
    <!--end::Menu-->
  </div>
  <!--end::Aside menu-->
  <!--begin::Footer-->
  <div class="aside-footer flex-column-auto pb-5 d-none" id="kt_aside_footer">
    <a href="" class="btn btn-light-primary w-100">Button</a>
  </div>
  <!--end::Footer-->
</div>