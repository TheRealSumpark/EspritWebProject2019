<?php

include "../config.php";


$db=config::getConnexion();
$sql="update  social_media set Followers=:Followers where Plateforme='Instagram'  ";

$username = 'fresco.ezzahra';

$response = @file_get_contents( "https://www.instagram.com/".$username."/?__a=1" );

if ( $response !== false ) {
    $data = json_decode( $response, true );
    if ( $data !== null ) {
        $full_name = $data['graphql']['user']['full_name'];
        $follower  = $data['graphql']['user']['edge_followed_by']['count'];
        echo "{$full_name} have {$follower} followers.";

            try{
            $req=$db->prepare($sql);
            $req->bindvalue(':Followers',$follower);
            $req->execute();
            }
            catch(PDOException $e)
            {   
                echo $e->getMessage();
            }

    }

} else {
    echo 'Username not found.';

}

 











?>