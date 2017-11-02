<?php
function note(){
$bdd = new PDO('mysql:host=localhost;dbname=tacosinlyon;charset=utf8', 'root', '');

if (isset ($_GET['stars'])){
                $note = $_GET['stars'];
                $addnote = $bdd->prepare("INSERT INTO `notation` (note,idArticle) VALUES (?, 1)");
                $addnote->execute(array($note));   
}
?>
    <style type="text/css">
        /* 
         * Rating styles
         */
        .rating {
            width: 226px;
            margin: 0 auto 1em;
            font-size: 45px;
            overflow:hidden;
        }
        .rating a {
            float:right;
            color: #aaa;
            text-decoration: none;
            -webkit-transition: color .4s;
            -moz-transition: color .4s;
            -o-transition: color .4s;
            transition: color .4s;
        }
        .rating a:hover,
        .rating a:hover ~ a,
        .rating a:focus,
        .rating a:focus ~ a     {
            color: orange;
            cursor: pointer;
        }
        .rating2 {
            direction: rtl;
        }
        .rating2 a {
            float:none
        }
         
    </style>
    <div class="rating rating2"><!--
        --><a href="?stars=5" title="Noter 5 étoiles">★</a><!--
        --><a href="?stars=4" title="Noter 4 étoiles">★</a><!--
        --><a href="?stars=3" title="Noter 3 étoiles">★</a><!--
        --><a href="?stars=2" title="Noter 2 étoiles">★</a><!--
        --><a href="?stars=1" title="Noter 1 étoile">★</a>
    </div>
	<?php
}?>