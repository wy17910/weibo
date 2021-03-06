<div class="content clearfix">
	<?php $this->load->view('components/set_left_nav');?>
	<div class="main">
		<div class="box_center">
			<div class="title clearfix">头像<span class="S_txt2 right">无法上传头像？<a href="#">尝试普通方式上传</a></span></div>
			<div class="upload_avatar">
				<p><strong>选择上传方式</strong></p>
				<div class="upload_btn">
					<input type="file" name="avatar" id="avatar_upload" />
				</div>
				<p class="S_txt2">仅支持JPG、GIF、PNG格式，文件小于5M（使用高质量图片，可生成高清头像）</p>
				<p><input type="checkbox" name="" checked="checked">上传原始图片，生成高清头像</p>
				<div class="preview clearfix">
					<div class="big left">
						<div class="img_300">
							<img id="img_300" src="<?php echo base_url('/assets/images/up_bg.gif')?>" alt="" >
						</div>
						<i class="ico_loading_upload"></i>
					</div>
					<div class="small">
						<p>您上传的图片将会自动生成三种尺寸头像，请注意中小尺寸的头像是否清晰</p>
						<div class="avatar clearfix">
							<div class="left">
								<div class="img_180 ">
									<img id="img_180" src="<?php echo $avatar ?>" alt="" width="180" height="180">
								</div>
								<p>大尺寸头像,180*180像素</p>
							</div>
							<div class="right">
								<div>
									<div class="img_50">
										<img id="img_50" src="<?php echo $avatar ?>" alt="" width="50" height="50">
									</div>
									<p>中尺寸头像</p><p>50*50像素</p><p>（自动生成）</p>
								</div>
								<div>
									<div class="img_30">
										<img id="img_30" src="<?php echo $avatar ?>" alt="" width="30" height="30">
									</div>
									<p>小尺寸头像</p><p>30*30像素</p><p>（自动生成）</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<form action="?c=member&amp;m=crop" method="post">
					<input type="hidden" id="x" name="x">
					<input type="hidden" id="y" name="y">
					<input type="hidden" id="w" name="w">
					<input type="hidden" id="h" name="h">
					<input type="hidden" name="sImg">
					<p class="submit hide"><a href="javascript:void(0)" class="W_btn_a" action="save_avatar"><span>保存</span></a><a href="" class="W_btn_c"><span>取消</span></a></p>
				</form>
			</div>
		</div>
	</div>
</div>