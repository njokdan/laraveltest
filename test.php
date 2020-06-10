<?php

// Complete the function below, The function is a recursive function
// that print all even numbers from 1 to 100.

function recurse($num) {
    //complete the function, write your code inside here
    if($num > 0) 
    { 
        recurse($num - 1); 
        if($num%2 === 0){
            echo $num, " "; 
        }
        
    } 
    return; 
}

recurse(100);


// What will be the result of this laravel route command below,
// Share your conclusion

Route('login/24', function($id){
	
    echo $id;
    
    //Answer: the above code will echo 24 on the screen
	
});

?>

<!-- Write a simple javascript function to change the color of paragraph when user clicks the "Change Color" button. -->

<div>
	<p id="paragraph" style="color:pink" >This is just a test chill out.</p>
	<button onclick="changeColor();">Change Color</button>
</div>

<script>
    function changeColor(){
        document.getElementById("paragraph").style.color = "green";
    }
</script>

