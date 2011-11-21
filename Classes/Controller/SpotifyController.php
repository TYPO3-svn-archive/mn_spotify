<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2011 Mattias Nilsson <tollepjaer@gmail.com>
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/


/**
 *
 *
 * @package mn_spotify
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 *
 */
class Tx_MnSpotify_Controller_SpotifyController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * spotifyRepository
	 *
	 * @var Tx_MnSpotify_Domain_Repository_SpotifyRepository
	 */
	protected $spotifyRepository;

	/**
	 * injectSpotifyRepository
	 *
	 * @param Tx_MnSpotify_Domain_Repository_SpotifyRepository $spotifyRepository
	 * @return void
	 */
	public function injectSpotifyRepository(Tx_MnSpotify_Domain_Repository_SpotifyRepository $spotifyRepository) {
		$this->spotifyRepository = $spotifyRepository;
	}

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$spotifies = $this->spotifyRepository->findAll();
		$this->view->assign('spotifies', $spotifies);
	}

	/**
	 * action show
	 *
	 * @param $spotify
	 * @return void
	 */
	public function showAction(Tx_MnSpotify_Domain_Model_Spotify $spotify) {
		$this->view->assign('spotify', $spotify);
	}

	/**
	 * action new
	 *
	 * @param $newSpotify
	 * @dontvalidate $newSpotify
	 * @return void
	 */
	public function newAction(Tx_MnSpotify_Domain_Model_Spotify $newSpotify = NULL) {
		$this->view->assign('newSpotify', $newSpotify);
	}

	/**
	 * action create
	 *
	 * @param $newSpotify
	 * @return void
	 */
	public function createAction(Tx_MnSpotify_Domain_Model_Spotify $newSpotify) {
		$this->spotifyRepository->add($newSpotify);
		$this->flashMessageContainer->add('Your new Spotify was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param $spotify
	 * @return void
	 */
	public function editAction(Tx_MnSpotify_Domain_Model_Spotify $spotify) {
		$this->view->assign('spotify', $spotify);
	}

	/**
	 * action update
	 *
	 * @param $spotify
	 * @return void
	 */
	public function updateAction(Tx_MnSpotify_Domain_Model_Spotify $spotify) {
		$this->spotifyRepository->update($spotify);
		$this->flashMessageContainer->add('Your Spotify was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param $spotify
	 * @return void
	 */
	public function deleteAction(Tx_MnSpotify_Domain_Model_Spotify $spotify) {
		$this->spotifyRepository->remove($spotify);
		$this->flashMessageContainer->add('Your Spotify was removed.');
		$this->redirect('list');
	}

}
?>