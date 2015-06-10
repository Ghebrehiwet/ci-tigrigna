<?php
$letterVowel1 = "e"; 
$letterVowel2 = "u"; 
$letterVowel3 = "i"; 
$letterVowel4 = "a"; 
$letterVowel5 = "ie"; 
$letterVowel6 = ""; 
$letterVowel7 = "o"; 
  

//gig/view.php
	$this->load->view($this->config->item('theme') . 'header');
		echo '<h2> ዝርዝር ፊደል</h2>';
	/*if($query->num_rows() > 0)
	{//loop thru data
		foreach($query->result() as $letter)
			{
				echo '<p>';
				echo '<b>መለለዪ ፊደል</b>: ' . $letter->FidelID . '<br>';
				echo '<b>ቀዳማይ ፊደል</b>: ' . $letter->FirstFidel . '<br>';
				echo '<b>ካልኣይ ፊደል</b>: ' . $letter->SecondFidel . '<br>';
				echo '<b>ሳልሳይ ፊደል</b>: ' . $letter->ThirdFidel . '<br>';
				echo '<b>ራብዓይ ፊደል</b>: ' . $letter->FourthFidel . '<br>';
				echo '<b>ሓሙሻይ ፊደል</b>: ' . $letter->FifthFidel . '<br>';
				echo '<b>ሻዱሻይ ፊደል</b>: ' . $letter->SixthFidel . '<br>';
				echo '<b>ሻቡዓይ ፊደል</b>: ' . $letter->SeventhFidel . '<br>';
				echo '<b>ኣደማምጻ ፊደል</b>: ' . $letter->SoundFidel . '<br>';
				echo '<b>ካልኣይ ፊደል</b>: ' . $gig->ContactPhone . '<br>';
				echo '<b>ካልኣይ ፊደል</b>: ' . $gig->ContactEmail . '<br>';
				echo '<b>Date Added</b>: ' . $gig->DateAdded . '<br>';
				echo '<b>Closing Date</b>: ' . $gig->ClosingDate . '<br>';
				echo '<b>Status</b>: ' . $gig->Status . '<br>';
				echo '<b>Special Instructions</b>: ' . $gig->SpecialInstructions . '<br>';
				echo '<b>Last Updated</b>: ' . $gig->LastUpdated . '<br>';
				echo '</p>';
				
				 
			}
	}else{//sorry no customers!
		echo '<p> ይቕሬታ ፊደል ኣይተረኽበን! </p>' ;
	}*/
	
	echo '<table class="table table-striped">';
    echo '<thead>';
      echo '<tr>';
        //echo '<th>#</th>';
        echo '<th>ቀዳማይ ፊደል</th>';
		echo '<th>ካልኣይ ፊደል</th>';
		echo '<th>ሳልሳይ ፊደል</th>';
		echo '<th>ራብዓይ ፊደል</th>';
		echo '<th>ሓሙሻይ ፊደል</th>';
		echo '<th>ሻዱሻይ ፊደል</th>';
		echo '<th>ሻቡዓይ ፊደል</th>';
      echo '</tr>';
    echo '</thead>';
    echo '<tbody>'; 
if($query->num_rows() > 0)
		//echo '<tr>';
				//echo '<td>1</td>';
				//echo '<td>2</td>';
				//echo '<td>3</td>';
				//echo '<td>4</td>';
				//echo '<td>5</td>';
				//echo '<td>6</td>';
				//echo '<td>7</td>';
				 
			//echo '</tr>'; 
	{//loop thru data
		foreach($query->result() as $letter){
				
			echo '<tr>';
				echo '<td title="' . $letter->SoundFidel . ''.$letterVowel1. '">' . $letter->FirstFidel . '<br></td>';
				echo '<td title="' . $letter->SoundFidel . ''.$letterVowel2. '">' . $letter->SecondFidel . '<br></td>';
				echo '<td title="' . $letter->SoundFidel . ''.$letterVowel3. '">' . $letter->ThirdFidel . '<br></td>';
				echo '<td title="' . $letter->SoundFidel . ''.$letterVowel4. '">' . $letter->FourthFidel . '<br></td>';
				echo '<td title="' . $letter->SoundFidel . ''.$letterVowel5. '">' . $letter->FifthFidel . '<br></td>';
				echo '<td title="' . $letter->SoundFidel . ''.$letterVowel6. '">' . $letter->SixthFidel . '<br></td>';
				echo '<td title="' . $letter->SoundFidel . ''.$letterVowel7. '">' . $letter->SeventhFidel . '<br></td>';
			echo '</tr>';
			 
		}
	}
    echo '</tbody>';
  echo '</table>'; 
	
	
	$this->load->view($this->config->item('theme') . 'footer');			
?>