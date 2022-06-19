<?php # -*- coding: utf-8 -*-
/**
 * Plugin Name: Argon Emoji DailyNotes
 * Text Domain: ArgonEmojiDailyNotes
 * Domain Path: /languages
 * Description: Argon 主题的《每日手帐》同人吉祥物表情包
 * Version:     1.0.0-P
 * Author:      MengXiCenter
 * Author URI:  https://mengxiblog.top/
 * License:     Apache2
 */

    function add_more_emotions($emotionList){
		$assets_dir = plugins_url( 'assets/', __FILE__ );
        array_push(
            $emotionList,
            array(
                //Setup Name and info
                'groupname' => '每日手帐', 
				'description' => 'Github：https://github.com/MengXi2021/Argon-Emoji-DailyNotes', 
                'list' => array(
                    //Setup Files dir
					array('type' => 'sticker', 'code' => 'ChenSi', 'src' => $assets_dir . 'ChenSi.png'),
					array('type' => 'sticker', 'code' => 'DaiKouZhao', 'src' => $assets_dir . 'DaiKouZhao.png'),
					array('type' => 'sticker', 'code' => 'DaKu', 'src' => $assets_dir . 'DaKu.png'),
					array('type' => 'sticker', 'code' => 'DeYi', 'src' => $assets_dir . 'DeYi.png'),
					array('type' => 'sticker', 'code' => 'DianFeng', 'src' =>$assets_dir .  'DianFeng.png'),
					array('type' => 'sticker', 'code' => 'FeiGeChuanXin', 'src' => $assets_dir . 'FeiGeChuanXin.png'),
					array('type' => 'sticker', 'code' => 'FenDou', 'src' => $assets_dir . 'FenDou.png'),
					array('type' => 'sticker', 'code' => 'GanDong', 'src' =>$assets_dir .  'GanDong.png'),
					array('type' => 'sticker', 'code' => 'Han', 'src' => $assets_dir . 'Han.png'),
					array('type' => 'sticker', 'code' => 'HaoQiDai', 'src' => $assets_dir . 'HaoQiDai.png'),
					array('type' => 'sticker', 'code' => 'HaoXiHuan', 'src' => $assets_dir . 'HaoXiHuan.png'),
					array('type' => 'sticker', 'code' => 'HouHui', 'src' => $assets_dir . 'HouHui.png'),
					array('type' => 'sticker', 'code' => 'JingXia', 'src' => $assets_dir . 'JingXia.png'),
					array('type' => 'sticker', 'code' => 'JingYa', 'src' => $assets_dir . 'JingYa.png'),
					array('type' => 'sticker', 'code' => 'KaiXin', 'src' => $assets_dir . 'KaiXin.png'),
					array('type' => 'sticker', 'code' => 'Ku', 'src' => $assets_dir . 'Ku.png'),
				    array('type' => 'sticker', 'code' => 'Lei', 'src' => $assets_dir . 'Lei.png'),
				    array('type' => 'sticker', 'code' => 'Leng', 'src' => $assets_dir . 'Leng.png'),
				    array('type' => 'sticker', 'code' => 'LingGan', 'src' => $assets_dir . 'LingGan.png'),
				    array('type' => 'sticker', 'code' => 'PingJing', 'src' =>$assets_dir .  'PingJing.png'),
				    array('type' => 'sticker', 'code' => 'Re', 'src' => $assets_dir . 'Re.png'),
				    array('type' => 'sticker', 'code' => 'Ren', 'src' => $assets_dir . 'Ren.png'),
				    array('type' => 'sticker', 'code' => 'ShangLe', 'src' =>$assets_dir .  'ShangLe.png'),
				    array('type' => 'sticker', 'code' => 'ShengBing', 'src' => $assets_dir . 'ShengBing.png'),
				    array('type' => 'sticker', 'code' => 'ShengQi', 'src' => $assets_dir . 'ShengQi.png'),
			    	array('type' => 'sticker', 'code' => 'ShiMian', 'src' => $assets_dir . 'ShiMian.png'),
			    	array('type' => 'sticker', 'code' => 'ShuiMian', 'src' => $assets_dir . 'ShuiMian.png'),
			    	array('type' => 'sticker', 'code' => 'ShuShi', 'src' => $assets_dir . 'ShuShi.png'),
			    	array('type' => 'sticker', 'code' => 'TongKu', 'src' => $assets_dir . 'TongKu.png'),
					array('type' => 'sticker', 'code' => 'WeiQu', 'src' => $assets_dir . 'WeiQu.png'),
				    array('type' => 'sticker', 'code' => 'WuYu', 'src' => $assets_dir . 'WuYu.png'),
				    array('type' => 'sticker', 'code' => 'XiaoKu', 'src' => $assets_dir . 'XiaoKu.png'),
				    array('type' => 'sticker', 'code' => 'XiaoNu', 'src' => $assets_dir . 'XiaoNu.png'),
				    array('type' => 'sticker', 'code' => 'YiWen', 'src' =>$assets_dir .  'YiWen.png'),
				    array('type' => 'sticker', 'code' => 'YouKanKan', 'src' => $assets_dir . 'YouKanKan.png'),
				    array('type' => 'sticker', 'code' => 'YueDu', 'src' => $assets_dir . 'YueDu.png'),
				    array('type' => 'sticker', 'code' => 'ZuoKanKan', 'src' =>$assets_dir .  'ZuoKanKan.png'),
                )
            )
        );
        return $emotionList;
    }
    add_filter('argon_emotion_list' , 'add_more_emotions');
// New WP-admin list
add_action('admin_menu', 'dashboard_submenu');
function dashboard_submenu() {
    add_dashboard_page(__('仪表盘设置'), __('Daily Argon Emoji设置'), 'read', 'your-unique-identifier', 'add_dashboard_submenu');
}
function add_dashboard_submenu() {
  echo '<div><p><h2><strong>Argon Emoji-DailyNotes</strong></h2></p></div>';
  echo '<div><p><h3><strong>适用于Argon Theme In WordPress的《每日手帐》吉祥物同人表情包插件</strong></h3></p></div>';
  echo '<div><p><a href="https://mengxiblog.top">作者博客</a>&nbsp;&nbsp;</a></p></div>';
}
?>