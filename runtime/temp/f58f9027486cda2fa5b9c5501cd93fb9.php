<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"G:\xampp\htdocs\QandA\public/../application/index\view\usermanage\user_manage.html";i:1503972079;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="renderer" content="webkit" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta name="description" content="Plane UI" />
    <meta name="keywords" content="Plane UI" />
    <meta name="apple-mobile-web-app-title" content="Plane UI" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="google" value="notranslate" />

    <!-- for Android 5 -->
    <meta name="theme-color" content="#008FE2" />

    <!-- Windows 8 metro color -->
    <meta name="msapplication-TileColor" content="#008FE2" />

    <!-- Windows 8 metro icon -->
    <meta name="msapplication-TileImage" content="favicon.png" />

    <title>南方基地答题系统</title>
    <link rel="icon" type="image/png" href="<?php echo \think\Config::get('web_res_root'); ?>/image/CM.png" />
    <link rel="stylesheet" type="text/css" href="<?php echo \think\Config::get('web_res_root'); ?>/css/planeui.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo \think\Config::get('web_res_root'); ?>/css/planeui.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo \think\Config::get('web_res_root'); ?>/css/user_manage/user_manager.css" />
    <link rel="stylesheet" href="<?php echo \think\Config::get('web_res_root'); ?>/css/jquery-ui.min.css" />
</head>
<body>
    <a name="top"></a>
    <div class="pui-layout">

        <!-- header栏 -->
        <div class="page-header">
            <div class="pui-layout pui-layout-fixed pui-layout-fixed-1200">
                <div class="pui-menubar pui-menubar-square pui-menubar-header-style pui-bg-none pui-unbordered">
                    <div class="pui-menubar-aside">
                        <h2 class="pui-margin-none pui-text-normal page-title" title="中国移动南方基地">
                            <img src="<?php echo \think\Config::get('web_res_root'); ?>/image/CM.png" class="icon-CM" />
                            中国移动南方基地知识题库</h2>
                    </div>
                    <div class="pui-menubar-offside">
                        <ul class="pui-menu pui-menu-inline pui-menu-simple pui-right">
                            <li>
                                <a href="#top">管理员</a>
                            </li>
                            <li>
                                <a href="<?php echo url('index/login/change_pwd'); ?>" id="pwchange">密码修改</a>
                            </li>
                            <li>
                                <a href="<?php echo url('index/Login/logout'); ?>">退出</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- 侧边栏 -->
        <div class="container ">
            <div class="pui-row">

                    <div class="pui-grid-md-2">
                        <div class="pui-btn-group-vertical pui-btn-gradient pui-btn-shadow ">
                            <div class="pui-btn-group ">
                                <a href="<?php echo url('index/usermanage/user_manage'); ?>" ><button class="pui-btn-style  pui-btn pui-btn-primary pui-btn-large pui-text-shadow pui-btn-primary-active"><i class="fa fa-user fa-large"></i> 用户管理</button></a>
                                <a href="<?php echo url('manage/Problemmanage/problem_manage'); ?>" ><button class="pui-btn-style  pui-btn pui-btn-primary pui-btn-large pui-text-shadow "><i class="fa fa-list-alt fa-large"></i> 题目管理</button></a>
                                <a href="<?php echo url('event/index/showevent'); ?>"><button class="pui-btn-style  pui-btn pui-btn-primary pui-btn-large pui-text-shadow "><i class="fa fa-file-o fa-large"></i> 事件管理</button></a>
                                <a href="<?php echo url('item_manage/item/index'); ?>" ><button class="pui-btn-style  pui-btn pui-btn-primary pui-btn-large pui-text-shadow "><i class="fa fa-th fa-large"></i> 道具管理</button></a>
                            </div>

                        </div>
                    </div>
                    <div style="margin-top:1em" class="pui-grid-md-9">
                        <!-- <button class="create_btn pui-btn pui-btn-primary pui-btn-large pui-text-shadow "><i class="fa fa-user fa-large"></i>创建新用户</button> -->
                        <table id="user_message" class="pui-table pui-table-bordered pui-table-text-center pui-table-thead-bg pui-table-interlaced-color box-shadow-bottom pui-table-gradient">
                            <thead>
                                <tr>
                                    <th>用户ID</th>
                                    <th>登录名</th>
                                    <th>姓名</th>
                                    <th>手机号</th>
                                    <th>工号</th>
                                    <th>性别</th>
                                    <th>编辑</th>

                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        <button class="create_btn pui-btn pui-btn-primary pui-btn-large pui-text-shadow "><i class="fa fa-user fa-large"></i>创建新用户</button>
                        <!-- <button id="create-user" class="pui-btn pui-btn-primary pui-btn-large pui-text-shadow">创建新用户</button> -->
                        <!-- 新建用户表 -->
                        <div id="user_form" class="novisibility">
                            <form>
                                <div>
                                    <label>姓名</label>
                                    <input type="text" id="user_name" name="user_name" maxlength="16" class="" placeholder="姓名" />
                                </div>
                                <div>
                                    <label>登录名</label>
                                    <input type="text" id="login_name" name="login_name" maxlength="16" class="" placeholder="登录名" />
                                </div>
                                <div>
                                    <label>手机号</label>
                                    <input type="text" id="user_phone_number" name="user_phone_number" maxlength="16" class="" placeholder="手机号" />
                                </div>
                                <div>
                                    <label>工号</label>
                                    <input type="text" id="user_job_number" name="user_job_number" maxlength="16" class="" placeholder="工号" />
                                </div>
                                <div>
                                    <label>性别</label>
                                    <select id="user_gender" name="user_gender">
                                        <option value="男">男</option>
                                        <option value="女">女</option>
                                    </select>
                                </div>
                                <div>
                                    <button class="pui-btn pui-btn-primary pui-btn-large" id="add_user" name="add_user" onclick="adduser()">确定</button>
                                    <input type="button" class="pui-btn pui-btn-warning pui-btn-large active" id="btn_qx" value="取消">
                                </div>
                            </form>
                        </div>
                        <!-- 修改用户栏 -->
                        <div id="form_change" class="novisibility">
                            <form>
                                <div>
                                    <label>姓名</label>
                                    <input type="text" id="change_user_name" name="user_name" maxlength="16" class="" placeholder="姓名" />
                                </div>
                                <div>
                                    <label>登录名</label>
                                    <input type="text" id="change_login_name" name="login_name" maxlength="16" class="" placeholder="登录名" />
                                </div>
                                <div>
                                    <label>手机号</label>
                                    <input type="text" id="change_user_phone_number" name="user_phone_number" maxlength="16" class="" placeholder="手机号" />
                                </div>
                                <div>
                                    <label>工号</label>
                                    <input type="text" id="change_user_job_number" name="user_job_number" maxlength="16" class="" placeholder="工号" />
                                </div>
                                <div>
                                    <label>性别</label>
                                    <select id="change_user_gender" name="user_gender">
                                        <option value="男">男</option>
                                        <option value="女">女</option>
                                    </select>
                                </div>
                                <button class="pui-btn pui-btn-primary pui-btn-large" id="change_user" name="change_user" onclick="changeuser()">确定</button>
                            </form>
                        </div>
                    </div>

            </div>
        </div>
        <!-- <div class="novisibility" id="testDialog">
            请输入原密码:<input type="password" id="pass0" /><br />
            请输入新密码:<input type="password" id="pass1" /><br />
            再次输入密码:<input type="password" id="pass2"><br />
            <button class="pui-btn pui-btn-primary pui-btn-large" id="confirm">确定</button>
            <button class="pui-btn pui-btn-primary pui-btn-large">取消</button>
        </div> -->
</body>
<script type="text/javascript" src="<?php echo \think\Config::get('web_res_root'); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo \think\Config::get('web_res_root'); ?>/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo \think\Config::get('web_res_root'); ?>/js/planeui.js"></script>
<script>
    //修改用户
    function changeuser() {
        //var change_id = $(this).parent().parent().find('td').eq(0).html();
        var user_name = $(".pui-dialog #change_user_name").val();
        var login_name = $(".pui-dialog #change_login_name").val();
        var user_phone_number = $(".pui-dialog #change_user_phone_number").val();
        var user_job_number = $(".pui-dialog #change_user_job_number").val();
        var user_gender = $(".pui-dialog #change_user_gender").val();

        if (change_user_name == '' || change_login_name == '' || change_user_phone_number == '' || change_user_job_number == '' || change_user_gender == '') {
            alert("信息不能留空");
        } else {
            var post_data = { change_id: change_id, user_name: user_name, login_name: login_name, user_phone_number: user_phone_number, user_job_number: user_job_number, user_gender: user_gender };
            $.ajax({
                url: "<?php echo url('index/usermanage/updateuser'); ?>",
                dataType: "json",
                type: 'POST',
                data: post_data,
                async: false,
                success: function (data) {
                    json_data = eval('(' + data + ')');
                    alert("修改成功");
                    // alert(json_data['result']);
                },
                error: function (data, status, error) {
                    alert("跳转失败");
                    alert(error);
                }
            });
        }
        return false;
    }
</script>
<script>
    //增加用户
    function adduser() {
        var user_name = $(".pui-dialog #user_name").val();
        var login_name = $(".pui-dialog #login_name").val();
        var user_phone_number = $(".pui-dialog #user_phone_number").val();
        var user_job_number = $(".pui-dialog #user_job_number").val();
        var user_gender = $(".pui-dialog #user_gender").val();

        if (user_name == '' || login_name == '' || user_phone_number == '' || user_job_number == '' || user_gender == '') {
            alert("信息不能留空");
        } else {
            var post_data = { user_name: user_name, login_name: login_name, user_phone_number: user_phone_number, user_job_number: user_job_number, user_gender: user_gender };
            $.ajax({
                url: "<?php echo url('index/usermanage/adduser'); ?>",
                dataType: "json",
                type: 'POST',
                data: post_data,
                async: false,
                success: function (data) {
                    json_data = eval('(' + data + ')');
                    alert("添加成功");
                    // alert(json_data['result']);
                },
                error: function (data, status, error) {
                    alert("跳转失败");
                    alert(error);
                }
            });
        }
        return false;
    }

</script>

</html>

<script type="text/javascript">
    $(document).ready(function () {
        loadInit();
        //删除用户
        $(".delete_btn").click(function () {
            alert("确认删除");
            var delete_id = $(this).parent().parent().find('td').eq(0).html();
            var post_data = { delete_id: delete_id };

            $.ajax({
                url: "<?php echo url('index/usermanage/deleteuser'); ?>",
                dataType: "json",
                type: 'POST',
                data: post_data,
                async: false,
                success: function (data) {
                    json_data = eval('(' + data + ')');
                    alert(json_data['result']);
                    window.location.reload();
                },
                error: function (data, status, error) {
                    alert("跳转失败");
                    alert(error);
                }
            });
        });
        //修改用户
        $(".change_btn").click(function () {
            change_id = $(this).parent().parent().find('td').eq(0).html();//获取change_id
            var login_name = $(this).parent().parent().find('td').eq(1).html();
            var user_name = $(this).parent().parent().find('td').eq(2).html();
            var user_phone_number = $(this).parent().parent().find('td').eq(3).html();
            var user_job_number = $(this).parent().parent().find('td').eq(4).html();
            var user_gender = $(this).parent().parent().find('td').eq(5).html();
            $.dialog({
                from: "#form_change",
                padding: 10
            });
            //显示在dialog上
            $(".pui-dialog #change_login_name").val(login_name);
            $(".pui-dialog #change_user_name").val(user_name);
            $(".pui-dialog #change_user_phone_number").val(user_phone_number);
            $(".pui-dialog #change_user_job_number").val(user_job_number);
            $(".pui-dialog #change_user_gender").val(user_gender);
        });
        $(".create_btn").click(function again() {

                $.dialog({
			            from : "#user_form",
			            padding: 10
			        });

        });
    });
    //初始化页面数据
    function loadInit() {
        var post_data = {};
        $.ajax({
            url: "<?php echo url('index/usermanage/show'); ?>",
            dataType: "json",
            type: 'GET',
            data: post_data,
            async: false,
            success: function (data) {
                json_data = eval('(' + data + ')');
                $.each(json_data, function (i, item) {
                    //alert(item.name+" "+item.phone_number+" "+item.job_number);
                    $('#user_message').append("<tr><td>" + item.id + "</td><td>"
                                                         + item.login_name + "</td><td>"
                                                         + item.name + "</td><td>"
                                                         + item.phone_number + "</td><td>"
                                                         + item.job_number + "</td><td>"
                                                         + item.gender + "</td><td>"

                                                         + "<button class='change_btn pui-btn pui-btn-error pui-btn-small'>" + "修改" + "</button>"
                                                         +" "
                                                         + "<button class='delete_btn pui-btn pui-btn-primary pui-btn-small'>" + "删除" + "</button>"
                                                         + "</td></tr>");
                });
            },
            error: function (data, status, error) {
                alert("跳转失败");
                alert(error);
            }
        });
    }
</script>


<!-- <script>
    $(document).ready(function () {
        $("#user_form").hide();
        $("#create-user").click(function () {
            $("#user_form").toggle();
        });
        $("#btn_qx").click(function () {
            $("#user_form").hide();
        });
    });
</script> -->
