<?php
	class EventTask extends AppShell {
		/**
		 * Trigger a event
		 *
		 * @param string $eventName Name of the event to trigger
		 * @param array $data Data to pass to event handler
		 * @return array:
		 */
		public function trigger($eventName, $data = array()){
			return EventCore::trigger($this, $eventName, $data);
		}

		public function pluginsWith($eventName){
			return EventCore::pluginsWith($eventName);
		}
	}