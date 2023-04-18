<footer id="footer">
    <div class="container">
        <div class="row top">
            <!--The footer section is divided into three widget-areas and are editable in the Administrationpanel-->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <?php dynamic_sidebar('footer-1') ?>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                <?php dynamic_sidebar('footer-2') ?>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                <?php dynamic_sidebar('footer-3') ?>
            </div>
        </div>
        <div class="row bottom">
            <div class="col-xs-12">
                <p>Copyright &copy; Grupp X, 2023</p>
            </div>
        </div>
    </div>

    <?php wp_footer(); ?>
</footer>

</div>

</body>

</html>