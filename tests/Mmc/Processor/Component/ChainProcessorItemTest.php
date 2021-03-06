<?php

namespace Mmc\Processor\Component\Test;

use Mmc\Processor\Component\ChainProcessorItem;
use Mmc\Processor\Component\Processor;

class ChainProcessorItemTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructValuesAndGetters()
    {
        $processor = $this->createMock(Processor::class);

        $item = new ChainProcessorItem($processor, 'foo', 5);

        $this->assertEquals($processor, $item->getProcessor());
        $this->assertEquals('foo', $item->getName());
        $this->assertEquals(5, $item->getPriority());
    }
}
