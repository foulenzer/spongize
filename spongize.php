<?php

    /**
     *
     *  function spongize()
     *  @param string to convert
     *  @return string converted string, FALSE in case of error
     *
     */

    function spongize($pstring) {

        // Check params
        if (is_string($pstring)) {
            $string = htmlentities( $pstring, ENT_QUOTES);
        }
        else {
            return FALSE;
        }

        // Prepare data
        $data = '';

        // Split into array
        $string_list = str_split($string);

        // Iterate over string
        for ($i = 0; $i < count($string_list); $i++) {

            // Uppercase for odd number, lowercase for even number
            if ($i%2 === 1) {
                $data = $data.strtoupper($string_list[$i]);
            }
            else {
                $data = $data.strtolower($string_list[$i]);
            }
        }

        // Send output to command line
        echo "$data".PHP_EOL;

    }


    /**
     *  Main
     */
?>
    <form action="spongize.php" method="post">
        <p>Ihr Text: <input type="text" name="lyoner" /></p>
        <p><input type="submit" /></p>
        </form>
<?php
    spongize($_POST['lyoner']);