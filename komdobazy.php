<?php
if(isset($_POST['wyslij'])){
    $tresc = $_POST['tresc'];
    $base = mysqli_connect("localhost", "root", "", "memehub");
    $sql = "INSERT INTO `komentarze` (`komentarz_id`, `mem_id`, `uzytkownik_id`, `tresc`) VALUES (NULL, '$mem_id', '$uzytkownik_id', '$tresc')";
    mysqli_query($base, $sql);
    mysqli_close($base);
    header('Location: dodajstrone.php');
}
else {
    echo "Gdzie jesteś marynarzu?";
}

?>