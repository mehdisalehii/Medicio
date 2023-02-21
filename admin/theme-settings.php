<?php

add_action('init','propanel_of_options');

if (!function_exists('propanel_of_options')) {
function propanel_of_options(){

//Theme Shortname
$shortname = "yavarankhodro";


//Populate the options array
global $tt_options;
$tt_options = get_option('of_options');


//Access the WordPress Pages via an Array
$tt_pages = array();
$tt_pages_obj = get_pages('sort_column=post_parent,menu_order');    
foreach ($tt_pages_obj as $tt_page) {
$tt_pages[$tt_page->ID] = $tt_page->post_name; }
$tt_pages_tmp = array_unshift($tt_pages, "Select a page:"); 


//Access the WordPress Categories via an Array
$tt_categories = array();  
$tt_categories_obj = get_categories('hide_empty=0');
foreach ($tt_categories_obj as $tt_cat) {
$tt_categories[$tt_cat->cat_ID] = $tt_cat->cat_name;}
$categories_tmp = array_unshift($tt_categories, "Select a category:");


//Sample Array for demo purposes
$sample_array = array("1","2","3","4","5");


//Sample Advanced Array - The actual value differs from what the user sees
$sample_advanced_array = array("image" => "The Image","post" => "The Post"); 


//Folder Paths for "type" => "images"
$sampleurl =  get_template_directory_uri() . '/admin/images/sample-layouts/';










/*-----------------------------------------------------------------------------------*/
/* Create The Custom Site Options Panel
/*-----------------------------------------------------------------------------------*/
$options = array(); // do not delete this line - sky will fall




/* Option Page 1 - All Options */	
$options[] = array( "name" => __('logo','framework_localize'),
			"type" => "heading");
			
$options[] = array( "name" => __('راهنما','framework_localize'),
			"desc" => "",
			"id" => $shortname."_sample_callout",
			"std" => "در این قسمت میتوانید لوگوی سایت را مدیریت کنید.",
			"type" => "info");

$options[] = array( "name" => __('تصویر لوگو','framework_localize'),
			"desc" => __('شما میتوانید تصویر لوگوی مورد نظر خودتان را در این قسمت آپلود کنید','framework_localize'),
			"id" => $shortname."_site_logo",
			"std" => "",
			"type" => "upload");			

$options[] = array( "name" => __('تگ h1','framework_localize'),
			"desc" => __('شما میتوانید تصویر لوگوی مورد نظر خودتان را در این قسمت آپلود کنید','framework_localize'),
			"id" => $shortname."_site_h1",
			"std" => "",
			"type" => "upload");	




$options[] = array( "name" => __('contactus','framework_localize'),
			"type" => "heading");


$options[] = array( "name" => __('متن اول','framework_localize'),
			"desc" => "در این قسمت میتوانید شعار سایت خود را وارد کنید",
			"id" => $shortname."_titr1",
			"std" => "",
			"type" => "text");
			
			
$options[] = array( "name" => __('متن دوم','framework_localize'),
			"desc" => "در این قسمت میتوانید متن باکس جستجو را وارد کنید",
			"id" => $shortname."_titr2",
			"std" => "",
			"type" => "text");

$options[] = array( "name" => __('متن سوم','framework_localize'),
			"desc" => "در این قسمت میتوانید متن باکس جستجو را وارد کنید",
			"id" => $shortname."_titr3",
			"std" => "",
			"type" => "text");

$options[] = array( "name" => __('متن چهارم','framework_localize'),
			"desc" => "در این قسمت میتوانید متن باکس جستجو را وارد کنید",
			"id" => $shortname."_titr4",
			"std" => "",
			"type" => "text");








$options[] = array( "name" => __('Aboute','framework_localize'),
			"type" => "heading");


$options[] = array( "name" => __('تلفن تماس','framework_localize'),
			"desc" => "تلفن تماس",
			"id" => $shortname."_call",
			"std" => "",
			"type" => "text");
			
$options[] = array( "name" => __('متن','framework_localize'),
			"desc" => "متن توضیحی بخش درباره ما وسط صفحه",
			"id" => $shortname."_home_aboute",
			"std" => "",
			"type" => "textarea");			










$options[] = array( "name" => __('Application','framework_localize'),
			"type" => "heading");

$options[] = array( "name" => __('عنوان بخش دانلود اپلیکیشن','framework_localize'),
			"desc" => "عنوان بخش دانلود اپلیکیشن را وارد کنید",
			"id" => $shortname."_title_app",
			"std" => "",
			"type" => "text");
			
			
$options[] = array( "name" => __('تصویر اپلیکیشن اندروید ','framework_localize'),
			"desc" => __('تصویر اپلیکیشن اندروید را اینجا وارد کنید','framework_localize'),
			"id" => $shortname."_img_android",
			"std" => "",
			"type" => "upload");			
			
$options[] = array( "name" => __('لینک دانلود اپلیکیشن اندروید','framework_localize'),
			"desc" => "لینک دانلود اپلیکیشن اندروید را وارد کنید",
			"id" => $shortname."_link_android",
			"std" => "",
			"type" => "text");			
			




$options[] = array( "name" => __('footer','framework_localize'),
			"type" => "heading");




$options[] = array( "name" => __('متن کپی رایت','framework_localize'),
			"desc" => "در این قسمت میتواندی متن کپی رایت را وارد کنید",
			"id" => $shortname."_copy_right",
			"std" => "",
			"type" => "text");



$options[] = array( "name" => __('لینک صفحه فیس بوک','framework_localize'),
			"desc" => "در این قسمت لینک صفحه فیس بوکتان را وارد کنید",
			"id" => $shortname."_facebook",
			"std" => "",
			"type" => "text");
			
			
$options[] = array( "name" => __('لینک صفحه توییتر','framework_localize'),
			"desc" => "در این قسمت لینک صفحه توییتر را وارد کنید",
			"id" => $shortname."_twitter",
			"std" => "",
			"type" => "text");

$options[] = array( "name" => __('لینک صفحه لینکدین','framework_localize'),
			"desc" => "در این قسمت لینک صفحه لینکدین را وارد کنید",
			"id" => $shortname."_linkdin",
			"std" => "",
			"type" => "text");

$options[] = array( "name" => __('لینک صفحه اینستاگرام','framework_localize'),
			"desc" => "در این قسمت لینک صفحه اینستاگرام را وارد کنید",
			"id" => $shortname."_instagram",
			"std" => "",
			"type" => "text");
			
$options[] = array( "name" => __('لینک صفحه واتس آپ','framework_localize'),
			"desc" => "در این قسمت لینک صفحه واتس اپ را وارد کنید",
			"id" => $shortname."_whatsapp",
			"std" => "",
			"type" => "text");


$options[] = array( "name" => __('شماره تلفن','framework_localize'),
			"desc" => "شماره تلفن را اینجا وارد کنید",
			"id" => $shortname."_tell",
			"std" => "",
			"type" => "text");	
			
			
$options[] = array( "name" => __('آدرس ایمیل','framework_localize'),
			"desc" => "آدرس ایمیل را برای نمابش در بالای سایت وارد کنید",
			"id" => $shortname."_email",
			"std" => "",
			"type" => "text");





update_option('of_template',$options); 					  
update_option('of_shortname',$shortname);

}
}
?>