<?php

require_once "../../vendor/autoload.php";

use App\classes\Slider;

$slider = new Slider();

if ( isset( $_POST['action'] ) && $_POST['action'] === 'save-slider' ) {
    $title      = $_POST['title'];
    $sub_title  = $_POST['sub_title'];
    $start_date = $_POST['start_date'];
    $end_date   = $_POST['end_date'];
    $url_1      = $_POST['url_1'];
    $status     = $_POST['status'];

    $image   = $_FILES['image']['name'];
    $image   = explode( '.', $image );
    $imageEx = end( $image );
    $image   = uniqid() . rand( 22222, 99999 ) . '.' . $imageEx;

    var_dump( $slider->saveSlider( $title, $sub_title, $start_date, $end_date, $url_1, $status, $image ) );

}
