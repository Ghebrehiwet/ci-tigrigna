<?php
$fileExtention =".php";
//gig/giglist.php
$this->load->view($this->config->item('theme') . 'header'); #Set this up for the new theme
	echo '<h2>ዝርዝር ፊደላት</h2>';
	 
	
	echo '<div class="row">';
		echo '<div class="col-sm-4">';
	
	
				 
					
					echo '<div class="dropdown">';
						echo '<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">ፊደላት';
						echo '<span class="caret"></span></button>';
						echo '<ul class="dropdown-menu">';
						  //echo '<li class="dropdown-header"> '. $letter->FirstFidel . <br>'</li>';
						  echo '<li><a href="#">';
						  
								 if($query->num_rows() > 0)
									{//loop through data
										foreach($query->result() as $letter)
										{
										echo '<ul>';
										  echo '<li>';  
										  
										  echo anchor('letter/' . $letter->SoundFidel . '".$fileExtention. "/' . $letter->FidelID, '' . $letter->FirstFidel . '<br>');  
										   
										  echo '</li>'; 
										 echo '</ul>';
										}
									
									} 
									else 
									{//sorry no gigs!
										echo '<p>ይቕሬታ ፊደል ኣይተረኽበን! </p>';
									
									}
						  
						  
						  
						  echo '</a></li>';
						  //echo '<li><a href="#">CSS</a></li>';
						  //echo '<li><a href="#">JavaScript</a></li>';
						  //echo '<li class="dropdown-header">Dropdown header 2</li>';
						  //echo '<li class="divider"></li>';
						  //echo '<li><a href="#">About Us</a></li>';
						echo '</ul>';
					  echo '</div>';
					
					
					 
				
	
	
	
	
	echo '</div>';
    echo '<div class="col-sm-8">';
	
		echo anchor('letter/view/' . $letter->FidelID, 'ዝርዝር ፊደላት');
				/*if($query->num_rows() > 0)
				{//loop through data
					foreach($query->result() as $letter)
					{
					  echo '<p>';    
					  echo ' <b>ቀዳማይ ፊደል</b>:' . $letter->FirstFidel . '<br>'; 
					  
					   
					  echo anchor('letter/view/' . $letter->FidelID, 'ዝርዝር ፊደላት');
					  echo '</p>'; 
					}
				
				} 
				else 
				{//sorry no gigs!
					echo '<p>ይቕሬታ ፊደል ኣይተረኽበን! </p>';
				
				}*/
	
	echo '</div>';
  echo '</div>';
	
	
	
	
	
	
	
	
	
	
	//echo anchor('customer/add', 'Add Customer');		//add add form
			
	$this->load->view($this->config->item('theme') . 'footer'); #Set this up for the new theme

?>
	
	 