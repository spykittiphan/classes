<?php

namespace spykittiphan\classes;

use Yii;

/**
 * @author kittiphan sornsakda <ksorn@kku.ac.th>
 * @since 2.0
 */
class Common {
    
    public static function getYearPutday($putdate) {
	    $then = strtotime($putdate);  
      return (floor((time()-$then)/31556926)); 
    }
    
    
}
