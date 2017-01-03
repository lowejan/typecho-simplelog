<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php if($this->is('index')): ?><?php $this->options->title(); ?> - <?php $this->options->description() ?>
    <?php else: ?>
      <?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?>
      <?php endif; ?></title>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <?php if ($this->options->faviconUrl): ?>
    <link rel="icon" href="<?php $this->options->faviconUrl() ?>" type="image/png">
    <?php else: ?>
    <link rel="icon" href="<?php $this->options->themeUrl('image/favicon.ico'); ?>" type="image/ico">
    <?php endif; ?>
    <script src="<?php $this->options->themeUrl('js/jquery-2.1.4.min.js'); ?>" type="text/javascript"></script>

    <!--[if lt IE 9]>
    <script src="http://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="http://cdn.staticfile.org/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->

<div id="container">

<header id="header" class="clearfix">
  <div class="site-name">
    <h1><?php $this->options->title() ?></h1><span class="description"><?php $this->options->description() ?></span>
  </div>
  <div class="site-search">
    <form id="search" method="post" action="./" role="search">
      <label for="s" class="sr-only"><?php _e('搜索关键字'); ?></label>
        <input type="text" name="s" class="text" placeholder="<?php _e('输入关键字搜索'); ?>" />
        <button type="submit" class="submit"><?php _e('搜索'); ?></button>
    </form>
  </div>

</header><!-- end #header -->
