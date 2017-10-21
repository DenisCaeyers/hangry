
    <footer class="site-footer">

        <div class="container-fluid hidden-md hidden-lg">
            <div class="footer-img"></div>
        </div>     
        
        <div class="container hidden-xs hidden-sm">
            <div class="footer-img"></div>
        </div>
        <div class="container">
            <div class="row">    
                <div class="col-xs-12">
                    <div class="text text-center">
                        <div class="title">Han•gry</div>
                        <div class="under">(han-gree) adj.</div> 
                        <p>When you're so hungry, you get a little bit angry.</p>
                        <h3>En wij willen daar van af!</h3>
                    </div>
                </div>
            </div>
        </div>
    </footer>
     <!-- Stripe -->
     <div class="container">
     <div class="row">
         <div class="stripes">
             <div class="col-xs-2 col-md-1">
                 <div class="pink-bg"></div>
             </div>
             <div class="hidden-xs hidden-sm col-md-1">
                 <div class="pink-bg"></div>
             </div>
             <div class="col-xs-2 col-md-1">
                 <div class="pink-bg"></div>
             </div>
             <div class="hidden-xs hidden-sm col-md-1">
                 <div class="pink-bg"></div>
             </div>
             <div class="col-xs-2 col-md-1">
                 <div class="pink-bg"></div>
             </div>
             <div class="hidden-xs hidden-sm col-md-1">
                 <div class="pink-bg"></div>
             </div>
             <div class="col-xs-2 col-md-1">
                 <div class="pink-bg"></div>
             </div>
             <div class="hidden-xs hidden-sm col-md-1">
                 <div class="pink-bg"></div>
             </div>
             <div class="col-xs-2 col-md-1">
                 <div class="pink-bg"></div>
             </div>
             <div class="hidden-xs hidden-sm col-md-1">
                 <div class="pink-bg"></div>
             </div>
             <div class="col-xs-2 col-md-1">
                 <div class="pink-bg"></div>
             </div>
             <div class="hidden-xs hidden-sm col-md-1">
                 <div class="pink-bg"></div>
             </div>
         </div>
     </div>
 </div>






<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/cookie-bar/cookiebar-latest.min.js?theme=white&tracking=1&always=1&top=1&hideDetailsBtn=1"></script>
    
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

    <?php wp_footer(); ?>

    <script>
        const mySiema = new Siema({
            perPage: {
                800: 2, // 2 items for viewport wider than 800px
                1240: 3 // 3 items for viewport wider than 1240px
            },
            loop: true
        });
        document.querySelector('.prev').addEventListener('click', () => mySiema.prev());
        document.querySelector('.next').addEventListener('click', () => mySiema.next());
    </script> 

    <script>
        /* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
        function openNav() {
            document.getElementById("Sidenav").style.width = "250px";
        }

        /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
        function closeNav() {
            document.getElementById("Sidenav").style.width = "0";
        }
    </script>
</body>
</html>