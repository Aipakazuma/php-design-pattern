<?php
require_once 'Iterator.php';

/**
 * Created by PhpStorm.
 * User: kazumatamaki
 * Date: 2016/06/12
 * Time: 14:05
 */
class BookShelfIterator implements My\Iterator
{
    private $bookShelf;

    private $index;

    public function __construct(BookShelf $bookShelf)
    {
        $this->bookShelf = $bookShelf;
        $this->index = 0;
    }

    public function hasNext()
    {
        if ($this->index < $this->bookShelf->getLength()) {
            return true;
        } else {
            return false;
        }
    }

    public function next()
    {
        $book = $this->bookShelf->getBookAt($this->index);
        $this->index++;
        return $book;
    }
}
