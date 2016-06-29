<?php

namespace Ubt\HelloWorld\Model;

class Hello extends \Magento\Framework\Model\AbstractModel
{
	public function sayHi()
	{
		echo 'Hello World';
	}
}