<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_1ti extends CI_Model {
  
    
  public function __construct()
  {
    parent::__construct();
    // Your own constructor code
  }

  public function test_sparql (){
    $fuseki_server = "http://localhost:3030"; // change this to your fuseki server address
    $fuseki_sparql_db = "Semweb-1TI"; // change this to your fuseki Sparql database
    $endpoint = $fuseki_server."/".$fuseki_sparql_db."/query";; 

		$sc = new BorderCloud\SPARQL\SparqlClient();
		$sc->setEndpointRead($endpoint);
		$sc->setMethodHTTPRead("GET");
		$q = "PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
          PREFIX owl: <http://www.w3.org/2002/07/owl#>
          PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
          PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
          PREFIX data: <http://www.semanticweb.org/1-ti#>
          
          SELECT ?name ?price ?bat ?main ?selfie ?cpu ?rom ?ram ?avb
            WHERE { 
              ?phone data:name ?name.
              ?phone data:price ?price.
              ?phone data:battery ?bat.
              ?phone data:camera_main ?main.
              ?phone data:camera_selfie ?selfie.
              ?phone data:cpu ?cpu.
              ?phone data:memory ?rom.
              ?phone data:ram ?ram.
              ?phone data:announced ?avb.
            }
            order by asc(str(?name))" ;

		$rows = $sc->query($q, 'rows');
		$err = $sc->getErrors();
		if ($err) {
			print_r($err);
			throw new Exception(print_r($err, true));
		}
    
    $header = array();
		foreach ($rows["result"]["variables"] as $variable) {
      $header[] = $variable;
		}
    
    $data = array();
		foreach ($rows["result"]["rows"] as $row) {
      
      $data[] = $row;
			// foreach ($rows["result"]["variables"] as $variable) {
        
      //   if (($tmp = strstr($row[$variable], '#')) !== false) {
      //     echo $str = substr($tmp, 1);
      //   }
      //   else
      //     echo $row[$variable];
      // }
    }
    $result["header"] = $header;
    $result["datas"] = $data;

    return $result;
  }


  public function range_test ($angka){
    $fuseki_server = "http://localhost:3030"; // change this to your fuseki server address
    $fuseki_sparql_db = "Semweb-1TI"; // change this to your fuseki Sparql database
    $endpoint = $fuseki_server."/".$fuseki_sparql_db."/query";; 

		$sc = new BorderCloud\SPARQL\SparqlClient();
		$sc->setEndpointRead($endpoint);
		$sc->setMethodHTTPRead("GET");
		$q = "PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
          PREFIX owl: <http://www.w3.org/2002/07/owl#>
          PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
          PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
          PREFIX data: <http://www.semanticweb.org/1-ti#>
          
          SELECT ?name ?price ?bat ?main ?selfie ?cpu ?rom ?ram ?avb
            WHERE { 
              ?phone data:name ?name.
              ?phone data:price ?price.
              ?phone data:battery ?bat.
              ?phone data:camera_main ?main.
              ?phone data:camera_selfie ?selfie.
              ?phone data:cpu ?cpu.
              ?phone data:memory ?rom.
              ?phone data:ram ?ram.
              ?phone data:announced ?avb.
            }
            order by asc(str(?name))" ;
		$rows = $sc->query($q, 'rows');
		$err = $sc->getErrors();
		if ($err) {
			print_r($err);
			throw new Exception(print_r($err, true));
		}
    
    $header = array();
		foreach ($rows["result"]["variables"] as $variable) {
      $header[] = $variable;
		}
    
    $data = array();
		foreach ($rows["result"]["rows"] as $row) {
      $data[] = $row;
    }
    $result["header"] = $header;
    $result["datas"] = $rows["result"]["rows"];

    // Filter data result's price ONLY if >= 5.000.000
    $filteredDatas = array();
    foreach($result["datas"] as $element):

      // Kalo String
      //$intPrice = substr($element['price'], 2, -4);
      //$intPrice = (int)str_replace(".", "", $intPrice);
      $intPrice = (int)$element["price"];
      
      if ($intPrice <= $angka){
        $filteredDatas[] = $element; 
      }
    endforeach;

    $result["datas"] = $filteredDatas;
    $result["angkaBudget"] = $angka;

    return $result;
  }


  public function filter_brand ($brand){
    $fuseki_server = "http://localhost:3030"; // change this to your fuseki server address
    $fuseki_sparql_db = "Semweb-1TI"; // change this to your fuseki Sparql database
    $endpoint = $fuseki_server."/".$fuseki_sparql_db."/query";; 

    

		$sc = new BorderCloud\SPARQL\SparqlClient();
		$sc->setEndpointRead($endpoint);
		$sc->setMethodHTTPRead("GET");
		$q = "PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
          PREFIX owl: <http://www.w3.org/2002/07/owl#>
          PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
          PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
          PREFIX data: <http://www.semanticweb.org/1-ti#>
          
          SELECT ?name ?price ?bat ?main ?selfie ?cpu ?rom ?ram ?avb
            WHERE { 
              ?phone data:name ?name.
              ?phone data:price ?price.
              ?phone data:battery ?bat.
              ?phone data:camera_main ?main.
              ?phone data:camera_selfie ?selfie.
              ?phone data:cpu ?cpu.
              ?phone data:memory ?rom.
              ?phone data:ram ?ram.
              ?phone data:announced ?avb.
              FILTER regex (?name, '$brand').
            }
            order by asc(str(?name))" ;

		$rows = $sc->query($q, 'rows');
		$err = $sc->getErrors();
		if ($err) {
			print_r($err);
			throw new Exception(print_r($err, true));
		}
    
    $header = array();
		foreach ($rows["result"]["variables"] as $variable) {
      $header[] = $variable;
		}
    
    $data = array();
		foreach ($rows["result"]["rows"] as $row) {
      $data[] = $row;
    }
    $result["header"] = $header;
    $result["datas"] = $data;

    $result["brand"] = substr($brand, 1);

    return $result;
  }

}
