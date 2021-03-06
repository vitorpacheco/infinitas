<?php
	/**
	 * Comment Template.
	 *
	 * @todo Implement .this needs to be sorted out.
	 *
	 * Copyright (c) 2009 Carl Sutton ( dogmatic69 )
	 *
	 * Licensed under The MIT License
	 * Redistributions of files must retain the above copyright notice.
	 * @filesource
	 * @copyright Copyright (c) 2009 Carl Sutton ( dogmatic69 )
	 * @link http://infinitas-cms.org
	 * @package sort
	 * @subpackage sort.comments
	 * @license http://www.opensource.org/licenses/mit-license.php The MIT License
	 * @since 0.5a
	 */

	class CampaignsController extends NewsletterAppController {
		public function admin_index() {
			$this->Paginator->settings = array('paginated');

			$campaigns = $this->Paginator->paginate('Campaign', $this->Filter->filter);

			$filterOptions = $this->Filter->filterOptions;
			$filterOptions['fields'] = array(
				'name',
				'description',
				'Template.name'
			);

			$this->set(compact('campaigns', 'filterOptions'));
		}

		public function admin_add() {
			parent::admin_add();

			$templates = $this->Campaign->Template->find('list');
			if(empty($templates)){
				$this->notice(
					__('Please create a template before creating your campaigns'),
					array(
						'level' => 'notice',
						'redirect' => array(
							'controller' => 'templates'
						)
					)
				);
			}
			
			$newsletters = $this->Campaign->Newsletter->find('list');
			$this->set(compact('templates', 'newsletters'));
		}

		public function admin_edit($id) {
			parent::admin_edit($id);

			$templates = $this->Campaign->Template->find('list');
			$newsletters = $this->Campaign->Newsletter->find('list');
			$this->set(compact('templates', 'newsletters'));
		}

		public function admin_toggle($id = null) {
			if (!$id) {
				$this->notice('invalid');
			}

			$data = $this->Campaign->find(
				'first',
				array(
					'fields' => array(
						'Campaign.id',
						'Campaign.active',
					),
					'conditions' => array(
						'Campaign.id' => $id
					),
					'contain' => array(
						'Newsletter' => array(
							'fields' => array(
								'Newsletter.id'
							)
						)
					)
				)
			);

			if (!$data['Campaign']['active'] && empty($data['Newsletter'])) {
				$this->notice(
					__('You can not enable a campaign with no mails.'),
					array(
						'level' => 'warning',
						'redirect' => true
					)
				);
			}

			return parent::admin_toggle($id);
		}

		public function __massActionDelete($ids){
			return $this->MassAction->delete($this->__canDelete($ids));
		}

		private function __canDelete($ids) {
			$newsletters = $this->Campaign->Newsletter->find(
				'list',
				array(
					'fields' => array(
						'Newsletter.campaign_id',
						'Newsletter.campaign_id'
					),
					'conditions' => array(
						'Newsletter.sent' => 1,
						'Newsletter.campaign_id' => $ids
					)
				)
			);

			if (empty($newsletters)) {
				return $ids;
			}

			foreach($ids as $k => $v) {
				if (isset($newsletters[$v])) {
					unset($ids[$k]);
				}
			}

			if (!empty($ids)) {
				return $ids;
			}
			
			$this->notice(
				__('None of the campaigns you selected are deletable.'),
				array(
					'level' => 'warning',
					'redirect' => true
				)
			);
		}
	}