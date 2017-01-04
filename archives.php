<?php
/**
* 文章存档
*
* @package custom
*/
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php'); ?>

<div id="content">
    <div class="mainleft" role="main">
      <div class="post-top">
        <div class="post-nav">
          <a href="<?php $this->options->siteUrl(); ?>">首页</a>  &raquo; <a href="<?php $this->options->siteUrl(); ?>archives.html">档案</a><?php $this->archiveTitle(); ?>
        </div>
      </div>
      <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
      <?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);
    $year=0; $mon=0; $i=0; $j=0;
    $output = '<div class="post-content"  itemprop="articleBody">';
    while($archives->next()):
        $year_tmp = date('Y',$archives->created);
        $mon_tmp = date('m',$archives->created);
        $y=$year; $m=$mon;
        if ($mon != $mon_tmp && $mon > 0) $output .= '</ul></li>';
        if ($year != $year_tmp && $year > 0) $output .= '</ul>';
        if ($year != $year_tmp) {
            $year = $year_tmp;
            $output .= '<h2>'. $year .' 年</h2><ul class="archives-list">';
        }
        if ($mon != $mon_tmp) {
            $mon = $mon_tmp;
            $output .= '<li><span>'. $year .'年'. $mon .'月</span><ul>';
        }
        $output .= '<li>'.date('d日: ',$archives->created).'<a href="'.$archives->permalink .'">'. $archives->title .'</a> ('. $archives->commentsNum.')</li>';
    endwhile;
    $output .= '</ul></li></ul></div>';
    echo $output;

    $archives->pageNav('&laquo; 前一页', '后一页 &raquo;');
?>
</article>

    <?php $this->need('comments.php'); ?>
    </div>
	<?php $this->need('sidebar.php'); ?>
</div>
	<?php $this->need('footer.php'); ?>
