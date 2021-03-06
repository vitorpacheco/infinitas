<?php
	class AddressesController extends ContactAppController {
		public function add(){
			if(!$this->Auth->user('id')) {
				$this->notice(
					__('You must be logged in to do that'),
					array(
						'redirect' => true
					)
				);
			}

			if (!empty($this->request->data)) {
				$this->Address->create();
				if ($this->Address->saveAll($this->request->data)) {
					$this->Infintias->noticeSaved();
					$this->redirect('/');
				}
			}

			$this->request->data['Address']['plugin'] = 'management';
			$this->request->data['Address']['model'] = 'user';
			$this->request->data['Address']['foreign_key'] = $this->Auth->user('id');

			$countries = $this->Address->Country->find('list');
			$continents = array(0 => 'Other', 1 => 'Africa');
			$this->set(compact('referer', 'countries', 'continents'));
		}

		public function edit($id = null){
			if (!$id) {
				$this->notice('invalid');
			}

			if (!empty($this->request->data)) {
				if ($this->Address->save($this->request->data)) {
					$this->notice('saved');
				}
			}

			if ($id && empty($this->request->data)) {
				$this->request->data = $this->Address->read(null, $id);
			}

			$countries = $this->Address->Country->find('list');
			$continents = array(0 => 'Other', 1 => 'Africa');
			$this->set(compact('countries', 'continents'));
		}

		public function admin_index(){
			$this->Paginator->settings = array(
				'contain' => array(
					'Country'
				)
			);

			$addresses = $this->Paginator->paginate(null, $this->Filter->filter);

			$filterOptions = $this->Filter->filterOptions;
			$filterOptions['fields'] = array(
				'name',
				'street',
				'city',
				'province',
				'postal',
				'country_id' => $this->Address->Country->find('list'),
				'continent' => Configure::read('Contact.continents'),
				'active' => (array)Configure::read('CORE.active_options')
			);

			$this->set(compact('addresses', 'filterOptions'));
		}
	}