<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>"/>
<meta name="description" content="<?php echo $SEO['description'];?>"/>
<link href="<?php echo CSS_PATH;?>aihj/swiper.css?a=4" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>aihj/bootstrap.css?a=3" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>aihj/index.css?a=5" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo CSS_PATH;?>aihj/companyinfo.css?a=1" />
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>aihj/teaminfo.css?a=1"/>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>aihj/companyculture.css?a=1"/>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>aihj/servicecontent.css?a=1"/>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>aihj/download.css?a=1"/>
<script type="text/javascript" src="<?php echo JS_PATH;?>aihj/jquery.js?a=3"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>aihj/public.js?a=1"></script>
<script type='text/javascript' src='http://webchat.7moor.com/javascripts/7moorInit.js?accessId=2333e6d0-a64f-11e6-96e5-2b31411bfe87&autoShow=true' async='async'></script>
</head>
<body>
<!--<div class="body-top">
    <div class="content">
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2e3bec5eab254972ef7678fb28fb15b9&action=position&posid=9&order=id&num=10&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('posid'=>'9','order'=>'id',)).'2e3bec5eab254972ef7678fb28fb15b9');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'9','order'=>'id','limit'=>'10',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
    		<div id="announ">
                 <ul>
                 <?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>
                      <li><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a></li>
                      <?php $n++;}unset($n); ?>
                 </ul>
            </div>
     <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	 <?php echo runhook('glogal_header')?>
<script type="text/javascript">
$(function(){
	startmarquee('announ',22,1,500,3000);
})
</script>
            <div class="login lh24 blue"><a href="<?php echo APP_PATH;?>index.php?m=content&c=rss&siteid=<?php echo get_siteid();?>" class="rss ib">rss</a><span class="rt"><script type="text/javascript">document.write('<iframe src="<?php echo APP_PATH;?>index.php?m=member&c=index&a=mini&forward='+encodeURIComponent(location.href)+'&siteid=<?php echo get_siteid();?>" allowTransparency="true"  width="500" height="24" frameborder="0" scrolling="no"></iframe>')</script></span></div>
    </div>
</div>-->
<!--<div class="header">-->
	<!--<div class="logo"><a href="<?php echo siteurl($siteid);?>/"><img src="<?php echo IMG_PATH;?>v9/logo.jpg" /></a></div>-->
<div id="header">
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
				<h1 class="middle"><a href="<?php echo siteurl($siteid);?>/"><img src="<?php echo IMG_PATH;?>v9/logo.png" alt="爱惠家欢迎您!请稍等..."/></a></h1>
			</div>
			<div class="col-lg-7 col-lg-offset-3 col-md-7 col-md-offset-3 col-sm-10 col-xs-8">
				<div class="header_pc">
					<map>
			    	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
			        	<ul class="header_right left">
						<li class="active left" rel="0"><a href="<?php echo siteurl($siteid);?>">首页</a></li>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<li class="left" rel="<?php echo $r['catid'];?>" <?php if($r[catid] == 25) { ?> style="display: none;<?php } else { ?><?php } ?>">
							<a <?php if($r[catid] == 9) { ?> href="javascript:void(0)" <?php } else { ?> href="<?php echo $r['url'];?>"<?php } ?>><?php echo $r['catname'];?></a>
							<ul class="sub-menu">
								<?php $n=1;if(is_array(subcat($r[catid]))) foreach(subcat($r[catid]) AS $v) { ?>
								<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fb7bc78d0d7e09b1eb00d7d2cd6b61b8&action=category&catid=%24r%5Bcatid%5D&num=8&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$r[catid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'8',));}?>
								<?php $n=1; if(is_array($data)) foreach($data AS $i => $r) { ?>
								<li class="sub-menu_li" rel="<?php echo $r['catid'];?>"><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
								<?php $n++;}unset($n); ?>
								<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
								<?php $n++;}unset($n); ?>
							</ul>
						</li>
						<?php $n++;}unset($n); ?>
			            </ul>
			        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					<?php echo runhook('glogal_menu')?>
			        </map>
			        <!--<div class="loginAndload left"><script type="text/javascript">document.write('<iframe src="<?php echo APP_PATH;?>index.php?m=member&c=index&a=mini&forward='+encodeURIComponent(location.href)+'&siteid=<?php echo get_siteid();?>" allowTransparency="true" width="120" height="44" frameborder="0" scrolling="no"></iframe>')</script></div>-->
					<p class="left loginTel"><a href="tel:010-82699820">010-82699820</a></p>
					
				</div>
				<div class="header_phone">
					<span id="menuHeader">
						<img src="<?php echo IMG_PATH;?>aihj/caidan.png"/>
					</span>
				</div>
			</div>
			
		</div>
	</div>
	<map>
	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
    	<ul class="headerSlide">
		<li><a href="<?php echo siteurl($siteid);?>"><span>首页</span></a></li>
		<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
		<li>
			<a <?php if($r[catid] == 9 || $r[catid] == 12) { ?> href="javascript:void(0)"<?php } else { ?> href="<?php echo $r['url'];?>" <?php } ?>><?php echo $r['catname'];?></a>
		</li>
		<?php $n++;}unset($n); ?>
		<li></li>
        </ul>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	<?php echo runhook('glogal_menu')?>
   	</map>
	<script src="<?php echo JS_PATH;?>aihj/header.js?a=3" type="text/javascript" charset="utf-8"></script>
    <!--<div class="search">
    	<div class="tab" id="search">
			<?php $j=0?>
			<?php $search_model = getcache('search_model_'.$siteid, 'search');?>
			<?php $n=1;if(is_array($search_model)) foreach($search_model AS $k=>$v) { ?>
			<?php $j++;?>
				<a href="javascript:;" onclick="setmodel(<?php echo $v['typeid'];?>, $(this));" style="outline:medium none;" hidefocus="true" <?php if($j==1 && $typeid=$v['typeid']) { ?> class="on" <?php } ?>><?php echo $v['name'];?></a><?php if($j != count($search_model)) { ?><span> | </span><?php } ?>
			<?php $n++;}unset($n); ?>
			<?php unset($j);?>
		</div>

        <div class="bd">
            <form action="<?php echo APP_PATH;?>index.php" method="get" target="_blank">
				<input type="hidden" name="m" value="search"/>
				<input type="hidden" name="c" value="index"/>
				<input type="hidden" name="a" value="init"/>
				<input type="hidden" name="typeid" value="<?php echo $typeid;?>" id="typeid"/>
				<input type="hidden" name="siteid" value="<?php echo $siteid;?>" id="siteid"/>
                <input type="text" class="text" name="q" id="q"/><input type="submit" value="搜 索" class="button" />
            </form>
        </div>
    </div>-->

    <!--<div class="banner"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=1"></script></div>
    <div class="bk3"></div>
    <div class="nav-bar">
    	<map>
    	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
        	<ul class="nav-site">
			<li><a href="<?php echo siteurl($siteid);?>"><span>首页</span></a></li>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<li class="line">|</li>
			<li><a href="<?php echo $r['url'];?>"><span><?php echo $r['catname'];?></span></a></li>
			<?php $n++;}unset($n); ?>
            </ul>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		<?php echo runhook('glogal_menu')?>
        </map>
    </div> 
	
	<?php if($top_parentid) { ?>
    <div class="subnav">
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=894824ec88c3701696ad9d879ede6b1d&action=category&catid=%24top_parentid&num=15&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$top_parentid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'15',));}?>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a><span> | </span>
			<?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		<a href="<?php echo APP_PATH;?>index.php?m=video&c=index&a=album">视频专辑</a> <span> | </span>
    	<?php if($modelid) { ?><a href="<?php echo APP_PATH;?>index.php?m=content&c=search&catid=<?php echo $catid;?>">搜索</a><?php } ?>
    </div>
	<?php } ?>-->
</div>
<!--<div id="slide">
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
				<h1 class="middle"><a href="<?php echo siteurl($siteid);?>/"><img src="<?php echo IMG_PATH;?>v9/logo.png" alt="爱惠家欢迎您!请稍等..."/></a></h1>
			</div>
			<ul class="slide_right col-lg-6 col-lg-offset-4 col-md-6 col-md-offset-4 col-sm-10 col-xs-8">
				<li rel="header" class="active left"><a href="###">首页</a></li>
				<li rel="realWatch" class="left"><a href="###">产品介绍</a></li>
				<li rel="join" class="left"><a href="###">公司理念</a></li>
			</ul>
		</div>
	</div>
</div>-->