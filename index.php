<?php
/**
 * 这是 www.lubannong.com 的一套简洁皮肤
 *
 * @package SimpleLog
 * @author lubannong
 * @version 0.1.0
 * @link https://luweiqiang.com/blog/typecho-theme-simplelog.html
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
<div id="content">
<div class="mainleft">
  <?php while($this->next()): ?>
    <?php if ($this->sequence == 1): ?>
    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
        <h1 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
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
  <?php endif; ?>
  <?php endwhile; ?>

  <div class="recent-post">
    <h2><?php _e('最新文章'); ?></h2>
      <ul class="recent-post-list">
      <?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=7')->to($recentPosts); ?>
      <?php while($recentPosts->next()): ?>
        <?php if ($recentPosts->sequence != 1): ?>
        <li><span><?php $recentPosts->date('Y年m月d日'); ?></span> &raquo; <a href="<?php $recentPosts->permalink() ?>"><?php $recentPosts->title() ?></a></li>
        <?php endif; ?>
      <?php endwhile; ?>
      <li><a href="<?php $this->options->siteUrl(); ?>archives.html">查看更多文章...</a></li>
      </ul>
  </div>
</div>
<?php $this->need('sidebar.php'); ?>
</div>

<?php $this->need('footer.php'); ?>
