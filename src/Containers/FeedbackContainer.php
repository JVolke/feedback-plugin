<?php

namespace Feedback\Containers;

use Plenty\Plugin\Templates\Twig;

class FeedbackContainer
{
    public function call(Twig $twig):string
    {

        return $twig->render('Feedback::Containers.FeedbackContainer');
    }
}
