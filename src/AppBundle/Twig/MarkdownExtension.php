<?php
/**
 * Created by PhpStorm.
 * User: Sofyann
 * Date: 06/12/2017
 * Time: 06:49
 */

namespace AppBundle\Twig;


use AppBundle\Services\MarkdownTransformer;

class MarkdownExtension extends \Twig_Extension
{


    private $markdownTransformer;
    public function __construct(MarkdownTransformer $markdownTransformer)
    {
        $this->markdownTransformer = $markdownTransformer;
    }

    public function getFilters()
    {
        return [
          new \Twig_SimpleFilter('markdownify', array($this, 'parseMarkdown'), [
              'is_safe' => ['html']
          ])
        ];
    }

    public function parseMarkdown($str){
        return $this->markdownTransformer->parse($str);
    }
}