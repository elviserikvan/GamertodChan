<?php  
	/**
	* This class helps us to check the images
	*/
	class Image
	{
		public $img;
		public $img_name;
		public $img_size;
		public $img_original_name;
		public $img_dimensions;

		protected $passed;
		protected $file_ext;

		function __construct()
		{
			$this->file_ext = [];
		}

		// This functions check the images for erros and if there's one, throws a new Exception
		public function checkImg()
		{

			if (isset($this->img) && !empty($this->img)) {			
			
				if (preg_match('/(jpe?g|png|gif|webm)/i', $this->img['type'], $this->file_ext)) {

					 if ($this->img['size'] > 0) {
					 	

					 	/* 
					 		1.000.000 bytes == 1Mb
							12.000.000 bytes == 12Mb
					 	 */
					 	if ($this->img['size'] < 12000000) {
					 		
						 	if (strlen($this->img['name']) < 90) {
						 		if ($this->img['error'] == 0) {
						 			$this->passed = true;
						 		}else {
						 			throw new Exception("Ocurrio un error subiendo la imagen, por favor, intente de nuevo. Si este error persiste pongase en contacto con el administrador de esta pagina", 12);
						 		}
						 	}else {
						 		throw new Exception("El nombre de la imagen es demasiado grande", 1);
						 	}
					 	}else {
					 		throw new Exception("La imagen es demasiado grande", 10);
					 	}

					 }else {
					 	throw new Exception('El archivo puede estar corrupto, por favor, selecione otra imagen', 7);
					 }
				}else {
					throw new Exception("El archivo selecionado no es una imagen", 6);
				}
			}else {
				throw new Exception("Tienes que selecionar una imagen", 9);
			}
		}


		// This functions moves the image to a specific folder on the server
		public function uploadImage()
		{
			if ($this->passed) {

				// Generate a random name
				$random = sha1(time());
				$name = $random . '.' . $this->file_ext[0];

				// Data from the picture
				$img_data = getimagesize($this->img['tmp_name']);

				// Export the data of the picture out of the class
				$this->img_name = $name;
				$this->img_size = $this->img['size'];
				$this->img_original_name = $this->img['name'];
				$this->img_dimensions = $img_data[0] . 'x' . $img_data[1];

				// Move to the UPLOAD_IMG_DIR folder
				move_uploaded_file($this->img['tmp_name'], UPLOAD_IMG_DIR . $name);		
			}else {
				throw new Exception("Ocurrio un error subiendo la imagen, por favor, intente de nuevo. Si este error persiste pongase en contacto con el administrador de esta pagina", 12);

			}
		}
	}
?>