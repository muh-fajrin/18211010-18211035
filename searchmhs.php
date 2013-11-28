<?php

$input = $_GET['tag'];
$nilai = $_GET['value'];
$xml=simplexml_load_file("progin.xml");
header("content-type: text/xml");
switch($input) {
		case null:
			// Berikan file xml kosong
			echo "kosong";
			break;
		case 'all':
			// Berikan semua data menu
			//$xml = getDomDocument();
			$xmlPath = "progin.xml";
    		$doc = new DOMDocument(); 
    		$doc->load($xmlPath); 
    		$xml = $doc; 
			// header('Content-type: text/xml');
			print $xml->saveXML();
			// return $xml;
			break;
		default:
			$xmlPath = "progin.xml";
    		$domDocument = new DOMDocument(); 
    		$domDocument->load($xmlPath); 

			$doc = new DOMDocument('1.0','UTF-8');
		    // we want a nice output
		    $doc->formatOutput = true;

		    $tag = $input;
		    $value = $nilai;
		    $root = $doc->createElement('Tabel-Mahasiswa');
		    $root = $doc->appendChild($root);
		    for ($i=0; $i<$domDocument->getElementsByTagName($tag)->length; $i++)
		    {
		        $curr = $domDocument->getElementsByTagName($tag)->item($i);  
		        if ($curr->nodeValue == $value)
		        {
		            $mhs = $doc->createElement('mahasiswa');
		            $mhs = $root->appendChild($mhs);
		            $nim = $doc->createElement('NIM');
		            $nim = $mhs->appendChild($nim);
		            $text = $doc->createTextNode($domDocument->getElementsByTagName('NIM')->item($i)->nodeValue);
		            $text = $nim->appendChild($text);
		            $nama = $doc->createElement('Nama');
		            $nama = $mhs->appendChild($nama);
		            $text = $doc->createTextNode($domDocument->getElementsByTagName('Nama')->item($i)->nodeValue);
		            $text = $nama->appendChild($text);
		            $asal = $doc->createElement('Asal');
		            $asal = $mhs->appendChild($asal);
		            $text = $doc->createTextNode($domDocument->getElementsByTagName('Asal')->item($i)->nodeValue);
		            $text = $asal->appendChild($text);
		        }
		    }
			$xml = $doc;
			print $xml->saveXML();
}

?>