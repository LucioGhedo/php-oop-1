<?php
class Movie {
    public $title;
    public $rating;
    public $poster;
    public $link;

    public function __construct($_titolo, $_poster) {
        $this->title = $_titolo;
        $this->poster = $_poster;
    }
    public function upperCase() {
        return $titoloUpper = strtoupper($this->title);
    }
}

$FightClub = new Movie('Fight Club', 'https://m.media-amazon.com/images/I/71YFxhhSRPL._SY445_.jpg');
$FightClub->rating = 10;

$JackAss = new Movie('Jackass 5', 'https://mr.comingsoon.it/imgdb/locandine/big/37213.jpg');
$JackAss->rating = 9.5;

$SportControvoglia = new Movie('Sport Controvoglia', 'img/capture.jpg');
$SportControvoglia->rating = 99999999999999999999;
$SportControvoglia->link = 'https://www.youtube.com/watch?v=bhGUDbm_670&ab_channel=LaTVdegliAlberiParlanti';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="card-container">
        <div class="card">
            <h2><?php echo $FightClub->upperCase(); ?></h2>
            VOTO
            <p><?php echo $FightClub->rating ?></p>
            <img src="<?php echo $FightClub->poster ?>" alt="<?php echo $FightClub->title; ?>">
        </div>
        <div class="card">
            <h2><?php echo $JackAss->upperCase(); ?></h2>
            VOTO
            <p><?php echo $JackAss->rating ?></p>
            <img src="<?php echo $JackAss->poster ?>" alt="<?php echo $JackAss->title; ?>">
        </div>
        <div class="card">
            <h2><?php echo $SportControvoglia->upperCase(); ?></h2>
            VOTO
            <p><?php echo $SportControvoglia->rating ?></p>
            <img src="<?php echo $SportControvoglia->poster ?>" alt="<?php echo $SportControvoglia->title; ?>">
            LINK
            <a class="btn" href="<?php echo $SportControvoglia->link; ?>"><?php echo $SportControvoglia->upperCase(); ?></a>
        </div>
    </div>
</body>
</html>