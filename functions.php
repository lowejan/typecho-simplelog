<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $faviconUrl = new Typecho_Widget_Helper_Form_Element_Text('faviconUrl', NULL, NULL, _t('站点favicon地址'), _t('这里填入一个图片URL地址（png图片，大小建议64x64）, 以在网站加一个favicon'));
    $form->addInput($faviconUrl);

    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock',
    array('ShowRecentPosts' => _t('显示最新文章'),
    'ShowRecentComments' => _t('显示最近回复'),
    'ShowFollowMe' => _t('显示关注我'),
    'ShowAboutMe' => _t('显示关于'),
    'ShowCategory' => _t('显示分类'),
    'ShowArchive' => _t('显示归档'),
    'ShowOther' => _t('显示订阅')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowFollowMe', 'ShowAboutMe', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('侧边栏显示'));
    $form->addInput($sidebarBlock->multiMode());

    $doubanUrl = new Typecho_Widget_Helper_Form_Element_Text('doubanUrl', NULL, NULL, _t('这里设置豆瓣'), _t('这里填入个人豆瓣地址，不填则不显示'));
    $form->addInput($doubanUrl);

    $jianshuUrl = new Typecho_Widget_Helper_Form_Element_Text('jianshuUrl', NULL, NULL, _t('这里设置简书'), _t('这里填入个人简书地址，不填则不显示'));
    $form->addInput($jianshuUrl);

    $weiboUrl = new Typecho_Widget_Helper_Form_Element_Text('weiboUrl', NULL, NULL, _t('这里设置微博'), _t('这里填入个人微博地址，不填则不显示'));
    $form->addInput($weiboUrl);

    $twitterUrl = new Typecho_Widget_Helper_Form_Element_Text('twitterUrl', NULL, NULL, _t('这里设置推特'), _t('这里填入个人twitter地址，不填则不显示'));
    $form->addInput($twitterUrl);

    $githubUrl = new Typecho_Widget_Helper_Form_Element_Text('githubUrl', NULL, NULL, _t('这里设置github'), _t('这里填入个人github地址，不填则不显示'));
    $form->addInput($githubUrl);

}

/**
 * 判断插件是否启用
 *
 * @param string $pluginName
 * @return bool
 */
function pluginExists($pluginName){
	static $_plugins;
	if(is_null($_plugins)){
		$_plugins = Typecho_Plugin::export();
	}
	return isset($_plugins['activated'][$pluginName]);
}
/*
function themeFields($layout) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $layout->addItem($logoUrl);
}
*/
