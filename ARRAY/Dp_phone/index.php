

<?php
    $phone =[
        "1"=>[
                "image"=>"https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/832.jpg",
                "phoneName"=>"phoneName 1",
                "price"=>"100",
                "comment"=>4,
                "status"=>"new"
        ],
        "2"=>[
                "image"=>"https://m.media-amazon.com/images/I/413u56t%2BCiL._SX300_SY300_QL70_ML2_.jpg",
                "phoneName"=>"onePlus Nord Ce 2 lite",
                "price"=>"80000",
                "comment"=>5,
                "status"=>"new"
                
        ],
        "3"=>[
                "image"=>"https://images.ctfassets.net/wcfotm6rrl7u/6d62WgRqaoSHUHTNzXNiBF/f8768a2a14d8bcb8a788c3d5c5478dbb/nokia-110-pink-front-int.png",
                "phoneName"=>"the latest android nokia smartphone and mobile phones",
                "price"=>"50000",
                "comment"=>7,
                "status"=>"old"
                
        ],
        "4"=>[
                "image"=>"https://www.91-img.com/pictures/143993-v4-apple-iphone-14-mobile-phone-large-4.jpg",
                "phoneName"=>"Apple Iphone 14 Price in India, Full Specs",
                "price"=>"300000000",
                "comment"=>3,
                "status"=>"new"
                
        ],
        "5"=>[
                "image"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxGK5RmZwvbA3TMta-vMGFL6kCU3aTUCq5Nw&usqp=CAU",
                "phoneName"=>"the best Free phone Stock",
                "price"=>"600000",
                "comment"=>3,
                "status"=>"old"
                
        ],
        "6"=>[
            "image"=>"https://www.fairphone.com/wp-content/uploads/2021/09/FP4-GREY_compressed.jpg",
            "phoneName"=>"Fairphone| the phone that cares for people and planet",
            "price"=>"95000",
            "comment"=>5,
            "status"=>"new"    
        ],
        "7"=>[
            "image"=>"https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone-card-40-iphone14pro-202209_FMT_WHH?wid=508&hei=472&fmt=p-jpg&qlt=95&.v=1663611329204",
            "phoneName"=>"Iphone-Apple",
            "price"=>"543000",
            "comment"=>4,
            "status"=>"new"    
        ],
        "8"=>[
            "image"=>"https://cdn.vodafone.co.uk/en/assets/images/desktop/Apple_iPhone_12_black-full-product-front-600.png",
            "phoneName"=>"repfurbished Iphone 12 for business| vodaphone UK",
            "price"=>"4500000",
            "comment"=>3,
            "status"=>"old"    
        ],
        "9"=>[
            "image"=>"https://hips.hearstapps.com/vader-prod.s3.amazonaws.com/1647622740-samsung-galaxy-a53-1647622731.jpg",
            "phoneName"=>"Samsung phone of 2023",
            "price"=>"56000",
            "comment"=>6,
            "status"=>"old"    
        ],
        "10"=>[
            "image"=>"https://image01.realme.net/general/20230109/1673256478717.png",
            "phoneName"=>"Realme Smartphone and offers",
            "price"=>"8690000",
            "comment"=>2,
            "status"=>"old"    
        ]

    ]

?>


<html> 
    <head>
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    </head>
<body> 
<div class="container">
    <div class="header">
        <div class="logo">
            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/3/32/Tesco_Mobile.svg/1200px-Tesco_Mobile.svg.png" style="width:200px; height:80px; "alt="">
        </div>
        <div class="search">
            <input type="text" name="search" placeholder="             researching..." id="search"><i></i>
        </div>
        <div class="log">
            <div class="login">login</div>
            <div class="register">signup</div>
        </div>
    </div>






    <div class="content">
        <h3 class="title">*noi bat nhat*</h3>
        <div class="noibat">
            
           <?php
            foreach($phone as $key=>$value){
            if($value["status"]=="new"){?>
            <div class="card" style="width:200px;height:450px;">
                <img src="<?php echo $value["image"];?>" alt="" class="card-img-top" style=" width:100%; heigth:50%;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $value["phoneName"]; ?></h5>
                    <p class="card-title"><?php echo $value["price"];?> </p>
                    <?php for($i=0;$i<$value["comment"];$i++){?>
                        <i class="fas fa-star">*</i>
                        <?php }?>
                    <p class="card-title">đánh giá</p>
                </div>
            </div>
            <?php
        } }?>
        </div>
        <div class="moinhat">

        </div>
    </div>
    <div class="footer"></div>


</div>
</body>
</html>