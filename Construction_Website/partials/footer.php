<?php
    $res=mysqli_query($conn,"SELECT * FROM `navigation` WHERE STATUS ='Published'");
?>
<footer>
        <div class="innerFooter">
            <div>
                <b>About Us</b>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, cumque.</p>
            </div>
            <div class="footerNav">
                <?php
                    while($data=mysqli_fetch_assoc($res)){
                    ?>
                        <a href="<?php echo $data['link'];?>" class="<?php echo $data['link'];?>" id="<?php echo basename($link)==$data['link']?'activeNav':'';?>"><?php echo $data['page_name']?></a>
                    <?php
                    }
                ?>
            </div>

        </div>
        <div class="copytrighFooter">
            <b><i class="fa fa-copyright" aria-hidden="true"></i> <span> Copytright</span>
                <?php echo date('Y');?> All right Reserved
            </b>
            <ul>
                <?php 

                    $res2=mysqli_query($conn,"Select * from social_media where status = 'Published'");
                    while($social=mysqli_fetch_assoc($res2)){
                        if($social['name']=='Facebook'){
                            ?>
                            <a href="<?php echo $social['link'];?>"><i class="fa-brands fa-facebook" aria-hidden="true"></i></a>
                            <?php
                        }
                        elseif($social['name']=='Instagram'){
                            ?>
                            <a href="<?php echo $social['link'];?>"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
                            <?php
                        }
                        elseif($social['name']=='Twitter'){
                            ?>
                            <a href="<?php echo $social['link'];?>"><i class="fa-brands fa-twitter" aria-hidden="true"></i></a>
                            <?php
                        }
                        elseif($social['name']=='Linkedin'){
                            ?>
                            <a href="<?php echo $social['link'];?>"><i class="fa-brands fa-linkedin" aria-hidden="true"></i></a>
                            <?php
                        }

                    }
                    
                ?>
                
                <!-- <a href="#"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa-brands fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin" aria-hidden="true"></i></a> -->
            </ul>
        </div>
    </footer>