<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once 'config.php';
$function_name = '';
if (isset($_GET['fc']))
{
    $function_name = $_GET['fc'];
}
else
{
    if (isset($_POST['fc']))
    {
        $function_name = $_POST['fc'];
    }
}
if ($function_name == 'save_accommodation')
{

    $lag = $_POST['lag'];
    $accommodation_district_id = $_POST['accommodation_district_id'];
    $accommodation_province_id = $_POST['accommodation_province_id'];
    $accommodation_status = $_POST['accommodation_status'];
    $accommodation_geo_x = $_POST['accommodation_geo_x'];
    $accommodation_geo_y = $_POST['accommodation_geo_y'];
    $accommodation_info_tel = $_POST['accommodation_info_tel'];
    $accommodation_info_website = $_POST['accommodation_info_website'];
    $accommodation_info_email = $_POST['accommodation_info_email'];
    $accommodation_social_facebook = $_POST['accommodation_social_facebook'];
    $accommodation_social_instragram = $_POST['accommodation_social_instragram'];
    $accommodation_social_youtube = $_POST['accommodation_social_youtube'];
    $accommodation_book_via_hotels = $_POST['accommodation_book_via_hotels'];
    $accommodation_book_via_agoda = $_POST['accommodation_book_via_agoda'];
    $accommodation_book_via_booking = $_POST['accommodation_book_via_booking'];
    $accommodation_start_price = $_POST['accommodation_start_price'];
    $accommodation_top_price = $_POST['accommodation_top_price'];
    $accommodation_cat = $_POST['accommodation_cat'];
    $accommodation_name = $_POST['accommodation_name'];
    $accommodation_address = $_POST['accommodation_address'];
    $accommodation_details_80 = $_POST['accommodation_details_80'];
    $accommodation_details_200 = $_POST['accommodation_details_200'];
    $accommodation_details_long = $_POST['accommodation_details_long'];
    $accommodation_review_ref_short = $_POST['accommodation_review_ref_short'];
    $accommodation_review_ref_long = $_POST['accommodation_review_ref_long'];
    $accommodation_around_dec = $_POST['accommodation_around_dec'];
    $accommodation_distance_airport = $_POST['accommodation_distance_airport'];
    $accommodation_distance_town = $_POST['accommodation_distance_town'];

    if ($lag == 'th')
    {
        $connect = $a;
    }
    else
    {
        $connect = $b;
    }
    include 'connect.php';

    $query = "INSERT INTO `accommodation` (`accommodation_district_id`, `accommodation_province_id`, `accommodation_status`, `accommodation_geo_x`, `accommodation_geo_y`, `accommodation_info_tel`, `accommodation_info_website`, `accommodation_info_email`, `accommodation_social_facebook`, `accommodation_social_instragram`, `accommodation_social_youtube`, `accommodation_book_via_hotels`, `accommodation_book_via_agoda`, `accommodation_book_via_booking`, `accommodation_start_price`, `accommodation_top_price`, `accommodation_cat`, `accommodation_name`, `accommodation_address`, `accommodation_details_80`, `accommodation_details_200`, `accommodation_details_long`, `accommodation_review_ref_short`, `accommodation_review_ref_long`, `accommodation_around_dec`, `accommodation_distance_airport`, `accommodation_distance_town`) VALUES "
            . "('$accommodation_district_id', '$accommodation_province_id', '$accommodation_status', '$accommodation_geo_x', '$accommodation_geo_y', '$accommodation_info_tel', '$accommodation_info_website', '$accommodation_info_email', '$accommodation_social_facebook', '$accommodation_social_instragram', '$accommodation_social_youtube', '$accommodation_book_via_hotels', '$accommodation_book_via_agoda', '$accommodation_book_via_booking', '$accommodation_start_price', '$accommodation_top_price', '$accommodation_cat', '$accommodation_name', '$accommodation_address', '$accommodation_details_80', '$accommodation_details_200', '$accommodation_details_long', '$accommodation_review_ref_short', '$accommodation_review_ref_long', '$accommodation_around_dec', '$accommodation_distance_airport', '$accommodation_distance_town');";

    $result = mysqli_query($connect, $query);
    include 'close.php';
}

if ($function_name == 'save_destination')
{
    $lag = $_POST['lag'];
    $destination_district_id = $_POST['destination_district_id'];
    $destination_province_id = $_POST['destination_province_id'];
    $destination_status = $_POST['destination_status'];
    $destination_geo_x = $_POST['destination_geo_x'];
    $destination_geo_y = $_POST['destination_geo_y'];
    $destination_info_tel = $_POST['destination_info_tel'];
    $destination_info_fax = $_POST['destination_info_fax'];
    $destination_info_email = $_POST['destination_info_email'];
    $destination_info_website = $_POST['destination_info_website'];
    $destination_social_facebook = $_POST['destination_social_facebook'];
    $destination_social_instragram = $_POST['destination_social_instragram'];
    $destination_social_youtube = $_POST['destination_social_youtube'];
    $destination_cat = $_POST['destination_cat'];
    $destination_name = $_POST['destination_name'];
    $destination_address = $_POST['destination_address'];
    $destination_details_80 = $_POST['destination_details_80'];
    $destination_details_200 = $_POST['destination_details_200'];
    $destination_details_long = $_POST['destination_details_long'];
    $destination_open_hour = $_POST['destination_open_hour'];
    $destination_fee = $_POST['destination_fee'];
    $destination_visit_season = $_POST['destination_visit_season'];
    $destination_content_ref_short = $_POST['destination_content_ref_short'];
    $destination_content_ref_long = $_POST['destination_content_ref_long'];


    if ($lag == 'th')
    {
        $connect = $a;
    }
    else
    {
        $connect = $b;
    }
    include 'connect.php';
    $query = "INSERT INTO `destination` (`destination_district_id`, `destination_province_id`, `destination_status`, `destination_geo_x`, `destination_geo_y`, `destination_info_tel`, `destination_info_fax`, `destination_info_email`, `destination_info_website`, `destination_social_facebook`, `destination_social_instragram`, `destination_social_youtube`, `destination_cat`, `destination_name`, `destination_address`, `destination_details_80`, `destination_details_200`, `destination_details_long`, `destination_open_hour`, `destination_fee`, `destination_visit_season`, `destination_content_ref_short`, `destination_content_ref_long`) VALUES "
            . "('$destination_district_id', '$destination_province_id', '$destination_status', '$destination_geo_x', '$destination_geo_y', '$destination_info_tel', '$destination_info_fax', '$destination_info_email', '$destination_info_website', '$destination_social_facebook', '$destination_social_instragram', '$destination_social_youtube', '$destination_cat', '$destination_name', '$destination_address', '$destination_details_80', '$destination_details_200', '$destination_details_long', '$destination_open_hour', '$destination_fee', '$destination_visit_season', '$destination_content_ref_short', '$destination_content_ref_long');";

    $result = mysqli_query($connect, $query);
    include 'close.php';
}


if ($function_name == 'save_event')
{
    $lag = $_POST['lag'];
    $event_venue_district_id = $_POST['event_venue_district_id'];
    $event_venue_province_id = $_POST['event_venue_province_id'];
    $event_name = $_POST['event_name'];
    $event_detail = $_POST['event_detail'];
    $event_info_link_short = $_POST['event_info_link_short'];
    $event_info_link_long = $_POST['event_info_link_long'];
    $event_venue = $_POST['event_venue'];
    $event_geo_x = $_POST['event_geo_x'];
    $event_geo_y = $_POST['event_geo_y'];
    $event_start_date = $_POST['event_start_date'];
    $event_end_date = $_POST['event_end_date'];

    if ($lag == 'th')
    {
        $connect = $a;
    }
    else
    {
        $connect = $b;
    }
    include 'connect.php';
    $query = "INSERT INTO `event` ( `event_venue_district_id`, `event_venue_province_id`, `event_name`, `event_detail`, `event_info_link_short`, `event_info_link_long`, `event_venue`, `event_geo_x`, `event_geo_y`, `event_start_date`, `event_end_date`) VALUES "
            . "('$event_venue_district_id', '$event_venue_province_id', '$event_name', '$event_detail', '$event_info_link_short', '$event_info_link_long', '$event_venue', '$event_geo_x', '$event_geo_y', '$event_start_date', '$event_end_date');";

    $result = mysqli_query($connect, $query);
    include 'close.php';
}

if ($function_name == 'save_restaurant')
{
    $lag = $_POST['lag'];
    $restaurant_district_id = $_POST['restaurant_district_id'];
    $restaurant_province_id = $_POST['restaurant_province_id'];
    $restaurant_status = $_POST['restaurant_status'];
    $restaurant_geo_x = $_POST['restaurant_geo_x'];
    $restaurant_geo_y = $_POST['restaurant_geo_y'];
    $restaurant_info_tel = $_POST['restaurant_info_tel'];
    $restaurant_info_website = $_POST['restaurant_info_website'];
    $restaurant_info_email = $_POST['restaurant_info_email'];
    $restaurant_social_facebook = $_POST['restaurant_social_facebook'];
    $restaurant_social_instragram = $_POST['restaurant_social_instragram'];
    $restaurant_social_youtube = $_POST['restaurant_social_youtube'];
    $restaurant_cat = $_POST['restaurant_cat'];
    $restaurant_name = $_POST['restaurant_name'];
    $restaurant_address = $_POST['restaurant_address'];
    $restaurant_details_80 = $_POST['restaurant_details_80'];
    $restaurant_details_200 = $_POST['restaurant_details_200'];
    $restaurant_details_long = $_POST['restaurant_details_long'];
    $restaurant_open_hour = $_POST['restaurant_open_hour'];
    $restaurant_review_ref_short = $_POST['restaurant_review_ref_short'];
    $restaurant_review_ref_long = $_POST['restaurant_review_ref_long'];

    if ($lag == 'th')
    {
        $connect = $a;
    }
    else
    {
        $connect = $b;
    }
    include 'connect.php'; 
    $query = "INSERT INTO `restaurant` (`restaurant_district_id`, `restaurant_province_id`, `restaurant_status`, `restaurant_geo_x`, `restaurant_geo_y`, `restaurant_info_tel`, `restaurant_info_website`, `restaurant_info_email`, `restaurant_social_facebook`, `restaurant_social_instragram`, `restaurant_social_youtube`, `restaurant_cat`, `restaurant_name`, `restaurant_address`, `restaurant_details_80`, `restaurant_details_200`, `restaurant_details_long`, `restaurant_open_hour`, `restaurant_review_ref_short`, `restaurant_review_ref_long`) VALUES "
            . "('$restaurant_district_id', '$restaurant_province_id', '$restaurant_status', '$restaurant_geo_x', '$restaurant_geo_y', '$restaurant_info_tel', '$restaurant_info_website', '$restaurant_info_email', '$restaurant_social_facebook', '$restaurant_social_instragram', '$restaurant_social_youtube', '$restaurant_cat', '$restaurant_name', '$restaurant_address', '$restaurant_details_80', '$restaurant_details_200', '$restaurant_details_long', '$restaurant_open_hour', '$restaurant_review_ref_short', '$restaurant_review_ref_long');";

    $result = mysqli_query($connect, $query);
    include 'close.php';
}

if ($function_name == 'save_restaurant_menu_pic')
{
    $lag = $_POST['lag'];
    $restaurant_manu_pic_id = $_POST['restaurant_manu_pic_id'];
    $restaurant_id = $_POST['restaurant_id'];
    $restaurant_manu_name = $_POST['restaurant_manu_name'];
    $restaurant_manu_pic_status = $_POST['restaurant_manu_pic_status'];
    $restaurant_file_saved_name = $_POST['restaurant_file_saved_name'];
    $restaurant_pic_alt = $_POST['restaurant_pic_alt'];
    $restaurant_pic_detail = $_POST['restaurant_pic_detail'];

    if ($lag == 'th')
    {
        $connect = $a;
    }
    else
    {
        $connect = $b;
    }
    include 'connect.php';
    $query = "INSERT INTO `restaurant_menu_pic` (`restaurant_manu_pic_id`, `restaurant_id`, `restaurant_manu_name`, `restaurant_manu_pic_status`, `restaurant_file_saved_name`, `restaurant_pic_alt`, `restaurant_pic_detail`) VALUES "
            . "('$restaurant_manu_pic_id', '$restaurant_id', '$restaurant_manu_name', '$restaurant_manu_pic_status', '$restaurant_file_saved_name', '$restaurant_pic_alt', '$restaurant_pic_detail');";
    $result = mysqli_query($connect, $query);
    include 'close.php';
}


if ($function_name == 'save_restaurant_type_tag')
{
    $lag = $_POST['lag'];
    $restaurant_type_tag = $_POST['restaurant_type_tag'];

    if ($lag == 'th')
    {
        $connect = $a;
    }
    else
    {
        $connect = $b;
    }
    include 'connect.php';
    $query = "INSERT INTO `restaurant_type_tag_list` (`restaurant_type_tag`) VALUES "
            . "('$restaurant_type_tag');";
    $result = mysqli_query($connect, $query);
    include 'close.php';
}

if ($function_name == 'save_accommodation_room_tag')
{
    $lag = $_POST['lag'];
    $accommodation_room_tag = $_POST['accommodation_room_tag'];

    if ($lag == 'th')
    {
        $connect = $a;
    }
    else
    {
        $connect = $b;
    }
    include 'connect.php';
    $query = "INSERT INTO `accommodation_room_tag_list` (`accommodation_room_tag`) VALUES "
            . "('$accommodation_room_tag');";
    $result = mysqli_query($connect, $query);
    include 'close.php';
}

if ($function_name == 'save_accommodation_type_tag')
{
    $lag = $_POST['lag'];
    $accommodation_type_tag = $_POST['accommodation_type_tag'];

    if ($lag == 'th')
    {
        $connect = $a;
    }
    else
    {
        $connect = $b;
    }
    include 'connect.php';
    $query = "INSERT INTO `accommodation_type_tag_list` (`accommodation_type_tag`) VALUES "
            . "('$accommodation_type_tag');";
    $result = mysqli_query($connect, $query);
    include 'close.php';
}

if ($function_name == 'save_destination_activity_tag')
{
    $lag = $_POST['lag'];
    $destination_activity_tag = $_POST['destination_activity_tag'];

    if ($lag == 'th')
    {
        $connect = $a;
    }
    else
    {
        $connect = $b;
    }
    include 'connect.php';
    $query = "INSERT INTO `destination_activity_tag_list` (`destination_activity_tag`) VALUES "
            . "('$destination_activity_tag');";
    $result = mysqli_query($connect, $query);
    include 'close.php';
}

if ($function_name == 'save_destination_type_tag')
{
    $lag = $_POST['lag'];
    $destination_type_tag = $_POST['destination_type_tag'];

    if ($lag == 'th')
    {
        $connect = $a;
    }
    else
    {
        $connect = $b;
    }
    include 'connect.php';
    $query = "INSERT INTO `destination_type_tag_list` (`destination_type_tag`) VALUES "
            . "('$destination_type_tag');";
    $result = mysqli_query($connect, $query);
    include 'close.php';
}

if ($function_name == 'get_restaurant')
{
    $lag = $_POST['lag'];

    if ($lag == 'th')
    {
        $connect = $a;
    }
    else
    {
        $connect = $b;
    }
    include 'connect.php';
    $query = "SELECT restaurant_id, restaurant_district_id, restaurant_province_id, restaurant_status, restaurant_geo_x, restaurant_geo_y, restaurant_info_tel, restaurant_info_website, restaurant_info_email, restaurant_social_facebook, restaurant_social_instragram, restaurant_social_youtube, restaurant_cat, restaurant_name, restaurant_address, restaurant_details_80, restaurant_details_200, restaurant_details_long, restaurant_open_hour, restaurant_review_ref_short, restaurant_review_ref_long FROM restaurant";
    include 'json.php';
}


if ($function_name == 'get_destination')
{
    $lag = $_POST['lag'];

    if ($lag == 'th')
    {
        $connect = $a;
    }
    else
    {
        $connect = $b;
    }
    include 'connect.php';
    $query = "SELECT destination_id, destination_district_id, destination_province_id,destination_status, destination_geo_x,destination_geo_y, destination_info_tel,destination_info_fax, destination_info_email,destination_info_website	,destination_social_facebook, destination_social_instragram, destination_social_youtube, destination_cat, destination_name,destination_address, destination_details_80,destination_details_200, destination_details_long,destination_open_hour, destination_fee,destination_visit_season, destination_content_ref_short, destination_content_ref_long FROM destination";
    include 'json.php';
}

if ($function_name == 'get_accommodation')
{
    $lag = $_POST['lag'];

    if ($lag == 'th')
    {
        $connect = $a;
    }
    else
    {
        $connect = $b;
    }
    include 'connect.php';
    $query = "SELECT * FROM accommodation";
    include 'json.php';
}


if ($function_name == 'get_destination_type_tag')
{
    $lag = $_POST['lag'];

    if ($lag == 'th')
    {
        $connect = $a;
    }
    else
    {
        $connect = $b;
    }
    include 'connect.php';
    $query = "SELECT * FROM destination_type_tag_list";
    include 'json.php';
}

if ($function_name == 'get_destination_activity_tag')
{
    $lag = $_POST['lag'];

    if ($lag == 'th')
    {
        $connect = $a;
    }
    else
    {
        $connect = $b;
    }
    include 'connect.php';
    $query = "SELECT * FROM destination_activity_tag_list";
    include 'json.php';
}

if ($function_name == 'get_restaurant_type_tag')
{
    $lag = $_POST['lag'];

    if ($lag == 'th')
    {
        $connect = $a;
    }
    else
    {
        $connect = $b;
    }
    include 'connect.php';
    $query = "SELECT * FROM restaurant_type_tag_list";
    include 'json.php';
}

if ($function_name == 'get_accommodation_type_tag')
{
    $lag = $_POST['lag'];

    if ($lag == 'th')
    {
        $connect = $a;
    }
    else
    {
        $connect = $b;
    }
    include 'connect.php';
    $query = "SELECT * FROM accommodation_type_tag_list";
    include 'json.php';
}

if ($function_name == 'get_accommodation_room_tag')
{
    $lag = $_POST['lag'];

    if ($lag == 'th')
    {
        $connect = $a;
    }
    else
    {
        $connect = $b;
    }
    include 'connect.php';
    $query = "SELECT * FROM accommodation_room_tag_list";
    include 'json.php';
}

if ($function_name == 'get_event')
{
    $lag = $_POST['lag'];

    if ($lag == 'th')
    {
        $connect = $a;
    }
    else
    {
        $connect = $b;
    }
    include 'connect.php';
    $query = "SELECT * FROM event";
    include 'json.php';
}
