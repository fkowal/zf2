<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Markup
 * @subpackage Parser
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */

namespace ZendTest\Markup\TestAsset\Parser;

use Zend\Markup\Parser;

/**
 * @category   Zend
 * @package    Zend_Markup
 * @subpackage Parser
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class MockParser implements Parser\ParserInterface
{

    public function __construct($options = array())
    {
    }

    public function parse($value)
    {
    }

    public function buildTree(array $tokens, $strategy = 'default')
    {
    }

    public function tokenize($value)
    {
    }
}
