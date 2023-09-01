<?php
    $navigation = 
    [
        'Quick Tips' => 'tips.php',
        'Self Improvement' => 'improvement.php',
        'login' => 'loginpage.php'
    ];
?>

<div class="navbar">
    <ul>
        <?php
            foreach($navigation as $sitename => $filename) {
                if($sitename == 'Quick Tips') {
                    echo '<li><a href="'.$filename.'"><i class="fa-solid fa-solid fa-heart"></i>&nbsp;'.$sitename.'</a></li>';  
                }
                else if($sitename == 'Self Improvement') {
                    echo '<li><a href="'.$filename.'"><i class="fa-solid fa-arrow-trend-up"></i>&nbsp;'.$sitename.'</a></li>';  
                }
                else if($sitename == 'login') {
                    echo '<li><a href="'.$filename.'"><i class="fa-solid fa-right-to-bracket"></i>&nbsp;'.$sitename.'</a></li>'; 
                }
            }
        ?>
    </ul>
</div>