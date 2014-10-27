<?php

namespace ZRaySamplesDemo;

class Samples {
	
    public function runEnter($context, &$storage) {
        $storage['defaultTree'][] = $context;
    }
    
    public function multExit($context, & $storage) {
        $storage['defaultTable'][] = array(
            'Number1' => $context['functionArgs'][0],
            'Number2' => $context['functionArgs'][1],
            'Result'  => $context['returnValue']
        );
        
        $storage['multiplyGeneralTree'][] = array(
            'col1' => $context['functionArgs'][0], 'col2' => 'val2', 'params' => array(
                array('col1' => 'val1.1', 'col2' => 'val2.1', 'params' => 'aaa'),
                array('col1' => 'val1.2', 'col2' => 'val2.2', 'params' => 'bbb')
            )
        );
    }
}


$zraySamples = new Samples();
$zre = new \ZRayExtension('samples');

// enable the extension when this method called
$zre->setEnabledAfter('Samples::run');

// bind to run method
$zre->traceFunction('Samples::run', array($zraySamples, 'runEnter'), function() {});

// bind to mult method
$zre->traceFunction('Samples::mult', function() {}, array($zraySamples, 'multExit'));

// bind to stats method
$zre->traceFunction('Samples::stats', function($context, & $storage) {
    $storage['stats'][] = array('name' => $context['functionArgs'][0], 'count' => $context['functionArgs'][1]); 
}, function() {});

// set the logo for default panels
$zre->setMetadata(array(
	'logo' => __DIR__ . DIRECTORY_SEPARATOR . 'logo.png',
));