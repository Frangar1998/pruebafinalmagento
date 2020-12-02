<?php

namespace Hiberus\Garcia\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

/**
 * Class Config
 * @package Hiberus\Garcia\Helper
 */
class Config extends AbstractHelper
{
    const   XML_PATH_ENABLE =   'hiberus_garcia/general_config/enable';

    /**
     * @return mixed
     */
    public function isEnabled()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_ENABLE
        );
    }
}
