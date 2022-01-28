<?php
class Movie
{
    public $nome;
    public $anno;
    public $durata;
    public $genere;
    public $copertina;

    function __construct($_nome, $_anno, $_durata, $_genere, $_copertina)
    {
        $this->nome = $_nome;
        $this->anno = $_anno;
        $this->durata = $_durata;
        $this->genere = $_genere;
        $this->copertina = $_copertina;
    }

    public function getDurata()
    {
        $temp = floor($this->durata / 60) . "h:" . $this->durata % 60 . "m";
        return $temp;
    }
}
$movies = [
    new Movie("Spider-Man No Way Home", 2021, 148, "Azione/Avventura", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrdPsGJEBxBev7gKo_EMp0Pgk7Q7su_xTUxf3vo8dE9S_CiG2Z"),
    new Movie("Dune", 2021, 155, "Sci-fi/Adventure", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvJznVehDbSUPihJbSTNwH8Tgnvh4ZDxs0J4hV06wOvHHidHul"),
    new Movie("Titanic", 1997, 194, "Romantico/Drama", "https://is5-ssl.mzstatic.com/image/thumb/Video/v4/c6/85/2e/c6852e83-c9b3-1cbe-39ad-8ba321555b9d/Titanic3D_iTunesDC_800x1200_UK.jpg/1200x1200.webp"),
    new Movie("Fast & Furious 9", 2021 , 145, "Action/Adventure", "https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQgQ8bs9qevtmn67UVKB88TBzefiw6YSnJFCjBNHoVZSEduSihW"),
];



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP exercise</title>
</head>

<body>
    <h1>Lista Film:</h1>
    <?php foreach ($movies as $movie) { ?>
        <div style="display: inline-block; width: 400px; padding: 10px; text-align: center;">
            <h2><?php echo $movie->nome ?></h2>
            <img src="<?php echo $movie->copertina ?>" alt="<?php echo $movie->nome ?> copertina" height="500px">
            <div><?php echo "anno: {$movie->anno} / durata: {$movie->getDurata()}"  ?></div>
            <div><?php echo "genere: {$movie->genere}" ?></div>
        </div>
    <?php } ?>
</body>

</html>