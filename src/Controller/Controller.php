<?php

namespace Controller;

class Controller {
    private $variables = [];

    public function __construct() {
        global $router;
        $this->set('router', $router);
    }

    public function set($_name, $_content) {
        $this->variables[$_name] = $_content;
    }

    public function view($_name) {
        ob_start ();
            foreach ($this->variables as $index => $variable) {
                $$index = $variable;
            }
            include_once ("src/View/".$_name.".php");
            $buffer = ob_get_contents();
        ob_clean();
        ob_flush();
        foreach ($this->variables as $index => $variable) {
            if(!is_array($variable) && !is_object($variable)) {
                $buffer = str_replace("{" . $index . "}", $variable, $buffer);
            }
        }
        preg_match("/\{(([A-Za-z]+)|([A-Za-z]+)\.([A-Za-z]+)|([A-Za-z]+)\.([A-Za-z]+)\.([A-Za-z]+))\}/", $buffer, $matches);
        var_dump($matches);
        /*foreach ($matches as $test => $match) {
            $_match_{$test} = $match;
            echo "$_match_{$test}";
        }
        echo $$matches[4];
        $buffer = str_replace($matches[0], ${$_match_3}[$_match_4], $buffer);*/
        echo $buffer;
    }
}