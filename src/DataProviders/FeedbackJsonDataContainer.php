<?php

namespace Feedback\DataProviders;

use Feedback\Services\FeedbackService;
use Plenty\Plugin\Templates\Twig;


class FeedbackJsonDataContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('Feedback::DataProvider.FeedbackJsonDataContainer');
    }
}
