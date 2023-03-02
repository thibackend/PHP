<?php
    $school=[
    //  (key)
        "student"=>  [   
                        "sv01"=>[
                            "name"=>"Phan van cuong",
                            "birth"=>"10/11/1988",
                            "gender"=>"male"
                        ],
                        "sv02"=>[
                            "name"=>"nguyen van hoang",
                            "birth"=>"04/12/1990",
                            "gender"=>"male"
                        ]
                    ],
        "teacher"=> [
                        "gv01"=>[
                                    "name"=>"tran thien thanh",
                                    "birth"=>"04/06/1982",
                                    "gender"=>"male"
                                ],
                        "gv02"=>[
                                    "name"=>"Nguyen Van Hieu",
                                    "birth"=>"19/09/1909",
                                    "gender"=>"male"
                                ]
                    ]

            ];

?>
<html>
<body>
    
<table> 
    <tr> 
        <th>Position</th>
        <th>ID</th>
        <th>Name</th>
        <th>Birth</th>
        <th>Gender</th>
    </tr>

    <?php foreach($school as $key=>$value){?>
        <tr>
            <th><?php echo $key;?></th>
            <?php foreach($value as $key1=>$value1){?>
            <th><?php echo $key1; ?></th>
            <th><?php echo $value1["name"] ;?></th>
            <th><?php echo $value1["birth"];?></th>
            <th> <?php echo $value1["gender"];?></th>
            <?php break;}?> 
        </tr>
    <?php }?>
</table>
</body>




</html>