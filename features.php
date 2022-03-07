

<?php include('templates/header.php'); ?>

<div class="imgs">
    <img name="piks" width="600" height="500">
</div>

<?php include('templates/footer.php'); ?>
<script>
    var i=0;
    var images = [];
    var time = 2000;
    images[0] = 'pics/birds.jpg';
    images[1] = 'pics/crater.jpg';
    images[2] = 'pics/crestedcrane.jpg';
    images[3] = 'pics/bunyonyi.jpg';
    images[4] = 'pics/fals.jpg';
    images[5] = 'pics/zebs.jpg';
    images[6] = 'pics/elephants.jpg';
    images[7] = 'pics/nakasero.jpg';
    images[8] = 'pics/lions.jpg';
    images[9] = 'pics/gorilla.jpg';

    function changeImg(){
        document.piks.src= images[i];

        if(i< images.length -1){
            i++;

        }else{
            i= 0;
        }

        setTimeout("changeImg()",time);
    }

    window.onload= changeImg;

</script>