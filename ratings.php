<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Customer Ratings</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    margin:0;
    padding:0;
    background: url('assets/images/back.png') no-repeat center center fixed;
    background-size: cover;
    font-family: sans-serif;
    color:#fff;
}

body::before{
    content:"";
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.6);
    z-index:-1;
}

.rating-box{
    background: rgba(255,255,255,0.1);
    padding:40px;
    border-radius:20px;
    backdrop-filter: blur(8px);
}

.question{
    margin-bottom:40px;
}

.number-circle{
    width:45px;
    height:45px;
    border-radius:50%;
    border:2px solid #fff;
    display:flex;
    align-items:center;
    justify-content:center;
    cursor:pointer;
    transition:0.3s;
    font-weight:600;
    font-size:16px;
}

.number-circle:hover{
    background:#fff;
    color:#000;
    transform:scale(1.1);
}

/* Submit Button */
.custom-btn{
    display:inline-block;
    padding:12px 40px;
    background:#fff;
    color:#000;
    border-radius:50px;
    font-weight:600;
    text-decoration:none;
    border:2px solid #000;
    transition:0.3s;
}

.custom-btn:hover{
    background:#28a745;
    color:#fff;
    border-color:#28a745;
}

</style>
</head>
<body>

<div class="container py-5">
    <div class="rating-box mx-auto" style="max-width:900px;">

        <h2 class="text-center mb-5">Customer Feedback</h2>

        <?php
        $questions = [
            "1. How is Food?",
            "2. How is Management?",
            "3. Do you Like Food and Stall?",
            "4. How Happy are you after eating Healthy Food?",
            "5. Rate this App"
        ];

        foreach($questions as $index => $q){
        ?>

        <div class="question">
            <h5><?php echo $q; ?></h5>

            <div class="d-flex flex-wrap align-items-center mt-3">

                <?php for($i=1;$i<=10;$i++){ ?>
                    <div class="number-circle me-2 mb-2"
                         onclick="selectRating(this, <?php echo $index; ?>, <?php echo $i; ?>)">
                        <?php echo $i; ?>
                    </div>
                <?php } ?>

               
            </div>
        </div>

        <?php } ?>

        <div class="text-center mt-4">
            <p class="mt-4">🙏 Thanks for Visit</p>
            <a href="#" class="custom-btn">Submit Feedback</a>
        </div>

    </div>
</div>

<script>

function selectRating(element, questionIndex, value){

    let parent = element.parentElement;
    let numbers = parent.querySelectorAll(".number-circle");

    numbers.forEach((num, index) => {

        let numberValue = index + 1;

        if(numberValue <= value){

            if(value <= 3){
                num.innerHTML = "😡";
            }
            else if(value <= 6){
                num.innerHTML = "😐";
            }
            else if(value <= 7){
                num.innerHTML = "🙂";
            }
            else{
                num.innerHTML = "😍";
            }

        }else{
            num.innerHTML = numberValue;
        }

    });

}

</script>

</body>
</html> 