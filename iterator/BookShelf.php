<?php
require_once('Aggregate.php');
require_once('Book.php');
require_once('BookShelfIterator.php');

/**
 * Created by PhpStorm.
 * User: kazumatamaki
 * Date: 2016/06/12
 * Time: 14:00
 */
class BookShelf implements Aggregate
{
    private $books = [];
    private $last  = 0;

    public function __construct($maxsize)
    {
        foreach(range(0, ($maxsize - 1)) as $v) {
            $this->books[$v] = '';
        }
    }

    public function getBookAt($index)
    {
        return $this->books[$index];
    }

    public function appendBook(Book $book)
    {
        $this->books[$this->last] = $book;
        $this->last++;
    }

    public function getLength()
    {
        return $this->last;
    }

    public function iterator()
    {
        return new BookShelfIterator($this);
    }
}