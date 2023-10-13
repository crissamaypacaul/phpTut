
<?php
//array
$bestFriends = ['Jana', 'Reese', 'Christian', 'JK', 'Dem', 'Gab'];
//to append additional values in array
$bestFriends [6] = 'Henry'; 

echo "My buddies are ".$bestFriends[1]. " and " .$bestFriends[6]. " :) <br><br>";

//for each is use to cycle through each item in the array...
foreach ($bestFriends as $bestFriend) {
	echo  $bestFriend . ' ' ;

}