<footer class="site-footer">
    <div class="copyright">
    </div>
</footer>
<?php wp_footer(); ?>
<script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>
<script>
    const splideInstance = new Splide('.splide').mount();
    const customPrevArrow = document.querySelector('.custom-prev-arrow');
    const customNextArrow = document.querySelector('.custom-next-arrow');

    customPrevArrow.addEventListener('click', function() {
        splideInstance.go('<');
    });

    customNextArrow.addEventListener('click', function() {
        splideInstance.go('>');
    });
</script>
</body>

</html>