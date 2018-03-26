<?php

if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点 LOGO 地址'), _t('在这里填入一个图片 URL 地址, 以在网站标题前加上一个 LOGO'));
    $form->addInput($logoUrl);
    
    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowRecentPosts' => _t('显示最新文章'),
    'ShowRecentComments' => _t('显示最近回复'),
    'ShowCategory' => _t('显示分类'),
    'ShowArchive' => _t('显示归档'),
    'ShowOther' => _t('显示其它杂项')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multiMode());
  $favicon = new Typecho_Widget_Helper_Form_Element_Text('favicon', NULL, NULL, _t('favicon地址'), _t('一般为http://www.yourblog.com/image.png,支持 https:// 或 //,留空则不设置favicon'));
    $form->addInput($favicon->addRule('xssCheck', _t('请不要在图片链接中使用特殊字符')));

    $banner1 = new Typecho_Widget_Helper_Form_Element_Text('banner1', NULL, NULL, _t('banner1文章ID'), _t('请输入文章cid'));
    $form->addInput($banner1->addRule('xssCheck', _t('请不要在图片链接中使用特殊字符')));

    $banner2 = new Typecho_Widget_Helper_Form_Element_Text('banner2', NULL, NULL, _t('banner2文章ID'), _t('请输入文章cid'));
    $form->addInput($banner2->addRule('xssCheck', _t('请不要在图片链接中使用特殊字符')));

    $banner3 = new Typecho_Widget_Helper_Form_Element_Text('banner3', NULL, NULL, _t('banner3文章ID'), _t('请输入文章cid'));
    $form->addInput($banner3->addRule('xssCheck', _t('请不要在图片链接中使用特殊字符')));

    $socialgithub = new Typecho_Widget_Helper_Form_Element_Text('socialgithub', NULL, NULL, _t('输入github链接'), _t('在这里输入github链接,支持 http:// 或 https:// 或 //'));
    $form->addInput($socialgithub->addRule('xssCheck', _t('请不要在链接中使用特殊字符')));
    $socialzhihu = new Typecho_Widget_Helper_Form_Element_Text('socialzhihu', NULL, NULL, _t('输入知乎链接'), _t('在这里输入知乎链接,支持 http:// 或 https:// 或 //'));
    $form->addInput($socialzhihu->addRule('xssCheck', _t('请不要在链接中使用特殊字符')));
    $socialyouku = new Typecho_Widget_Helper_Form_Element_Text('socialyouku', NULL, NULL, _t('输入优酷链接'), _t('在这里输入优酷链接,支持 http:// 或 https:// 或 //'));
    $form->addInput($socialyouku->addRule('xssCheck', _t('请不要在链接中使用特殊字符')));
    $socialyoutube = new Typecho_Widget_Helper_Form_Element_Text('socialyoutube', NULL, NULL, _t('输入youtube链接'), _t('在这里输入youtube链接,支持 http:// 或 https:// 或 //'));
    $form->addInput($socialyoutube->addRule('xssCheck', _t('请不要在链接中使用特殊字符')));

}

function getRandomPosts($limit = 10){
	$options = Helper::options();
    $db = Typecho_Db::get();
    $result = $db->fetchAll($db->select()->from('table.contents')
		->where('status = ?','publish')
		->where('type = ?', 'post')
		->where('created <= unix_timestamp(now())', 'post')
		->limit($limit)
		->order('RAND()')
	);

	if($result){
		$i=1;
		foreach($result as $val){
			if($i<=3){
				$var = ' class="red"';
			}else{
				$var = '';
			}
			$val = Typecho_Widget::widget('Widget_Abstract_Contents')->push($val);
			$post_title = htmlspecialchars($val['title']);
			// $img = $options->themeUrl('./assets/images/p-post-1.jpg');
			echo '<li><a title="'.$post_title.'" href="www.yuche.com/archives'.$val['cid'].'">'.$post_title.'</a></li><hr>';
			
			$i++;
		}
	}
}

function themeFields($layout) {
    $ThumbImg = new Typecho_Widget_Helper_Form_Element_Text('ThumbImg', NULL, NULL, _t('缩略图url'), _t('通过上传附件上传图片获取Url 870*338'));
    $layout->addItem($ThumbImg);

     $bannerImg = new Typecho_Widget_Helper_Form_Element_Text('bannerImg', NULL, NULL, _t('banner缩略图url'), _t('通过上传附件上传图片获取Url 770*500 396*248'));
    $layout->addItem($bannerImg);
	
}

function themeInit($archive) {
	if ($archive->is('category') || $archive->is('search') || $archive->is('tag')) {
		$archive->parameter->pageSize = 12; // 自定义条数
	}
}


function getContet($cid)
{
	$db = Typecho_Db::get();
	$result = $db->fetchAll($db->select()->from('table.contents')
		->where('status = ?','publish')
		->where('type = ?', 'post')
		->where('cid  = ?',$cid)
		->order('cid', Typecho_Db::SORT_DESC)
	);

	$fields =  $db->fetchAll($db->select()->from('table.fields')
            ->where('cid = ?',$cid)
			->where('name  = ?','bannerImg'));
	$bannerImg = '';
	if (!empty($fields[0]['str_value'])) {
		$bannerImg = $fields[0]['str_value'];
	}
	$result[0]['bannerImg'] = $bannerImg;

	
	return $result[0];
}


 ?>