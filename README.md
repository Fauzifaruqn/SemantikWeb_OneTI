# OneTI
One TI merupakan website yang berfungsi untuk melakukan pencarian smartphone android berbasiskan semantik web menggunakan Codeigniter dan Fuseki Jena 

## Features:
- Pencarian smartphone berdasarkan budget yang dimiliki
- Pencarian smartphone berdasarkan merek

## Setting up on your locals
Follow these steps to run this Project on your local computer

Prerequisites:
1. Install composer client in your machine
2. Open terminal/cmd, cd to this project, then type `composer update`. This will download dependencies that requires.

### Using with fuseki
You can use fuseki as your Sparql server. Start the fuseki server, 
Try this code
```php
$fuseki_server = "http://localhost:3030"; // change this to your fuseki server address
$fuseki_sparql_db = "database"; // change this to your fuseki Sparql database
$endpoint = $fuseki_server."/".$fuseki_sparql_db."/query";

$sc = new BorderCloud\SPARQL\SparqlClient();
$sc->setEndpointRead($endpoint);
$q = "SELECT ?sub ?pred ?obj WHERE { ?sub ?pred ?obj } LIMIT 10";

$rows = $sc->query($q, 'rows');
$err = $sc->getErrors();
if ($err) {
  print_r($err);
  throw new Exception(print_r($err, true));
}

foreach ($rows["result"]["variables"] as $variable) {
  printf("%s", $variable);
  echo '|';
}
echo "\n";

foreach ($rows["result"]["rows"] as $row) {
  foreach ($rows["result"]["variables"] as $variable) {
    printf("%s", $row[$variable]);
    echo '|';
  }
  echo "\n";
}
``` 

## About
**Fauzi Faruq Nabbani** - 140810160007 - [Fauzifaruqn](https://github.com/Fauzifaruqn)

**Muhammad Raihan Akbar** - 140810160013 - [RaihanAk](https://github.com/RaihanAk)

**Muhammad Rifqy Aulia Akbar** - 140810160055 - [Rifqy7x](https://github.com/Rifqy7x)

Final term project Semantic Web.
