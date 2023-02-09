  <?php
    /**
     * config.php
     * @author Espero-Soft Informatique
     * Site Web : espero-soft.com
     */

    define("DB_USER","dbu195981");
    define("DB_PASSWORD","Alieska1972.");
    define("HOST", "db5006961292.hosting-data.io");
    define("DB_NAME", "dbs5747997");

    $METHODES = [
      "get"=>["description"=>"Lire les données","prefixe"=>"get" ],
      "post"=>["description"=>"Créer une donnée","prefixe"=>"create" ],
      "put"=>["description"=>"Mettre à jour une donnée","prefixe"=>"update" ],
      "delete"=>["description"=>"Supprimer une donnée", "prefixe"=>"delete"],
       
    ];

    $_ROUTES = ["products", "category", "orders","users"];

?>