<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div id="content" role="main">
  <div class="post-top">
    <div class="post-nav">
      <a href="<?php $this->options->siteUrl(); ?>">首页</a>  &raquo; <a href="<?php $this->options->siteUrl(); ?>archives.html">档案</a>  &raquo; <?php $this->category(); ?>
    </div>
    <ul class="post-near">
        <li class="pagenav-left">上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
        <li class="pagenav-right">下一篇: <?php $this->theNext('%s','没有了'); ?></li>
    </ul>
  </div>
  <article class="post clearfix" itemscope itemtype="http://schema.org/BlogPosting">
      <h1 class="post-title" itemprop="name headline"><?php $this->title() ?></h1>
        <ul class="post-meta">
          <li itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('作者：'); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
          <li><?php _e('时间：'); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('Y年m月d日'); ?></time></li>
          <?php if(pluginExists('TePostViews')): ?>
          <li><?php _e('阅读：'); ?><?php $this->viewsNum(); ?></li>
          <?php endif; ?>
          <li><?php _e('分类：'); ?><?php $this->category(','); ?></li>
        </ul>
      <div class="post-content" itemprop="articleBody">
          <?php $this->content(); ?>
      </div>

      <div class="post-bottom">
        <h2>文档信息</h2>
        <li itemprop="keywords" class="tags"><?php _e('本文标签: '); ?><?php $this->tags(', ', true, '无标签'); ?></li>
        <li>版权声明：自由转载-非商用-非衍生-保持署名<a href="http://creativecommons.org/licenses/by-nc-nd/3.0/deed.zh" target="_blank">（创意共享3.0许可证）</a></li>
        <li>发表日期：<?php $this->date('Y年m月d日'); ?>，更新日期：<?php echo date('Y年m月d日', $this->modified); ?></li>
        <li>更多内容：<a href="<?php $this->options->siteUrl(); ?>archives.html">档案</a>  &raquo; <?php $this->category(); ?></li>
      </div>
      <div class="related-post">
        <h2>相关文章</h2>
        <?php $this->related(8)->to($relatedPosts); ?>
          <ul>
            <?php if($relatedPosts->have()): ?>
            <?php while ($relatedPosts->next()): ?>
            <li><?php $relatedPosts->date('Y年m月d日'); ?> &raquo; <a href="<?php $relatedPosts->permalink(); ?>" title="<?php $relatedPosts->title(); ?>"><?php $relatedPosts->title(); ?></a>
              <p><?php $relatedPosts->excerpt('100','...'); ?></p>
            </li>
            <?php endwhile; ?>
            <?php else: ?>
            <li><?php _e('无相关文章'); ?></li>
          <?php endif; ?>
          </ul>
      </div>
    </article>

    <?php $this->need('comments.php'); ?>
</div><!-- end #main-->
<?php $this->need('footer.php'); ?>
