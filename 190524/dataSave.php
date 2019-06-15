<?php
	class FileInfo{
		public $fn,$kw;

		public function __construct($fn,$kw)
		{
			$this->fn = $fn;
			$this->kw = $kw;
		}

		public function saveInfo(){
			$myfile=fopen("data.txt","a+") or die("Can't open File");
			$txt = "{$this->fileName}\n{$this->keyWord}\n";
			fwrite($myfile,$txt);

			echo "Saved";
			fclose($myfile);
		}
	}

	$object = new FileInfo($_POST['fileName'],$_POST['keyWord']);
	$object->saveInfo();
?>
