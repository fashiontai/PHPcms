<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>aihj/video-js.css?a=1"/>
<!--main-->
<div class="main">
	<div class="culture_top">
		<img src="<?php echo IMG_PATH;?>aihj/companyinfo/firmbanner.png"/>
	</div>
	<div class="campaign">
		<div class="container">
			<div class="row">
				<h2 class="title">企业宣传册</h2>
				<p class="title_upword">ENTERPRISE FLYER</p>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e536889672e80944125e29f9afd6cce3&action=lists&catid=15&where=posids%21%3D1&order=id+DESC&num=3&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'15','where'=>'posids!=1','order'=>'id DESC','moreinfo'=>'1','limit'=>'3',));}?> 
				<ul class="campaign_ul">
					<?php $n=1; if(is_array($data)) foreach($data AS $key => $r) { ?>
					<li>
						<dl>
							<dt><img src="<?php echo $r['thumb'];?>" alt="" /></dt>
							<dd><?php echo $r['content'];?></dd>
						</dl>
					</li>
					<?php $n++;}unset($n); ?>
				</ul>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</div>
		</div>
	</div>
	<div class="short">
		<div class="container">
			<div class="row">
				<h2 class="title">企业短片</h2>
				<p class="title_upword">CORPORATE VIDEO</p>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=38a1a06699d3af38c68fb4d43a3e75cb&action=position&posid=24&order=listorder+DESC&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'24','order'=>'listorder DESC','limit'=>'3',));}?>
				<ul class="short_ul">
					<?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
					<li class="left">
						<div class="short_ul_div">
							<video id="example_video_1" class="video-js vjs-default-skin" controls preload="none"
						      poster="<?php echo $val['thumb'];?>" data-setup="{}">
							    <source src="<?php echo $val['content'];?>" type='video/mp4' />
							    <track kind="captions" src="demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
							    <track kind="subtitles" src="demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
							</video>
						</div>
					</li>
					<?php $n++;}unset($n); ?>
					<li class="clear" style="height:0;"></li>
				</ul>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</div>
		</div>
	</div>
	<script src="<?php echo JS_PATH;?>aihj/video.js" type="text/javascript" charset="utf-8"></script>
	<div class="signature">
		<div class="container">
			<div class="row">
				<h2 class="title">特色活动</h2>
				<p class="title_upword">SPECIAL ACTIVITIES</p>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=555a174135c7df42f6b173c7112adbdc&action=position&posid=25&order=listorder+DESC&num=10&thumb=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'25','order'=>'listorder DESC','thumb'=>'1','limit'=>'10',));}?>
				<ul class="signature_ul">
					<?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
					<li class="left">
						<div class="left signature_left">
							<a href="<?php echo $val['url'];?>">
								<img src="<?php echo $val['thumb'];?>"/>
							</a>
						</div>
						<div class="left signature_right">
							<h3><?php echo $val['title'];?></h3>
							<p><?php echo $val['description'];?></p>
						</div>
						<div class="clear"></div>
					</li>
					<?php $n++;}unset($n); ?>
					<li class="clear" style="border: 0;"></li>
				</ul>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</div>
		</div>
	</div>
	<!--<div class="col-left">
    	<div class="crumbs"><a href="<?php echo siteurl($siteid);?>">首页</a><span> > </span><?php echo catpos($catid);?> 列表</div>
    	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5ab4b05e97fd14c3ed386604ee1a9399&action=lists&catid=%24catid&num=25&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 25;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
        <ul class="list lh24 f14">
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
	<li><span class="rt"><?php echo date('Y-m-d H:i:s',$r[inputtime]);?></span>·<a href="<?php echo $r['url'];?>" target="_blank"<?php echo title_style($r[style]);?>><?php echo $r['title'];?></a></li>
	<?php if($n%5==0) { ?><li class="bk20 hr"></li><?php } ?>
<?php $n++;}unset($n); ?>
        </ul>
        <div id="pages" class="text-c"><?php echo $pages;?></div>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
  </div>
    <div class="col-auto">
        <div class="box">
            <h5 class="title-2">频道总排行</h5>
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0ad40a45ad075d8f47798a231e25aec2&action=hits&catid=%24catid&num=10&order=views+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>$catid,'order'=>'views DESC',)).'0ad40a45ad075d8f47798a231e25aec2');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>$catid,'order'=>'views DESC','limit'=>'10',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
            <ul class="content digg">
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a></li>
				<?php $n++;}unset($n); ?>
            </ul>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
        <div class="bk10"></div>
        <div class="box">
            <h5 class="title-2">频道本月排行</h5>
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2caa10e576ba663010144233732308cd&action=hits&catid=%24catid&num=8&order=monthviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>$catid,'order'=>'monthviews DESC',)).'2caa10e576ba663010144233732308cd');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>$catid,'order'=>'monthviews DESC','limit'=>'8',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
            <ul class="content rank">
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<li><span><?php echo number_format($r[monthviews]);?></span><a href="<?php echo $r['url'];?>"<?php echo title_style($r[style]);?> class="title" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],56,'...');?></a></li>
				<?php $n++;}unset($n); ?>
            </ul>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
    </div>-->
</div>
<?php include template("content","footer"); ?>