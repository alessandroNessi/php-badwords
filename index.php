<?php
    $wordToFilter="";
    if($_GET){
        $wordToFilter=$_GET['word'];
    }
    $result="";
    $loremTxt="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum a omnis, tempora, nostrum voluptatum minima minus dolorem fugit impedit corrupti numquam molestiae, at labore quisquam. Eligendi non ratione similique beatae!
    Recusandae sint distinctio alias natus eum similique sit pariatur corrupti mollitia, id voluptates odit aut aperiam reprehenderit at nostrum doloribus quidem ex unde eius maiores animi quas voluptatum! Incidunt, labore?
    Voluptas neque quidem soluta quos. Quidem aspernatur culpa dignissimos labore placeat beatae voluptas, ipsam doloribus sed dolor ea officia explicabo eius molestiae asperiores tenetur, ratione quo numquam quibusdam cupiditate. Sit?
    Fuga quidem laudantium recusandae, cum voluptatum veritatis! Velit rerum aperiam ipsam possimus debitis vero. Sint vero ipsam quibusdam pariatur velit soluta qui, eius tempora doloribus excepturi odio, accusantium, officia enim.
    Illum quasi qui aperiam quod? Magnam, fugit! Mollitia est provident cumque et sapiente fugit delectus totam adipisci, nemo eveniet similique ea corporis unde laboriosam quod magnam officiis quo minima hic!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to php introduction</h1>
    <p>il testo nella originale nella variabile è lungo <?php echo strval(strlen($loremTxt)) . " caratteri:" . $loremTxt ?></p>
    <div class="flex">
        <form action="./index.php">
            <input name="word" type="text">
            <input type="submit" value="Sostituisci la parola" />
        </form>
    </div>
    <p id="result">
        <?php $result= str_replace($wordToFilter, "***", $loremTxt); ?>
        il testo filtrato è lungo <?php echo strval(strlen($result)) . " caratteri: " . $result ?>
    </p>
</body>

<script>
    document.getElementById("buttonClick").addEventListener("click", myFunction);
    function myFunction() {
        alert("ciao");
    }
</script>

</html>
