</main>
        <?php get_footer(); ?>
    </div>
    <footer id="footer" role="footer">
        <a href="http://localhost/plante/">Mentions légales</a>
    </footer>
</div>
<?php wp_footer(); ?>
<script>
    const menuBurger = document.querySelector(".material-symbols-outlined");
    const mobileMenu = document.querySelector(".responsive-navigation");

    menuBurger.addEventListener("click", () => {
        mobileMenu.classList.toggle("mobile-menu");

    });
    </script>
</body>
</html>
