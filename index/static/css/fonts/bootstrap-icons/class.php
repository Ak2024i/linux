<!DOCTYPE html>
<html lang="zh">
<?php $pagename="课程设置"; ?>
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
                <h1 class="text-dark fw-bolder my-1 fs-2">课程设置</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb fw-bold fs-base my-1">
                  <li class="breadcrumb-item text-muted">
                    <a href="./index" class="text-muted text-hover-primary">首页</a>
                  </li>
                  <li class="breadcrumb-item text-muted">系统管理</li>
                  <li class="breadcrumb-item text-dark">课程设置</li>
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
            <div id="class" class="container-xxl">
              <!--begin::Card-->
              <div class="card card-flush">
                <!--begin::Card header-->
                <div class="card-header mt-6">
                  <!--begin::Card title-->
                  <div class="card-title flex-column">
                    <h2 class="fw-boldest mb-2">课程列表</h2>
                    <div class="fs-6 fw-bold text-gray-400">展示本站所有的课程列表</div>
                  </div>
                  <!--end::Card title-->
                  <!--begin::Card toolbar-->
                  <div class="card-toolbar">
                    <!--begin::Button-->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_add">
                      <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                      <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black"></rect>
                          <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black"></rect>
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                      添加课程
                    </button>
                    <!--end::Button-->
                  </div>
                  <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div v-if="classList == null" class="card-body pt-0">
                  <div class="text-center px-5">
                    <img src="static/picture/20.png" alt="" class="mw-100 mh-325px">
                    <h1 class="fw-bold mt-5" style="color: #A3A3C7">暂无数据</h1>
                  </div>
                </div>
                <div v-else class="card-body pt-0">
                  <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                      <!--begin::Table head-->
                      <thead>
                        <!--begin::Table row-->
                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                          <th class="min-w-50px">ID</th>
                          <th class="min-w-50px">排序</th>
                          <th class="min-w-125px">课程名称</th>
                          <th class="min-w-50px">价格</th>
                          <th class="min-w-100px">查询接口</th>
                          <th class="min-w-100px">提交接口</th>
                          <th class="min-w-80px">查询参数</th>
                          <th class="min-w-80px">提交参数</th>
                          <th class="min-w-80px">价格算法</th>
                          <th class="min-w-80px">所属分类</th>
                          <th class="min-w-100px">当前状态</th>
                          <th class="text-end min-w-100px">项目操作</th>
                        </tr>
                        <!--end::Table row-->
                      </thead>
                      <!--end::Table head-->
                      <!--begin::Table body-->
                      <tbody class="fw-bold text-gray-600">
                        <tr v-for="res in classList" :key="res.cid">
                          <td>{{res.cid}}</td>
                          <td>{{res.sort}}</td>
                          <td>{{res.name}}</td>
                          <td>{{res.price}}</td>
                          <td>{{res.cx_name}}</td>
                          <td>{{res.add_name}}</td>
                          <td>{{res.getnoun}}</td>
                          <td>{{res.noun}}</td>
                          <td>{{res.yunsuan=='*'?"乘法":"加法"}}</td>
                          <td><span class="badge badge-primary">{{res.fenlei}}</span></td>
		                    	<td><span class="badge badge-success" v-if="res.status==1">上架中</span><span class="badge badge-danger" v-else-if="res.status==0">已下架</span></td>
                          <!--操作按钮 - 开始=-->
                          <td class="text-end">
                            <!--begin::Update-->
                            <button @click="edit(res)" class="btn btn-sm btn-light btn-active-light-primary" data-bs-toggle="modal"
                              data-bs-target="#modal_update">编辑</button>
                            <!--end::Update-->
                          </td>
                          <!--操作按钮 - 结束=-->
                        </tr>
                      </tbody>
                      <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                  </div>
                  <!-- 分页 - 开始 -->
                  <?php include('./pagination.php'); ?>
                  <!-- 分页 - 结束 -->
                </div>
                <!--end::Card body-->
              </div>
              <!--end::Card-->
              <!--添加弹窗 - 开始-->
              <div class="modal fade" id="modal_add" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                  <!--begin::Modal content-->
                  <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header">
                      <!--begin::Modal title-->
                      <h3 class="fw-boldest text-dark fs-1 mb-0">添加课程</h3>
                      <!--end::Modal title-->
                      <!--begin::Close-->
                      <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-2x">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                      </div>
                      <!--end::Close-->
                    </div>
                    <!--end::Modal header-->
                    <!--begin::Form-->
                    <form class="form" @submit.prevent="">
                      <!--begin::Modal body-->
                      <div class="modal-body py-10 px-lg-17">
                        <!--begin::Scroll-->
                        <div class="scroll-y me-n7 pe-7" data-kt-scroll="true" data-kt-scroll-max-height="auto" data-kt-scroll-offset="300px">
                          <!--begin::Notice-->
                          <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-10 p-6">
                            <!--begin::Icon-->
                            <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                            <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"></rect>
                                <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black"></rect>
                                <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black"></rect>
                              </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <!--end::Icon-->
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-grow-1">
                              <!--begin::Content-->
                              <div class="fw-bold">
                                <h4 class="text-gray-900 fw-bolder">信息填写提示!</h4>
                                <div class="fs-6 text-gray-700">请认真检查填写的信息是否有误</div>
                              </div>
                              <!--end::Content-->
                            </div>
                            <!--end::Wrapper-->
                          </div>
                          <!--end::Notice-->
                          <!--begin::Input group-->
                          <div class="mb-5 fv-row">
                            <label class="required fs-5 fw-bold mb-2">课程排序</label>
                            <input type="text" v-model="addForm.sort" class="form-control form-control-solid" placeholder="请输入课程排序，默认为10，从小到大">
                          </div>
                          <div class="mb-5 fv-row">
                            <label class="required fs-5 fw-bold mb-2">课程名称</label>
                            <input type="text" v-model="addForm.name" class="form-control form-control-solid" placeholder="请输入课程名称">
                          </div>
                          <div class="mb-5 fv-row">
                            <label class="required fs-5 fw-bold mb-2">课程价格</label>
                            <input type="text" v-model="addForm.price" class="form-control form-control-solid" placeholder="请输入课程价格">
                          </div>
                          <div class="mb-5 fv-row">
                            <label class="required fs-5 fw-bold mb-2">查询参数</label>
                            <input type="text" v-model="addForm.getnoun" class="form-control form-control-solid" placeholder="请输入查询参数">
                          </div>
                          <div class="mb-5 fv-row">
                            <label class="required fs-5 fw-bold mb-2">提交参数</label>
                            <input type="text" v-model="addForm.noun" class="form-control form-control-solid" placeholder="请输入提交参数">
                          </div>
                          <div class="mb-5 fv-row">
                            <label class="required fs-5 fw-bold mb-2">查询接口</label>
                            <select v-model="addForm.queryplat" data-hide-search="true" data-placeholder="请选择查询接口..." class="form-select form-select-solid">
                              <option value="0">自营</option>
                              <?php
                                $a=$DB->query("select * from qingka_wangke_huoyuan");
                                while($b=$DB->fetch($a)){ echo '<option value="'.$b['hid'].'">'.$b['name'].'</option>'; }
										          ?>
                            </select>
                          </div>
                          <div class="mb-5 fv-row">
                            <label class="required fs-5 fw-bold mb-2">提交接口</label>
                            <select v-model="addForm.docking" data-hide-search="true" data-placeholder="请选择提交接口..." class="form-select form-select-solid">
                              <option value="0">自营</option>
                              <?php
                                $a=$DB->query("select * from qingka_wangke_huoyuan");
                                while($b=$DB->fetch($a)){ echo '<option value="'.$b['hid'].'">'.$b['name'].'</option>'; }
                              ?>
                            </select>
                          </div>
                          <div class="mb-5 fv-row">
                            <label class="required fs-5 fw-bold mb-2">课程状态</label>
                            <select v-model="addForm.status" data-hide-search="true" data-placeholder="请选择课程状态..." class="form-select form-select-solid">
                              <option value="1">上架</option>
                              <option value="0">下架</option>
                            </select>
                          </div>
                          <div class="mb-5 fv-row">
                            <label class="required fs-5 fw-bold mb-2">所属分类</label>
                            <select v-model="addForm.fenlei" data-hide-search="true" data-placeholder="请选择所属分类..." class="form-select form-select-solid">
                              <option value="">无</option>
                              <?php
                                $a=$DB->query("select * from qingka_wangke_fenlei ORDER BY `sort` ASC");
                                while($b=$DB->fetch($a)){ echo '<option value="'.$b['id'].'">'.$b['name'].'</option>'; }
                              ?>
                            </select>
                          </div>
                          <div class="mb-5 fv-row">
                            <label class="required fs-5 fw-bold mb-2">课程说明</label>
                            <textarea class="form-control form-control-solid" rows="3" v-model="addForm.content" placeholder="请输入课程说明"></textarea>
                          </div>
                          <!--end::Input group-->
                        </div>
                        <!--end::Scroll-->
                      </div>
                      <!--end::Modal body-->
                      <!--begin::Modal footer-->
                      <div class="modal-footer flex-center">
                        <!--begin::Button-->
                        <button type="button" class="btn btn-light me-3" data-bs-dismiss="modal">取消</button>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="button" id="addSubmitBtn" @click="handleAdd()" class="btn btn-primary">
                          <span class="indicator-label">确认提交</span>
                          <span class="indicator-progress">Please wait... 
                          <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <!--end::Button-->
                      </div>
                      <!--end::Modal footer-->
                    </form>
                    <!--end::Form-->
                  </div>
                  <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
              </div>
              <!--添加弹窗 - 结束-->
              <!--编辑弹窗 - 开始-->
              <div class="modal fade" id="modal_update" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                  <!--begin::Modal content-->
                  <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header">
                      <!--begin::Modal title-->
                      <h3 class="fw-boldest text-dark fs-1 mb-0">编辑课程</h3>
                      <!--end::Modal title-->
                      <!--begin::Close-->
                      <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-2x">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                      </div>
                      <!--end::Close-->
                    </div>
                    <!--end::Modal header-->
                    <!--begin::Form-->
                    <form class="form" @submit.prevent="">
                      <!--begin::Modal body-->
                      <div class="modal-body py-10 px-lg-17">
                        <!--begin::Scroll-->
                        <div class="scroll-y me-n7 pe-7" data-kt-scroll="true" data-kt-scroll-max-height="auto" data-kt-scroll-offset="300px">
                          <!--begin::Notice-->
                          <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-10 p-6">
                            <!--begin::Icon-->
                            <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                            <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"></rect>
                                <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black"></rect>
                                <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black"></rect>
                              </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <!--end::Icon-->
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-grow-1">
                              <!--begin::Content-->
                              <div class="fw-bold">
                                <h4 class="text-gray-900 fw-bolder">信息填写提示!</h4>
                                <div class="fs-6 text-gray-700">请认真检查填写的信息是否有误</div>
                              </div>
                              <!--end::Content-->
                            </div>
                            <!--end::Wrapper-->
                          </div>
                          <!--end::Notice-->
                          <!--begin::Input group-->
                          <div class="mb-5 fv-row">
                            <label class="required fs-5 fw-bold mb-2">课程排序</label>
                            <input type="text" v-model="updateForm.sort" class="form-control form-control-solid" placeholder="请输入课程排序，默认为10，从小到大">
                          </div>
                          <div class="mb-5 fv-row">
                            <label class="required fs-5 fw-bold mb-2">课程名称</label>
                            <input type="text" v-model="updateForm.name" class="form-control form-control-solid" placeholder="请输入课程名称">
                          </div>
                          <div class="mb-5 fv-row">
                            <label class="required fs-5 fw-bold mb-2">课程价格</label>
                            <input type="text" v-model="updateForm.price" class="form-control form-control-solid" placeholder="请输入课程价格">
                          </div>
                          <div class="mb-5 fv-row">
                            <label class="required fs-5 fw-bold mb-2">查询参数</label>
                            <input type="text" v-model="updateForm.getnoun" class="form-control form-control-solid" placeholder="请输入查询参数">
                          </div>
                          <div class="mb-5 fv-row">
                            <label class="required fs-5 fw-bold mb-2">提交参数</label>
                            <input type="text" v-model="updateForm.noun" class="form-control form-control-solid" placeholder="请输入提交参数">
                          </div>
                          <div class="mb-5 fv-row">
                            <label class="required fs-5 fw-bold mb-2">查询接口</label>
                            <select v-model="updateForm.queryplat" data-hide-search="true" data-placeholder="请选择查询接口..." class="form-select form-select-solid">
                              <option value="0">自营</option>
                              <?php
                                $a=$DB->query("select * from qingka_wangke_huoyuan");
                                while($b=$DB->fetch($a)){ echo '<option value="'.$b['hid'].'">'.$b['name'].'</option>'; }
										          ?>
                            </select>
                          </div>
                          <div class="mb-5 fv-row">
                            <label class="required fs-5 fw-bold mb-2">提交接口</label>
                            <select v-model="updateForm.docking" data-hide-search="true" data-placeholder="请选择提交接口..." class="form-select form-select-solid">
                              <option value="0">自营</option>
                              <?php
                                $a=$DB->query("select * from qingka_wangke_huoyuan");
                                while($b=$DB->fetch($a)){ echo '<option value="'.$b['hid'].'">'.$b['name'].'</option>'; }
                              ?>
                            </select>
                          </div>
                          <div class="mb-5 fv-row">
                            <!--begin::Label-->
                            <label class="required fs-5 fw-bold mb-2">下单算法</label>
                            <!--end::Label-->
                            <!--begin::Select-->
                            <select v-model="updateForm.yunsuan" data-hide-search="true" data-placeholder="请选择下单算法..." class="form-select form-select-solid">
                              <option value="*">乘法</option>
                              <option value="+">加法</option>
                            </select>
                            <!--end::Select-->
                          </div>
                          <div class="mb-5 fv-row">
                            <label class="required fs-5 fw-bold mb-2">课程状态</label>
                            <select v-model="updateForm.status" data-hide-search="true" data-placeholder="请选择课程状态..." class="form-select form-select-solid">
                              <option value="1">上架</option>
                              <option value="0">下架</option>
                            </select>
                          </div>
                          <div class="mb-5 fv-row">
                            <label class="required fs-5 fw-bold mb-2">所属分类</label>
                            <select v-model="updateForm.fenlei" data-hide-search="true" data-placeholder="请选择所属分类..." class="form-select form-select-solid">
                              <option value="">无</option>
                              <?php
                                $a=$DB->query("select * from qingka_wangke_fenlei ORDER BY `sort` ASC");
                                while($b=$DB->fetch($a)){ echo '<option value="'.$b['id'].'">'.$b['name'].'</option>'; }
                              ?>
                            </select>
                          </div>
                          <div class="mb-5 fv-row">
                            <label class="required fs-5 fw-bold mb-2">课程说明</label>
                            <textarea class="form-control form-control-solid" rows="3" v-model="updateForm.content" placeholder="请输入课程说明"></textarea>
                          </div>
                          <!--end::Input group-->
                        </div>
                        <!--end::Scroll-->
                      </div>
                      <!--end::Modal body-->
                      <!--begin::Modal footer-->
                      <div class="modal-footer flex-center">
                        <!--begin::Button-->
                        <button type="button" class="btn btn-light me-3" data-bs-dismiss="modal">取消</button>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="button" id="updateSubmitBtn" @click="handleUpdate()" class="btn btn-primary">
                          <span class="indicator-label">确认提交</span>
                          <span class="indicator-progress">Please wait... 
                          <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <!--end::Button-->
                      </div>
                      <!--end::Modal footer-->
                    </form>
                    <!--end::Form-->
                  </div>
                  <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
              </div>
              <!--编辑弹窗 - 结束-->
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
  <script src="static/main/pages/class.js"></script>
  <!-- 本页面需要 - 结束 -->
</body>
<!--end::Body-->
</html>