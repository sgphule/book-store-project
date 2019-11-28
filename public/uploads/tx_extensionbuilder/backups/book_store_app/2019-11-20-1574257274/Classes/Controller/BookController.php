<?php
namespace SGPhule\BookStoreApp\Controller;


/***
 *
 * This file is part of the "Book Store App" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Sudarshan Phule <sudarshan.phule@hof-university.de>
 *
 ***/
/**
 * BookController
 */
class BookController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * bookRepository
     * 
     * @var \SGPhule\BookStoreApp\Domain\Repository\BookRepository
     */
    protected $bookRepository = null;

    /**
     * @param \SGPhule\BookStoreApp\Domain\Repository\BookRepository $bookRepository
     */
    public function injectBookRepository(\SGPhule\BookStoreApp\Domain\Repository\BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $books = $this->bookRepository->findAll();
        $this->view->assign('books', $books);
    }

    /**
     * action show
     * 
     * @param \SGPhule\BookStoreApp\Domain\Model\Book $book
     * @return void
     */
    public function showAction(\SGPhule\BookStoreApp\Domain\Model\Book $book)
    {
        $this->view->assign('book', $book);
    }

    /**
     * action new
     * 
     * @return void
     */
    public function newAction()
    {
    }

    /**
     * action create
     * 
     * @param \SGPhule\BookStoreApp\Domain\Model\Book $newBook
     * @return void
     */
    public function createAction(\SGPhule\BookStoreApp\Domain\Model\Book $newBook)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->bookRepository->add($newBook);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \SGPhule\BookStoreApp\Domain\Model\Book $book
     * @ignorevalidation $book
     * @return void
     */
    public function editAction(\SGPhule\BookStoreApp\Domain\Model\Book $book)
    {
        $this->view->assign('book', $book);
    }

    /**
     * action update
     * 
     * @param \SGPhule\BookStoreApp\Domain\Model\Book $book
     * @return void
     */
    public function updateAction(\SGPhule\BookStoreApp\Domain\Model\Book $book)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->bookRepository->update($book);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \SGPhule\BookStoreApp\Domain\Model\Book $book
     * @return void
     */
    public function deleteAction(\SGPhule\BookStoreApp\Domain\Model\Book $book)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->bookRepository->remove($book);
        $this->redirect('list');
    }
}
