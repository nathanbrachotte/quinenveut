<?php

abstract class Test extends \atoum\test {

    public function __construct ( \atoum\score   $score   = null,
                                  \atoum\locale  $locale  = null,
                                  \atoum\adapter $adapter = null ) {

        $this->setTestNamespace('\\Test');

        return parent::__construct($score, $locale, $adapter);
    }
}
