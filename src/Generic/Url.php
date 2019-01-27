<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 27.01.2019
 * Time: 15:26
 */

namespace Phpfunc\Generic;


use Phunc\Collection;

class Url
{
    /** @var string */
    public $name;

    /** @var Collection */
    public $url_collection;

    /**
     * Url constructor.
     * @param string $name
     * @param Collection $url_collection
     */
    public function __construct(string $name, Collection $url_collection)
    {
        $this->name = $name;
        $this->url_collection = $url_collection;
    }

    public function reset()
    {
        $instance = new Url();
        $this->name = '';
        $this->url_collection = new UrlCollection();
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Url
     */
    public function setName(string $name): Url
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getUrlCollection(): Collection
    {
        return $this->url_collection;
    }

    /**
     * @param Collection $url_collection
     * @return Url
     */
    public function setUrlCollection(Collection $url_collection): Url
    {
        $this->url_collection = $url_collection;
        return $this;
    }



}