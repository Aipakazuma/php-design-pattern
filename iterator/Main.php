<?php
require_once('Book.php');
require_once('BookShelf.php');
/**
 * Created by PhpStorm.
 * User: kazumatamaki
 * Date: 2016/06/12
 * Time: 14:26
 */
class Main
{
    public function __construct()
    {
    }

    public function subMain()
    {
        $bookSelf = new BookShelf(4);
        $bookSelf->appendBook(new Book('嫌われる勇気'));
        $bookSelf->appendBook(new Book('納品をなくせばうまくいく'));
        $bookSelf->appendBook(new Book('Google how to the work.'));
        $bookSelf->appendBook(new Book('幸せになる勇気'));
        $it = $bookSelf->iterator();
        while ($it->hasNext()) {
            $book = $it->next();
            echo $book->getName().'<br>';
        }
    }
}