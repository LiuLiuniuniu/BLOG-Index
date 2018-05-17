<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"D:\phpStudy\PHPTutorial\WWW\Blog\public/../app/admin\view\article\add.html";i:1525781634;s:66:"D:\phpStudy\PHPTutorial\WWW\Blog\app\admin\view\common\header.html";i:1525659823;s:64:"D:\phpStudy\PHPTutorial\WWW\Blog\app\admin\view\common\left.html";i:1525862985;}*/ ?>
<!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
    <title>乘风波浪</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="/static/admin/style/bootstrap.css" rel="stylesheet">
    <link href="/static/admin/style/font-awesome.css" rel="stylesheet">
    <link href="/static/admin/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="/static/admin/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="/static/admin/style/demo.css" rel="stylesheet">
    <link href="/static/admin/style/typicons.css" rel="stylesheet">
    <link href="/static/admin/style/animate.css" rel="stylesheet">
    <script src="/static/admin/utf8-php/ueditor.config.js" type="text/javascript"></script>
    <script src="/static/admin/utf8-php/ueditor.all.min.js" type="text/javascript"></script>
    <script src="/static/admin/utf8-php/lang/zh-cn/zh-cn.js" type="text/javascript"></script>
    
</head>
<body>
	<!-- 头部 -->
    <div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <img src="/static/admin/images/logo.png" alt="">
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="/static/admin/images/logo.jpg" style="margin-left: -10px;border-radius:50px">
                                </div>
                                <section>
                                    <h2><span class="profile"><span>欢迎,<?php echo \think\Request::instance()->session('username'); ?>!</span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area" style="margin-top:-3px;">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a onclick="confirm('你确定要退出吗?')" href="<?php echo url('Login/logout'); ?>">
                                        退出登录
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('Admin/edit',array('id'=>\think\Request::instance()->session('id'))); ?>">
                                        修改密码
                                    </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>

	<!-- /头部 -->
	
	<div class="main-container container-fluid">
		<div class="page-container">
			 <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input class="searchinput" type="text">
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        <!--Dashboard-->
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text">管理员</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('admin/lis'); ?>">
                        <span class="menu-text">管理列表</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-file-text"></i>
                <span class="menu-text">文章</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('article/lis'); ?>">
                        <span class="menu-text">文章列表</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">栏目</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('cate/lis'); ?>">
                        <span class="menu-text">栏目管理</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-link"></i>
                <span class="menu-text">友情链接</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('links/lis'); ?>">
                        <span class="menu-text">链接管理</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-tags"></i>
                <span class="menu-text">热门标签</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('tags/lis'); ?>">
                        <span class="menu-text">Tags标签管理</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
    <!-- /Sidebar Menu -->
</div>
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li><a href="#">系统</a></li>
                        <li><a href="#" onclick="window.history.go(-1)">文章管理</a></li>
                        <li class="active">添加文章</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
<div class="page-body">
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">新增文章</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" enctype="multipart/form-data" method="post">

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label no-padding-right">文章标题</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="title" required="" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label no-padding-right">文章关键字</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="keywords" required="" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label no-padding-right">文章简介</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="desc" required="" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label no-padding-right">文章作者</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="author" required="" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label no-padding-right">缩略图</label>
                            <div class="col-sm-6">
                                <input name="pic"  type="file" style="height: 35px;">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label no-padding-right">链接标题</label>
                            <div class="col-sm-6">
                                <select name="cateid" id="">
                                    <option>请选择所属栏目</option>
                                    <?php if(is_array($cateres) || $cateres instanceof \think\Collection || $cateres instanceof \think\Paginator): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <option value="<?php echo $vo['id']; ?>"><?php echo $vo['catename']; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label no-padding-right">是否推荐</label>
                            <div class="col-sm-6">
                                <div class="col-sm-6">
                                    <label for="">
                                        <input type="checkbox" name="state" value="1" class="checkbox-slider colored-darkred">
                                        <span class="text"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label no-padding-right">文章内容</label>
                            <div class="col-sm-6">
                                <textarea name="content" id="content" cols="64" rows="5"  style="text-indent: 10px;"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">保存信息</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
		</div>	
	</div>

	    <!--Basic Scripts-->
    <script src="/static/admin/style/jquery_002.js"></script>
    <script src="/static/admin/style/bootstrap.js"></script>
    <script src="/static/admin/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="/static/admin/style/beyond.js"></script>
    <script type="text/javascript">
        UE.getEditor('content',{initialFrameWidth:860,initialFrameHeight:220,});
    </script>

</body></html>