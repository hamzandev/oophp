<?php

class Human {
    protected $name, $age, $gender;
    
    public function __construct(String $name = 'No name', int $age = 0, String $gender = 'Unset') {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }
    
    public function walk()
    {
        echo "$this->name is walking!";
    }
    
    public function eat()
    {
        echo "$this->name is eating Mie Ayam now...";
    }
    
    public function sleep()
    {
        echo "$this->name is sleeping don't be noise...";
    }
    
    public function introduceHuman()
    {
        echo "Hello, i am $this->name. I am $this->age years old and i am a $this->gender";
    }
}

class Programmer extends Human 
{
    private $skills, $experiences, $job;
    
    public function __construct(array $biodata, array $skills, array $experiences, String $job) {
        $this->skills = $skills;
        $this->experiences = $experiences;
        $this->job = $job;
        $this->name = $biodata['name'];
        $this->age = $biodata['age'];
        $this->gender = $biodata['gender'];
    }
    
    public function writeCode(String $ide)
    {
        echo "$this->name is writing code using $ide ...";
    }
    
    public function getNewJob(String $newJob)
    {
        $this->job = $newJob;
        echo "$this->name going to get a new job as $this->job";
    }
    
    public function playSomeGame(String $gameName)
    {
        echo "$this->name is playing a game named $gameName. Wanna play together??";
    }
    
    public function introduceYourself()
    {
        echo "My Experiences : <br>";
        foreach ($this->experiences as $ex) {
            echo "$ex <br>";
        }
        
        echo "<br>My Skills :<br>";
        foreach ($this->skills as $skill) {
            echo "$skill <br>";
        }
    }
}

class Gamer extends Human {
    private $rank, $games, $level;
    
    public function __construct(array $biodata, array $games, String $rank = 'Unset', int $level = 0) {
        $this->rank = $rank;
        $this->games = $games;
        $this->level = $level;
        $this->name = $biodata['name'];
        $this->age = $biodata['age'];
        $this->gender = $biodata['gender'];
    }
    
    public function introduceGamer()
    {
        echo "The Games that are i ever play for : <br>";
        foreach ($this->games as $game) {
            echo "$game <br>";
        }
        echo "My rank now : $this->rank <br>";
        echo "My level now : $this->level <br>";
    }
    
    
}


$programmer = new Programmer(
    biodata: [
        'name' => "Hamzan Wahyudi",
        'age' => 18,
        'gender' => 'Male'
    ],
    skills: ['PHP', 'ReactJS', 'TailwindCSS', 'Sass'], 
    experiences: ['Work in Google', 'Work as a Freelancer'], 
    job: 'Frontend Web Developer'
);

$programmer->introduceHuman();
echo "<br>";
$programmer->introduceYourself();
echo "<br>";
$programmer->eat();
echo "<br>";
$programmer->playSomeGame("Mobile Legends");
echo "<br>";
$programmer->writeCode('VSCode');
echo "<br>";
$programmer->getNewJob('Hacker');

// =============

$gamer1 = new Gamer(
    biodata: [
        'name' => 'Jess No Botack',
        'age' => 24,
        'gender' => 'Male'
    ],
    games: ['Mobile Legends', 'Free Fire', 'PUBG Mobile', 'CODM'],
    rank: 'Pro',
    level: '129'
);

echo "<br>";
echo "<br>";
$gamer1->introduceHuman();
echo "<br>";
$gamer1->introduceGamer();
