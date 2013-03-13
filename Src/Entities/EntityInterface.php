<?php
/**
 * 
 * 
 * 
 */
namespace  Entities;

/**
 * @package Dao_Exception
 */
interface EntityInterface{
     
     
     /**
     * 
     *
     */
     protected function buildRequest();
    /**
     * 
     *
     */
     public function getRemoteData();
     
    /**
     * 
     * 
     */
     public function parceData();
     
    /**
     * 
     *
     */
     public function selectLocalData();
     
    /**
     * 
     *
     */
     public function insertLocalData();
     
    /**
     * 
     *
     */
     public function updateLocalData();
     
     
     
}//END Interface EntityInterface