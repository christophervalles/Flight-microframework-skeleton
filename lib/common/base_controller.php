<?php
/**
* Base controller of the app. All the controllers extends from this one
* 
* @package common
*/
class BaseController extends Flight
{
    /**
     * Constructor of the main controller
     * 
     * @return void
     */
    public function __construct(){}
    
    /**
     * Render method to simplify the rendering of the framework
     *
     * @param string $layout 
     * @param string $key 
     * @return void
     */
    public static function render($layout = 'layouts/default', $key = 'layoutContent'){
        $trace = debug_backtrace(false);
        $callingClass = strtolower($trace[1]['class']);
        $callingMethod = strtolower($trace[1]['function']);
        
        $path = $callingClass . DS . $callingMethod;
        
        Flight::render($path, array(), $layout, $key);
    }
}
