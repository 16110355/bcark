<?php
error_reporting(0);
function biodata($ambilNama,$ambilUmur)
{	
	class School
	{
	    public $name;
	    public $year_in;
	    public $year_out;
	    public $major;
	}
	class Skill
	{
	    public $skill_name ;
	    public $level ;
	}

	$sd = new School();
	$sd->name = 'SDN 2 Mangkujayan';
	$sd->year_in = '2004';
	$sd->year_out = '2010';
	$sd->major = 'NULL';

	$smp = new School();
	$smp->name = 'SMPN 6 Ponorogo';
	$smp->year_in = '2010';
	$smp->year_out = '2013';
	$smp->major = 'NULL';

	$sma = new School();
	$sma->name = 'SMKN 1 Ponorogo';
	$sma->year_in = '2013';
	$sma->year_out = '2016';
	$sma->major = 'NULL';

	$kuliah = new School();
	$kuliah->name = 'Universitas Amikom Yogyakarta';
	$kuliah->year_in = '2016';
	$kuliah->year_out = '2020';
	$kuliah->major = 'Sarjana Komputer';

	$sekolah = array($sd, $smp,$sma,$kuliah);

	
	$html = new Skill();
	$html->skill_name = 'HTML';
	$html->level = 'advanced';

	$php = new Skill();
	$php->skill_name = 'PHP';
	$php->level = 'advanced';

	$mysql = new Skill();
	$mysql->skill_name = 'MYSQL';
	$mysql->level = 'advanced';

	$javascript = new Skill();
	$javascript->skill_name = 'Javascript';
	$javascript->level = 'beginer';

	$skill = array($html, $php,$mysql,$javascript);

	$nama = $ambilNama;
	$umur = $ambilUmur;
	$address = "Jalan nangka 23 Condong catur , Depok, Sleman, Yogyakarta";
	$hobbies = array("Youtube","Game","Social Media");
	$married = FALSE;
	$interest_in_coding = TRUE;

 
	$biodata->name = $nama;
	$biodata->age = $umur;
	$biodata->address  = $address;
	$biodata->hobbies  = $hobbies;
	$biodata->is_married   = $married;
	$biodata->list_school    = $sekolah;
	$biodata->skills     = $skill;
	$biodata->interest_in_coding      = $interest_in_coding;




// encode array to json
	$json = json_encode($biodata);
	echo $json;
// write json to file
	/*if (file_put_contents("biodata.json", $json)){
	    echo "File JSON sukses dibuat...";
	} else {
	    echo "Oops! Terjadi error saat membuat file JSON...";
	}*/
}

echo biodata("willy wijaya",22);
?>