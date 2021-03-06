<?php
/**
 * Created by PhpStorm.
 * User: Constantin Purcaru
 * Date: 03/09/2017
 * Time: 13:17
 */

namespace Feedback\DataProviders;


use Plenty\Plugin\Templates\Twig;

class Styles
{
    /**
     * @param Twig $twig
     * @return string
     */
    public function call(Twig $twig)
    {
        return $twig->render('Feedback::DataProvider.Styles');
    }
}