<?php
/**
 * Blackbird InstallSchemaGenerator Module
 *
 * NOTICE OF LICENSE
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to contact@bird.eu so we can send you a copy immediately.
 *
 * @category        Blackbird
 * @package         Blackbird_InstallSchemaGenerator
 * @copyright       Copyright (c) 2018 Blackbird (https://black.bird.eu)
 * @author          Blackbird Team
 * @license         MIT LICENSE
 */
namespace Blackbird\InstallSchemaGenerator\Block\Adminhtml;

use Magento\Backend\Block\Widget\Grid\Container;

class Retriever extends Container
{
    /**
     * {@inheritdoc}
     */
    protected function _construct()
    {
        $this->_blockGroup = 'Blackbird_InstallSchemaGenerator';
        $this->_controller = 'adminhtml_retriever';
        parent::_construct();
    }
}
