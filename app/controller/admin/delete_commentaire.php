<?php
$retour = deletetable ('comment',
                        array( "idcolumn" => "comment_id",
                                "idvalue" => $_GET["id"]));

if ($retour) {
    location("admin", "index", "&notif=ok");
}
else {
    location("admin", "index", "&notif=nok");
}
