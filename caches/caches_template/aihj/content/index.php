<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="<?php echo IMG_PATH;?>aihj/banner1.png" alt="爱惠家欢迎您!请稍等..."/></div>
        <div class="swiper-slide"><img src="<?php echo IMG_PATH;?>aihj/banner2.png" alt="爱惠家欢迎您!请稍等..."/></div>
    </div>
    <div class="swiper-pagination"></div>
</div>
<div id="content" class="content">
	<div class="activeInfo">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=38a1a06699d3af38c68fb4d43a3e75cb&action=position&posid=24&order=listorder+DESC&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'24','order'=>'listorder DESC','limit'=>'3',));}?>
					<?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
					<?php if($val[id] == 41) { ?>
						<div class="short_ul_div">
							<video id="example_video_1" class="video-js vjs-default-skin" controls preload="none"
							  poster="<?php echo $val['thumb'];?>" data-setup="{}">
								<source src="<?php echo $val['content'];?>" type='video/mp4' />
							</video>
						</div>
					<?php } else { ?>
					<?php } ?>
					<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</div>
				<div class="col-lg-6">
					<h2 class="activeInfo_title">产品介绍</h2>
					<p class="activeInfo_title_line"><i></i><span></span><i></i></p>
					<div>
						<p class="activeInfo_left">
							“来福”是一套亲情交互及智能陪伴解决方案。包含手机APP及智能硬件终端。“来福”辅助子女，满足父母情感交流、行为评估及日常生活需求。
						</p>
						<p class="activeInfo_people">已预约人数:<span class="remark">39</span>人</p>
						<p class="activeInfo_btn"><button class="appointment">立即预约</button></p>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
<iframe id="iframe" frameborder="0" src="http://www.aihj.ren/index.php?m=content&c=index&a=lists&catid=25" width="1340" height="1380"></iframe>
	<script type="text/javascript">
		$('.appointment').on('click',function(){
			$('#iframe').show();
		})
	</script>
	<div class="banner_bot div_margin">
		<img src="<?php echo IMG_PATH;?>aihj/banner_up.png" alt="爱惠家欢迎您!请稍等..."/>
	</div>
	<div id="realWatch">
		<div class="container">
			<div class="row">
				<h3 class="realWatch_title">回家看看</h3>
				<p class="realWatch_info div_margin">
					<span class="line"></span>
					<span class="goHome">回&nbsp;家</span>
					<span class="line"></span>
				</p>
				<ul class="div_margin clearfix">
					<li class="realWatch_ul_li col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<img src="<?php echo IMG_PATH;?>aihj/t1_1.png" alt="爱惠家欢迎您!请稍等..."/>
					</li>
					<li class="realWatch_ul_li col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<img src="<?php echo IMG_PATH;?>aihj/t1_2.png" alt="爱惠家欢迎您!请稍等..."/>
					</li>
					<li class="realWatch_ul_li col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<img src="<?php echo IMG_PATH;?>aihj/t1_3.png" alt="爱惠家欢迎您!请稍等..."/>
					</li>
				</ul>
				<div class="realWatch_poster">
					<h3 class="realWatch_title">
						<span>找点空闲</span>
						<span>找点时间</span>
					</h3>
					<h3 class="realWatch_title">
						<span>来福带你</span>
						<span>回家看看</span>
					</h3>
				</div>
				<div class="realWatch_bot">
					<p class="text_center">来福智能硬件产品自带"实时观看"功能</p>
					<p class="text_center">儿女也可以零距离关爱父母生活了解父母起居状况,陪父母聊天!</p>
				</div>
			</div>
		</div>
	</div>
	<div id="oneDaypat">
		<div class="container">
			<div class="row">
				<h3 class="oneDaypat_title">精彩瞬间</h3>
				<p class="oneDaypat_info div_margin">
					<span class="line"></span>
					<span class="goHome">开&nbsp;心</span>
					<span class="line"></span>
				</p>
				<ul class="div_margin clearfix">
					<li class="oneDaypat_ul_li col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<img src="<?php echo IMG_PATH;?>aihj/t2_1.png" alt="爱惠家欢迎您!请稍等..."/>
						<div class="oneDaypat_ul_li_con">
							<h3>分享幸福</h3>
							<p>亲友互动,一家和睦融融</p>
						</div>
					</li>
					<li class="oneDaypat_ul_li col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<img src="<?php echo IMG_PATH;?>aihj/t2_2.png" alt="爱惠家欢迎您!请稍等..."/>
						<div class="oneDaypat_ul_li_con">
							<h3>欢度快乐</h3>
							<p>友情交流,一群挚友怡然自乐</p>
						</div>
					</li>
					<li class="oneDaypat_ul_li col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<img src="<?php echo IMG_PATH;?>aihj/t2_3.png" alt="爱惠家欢迎您!请稍等..."/>
						<div class="oneDaypat_ul_li_con">
							<h3>独处宁静</h3>
							<p>自我调剂,一个人欢畅自由</p>
						</div>
					</li>
				</ul>
				<div class="oneDaypat_poster">
					<h3 class="oneDaypat_title">
						<span>快乐时光</span>
						<span>需要分享</span>
					</h3>
					<h3 class="oneDaypat_title">
						<span>来福传递</span>
						<span>家人快乐</span>
					</h3>
				</div>
				<div class="oneDaypat_bot">
					<p class="text_center">来福智能硬件“每日一拍”功能,</p>
					<p class="text_center">儿女可随时随地将拍到的美图分享给父母</p>
				</div>
			</div>
		</div>
	</div>
	<div id="healthMonitor">
		<div class="container">
			<div class="row">
				<h3 class="healthMonitor_title">健康管家</h3>
				<p class="healthMonitor_info div_margin">
					<span class="line"></span>
					<span class="goHome">安&nbsp;心</span>
					<span class="line"></span>
				</p>
			</div>
		</div>
		<div class="healthMonitor_bg div_margin">
			<div class="container">
				<div class="row">
					<ul class="clearfix">
						<li class="healthMonitor_ul_li col-lg-2 col-md-2 col-sm-2 col-xs-2">
							<img src="<?php echo IMG_PATH;?>aihj/t3_1.png" alt="爱惠家欢迎您!请稍等..."/>
							<p>测血压</p>
						</li>
						<li class="healthMonitor_ul_li col-lg-2 col-md-2 col-sm-2 col-xs-2">
							<img src="<?php echo IMG_PATH;?>aihj/t3_2.png" alt="爱惠家欢迎您!请稍等..."/>
							<p>心率</p>
						</li>
						<li class="healthMonitor_ul_li col-lg-2 col-md-2 col-sm-2 col-xs-2">
							<img src="<?php echo IMG_PATH;?>aihj/t3_3.png" alt="爱惠家欢迎您!请稍等..."/>
							<p>定位</p>
						</li>
						<li class="healthMonitor_ul_li col-lg-2 col-md-2 col-sm-2 col-xs-2">
							<img src="<?php echo IMG_PATH;?>aihj/t3_4.png" alt="爱惠家欢迎您!请稍等..."/>
							<p>通话</p>
						</li>
						<li class="healthMonitor_ul_li col-lg-2 col-md-2 col-sm-2 col-xs-2">
							<img src="<?php echo IMG_PATH;?>aihj/t3_51.png" alt="爱惠家欢迎您!请稍等..."/>
							<p>一键呼叫</p>
						</li>
						<li class="healthMonitor_ul_li col-lg-2 col-md-2 col-sm-2 col-xs-2">
							<img src="<?php echo IMG_PATH;?>aihj/t3_6.png" alt="爱惠家欢迎您!请稍等..."/>
							<p>计步</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="healthMonitor_poster">
					<h3 class="healthMonitor_title">
						<span>来福秒变</span>
						<span>家庭医生</span>
					</h3>
					<h3 class="healthMonitor_title">
						<span>父母健康</span>
						<span>是家人幸福</span>
					</h3>
				</div>
				<div class="healthMonitor_bot">
					<p class="text_center">来福通过辅助设备手表来监控检测使用者的健康状况,</p>
					<p class="text_center">并且生成简明易懂的体检报告,父母健康状况同步传输子女端</p>
				</div>
			</div>
		</div>
	</div>
	<div id="hotService">
		<div class="container">
			<div class="row">
				<h3 class="hotService_title">来福在线</h3>
				<p class="hotService_info div_margin">
					<span class="line"></span>
					<span class="goHome">贴&nbsp;心</span>
					<span class="line"></span>
				</p>
				<ul class="div_margin clearfix">
					<li class="hotService_ul_li col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<img src="<?php echo IMG_PATH;?>aihj/t4_1.png" alt="爱惠家欢迎您!请稍等..."/>
					</li>
					<li class="hotService_ul_li col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<img src="<?php echo IMG_PATH;?>aihj/t4_2.png" alt="爱惠家欢迎您!请稍等..."/>
					</li>
				</ul>
				<div class="hotService_poster">
					<h3 class="hotService_title">
						<span>一键呼叫来福</span>
					</h3>
					<h3 class="hotService_title">
						<span>智能更贴心</span>
					</h3>
				</div>
				<div class="hotService_bot">
					<p class="text_center">来福是最专业强大的管家,</p>
					<p class="text_center">管吃,住,行,管维修清理,管挂号......</p>
					<p class="text_center">一键快速反应父母需求让父母告别上网搜索的繁琐</p>
				</div>
			</div>
		</div>
	</div>
	<!--<div id="join">
		<div class="container">
			<div class="row">
				<h3 class="join_title">加入我们</h3>
				<p class="join_info div_margin">
					<span>join&nbsp;in</span>
				</p>
				<ul class="div_margin clearfix">
					<li class="join_ul_li col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<img src="<?php echo IMG_PATH;?>aihj/t5_bg.png" alt="爱惠家欢迎您!请稍等..."/>
						<h3 class="product_title">产品部</h3>
						<ul class="flex_col_ul product_ul">
							<li><i></i><span>UI设计师</span></li>
							<li><i></i><span>产品经理</span></li>
							<li><i></i><span>产品总监</span></li>
						</ul>
					</li>
					<li class="join_ul_li col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<img src="<?php echo IMG_PATH;?>aihj/t5_bg.png" alt="爱惠家欢迎您!请稍等..."/>
						<h3 class="operative_title">运营部</h3>
						<ul class="flex_col_ul operative_ul">
							<li><i></i><span>市场推广</span></li>
							<li><i></i><span>文案专员</span></li>
							<li><i></i><span>客服专员</span></li>
						</ul>
					</li>
					<li class="join_ul_li col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<img src="<?php echo IMG_PATH;?>aihj/t5_bg.png" alt="爱惠家欢迎您!请稍等..."/>
						<h3 class="skill_title">技术部</h3>
						<ul class="flex_col_ul skill_ul">
							<li><i></i><span>php工程师</span></li>
							<li><i></i><span>ios工程师</span></li>
							<li><i></i><span>安卓工程师</span></li>
							<li><i></i><span>前端工程师</span></li>
						</ul>
					</li>
				</ul>
				<div class="join_bot">
					<p class="text_center">请将您的简历和作品发送至(hr@aihj.ren)</p>
					<p class="text_center">我们的邮箱,期待您能加入我们的大家庭</p>
				</div>
			</div>
		</div>
	</div>-->
	<div id="aboutus">
		<div class="container">
			<div class="row">
				<h2>关于我们</h2>
				<p><a href="http://www.aihj.ren">北京爱惠家网络有限公司（www.aihj.ren）</a>以关爱父母为主旨；以提升父母生活品质，让父母生活的更快乐的服务为己任，为他们提供便利迅捷的服务。我们的愿景是服务好每一位父母；我们的使命是视用户如父母。</p>
				<p>公司研发运营的“来福”是一套亲情交互及智能陪伴解决方案。包含手机APP及智能硬件终端。“来福”辅助子女，满足父母情感交流、行为评估及日常生活需求。</p>
				<p>来福“生活助理”功能，提醒父母的日常行程规划，避免错过重大事件。“常回家看看”功能，仿人体工程学170度视角，父母的日常生活状况子女一目了然；来福在休眠状态下，将通过设备提示音，提醒父母使用来福与子女实时交流。“健康管家”功能，通过大数据云计算统计父母生活轨迹，分析父母行为活动，了解父母影视、音乐、资讯浏览偏好，生成行为分析报告，缩短子女与父母间的心理距离。来福的最强大卖点在于“来福在线”，子女和父母均可发起在线问诊、订餐、订酒店、机票、火车票、挂号、陪诊服务、家政服务、上门维修等需求，父母可以呼叫来福获取便捷贴心的人工服务。</p>
				<p>带来福回家，陪父母到老！</p>
			</div>
		</div>
	</div>
</div>
<!--<div class="main">
	<div class="col-left">
    	<div class="news-hot">
        	<div class="content">
        	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=79d92623a8337007f1f3bcdd35d5f304&action=position&posid=2&order=listorder+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','order'=>'listorder DESC','limit'=>'4',));}?>
        	 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <h4 class="blue"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],36,'');?></a></h4>
                <p><?php if($n==1) { ?><img src="<?php echo thumb($r[thumb],90,60);?>" width="90" height="60"/><?php } ?><?php echo str_cut($r[description],112);?></p>
                <div class="bk20 hr"><hr /></div>
               <?php $n++;}unset($n); ?>  
             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>   
            </div>
        </div>
        <div class="slide">
            <div class="FocusPic">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dcd1c47627b910509414b85662be50cc&action=position&posid=1&order=listorder+DESC&thumb=1&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder DESC','thumb'=>'1','limit'=>'5',));}?>
            	<div class="content" id="main-slide">
                    <div class="changeDiv">  
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <a href="<?php echo $r['url'];?>" title="<?php echo str_cut($r['title'],30);?>"><img src="<?php echo thumb($r['thumb'],310,260);?>" alt="<?php echo $r['title'];?>" width="310" height="260" /></a>
                    <?php $n++;}unset($n); ?>
                    </div>
                </div>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
            <div class="bk10"></div>
        	<div class="box extend">
            	<div class="col-left">争议</div>
                <div class="col-auto">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=62e5ac893abc3866a6bda2553c0a156a&pos=index_block_1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'index_block_1',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</div>
                <script language="javascript" src="<?php echo APP_PATH;?>caches/poster_js/10.js"></script>
            </div>
        </div>
        <div class="bk10"></div>
        <div class="box">
        		<h5>图片新闻</h5>
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2d4b9e3c7c2cc4bd0cec8b1fac9ae764&action=position&posid=12&thumb=1&order=listorder+DESC&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'12','thumb'=>'1','order'=>'listorder DESC','limit'=>'10',));}?>
            <ul class="content news-photo picbig">
             <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            	<li>
                    <div class="img-wrap">
                        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><img src="<?php echo thumb($r[thumb],110,0);?>" title="<?php echo $r['title'];?>"/></a>
                    </div>
                    <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],20);?></a>
                </li>
                <?php $n++;}unset($n); ?>
            </ul>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
        <div class="bk10"></div>
        <?php $n=1;if(is_array(subcat(0,0,0,$siteid))) foreach(subcat(0,0,0,$siteid) AS $r) { ?>
        <?php $num++?>
        <div class="box cat-area" <?php if($num%2!=0) { ?>style=" margin-right:10px"<?php } ?>>
        		<h5 class="title-1"><?php echo $r['catname'];?><a href="<?php echo $r['url'];?>" class="more">更多>></a></h5>
             <div class="content">
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ef41dd2190feee94486d0264e7354ef2&action=lists&catid=%24r%5Bcatid%5D&order=updatetime+DESC&thumb=1&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>$r[catid],'order'=>'updatetime DESC','thumb'=>'1','limit'=>'1',));}?>
             <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
             	<p>
             		<img src="<?php echo thumb($v[thumb],90,0);?>" width="90" height="60"/>
                    <strong><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],28);?></a></strong><br /><?php echo str_cut($v['description'],100);?>
                </p>
              <?php $n++;}unset($n); ?>
              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>                
                <div class="bk15 hr"></div>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d9a5a0d61f080dbce4b2774d783edd34&action=lists&catid=%24r%5Bcatid%5D&num=5&order=id+DESC&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>$r[catid],'order'=>'id DESC','limit'=>'5',));}?>

                <ul class="list lh24 f14">
                <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                	<li>·<a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],40);?></a></li>
                <?php $n++;}unset($n); ?>
                </ul>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
        <?php if($num%2==0) { ?><div class="bk10"></div><?php } ?>
		<?php $n++;}unset($n); ?>
    </div>
    <div class="col-auto">
    	<div class="box">
        	 <h5 class="title-2">公告<a href="" class="more">&nbsp;</a></h5>
             <div class="content">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"announce\" data=\"op=announce&tag_md5=54b0fffbbaac31bf6b88d6a6b5be8f2c&action=lists&siteid=%24siteid&num=2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}?>
                <ul class="list lh24 f14">
                   <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                     <li> <a href="<?php echo APP_PATH;?>index.php?m=announce&c=index&a=show&aid=<?php echo $r['aid'];?>"><?php echo $r['title'];?></a></li>
                   <?php $n++;}unset($n); ?>
                </ul>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
        <div class="bk10"></div>
        <div class="box">
        	<h5 class="title-2">专题<a href="<?php echo APP_PATH;?>index.php?m=special&c=index&a=special&siteid=<?php echo $siteid;?>" class="more">更多>></a></h5>
            <div class="content special">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"special\" data=\"op=special&tag_md5=d0da2a95c4fd410d9fde0a59d59f48fc&action=lists&siteid=%24siteid&elite=1&listorder=3&num=2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$special_tag = pc_base::load_app_class("special_tag", "special");if (method_exists($special_tag, 'lists')) {$data = $special_tag->lists(array('siteid'=>$siteid,'elite'=>'1','listorder'=>'3','limit'=>'2',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            	<?php if($n!=1) { ?><div class="hr bk15"></div><?php } ?>
                <p style="margin:0">
             		<a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" width="90" height="70" /></a>
                    <strong><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],'18');?></a></strong><br /><?php echo str_cut($r['description'],50);?>
                </p>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
        <div class="bk10"></div>
        <div class="box">
            <h5 class="title-2"><span class="rt fn f12 tab SwapTab"><span class="fb">热点</span> | <span >评论</span> | <span>关注</span></span>排行</h5>
            <div class="tab-content">
            <ul class="content digg">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=97849c6fb7d3e0f9a0891295340b6456&action=hits&catid=6&num=10&order=views+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'6','order'=>'views DESC','limit'=>'10',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li><a href="<?php echo $r['url'];?>" target="_blank" title="<?php echo $r['title'];?>"<?php echo title_style($r[style]);?>><?php echo $r['title'];?></a></li>
				<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <ul class="content digg hidden">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"comment\" data=\"op=comment&tag_md5=55e75bfad540869982aca092575756e4&action=bang&num=10&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array()).'55e75bfad540869982aca092575756e4');if(!$data = tpl_cache($tag_cache_name,3600)){if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a></li>
				<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <ul class="content digg hidden">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=97849c6fb7d3e0f9a0891295340b6456&action=hits&catid=6&num=10&order=views+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'6','order'=>'views DESC','limit'=>'10',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a></li>
				<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            </div>
        </div><div class="bk10"></div>
        <div class="box">
            <h5 class="title-2">调查问卷<a href="<?php echo APP_PATH;?>index.php?m=vote&c=index&siteid=<?php echo $siteid;?>" class="more">更多>></a></h5>
 
<script language="javascript" src="<?php echo APP_PATH;?>index.php?m=vote&c=index&a=show&action=js&subjectid=1&type=3"></script>
        </div>
    </div>
    <div class="bk10"></div>
	
	<div class="box blogroll ylink">
    	<h5><a href="<?php echo APP_PATH;?>index.php?m=link&siteid=<?php echo $siteid;?>" hidefocus="true" class="rt">更多>></a>友情链接<a href="<?php echo APP_PATH;?>index.php?m=link&c=index&a=register&siteid=<?php echo $siteid;?>" class="red">申请链接</a></h5>
        <div class="bk10"></div>
	<ul class="colli imgul">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=80574ec69aa2a6c10ed30f7c49e0eda7&action=type_list&siteid=%24siteid&linktype=1&order=listorder+DESC&num=8&return=pic_link\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}?>
        <?php $n=1;if(is_array($pic_link)) foreach($pic_link AS $v) { ?>
        <li><a href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>" target="_blank"><img src="<?php echo $v['logo'];?>" width="88" height="31" /></a></li>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
     <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=99c32cd273c57223c20074bf5196e97a&action=type_list&siteid=%24siteid&order=listorder+DESC&num=10&return=dat\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}?>
     <div class="bk10"></div>
	<div class="linka">
		<?php $n=1;if(is_array($dat)) foreach($dat AS $v) { ?>
              <?php if($type==0) { ?>
              <a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['name'];?></a> |
              <?php } else { ?>
              <a href="<?php echo $v['url'];?>" target="_blank"><img src="<?php echo $v['logo'];?>" width="88" height="31" style="border: 1px solid #FFBE7A;"></a> 
              <?php } ?>
		<?php $n++;}unset($n); ?>
 	</div>
	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>
</div>-->

<script type="text/javascript" src="<?php echo JS_PATH;?>swiper.min.js"></script>
<script type="text/javascript"> 
//banner轮播图
var swiper = new Swiper('.swiper-container', {
    pagination: '.swiper-pagination',
    autoplay : 5000,
    loop : true,
});
</script>
<?php include template("content","footer"); ?>