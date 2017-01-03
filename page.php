<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div id="content" role="main">
  <div class="mainleft">
  <div class="post-top">
    <div class="post-nav">
      <a href="<?php $this->options->siteUrl(); ?>">首页</a>  &raquo;
      <a href="<?php $this->options->siteUrl(); ?>archives.html">档案</a><?php $this->archiveTitle(); ?>
    </div>
  </div>
  <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
      <h1 class="archive-title" itemprop="name headline"><?php $this->title() ?></h1>
      <div class="post-content" itemprop="articleBody">
          <?php $this->content(); ?>
      </div>
      <ul class="main-meta">
        <li itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('作者：'); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
        <li><?php _e('时间：'); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('Y年m月d日'); ?></time></li>
        <?php if(pluginExists('TePostViews')): ?>
        <li><?php _e('阅读：'); ?><?php $this->viewsNum(); ?></li>
        <?php endif; ?>
      </ul>
  </article>
  </div>
<?php $this->need('sidebar.php'); ?>
</div>

<?php $this->need('footer.php'); ?>
