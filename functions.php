<?php

//styleを読む
function theme_scripts( ) {
	wp_enqueue_style( 'reset-css', get_template_directory_uri( ) . '/css/reset.css' );
    wp_enqueue_style( 'theme-css', get_template_directory_uri( ) . '/css/main.css');

    }

    add_action( 'wp_enqueue_scripts', 'theme_scripts' );

//カスタムメニュー機能を有効にする
register_nav_menus(array( 
'mainnavi' => 'メインナビゲーションバーの内容です',
 'utility' => 'ヘッダー上部のナビの内容です'
 ));


//ウィジェットメニューを有効にする
sidebar_add('top');
sidebar_add('blog');
sidebar_add('web');
sidebar_add('dtp');
sidebar_add('footer');

function sidebar_add($title){
	register_sidebar(array(
		'name'=>$title.'エリア',
		'id'=>$title,
		'before_widget'=>'<div class="widget">',
		'after_widget'=>'</div>',
		'before_title'=>'<h3class="widget_title">',
		'after_title'=>'</h3>'

	));
}






