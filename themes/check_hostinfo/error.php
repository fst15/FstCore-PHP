<?php

use function Symfony\Component\String\b;

class error
{

    function __construct()
    {
    }

    function notfound()
    {
        echo '<div class="col">
					<div class="row">
						<div class="col">
							<div class="container notfound-content">
								<center><h5><i class="bi bi-x-circle" style="color: red;"></i> <font color="black">Result not found</font></h5></center>
							</div>
						</div>
					</div>
			</div>';
    }

    public function init($type)
    {
        switch($type){
            case 'data_notfound':
                return self::notfound();
                break;
            default:
                break;
        }
    }

    function __destruct()
    {
    }
    
}
