<?php

namespace Nadeem\AdminCrud\Setup;

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
              ['message' => 'Crud Entry One'],
              ['message' => 'Crud Entry Two'],
              ['message' => 'Crud Entry Three'],
              ['message' => 'Crud Entry Four'],
              ['message' => 'Crud Entry Five'],
              ['message' => 'Crud Entry Six']
          ];
          foreach ($data as $bind) {
              $setup->getConnection()
                ->insertForce($setup->getTable('nadeem_admincrud'), $bind);
          }
    }
}
