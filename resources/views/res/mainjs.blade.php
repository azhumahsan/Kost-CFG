<!-- JQuery 3.x -->
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- FontAwesome -->
<script src="https://kit.fontawesome.com/bfcc361c81.js" crossorigin="anonymous"></script>
<!-- YSSlider -->
<script src="dist/js/ysslider.js"></script>
<script>
  var mySlider = new ysSlider({
    animate: true,
    auto: true,
    pause: 2000,
    controls: true,
    controlBar: '.controlbar',
    touch: true,
    wrapper: '.ysslider',
    itemClass: '.item'
  });
  document.querySelector(".prev").onclick = function () {
    mySlider.prev();
  }
  document.querySelector(".next").onclick = function () {
    mySlider.next();
  }
</script>