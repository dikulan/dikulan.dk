<?php
require_once("../config/database.php");
require_once("../dkulib/time.php");
require_once("../dkulib/markdown.php");

class News {
  public function show($id) {
    $regexp = "/^(?P<id>\d+)-(?P<slug>.+)/";
    $matches = array();

    $count = preg_match($regexp, $id, $matches);

    if ($count == 1) {
      $dbh = new PDO(DatabaseConfig::$connectionstring);

      $sql = "SELECT * FROM news WHERE id = :id ORDER BY id DESC LIMIT 1;";
      $query = $dbh->prepare($sql);
      $query->execute(array(":id" => $matches["id"]));

      $result = $query->fetchAll();

      $row = $result[0];
      
      echo HSHTPL::template("newspost", array("id" => $row["id"],
                                              "slug" => $row["slug"],
                                              "title" => $row["title"],
                                              "timestamp" => Time::relative_time($row["timestamp"]),
                                              "content" => Markdown($row["content"])));
    } else {
      header("Location: /404");
      exit();
    }
  }
}
?>