<?php
/**
 *  Heartland payment method model
 *
 * @category    HPS
 * @package     HPS_Heartland
 * @author      Heartland Developer Portal <EntApp_DevPortal@e-hps.com>
 * @copyright   Heartland (http://heartland.us)
 * @license     https://github.com/hps/heartland-magento2-extension/blob/master/LICENSE.md
 */

namespace HPS\Heartland\Helper;

use \HPS\Heartland\Helper\ObjectManager as HPS_OM;

/**
 * Class Db
 *
 * @package HPS\Heartland\Helper
 */
class Db
{
    /**
     * Retrieve connection to resource specified by $resourceName
     *
     * @return \Magento\Framework\DB\Adapter\AdapterInterface
     * @throws \DomainException
     * @codeCoverageIgnore
     */
    public static function db_connect()
    {
        return HPS_OM::getObjectManager()->get('\Magento\Framework\App\ResourceConnection')->getConnection();
    }
}
