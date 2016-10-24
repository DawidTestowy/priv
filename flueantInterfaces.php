<?php
/**
 * Created by PhpStorm.
 * User: dlange
 * Date: 2016-10-23
 * Time: 14:50
 */
LOLHtmlBuilder::begin()
    ->p('Nowy paragraf')
    ->hr()->pre()
    ->p("drugi paragraf")
    ->end();


class LOLHtmlBuilder {
    private $html;

    public function __construct($html) {
        $this->html = $html;
    }

    static function begin() {
        $builder = new LOLHtmlBuilder("<html><head></head><body>");

        return $builder;
    }

    public function p($paragraph) {
        $this->html .= "<p>" . $paragraph . "</p>";
        return $this;
    }

    public function hr() {
        $this->html .= "<hr>";
        return $this;
    }

    public function pre() {
        $this->html .= "<pre>" . htmlspecialchars(self::class) . "</pre>";
        return $this;
    }

    public function end() {
        $this->html .= "</body></html>";
        echo $this->html;
    }
}
