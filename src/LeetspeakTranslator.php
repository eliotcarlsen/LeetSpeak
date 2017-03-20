<?php

    class LeetspeakTranslator
    {
        function translate($input)
        {
            $input_array = str_split($input);
            $converted_array = array();
            if (($input_array[0] == "s") || ($input_array == "S")){
              array_push($converted_array, "s");
              $newer_array = array_shift($input_array);
              foreach ($input_array as $letters)
                {
                  if ($letters == "e")
                  {
                      array_push($converted_array, "3");
                  }
                  elseif ($letters == "o")
                  {
                      array_push($converted_array, "0");
                  }
                  elseif($letters == "i")
                  {
                      array_push($converted_array, "1");
                  }
                  elseif($letters == "s")
                  {
                      array_push($converted_array, "z");
                  }
                  else
                  {
                      array_push($converted_array, $letters);
                  }
                }
            } else {
                  foreach ($input_array as $letter){
                      if ($letter == "e")
                      {
                          array_push($converted_array, "3");
                      }
                      elseif ($letter == "o")
                      {
                          array_push($converted_array, "0");
                      }
                      elseif($letter == "i")
                      {
                          array_push($converted_array, "1");
                      }
                      elseif($letter == "s")
                      {
                          array_push($converted_array, "z");
                      }
                      else
                      {
                          array_push($converted_array, $letter);
                      }
                    }
              }
            return $converted_array;
        }
    }
?>
