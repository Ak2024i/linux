<!DOCTYPE html>
<html lang="zh">
<?php $pagename="等级设置"; ?>
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
                <h1 class="text-dark fw-bolder my-1 fs-2">等级设置</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb fw-bold fs-base my-1">
                  <li class="breadcrumb-item text-muted">
                    <a href="./index" class="text-muted text-hover-primary">首页</a>
                  </li>
                  <li class="breadcrumb-item text-muted">系统管理</li>
                  <li class="breadcrumb-item text-dark">等级设置</li>
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
            <div id="dengji" class="container-xxl">
              <!--begin::Card-->
              <div class="card card-flush">
                <!--begin::Card header-->
                <div class="card-header mt-6">
                  <!--begin::Card title-->
                  <div class="card-title flex-column">
                    <h2 class="fw-boldest mb-2">等级列表</h2>
                    <div class="fs-6 fw-bold text-gray-400">展示本站所有的等级列表</div>
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
                      添加等级
                    </button>
                    <!--end::Button-->
                  </div>
                  <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div v-if="dengjiList == null" class="card-body pt-0">
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
                          <th class="min-w-50px">等级排序</th>
                          <th class="min-w-125px">等级名称</th>
                          <th class="min-w-125px">等级折扣</th>
                          <th class="min-w-125px">升级价格</th>
                          <th class="min-w-125px">开户收费</th>
                          <th class="min-w-125px">升级收费</th>
                          <th class="min-w-125px">当前状态</th>
                          <th class="text-end min-w-100px">项目操作</th>
                        </tr>
                        <!--end::Table row-->
                      </thead>
                      <!--end::Table head-->
                      <!--begin::Table body-->
                      <tbody class="fw-bold text-gray-600">
                        <tr v-for="res in dengjiList" :key="res.id">
                          <td>{{res.id}}</td>
                          <td>{{res.sort}}</td>
                          <td>{{res.name}}</td>
                          <td>{{res.rate}}</td>
                          <td>{{res.money}}</td>
                          <td><span class="badge badge-success" v-if="res.addkf==1">打开</span><span class="badge badge-danger" v-else-if="res.addkf==0">关闭</span></td>
                          <td><span class="badge badge-success" v-if="res.gjkf==1">打开</span><span class="badge badge-danger" v-else-if="res.gjkf==0">关闭</span></td>
                          <td><span class="badge badge-success" v-if="res.status==1">已启用</span><span class="badge badge-danger" v-else-if="res.status==0">未启用</span></td>
                          <!--操作按钮 - 开始=-->
                          <td class="text-end">
                            <!--begin::Update-->
                            <button @click="edit(res)" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal"
                              data-bs-target="#modal_update" title="编辑">
                              <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                              <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                                  <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black"></path>
                                  <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black"></path>
                                </svg>
                              </span>
                              <!--end::Svg Icon-->
                            </button>
                            <!--end::Update-->
                            <!--begin::Delete-->
                            <button @click="del(res.id)" class="btn btn-icon btn-active-light-primary w-30px h-30px"
                              data-kt-permissions-table-filter="delete_row" title="删除">
                              <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                              <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                                  <path
                                    d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                    fill="black"></path>
                                  <path opacity="0.5"
                                    d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                    fill="black"></path>
                                  <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black">
                                  </path>
                                </svg>
                              </span>
                              <!--end::Svg Icon-->
                            </button>
                            <!--end::Delete-->
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
                      <h3 class="fw-boldest text-dark fs-1 mb-0">添加等级</h3>
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
                            <!--begin::Label-->
                            <label class="required fs-5 fw-bold mb-2">等级排序</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" v-model="addForm.sort" class="form-control form-control-solid" placeholder="请输入等级排序">
                            <!--end::Input-->
                          </div>
                          <!--end::Input group-->
                          <!--begin::Input group-->
                          <div class="mb-5 fv-row">
                            <!--begin::Label-->
                            <label class="required fs-5 fw-bold mb-2">等级名称</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" v-model="addForm.name" class="form-control form-control-solid" placeholder="请输入等级名称">
                            <!--end::Input-->
                          </div>
                          <!--end::Input group-->
                          <!--begin::Input group-->
                          <div class="mb-5 fv-row">
                            <!--begin::Label-->
                            <label class="required fs-5 fw-bold mb-2">等级折扣</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" v-model="addForm.rate" class="form-control form-control-solid" placeholder="请输入等级折扣">
                            <!--end::Input-->
                          </div>
                          <!--end::Input group-->
                          <!--begin::Input group-->
                          <div class="mb-5 fv-row">
                            <!--begin::Label-->
                            <label class="required fs-5 fw-bold mb-2">升级价格</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" v-model="addForm.money" class="form-control form-control-solid" placeholder="请输入升级价格">
                            <!--end::Input-->
                          </div>
                          <!--end::Input group-->
                          <!--begin::Input group-->
                          <div class="mb-5 fv-row">
                            <!--begin::Label-->
                            <label class="required fs-5 fw-bold mb-2">开户收费</label>
                            <!--end::Label-->
                            <!--begin::Select-->
                            <select v-model="addForm.addkf" data-hide-search="true" data-placeholder="请选择开户是否收费..." class="form-select form-select-solid">
                              <option value="1" selected>打开</option>
                              <option value="0">关闭</option>
                            </select>
                            <!--end::Select-->
                          </div>
                          <!--end::Input group-->
                          <!--begin::Input group-->
                          <div class="mb-5 fv-row">
                            <!--begin::Label-->
                            <label class="required fs-5 fw-bold mb-2">升级收费</label>
                            <!--end::Label-->
                            <!--begin::Select-->
                            <select v-model="addForm.gjkf" data-hide-search="true" data-placeholder="请选择升级是否收费..." class="form-select form-select-solid">
                              <option value="1" selected>打开</option>
                              <option value="0">关闭</option>
                            </select>
                            <!--end::Select-->
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
                      <h3 class="fw-boldest text-dark fs-1 mb-0">编辑等级</h3>
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
                            <!--begin::Label-->
                            <label class="required fs-5 fw-bold mb-2">等级排序</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" v-model="updateForm.sort" class="form-control form-control-solid" placeholder="请输入等级排序">
                            <!--end::Input-->
                          </div>
                          <!--end::Input group-->
                          <!--begin::Input group-->
                          <div class="mb-5 fv-row">
                            <!--begin::Label-->
                            <label class="required fs-5 fw-bold mb-2">等级名称</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" v-model="updateForm.name" class="form-control form-control-solid" placeholder="请输入等级名称">
                            <!--end::Input-->
                          </div>
                          <!--end::Input group-->
                          <!--begin::Input group-->
                          <div class="mb-5 fv-row">
                            <!--begin::Label-->
                            <label class="required fs-5 fw-bold mb-2">等级折扣</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" v-model="updateForm.rate" class="form-control form-control-solid" placeholder="请输入等级折扣">
                            <!--end::Input-->
                          </div>
                          <!--end::Input group-->
                          <!--begin::Input group-->
                          <div class="mb-5 fv-row">
                            <!--begin::Label-->
                            <label class="required fs-5 fw-bold mb-2">升级价格</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" v-model="updateForm.money" class="form-control form-control-solid" placeholder="请输入升级价格">
                            <!--end::Input-->
                          </div>
                          <!--end::Input group-->
                          <!--begin::Input group-->
                          <div class="mb-5 fv-row">
                            <!--begin::Label-->
                            <label class="required fs-5 fw-bold mb-2">开户收费</label>
                            <!--end::Label-->
                            <!--begin::Select-->
                            <select v-model="updateForm.addkf" data-hide-search="true" data-placeholder="请选择开户是否收费..." class="form-select form-select-solid">
                              <option value="1">打开</option>
                              <option value="0">关闭</option>
                            </select>
                            <!--end::Select-->
                          </div>
                          <!--end::Input group-->
                          <!--begin::Input group-->
                          <div class="mb-5 fv-row">
                            <!--begin::Label-->
                            <label class="required fs-5 fw-bold mb-2">升级收费</label>
                            <!--end::Label-->
                            <!--begin::Select-->
                            <select v-model="updateForm.gjkf" data-hide-search="true" data-placeholder="请选择升级是否收费..." class="form-select form-select-solid">
                              <option value="1">打开</option>
                              <option value="0">关闭</option>
                            </select>
                            <!--end::Select-->
                          </div>
                          <!--end::Input group-->
                          <!--begin::Input group-->
                          <div class="mb-5 fv-row">
                            <!--begin::Label-->
                            <label class="required fs-5 fw-bold mb-2">等级状态</label>
                            <!--end::Label-->
                            <!--begin::Select-->
                            <select v-model="updateForm.status" data-hide-search="true" data-placeholder="请选择等级状态..." class="form-select form-select-solid">
                              <option value="1">启用</option>
                              <option value="0">关闭</option>
                            </select>
                            <!--end::Select-->
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
  <script src="static/main/pages/dengji.js"></script>
  <!-- 本页面需要 - 结束 -->
</body>
<!--end::Body-->
</html>