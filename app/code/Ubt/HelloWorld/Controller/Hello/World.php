<?php
namespace Ubt\HelloWorld\Controller\Hello;

class World extends \Magento\Framework\App\Action\Action
{
	protected $_hello;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Ubt\Helloworld\Model\Hello $hello
	) {
		$this->_hello = $hello;
		parent::__construct($context);
	}

    public function execute()
    {
        $this->_hello->sayHi();
    }    
}