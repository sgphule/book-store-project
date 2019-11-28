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
 * TopicController
 */
class TopicController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * topicRepository
     * 
     * @var \SGPhule\BookStoreApp\Domain\Repository\TopicRepository
     */
    protected $topicRepository = null;

    /**
     * @param \SGPhule\BookStoreApp\Domain\Repository\TopicRepository $topicRepository
     */
    public function injectTopicRepository(\SGPhule\BookStoreApp\Domain\Repository\TopicRepository $topicRepository)
    {
        $this->topicRepository = $topicRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $topics = $this->topicRepository->findAll();
        $this->view->assign('topics', $topics);
    }

    /**
     * action show
     * 
     * @param \SGPhule\BookStoreApp\Domain\Model\Topic $topic
     * @return void
     */
    public function showAction(\SGPhule\BookStoreApp\Domain\Model\Topic $topic)
    {
        $this->view->assign('topic', $topic);
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
     * @param \SGPhule\BookStoreApp\Domain\Model\Topic $newTopic
     * @return void
     */
    public function createAction(\SGPhule\BookStoreApp\Domain\Model\Topic $newTopic)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->topicRepository->add($newTopic);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \SGPhule\BookStoreApp\Domain\Model\Topic $topic
     * @ignorevalidation $topic
     * @return void
     */
    public function editAction(\SGPhule\BookStoreApp\Domain\Model\Topic $topic)
    {
        $this->view->assign('topic', $topic);
    }

    /**
     * action update
     * 
     * @param \SGPhule\BookStoreApp\Domain\Model\Topic $topic
     * @return void
     */
    public function updateAction(\SGPhule\BookStoreApp\Domain\Model\Topic $topic)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->topicRepository->update($topic);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \SGPhule\BookStoreApp\Domain\Model\Topic $topic
     * @return void
     */
    public function deleteAction(\SGPhule\BookStoreApp\Domain\Model\Topic $topic)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->topicRepository->remove($topic);
        $this->redirect('list');
    }
}
