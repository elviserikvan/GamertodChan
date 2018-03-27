<?php 
	/**
	* This class checks if all the new threads arguments are filled and create a new one
	*/
	class Thread
	{
		public $title;
		public $content;
		public $form_direction;
		protected $title_result;
		protected $content_result;


		public function check_title()
		{

			if ( isset($this->title)) {
				if (!empty($this->title)) {
					
					if (strlen($this->title) <= 90) {
						$this->title_result = true;
					}else {
						throw new Exception('El titulo es demasiado grande', 2);	
					}
				}else {
					throw new Exception('Tienes que escribir un titulo', 4);
				}
			}else {
				throw new Exception('Tienes que definir "title" - $object->title = [Titulo del hilo]  ', 9);
			}
		}

		public function check_content()
		{
			if (isset($this->content)) {
				if (strlen($this->content) <= 290) {
					$this->content_result = true;
				}else {
					throw new Exception('El contenido es demasiado grande', 3);		
				}
			}else {
				throw new Exception('Tienes que definir "content - $object->content = [contenido del hilo]"' , 91);
			}
		}

		public function __destruct()
		{
			if (isset($this->title)) {unset($this->title);}
			if (isset($this->content)) {unset($this->content);}
			if (isset($this->title_result)) {unset($this->title_result);}
			if (isset($this->content_result)) {unset($this->content_result);}
		}
	}
?>