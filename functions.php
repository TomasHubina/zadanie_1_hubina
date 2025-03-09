<?php function generateSlide($dir) {
    $files = glob($dir . "/*.jpg");
    $json = file_get_contents("data/data.json");
    $data = json_decode($json, true);
    $text = $data["foto"];
                                
    foreach ($files as $file) {
        echo "<div class='slide-fade'>";
        echo '<img src="' . $file . '">';
        echo '<div class="slide-text">';
                                
        echo ($text[basename($file)]); 
        echo '</div>';
        echo '</div>';
        }
    }
generateSlide("images/img");
?>