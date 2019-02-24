<?php
class Article
{
    private $title;
    private $content;
    private $author;

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author): void
    {
        $this->author = $author;
    }

    /**
     * Article constructor.
     * @param $title
     * @param $content
     * @param $author
     */
    public function __construct($title, $content, $author)
    {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
    }
public function __toString()
{
    return $this->getTitle() . " - " . $this->getContent() . ": " . $this->getAuthor() . PHP_EOL;
}
}
$lines = intval(readline());
$array = [];
for($i=0;$i<$lines;$i++) {
    $commands = explode(", ", readline());
$array[] = new Article($commands[0],$commands[1],$commands[2]);
}
$criteria = readline();
uksort($array,function($key1,$key2) use($array,$criteria){
   if($criteria == "title"){
       $temp1 = $array[$key1]->getTitle();
       $temp2 = $array[$key2]->getTitle();
   }else if($criteria == "content"){
       $temp1 = $array[$key1]->getContent();
       $temp2 = $array[$key2]->getContent();

   } else if($criteria == "author") {
       $temp1 = $array[$key1]->getAuthor();
       $temp2 = $array[$key2]->getAuthor();
   }
   return $temp1 <=> $temp2;
});
foreach($array as $articles){
    echo $articles;
}