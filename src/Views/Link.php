<?php

namespace Fawzanm\LaravelLivewireTables\Views;

/**
 * Class Link.
 */
class Link extends Component
{
    /**
     * Link constructor.
     *
     * @param $text
     */
    public function __construct($text = false)
    {
        if ($text) {
            $this->options['text'] = $text;
        }
    }

    /**
     * @param $text
     *
     * @return self
     */
    public static function make($text): self
    {
        return new static($text);
    }

    /**
     * @param $text
     *
     * @return self
     */
    public function text($text): self
    {
        return $this->setAttribute('text', $text);
    }

    /**
     * @param $class
     *
     * @return $this
     */
    public function class($class): self
    {
        return $this->setAttribute('class', $class);
    }

    /**
     * @param $id
     *
     * @return $this
     */
    public function id($id): self
    {
        return $this->setAttribute('id', $id);
    }

    /**
     * @param $icon
     *
     * @return $this
     */
    public function icon($icon): self
    {
        return $this->setOption('icon', $icon);
    }

    /**
     * @param $href
     *
     * @return $this
     */
    public function href($href): self
    {
        return $this->setAttribute('href', $href);
    }

    /**
     * @return string
     */
    public function view(): string
    {
        return 'laravel-livewire-tables::components.link';
    }
}
