<?php
/**
 * @category   Table
 * @package    Table_Table
 * @author     hoanglinh.08122000@gmail.com
 * @copyright  This file was generated by using Module Creator(http://code.vky.co.in/magento-2-module-creator/) provided by VKY <viky.031290@gmail.com>
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Table\Table\Model\ResourceModel;

class Table extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('table_table', 'table_id');   //here "table_table" is table name and "table_id" is the primary key of custom table
    }
}