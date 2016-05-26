<?php

require_once __DIR__ . '/Model.php';

class Ads extends Model {

    protected static $table = 'ads';

    // for landing page:
    //     function to fetch 3 most recent ads
    
    function fetchThree() {
        // inner SELECT takes all, but only returns the first three in reverse order; outer SELECT then reorder those three in ascending order
        $query='SELECT * FROM 
                    (SELECT * FROM ads ORDER BY id DESC LIMIT 0 , 3) 
                    ORDER BY id ASC';
        $stmt=$dbc->query($query);
    }

    //for navbar
    //  function to search titles for keyword
    function searchByKeyword($searchTerm) {
        $searchTerm=striptags(htmlspecialchars($searchTerm));
        $query="SELECT * FROM ads WHERE description LIKE '%{$searchTerm}%'";
    }

// for items page: 
    // function to fetch all items with a limit per page
    function allWithLimit() {

    }
    
// item create page
// JOIN statement needed to attach id from user table to user_id on ads table

    

/*
for profile page:
    function get ads based on user id (do we really need a function here? user_id is already present in ads table. the JOIN statement to connect id from users table to user_id from ads table would only be needed when creating the ad, i think)

Signup page:
    nothing needed for Ads model

Login page:
    nothing needed for Ads model
*/

/*
Item edit page

*/

}
?>