<?php
class Trendmarke_WidgetSingle_Block_Widgetsingle
    extends Mage_Core_Block_Template
    implements Mage_Widget_Block_Interface
{

    /**
     * A model to serialize attributes
     * @var Varien_Object
     */
    protected $_serializer = null;

    /**
     * Initialization
     */
    protected function _construct()
    {
        $this->_serializer = new Varien_Object();
        parent::_construct();
    }

    protected function _toHtml()
    {
        return parent::_toHtml();
    }

    public function getProduct() {
        $idPath = explode('/', $this->_getData('id_path'));
        if (isset($idPath[0]) && isset($idPath[1]) && $idPath[0] == 'product') {
            $helper = $this->_getFactory()->getHelper('catalog/product');
            $productId = $idPath[1];
            $_product = Mage::getModel('catalog/product')->load($productId);
            if ($_product) return $_product;
        }
        return '';
    }
}