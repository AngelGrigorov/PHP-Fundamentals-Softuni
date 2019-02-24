<?php

class Library
{

    private $author;

    private $price;

    /**
     * Library constructor.
     * @param $author
     * @param $price
     */
    public function __construct($author, $price)
    {
        $this->author = $author;
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price += $price;
    }
}

$lines = intval(readline());
$library = [];
for ($i = 0; $i < $lines; $i++) {
    $input = explode(" ", readline());
        if(key_exists($input[1],$library)){
        foreach ($library as $authors) {
            if ($authors->getAuthor() === $input[1]) {
                $authors->setPrice($input[5]);
                break;
            }
        }

    }else {
            $library[$input[1]] = new Library($input[1], $input[5]);

        }

}
uksort($library, function($key1,$key2) use($library){
    $price1 = $library[$key1]->getPrice();
    $price2 = $library[$key2]->getPrice();
    $name1 = $library[$key1]->getAuthor();
    $name2 = $library[$key2]->getAuthor();
    if($price1 === $price2){
        return $name1 <=> $name2;
    }
    return $price2 <=> $price1;
});
foreach($library as $value){
    printf("%s -> %.2f\n",$value->getAuthor(),$value->getPrice());
}