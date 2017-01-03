<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div id="content">
    <div class="mainleft" role="main">
      <div class="post-top">
        <div class="post-nav">
          <a href="<?php $this->options->siteUrl(); ?>">首页</a>  &raquo; <a href="<?php $this->options->siteUrl(); ?>archives.html">档案</a>
        </div>
      </div>
        <h1 class="archive-title clearfix"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h1>
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
            <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
    			<h2 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
                <div class="post-content" itemprop="articleBody">
        			<?php $this->content('继续阅读全文 &raquo;'); ?>
              <ul class="main-meta">
              <li itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('作者：'); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
              <li><?php _e('时间：'); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('Y年m月d日 H:i'); ?></time></li>
              <li><?php _e('分类：'); ?><?php $this->category(','); ?></li>
              <?php if(pluginExists('TePostViews')): ?>
              <li><?php _e('阅读：'); ?><?php $this->viewsNum(); ?></li>
              <?php endif; ?>
              <li itemprop="interactionCount"><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('留言', '留言（1）', '留言（%d）'); ?></a></li>
              </ul>
                </div>
    		</article>
    	<?php endwhile; ?>
        <?php else: ?>
            <article class="post">
                <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
            </article>
        <?php endif; ?>

        <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    </div>
	<?php $this->need('sidebar.php'); ?>
</div>
	<?php $this->need('footer.php'); ?>
