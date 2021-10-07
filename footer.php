    
    <!-- footer content -->
    <footer>
        <!-- your code will goes here -->
    </footer>
    <!-- scripts -->
    <script src="assets/frontend/js/jquery-3.6.0.min.js"></script>
    <script src="assets/frontend/js/bootstrap.bundle.min.js"></script>


    <!-- custom js -->
    <script>
        $(document).ready(function(){
            let social_icons = $('.social_icons');
            social_icons.hide();
            $('.card-img-top').mouseenter(function(){
                social_icons.slideToggle();
            });
        });
    </script>
</body>
</html>