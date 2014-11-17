<?php

namespace Samples;

class Module extends \ZRay\ZRayModule {
	
	public function config() {
	    return array(
	        'extension' => array(
				'name' => 'samples',
			),
	        // Prevent those default panels from being displayed
	        'defaultPanels' => array(
	            'multiplyGeneralTree' => false,
	            'stats'               => false,
	            'products'            => false,
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
	            'summaryTable' => array(
	                'display'       => true,
	                'logo'          => 'logo.png',
	                'menuTitle' 	=> 'Summary Table',
	                'panelTitle'	=> 'Summary Table',
	                'searchId' 		=> 'samples-summary-table-search',
	                'pagerId'		=> 'samples-summary-table-pager',
	            ),
	            'customTree' => array(
	                'display'       => true,
	                'logo'          => 'logo.png',
	                'menuTitle' 	=> 'Custom Tree',
	                'panelTitle'	=> 'Custom Tree Table',
	            ),
	            'generalTree' => array(
	                'display'       => true,
	                'logo'          => 'logo.png',
	                'menuTitle' 	=> 'General Tree',
	                'panelTitle'	=> 'General Tree Table',
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