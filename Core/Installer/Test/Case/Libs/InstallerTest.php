<?php
	App::import('lib', 'libs.test/AppModelTest');
	
	class TestPlugin extends AppModelTestCase {
		/**
		 * @brief Configuration for the test case
		 *
		 * Loading fixtures:
		 * 
		 * List all the needed fixtures in the do part of the fixture array.
		 * In replace you can overwrite fixtures of other plugins by your own.
		 *
		 * 'fixtures' => array(
		 *		'do' => array(
		 *			'SomePlugin.SomeModel
		 *		),
		 *		'replace' => array(
		 *			'Core.User' => 'SomePlugin.User
		 *		)
		 * )
		 * @var array 
		 */
		public $setup = array(
			'model' => 'Installer.Plugin'
		);
		
		public $tests = array('testInstaller');
		
		/**
		 * @test some random methods in the install lib
		 */
		public function testInstallerMethods() {
			$this->assertTrue(App::import('lib', 'Installer.Installer'), 'Could not import the insatller lib');
			$Installer = new InstallerLib();
			
			$data = $Installer->getLicense();
			$this->assertFalse(empty($data));
			$this->assertEqual($data, $Installer->getLicense('html'));
			$this->assertEqual($data, $Installer->getLicense('fake'));
			$this->assertEqual($Installer->getLicense('text'), strip_tags($Installer->getLicense('text')));
			
			$data = $Installer->getWelcome();
			$this->assertFalse(empty($data));
			$this->assertEqual($data, $Installer->getWelcome('html'));
			$this->assertEqual($data, $Installer->getWelcome('fakse'));
			$this->assertEqual($Installer->getWelcome('text'), strip_tags($Installer->getWelcome('text')));
			
			$this->assertTrue(count($Installer->getSupportedDbs()) == 3);
			$this->assertTrue(count($Installer->getSupportedDbs(false)) == 3);
			
			$connection = array(
				'connection' => array(
					'persistent' => $this->db->config['persistent'],
					'host' => $this->db->config['host'],
					'login' => $this->db->config['login'],
					'password' => $this->db->config['password'],
					'database' => $this->db->config['database'],
					'socket' => $this->db->config['socket'],
					'driver' => $this->db->config['driver'],
					'encoding' => $this->db->config['encoding'],
					'port' => $this->db->config['port']
				)
			);
			$expected = $connection['connection'];
			if(!$expected['port']){
				unset($expected['port']);
			}
			$this->assertEqual($expected, $Installer->cleanConnectionDetails($connection));
			$this->assertTrue($Installer->testConnection($Installer->cleanConnectionDetails($connection)), 'Should connect');
			
			$connection['connection']['login'] = 'wrong';
			$this->assertFalse($Installer->testConnection($Installer->cleanConnectionDetails($connection)), 'Should not connect');
			
			$connection['root'] = array(
				'login' => $this->db->config['login'],
				'password' => $this->db->config['password']
			);
			$connection = $Installer->cleanConnectionDetails($connection);
			$this->assertEqual('test', $connection['login']);
			$this->assertFalse($Installer->testConnection($connection), 'Should not connect');
		}
		
		/**
		 * @test installing plugins
		 */
		public function testInstaller() {
			$this->__cleanSystem();
			
			$this->assertTrue(App::import('lib', 'Installer.Installer'), 'Could not import the insatller lib');
			$this->assertTrue(App::import('Lib', 'Installer.ReleaseVersion'), 'Could not import Versions lib');
			
			$Installer = new InstallerLib();
			$Version = new ReleaseVersion(array('connection' => 'test_suite'));
			
			$connectionDetails = $Installer->cleanConnectionDetails(array('connection' => $this->db->config));
			$this->assertTrue($Installer->installPlugin($Version, $connectionDetails));
			$expected = array(
				'0' => 'acos',
				'1' => 'aros',
				'2' => 'aros_acos',
				'3' => 'schema_migrations',
				'4' => 'sessions',
			);
			$this->assertEqual($expected, $this->db->listSources());
			
			$this->assertTrue($Installer->installPlugin($Version, $connectionDetails, 'Installer'));
			$expected = array(
				'0' => 'acos',
				'1' => 'aros',
				'2' => 'aros_acos',
				'3' => 'core_plugins',
				'4' => 'schema_migrations',
				'5' => 'sessions',
			);
			$this->assertEqual($expected, $this->db->listSources());
			
			$pluginsToInstall = App::objects('plugin');
			natsort($pluginsToInstall);
			foreach($pluginsToInstall as $k => $pluginToInstall) {
				if(in_array($pluginToInstall, array('Migrations'))) {
					continue;
				}
				
				$this->assertTrue(
					$Installer->installPlugin($Version, $connectionDetails, $pluginToInstall),
					sprintf('%s could not be installed', $pluginToInstall)
				);
			}
			
			foreach($pluginsToInstall as $pluginToInstall) {
				$this->__checkVersionCount($pluginToInstall);
			}
		}
		
		/**
		 * @brief drop all tables for testing the installer
		 */
		private function __cleanSystem($all = true) {
			if(!isset($this->__oldTables)) {
				$this->__oldTables = $this->db->listSources();
			}
			foreach($this->db->listSources() as $table) {
				if(!$all && in_array($table, $this->__oldTables)) {
					continue;
				}
				
				$this->Plugin->query('DROP TABLE ' . $table);
			}
			
			$this->assertEqual(array(), $this->Plugin->query('SHOW TABLES;'));
			
			ClassRegistry::flush();
		}
		
		/**
		 * @brief check that the installed version matches the supplied releases
		 */
		private function __checkVersionCount($plugin) {
			$path = CakePlugin::path($plugin) . 'Config' . DS . 'releases';
			$Folder = new Folder($path);
			$data = $Folder->read();
			$data = array_flip($data[1]);
			
			unset($data['map.php']);
			
			$installedVersions = ClassRegistry::init('Migrations.SchemaMigration')->find(
				'count',
				array(
					'conditions' => array(
						'SchemaMigration.type' => array(
							$plugin, strtolower($plugin)
						)
					)
				)
			);
			
			$this->assertIdentical(count($data), $installedVersions, sprintf('%s has %d releases but only installed %d of them', $plugin, count($data), $installedVersions));
		}
	}