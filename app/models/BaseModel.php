<?php
class BaseModel extends Eloquent  {
	
	public function __construct() {
		parent::__construct();

	}
	
	/*public static function getRows( $args )
	{

        extract( array_merge( array(
			'page' 		=> '0' ,
			'limit'  	=> '0' ,
			'sort' 		=> '' ,
			'order' 	=> '' ,
			'params' 	=> '' ,
			'global'	=> '1'	  
        ), $args ));
		
		$offset = ($page-1) * $limit ;	
		$limitConditional = ($page !=0 && $limit !=0) ? "LIMIT  $offset , $limit" : '';	
		$orderConditional = ($sort !='' && $order !='') ?  " ORDER BY {$sort} {$order} " : '';

		// Update permission global / own access new ver 1.1
		$table = with(new static)->table;
		if($global == 0 )
				$params .= " AND {$table}.entry_by ='".Session::get('uid')."'"; 	
		// End Update permission global / own access new ver 1.1			
        
		$rows = array();
	    $result = DB::select( self::querySelect() . self::queryWhere(). "
				{$params} ". self::queryGroup() ." {$orderConditional}  {$limitConditional} ");
				
		$total = DB::select( self::querySelect() . self::queryWhere()." {$params} ". self::queryGroup());			 


		return $results = array('rows'=> $result , 'total' => count($total));	

	
	}
	
	public static function getRow( $id )
	{
       $table = with(new static)->table;
	   $key = with(new static)->primaryKey;

		$result = DB::select( 
				self::querySelect() . 
				self::queryWhere().
				" AND ".$table.".".$key." = '{$id}' ". 
				self::queryGroup()
			);	
		if(count($result) <= 0){
			$result = array();		
		} else {

			$result = $result[0];
		}
		return $result;		
	}	 
	
	public static function insertRow( $data , $id)
	{
       $table = with(new static)->table;
	   $key = with(new static)->primaryKey;
	    if($id == NULL )
        {
            // Insert Here 
			 $id = DB::table( $table)->insertGetId($data);				
            
        } else {
            // Update here 
			 DB::table($table)->where($key,$id)->update($data);    
        }    
        return $id;    
	}*/
}