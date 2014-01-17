<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>我的首页 新浪微博-随时随地分享身边的新鲜事儿</title>
	<link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon .ico') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/reset.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
	<script src="<?php echo base_url('assets/js/jquery-1.8.2.min.js') ?>"></script>
</head>
<body class="body_home">
	<div class="miniblog">
		<div class="miniblog_fb">

			<div class="header global_nav">
				<div class="nav_bg">
					<div class="container">
						<div class="logo">
							<a href=""></a>
						</div>
						<div class="nav clearfix">
							<a href="#" class="current">首页</a>
							<a href="#">热门<i class="ico_down"></i></a>
							<a href="#">游戏<i class="ico_down"></i></a>
							<a href="#">应用<i class="ico_down"></i></a>
						</div>
						<div class="search">
							<input type="text" name="searchInput" value="大家都在搜：香格里拉大火">
							<a href="javascript:void(0)" class="btn"></a>
						</div>


						<ul class="user clearfix">
							<li class="username" ><a href="javascript:void(0)">air_zhe</a></li>
							<li class="editor" ><a href="javascript:void(0)"><i></i></a></li>
							<li class="msg" >
								<a href="javascript:void(0)"><i></i></a>
								<ul>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
								</ul>
							</li>
							<li class="setting" ><a href="javascript:void(0)"><i></i></a></li>
							<li class="member" ><a href="javascript:void(0)"><i></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="mail_active">
				<div class="box">
					<div>
						<span class="icon_errorB"></span>
					</div>
					<div>
						<p><strong>激活账号</strong></p>
						<p>你当前-的体验期还有<i class="S_spetxt">30</i>天，确认你的邮件地址就可以使用 <strong>新浪微博</strong> 的所有功能啦！邮件已经发送至 532499602@qq.com 。</p>
						<p><a href="#" class="W_btn_b"><span>立即激活</span></a><a href="#">重新发送确认邮件</a></p>
					</div>
				</div>
			</div>
			<div class="container main">

				<div class="content clearfix">
					<div class="left_nav left">
						<ul>
							<li><a href="#"><i class="W_ico20 ico_myhomepage"></i>首页<i class="new"></i></a></li>
							<li><a href="#"><i class="W_ico20 ico_message"></i>消息</a></li>
							<li><a href="#"><i class="W_ico20 ico_favor"></i>收藏</a></li>
							<li><a href="#"><i class="W_ico20 ico_sendtome"></i>发给我的</a></li>
						</ul>
						<ul class="goodfriend">
							<li><a href=""><i class="W_ico20 ico_goodfriend"></i>好友圈</a></li>
							<li></li>
						</ul>
						<div class="group">
							<fieldset>
								<legend class="S_txt2">分组</legend>
							</fieldset>
							<ul>
								<li><a href="#"><i class="W_ico20 ico_group"></i>同事</a></li>
								<li><a href="#"><i class="W_ico20 ico_group"></i>同学</a></li>
								<li><a href="#"><i class="W_ico20 ico_group"></i>朋友</a></li>
								<li><a href="#"><i class="W_ico20 ico_group"></i>家人</a></li>
								<li><a href="#"><i class="W_ico20 ico_group"></i>明星</a></li>
							</ul>
						</div>

					</div>
					<div class="main clearfix">
						<div class="box_center left">
							<div>
								<div class="send_weibo">
									<div class="title_area">
										有什么新鲜事想告诉大家？
										<s></s>
									</div>
									<div class="input clicked">
										<textarea name="" title="微博输入框"  class="input_detail" id="" cols="30" rows="10"></textarea>
										<span class="arrow"></span>
										<div class="send_succpic">
											<p class="icon_succB"></p>
											<p class="txt">发布成功</p>
										</div>
									</div>
									<div class="num S_txt2">发言请遵守社区公约，还可以输入<span>140</span>字</div>
									<div class="func_area clearfix">
										<div class="kind_detail left">
											<a href="javascript:void(0)" class="S_func1"><i class="W_ico16 icon_face"></i>表情</a>
											<a href="javascript:void(0)" class="S_func1"><i class="W_ico16 icon_img"></i>图片</a>
											<a href="javascript:void(0)" class="S_func1"><i class="W_ico16 icon_video"></i>视频</a>
											<a href="javascript:void(0)" class="S_func1"><i class="W_ico16 icon_qing"></i>话题</a>
											<a href="javascript:void(0)" class="S_func1"><i class="W_ico16 icon_chang"></i>长微博</a>
										</div>
										<a href="" class="send_btn W_btn_v right "><span class="btn_30px">发布</span></a>
									</div>
									<div class="weibo">
										<div class="feed_nav">
											<h3>微博</h3>
											<div class="bg"></div>
											<p class="weibo_type">
												<a href="#" class="active">全部</a>
												<a href="#">原创</a>
												<a href="#">图片</a>
												<a href="#">视频</a>
												<a href="#">音乐</a>
											</p>
										</div>
										<div class="weibo_list">
											<a href="" class="notes">有 1 条新微博，点击查看</a>
											<div class="item clearfix">
												<div class="face">
													<img  width="50" height="50" src="<?php echo base_url('assets/images/1.jpg') ?>" alt="">
												</div>
												<div class="detail">
													<div><a class="name S_func1" href="#">小殷爱录像</a></div>
													<div class="content">
														从前有个国王,他两个女儿的眼泪都会变成钻石.大女儿嫁给了一个用她的眼泪创造了一个个城堡的王子,小女儿却嫁给了牧羊人.国王临死见到他们的时候,大女儿满身金银珠宝,而小女儿和牧羊人仍是贫穷.国王很惊讶的说:明明她的一滴眼泪就够你们生活的很好. 牧羊人说:可是我舍不得让她哭啊.....
													</div>
													<div class="media_prev">
														<ul>
															<li>
																<a href="javascript:void(0)"><img src="<?php echo base_url('assets/images/7cff6573jw1ebibx4063cj20c60fhgmn.jpg') ?>" alt=""></a>
															</li>
														</ul>
													</div>
													<div class="func clearfix S_txt2">
														<div class="from left"><a href="#" class="S_link2 time">今天 07:48</a> 来自<a href="" class="S_link2">新浪微博</a> </div>
														<div class="handle right"><a href=""><s class="W_ico20 icon_praised_b"></s>(29)</a><i class="S_txt3">|</i><a href="">转发(71)</a><i class="S_txt3">|</i><a href="">收藏</a><i class="S_txt3">|</i><a href="">评论(22)</a></div>
													</div>
													<!-- 评论 -->
													<div class="comment S_line1">
														<div class="WB_arrow">
															<em class="S_line1_c">◆</em>
															<span class="S_bg4_c">◆</span>
														</div>
														<div class="W_tips tips_warn clearfix">
															<p>
																<span class="icon_warnS"></span>
																<span class="txt">新浪微博社区管理中心举报处理大厅，<a href="#">欢迎查阅！</a></span>
																<span class="close right"><a href="javascript:void(0);" class="W_ico12 icon_close"></a></span>
															</p>
														</div>
														<textarea name="" id="" class="W_input"></textarea>
														<p class="clearfix"><input type="checkbox" name="" class="W_checkbox">同时转发到我的微博<a href="" class="W_btn_b right"><span>评论</span></a></p>
														<div class="C_item S_line1">
															<div class="face left">
																<img src="./assets/images/_1.jpg" width="30" height="30" alt="">
															</div>
															<div class="C_detail">
																<p><a href="">D瓜哥-李_君</a>：回复<a href="">@叉色-xsir</a>:恩，说实话我对这块专门看过一些资料。所以问的比较多。哈哈<span class="S_txt2">(1月5日 22:07)</span></p>
																<p class="info"><a href="#"><i class="W_ico20 icon_praised_b"></i></a><i class="S_txt3">|</i><a href="#">查看对话</a><i class="S_txt3">|</i><a href="#">回复</a></p>
															</div>
														</div>
														<div class="C_item S_line1">
															<div class="face left">
																<img src="./assets/images/_2.jpg" width="30" height="30" alt="">
															</div>
															<div class="C_detail">
																<p><a href="">叉色-xsir</a>：前端后端都有啊。。。前端优化问的还蛮细的<span class="S_txt2">(1月5日 22:07)</span></p>
																<p class="info"><a href="#"><i class="W_ico20 icon_praised_b"></i></a><i class="S_txt3">|</i><a href="#">回复</a></p>
															</div>
														</div>
													</div>
													<!-- 评论结束 -->
												</div>
											</div>
											<div class="item clearfix">
												<div class="face">
													<img  width="50" height="50" src="<?php echo base_url('assets/images/2.jpg') ?>" alt="">
												</div>
												<div class="detail">
													<div><a class="name S_func1" href="#">包子包子肉肉</a></div>
													<div class="content">
														转发微博
													</div>
													<div class="forwardContent"> 
														<div><a class="name S_func1" href="#">@收集世上的美景</a></div>
														<div class="content">
															【中国最美五大沙漠】巴丹吉林沙漠，塔克拉玛干沙漠，鸣沙山—月牙泉，古尔班通古特沙漠，沙坡头。一生一定要去次沙漠，体验烈日风沙，体味孤独辽远，它在那里等你，等候了千年。什么时候启程吧！
														</div>	
														<div class="media_prev">
															<ul>
																<li>
																	<a href="javascript:void(0)"><img src="<?php echo base_url('assets/images/c31ab1f2jw1ecfxy8kvhej20c811xaga.jpg') ?>" alt=""></a>
																</li>
															</ul>
														</div>
														<div class="func clearfix S_txt2">
															<div class="from left"><a href="#" class="S_func2 time">1月11日 23:01</a> 来自<a href="" class="S_func2">pull</a> </div>
															<div class="handle right"><a href=""><s class="W_ico20 icon_praised_b"></s>(19)</a><i class="S_txt3">|</i><a href="" class="S_func2">转发(71)</a><i class="S_txt3">|</i><a href="" class="S_func2">收藏</a><i class="S_txt3">|</i><a href="" class="S_func2">评论(22)</a></div>
														</div>
													</div>
													
													<div class="func clearfix S_txt2">
														<div class="from left"><a href="#" class="time S_link2">今天 07:48</a> 来自<a href="" class="S_link2">新浪微博</a> </div>
														<div class="handle right"><a href=""><s class="W_ico20 icon_praised_b"></s>(29)</a><i class="S_txt3">|</i><a href="">转发(71)</a><i class="S_txt3">|</i><a href="">收藏</a><i class="S_txt3">|</i><a href="">评论(22)</a></div>
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>

							</div>
						</div>
						<div class="box_right right">
							<a class="set_skin" href="#" title="模板设置"></a>
							<div class="user_info">
								<img  width="80" height="80" src="<?php echo base_url('assets/images/avatar.jpg') ?>" alt="">
								<div>
									<a href="" class="username S_func1">run5324</a>
									<br>
									<a href="" class="W_level_ico color3"><span class="W_level_num l7"></span></a>
								</div>
							</div>
							<ul class="user_atten clearfix">
								<li>
									<a href="#" class="S_func1">
										<strong>35</strong>
										<span>关注</span>
									</a>
								</li>
								<li>
									<a href="#" class="S_func1">
										<strong>8</strong>
										<span>粉丝</span>
									</a>
								</li>
								<li>
									<a href="#" class="S_func1">
										<strong>42</strong>
										<span>微博</span>
									</a>
								</li>
							</ul>
							<div class="hot_topics">
								<fieldset>
									<legend class="S_txt2"><a href="#">热门话题</a></legend>
								</fieldset>
								<ul>
									<li><a href="#">#汤唯遭遇电信诈骗#</a><span class="total S_txt2">2634万</span></li>
									<li><a href="#">#当时忍住就好了#</a><span class="total S_txt2">328万</span></li>
									<li><a href="#">#爱情公寓4#</a><span class="total S_txt2">285</span></li>
									<li><a href="#">#孙悟空后人#</a><span class="total S_txt2">3万</span></li>
									<li><a href="#">#来自星星的你#</a><span class="total S_txt2">854万</span></li>
									<li><a href="#">#中国好歌曲#</a><span class="total S_txt2">677</span></li>
								</ul>
							</div>		
						</div>
					</div>
				</div>
				<!-- 返回顶部 -->
				<a class="gotop S_txt2" href="javascript:void(0);">
					<span>
						<s class="W_ico12 icon_gotop"></s>
						返回顶部
					</span>
				</a>
				<!-- 返回顶部结束 -->
			</div>
			<div class="global_footer">
				<div class="clearfix">
					<dl class="list">
						<dt>找找感兴趣的人</dt>
						<dd><a href="#">名人堂</a><a href="#">微博会员</a></dd>
						<dd><a href="#">微博达人</a></dd>
						<dd><a href="#">媒体</a><a href="#">企业</a><a href="#">政府</a></dd>
					</dl>
					<dl class="list">
						<dt>精彩内容</dt>
						<dd><a href="#">微话题</a><a href="#">风云榜</a></dd>
						<dd><a href="#">微访谈</a></dd>
						<dd><a href="#">热门微博</a></dd>
					</dl>
					<dl class="list">
						<dt>热门应用</dt>
						<dd><a href="#">微公益</a><a href="#">微吧</a></dd>
						<dd><a href="#">微音乐</a><a href="#">相册</a></dd>
						<dd><a href="#">微游戏</a><a href="#">微博商学院</a></dd>
					</dl>
					<dl class="list"> 
						<dt>手机玩微博</dt>
						<dd><a href="#">WAP版</a><a href="#">短彩发微博</a></dd>
						<dd><a href="#">iPhone客户端</a><a href="#">iPad客户端</a></dd>
						<dd><a href="#">Android客户端</a></dd>
					</dl>
					<dl class="list">
						<dt>认证&amp;合作</dt>
						<dd><a href="#">申请认证</a><a href="#">开放平台</a></dd>
						<dd><a href="#">企业微博</a><a href="#">连接网站</a></dd>
						<dd><a href="#">微博标识</a><a href="#">广告服务</a></dd>
					</dl>
				</div>
				<div class="copyright S_line2">
					<p><i class="W_ico16 ico_weibo"></i>微博帮助　 意见反馈　 开放平台　 微博招聘　 新浪网导航 社区管理中心　 微博社区公约</p>
					<p class="S_txt2">客服电话：4000 960 960（个人） 4000 980 980（企业） （按当地市话标准计算）</p>
					<p>
						<span class="S_txt2">北京微梦创科网络技术有限公司</span> <a href="#">京网文[2011]0398-130号</a> <a href="#">京ICP证100780号</a>
						<span class="right">Copyright © 1996-2014 SINA</span>
					</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>