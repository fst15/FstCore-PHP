<?php

class ThreadUtility
{

    public function __construct($val = null)
    {
        
    }

    public function join($threadid, $threadname) {
        if ($threadname->isRunning()) {
            try{
                while ($threadname->isRunning()) {
                    $threadname->join();
                }
            }catch(Exception $ex){
                
            }
        }
        return true;
    }

    public function run($threadid, $threadname) {
        if ($threadname->getState() == Thread::STATE_STOP) {
            try {
                $threadname->start();
            } catch (Exception $ex) {
                
            }
        }
        return $threadname;
    }

    function __destruct()
    {
        
    }
    
}
