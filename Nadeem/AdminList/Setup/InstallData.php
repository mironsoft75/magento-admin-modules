<?php

namespace Nadeem\AdminList\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallData implements InstallDataInterface
{

    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
          /**
           * Insert message data
           */
          $data = [
              ['message' => 'List Entry One'],
              ['message' => 'List Entry Two'],
              ['message' => 'List Entry Three'],
              ['message' => 'List Entry Four'],
              ['message' => 'List Entry Five'],
              ['message' => 'List Entry Six']
          ];
          foreach ($data as $bind) {
              $setup->getConnection()
                ->insertForce($setup->getTable('nadeem_adminlist'), $bind);
          }
    }
}
