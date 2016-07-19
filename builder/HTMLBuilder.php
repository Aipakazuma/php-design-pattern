<?php
require_once 'Builder.php';
/**
 * Created by PhpStorm.
 * User: kazumatamaki
 * Date: 2016/07/06
 * Time: 12:46
 */
class HTMLBuilder extends Builder
{
    private $filename;

    private $writer = '';

    public function makeTitle($title)
    {
        $this->filename = $title . '.html';
        try {
            file_get_contents($this->filename);
        } catch (Exception $e) {
            echo $e->getMessage();
            exit();
        }

        $this->writer .= '<html><head><title>' . $title . '</title></head><body>';
        $this->writer .= '<h1>' . $title . '</h1>';
    }

    public function makeString($str)
    {
        $this->writer .= '<p>' . $str . '</p>';
    }

    public function makeItems($items)
    {
        $this->writer .= '<ul>';
        foreach($items as $item) {
            $this->writer .= '<li>' . $item . '</li>';
        }
        $this->writer .= '</ul>';
    }

    public function close()
    {
        $this->writer .= '</body></html>';
        try {
            file_put_contents($this->filename, $this->writer);
        } catch (Exception $e) {
            echo $e->getMessage();
            exit();
        }
    }

    public function getResult()
    {
        return $this->filename;
    }
}
