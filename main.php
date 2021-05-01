<?Php
function random_generator($digits)
{
    srand((double)microtime() * 10000000);
//Array of alphabets
    $input = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q",
        "R", "S", "T", "U", "V", "W", "X", "Y", "Z");

    $random_generator = "";// Initialize the string to store random numbers
    for ($i = 1; $i < $digits + 1; $i++) { // Loop the number of times of required digits

        if (rand(1, 2) == 1) {// to decide the digit should be numeric or alphabet
// Add one random alphabet
            $rand_index = array_rand($input);
            while (strstr($random_generator, " " . $input[$rand_index])) {
                $rand_index = array_rand($input);
            }
            $random_generator .= " " . $input[$rand_index]; // One char is added

        } else {
// Add one numeric digit between 1 and 10
            $ranNum = rand(1, 9);
            while (strstr($random_generator, " " . $ranNum)) {
                $ranNum = rand(1, 9);
            }
            $random_generator .= " " . $ranNum; // one number is added
        } // end of if else

    } // end of for loop


    return $random_generator;
} // end of function

$idx = 0;
for ($j = 3; $j < 7; $j++) {
    for ($i = 0; $i < 5; $i++) {
        echo (++$idx) . ") " . random_generator($j) . "\n";
    }
}
