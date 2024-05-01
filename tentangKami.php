<?php include 'layouts/header.php' ?>

<?php include 'layouts/navbar.php' ?>

<?php include 'lib/file_util.php'?>


<div class="row mt-3 text-center">
    <iframe class="animate__animated animate__fadeInUp" width="100%" height="500" src="https://www.youtube.com/embed/vLTq8S5ImHo?si=geWCAYP8JzWW_UPX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    <div class="text-justify">
        <p class="animate__animated animate__fadeInUp" style="text-align:justify; color:white;">

            <?php
            $fileObject = new FileUtil("Banyuwangi.txt");
            $str_data = $fileObject->readTxtFile();
            echo $str_data;
            ?>

        </p>
    </div>

</div>
<?php include "layouts/footer.php" ?>