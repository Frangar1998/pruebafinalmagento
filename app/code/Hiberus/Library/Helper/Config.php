<?php

namespace Hiberus\Library\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

/**
 * Class Config
 * @package Hiberus\Library\Helper
 */
class Config extends AbstractHelper
{
    const   XML_PATH_ENABLE =   'hiberus_library/general_config/enable';
    const   XML_PATH_MULTIPLIER =   'hiberus_library/general_config/multiplier';

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
