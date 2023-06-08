<style>
        
        #Orderbyrating {
            width: 800px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            outline: none;
        }

        
        #Orderbyrating option {
            background-color: #f9f9f9;
            color: #333;
        }

        #Minrating {
            width: 800px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            outline: none;
        }

        
        #Minrating option {
            background-color: #f9f9f9;
            color: #333;
        }

        #Orderbydate {
            width: 800px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            outline: none;
        }

        
        #Orderbydate option {
            background-color: #f9f9f9;
            color: #333;
        }

        #Prioritizebytext {
            width: 800px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            outline: none;
        }


        
        #Prioritizebytext option {
            background-color: #f9f9f9;
            color: #333;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        
        label {
            margin-bottom: 5px;
        }

        body {
            display: flex;
            justify-content: left;
            align-items: center;
            height: 100vh;
        }
    </style>

<form method="get">
    <label for="orderrating">Order by rating:</label>
    <select id="Orderbyrating" name="Orderbyrating">
        <option value="highestfirst">Highest first</option>
        <option value="lowestfirst">Lowest first</option>
    </select>
    <br><br>
    <label for="minrating">Minimum rating:</label>
    <select id="Minrating" name="Minrating">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
    <br><br>
    <label for="date">Order by date:</label>
    <select id="Orderbydate" name="Orderbydate">
        <option value="newestfirst">Newest first</option>
        <option value="oldestfirst">Oldest first</option>
    </select>
    <br><br>
    <label for="text">Prioritize by text:</label>
    <select id="Prioritizebytext" name="Prioritizebytext">
        <option  value="Yes">Yes</option>
        <option  value="No">No</option>
    </select>
    <br><br>
    <input type="submit" value="Submit">
</form>

</html>

<?php


$reviews = array(
    array("text" => "5star review", "rating" => 5, "date" => "Newest first"),
    array("text" => "4star review", "rating" => 4, "date" => "Newest first"),
    array("text" => "3star review", "rating" => 3, "date" => "Newest first"),
    array("text" => "2star review", "rating" => 2, "date" => "Newest first"),
    array("text" => "1star review", "rating" => 1, "date" => "Newest first"),
    array("text" => "5star review", "rating" => 5, "date" => "Oldest first"),
    array("text" => "4star review", "rating" => 4, "date" => "Oldest first"),
    array("text" => "3star review", "rating" => 3, "date" => "Oldest first"),
    array("text" => "2star review", "rating" => 2, "date" => "Oldest first"),
    array("text" => "1star review", "rating" => 1, "date" => "Oldest first"),
   
);

$reviews2 = array(
  array("text" => "", "rating" => 5, "date" => "Oldest first"),
  array("text" => "", "rating" => 4, "date" => "Oldest first"),
  array("text" => "", "rating" => 3, "date" => "Oldest first"),
  array("text" => "", "rating" => 2, "date" => "Oldest first"),
  array("text" => "", "rating" => 1, "date" => "Oldest first"),
  array("text" => "", "rating" => 5, "date" => "Newest first"),
  array("text" => "", "rating" => 4, "date" => "Newest first"),
  array("text" => "", "rating" => 3, "date" => "Newest first"),
  array("text" => "", "rating" => 2, "date" => "Newest first"),
  array("text" => "", "rating" => 1, "date" => "Newest first"),
);

$reviews3 = array(
array("text" => "5star review", "rating" => 5, "date" => "Newest first"),
array("text" => "4star review", "rating" => 4, "date" => "Newest first"),
array("text" => "3star review", "rating" => 3, "date" => "Newest first"),
array("text" => "2star review", "rating" => 2, "date" => "Newest first"),
array("text" => "1star review", "rating" => 1, "date" => "Newest first"),
array("text" => "5star review", "rating" => 5, "date" => "Oldest first"),
array("text" => "4star review", "rating" => 4, "date" => "Oldest first"),
array("text" => "3star review", "rating" => 3, "date" => "Oldest first"),
array("text" => "2star review", "rating" => 2, "date" => "Oldest first"),
array("text" => "1star review", "rating" => 1, "date" => "Oldest first"),
array("text" => "", "rating" => 5, "date" => "Oldest first"),
array("text" => "", "rating" => 4, "date" => "Oldest first"),
array("text" => "", "rating" => 3, "date" => "Oldest first"),
array("text" => "", "rating" => 2, "date" => "Oldest first"),
array("text" => "", "rating" => 1, "date" => "Oldest first"),
array("text" => "", "rating" => 5, "date" => "Newest first"),
array("text" => "", "rating" => 4, "date" => "Newest first"),
array("text" => "", "rating" => 3, "date" => "Newest first"),
array("text" => "", "rating" => 2, "date" => "Newest first"),
array("text" => "", "rating" => 1, "date" => "Newest first"),
);






$orderByRating = $_GET['Orderbyrating'] ?? '';
$minRating = $_GET['Minrating'] ?? '';
$orderByDate = $_GET['Orderbydate'] ?? '';
$prioritizeByText = $_GET['Prioritizebytext'] ?? '';

//$optionYES = $_GET['Yes'] ?? '';
//$optionNO = $_GET['No'] ?? '';

//if ($prioritizeByText === 'Yes') {
  
  //echo $prioritizeByText;
//} //else {
  
  //echo $prioritizeByText;
//}

//if ($orderByRating === 'newestfirst') {
  
  //echo $orderByDate;
//} else {
  
  //echo $orderByDate;
//}

//if ($orderByRating === "highestfirst")
//{
  //echo $orderByRating;
//} else {
  
  //echo $orderByRating;
//}





$filteredReviews = array_filter($reviews, function ($review) use ($minRating) {
    return $review['rating'] >= $minRating;

});


$filteredReviews2 = array_filter($reviews2, function ($review2) use ($minRating) {
  return $review2['rating'] >= $minRating;

});

$filteredReviews3 = array_filter($reviews3, function ($review3) use ($minRating) {
  return $review3['rating'] >= $minRating;

});

//$filteredReviewsn = array_filter($reviews3, function ($review) {
  //return $review['date'] === "Newest first";
//});

//$filteredReviewso = array_filter($reviews3, function ($review) {
  //return $review['date'] === "Oldest first";
//});





if ($orderByRating === "highestfirst") {
  usort($filteredReviews, function($a, $b) {
      return $b['rating'] - $a['rating'];
  });
} elseif ($orderByRating === "lowestfirst") {
  usort($filteredReviews, function($a, $b) {
      return $a['rating'] - $b['rating'];
  });
}

if ($orderByRating === "highestfirst") {
  usort($filteredReviews2, function($a, $b) {
      return $b['rating'] - $a['rating'];
  });
} elseif ($orderByRating === "lowestfirst") {
  usort($filteredReviews2, function($a, $b) {
      return $a['rating'] - $b['rating'];
  });
}

if ($orderByRating === "highestfirst") {
  usort($filteredReviews3, function($a, $b) {
      return $b['rating'] - $a['rating'];
  });
} elseif ($orderByRating === "lowestfirst") {
  usort($filteredReviews3, function($a, $b) {
      return $a['rating'] - $b['rating'];
  });
}
  


//$combinedReviewsnew = array_merge($filteredReviews, $filderthenewst);
//$combinedReviewsold = array_merge($filteredReviews, $fildertheoldest);


//$combinedReviewsnew1 = array_merge($filteredReviews2, $filderthenewst);
//$combinedReviewsold1 = array_merge($filteredReviews2, $fildertheoldest);

?>

<div style="margin-left: auto; margin-right: 110; display: flex; justify-content: flex-end;">
<div class="reviews-container" style="width: 100%; margin-right: 0;">
    <?php

if ($prioritizeByText === "Yes") {

  if ($orderByDate === "oldestfirst") {
      $filteredReviewso = array_filter($filteredReviews, function ($review) {
          return $review['date'] === "Oldest first";
      });
      
      echo '<table style="border-collapse: collapse; width: 100%;">';
      echo '<tr><th style="border: 1px solid black; padding: 8px;">Text</th><th style="border: 1px solid black; padding: 8px;">Rating</th><th style="border: 1px solid black; padding: 8px;">Date</th></tr>';
      
      foreach ($filteredReviewso as $review) {
          echo '<tr>';
          echo '<td style="border: 1px solid black; padding: 8px;">' . ($review['text'] ?? '') . '</td>';
          echo '<td style="border: 1px solid black; padding: 8px;">' . $review['rating'] . '</td>';
          echo '<td style="border: 1px solid black; padding: 8px;">' . $review['date'] . '</td>';
          echo '</tr>';
      }
      
      echo '</table>';
  } elseif ($orderByDate === "newestfirst") {
      $filteredReviewsn = array_filter($filteredReviews, function ($review) {
          return $review['date'] === "Newest first";
      });
      
      echo '<table style="border-collapse: collapse; width: 100%;">';
      echo '<tr><th style="border: 1px solid black; padding: 8px;">Text</th><th style="border: 1px solid black; padding: 8px;">Rating</th><th style="border: 1px solid black; padding: 8px;">Date</th></tr>';
      
      foreach ($filteredReviewsn as $review) {
          echo '<tr>';
          echo '<td style="border: 1px solid black; padding: 8px;">' . ($review['text'] ?? '') . '</td>';
          echo '<td style="border: 1px solid black; padding: 8px;">' . $review['rating'] . '</td>';
          echo '<td style="border: 1px solid black; padding: 8px;">' . $review['date'] . '</td>';
          echo '</tr>';
      }
      
      echo '</table>';
  }

  if ($orderByDate === "oldestfirst") {
      $filteredReviewso2 = array_filter($filteredReviews2, function ($review) {
          return $review['date'] === "Oldest first";
      });
      
      echo '<table style="border-collapse: collapse; width: 100%;">';
      echo '<tr><th style="border: 1px solid black; padding: 8px;">Text</th><th style="border: 1px solid black; padding: 8px;">Rating</th><th style="border: 1px solid black; padding: 8px;">Date</th></tr>';
      
      foreach ($filteredReviewso2 as $review) {
          echo '<tr>';
          echo '<td style="border: 1px solid black; padding: 8px;">' . ($review['text'] ?? '') . '</td>';
          echo '<td style="border: 1px solid black; padding: 8px;">' . $review['rating'] . '</td>';
          echo '<td style="border: 1px solid black; padding: 8px;">' . $review['date'] . '</td>';
          echo '</tr>';
      }
      
      echo '</table>';
  } elseif ($orderByDate === "newestfirst") {
      $filteredReviewsn2 = array_filter($filteredReviews2, function ($review) {
          return $review['date'] === "Newest first";
      });
      
      echo '<table style="border-collapse: collapse; width: 100%;">';
      echo '<tr><th style="border: 1px solid black; padding: 8px;">Text</th><th style="border: 1px solid black; padding: 8px;">Rating</th><th style="border: 1px solid black; padding: 8px;">Date</th></tr>';
      
      foreach ($filteredReviewsn2 as $review) {
          echo '<tr>';
          echo '<td style="border: 1px solid black; padding: 8px;">' . ($review['text'] ?? '') . '</td>';
          echo '<td style="border: 1px solid black; padding: 8px;">' . $review['rating'] . '</td>';
          echo '<td style="border: 1px solid black; padding: 8px;">' . $review['date'] . '</td>';
          echo '</tr>';
      }
      
      echo '</table>';
  }
} elseif ($prioritizeByText === "No") {

  if ($orderByDate === "oldestfirst") {
      $filteredReviewso3 = array_filter($filteredReviews3, function ($review) {
          return $review['date'] === "Oldest first";
      });
      
      echo '<table style="border-collapse: collapse; width: 100%;">';
      echo '<tr><th style="border: 1px solid black; padding: 8px;">Text</th><th style="border: 1px solid black; padding: 8px;">Rating</th><th style="border: 1px solid black; padding: 8px;">Date</th></tr>';
      
      foreach ($filteredReviewso3 as $review) {
          echo '<tr>';
          echo '<td style="border: 1px solid black; padding: 8px;">' . ($review['text'] ?? '') . '</td>';
          echo '<td style="border: 1px solid black; padding: 8px;">' . $review['rating'] . '</td>';
          echo '<td style="border: 1px solid black; padding: 8px;">' . $review['date'] . '</td>';
          echo '</tr>';
      }
      
      echo '</table>';
  } elseif ($orderByDate === "newestfirst") {
      $filteredReviewsn3 = array_filter($filteredReviews3, function ($review) {
          return $review['date'] === "Newest first";
      });
      
      echo '<table style="border-collapse: collapse; width: 100%;">';
      echo '<tr><th style="border: 1px solid black; padding: 8px;">Text</th><th style="border: 1px solid black; padding: 8px;">Rating</th><th style="border: 1px solid black; padding: 8px;">Date</th></tr>';
      
      foreach ($filteredReviewsn3 as $review) {
          echo '<tr>';
          echo '<td style="border: 1px solid black; padding: 8px;">' . ($review['text'] ?? '') . '</td>';
          echo '<td style="border: 1px solid black; padding: 8px;">' . $review['rating'] . '</td>';
          echo '<td style="border: 1px solid black; padding: 8px;">' . $review['date'] . '</td>';
          echo '</tr>';
      }
      
      echo '</table>';
  }
}


   

    ?>
</div>
</div>
</html>

<style>
    
    .reviews-container {
        display: flex;
        flex-direction: column;
        align-items: right;
        margin-top: 20px;
        text-align: right;
      
    }

    .review {
        text-align: center;
        margin-bottom: 10px;
    }

    
</style>