<?php




class Review{

    function __construct(
        String $firstname, String $review
    )
    
    {
        try {
            
            require_once 'DBconnect.php';
            require_once 'User.php';
           

        $cReview = array(
            "firstname" => $this->firstname = $firstname,
            "review" => $this->review = $review
        );

        $sql = sprintf(
            "INSERT INTO %s (%s) values (%s)",
            "reviews",
            implode(", :", array_keys($cReview)),
            ":" . implode(", :", array_keys($cReview)));

            $statement = $connection->prepare($sql);
            $statement->execute($cReview);
            
        }   catch (PDOException $error) {
            echo $sql . "<br>" . $error->getMessage();
        } 
           
    }


    function __toString() : String
    {
        return 
        "Name: ". $this->firstname
        ."\nReview: ".$this->review;
     
    }




  
        
        
    

    
               

    
    

    


    
};