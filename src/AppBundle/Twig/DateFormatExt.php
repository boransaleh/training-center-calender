<?php


namespace AppBundle\Twig;

/**
 * Created by PhpStorm.
 * User: boran
 * Date: 15/09/2017
 * Time: 08:39
 */
class DateFormatExt extends \Twig_Extension
{
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('deutschDate',array($this,'getDeutschDate'))
        ];
    }

    public function getDeutschDate($date){



       setlocale(LC_ALL, 'de_DE@euro', 'de_DE', 'de', 'ge');

        return  strftime("%a  %d %B %Y", strtotime($date));
    }



}