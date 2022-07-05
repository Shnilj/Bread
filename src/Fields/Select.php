<?php
declare(strict_types=1);


namespace Libaro\Bread\Fields;

use Libaro\Bread\Contracts\Field;
use Illuminate\Support\Collection;

final class Select extends Field
{
    public $type = 'select';
    public Collection $options;
    public $multiple = true;

    /**
     * @param string $name
     * @param string $label
     */
    public function __construct(string $name, string $label, Collection $options)
    {
        parent::__construct($name, $label);
        $this->options = $options;
    }

    public static function make(string $name, string $label, Collection $options)
    {
        return new self($name, $label, $options);
    }

    public function multiple()
    {
        $this->multiple = true;

        return $this;
    }
}