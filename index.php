<?php include 'header.php'; ?>
<body>
<div id="registration" class="modal registration">
	<div class="modal-title"><i class="fab fa-slideshare"></i> Đăng ký tham dự Hội thảo
		<span class="close"><i class="far fa-times-circle"></i></span>
	</div>
	<div class="modal-content">
		<form action="<?php echo $url_post ?>/resigter" method="post" data-parsley-validate>
			<input type="hidden" id="postLink" name="postLink" value="<?php echo $url_post ?>/resigter">
			<input type="hidden" id="returnUrl" name="existUrl" value="<?php echo $url_site ?>/article-already-exists.html">
			<input type="hidden" id="returnUrl" name="successUrl" value="<?php echo $url_site ?>/thanks-for-send.html">
			<input type="hidden" id="returnUrl" name="failedUrl" value="<?php echo $url_site ?>/send-failed.html">
			<input type="hidden" id="token" name="token" value="sdf389dxbf1sdz51fga65dfg74asdf">
			<input type="hidden" id="conferenceId" name="conference_id" value="1">
			<div class="row">
				<div class="input-field">
		          <input id="name" name="name" type="text" data-parsley-required>
		          <label for="name">Họ và Tên</label>
		        </div>
			</div>
			<div class="row">
				<div class="input-field">
		          <input id="email" name="email" type="email" data-parsley-required>
		          <label for="email">Email</label>
		        </div>
		    </div>
		    <div class="row">
		    	<div class="input-field">
		          <input id="phone" name="phone" type="text">
		          <label for="phone">Điện thoại</label>
		        </div>
		    </div>
		    <div class="row">
		        <div class="input-field">
		          <input id="address" name="address" type="text">
		          <label for="address">Địa chỉ liên lạc</label>
		        </div>
			</div>
			<div class="row button">
				<button class="btn" id="submit"><i class="far fa-envelope"></i> ĐĂNG KÝ THAM DỰ</button> &nbsp; &nbsp;
				<a href="#" class="btn close"><i class="far fa-trash-alt"></i> HỦY BỎ</a>
			</div>
		</form>
	</div>
</div>
<div id="presenter" class="modal presenter">
	<div class="modal-title"><i class="fas fa-book"></i> Gửi bài tham luận
		<span class="close"><i class="far fa-times-circle"></i></span>
	</div>
	<div class="content">
		<form action="<?php echo $url_post ?>/sendArticle" method="post" id="presenterForm" enctype="multipart/form-data" data-parsley-validate>
			<input type="hidden" id="postLink" name="postLink" value="<?php echo $url_post ?>/sendArticle">
			<input type="hidden" id="returnUrl" name="existUrl" value="<?php echo $url_site ?>/article-already-exists.html">
			<input type="hidden" id="returnUrl" name="successUrl" value="<?php echo $url_site ?>/thanks-for-send.html">
			<input type="hidden" id="returnUrl" name="failedUrl" value="<?php echo $url_site ?>/send-failed.html">
			<input type="hidden" id="token" name="token" value="sdf389dxbf1sdz51fga65dfg74asdf">
			<input type="hidden" id="conferenceId" name="conference_id" value="1">
			<div class="steps-container">
				<ul class="steps-head">
					<li class="active">Thông tin cá nhân</li>
					<li>Bài tham luận</li>
				</ul>
			    <div class="steps-content">
			    	<section class="steps step-1" index="1">
				        <div class="row">
							<div class="input-field">
					          <input id="name_2" name="name" type="text" data-parsley-required data-parsley-group="step1">
					          <label for="name_2">Họ và Tên</label>
					        </div>
						</div>
						<div class="row">
							<div class="input-field">
					          <input id="email_2" name="email" type="email" data-parsley-required data-parsley-group="step1">
					          <label for="email_2">Email</label>
					        </div>
					    </div>
					    <div class="row">
					    	<div class="input-field">
					          <input id="phone_2" name="phone" type="text" data-parsley-required data-parsley-group="step1">
					          <label for="phone_2">Điện thoại</label>
					        </div>
					    </div>
					    <div class="row">
					        <div class="input-field">
					          <textarea id="address_2" name="address" type="text" class="address"></textarea>
					          <label for="address_2">Địa chỉ liên lạc</label>
					        </div>
						</div>
						<div class="button">
							<button type="button" class="btn next">Tiếp tục <i class="fas fa-arrow-right"></i></button>
						</div>
				    </section>
				    <section class="steps step-2" index="2">
				        <div class="row">
					        <div class="input-field">
					          <input id="tieude" name="tieude" type="text" data-parsley-required data-parsley-group="step2">
					          <label for="tieude">Tên bài tham luận</label>
					        </div>
						</div>
						<div class="row">
					        <div class="input-field">
					          <input id="title" name="title" type="text" data-parsley-required data-parsley-group="step2">
					          <label for="title">Tên bài Tiếng Anh</label>
					        </div>
						</div>
						<div class="row">
					        <div class="input-field">
					          <input id="tukhoa" name="tukhoa" type="text" data-parsley-required data-parsley-group="step2">
					          <label for="tukhoa">Từ khóa</label>
					        </div>
						</div>
						<div class="row">
					        <div class="input-field">
					          <input id="keyword" name="keyword" type="text" data-parsley-required data-parsley-group="step2">
					          <label for="keyword">Từ khóa Tiếng Anh</label>
					        </div>
						</div>
						<div class="row">
					        <div class="input-field">
					          <textarea id="tomtat" name="tomtat" type="text" data-parsley-required data-parsley-group="step2"></textarea>
					          <label for="tomtat">Tóm tắt </label>
					        </div>
						</div>
						<div class="row">
					        <div class="input-field">
					          <textarea id="abtract" name="abtract" type="text" data-parsley-required data-parsley-group="step2"></textarea>
					          <label for="abtract">Tóm tắt Tiếng Anh</label>
					        </div>
						</div>
						<div class="row">
							<div class="input-field">
						      <input type="file" name="fileUpload" class="file-field" placeholder="Bài tham luận" accept=".doc, .docx">
						    </div>
						</div>
						<div class="button">
							<a href="#" class="btn prev"><i class="fas fa-arrow-left"></i> Trở về</a> &nbsp; &nbsp;
							<button href="#" class="btn" id="submit"><i class="far fa-envelope"></i> GỬI BÀI THAM LUẬN</button>
						</div>
				    </section>
			    </div>
			</div>
		</form>
	</div>
</div>
<div id="articleRuler" class="modal articleRuler">
	<div class="modal-title"><i class="fas fa-book"></i> Thể lệ bài viết
		<span class="close"><i class="far fa-times-circle"></i></span>
	</div>
	<div class="modal-content">
		<p>Tóm tắt báo cáo bằng tiếng Việt và tiếng Anh: tối đa <strong>250 từ</strong>, font <strong>Times New Roman (Unicode)</strong>, font size <strong>12</strong>, top margin <strong>3cm</strong>, bottom margin <strong>2,5cm</strong>, left margin <strong>3cm</strong>, right margin <strong>2,5cm</strong>, kèm file (gửi qua email);</p> <br>
		<p>Toàn văn báo cáo: tối đa <strong>10 trang A4</strong>, font <strong>Times New Roman (Unicode)</strong>, font size <strong>12</strong>, top margin <strong>3cm</strong>, bottom margin <strong>2,5cm</strong>, left margin <strong>3cm</strong>, right margin <strong>2,5cm</strong>, kèm file (gửi qua email). Tiêu đề của báo cáo chữ in đậm, cỡ chữ <strong>15</strong>, dưới tiêu đề xin ghi rõ họ và tên tác giả, học hàm, học vị, đơn vị, thông tin liên hệ (E-mail, số di động);</p> <br>
		<p>Ngôn ngữ trình bày: tiếng Việt hoặc tiếng Anh.</p>
	</div>
</div>
<div id="bantochuc" class="modal bantochuc">
	<div class="modal-title"><i class="fas fa-users"></i> Ban tổ chức
		<span class="close"><i class="far fa-times-circle"></i></span>
	</div>
	<div class="modal-content">
		Ban tổ chức
	</div>
</div>
<div id="donvitaitro" class="modal donvitaitro">
	<div class="modal-title"><i class="fas fa-users"></i> Đơn vị tài trợ
		<span class="close"><i class="far fa-times-circle"></i></span>
	</div>
	<div class="modal-content">
		Đơn vị tài trợ
	</div>
</div>
<div id="updateArticle" class="modal updatearticle">
	<div class="modal-title"><i class="fas fa-users"></i> Cập nhật bài tham luận
		<span class="close"><i class="far fa-times-circle"></i></span>
	</div>
	<div class="modal-content">
		<div class="search">
			<p class="note">Nhập <strong>Email</strong> và <strong>Mã bài tham luận</strong> để tìm thông tin bài tham luận</p>
			<input type="hidden" id="postLink" name="postLink" value="<?php echo $url_post ?>/searchArticle">
			<div class="rowSearch">
		        <div class="input-field">
		          <input id="email" name="email" type="text">
		          <label for="email">Email</label>
		        </div>
		        <div class="input-field">
		          <input id="articleId" name="article_id" type="text">
		          <label for="articleId">Mã bài tham luận</label>
		        </div>
				<div class="input-field">
					<a href="#" class="btn btnSearch"><i class="fas fa-search"></i> Tìm</a>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="articleInfo" id="articleInfo">
			<form action="http://localhost/cf/api/updateArticle" method="post" id="updateForm" class="updateform" enctype="multipart/form-data">
				<input type="hidden" name="successUrl" value="<?php echo $url_site ?>/thanks-for-send.html">
				<input type="hidden" name="failedUrl" value="<?php echo $url_site ?>/tlns/send-failed.html">
				<input id="articleId" name="article_id" type="hidden">
				<input type="hidden" id="conferenceId" name="conference_id" value="1">
				<div class="row">
			        <div class="input-field">
			          <input id="tieude" name="tieude" type="text" data-parsley-required>
			          <label for="tieude">Tên bài tham luận</label>
			        </div>
				</div>
				<div class="row">
			        <div class="input-field">
			          <input id="title" name="title" type="text" data-parsley-required>
			          <label for="title">Tên bài Tiếng Anh</label>
			        </div>
				</div>
				<div class="row">
			        <div class="input-field">
			          <input id="tukhoa" name="tukhoa" type="text" data-parsley-required>
			          <label for="tukhoa">Từ khóa</label>
			        </div>
				</div>
				<div class="row">
			        <div class="input-field">
			          <input id="keyword" name="keyword" type="text" data-parsley-required>
			          <label for="keyword">Từ khóa Tiếng Anh</label>
			        </div>
				</div>
				<div class="row">
			        <div class="input-field">
			          <textarea id="tomtat" name="tomtat" type="text" data-parsley-required></textarea>
			          <label for="tomtat">Tóm tắt </label>
			        </div>
				</div>
				<div class="row">
			        <div class="input-field">
			          <textarea id="abtract" name="abtract" type="text" data-parsley-required></textarea>
			          <label for="abtract">Tóm tắt Tiếng Anh</label>
			        </div>
				</div>
				<div class="row">
					<div class="input-field">
				      <input type="file" name="fileUpload" id="fileUpload" class="file-field" placeholder="Bài tham luận mới" accept=".doc, .docx">
				      <label for="fileUpload">Bài tham luận mới</label>
				    </div>
				</div>
				<div class="row oldFileLink">
					<div class="input-field">
				      <a href="" id="oldFileLink" target="_blank">Xem bài tham luận cũ</a>
				      <input type="hidden" name="oldFile" id="oldFile">
				    </div>
				</div>
				<div class="button">
					<button href="#" class="btn" id="submit"><i class="far fa-envelope"></i> Cập nhật thông tin</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div id="listArticles" class="modal listarticles">
	<div class="modal-title"><i class="fas fa-users"></i> Đơn vị tài trợ
		<span class="close"><i class="far fa-times-circle"></i></span>
	</div>
	<div class="modal-content">
		Đơn vị tài trợ
	</div>
</div>
<section class="section-1 parallax-window" data-parallax="scroll" data-image-src="images/section-1.jpg">
	<div class="content wow pulse" data-wow-duration="1.5s">
		<img class="logo" src="images/logo.png" alt="Trường Đại học An Giang">
		<h2 class="title">
			Hội thảo khoa học Quốc tế
		</h2>
		<h1 class="text">
			<span class="symbol">"</span>Triết lý nhân sinh của người dân Nam bộ<span class="symbol">"</span>
		</h1>
		<div class="time">
			Thời gian dự kiến: <span class="date">08/2018</span> - Thời lượng: <span class="date">2 ngày</span>
		</div>
		<div class="ruler">
			<ul>
				<li><a href="javascript:showModal('#bantochuc')" title="Ban tổ chức">Ban tổ chức</a></li>
				<li><a href="javascript:showModal('#donvitaitro')" title="Đơn vị tài trợ">Đơn vị tài trợ</a></li>
				<li><a href="javascript:showModal('#articleRuler')" title="Thể lệ gửi bài đăng">Thể lệ gửi bài đăng</a></li>
			</ul>
		</div>
		<div class="button">
			<a href="javascript:showModal('#registration')" class="btn">ĐĂNG KÝ THAM DỰ</a> &nbsp; &nbsp;
			<a href="javascript:showModal('#presenter')" class="btn">GỬI BÀI THAM LUẬN</a>
		</div>
		<div class="note">
			<ul>
				<li><a href="javascript:showModal('#updateArticle')" title="Ban tổ chức">Cập nhật bài tham luận</a></li>
				<li><a href="javascript:showModal('#listArticles')" title="Đơn vị tài trợ">Danh sách bài tham luận</a></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
</section>
<section class="section-2 parallax-window" data-parallax="scroll" data-image-src="images/section-2-2.jpg">
	<div class="left">
		<img src="images/section-2.jpg" alt="">
	</div>
	<div class="right wow fadeIn" data-wow-duration="1.5s">
		<p>Vùng đất Nam bộ, Việt Nam đã trải qua hàng trăm năm khai hoang, xây dựng và phát triển và có hàng ngàn năm trước đó với một nền văn hóa Phù Nam hùng mạnh. Trong suốt thời gian đó, nhiều sự kiện văn hóa, lịch sử quan trọng đã diễn ra  tại vùng đất này với nhiều thay đổi về tự nhiên và con người. Theo dòng thời gian, những thay đổi đó cũng đã làm chuyển biến trong nhận thức, phong tục tập quán của người dân. Theo đó, những giá trị đặc biệt trong nhân sinh của con người sinh sống ở từng khu vực địa lý nhất định đã hình thành thông qua sự ra đời của nhiều tôn giáo, tín ngưỡng, lễ hội, nền văn học nghệ thuật và nếp sống của người dân.</p>
		<p>Trong giai đoạn hiện nay, việc xây dựng và phát triển kinh tế, văn hóa, giáo dục,... đều có một phần gắn với những phát triển nhân sinh của con người và vùng đất Nam Bộ. Trên cơ sở đó, Trường Đại học An Giang tổ chức Hội thảo Khoa học “Triết lý nhân sinh của người dân Nam bộ”.</p>
		<div class="button">
			<a href="#" class="btn">ĐĂNG KÝ THAM DỰ</a> &nbsp; &nbsp;
			<a href="#" class="btn">GỬI BÀI THAM LUẬN</a>
		</div>
	</div>
	<div class="clear"></div>
</section>
<section class="section-3 parallax-window" data-parallax="scroll" data-image-src="images/section-2-2.jpg">
	<div class="right">
		<img src="images/section-3.jpg" alt="">
	</div>
	<div class="left wow fadeIn" data-wow-duration="1.5s">
		<h2 class="title">MỤC ĐÍCH HỘI THẢO</h2>
		<div class="text">
			<p>Nhằm nâng cao nhận thức, kiến thức văn hóa bản địa và tạo điều kiện cho các nhà khoa học, cán bộ, giảng viên và sinh viên có thể trao đổi, chia sẻ những kiến thức về vùng đất đa dạng về tôn giáo, phong tục tập quán, cũng như những nét văn hóa và bản sắc dân tộc đặc trưng của con người Nam bộ, nơi được xem như tiểu Cộng đồng văn hóa ASEAN.</p>
			<p>Hội thảo cũng là dịp để các nhà khoa học và những người quan tâm khác có thể phân tích những thách thức, những cơ hội hợp tác mới, chia sẻ kinh nghiệm để hiểu rõ hơn về bản sắc dân tộc, phong tục, tập quán, truyền thống văn hóa, sự giao thoa văn hóa và triết lý nhân sinh của người dân Nam bộ xưa và nay nói riêng và khu vực Hạ lưu sông Mê Kông nói chung.</p>
			<p>Những cơ sở khoa học được rút ra từ hội thảo sẽ là nguồn tư liệu quý để kiến nghị và đề xuất đến các nhà quản lý, nhà thực thi chính sách của địa phương, vùng và quốc gia hoạch định chính sách kế thừa và phát huy nền văn hóa bản địa ngày càng tốt hơn.</p>
		</div>
		<div class="button">
			<a href="javascript:showModal('#registration')" class="btn">ĐĂNG KÝ THAM DỰ</a> &nbsp; &nbsp;
			<a href="javascript:showModal('#presenter')" class="btn">GỬI BÀI THAM LUẬN</a>
		</div>
	</div>
	
	<div class="clear"></div>
</section>
<section class="section-5 parallax-window" data-parallax="scroll" data-image-src="images/section-4.jpg">
	<div class="content wow fadeIn" data-wow-duration="1.5s">
		<h2 class="title">Các chủ đề tham luận</h2>
		<p class="text">Các bài tham luận cho Hội thảo tập trung vào triết lý nhân sinh của người dân Nam bộ được thể hiện qua các lĩnh vực:</p>
		<div class="list">
			<div class="left">
				<ul>
					<li>Văn hóa các dân tộc sinh sống tại vùng Nam Bộ; </li>
					<li>Các tôn giáo - tín ngưỡng phổ biến và có nguồn gốc từ các địa phương ở Nam bộ; </li>
					<li>Phong tục tập quán;</li>
				</ul>
			</div>
			<div class="right">
				<ul>
					<li>Âm nhạc, hội họa, điêu khắc;</li>
					<li>Văn học nghệ thuật;</li>
					<li>Lễ hội truyền thống;</li>
					<li>Và các vấn đề liên quan</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="clear"></div>
</section>
<section class="section-4">
	<div class="content wow fadeIn" data-wow-duration="1.5s">
		<h2 class="title">Kết quả mong đợi</h2>
		<div class="item">Góp phần giúp các đại biểu tham dự hội thảo có góc nhìn đa chiều ở nhiều lĩnh vực khác nhau về triết lý nhân sinh của người dân Nam bộ;</div>
		<div class="item">Tập hợp các nghiên cứu về triết lý nhân sinh thông qua nền văn hóa bản địa Nam bộ;</div>
		<div class="item">Đề xuất các giải pháp kế thừa và phát huy các giá trị văn hóa đặc sắc phù hợp với triết lý nhân sinh của người dân Nam bộ.</div>
	</div>
</section>
<section class="section-6 parallax-window" data-parallax="scroll" data-image-src="images/section-5.jpg">
	<div class="content wow fadeIn" data-wow-duration="1.5s">
		<h2 class="title">Thời gian và địa điểm tổ chức hội thảo</h2>
		<div class="text">
			<p><strong>Thời gian dự kiến:</strong> tháng 8 năm 2018 (Thời lượng: 02 ngày)</p>
			<p><strong>Ngày 1:</strong> Hội thảo chính; Báo cáo tham luận. </p>
			<p><strong>Ngày 2:</strong> Tham quan thực địa trên địa bàn tỉnh An Giang. </p>
			<p><strong>Địa điểm:</strong> Trường Đại học An Giang.</p>
		</div>
		<div class="button">
			<a href="javascript:showModal('#registration')" class="btn">ĐĂNG KÝ THAM DỰ</a> &nbsp; &nbsp;
			<a href="javascript:showModal('#presenter')" class="btn">GỬI BÀI THAM LUẬN</a>
		</div>
	</div>
</section>
<section class="section-7">
	<div class="content wow fadeIn" data-wow-duration="1.5s">
		<h2 class="title">thông tin liên hệ</h2>
		<div class="text">
			<p><strong>ThS. Châu Sôryaly</strong> - ĐTDĐ: 0907666051; Email: csoryaly@agu.edu.vn</p>
			<p><strong>ThS. Lê Hải Yến </strong>-  ĐTDĐ: 0907666051; Email: csoryaly@agu.edu.vn</p>
			<p><strong>Điện thoại Văn phòng:</strong> (0296) 6 256565 - 1711;</p>
			<p class="italic">Ban Tổ chức Hội thảo trân trọng kính mời các nhà khoa học, nhà quản lý, các chuyên gia, giảng viên, sinh viên, các cơ quan nghiên cứu trong và ngoài nước quan tâm, đăng ký tham dự và gửi bài cho Hội thảo./.</p>
		</div>
	</div>
</section>
<footer class="footer">
	<?php include('footer.php') ?>
</footer>
<div class="scrollToTop"><i class="fas fa-arrow-up"></i></div>
</body>
</html>