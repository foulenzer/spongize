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
        for( $i = 0; $i < count($string_list); $i++) {
            if($i%2 === 1){
                $data=$data.strtoupper($string_list[$i]);
            }else{
                $data=$data.strtolower($string_list[$i]);
            }
        }

        // Send output to command line
        echo "$data".PHP_EOL;

    }


    /**
     *  Main
     */

    spongize($argv[1]);