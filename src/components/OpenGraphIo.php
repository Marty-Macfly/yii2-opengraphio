<?php

namespace macfly\opengraphio\components;

use Yii;
use yii\helpers\ArrayHelper;
use yii\httpclient\Client;

class OpenGraphIo extends Client
{
    public $baseUrl = 'https://opengraph.io/api/1.1/site';
    public $appId   = null;

    public function getHybridGraph($site)
    {
        $rs = $this->get(sprintf("%s?app_id=%s", urlencode($site), $this->appId))->send();

        if (!$rs->isOk)
        {
            Yii::error(sprintf("Unable to get OpenGraph for %s data : %d -> %s", $site, $rs->statusCode, $rs->content));
        }

        return ArrayHelper::getValue($rs->data, 'hybridGraph');
    }
}
