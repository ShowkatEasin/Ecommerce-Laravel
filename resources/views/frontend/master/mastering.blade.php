@include('frontend.includes.header')
@include('frontend.includes.css')

<!-- body_wrap - start -->
    <div class="body_wrap">
        
        <!-- backtotop - start -->
        <div class="backtotop">
            <a href="#" class="scroll">
                <i class="far fa-arrow-up"></i>
            </a>
        </div>
        <!-- backtotop - end -->
        <!-- preloader - start -->
        <div id="preloader"></div>
        <!-- preloader - end -->

         <!-- header_section - start
        ================================================== -->
        @include('frontend.includes.mainheader')
      
        <!-- header_section - end
        ================================================== -->
        
        <!-- main body - start
        ================================================== -->
        <main>

             <!-- sidebar cart - end
            ================================================== -->
            @include('frontend.includes.card')      
            <!-- sidebar cart - end
            ================================================== -->

             <!-- product quick view modal - start
            ================================================== -->

            @include('frontend.includes.quickview')

            <!-- product quick view modal - end
            ================================================== -->

               <!-- slider_section - start
            ================================================== -->
 
            @include('frontend.includes.slider')

            <!-- slider_section - end
            ================================================== -->
            
            @include('frontend.includes.policy')


            @include('frontend.includes.productsidebar')

            @include('frontend.includes.promotion')
            
            <!-- new_arrivals_section - start
            ================================================== -->

            @include('frontend.includes.newarrivals')
           
            <!-- brand_section - start
            ================================================== -->
            @include('frontend.includes.brand')
            <!-- brand_section - end
            ================================================== -->
            
            <!-- viewed_products_section - start
            ================================================== -->
            @include('frontend.includes.viewproduct')
            <!-- viewed_products_section - end
            ================================================== -->
            
            <!-- newsletter_section - start
            ================================================== -->
            @include('frontend.includes.subscribe')
            <!-- newsletter_section - end
            ================================================== -->
        
        </main>
        <!-- main body - end
        ================================================== -->
        
        <!-- footer_section - start
        ================================================== -->

        @include('frontend.includes.footer')
       
        <!-- footer_section - end
        ================================================== -->

    </div>
    <!-- body_wrap - end -->

    @include('frontend.includes.js')

    
</body>
</html>