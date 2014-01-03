<?php
function get_gravatar( $email, $size = 32 )
        {
                        
                                $url = 'http://www.gravatar.com/';
            

            $url .= 'avatar/' . md5( $email ) . '?s=' . (int) abs( $size );

                        return $url;
        }

 echo '<img src="'.get_gravatar("sarathtvmala@ymail.com").'"/>';
?>