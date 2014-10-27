<?php

namespace Samples;

class Module extends \ZRay\ZRayModule {
	
	public function config() {
	    return array(
	        // Prevent those default panels from being displayed
	        'defaultPanels' => array(
	            'multiplyGeneralTree' => false,
	            'stats'               => false
	        ),
	        // configure all custom panels
	        'panels' => array(
	            'customTable' => array(
	                'display'       => true,
	                'logo'          => 'logo.png',
	                'menuTitle' 	=> 'Custom Table',
	                'panelTitle'	=> 'Custom Table',
	                'searchId' 		=> 'samples-custom-table-search',
	                'pagerId'		=> 'samples-custom-table-pager',
	            ),
	            'generalTable' => array(
	                'display'       => true,
	                'logo'          => 'logo.png',
	                'menuTitle' 	=> 'General Table',
	                'panelTitle'	=> 'General Table',
	            ),
	            'customResources' => array(
	                'display'       => true,
	                'logo'          => 'logo.png',
	                'menuTitle' 	=> 'Custom Resources',
	                'panelTitle'	=> 'Custom Resources',
	                'resources'     => array(
	                   'chart' => 'chart.js'
	                )
	            ),
	         )
	    );
	}	
}