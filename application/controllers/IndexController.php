<?php

class IndexController extends Zend_Controller_Action
{

	function sortererer($a, $b)
	{
		return $a->value > $b->value ? 1 : -1;
	}

    public function indexAction()
    {
        $this->view->headLink()->appendStylesheet('/css/whatever.css');
    }
    
    public function jonIsGayAction()
    {
    	$i = 0;
    	
    	home:
    	$i++;
    	echo "<br />I is: $i<br />";
    	$this->view->headLink()->appendStylesheet('/css/whatever.css');
    	
    	if($i <= 5)
    	{
    		goto home;
    	}
    	echo "OMG!!!";
    	
    	$test = function($stg) {
    		echo "Woot!{$stg}";
    	};
    	$test("what");
    	
    	$thething = array(
    		new stdClass(),
    		new stdClass(),
    	);
    	
    	$thething[0]->value = 2;
    	$thething[1]->value = 1;
    	
    	/*usort($thething, function($a, $b) {
    		return $a->value > $b->value ? 1 : -1;
    	});*/
    	
    	usort($thething, array('IndexController', 'sortererer'));
    	
    	echo "<pre>";
    	var_dump($thething);
    }
}

