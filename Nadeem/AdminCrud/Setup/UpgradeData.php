<?php

namespace Nadeem\AdminCrud\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * Upgrade Data script
 */
class UpgradeData implements UpgradeDataInterface
{
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        if ($context->getVersion()
            && version_compare($context->getVersion(), '1.0.2') < 0
        ) {
            $table = $setup->getTable('nadeem_admincrud');
            $setup->getConnection()
                ->insertForce($table, ['message' => 'Crud Entry Seven', 'comment' => 'Test Comment']);

            $setup->getConnection()
                ->update($table, ['comment' => 'Test Comment'], 'entity_id IN (1,2,3,4,5,6)');
        }
        $setup->endSetup();
    }
}
