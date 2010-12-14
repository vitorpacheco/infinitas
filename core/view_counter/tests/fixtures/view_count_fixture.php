<?php
/* GlobalViewCount Fixture generated on: 2010-12-14 00:12:35 : 1292285375 */
class ViewCountFixture extends CakeTestFixture {
	var $name = 'ViewCount';

	var $table = 'global_view_counts';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'model' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'foreign_key' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 10),
		'ip_address' => array('type' => 'string', 'null' => false, 'default' => '?', 'length' => 15, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'year' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 4, 'key' => 'index'),
		'month' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 4, 'key' => 'index'),
		'day' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 4, 'key' => 'index'),
		'hour' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 4, 'key' => 'index'),
		'week_of_year' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 4, 'key' => 'index'),
		'day_of_year' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 4),
		'day_of_week' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 1, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'continent_code' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 5, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'country_code' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 2, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'country' => array('type' => 'string', 'null' => false, 'default' => 'Unknown', 'length' => 100, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'city' => array('type' => 'string', 'null' => false, 'default' => 'Unknown', 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'ip_address' => array('column' => 'ip_address', 'unique' => 0), 'week_of_year' => array('column' => 'week_of_year', 'unique' => 0), 'day_of_month' => array('column' => 'day', 'unique' => 0), 'month_of_year' => array('column' => 'month', 'unique' => 0), 'day_of_week' => array('column' => 'day_of_week', 'unique' => 0), 'hour_of_day' => array('column' => 'hour', 'unique' => 0), 'country_code' => array('column' => 'country_code', 'unique' => 0), 'country' => array('column' => 'country', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => '4ca682b2-dae8-4420-89d4-44205fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '4',
			'user_id' => 1,
			'ip_address' => '81.157.69.81',
			'year' => '2010',
			'month' => 10,
			'day' => 2,
			'hour' => 1,
			'week_of_year' => 39,
			'day_of_year' => 127,
			'day_of_week' => '7',
			'continent_code' => 'EU',
			'country_code' => 'GB',
			'country' => 'United Kingdom',
			'city' => 'Leicester',
			'created' => '2010-10-02 01:54:10'
		),
		array(
			'id' => '4ca682b3-bf1c-4781-bbd1-44245fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '3',
			'user_id' => 1,
			'ip_address' => '81.157.69.81',
			'year' => '2010',
			'month' => 10,
			'day' => 2,
			'hour' => 1,
			'week_of_year' => 39,
			'day_of_year' => 127,
			'day_of_week' => '7',
			'continent_code' => 'EU',
			'country_code' => 'GB',
			'country' => 'United Kingdom',
			'city' => 'Leicester',
			'created' => '2010-10-02 01:54:11'
		),
		array(
			'id' => '4ca682b6-48b8-4e62-95a5-44335fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '2',
			'user_id' => 1,
			'ip_address' => '81.157.69.81',
			'year' => '2010',
			'month' => 10,
			'day' => 2,
			'hour' => 1,
			'week_of_year' => 39,
			'day_of_year' => 127,
			'day_of_week' => '7',
			'continent_code' => 'EU',
			'country_code' => 'GB',
			'country' => 'United Kingdom',
			'city' => 'Leicester',
			'created' => '2010-10-02 01:54:14'
		),
		array(
			'id' => '4ca682b8-9764-4ec4-8f09-443c5fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '1',
			'user_id' => 1,
			'ip_address' => '81.157.69.81',
			'year' => '2010',
			'month' => 10,
			'day' => 2,
			'hour' => 1,
			'week_of_year' => 39,
			'day_of_year' => 127,
			'day_of_week' => '7',
			'continent_code' => 'EU',
			'country_code' => 'GB',
			'country' => 'United Kingdom',
			'city' => 'Leicester',
			'created' => '2010-10-02 01:54:16'
		),
		array(
			'id' => '4ca68340-c27c-41b2-98f4-47be5fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '6',
			'user_id' => 1,
			'ip_address' => '81.157.69.81',
			'year' => '2010',
			'month' => 10,
			'day' => 2,
			'hour' => 1,
			'week_of_year' => 39,
			'day_of_year' => 127,
			'day_of_week' => '7',
			'continent_code' => 'EU',
			'country_code' => 'GB',
			'country' => 'United Kingdom',
			'city' => 'Leicester',
			'created' => '2010-10-02 01:56:32'
		),
		array(
			'id' => '4ca8d360-e81c-4172-b1e6-276d5fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '6',
			'user_id' => 1,
			'ip_address' => '81.157.69.81',
			'year' => '2010',
			'month' => 10,
			'day' => 3,
			'hour' => 20,
			'week_of_year' => 39,
			'day_of_year' => 127,
			'day_of_week' => '1',
			'continent_code' => 'EU',
			'country_code' => 'GB',
			'country' => 'United Kingdom',
			'city' => 'Leicester',
			'created' => '2010-10-03 20:02:56'
		),
		array(
			'id' => '4ca8f6fc-fc24-4be5-b667-01ff5fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '7',
			'user_id' => 1,
			'ip_address' => '81.157.69.81',
			'year' => '2010',
			'month' => 10,
			'day' => 3,
			'hour' => 22,
			'week_of_year' => 39,
			'day_of_year' => 127,
			'day_of_week' => '1',
			'continent_code' => 'EU',
			'country_code' => 'GB',
			'country' => 'United Kingdom',
			'city' => 'Leicester',
			'created' => '2010-10-03 22:34:52'
		),
		array(
			'id' => '4ca8fa93-e954-4528-a620-14355fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '7',
			'user_id' => 1,
			'ip_address' => '81.157.69.81',
			'year' => '2010',
			'month' => 10,
			'day' => 3,
			'hour' => 22,
			'week_of_year' => 39,
			'day_of_year' => 127,
			'day_of_week' => '1',
			'continent_code' => 'EU',
			'country_code' => 'GB',
			'country' => 'United Kingdom',
			'city' => 'Leicester',
			'created' => '2010-10-03 22:50:11'
		),
		array(
			'id' => '4ca8fdd8-0c4c-45be-ba94-23655fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '7',
			'user_id' => 1,
			'ip_address' => '81.157.69.81',
			'year' => '2010',
			'month' => 10,
			'day' => 3,
			'hour' => 23,
			'week_of_year' => 39,
			'day_of_year' => 127,
			'day_of_week' => '1',
			'continent_code' => 'EU',
			'country_code' => 'GB',
			'country' => 'United Kingdom',
			'city' => 'Leicester',
			'created' => '2010-10-03 23:04:08'
		),
		array(
			'id' => '4ca8fe9c-e43c-4dc7-85aa-286b5fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '7',
			'user_id' => 1,
			'ip_address' => '81.157.69.81',
			'year' => '2010',
			'month' => 10,
			'day' => 3,
			'hour' => 23,
			'week_of_year' => 39,
			'day_of_year' => 127,
			'day_of_week' => '1',
			'continent_code' => 'EU',
			'country_code' => 'GB',
			'country' => 'United Kingdom',
			'city' => 'Leicester',
			'created' => '2010-10-03 23:07:24'
		),
		array(
			'id' => '4ca8ff85-1558-4326-a044-2d5f5fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '7',
			'user_id' => 1,
			'ip_address' => '81.157.69.81',
			'year' => '2010',
			'month' => 10,
			'day' => 3,
			'hour' => 23,
			'week_of_year' => 39,
			'day_of_year' => 127,
			'day_of_week' => '1',
			'continent_code' => 'EU',
			'country_code' => 'GB',
			'country' => 'United Kingdom',
			'city' => 'Leicester',
			'created' => '2010-10-03 23:11:17'
		),
		array(
			'id' => '4ca905f0-e778-4494-8957-49665fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '8',
			'user_id' => 1,
			'ip_address' => '81.157.69.81',
			'year' => '2010',
			'month' => 10,
			'day' => 3,
			'hour' => 23,
			'week_of_year' => 39,
			'day_of_year' => 127,
			'day_of_week' => '1',
			'continent_code' => 'EU',
			'country_code' => 'GB',
			'country' => 'United Kingdom',
			'city' => 'Leicester',
			'created' => '2010-10-03 23:38:40'
		),
		array(
			'id' => '4ca907ee-b3e8-4559-9414-526e5fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '8',
			'user_id' => 1,
			'ip_address' => '81.157.69.81',
			'year' => '2010',
			'month' => 10,
			'day' => 3,
			'hour' => 23,
			'week_of_year' => 39,
			'day_of_year' => 127,
			'day_of_week' => '1',
			'continent_code' => 'EU',
			'country_code' => 'GB',
			'country' => 'United Kingdom',
			'city' => 'Leicester',
			'created' => '2010-10-03 23:47:10'
		),
		array(
			'id' => '4ca90b01-09c4-4967-b3dc-60a75fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '8',
			'user_id' => 1,
			'ip_address' => '81.157.69.81',
			'year' => '2010',
			'month' => 10,
			'day' => 4,
			'hour' => 0,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '2',
			'continent_code' => 'EU',
			'country_code' => 'GB',
			'country' => 'United Kingdom',
			'city' => 'Leicester',
			'created' => '2010-10-04 00:00:17'
		),
		array(
			'id' => '4ca97b67-ef04-45d1-80d8-063e5fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '8',
			'user_id' => 0,
			'ip_address' => '81.157.69.81',
			'year' => '2010',
			'month' => 10,
			'day' => 4,
			'hour' => 7,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '2',
			'continent_code' => 'EU',
			'country_code' => 'GB',
			'country' => 'United Kingdom',
			'city' => 'Leicester',
			'created' => '2010-10-04 07:59:51'
		),
		array(
			'id' => '4ca97bc1-bea0-4b8d-8108-09095fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '4',
			'user_id' => 0,
			'ip_address' => '207.46.204.236',
			'year' => '2010',
			'month' => 10,
			'day' => 4,
			'hour' => 8,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '2',
			'continent_code' => 'NA',
			'country_code' => 'US',
			'country' => 'United States',
			'city' => 'Unknown',
			'created' => '2010-10-04 08:01:21'
		),
		array(
			'id' => '4ca97bff-8a48-43d5-b3d0-0aa05fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '8',
			'user_id' => 0,
			'ip_address' => '81.157.69.81',
			'year' => '2010',
			'month' => 10,
			'day' => 4,
			'hour' => 8,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '2',
			'continent_code' => 'EU',
			'country_code' => 'GB',
			'country' => 'United Kingdom',
			'city' => 'Leicester',
			'created' => '2010-10-04 08:02:23'
		),
		array(
			'id' => '4ca97ca4-1734-41b3-be99-0e6b5fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '4',
			'user_id' => 0,
			'ip_address' => '81.157.69.81',
			'year' => '2010',
			'month' => 10,
			'day' => 4,
			'hour' => 8,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '2',
			'continent_code' => 'EU',
			'country_code' => 'GB',
			'country' => 'United Kingdom',
			'city' => 'Leicester',
			'created' => '2010-10-04 08:05:08'
		),
		array(
			'id' => '4ca97ec2-c0f8-40cb-864f-18d55fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '8',
			'user_id' => 1,
			'ip_address' => '81.157.69.81',
			'year' => '2010',
			'month' => 10,
			'day' => 4,
			'hour' => 8,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '2',
			'continent_code' => 'EU',
			'country_code' => 'GB',
			'country' => 'United Kingdom',
			'city' => 'Leicester',
			'created' => '2010-10-04 08:14:10'
		),
		array(
			'id' => '4ca98ba6-a7c4-43b4-b707-6c915fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '1',
			'user_id' => 0,
			'ip_address' => '66.249.65.186',
			'year' => '2010',
			'month' => 10,
			'day' => 4,
			'hour' => 9,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '2',
			'continent_code' => 'EU',
			'country_code' => 'GB',
			'country' => 'United Kingdom',
			'city' => 'Newcastle',
			'created' => '2010-10-04 09:09:10'
		),
		array(
			'id' => '4ca9920b-deb4-410a-a8af-1e325fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '1',
			'user_id' => 0,
			'ip_address' => '66.249.65.186',
			'year' => '2010',
			'month' => 10,
			'day' => 4,
			'hour' => 9,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '2',
			'continent_code' => 'EU',
			'country_code' => 'GB',
			'country' => 'United Kingdom',
			'city' => 'Newcastle',
			'created' => '2010-10-04 09:36:27'
		),
		array(
			'id' => '4ca99cd8-25ac-4080-a7d3-7d445fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '5',
			'user_id' => 0,
			'ip_address' => '66.249.65.186',
			'year' => '2010',
			'month' => 10,
			'day' => 4,
			'hour' => 10,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '2',
			'continent_code' => 'EU',
			'country_code' => 'GB',
			'country' => 'United Kingdom',
			'city' => 'Newcastle',
			'created' => '2010-10-04 10:22:32'
		),
		array(
			'id' => '4ca9adbd-8a70-44fa-ac49-19b05fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '8',
			'user_id' => 0,
			'ip_address' => '92.241.182.25',
			'year' => '2010',
			'month' => 10,
			'day' => 4,
			'hour' => 11,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '2',
			'continent_code' => 'AS',
			'country_code' => 'RU',
			'country' => 'Russian Federation',
			'city' => 'Unknown',
			'created' => '2010-10-04 11:34:37'
		),
		array(
			'id' => '4ca9adcc-30a8-4aea-a873-1a165fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '7',
			'user_id' => 0,
			'ip_address' => '92.241.182.25',
			'year' => '2010',
			'month' => 10,
			'day' => 4,
			'hour' => 11,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '2',
			'continent_code' => 'AS',
			'country_code' => 'RU',
			'country' => 'Russian Federation',
			'city' => 'Unknown',
			'created' => '2010-10-04 11:34:52'
		),
		array(
			'id' => '4ca9adcf-9078-4722-a0fd-1a455fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '6',
			'user_id' => 0,
			'ip_address' => '92.241.182.25',
			'year' => '2010',
			'month' => 10,
			'day' => 4,
			'hour' => 11,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '2',
			'continent_code' => 'AS',
			'country_code' => 'RU',
			'country' => 'Russian Federation',
			'city' => 'Unknown',
			'created' => '2010-10-04 11:34:55'
		),
		array(
			'id' => '4ca9add9-3e34-47e6-9e10-1ae95fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '5',
			'user_id' => 0,
			'ip_address' => '92.241.182.25',
			'year' => '2010',
			'month' => 10,
			'day' => 4,
			'hour' => 11,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '2',
			'continent_code' => 'AS',
			'country_code' => 'RU',
			'country' => 'Russian Federation',
			'city' => 'Unknown',
			'created' => '2010-10-04 11:35:05'
		),
		array(
			'id' => '4ca9adeb-c078-4f71-b4be-1c5d5fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '4',
			'user_id' => 0,
			'ip_address' => '92.241.182.25',
			'year' => '2010',
			'month' => 10,
			'day' => 4,
			'hour' => 11,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '2',
			'continent_code' => 'AS',
			'country_code' => 'RU',
			'country' => 'Russian Federation',
			'city' => 'Unknown',
			'created' => '2010-10-04 11:35:23'
		),
		array(
			'id' => '4ca9ae02-a9e8-4629-a13c-1cef5fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '3',
			'user_id' => 0,
			'ip_address' => '92.241.182.25',
			'year' => '2010',
			'month' => 10,
			'day' => 4,
			'hour' => 11,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '2',
			'continent_code' => 'AS',
			'country_code' => 'RU',
			'country' => 'Russian Federation',
			'city' => 'Unknown',
			'created' => '2010-10-04 11:35:46'
		),
		array(
			'id' => '4ca9ae1c-7b54-42fc-97b2-1dcf5fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '2',
			'user_id' => 0,
			'ip_address' => '92.241.182.25',
			'year' => '2010',
			'month' => 10,
			'day' => 4,
			'hour' => 11,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '2',
			'continent_code' => 'AS',
			'country_code' => 'RU',
			'country' => 'Russian Federation',
			'city' => 'Unknown',
			'created' => '2010-10-04 11:36:12'
		),
		array(
			'id' => '4ca9ae20-f9f8-4d52-bd94-1de45fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '1',
			'user_id' => 0,
			'ip_address' => '92.241.182.25',
			'year' => '2010',
			'month' => 10,
			'day' => 4,
			'hour' => 11,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '2',
			'continent_code' => 'AS',
			'country_code' => 'RU',
			'country' => 'Russian Federation',
			'city' => 'Unknown',
			'created' => '2010-10-04 11:36:16'
		),
		array(
			'id' => '4ca9ae51-d2f8-42bc-8f15-1f745fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '3',
			'user_id' => 0,
			'ip_address' => '92.241.182.25',
			'year' => '2010',
			'month' => 10,
			'day' => 4,
			'hour' => 11,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '2',
			'continent_code' => 'AS',
			'country_code' => 'RU',
			'country' => 'Russian Federation',
			'city' => 'Unknown',
			'created' => '2010-10-04 11:37:05'
		),
		array(
			'id' => '4ca9ae55-f75c-4ab7-9379-1f7b5fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '6',
			'user_id' => 0,
			'ip_address' => '92.241.182.25',
			'year' => '2010',
			'month' => 10,
			'day' => 4,
			'hour' => 11,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '2',
			'continent_code' => 'AS',
			'country_code' => 'RU',
			'country' => 'Russian Federation',
			'city' => 'Unknown',
			'created' => '2010-10-04 11:37:09'
		),
		array(
			'id' => '4ca9ae62-7d70-49e5-8521-1fb05fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '1',
			'user_id' => 0,
			'ip_address' => '92.241.182.25',
			'year' => '2010',
			'month' => 10,
			'day' => 4,
			'hour' => 11,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '2',
			'continent_code' => 'AS',
			'country_code' => 'RU',
			'country' => 'Russian Federation',
			'city' => 'Unknown',
			'created' => '2010-10-04 11:37:22'
		),
		array(
			'id' => '4ca9ae6f-73d0-4343-94b4-201a5fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '5',
			'user_id' => 0,
			'ip_address' => '92.241.182.25',
			'year' => '2010',
			'month' => 10,
			'day' => 4,
			'hour' => 11,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '2',
			'continent_code' => 'AS',
			'country_code' => 'RU',
			'country' => 'Russian Federation',
			'city' => 'Unknown',
			'created' => '2010-10-04 11:37:35'
		),
		array(
			'id' => '4ca9dd2e-b7ec-47b1-9572-73eb5fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '5',
			'user_id' => 0,
			'ip_address' => '66.249.66.39',
			'year' => '2010',
			'month' => 10,
			'day' => 4,
			'hour' => 14,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '2',
			'continent_code' => 'NA',
			'country_code' => 'US',
			'country' => 'United States',
			'city' => 'Mountain View',
			'created' => '2010-10-04 14:57:02'
		),
		array(
			'id' => '4ca9f6b8-2c64-4a39-8a63-65505fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '2',
			'user_id' => 0,
			'ip_address' => '66.249.66.39',
			'year' => '2010',
			'month' => 10,
			'day' => 4,
			'hour' => 16,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '2',
			'continent_code' => 'NA',
			'country_code' => 'US',
			'country' => 'United States',
			'city' => 'Mountain View',
			'created' => '2010-10-04 16:46:00'
		),
		array(
			'id' => '4caa19ee-ca10-438c-bafb-20b85fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '2',
			'user_id' => 0,
			'ip_address' => '81.36.139.215',
			'year' => '2010',
			'month' => 10,
			'day' => 4,
			'hour' => 19,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '2',
			'continent_code' => 'EU',
			'country_code' => 'ES',
			'country' => 'Spain',
			'city' => 'Alicante',
			'created' => '2010-10-04 19:16:14'
		),
		array(
			'id' => '4caa19f1-c9e0-4667-9811-20d95fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '3',
			'user_id' => 0,
			'ip_address' => '81.36.139.215',
			'year' => '2010',
			'month' => 10,
			'day' => 4,
			'hour' => 19,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '2',
			'continent_code' => 'EU',
			'country_code' => 'ES',
			'country' => 'Spain',
			'city' => 'Alicante',
			'created' => '2010-10-04 19:16:17'
		),
		array(
			'id' => '4caa19f3-1030-4ad8-bd3f-20f75fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '4',
			'user_id' => 0,
			'ip_address' => '81.36.139.215',
			'year' => '2010',
			'month' => 10,
			'day' => 4,
			'hour' => 19,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '2',
			'continent_code' => 'EU',
			'country_code' => 'ES',
			'country' => 'Spain',
			'city' => 'Alicante',
			'created' => '2010-10-04 19:16:19'
		),
		array(
			'id' => '4caa19f5-f3a4-4c67-8066-21005fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '7',
			'user_id' => 0,
			'ip_address' => '81.36.139.215',
			'year' => '2010',
			'month' => 10,
			'day' => 4,
			'hour' => 19,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '2',
			'continent_code' => 'EU',
			'country_code' => 'ES',
			'country' => 'Spain',
			'city' => 'Alicante',
			'created' => '2010-10-04 19:16:21'
		),
		array(
			'id' => '4caa19f7-1be4-4399-bf83-21115fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '8',
			'user_id' => 0,
			'ip_address' => '81.36.139.215',
			'year' => '2010',
			'month' => 10,
			'day' => 4,
			'hour' => 19,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '2',
			'continent_code' => 'EU',
			'country_code' => 'ES',
			'country' => 'Spain',
			'city' => 'Alicante',
			'created' => '2010-10-04 19:16:23'
		),
		array(
			'id' => '4caa19fa-30ac-425d-9ccd-21225fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '5',
			'user_id' => 0,
			'ip_address' => '81.36.139.215',
			'year' => '2010',
			'month' => 10,
			'day' => 4,
			'hour' => 19,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '2',
			'continent_code' => 'EU',
			'country_code' => 'ES',
			'country' => 'Spain',
			'city' => 'Alicante',
			'created' => '2010-10-04 19:16:26'
		),
		array(
			'id' => '4caa19fb-42e4-4b7a-b6fa-21405fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '1',
			'user_id' => 0,
			'ip_address' => '81.36.139.215',
			'year' => '2010',
			'month' => 10,
			'day' => 4,
			'hour' => 19,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '2',
			'continent_code' => 'EU',
			'country_code' => 'ES',
			'country' => 'Spain',
			'city' => 'Alicante',
			'created' => '2010-10-04 19:16:27'
		),
		array(
			'id' => '4caa19fe-3cd4-4e5c-973b-21575fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '3',
			'user_id' => 0,
			'ip_address' => '81.36.139.215',
			'year' => '2010',
			'month' => 10,
			'day' => 4,
			'hour' => 19,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '2',
			'continent_code' => 'EU',
			'country_code' => 'ES',
			'country' => 'Spain',
			'city' => 'Alicante',
			'created' => '2010-10-04 19:16:30'
		),
		array(
			'id' => '4caa1a00-3158-436e-9d27-21635fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '5',
			'user_id' => 0,
			'ip_address' => '81.36.139.215',
			'year' => '2010',
			'month' => 10,
			'day' => 4,
			'hour' => 19,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '2',
			'continent_code' => 'EU',
			'country_code' => 'ES',
			'country' => 'Spain',
			'city' => 'Alicante',
			'created' => '2010-10-04 19:16:32'
		),
		array(
			'id' => '4caa2b2e-1330-4223-8463-2b915fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '3',
			'user_id' => 0,
			'ip_address' => '66.249.66.39',
			'year' => '2010',
			'month' => 10,
			'day' => 4,
			'hour' => 20,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '2',
			'continent_code' => 'NA',
			'country_code' => 'US',
			'country' => 'United States',
			'city' => 'Mountain View',
			'created' => '2010-10-04 20:29:50'
		),
		array(
			'id' => '4caa2d03-d214-460a-a855-3a925fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '8',
			'user_id' => 0,
			'ip_address' => '213.46.28.72',
			'year' => '2010',
			'month' => 10,
			'day' => 4,
			'hour' => 20,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '2',
			'continent_code' => 'EU',
			'country_code' => 'NL',
			'country' => 'Netherlands',
			'city' => 'Wageningen',
			'created' => '2010-10-04 20:37:39'
		),
		array(
			'id' => '4caa2d27-290c-4b7a-990b-3b9b5fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '8',
			'user_id' => 0,
			'ip_address' => '213.46.28.72',
			'year' => '2010',
			'month' => 10,
			'day' => 4,
			'hour' => 20,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '2',
			'continent_code' => 'EU',
			'country_code' => 'NL',
			'country' => 'Netherlands',
			'city' => 'Wageningen',
			'created' => '2010-10-04 20:38:15'
		),
		array(
			'id' => '4caa4ee5-83e4-49e9-b976-24c15fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '3',
			'user_id' => 0,
			'ip_address' => '66.249.66.39',
			'year' => '2010',
			'month' => 10,
			'day' => 4,
			'hour' => 23,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '2',
			'continent_code' => 'NA',
			'country_code' => 'US',
			'country' => 'United States',
			'city' => 'Mountain View',
			'created' => '2010-10-04 23:02:13'
		),
		array(
			'id' => '4caa5d9e-9340-4f9b-a2db-74535fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '8',
			'user_id' => 0,
			'ip_address' => '86.3.112.44',
			'year' => '2010',
			'month' => 10,
			'day' => 5,
			'hour' => 0,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '3',
			'continent_code' => 'EU',
			'country_code' => 'GB',
			'country' => 'United Kingdom',
			'city' => 'Walton',
			'created' => '2010-10-05 00:05:02'
		),
		array(
			'id' => '4caa5e57-f950-4ed3-9eee-78885fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '8',
			'user_id' => 0,
			'ip_address' => '92.241.182.24',
			'year' => '2010',
			'month' => 10,
			'day' => 5,
			'hour' => 0,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '3',
			'continent_code' => 'AS',
			'country_code' => 'RU',
			'country' => 'Russian Federation',
			'city' => 'Unknown',
			'created' => '2010-10-05 00:08:07'
		),
		array(
			'id' => '4caa5e63-c30c-4bbe-8049-78c35fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '7',
			'user_id' => 0,
			'ip_address' => '92.241.182.24',
			'year' => '2010',
			'month' => 10,
			'day' => 5,
			'hour' => 0,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '3',
			'continent_code' => 'AS',
			'country_code' => 'RU',
			'country' => 'Russian Federation',
			'city' => 'Unknown',
			'created' => '2010-10-05 00:08:19'
		),
		array(
			'id' => '4caa5e67-76ec-4876-878b-78d85fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '6',
			'user_id' => 0,
			'ip_address' => '92.241.182.24',
			'year' => '2010',
			'month' => 10,
			'day' => 5,
			'hour' => 0,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '3',
			'continent_code' => 'AS',
			'country_code' => 'RU',
			'country' => 'Russian Federation',
			'city' => 'Unknown',
			'created' => '2010-10-05 00:08:23'
		),
		array(
			'id' => '4caa5e79-1508-4ae7-843a-78f65fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '5',
			'user_id' => 0,
			'ip_address' => '92.241.182.24',
			'year' => '2010',
			'month' => 10,
			'day' => 5,
			'hour' => 0,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '3',
			'continent_code' => 'AS',
			'country_code' => 'RU',
			'country' => 'Russian Federation',
			'city' => 'Unknown',
			'created' => '2010-10-05 00:08:41'
		),
		array(
			'id' => '4caa5e83-6ac4-402f-8520-79255fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '4',
			'user_id' => 0,
			'ip_address' => '92.241.182.24',
			'year' => '2010',
			'month' => 10,
			'day' => 5,
			'hour' => 0,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '3',
			'continent_code' => 'AS',
			'country_code' => 'RU',
			'country' => 'Russian Federation',
			'city' => 'Unknown',
			'created' => '2010-10-05 00:08:51'
		),
		array(
			'id' => '4caa5e8f-cbe0-4c7a-a30e-79575fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '3',
			'user_id' => 0,
			'ip_address' => '92.241.182.24',
			'year' => '2010',
			'month' => 10,
			'day' => 5,
			'hour' => 0,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '3',
			'continent_code' => 'AS',
			'country_code' => 'RU',
			'country' => 'Russian Federation',
			'city' => 'Unknown',
			'created' => '2010-10-05 00:09:03'
		),
		array(
			'id' => '4caa5e98-f840-4904-8e99-79635fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '2',
			'user_id' => 0,
			'ip_address' => '92.241.182.24',
			'year' => '2010',
			'month' => 10,
			'day' => 5,
			'hour' => 0,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '3',
			'continent_code' => 'AS',
			'country_code' => 'RU',
			'country' => 'Russian Federation',
			'city' => 'Unknown',
			'created' => '2010-10-05 00:09:12'
		),
		array(
			'id' => '4caa5e9c-bec4-41ba-83f3-79745fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '1',
			'user_id' => 0,
			'ip_address' => '92.241.182.24',
			'year' => '2010',
			'month' => 10,
			'day' => 5,
			'hour' => 0,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '3',
			'continent_code' => 'AS',
			'country_code' => 'RU',
			'country' => 'Russian Federation',
			'city' => 'Unknown',
			'created' => '2010-10-05 00:09:16'
		),
		array(
			'id' => '4caa5eb3-6cd0-49bf-8f4f-79a85fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '3',
			'user_id' => 0,
			'ip_address' => '92.241.182.24',
			'year' => '2010',
			'month' => 10,
			'day' => 5,
			'hour' => 0,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '3',
			'continent_code' => 'AS',
			'country_code' => 'RU',
			'country' => 'Russian Federation',
			'city' => 'Unknown',
			'created' => '2010-10-05 00:09:39'
		),
		array(
			'id' => '4caa5eba-dfe0-4805-ae67-79b05fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '6',
			'user_id' => 0,
			'ip_address' => '92.241.182.24',
			'year' => '2010',
			'month' => 10,
			'day' => 5,
			'hour' => 0,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '3',
			'continent_code' => 'AS',
			'country_code' => 'RU',
			'country' => 'Russian Federation',
			'city' => 'Unknown',
			'created' => '2010-10-05 00:09:46'
		),
		array(
			'id' => '4caa5ebe-6f34-4db8-8fd9-79c15fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '1',
			'user_id' => 0,
			'ip_address' => '92.241.182.24',
			'year' => '2010',
			'month' => 10,
			'day' => 5,
			'hour' => 0,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '3',
			'continent_code' => 'AS',
			'country_code' => 'RU',
			'country' => 'Russian Federation',
			'city' => 'Unknown',
			'created' => '2010-10-05 00:09:50'
		),
		array(
			'id' => '4caa5ec2-9550-478d-be2d-79c85fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '5',
			'user_id' => 0,
			'ip_address' => '92.241.182.24',
			'year' => '2010',
			'month' => 10,
			'day' => 5,
			'hour' => 0,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '3',
			'continent_code' => 'AS',
			'country_code' => 'RU',
			'country' => 'Russian Federation',
			'city' => 'Unknown',
			'created' => '2010-10-05 00:09:54'
		),
		array(
			'id' => '4caa60ec-23e0-4315-90b1-055e5fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '3',
			'user_id' => 0,
			'ip_address' => '66.249.66.39',
			'year' => '2010',
			'month' => 10,
			'day' => 5,
			'hour' => 0,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '3',
			'continent_code' => 'NA',
			'country_code' => 'US',
			'country' => 'United States',
			'city' => 'Mountain View',
			'created' => '2010-10-05 00:19:08'
		),
		array(
			'id' => '4caa87de-a454-4cc0-87e8-394a5fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '3',
			'user_id' => 0,
			'ip_address' => '66.249.66.39',
			'year' => '2010',
			'month' => 10,
			'day' => 5,
			'hour' => 3,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '3',
			'continent_code' => 'NA',
			'country_code' => 'US',
			'country' => 'United States',
			'city' => 'Mountain View',
			'created' => '2010-10-05 03:05:18'
		),
		array(
			'id' => '4caabc98-036c-4f0d-8a06-45ef5fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '6',
			'user_id' => 0,
			'ip_address' => '66.249.66.39',
			'year' => '2010',
			'month' => 10,
			'day' => 5,
			'hour' => 6,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '3',
			'continent_code' => 'NA',
			'country_code' => 'US',
			'country' => 'United States',
			'city' => 'Mountain View',
			'created' => '2010-10-05 06:50:16'
		),
		array(
			'id' => '4caac430-8b30-4b96-af46-20875fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '8',
			'user_id' => 0,
			'ip_address' => '66.249.66.39',
			'year' => '2010',
			'month' => 10,
			'day' => 5,
			'hour' => 7,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '3',
			'continent_code' => 'NA',
			'country_code' => 'US',
			'country' => 'United States',
			'city' => 'Mountain View',
			'created' => '2010-10-05 07:22:40'
		),
		array(
			'id' => '4caac751-64a0-4a0d-8cfb-30585fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '1',
			'user_id' => 0,
			'ip_address' => '67.195.115.169',
			'year' => '2010',
			'month' => 10,
			'day' => 5,
			'hour' => 7,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '3',
			'continent_code' => 'NA',
			'country_code' => 'US',
			'country' => 'United States',
			'city' => 'Sunnyvale',
			'created' => '2010-10-05 07:36:01'
		),
		array(
			'id' => '4caac792-cbc0-494a-9fe5-316d5fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '8',
			'user_id' => 0,
			'ip_address' => '67.195.115.169',
			'year' => '2010',
			'month' => 10,
			'day' => 5,
			'hour' => 7,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '3',
			'continent_code' => 'NA',
			'country_code' => 'US',
			'country' => 'United States',
			'city' => 'Sunnyvale',
			'created' => '2010-10-05 07:37:06'
		),
		array(
			'id' => '4caac79b-ed38-4abf-97fb-31865fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '3',
			'user_id' => 0,
			'ip_address' => '67.195.115.169',
			'year' => '2010',
			'month' => 10,
			'day' => 5,
			'hour' => 7,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '3',
			'continent_code' => 'NA',
			'country_code' => 'US',
			'country' => 'United States',
			'city' => 'Sunnyvale',
			'created' => '2010-10-05 07:37:15'
		),
		array(
			'id' => '4caac7f6-52e0-4cd9-bb21-33865fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '6',
			'user_id' => 0,
			'ip_address' => '67.195.115.169',
			'year' => '2010',
			'month' => 10,
			'day' => 5,
			'hour' => 7,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '3',
			'continent_code' => 'NA',
			'country_code' => 'US',
			'country' => 'United States',
			'city' => 'Sunnyvale',
			'created' => '2010-10-05 07:38:46'
		),
		array(
			'id' => '4caac82a-62d0-4459-83d2-341f5fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '5',
			'user_id' => 0,
			'ip_address' => '67.195.115.169',
			'year' => '2010',
			'month' => 10,
			'day' => 5,
			'hour' => 7,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '3',
			'continent_code' => 'NA',
			'country_code' => 'US',
			'country' => 'United States',
			'city' => 'Sunnyvale',
			'created' => '2010-10-05 07:39:38'
		),
		array(
			'id' => '4caac8ab-e4d4-4e91-9b62-36dc5fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '1',
			'user_id' => 0,
			'ip_address' => '67.195.115.169',
			'year' => '2010',
			'month' => 10,
			'day' => 5,
			'hour' => 7,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '3',
			'continent_code' => 'NA',
			'country_code' => 'US',
			'country' => 'United States',
			'city' => 'Sunnyvale',
			'created' => '2010-10-05 07:41:47'
		),
		array(
			'id' => '4caac96c-0f78-403e-b1b7-3a245fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '4',
			'user_id' => 0,
			'ip_address' => '67.195.115.169',
			'year' => '2010',
			'month' => 10,
			'day' => 5,
			'hour' => 7,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '3',
			'continent_code' => 'NA',
			'country_code' => 'US',
			'country' => 'United States',
			'city' => 'Sunnyvale',
			'created' => '2010-10-05 07:45:00'
		),
		array(
			'id' => '4caaef48-1d58-49df-916b-49dd5fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '7',
			'user_id' => 0,
			'ip_address' => '67.195.115.169',
			'year' => '2010',
			'month' => 10,
			'day' => 5,
			'hour' => 10,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '3',
			'continent_code' => 'NA',
			'country_code' => 'US',
			'country' => 'United States',
			'city' => 'Sunnyvale',
			'created' => '2010-10-05 10:26:32'
		),
		array(
			'id' => '4cab0ecc-312c-4dec-8f5a-67905fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '2',
			'user_id' => 0,
			'ip_address' => '80.57.152.117',
			'year' => '2010',
			'month' => 10,
			'day' => 5,
			'hour' => 12,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '3',
			'continent_code' => 'EU',
			'country_code' => 'NL',
			'country' => 'Netherlands',
			'city' => 'Haarlem',
			'created' => '2010-10-05 12:41:00'
		),
		array(
			'id' => '4cab0ece-f0bc-4863-85ff-67a25fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '3',
			'user_id' => 0,
			'ip_address' => '80.57.152.117',
			'year' => '2010',
			'month' => 10,
			'day' => 5,
			'hour' => 12,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '3',
			'continent_code' => 'EU',
			'country_code' => 'NL',
			'country' => 'Netherlands',
			'city' => 'Haarlem',
			'created' => '2010-10-05 12:41:02'
		),
		array(
			'id' => '4cab0ed0-b204-411a-9af0-67bc5fd7e115',
			'model' => 'Blog.Post',
			'foreign_key' => '4',
			'user_id' => 0,
			'ip_address' => '80.57.152.117',
			'year' => '2010',
			'month' => 10,
			'day' => 5,
			'hour' => 12,
			'week_of_year' => 40,
			'day_of_year' => 127,
			'day_of_week' => '3',
			'continent_code' => 'EU',
			'country_code' => 'NL',
			'country' => 'Netherlands',
			'city' => 'Haarlem',
			'created' => '2010-10-05 12:41:04'
		),
	);
}
?>