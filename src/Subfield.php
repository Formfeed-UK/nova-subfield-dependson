<?php

namespace Formfeed\Subfields;

use Laravel\Nova\Fields\FieldCollection;

interface Subfield
{
    
    public function hasSubfields(): bool;

    public function getSubfields(): FieldCollection;

}