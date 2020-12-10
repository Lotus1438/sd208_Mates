<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Clickbait Headlines</title>
</head>

<body >
    <div class="bg-container-fluid">
    <form method="post" style="width:90%;height: 500px;">
    <?php
     define("TITLE", "Honest Click Bait Headlines");
    if(isset($_POST["fixSubmit"])) {
        $clickBait = strtolower($_POST["clickBaitHeadline"]);
        $clickBait_words = array("scientists", "doctors", "hate", "stupid", "weird", "simple", "trick", "shocked me", "you'll never believe", "hack", "epic", "unbelievable");
        $replacement_words = array("so-called scientists", "so-called doctors", "aren't threatened by", "average", "completeky normal", "ineffective", "method", "is no different than the others", "you won't really be surprised by", "slightly improve", "boring", "normal");
        $honestHeadline = str_replace(  $clickBait_words, $replacement_words, $clickBait);
    }
    ?>
    <div class="container">
        <h1> <?php echo TITLE; ?></h1>
        <p class="lead" style="margin-left: 15%">You can type a sentence here.</p>
        <div class="row">
            <form1 class="col-sm-8 col-sm-offset-2" action="" method="post">
                <textarea name="clickBaitHeadline" placeholder="You can type a sentence here!">
                    </textarea>
                <br>
                <button type="submit" name="fixSubmit">Make Honest!</button>
            </form1>
        </div>
        </br>


        <?php 
                if(isset($_POST["fixSubmit"])) {
                    echo "<strong class='text-danger'>Original Headline</strong><h4>".ucwords($clickBait)."</h4><hr>";   
                    echo "<strong class='text-success'>Honest Headline</strong><h4>".ucwords($honestHeadline)."</h4>";   
                }
            ?>
    </div>
            </form>
    </div>
   

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>
</body>
</html>