condition ? value if true : value if false $v = 1; $r = (1 == $v) ? 'Yes' : 'No'; // $r is set to 'Yes' $r = (3 == $v) ? 'Yes' : 'No'; // $r is set to 'No' echo "

"; echo (1 == $v) ? 'Yes' : 'No'; // 'Yes' will be printed echo "

"; echo (3 == $v) ? 'Yes' : 'No'; // 'No' will be printed // Parentheses can be left out in all examples. echo "

"; $biggestNum = (15>10) ? "15" : "10"; echo $biggestNum;
