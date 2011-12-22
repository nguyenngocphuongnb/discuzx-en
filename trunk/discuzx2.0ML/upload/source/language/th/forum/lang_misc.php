<?php

/**+++
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_misc.php 20740 2011-03-02 09:55:01Z liulanbo $
 */

$lang = array
(
	'discuz_lang'	=> 'misc',
	'contact'	=> 'ติดต่อ:',
	'anonymous'	=> 'นิรนาม',
	'anonymoususer'	=> 'สมาชิกไม่ระบุชื่อ',
	'guestuser'	=> 'ผู้เยี่ยมชม',
	'has_expired'	=> 'ข้อมูลนี้ได้หมดอายุแล้ว',
	'click_view'	=> 'คลิกเพื่อดู',
	'never_expired'	=> 'ไม่มีวันหมดอายุ',
	'sort_update'	=> 'อัพเดท',
	'sort_upload'	=> 'อัปโหลด',
	'view_noperm'	=> 'เนื้อหาถูกซ่อนไว้',
	'post_hidden'	=> '**** เนื้อหาถูกซ่อนไว้โดยเจ้าของกระทู้ ****',
	'post_banned'	=> '**** เจ้าของกระทู้ถูกแบนหรือถูกลบ เนื้อหาถูกระงับโดยอัตโนมัติ ****',
	'post_single_banned'	=> '**** ข้อมูลต้นฉบับที่นำมาอ้างอิงถูกห้ามหรือถูกระงับ ****',
	'message_ishidden_hiddenreplies'	=> 'กระทู้นี้สามารถมองเห็นได้เฉพาะเจ้าของกระทู้เท่านั้น',
	'post_reply_quote'	=> 'ต้นฉบับโพสต์โดย {author} เมื่อ {time}',
	'post_edit'	=> '[i=s] แก้ไขครั้งสุดท้ายโดย {editor} เมื่อ {edittime} [/i]\n\n',
	'post_edit_regexp'	=> '/^\[i=s\] แก้ไขครั้งสุดท้ายโดย .*? เมื่อ .*?  \[\/i\]\n\n/s',
	'post_edithtml'	=> '[i=s] แก้ไขครั้งสุดท้ายโดย {editor} เมื่อ {edittime} [/i]<br /><br />',
	'post_edithtml_regexp'	=> '/^\[i=s\] แก้ไขครั้งสุดท้ายโดย .*? เมื่อ .*? \[\/i\]&lt;br \/&gt;&lt;br \/&gt;/s',
	'post_editnobbcode'	=> '[ แก้ไขครั้งสุดท้ายโดย {editor} เมื่อ {edittime} ]\n\n',
	'post_editnobbcode_regexp'	=> '/^\[ แก้ไขครั้งสุดท้ายโดย .*? เมื่อ .*? \]\n\n/s',
	'post_reply'	=> 'ตอบกระทู้',
	'post_thread'	=> 'ตั้งกระทู้',

	'price'			=> 'ราคา',
	'pay_view'		=> 'บันทึก',
	'attachment_buy'	=> 'ซื้อ',

	'post_trade_yuan'	=> 'บาท',
	'post_trade_seller'	=> 'ผู้ขาย',
	'post_trade_name'	=> 'ชื่อยี่ห้อ',
	'post_trade_price'	=> 'ราคาสินค้า',
	'post_trade_quality'	=> 'คุณลักษณะ',
	'post_trade_locus'	=> 'สถานที่',
	'post_trade_transport_type'	=> 'วิธีการขนส่ง',
	'post_trade_transport_seller'	=> 'ผู้ขายชำระค่าขนส่ง',
	'post_trade_transport_buyer'	=> 'ผู้ซื้อชำระค่าขนส่ง',
	'post_trade_transport_mail'	=> 'อีเมลล์',
	'post_trade_transport_express'	=> 'ด่วน',
	'post_trade_transport_virtual'	=> 'สินค้าเสมือนจริงหรือไม่จำเป็นต้องจัดส่งทางอีเมล',
	'post_trade_transport_physical'	=> 'ชำระเงินหลังจากผู้ซื้อได้รับสินค้า',
//	'post_trade_locus'	=> 'สถานที่',
	'post_trade_description'	=> 'รายละเอียด',
	'post_trade_pm_subject'	=> '[ต่อรอง]',
	'post_trade_pm_buynum'	=> 'จำนวน',
	'post_trade_pm_wishprice'	=> 'ราคาต่อรอง',
	'post_trade_pm_reason'	=> 'เหตุผลในการต่อรอง',
	'post_deleted'	=> 'โพสต์ที่ไม่ถูกต้อง, การอ้างอิงนี้ได้ถูกลบไปแล้ว',
	'postappend_content'	=> 'เพิ่มเนื้อหา',
	'payment_unit'		=> 'บาท',

	'attach'		=> 'แนบไฟล์',
	'attach_pay'		=> 'ยอดขายไฟล์แนบ',
	'attach_credits_policy'	=> 'ดูรายละเอียดของนโยบายคะแนน',
	'attach_img'		=> 'ไฟล์แนบรูปภาพ',
	'attach_readperm'	=> 'ระดับการเข้าถึง',
	'attach_img_zoom'	=> 'คลิกเพื่อดูขนาดต้นฉบับในหน้าต่างใหม่\\nCTRL+หมุนล้อเมาส์เพื่อขยายหรือย่อ',
	'attach_img_thumb'	=> 'คลิกเพื่อดูขนาดต้นฉบับในหน้าต่างใหม่',
	'attach_downloads'	=> 'ดาวน์โหลดจำนวน',

	'post_trade_transport'	=> 'ค่าธรรมเนียมจัดส่ง',
//	'post_trade_transport_mail'	=> 'จดหมาย',
	'post_trade_quality'	=> 'คุณลักษณะ',
	'post_trade_quality_new'	=> 'ใหม่',
	'post_trade_quality_secondhand'	=> 'เก่า',

	'trade_unstart'	=> '<font color="gray">รอสักครู่กำลังดำเนินการ</font>',
	'trade_waitbuyerpay'	=> 'รอการชำระเงินผู้ซื้อ',
	'trade_waitsellerconfirm'	=> 'การซื้อขายเสร็จสิ้น รอให้ผู้ขายยืนยัน',
	'trade_sysconfirmpay'	=> 'ผู้ซื้อยืนยันการชำระเงิน เกิดความผิดพลาดบางประการจะไม่ส่งสินค้าชั่วคราว',
	'trade_waitsellersend'	=> 'ผู้ซื้อจ่าย ผู้ขายส่ง',
	'trade_waitbuyerconfirm'	=> 'ผู้ขายได้ส่งสินค้าไปแล้ว，ผู้ซื้อยืนยัน',
	'trade_syspayseller'	=> 'ผู้ซื้อยืนยันการรับของสินค้า，รอชำระเงินให้ผู้ขาย',
	'trade_finished'	=> '<font color="green">การซื้อขายได้เสร็จสมบูรณ์</font>',
	'trade_closed'	=> '<font color="gray">ระงับการซื้อขาย （ไม่สมบูรณ์）</font>',
	'trade_waitselleragree'		=> 'รอให้ผู้ขายตกลงที่จะคืนเงิน',
	'trade_sellerrefusebuyer'	=> 'ผู้ซื้อปฏิเสธเงื่อนไขของผู้ขาย，รอการปรับเปลี่ยนเงื่อนไขการซื้อขาย',
	'trade_waitbuyerreturn'	=> 'ผู้ขายตกลงที่จะคืนเงิน，รอคืนเงินให้ผู้ซื้อ',
	'trade_waitsellerconfirmgoods'	=> 'รอการยืนยันจากผู้ขาย',
	'trade_waitalipayrefund'	=> 'การตกลงกันทั้งสองฝ่ายเรียบร้อย，รอการคืนเงิน',
	'trade_alipaycheck'	=> 'ตรวจสอบการคืนเงิน',
	'trade_overedrefund'	=> 'เสร็จสิ้นการคืนเงิน',
	'trade_refundsuccess'	=> '<font color="green">การคืนเงินประสบความสำเร็จ</font>',
	'trade_refundclosed'	=> '<font color="green">ปิดการคืนเงิน</font>',

	'trade_offline_1'	=> 'รายการมีผลบังคับใช้',
	'trade_offline_4'	=> 'ผู้ซื้อยืนยันการชำระเงิน，รอผู้ขายส่งสินค้า',
	'trade_offline_5'	=> 'ผู้ขายยืนยันการส่งสินค้า',
	'trade_offline_7'	=> 'ผู้ซื้อยืนยันการได้รับสินค้า，การซื้อขายได้เสร็จสมบูรณ์',
	'trade_offline_8'	=> 'ยกเลิกรายการนี้',
	'trade_offline_10'	=> 'ผู้ซื้อต้องการเงินคืน，รอให้ผู้ขายตกลงที่จะคืนเงิน',
	'trade_offline_11'	=> 'ผู้ขายปฏิเสธที่จะคืนเงิน',
	'trade_offline_12'	=> 'ผู้ขายตกลงที่จะคืนเงิน',
	'trade_offline_13'	=> 'ผู้ซื้อคืนสินค้า，รอให้ผู้ขายรับ',
	'trade_offline_17'	=> 'ผู้ขายได้รับคืน，การคืนเงิน',

	'trade_message_4'	=> 'คุณสามารถใส่วิธีการชำระเงิน、เช่นบัญชีธนาคารและข้อมูลอื่นๆ',
	'trade_message_5'	=> 'คุณสามารถใส่วิธีการจัดส่ง、เช่นหมายเลขใบแจ้งหนี้และข้อมูลอื่นๆ',
	'trade_message_13'	=> 'คุณสามารถใส่วิธีการจัดส่ง、เช่นหมายเลขใบแจ้งหนี้และข้อมูลอื่นๆ',

	'credit_payment'	=> 'แลกเปลี่ยนคะแนน',
	'credit_forum_payment'	=> 'แลกเปลี่ยนคะแนนกระดานข่าว',
	'credit_forum_royalty'	=> 'ค่าดำเนินการ',

	'invite_payment'	=> 'ซื้อรหัสเทียบเชิญ',
	'invite_forum_payment'	=> 'ซื้อรหัสเทียบเชิญ',
	'invite_forum_payment_unit'	=> 'โค้ด',
	'invite_forum_royalty'	=> 'ค่าธรรมเนียม',

	'formulaperm_regdate'	=> 'เวลาที่ลงทะเบียน',
	'formulaperm_regday'	=> 'วันที่ลงทะเบียน',
	'formulaperm_regip'	=> 'IP ที่ใช้ทะเบียน',
	'formulaperm_lastip'	=> 'IP ที่ใช้เข้าสู่ระบบล่าสุด',
	'formulaperm_buyercredit'	=> 'การประเมินเครดิตผู้ซื้อ',
	'formulaperm_sellercredit'	=> 'การประเมินเครดิตผู้ขาย',
	'formulaperm_digestposts'	=> 'กระทู้สำคัญ',
	'formulaperm_posts'	=> 'จำนวนโพสต์',
	'formulaperm_threads'	=> 'จำนวนกระทู้',
	'formulaperm_oltime'	=> 'เวลาออนไลน์(ชั่วโมง)',
	'formulaperm_pageviews'	=> 'การเข้าชม',
	'formulaperm_and'	=> 'และ',
	'formulaperm_or'	=> 'หรือ',
	'formulaperm_extcredits'	=> 'กำหนดคะแนน',

	'login_normal_mode'	=> 'ออนไลน์',
	'login_switch_invisible_mode'	=> 'แสดงสถานะออฟไลน์',
	'login_switch_normal_mode'	=> 'แสดงสถานะออนไลน์',
	'login_invisible_mode'	=> 'ออฟไลน์',

	'eccredit_explain'	=> 'คำอธิบาย',

	'google_site_0'		=> 'ค้นหาเว็บ',
	'google_site_1'		=> 'ค้นหาเว็บไซต์',
	'google_sa'		=> 'ค้นหา',

	'modcp_logs_action_home'	=> 'หน้าแรก',
	'modcp_logs_action_moderate'	=> 'ตรวจสอบ',
	'modcp_logs_action_member'	=> 'จัดการสมาชิก',
	'modcp_logs_action_forumaccess'	=> 'สิทธิ์ของสมาชิก',
	'modcp_logs_action_thread'	=> 'จัดการกระทู้',
	'modcp_logs_action_forum'	=> 'จัดการบอร์ด',
	'modcp_logs_action_announcement'	=> 'จัดการประกาศ',
	'modcp_logs_action_log'		=> 'จัดการบันทึก',
	'modcp_logs_action_stat'	=> 'จัดการสถิติ',

	'modcp_logs_action_login'	=> 'เข้าสู่ระบบ',

	'uch_selectalbum'	=> 'กรุณาเลือกอัลบั้ม',
	'uch_noalbum'		=> 'คุณไม่มีอัลบั้มภาพ，',
	'click_here'		=> 'คลิกที่นี่',
	'uch_createalbum'	=> 'เพื่อสร้างอัลบั้มภาพของคุณเอง!',

	'pm_from'	=> 'จาก',
	'pm_to'		=> 'ถึง',
	'pm_date'	=> 'วันที่',

	'share_message'	=> 'สวัสดี! ฉันได้ดูโพสต์นี้ใน {$_G[setting][bbname]}, ซึ่งน่าสนใจมาก, และต้องการแนะนำให้กับคุณโดยเฉพาะ\\n\\n$thread[subject]\\nที่อยู่ลิงค์ [url={$threadurl}]{$threadurl}[/url]\\n\\nหวังว่าคุณคงชอบนะ',

	'week_0'	=> 'อาทิตย์',
	'week_1'	=> 'จันทร์',
	'week_2'	=> 'อังคาร',
	'week_3'	=> 'พุธ',
	'week_4'	=> 'พฤหัสบดี',
	'week_5'	=> 'ศุกร์',
	'week_6'	=> 'เสาร์',

	'notice_actor'	=> 'ฯลฯ $actorcount คน',

	'perms_allowvisit'	=> 'เข้าใช้งาน',
	'perms_readaccess'	=> 'เข้าชม',
	'perms_allowviewpro'	=> 'ดูข้อมูลสมาชิก',
	'perms_allowinvisible'	=> 'แสดงสถานะเป็นออฟไลน์',
	'perms_allowsearch'	=> 'ใช้การค้นหา',
	'perms_allownickname'	=> 'ใช้ชื่อเล่น',
	'perms_allowcstatus'	=> 'กำหนดชื่อสถานะ',
	'perms_allowpost'	=> 'ตั้งกระทู้ใหม่',
	'perms_allowreply'	=> 'ตอบกระทู้',
	'perms_allowpostpoll'	=> 'สร้างโพล',
	'perms_allowvote'	=> 'ลงคะแนน',
	'perms_allowpostreward'	=> 'ตั้งกระทู้รางวัล',
	'perms_allowpostactivity'	=> 'เริ่มกิจกรรม',
	'perms_allowpostdebate'	=> 'เริ่มการโต้วาที',
	'perms_allowposttrade'	=> 'ขายสินค้า',
	'perms_maxsigsize'	=> 'ความยาวสูงสุดของลายเซ็น',
	'perms_allowsigbbcode'	=> 'ใช้โค้ด Discuz! ในลายเซ็น',
	'perms_allowsigimgcode'	=> 'ใช้โค้ด [img] ในลายเซ็น',
	'perms_maxbiosize'	=> 'ความยาวสูงสุดของการแนะนำตัว',
	'perms_allowrecommend'	=> 'แนะนำ',
	'perms_allowbiobbcode'	=> 'ใช้โค้ด Discuz! ในการแนะนำตัว',
	'perms_allowbioimgcode'	=> 'ใช้โค้ด [img] ในการแนะนำตัว',
	'perms_allowgetattach'	=> 'ดาวน์โหลด/ดู ไฟล์แนบ',
	'perms_allowgetimage'	=> 'ดูรูปภาพ',
	'perms_allowpostattach'	=> 'เผยแพร่ไฟล์แนบ',
	'perms_allowpostimage'	=> 'อัพโหลดรูปภาพ',
	'perms_allowsetattachperm'	=> 'ใช้โค้ด [img] ในการแนะนำตัว',
	'perms_maxspacesize'	=> 'ขนาดโปรไฟล์',
	'perms_maxattachsize'	=> 'ขนาดไฟล์แนบสูงสุด',
	'perms_maxsizeperday'	=> 'ขนาดไฟล์แนบสูงสุดต่อวัน',
	'perms_maxattachnum'	=> 'จำนวนไฟล์แนบสูงสุดต่อวัน',
//	'perms_allowbioimgcode'	=> 'ใช้โค้ด [img] ในข้อความแนะนำตัว',
	'perms_attachextensions'	=> 'รูปแบบไฟล์แนบ',
	'perms_allowstickthread'	=> 'ปักหมุดกระทู้',
	'perms_allowdigestthread'	=> 'เพิ่มเข้ากระทู้สำคัญ',
	'perms_allowstickthread_value'	=> 'ปักหมุด',
	'perms_allowdigestthread_value'	=> 'สำคัญ',
	'perms_allowbumpthread'		=> 'เลื่อนกระทู้',
	'perms_allowhighlightthread'	=> 'เน้นกระทู้',
	'perms_allowrecommendthread'	=> 'แนะนำกระทู้',
	'perms_allowstampthread'	=> 'ติดตราประทับกระทู้',
	'perms_allowclosethread'	=> 'ปิดกระทู้',
	'perms_allowmovethread'		=> 'ย้ายกระทู้',
	'perms_allowedittypethread'	=> 'แก้ไขหมวดหมู่กระทู้',
	'perms_allowcopythread'		=> 'คัดลอกกระทู้',
	'perms_allowmergethread'	=> 'รวมกระทู้',
	'perms_allowsplitthread'	=> 'แบ่งกระทู้',
	'perms_allowrepairthread'	=> 'ซ่อมแซมกระทู้',
	'perms_allowrefund'		=> 'บังคับคืนเงิน',
	'perms_alloweditpoll'		=> 'แก้ไขโพล',
	'perms_allowremovereward'	=> 'ลบรางวัล',
	'perms_alloweditactivity'	=> 'จัดการกิจกรรม',
	'perms_allowedittrade'	=> 'จัดการสินค้า',
	'perms_alloweditpost'	=> 'แก้ไขกระทู้สำคัญ',
	'perms_allowwarnpost'	=> 'เตือนการโพสต์',
	'perms_allowbanpost'	=> 'แบนโพสต์',
	'perms_allowdelpost'	=> 'ลบโพสต์',
	'perms_allowviewreport'	=> 'ดูรายงานสมาชิก',
	'perms_allowmodpost'	=> 'ตรวจสอบโพสต์',
	'perms_allowmoduser'	=> 'ตรวจสอบสมาชิก',
	'perms_allowbanuser'	=> 'แบนสมาชิกจาก',
	'perms_allowbanip'	=> 'แบน IP',
	'perms_allowedituser'	=> 'แก้ไขสมาชิก',
	'perms_allowmassprune'	=> 'ลบโพสต์เป็นชุด',
	'perms_allowpostannounce'	=> 'ประกาศ',
	'perms_disablepostctrl'	=> 'ไม่จำกัดโพสต์',
	'perms_allowviewip'	=> 'อนุญาตให้ดู IP',
	'perms_viewperm'	=> 'ดูบอร์ด',
	'perms_postperm'	=> 'ตั้งกระทู้ใหม่',
	'perms_replyperm'	=> 'ตอบกระทู้',
	'perms_getattachperm'	=> 'ดาวน์โหลด/ดูไฟล์แนบ',
	'perms_postattachperm'	=> 'อัพโหลดไฟล์แนบ',
	'perms_postimageperm'	=> 'อัปโหลดรูปภาพ',
	'perms_allowblog'	=> 'อนุญาตให้เขียนบล็อก',
	'perms_allowdoing'	=> 'อนุญาตให้ทักทาย(โดยรวม)',
	'perms_allowupload'	=> 'อนุญาตให้อัปโหลดรูปภาพ',
	'perms_allowshare'	=> 'อนุญาตให้แบ่งปัน',
	'perms_allowpoke'	=> 'อนุญาตให้ทักทาย(ส่วนตัว)',
	'perms_allowfriend'	=> 'อนุญาตให้เพิ่มเพื่อน',
	'perms_allowclick'	=> 'อนุญาตให้แสดงความรู้สึก',
	'perms_allowmyop'	=> 'อนุญาตให้ใช้แอปพลิเคชั่น',
	'perms_allowcomment'	=> 'อนุญาตให้แสดงความคิดเห็น',
	'perms_allowstatdata'	=> 'อนุญาตให้ดูสถิติข้อมูล',
	'perms_allowstat'	=> 'อนุญาตให้ดูแนวโน้มสถิติ',
	'perms_allowpostarticle'	=> 'อนุญาตให้เผยแพร่บทความ',
	'perms_raterange'	=> 'อนุญาตเข้าร่วมให้คะแนน',
	'perms_allowsendpm'	=> 'อนุญาตให้ส่งข้อความส่วนตัว',
	'perms_maximagesize'	=> 'ขนาดสูงสุดของรูปภาพ',
	'perms_allowmediacode'	=> 'อนุญาตให้ใช้โค้ดมัลติมีเดีย',

	'join_topic'	=> 'เข้าร่วมหัวข้อ',
	'join_poll'	=> 'เข้าร่วมโพล',
	'buy_trade'	=> 'เข้าร่วมซื้อ/ขายสินค้า',
	'join_reward'	=> 'เข้าร่วมรางวัล',
	'join_activity'	=> 'เข้าร่วมกิจกรรม',
	'join_debate'	=> 'เข้าร่วมโต้วาที',

	'lower'			=> 'ต่ำกว่า',
	'higher'		=> 'สูงกว่า',
	'report_msg_your'	=> 'ของคุณ ',
	'report_noreward'	=> 'ไม่มีรางวัล',
);

