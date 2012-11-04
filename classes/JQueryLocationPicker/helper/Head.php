<?php

class JQueryLocationPicker_HeadHelper extends App_ViewHelper_Abstract
{
    public function head()
    {
        $this->headScript()
            ->alias( 'jsapi' )->append( 'http://www.google.com/jsapi?key=ABQIAAAAfRkItx0OKdjKazKVbi84fBTPMPNDeN9eZctJ0tzs1Xee_ic-7hSOP5b2KpPmoO8KqEfIaOTgQutDJQ' )
            ->alias( 'maps_api_js' )->append( 'http://maps.google.com/maps/api/js?sensor=false' )
            ->append( $this->staticpath() . 'jquery-location-picker/js/jquery.locationpicker.js', array( 'jquery', 'jsapi', 'maps_api_js' ) );
    }
}