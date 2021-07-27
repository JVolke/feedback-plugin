<?php

namespace Feedback\DataProviders;

use Feedback\Services\FeedbackService;
use Plenty\Plugin\Templates\Twig;


class FeedbackJsonDataContainer
{
    public function call(Twig $twig, $args):string
    {
        // need a container with the item data as second parameter
        $itemId = $args[0]["documents"][0]["data"]["item"]["id"];
        $feedbackService = pluginApp(FeedbackService::class);
        $result = $feedbackService->paginate($itemId, 1, 50);

        return $twig->render('Feedback::DataProvider.FeedbackJsonDataContainer', [ "feedbackList" => $result, "itemId" => $itemId]);
    }
}
