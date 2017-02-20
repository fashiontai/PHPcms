<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!--main-->
<div class="main">
	<div class="firm_top">
		<img src="<?php echo IMG_PATH;?>aihj/companyinfo/firmbanner.png"/>
	</div>
	<div class="firminfo">
		<h2 class="title">公司简介</h2>
		<p class="title_upword">PROFILE</p>
		<div class="firminfo_con">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ef4d0f879df10f5e1445b2d2049509b2&action=position&posid=19&order=listorder+DESC&num=1&thumb=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'19','order'=>'listorder DESC','thumb'=>'1','limit'=>'1',));}?>
			<?php $n=1; if(is_array($data)) foreach($data AS $key => $r) { ?>
			<div class="firminfo_left left">
				<img src="<?php echo $r['thumb'];?>"/>
			</div>
			<div class="firminfo_right left">
				<p class="word"><?php echo $r['content'];?></p>
			</div>
			<div class="clear"></div>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</div>
	</div>
	<!--<div class="firmhonor">
		<div class="container">
			<div class="row">
				<h2 class="title">公司荣誉</h2>
				<p class="title_upword">GLORIES OF COMPANY</p>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8580219fb7795ff48426f671d04ec949&action=position&posid=18&order=listorder+DESC&num=10&thumb=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'18','order'=>'listorder DESC','thumb'=>'1','limit'=>'10',));}?>
				<ul class="firmhonor_ul">
				<?php $n=1; if(is_array($data)) foreach($data AS $key => $r) { ?>
				<li class="col-lg-4 col-md-4">
					<img src="<?php echo $r['thumb'];?>"/>
					<section>
						<h3 class="h3_middle"><?php echo $r['title'];?></h3>
						<span class="h3_middle_span"></span>
						<p class="h3_middle_des"><?php echo $r['description'];?></p>
						<p class="h3_p_middle"><?php echo $r['content'];?></p>
					</section>
				</li>
				<?php $n++;}unset($n); ?>
				</ul>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$('.firmhonor_ul li').hover(function(){
			$(this).find('section').slideDown('1000');
		},function(){
			$(this).find('section').slideUp('1000');
		})
	</script>-->
	<div class="organizational">
		<div class="container">
			<div class="row">
				<h2 class="title">组织架构图</h2>
				<p class="title_upword">ORGANIZATION CHART</p>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ce1a44924c8c82055e5439047c9c6051&action=position&posid=20&order=listorder+DESC&num=1&thumb=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'20','order'=>'listorder DESC','thumb'=>'1','limit'=>'1',));}?>
				<?php $n=1; if(is_array($data)) foreach($data AS $key => $r) { ?>
				<img src="<?php echo $r['thumb'];?>"/>
				<?php $n++;}unset($n); ?>
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