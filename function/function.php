"; } writeMsg(); // call the function // ------ function familyName1($fname) { echo "$fname Refsnes.
"; } familyName1("Jani"); familyName1("Hege"); familyName1("Stale"); familyName1("Kai Jim"); familyName1("Borge"); // ------ function familyName($fname, $year) { echo "$fname Casas. Born in $year
"; } familyName("Jason", "1975"); familyName("Eljay Sean", "2011"); familyName("Elijah Luis", "2004"); // ------ function setHeight($minheight = 50) { echo "The height is : $minheight
"; } setHeight(350); setHeight(); // will use the default value of 50 setHeight(135); setHeight(80); // ------ function sum($x, $y) { $z = $x + $y; return $z; } echo "5 + 10 = " . sum(5, 10) . "
"; echo "7 + 13 = " . sum(7, 13) . "
"; echo "2 + 4 = " . sum(2, 4); ?>
