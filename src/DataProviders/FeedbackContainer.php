<?php

namespace Feedback\DataProviders;

use Plenty\Plugin\Templates\Twig;

class FeedbackContainer
{
    public function call(Twig $twig):string
    {

        return $twig->render('Feedback::DataProvider.FeedbackContainer');
    }
}
