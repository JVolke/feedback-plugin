<?php

namespace Feedback\DataProviders;

use Plenty\Plugin\ConfigRepository;
use Plenty\Plugin\Templates\Twig;

class FeedbackContainer
{
    public function call(Twig $twig):string
    {
        $configRepository = pluginApp(ConfigRepository::class);


        return $twig->render('Feedback::DataProvider.FeedbackContainer', [
            "allowGuest" => $configRepository->get("Feedback.allowGuestFeedbacks") == "true";
        ]);
    }
}
