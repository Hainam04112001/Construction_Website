<?php

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on')
    $link = "https";
else
    $link = "http";

$link .="://";

$link.= $_SERVER['HTTP_HOST'];

$link .= $_SERVER["REQUEST_URI"];

?>


<?php
    $res=mysqli_query($conn,"SELECT * FROM `navigation` WHERE STATUS ='Published'");
?>
<nav class="navigation" id="nav" >
        <img src="logo.jpg" alt="Not Found" srcset="">
        <div class="navLeft">
            <?php
                while($data=mysqli_fetch_assoc($res)){
                    ?>
                        <a href="<?php echo $data['link'];?>" class="<?php echo $data['link']=='contact.php'?'btn':'';?>" id="<?php echo basename($link)==$data['link']?basename($link)=='contact.php'?'contactActive':'activeNav':'';?>"><?php echo $data['page_name']?></a>
                    <?php
                }
            ?>
        </div>
</nav>

    <!-- Responsive Nav -->
    <?php include('responsivenav.php') ?>
    <script>
        $("#bars").click(()=>{
            $('#resmenu').css('display','flex');
        });
        $('#resClose').click(()=>{
            $('#resmenu').css('display','none');
        });
    </script>
