<?php

namespace Controller;

class Controller {
    private $_variables = [];
    protected $_router;

    public function __construct() {
        global $router;
        $this->_router = $router;
        $this->_set('router', $router);
    }

    public function _set($_name, $_content) {
        $this->_variables[$_name] = $_content;
    }

    public function _view($_name) {
        ob_start ();
            foreach ($this->_variables as $index => $variable) {
                $$index = $variable;
            }
            include_once ("src/View/".$_name.".php");
            $buffer = ob_get_contents();
        ob_clean();
        ob_flush();
        foreach ($this->_variables as $index => $variable) {
            if(!is_array($variable) && !is_object($variable)) {
                $buffer = str_replace("{" . $index . "}", $variable, $buffer);
            }
        }
        preg_match("/\{(([A-Za-z]+)|([A-Za-z]+)\.([A-Za-z]+)|([A-Za-z]+)\.([A-Za-z]+)\.([A-Za-z]+))\}/", $buffer, $matches);
//        var_dump($matches);
        /*foreach ($matches as $test => $match) {
            $_match_{$test} = $match;
            echo "$_match_{$test}";
        }
        echo $$matches[4];
        $buffer = str_replace($matches[0], ${$_match_3}[$_match_4], $buffer);*/
        echo $buffer;
    }
}