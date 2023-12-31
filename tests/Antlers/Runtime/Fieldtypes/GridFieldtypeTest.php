<?php

namespace Tests\Antlers\Runtime\Fieldtypes;

use Tests\Antlers\ParserTestCase;

class GridFieldtypeTest extends ParserTestCase
{
    public function test_render_grid_fieldtype()
    {
        $this->runFieldTypeTest('grid');
    }

    public function test_render_stacked_grid_fieldtype()
    {
        $this->runFieldTypeTest('stacked_grid');
    }

    public function test_grid_array_plucking()
    {
        $this->runFieldTypeTest('grid_array_plucking', null, ['grid']);
    }
}
