<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="sidebar" role="complementary">
  <div class="mainright">
  <?php if($this->is('index')): ?>
    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentComments', $this->options->sidebarBlock)): ?>
    <section class="widget">
		<h3 class="widget-title"><?php _e('最近留言'); ?></h3>
        <ul class="widget-list">
        <?php $this->widget('Widget_Comments_Recent','ignoreAuthor=true')->to($comments); ?>
        <?php while($comments->next()): ?>
            <li><a href="<?php $comments->permalink(); ?>" title="在《<?php $comments->title(); ?>》一文中说：<?php $comments->excerpt(40, '...'); ?>"><?php $comments->author(false); ?></a></li>
        <?php endwhile; ?>
        </ul>
    </section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowFollowMe', $this->options->sidebarBlock)): ?>
    <section class="widget">
    <h3 class="widget-title"><?php _e('关注我'); ?></h3>
        <ul class="widget-list">
          <?php if ($this->options->jianshuUrl): ?>
            <li><a href="<?php $this->options->jianshuUrl() ?>" title="在简书关注我" target="_blank">简书</a></li>
          <?php endif; ?>
          <?php if ($this->options->weiboUrl): ?>
            <li><a href="<?php $this->options->weiboUrl() ?>" title="在微博关注我" target="_blank">微博</a></li>
          <?php endif; ?>
          <?php if ($this->options->doubanUrl): ?>
            <li><a href="<?php $this->options->doubanUrl() ?>" title="在豆瓣关注我" target="_blank">豆瓣</a></li>
          <?php endif; ?>
          <?php if ($this->options->twitterUrl): ?>
            <li><a href="<?php $this->options->twitterUrl() ?>" title="在twitter关注我" target="_blank">twitter</a></li>
          <?php endif; ?>
          <?php if ($this->options->githubUrl): ?>
            <li><a href="<?php $this->options->githubUrl() ?>" title="在github关注我" target="_blank">github</a></li>
          <?php endif; ?>
        </ul>
    </section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowAboutMe', $this->options->sidebarBlock)): ?>
    <section class="widget">
    <h3 class="widget-title"><?php _e('关于'); ?></h3>
        <ul class="widget-list">
            <li><a href="<?php $this->options->siteUrl(); ?>about.html" title="">个人简介</a></li>
            <?php $this->widget('Widget_Stat')->to($stat); ?>
            <li>文章：<a href="<?php $this->options->siteUrl(); ?>archives.html"><?php $stat->publishedPostsNum() ?></a>，留言：<?php $stat->publishedCommentsNum() ?></li>
        </ul>
    </section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowOther', $this->options->sidebarBlock)): ?>
  <section class="widget">
    <h3 class="widget-title"><?php _e('订阅'); ?></h3>
        <ul class="widget-list">
            <li><a href="<?php $this->options->feedUrl(); ?>"><?php _e('文章 RSS'); ?></a></li>
            <li><a href="<?php $this->options->commentsFeedUrl(); ?>"><?php _e('评论 RSS'); ?></a></li>
        </ul>
  </section>
    <?php endif; ?>

  <?php else: ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>
    <section class="widget">
    <h3 class="widget-title"><?php _e('最新文章'); ?></h3>
        <ul class="widget-list">
            <?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=6')
            ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
        </ul>
    </section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)): ?>
    <section class="widget">
		<h3 class="widget-title"><?php _e('分类'); ?></h3>
        <?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=widget-list'); ?>
	</section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowArchive', $this->options->sidebarBlock)): ?>
    <section class="widget">
		<h3 class="widget-title"><?php _e('归档'); ?></h3>
        <ul class="widget-list">
            <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=Y年m月')
            ->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
        </ul>
	</section>
    <?php endif; ?>

  <?php endif; ?>
</div>
</div><!-- end #sidebar -->
