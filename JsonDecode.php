<?php

namespace AppBundle\Twig\Extension;

/**
 * Class JsonDecode
 * @package AppBundle\Twig\Extension
 * @author Kegan VanSickle <keganv@keganv.com>
 */
class JsonDecode extends \Twig_Extension
{
    public function getName()
    {
        return 'twig.json_decode';
    }

    public function getFilters()
    {
        return array(
            'json_decode'   => new \Twig_SimpleFilter($this->getName(), 'jsonDecode')
        );
    }

    public function jsonDecode($string)
    {
        return json_decode($string);
    }
}
