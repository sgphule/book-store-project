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
 * AuthorController
 */
class AuthorController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * authorRepository
     * 
     * @var \SGPhule\BookStoreApp\Domain\Repository\AuthorRepository
     */
    protected $authorRepository = null;

    /**
     * @param \SGPhule\BookStoreApp\Domain\Repository\AuthorRepository $authorRepository
     */
    public function injectAuthorRepository(\SGPhule\BookStoreApp\Domain\Repository\AuthorRepository $authorRepository)
    {
        $this->authorRepository = $authorRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $authors = $this->authorRepository->findAll();
        $this->view->assign('authors', $authors);
    }

    /**
     * action show
     * 
     * @param \SGPhule\BookStoreApp\Domain\Model\Author $author
     * @return void
     */
    public function showAction(\SGPhule\BookStoreApp\Domain\Model\Author $author)
    {
        $this->view->assign('author', $author);
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
     * @param \SGPhule\BookStoreApp\Domain\Model\Author $newAuthor
     * @return void
     */
    public function createAction(\SGPhule\BookStoreApp\Domain\Model\Author $newAuthor)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->authorRepository->add($newAuthor);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \SGPhule\BookStoreApp\Domain\Model\Author $author
     * @ignorevalidation $author
     * @return void
     */
    public function editAction(\SGPhule\BookStoreApp\Domain\Model\Author $author)
    {
        $this->view->assign('author', $author);
    }

    /**
     * action update
     * 
     * @param \SGPhule\BookStoreApp\Domain\Model\Author $author
     * @return void
     */
    public function updateAction(\SGPhule\BookStoreApp\Domain\Model\Author $author)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->authorRepository->update($author);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \SGPhule\BookStoreApp\Domain\Model\Author $author
     * @return void
     */
    public function deleteAction(\SGPhule\BookStoreApp\Domain\Model\Author $author)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->authorRepository->remove($author);
        $this->redirect('list');
    }
}
