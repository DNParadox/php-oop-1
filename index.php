<?php
class Movie {

    public $name;

    public $genre;

    public $regia;

    public $year = 0;

    public function __construct($_name, $_genre,$_regia, $_year){
        $this->name = $_name;
        $this->genre = $_genre;
        $this->regia = $_regia;
        $this->year = $_year;
    }

  public function bestQuoteMovie1(){
    return 'La morte verrà su rapide ali per colui che oserà aprire questa cassa.';
  }

  public function bestQuoteMovie2(){
    return 'So sempre chi sei... Solo che certe volte non ti riconosco.';
  }
}

// Film 1 
$movie1 = new Movie('La Mummia','Avventura','Stephen Sommers', 1999);
$quote1 = Movie::bestQuoteMovie1();
$movie1->locandina = 'https://pad.mymovies.it/filmclub/2003/10/507/locandina.jpg';


// Film 2
$movie2 = new Movie('Logan','Azione', 'James Mangold', 2017);
$quote2 = Movie::bestQuoteMovie2();
$movie2->locandina = 'https://pad.mymovies.it/filmclub/2016/10/034/locandina.jpg';




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php oop-1</title>
</head>
<body>
    <img src="<?php echo $movie1->locandina ; ?>" alt="<?php echo $movie1->name; ?>">
    <h2>Il Titolo del film: <?php echo $movie1->name; ?> </h2>
    <p> Genere: <?php echo $movie1->genre; ?></p>
    <p> Regia: <?php echo $movie1->regia; ?></p>
    <p> Anno: <?php echo $movie1->year; ?></p>
    <p> Quote: <?php echo $quote1; ?> </p>

    <img src="<?php echo $movie2->locandina ; ?>" alt="<?php echo $movie2->name; ?>">
    <h2>Il Titolo del film: <?php echo $movie2->name; ?> </h2>
    <p> Genere: <?php echo $movie2->genre; ?></p>
    <p> Regia: <?php echo $movie2->regia; ?></p>
    <p> Anno: <?php echo $movie2->year; ?></p>
    <p> Quote: <?php echo $quote2; ?> </p>
</body>
</html>