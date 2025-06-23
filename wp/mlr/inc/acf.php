<?php

if( function_exists('acf_add_options_page') ) {

acf_add_options_page();

acf_add_options_sub_page('Theme Settings');
acf_add_options_sub_page('Default Values');

}