<!-- JQuery 3.x -->
<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<!-- FontAwesome -->
<script src="https://kit.fontawesome.com/bfcc361c81.js" crossorigin="anonymous"></script>
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
<!-- Custom JS -->

<!-- CkEditor -->
<script src="https://cdn.ckeditor.com/4.20.2/standard-all/ckeditor.js"></script>

<!-- Propperjs? -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>

<!-- Bootstrap? -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const customSelects = document.querySelectorAll('.custom-select');
        customSelects.forEach(customSelect => {
            const toggle = customSelect.querySelector('.custom-select-toggle');
            const options = customSelect.querySelector('.custom-select-options');

            let isOpen = false;

            toggle.addEventListener('click', function(event) {
                event.stopPropagation();
                isOpen = !isOpen;
                options.style.display = isOpen ? 'block' : 'none';
            });

            const optionElements = options.querySelectorAll('.custom-select-option');
            optionElements.forEach(option => {
                option.addEventListener('click', function() {
                    toggle.textContent = option.textContent;
                    isOpen = false;
                    options.style.display = 'none';
                });
            });
        });

        document.addEventListener('click', function() {
            customSelects.forEach(customSelect => {
                const options = customSelect.querySelector('.custom-select-options');
                options.style.display = 'none';
            });
        });
    });
</script>

<script>
    // use "debounce" method
    var resizeTimer;

    $(window).on('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            // Find screen width ratio
            var sWidth = $(window).width();
            var sHeight = $(window).height();
            // check if screen width is less than 769px (before tablet size)
            if (sWidth < 768) {
                $(".desktop").hide();
                $(".mobile").show();
            } else {
                $(".mobile").hide();
                $(".desktop").show();
            }
        }, 0); // Adjust the debounce interval as needed
    });

    // Trigger the resize event initially to get the initial window size
    $(window).trigger('resize');
</script>

<script>
    var konten = document.getElementById("spesifikasi");
    CKEDITOR.replace(konten, {
        width: '100%',
        extraPlugins: 'editorplaceholder',
        editorplaceholder: 'Deskripsi spesifikasi kamar...',
        uiColor: '#CCEAEE'
    });
    CKEDITOR.config.allowedContent = true;
</script>
