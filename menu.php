<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Ewert' rel='stylesheet'>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <style media="screen">
     <?php require 'style.css' ?>
    * { box-sizing: border-box; }

body { font-family: sans-serif; }

.carousel {
  background: #EEE;
}

.carousel-cell {
  width: 30%;
  /* height: 200px; */
  margin-right: 10px;
  background: #8C8;
  border-radius: 5px;
  counter-increment: carousel-cell;
}

.carousel-cell.is-selected {
  /* background: #ED2; */
}

/* cell number */
.carousel-cell:before {
  display: block;
  text-align: center;
  /* content: counter(carousel-cell); */
  line-height: 200px;
  font-size: 80px;
  color: white;
}
.card{
  /* width:400px; */
  background-color: black;
  color: white;
  border: 2px solid white;
}
  </style>
  <body class="text-center" style="background-color: black;">
    <h1 class="w3-center bg-danger text-white">DRINKS</h1>
     <!-- SOFT DRINKS -->
     <h3 class="w3-left bg-success text-white">SOFT DRINKS</h3><br><br>
    <div class="carousel" data-flickity='{ "groupCells": true }' style="background-color: black;">

      <div class="carousel-cell">
        <div class="card w-100" style="width:400px">
          <img class="card-img-top" src="images/Soft Drinks/coca-cola.png" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">Coca-Cola or Coke</h4>
            <p class="card-text">
            Coca-cola was invented by Dr John S Pemberton on 8th May 1886 in Atlanta, Georgia. 
            He started selling coca-cola at a pharmacy nearby (Jacobs’ Pharmacy) for 5 cents per glass owing to the sudden popularity it had gained.
            Coca-cola is commonly known as coke in almost every state and is the largest selling cold drink in our country. 
            The company coca-cola has several other brands under their belt as well and captures about 60% of the market in India, whereas coke alone captures around 40% market share. 
            You will find coke in various packaging in your nearby stores such as plastic bottles, cans, glass bottles, etc. 
            Coca-Cola is one of the best soft drink brands in India.
            Coke price – Rs 40/- for a 600 ml bottle
            </p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
      <div class="carousel-cell">
        
        <div class="card w-100" style="width:400px">
          <img class="card-img-top" src="images/Soft Drinks/images.jpeg" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">Pepsi</h4>
            <p class="card-text">
            Did you know that Pepsi was first known as Brad’s drink? 
            It was changed to Pepsi Cola and then finally Pepsi. 
            This brand is hugely popular among Indians and is only second to coke when it comes to market shares. 
            Pepsi is considered as one of the best soft drink brands in India. 
            Pepsi gives a tough competition to coke in the Indian market. 
            Worldwide, there is always a Team Coke and Team Pepsi when it comes to choosing their favorite cola brand. 
            They capture around 30.8% of the market share. 
            Pepsi is sold worldwide; however, it came back to India in 1990 and has been popular ever since.
            Pepsi price – Rs 40/- for a 750 ml bottle
            </p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
      <div class="carousel-cell">
        
        <div class="card w-100" style="width:400px">
          <img class="card-img-top" src="images/Soft Drinks/6393423_preview.png" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">Sprite</h4>
            <p class="card-text">
            Sprite is a a soft drink brand from the coca-cola company and is very popular in the Indian market. 
            It was founded in India in 1999. 
            It surpassed Pepsi in 2009 and became the second most consumed soft drink in India. 
            The green colour packaging and unique flavour make it one of our favourite cold drinks. 
            Altogether, it is the most famous lime drink in our country and definately worthy of making to the list of soft drink brands in India.
            Price – Rs 35/- for a 300 ml can
            </p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>

      <div class="carousel-cell">
        <div class="card w-100" style="width:400px">
          <img class="card-img-top" src="images/Soft Drinks/d99e1cf6f7d55dd45e0bb8b3a78d7338.png" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">Maaza</h4>
            <p class="card-text">
            We recognize mango as the king of fruits and is also the national fruit of our country. 
            Our love for mangoes made Maaza one of the best selling mango flavoured drinks in the nation. 
            This company was acquired by coca-cola in 1993 and is now available in all parts of the world. 
            Maaza accounts for around 90% of the fruit juice market in the country and also has the highest market shares in the same. 
            Their competitors include brands like slice and Frooti.
            Price – Rs 35/- for a 750 ml bottle
            </p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
      <div class="carousel-cell">
        
        <div class="card w-100" style="width:400px">
          <img class="card-img-top" src="images/Soft Drinks/580b57fbd9996e24bc43c10c.png" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">Fanta</h4>
            <p class="card-text">
            Fanta replaced our first local soft drink brand gold spot. 
            Amazingly, Fanta was launched during world war II in Germany. 
            The name Fanta came from the German word “Fantasie”. 
            It had the same orange colour and flavour. 
            Due to this, it became a massive hit in the market back then and continues till this day. 
            Fanta is one of the most famous orange fizzy drinks in our country. 
            They sell their products in various packaging such as cans, bottles, glass bottles etc.
            </p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
      <div class="carousel-cell">
        
        <div class="card w-100" style="width:400px">
          <img class="card-img-top" src="images/Soft Drinks/7up-logo-png-transparent.png" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">7Up</h4>
            <p class="card-text">
            7Up is a widely popular lemon and lime flavoured drink in India and is only second to sprite in terms of sales. 
            This company is owned by PepsiCo and Dr Pepper Snapple group. 
            They also have a popular product named Nimbooz in India.
            Price – Rs 25/- for a 250 ml can
            </p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
      <div class="carousel-cell">
        
        <div class="card w-100" style="width:400px">
          <img class="card-img-top" src="images/Soft Drinks/png-clipart-logo-brand-vegetarian-cuisine-product-design-rowing-innovations-inc-logo-brand.png" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">Mirinda</h4>
            <p class="card-text">
            Mirinda is a very famous alternative to coca cola’s brand Fanta in the country. 
            No wonder it is owned by PepsiCo, the rival company to coca-cola. 
            The competition among these two giants continues to bring new and amazing varieties of soft drinks. 
            This brand was initially founded in Spain with multiple flavours to increase market shares.
            Price – Rs 40/- for a 750 ml bottle
            </p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
      <div class="carousel-cell">
        
        <div class="card w-100" style="width:400px">
          <img class="card-img-top" src="images/Soft Drinks/Limca-logo-edt.png" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">Limca</h4>
            <p class="card-text">
            Limca is another popular product from the coca-cola company and is among the best lemon and carbonated lime drinks in the country. 
            But it was created parle agro in 1971. Limca is one of the very first local soft drinks in India.
            Price – Rs 40/- for a 750 ml bottle
            </p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
      <div class="carousel-cell">
        
        <div class="card w-100" style="width:400px">
          <img class="card-img-top" src="images/Soft Drinks/images.png" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">Mountain Dew</h4>
            <p class="card-text">
            Since its invention in 1940 by ally Hartman and Barney, it became a trendy choice in the soft drink industry. 
            But later on, PepsiCo acquired the brand and started further distributions in India. 
            They quickly became a top choice among people through cheesy advertisements and good marketing techniques. 
            There also exist various varieties and flavors among this brand such as mountain dew red and cherry mountain dew. 
            Mountain dew is considered to be one of the most popular soft drink brands in India.
            Price – Rs 35/- for a 600 ml bottle
            </p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
    </div>
    <!-- SOFT DRINKS ENDS -->
    <br><br>
    <!-- BEER -->
    <h3 class="w3-left bg-success text-white">BEER</h3><br><br>
    <div class="carousel" data-flickity='{ "groupCells": true }' style="background-color: black;">

      <div class="carousel-cell">
        <div class="card w-100" style="width:400px">
          <img class="card-img-top" src="images/Beer/256-2569166_kingfisher-bottles-kingfisher-beer.jpeg" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">Kingfisher</h4>
            <p class="card-text">
              Kingfisher beer is India's greatest selling beer brand with commanding market dominance and is widely popular among Young beer lovers.
              The beer's collection includes both lighter beers, including Kingfisher Lager and Kingfisher Premium, and beer like Kingfisher Super and Extreme Max with a higher alcohol volume.
              With a good mix of malty and citrusy grains, Kingfisher beers seem to be fresh in flavor. 
              Premium, leading towards its superior quality and tremendously budget-friendly rate, is one of Kingfisher's most common popular variants.
            </p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
      <div class="carousel-cell">
        
        <div class="card w-100" style="width:400px">
          <img class="card-img-top" src="images/Beer/index.jpeg" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">Carlsberg</h4>
            <p class="card-text">
            Carlsberg is one of the most widely known craft beers and beer manufacturers in the country with a sneaky catchphrase of 'Probably the Best Beer in the World.' 
            Carlsberg Elephant Strong Super Premium, which is incredibly potent and emerges with a vibrant malty character, will probably be the greatest-selling type in Carlsberg beers. 
            Throughout this beer, there is also a dry resentment that is extremely gratifying, and as the title indicates, a strong hue of alcohol that is fantastic for festivities.
            </p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
      <div class="carousel-cell">
        
        <div class="card w-100" style="width:400px">
          <img class="card-img-top" src="images/Beer/765-7659328_cerveja-budweiser-343.jpeg" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">Budweiser</h4>
            <p class="card-text">
            Budweiser placed between Indian beer enthusiasts' best options, undoubtedly amongst the most popular beer brands often ordered at pubs and purchased from the kas in equal proportion.
            A tasty, medium-bodied American-style white craft beer is the legacy edition of Budweiser Premium, although the Budweiser Magnum is for anyone with an affinity for harder beverages.
            It is also among the most famous beer brands, something that is all too commonly correlated with the very first taste of beer someone encounters, not only in India but throughout the world.
            </p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>

      <div class="carousel-cell">
        <div class="card w-100" style="width:400px">
          <img class="card-img-top" src="images/Beer/Jrt37v.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">Tuborg</h4>
            <p class="card-text">
            Tuborg breweries are manufactured in India by Carlsberg company and are recognized for being among the nation's most luxury bottle-fermented malt beers.
            Tuborg Green is gentle and natural, with a delicate balancing act between flowers and cereals' aromas. This beer is medium-rich, with a mild volume of sweetness, and appears at an incredibly simple cost on the pockets.
            Tuborg Strong seems to be the most efficient Tuborg beer type, released with the desire for powerful beers among the Indian consumer base in view.
            </p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
      <div class="carousel-cell">
        
        <div class="card w-100" style="width:400px">
          <img class="card-img-top" src="images/Beer/heineken_bucket_brand_new_x3_1541840785_568789ff.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">Heineken</h4>
            <p class="card-text">
            In India, maybe because of its budget-friendly market value thrown in with the stronger, frothier taste, Heineken has gained a massive fan following, not noticed very regularly in many other globally mass-manufactured lager beers. 
            This flawlessly carbonated beer, particularly when you try and put some ice into the blend, is incredibly smooth to drink on. 
            Heineken's pale lager beer is the nation's finest variety, and everyone knows the recognizable green bottle and a red star.
            </p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
      <div class="carousel-cell">
        
        <div class="card w-100" style="width:400px">
          <img class="card-img-top" src="images/Beer/top-10-beer-brands-in-india6.png" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">Foster's</h4>
            <p class="card-text">
            Foster's Lager Beer is indeed one of the nation's finest packaged lager beers, and the sophisticated flavor is more often than justified by the evidence. 
            Foster's Lager features a light-colored larger variety, teeming with a full-grain flavor and a smooth hop bitterness ratio. 
            This filled beer is highly safe to drink and has an appealing botanical fragrance topping it off. 
            Foster's Stronger is also a fantastic choice if you want a dark flavor and a tougher beverage experience.
            </p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
      <div class="carousel-cell">
        
        <div class="card w-100" style="width:400px">
          <img class="card-img-top" src="images/Beer/4c04b953e95dc53c4411ad06138148df_640x640.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">Haywards 5000</h4>
            <p class="card-text">
            The Haywards beer label is widely regarded because of its popular and tough-hitting Haywards 5000 strong beer, including 7 percent alcohol. 
            The brand was introduced as to expand the famous Haywards alcohol company in 1974, with the Haywards 2000 gentle beer (founded in the 1900s). 
            It was further launched in 1978 via Haywards. 
            It has a certain after-taste, which individuals seem to appreciate, able or dislike. 
            Haywards 5000 also provides a special ultra-strong beer named Haywards 10000. 
            Haywards maintains a revenue share of almost 11%. 
            In Rajasthan, Madhya Pradesh, Haryana, Punjab, and Chattisgarh, it is mainly selling beer.
            </p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
      <div class="carousel-cell">
        
        <div class="card w-100" style="width:400px">
          <img class="card-img-top" src="images/Beer/504963-godfather-beer.webp" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">Godfather</h4>
            <p class="card-text">
            Godfather is a stunningly incredibly simple to drink lager, which has a smooth taste of major cereal crops sweetness, complemented by a prominent touch of smokiness and lots of body. 
            Each beer has moderate to high carbonated water with an overwhelming hoppy, malty taste.
            </p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
      <div class="carousel-cell">
        
        <div class="card w-100" style="width:400px">
          <img class="card-img-top" src="images/Beer/Hoegaarden-Beer.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">Hoegaarden</h4>
            <p class="card-text">
            Hoegaarden is renowned for becoming craft-y until craft beers became as commonplace as they've been, drank on with a lot of pleasure by beer drinkers including over 70 nations. 
            In all the varieties of Hoegaarden beers, the combination of tastes is totally on the mark. 
            However, the one we can suggest the most is Hoegaarden's First Belgian Wheat Beer. With the perfect amount of sugar, it has a delicious fizzy flavor- that makes the beer perfect for fast consumption.
            </p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
    </div>
    <!-- BEER ENDS -->
    <br><br>
    <!-- WINE -->
    <h3 class="w3-left bg-success text-white">WINE</h3><br><br>
    <div class="carousel" data-flickity='{ "groupCells": true }' style="background-color: black;">

      <div class="carousel-cell">
        <div class="card w-100" style="width:400px">
          <img class="card-img-top" src="images/Wine/bf970230639985.562c9eaa74eb9.png" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">Fratelli Sangiovese Bianco</h4>
            <p class="card-text">
              Fratelli Sangiovese Bianco is a unique and most popular white wine brand made in India.
              The wine has base aromas of coconut and bougainvillaeas flowers. 
              Sipping and swirling impart flavours of vanilla and violet flowers, which is rare for white wines.
              It is made with grapes from Nimgaon, Maharashtra by the Indo-Italian JV, Fratelli Wines.
              It is Priced at Rs. 800 to Rs 950.
            </p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
      <div class="carousel-cell">
        
        <div class="card w-100" style="width:400px">
          <img class="card-img-top" src="images/Wine/sauvignon-blanc2.png" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">Krsma Sangiovese</h4>
            <p class="card-text">
            Krsma Sangiovese is an excellent white brand wine that comes from Krsma Estates Pvt. Ltd.
            The company describes the wine in the following words: “A lovely garnet colour in the glass, this wine greets the nose with aromas of spice, red berries and jasmine, typical of KRSMA Sangiovese.
            An elegant, medium-light body and notes of red cherries and brown spices are to be found on the palate and is rounded out be a pleasantly smooth finish.”
            It contains 13.4 percent ABV. It goes well with seafood, chicken starters, salads and white meat main courses.
            Krsma Sangiovese price in India: Rs 1000
            </p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
      <div class="carousel-cell">
        
        <div class="card w-100" style="width:400px">
          <img class="card-img-top" src="images/Wine/charosa-vineyards-india-reserve-cabernet-sauvignon-1624490-s571_e.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">Charosa Selections Sauvignon Blanc</h4>
            <p class="card-text">
            From Charosa Vineyards, Nashik, this white wine has 13.4 ABV. It is best enjoyed with starters and appetizers, especially seafood and chicken dishes as well as salads.
            It comes with intense tropical flavours of gooseberry and orange with grassy freshness. It goes excellently with seafood and chicken sizzlers.
            Charosa Selections Sauvignon Blanc price in India: Rs 750 – 850
            </p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>

      <div class="carousel-cell">
        <div class="card w-100" style="width:400px">
          <img class="card-img-top" src="images/Wine/62861822.cms.jpeg" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">Zampa Soiree Brut</h4>
            <p class="card-text">
            Made by Grover Zampa Vineyards, it is described as: “An elegant wine with brilliant golden straw hues and a fresh nose that reveals citrus and floral aromas.”
            It is an excellent sparkling wine that carries fruity notes and creaminess reminiscences the classic elegance, exemplifying craftsmanship and finesse.
            Fresh notes of brioches and dried apricots add to the long finish of this glamorous wine.
            It is best served as an aperitif and can be paired with mildly spiced Indian, Japanese, Chinese or Thai dishes.
            Zampa Soiree Brut price in India: Rs 1000 – 1200
            </p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
      <div class="carousel-cell">
        
        <div class="card w-100" style="width:400px">
          <img class="card-img-top" src="images/Wine/IMG_0522-401x600.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">York Sparking Cuvee Brut </h4>
            <p class="card-text">
            From Nashik-based York Vinery, this is an excellent sparkling wine.
            “The Chenin Blanc used to make this wine is grown in some of the coolest parts of Nashik to achieve high levels of natural acidity desirable for a good sparkling wine.
            After hand picking and sorting, the grapes are gently pressed. Only the first press fraction called the ‘Cuveé’ which is of the highest quality is used to make the base wine.
            Part of this wine is fermented and aged in French barrels,” states the company.
            This wine is a perfect appetizer and pairs well with mildly spicy Indian food.and it is one of the best wine in India. It’s ABV is 13.4 percent.
            York Sparking Cuvee Brut price in India: Rs 1000 – 1200
            </p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
      <div class="carousel-cell">
        
        <div class="card w-100" style="width:400px">
          <img class="card-img-top" src="images/Wine/Myra-Reserve-Shiraz-300x263.png" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">Myra Reserve Shiraz</h4>
            <p class="card-text">
            Myra Reserve Shiraz is an elegant purple-red wine brand and is created from hand-selected grapes. Red wine price in India is quite decent.
            Its medium-bodied palate has a soft finesse-filled tannin structure wine is purple-red in colour made with hand-selected grapes and nurtured in finest oak barrels for 12 months.
            The medium-bodied palate has an elegant soft tannin structure. Its gentle oak and vanilla nose and palate makes it a perfect complement to grilled meats and seafood, and medium-spicy Indian food, says its maker, Myra Vineyards.
            Myra Reserve Shiraz price in India: Rs 800 – 950
            </p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
      <div class="carousel-cell">
        
        <div class="card w-100" style="width:400px">
          <img class="card-img-top" src="images/Wine/sula-wine.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">Sula Dindori Reserve Shiraz</h4>
            <p class="card-text">
            Sula Dindori Reserve Shiraz is a powerful, intense wine, with flavours of berries and vanilla and a long pleasing finish.
            Pairs with meat dishes like mutton biryani, seekh kebabs, and lamb roast. It is best served slightly chilled.
            It is made of grapes grown on foothills of Dindori and aged in American oak barrels.
            Sula Dindori Reserve Shiraz is an excellent wine for outdoor BBQ parties and goes well with different cheese.
            Sula Dindori Reserve Shiraz price in India: Rs 900 – 1200
            </p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
      <div class="carousel-cell">
        
        <div class="card w-100" style="width:400px">
          <img class="card-img-top" src="images/Wine/Four-Seasons-Blush-300x263.png" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">Four Seasons Blush</h4>
            <p class="card-text">
            Four Seasons Blush is a unique pink wine made by Four Seasons Vineyards, Baramati, Maharashtra.
            This excellent wine has tonnes of violets and roses bouquet and combines aromas of freshly crushed strawberries with hints of sweet spice.
            It is described as: “A deliciously fruity, off-dry wine with balancing acidity; refreshing, youthful and fun.”
            Four Season Blush can be served as an aperitif or paired with tandoori dishes and other mildly spiced Indian and Asian foods. It also goes well with Italian cuisine.
            Four Seasons Blush price in India: Rs 650 – 800
            </p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
      <div class="carousel-cell">
        
        <div class="card w-100" style="width:400px">
          <img class="card-img-top" src="images/Wine/chenin-blanc-big-banyan-wines.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">Big Banyan Cabernet Sauvignon</h4>
            <p class="card-text">
            Big Banyan Vineyards makes this exclusive Cabernet wine with grapes from the Nashik. It is a luscious, ruby red, with purple tints glinting in the light.
            “The intense colour is accompanied by equally intense and complex spice notes. It is a heady mix of sharp eucalyptus, sweet fruit, and fragrant oak. Velvety tannins leave a dry sensation on the back of your mouth.
            It pairs well with spicy Indian meat dishes, and strong, pungent cheeses, burgers, and pizzas.
            Big Banyan Cabernet Sauvignon price in India: Rs 800 – 900
            </p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
    </div>
    <!-- WINE ENDS -->

    
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

  <?php require 'footer.php' ?>
  </body>
</html>