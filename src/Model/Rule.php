<?php

declare(strict_types=1);

namespace RulerZ\Model;

use Hoa\Ruler\Model as HoaModel;
use RulerZ\Visitor;

class Rule extends HoaModel\Model
{
    /**
     * Returns a list of accessed variables.
     *
     * @return \Hoa\Ruler\Model\Bag\Context[]
     */
    public function getAccesses(): array
    {
        $visitor = new Visitor\AccessCollectorVisitor();

        return $visitor->visit($this);
    }

    /**
     * Returns a list of used operators.
     *
     * @return \Hoa\Ruler\Model\Operator[]
     */
    public function getOperators(): array
    {
        $visitor = new Visitor\OperatorCollectorVisitor();

        return $visitor->visit($this);
    }

    /**
     * Returns a list of used parameters.
     *
     * @return \RulerZ\Model\Parameter[]
     */
    public function getParameters(): array
    {
        $visitor = new Visitor\ParameterCollectorVisitor();

        return $visitor->visit($this);
    }
}
