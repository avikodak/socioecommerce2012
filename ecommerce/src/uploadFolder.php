<?php
      /* Create new object with the image */
      $im = new Imagick( "../testImages/skinny-jeans-iphone-case.jpeg" );

      /* Get iterator */
      $it = $im->getPixelIterator();
       
      /* Loop trough pixel rows */
      foreach( $it as $row => $pixels )
      {
          /* For every second row */
          if ( $row % 2 )
          {
              /* Loop trough the pixels in the row (columns) */
              foreach ( $pixels as $column => $pixel )
              {
                      /* Paint every second pixel black*/
                      if ( $column % 2 )
                      {
                              $pixel->setColor( "black" );
                      }
              }

          }
         
          /* Sync the iterator, this is important to do on each iteration */
          $it->syncIterator();
      }
       
      /* Display the image */
      header( "Content-Type: image/jpeg" );
      echo $im;
       
?>
