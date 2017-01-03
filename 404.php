<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div id="content" class="post">
  <div class="mainleft">
    <div class="post-top">
      <div class="post-nav">
        <a href="<?php $this->options->siteUrl(); ?>">首页</a>  &raquo;
        <a href="<?php $this->options->siteUrl(); ?>archives.html">档案</a><?php $this->archiveTitle(); ?>
      </div>
    </div>
      <div class="error-page">
          <h2 class="post-title">404 - <?php _e('页面没找到'); ?></h2>
          <p><?php _e('你想查看的页面已被转移或删除了, 要不要搜索看看: '); ?></p>
          <form method="post">
              <p><input type="text" name="s" class="text" autofocus /></p>
              <p><button type="submit" class="submit"><?php _e('搜索'); ?></button></p>
          </form>
      </div>
      <div class="recent-post">
        <h2><?php _e('最新文章'); ?></h2>
            <ul class="recent-post-list">
            <?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=8')->to($recentPosts); ?>
            <?php while($recentPosts->next()): ?>
              <li><span><?php $recentPosts->date('Y年m月d日'); ?></span> &raquo; <a href="<?php $recentPosts->permalink() ?>"><?php $recentPosts->title() ?></a></li>
            <?php endwhile; ?>
            <li><a href="<?php $this->options->siteUrl(); ?>archives.html">查看更多文章...</a></li>
            </ul>
      </div>
  </div>
<?php $this->need('sidebar.php'); ?>
</div><!-- end #content-->
<?php $this->need('footer.php'); ?>
