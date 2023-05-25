<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo Filtre auteur</title>
    <style>
    html{
        font-family : "arial";
    }
    form {
        margin : 20px;
    }
    .container{
        display : flex;
        flex-direction : row;
        gap : 10px;
        flex-wrap : wrap;
    }
    .container2{
        display : flex;
        flex-direction : column;
        margin-bottom : 10px;
    }
   
    .auteur{
        text-transform : capitalize;
    }
    img{
        width : 150px;
    }

    </style>
</head>
<body>

<p>liste des auteurs disponible : Guillaume Musso, Mélissa Da Costa, Franck Thilliez, Jean Anouilh, Julien Sandrel</p>
<form  method="POST">
<label for="author">Choix d'un auteur</label>
<input type="text" id="author" name="author">
<input type="submit" value="envoyer">
</form>

    <?php
    

    $books = [
        [
            'name' => 'Et Après...',
            'author' => 'Guillaume Musso',
            'releaseYear' => 2004,
            'purchaseUrl' => 'https://www.amazon.fr/Apr%C3%A8s-Guillaume-Musso-ebook/dp/B078QYGV4T/ref=zg_bs_301132_sccl_4/257-7811771-1836039?psc=1',
            'image' => 'https://m.media-amazon.com/images/I/417cph5LaTL._SY346_.jpg'
        ],
        [
            'name' => 'Sauve-moi',
            'author' => 'Guillaume Musso',
            'releaseYear' => 2005,
            'purchaseUrl' => 'https://www.amazon.fr/gp/product/B078QYYHB8/ref=dbs_a_def_rwt_hsch_vapi_tkin_p1_i3',
            'image' => 'https://m.media-amazon.com/images/I/41JMDwduQ9L._SY346_.jpg'
        ],
        [
            'name' => 'Tout le bleu du ciel',
            'author' => 'Mélissa Da Costa',
            'releaseYear' => 2020,
            'purchaseUrl' => 'https://www.amazon.fr/Tout-bleu-ciel-Melissa-Costa/dp/2253934100/ref=zg_bs_301132_sccl_8/257-7811771-1836039?psc=1',
            'image' => 'https://m.media-amazon.com/images/I/41YILoyBtRL._SY291_BO1,204,203,200_QL40_ML2_.jpg'
        ],
        [
            'name' => 'La Faille',
            'author' => 'Franck Thilliez',
            'releaseYear' => 2023,
            'purchaseUrl' => 'https://www.amazon.fr/Faille-Thriller-%C3%A9v%C3%A9nement-Nouveaut%C3%A9-2023/dp/226515556X/ref=zg_bs_301132_sccl_9/257-7811771-1836039?psc=1',
            'image' => 'https://m.media-amazon.com/images/I/419Miwm2eiL._SY291_BO1,204,203,200_QL40_ML2_.jpg'
        ],
        [
            'name' => 'La vie qui m\'attendait',
            'author' => 'Jean Anouilh',
            'releaseYear' => 2019,
            'purchaseUrl' => 'https://www.amazon.fr/vie-qui-mattendait-Litt%C3%A9rature-Fran%C3%A7aise-ebook/dp/B07N8CSFW5/ref=zg_bs_301132_sccl_10/257-7811771-1836039?psc=1',
            'image' => 'https://m.media-amazon.com/images/I/517rpUjeHSL._SY346_.jpg'
        ],
        [
            'name' => 'Antigone',
            'author' => 'Julien Sandrel',
            'releaseYear' => 2016,
            'purchaseUrl' => 'https://www.amazon.fr/Antigone-Jean-Anouilh/dp/2710381419/ref=zg_bs_301132_sccl_11/257-7811771-1836039?psc=1',
            'image' => 'https://m.media-amazon.com/images/I/41sWJT4sVKL._SY291_BO1,204,203,200_QL40_ML2_.jpg'
        ]
    ];
    
        
    function filterAuthor($arrBooks,$author){
        echo "<div class=\"container\">";
            foreach ($arrBooks as $value){
                echo "<div class=\"container2\">";
                $value['author'] = strtolower($value['author']);
                $author = strtolower ($author);
                
                if (strpos($value['author'],$author) !==false){
                    echo "<div class=\"image\"><img src=\"".$value['image']."\"></div>";
                    echo "<div class=\"auteur\">".$value['author']."</div>";
                    echo "<div>".$value['name']."</div>";
                    echo "<div>(".$value['releaseYear'].")</div>";
                    echo "<a href=\"".$value['purchaseUrl']."\">Achetez le livre</a>";
                }
                echo "</div>";
            }
        echo "</div>";  
    }
    
    $choiceAuthor = $_POST['author'];
    filterAuthor ($books,$choiceAuthor);

    ?>

</body>
</html>