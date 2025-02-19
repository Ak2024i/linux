<!DOCTYPE html>
<html lang="zh">
<?php $pagename="批量提交" ?>
<!-- 头部 - 开始 -->
<?php
require_once('./head.php');
$addsalt=md5(mt_rand(0,999).time());
$_SESSION['addsalt']=$addsalt;
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
                <h1 class="text-dark fw-bolder my-1 fs-2">批量提交</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb fw-bold fs-base my-1">
                  <li class="breadcrumb-item text-muted">
                    <a href="./index" class="text-muted text-hover-primary">首页</a>
                  </li>
                  <li class="breadcrumb-item text-muted">学习管理</li>
                  <li class="breadcrumb-item text-dark">批量提交</li>
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
            <div id="add2" class="container-xxl">
              <!--begin::Search vertical-->
              <div class="d-flex flex-column flex-lg-row">
                <!--begin::Aside-->
                <div class="flex-column flex-lg-row-auto w-100 w-lg-300px w-xxl-400px mb-8 mb-lg-0 me-lg-9 me-5">
                  <!--begin::Form-->
                  <form action="#">
                    <!--begin::Card-->
                    <div class="card">
                      <!--begin::Body-->
                      <div class="card-body">
                        <!--begin::Input group-->
                        <?php if ($conf['flkg']=="1"&&$conf['fllx']=="1") {?>
                        <div class="mb-5">
                          <label class="fs-6 form-label fw-boldest text-dark">课程分类</label>
                          <!--begin::Select-->
                          <select v-model="id" @change="fenlei(id);" class="form-select form-select-solid">
                            <option value="">全部分类</option>
                            <?php 
                              $a=$DB->query("select * from qingka_wangke_fenlei where status=1  ORDER BY `sort` ASC");
                              while($rs=$DB->fetch($a)){
                            ?>
                            <option :value="<?=$rs['id']?>"><?=$rs['name']?></option>
                            <?php } ?>
                          </select>
                          <!--end::Select-->
                        </div>
                        <?php } else if ($conf['flkg']=="1"&&$conf['fllx']=="2") {?>
                        <div class="mb-5">
                          <label class="fs-6 form-label fw-boldest text-dark">课程分类</label>
                          <!--begin::Select-->
                          <div class="d-flex flex-lg-row flex-wrap">
                            <div class="form-check form-check-custom form-check-solid me-5 mb-3">
                              <input class="form-check-input" id="all" type="radio" name="e" checked="" @change="fenlei('');">
                              <label class="form-check-label" for="all">
                                全部
                              </label>
                            </div>
                            <?php
                              $a=$DB->query("select * from qingka_wangke_fenlei where status=1  ORDER BY `sort` ASC");
                              while($rs=$DB->fetch($a)){
                            ?>
                            <div class="form-check form-check-custom form-check-solid me-5 mb-3">
                              <input class="form-check-input" id="<?=$rs['id']?>" type="radio" name="e" @change="fenlei(<?=$rs['id']?>);" />
                              <label class="form-check-label" for="<?=$rs['id']?>">
                                <?=$rs['name']?></span>
                              </label>
                            </div>
                            <?php } ?>
                          </div>
                          <!--end::Select-->
                        </div>
                        <?php }?>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-5">
                          <label class="fs-6 form-label fw-boldest text-dark">课程名称</label>
                          <!--begin::Select-->
                          <select v-model="cid" @change="tips(cid);" class="form-select form-select-solid">
                            <option value="">请先选择课程</option>
                            <option id="cid2" v-for="class2 in class1" :value="class2.cid">{{class2.name+'（'+class2.price+'元）'}}</option>
                          </select>
                          <!--end::Select-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-5">
                          <label class="fs-6 form-label fw-boldest text-dark">下单信息</label>
                          <textarea class="form-control form-control-solid" rows="3" v-model="userinfo" placeholder="下单格式：学校(可为空) 账号 密码 &#10注：各项信息中间用空格分隔，多账号下单必须换行"></textarea>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Action-->
                        <div class="d-flex align-items-center justify-content-end">
                          <a href="javascript:;" @click="get" class="btn btn-success me-3">查询课程</a>
                          <a href="javascript:;" @click="add" class="btn btn-primary">确认下单</a>
                        </div>
                        <!--end::Action-->
                      </div>
                      <!--end::Body-->
                    </div>
                    <!--end::Card-->
                  </form>
                  <!--end::Form-->
                </div>
                <!--end::Aside-->
                <!--begin::Layout-->
                <div class="flex-lg-row-fluid">
                  <!--begin::Overview-->
									<div class="card mb-5 mb-xl-10" v-for="(rs,key) in row">
										<!--begin::Card header-->
										<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
											:data-bs-target="'#scoure' + key">
											<div class="card-title">
												<h3 class="fw-boldest m-0">
                        <b>{{rs.userName}}</b> {{rs.userinfo}} <span v-if="rs.msg=='查询成功'"><b style="color: green;">{{rs.msg}}</b></span><span
													 v-else-if="rs.msg!='查询成功'"><b style="color: red;">{{rs.msg}}</b></span>
                        </h3>
											</div>
										</div>
										<!--end::Card header-->
										<!--begin::Content-->
										<div :id="'scoure' + key" class="collapse show">
											<!--begin::Card body-->
											<div class="card-body border-top p-9">
                        <div v-for="(res,key) in rs.data" class="checkbox checkbox-success mb-2">
                          <div class="form-check form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" :value="res.name" @click="checkResources(rs.userinfo,rs.userName,rs.data,res.id,res.name)" :id="key"/>
                            <label class="form-check-label" :for="key">
                              {{res.name}}<font v-if="res.id!=''">[课程ID:{{res.id}}]</font>
                            </label>
                          </div>
												</div>
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Overview-->
                </div>
                <!--end::Layout-->
								<!--课程提示弹窗 - 开始-->
								<div class="modal fade" id="modal_tips" tabindex="-1" aria-hidden="true">
									<!--begin::Modal dialog-->
									<div class="modal-dialog modal-dialog-centered mw-650px">
										<!--begin::Modal content-->
										<div class="modal-content">
											<!--begin::Modal header-->
											<div class="modal-header pb-0 border-0 justify-content-end">
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
											<!--begin::Modal header-->
											<!--begin::Modal body-->
											<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
												<!--begin::Heading-->
												<div class="text-center mb-12">
													<!--begin::Title-->
													<div class="fs-2x fw-boldest mb-1">课程提示</div>
													<!--end::Title-->
													<!--begin::Description-->
													<div class="text-gray-400 fw-bold fs-3">请认真阅读课程提示信息</div>
													<!--end::Description-->
												</div>
												<!--end::Heading-->
												<!-- 主题内容 - 开始 -->
												<div class="text-center">
													<span class="fw-bold fs-3">{{content ? content : "暂无提示内容"}}</span>
												</div>
												<!-- 主题内容 - 结束 -->
											</div>
											<!--end::Modal body-->
										</div>
										<!--end::Modal content-->
									</div>
									<!--end::Modal dialog-->
								</div>
								<!--课程提示弹窗 - 结束-->
              </div>
              <!--begin::Search vertical-->
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
  <script src="static/layer/3.1.1/layer.js"></script>
  <script src="static/js/aes.js"></script>
  <script>
    var vm = new Vue({
		el: "#add2",
		data: {
			row: [],
			check_row: [],
			userinfo: '',
			cid: '',
			id: '',
			miaoshua: '',
			class1: '',
			class3: '',
			show: false,
			show1: false,
			content: '',
			activems: false
		},
		methods: {
			get: function() {
				if (this.cid == '' || this.userinfo == '') {
					layer.msg("所有项目不能为空");
					return false;
				}
				userinfo = this.userinfo.replace(/\r\n/g, "[br]").replace(/\n/g, "[br]").replace(/\r/g, "[br]");
				userinfo = userinfo.split('[br]'); //分割
				this.row = [];
				this.check_row = [];
				for (var i = 0; i < userinfo.length; i++) {
					info = userinfo[i]
					var hash = getENC('<?php echo $addsalt;?>');
					var loading = layer.load(2);
					this.$http.post("/apisub.php?act=get", {
						cid: this.cid,
						userinfo: info,
						hash
					}, {
						emulateJSON: true
					}).then(function(data) {
						layer.close(loading);
						this.show1 = true;
						this.row.push(data.body);
					});
				}
			},
			add: function() {
				if (this.cid == '') {
					layer.msg("请先查课");
					return false;
				}
				if (this.check_row.length < 1) {
					layer.msg("请先选择课程");
					return false;
				}
				//console.log(this.check_row);
				var loading = layer.load(2);
				this.$http.post("/apisub.php?act=add", {
					cid: this.cid,
					data: this.check_row
				}, {
					emulateJSON: true
				}).then(function(data) {
					layer.close(loading);
					if (data.data.code == 1) {
						this.row = [];
						this.check_row = [];
						layer.alert(data.data.msg, {
							icon: 1,
							title: "温馨提示"
						}, function() {
							setTimeout(function() {
								window.location.href = ""
							});
						});
					} else {
						layer.alert(data.data.msg, {
							icon: 2,
							title: "温馨提示"
						});
					}
				});
			},
			checkResources: function(userinfo, userName, rs, id, name) {
				for (i = 0; i < rs.length; i++) {
					if (id == "") {
						if (rs[i].name == name) {
							aa = rs[i]
						}
					} else {
						if (rs[i].id == id && rs[i].name == name) {
							aa = rs[i]
						}
					}
				}
				data = {
					userinfo,
					userName,
					data: aa
				}
				if (this.check_row.length < 1) {
					vm.check_row.push(data);
				} else {
					var a = 0;
					for (i = 0; i < this.check_row.length; i++) {
						if (vm.check_row[i].userinfo == data.userinfo && vm.check_row[i].data.name == data.data.name) {
							var a = 1;
							vm.check_row.splice(i, 1);
						}
					}
					if (a == 0) {
						vm.check_row.push(data);
					}
				}
			},
			fenlei: function(id) {
				var load = layer.load(2);
				this.$http.post("/apisub.php?act=getclassfl", {
					id: id
				}, {
					emulateJSON: true
				}).then(function(data) {
					layer.close(load);
					if (data.data.code == 1) {
						this.class1 = data.body.data;
					} else {
						layer.msg(data.data.msg, {
							icon: 2
						});
					}
				});

			},
			getclass: function() {
				var load = layer.load(2);
				this.$http.post("/apisub.php?act=getclass").then(function(data) {
					layer.close(load);
					if (data.data.code == 1) {
						this.class1 = data.body.data;
					} else {
						layer.msg(data.data.msg, {
							icon: 2
						});
					}
				});

			},
			tips: function(message) {
				for (var i = 0; this.class1.length > i; i++) {
					if (this.class1[i].cid == message) {
						// this.show = true;
						this.content = this.class1[i].content;
						$('#modal_tips').modal('show')
						return false;
						if (this.class1[i].miaoshua == 1) {
							this.activems = true;
						} else {
							this.activems = false;
						}
						return false;

					}

				}

			},
			tips2: function() {
				layer.tips('开启秒刷将额外收0.05的费用', '#miaoshua');

			}
		},
		mounted() {
			this.getclass();
		}
	});
  </script>
  <!-- <script src="static/main/pages/add2.js"></script> -->
  <!-- 本页面需要 - 结束 -->
</body>
<!--end::Body-->

</html>